<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'roles_id' => 1,
                'nombre' => 'Administrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roles_id' => 2,
                'nombre' => 'Alquimia Consumidor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'roles_id' => 3,
                'nombre' => 'Alquimia Donante',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
