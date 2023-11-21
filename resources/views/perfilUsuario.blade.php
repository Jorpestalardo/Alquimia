@extends('layouts.main')
@section('title', 'Mi perfil Alquimista Donador')
@section('main')

    <section class="usuarios">
        <div class="introDash">
            <h1>Perfil de {{ $usuario->nombre }}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="authorDate mt-4">
                            <p class="fs-5"><strong>Email</strong> {{ $usuario->email }}</p>
                            <p class="fs-5"><strong>Rol</strong> {{ $usuario->roles->nombre }}</p>
                            <p class="fs-5"><strong>Ubicación</strong> {{$usuario->ubicacion->province->name}} - {{$usuario->ubicacion->city->name}}</p>
                            <a class="btn btn-secondary m-2" href="{{ route('mercado.index') }}">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
