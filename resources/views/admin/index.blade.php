@extends('layouts.mainAlquimista')

@section('title', 'Página Principal de Admin')

@section('main')
    <section class="adminIndex">
        <div class="container">
            <h1>¡Bienvenido Alquimista Administrador!</h1>
            <div class="indexTextoAdmin">
                <p>Aquí podrás editar, publicar y hasta eliminar todas las novedades, eventos, publicaciones que desees</p>
                <div class="indexBotones">
                    <a class="btn" href="{{ route('admin.blog.dashboardBlog') }}">Editar Blog</a>
                    <a class="btn" href="{{ route('admin.empresas.dashboard') }}">Administrar Empresas</a>
                </div>
            </div>
        </div>
    </section>
@endsection
