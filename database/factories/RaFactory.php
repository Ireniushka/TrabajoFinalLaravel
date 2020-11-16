<?php

use Faker\Generator as Faker;

$factory->define(App\Ra::class, function (Faker $faker) {
    return [
        'number'=> $faker->random_int,
        'description'=> $faker->paragraph,
        'module_id'=> \App\Module::all()->random()->id,
    ];
});
