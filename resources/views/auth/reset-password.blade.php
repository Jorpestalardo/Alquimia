@extends('layouts.main')

@section('title', 'Restablecer Contraseña')

@section('main')
    <section class="regis">
        <div class="regisSection recuperarContra">
            <div class="alquimia"></div>
            <h1>Restablecer Contraseña</h1>

            @if (session('message.error'))
                <div class="alert alert-danger">
                    {{ session('message.error') }}
                </div>
            @endif
            @if (session('message.success'))
            <div class="alert alert-success">
                {{ session('message.success') }}
            </div>
            @endif
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="recoveryCode" value="{{ $code }}">

                <div class="mb-3">
                    <label for="password" class="password form-label">Nueva Contraseña</label>
                    <div class="password-field">
                        <input type="password" name="password" id="password" class="form-control"
                            @if ($errors->has('password')) aria-describedby="error-password" @endif>
                        <span class="toggle-password" onclick="togglePasswordVisibility()"><ion-icon
                                name="eye-outline"></ion-icon></span>
                    </div>
                    @error('password')
                        <div class="text-danger" id="error-password">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="password form-label">Confirmar Nueva Contraseña</label>
                    <div class="password-field">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                            @if ($errors->has('password_confirmation')) aria-describedby="error-password_confirmation" @endif>
                        <span class="toggle-password" onclick="togglePasswordVisibility()"><ion-icon
                                name="eye-outline"></ion-icon></span>
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger" id="error-password_confirmation">{{ $message }}</div>
                    @enderror
                </div>

                <div class="botones">
                    <button type="submit" class="btn">Restablecer Contraseña</button>
                    <a class="mt-4" href="{{ route('auth.login') }}"><ion-icon name="arrow-back-outline"></ion-icon>Volver
                        al Inicio de Sesión</a>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('js/password.js') }}"></script>
@endsection
