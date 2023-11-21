@extends('layouts.main')

@section('title', 'Sobre nosotros')

@section('main')
    <section class="nosotros">
        <div class="containerNosotros">
            <div>
                <h1 class="text-center">Sobre nosotros</h1>
                <p class="text-center">Nuestra Historia: Compromiso con el Medio Ambiente y el Reciclaje</p>

                <p>En Alquimia, nuestra historia comienza con una idea impulsada por Jorgelina y Abril, dos apasionadas
                    desarrolladoras web comprometidas con el medio ambiente y la importancia del reciclaje. Nos dimos cuenta
                    de la falta de conciencia en el mundo y la poca atención que las instituciones provinciales brindaban a
                    esta causa vital.</p>
                <p>Decidimos tomar acción y crear Alquimia, una empresa enfocada en promover el cuidado del medio ambiente a
                    través del reciclaje. Nuestro logo representa nuestra visión y valores fundamentales.</p>
                <p>En Alquimia, creemos en el poder de la colaboración y la tecnología. A través de nuestras habilidades
                    como desarrolladoras web, buscamos crear soluciones innovadoras que faciliten la participación de las
                    personas en el reciclaje y promuevan un estilo de vida más sustentable.</p>
                <p>Estamos comprometidas a generar un cambio significativo en el mundo y brindar herramientas que hagan del
                    reciclaje una práctica cotidiana. Únete a nosotros en este viaje hacia un futuro más verde y sostenible.
                </p>
            </div>

            <img src="<?= url('img/nosotros/reciclaje.jpg') ?>" class="card-img-top" alt="Alquimia Recicla">
        </div>

    </section>

    <section class="marca">
        <h2>Nuestra marca</h2>
        <p>Alquimia comenzó con la elección de 4 palabras que la describirá de por vida</p>
        <div class="card-group">
            <div class="card card1">
                <img src="<?= url('img/nosotros/reutilizar.jpg') ?>" alt="Reutilizar">
                <div class="card-body">
                    <h3 class="card-title">Reutilizar</h3>
                </div>
            </div>
            <div class="card card2">
                <img src="<?= url('img/nosotros/naturaleza.jpg') ?>" alt="Naturaleza">
                <div class="card-body">
                    <h3 class="card-title">Naturaleza</h3>
                </div>
            </div>

            <div class="card card3">
                <img src="<?= url('img/nosotros/transformar.jpg') ?>" alt="Transformar">
                <div class="card-body">
                    <h3 class="card-title">Transformar</h3>
                </div>
            </div>
            <div class="card ">
                <img src="<?= url('img/nosotros/futuro.jpg') ?>" alt="Futuro">
                <div class="card-body">
                    <h3 class="card-title">Futuro</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="alquimiaNosotros">
        <p>
            Se conformó al ícono de la marca con la combinación de la hoja que representa la naturaleza. El lazo simplifica
            las flechas que componen al típico logo del reciclaje. El punto fue extraído del mencionado para dar más énfasis
            a la propuesta de la marca: El reciclaje.
        </p>
    </section>

    <div class="line"></div>

    <section class="peques">
        <div class="jor">
            <img src="<?= url('img/nosotros/jor-peque.jpg') ?>" alt="Jorgelina Pequeña" class="w-100">
            <div>
                <p>
                    Cierra los ojos por un instante y retrocede en el tiempo, regresa a tu infancia y recuerda esos momentos
                    maravillosos en los que jugabas con la tierra, disfrutabas del viento acariciando tu rostro y te
                    maravillabas al observar a esos pequeños seres que encontrabas en tu camino. Con Alquimia, nuestro
                    propósito es justamente ese: preservar esos momentos llenos de magia y alegría.
                </p>
                <p>
                    Imagina la sensación de sumergir tus manos en la suave tierra, moldeándola y creando pequeñas obras de
                    arte improvisadas. Cada grano entre tus dedos era una conexión directa con la naturaleza, una sensación
                    indescriptible que te transportaba a un mundo lleno de fantasía y libertad.
                </p>
                <p>
                    Recuerda cómo el viento se convertía en tu aliado, acompañándote en tus travesuras y haciéndote sentir
                    parte de un baile celestial. Esa brisa suave que acariciaba tu piel y susurraba secretos al oído, te
                    hacía sentir vivo y en armonía con todo lo que te rodeaba.
                </p>

            </div>
        </div>

        <div class="abril">
            <div>
                <p>
                    Y no olvides la emoción de descubrir pequeños bichitos que se escondían entre las hojas y los rincones
                    del jardín. Con ojos curiosos, te acercabas lentamente para observar su mundo diminuto y fascinante.
                    Eran encuentros efímeros pero llenos de asombro y respeto por la diversidad de la vida.
                </p>
                <p>
                    Alquimia quiere capturar la esencia de esos momentos, preservarlos en el tiempo y transmitirlos a través
                    de nuestra plataforma. Queremos que cada vez que recicles, hagas composta o hasta practiques bricolaje,
                    puedas revivir esos instantes mágicos de tu niñez, recordando la belleza de la tierra, la energía del
                    viento y la maravilla de los pequeños seres que pueblan nuestro mundo.
                </p>
                <p>
                    Así que, abre los ojos y déjate llevar por la nostalgia y la emoción. Alquimia está aquí para recordarte
                    que esos momentos de alegría y conexión con la naturaleza son un tesoro que debemos preservar y celebrar
                    en cada etapa de nuestras vidas.
                </p>
            </div>
            <img src="<?= url('img/nosotros/abril-peque.jpg') ?>" alt="Abril Pequeña" class="w-100">
        </div>

    </section>

    <section class="team">
        <h2>El team</h2>
        <div>
            <img src="<?= url('img/nosotros/jorgelina.jpg') ?>" alt="Futuro">
            <img src="<?= url('img/nosotros/abril.jpeg') ?>" alt="Futuro">
            {{-- <div class="hoja"></div> --}}
        </div>
    </section>
@endsection
