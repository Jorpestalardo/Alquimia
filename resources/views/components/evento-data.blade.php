<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Eventos $evento */
?>

<div class="evento row">
    <div class="col-md-6">
        <x-evento-img :evento="$evento" />
    </div>
    <div class="col-md-6">
        <div class="infoEmpresa">
            <div class="autorDate">
                <h2><span class="textoBlanco">{{ $evento->titulo }}</span></h2>
                <p><span class="textoBlanco">Fecha:</span> {{ $evento->fecha }}</p>
                <p><span class="textoBlanco">Ubicación:</span> {{$evento->ubicacion->province->name}} - {{$evento->ubicacion->city->name}} {{$evento->ubicacion->city->department}}</p>
            </div>
            <div class="row infoExtra">
                <p><span class="textoBlanco">Descripción del evento:</span>{{ $evento->descripcion }}</p>
                <div class="col-md-4">
                    <h3 class="fs-5">Autor: {{ $evento->usuario->nombre }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
