<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address1' => $faker->streetAddress,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'postalcode' => $faker->postCode,
        'country' => $faker->countryCode,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'legacy_id' => $faker->text(10),
        'notes' => $faker->paragraph($faker->numberBetween(0,5), true)
    ];
});
