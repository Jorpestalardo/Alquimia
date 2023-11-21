@extends('layouts.mainReciclaje')

@section('title', 'Editar Evento')

@section('main')

    <section class="formNew">
        <h1>¡Editá el evento {{ $evento->titulo }}!</h1>

        <form action="{{ route('eventos.donador.editarEventoAcc', ['id' => $evento->eventos_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título del evento:</label>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ old('titulo', $evento->titulo) }}"
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
                        <option value="{{ $province->province_id }}" @if (old('province_id', $evento->ubicacion->province_id) == $province->province_id) selected @endif>
                            {{ $province->name }}</option>
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
                            <option value="{{ $city->city_id }}" data-province="{{ $city->province_id }}"
                                @if (old('city_id', $evento->ubicacion->city_id) == $city->city_id) selected @endif>{{ $city->name }} - Departamento de:
                                {{ $city->department }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div>
                <p class="mt-3">Imagen actual</p>
                {{-- @if ($evento->img !== null && file_exists(public_path('img/' . $evento->img)))
                <img class="mw-100" src="{{ url('img/' . $evento->img) }}" alt="{{ $evento->titulo }}">
            @else
            <ion-icon name="image-outline"></ion-icon>
            @endif --}}
                {{-- Versión Storage --}}
                @if ($evento->img !== null && Storage::has('public/img/' . $evento->img))
                    <img class="mw-100" src="{{ Storage::url('public/img/' . $evento->img) }}"
                        alt="{{ $evento->titulo }}">
                @else
                    <ion-icon name="image-outline"></ion-icon>
                @endif
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="img" id="img" class="form-control"
                    value="{{ old('img', $evento->img) }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion', $evento->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
            </div>
            <div>
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control"
                    value="{{ old('fecha', $evento->fecha) }}"
                    @if ($errors->has('fecha')) aria-describedby="error-fecha" @endif>
                @error('fecha')
                    <div class="text-danger" id="error-fecha">{{ $errors->first('fecha') }}</div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $evento->autor) }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div>

            <div class="botones">
                <a href="{{ route('eventos.donador.misEventoDetalle', ['id' => $evento->eventos_id]) }}"
                    class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-success">Modificar</button>
            </div>
        </form>
    </section>
    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
