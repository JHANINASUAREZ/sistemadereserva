<?php 

function obtener_nombre($ci_new){
    $query = "SELECT * FROM usuarios WHERE CI = '$ci_new' ";
    $conexion= new mysqli('localhost','root','','reservasumss1');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $nombreUsuario = $row['NOMBRE'];
    return $nombreUsuario;
}

function obtener_apellido($ci_new){
    $query = "SELECT * FROM usuarios WHERE CI= '$ci_new'";
    $conexion= new mysqli('localhost','root','','reservasumss1');
$result = $conexion->query($query);

$row = $result->fetch_assoc();
$apellidoUsuario = $row['APELLIDOS'];
return $apellidoUsuario;
}

function obtener_correo($ci_new){
    $query = "SELECT * FROM usuarios WHERE CI = '$ci_new'";
    $conexion= new mysqli('localhost','root','','reservasumss1');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $correoUsuario = $row['correo'];
    return $correoUsuario;
}
?>