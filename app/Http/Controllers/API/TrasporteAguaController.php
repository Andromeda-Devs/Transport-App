<?php

namespace App\Http\Controllers\API;

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

        return response()->json($trasporteAguas);
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

        return response()->json($trasporteAgua);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($trasporteAgua);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $trasporteAgua = $this->trasporteAguaRepository->update($request->all(), $id);

        return response()->json($trasporteAgua);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->trasporteAguaRepository->delete($id);

        return response()->json($trasporteAgua);
    }
}
