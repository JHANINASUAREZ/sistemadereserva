<?php
session_start(); // Iniciar la sesión

// Verificar si $_SESSION['usuario_nombre'] está definido antes de acceder a él
if (isset($_SESSION['usuario_nombre'])) {
    $usuario_nombre = $_SESSION['usuario_nombre'];
} else {
    // Si $_SESSION['usuario_nombre'] no está definido, asignar un valor predeterminado
    $usuario_nombre = "Usuario";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Menu de navegacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css" />
    <link href="../../controlador_login.php" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="../../Img/logo-fcyt.png" class="navbar-brand me-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aulas</a>
                    </li>
                </ul>

                <li class="nav-item dropdown d-flex" style="padding-right: 70px;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $usuario_nombre; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../../controlador_cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-5">Bienvenido al Home del Administrador de Aulas</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>