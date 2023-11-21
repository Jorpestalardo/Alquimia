@extends('layouts.mainMercado')

@section('title', 'Detalle de ' . $mercado->titulo)

@section('main')
    <section class="detalleMercado">
        <div class="container">
            <div class="m-2 p-3">
                <h1 class="text-center mt-5">Detalle de {{ $mercado->titulo }}:</h1>
                <p>Infromación de vendedor: <a
                        href="{{ route('perfilUsuario', ['id' => $mercado->usuario->usuario_id]) }}">{{ $mercado->usuario->nombre }} <img src="{{ asset('img/avatares/' . $mercado->usuario->avatar->avatar) }}"
                        alt="{{ $mercado->usuario->avatar->avatar }}"></a>
                </p>
                <x-mercado-data :mercado='$mercado' />
            </div>
            <div class="d-flex justify-content-end m-1">
                <a class="btn costume-btn-volver m-2" href="{{ route('mercado.index') }}">Volver</a>
            </div>

        </div>
    </section>

@endsection
