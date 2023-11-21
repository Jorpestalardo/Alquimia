<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        DB::table('empresas')->insert([
            [
                'empresa_id' => 1,
                'usuario_id' => 1,
                'tituloEmpresa' => 'Accenture',
                'tituloProducto' => 'Construcciones Ecológicas.',
                'descripcion' => 'En un mundo cada vez más consciente de la importancia de preservar nuestro planeta, las empresas tienen un papel fundamental en la adopción de prácticas sostenibles y la reducción de su impacto ambiental. Accenture, una reconocida empresa líder en servicios profesionales a nivel global, ha asumido este desafío y se ha convertido en un referente en el ámbito de la sostenibilidad.Una de las áreas en las que Accenture ha demostrado un compromiso destacado es la reducción de emisiones de CO2. Desde 2007 hasta 2019, la empresa logró una impresionante reducción del 52% en sus emisiones a nivel mundial. Esta cifra no solo refleja el esfuerzo de Accenture por mitigar el cambio climático, sino también su capacidad para implementar soluciones innovadoras que generan resultados tangibles.En Argentina, Accenture ha implementado una serie de iniciativas con el objetivo de promover la sostenibilidad y el cuidado del medio ambiente. En 2019, la empresa construyó 320 metros cuadrados de espacios verdes en sus instalaciones en el país. Estos espacios no solo brindan un entorno agradable para los empleados, sino que también contribuyen a la mejora de la calidad del aire y la biodiversidad local.La movilidad sustentable es otro aspecto en el que Accenture ha puesto su foco. En Argentina, la empresa ha incorporado 200 bicicleteros en sus instalaciones, promoviendo así el uso de bicicletas como medio de transporte limpio y saludable para sus empleados. Esta iniciativa no solo reduce las emisiones de gases contaminantes, sino que también fomenta un estilo de vida activo y saludable.La reducción de residuos es otra prioridad para Accenture. La empresa entregó kits de cubiertos a sus 9.700 empleados en Argentina, fomentando así el uso de utensilios reutilizables en lugar de plásticos de un solo uso. Además, Accenture ha realizado esfuerzos por reemplazar las botellas plásticas de un solo uso en los merenderos de sus instalaciones.En línea con su compromiso con la eficiencia energética, Accenture ha implementado tecnologías para la eficiencia energética y el consumo responsable del agua en Argentina. Por ejemplo, ha recambiado el 70% de las luces de sus edificios por luminarias LED, lo que no solo reduce el consumo de energía, sino que también prolonga la vida útil de las luminarias y disminuye los costos de mantenimiento.A nivel global, Accenture ha asumido un compromiso público para el año 2023: asegurar que el 100% de la energía utilizada en sus oficinas provenga de fuentes renovables. Esta ambiciosa meta demuestra el liderazgo de Accenture en la transición hacia un modelo energético más sostenible y su compromiso con la mitigación del cambio climático.En resumen, Accenture se destaca como una empresa líder en el ámbito de la sostenibilidad. Su compromiso con la reducción de emisiones de CO2, la promoción de espacios verdes, la movilidad sustentable, la reducción de residuos y la adopción de tecnologías eficientes refleja su enfoque integral y su responsabilidad ambiental. Accenture no solo ha asumido el desafío de ser una empresa más sostenible, sino que también se ha convertido en un ejemplo inspirador para otras empresas que buscan hacer una diferencia en el cuidado de nuestro planeta.',
                'img' => '20230607233748_accenture.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.accenture.com/ar-es/about/responsible-business/eco-action',
                'autor' => 'Accenture AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'usuario_id' => 2,
                'tituloEmpresa' => 'Arcos Dorados',
                'tituloProducto' => 'Comprometidos con la reducción de plásticos y la sostenibilidad.',
                'descripcion' => "En un esfuerzo por contribuir a la reducción de residuos plásticos y promover la sostenibilidad, McDonald's ha llevado a cabo importantes iniciativas en Argentina y América Latina. En 2019, la compañía dio un paso decisivo al dejar de entregar sorbetes y tapas de vasos plásticos de manera definitiva en sus locales del país. Este proyecto, que se inició en 2018 en América Latina, ha limitado la entrega de sorbetes en más de 2.200 locales, logrando una reducción impresionante de 200 toneladas de plástico.Además de esta medida, McDonald's está implementando el reemplazo de plásticos de un solo uso por envases de polipapel y cartulina certificados con el sello FSC en otros productos, como ensaladeras y platos. Esta transición hacia materiales más sostenibles no solo reduce el consumo de plástico, sino que también fomenta la utilización de materiales certificados y más amigables con el medio ambiente.McDonald's tiene la visión de alinearse con las metas globales establecidas por la Organización de las Naciones Unidas (ONU) y la propia compañía para minimizar la utilización de elementos plásticos de corta vida útil para el año 2030. Durante el año 2020, la empresa continuará trabajando en esa dirección, buscando nuevas soluciones y estrategias para reducir aún más su huella plástica.Además de su compromiso con la reducción de plásticos, McDonald's tiene en marcha proyectos en Argentina y la región que se centran en la separación de residuos y el abastecimiento de materias primas provenientes de fuentes sustentables. Estas iniciativas no solo contribuyen a la gestión adecuada de los residuos, sino que también promueven la adopción de prácticas responsables en la cadena de suministro, impulsando la transición hacia una economía circular.En resumen, McDonald's se destaca como una empresa comprometida con la reducción de plásticos y la sostenibilidad. A través de la eliminación de sorbetes y tapas plásticas, el reemplazo de plásticos de un solo uso por materiales certificados y la búsqueda de alinearse con metas globales, la compañía demuestra su liderazgo en la industria de la comida rápida y su compromiso con un futuro más sostenible y libre de plásticos de corta vida útil.",
                'img' => '20230607234214_arcos-dorados.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.arcosdorados.com/tag/sustentabilidad/',
                'autor' => 'Arcos Dorados AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 3,
                'usuario_id' => 2,
                'tituloEmpresa' => 'Avon',
                'tituloProducto' => 'Objetivos de Desarrollo Sostenible.',
                'descripcion' => 'Avon, al evaluar su impacto en el mundo, ha identificado dos Objetivos de Desarrollo Sostenible (ODS) de la ONU en los que puede hacer una contribución significativa a través de su modelo de negocio. Uno de estos objetivos es la Producción y Consumo Responsable. A nivel global, Avon está trabajando para mejorar su impacto operativo mediante acciones que fomentan el reciclaje de materiales y la reducción del uso de recursos naturales.En Argentina, la planta de producción de Avon en Moreno ha implementado medidas efectivas de reciclaje, logrando un promedio anual del 90% de reciclaje de residuos como cartones, pallets, plásticos y vidrios. La empresa ha reducido en un 50% la cantidad de residuos enviados a los rellenos sanitarios y ha implementado el compostaje en la planta con la visión de alcanzar la meta de Cero Relleno Sanitario. En línea con estos esfuerzos, en el Centro de Distribución de San Fernando, Avon recicla un promedio anual del 85% de los residuos.Estas iniciativas demuestran el compromiso de Avon con la sostenibilidad y su enfoque en la gestión responsable de los recursos y los residuos. Al reciclar una gran cantidad de materiales y reducir su impacto ambiental, Avon está contribuyendo de manera significativa a la protección del medio ambiente y al logro de los ODS de la ONU.Avon continúa buscando oportunidades para mejorar su desempeño ambiental y promover prácticas sostenibles en todas sus operaciones. A través de su compromiso con la producción y el consumo responsables, la empresa está marcando la diferencia en el camino hacia un futuro más sostenible.',
                'img' => '20230608003313_avon.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => '20230608003313_avon.png',
                'autor' => 'Avon AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 4,
                'usuario_id' => 1,
                'tituloEmpresa' => 'Banco Galicia',
                'tituloProducto' => 'la entidad bancaria amplió su Sistema de Gestión Ambiental.',
                'descripcion' => 'Banco Galicia, en su compromiso por favorecer la desaceleración del cambio climático, ha implementado una serie de acciones para reducir su impacto ambiental. Una de estas acciones ha sido la ampliación de su Sistema de Gestión Ambiental al edificio Plaza Galicia, que ha obtenido la certificación bajo la norma ISO 14.001/2015. Asimismo, el banco ha llevado a cabo el reemplazo de energía en la Torre Galicia y la Casa Matriz, abasteciéndolas con electricidad proveniente de fuentes renovables. Actualmente, el 30% de la demanda eléctrica se cubre de esta manera, logrando una disminución del 7% en la huella de carbono.Otra iniciativa destacada es el plan de recambio de iluminarias en más de 60 sucursales, en el que se han instalado sistemas de iluminación LED. Este cambio ha permitido una reducción del 19% en el consumo de electricidad en comparación con el año anterior. Para el año 2020, Banco Galicia tiene previsto ampliar la compra de energía renovable y desarrollar el concepto de cartera verde, incorporando la huella de carbono al negocio.Estas acciones demuestran el compromiso de Banco Galicia con la sostenibilidad y su preocupación por mitigar los efectos del cambio climático. Al ampliar su Sistema de Gestión Ambiental, certificar sus edificios y adoptar fuentes de energía renovable, el banco está contribuyendo activamente a la reducción de emisiones de carbono y a la protección del medio ambiente.Banco Galicia continúa trabajando en la implementación de medidas sostenibles y en la búsqueda de nuevas oportunidades para reducir su impacto ambiental. Con su enfoque en la adopción de prácticas más responsables y la promoción de la energía renovable, el banco se posiciona como un referente en la industria financiera en términos de sostenibilidad y lucha contra el cambio climático.',
                'img' => '20230608003422_banco-galicia.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.galicia.ar/personas/sustentable',
                'autor' => 'Banco Galicia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 5,
                'tituloEmpresa' => 'Garnier',
                'usuario_id' => 2,
                'tituloProducto' => 'Un futuro sin envases de plástico virgen.',
                'descripcion' => 'Garnier, una de las principales marcas de belleza natural del mundo, está comprometida en ser más sostenible. A través de la iniciativa Garnier Green Beauty, busca transformar cada etapa de su cadena de valor para reducir o eliminar su impacto ambiental. Garnier se compromete a reducir su impacto ambiental a través de cuatro pilares:Abastecimiento solidario: Garnier implementa prácticas de comercio justo en toda su cadena de suministro para apoyar a agricultores y trabajadores excluidos del mercado laboral.Fórmulas ecológicas y Green Science: La marca selecciona proveedores considerando aspectos éticos, impacto medioambiental y factores sociales. Busca utilizar ingredientes producidos y cosechados de manera responsable y sostenible.Envases reciclados y reciclables: Garnier se compromete a dejar de utilizar plástico virgen en sus envases para el año 2025. En su lugar, utilizará plástico 100% reciclado, completamente reutilizable o compostable, ahorrando 37,000 toneladas de plástico al año.Energías renovables: La marca trabaja para que todas sus plantas industriales sean neutrales en carbono para el año 2025, utilizando únicamente energías renovables.',
                'img' => '20230608003639_garnier.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.garnierusa.com/es/acerca-de-garnier/greener-beauty',
                'autor' => 'Garnier AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 6,
                'usuario_id' => 1,
                'tituloEmpresa' => 'Carrefour',
                'tituloProducto' => 'La cosmética ecológica de Carrefour.',
                'descripcion' => 'Carrefour, una cadena de supermercados, se compromete a satisfacer las necesidades de sus clientes al apostar por la cosmética bio en sus marcas propias y ofrecer productos naturales, innovadores, de calidad y al mejor precio.Dentro de sus marcas propias de cosmética, Carrefour cuenta con Nectar of Bio de Les Cométiques Design Paris y Carrefour Soft BIO. Nectar of BIO es una línea de cosmética ecológica certificada y respetuosa con el medioambiente que ofrece productos para el cuidado facial, capilar y corporal formulados con ingredientes naturales como nenúfar blanco, orquídea, algas marinas y pomelo.Carrefour Soft Bio es otra marca propia de productos ecológicos que se caracteriza por utilizar materias primas provenientes de la agricultura ecológica y de origen natural. Esta marca cuenta con productos como discos desmaquillantes, dentífrico, jabón suave, gel íntimo, gel de ducha, stick labial y crema de manos, todos certificados bajo el sello Eco Cert Cosmos Organic.Carrefour busca democratizar los productos bio como parte de su estrategia para liderar la transición alimentaria y ofrece el surtido más completo en productos de perfumería e higiene. La compañía se esfuerza por ser innovadora en todos sus artículos, brindando productos de valor añadido en todas las secciones de sus supermercados y siempre con los mejores precios. Además, se aseguran de que los productos sean sostenibles, con un alto porcentaje de ingredientes naturales en sus geles de ducha, dentífrico, jabón suave y crema de manos.',
                'img' => '20230608003841_carrefour.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.ecoticias.com/cosmetica-bio/207684_cosmetica-bio-carrefour-ecologia-calidad-innovacion',
                'autor' => 'Carrefour AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 7,
                'usuario_id' => 1,
                'tituloEmpresa' => 'Quilmes',
                'tituloProducto' => 'Consciente de la crisis climática mundial.',
                'descripcion' => 'En el panorama actual, las empresas están asumiendo cada vez más su responsabilidad en la lucha contra el cambio climático y la adopción de prácticas sostenibles. Quilmes, una compañía reconocida, se ha destacado por su compromiso con el desarrollo sostenible y su respuesta a la crisis climática mundial.En mayo de 2019, Quilmes dio un paso significativo al firmar un acuerdo de compra de energía renovable con Central Puerto, líder en el sector energético en Argentina. Este acuerdo, valorado en US$283 millones a lo largo de 20 años, refleja el compromiso de Quilmes con la utilización de fuentes de energía limpias y renovables.Como parte de esta iniciativa, Quilmes llevó a cabo la construcción del Parque Eólico Budweiser en la provincia de Córdoba. Este parque eólico no solo es un hito en la transición hacia una matriz energética más sostenible en Argentina, sino que también permitirá a la compañía reducir sus emisiones en un 25%. Esta reducción equivale a retirar aproximadamente 500.000 autos de las ciudades, lo que demuestra el impacto significativo que Quilmes está logrando en la lucha contra el cambio climático.La implementación de energía renovable en sus operaciones convierte a Quilmes en la primera empresa de consumo masivo en Argentina en utilizar el 100% de energía eléctrica proveniente de fuentes renovables en el año 2020. Esta destacada acción establece un ejemplo inspirador para otras empresas en el país y demuestra el liderazgo de Quilmes en el sector en términos de sostenibilidad y responsabilidad ambiental.Además de contribuir a la modificación de la matriz energética del país, la iniciativa de Quilmes también tiene beneficios económicos y sociales. La utilización de energía renovable reduce la dependencia de los recursos no renovables, generando un impacto positivo en la economía y promoviendo la creación de empleo en el sector de energías limpias. Al impulsar el uso de fuentes renovables, Quilmes demuestra su compromiso con el desarrollo sostenible y su contribución al bienestar de la sociedad.En resumen, Quilmes ha demostrado su liderazgo y compromiso al firmar un acuerdo de compra de energía renovable y al inaugurar el Parque Eólico Budweiser. Estas acciones han permitido a la compañía reducir significativamente sus emisiones y convertirse en la primera empresa de consumo masivo en Argentina en utilizar energía eléctrica 100% renovable. Esta iniciativa no solo contribuye a la modificación de la matriz energética del país, sino que también establece un ejemplo inspirador para otras empresas y demuestra el compromiso de Quilmes con la sostenibilidad y la lucha contra el cambio climático.',
                'img' => '20230608004036_quilmes.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.quilmes.com.ar/history',
                'autor' => 'Quilmes AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 8,
                'usuario_id' => 2,
                'tituloEmpresa' => 'Arcor',
                'tituloProducto' => 'Impactos con grandes reducciones.',
                'descripcion' => 'En el mundo empresarial actual, cada vez es más importante que las compañías asuman su responsabilidad en la gestión sustentable de los negocios. Una empresa que ha destacado en este sentido es Arcor, líder en la industria alimentaria y un ejemplo a seguir en términos de compromiso con el medio ambiente.Desde hace varios años, Arcor ha implementado diversas estrategias para reducir la cantidad de residuos que genera y darles una nueva vida a través de procesos de reciclaje e innovación. Sus esfuerzos se han traducido en resultados significativos, ya que han logrado disminuir en más de 14.000 toneladas la cantidad de residuos enviados a enterrar desde el año 2016. Esta cifra es realmente impresionante y refleja el compromiso real de la compañía con el cuidado del medio ambiente.El reciclaje también es una prioridad para Arcor. En sus plantas de materia prima y de consumo masivo, han alcanzado tasas de reciclado superiores al 94% y al 85%, respectivamente. Esto significa que la mayoría de los materiales utilizados en sus procesos productivos son reintegrados en nuevas etapas de producción, minimizando así la generación de residuos. Además, Arcor ha demostrado su capacidad para convertir residuos en recursos útiles. En 2019, convirtieron 1.500 toneladas de piel y semilla de tomate en insumos principales para la producción de alimento balanceado. Esta iniciativa no solo reduce la cantidad de residuos, sino que también genera productos de valor agregado y promueve la economía circular.Pero Arcor no se detiene ahí. La compañía también se ha enfocado en reducir el impacto ambiental de sus residuos. Han implementado tecnologías de compostaje para minimizar la cantidad de material destinado a los rellenos sanitarios. Gracias a estas tecnologías, los residuos orgánicos se transforman en compost, que puede ser utilizado como fertilizante o mejorador de suelos. De esta manera, Arcor evita la disposición final de residuos y contribuye a un ciclo más sostenible.En resumen, Arcor es un ejemplo inspirador de una empresa comprometida con la gestión sustentable de sus negocios. Su enfoque en la reducción de residuos, el aumento de las tasas de reciclado y la búsqueda constante de soluciones innovadoras muestra su liderazgo en la promoción de prácticas sustentables en la industria alimentaria. Arcor demuestra que es posible ser una empresa exitosa y rentable al mismo tiempo que se protege y conserva el medio ambiente.',
                'img' => '20230608004537_arcor.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.arcor.com/ar/sustentabilidad',
                'autor' => 'Arcor AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 9,
                'usuario_id' => 2,
                'tituloEmpresa' => 'Ledesma',
                'tituloProducto' => '',
                'descripcion' => 'Ledesma, una empresa comprometida con la sostenibilidad y la protección del medio ambiente, ha llevado a cabo diversas iniciativas que reflejan su enfoque hacia la generación de valor de manera sostenible y el cuidado de los recursos naturales.Uno de los ejemplos más destacados es la donación de 76.000 hectáreas para la creación del Parque Nacional Calilegua. Esta acción demuestra el compromiso de Ledesma con la conservación de la biodiversidad y la protección de los ecosistemas naturales.Ledesma también ha implementado un Plan de Biodiversidad, que se basa en un enfoque integrado de estándares internacionales como el IFC, el Acuerdo de París, las Metas de Aichi y los Objetivos de Desarrollo Sostenible. Este plan tiene como objetivo generar valor de manera sostenible, cuidando el ambiente y los recursos naturales.En términos de energía, Ledesma ha logrado un hito significativo al generar el 50% de la energía consumida a partir de combustible renovable de la caña de azúcar. Esta iniciativa demuestra el compromiso de la empresa con la utilización de fuentes de energía limpias y la reducción de emisiones de gases de efecto invernadero.Además, Ledesma ha establecido una colaboración de 10 años con la Fundación Proyungas para la implementación del Paisaje Productivo Protegido. A través de esta asociación, la empresa busca encontrar un equilibrio entre el medio ambiente y la producción, promoviendo prácticas sostenibles en sus operaciones.En cuanto a las emisiones de gases de efecto invernadero, Ledesma ha logrado reducir estas emisiones en un 18% en los últimos 13 años en su complejo agroindustrial en la provincia de Jujuy. Este logro demuestra el compromiso de la empresa con la mitigación del cambio climático y la reducción de su huella ambiental.Ledesma también ha obtenido la certificación ISO 14001 para su Sistema de Gestión Integrado de Residuos Industriales. Esta certificación demuestra el compromiso de la empresa con la gestión responsable de los residuos y el cumplimiento de los estándares ambientales.Además, Ledesma ha obtenido el Sello Producto Yungas, una certificación de origen para los productos elaborados en la región de Yungas. Este sello reconoce las prácticas ambientales responsables y las condiciones laborales apropiadas en el proceso de producción.La empresa ha adoptado un Sistema de Gestión Ambiental y Social basado en normas internacionales, lo que le permite demostrar y asegurar su desempeño ambiental y social en todas sus plantas productivas. Este enfoque metodológico de mejora continua refleja el compromiso de Ledesma con la excelencia en la gestión ambiental y social.En resumen, Ledesma es una empresa que ha demostrado un sólido compromiso con la sostenibilidad y la protección del medio ambiente a través de diversas iniciativas. Desde la donación de tierras para la creación de un parque nacional hasta la implementación de planes de biodiversidad, generación de energía renovable, reducción de emisiones, certificaciones ambientales y sistemas de gestión integrados, Ledesma se destaca como un ejemplo inspirador en el ámbito de la sostenibilidad y la responsabilidad ambiental.',
                'img' => '20230608004804_ledesma.png',
                'fechaPublicacion' => '2023-11-20',
                'link' => 'https://www.ledesma.com.ar/informe-sostenibilidad/ambiente/',
                'autor' => 'Ledesma AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
