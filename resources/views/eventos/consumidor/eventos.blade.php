@extends('layouts.mainReciclaje')
@section('title', 'Eventos Alquimia')
@section('main')
    <section class="secEventos">

        <div class="container">
            <h1 class="text-center">Eventos</h1>
            <h2>¡Propuestas para mejorar el medio ambiente!</h2>
            <p>En esta sección encontrarás un listado con los eventos propuestos por otros usuarios de la comunidad. Donde
                podrás acceder a toda la información necesaria para formar parte.</p>
            <p>Sumate a actividades donde otras personas porponen eventos para mejorar el medio ambiente, reuniones para
                limpiar un sector de tu ciudad, eventos para plantar árboles, anuncios de ferias ecológicas, encuentros de
                charlas informativas, etc.</p>
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
                            <a href="{{ route('eventos.consumidor.eventoDetalle', ['id' => $evento->eventos_id]) }}"
                                class="btn custom-btn-editar">Ver más</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
