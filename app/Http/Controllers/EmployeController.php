<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use App\Repositories\EmployeRepository;
use App\Models\Employe;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Flash;
use Response;
use Hash;

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

        return view('employe.index')->with('employe', $employe);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('employe.create');
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
        Employe::create($request->all());
       
        Flash::success("employe Guardado exitosamente.");

        return redirect(route('employe.index'));
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
            return redirect(route('employe.index'));
        }

        return view('employe.show')->with('employe', $employe);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employe = $this->employeRepository->find($id);

        if (empty($employe)) {
            Flash::error('Employe not found');

            return redirect(route('employe.index'));
        }
        return view('employe.edit')->with('employe', $employe);;
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
            Flash::error('employe not found');

            return redirect(route('employe.index'));
        }
        $employe = $this->employeRepository->update($request->all(), $id);

        Flash::success('employe updated successfully.');

        return redirect(route('employe.index'));
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
            Flash::error('employe not found');

            return redirect(route('employe.index'));
        }

        $this->employeRepository->delete($id);

        Flash::success('employe deleted successfully.');

        return redirect(route('employe.index'));
    }
}
