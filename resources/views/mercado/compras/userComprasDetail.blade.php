@extends('layouts.mainMercado')

@section('title', 'Mis compras')

@section('main')

    <section class="userProduct">
        <div class="container">
            <h1 class="text-center mt-5 tituloNegro">Detalle de: {{ $compra->mercado->titulo }}</h1>
            <div class="card_mercado m-2 p-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="w-100 imagen-redondeada-detalle"
                                src="{{ url('storage/img/' . $compra->mercado->foto) }}" alt="{{ $compra->mercado->titulo }}">
                        </div>
                        <div class="col-md-6">
                            <h2 class="mt-3 tituloNegro">{{ $compra->mercado->titulo }}</h2>
                            <p class="card-text mt-3"><span>Código de compra:</span> {{ $compra->compra_id }} </p>
                            <p class="card-text"><span>Nombre del producto publicado:</span> {{ $compra->mercado->titulo }}
                            </p>
                            <p class="card-text"><span>Características:</span> {{ $compra->mercado->caracteristica }}</p>
                            <p class="card-text"><span>Precio:</span> $ {{ $compra->mercado->precio }}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end m-1">
                    <a class="btn costume-btn-volver m-2"
                        href="{{ route('mercado.compras.userCompras', ['id' => $compra->usuario->usuario_id]) }}">Volver</a>
                    <a href="{{ route('mercado.compras.deleteCompra', ['id' => $compra->compra_id]) }}"
                        class="btn custom-btn-eliminar m-2">Eliminar</a>
                </div>
            </div>
    </section>
@endsection
