<?php

use Faker\Generator as Faker;

/** @var $factory \Illuminate\Database\Eloquent\Factory */

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'content' => $faker->text(16383),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
