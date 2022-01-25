<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory(10)->create();
        $user->each(function ($user) {
            $user->posts()->saveMany(\App\Models\Post::factory(10)->make());
        });
    }
}
