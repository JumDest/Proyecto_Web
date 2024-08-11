<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $rates = [
        //     ['product_id' => 1, 'user_id' => 1, 'rate' => 5],
        //     ['product_id' => 1, 'user_id' => 2, 'rate' => 4],
        //     ['product_id' => 1, 'user_id' => 3, 'rate' => 3],
        //     ['product_id' => 2, 'user_id' => 1, 'rate' => 2],
        // ];
        $rate = new Rate();
        $rate->score= 5;
        $rate->comment = 'good';
        $rate->product_id = 1;
        $rate->user_id = 1;
        $rate->save();

    }
}
