<?php

use Faker\Generator as Faker;

$factory->define(App\Module::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'cycle_id'=> \App\Cycle::all()->random()->id,
    ];
});
