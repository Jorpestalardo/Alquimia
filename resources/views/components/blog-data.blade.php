<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Eventos $evento */
?>

<div class="evento row">
    <div class="col-md-4">
        <x-blog-img :blog="$blog" />
    </div>
    <div class="col-md-8">
        <div class="infoEmpresa">
            <div class="autorDate">
                <h2><span>{{ $blog->titulo }}</span></h2>
                <p><span>Fecha:</span> {{ $blog->fechaPublicacion }}</p>
            </div>
            <p>{{ $blog->descripcion }}</p>
            
            <div class="row infoExtra">
                <p><span>Texto:</span>{{ $blog->texto }}</p>
                <div class="col-md-4">
                    <p class="fs-5">Autor: {{ $blog->autor }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
