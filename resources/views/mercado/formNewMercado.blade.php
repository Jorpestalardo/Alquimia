@extends('layouts.mainMercado')

@section('title', 'Publicá un producto')

@section('main')

    <section class="formNew">
        <h1 class="tituloNegro">¡Publicá un producto a la venta!</h1>
        <form class="formMercado" action="{{ route('mercado.runNewMercado') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título del producto:<span class="required">*</span></label>
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
                <label for="foto">Imagen<span class="required">*</span></label>
                <input type="file" name="foto" id="foto" class="form-control" value="{{ old('foto') }}"
                    @if ($errors->has('foto')) aria-describedby="error-foto" @endif>
                @error('foto')
                    <div class="text-danger" id="error-foto">{{ $errors->first('foto') }}</div>
                @enderror
            </div>
            <div>
                <label for="caracteristica">Característica del producto:<span class="required">*</span></label>
                <input type="text" name="caracteristica" id="caracteristica" class="form-control"
                    value="{{ old('caracteristica') }}"
                    @if ($errors->has('caracteristica')) aria-describedby="error-caracteristica" @endif>
                @error('caracteristica')
                    <div class="text-danger" id="error-caracteristica">{{ $errors->first('caracteristica') }}</div>
                @enderror
            </div>
            <div>
                <label for="precio">Precio:<span class="required">*</span></label>
                <input type="number" name="precio" id="precio" class="form-control" value="{{ old('precio') }}"
                    @if ($errors->has('precio')) aria-describedby="error-precio" @endif>
                @error('precio')
                    <div class="text-danger" id="error-precio">{{ $errors->first('precio') }}</div>
                @enderror
            </div>

            <div>
                <label for="autor">Nombre del vendedor:<span class="required">*</span></label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $usuario->nombre ?? '') }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-end m-3">
                <a href="{{ route('mercado.index') }}" class="btn costume-btn-volver">Volver</a>
                <button type="submit" class="btn constume-btn-chatMercado">Publicar</button>
            </div>
        </form>

    </section>

    <script src="{{asset('js/filtroUbicacion.js')}}"></script>
@endsection
