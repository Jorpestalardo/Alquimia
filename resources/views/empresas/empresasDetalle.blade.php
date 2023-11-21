@extends('layouts.main')

@section('title', 'Detalle de ' . $empresa->titulo)

@section('main')
    <section class="detailEmpresa">
        <div class="container">
            <div class="card rounded m-2 p-3">
                <h1>{{ $empresa->tituloEmpresa }}</h1>
                <x-empresa-data :empresa='$empresa' />
            </div>
            <a class="btn btn-secondary m-2" href="{{ route('empresas.empresas') }}">Volver</a>
        </div>
    </section>

@endsection
