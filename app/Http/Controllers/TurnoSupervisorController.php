<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTurnoSupervisorRequest;
use App\Http\Requests\UpdateTurnoSupervisorRequest;
use App\Repositories\TurnoSupervisorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\TurnoChofer;
use App\Models\TurnoAuxiliar;
use App\Models\TurnoSupervisor;
use App\Models\Gtesh001;
use PDF;

class TurnoSupervisorController extends AppBaseController
{
    /** @var  TurnoSupervisorRepository */
    private $turnoSupervisorRepository;

    public function __construct(TurnoSupervisorRepository $turnoSupervisorRepo)
    {
        $this->turnoSupervisorRepository = $turnoSupervisorRepo;
    }

    /**
     * Display a listing of the TurnoSupervisor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $turnoSupervisors = $this->turnoSupervisorRepository->all();

        return view('turno_supervisors.index')
            ->with('turnoSupervisors', $turnoSupervisors);
    }

    /**
     * Show the form for creating a new TurnoSupervisor.
     *
     * @return Response
     */
    public function create()
    {
        return view('turno_supervisors.create');
    }

    /**
     * Store a newly created TurnoSupervisor in storage.
     *
     * @param CreateTurnoSupervisorRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $turnoSupervisor = $this->turnoSupervisorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/turnoSupervisors.singular')]));

        return redirect(route('turnoSupervisors.index'));
    }

    /**
     * Display the specified TurnoSupervisor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turnoSupervisor = $this->turnoSupervisorRepository->find($id);

        $turnoChofer = TurnoChofer::where("programacion_id", $turnoSupervisor->programacion->id)->first();
        $turnoAuxiliar = TurnoAuxiliar::where("programacion_id", $turnoSupervisor->programacion->id)->first();

        $programacion = $turnoChofer->programacion;

        if (empty($turnoSupervisor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoSupervisors.singular')]));

            return redirect(route('turnoSupervisors.index'));
        }

        return view('turno_supervisors.show', compact('turnoChofer', 'turnoAuxiliar', 'programacion'))->with('turnoSupervisor', $turnoSupervisor);
    }

    /**
     * Show the form for editing the specified TurnoSupervisor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turnoSupervisor = $this->turnoSupervisorRepository->find($id);

        if (empty($turnoSupervisor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoSupervisors.singular')]));

            return redirect(route('turnoSupervisors.index'));
        }

        return view('turno_supervisors.edit')->with('turnoSupervisor', $turnoSupervisor);
    }

    /**
     * Update the specified TurnoSupervisor in storage.
     *
     * @param int $id
     * @param UpdateTurnoSupervisorRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $turnoSupervisor = $this->turnoSupervisorRepository->find($id);

        if (empty($turnoSupervisor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoSupervisors.singular')]));

            return redirect(route('turnoSupervisors.index'));
        }

        $turnoSupervisor = $this->turnoSupervisorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turnoSupervisors.singular')]));

        return redirect(route('turnoSupervisors.index'));
    }

    /**
     * Remove the specified TurnoSupervisor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turnoSupervisor = $this->turnoSupervisorRepository->find($id);

        if (empty($turnoSupervisor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoSupervisors.singular')]));

            return redirect(route('turnoSupervisors.index'));
        }

        $this->turnoSupervisorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turnoSupervisors.singular')]));

        return redirect(route('turnoSupervisors.index'));
    }

    public function turnoChoferDocument1($id)
    {
        $turnoChofer = TurnoChofer::where("id", $id)->first();

        $programacion = $turnoChofer->programacion;

        $gtesh001 = Gtesh001::where("programacion_id" , $programacion->id)->first();

        if (empty($turnoChofer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoChofers.singular')]));

            return redirect(route('turnoChofers.index'));
        }

        return view('turno_supervisors.turno_chofers_edit', compact('programacion', 'gtesh001'))->with('turnoChofer', $turnoChofer);
    }

    public function downloadPDF($id, Request $request) {

        $gtesh001 = Gtesh001::find($id);
        $gtesh001->firma_chofer = $gtesh001->programacion->conductor_rel->firma;
        $gtesh001->firma_vb = $gtesh001->programacion->turnoChofer->aprobado->firma;
        view()->share('gtesh001',$gtesh001);
        $pdf = PDF::loadView('pdf/dd_001', $gtesh001);
        return $pdf->download('GT-ESH-'.$request->id.'.pdf');
        // $gtesh001 = Gtesh001::find($id);
        // view()->share('gtesh001',$gtesh001);
        // $pdf = PDF::loadView('pdf/document_001', $gtesh001);
        // return $pdf->download('GT-ESH-001.pdf');
    }

    
    public function autorizar($id)
    {
        $turnoSupervisor = TurnoSupervisor::where("id", $id)->first();

        $turnoSupervisor->update(["autorizado" => 1]);

        Flash::success('Viaje autorizado correctamente.');

        return redirect(route('turnoSupervisors.index'));
    }
    
    public function rechazar($id)
    {
        $turnoSupervisor = TurnoSupervisor::where("id", $id)->first();

        $turnoSupervisor->update(["autorizado" => 0]);

        Flash::success('Viaje autorizado correctamente.');

        return redirect(route('turnoSupervisors.index'));
    }

}
