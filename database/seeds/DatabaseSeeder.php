<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => env('ADMIN_ACCOUNT_USERNAME'),
            'email' => env('ADMIN_ACCOUNT_EMAIL'),
            'password' => Hash::make(env('ADMIN_ACCOUNT_PASSWORD')),
            'remember_token' => Str::random(10)
        ]);

        $this->call(AppSeeder::class);
    }
}
