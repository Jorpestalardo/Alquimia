<?php
use Illuminate\Support\Facades\Storage;
?>


@if ($mercado->foto !== null && Storage::disk('public')->exists('img/' . $mercado->foto))
    <img src="{{ Storage::disk('public')->url('img/' . $mercado->foto) }}"
        class="img-fluid w-100 imagen-redondeada-detalle" alt="{{ $mercado->titulo }}">
@else
    <div class="portada">
        <ion-icon name="image-outline"></ion-icon>
        <p>No hay portada</p>
    </div>
@endif
