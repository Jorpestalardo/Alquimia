@extends('layouts.mainAlquimista')

@section('title', 'Página Principal de Alquimista Consumidor')

@section('main')
    <section class="indexConsumidor">
        <div class="container">
            <div class="consumidorInfo">
                <h1>¡Bienvenido Alquimista Consumidor!</h1>
                <div class="indexTexto">
                    <p>Aquí encontrarás lo que quieras comprar y también adquirir para reciclar.</p>
                    <p>Además, podrás vender los objetos que desees.</p>
                    <div class="indexBotones">
                        <a class="btn" href="{{ route('mercado.index') }}">Ver mercado</a>
                        <a class="btn" href="{{ route('consumidor.donaciones') }}">Quiero reciclar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
