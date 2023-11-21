<?php
use Illuminate\Support\Facades\Storage;
?>

@if ($donacion->img !== null && Storage::disk('public')->exists('img/' . $donacion->img))
    <img src="{{ Storage::disk('public')->url('img/' . $donacion->img) }}"
        class="img-fluid w-100 fixed-image-size imagen-redondeada" alt="{{ $donacion->titulo }}">
@else
    <div class="portada">
        <ion-icon name="image-outline"></ion-icon>
        <p>No hay portada</p>
    </div>
@endif
