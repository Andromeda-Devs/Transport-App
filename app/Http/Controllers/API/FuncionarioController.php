<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Repositories\FuncionarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class FuncionarioController extends AppBaseController
{
    /** @var  FuncionarioRepository */
    private $funcionarioRepository;

    public function __construct(FuncionarioRepository $funcionarioRepo)
    {
        $this->funcionarioRepository = $funcionarioRepo;
    }

    /**
     * Display a listing of the Funcionario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $funcionarios = $this->funcionarioRepository->all();

        return response()->json($funcionarios);
    }

    /**
     * Store a newly created Funcionario in storage.
     *
     * @param CreateFuncionarioRequest $request
     *
     * @return Response
     */
    public function store(CreateFuncionarioRequest $request)
    {
        $input = $request->all();

        $funcionario = $this->funcionarioRepository->create($input);

        return response()->json($funcionario);
    }

    /**
     * Display the specified Funcionario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funcionario = $this->funcionarioRepository->find($id);

        if (empty($funcionario)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($funcionario);
    }

    /**
     * Update the specified Funcionario in storage.
     *
     * @param int $id
     * @param UpdateFuncionarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFuncionarioRequest $request)
    {
        $funcionario = $this->funcionarioRepository->find($id);

        if (empty($funcionario)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $funcionario = $this->funcionarioRepository->update($request->all(), $id);

        return response()->json($funcionario);
    }

    /**
     * Remove the specified Funcionario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funcionario = $this->funcionarioRepository->find($id);

        if (empty($funcionario)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->funcionarioRepository->delete($id);

        return response()->json($funcionario);
    }
}
