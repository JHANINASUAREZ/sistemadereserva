<?php
 $host = "localhost";
 $user = "root";
 $password="";
 $db = "reservaumss";

 $conexion= new mysqli($host,$user,$password,$db);

if($conexion -> connect_errno){
    echo "fallo la conexion a la base" . $conexion -> connect_errno;
}
?>

