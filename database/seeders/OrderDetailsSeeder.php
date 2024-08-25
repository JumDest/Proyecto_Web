<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderDetails = [
            ['quantityOrder' => 2, 'price' => 1000, 'order_id' => 1, 'product_id' => 1],
            ['quantityOrder' => 3, 'price' => 2000, 'order_id' => 2, 'product_id' => 2],
            ['quantityOrder' => 4, 'price' => 3000, 'order_id' => 3, 'product_id' => 3],
            ['quantityOrder' => 5, 'price' => 4000, 'order_id' => 4, 'product_id' => 4],
        ];

        foreach ($orderDetails as $orderDetail) {
            OrderDetail::create($orderDetail);
        }
    }
}
