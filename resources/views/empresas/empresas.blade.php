@extends('layouts.main')
@section('title', 'Empresas')
@section('main')
    <section class="secEmpresa">
        <div class="empresasContenido">
            <h1>¡Todas las empresas que necesitás conocer!</h1>
            <p>
                Es crucial para Alquimia compartir con nuestra apreciada comunidad los avances significativos que muchas
                empresas llevan a cabo a diario para preservar nuestro medio ambiente, fomentar prácticas de reciclaje y
                contribuir a mejorar la calidad de vida de todos los argentinos. Queremos destacar cómo estas empresas están
                comprometidas con la sostenibilidad y el bienestar social.
            </p>
            <a href="#empresas" class="btn">Saber más</a>
        </div>

        <article id="empresas">
            @foreach ($empresas as $empresa)
                <ul>
                    <li>
                        <img class="img-fluid rounded" src="{{ url('storage/img/' . $empresa->img) }}"
                            alt="{{ $empresa->tituloEmpresa }}">
                        <div>
                            <h2>{{ $empresa->tituloEmpresa }}</h2>

                            <a href="{{ route('empresas.empresasDetalle', ['id' => $empresa->empresa_id]) }}">Saber más
                                <ion-icon name="arrow-forward-outline"></ion-icon></a>
                        </div>
                    </li>
                </ul>
            @endforeach
        </article>

        <article class="empresasNuevas">
            <div>
                <h2>¿Eres una empresa interesada en formar parte de nuestro mundo?</h2>
                <p>¡Estamos ansiosos por recibir tu contacto! No dudes en comunicarte con nosotros, y en cuanto recibamos tu
                    mensaje, nos pondremos en contacto contigo de inmediato. ¡Esperamos tener pronto noticias tuyas! </p>
    
                    <a href="mailto:alquimia@hotmail.com" class="btn">Contactar</a>
            </div>
        </article>
    </section>
@endsection
