<?php

use Faker\Generator as Faker;

$factory->define(App\Assistance::class, function (Faker $faker) {
    return [
        'student_id' => \App\User::all()->random()->id, //tenemos que crear  funcion para controlar que sea alumno
        'date' => $faker->date,
        'assistance' => $faker->sentence,
    ];
});
