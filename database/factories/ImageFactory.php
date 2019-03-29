<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'user_id'=>  $faker->unique()->numberBetween($min = 1, $max = 10),
        'name'=> $faker->imageUrl($width = 125, $height = 125)
    ];
});
