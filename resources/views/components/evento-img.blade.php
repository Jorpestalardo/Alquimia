<?php
use Illuminate\Support\Facades\Storage;
?>


@if ($evento->img !== null && Storage::disk('public')->exists('img/' . $evento->img))
    <img src="{{ Storage::disk('public')->url('img/' . $evento->img) }}" class="img-fluid w-100 imagen-redondeada-detalle"
        alt="{{ $evento->titulo }}">
@else
    <div class="portada">
        <ion-icon name="image-outline"></ion-icon>
        <p>No hay portada</p>
    </div>
@endif
