<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'street_number' => $faker->randomDigitNotNull,
        'street_number_comp' => $faker->word,
        'street_name_one' => $faker->streetName,
        'street_name_two' => $faker->streetName,
        'postal_code' => $faker->numberBetween($min = 1000, $max = 9000),
        'city_name' => $faker->city
    ];
});
