<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTurnoAuxiliarRequest;
use App\Http\Requests\UpdateTurnoAuxiliarRequest;
use App\Repositories\TurnoAuxiliarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\TurnoAuxiliar;
use App\Models\Documento;
use App\User;
use Auth;

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
        $turnoAuxiliars = [];

        if ($user->hasRole('auxiliar')) {
            $turnoAuxiliars = TurnoAuxiliar::where("auxiliar_id", auth()->user()->id)->get();
        } else {
            $turnoAuxiliars = TurnoAuxiliar::all();
        }

        $turnoAuxiliars = $turnoAuxiliars->reverse();

        return view('turno_auxiliars.index')
            ->with('turnoAuxiliars', $turnoAuxiliars);
    }

    /**
     * Show the form for creating a new TurnoAuxiliar.
     *
     * @return Response
     */
    public function create()
    {
        return view('turno_auxiliars.create');
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

        Flash::success(__('messages.saved', ['model' => __('models/turnoAuxiliars.singular')]));

        return redirect(route('turnoAuxiliars.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/turnoAuxiliars.singular')]));

            return redirect(route('turnoAuxiliars.index'));
        }

        return view('turno_auxiliars.show')->with('turnoAuxiliar', $turnoAuxiliar);
    }

    /**
     * Show the form for editing the specified TurnoAuxiliar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turnoAuxiliar = $this->turnoAuxiliarRepository->find($id);

        $documentos = Documento::all();

        if (empty($turnoAuxiliar)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoAuxiliars.singular')]));

            return redirect(route('turnoAuxiliars.index'));
        }

        return view('turno_auxiliars.edit', compact(['documentos']))->with('turnoAuxiliar', $turnoAuxiliar);
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
            Flash::error(__('messages.not_found', ['model' => __('models/turnoAuxiliars.singular')]));

            return redirect(route('turnoAuxiliars.index'));
        }

        $turnoAuxiliar = $this->turnoAuxiliarRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turnoAuxiliars.singular')]));

        return redirect(route('turnoAuxiliars.index'));
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
            Flash::error(__('messages.not_found', ['model' => __('models/turnoAuxiliars.singular')]));

            return redirect(route('turnoAuxiliars.index'));
        }

        $this->turnoAuxiliarRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turnoAuxiliars.singular')]));

        return redirect(route('turnoAuxiliars.index'));
    }

    public function enviar($id)
    {
        $turnoAuxiliar = TurnoAuxiliar::where("id", $id)->first();

        $turnoAuxiliar->update(["enviado" => 1]);

        Flash::success('Documentos enviados correctamente.');

        return view('turno_auxiliars.edit')->with('turnoAuxiliar', $turnoAuxiliar);
    }
}
