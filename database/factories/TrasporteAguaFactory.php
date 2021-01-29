<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TrasporteAgua;
use Faker\Generator as Faker;

$factory->define(TrasporteAgua::class, function (Faker $faker) {

    return [
        'nro_guia' => $faker->word,
        'fecha_inicio' => $faker->word,
        'odometro_inicio' => $faker->word,
        'lts_combustible' => $faker->word,
        'medidor_inicio' => $faker->word,
        'medidor_final' => $faker->word,
        'nivel_cloro_inicio' => $faker->word,
        'conductor' => $faker->word,
        'auxiliar' => $faker->word,
        'origen' => $faker->word,
        'destino' => $faker->word,
        'camion' => $faker->word,
        'acoplado' => $faker->word,
        'fecha_final' => $faker->word,
        'odometro_final' => $faker->word,
        'nivel_cloro_final' => $faker->word,
        'desviacion_observacion' => $faker->text,
        'medidas_adoptadas' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
