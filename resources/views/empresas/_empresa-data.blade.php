<x-empresa-img :empresa="$empresa" />

<p>{{ $empresa->tituloEmpresa }}</p>
<p>{{ $empresa->tituloProducto }}</p>
<p>{{ $empresa->descripcion }}</p>
<p>{{ $empresa->img }}</p>
<p>{{ $empresa->fechaPublicacion }}</p>
<p>{{ $empresa->link }}</p>
<p>{{ $empresa->autor }}</p>
<p>{{ $empresa->usuarios->usuario_id }}</p>



<a class="btn btn-secondary" href="{{ route('empresas.empresas') }}">Volver</a>
