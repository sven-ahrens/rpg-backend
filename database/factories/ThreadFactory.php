<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'slug' => $faker->slug,
        'description' => $faker->text
    ];
});
