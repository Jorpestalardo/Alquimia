<?php
use Illuminate\Support\Str;

?>

@extends('layouts.main')
@section('title', 'Blog Alquimia')
@section('main')
    <section class="blog">
        @if (Session::has('message.success'))
            <div class="alert alert-success">{!! Session::get('message.success') !!}</div>
        @endif
        <div class="blogContenido text-start">
            <h1>¡Bienvenidos a nuestro blog!</h1>
            <p>Aquí encontrarás las últimas novedades sobre clasificación de plásticos, herramientas de bricolaje y noticias
                de actualidad en materia ambiental. Aprendé a reciclar de forma efectiva, descubre técnicas para reutilizar
                materiales y mantente informado sobre los avances en la protección del medio ambiente.</p>
            <p>Explora nuestros artículos, comparte tus ideas y únete a nuestra comunidad comprometida con un futuro
                sostenible. Pequeños cambios en nuestro día a día pueden marcar la diferencia. ¡Juntos podemos construir un
                mundo más verde y consciente!</p>
            <p>Unite a nosotros y sé parte del movimiento hacia un estilo de vida más ecoamigable. ¡Gracias por ser parte de
                esta comunidad y por tu contribución al cuidado del planeta!</p>
            <a href="#blogs" class="btn">Saber más</a>
        </div>





        <article id="blogs">
            @foreach ($blogs as $blog)
                <ul>
                    <li>
                        <img class="img-fluid rounded" src="{{ url('storage/img/' . $blog->img) }}" alt="{{ $blog->titulo }}">
                        <div>
                            <h2>{{ $blog->titulo }}</h2>
                            <p class="mt-2">{{ Str::limit($blog->subtitulo, 103) }}</p>

                            <a href="{{ route('blog.detalle', ['id' => $blog->blog_id]) }}">Saber más <ion-icon
                                    name="arrow-forward-outline"></ion-icon></a>
                        </div>
                    </li>
                </ul>
            @endforeach
        </article>

        <article class="eventos">
            <div class="texto">
                <h2>¡Alquimia te invita a que participes de nuestros eventos!</h2>
                <p>Tendrás una sección donde podrás ser parte de diferentes encuentros hechos por nuestros usuarios donde
                    podrás encontrar compañeros con tus mismos objetivos</p>
                <p>¿Qué esperas para unirte?</p>
                <a href="{{ route('auth.login') }}" class="btn">Saber más</a>

            </div>
            <div class="box"></div>
        </article>
    </section>


@endsection
