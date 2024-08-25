<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            ['date' => '2021-10-10', 'status' => 'pending', 'user_id' => 1],
            ['date' => '2021-10-11', 'status' => 'pending', 'user_id' => 2],
            ['date' => '2021-10-12', 'status' => 'pending', 'user_id' => 3],
            ['date' => '2021-10-13', 'status' => 'pending', 'user_id' => 4],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
