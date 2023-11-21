@extends('layouts.mainMercado')
@section('title', 'Confirmar eliminación de ' . $compra->mercado->titulo)
@section('main')

    <section class="borrarMercado">
        <h1 class="text-center mt-5">Confirmar eliminación de tus compras</h1>
        <div class="container mt-5">
            <h2 class="titulo mb-5">¿Seguro querés eliminar este producto "{{ $compra->mercado->titulo }}" de tu sección
                compras?</h2>
            <form action="{{ route('mercado.compras.deleteCompraAction', ['id' => $compra->compra_id]) }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <img class="w-100 imagen-redondeada-detalle" src="{{ url('storage/img/' . $compra->mercado->foto) }}"
                            alt="{{ $compra->mercado->titulo }}">
                    </div>

                    <div class="col-md-4">
                        <h2 class="mt-3 tituloNegro">{{ $compra->mercado->titulo }}</h2>
                        <p class="card-text mt-3"><span>Código de compra:</span> {{ $compra->compra_id }} </p>
                        <p class="card-text"><span>Nombre del producto publicado:</span> {{ $compra->mercado->titulo }}</p>
                        <p class="card-text"><span>Características:</span> {{ $compra->mercado->caracteristica }}</p>
                        <p class="card-text"><span>Precio:</span> $ {{ $compra->mercado->precio }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end m-1">
                    <a href="{{ route('mercado.compras.userComprasDetail', ['id' => $compra->compra_id]) }}"
                        class="btn costume-btn-volver m-2">Volver</a>
                    <button type="submit" class="btn custom-btn-eliminar m-2">Eliminar</button>
                </div>
        </div>
        </form>
        </div>
    </section>


@endsection
