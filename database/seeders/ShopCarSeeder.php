<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShopCar;

class ShopCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $shopCars = [
        //     ['user_id' => 1],
        //     ['user_id' => 2],
        // ];

        $shopCar = new ShopCar();
        $shopCar->total= 2500;
        $shopCar->user_id = 1;
        $shopCar->save();
    }
}
