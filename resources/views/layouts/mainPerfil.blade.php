<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Alquimia</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="<?= url('img/favicon/alquimia-logo.ico') ?>">
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= url('css/app.css') ?>">
    <!--PWA-->
    @laravelPWA
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Abrir/cerrar menu de navegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav justify-content-center align-items-center">
                        @auth()
                            @if (auth()->user()->roles_id == 3)
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('mercado.index') }}">Ver mercado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('donador.dashboard') }}">Ver reciclados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('usuarios.perfil') }}">Mi Perfil Donante</a>
                                </li>

                                <li class="nav-item">
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button class="nav-link btn btn-secondary"
                                            type="submit">{{ auth()->user()->email }} - Cerrar Sesión</button>
                                    </form>
                                </li>
                            @elseif(auth()->user()->roles_id == 2)
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('mercado.index') }}">Ver mercado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('donador.dashboard') }}">Ver reciclados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{ route('usuarios.perfil') }}">Mi Perfil Consumidor</a>
                                </li>

                                <li class="nav-item">
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button class="nav-link btn btn-secondary"
                                            type="submit">{{ auth()->user()->email }} - Cerrar Sesión</button>
                                    </form>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main>

            @yield('main')
        </main>
        <footer class="footer">
            <p>Da Vinci &copy; 2023</p>
        </footer>


    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/menu.js')}}"></script>
</body>

</html>
