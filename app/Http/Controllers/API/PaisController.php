<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreatePaisRequest;
use App\Http\Requests\UpdatePaisRequest;
use App\Repositories\PaisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class PaisController extends AppBaseController
{
    /** @var  PaisRepository */
    private $paisRepository;

    public function __construct(PaisRepository $paisRepo)
    {
        $this->paisRepository = $paisRepo;
    }

    /**
     * Display a listing of the Pais.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paises = $this->paisRepository->all();

        return response()->json($paises);
    }

    /**
     * Store a newly created Pais in storage.
     *
     * @param CreatePaisRequest $request
     *
     * @return Response
     */
    public function store(CreatePaisRequest $request)
    {
        $input = $request->all();

        $pais = $this->paisRepository->create($input);

        return response()->json($pais);
    }

    /**
     * Display the specified Pais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($pais);
    }

    /**
     * Update the specified Pais in storage.
     *
     * @param int $id
     * @param UpdatePaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaisRequest $request)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $pais = $this->paisRepository->update($request->all(), $id);

        return response()->json($pais);
    }

    /**
     * Remove the specified Pais from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            return response()->json([
                'ERROR' => 'not found'
            ]);
        }

        $this->paisRepository->delete($id);

        return response()->json($pais);
    }
}
