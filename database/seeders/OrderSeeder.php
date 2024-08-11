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
        // $orders = [
        //     ['user_id' => 1, 'total' => 2500, 'status' => 'pending'],
        //     ['user_id' => 2, 'total' => 3500, 'status' => 'completed'],
        //     ['user_id' => 3, 'total' => 4500, 'status' => 'pending'],
        //     ['user_id' => 4, 'total' => 5500, 'status' => 'completed'],
        // ];
        $order = new Order();
        $order->date = '2021-10-10';
        $order->status = 'pending';
        $order->user_id = 1;
        $order->save();

    }
}
