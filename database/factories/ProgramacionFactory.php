<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Programacion;
use Faker\Generator as Faker;

$factory->define(Programacion::class, function (Faker $faker) {

    return [
        'requerimiento_id' => $faker->word,
        'equipo' => $faker->word,
        'aprobado' => $faker->word,
        'conductor' => $faker->word,
        'auxiliar' => $faker->word,
        'turno_chofer_id' => $faker->word,
        'turno_auxiliar_id' => $faker->word,
        'turno_supervisor_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
