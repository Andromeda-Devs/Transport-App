<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TurnoSupervisor;
use Faker\Generator as Faker;

$factory->define(TurnoSupervisor::class, function (Faker $faker) {

    return [
        'programacion_id' => $faker->word,
        'turno' => $faker->word,
        'viaje' => $faker->word,
        'chofer_id' => $faker->word,
        'auxiliar_id' => $faker->word,
        'concentradora' => $faker->word,
        'notas' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
