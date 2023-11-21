<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email de recuperación Alquimia</title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= url('css/app.css') ?>">
    </head>
<body>
    <section class="recu-mail">
        <h1>Código de recuperación de contraseña</h1>
        <div>
            <p>¡Hola, Alquimista!</p>
                <p>Recibimos una solicitud para restablecer la contraseña de tu cuenta en Alquimia.</p>
                <p>Usa el siguiente código de recuperación para completar el proceso:</p>
                <p class="codigo">{{ $recoveryCode }}</p>
                <p>Si no solicitaste este cambio, no es necesario que hagas nada. Tu cuenta está segura.</p>
                <p>Gracias por ser parte de la comunidad de Alquimia.</p>
        </div>
    </section>
</body>
</html>
