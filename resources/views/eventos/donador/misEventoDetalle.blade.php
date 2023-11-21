@extends('layouts.mainReciclaje')

@section('title', 'Detalle de ' . $evento->titulo)

@section('main')
    <section class="detalledonacion">
        <div class="container">
            <h1 class="text-center">Así se vería tu evento de "{{ $evento->titulo }}"</h1>
            <div class="evento-data">
                <x-evento-data :evento='$evento' />
            </div> 
            
            <div class="butons">
                <a href="{{ route('eventos.donador.editar', ['id' => $evento->eventos_id]) }}"
                    class="btn custom-btn-editar m-2">Editar</a>
                <a href="{{ route('eventos.donador.borrar', ['id' => $evento->eventos_id]) }}"
                    class="btn custom-btn-eliminar m-2">Eliminar</a>
                <a class="btn btn-secondary m-2" href="{{ route('eventos.donador.misEventos') }}">Volver</a>
            </div>
        </div>
    </section>

@endsection
