<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        DB::table('users')->insert([
            'department_id' => 1,   // Administração
            'name' => 'Administrador',
            'email' => 'admin@rhmangnt.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Aa123456'),
            'role' => 'admin',
            'permissions' => '["admin"]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // admin details
        DB::table('user_details')->insert([
            'user_id' => 1,
            'address' => 'Rua do Administrador, 123',
            'zip_code' => '11234-123',
            'city' => 'Sorocaba',
            'phone' => '900000001',
            'salary' => 8000.00,
            'admission_date' => '2022-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // admin department
        DB::table('departments')->insert([
            'name' => 'Administração',  
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
