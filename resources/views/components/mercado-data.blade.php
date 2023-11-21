<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\mercados $empresa */
?>

<div class="empresa row">
    <div class="col-md-6">
        <x-mercado-img :mercado="$mercado" />
    </div>
    <div class="col-md-6">
        <div class="infoEmpresa">
            <div class="autorDate">
                <h2 class="fs-5"><span class="textoBlanco">Elemento:</span> {{ $mercado->titulo }}</h2>
                <p class="small text-muted">Fecha: 20/05/2023</p>
                <p><span class="textoBlanco">Precio:</span> {{ $mercado->precio }} </p>
                <p><span class="textoBlanco">Ubicación:</span> {{ $mercado->ubicacion->province->name }} -
                    {{ $mercado->ubicacion->city->name }} {{ $mercado->ubicacion->city->department }}</p>
                @if (!empty($mercado->usuario->numero_celular))
                    <?php
                    // Eliminamos caracteres que no sean números
                    $numeroTelefono = preg_replace('/[^0-9]/', '', $mercado->usuario->numero_celular);
                    $mensaje = "Buenas, te escribo desde Alquimia 😄. ¿Aún está disponible: " . $mercado->titulo . "?";
                    $mensajeCodificado = urlencode($mensaje);
                    $enlaceWhatsApp = "https://api.whatsapp.com/send?phone=" . $numeroTelefono . "&text=" . $mensajeCodificado;

                    ?>

                    <a href="{{ $enlaceWhatsApp }}" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon>Contactar por WhatsApp</a>
                @endif

                <p class="small text-muted chatExplicacion">Podés contactarte con el vendedor para
                    realizar cualquier consulta.</p>
            </div>
        </div>
    </div>
    <p class="mt-3">Descripción: {{ $mercado->caracteristica }}</p>

</div>
