<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Runner;
use Faker\Generator as Faker;
use App\City;

$factory->define(Runner::class, function (Faker $faker) {

    $random_city = City::all()->random()->id;
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => '959' . $faker->unique()->numberBetween($min = 100000000, $max = 999999999),
        'phone_number_verified_at' => now(),
        'gender' => $gender,
        'city' => $random_city,
        'birthday' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y-m-d'),
    ];
});
