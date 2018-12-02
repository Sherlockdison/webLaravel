<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->text($maxNbChars = 450),
        'price' => $faker->randomFloat(2, 100, 999999),
        'stock' => $faker->randomDigitNotNull(),
        'img1' => $faker->imageUrl(320, 240, 'cats'),
      ];

});
