@extends('layouts.mainReciclaje')
@section('title', 'Eventos Alquimia')
@section('main')
    <section class="secEventosDetail">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="container">
            <h1 class="text-center mt-5 mb-5">Mis Eventos</h1>
            @if ($eventos->isEmpty())
                <h2>¿Listo para empezar el cambio?</h2>
                <p>Nos gustaría invitarte a crear tu primera publicación para invitar a los demás usuarios de la comunidad a
                    formar parte de tus propuestas de eventos.</p>
                <a href="{{ route('eventos.donador.formNewEvento') }}" class="btn">Crear Evento</a>
                <p>La idea es generar actividades donde otras personas se sumen a la causa de mejorar el medio ambiente,
                    reuniones para limpiar un sector de tu ciudad, eventos para plantar árboles, anuncios de ferias
                    ecológicas, encuentros de charlas informativas, etc.</p>
                <h3>¿Sabías que...?</h3>
                <p>Generar un ambiente de comunidad para crear eventos que favorezcan el medio ambiente es de vital
                    importancia, ya que nos brinda la oportunidad de unir esfuerzos y multiplicar el impacto positivo en
                    nuestro entorno. </p>
                <p>Al trabajar juntos, podemos compartir conocimientos, motivarnos mutuamente y promover la conciencia
                    ambiental de manera colectiva. Además, al involucrar a más personas, aumentamos las posibilidades de
                    generar cambios significativos y sostenibles para cuidar y preservar nuestro planeta.</p>
                <p>El trabajo en comunidad nos permite potenciar nuestras acciones individuales y alcanzar resultados mucho
                    más significativos en la protección y mejora del medio ambiente.</p>
            @else
                <h2>¡Gracias por proponer el cambio!</h2>
                <p>En esta sección encontrarás un listado con los eventos propuestos por vos para los demás usuarios de la
                    comunidad. ¿Te gustaría proponer uno más?</p>
                <a href="{{ route('eventos.donador.formNewEvento') }}" class="btn">Crear Evento</a>
                <p>La idea es generar actividades donde otras personas se sumen a la causa de mejorar el medio ambiente,
                    reuniones para limpiar un sector de tu ciudad, eventos para plantar árboles, anuncios de ferias
                    ecológicas, encuentros de charlas informativas, etc.</p>
                <ul>
                    @foreach ($eventos as $evento)
                        <li>
                            <img class="w-100 fixed-image-size" src="{{ url('storage/img/' . $evento->img) }}"
                                alt="{{ $evento->titulo }}">
                            <div>
                                <h2 class="card-title mt-5">Evento: {{ $evento->titulo }}</h2>
                                </p>
                                <p>Fecha: {{ $evento->fecha }}</p>
                                <p>Ubicación: {{ $evento->ubicacion->province->name }} -
                                    {{ $evento->ubicacion->city->name }} {{ $evento->ubicacion->city->department }}</p>
                                <a href="{{ route('eventos.donador.misEventoDetalle', ['id' => $evento->eventos_id]) }}"
                                    class="btn m-2 custom-btn-editar">Ver Detalle</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            <a class="btn btn-secondary m-2" href="{{ route('eventos.donador.eventos') }}">Volver</a>

        </div>
    </section>
@endsection
