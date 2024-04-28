<?php
require_once '../../config/conexion.php';

if(isset($_FILES["imgAmbiente"]) && $_FILES["imgAmbiente"]["error"] === 0){
  
    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $ubicacion = $_POST['ubicacion'];
    $piso = $_POST['piso'];
    $periodo = $_POST['periodo'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    
    // Concatenar los horarios seleccionados en un solo string
    $horarios = implode(',', $_POST['horario']);

    $imgAmbiente = $_FILES["imgAmbiente"];
    $nameImagen = $imgAmbiente["name"];
    $tmpImagen = $imgAmbiente["tmp_name"];

    move_uploaded_file($tmpImagen, "../../Img/Ambientes/" . $nameImagen);

    mysqli_query($conexion,"INSERT INTO ambientes (nombre, capacidad, ubicacion,piso, periodo, fechaInicio, fechaFin, horarios, imgAmbiente) 
        VALUES ('$nombre', '$capacidad', '$ubicacion', '$piso', '$periodo', '$fechaInicio', '$fechaFin', '$horarios', '$nameImagen')");

    mysqli_close($conexion);

    header("location:RegistrodeAmbiente.php");
} 
?>
