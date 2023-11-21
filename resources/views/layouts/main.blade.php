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
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('nosotros') }}">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('blog.index') }}">Blog</a>
                        </li>
                        <li class="navbar-brand">
                            <a href="{{ route('home') }}"></a>
                        </li>
                        @auth()
                            @if (auth()->user()->roles_id == 1)
                                <li class="nav-item">
                                    <a href="{{ route('admin.index') }}" class="text-decoration-none">Volver a mi perfil
                                        administrador</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button class="nav-link btn" type="submit">{{ auth()->user()->nombre }} - Cerrar
                                            Sesión<ion-icon name="log-out-outline"></ion-icon></button>
                                    </form>
                                </li>
                            @elseif(auth()->user()->roles_id == 2)
                                <li class="nav-item">
                                    <a href="{{ route('consumidor.index') }}" class="btn">Volver a mi perfil
                                        consumidor</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button class="nav-link btn" type="submit">{{ auth()->user()->nombre }} - Cerrar
                                            Sesión<ion-icon name="log-out-outline"></ion-icon></button>
                                    </form>
                                </li>
                            @elseif(auth()->user()->roles_id == 3)
                                <li class="nav-item">
                                    <a href="{{ route('donador.index') }}" class="btn">Volver a mi perfil donante</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button class="nav-link btn" type="submit">{{ auth()->user()->nombre }} - Cerrar
                                            Sesión<ion-icon name="log-out-outline"></ion-icon></button>
                                    </form>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ route('empresas.empresas') }}">Empresas Ecofriendly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ route('auth.login') }}">Iniciar Sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ route('auth.register') }}">Registrarse</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main>

            @yield('main')
        </main>
        <footer class="footer">
            <ul>
                <li>
                    <button class="icon-share btn" id="shareButton">Compartir <ion-icon name="share-social-outline"></ion-icon> </button>
                </li>
                <li>
                    <p>Alquimia &copy; 2023</p>
                </li>
                <li>
                    <button id="installButton" class="btn">Descargar la App <ion-icon name="download-outline"></ion-icon></button>
                </li>
            </ul>
        </footer>
    </div>

    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtiene el botón de compartir por su id
        var shareButton = document.getElementById('shareButton');

        if (shareButton !== undefined && navigator.share) {
            // Si el navegador admite la Web Share API, agrega el evento de clic al botón
            shareButton.addEventListener('click', function(e) {
                // Obtiene la URL de la aplicación desde el objeto 'location'
                var appUrl = window.location.href;

                // Establece el texto para compartir
                var shareText = '¡Descarga nuestra PWA desde este enlace!';

                // Invoca el sistema de compartir con la Web Share API
                navigator.share({
                        title: 'Alquimia', // Título para compartir
                        text: shareText, // Texto para compartir
                        url: appUrl // URL de la aplicación
                    })
                    .then(function() {
                        console.log('Enlace compartido con éxito.');
                    })
                    .catch(function(error) {
                        console.error('Error al compartir:', error);
                    });
            });
        } else {
            // Si el navegador no admite la Web Share API, oculta el botón de compartir
            shareButton.style.display = 'none';
        }
    });

    window.addEventListener('beforeinstallprompt', (e) => {
        // Evita que el evento predeterminado se ejecute.
        e.preventDefault();
        // Muestra el botón de descarga.
        document.getElementById('installButton').style.display = 'flex';
        // Guarda el evento para usarlo más tarde.
        let deferredPrompt = e;
        // Acción cuando se hace clic en el botón de descarga.
        document.getElementById('installButton').addEventListener('click', () => {
            // Muestra el mensaje de instalación.
            deferredPrompt.prompt();
            // Espera a que el usuario responda al mensaje de instalación.
            deferredPrompt.userChoice.then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                    console.log('Usuario aceptó la instalación');
                } else {
                    console.log('Usuario rechazó la instalación');
                }
                // Limpia el evento después de la instalación o rechazo.
                deferredPrompt = null;
                document.getElementById('installButton').style.display = 'none'; // Oculta el botón
            });
        });
    });
</script>
