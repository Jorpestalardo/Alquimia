@extends('layouts.mainAdminBlog')
@section('title', 'Confirmar eliminación de' . $blog->titulo)
@section('main')

    <section class="deleteEmpresa">
        <div class="container">
            <h1 class="textoNegro p-5">Confirmar eliminación de "{{ $blog->titulo }}"</h1>
            <x-blog-data :blog='$blog' />
            <form action="{{ route('admin.deleteActionBlog', ['id' => $blog->blog_id]) }}" method="post">
                @csrf
                <p class="tituloNegro fs-3 text-center mt-5">¿Estás seguro que querés eliminar '{{ $blog->titulo }}'?</p>
                <div class="d-flex justify-content-end p-3">
                    <a class="btn costume-btn-volver m-2" href="{{ route('admin.blog.dashboardBlog') }}">Volver</a>
                    <button type="submit" class="btn custom-btn-eliminar m-2">Eliminar</button>
                </div>
            </form>
        </div>
    </section>


@endsection
