<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ComprobanteVenta;
use Faker\Generator as Faker;

$factory->define(ComprobanteVenta::class, function (Faker $faker) {
    return [
        'total'=> $faker->randomFloat($nbMaxDecimals = 9, $min = 0000000.00, $max = 9999999.99),
        'subtotal'=> $faker->randomFloat($nbMaxDecimals = 9, $min = 0000000.00, $max = 9999999.99)
    ];
});
