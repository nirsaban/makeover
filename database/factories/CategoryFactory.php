<?php

use Faker\Generator as Faker;

/** @var $factory \Illuminate\Database\Eloquent\Factory */

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
