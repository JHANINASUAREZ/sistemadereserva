<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">

</head>

<body class="area">
  <ul class="circles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <section>
      <div class="row g-0">
        <div class="col-lg-7">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item img-1 min-vh-100 active">
                <img src="Img/Imagen1.jpg" class="d-block w-100 " />
                <div class="carousel-caption d-none d-md-block">
                  <h5 class=" front-weight-bold">Explora, elige y reserva tu aula ideal en un clic.</h5>
                </div>
              </div>

              <div class="carousel-item img-3 min-vh-100">
                <img src="Img/Imagen3.jpg" class="d-block w-100 " />
                <div class="carousel-caption d-none d-md-block">
                  <h5 class=" front-weight-bold">Docentes, encuentren su lugar ideal para compartir conocimientos. ¡Reserven su aula ahora!</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col-lg-5 d-flex flex-column align-items-center min-vh-100">
          <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
            <img src="Img/Fcyt.png" class="img-fluid">
          </div>
          <div class="px-lg-5 py-lg-4 p-4 w-100 mb-auto align-self-center">
            <h1 class="front-weight-bold mb-4 "> Reestablecer Contraseña</h1>


            <form action="recuperar_clave.php" method="POST" class="my-4">
              <div class="mb-4">
                <p>Introduce la direccion de correo que usaste en el registro.Te enviaremos
                  un correo donde puedas tener una nueva contraseña
                </p>
              </div>

              <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label  front-weight-bold">Correo electronico</label>
                <input name="correo_electronico " type="email" class="form-control bg-dark-x border-0" placeholder="Ingresa tu Correo electronico" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php if (isset($_POST["btnenviar"]) && empty($_POST["correo_electronico "])) : ?>
                  <div class="text-danger">
                    Correo electrónico es obligatorio</div>
                <?php endif; ?>
              </div>
              <div class="d-flex justify-content-between">
                <div class="flex-grow-1 me-2">
                  <input type="submit" class="btn btn-success w-100" value="Enviar">
                </div>
                <div class="flex-grow-1 ms-2">
                  <a href="index.php" class="btn btn-danger w-100">Cancelar</a>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>