<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Title;
use Faker\Generator as Faker;

$factory->define(Title::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'name_de' => $faker->name,
        'name_en' => $faker->name,
        'description_de' => $faker->text,
        'description_en' => $faker->text,
        'slug' => $faker->slug,
    ];
});
