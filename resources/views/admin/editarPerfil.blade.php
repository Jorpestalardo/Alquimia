@extends('layouts.main')
@section('title', 'Editar perfil Alquimista Admin')
@section('main')
    <section class="editPerfil">
        <h1>Edita la información de tu Perfil Administrador</h1>

        <form method="POST" action="{{ route('perfil.actualizar') }}" class="row">
            @csrf

            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $user->nombre }}" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" value="{{ $user->apellido }}" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="img">Imagen:</label>
                <input type="file" name="img" id="img" class="form-control">
                <p class="text-muted">Seleccione una nueva imagen si desea cambiarla.</p>
            </div> -->
            <div class="form-group col-md-6">
                <label for="biografia">Biografía:</label>
                <textarea name="biografia" id="biografia" placeholder="Cuéntanos un poco sobre vos" class="form-control">{{ $user->biografia }}</textarea>
            </div>

            <button type="submit" class="btn">Guardar cambios</button>
        </form>
    </section>
@endsection
