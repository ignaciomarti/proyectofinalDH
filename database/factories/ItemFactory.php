<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'producto_id' => $faker->randomDigit,
        'compra_id' => $faker->randomDigit,
        'productos_cantidad' => $faker->randomDigit
    ];
});
