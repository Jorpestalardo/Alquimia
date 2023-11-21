<?php
/**
 *  @var \App\Models\Genre[]|\Illuminate\Database\Eloquent\Collection $genres
 * */
?>

@extends('layouts.mainAdminEmpre')

@section('title', 'Publicá una empresa')

@section('main')

    <section class="formEmpresa">
        <h1>¡Publicá la nueva Empresa!</h1>

        <form action="{{ route('admin.empresas.nuevaEmpresa') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="tituloEmpresa">Título de la Empresa:<span class="required">*</span></label>
                <input type="text" name="tituloEmpresa" id="tituloEmpresa" class="form-control"
                    value="{{ old('tituloEmpresa') }}"
                    @if ($errors->has('tituloEmpresa')) aria-describedby="error-tituloEmpresa" @endif>
                @error('tituloEmpresa')
                    <div class="alert alert-danger d-flex align-items-center" id="error-tituloEmpresa">
                        <ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('tituloEmpresa') }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="img">Imagen<span class="required">*</span></label>
                <input type="file" name="img" id="img" class="form-control" value="{{ old('img') }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="alert alert-danger d-flex align-items-center" id="error-img"><ion-icon
                            name="close-circle-outline"></ion-icon>{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="tituloProducto">Subtítulo:<span class="required">*</span></label>
                <input type="text" name="tituloProducto" id="tituloProducto" class="form-control"
                    value="{{ old('tituloProducto') }}"
                    @if ($errors->has('tituloProducto')) aria-describedby="error-tituloProducto" @endif>
                @error('tituloProducto')
                    <div class="alert alert-danger d-flex align-items-center" id="error-tituloProducto">
                        <ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('tituloProducto') }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción:<span class="required">*</span></label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="alert alert-danger d-flex align-items-center" id="error-descripcion">
                        <ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('descripcion') }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="fechaPublicacion">Fecha:<span class="required">*</span></label>
                <input type="date" name="fechaPublicacion" id="fechaPublicacion" class="form-control"
                    value="{{ old('fechaPublicacion', now()->format('Y-m-d')) }}"
                    @if ($errors->has('fechaPublicacion')) aria-describedby="error-fechaPublicacion" @endif>
                @error('fechaPublicacion')
                    <div class="alert alert-danger d-flex align-items-center" id="error-fechaPublicacion">
                        <ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('fechaPublicacion') }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="link">Link del Sitio Web:<span class="required">*</span></label>
                <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}"
                    @if ($errors->has('link')) aria-describedby="error-link" @endif>
                @error('link')
                    <div class="alert alert-danger d-flex align-items-center" id="error-link"><ion-icon
                            name="close-circle-outline"></ion-icon>{{ $errors->first('link') }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor:<span class="required">*</span></label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $usuario->nombre ?? '') }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="alert alert-danger d-flex align-items-center" id="error-autor"><ion-icon
                            name="close-circle-outline"></ion-icon>{{ $errors->first('autor') }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-end m-3">
                <a href="{{ route('admin.empresas.dashboard') }}" class="btn costume-btn-volver m-2 ">Volver</a>
                <button type="submit" class="btn constume-btn-admin m-2 ">Publicar</button>
            </div>
        </form>
    </section>

@endsection
