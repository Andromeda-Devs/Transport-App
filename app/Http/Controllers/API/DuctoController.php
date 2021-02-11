<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateDuctoRequest;
use App\Http\Requests\UpdateDuctoRequest;
use App\Repositories\DuctoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class DuctoController extends AppBaseController
{
    /** @var  DuctoRepository */
    private $ductoRepository;

    public function __construct(DuctoRepository $ductoRepo)
    {
        $this->ductoRepository = $ductoRepo;
    }

    /**
     * Display a listing of the Ducto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ductos = $this->ductoRepository->all();

        return response()->json($ductos);
    }

    /**
     * Store a newly created Ducto in storage.
     *
     * @param CreateDuctoRequest $request
     *
     * @return Response
     */
    public function store(CreateDuctoRequest $request)
    {
        $input = $request->all();

        $ducto = $this->ductoRepository->create($input);

        return response()->json($ducto);
    }

    /**
     * Display the specified Ducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($ducto);
    }

    /**
     * Update the specified Ducto in storage.
     *
     * @param int $id
     * @param UpdateDuctoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDuctoRequest $request)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $ducto = $this->ductoRepository->update($request->all(), $id);

        return response()->json($ducto);
    }

    /**
     * Remove the specified Ducto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ducto = $this->ductoRepository->find($id);

        if (empty($ducto)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->ductoRepository->delete($id);

        return response()->json($ducto);
    }
}
