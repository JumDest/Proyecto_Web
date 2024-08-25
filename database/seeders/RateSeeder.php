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
        $rates = [
            ['score' => 5, 'comment' => 'good', 'product_id' => 1, 'user_id' => 1],
            ['score' => 4, 'comment' => 'good', 'product_id' => 2, 'user_id' => 2],
            ['score' => 3, 'comment' => 'good', 'product_id' => 3, 'user_id' => 3],
            ['score' => 2, 'comment' => 'good', 'product_id' => 4, 'user_id' => 4],
        ];

        foreach ($rates as $rate) {
            Rate::create($rate);
        }

    }
}
