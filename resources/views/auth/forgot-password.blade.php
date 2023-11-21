@extends('layouts.main')

@section('title', 'Recuperar Contraseña')

@section('main')
    <section class="regis">
        <div class="regisSection recuperarContra">
            <div class="alquimiaBlanco"></div>
            <h1>Recuperar Contraseña</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        @if ($errors->has('email')) aria-describedby="error-email" @endif>
                    @error('email')
                        <div class="text-danger" id="error-email">{{ $message }}</div>
                    @enderror
                </div>

                <div class="botones">
                    <button type="submit" class="btn">Enviar Código de Recuperación</button>
                    <a href="{{ route('auth.login') }}"><ion-icon name="arrow-back-outline"></ion-icon>Volver al Inicio de Sesión</a>
                </div>
            </form>
        </div>
    </section>
@endsection
