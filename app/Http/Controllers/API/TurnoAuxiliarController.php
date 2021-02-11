<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateTurnoAuxiliarRequest;
use App\Http\Requests\UpdateTurnoAuxiliarRequest;
use App\Repositories\TurnoAuxiliarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use App\Models\TurnoAuxiliar;
use App\User;

class TurnoAuxiliarController extends AppBaseController
{
    /** @var  TurnoAuxiliarRepository */
    private $turnoAuxiliarRepository;

    public function __construct(TurnoAuxiliarRepository $turnoAuxiliarRepo)
    {
        $this->turnoAuxiliarRepository = $turnoAuxiliarRepo;
    }

    /**
     * Display a listing of the TurnoAuxiliar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = User::where("id", auth()->user()->id)->with("roles")->first();
        $turnoAuxiliars = $this->turnoAuxiliarRepository->all();

        if ($user->hasRole('auxiliar')) {
            $turnoAuxiliars = $turnoAuxiliars->where("auxiliar_id", auth()->user()->id);
        }

        $turnoAuxiliars = $turnoAuxiliars->reverse();

        return response()->json($turnoAuxiliars);
    }

    /**
     * Store a newly created TurnoAuxiliar in storage.
     *
     * @param CreateTurnoAuxiliarRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $turnoAuxiliar = $this->turnoAuxiliarRepository->create($input);

        return response()->json($turnoAuxiliar);
    }

    /**
     * Display the specified TurnoAuxiliar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turnoAuxiliar = $this->turnoAuxiliarRepository->find($id);

        if (empty($turnoAuxiliar)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($turnoAuxiliar);
    }

    /**
     * Update the specified TurnoAuxiliar in storage.
     *
     * @param int $id
     * @param UpdateTurnoAuxiliarRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $turnoAuxiliar = $this->turnoAuxiliarRepository->find($id);

        if (empty($turnoAuxiliar)) {
            return response()->json([
                'ERROR' => 'not found'
            ]);
        }

        $turnoAuxiliar = $this->turnoAuxiliarRepository->update($request->all(), $id);

        return response()->json($turnoAuxiliar);
    }

    /**
     * Remove the specified TurnoAuxiliar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turnoAuxiliar = $this->turnoAuxiliarRepository->find($id);

        if (empty($turnoAuxiliar)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->turnoAuxiliarRepository->delete($id);

        return response()->json($turnoAuxiliar);
    }

    public function enviar($id)
    {
        $turnoAuxiliar = TurnoAuxiliar::where("id", $id)->first();

        $turnoAuxiliar->update(["enviado" => 1]);

        return response()->json($turnoAuxiliar);
    }
}
