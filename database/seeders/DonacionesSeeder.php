<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('donaciones')->insert([
            [
                // El id es auto-incremental, por lo que no es estrictamente necesario setearlo (podría
                // dejarlo en null). Pero yo lo suelo poner por temas de testing.
                'donacion_id' => 1,
                'usuario_id' => 3,
                'tipo_id' => '1',
                'ubicacion_id' => 6,
                'titulo' => 'Maderas de Palet',
                'img' => '20230608013757_maderas-de-palet.jpg',
                'estado' => 'usado',
                'descripcion' => '6 Palets, rústicos jamas pintados, no estan mojados, se encuentran en buen estado',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 2,
                'usuario_id' => 3,
                'tipo' => '6',
                'ubicacion_id' => 6,
                'titulo' => "Botellas de Vidrio",
                'img' => '20230608013958_botellas-de-vidrio.jpg',
                'estado' => 'casi-nuevo',
                'descripcion' => 'Tengo 35 Botellas de vidrio de salsa de tomate, sin rajaduras ni golpes, quién este interesado que no dude en escribirme',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 3,
                'usuario_id' => 5,
                'tipo' => '4',
                'ubicacion_id' => 6,
                'titulo' => "Ovillos de lana",
                'img' => 'ovillos-lana.jpg',
                'estado' => 'nuevo',
                'descripcion' => 'Hola como están? tengo una caja llena de lanas, la mayoria nuevas de distintos colores, interesados pasan a buscar por mi casa.',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 4,
                'usuario_id' => 5,
                'tipo' => '7',
                'ubicacion_id' => 6,
                'titulo' => "Cartones de Huevo",
                'img' => 'cartones-huevo.jpg',
                'estado' => 'usado',
                'descripcion' => 'Tengo 38 cartones de huevo en mi casa, pueda servir para compost, me estoy por mudar, escribirme quien este verdaderamente interesado, gracias!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 5,
                'usuario_id' => 3,
                'tipo' => '5',
                'ubicacion_id' => 6,
                'titulo' => "Botellas de Sprite para reciclar",
                'img' => 'botella-sprite.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hey, gente! Tengo un montón de botellas de plástico de bebidas que necesitan una nueva misión en la vida. ¿Alguien quiere darles un hogar? Son las mismas botellas que alguna vez sostuvieron refrescos y ahora están listas para una segunda oportunidad. Estoy tratando de hacer mi parte para cuidar el planeta, y donar estas botellas es mi pequeño granito de arena. Si quieres ayudar a mantener el plástico fuera de los basureros y darles una nueva vida, ¡avísame! ¡Juntos, podemos reciclar y rockear!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 6,
                'usuario_id' => 3,
                'tipo' => '1',
                'ubicacion_id' => 6,
                'titulo' => "Corchos",
                'img' => 'corcho.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hola! Tengo una pila de corchos que junté de varias juntadas con amigos y estoy seguro de que pueden ser útiles para alguien. Si sos de los que les gusta la creatividad y quieren hacer algo copado, los corchos pueden ser la clave. ¿Quién se anima a darles un nuevo propósito? Seguro se pueden convertir en algo re groso, como posavasos únicos o algún proyecto decorativo. Si te copa la idea, ¡tirate el lance y avisame! Juntos, podemos ponerle buena onda y estilo a estos corchos. ¡Abrazo!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 7,
                'usuario_id' => 3,
                'tipo' => '3',
                'ubicacion_id' => 6,
                'titulo' => "Latas de cervezas",
                'img' => 'latas-cerveza.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hey, qué onda! Soy un amante de la birra que está en Argentina y le pone buena onda al reciclaje. Las latas de cerveza que ya cumplieron su misión de hacerme pasar buenos ratos ahora están en mis manos para darles un final feliz. Las dono para reciclar y así aportar mi granito de chela al planeta más limpio. Cada latita suma en esta movida eco, y me encanta ser parte del cambio.',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 8,
                'usuario_id' => 3,
                'tipo' => '2',
                'ubicacion_id' => 6,
                'titulo' => "Diarios",
                'img' => 'diarios-revistas.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hey, hola a todos! Soy una fanática de las noticias y el reciclaje acá en Argentina. Resulta que tengo un montón de diarios acumulados, ¡nada menos que 60! Pero en vez de dejar que junten polvo, les quiero dar un giro divertido. Los dono para reciclar y así seguir contando historias, pero esta vez a favor del planeta. Cada diario tiene su rol en esta movida eco, y me hace re feliz formar parte de esto. Si te gustan las noticias y querés ser parte de un cambio, ¡sumate a esta historia por un futuro más verde!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 9,
                'usuario_id' => 5,
                'tipo' => '6',
                'ubicacion_id' => 6,
                'titulo' => "Frascos de vidrio",
                'img' => 'frascos-vidrio.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Atención, comunidad! Tengo 80 frascos de vidrio en Argentina que están buscando un nuevo propósito. En lugar de quedarse en casa juntando polvo, quiero donarlos para que puedan reciclarse y ser útiles de nuevo. Si tenés ideas creativas o simplemente querés sumar a la movida del reciclaje, ¡estoy buscando un buen hogar para mis frascos! ¿Quién se suma? ',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 10,
                'usuario_id' => 3,
                'tipo' => '3',
                'ubicacion_id' => 6,
                'titulo' => "Latas de leche Nido",
                'img' => 'latas-leche.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Comunidad solidaria de Chubut! Les cuento que aquí en Martires tengo 39 latas de Leche Nido que quiero donar. Si conocés a alguien en la zona que las necesite o si sabés de alguna organización local que pueda aprovecharlas, ¡te agradecería un montón si me lo hacés saber! Vamos juntos a hacer que estas latas de Leche Nido lleguen a quienes más las necesitan en nuestra comunidad. ¡Sumate y hagamos una diferencia juntos!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 11,
                'usuario_id' => 3,
                'tipo' => '4',
                'ubicacion_id' => 6,
                'titulo' => "Prendas usadas",
                'img' => 'ropa-usada.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hola Alquimistas! Tengo un par de prendas para donar que seguro le sirven a alguien. Hay una remera canchera, un pantalón que es puro comfort, ¡y una pollerita que siempre me sacó sonrisas! Si sos de las que le pone onda a la ropa o simplemente querés sumar algo nuevo a tu ropero, ¡estoy acá para tirarte una mano! Juntas, le podemos dar un toque re groso y con facha a estas prendas. ¿Qué decís? Si te copa la idea, avisame y vemos cómo seguimos. ¡Abrazo grande!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'donacion_id' => 12,
                'usuario_id' => 3,
                'tipo' => '5',
                'ubicacion_id' => 6,
                'titulo' => "Tapitas gaseosas",
                'img' => 'tapitas-gaseosa.jpg',
                'estado' => 'usado',
                'descripcion' => '¡Hola a todos! Tengo un montón de tapitas plásticas de gaseosa: 7 bolsas llenas, para ser exactos. En vez de tirarlas, quiero donarlas para una buena causa. Si sabés de alguna iniciativa que esté recolectando tapitas para reciclar o si tenés ideas para darles un nuevo propósito, ¡contame! Juntos podemos hacer que estas tapitas tengan un impacto positivo en nuestro entorno. ¡Sumate a esta movida por un mundo más limpio y sostenible!',
                'fecha' =>  now(),
                // now() es una función "helper" del Laravel que retorna la fecha y hora actual.
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}