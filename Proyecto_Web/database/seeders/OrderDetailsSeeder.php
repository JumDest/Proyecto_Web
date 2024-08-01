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
        // $orderDetails = [
        //     ['order_id' => 1, 'product_id' => 1, 'quantity' => 2, 'price' => 1000],
        //     ['order_id' => 1, 'product_id' => 2, 'quantity' => 1, 'price' => 500],
        //     ['order_id' => 2, 'product_id' => 3, 'quantity' => 3, 'price' => 1500],
        //     ['order_id' => 2, 'product_id' => 4, 'quantity' => 2, 'price' => 2000],
        // ];
        $orderDetail = new OrderDetail();
        $orderDetail->quantityOrder = 2;
        $orderDetail->price = 1000;
        $orderDetail->order_id = 1;
        $orderDetail->product_id = 1;
        $orderDetail->save();

    }
}
