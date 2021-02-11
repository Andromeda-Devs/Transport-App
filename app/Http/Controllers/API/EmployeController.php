<?php

namespace App\Http\Controllers\API;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EmployeRepository;
use App\Http\Requests\CreateEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;

class EmployeController extends Controller
{
    /** @var $EmployeRepository EmployeRepository */
    private $employeRepository;

    public function __construct(EmployeRepository $employeRepo)
    {
        $this->employeRepository = $employeRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $user = \App\User::where("email", "supervisor@mail.com")->with("roles")->get();
        // $roles = Role::all();
        // $permissions = Role::findByName('supervisor')->permissions;
        // $user = User::all();
        // return response()->json($permissions);
        $employe = $this->employeRepository->all();

        return response()->json($employe);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateEmployeRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $employe = $this->employeRepository->create($input);
        return response()->json($employe);
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($employe);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateEmployeRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }
        $employe = $this->employeRepository->update($request->all(), $id);

        return response()->json($employe);
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->employeRepository->delete($id);

        return response()->json($employe);
    }
}
