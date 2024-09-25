<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create(),

        Category::create([
            'name' => 'Isekai',
            'slug' => 'isekai'
        ]);

        Category::create([
            'name' => 'Wibu',
            'slug' => 'wibu'
        ]);

    }
}
