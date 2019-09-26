<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlanC;
use Faker\Generator as Faker;

$factory->define(PlanC::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail
    ];
});
