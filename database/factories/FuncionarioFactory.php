<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {

    return [
        'rut' => $faker->word,
        'nombre' => $faker->word,
        'nacionalidad' => $faker->word,
        'sexo' => $faker->randomDigitNotNull,
        'departamento' => $faker->word,
        'cargo_id' => $faker->word,
        'estado' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
