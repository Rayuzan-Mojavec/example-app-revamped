<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Category;
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
        Category::create([
            'category_name' => 'Sports',
        ]);

        Category::create([
            'category_name' => 'Fashion',
        ]);

        Category::create([
            'category_name' => 'Tech',
        ]);

        Category::create([
            'category_name' => 'Politics',
        ]);

        Category::create([
            'category_name' => 'Finance',
        ]);

        Blog::factory(657)->create();
    }
}
