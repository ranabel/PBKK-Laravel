<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $abel = User::create([
        //     'name' => 'Nabilah Atika',
        //     'username' => 'elava',
        //     'email' => 'inielava@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        $this->call([
            CategorySeeder::class,
            UserSeeder::class
        ]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

        // Post::factory(100)->recycle([
        //     Category::factory(3)->create();
        //     $abel,
        //     User::factory(5)->create();
        //     ])->create();

    }
}
