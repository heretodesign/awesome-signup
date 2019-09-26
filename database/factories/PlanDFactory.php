<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlanD;
use Faker\Generator as Faker;

$factory->define(PlanD::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail
    ];
});
