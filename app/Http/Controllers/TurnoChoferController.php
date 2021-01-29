<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTurnoChoferRequest;
use App\Http\Requests\UpdateTurnoChoferRequest;
use App\Repositories\TurnoChoferRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\TurnoChofer;
use App\Models\Documento;
use App\User;
use Auth;

class TurnoChoferController extends AppBaseController
{
    /** @var  TurnoChoferRepository */
    private $turnoChoferRepository;

    public function __construct(TurnoChoferRepository $turnoChoferRepo)
    {
        $this->turnoChoferRepository = $turnoChoferRepo;
    }

    /**
     * Display a listing of the TurnoChofer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = User::where("id", auth()->user()->id)->with("roles")->first();
        $turnoChofers = [];

        if ($user->hasRole('conductor')) {
            $turnoChofers = TurnoChofer::where("chofer_id", auth()->user()->id)->get();
        } else {
            $turnoChofers = TurnoChofer::all();
        }

        $turnoChofers = $turnoChofers->reverse();

        return view('turno_chofers.index')
            ->with('turnoChofers', $turnoChofers);
    }

    /**
     * Show the form for creating a new TurnoChofer.
     *
     * @return Response
     */
    public function create()
    {
        return view('turno_chofers.create');
    }

    /**
     * Store a newly created TurnoChofer in storage.
     *
     * @param CreateTurnoChoferRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $turnoChofer = $this->turnoChoferRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/turnoChofers.singular')]));

        return redirect(route('turnoChofers.index'));
    }

    /**
     * Display the specified TurnoChofer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoChofers.singular')]));

            return redirect(route('turnoChofers.index'));
        }

        return view('turno_chofers.show')->with('turnoChofer', $turnoChofer);
    }

    /**
     * Show the form for editing the specified TurnoChofer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turnoChofer = TurnoChofer::where("id", $id)->first();

        $programacion = $turnoChofer->programacion;

        $documentos = Documento::all();

        if (empty($turnoChofer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoChofers.singular')]));

            return redirect(route('turnoChofers.index'));
        }

        return view('turno_chofers.edit', compact(['programacion', 'documentos']))->with('turnoChofer', $turnoChofer);
    }

    /**
     * Update the specified TurnoChofer in storage.
     *
     * @param int $id
     * @param UpdateTurnoChoferRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoChofers.singular')]));

            return redirect(route('turnoChofers.index'));
        }

        $turnoChofer = $this->turnoChoferRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turnoChofers.singular')]));

        return redirect(route('turnoChofers.edit', $turnoChofer->id));
    }

    /**
     * Remove the specified TurnoChofer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turnoChofer = $this->turnoChoferRepository->find($id);

        if (empty($turnoChofer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turnoChofers.singular')]));

            return redirect(route('turnoChofers.index'));
        }

        $this->turnoChoferRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turnoChofers.singular')]));

        return redirect(route('turnoChofers.index'));
    }

    public function enviar($id)
    {
        $turnoChofer = TurnoChofer::where("id", $id)->first();

        $turnoChofer->update(["enviado" => 1]);

        $programacion = $turnoChofer->programacion;

        Flash::success('Documentos enviados correctamente.');

        return view('turno_chofers.edit', compact('programacion'))->with('turnoChofer', $turnoChofer);
    }
}
