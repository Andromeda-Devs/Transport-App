<?php

namespace App\Http\Controllers\API;

use Response;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;

class UserController extends AppBaseController
{
    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
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
        $users = $this->userRepository->all();

        return response()->json($users);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = $this->userRepository->create($input);
        $user->roles()->sync($request->get('roles'));

        return response()->json($user);
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
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }
        $input =  $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $user = $this->userRepository->update($input, $id);
        $user->roles()->sync($request->get('roles'));

        return response()->json($user);
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
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->userRepository->delete($id);

        return response()->json($user);
    }
}
