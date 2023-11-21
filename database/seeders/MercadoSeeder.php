<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MercadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mercado')->insert([
            [
            'mercado_id' => 1,
            'ubicacion_id' => 2,
            'usuario_id' => 4,
            'titulo' => 'Placard de pino',
            'foto' => 'placard-pino.jpg',
            'caracteristica' => 'Está como nuevo. Tiene unos 1.20 x 1.70. Te lo puedo acercar hasta tu casa',
            'precio' => 15000,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 2,
            'ubicacion_id' => 2,
            'usuario_id' => 4,
            'titulo' => 'Juego de sillas de comedor',
            'foto' => 'juego-sillas.jpg',
            'caracteristica' => 'Juegos de comedor. Son de madera pino laqueada y tapizados chenille. Acepto Mercado Pago',
            'precio' => 20000,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 3,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Cómoda Kendall',
            'foto' => 'comoda.jpg',
            'caracteristica' => 'Tiene una medida de 140 cm de ancho x 40 cm de profundidad x 80 cm de alto. Se puede abonar al recibir ',
            'precio' => 26000,
            'autor' => 'Florencia',
            ],
            [
            'mercado_id' => 4,
            'ubicacion_id' => 6,
            'usuario_id' => 3,
            'titulo' => 'Sillón en perfecto estado',
            'foto' => 'sillon-marron.jpg',
            'caracteristica' => 'Por mudanza vendemos este sillón a un muy buen precio. Está usado pero en un muy estado y sin rotura. Podemos coordinar la entrega',
            'precio' => 30000,
            'autor' => 'Florencia',
            ],
            [
            'mercado_id' => 5,
            'ubicacion_id' => 6,
            'usuario_id' => 6,
            'titulo' => 'Cenicero Artesanal',
            'foto' => 'cenicero-artesanal.jpg',
            'caracteristica' => '¡Para los amantes de lo único y artesanal! Tengo a la venta un cenicero hecho a mano con todo el amor y creatividad. Diseñado cuidadosamente para añadir un toque especial a tus momentos de relax. Si estás buscando algo auténtico y funcional, este cenicero es ideal para ti. Dale un vistazo y lleva a casa un pedacito de arte funcional. ¡Haz tu espacio aún más especial con este cenicero único!',
            'precio' => 3000,
            'autor' => 'Federico',
            ],
            [
            'mercado_id' => 6,
            'ubicacion_id' => 6,
            'usuario_id' => 6,
            'titulo' => 'Ladrillos ecológicos por unidad',
            'foto' => 'ladrillo-eco.jpg',
            'caracteristica' => '¡Innovación en construcción! Tenemos a la venta ladrillos ecológicos hechos de plástico reciclado. Una forma sustentable y creativa de construir, cuidando el planeta. Estos ladrillos son resistentes y amigables con el medio ambiente. Si estás buscando opciones eco-friendly para tu próximo proyecto, ¡estos ladrillos son la respuesta! Construye de manera responsable y contribuye al reciclaje. ¡Contáctanos y descubre la nueva era en construcción sostenible!',
            'precio' => 300,
            'autor' => 'Federico',
            ],
            [
            'mercado_id' => 7,
            'ubicacion_id' => 6,
            'usuario_id' => 4,
            'titulo' => 'Muñecas personalizadas de Tela',
            'foto' => 'muñecas-tela.jpg',
            'caracteristica' => '¡Magia en cada puntada! Te ofrezco hermosas muñecas de tela hechas a mano con cariño y detalle. Cada muñeca tiene su propia personalidad y encanto, perfecta para regalar o para agregar un toque único a tu hogar. Si buscas algo especial y lleno de amor, estas muñecas son ideales. Explora nuestra colección y lleva a casa un pedacito de arte textil. ¡Dale vida a tus momentos con estas adorables compañeras de tela!',
            'precio' => 1200,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 8,
            'ubicacion_id' => 6,
            'usuario_id' => 4,
            'titulo' => 'Neceser de Jean',
            'foto' => 'neceser-reci.jpg',
            'caracteristica' => '¡Estilo y utilidad en un solo paquete! Aquí tienes a la venta un neceser confeccionado con jean reciclado. Un accesorio versátil y duradero para organizar tus cosas con estilo. Ideal para llevar tus básicos a donde quieras, ya sea para viajar o para el día a día. Si buscas algo único y amigable con el medio ambiente, este neceser es perfecto. ¡Dale un vistazo y añade un toque de moda sustentable a tu rutina!',
            'precio' => 3000,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 9,
            'ubicacion_id' => 6,
            'usuario_id' => 6,
            'titulo' => 'Portas sahumerios',
            'foto' => 'porta-sahumerio.jpg',
            'caracteristica' => '¡Aromas naturales para tu espacio! Te presento nuestra selección de sahumerios artesanales, creados con esmero y cariño. Cada sahumerio está hecho a mano con ingredientes naturales, ofreciéndote una experiencia aromática única. Disfruta de fragancias que te transportarán a lugares especiales y te ayudarán a crear ambientes relajantes. Si buscas una manera natural y encantadora de perfumar tu hogar, nuestros sahumerios son la elección perfecta. ¡Explora nuestras opciones y dale un toque de fragancia artesanal a tu vida!',
            'precio' => 900,
            'autor' => 'Federico',
            ],
            [
            'mercado_id' => 10,
            'ubicacion_id' => 6,
            'usuario_id' => 4,
            'titulo' => 'Recipientes para compost',
            'foto' => 'recipiente-compost.jpg',
            'caracteristica' => '¡Cuida la Tierra desde tu hogar! Tenemos a la venta recipientes composteros, ideales para convertir tus restos orgánicos en compost de alta calidad. Estos prácticos contenedores son amigables con el medio ambiente y te permiten reducir tu huella ecológica. Si estás buscando una forma sencilla y efectiva de contribuir al reciclaje y fertilizar tus plantas, este recipiente compostero es la opción perfecta. ¡Únete al movimiento eco y convierte tus desechos en nutrientes para la tierra!',
            'precio' => 3500,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 11,
            'ubicacion_id' => 6,
            'usuario_id' => 4,
            'titulo' => 'Telar artesanal',
            'foto' => 'telar-artesanal.jpg',
            'caracteristica' => '¡Tradición y arte en cada hilo! Te presento un aguayo confeccionado a mano utilizando la antigua técnica del telar artesanal. Cada pieza es única y lleva consigo la historia y cultura de nuestra tierra. Si buscas un toque auténtico y colorido para tu hogar o para llevar contigo, este aguayo es perfecto. Envuélvete en la calidez de la artesanía y añade un toque de tradición a tu vida. Explora nuestra selección y elige un aguayo que cuente su propia historia.',
            'precio' => 6000,
            'autor' => 'Juan',
            ],
            [
            'mercado_id' => 12,
            'ubicacion_id' => 6,
            'usuario_id' => 4,
            'titulo' => 'Almohadones de diseño',
            'foto' => 'almohadones.jpg',
            'caracteristica' => '¡Estilo y comodidad en cada detalle! Te presento nuestra colección de almohadones de diseño artesanal, creados con pasión y creatividad. Cada almohadón es una pieza única, con colores y patrones cuidadosamente elegidos para añadir un toque especial a tu espacio. Si buscas decoración que hable de tu personalidad y amor por lo hecho a mano, nuestros almohadones son la elección ideal. Transforma tu hogar con autenticidad y calidad. ¡Explora nuestras opciones y dale vida a tus ambientes con estos hermosos almohadones!',
            'precio' => 3500,
            'autor' => 'Juan',
            ],
        ]);
    }
}