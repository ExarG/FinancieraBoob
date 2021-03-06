<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pay;
use Faker\Generator as Faker;

$factory->define(Pay::class, function (Faker $faker) {
    return [
        'client'    => $faker->name,
        'payment'   => $faker->latitude,
        'quantity'  => $faker->longitude,
    ];
});
