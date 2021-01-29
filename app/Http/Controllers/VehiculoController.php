<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;
use App\Repositories\VehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
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

        return view('vehiculos.index')
            ->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new Vehiculo.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehiculos.create');
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

        Flash::success(__('messages.saved', ['model' => __('models/vehiculos.singular')]));

        return redirect(route('vehiculos.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/vehiculos.singular')]));

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.show')->with('vehiculo', $vehiculo);
    }

    /**
     * Show the form for editing the specified Vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vehiculos.singular')]));

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.edit')->with('vehiculo', $vehiculo);
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
            Flash::error(__('messages.not_found', ['model' => __('models/vehiculos.singular')]));

            return redirect(route('vehiculos.index'));
        }

        $vehiculo = $this->vehiculoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/vehiculos.singular')]));

        return redirect(route('vehiculos.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/vehiculos.singular')]));

            return redirect(route('vehiculos.index'));
        }

        $this->vehiculoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/vehiculos.singular')]));

        return redirect(route('vehiculos.index'));
    }
}
