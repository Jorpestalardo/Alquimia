<x-donacion-img :donacion="$donacion" />

<p>{{ $donacion->titulo }}</p>
<p>{{ $donacion->estado }}</p>
<p>{{ $donacion->descripcion }}</p>
<p>{{ $donacion->fecha }}</p>
<p>{{ $donacion->tipo->tipo }}</p>
<p>{{$donacion->ubicacion->province->name}} - {{$donacion->ubicacion->city->name}} {{$donacion->ubicacion->city->department}}</p>

<a class="btn btn-secondary" href="{{ route('consumidor.donaciones') }}">Volver</a>
