<?php 

function obtener_nombre($ci_new){
    $query = "SELECT * FROM USUARIO WHERE CI = '$ci_new' ";
    $conexion= new mysqli('localhost','root','','reservasumss');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $nombreUsuario = $row['NOMBRE'];
    return $nombreUsuario;
}

function obtener_apellido($ci_new){
    $query = "SELECT * FROM USUARIO WHERE CI= '$ci_new'";
    $conexion= new mysqli('localhost','root','','reservasumss');
$result = $conexion->query($query);

$row = $result->fetch_assoc();
$apellidoUsuario = $row['APELLIDOS'];
return $apellidoUsuario;
}

function obtener_correo($ci_new){
    $query = "SELECT * FROM USUARIO WHERE CI = '$ci_new'";
    $conexion= new mysqli('localhost','root','','reservasumss');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $correoUsuario = $row['CORREO'];
    return $correoUsuario;
}
?>