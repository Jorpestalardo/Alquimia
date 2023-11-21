@extends('layouts.main')
@section('title', 'Detalle de ' . $blog->titulo)
@section('main')
    <section class="secDetailNew">
        <img class="w-100 mt-3 rounded" src="{{ url('storage/img/' . $blog->img) }}" alt="{{ $blog->titulo }}">

        <div class="authorDate mt-3">
            <p>{{ $blog->autor }}</p>
            <p>{{ $formattedDate }}</p>
        </div>

        <div class="contenidoDetail">
            <h2>{{ $blog->titulo }}</h2>
            <p>{{ $blog->subtitulo }}</p>

            <p class="infoblog">{{ $blog->descripcion }}</p>
            <p class="infoblog">{{ $blog->texto }}</p>
            <p class="infoblog">{{ $blog->conclusion }}</p>

            @auth
                <form action="{{ route('blog.detalle', ['id' => $blog->blog_id]) }}" method="POST">
                    @csrf
                    <div class="d-flex">
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <textarea name="mensaje" placeholder="Escribe tu comentario"></textarea>
                    </div>
                    <div class="d-flex justify-content-end m-1">
                        <button type="submit" class="btn">Enviar comentario</button>
                    </div>
                </form>
            @else
                <div class="invitacion-registro">
                    <h3>¿Querés comentar?</h3>
                    <p>Te invitamos a formar parte de nuestra comunidad. Registrate como usuario para que podamos conocer tu
                        opinión.</p>
                    <a href="{{ route('auth.login') }}" class="btn iniciar">Iniciar Sesión</a>
                    <a href="{{ route('auth.register') }}" class="btn">Registrarse</a>
                </div>
            @endauth

            @foreach ($comentarios_blogs as $comentarioblog)
                <div class="comentarios">
                    <h4>{{ $comentarioblog->usuario->nombre }} {{ $comentarioblog->usuario->apellido }} <span class="fechaComen">{{$formattedDate}}</span></h4>
                    <p>{{ $comentarioblog->mensaje }}</p>
                </div>
            @endforeach

            <a class="btn btn-secondary mt-5" href="{{ route('blog.index') }}">Volver</a>
        </div>
    </section>
@endsection
