<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name_de' => $faker->name,
        'name_en' => $faker->name,
        'slug' => $faker->slug,
    ];
});
