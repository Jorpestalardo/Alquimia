<?php
use Illuminate\Support\Facades\Storage;
?>

@extends('layouts.mainAdminBlog')
@section('title', 'Panel de administración')
@section('main')

    <section class="empresasAdmin blogAdmin">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="introEmpresasAdmin container">
            <h1 class="pt-5">Aquí encontrarás los blogs publicados</h1>
            <p>Podrás crear, eliminar y hasta incluso editar los blogs.</p>
            <p class="parrafo-con-linea">¡Espero que lo difrutes!</p>
        </div>
        <div class="container">
            <div>
                <ul class="cards">
                    @foreach ($blogs as $blog)
                        <li class="cards_item">
                                <div class="card_image">
                                    <x-blog-img :blog="$blog" />
                                    
                                </div>
                                <div class="card_content">
                                    <span class="note">{{ $blog->fechaPublicacion }}</span>
                                    <h2 class="card_title mt-2 fs-2">{{ $blog->titulo }}</h2>
                                    <div class="btns-editar-eliminar-empresa">
                                        <a href="{{ route('admin.blog.editBlog', ['id' => $blog->blog_id]) }}"
                                            class="btn custom-btn-editar m-2"><ion-icon name="create-outline"></ion-icon>Editar</a>
                                        <a href="{{ route('admin.deleteBlog', ['id' => $blog->blog_id]) }}"
                                            class="btn custom-btn-eliminar m-2"><ion-icon name="trash-outline"></ion-icon>Eliminar</a>
                                    </div>
                                </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </section>
@endsection
