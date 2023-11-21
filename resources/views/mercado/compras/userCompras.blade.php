@extends('layouts.mainMercado')

@section('title', 'Tus compras')

@section('main')

    <section class="userProduct">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="container">
            <h1 class="text-center mt-5 textoNegro">Tus compras:</h1>
            <p class="parrafo-con-linea-roja">Acá podes ver todos los productos que compraste:</p>
            <div class="row">
                @if ($compras->isEmpty())
                    <p>No tienes ninguna compra realizada.</p>
                    <p>¿Te gustaría comprar un producto?</p>
                    <a class="btn btn-secondary m-2" href="{{ route('mercado.index') }}">Mercado</a>
                @else
                    @foreach ($compras as $compra)
                        <div class="col-md-6 col-sm-1 mb-5">
                            <div class="card_mercado m-2">
                                <div class="card-body">
                                    <img class="w-100 imagen-redondeada"
                                        src="{{ url('storage/img/' . $compra->mercado->foto) }}"
                                        alt="{{ $compra->mercado->titulo }}">
                                    <h2 class="mt-3 textoNegro">{{ $compra->mercado->titulo }}</h2>
                                    <p class="card-text mt-3"><span>Código de compra:</span> {{ $compra->compra_id }} </p>
                                    <p class="card-text"><span>Nombre del producto publicado:</span>
                                        {{ $compra->mercado->titulo }}</p>
                                    <p class="card-text"><span>Precio:</span> $ {{ $compra->mercado->precio }}</p>
                                    <a href="{{ route('mercado.compras.userComprasDetail', ['id' => $compra->compra_id]) }}"
                                        class="btn custom-btn-mercado m-2">Ver más</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
