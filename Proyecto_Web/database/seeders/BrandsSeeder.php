<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
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
        $barnd = new Brand();
        $barnd->name = 'Apple';
        $barnd->save();
    }
}

