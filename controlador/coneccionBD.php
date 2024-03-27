<?php 
    $host = "localhost";//nombre del servidor 
    $bd = "Proyecto";//nombre de la base de datos
    $user = "postgres";//nombre del usuario
    $pass = "4568";//contrasenia de la base de datos
    $conn = pg_connect("host=$host  dbname=$bd  user=$user  password=$pass");//conecciona la base de datoscon los datos anteriormente mencionados

?>