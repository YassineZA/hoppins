<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'last_name'=> $faker->lastName,
        'first_name'=> $faker->firstName,
        'birthdate'=> $faker->date,
        'gender'=> $faker->randomElement(['male', 'female']),
        'phone_number'=> $faker->phoneNumber,
        'prefered_city'=> $faker->city,
        'address_id'=> $faker->numberBetween($min = 1, $max = 10),
        'warning_count'=> $faker->numberBetween($min = 1, $max = 10),
        'email'=> $faker->unique()->safeEmail,
        'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm' // secret
    ];
});
