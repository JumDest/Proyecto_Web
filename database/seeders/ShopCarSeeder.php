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
        $shopCars = [
            ['user_id' => 1, 'total' => 100.00],
            ['user_id' => 2, 'total' => 200.00],
            ['user_id' => 3, 'total' => 300.00],
            ['user_id' => 2, 'total' => 400.00],
        ];

        foreach ($shopCars as $shopCar) {
            ShopCar::create($shopCar);
        }
    }
}
