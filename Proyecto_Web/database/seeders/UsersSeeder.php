<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= new User();
        $user->name = 'John Doe';
        $user->email = 'JD1@g.c';
        $user->password ='123456';
        $user->remeber_token = '123456';
        $user->save();
    }
}
