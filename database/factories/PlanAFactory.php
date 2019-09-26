<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlanA;
use Faker\Generator as Faker;

$factory->define(PlanA::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail
    ];
});
