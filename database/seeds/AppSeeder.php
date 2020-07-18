<?php

use App\Category;
use App\Message;
use App\Notification;
use App\Post;
use App\Role;
use App\Tag;
use App\Title;
use App\User;
use App\Thread;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Thread::class, 50)->create();
        factory(Role::class, 3)->create();
        factory(Category::class, 20)->create();
        factory(Tag::class, 20)->create();
        factory(Title::class, 20)->create()->each(function ($title, $key) {
            $title->tags()->attach($key === 0 ? 1 : $key + 1);
        });
        factory(User::class, 50)->create()->each(function ($user, $key) {
            $isCreator = $key % 2 === 0;

            $user->threads()->attach($key === 0 ? 1 : $key + 1, [
                'is_creator' => $isCreator
            ]);

            $user->roles()->attach(Arr::random([1, 2, 3]));
        });
        factory(Post::class, 100)->create();
        factory(Message::class, 40)->create();
        factory(Notification::class, 40)->create();
    }
}
