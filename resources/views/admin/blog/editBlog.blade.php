@extends('layouts.mainAdminBlog')
@section('titulo', 'Editar: ' . '{{ $blog->titulo }}')

@section('main')

    <section class="editBook editBookAdmin">
        <h1 class="mt-5 text-center">Editar "{{ $blog->titulo }}"</h1>

        <form action="{{ route('admin.blog.editActionBlog', ['id' => $blog->blog_id]) }}" method="POST"
            enctype="multipart/form-data" class="row">
            @csrf
            <div class="col-md-6">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ old('titulo', $blog->titulo) }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</div>
                @enderror
                <p>El título debe contener como mínimo 10 carácteres</p>
            </div>
            <div class="col-md-6">
                <label for="subtitulo">Subtítulo</label>
                <input type="text" name="subtitulo" id="subtitulo" class="form-control"
                    value="{{ old('subtitulo', $blog->subtitulo) }}"
                    @if ($errors->has('subtitulo')) aria-describedby="error-subtitulo" @endif>
                @error('subtitulo')
                    <div class="text-danger" id="error-subtitulo">{{ $errors->first('subtitulo') }}</div>
                @enderror
                <p>El subtítulo debe contener como mínimo 10 carácteres</p>
            </div>
            <div class="col-12">
                <label for="descripcion">Breve descripción de lo que vas a hablar</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion', $blog->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="text-danger" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                @enderror
                <p>La descripción debe contener como mínimo 10 carácteres</p>
            </div>
            <div>
                <p class="mt-3">Imagen actual</p>
                {{-- @if ($blog->img !== null && file_exists(public_path('img/' . $blog->img)))
                <img class="mw-100" src="{{ url('img/' . $blog->img) }}" alt="{{ $blog->titulo }}">
            @else
            <ion-icon name="image-outline"></ion-icon>
            @endif --}}
                {{-- Versión Storage --}}
                @if ($blog->img !== null && Storage::has('/public/img/' . $blog->img))
                    <img class="mw-100" src="{{ Storage::disk('public')->url('img/' . $blog->img) }}"
                        alt="{{ $blog->titulo }}">
                @else
                    <ion-icon name="image-outline"></ion-icon>
                @endif
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="img" id="img" class="form-control"
                    value="{{ old('img', $blog->img) }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="text-danger" id="error-img">{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="texto">Contenido del blog</label>
                <textarea name="texto" id="texto" class="form-control"
                    @if ($errors->has('texto')) aria-describedby="error-texto" @endif>{{ old('texto', $blog->texto) }}</textarea>
                @error('texto')
                    <div class="text-danger" id="error-texto">{{ $errors->first('texto') }}</div>
                @enderror
                <p>El contenido debe contener como mínimo 20 carácteres</p>
            </div>
            <div>
                <label for="conclusion">Conclusión</label>
                <input type="text" name="conclusion" id="conclusion" class="form-control"
                    value="{{ old('conclusion', $blog->conclusion) }}"
                    @if ($errors->has('conclusion')) aria-describedby="error-conclusion" @endif>
                @error('conclusion')
                    <div class="text-danger" id="error-conclusion">{{ $errors->first('link') }}</div>
                @enderror
                <p>La conclusión debe contener como mínimo 20 carácteres</p>
            </div>
            <div class="etiquetas">
                <label for="etiquetas_id" class="labelEti">Etiquetas:</label>
                <div class="form-switch">
                @foreach ($etiquetas as $etiqueta)
                        <label class="form-check-label m-2">
                            <div>
                                <input type="checkbox" name="etiquetas_id[]" class="form-check-input"
                                    value="{{ $etiqueta->etiquetas_id }}"
                                    @checked(in_array($etiqueta->etiquetas_id, old('etiquetas_id', $blog->getEtiquetasIdChecked())))>{{ $etiqueta->nombre }}
                            </div>
                        </label>
                        @endforeach
                    </div>
            </div>
            <div class="col-md-6">
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control"
                    value="{{ old('autor', $blog->autor) }}"
                    @if ($errors->has('autor')) aria-describedby="error-autor" @endif>
                @error('autor')
                    <div class="text-danger" id="error-autor">{{ $errors->first('autor') }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="fechaPublicacion">Fecha de Publicación</label>
                <input type="date" name="fechaPublicacion" id="fechaPublicacion" class="form-control"
                    value="{{ old('fechaPublicacion', $blog->fechaPublicacion) }}"
                    @if ($errors->has('fechaPublicacion')) aria-describedby="error-fechaPublicacion" @endif>
                @error('fechaPublicacion')
                    <div class="text-danger" id="error-fechaPublicacion">{{ $errors->first('fechaPublicacion') }}</div>
                @enderror
            </div>

            <div class="botones">
                <button type="submit" class="btn btn-success">Editar</button>
                <a href="{{ route('admin.blog.dashboardBlog') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </section>

@endsection
