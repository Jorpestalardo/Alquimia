@extends('layouts.main')

@section('title', 'Página Principal')

@section('main')
    <section class="inicio">
        <div class="portada">
            <h1 class="visually-hidden">Alquimia</h1>
            <div class="alquimia"></div>
            <p>"No se puede obtener nada sin primero dar algo a cambio".</p>
        </div>
    </section>

    <section class="bienvenidos">
        <div class="bievenidaInfo">
            <h2 id="bienvenidos">¡Bienvenidos!</h2>
            <p>Aquí fomentamos el intercambio de residuos y promovemos el bricolaje como una forma divertida y creativa de
                dar nueva vida a objetos que podrían convertirse en basura.</p>
            <p>Nuestra plataforma conecta a usuarios interesados en intercambiar materiales reciclables como plástico,
                papel, vidrio y más. ¡Únete a nosotros y juntos reduciremos la cantidad de residuos en vertederos, dándoles
                un nuevo propósito! </p>

            @auth()
                @if (auth()->user()->roles_id == 3)
                    <a href="{{ route('donador.index') }}" class="btn">Volver a mi perfil donante</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a href="{{ route('consumidor.index') }}" class="btn">Volver a mi perfil consumidor</a>
                @endauth
            @else
                <a href="{{ route('auth.login') }}" class="btn">¿Querés ser parte?</a>
            @endif
        </div>
    </section>


    <section class="roles">
        <div class="consumidor">
            <div>                
                <p>Alquimista Consumidor</p>
                <ul>
                    <li>Adquiere los elementos reciclados.</li>
                    <li>Accede al mercado y publica dentro del mismo.</li>
                    <li>Asiste a eventos propuestos por la comunidad.</li>
                    <li>Comenta en nuestros blogs.</li>
                </ul>
            </div>
        </div>

        <div class="donante">
            <div>                
                <p>Alquimista Donante</p>
                <ul>
                    <li>Adquiere los elementos reciclados y publica sus mismos.</li>
                    <li>Accede al mercado y publica dentro del mismo.</li>
                    <li>Asiste a eventos propuestos por la comunidad y crea nuevos eventos.</li>
                    <li>Comenta dentro de nuestro blog.</li>
                </ul>
            </div>
        </div>

    </section>


    <section class="cardsHome">
        <div class="card-group">
            <div class="card card1">
                <img src="<?= url('img/cardsHome/hoja.svg') ?>" class="card-img-top"
                    alt="Ayuda a conservar los recursos naturales">
                <div class="card-body">
                    <h2 class="card-title">Ayuda a conservar los recursos naturales</h2>
                    <p class="card-text">Permite reutilizar los materiales en lugar de extraer nuevos recursos de la tierra,
                        lo que reduce la demanda de materias primas y preserva los recursos naturales.
                    </p>
                </div>
            </div>
            <div class="card card2">
                <img src="<?= url('img/cardsHome/mundi.svg') ?>" class="card-img-top"
                    alt="Ayuda a proteger el medio ambiente">
                <div class="card-body">
                    <h2 class="card-title">Ayuda a proteger el medio ambiente</h2>
                    <p class="card-text">Reduce la cantidad de basura que se envía a vertederos y rellenos, lo que
                        contribuye a proteger el medio ambiente.</p>
                </div>
            </div>
            <div class="card">
                <img src="<?= url('img/cardsHome/etiqueta.svg') ?>" class="card-img-top"
                    alt="Contribuye a una economía más sostenible">
                <div class="card-body">
                    <h2 class="card-title">Contribuye a una economía más sostenible</h2>
                    <p class="card-text">Ayuda a reducir los costos de producción a largo plazo al permitir reutilizar los
                        materiales en lugar de tener que adquirir constantemente nuevas materias primas y nuevos productos.
                    </p>
                </div>
            </div>
        </div>

        <div class="card-group section2">
            <div class="card card1">
                <img src="<?= url('img/cardsHome/reci.svg') ?>" class="card-img-top" alt="Reduce la contaminación">
                <div class="card-body">
                    <h2 class="card-title">Reduce la contaminación</h2>
                    <p class="card-text">El proceso de reciclaje puede reducir la cantidad de residuos que terminan en
                        vertederos o en el medio ambiente, lo que contribuye a reducir la contaminación del aire y del agua.
                    </p>
                </div>
            </div>
            <div class="card card2">
                <img src="<?= url('img/cardsHome/luz.svg') ?>" class="card-img-top" alt="Ahorra Energía">
                <div class="card-body">
                    <h2 class="card-title">Ahorra Energía</h2>
                    <p class="card-text">El proceso de reciclaje suele requerir menos energía que el proceso de producción
                        de materiales nuevos, lo que contribuye a reducir las emisiones de gases de efecto invernadero.</p>
                </div>
            </div>
        </div>

    </section>

@endsection
