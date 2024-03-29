<?php
session_start();
include 'conexion.php';

// Verificar si se han enviado datos del formulario
if (isset($_POST['btningresar'])) {
    // Verificar si el correo electrónico y la contraseña están vacíos
    if (empty($_POST['correo_electronico']) || empty($_POST['contrasena'])) {
        // Establecer un mensaje de error en una variable de sesión
        $_SESSION['error_message'] = "Correo electrónico y contraseña son obligatorios";
        // Redirigir de vuelta a index.php
        header("location: index.php");
        exit;
    }

    // Si los campos no están vacíos, proceder con la validación del inicio de sesión
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico' AND contrasena='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $usuario = mysqli_fetch_assoc($validar_login); // Obtener datos del usuario

        // Asignar el nombre de usuario a $_SESSION['usuario_nombre']
        $_SESSION['usuario_nombre'] = $usuario['Nombre_usuario'];

        // Verificar el rol del usuario y redirigir según corresponda
        if ($usuario['Rol'] == 'Administrador') {
            $_SESSION['usuario'] = $correo_electronico;
            header("location: pages/Administrador/HomeA.php");
            exit;
        } elseif ($usuario['Rol'] == 'Docente') {
            $_SESSION['usuario'] = $correo_electronico;
            header("location: pages/Usuario/HomeU.php");
            exit;
        } else {
            // Si el rol no es ni "administrador" ni "docente", puedes manejarlo de acuerdo a tus necesidades
            // Por ejemplo, redirigirlo a una página de error
            header("location: error.php");
            exit;
        }
    } else {
        // Establecer un mensaje de error en una variable de sesión
        $_SESSION['error_message'] = "Usuario no existe, por favor verifique los datos introducidos";
        // Redirigir de vuelta a index.php
        header("location: index.php");
        exit;
    }
} else {
    // Si no se han enviado datos del formulario, redirigir a la página de inicio de sesión
    header("location: index.php");
    exit;
}
