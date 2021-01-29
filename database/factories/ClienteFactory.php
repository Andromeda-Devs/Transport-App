<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {

    return [
        'rut' => $faker->word,
        'nombre' => $faker->word,
        'giro' => $faker->word,
        'ciudad_id' => \App\Models\Ciudad::inRandomOrder()->first(),
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'email' => $faker->word,
        'nombre_contacto' => $faker->word,
        'telefono_contacto' => $faker->word,
        'email_contacto' => $faker->word,
        'activo' => $faker->boolean(),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        // 'created_by' => $faker->word,
        // 'updated_by' => $faker->word,
        // 'deleted_by' => $faker->word
    ];
});
