@extends('layouts.main')
@section('title', 'Iniciar Sesión')
@section('main')
    <section class="login">
        <div class="loginSection">
            <div class="alquimia"></div>
            <h1>Iniciar Sesión</h1>
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

            <form action="{{ route('auth.loginAction') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        @if ($errors->has('email')) aria-describedby="error-email" @endif>
                    @error('email')
                        <div class="text-danger" id="error-email">{{ $errors->first('email') }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="password form-label ">Contraseña</label>
                    <div class="password-field">
                        <input type="password" name="password" id="password" class="form-control"
                            @if ($errors->has('password')) aria-describedby="error-password" @endif>
                        <span class="toggle-password" onclick="togglePasswordVisibility()">
                            <ion-icon name="eye-outline"></ion-icon>
                        </span>
                    </div>
                    @error('password')
                        <div class="text-danger" id="error-password">{{ $errors->first('password') }}</div>
                    @enderror
                    <a class="mt-4" href="{{ route('password.request') }}">Me olvidé la contraseña</a>

                </div>

                <div class="botones">
                    <button type="submit" class="btn">Iniciar Sesión</button>
                    <a class="mt-4" href="{{ route('auth.register') }}">No tengo una cuenta</a>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('js/password.js') }}"></script>
@endsection
