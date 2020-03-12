<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TipoDni;
use Faker\Generator as Faker;

$factory->define(TipoDni::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->word
    ];
});
