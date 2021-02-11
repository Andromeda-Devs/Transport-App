<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateRequerimientoRequest;
use App\Http\Requests\UpdateRequerimientoRequest;
use App\Repositories\RequerimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
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
        $requerimientos = $this->requerimientoRepository->all();

        switch ($request->programado_filter) {
            case 'no_programado':
                $requerimientos = $requerimientos->where('programado', false);
                break;

            case 'programado':
                $requerimientos = $requerimientos->where('programado', true);
                break;

            default:
                break;
        }
        return response()->json($requerimientos);
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

        return response()->json($requerimiento);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($requerimiento);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $requerimiento = $this->requerimientoRepository->update($request->all(), $id);

        return response()->json($requerimiento);
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
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->requerimientoRepository->delete($id);

        return response()->json($requerimiento);
    }
}
