<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;
use App\Repositories\DepartamentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class DepartamentoController extends AppBaseController
{
    /** @var  DepartamentoRepository */
    private $departamentoRepository;

    public function __construct(DepartamentoRepository $departamentoRepo)
    {
        $this->departamentoRepository = $departamentoRepo;
    }

    /**
     * Display a listing of the Departamento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $departamentos = $this->departamentoRepository->all();

        return response()->json($departamentos);
    }

    /**
     * Store a newly created Departamento in storage.
     *
     * @param CreateDepartamentoRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartamentoRequest $request)
    {
        $input = $request->all();

        $departamento = $this->departamentoRepository->create($input);

        return response()->json($departamento);
    }

    /**
     * Display the specified Departamento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departamento = $this->departamentoRepository->find($id);

        if (empty($departamento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($departamento);
    }

    /**
     * Update the specified Departamento in storage.
     *
     * @param int $id
     * @param UpdateDepartamentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartamentoRequest $request)
    {
        $departamento = $this->departamentoRepository->find($id);

        if (empty($departamento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $departamento = $this->departamentoRepository->update($request->all(), $id);

        return response()->json($departamento);
    }

    /**
     * Remove the specified Departamento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departamento = $this->departamentoRepository->find($id);

        if (empty($departamento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->departamentoRepository->delete($id);

        return response()->json($departamento);
    }
}
