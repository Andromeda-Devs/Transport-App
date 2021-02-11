<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateTurnoChoferRequest;
use App\Http\Requests\UpdateTurnoChoferRequest;
use App\Repositories\TurnoChoferRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use App\Models\TurnoChofer;
use App\User;

class TurnoChoferController extends AppBaseController
{
    /** @var  TurnoChoferRepository */
    private $turnoChoferRepository;

    public function __construct(TurnoChoferRepository $turnoChoferRepo)
    {
        $this->turnoChoferRepository = $turnoChoferRepo;
    }

    /**
     * Display a listing of the TurnoChofer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = User::where("id", auth()->user()->id)->with("roles")->first();
        $turnoChofers = $this->turnoChoferRepository->all();

        if ($user->hasRole('conductor')) {
            $turnoChofers = $turnoChofers->where("chofer_id", auth()->user()->id);
        }

        $turnoChofers = $turnoChofers->reverse();

        return response()->json($turnoChofers);
    }

    /**
     * Store a newly created TurnoChofer in storage.
     *
     * @param CreateTurnoChoferRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $turnoChofer = $this->turnoChoferRepository->create($input);

        return response()->json($turnoChofer);
    }

    /**
     * Display the specified TurnoChofer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($turnoChofer);
    }

    /**
     * Update the specified TurnoChofer in storage.
     *
     * @param int $id
     * @param UpdateTurnoChoferRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $turnoChofer = $this->turnoChoferRepository->update($request->all(), $id);

        return response()->json($turnoChofer);
    }

    /**
     * Remove the specified TurnoChofer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->turnoChoferRepository->delete($id);

        return response()->json($turnoChofer);
    }

    public function enviar($id)
    {
        $turnoChofer = TurnoChofer::where("id", $id)->first();

        $turnoChofer->update(["enviado" => 1]);

        $programacion = $turnoChofer->programacion;

        return response()->json($turnoChofer);
    }
}
