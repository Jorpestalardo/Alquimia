@extends('layouts.mainReciclaje')
@section('title', 'Confirmar eliminación de' . $evento->titulo)
@section('main')

    <section class="deleteEvento">
        <div class="container">
            <h1 class="text-center mt-5 mb-5">Confirmar eliminación de "{{ $evento->titulo }}"</h1>
            <x-evento-data :evento='$evento' />
            <form action="{{ route('eventos.donador.borrarEventoAcc', ['id' => $evento->eventos_id]) }}" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block pb-5 pt-5">
                    <p>¿Estás seguro que querés eliminar '{{ $evento->titulo }}'?</p>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <a class="btn btn-secondary" href="{{ route('eventos.donador.misEventos') }}">Volver</a>
                </div>
            </form>
        </div>
    </section>


@endsection
