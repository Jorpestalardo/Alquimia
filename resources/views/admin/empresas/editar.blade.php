<?php
/**
 *  @var \App\Models\Genre[]|\Illuminate\Database\Eloquent\Collection $genres
 * */
?>

@extends('layouts.mainAdminEmpre')

@section('title', 'Editar Empresa')

@section('main')

    <section class="formEmpresa">
        <h1>¡Editá la empresa {{ $empresa->tituloEmpresa }}!</h1>

        <form action="{{ route('admin.empresas.editarEmpresa', ['id' => $empresa->empresa_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="tituloEmpresa">Título de la Empresa:</label>
                <input type="text" name="tituloEmpresa" id="tituloEmpresa" class="form-control"
                    value="{{ old('tituloEmpresa', $empresa->tituloEmpresa) }}"
                    @if ($errors->has('tituloEmpresa')) aria-describedby="error-tituloEmpresa" @endif>
                @error('tituloEmpresa')
                    <div class="text-danger" id="error-tituloEmpresa">{{ $errors->first('tituloEmpresa') }}</div>
                @enderror
            </div>
            <div>
                <p class="mt-3">Imagen actual</p>
                {{-- Versión Storage --}}
                @if ($empresa->img !== null && Storage::has('/public/img/' . $empresa->img))
                    <img src="{{ Storage::disk('public')->url('img/' . $empresa->img) }}"
                        class="img-fluid w-100 imagen-redondeada-static" alt="{{ $empresa->tituloEmpresa }}">
                @else
                    <ion-icon name="image-outline"></ion-icon>
                @endif
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="img" id="img" class="form-control"
                    value="{{ old('img', $empresa->img) }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="tituloProducto">Subtítulo:</label>
                <input type="text" name="tituloProducto" id="tituloProducto" class="form-control"
                    value="{{ old('tituloProducto', $empresa->tituloProducto) }}"
                    @if ($errors->has('tituloProducto')) aria-describedby="error-tituloProducto" @endif>
                @error('tituloProducto')
                    <div class="text-danger" id="error-tituloProducto">{{ $errors->first('tituloProducto') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion', $empresa->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
            </div>
            <div>
                <label for="fechaPublicacion">Fecha:</label>
                <input type="date" name="fechaPublicacion" id="fechaPublicacion" class="form-control"
                    value="{{ old('fechaPublicacion', $empresa->fechaPublicacion) }}"
                    @if ($errors->has('fechaPublicacion')) aria-describedby="error-fechaPublicacion" @endif>
                @error('fechaPublicacion')
                    <div class="text-danger" id="error-fechaPublicacion">{{ $errors->first('fechaPublicacion') }}</div>
                @enderror
            </div>
            <div>
                <label for="link">Link del Sitio Web:</label>
                <input type="text" name="link" id="link" class="form-control"
                    value="{{ old('link', $empresa->link) }}"
                    @if ($errors->has('link')) aria-describedby="error-link" @endif>
                @error('link')
                    <div class="text-danger" id="error-link">{{ $errors->first('link') }}</div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $empresa->autor) }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end m-3">
                <a href="{{ route('admin.empresas.dashboard') }}" class="btn costume-btn-volver m-2 ">Volver</a>
                <button type="submit" class="btn constume-btn-admin m-2 ">Editar</button>
            </div>
        </form>
    </section>

@endsection
