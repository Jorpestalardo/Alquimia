<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Donaciones $donacion */
?>


<div class="donacion row">
    <div class="col-md-6">
        <x-donacion-img :donacion="$donacion" />
    </div>
    <div class="col-md-6">
        <div class="infodonacion">
            <div class="autorDate">
                <h3>{{ $donacion->titulo }}</h3>
                <p><span>Fecha de publicación:</span> {{ $donacion->fecha }} </p>
            </div>
            <p>{{ $donacion->descripcion }}</p>
            <div class="row infoExtra">
                <div class="col-md-5">
                    <h3>Estado:</h3>
                    <p>{{ $donacion->estado }}</p>
                </div>
                <div class="col-md-4">
                    <h3>Material:</h3>
                    <p>{{ $donacion->tipo->tipo }}</p>
                </div>
                <div class="col-md-4">
                    <h3>Ubicación:</h3>
                    <p>{{ $donacion->ubicacion->province->name }} - {{ $donacion->ubicacion->city->name }}
                        {{ $donacion->ubicacion->city->department }}</p>
                </div>
                @if (!empty($donacion->usuario->numero_celular))
                    <?php
                    // Eliminamos caracteres que no sean números
                    $numeroTelefono = preg_replace('/[^0-9]/', '', $donacion->usuario->numero_celular);
                    $mensaje = 'Buenas, te escribo desde Alquimia 😄. ¿Aún está disponible: ' . $donacion->titulo . '?';
                    $mensajeCodificado = urlencode($mensaje);
                    $enlaceWhatsApp = 'https://api.whatsapp.com/send?phone=' . $numeroTelefono . '&text=' . $mensajeCodificado;
                    
                    ?>

                    <a href="{{ $enlaceWhatsApp }}" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon>Contactar
                        por WhatsApp</a>
                @endif
            </div>
        </div>
    </div>
</div>
