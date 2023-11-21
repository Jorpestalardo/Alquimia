<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosEventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios_eventos')->insert([
            [
                'comentarioeventos_id' => 1,
                'usuario_id' => '3',
                'eventos_id' => '1',
                'mensaje' => '¡Cuenten conmigo! me interesa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 2,
                'usuario_id' => '3',
                'eventos_id' => '1',
                'mensaje' => '¡Sería una excelente idea ir, me sumo!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 3,
                'usuario_id' => '3',
                'eventos_id' => '2',
                'mensaje' => 'Que lindo, espero puedan subir información en instagram para verlo, ya que no podré ir.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 4,
                'usuario_id' => '3',
                'eventos_id' => '3',
                'mensaje' => '¡Me encanta!',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'comentarioeventos_id' => 5,
                'usuario_id' => '3',
                'eventos_id' => '4',
                'mensaje' => '¡Siempre sumando a las buenas causas!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 6,
                'usuario_id' => '3',
                'eventos_id' => '4',
                'mensaje' => 'Que lindo, realmente espero poder ir...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 7,
                'usuario_id' => '4',
                'eventos_id' => '1',
                'mensaje' => '¿Tienen alguna red social para seguirlos?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 8,
                'usuario_id' => '4',
                'eventos_id' => '2',
                'mensaje' => 'Me encanta la idea, quiero sumarme, les voy a escribir...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioeventos_id' => 9,
                'usuario_id' => '4',
                'eventos_id' => '3',
                'mensaje' => '¡Cuenten conmigo!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
