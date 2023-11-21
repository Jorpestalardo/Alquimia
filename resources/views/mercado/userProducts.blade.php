@extends('layouts.mainMercado')

@section('title', 'Mis productos')

@section('main')

    <section class="userProduct">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="container tusVentas">
            <h1 class="text-center mt-5">Tus ventas:</h1>
            <p class="parrafo-con-linea-roja">Este es el listado de los productos que publicaste para la venta.</p>
            <p>¿Te gustaría publicar un nuevo producto?</p>
            <a href="{{ route('mercado.formNewMercado') }}" class="btn constume-btn-chatMercado">Publicar</a>
            <div class="row">
                @foreach ($articulos as $articulo)
                    <div class="col-md-6 col-sm-1 mb-5 mt-5">
                        <div>
                            <div class="card_mercado">
                                <div class="imagen">
                                    <img class="w-100 fixed-image-size imagen-redondeada"
                                        src="{{ url('storage/img/' . $articulo->mercado->foto) }}"
                                        alt="{{ $articulo->mercado->titulo }}">
                                </div>
                                <div>
                                    <h2>{{ $articulo->titulo }}</h2>
                                    <p><span>Código de compra:</span> {{ $articulo->articulo_id }} </p>
                                    <p><span>Nombre del producto publicado:</span> {{ $articulo->mercado->titulo }}</p>
                                    <p><span>Estado de la entrega:</span> <span class="envio {{ $articulo->mercado->envio ? 'entregado' : 'no-entregado' }}">{{ $articulo->mercado->envio ? 'Entregado' : 'No entregado' }}</span>
                                    </p>
                                    <p><span>Detalle:</span> {{ $articulo->mercado->caracteristica }}</p>
                                    <p><span>Precio:</span> $ {{ $articulo->mercado->precio }}</p>
                                </div>
                                <p class="small text-muted">{{ $articulo->mercado->ubicacion->province->name }}
                                    {{ $articulo->mercado->ubicacion->city->name }}
                                    {{ $articulo->mercado->ubicacion->city->department }}</p>
                                <a href="{{ route('mercado.eliminarProduct', ['id' => $articulo->mercado->mercado_id]) }}"
                                    class="btn custom-btn-eliminar m-2">Eliminar</a>
                                @if (!$articulo->mercado->envio)
                                    <a href="{{ route('mercado.editarProduct', ['id' => $articulo->mercado->mercado_id]) }}"
                                        class="btn custom-btn-editar m-2">Editar</a>
                                @endif
                                @if (!$articulo->mercado->envio)
                                    <a href="{{ route('mercado.vendido', ['id' => $articulo->mercado->mercado_id]) }}"
                                        class="btn costume-btn-comentario m-2">Vendido</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end m-3">
            <a href="{{ route('mercado.userProducts', ['id' => auth()->user()->usuario_id]) }}"
                class="btn costume-btn-volver m-3">Volver</a>
        </div>
    </section>
@endsection
