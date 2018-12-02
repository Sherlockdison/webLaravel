<?php

use Faker\Generator as Faker;

$factory->define(App\Size::class, function (Faker $faker) {
    return [
        'size' => $faker->unique()->randomElement([
          'XS',
          'S',
          'M',
          'L',
        ])
    ];
});
