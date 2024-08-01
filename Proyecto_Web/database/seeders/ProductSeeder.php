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
        // $products = [
        //     ['name' => 'iPhone 12', 'price' => 1000, 'category_id' => 1, 'brand_id' => 1],
        //     ['name' => 'Galaxy S21', 'price' => 900, 'category_id' => 1, 'brand_id' => 2],
        //     ['name' => 'Mate 40 Pro', 'price' => 1200, 'category_id' => 1, 'brand_id' => 3],
        //     ['name' => 'Mi 11', 'price' => 800, 'category_id' => 1, 'brand_id' => 4]
        // ];
        $product = new Product();

        $product->name = 'iPhone 12';
        $product->description='The iPhone 12.';
        $product->price = 1000;
        $product->stock=100;
        $product->specs='The iPhone 12 .';
        $product->brand_id = 1;
        $product->save();
    }
}
