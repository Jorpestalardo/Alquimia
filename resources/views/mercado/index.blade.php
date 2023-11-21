@extends('layouts.mainMercado')
@section('title', 'Mercado Alquimia')
@section('main')
    <section class="secMercado">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="container">
            <h1 class="text-center p-5">Mercado</h1>
            <h2>¿Por qué es bueno comprar cosas usadas o recicladas?</h2>
            <p>Comprar cosas usadas o recicladas tiene múltiples beneficios. En primer lugar, contribuye a la <span
                    class="textoBold">conservación de los recursos naturales</span> al reducir la necesidad de extraer y
                producir nuevos materiales. Además, ayuda a disminuir la cantidad de residuos que terminan en vertederos,
                promoviendo así la sostenibilidad ambiental. Al dar una segunda vida a los productos, se prolonga su ciclo
                de vida útil, lo que a su vez reduce la demanda de energía y emisiones asociadas con la fabricación de
                nuevos artículos. Comprar productos usados también puede resultar <span class="textoBold">más
                    económico</span>, ya que suelen tener precios más bajos que los artículos nuevos. Además, fomenta la
                economía circular y el comercio local, al apoyar a tiendas de segunda mano y vendedores locales. Por último,
                al comprar cosas usadas, puedes encontrar <span class="textoBold">piezas únicas y vintage</span>, lo que te
                permite expresar tu estilo personal de manera original y exclusiva.</p>
            <p class="parrafo-con-linea-roja">Te mostramos el cátalogo de productos para vos:</p>
            <div class="filtros">
                <p>¿Te gustaría buscar por departamento de tu zona?</p>

                <form action="{{ route('mercado.index') }}" method="get" class="mt-3 mb-3">
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
            <div class="row">
                @foreach ($articulos as $articulo)
                    <div class="col-md-6 col-sm-1">
                        <div class="card_mercado">
                            <div>
                                <div class="imagen">
                                    <img class="w-100 fixed-image-size imagen-redondeada"
                                        src="{{ url('storage/img/' . $articulo->foto) }}" alt="{{ $articulo->titulo }}">
                                </div>
                                <div class="tituloPrecio">
                                    <h2 class="mt-2">{{ $articulo->titulo }}</h2>
                                    <p class="mt-2">$ {{ $articulo->precio }}</p>
                                </div>
                                <p class="small text-muted">{{ $articulo->ubicacion->province->name }} -
                                    {{ $articulo->ubicacion->city->name }} {{ $articulo->ubicacion->city->department }}</p>

                            </div>
                            <a href="{{ route('mercado.mercadoDetalle', ['id' => $articulo->mercado_id]) }}"
                                class="btn custom-btn-mercado">Ver más</a>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    <h2 class="ventasTitulo">Ventas en todo el país:</h2>
                    @foreach ($mercado as $mercadito)
                        <div class="col-md-6 col-sm-1">
                            <div class="card_mercado">
                                <div>
                                    <div class="imagen">
                                        <img class="w-100 fixed-image-size imagen-redondeada"
                                            src="{{ url('storage/img/' . $mercadito->foto) }}"
                                            alt="{{ $mercadito->titulo }}">
                                    </div>
                                    <div class="tituloPrecio">
                                        <h2 class="mt-2">{{ $mercadito->titulo }}</h2>
                                        <p class="mt-2">$ {{ $mercadito->precio }}</p>
                                    </div>
                                    <p class="small text-muted">{{ $mercadito->ubicacion->province->name }} -
                                        {{ $mercadito->ubicacion->city->name }}
                                        {{ $mercadito->ubicacion->city->department }}</p>
                                </div>
                                <a href="{{ route('mercado.mercadoDetalle', ['id' => $mercadito->mercado_id]) }}"
                                    class="btn custom-btn-mercado">Ver más</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
