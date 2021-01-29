<?php

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class CreateCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Cargo::create([
            'nombre' => 'Supervisor',
            'departamento' => 'Administrador',
            'activo' => 1,
        ]);
        $user = Cargo::create([
            'nombre' => 'Conductor',
            'departamento' => 'Operaciones',
            'activo' => 1,
        ]);
        $user = Cargo::create([
            'nombre' => 'Auxiliar',
            'departamento' => 'Operaciones',
            'activo' => 1,
        ]);
    }
}
