<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Tablets'],
            ['name' => 'Notebooks'],
            ['name' => 'Smartwatches'],
            ['name' => 'Acessórios'],    
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

