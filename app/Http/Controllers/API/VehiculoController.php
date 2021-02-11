<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;
use App\Repositories\VehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class VehiculoController extends AppBaseController
{
    /** @var  VehiculoRepository */
    private $vehiculoRepository;

    public function __construct(VehiculoRepository $vehiculoRepo)
    {
        $this->vehiculoRepository = $vehiculoRepo;
    }

    /**
     * Display a listing of the Vehiculo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculos = $this->vehiculoRepository->all();

        return response()->json($vehiculos);
    }

    /**
     * Store a newly created Vehiculo in storage.
     *
     * @param CreateVehiculoRequest $request
     *
     * @return Response
     */
    public function store(CreateVehiculoRequest $request)
    {
        $input = $request->all();

        $vehiculo = $this->vehiculoRepository->create($input);

        return response()->json($vehiculo);
    }

    /**
     * Display the specified Vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($vehiculo);
    }

    /**
     * Update the specified Vehiculo in storage.
     *
     * @param int $id
     * @param UpdateVehiculoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVehiculoRequest $request)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ]);
        }

        $vehiculo = $this->vehiculoRepository->update($request->all(), $id);

        return response()->json($vehiculo);
    }

    /**
     * Remove the specified Vehiculo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            return response()->json([
                'ERROR' => 'not found'
            ]);
        }

        $this->vehiculoRepository->delete($id);

        return response()->json($vehiculo);
    }
}
