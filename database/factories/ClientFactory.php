<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'email' => $faker->unique()->freeEmail,
        'credit' => $faker->randomFloat(2, 700, 999999),
        'mobile' => $faker->e164PhoneNumber,
        'address' => $faker->address,
    ];
});
