<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGtesh01Request;
use App\Http\Requests\UpdateGtesh01Request;
use App\Repositories\Gtesh01Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Gtesh01Controller extends AppBaseController
{
    /** @var  Gtesh01Repository */
    private $gtesh01Repository;

    public function __construct(Gtesh01Repository $gtesh01Repo)
    {
        $this->gtesh01Repository = $gtesh01Repo;
    }

    /**
     * Display a listing of the Gtesh01.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gtesh01s = $this->gtesh01Repository->all();

        return view('gtesh01s.index')
            ->with('gtesh01s', $gtesh01s);
    }

    /**
     * Show the form for creating a new Gtesh01.
     *
     * @return Response
     */
    public function create()
    {
        return view('gtesh01s.create');
    }

    /**
     * Store a newly created Gtesh01 in storage.
     *
     * @param CreateGtesh01Request $request
     *
     * @return Response
     */
    public function store(CreateGtesh01Request $request)
    {
        $input = $request->all();

        $gtesh01 = $this->gtesh01Repository->create($input);

        Flash::success('Gtesh01 Guardado exitosamente.');

        return redirect(route('gtesh01s.index'));
    }

    /**
     * Display the specified Gtesh01.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gtesh01 = $this->gtesh01Repository->find($id);

        if (empty($gtesh01)) {
            Flash::error('Gtesh01 not found');

            return redirect(route('gtesh01s.index'));
        }

        return view('gtesh01s.show')->with('gtesh01', $gtesh01);
    }

    /**
     * Show the form for editing the specified Gtesh01.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gtesh01 = $this->gtesh01Repository->find($id);

        if (empty($gtesh01)) {
            Flash::error('Gtesh01 not found');

            return redirect(route('gtesh01s.index'));
        }

        return view('gtesh01s.edit')->with('gtesh01', $gtesh01);
    }

    /**
     * Update the specified Gtesh01 in storage.
     *
     * @param int $id
     * @param UpdateGtesh01Request $request
     *
     * @return Response
     */
    public function update($id, UpdateGtesh01Request $request)
    {
        $gtesh01 = $this->gtesh01Repository->find($id);

        if (empty($gtesh01)) {
            Flash::error('Gtesh01 not found');

            return redirect(route('gtesh01s.index'));
        }

        $gtesh01 = $this->gtesh01Repository->update($request->all(), $id);

        Flash::success('Documento actualizado exitosamente.');

        return redirect(route('gtesh01s.index'));
    }

    /**
     * Remove the specified Gtesh01 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gtesh01 = $this->gtesh01Repository->find($id);

        if (empty($gtesh01)) {
            Flash::error('Gtesh01 not found');

            return redirect(route('gtesh01s.index'));
        }

        $this->gtesh01Repository->delete($id);

        Flash::success('Gtesh01 deleted successfully.');

        return redirect(route('gtesh01s.index'));
    }
}
