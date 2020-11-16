<?php

use Faker\Generator as Faker;

$factory->define(App\Enterprise::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'email' => $faker->unique()->safeEmail,
    ];
});
