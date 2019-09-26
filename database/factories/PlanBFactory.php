<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PlanB;
use Faker\Generator as Faker;

$factory->define(PlanB::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail
    ];
});
