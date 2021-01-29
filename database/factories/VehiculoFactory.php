<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehiculo;
use Faker\Generator as Faker;

$factory->define(Vehiculo::class, function (Faker $faker) {

    return [
        'patente' => $faker->word,
        'TipoVehiculo_id' => $faker->word,
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'nro_chasis' => $faker->word,
        'nro_motor' => $faker->word,
        'activo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
