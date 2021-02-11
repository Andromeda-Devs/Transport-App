<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use App\Repositories\CiudadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class CiudadController extends AppBaseController
{
    /** @var  CiudadRepository */
    private $ciudadRepository;

    public function __construct(CiudadRepository $ciudadRepo)
    {
        $this->ciudadRepository = $ciudadRepo;
    }

    /**
     * Display a listing of the Ciudad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ciudads = $this->ciudadRepository->all();

        return response()->json($ciudads);
    }

    /**
     * Store a newly created Ciudad in storage.
     *
     * @param CreateCiudadRequest $request
     *
     * @return Response
     */
    public function store(CreateCiudadRequest $request)
    {
        $input = $request->all();

        $ciudad = $this->ciudadRepository->create($input);

        return response()->json($ciudad);
    }

    /**
     * Display the specified Ciudad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($ciudad);
    }

    /**
     * Update the specified Ciudad in storage.
     *
     * @param int $id
     * @param UpdateCiudadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCiudadRequest $request)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $ciudad = $this->ciudadRepository->update($request->all(), $id);

        return response()->json($ciudad);
    }

    /**
     * Remove the specified Ciudad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->ciudadRepository->delete($id);

        return response()->json($ciudad);
    }
}
