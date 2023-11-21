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
        <nav class="navbar {{ auth()->check() && auth()->user()->roles_id == 2
            ? 'consumidorMain'
            : (auth()->check() && auth()->user()->roles_id == 3
                ? 'donadorMain'
                : 'adminMain') }}">
        <a href="{{ route('home') }}">
                <ion-icon name="arrow-back-outline"></ion-icon>Volver
            </a>
            <form action="{{ route('auth.logout') }}" method="post">
                @csrf
                <button class="btn" type="submit">
                    <ion-icon name="log-out-outline"></ion-icon>Cerrar Sesión
                </button>
            </form>
        </nav>
        <main>

            @yield('main')
        </main>
        <footer class="footer visually-hidden">
            <p>Da Vinci &copy; 2023</p>
        </footer>

    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
