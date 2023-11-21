@extends('layouts.mainReciclaje')
@section('title', 'Eventos Alquimia')
@section('main')
    <section class="secEventosDonante">

        <div class="container">
            <h1 class="text-center">Eventos</h1>
            <h2>¡Propuestas para mejorar el medio ambiente!</h2>
            <p>En esta sección encontrarás un listado con los eventos propuestos por otros usuarios de la comunidad. También
                puedes crear uno o ver tus eventos.</p>
            <div class="funciones">
                <a href="{{ route('eventos.donador.formNewEvento') }}" class="btn">Crear Evento</a>
                <a href="{{ route('eventos.donador.misEventos') }}" class="btn">Mis Eventos</a>
            </div>
            <p>La idea es generar actividades donde otras personas se sumen a la causa de mejorar el medio ambiente,
                reuniones para limpiar un sector de tu ciudad, eventos para plantar árboles, anuncios de ferias ecológicas,
                encuentros de charlas informativas, etc.</p>
            <ul>
                @foreach ($eventos as $evento)
                    <li>
                        <img class="w-100 fixed-image-size" src="{{ url('storage/img/' . $evento->img) }}"
                            alt="{{ $evento->titulo }}">

                        <div>
                            <p> <span>Evento:</span> {{ $evento->titulo }}</p>

                            <p> <span>Fecha:</span> {{ $evento->fecha }}</p>
                            <p> <span>Ubicación:</span> {{$evento->ubicacion->province->name}} - {{$evento->ubicacion->city->name}} {{$evento->ubicacion->city->department}}</p>

                            <p> <span>Descripción:</span> {{ Str::limit($evento->descripcion, 103) }}</p>
                            <a href="{{ route('eventos.donador.eventoDetalle', ['id' => $evento->eventos_id]) }}"
                                class="btn custom-btn-editar">Ver Detalle</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
