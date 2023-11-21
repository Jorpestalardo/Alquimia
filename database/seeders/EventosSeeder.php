<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([
            [
            'eventos_id' => 1,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Feria ecológica “de artesanos”',
            'descripcion' => '¡Hola! comunidad ¿Cómo están? quería invitarlos a la fería de artesanos 
            que comenzará el día 27 de Julio, hasta el día 30 del mismo. Podrán comprar artesanias realizadas con diferentes elementos reciclados, 
            queremos apostar a una economía sustentable, ademas de poder disfrutar de diversas comidas,
            con ofertas veganas!! los esperamos a todos!!
            Si quieren saber más sobre el evento ingresen a @artesanosUnidos en instagram',
            'img' => 'ferias.jpg',
            'fecha' => '2023-11-20',
            'autor' => 'Florencia',
            ],
            [
            'eventos_id' => 2,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Plantar árboles',
            'descripcion' => 'Hola comunidad, queriamos invitarlos este fin de semana en la ciudad vamos a estar regalando plantines de árboles. 
            Ee esperamos! en nuestro stand que se encontrará ubicado en el Parque del Vega, en el centro del mismo.',
            'img' => 'arboles.jpg',
            'fecha' => '2023-11-20',
            'autor' => 'Florencia',
            ],
            [
            'eventos_id' => 3,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Limpiar Plazas de escuelas',
            'descripcion' => 'En esta oportunidad queremos invitar a todos aquellos valientes y activistas que deseen formar parte de nuestro equipo
            de limpieza, la idea es poder juntar la basura necesaria para que luego otros puedan dividir los residuos, necesitamos que vengas con ropa comoda,
            nosotros vamos a proveer todas las herramientas, bolsas y seguridad.',
            'img' => 'limpieza.jpg',
            'fecha' => '2023-11-20',
            'autor' => 'Florencia',
            ],
            [
            'eventos_id' => 4,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Huerta escuela rural de Pje. Santa Ines',
            'descripcion' => 'Buscamos voluntarios con conocimientos en jardinería que deseen pasar una hermosa jornada con alumnos de la escuela Santa Ines. 
            y también deseen donar para la creación de una huerta, tendremos una reunión en la sede de la ONG "Plantar árboles es vida".',
            'img' => 'huerta.jpg',
            'fecha' => '2023-11-20',
            'autor' => 'Florencia',
            ],
            [
            'eventos_id' => 5,
            'ubicacion_id' => 6,
            'usuario_id' => 2,
            'titulo' => 'Prueba',
            'descripcion' => 'Buscamos voluntarios con conocimientos en jardinería que deseen pasar una hermosa jornada con alumnos de la escuela Santa Ines. 
            y también deseen donar para la creación de una huerta, tendremos una reunión en la sede de la ONG "Plantar árboles es vida".',
            'img' => 'huerta.jpg',
            'fecha' => '2023-11-20',
            'autor' => 'Florencia',
            ]

        ]);
    }
}
