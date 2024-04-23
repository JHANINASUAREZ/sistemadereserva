<?php

// Include database connection
// Check if the form has been submitted
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['facultad'])) {
    // Get the form data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $facultad = $_POST['facultad'];

    // Construct the SQL query to update the user information
    $sql = "UPDATE USUARIO SET NOMBRE='.'$nombre'.', APELLIDOS='.'$apellido'.' WHERE CI='.'$ci_new'.';";
    $conexion= new mysqli('localhost','root','','reservasumss');
    // Execute the query
    if (mysqli_query($conexion, $sql)) {
        echo "<p>Usuario actualizado con éxito.</p>";
        header("modificar_cuenta_usuario.php?ci=' . ['CI'] . '");
    } else {
        echo "<p>Error al actualizar el usuario: " . mysqli_error($conexion) . "</p>";
    }
}

?>
