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
                        <a class="nav-link active" href="./Actualidad.php">Actualidad y Politica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./negocios2.php">Negocios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./Deportes2.php">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./Avisos.php">Avisos</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-primary" role="button" href="../Views/form_registro.php">Suscribirse</a>
                </div>
            </div>
        </div>
    </nav>
        </nav>
        <hr>
        <h1 class="text-center">DIARIO EL FARO</h1>
        <p class="text-center"><span id="fecha"></span></p>
        <hr>
      </div>

      <div class="div1">
        <div class="card-group">
          <div class="card m-2">
            <img src="../img/djocovic.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Djokovic no competir?? en el US Open</h5>
              <p class="card-text">
                EE UU sigue sin permitir la entrada a los no vacunados y el
                serbio confirma que no viajar?? a Nueva York, por lo que se
                pierde su segundo grande esta temporada
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"
                >??ltima actualizaci??n hace 3 minutos</small
              >
            </div>
          </div>
          <div class="card m-2">
            <img src="../img/umtiti.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                El Barcelona cede a Umtiti al Lecce italiano
              </h5>
              <p class="card-text">
                El club azulgrana asume la totalidad de la ficha del defensa
                franc??s, que no cuenta para Xavi Hern??ndez.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"
                >??ltima actualizaci??n hace 3 minutos</small
              >
            </div>
          </div>
          <div class="card m-2">
            <img
              src="https://phantom-elmundo.unidadeditorial.es/ca43fc2d4e521bb7ce9bad3139b4edbf/resize/600/f/webp/assets/multimedia/imagenes/2022/09/14/16631895621547.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">
                Fede Valverde sale de la niebla para poner luz ante el Red Bull
                Leipzig
              </h5>
              <p class="card-text">
                EUn gol del uruguayo en el minuto 80 desbloquea al equipo de
                Ancelotti, dominado por el Leipzig en el Bernab??u en el primer
                tiempo del partido (2-0).
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"
                >??ltima actualizaci??n hace 3 minutos</small
              >
            </div>
          </div>
        </div>
      </div>

      <div class="div3">
        <div class="list-group">
          <a
            href="#"
            class="list-group-item list-group-item"
            aria-current="true"
          >
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas Buscado en Deportes</h5>
              <small>Hace 5 d??as</small>
            </div>
            <p class="mb-1">
              El equipo de Lopetegui desaprovecha sus ocasiones ante el
              Copenhague y sigue colista del Grupo G (0-0).
            </p>
            <small>Ingrese aqui a la seccion..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Ultimas Noticias de Deportes</h5>
              <small class="text-muted">Hace 3 d??as</small>
            </div>
            <p class="mb-1">
              Luis Enrique enciende el debate: Sergio Ramos, en la prelista de
              la selecci??n
            </p>
            <small class="text-muted">Continua leyendo..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas comentando por los lectores.</h5>
              <small class="text-muted">Hace 3 d??as</small>
            </div>
            <p class="mb-1">
              El apag??n de Raphinha y Demb??l??, el encierro de Kound?? en el
              lateral, la gesti??n de minutos en el centro del campo o el papel
              de los revulsivos condicionan la competitividad en Europa.
            </p>
            <small class="text-muted">Leer los comentarios..</small>
          </a>
        </div>
      </div>
      <div class="div4">
        <h2 class="text-center m-3">Destacado de la Semana</h2>
        <div class="card mb-1">
          <img
            id="img_titular"
            src="https://phantom-elmundo.unidadeditorial.es/50f277b4121a534a7a3fd386f0564e69/crop/7x7/1013x678/resize/600/f/webp/assets/multimedia/imagenes/2022/09/14/16631735569639.jpg"
            class="card-img-top"
            width=""
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
            Minuto de aplauso, himno nacional y trajes negros en honor a la Reina Isabel ll
            </h5>
            <p class="card-text">
                La Premier League confirma que rendir?? un homenaje a la monarca y que, adem??s, aplazar?? algunos partidos.
                Adem??s del minuto de aplauso, los acordes del himno nacional sonar??n en la previa de cada encuentro. Los entrenadores, por su parte, estar??n obligados a utilizar un traje color negro.
            </p>
            <p class="card-text">
              <small class="text-muted"
                >??ltima actualizaci??n hace 1 semana</small
              >
            </p>
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
          <p class="text-center">?? 2022 AIEP, FM</p>
        </footer>
      </div>
    </div>

    <script src="./JS/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
