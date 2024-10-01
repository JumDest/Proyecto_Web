<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table.
     *
     * @return void
     */
    public function run()
    {
        // Obtener los roles previamente creados
        $adminRole = Role::where('name', 'admin')->first();
        $clientRole = Role::where('name', 'client')->first();
        $supportTeamRole = Role::where('name', 'support_Team')->first();

        // Crear los usuarios
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'role' => $adminRole, // Asignar rol
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'role' => $clientRole, // Asignar rol
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'password' => Hash::make('password123'),
                'role' => $supportTeamRole, // Asignar rol
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob.brown@example.com',
                'password' => Hash::make('password123'),
                'role' => $clientRole, // Asignar rol
            ],
        ];

        foreach ($users as $userData) {
            // Crear el usuario
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);

            // Asignar el rol al usuario
            $user->assignRole($userData['role']);
        }
    }
}
