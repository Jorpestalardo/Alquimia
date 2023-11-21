<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulos')->insert([
            [
                'articulo_id' => 1,
                'usuario_id' => 3,
                'mercado_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'articulo_id' => 2,
                'usuario_id' => 3,
                'mercado_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'articulo_id' => 3,
                'usuario_id' => 4,
                'mercado_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'articulo_id' => 4,
                'usuario_id' => 2,
                'mercado_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
