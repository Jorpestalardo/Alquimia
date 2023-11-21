<?php
use Illuminate\Support\Facades\Storage;
?>

@extends('layouts.mainReciclaje')
@section('title', 'Panel de administración')
@section('main')

    <section class="dashboardDonador">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="introDash">
            <div class="container">
                <h1 class="mt-5 textoNegro">Reciclajes que publicaste</h1>
                <p class="parrafo-con-linea">Podrás <span class="textoBold">publicar, eliminar y editar</span> tus
                    publicaciones referidas a los elementos que deseás donar a la comunidad.</p>
                <p>¡Gracias por ser parte del cambio! ¿Te gustaría publicar una <span class="textoBold">nueva
                        donación</span>?</p>
                <a href="{{ route('donador.formElemento') }}" class="btn constume-btn-donacionDonador m-2">Publicá tu
                    reciclaje</a>

            </div>
            <div class="container">
                <div class="main">
                    <ul class="cards">
                        @foreach ($donaciones as $donacion)
                            <li class="cards_item">
                                <div class="cardDashboardDonador">
                                    <div class="card_image">
                                        <span class="note">{{ $donacion->estado }}</span>
                                        <td>
                                            <x-donacion-img :donacion="$donacion" />
                                        </td>
                                    </div>
                                    <div class="card_content">
                                        <h2 class="textoNegro fs-2">{{ $donacion->titulo }}</h2>
                                        <div class="card_text">
                                            <p>Lugar: <strong>{{ $donacion->ubicacion->province->name }} -
                                                    {{ $donacion->ubicacion->city->name }}
                                                    {{ $donacion->ubicacion->city->department }}</strong></p>
                                            <p><span>Estado de la entrega:</span> <span class="envio {{ $donacion->envio ? 'entregado' : 'no-entregado' }}">{{$donacion->envio ? 'Entregado' : 'No entregado'}}</span></p>

                                            <a href="{{ route('donador.reciclajeDetalle', ['id' => $donacion->donacion_id]) }}"
                                                class="btn m-2 constume-btn-donacionDonador">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
