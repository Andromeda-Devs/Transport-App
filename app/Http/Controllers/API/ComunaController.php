<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateComunaRequest;
use App\Http\Requests\UpdateComunaRequest;
use App\Repositories\ComunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class ComunaController extends AppBaseController
{
    /** @var  ComunaRepository */
    private $comunaRepository;

    public function __construct(ComunaRepository $comunaRepo)
    {
        $this->comunaRepository = $comunaRepo;
    }

    /**
     * Display a listing of the Comuna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $comunas = $this->comunaRepository->all();

        return response()->json($comunas);
    }

    /**
     * Store a newly created Comuna in storage.
     *
     * @param CreateComunaRequest $request
     *
     * @return Response
     */
    public function store(CreateComunaRequest $request)
    {
        $input = $request->all();

        $comuna = $this->comunaRepository->create($input);

        return response()->json($comuna);
    }

    /**
     * Display the specified Comuna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($comuna);
    }

    /**
     * Update the specified Comuna in storage.
     *
     * @param int $id
     * @param UpdateComunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComunaRequest $request)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $comuna = $this->comunaRepository->update($request->all(), $id);

        return response()->json($comuna);
    }

    /**
     * Remove the specified Comuna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->comunaRepository->delete($id);

        return response()->json($comuna);
    }
}
