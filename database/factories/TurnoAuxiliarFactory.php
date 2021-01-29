<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TurnoAuxiliar;
use Faker\Generator as Faker;

$factory->define(TurnoAuxiliar::class, function (Faker $faker) {

    return [
        'programacion_id' => $faker->word,
        'turno' => $faker->word,
        'auxiliar_id' => $faker->word,
        'viaje' => $faker->word,
        'Aprobado_id' => $faker->word,
        'concentradora' => $faker->word,
        'rechazado' => $faker->word,
        'motivo' => $faker->word,
        'Gtesh010' => $faker->text,
        'Gtesh011' => $faker->text,
        'Gtesh012' => $faker->text,
        'Gtesh018' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
