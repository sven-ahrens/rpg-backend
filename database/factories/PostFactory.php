<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()->id,
        'thread_id' => \App\Thread::all()->random()->id,
        'message' => $faker->text
    ];
});
