@extends('layouts.main')
@section('title', 'Mi perfil Alquimista Admin')
@section('main')


    <section class="perfil">
        <h1>Mi perfil Alquimista Admin</h1>
        <div>
            <p><strong>Email:</strong> {{ $adminData['email'] }}</p>
            <p><strong>Nombre:</strong> {{ $adminData['nombre'] }}</p>
            <p><strong>Apellido:</strong> {{ $adminData['apellido'] }}</p>
            <p><strong>Imagen:</strong> {{ $adminData['img'] }}</p>
            <p><strong>Biografía:</strong> {{ $adminData['biografia'] }}</p>

        </div>

        <a href="{{ route('editarPerfil') }}" class="btn">Editar perfil</a>

    </section>
@endsection
