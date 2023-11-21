@extends('layouts.mainReciclaje')
@section('title', 'Confirmar eliminación de' . $donacion->titulo) 
@section('main')

<section class="deleteDonacion">
    <div class="container">
        <h1 class="m-5 textoNegro">Confirmar eliminación de "{{$donacion->titulo}}"</h1>
        
<div class="card_donacion row">
    <div class="col-md-4">
        <x-donacion-img :donacion="$donacion" />
    </div>
    <div class="col-md-8">
        <div class="infodonacion"> 
            <div class="autorDate">
                <p><span class="textoBlanco">Título:</span> {{$donacion->titulo}}</p>
                <p><span class="textoBlanco">Fecha de publicación:</span> {{$formattedDate}}</p>
            </div>
            <div class="row infoExtra">
                <div class="col-md-4">
                    <p><span class="textoBlanco">Estado:</span></p>
                    <p>{{$donacion->estado}}</p>
                </div>
                <div class="col-md-4">
                    <p><span class="textoBlanco">Material:</span></p>
                    <p>{{$donacion->tipo->tipo}}</p>
                </div>
                <div class="col-md-4">
                    <p><span class="textoBlanco">Ubicación:</span></p>
                    <p>{{$donacion->ubicacion->province->name}} - {{$donacion->ubicacion->city->name}} {{$donacion->ubicacion->city->department}}</p>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-5"><span class="textoBlanco">Descripción:</span> {{$donacion->descripcion}}</p>
</div>

                <form action="{{route('donador.borrarDonacion', ['id' => $donacion->donacion_id]) }}" method="post">
                @csrf
                    <p class="textoNegro fs-3 text-center m-5">¿Estás seguro que querés eliminar '{{$donacion->titulo}}'?</p>
                        <div class="d-flex justify-content-end m-1">
                            <a href="{{ route('donador.reciclajeDetalle', ['id' => $donacion->donacion_id]) }}" class="btn costume-btn-volver m-2">Volver</a>
                            <button type="submit" class="btn constume-btn-chatMercado m-2">Eliminar</button>
                        </div>
                </form>
    </div>
</section>
    

@endsection 