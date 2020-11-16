<?php

use Faker\Generator as Faker;

$factory->define(App\Cycle::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'grade' => $faker->sentence,
        'year' => $faker->year($max='now'),
    ];
});
