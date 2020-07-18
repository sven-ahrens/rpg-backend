<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    $randomUser = User::all()->random();

    return [
        'messages' => $faker->text,
        'sender_id' => User::firstWhere('id', '!=', $randomUser->id),
        'recipient_id' => $randomUser->id
    ];
});
