<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\Notification;
use App\User;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'notificationable_type' => 'App\Message',
        'notificationable_id' => Message::all()->random()->id
    ];
});
