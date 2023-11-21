@extends('layouts.mainReciclaje')

@section('title', 'Detalle de ' . $donacion->titulo)

@section('main')
    <section class="detaildonacionDonador">
        <div class="container">
            <div class="m-2 p-3">
                <h1>{{ $donacion->titulo }}</h1>
                <div class="donacion row">
                    <div class="col-md-4">
                        <x-donacion-img :donacion="$donacion" />
                    </div>
                    <div class="col-md-8"> 
                        <div class="infodonacion">
                            <div class="autorDate">
                                <h3>{{ $donacion->titulo }}</h3>
                                <p><span>Fecha de publicación:</span> {{ $formattedDate }}</p>
                                <p><span>Estado de la entrega:</span> <span class="textoEntrega">{{$donacion->envio ? 'Entregado' : 'No entregado'}}</span></p>
                            <p>Descripción: {{ $donacion->descripcion }}</p>
                            @if (!$donacion->envio)
                            <a class="btn costume-btn-comentario tituloNegro m-2" href="{{ route('donador.elementoDonado', ['id' => $donacion->donacion_id]) }}">Donado</a>
                            <p class="small text-muted chatExplicacion">Podés indicar que el producto fue donado con éxito,
                                una vez que hayas realizado la entrega.</p>
                                @endif
                            <div class="row infoExtra">
                                <div class="col-md-4">
                                    <h3>Estado:</h3>
                                    <p>{{ $donacion->estado }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h3>Material:</h3>
                                    <p>{{ $donacion->tipo->tipo }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h3>Ubicación:</h3>
                                    <p>{{$donacion->ubicacion->province->name}} - {{$donacion->ubicacion->city->name}} {{$donacion->ubicacion->city->department}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end m-3">
                <a class="btn costume-btn-volver m-2" href="{{ route('donador.dashboard') }}">Volver</a>
                <a href="{{ route('donador.borrar', ['id' => $donacion->donacion_id]) }}"
                    class="btn custom-btn-eliminarDonador m-2">Eliminar</a>
                    @if (!$donacion->envio)
                <a href="{{ route('donador.editar', ['id' => $donacion->donacion_id]) }}"
                    class="btn custom-btn-editarDonador m-2">Editar</a>
                    @endif

            </div>
        </div>
    </section>

@endsection
