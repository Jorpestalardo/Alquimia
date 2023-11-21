<?php
/**
 *  @var \App\Models\Genre[]|\Illuminate\Database\Eloquent\Collection $genres
 * */
?>

@extends('layouts.mainReciclaje')

@section('title', 'Doná un elemento')

@section('main')

    <section class="formDonacion">
        <h1>¡Doná tu Elemento!</h1>

        <form action="{{ route('donador.nuevoElemento') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</div>
                @enderror
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="img" id="img" class="form-control" value="{{ old('img') }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado') }}"
                    @if ($errors->has('estado')) aria-describedby="error-estado" @endif>
                @error('estado')
                    <div class="text-danger" id="error-estado">{{ $errors->first('estado') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
            </div>
            <div>
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}"
                    @if ($errors->has('fecha')) aria-describedby="error-fecha" @endif>
                @error('fecha')
                    <div class="text-danger" id="error-fecha">{{ $errors->first('fecha') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tipo_id" class="form-label">Material:</label>
                <select name="tipo_id" id="tipo_id" class="form-control"
                    @error('tipo_id') aria-describedby="error-tipo_id" @enderror>
                    <option value="">Elegí el material</option>
                    @foreach ($tipo as $tipoItem)
                        <option value="{{ $tipoItem->tipo_id }}" @if (old('tipo_id') == $tipoItem->tipo_id) selected @endif>
                            {{ $tipoItem->tipo }}</option>
                    @endforeach
                </select>
                @error('tipo_id')
                    <div class="text-danger" id="error-tipo_id">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="province_id" class="mt-5">Provincia</label>
                <select class="form-select" id="province_id" name="province_id" required>
                    <option value="">Seleccionar una provincia</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="city_id" class="mt-5">Ciudad y Departamento:</label>
                <select class="form-select" id="city_id" name="city_id" required>
                    <option value="">Seleccionar una ciudad</option>
                    <!-- Las opciones de las ciudades se cargarán automáticamente cuando se seleccione una provincia -->
                    @isset($cities)
                        @foreach ($cities as $city)
                            <option value="{{ $city->city_id }}" data-province="{{ $city->province_id }}">{{ $city->name }} - Departamento de: {{$city->department}}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="d-flex justify-content-end m-1">
                <a href="{{ route('donador.dashboard') }}" class="btn costume-btn-volver m-2">Volver</a>
                <button type="submit" class="btn custom-btn-editarDonador m-2">Publicar</button>
            </div>
        </form>
    </section>

    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
