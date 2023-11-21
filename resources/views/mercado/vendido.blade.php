@extends('layouts.mainMercado')

@section('title', '¿Vendido?')

@section('main')

    <section class="userProduct">
        <div class="container tusVentas">
            <h1 class="text-center mt-5">¿Vendiste tu artículo {{ $mercado->titulo }}?</h1>
            <div class="row">
                    <div class="col-md-6 col-sm-1 mb-5 mt-5">
                        <div>
                            <div class="card_mercado">
                                <div class="imagen">
                                    <img class="w-100 fixed-image-size imagen-redondeada"
                                        src="{{ url('storage/img/' . $mercado->foto) }}"
                                        alt="{{ $mercado->titulo }}">
                                </div>
                                <div>
                                    <h2>{{ $mercado->titulo }}</h2>
                                    <p><span>Nombre del producto publicado:</span> {{ $mercado->titulo }}</p>
                                    <p><span>Estado de la entrega:</span> <span class="textoEntrega">{{$mercado->estado ? 'Entregado' : 'No entregado'}}</span></p>
                                    <p><span>Detalle:</span> {{ $mercado->caracteristica }}</p>
                                    <p><span>Precio:</span> $ {{ $mercado->precio }}</p>
                                </div>
                                <p class="small text-muted">{{ $mercado->ubicacion->province->name }}
                                    {{ $mercado->ubicacion->city->name }}
                                    {{ $mercado->ubicacion->city->department }}</p>
                                <form class="mb-4" action="{{ route('mercado.vendidoSi', ['id' => $mercado->mercado_id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn costume-btn-comentario tituloNegro m-2">Marcar como vendido</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="d-flex justify-content-end m-3">
            <a href="{{ route('mercado.userProducts', ['id' => auth()->user()->usuario_id]) }}" class="btn costume-btn-volver m-3">Volver</a>
        </div>
    </section>
@endsection
