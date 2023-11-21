@extends('layouts.mainAdminBlog')

@section('title', 'Publicar una nueva novedad')

@section('main')

    <section class="formNew formNewAdmin">
        <h1 class="mt-5">¡Publicá tu novedad!</h1>

        <form action="{{ route('admin.runNewBlog') }}" method="POST" enctype="multipart/form-data" class="row">
            @csrf
            <div class="col-md-6">
                <label for="titulo">Título <span class="required">*</span></label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}"
                    @if ($errors->has('titulo')) aria-describedby="error-titulo" @endif>
                @error('titulo')
                    <div class="alert alert-danger d-flex align-items-center" id="error-titulo"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('titulo') }}</div>
                @enderror
                <p>El título debe contener como mínimo 10 carácteres</p>
            </div>
            <div class="col-md-6">
                <label for="subtitulo">Subtítulo <span class="required">*</span></label>
                <input type="text" name="subtitulo" id="subtitulo" class="form-control" value="{{ old('subtitulo') }}"
                    @if ($errors->has('subtitulo')) aria-describedby="error-subtitulo" @endif>
                @error('subtitulo')
                    <div class="alert alert-danger d-flex align-items-center" id="error-subtitulo"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('subtitulo') }}</div>
                @enderror
                <p>El subtítulo debe contener como mínimo 10 carácteres</p>
            </div>
            <div>
                <label for="img">Imagen <span class="required">*</span></label>
                <input type="file" name="img" id="img" class="form-control" value="{{ old('img') }}"
                    @if ($errors->has('img')) aria-describedby="error-img" @endif>
                @error('img')
                    <div class="alert alert-danger d-flex align-items-center" id="error-img"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('img') }}</div>
                @enderror
            </div>
            <div>
                <label for="descripcion">Breve descripción de lo que vas a hablar <span class="required">*</span></label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    @if ($errors->has('descripcion')) aria-describedby="error-descripcion" @endif>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="alert alert-danger d-flex align-items-center" id="error-descripcion"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('descripcion') }}</div>
                @enderror
                <p>La descripción debe contener como mínimo 10 carácteres</p>
            </div>
            <div>
                <label for="texto">Contenido del blog <span class="required">*</span> </label>
                <textarea name="texto" id="texto" class="form-control"
                    @if ($errors->has('texto')) aria-describedby="error-texto" @endif>{{ old('texto') }}</textarea>
                @error('texto')
                    <div class="alert alert-danger d-flex align-items-center" id="error-texto"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('texto') }}</div>
                @enderror
                <p>El contenido debe contener como mínimo 20 carácteres</p>
            </div>
            <div>
                <label for="conclusion">Conclusión <span class="required">*</span> </label>
                <input type="text" name="conclusion" id="conclusion" class="form-control"
                    value="{{ old('conclusion') }}"
                    @if ($errors->has('conclusion')) aria-describedby="error-conclusion" @endif>
                @error('conclusion')
                    <div class="alert alert-danger d-flex align-items-center" id="error-conclusion"><ion-icon name="close-circle-outline"></ion-icon>{{ $errors->first('conclusion') }}</div>
                @enderror
                <p>La conclusión debe contener como mínimo 20 carácteres</p>
            </div>
            <div class="etiquetas">
                <label for="etiquetas_id" class="labelEti">Etiquetas: <span class="required">*</span> </label>
                <div class="form-switch">
                    @foreach ($etiquetas as $etiqueta)
                        <label class="form-check-label m-2">
                            <input type="checkbox" name="etiquetas_id[]" class="form-check-input"
                                value="{{ $etiqueta->etiquetas_id }}" @checked(in_array($etiqueta->etiquetas_id, old('etiquetas_id', [])))>
                            {{ $etiqueta->nombre }}
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <input type="hidden" name="autor" id="autor" value="{{ old('autor', $usuario->nombre ?? '') }}">
                @error('autor')
                    <div class="alert alert-danger d-flex align-items-center">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <input type="hidden" name="fechaPublicacion" id="fechaPublicacion"
                    value="{{ old('fechaPublicacion', now()->format('Y-m-d')) }}">
                @error('fechaPublicacion')
                    <div class="alert alert-danger d-flex align-items-center" id="error-fechaPublicacion">{{ $message }}</div>
                @enderror
            </div>


            <div class="botones">
                <button type="submit" class="btn btn-success">Publicar</button>
                <a href="{{ route('admin.blog.dashboardBlog') }}" class="btn btn-secondary">Volver</a>
            </div>

        </form>
    </section>

@endsection
