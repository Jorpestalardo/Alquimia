<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios_blogs')->insert([
            [
                'comentarioblog_id' => 1,
                'usuario_id' => '3',
                'blog_id' => '1',
                'mensaje' => 'Excelente dato, siempre quise saber sobre el tema.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 2,
                'usuario_id' => '3',
                'blog_id' => '1',
                'mensaje' => 'Quisiera que por favor hablaran del Compostaje, necesito unos tips!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 3,
                'usuario_id' => '3',
                'blog_id' => '2',
                'mensaje' => 'Me encanta todo lo que puedo aprender en este sitio! Alquimia <3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 4,
                'usuario_id' => '3',
                'blog_id' => '3',
                'mensaje' => 'Que bueno poder encontrar una comunidad virtual',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'comentarioblog_id' => 5,
                'usuario_id' => '3',
                'blog_id' => '4',
                'mensaje' => 'Hogar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 6,
                'usuario_id' => '3',
                'blog_id' => '4',
                'mensaje' => 'Jardin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 7,
                'usuario_id' => '4',
                'blog_id' => '1',
                'mensaje' => 'Consejos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 8,
                'usuario_id' => '4',
                'blog_id' => '2',
                'mensaje' => 'Bricolaje',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comentarioblog_id' => 9,
                'usuario_id' => '4',
                'blog_id' => '3',
                'mensaje' => 'Comunidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
