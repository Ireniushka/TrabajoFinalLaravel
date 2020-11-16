<?php

use Faker\Generator as Faker;

$factory->define(App\Tracing::class, function (Faker $faker) {
    return [
        'type' => $faker->sentence,
        'reason' => $faker->sentence,
        'observation' => $faker->paragraph,
        'tutor_c_id' => \App\User::all()->random()->id,
    ];
});
