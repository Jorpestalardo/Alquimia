<?php
use Illuminate\Support\Facades\Storage;
?>


@if ($empresa->img !== null && Storage::disk('public')->exists('img/' . $empresa->img))
    <img src="{{ Storage::disk('public')->url('img/' . $empresa->img) }}" class="img-fluid w-100 imgEmpresa"
        alt="{{ $empresa->tituloEmpresa }}">
@else
    <div class="portada">
        <ion-icon name="image-outline"></ion-icon>
        <p>No hay portada</p>
    </div>
@endif
