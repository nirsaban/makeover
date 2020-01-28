<?php

use Faker\Generator as Faker;

/** @var $factory \Illuminate\Database\Eloquent\Factory */

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(1, 50000),
        'category_id' => $faker->numberBetween(1, 5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
