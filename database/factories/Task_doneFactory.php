<?php

use Faker\Generator as Faker;

$factory->define(App\Task_done::class, function (Faker $faker) {
    return [
        'student_id'=>  \App\User::all()->random()->id,
        'task_id'=> \App\Task::all()->random()->id,
        'mark'=> $faker->randomDigit,
    ];
});
