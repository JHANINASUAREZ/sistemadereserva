<?php
require_once '../../config/validacion_session.php';
require_once '../../config/conexion.php';

$correo = $_SESSION['user'];

$query = "SELECT nombre FROM usuarios WHERE correo = '$correo'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();
$nombreUsuario = $row['nombre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registrar_ambiente.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="registrar_ambientes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* Estilo para el contenedor de los botones */
        .form-botones {
            width: 10%; /* Ancho deseado del contenedor */
            margin: auto; /* Centrar el contenedor */
        }

        /* Estilo para los botones */
        .form-botones button {
            width: 125%; /* Los botones ocuparán todo el ancho del contenedor */
        }
    </style>
</head>

<body>

    <header class="headerHU">
        <div class="header-content">
            <div class="header-logo" style="margin-right: 20px;">
                <img src="../../Img/logoFCyT.jpeg" alt="Logo" width="180" height="65">
            </div>
            <div class="vertical-line" style="border-left: 1px solid white; height: 40px; margin-left: 20px;"></div>
            <span class="header-title"
                style="font-family: 'Courgette', cursive; color: white; margin-left: 60px;margin-right:100px;">SISTEMA
                DE RESERVA DE AULAS DE FCyT</span>
            <div class="vertical-line" style="border-left: 1px solid white; height: 40px; margin-left: 60px;"></div>
            <div class="header-links" style="display: flex; align-items: center;">
                <i class="bi bi-bell-fill" style="margin-left: 40px;"></i>
                <i class="bi bi-person-circle" style="margin-left: 50px;"></i>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color: white;margin-left:50px;">
                    <?php echo $nombreUsuario; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../config/controlador_cerrar_sesion.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-menu"></i>
                </button>
            </div>
            <ul class="ul sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="text-decoration: none;">
                        <i class="bi bi-house-door-fill fs-4"></i>
                        <span>INICIO</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#RegistrarA" aria-expanded="false" aria-controls="Registrar_ambiente"
                        style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/plus-2-math.png"
                            alt="plus-2-math" style="filter: invert(100%);margin-right: 10px;" />
                        <span>REGISTRO AMBIENTES</span>
                    </a>
                    <ul id="RegistrarA" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                style="text-decoration: none;">REGISTRA AMBIENTE</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="listaDeAmbientesRegistrados.php" class="sidebar-link"
                                style="text-decoration: none;">LISTA DE AMBIENTES REGISTRADOS</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="./registrar_usuario.php" class="sidebar-link" style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/add-user-male.png"
                            alt="useregistro" style="filter: invert(100%);margin-right: 10px;" />
                        <span>REGISTRAR USUARIO</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#Reserva" aria-expanded="false" aria-controls="Reserva"
                        style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/reservation-2.png"
                            alt="reservation-2" style="filter: invert(100%);margin-right: 10px;" />
                        <span>RESERVAS</span>
                    </a>
                    <ul id="Reserva" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" style="text-decoration: none;">AÑADIR</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" style="text-decoration: none;">ELIMINAR</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" style="text-decoration: none;">MODIFICAR</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/classroom.png"
                            alt="classroom" style="filter: invert(100%);margin-right: 10px;" />
                        <span>AULAS DISPONIBLES</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/calendar--v1.png"
                            alt="CALENDAR" style="filter: invert(100%);margin-right: 10px;" />
                        <span>CALENDARIO</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="modificar_usuario.php" class="sidebar-link" style="text-decoration: none;">
                        <img width="25" height="25" src="https://img.icons8.com/fluency-systems-filled/48/edit-user.png"
                            alt="USERMODIFICAR" style="filter: invert(100%);margin-right: 10px;" />
                        <span>MODIFICAR CUENTA DE USUARIO</span>
                    </a>
                </li>
            </ul>
        </aside>

        <head>

            <title>Registrar Ambiente</title>

            <link rel="stylesheet" href="registrar_ambiente.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        </head>

        <!--
    NUEVO FORMULARIO
-->
    <section class="formulario-resgistro-ambiente">
        <form action="guardar_ambiente.php" name="" method="post">
           
            <h2>Registar Ambiente</h2>
            <div class="campos-entrada">
                <div class="form-input">
                    <label for="nombre">Nombre del Ambiente</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="10" required>
                </div>

                <div class="form-input">
                    <label for="capacidad">Capacidad Máxima</label>
                    <input type="number" class="form-control" id="capacidad" name="capacidad" min="0" max="200" required>
                </div>

                <div class="form-input">
                    <label for="ubicacion">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                </div>

                <div class="piso-periodo">
                    <div class="form-input">
                        <label for="piso">Piso</label>
                        <select class="form-control" id="piso" name="piso" required>
                            <option value="1">1er Piso</option>
                            <option value="2">2do Piso</option>
                            <option value="3">3er Piso</option>
                            <!-- Agrega más opciones si es necesario -->
                        </select>
                    </div>

                    <div class="form-input">
                        <label for="periodo">Periodo de Examen</label>
                        <select class="form-control" id="periodo" name="periodo" required>
                            <option value="primer parcial">Primer Parcial</option>
                            <option value="segundo parcial">Segundo Parcial</option>
                            <option value="tercer parcial">Examen final</option>
                        </select>
                    </div>
                </div>

                <div class="fecha">
                    <div class="form-input">
                        <label for="fechaInicio">Fecha de inicio</label>
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
                    </div>

                    <div class="form-input">
                        <label for="fechaFin">Fecha de fin</label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin" required>
                    </div>
                </div>
                    
                </div>               
                    <label for="horarios">Horarios Disponibles</label>
                
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoModalHorarios">Seleccionar Horarios</button>
                </div>     
                    <div class="form-imagen">
                    <label for="imagen">Seleccionar Imagen </label>
                    <input type="file" class="form-control-file" name="imgAmbiente">
                </div>
            
                <div class="form-botones">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" onclick="window.location.href='./HomeA.php'">Cancelar</button>
                </div>
            
                

<!--
    FIN NUEVO FORMULARIO
-->
    </div>  
                    
                   <!-- Nuevo modal -->
            <div class="modal fade" id="nuevoModalHorarios" tabindex="-1" role="dialog" aria-labelledby="nuevoModalHorariosLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalHorariosLabel">Seleccionar Horarios Disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="formHorarios">
            <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario1" name="horarios[]" value="06:45">
                                                    <label class="form-check-label" for="horario1">06:45</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario2" name="horarios[]" value="08:15">
                                                    <label class="form-check-label" for="horario2">08:15</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario3" name="horarios[]" value="09:45">
                                                    <label class="form-check-label" for="horario3">09:45</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario4" name="horarios[]" value="11:15">
                                                    <label class="form-check-label" for="horario4">11:15</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario5" name="horarios[]" value="12:45">
                                                    <label class="form-check-label" for="horario5">12:45</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario6" name="horarios[]" value="14:15">
                                                    <label class="form-check-label" for="horario6">14:15</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario7" name="horarios[]" value="15:45">
                                                    <label class="form-check-label" for="horario7">15:45</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario8" name="horarios[]" value="17:15">
                                                    <label class="form-check-label" for="horario8">17:15</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario9" name="horarios[]" value="18:45">
                                                    <label class="form-check-label" for="horario9">18:45</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="horario10" name="horarios[]" value="20:15">
                                                    <label class="form-check-label" for="horario10">20:15</label>
                                                </div>

                                                <!-- Agrega más opciones de horarios aquí -->
                                            </form>
                                            
                                        </div>
                                        
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" id="guardarHorarios">Guardar Horarios</button>
                                        </div>
                                    </div>
                                </div>
                           </div>
                
                
</form>
    <!-- Script JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Función para guardar el registro de ambiente
        function guardarRegistroAmbiente() {
            // Aquí va tu lógica para guardar el registro del ambiente
            // Supongamos que la operación se completó con éxito

            // Llamar a la función mostrarVentanaEmergente con el mensaje adecuado
            var mensaje = "El registro del ambiente se ha guardado correctamente.";
            mostrarVentanaEmergente(mensaje);
        }

        // Función para mostrar la ventana emergente con SweetAlert2
        function mostrarVentanaEmergente(mensaje) {
            Swal.fire({
                title: "¡Buen trabajo!",
                text: mensaje,
                icon: "success",
                confirmButtonText: "Aceptar"
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            // Handler para el botón "Guardar Horarios" dentro del modal
            $("#guardarHorarios").click(function () {
                // Obtener los horarios seleccionados del formulario dentro del modal
                var horariosSeleccionados = $("#formHorarios input:checked").map(function () {
                    return $(this).val();
                }).get();

                // Aquí puedes enviar los horarios seleccionados a través de AJAX o realizar cualquier otra acción que necesites
                console.log(horariosSeleccionados);

                // Cerrar el modal
                $("#modalHorarios").modal("hide");
                var mensaje = "¡Horarios guardados exitosamente!";
                mostrarVentanaEmergente(mensaje);
            });
        });

        function mostrarVentanaEmergente(mensaje) {
            Swal.fire({
                title: "¡Buen trabajo!",
                text: mensaje,
                icon: "success",
                confirmButtonText: "Aceptar"
            });
        }
            
              </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Coloca aquí tu código JavaScript
    </script>
    <script>
    // Función para verificar si una fecha es domingo
function esDomingo(fecha) {
    return fecha.getDay() === 0; // El día 0 representa domingo
}

// Función para verificar si una fecha es un feriado (puedes definir tus propios feriados)
function esFeriado(fecha) {
    // Aquí puedes agregar la lógica para verificar si una fecha es un feriado
    // Por ejemplo:
    // return fecha.getDate() === 25 && fecha.getMonth() === 11; // 25 de diciembre
    // Esta línea devuelve true si la fecha es el 25 de diciembre, por ejemplo
    return false; // Por defecto, no se considera ningún día como feriado
}

// Obtener la fecha actual
var fechaActual = new Date();

// Función para obtener la próxima fecha hábil (excluyendo domingos, feriados y días anteriores)
function obtenerProximaFechaHabil(fecha) {
    // Incrementar la fecha hasta encontrar un día hábil
    while (esDomingo(fecha) || esFeriado(fecha) || fecha < fechaActual) {
        fecha.setDate(fecha.getDate() + 1);
    }
    return fecha;
}

// Obtener la fecha actual en formato yyyy-mm-dd
var today = obtenerProximaFechaHabil(new Date()).toISOString().split('T')[0];

// Establecer la fecha mínima para los campos de fecha de inicio y fecha de fin
document.getElementById("fechaInicio").setAttribute('min', today);
document.getElementById("fechaFin").setAttribute('min', today);

// Función para validar que la fecha de inicio sea menor o igual a la fecha de fin
function validarFechas() {
    var fechaInicio = new Date(document.getElementById("fechaInicio").value);
    var fechaFin = new Date(document.getElementById("fechaFin").value);

    if (fechaInicio > fechaFin) {
        alert("La fecha de inicio no puede ser posterior a la fecha de fin.");
        document.getElementById("fechaInicio").value = today;
        document.getElementById("fechaFin").value = today;
    }
}
    
</script>


</body>

</html>