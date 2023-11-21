@extends('layouts.mainMercado')
@section('title', 'Editar ' . $mercado->titulo)

@section('main')

    <section class="formNew">
        <h1 class="mt-5">Editar "{{ $mercado->titulo }}"</h1>

        <form action="{{ route('mercado.editProductAction', ['id' => $mercado->mercado_id]) }}" method="post"
            enctype="multipart/form-data" class="row">
            @csrf
            <div class="col-md-6">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ old('titulo', $mercado->titulo) }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</div>
                @enderror
            </div>
            <div>
                <p class="mt-3">Imagen actual</p>
                {{-- Versión Storage --}}
                @if ($mercado->foto !== null && Storage::has('public/img/' . $mercado->foto))
                    <img src="{{ Storage::disk('public')->url('img/' . $mercado->foto) }}"
                        class="img-fluid w-100 imagen-redondeada-detalle" alt="{{ $mercado->titulo }}">
                @else
                    <ion-icon name="image-outline"></ion-icon>
                @endif
            </div>
            <div>
                <label for="foto">Imagen</label>
                <input type="file" name="foto" id="foto" class="form-control"
                    value="{{ old('foto', $mercado->foto) }}"
                    @if ($errors->has('foto')) aria-describedby="error-foto" @endif>
                @error('foto')
                    <div class="text-danger" id="error-foto">{{ $errors->first('foto') }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="caracteristica">Breve característica del producto</label>
                <textarea name="caracteristica" id="caracteristica" class="form-control"
                    @if ($errors->has('caracteristica')) aria-describedby="error-caracteristica" @endif>{{ old('caracteristica', $mercado->caracteristica) }}</textarea>
                @error('caracteristica')
                    <div class="text-danger" id="error-caracteristica">{{ $errors->first('caracteristica') }}</div>
                @enderror
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control"
                    value="{{ old('precio', $mercado->precio) }}"
                    @if ($errors->has('precio')) aria-describedby="error-precio" @endif>
                @error('precio')
                    <div class="text-danger" id="error-precio">{{ $errors->first('precio') }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $mercado->autor) }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div>

            <div>
                <label for="province_id" class="mt-5">Provincia</label>
                <select class="form-select" id="province_id" name="province_id" required>
                    <option value="">Seleccionar una provincia</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->province_id }}" @if (old('province_id', $mercado->ubicacion->province_id) == $province->province_id) selected @endif>
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
                                @if (old('city_id', $mercado->ubicacion->city_id) == $city->city_id) selected @endif>{{ $city->name }} - Departamento de:
                                {{ $city->department }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="d-flex justify-content-end m-3">
                <a href="{{ route('mercado.userProducts', ['id' => auth()->user()->usuario_id]) }}"
                    class="btn costume-btn-volver m-3">Volver</a>
                <button type="submit" class="btn constume-btn-chatMercado m-3">Editar</button>
            </div>
        </form>
    </section>

    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
