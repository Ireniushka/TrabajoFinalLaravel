<?php

use Faker\Generator as Faker;

$factory->define(App\Visit::class, function (Faker $faker) {
    return [
        'tracing_id' => \App\Tracing::all()->ramdon()->id,
        'enterprise_id' =>\App\Enterprise::all()->ramdon()->id,
        'date' => $faker->date,
        'kms' => $faker->floatval, //?
    ];
});
