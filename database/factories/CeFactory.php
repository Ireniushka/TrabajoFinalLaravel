<?php

use Faker\Generator as Faker;

$factory->define(App\Ce::class, function (Faker $faker) {
    return [
        'word'=> $faker->sentence,
        'description' => $faker->paragraph,
        'ra_id' => \App\Ra::all()->random()->id,
        'task_id'=> \App\Task::all()->random()->id,
        'mark' => $faker->random_int,
    ];
});
