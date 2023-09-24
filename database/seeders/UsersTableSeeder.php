<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Nombre Usuario 1',
                'lastName' => 'Apellido Usuario 1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('password123'),
                'identificacion' => '123456789', // Valor de identificación
                'role_id' => 1, // Valor para role_id (ajusta según tu lógica)
                'status' => true, // Valor para status (true o false)
            ],
            [
                'name' => 'Nombre Usuario 2',
                'lastName' => 'Apellido Usuario 2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('password456'),
                'identificacion' => '987654321', // Valor de identificación
                'role_id' => 1, // Valor para role_id (ajusta según tu lógica)
                'status' => false, // Valor para status (true o false)
            ],
            // Agrega más usuarios si es necesario
        ]);
    }
}
