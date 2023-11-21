<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            [
            'blog_id' => 1,
            'usuario_id' => 1,
            'titulo' => 'Conoce cuáles son y para qué sirven los códigos de identificación de los plásticos',
            'subtitulo' => 'Clasificación de los 7 códigos de identificación para plástico',
            'descripcion' => 'La existencia de una gran diversidad de materiales plásticos y de sus posibilidades de reciclaje motivó la creación de unos códigos de identificación, cuyo símbolo original data de 1970. Este, de hecho, fue creado por un grupo de estudiantes que participaban en un concurso de la Container Corporation of America para celebrar el primer día de la tierra, habiendo sido elegido entre varios diseños. El símbolo refleja cada uno de los pasos del reciclaje: recogida de materiales, proceso de reciclado y compra de dichos productos ya reciclados. No obstante, los códigos de identificación para plástico llegaron años después de manos de la Sociedad Estadounidense de la Industria del Plástico. Estos nacieron en 1988 con el objetivo de facilitar la identificación de cada uno de los diferentes tipos de plástico y poder separarlos para su posterior reciclaje.',
            'texto' => '
            NÚMERO 1: PET O PETE (POLIETILENO TEREFTALATO            
            Es el tipo de plástico más utilizado en los envases alimentarios gracias a propiedades como su ligereza, su bajo coste de producción, así como sus grandes posibilidades de reciclaje. Lo habitual es encontrarlo en bandejas alimentarias. Al ser un material circular, el PET puede ser reciclado y volver a ser lo que era, por lo que es común encontrar en el mercado bandejas o botellas de rPET, además de otros muchos productos elaborados con este material.
            A este respecto, en SP Group llevamos unos años introduciendo el material reciclado en el proceso de producción de nuestra lámina de PET para la fabricación de bandejas. Ello nos ha llevado a nuestra lámina monocapa rPET termoformable, que está compuesta de material reciclado al 100% y es 100% reciclable, procediendo más del 50% de su composición de otras bandejas recicladas posconsumo. De esta manera, conseguimos darle una segunda vida a uno de nuestros productos más demandados.
            
            NÚMERO 2: HDPE (POLIETILENO DE ALTA DENSIDAD)
            Este código de identificación del plástico se usa para designar al tipo de plástico resistente a productos químicos, poco flexible, pero fácil de fabricar y de manejar. Sus usos más habituales son las bolsas de supermercado, productos de limpieza y de higiene personal, envases de leche, zumos o yogurt. Una vez reciclado puede utilizarse nuevamente para botellas de detergente, tubos, envases de aceite o incluso para muebles de jardín.

            NÚMERO 3: V O PVC (VINÍLICOS O CLORURO DE POLIVINILO)
            Dentro de los códigos de identificación de los plásticos, el número 3 se corresponde con materiales que destacan por tener cloro en su composición, lo que hace que su proceso de reciclaje sea más complejo. Sin embargo, cabe destacar su alta resistencia a los ácidos, así como su dureza, que permite que sea utilizado sobre todo para tubos y cañerías, botellas de detergente, equipamientos médicos, suelas para zapatos y un largo etcétera.

            NÚMERO 4: LDPE (POLIETILENO DE BAJA DENSIDAD)
            De la familia de los polietilenos, se trata de un plástico muy flexible que es ampliamente usado por la industria alimentaria debido a sus prestaciones de sellado y a la velocidad que alcanza el envasado en máquina. Así mismo, también es frecuente encontrarlo en forma de bolsas de todo tipo, envases de laboratorio o de comida congelada. Además, tras su reciclaje se puede utilizar de nuevo en contenedores y papeleras, paneles, tuberías o baldosas.

            NÚMERO 5: PP (POLIPROPILENO)
            Se trata de un material perfecto para envases microondables ya que destaca por su dureza, barrera al vapor y resistencia al calor. Ello lo hace ideal, entre otras cosas, para envases de alimentos que se esterilizan. También es habitual encontrarlo en botes de salsas, tapas y envases de uso médico y veterinario. Además, tras su proceso de reciclado, es habitual emplearlo en la elaboración de cepillos, bandejas, cables de batería o señales luminosas.

            NÚMERO 6: PS (POLIESTIRENO)
            El poliestireno es un material que se usa principalmente en bandejas para alimentos, en la industria de los lácteos, para embalajes de electrodomésticos e incluso para la fabricación de vasos para bebidas calientes. Así mismo, es un material con una vida útil muy larga y que puede ser reciclado infinitas veces, lo que lo convierte en un material con propiedades bastante sostenibles. No obstante, como principal punto negativo del material, encontramos que altas temperaturas, a más de 80 °C, libera estirenos. El estireno está clasificado como un posible carcinógeno humano por la Agencia de Protección Ambiental (EPA) y por la Agencia Internacional para la Investigación del Cáncer (IARC).
            
            NÚMERO 7: OTROS (MEZCLA DE OTROS PLÁSTICOS)
            Dentro de los códigos de identificación para el plástico, el número 7 es aquel en el que se incluyen una gran variedad de materiales plásticos que son muy difíciles de reciclar. En muchos casos, los artículos clasificados con este número incluyen varios tipos diferentes de plástico en su composición. Aunque es habitual encontrarlos en gafas de sol o DVD, también se utiliza en algunas clases de botellas de agua o ciertos envases alimentarios.',
            'conclusion' => 'Además de conocer y saber cuáles son los códigos de identificación de los plásticos, es importante tener en cuenta la Ley de Residuos y Suelos Contaminados, que delimita las obligaciones de productores y gestores con el objetivo de conseguir una política de residuos eficaz.',
            'fechaPublicacion' => now(),
            'autor' => 'Abril',
            'img' => 'simbolos-reciclaje-de-plasticos.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'blog_id' => 2,
            'usuario_id' => 2,
            'titulo' => '¿Cuáles son las herramientas de bricolaje que debes tener en casa para ser un experto?',
            'subtitulo' => 'Nunca deben faltar herramientas de bricolaje en casa, pues siempre hay algo que arreglar o crear. A continuación te presentamos las más esenciales.',
            'descripcion' => 'En Alquimia, nuestra marca se enorgullece de promover el sentido de reciclar y dar nueva vida a los objetos. Sabemos lo importante que es contar con las herramientas adecuadas para llevar a cabo proyectos de bricolaje de manera efectiva y creativa. Desde un destornillador versátil hasta una pistola de pegamento resistente, estas herramientas te ayudarán a transformar objetos viejos en tesoros renovados. No importa si eres principiante o experimentado, tener las herramientas correctas marca la diferencia en tus proyectos de reciclaje. ¡Explora nuestro artículo para llevar tu creatividad al siguiente nivel en el mundo del bricolaje y el reciclaje! ',
            'texto' => 'Destornillador multipuntas 
            Probablemente sea una de las  herramientas de bricolaje básicas. Lo mejor es tener un destornillador multipuntas con cabezas intercambiables Asimismo, considerar que los destornilladores eléctricos te ahorrarán mucho trabajo y tiempo.
            Martillo con sacaclavos
            A la hora de unir distintas piezas de madera, a veces es más sencillo clavar, así que es recomendable un martillo con sacaclavos, por si te equivocas o tienes que desmontar algún mueble.
            Taladro
            Existe una amplia gama de taladros eléctricos en el mercado que te ayudarán a hacer agujeros perfectos en casi cualquier superficie. Incluso existen algunos con interruptor de bloqueo en gatillo para mayor control y reducción de fatiga.
            Asimismo, se debe considerar tener un set de brocas para el taladro. Las brocas son unas piezas metálicas imprescindibles para colocar en el taladro y poder perforar superficies.
            Alicates
            Los alicates se usan principalmente para apretar o desenroscar tuercas, sujetar objetos pequeños con fuerza, pelar cables o doblar alambres.
            Nivel de burbuja
            Un nivel de burbuja te ayudará para comprobar que cualquier objeto esté perfectamente alineado de forma horizontal o vertical. 
            Llave inglesa
            La llave inglesa es una herramienta de bricolaje que se utiliza para aflojar o ajustar tornillos y tuercas de cualquier tipo y tamaño, ya que se puede ajustar su rango de apertura.
            Juego de brochas
            Elegir el tipo de brocha adecuada para tus distintos proyectos de pintura asegura unos excelentes resultados, ya sea en superficies como, madera, enlucido, paredes estucadas o lisas. 
            Lijadora o pulidora
            Una lijadora es una herramienta de bricolaje  que sirve para alisar o pulir cualquier tipo de superficie. Con ella podrás también realizar proyectos más pequeños de bricolaje casero como sacar el barniz, la pintura o el óxido de un mueble, una puerta, una pared o un tablero. 

            Sin embargo, es importante que recuerdes que no todas las lijadoras sirven para realizar el mismo tipo de trabajo, así que debes leer muy bien el uso y modo en que se debe utilizar. Asimismo, utilizar la lija adecuada para el material que se vaya a trabajar.
            Papel de lija
            El papel de lija es fundamental para preparar superficies para pintar, remover exceso de material, eliminar óxido o pulir. 

            Si bien las lijas pueden diferenciarse por el grano, también se diferencian por ser lijas al agua o lijas al seco. Las lijas de agua requieren humedecerse para funcionar de manera óptima, mientras que las lijas secas no requieren el contacto con ningún líquido.',
            'conclusion' => 'Recuerda utilizar el equipo de protección personal adecuado y adquirir productos de calidad.',
            'fechaPublicacion' => now(),
            'autor' => 'Pestalardo',
            'img' => 'bricolaje.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'blog_id' => 3,
            'usuario_id' => 3,
            'titulo' => 'Ambiente adhiere al “Mes del compostaje”',
            'subtitulo' => 'Este proceso, accesible para implementarse en el hogar, puede aportar soluciones al descarte de alimentos y residuos, a la presión sobre los suelos y a la lucha contra el cambio climático.',
            'descripcion' => 'Quienes se preocupan por cuidar su jardín, pequeño huerto o macetas de su hogar han encontrado en los fertilizantes orgánicos una excelente forma de mantenerlos en óptimo estado y ayudar al medio ambiente al mismo tiempo. Es aquí donde compostar se ha convertido en una opción simple y poco costosa para tener un abono orgánico de primera calidad. ¿Quieres hacerlo tú mismo? Aquí te dejamos el paso a paso, así como las herramientas y materiales que necesitarás para iniciarte en el mundo del compost en casa',
            'texto' => 'El Ministerio de Ambiente y Desarrollo Sostenible adhirió a la campaña “Mes del compostaje”, que se celebra entre el 22 de marzo (Día del Agua) y el 22 de abril (Día de la Tierra). La iniciativa fue tomada mediante la Resolución 92/2020 de esta área nacional, como una acción para el cuidado del planeta que puede realizarse respetando aislamiento social, preventivo y obligatorio vigente vinculado a la pandemia del coronavirus.

            Para esto, la cartera ambiental que dirige Juan Cabandié promoverá campañas orientadas a aumentar el grado de conocimiento del tema y la capacitación. En sintonía con esto, se prevé la comunicación de recomendaciones, de los beneficios del compostaje y de otros datos útiles sobre el tema, a través de los distintos canales de difusión del Ministerio. Además, desde el área de Ambiente nacional, se invitará a la comunidad a participar con acciones tales como dar a conocer sus experiencias y contribuir al cuidado del planeta.
            
            Cabe recordar que cada año un tercio de los alimentos producidos son desperdiciados y la tasa demográfica mundial aumenta, y con esto la producción alimentaria, la competencia por acaparar tierra, agua y el impacto del cambio climático. Según datos de la Organización de las Naciones Unidas para la Agricultura y la Alimentación (FAO) el 28 % de las tierras agrícolas producen cultivos que no son aprovechados, en cuyo proceso se desperdician 250 km3 de agua; mientras que la huella de carbono de los alimentos producidos y no consumidos se estima en 3,3 gigatoneladas de CO2.
            
            Las técnicas del compostaje pueden aportar soluciones a esta problemática, ya que revisten procesos de biotransformación de la materia orgánica a partir de los residuos sólidos orgánicos separados, así como de los desechos de los animales y restos de alimentos de la producción ganadera y agrícola.
            
            El compost es también una fuente de materia orgánica vital para el suelo que aporta humedad, aire y nutrientes. También es importante porque mejora la actividad biológica del sustrato en general y fortalece su resiliencia ante las crisis, como la sequía, incluyendo la adaptación al cambio climático.
            
            Por otra parte, se considera que el compost es económicamente viable y ayuda a los agricultores a mejorar la productividad de sus suelos y sus ingresos. Es por esto que resulta importante visibilizar sus técnicas en las comunidades urbanas, periurbanas y rurales para mejorar y aprovechar la gestión de residuos en todos los ámbitos de la vida cotidiana.
            
            Finalmente, entre las principales ventajas del compostaje se pueden enumerar los menores costos en la gestión de residuos sólidos urbanos; la mayor disponibilidad y recuperación de nutrientes y materia orgánica para la agricultura y la jardinería; la menor cantidad de residuos depositados en rellenos sanitarios o en basurales a cielo abierto; la disminución de vectores de enfermedades y la ausencia de patógenos en el sitio de disposición final; la disminución de gases de efecto invernadero, en especial de metano, y la baja de energía destinada a recolectar, tratar y disponer los residuos.',
            'conclusion' => 'La adhesión al “Mes del compostaje” se realiza en sintonía con actividades de organizaciones como FAO, el Instituto Nacional de Tecnología Agropecuaria (INTA) y la Red Nacional de Municipios y Comunidades que fomentan la Agroecología (RENAMA).',
            'fechaPublicacion' => now(),
            'autor' => 'Rios',
            'img' => 'mes-compostaje.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'blog_id' => 4,
            'usuario_id' => 4,
            'titulo' => 'Conversatorio “La economía circular como oportunidad para el desarrollo sostenible de las ciudades”',
            'subtitulo' => 'Objetivo: El conversatorio busca compartir experiencias enfocadas en lo regional, nacional y municipal mostrando casos concretos de investigaciones que podrían favorecer la gestión de los residuos, el reciclaje de minerales y la economía circular generando un gran impulso ambiental en América Latina y el Caribe.',
            'descripcion' => 'Antecedentes: Para América Latina y el Caribe la economía circular representa una oportunidad de desarrollo que sentaría las bases para una recuperación sostenible, duradera y alineada con el cumplimiento de la Agenda 2030 para el Desarrollo Sostenible, tras la pandemia de enfermedad por coronavirus (COVID-19). Por lo que es necesario que se enfoque en medidas para avanzar hacia un modelo circular que permita disociar la actividad económica del uso de recursos y de la generación de desechos, al tiempo que se promueven nuevos modelos de negocios y empleos (Panel Internacional de Recursos, 2020; Schröder, 2020).',
            'texto' => 'Es necesario redireccionar acciones hacia un cambio de modelo donde la estructura productiva reduzca el uso de materiales, se enfoque en sectores intensivos en conocimientos, con altas tasas de crecimiento de la demanda, y se preserven los recursos naturales y el ambiente. A su vez, el sector de minerales y metales es clave para avanzar en la transición energética global, fomentar el reciclaje y bien gestionado puede convertirse en un motor de desarrollo para la esperada recuperación y reapertura económica.

            Por otro lado, al ser una región altamente urbanizada las ciudades tienen una intensa generación de gases de efecto invernadero y de residuos sólidos por lo que juegan un rol crucial para promover y facilitar la economía circular y así enfrentar frente a estos desafíos generando crecimiento económico, empleo y calidad ambiental.
            
            A nivel internacional, diversos países ya han puesto en marcha acciones en materia de economía circular que, dadas las interconexiones de la economía mundial, tendrán repercusiones en la región. Por lo tanto, es urgente que cada país identifique las áreas y los sectores en los que se deben concentrar los esfuerzos para crear una estrategia de crecimiento sostenible adecuada.
            
            En línea con lo anterior, la Comisión Económica para América Latina y el Caribe (CEPAL), y la Cooperación Alemana a través del Programa Cooperación Regional para la Gestión Sustentable de los Recursos Mineros (MinSus) y con el apoyo de la Cuenta de Desarrollo de las Naciones Unidas buscan generar un espacio de diálogo virtual para intercambiar experiencias y estimular la discusión en la temática.',
            'conclusion' => 'El evento virtual será abierto y tendrá alcance regional. La discusión del evento se desarrollará mediante una presentación inicial por parte de CEPAL donde se mostrará un panorama de las diversas líneas de investigación enfocadas en economía circular, y posteriormente, los ponentes podrán resumir los principales resultados de sus colaboraciones y responder a la pregunta que les haga el moderador.',
            'fechaPublicacion' => now(),
            'autor' => 'Garcia',
            'img' => 'economia-circular.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);

        DB::table('blog_have_etiquetas')->insert([
            [
                'blog_id' => 1,
                'etiquetas_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 1,
                'etiquetas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 2,
                'etiquetas_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 2,
                'etiquetas_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 3,
                'etiquetas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 3,
                'etiquetas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 4,
                'etiquetas_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'blog_id' => 4,
                'etiquetas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
