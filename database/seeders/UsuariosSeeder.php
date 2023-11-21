<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
            'usuario_id' => 1,
            'ubicacion_id' => 2,
            'roles_id' => 1,
            'avatar_id' => 6,
            'email' => 'abril@gmail.com',
            'nombre' => 'Abril',
            'apellido' => 'Hernandez',
            'biografia' => '¡Hola! Soy Abril, programadora y diseñadora web de Buenos Aires. Con Jorgelina, somos Alquimia, mezclando tecnología y diseño para crear maravillas digitales. Adicta a los desafíos, me encanta explorar las infinitas posibilidades en línea. Cuando no trabajo, descubro secretos de la ciudad. ¡Acompáñame en esta travesía creativa!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 1162811760',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'usuario_id' => 2,
            'ubicacion_id' => 10,
            'roles_id' => 1,
            'avatar_id' => 2,
            'email' => 'jorgelina@gmail.com',
            'nombre' => 'Jorgelina',
            'apellido' => 'Pestalardo',
            'biografia' => '¡Hola a todos! Soy Jor, programadora web nacida en Jujuy y basada en Buenos Aires. Junto con Abril, creamos magia en Alquimia, fusionando programación y diseño. Amo la tecnología y estoy comprometida con el reciclaje. Cuando no programo, descubro formas creativas de cuidar el planeta. ¡Únete a nuestra aventura en Alquimia!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 3886078102',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'usuario_id' => 3,
            'ubicacion_id' => 6,
            'roles_id' => 3,
            'avatar_id' => 5,
            'email' => 'donante@gmail.com',
            'nombre' => 'Florencia',
            'apellido' => 'Rios',
            'biografia' => '¡Hola a todos! Soy Florencia Ríos, una joven argentina con un amor profundo por el reciclaje y la sostenibilidad. Mi misión es inspirar y educar a otros sobre la importancia de cuidar nuestro planeta. A través de talleres creativos y charlas apasionantes, busco mostrar cómo pequeños cambios pueden hacer una gran diferencia. Cuando no estoy explorando nuevas formas de reutilizar, puedes encontrarme en la naturaleza o en busca de tesoros reciclados en los mercados locales. Únete a mí en este viaje para crear un mundo más verde y vibrante. ¡Juntos somos el cambio!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 1162811764',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'usuario_id' => 4,
            'ubicacion_id' => 6,
            'roles_id' => 2,
            'avatar_id' => 1,
            'email' => 'consumidor@gmail.com',
            'nombre' => 'Juan',
            'apellido' => 'Garcia',
            'biografia' => '¡Hola a todos! Soy Juan, un apasionado por la economía sustentable. Desde Argentina, mi objetivo es explorar y promover formas innovadoras de equilibrar el crecimiento económico con la responsabilidad ambiental. A través del conocimiento y la colaboración, busco demostrar cómo podemos crear un futuro más próspero y sostenible para todos. Cuando no estoy investigando, disfruto compartiendo ideas en charlas y participando en proyectos que generan un impacto positivo. Si te interesa el mundo de la economía sostenible, ¡únete a esta conversación y juntos construyamos un mañana más verde!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 1162811765',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'usuario_id' => 5,
            'ubicacion_id' => 6,
            'roles_id' => 3,
            'avatar_id' => 2,
            'email' => 'donante1@gmail.com',
            'nombre' => 'Raquel',
            'apellido' => 'Fernandez',
            'biografia' => '¡Hey, qué tal! Soy Raquel, una tipa que encuentra pura felicidad en echar una mano a los demás. Desde Argentina, me encanta estar ahí para la gente y ver sonrisas en sus caras. Siempre lista para una buena causa, sea repartir abrazos o colaborar en proyectos solidarios. Cuando no estoy siendo la heroína del día, me relajo con un buen libro o explorando nuevos lugares. ¡Únete a mi mundo de buenas vibras y pequeños gestos que hacen la diferencia!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 1162811764',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'usuario_id' => 6,
            'ubicacion_id' => 6,
            'roles_id' => 2,
            'avatar_id' => 3,
            'email' => 'consumidor1@gmail.com',
            'nombre' => 'Federico',
            'apellido' => 'Gomez',
            'biografia' => '¡Hola, hola! Soy Fede, el tipo que siempre está dispuesto a echar una mano. Me encanta hacer el bien y sumar positividad por donde paso. Desde Argentina, me la paso buscando formas de alegrarle el día a la gente, ya sea con una palabra amable o una acción solidaria. Cuando no estoy siendo el amigo del año, me relajo con música o disfruto de la naturaleza. ¡Si te va la onda de contagiar buenas vibras, únete a mi viaje de alegría y camaradería!', 
            'password' => Hash::make('123'),
            'numero_celular' => '+549 1162811765',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}