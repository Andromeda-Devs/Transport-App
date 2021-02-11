<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateTipoVehiculoRequest;
use App\Http\Requests\UpdateTipoVehiculoRequest;
use App\Repositories\TipoVehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class TipoVehiculoController extends AppBaseController
{
    /** @var  TipoVehiculoRepository */
    private $tipoVehiculoRepository;

    public function __construct(TipoVehiculoRepository $tipoVehiculoRepo)
    {
        $this->tipoVehiculoRepository = $tipoVehiculoRepo;
    }

    /**
     * Display a listing of the TipoVehiculo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoVehiculos = $this->tipoVehiculoRepository->all();

        return response()->json($tipoVehiculos);
    }

    /**
     * Store a newly created TipoVehiculo in storage.
     *
     * @param CreateTipoVehiculoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoVehiculoRequest $request)
    {
        $input = $request->all();

        $tipoVehiculo = $this->tipoVehiculoRepository->create($input);

        return response()->json($tipoVehiculo);
    }

    /**
     * Display the specified TipoVehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($tipoVehiculo);
    }

    /**
     * Update the specified TipoVehiculo in storage.
     *
     * @param int $id
     * @param UpdateTipoVehiculoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoVehiculoRequest $request)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $tipoVehiculo = $this->tipoVehiculoRepository->update($request->all(), $id);

        return response()->json($tipoVehiculo);
    }

    /**
     * Remove the specified TipoVehiculo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->tipoVehiculoRepository->delete($id);

        return response()->json($tipoVehiculo);
    }
}
