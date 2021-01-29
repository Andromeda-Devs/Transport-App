<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGtesh001Request;
use App\Http\Requests\UpdateGtesh001Request;
use App\Repositories\Gtesh001Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Gtesh001;
use Flash;
use Response;
use App\Models\Documento;

class Gtesh001Controller extends AppBaseController
{
    /** @var  Gtesh001Repository */
    private $gtesh001Repository;

    public function __construct(Gtesh001Repository $gtesh001Repo)
    {
        $this->gtesh001Repository = $gtesh001Repo;
    }

    /**
     * Display a listing of the Gtesh001.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gtesh001s = $this->gtesh001Repository->all();

        return view('gtesh001s.index')
            ->with('gtesh001s', $gtesh001s);
    }

    /**
     * Show the form for creating a new Gtesh001.
     *
     * @return Response
     */
    public function create()
    {
        return view('gtesh001s.create');
    }

    /**
     * Store a newly created Gtesh001 in storage.
     *
     * @param CreateGtesh001Request $request
     *
     * @return Response
     */
    public function store(CreateGtesh001Request $request)
    {
        $input = $request->all();

        $gtesh001 = $this->gtesh001Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/gtesh001s.singular')]));

        return redirect(route('gtesh001s.index'));
    }

    /**
     * Display the specified Gtesh001.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gtesh001s.singular')]));

            return redirect(route('gtesh001s.index'));
        }

        return view('gtesh001s.show')->with('gtesh001', $gtesh001);
    }

    /**
     * Show the form for editing the specified Gtesh001.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gtesh001 = Gtesh001::where("id", $id)->first();

        $programacion = $gtesh001->programacion;
        $gtesh001->fecha_format = date('d-m-Y', strtotime($gtesh001->fecha));

        if (empty($gtesh001)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gtesh001s.singular')]));

            return redirect(route('gtesh001s.index'));
        }

        return view('gtesh001s.edit', compact('programacion'))->with('gtesh001', $gtesh001);
    }

    /**
     * Update the specified Gtesh001 in storage.
     *
     * @param int $id
     * @param UpdateGtesh001Request $request
     *
     * @return Response
     */
    public function update($id, UpdateGtesh001Request $request)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gtesh001s.singular')]));

            return redirect(route('turno_chofers.index'));
        }

        $programacion = $gtesh001->programacion;
        $turnoChofer = $programacion->turnoChofer;

        $gtesh001 = $this->gtesh001Repository->update($request->all(), $id);
        $documentos = Documento::all();

        Flash::success(__('messages.updated', ['model' => __('models/gtesh001s.singular')]));

        return view('turno_chofers.edit', compact('programacion', 'documentos'))->with('turnoChofer', $turnoChofer);
    }

    /**
     * Remove the specified Gtesh001 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gtesh001s.singular')]));

            return redirect(route('gtesh001s.index'));
        }

        $this->gtesh001Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/gtesh001s.singular')]));

        return redirect(route('gtesh001s.index'));
    }
}
