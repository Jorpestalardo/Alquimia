<?php
use Illuminate\Support\Facades\Storage;
?>


@if ($blog->img !== null && Storage::disk('public')->exists('img/' . $blog->img))
    <img src="{{ Storage::disk('public')->url('img/' . $blog->img) }}" class="img-fluid w-100 imgEmpresa"
        alt="{{ $blog->titulo }}">
@else
    <div class="portada">
        <ion-icon name="image-outline"></ion-icon>
        <p>No hay portada</p>
    </div>
@endif
