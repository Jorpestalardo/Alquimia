@extends('layouts.mainReciclaje')

@section('title', 'Estado de envío de ' . $donacion->titulo)

@section('main')
    <section class="detaildonacionDonador">
        <div class="container">
            <div class="m-2 p-3">
                <h1>¿Se concreto el envío de {{ $donacion->titulo }}?</h1>
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
                            
                            <form class="mb-4" action="{{ route('donador.elementoDonadoConfirmar', ['id' => $donacion->donacion_id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn costume-btn-comentario tituloNegro m-2">Marcar como enviado</button>
                            </form>
                            </form>
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
        </div>
    </section>
@endsection
