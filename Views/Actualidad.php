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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
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
            <a class="navbar-brand" href="index.php">
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
        <hr />
        <h1 class="text-center">DIARIO EL FARO</h1>
        <p class="text-center"><span id="fecha"></span></p>
        <hr />
      </div>

      <div class="div1">
        <div class="card-group">
          <div class="card m-2">
            <img src="../img/carcel.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                Gobierno, Gendarmería y Ministerio Público se unen en estrategia
                para combatir el crimen organizado en las cárceles
              </h5>
              <p class="card-text">
                El Ejecutivo también presentó en el Senado un proyecto de ley
                para combatir la delincuencia organizada, que establece técnicas
                especiales para su investigación.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización ayer</small>
            </div>
          </div>
          <div class="card m-2">
            <img src="../img/Aton_328100-768x512.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                Pese a la resistencia en sectores oficialistas: Gobierno decide
                avanzar en el TPP-11
              </h5>
              <p class="card-text">
                La vocera de Gobierno Camila Vallejo afirmó que lo que se busca
                es el “resguardo de los intereses de nuestra patria”.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización hace 15 horas</small>
            </div>
          </div>
          <div class="card m-2">
            <img src="../img/Fiestas-Patrias-Viña-e1663171438463.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                Director del Trabajo llama a empleadores a buscar acuerdo para
                compensar jornada y otorgar sábado 17 como día libre
              </h5>
              <p class="card-text">
                Pablo Zenteno recordó que el feriado del 16 de septiembre no es
                irrenunciable, mientras que el 18 y 19 corresponde como día
                libre para todos los trabajadores, aunque con excepciones.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Última actualización hace 8 minutos</small>
            </div>
          </div>
        </div>
      </div>

      <div class="div3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas Buscado en Actualidad</h5>
              <small>Hace 3 días</small>
            </div>
            <p class="mb-1">
              Fuentes del Kremlin aseguran que limusina de Putin fue atacada en
              un posible “intento de asesinato”
            </p>
            <small>Ingrese aqui a la seccion..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Ultimas Noticias de Actualidad y Politica</h5>
              <small class="text-muted">Hace 1 dia</small>
            </div>
            <p class="mb-1">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere
              odio ea nulla natus non dolore dicta magni, iusto in cupiditate
              pariatur, eum quasi, accusamus quidem soluta et rerum voluptas
              optio?
            </p>
            <small class="text-muted">Continua leyendo..</small>
          </a>
          <a href="#" class="list-group-item list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lo mas comentando por los lectores.</h5>
              <small class="text-muted">Hace 4 días</small>
            </div>
            <p class="mb-1">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Officiis, esse.
            </p>
            <small class="text-muted">Leer los comentarios..</small>
          </a>
        </div>
      </div>
      <div class="div4">
        <h2 class="text-center m-3">Destacado de la Semana</h2>
        <div class="card mb-1">
          <img id="img_titular" src="../img/file_20220909144637.jpg" class="card-img-top" width="" alt="..." />
          <div class="card-body">
            <h5 class="card-title fs-3">
              Más allá del nuevo monarca británico: ¿Quién es quién en la
              familia real de Carlos III?
            </h5>
            <p class="card-text fs-4">
              Desde el príncipe William, futuro heredero de la corona, hasta
              Peter Phillips, el "polémico sobrino" del soberano. Estos son los
              miembros más destacados.
              <br />
              <span class="fs-5 text-muted">Fuente: Emol.com -
                https://www.emol.com/noticias/Tendencias/2022/09/12/1072484/integrantes-familia-real-britanica.html</span>
            </p>
            <p class="card-text">
              <small class="text-muted">Última actualización hace 1 semana</small>
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
          <p class="text-center">© 2022 AIEP, FM</p>
        </footer>
      </div>
    </div>

    <script src="../JS/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>