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
        // $brands = [
        //     ['name' => 'Apple'],
        //     ['name' => 'Samsung'],
        //     ['name' => 'Huawei'],
        //     ['name' => 'Xiaomi'],
        // ];
        $productbrand = new ProductBrand();
        $productbrand-> product_id = 1;
        $productbrand-> brand_id = 1;
        $productbrand->save();
    }
}
