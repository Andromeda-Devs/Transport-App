<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Requerimiento;
use Faker\Generator as Faker;

$factory->define(Requerimiento::class, function (Faker $faker) {

    return [
        'fecha_programada' => $faker->word,
        'codigo' => $faker->word,
        'nombre_cliente' => $faker->word,
        'cantidad_de_equipos' => $faker->word,
        'ducto' => $faker->word,
        'observaciones' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
