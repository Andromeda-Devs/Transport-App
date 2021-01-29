<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrasporteAguaRequest;
use App\Http\Requests\UpdateTrasporteAguaRequest;
use App\Repositories\TrasporteAguaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrasporteAguaController extends AppBaseController
{
    /** @var  TrasporteAguaRepository */
    private $trasporteAguaRepository;

    public function __construct(TrasporteAguaRepository $trasporteAguaRepo)
    {
        $this->trasporteAguaRepository = $trasporteAguaRepo;
    }

    /**
     * Display a listing of the TrasporteAgua.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trasporteAguas = $this->trasporteAguaRepository->all();

        return view('trasporte_aguas.index')
            ->with('trasporteAguas', $trasporteAguas);
    }

    /**
     * Show the form for creating a new TrasporteAgua.
     *
     * @return Response
     */
    public function create()
    {
        return view('trasporte_aguas.create');
    }

    /**
     * Store a newly created TrasporteAgua in storage.
     *
     * @param CreateTrasporteAguaRequest $request
     *
     * @return Response
     */
    public function store(CreateTrasporteAguaRequest $request)
    {
        $input = $request->all();

        $trasporteAgua = $this->trasporteAguaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/trasporteAguas.singular')]));

        return redirect(route('trasporteAguas.index'));
    }

    /**
     * Display the specified TrasporteAgua.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trasporteAgua = $this->trasporteAguaRepository->find($id);

        if (empty($trasporteAgua)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trasporteAguas.singular')]));

            return redirect(route('trasporteAguas.index'));
        }

        return view('trasporte_aguas.show')->with('trasporteAgua', $trasporteAgua);
    }

    /**
     * Show the form for editing the specified TrasporteAgua.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trasporteAgua = $this->trasporteAguaRepository->find($id);

        if (empty($trasporteAgua)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trasporteAguas.singular')]));

            return redirect(route('trasporteAguas.index'));
        }

        return view('trasporte_aguas.edit')->with('trasporteAgua', $trasporteAgua);
    }

    /**
     * Update the specified TrasporteAgua in storage.
     *
     * @param int $id
     * @param UpdateTrasporteAguaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrasporteAguaRequest $request)
    {
        $trasporteAgua = $this->trasporteAguaRepository->find($id);

        if (empty($trasporteAgua)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trasporteAguas.singular')]));

            return redirect(route('trasporteAguas.index'));
        }

        $trasporteAgua = $this->trasporteAguaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/trasporteAguas.singular')]));

        return redirect(route('trasporteAguas.index'));
    }

    /**
     * Remove the specified TrasporteAgua from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trasporteAgua = $this->trasporteAguaRepository->find($id);

        if (empty($trasporteAgua)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trasporteAguas.singular')]));

            return redirect(route('trasporteAguas.index'));
        }

        $this->trasporteAguaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/trasporteAguas.singular')]));

        return redirect(route('trasporteAguas.index'));
    }
}
