<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateGtesh001Request;
use App\Http\Requests\UpdateGtesh001Request;
use App\Repositories\Gtesh001Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class Gtesh001Controller extends AppBaseController
{
    /** @var  Gtesh001Repository */
    private $gtesh001Repository;

    public function __construct(Gtesh001Repository $gtesh001Repo)
    {
        $this->gtesh001Repository = $gtesh001Repo;
    }

    /**
     * Display a listing of the Gtesh001.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gtesh001s = $this->gtesh001Repository->all();

        return response()->json($gtesh001s);
    }

    /**
     * Store a newly created Gtesh001 in storage.
     *
     * @param CreateGtesh001Request $request
     *
     * @return Response
     */
    public function store(CreateGtesh001Request $request)
    {
        $input = $request->all();

        $gtesh001 = $this->gtesh001Repository->create($input);

        return response()->json($gtesh001);
    }

    /**
     * Display the specified Gtesh001.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($gtesh001);
    }

    /**
     * Update the specified Gtesh001 in storage.
     *
     * @param int $id
     * @param UpdateGtesh001Request $request
     *
     * @return Response
     */
    public function update($id, UpdateGtesh001Request $request)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $gtesh001 = $this->gtesh001Repository->update($request->all(), $id);
        
        return response()->json($gtesh001);
    }

    /**
     * Remove the specified Gtesh001 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gtesh001 = $this->gtesh001Repository->find($id);

        if (empty($gtesh001)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->gtesh001Repository->delete($id);

        return response()->json($gtesh001);
    }
}
