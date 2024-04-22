<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en localhost
$username = "root";
$password = "";
$database = "reservasumss1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$capacidad = $_POST['capacidad'];
$ubicacion = $_POST['ubicacion'];
$periodo = $_POST['periodo'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$horario = $_POST['horario'];

// Query SQL para insertar los datos en la tabla correspondiente
$sql = "INSERT INTO ambientes ( nombre, capacidad, ubicacion, periodo, fechaInicio, fechaFin, horario) 
        VALUES ('$nombre', '$capacidad', '$ubicacion', '$periodo', '$fechaInicio', '$fechaFin', '$horario')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
