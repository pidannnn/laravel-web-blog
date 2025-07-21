<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design'
        ]);

        Category::create([
            'name' => 'Basis Data',
            'slug' => 'basis-data'
        ]);

        Category::create([
            'name' => 'Game Development',
            'slug' => 'game-development'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
    }
}
