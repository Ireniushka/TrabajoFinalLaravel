<?php

use Faker\Generator as Faker;

$factory->define(App\Worksheet::class, function (Faker $faker) {
    return [
        'date' => $faker->date,
        'description' => $faker->paragraph,
        'student_id' => \App\Enterprise::all()->random()->id,
    ];
});
