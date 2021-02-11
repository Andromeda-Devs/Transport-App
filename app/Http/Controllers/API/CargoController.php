<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\CargoRepository;
use App\Http\Requests\CreateCargoRequest;
use App\Http\Requests\UpdateCargoRequest;

class CargoController extends Controller
{
     /** @var  CargoRepository */
    private $cargoRepository;

    public function __construct(CargoRepository $cargoRepo)
    {
        $this->cargoRepository = $cargoRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = $this->cargoRepository->all();

        return response()->json($cargos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCargoRequest $request)
    {
        $input = $request->all();

        $cargo = $this->cargoRepository->create($input);

        return response()->json($cargo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = $this->cargoRepository->find($id);

        if (!$cargo) return response()->json(['ERROR' => 'not found'], 404);
        return response()->json($cargo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateCargoRequest $request)
    {
        $cargo = $this->cargoRepository->find($id);

        if (!$cargo) return response()->json([
            'ERROR' => 'not found'
        ], 404);

        $cargo = $this->cargoRepository->update($request->all(), $id);

        return response()->json($cargo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = $this->cargoRepository->find($id);

        if (!$cargo) return response()->json([
            'ERROR' => 'not found'
        ], 404);

        $this->cargoRepository->delete($id);

        return response()->json($cargo);
    }
}
