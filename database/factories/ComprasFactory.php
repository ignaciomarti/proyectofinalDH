<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compras;
use Faker\Generator as Faker;

$factory->define(Compras::class, function (Faker $faker) {
    return [
        'usuario_id' => $faker->randomDigit,
        'items_id' => $faker->randomDigit,
        'comprobante_id' => $faker->randomDigit,
        'estado_venta' => $faker->word,
        'valoracion_venta' => $faker->randomDigit,
    ];
});
