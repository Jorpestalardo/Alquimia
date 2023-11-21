@extends('layouts.mainReciclaje')

@section('title', 'Detalle de ' . $donacion->titulo)

@section('main')

@if (!$donacion->envio)
    <section class="detaildonacion">
        <div class="container">
            <div class="m-2 p-3">
                <h1>{{ $donacion->titulo }}</h1>
                <x-donacion-data :donacion='$donacion' />
            </div>
            <div class="d-flex justify-content-end m-3">
                <a class="btn costume-btn-volver m-2" href="{{ route('consumidor.donaciones') }}">Volver</a>
            </div>
        </div>
    </section>
@endif
@endsection
