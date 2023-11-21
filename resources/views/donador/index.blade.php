@extends('layouts.mainAlquimista')

@section('title', 'Página Principal de Alquimista Donador')

@section('main')
    <section class="indexDonador">
        <div class="container">
            <h1>¡Bienvenido Alquimista Donante!</h1>
            <div class="indexTexto">
                <p>Aquí encontrarás lo que quieras comprar y también tendrás el espacio para donar lo que desees.</p>
                <div class="indexBotones">
                    <a class="btn" href="{{ route('mercado.index') }}">Ver mercado</a>
                    <a class="btn" href="{{ route('donador.dashboard') }}">Ver reciclado</a>
                </div>
            </div>
        </div>
    </section>
@endsection
