<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgramacionRequest;
use App\Http\Requests\UpdateProgramacionRequest;
use App\Repositories\ProgramacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Carbon\Carbon;
use App\Models\Programacion;
use App\Models\TurnoChofer;
use App\Models\TurnoAuxiliar;
use App\Models\TurnoSupervisor;
use App\Models\Gtesh001;
use App\Models\Requerimiento;
use Auth;

class ProgramacionController extends AppBaseController
{
    /** @var  ProgramacionRepository */
    private $programacionRepository;

    public function __construct(ProgramacionRepository $programacionRepo)
    {
        $this->programacionRepository = $programacionRepo;
    }

    /**
     * Display a listing of the Programacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {   
        //que codigo mas basura el bcrro que escribio esto 
        $programacions = $this->programacionRepository->all();
        return view('programacions.index')
            ->with('programacions', $request->code ? $programacions->whereIn('id',[$request->code]) : $programacions);
    }

    /**
     * Show the form for creating a new Programacion.
     *
     * @return Response
     */
    public function create()
    {
        $requerimientos = [];
        // formato de requerimiento
        // CLIENTE - DUCTO - FECHA
        $data = \App\Models\Requerimiento::all();
        foreach ( $data->where("programado",0) as $req) {
            // formating name client
            $id = trim($req->id);
            $name = trim($req->cliente->nombre);
            // formating ducto's name
            $ducto = trim($req->ducto_rel->descripcion);
            // date of requirement
            $date = $req->created_at->format('d-m-Y');
            // storing for pluck
            $requerimientos[$req->id] = "# $id,$name, $ducto, $date";
        }

        return view('programacions.create')
            ->with([
                'requerimientos' => $requerimientos
            ]);
    }

    /**
     * M
     * Store a newly created Programacion in storage.
     *
     * @param CreateProgramacionRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramacionRequest $request)
    {
        $input = $request->all();

        $programacion = $this->programacionRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/programacions.singular')]));

        return redirect(route('programacions.index'));
    }

    /**
     * Display the specified Programacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programacion = $this->programacionRepository->find($id);

        if (empty($programacion)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programacions.singular')]));

            return redirect(route('programacions.index'));
        }

        return view('programacions.show')->with('programacion', $programacion);
    }

    /**
     * Show the form for editing the specified Programacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programacion = $this->programacionRepository->find($id);

        if (empty($programacion)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programacions.singular')]));

            return redirect(route('programacions.index'));
        }

        return view('programacions.edit')->with('programacion', $programacion);
    }

    public function aprobar(Programacion $programacion, Request $request)
    {
        // dd($programacion->id);
        TurnoChofer::create([
            "programacion_id" => $programacion->id,
            "chofer_id" => $programacion->conductor_rel->id,
            "Aprobado_id" => auth()->user()->id,
        ]);

        TurnoAuxiliar::create([
            "programacion_id" => $programacion->id,
            "auxiliar_id" => $programacion->auxiliar_rel->id,
            "Aprobado_id" => auth()->user()->id,
        ]);

        TurnoSupervisor::create([
            "programacion_id" => $programacion->id,
            'chofer_id' => $programacion->conductor_rel->id,
            'auxiliar_id' => $programacion->auxiliar_rel->id
        ]);

        Gtesh001::create([
            "programacion_id" => $programacion->id,
            "nombre_responsable" => $programacion->conductor_rel->name,
            "fono_contacto" => "00000000",
            "fecha" => Carbon::now(),
        ]);

        $programacion->update(["aprobado" => true]);

        $requerimiento = Requerimiento::whereId($programacion->requerimiento_id)->first();
        $requerimiento->update([
            "programado" => 1,
        ]);

        Flash::success('Programacion aprobada satisfacctoriamente.');

        return redirect(route('programacions.index'));
    }

    public function noAprobar(Programacion $programacion, Request $request)
    {
        $programacion->update(["aprobado" => false]);

        Flash::success('Programacion no aprobada.');

        return redirect(route('programacions.index'));
    }

    /**
     * Update the specified Programacion in storage.
     *
     * @param int $id
     * @param UpdateProgramacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramacionRequest $request)
    {
        $programacion = $this->programacionRepository->find($id);

        if (empty($programacion)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programacions.singular')]));

            return redirect(route('programacions.index'));
        }

        $programacion = $this->programacionRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/programacions.singular')]));

        return redirect(route('programacions.index'));
    }

    /**
     * Remove the specified Programacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programacion = $this->programacionRepository->find($id);

        if (empty($programacion)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programacions.singular')]));

            return redirect(route('programacions.index'));
        }

        $this->programacionRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/programacions.singular')]));

        return redirect(route('programacions.index'));
    }
}
