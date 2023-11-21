<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etiquetas')->insert([
            [
                'etiquetas_id' => 1,
                'nombre' => 'Reciclaje',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 2,
                'nombre' => 'Compostaje',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 3,
                'nombre' => 'Bienestar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 4,
                'nombre' => 'Medioambiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'etiquetas_id' => 5,
                'nombre' => 'Hogar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 6,
                'nombre' => 'Jardin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 7,
                'nombre' => 'Consejos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 8,
                'nombre' => 'Bricolaje',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'etiquetas_id' => 9,
                'nombre' => 'Comunidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
