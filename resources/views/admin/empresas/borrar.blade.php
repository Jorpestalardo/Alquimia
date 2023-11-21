@extends('layouts.mainAdminEmpre')
@section('title', 'Confirmar eliminación de' . $empresa->tituloEmpresa)
@section('main')

    <section class="deleteEmpresa">
        <div class="container">
            <h1 class="textoNegro p-5">Confirmar eliminación de "{{ $empresa->tituloEmpresa }}"</h1>
            <x-empresa-data :empresa='$empresa' />
            <form action="{{ route('admin.empresas.borrarEmpresa', ['id' => $empresa->empresa_id]) }}" method="post">
                @csrf
                <p class="tituloNegro fs-3 text-center mt-5">¿Estás seguro que querés eliminar
                    '{{ $empresa->tituloEmpresa }}'?</p>
                <div class="d-flex justify-content-end p-3">
                    <a class="btn costume-btn-volver m-2" href="{{ route('admin.empresas.dashboard') }}">Volver</a>
                    <button type="submit" class="btn custom-btn-eliminar m-2">Eliminar</button>
                </div>
            </form>
        </div>
    </section>


@endsection
