@extends('layouts.mainReciclaje')
@section('title', 'Donaciones')
@section('main')
    <section class="secDonacion">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="container tusReciclajes">
            <h1 class="mt-5 mb-5 text-center">Elementos para reciclar</h1>
            <h2>¡Vamos a construir un mejor futuro!</h2>
            <p>Según el <strong>Ministerio de Ambiente y Desarrollo Sustentable</strong>, los argentinos producimos 1,15 kg
                de residuos ¡por día!, es decir <span class="textoBold"> una tonelada de basura cada 2 segundos.</span></p>
            <p>Es por eso que estamos muy agradecidos de que formés parte de nuestra comunidad:</p>

            <div class="filtros">
                <div>
                    <p>¿Te gustaría buscar por material?</p>

                    <form action="{{ route('consumidor.donaciones') }}" method="get" class="mt-3 mb-3">
                        <label for="tipo_id">Filtrar por tipo de material:</label>
                        <select name="tipo_id" id="tipo_id">
                            <option value="">Todos los tipos</option>
                            @foreach ($tipos as $tipo_id => $tipo)
                                <option value="{{ $tipo_id }}" @if ($tipo_id == $selectedTipo) selected @endif>
                                    {{ $tipo }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn">Filtrar</button>
                    </form>
                </div>

                <div>
                    <p>¿Te gustaría buscar por departamento?</p>

                    <form action="{{ route('consumidor.donaciones') }}" method="get" class="mt-3 mb-3">
                        <label for="department">Filtrar por departamento:</label>
                        <select name="department" id="department">
                            <option value="">Todos los departamentos</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department }}" @if ($department == $selectedDepartment) selected @endif>
                                    {{ $department }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn">Filtrar</button>
                    </form>
                </div>
            </div>

            @if ($donaciones->isEmpty())
                @if (!empty($selectedTipo) && !empty($selectedDepartment))
                    <p>No hay donaciones con ese material en esa ciudad.</p>
                @elseif (!empty($selectedTipo))
                    <p>No hay donaciones con ese material.</p>
                @elseif (!empty($selectedDepartment))
                    <p>No hay donaciones de esa ciudad.</p>
                @endif
            @else
                <p class="parrafo-con-linea-amarilla">Te mostramos <em>los elementos para reciclar más cercanos según tu
                        ubicación</em>:</p>
                <div class="row container">
                    @foreach ($donaciones as $donacion)
                        @if (!$donacion->envio)
                        <div class="col-md-5 col-sm-1 m-2">
                            <div>
                                <div class="card_mercado">
                                    <div class="imagen">
                                        <x-donacion-img :donacion="$donacion" />
                                    </div>
                                    <div class="tusReciclajes">
                                        <h2 class="card-text mt-3">{{ $donacion->titulo }}</h2>
                                        <p class="small text-muted">{{ $donacion->ubicacion->province->name }} -
                                            {{ $donacion->ubicacion->city->name }}
                                            {{ $donacion->ubicacion->city->department }}</p>
                                    </div>
                                    <a href="{{ route('consumidor.donacionesDetalle', ['id' => $donacion->donacion_id]) }}"
                                        class="btn m-2 costume-btn-comentario">Ver más</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
        </div>
    </section>
    @endif
@endsection
