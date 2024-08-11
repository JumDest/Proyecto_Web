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
        // $categories = [
        //     ['name' => 'Smartphones'],
        //     ['name' => 'Tablets'],
        //     ['name' => 'Laptops'],
        //     ['name' => 'Desktops'],
        // ];
        $category = new Category();
        $category->name = 'Smartphones';
        $category->save();
    }
}
