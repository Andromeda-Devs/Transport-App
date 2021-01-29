<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDuctoRequest;
use App\Http\Requests\UpdateDuctoRequest;
use App\Repositories\DuctoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DuctoController extends AppBaseController
{
    /** @var  DuctoRepository */
    private $ductoRepository;

    public function __construct(DuctoRepository $ductoRepo)
    {
        $this->ductoRepository = $ductoRepo;
    }

    /**
     * Display a listing of the Ducto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ductos = $this->ductoRepository->all();

        return view('ductos.index')
            ->with('ductos', $ductos);
    }

    /**
     * Show the form for creating a new Ducto.
     *
     * @return Response
     */
    public function create()
    {
        return view('ductos.create');
    }

    /**
     * Store a newly created Ducto in storage.
     *
     * @param CreateDuctoRequest $request
     *
     * @return Response
     */
    public function store(CreateDuctoRequest $request)
    {
        $input = $request->all();

        $ducto = $this->ductoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ductos.singular')]));

        return redirect(route('ductos.index'));
    }

    /**
     * Display the specified Ducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ductos.singular')]));

            return redirect(route('ductos.index'));
        }

        return view('ductos.show')->with('ducto', $ducto);
    }

    /**
     * Show the form for editing the specified Ducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ductos.singular')]));

            return redirect(route('ductos.index'));
        }

        return view('ductos.edit')->with('ducto', $ducto);
    }

    /**
     * Update the specified Ducto in storage.
     *
     * @param int $id
     * @param UpdateDuctoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDuctoRequest $request)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ductos.singular')]));

            return redirect(route('ductos.index'));
        }

        $ducto = $this->ductoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ductos.singular')]));

        return redirect(route('ductos.index'));
    }

    /**
     * Remove the specified Ducto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ductos.singular')]));

            return redirect(route('ductos.index'));
        }

        $this->ductoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ductos.singular')]));

        return redirect(route('ductos.index'));
    }
}
