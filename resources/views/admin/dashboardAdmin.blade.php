@extends('layouts.mainAdmin')

@section('title', 'Página Principal de Admin')

@section('main')
    <section class="adminDash">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div>
            <h1>Aquí encontrarás las estadísticas del sitio</h1>
            <p>Podrás ver reflejado los usuarios creados, las empresas y las novedades publicadas en el sitio</p>
            <div class="cardsAdmin">
                <div class="cantidadCard">
                    <div>
                        <ion-icon name="analytics-outline"></ion-icon><span class="circulo">{{ $totalEmpresas }}</span>
                    </div>
                    <p class="card_text">
                        Empresas publicadas
                    </p>
                </div>
                <div class="cantidadCard">
                    <div>
                        <ion-icon name="podium-outline"></ion-icon><span class="circulo">{{ $totalBlogs }}</span>
                    </div>
                    <p class="card_text">
                        Novedades publicadas
                    </p>
                </div>
                <div class="cantidadCard">
                    <div>
                        <ion-icon name="people-outline"></ion-icon><span class="circulo">{{ $totalUsuarios }}</span>
                    </div>
                    <p class="card_text">
                        Usuarios creados
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
