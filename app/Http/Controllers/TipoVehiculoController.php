<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoVehiculoRequest;
use App\Http\Requests\UpdateTipoVehiculoRequest;
use App\Repositories\TipoVehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
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

        return view('tipo_vehiculos.index')
            ->with('tipoVehiculos', $tipoVehiculos);
    }

    /**
     * Show the form for creating a new TipoVehiculo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_vehiculos.create');
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

        Flash::success(__('messages.saved', ['model' => __('models/tipoVehiculos.singular')]));

        return redirect(route('tipoVehiculos.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/tipoVehiculos.singular')]));

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo_vehiculos.show')->with('tipoVehiculo', $tipoVehiculo);
    }

    /**
     * Show the form for editing the specified TipoVehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoVehiculos.singular')]));

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo_vehiculos.edit')->with('tipoVehiculo', $tipoVehiculo);
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
            Flash::error(__('messages.not_found', ['model' => __('models/tipoVehiculos.singular')]));

            return redirect(route('tipoVehiculos.index'));
        }

        $tipoVehiculo = $this->tipoVehiculoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tipoVehiculos.singular')]));

        return redirect(route('tipoVehiculos.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/tipoVehiculos.singular')]));

            return redirect(route('tipoVehiculos.index'));
        }

        $this->tipoVehiculoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tipoVehiculos.singular')]));

        return redirect(route('tipoVehiculos.index'));
    }
}
