<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ambiente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="registrar_ambiente.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card registrar_ambiente text-white"> 
            <div class="card-header">
                <h3>Registrar Ambiente</h3>
            </div>
            <div class="card-body">
                <form action="guardar_ambiente.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre del Ambiente</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="capacidad">Capacidad Máxima</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad" required>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                        </div>
                    <div class="form-group">
                        <label for="periodo">Periodo de Examen</label>
                        <select class="form-control" id="periodo" name="periodo" required>
                            <option value="primer parcial">Primer Parcial</option>
                            <option value="segundo parcial">Segundo Parcial</option>
                            <option value="tercer parcial">Examen final</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fechaInicio">Fecha de inicio</label>
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
                    </div>
                    <div class="form-group">
                        <label for="fechaFin">Fecha de fin</label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin" required>
                    </div>
                    <div class="form-group">
                        <label for="horario">Horario Disponible</label>
                        <select class="form-control" id="horario" name="horario" required>
                            <option value="06:45">06:45</option>
                            <option value="08:15">08:15</option>
                            <option value="09:45">09:45</option>
                            <option value="11:15">11:15</option>
                            <option value="12:45">12:45</option>
                            <option value="14:15">14:15</option>
                            <option value="15:45">15:45</option>
                            <option value="17:15">17:15</option>
                            <option value="18:45">18:45</option>
                            <option value="20:15">20:15</option>

                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="imagen">Seleccionar Imagen</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>