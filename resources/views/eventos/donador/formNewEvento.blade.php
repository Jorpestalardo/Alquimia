@extends('layouts.mainReciclaje')

@section('title', 'Publicá un producto')

@section('main')

    <section class="formNew">
        <h1>¡Publicá tu evento!</h1>

        <form action="{{ route('eventos.donador.runNewEvento') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título del Evento:<span class="required">*</span></label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</div>
                @enderror
            </div>
            <div>
                <label for="province_id" class="mt-5">Provincia</label>
                <select class="form-select" id="province_id" name="province_id" required>
                    <option value="">Seleccionar una provincia</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="city_id" class="mt-5">Ciudad y Departamento:</label>
                <select class="form-select" id="city_id" name="city_id" required>
                    <option value="">Seleccionar una ciudad</option>
                    <!-- Las opciones de las ciudades se cargarán automáticamente cuando se seleccione una provincia -->
                    @isset($cities)
                        @foreach ($cities as $city)
                            <option value="{{ $city->city_id }}" data-province="{{ $city->province_id }}">{{ $city->name }} -
                                Departamento de: {{ $city->department }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div>
                <label for="img">Imagen<span class="required">*</span></label>
                <input type="file" name="img" id="img" class="form-control" value="{{ old('img') }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción del evento:<span class="required">*</span></label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion') }}</textarea>

                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
                <p>La descripción debe contener como mínimo 20 carácteres</p>
            </div>

            <div>
                <label for="autor">Nombre del autor:<span class="required">*</span></label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $usuario->nombre ?? '') }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div> 

            <div class="col-md-6">
                <label for="fecha">Fecha de Publicación<span class="required">*</span></label>
                <input type="date" name="fecha" id="fecha" class="form-control"
                    value="{{ old('fecha', now()->format('Y-m-d')) }}"
                    @if ($errors->has('fecha')) aria-describedby="error-fecha" @endif>
                @error('fecha')
                    <div class="text-danger" id="error-fecha">{{ $message }}</div>
                @enderror
            </div>

            <div class="botones">
                <button type="submit" class="btn btn-success">Publicar</button>
                <a href="{{ route('eventos.donador.eventos') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </section>
    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
