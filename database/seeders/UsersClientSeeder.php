<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserClient;

class UsersClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = [
        //     ['name' => 'John Doe', 'email' => 'JD1@g.c', 'password' => '123456'],
        //     ['name' => 'Jane Doe', 'email' => 'JD2@g.c', 'password' => '123456'],
        //     ['name' => 'John Smith', 'email' => 'JS1@g.c', 'password' => '123456'],
        //     ['name' => 'Jane Smith', 'email' => 'JS2@g.c', 'password' => '123456'],
        // ];

        $userClient = new UserClient();
        $userClient->name = 'John Doe';
        $userClient->phone = '123456';
        $userClient->adress = '123';
        $userClient->email = 'JD1@g.c';
        $userClient->save();
    }
}
