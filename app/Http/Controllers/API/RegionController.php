<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Repositories\RegionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class RegionController extends AppBaseController
{
    /** @var  RegionRepository */
    private $regionRepository;

    public function __construct(RegionRepository $regionRepo)
    {
        $this->regionRepository = $regionRepo;
    }

    /**
     * Display a listing of the Region.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $regions = $this->regionRepository->all();

        return response()->json($regions);
    }

    /**
     * Store a newly created Region in storage.
     *
     * @param CreateRegionRequest $request
     *
     * @return Response
     */
    public function store(CreateRegionRequest $request)
    {
        $input = $request->all();

        $region = $this->regionRepository->create($input);

        return response()->json($region);
    }

    /**
     * Display the specified Region.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($region);
    }

    /**
     * Update the specified Region in storage.
     *
     * @param int $id
     * @param UpdateRegionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegionRequest $request)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            return response()->json([
                'ERROR' =>  'not found'
            ], 404);
        }

        $region = $this->regionRepository->update($request->all(), $id);

        return response()->json($region);
    }

    /**
     * Remove the specified Region from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->regionRepository->delete($id);

        return response()->json($region);
    }
}
