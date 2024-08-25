<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBrand;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $productbrands = [
            ['product_id' => 1, 'brand_id' => 1],
            ['product_id' => 2, 'brand_id' => 2],
            ['product_id' => 3, 'brand_id' => 3],
            ['product_id' => 4, 'brand_id' => 4],
        ];

        foreach ($productbrands as $productbrand) {
            ProductBrand::create($productbrand);
        }
    }
        
}
