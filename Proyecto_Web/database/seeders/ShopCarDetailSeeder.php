<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShopCarDetail;

class ShopCarDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $shopCarDetails = [
        //     ['shop_car_id' => 1, 'product_id' => 1, 'quantity' => 2],
        //     ['shop_car_id' => 1, 'product_id' => 2, 'quantity' => 1],
        //     ['shop_car_id' => 2, 'product_id' => 1, 'quantity' => 1],
        //     ['shop_car_id' => 2, 'product_id' => 2, 'quantity' => 3],
        // ];

        $shopCarDetail = new ShopCarDetail();
        $shopCarDetail->quantityShopCar = 2;
        $shopCarDetail->shop_car_id = 1;
        $shopCarDetail->product_id = 1;
        $shopCarDetail->save();
    }
}
