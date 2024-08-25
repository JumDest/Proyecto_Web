<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 12', 
                'description' => 'The iPhone 12.', 
                'price' => 1000, 
                'stock' => 100, 
                'specs' => 'The iPhone 12.', 
                'brand_id' => 1, 
                'category_id' => 1, // Asumiendo una categoría existente con ID 1
                'image_url' => 'https://example.com/images/iphone12.jpg' // URL de la imagen
            ],
            [
                'name' => 'Galaxy S21', 
                'description' => 'The Galaxy S21.', 
                'price' => 900, 
                'stock' => 100, 
                'specs' => 'The Galaxy S21.', 
                'brand_id' => 2, 
                'category_id' => 2, // Asumiendo una categoría existente con ID 2
                'image_url' => 'https://example.com/images/galaxy_s21.jpg' // URL de la imagen
            ],
            [
                'name' => 'P40 Pro', 
                'description' => 'The P40 Pro.', 
                'price' => 800, 
                'stock' => 100, 
                'specs' => 'The P40 Pro.', 
                'brand_id' => 3, 
                'category_id' => 3, // Asumiendo una categoría existente con ID 3
                'image_url' => 'https://example.com/images/p40_pro.jpg' // URL de la imagen
            ],
            [
                'name' => 'Mi 11', 
                'description' => 'The Mi 11.', 
                'price' => 700, 
                'stock' => 100, 
                'specs' => 'The Mi 11.', 
                'brand_id' => 4, 
                'category_id' => 4, // Asumiendo una categoría existente con ID 4
                'image_url' => 'https://example.com/images/mi_11.jpg' // URL de la imagen
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
