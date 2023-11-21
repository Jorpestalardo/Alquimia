@extends('layouts.mainReciclaje')

@section('title', 'Doná un elemento')

@section('main')

    <section class="formDonacion">
        <h1>¡Editá tu donación {{ $donacion->titulo }}!</h1>

        <form action="{{ route('donador.editarDonacion', ['id' => $donacion->donacion_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ old('titulo', $donacion->titulo) }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</div>
                @enderror
            </div>
            <div>
                <p class="mt-3">Imagen actual</p>
                {{-- Versión Storage --}}
                @if ($donacion->img !== null && Storage::has('public/img/' . $donacion->img))
                    <img src="{{ Storage::disk('public')->url('img/' . $donacion->img) }}"
                        class="img-fluid w-100 fixed-image-size imagen-redondeada" alt="{{ $donacion->titulo }}">
                @else
                    <ion-icon name="image-outline" class="fs-1 mt-4"></ion-icon>
                @endif
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="img" id="img" class="form-control"
                    value="{{ old('img', $donacion->img) }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" class="form-control"
                    value="{{ old('estado', $donacion->estado) }}"
                    @if ($errors->has('estado')) aria-describedby="error-estado" @endif>
                @error('estado')
                    <div class="text-danger" id="error-estado">{{ $errors->first('estado') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion', $donacion->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
            </div>
            <div>
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control"
                    value="{{ old('fecha', $donacion->fecha) }}"
                    @if ($errors->has('fecha')) aria-describedby="error-fecha" @endif>
                @error('fecha')
                    <div class="text-danger" id="error-fecha">{{ $errors->first('fecha') }}</div>
                @enderror
            </div>
            <div>
                <label for="tipo_id" class="form-label">Material:</label>
                <select name="tipo_id" id="tipo_id" class="form-control"
                    @error('tipo_id') aria-describedby="error-tipo_id" @enderror>
                    <option value=""></option>
                    @foreach ($tipo as $tipoItem)
                        <option value="{{ $tipoItem->tipo_id }}" @selected(old('tipoItem_id', $donacion->tipo_id) == $tipoItem->tipo_id)>{{ $tipoItem->tipo }}
                        </option>
                    @endforeach
                </select>
                @error('tipo_id')
                    <div class="text-danger" id="error-tipo_id">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="province_id" class="mt-5">Provincia</label>
                <select class="form-select" id="province_id" name="province_id" required>
                    <option value="">Seleccionar una provincia</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->province_id }}" @if (old('province_id', $donacion->ubicacion->province_id) == $province->province_id) selected @endif>
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
                                @if (old('city_id', $donacion->ubicacion->city_id) == $city->city_id) selected @endif>{{ $city->name }} - Departamento de:
                                {{ $city->department }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="d-flex justify-content-end m-1">
                <a href="{{ route('donador.reciclajeDetalle', ['id' => $donacion->donacion_id]) }}"
                    class="btn costume-btn-volver m-2">Volver</a>
                <button type="submit" class="btn custom-btn-editarDonador m-2">Editar</button>
            </div>
        </form>
    </section>
    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
