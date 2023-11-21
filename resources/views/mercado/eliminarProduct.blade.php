@extends('layouts.mainMercado')
@section('title', 'Confirmar eliminación de ' . $mercado->titulo)
@section('main')

    <section class="borrarMercado">
        <div class="container mt-5">
            <h1 class="text-center m-5 textoNegro">¿Seguro querés eliminar este producto de tu lista de ventas
                '{{ $mercado->titulo }}'?</h1>
            <div class="empresa row">
                <div class="col-md-6">
                    <x-mercado-img :mercado="$mercado" />
                </div>
                <div class="col-md-6">
                    <div class="infoEmpresa">
                        <div class="autorDate">
                            <h2 class="fs-5"><span class="titulo">Elemento:</span> {{ $mercado->titulo }}</h2>
                            <p class="small text-muted">Fecha: 20/05/2023</p>
                            <p><span class="titulo">Precio:</span> {{ $mercado->precio }} </p>
                            <p><span class="titulo">Ubicación:</span> {{$mercado->ubicacion->province->name}} - {{$mercado->ubicacion->city->name}} {{$mercado->ubicacion->city->department}}</p>
                        </div>
                    </div>
                </div>
                <p class="mt-3">Descripción: {{ $mercado->caracteristica }}</p>

            </div>
            <form action="{{ route('mercado.deleteProductAction', ['id' => $mercado->mercado_id]) }}" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block pb-5 pt-5">
                    <div class="d-flex justify-content-end m-3">
                        <a class="btn costume-btn-volver m-3"
                            href="{{ route('mercado.userProducts', ['id' => auth()->user()->usuario_id]) }}">Volver</a>
                        <button type="submit" class="btn custom-btn-eliminar m-3">Eliminar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


@endsection
