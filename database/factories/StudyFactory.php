<?php

use Faker\Generator as Faker;

$factory->define(App\Study::class, function (Faker $faker) {
    return [
        'student_id'=>  \App\User::all()->random()->id,
        'cycle_id'=> \App\Cycle::all()->random()->id,
    ];
});
