<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'number'=> $faker->randomDigit,
        'description' => $faker->paragraph,
    ];
});
