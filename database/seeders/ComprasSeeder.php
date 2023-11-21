<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('compras')->insert([
                [
                    'compra_id' => 1,
                    'usuario_id' => 3,
                    'mercado_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'compra_id' => 2,
                    'usuario_id' => 3,
                    'mercado_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'compra_id' => 3,
                    'usuario_id' => 4,
                    'mercado_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'compra_id' => 4,
                    'usuario_id' => 2,
                    'mercado_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
}
