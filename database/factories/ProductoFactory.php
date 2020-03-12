<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'precio'=> $faker->randomFloat($nbMaxDecimals = 9, $min = 0000000.00, $max = 9999999.99),
        'descuento'=> $faker->numberBetween($min = 0, $max = 100),
        'stock' => $faker->numberBetween($min = 0, $max = 999),
        'marca_id' => $faker->randomDigit,
        'categoria_id' => $faker->randomDigit

    ];
});
