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
    <main
        class="main {{ auth()->check() && auth()->user()->roles_id == 2
            ? 'consumidor-mainReci'
            : (auth()->check() && auth()->user()->roles_id == 3
                ? 'donador-mainReci'
                : 'admin-mainReci') }}">
        <button class="hamburger-btn">
            <ion-icon name="menu-outline"></ion-icon>
        </button>
        <aside
            class="sidebar {{ auth()->check() && auth()->user()->roles_id == 2
                ? 'consumidor-navbar'
                : (auth()->check() && auth()->user()->roles_id == 3
                    ? 'donador-navbar'
                    : 'admin-navbar') }}">
            @auth()
                <nav class="nav">
                    <div>
                        <p>Alquimia Recicla</p>
                        @if (auth()->user()->avatar)
                            <a href="{{ route('usuarios.perfil') }}">
                                <img src="{{ asset('img/avatares/' . auth()->user()->avatar->avatar) }}"
                                    alt="{{ auth()->user()->avatar->avatar }}">
                            </a>
                        @endif
                    </div>
                    <ul>
                        @if (auth()->user()->roles_id == 3)
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('donador.dashboard') }}">
                                    <span class="menu-title">Tus reciclajes</span>
                                    <span class="menu-icon">
                                        <ion-icon name="cube-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('mercado.index') }}">
                                    <span class="menu-title">Ver mercado</span>
                                    <span class="menu-icon">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('eventos.donador.eventos') }}">
                                    <span class="menu-title">Eventos</span>
                                    <span class="menu-icon">
                                        <ion-icon name="calendar-clear-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('home') }}">
                                    <span class="menu-title">Volver al sitio</span>
                                    <span class="menu-icon">
                                        <ion-icon name="arrow-undo-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link publicar" href=" {{ route('donador.formElemento') }}">
                                    <span class="menu-title">Publicar reciclaje</span>
                                    <span class="menu-icon">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>

                            <li class="menu-item sub-menu boton">
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <button class="buttonCerrar btn" type="submit">
                                        <ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        @elseif(auth()->user()->roles_id == 2)
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('consumidor.donaciones') }}">
                                    <span class="menu-title">Elementos para reciclar</span>
                                    <span class="menu-icon">
                                        <ion-icon name="cube-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('eventos.consumidor.eventos') }}">
                                    <span class="menu-title">Eventos</span>
                                    <span class="menu-icon">
                                        <ion-icon name="calendar-clear-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('mercado.index') }}">
                                    <span class="menu-title">Ver mercado</span>
                                    <span class="menu-icon">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a class="nav-link" href=" {{ route('home') }}">
                                    <span class="menu-title">Volver al sitio</span>
                                    <span class="menu-icon">
                                        <ion-icon name="arrow-undo-outline"></ion-icon>
                                    </span>
                                </a>
                            </li>

                            <li class="menu-item sub-menu boton">
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <button class="buttonCerrar btn" type="submit">
                                        <ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        @endif
                    @endauth
                </ul>
            </nav>
        </aside>

        @yield('main')
    </main>
    <footer class="footer">
        <p>Da Vinci &copy; 2023</p>
    </footer>

    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>
