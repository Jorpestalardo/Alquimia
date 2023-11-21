@extends('layouts.main')
@section('title', 'Mi Perfil')
@section('main')

    <section class="usuarios">
        <div class="introDash">
            <h1>¡Hola <strong>{{ $usuario->nombre }}</strong>!</h1>

            <div class="container user">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <div
                                class="circle-{{ $usuario->roles->roles_id == 2 ? 'consumidor' : ($usuario->roles->roles_id == 3 ? 'donador' : 'admin') }}">
                            </div>
                            <img src="{{ asset('img/avatares/' . $usuario->avatar->avatar) }}"
                                alt="{{ $usuario->avatar->avatar }}">
                            <a class="btn"
                                href="{{ route('usuarios.editarPerfil', ['id' => $usuario->usuario_id]) }}">Editar</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="authorDate mt-4">
                            <p class="fs-5"><strong>Email</strong> {{ $usuario->email }}</p>
                            <p class="fs-5"><strong>Rol</strong> {{ $usuario->roles->nombre }}</p>
                            <p class="fs-5"><strong>Ubicación</strong> {{ $usuario->ubicacion->province->name }} -
                                {{ $usuario->ubicacion->city->name }} {{ $usuario->ubicacion->city->department }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
        @endsection
