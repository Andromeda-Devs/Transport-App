<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateTurnoSupervisorRequest;
use App\Http\Requests\UpdateTurnoSupervisorRequest;
use App\Repositories\TurnoSupervisorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
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

        return response()->json($turnoSupervisors);
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

        return response()->json($turnoSupervisor);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json([
            $turnoSupervisor,
            $turnoChofer,
            $turnoAuxiliar,
            $programacion
        ]);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $turnoSupervisor = $this->turnoSupervisorRepository->update($request->all(), $id);

        return response()->json($turnoSupervisor);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->turnoSupervisorRepository->delete($id);

        return response()->json($turnoSupervisor);
    }

    public function turnoChoferDocument1($id)
    {
        $turnoChofer = TurnoChofer::where("id", $id)->first();

        if (empty($turnoChofer)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $programacion = $turnoChofer->programacion;

        $gtesh001 = Gtesh001::where("programacion_id" , $programacion->id)->first();

        return response()->json([
            $turnoChofer,
            $programacion,
            $gtesh001
        ]);
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

        return response()->json($turnoSupervisor);
    }
    
    public function rechazar($id)
    {
        $turnoSupervisor = TurnoSupervisor::where("id", $id)->first();

        $turnoSupervisor->update(["autorizado" => 0]);

        return response()->json($turnoSupervisor);
    }

}
