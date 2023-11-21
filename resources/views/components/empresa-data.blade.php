<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Empresas $empresa */
?>

<div class="empresa row">
    <div class="col-md-12 col-sm-1">
        <x-empresa-img :empresa="$empresa" />
    </div>
    <div class="col-md-12 col-sm-1">
        <div class="infoEmpresa">
            <div class="autorDate">
                <h3><span class="titulo">{{ $empresa->tituloEmpresa }}</span></h3>
                <p><span>Fecha de publicación:</span> {{ $empresa->fechaPublicacion }}</p>
                <h4>{{ $empresa->tituloProducto }}</h4>
            </div>
            <p>{{ $empresa->descripcion }}</p>
            <div class="row infoExtra">
                <div class="col-md-4">
                    <h3>Link:</h3>
                    <a href="{{ $empresa->link }}" class="btn custom-btn-eliminar" target="_blank">Visitar Sitio</a>
                </div>
                <div class="col-md-4">
                    <h3>Autor:</h3>
                    <p>{{ $empresa->autor }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
