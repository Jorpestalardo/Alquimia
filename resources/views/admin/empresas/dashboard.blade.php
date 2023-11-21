<?php
use Illuminate\Support\Facades\Storage;
?>

@extends('layouts.mainAdminEmpre')
@section('title', 'Panel de administración')
@section('main')

    <section class="empresasAdmin">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="introEmpresasAdmin container">
            <h1 class="pt-5">Administración de Empresas</h1>
            <p>Podrás crear, eliminar y hasta incluso editar tus notas.</p>
            <p class="parrafo-con-linea">¡Espero que lo difrutes!</p>
        </div>
        <div class="container">
            <div>
                <ul class="cards">
                    @foreach ($empresas as $empresa)
                        <li class="cards_item">
                            <div class="card_image">

                                <x-empresa-img :empresa="$empresa" />

                            </div>
                            <div class="card_content">
                                <span class="note">{{ $empresa->fechaPublicacion }}</span>
                                <h2 class="card_title mt-2 fs-2">{{ $empresa->tituloEmpresa }}</h2>
                                <div class="btns-editar-eliminar-empresa">
                                    <a href="{{ route('admin.empresas.editar', ['id' => $empresa->empresa_id]) }}"
                                        class="btn custom-btn-editar m-2"><ion-icon
                                            name="create-outline"></ion-icon>Editar</a>
                                    <a href="{{ route('admin.empresas.borrar', ['id' => $empresa->empresa_id]) }}"
                                        class="btn custom-btn-eliminar m-2"><ion-icon
                                            name="trash-outline"></ion-icon>Eliminar</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>
@endsection
