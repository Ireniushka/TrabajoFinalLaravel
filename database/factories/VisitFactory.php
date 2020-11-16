<?php

use Faker\Generator as Faker;

$factory->define(App\Visit::class, function (Faker $faker) {
    return [
        'tracing_id' => \App\Tracing::all()->random()->id,
        'enterprise_id' =>\App\Enterprise::all()->random()->id,
        'date' => $faker->date,
        'kms' => $faker->randomDigit, //?
    ];
});
