<?php

use Faker\Generator as Faker;

$factory->define(App\Belong::class, function (Faker $faker) {
    return [
        'student_id' => \App\User::all()->random()->id, //tenemos que crear  funcion para controlar que sea alumno
        'enterprise_id' => \App\Enterprise::all()->random()->id,
    ];
});
