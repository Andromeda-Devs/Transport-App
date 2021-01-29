<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequerimientoRequest;
use App\Http\Requests\UpdateRequerimientoRequest;
use App\Repositories\RequerimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RequerimientoController extends AppBaseController
{
    /** @var  RequerimientoRepository */
    private $requerimientoRepository;

    public function __construct(RequerimientoRepository $requerimientoRepo)
    {
        $this->requerimientoRepository = $requerimientoRepo;
    }

    /**
     * Display a listing of the Requerimiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $requerimientos = null;

        switch ($request->programado_filter) {
            case 'no_programado':
                $requerimientos = \App\Models\Requerimiento::where('programado', false)->get();
                break;

            case 'programado':
                $requerimientos = \App\Models\Requerimiento::where('programado', true)->get();
                break;

            default:
                $requerimientos = $this->requerimientoRepository->all();
                break;
        }
        return view('requerimientos.index')
            ->with('requerimientos', $requerimientos);
    }

    /**
     * Show the form for creating a new Requerimiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('requerimientos.create');
    }

    /**
     * Store a newly created Requerimiento in storage.
     *
     * @param CreateRequerimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateRequerimientoRequest $request)
    {
        $input = $request->all();

        $requerimiento = $this->requerimientoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/requerimientos.singular')]));

        return redirect(route('requerimientos.index'));
    }

    /**
     * Display the specified Requerimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requerimiento = $this->requerimientoRepository->find($id);

        if (empty($requerimiento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requerimientos.singular')]));

            return redirect(route('requerimientos.index'));
        }

        return view('requerimientos.show')->with('requerimiento', $requerimiento);
    }

    /**
     * Show the form for editing the specified Requerimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requerimiento = $this->requerimientoRepository->find($id);

        if (empty($requerimiento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requerimientos.singular')]));

            return redirect(route('requerimientos.index'));
        }

        return view('requerimientos.edit')->with('requerimiento', $requerimiento);
    }

    /**
     * Update the specified Requerimiento in storage.
     *
     * @param int $id
     * @param UpdateRequerimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequerimientoRequest $request)
    {
        $requerimiento = $this->requerimientoRepository->find($id);

        if (empty($requerimiento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requerimientos.singular')]));

            return redirect(route('requerimientos.index'));
        }

        $requerimiento = $this->requerimientoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/requerimientos.singular')]));

        return redirect(route('requerimientos.index'));
    }

    /**
     * Remove the specified Requerimiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requerimiento = $this->requerimientoRepository->find($id);

        if (empty($requerimiento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requerimientos.singular')]));

            return redirect(route('requerimientos.index'));
        }

        $this->requerimientoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/requerimientos.singular')]));

        return redirect(route('requerimientos.index'));
    }
}
