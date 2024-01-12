<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Farihaul',
            'email' => 'farihaulya20010@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'First',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem kjdnebghrfuhdugfuerheuhwuidgefu guyefujshe',
            'body' => 'dwhufejgfuyr3gydwyg ewhagrytg3wtugwyef hgwfaywgry',
            'category_id' => 1,
            'user_id' => 1
        ]);


        User::create([
            'name' => 'Fariharahma',
            'email' => 'farihaulya2001@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Android Programming',
            'slug' => 'android-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Second',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem kjdnebghrfuhdugfuerheuhwuidgefu guyefujshe',
            'body' => 'dwhufejgfuyr3gydwyg ewhagrytg3wtugwyef hgwfaywgry',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
