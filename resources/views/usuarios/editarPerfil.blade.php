@extends('layouts.main')

@section('title', 'Editar Perfil')

@section('main')

    <section class="editBook">
        <h1>Editar mi perfil</h1>

        <form action="{{ route('usuarios.editarPerfilAction', ['id' => $usuario->usuario_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control"
                    value="{{ old('nombre', $usuario->nombre) }}"
                    @if ($errors->has('nombre')) aria-describedby="error-nombre" @endif>
                @error('nombre')
                    <div class="text-danger" id="error-nombre">{{ $errors->first('nombre') }}</div>
                @enderror
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control"
                    value="{{ old('apellido', $usuario->apellido) }}"
                    @if ($errors->has('apellido')) aria-describedby="error-apellido" @endif>
                @error('apellido')
                    <div class="text-danger" id="error-apellido">{{ $errors->first('apellido') }}</div>
                @enderror
            </div>
            <div>
                <p class="mt-3">Avatar Actual</p>
                @foreach ($avatares as $avatar)
                    <label class="radio-avatar">
                        <input type="radio" name="avatar_id" value="{{ $avatar->avatar_id }}"
                            {{ $avatar->avatar_id == $usuario->avatar_id ? 'checked' : '' }}>
                        <span class="checkmark">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </span>
                        <img src="{{ asset('img/avatares/' . $avatar->avatar) }}" alt="{{ $avatar->avatar }}"
                            class="avatar-editar">
                    </label>
                @endforeach
            </div>
            <div>
                <label for="biografia">Contanos un poco de vos:</label>
                <textarea name="biografia" id="biografia" class="form-control">{{ old('biografia', $usuario->biografia) }}</textarea>
            </div>

            <div class="d-flex justify-content-end m-3">
                <a href="{{ route('usuarios.perfil') }}" class="btn costume-btn-volver m-2">Volver</a>
                <button type="submit" class="btn constume-btn-admin m-2">Guardar</button>
            </div>
        </form>
    </section>

@endsection
