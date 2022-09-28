<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>--Diario El Faro--</title>
  <!-- Archivo CSS  -->
  <link rel="stylesheet" href="../css/estilos.css" />
    <!-- Link a fuente de GOOGLE FONTS -->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  <body>
    <!-- Utilizando Display Grid con areas -->
    <div class="container_total">
      <div class="header">
      <div class="header">
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/pngegg.png" alt="" width="50" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Actualidad.php">Actualidad y Politica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="negocios2.php">Negocios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Deportes2.php">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Avisos.php">Avisos</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-primary" role="button" href="../Views/form_registro.php">Suscribirse</a>
                </div>
            </div>
        </div>
    </nav>
        <hr>
        <h1 class="text-center">DIARIO EL FARO</h1>
        <p class="text-center "><span id="fecha"></span></p>
        <hr>
      </div>
      
      <div class="div1">
        <div class="card-group">
          <div class="card m-2">
            <img src="../img/constru.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Obras y más obras: un planeta en (re)construcción.</h5>
              <p class="card-text">El G-20 dedica el 4,6% de su PIB a infraestructuras energéticas, de
                movilidad y telecomunicaciones.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
          </div>
          <div class="card m-2">
            <img src="../img/biden.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lo que Biden ha hecho, y lo que no ha hecho.</h5>
              <p class="card-text">l programa del presidente equivaldrá a alrededor de una tercera
                parte del 1% del PIB,Colosal no es.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
          </div>
          <div class="card m-2">
            <img src="../img/compras.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">La inflacion revoluciona el consumo en EE.UU</h5>
              <p class="card-text">Los gigantes de la distribución se ven inundados de existencias por
                la caída de ventas.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización hace 3 minutos</small>
            </div>
          </div>
        </div>
      </div>

      <div class="div3">
        
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas Buscado en Negocios</h5>
              <small>Hace 15 horas</small>
            </div>
            <p class="mb-1">SQM lanza un plan por US$ 1.500 millones en el Salar de Atacama</p>
            <small>Ingrese aqui a la seccion..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Ultimas Noticias de Negocios e Inversiones</h5>
              <small class="text-muted">Hace 3 días</small>
            </div>
            <p class="mb-1">Empresas ganan más de US$25 mil millones..</p>
            <small class="text-muted">Continua leyendo..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas comentando por los lectores.</h5>
              <small class="text-muted">Hace 6 días</small>
            </div>
            <p class="mb-1">Las primeras de la fila: 50 horas al raso para despedirse de la Reina</p>
            <small class="text-muted">Leer los comentarios..</small>
          </a>
        </div>
      </div>
      <div class="div4">
        <h2 class="text-center m-3">Destacado de la Semana</h2>
        <div class="card mb-1">
          <img id="img_titular" src="../img/tomkinbs.jpg" class="card-img-top" width="" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Kristine Tompkins anuncia que Patagonia creara fideicomiso para la lucha contra el cambio climatico.</h5>
            <p class="card-text fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quas omnis quasi voluptatum eligendi atque odio molestias natus! Deleniti ratione voluptates vel temporibus unde inventore incidunt natus quibusdam expedita earum?</p>
            <p class="card-text"><small class="text-muted">Última actualización hace 1 semana</small></p>
          </div>
        </div>
      </div>
      <div class="footer ">
        <footer class="py-3 my-5 bg-light ">
          <ul class="nav justify-content-around border-bottom pb-3 mb-3 ">
            <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-">Inicio</a></li>
            <li class="nav-item"><a href="Actualidad.php" class="nav-link px-2 text-">Actualidad</a></li>
            <li class="nav-item"><a href="negocios2.php" class="nav-link px-2 text-">Negocios</a></li>
            <li class="nav-item"><a href="Deportes2.php" class="nav-link px-2 text-">Deporte</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link px-2 text-">Contactanos</a></li>
          </ul>
          <p class="text-center">© 2022 AIEP, FM</p>
        </footer>
      </div>
    </div>

    <script src="../JS/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
