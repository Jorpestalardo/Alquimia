<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo')->insert([
        [
            'tipo_id' => 1,
            'tipo' => 'Madera',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 2,
            'tipo' => 'Papel',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 3,
            'tipo' => 'Aluminio',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 4,
            'tipo' => 'Textil',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 5,
            'tipo' => 'Plástico',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 6,
            'tipo' => 'Vidrio',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 7,
            'tipo' => 'Cartón',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 8,
            'tipo' => 'Goma',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo_id' => 9,
            'tipo' => 'Fibrofacil',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
