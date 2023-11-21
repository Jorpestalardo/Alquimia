<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\mercados $empresa */
?>

<div class="empresa row">
    <div class="col-md-4">
        <x-mercado-img :mercado="$mercado" />
    </div>
    <div class="col-md-8">
        <div class="infoEmpresa">
            <div class="autorDate">
                <h2 class="fs-5"><span class="textoBlanco">Elemento:</span> {{ $mercado->titulo }}</h2>
                <p class="small text-muted">Fecha: 20/05/2023</p>
                <p><span class="textoBlanco">Precio:</span> {{ $mercado->precio }} </p>
                <p><span class="textoBlanco">Ubicación:</span> {{ $mercado->ubicacion->nombre }}</p>
            </div>
        </div>
    </div>
    <p class="mt-3">Descripción: {{ $mercado->caracteristica }}</p>

</div>
