<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TurnoChofer;
use Faker\Generator as Faker;

$factory->define(TurnoChofer::class, function (Faker $faker) {

    return [
        'programacion_id' => $faker->word,
        'turno' => $faker->word,
        'chofer_id' => $faker->word,
        'viaje' => $faker->word,
        'Aprobado_id' => $faker->word,
        'concentradora' => $faker->word,
        'rechazado' => $faker->word,
        'motivo' => $faker->word,
        'Gtesh001_id' => $faker->word,
        'Gtesh001' => $faker->text,
        'Gtesh002' => $faker->text,
        'Gtesh003' => $faker->text,
        'Gtesh004' => $faker->text,
        'Gtesh005' => $faker->text,
        'Gtesh006' => $faker->text,
        'Gtesh007' => $faker->text,
        'Gtesh008' => $faker->text,
        'Gtesh010' => $faker->text,
        'Gtesh012' => $faker->text,
        'Gtesh013' => $faker->text,
        'Gtesh016' => $faker->text,
        'Gtesh018' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
