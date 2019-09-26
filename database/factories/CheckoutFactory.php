<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Checkout;
use Faker\Generator as Faker;

$factory->define(Checkout::class, function (Faker $faker) {
    return [
    'promo' => $faker->randomName(),
    'email' => $faker->unique()->safeEmail,
    'address' => $faker->address,
    'city' => $faker->city,
    'state' => $faker->state,
    'country' => $faker->country,
    'phone' => $faker->randomNumber(7),
    'name_on_card' => $faker->name,
    'card_number' => $faker->numberBetween(12),
    'validity' => $faker->numberBetween(4),
    'cvc' => $faker->numberBetween(3),
    ];
});
