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
            'slug' => 'isekai',
            'color' => 'greem'
        ]);

        Category::create([
            'name' => 'Wibu',
            'slug' => 'wibu',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Kpop',
            'slug' => 'kpop',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Real',
            'slug' => 'real',
            'color' => 'yellow'
        ]);


    }
}
