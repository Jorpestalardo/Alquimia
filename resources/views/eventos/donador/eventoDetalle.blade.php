@extends('layouts.mainReciclaje')

@section('title', 'Detalle de ' . $evento->titulo)

@section('main')
    <section class="detaildonacionDonante">
        <div class="container">
            <h1 class="text-center mt-5 mb-5">Detalle del evento {{ $evento->titulo }}</h1>
            {{-- <p>Evento de: <a href="{{route('perfilUsuario', ['id' => $evento->usuario->usuario_id])}}">{{$evento->usuario->nombre}}</a> </p> --}}
            <x-evento-data :evento='$evento' />
        </div>
        <div class="container comentariosEventos">
            <h4 class="m-4 fs-3">¿Qué opinas?</h4>
            <form action="{{ route('eventos.donador.eventoDetalle', ['id' => $evento->eventos_id]) }}" method="POST">
                @csrf
                <div class="d-flex">
                    <input type="hidden" name="eventos_id" value="{{ $evento->id }}">
                    <label class="comenta fs-5" for="mensaje">Comentá:</label>
                    <textarea name="mensaje" placeholder="Escribe tu comentario" class="form-control"></textarea>
                </div>
                <div class="d-flex justify-content-end m-1">
                    <button class="btn costume-btn-comentario m-2" type="submit">Comentar</button>
                </div>
            </form>
            <h5 class="m-4 fs-3 parrafo-con-linea-arriba"><span class="textoBlanco">Comentarios:</span></h5>
            @foreach ($comentarios_eventos as $comentarioevento)
                <div class="comentarios m-2">
                    <p><span class="textoBlanco"> {{ $comentarioevento->usuario->nombre }}
                            {{ $comentarioevento->usuario->apellido }}:</span> {{ $comentarioevento->mensaje }}</p>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end m-1">
            <a class="btn costume-btn-volver m-5" href="{{ route('eventos.donador.eventos') }}">Volver</a>
        </div>
    </section>

@endsection
