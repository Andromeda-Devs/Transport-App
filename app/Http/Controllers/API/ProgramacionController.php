<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateProgramacionRequest;
use App\Http\Requests\UpdateProgramacionRequest;
use App\Repositories\ProgramacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use App\Models\TurnoChofer;
use App\Models\TurnoAuxiliar;
use App\Models\TurnoSupervisor;
use App\Models\Gtesh001;
use App\Models\Requerimiento;

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
        if ($request->code) $programacions = $programacions->where('id', $request->code);
        return response()->json($programacions);
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

        return response()->json($programacion);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($programacion);
    }

    public function aprobar(Request $request)
    {
        $programacion = $this->programacionRepository->find($request->id);
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

        return response()->json($programacion);
    }

    public function noAprobar(Request $request)
    {
        $programacion = $this->programacionRepository->find($request->id);
        $programacion->update(["aprobado" => false]);

        return response()->json($programacion);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $programacion = $this->programacionRepository->update($request->all(), $id);

        return response()->json($programacion);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->programacionRepository->delete($id);

        return response()->json($programacion);
    }
}
