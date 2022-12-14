
<?php require ('./Views/head.php') ?>
<body>
  <!-- Utilizando Display Grid con areas -->
  <div class="container_total">
    <!-- Utilizando componente NAVBAR DE BOOTSRAP -->
    <div class="header">
      <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="./img/pngegg.png" alt="" width="50" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./Views/Actualidad.php">Actualidad y Politica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./Views/negocios2.php">Negocios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./Views/Deportes2.php">Deportes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./Views/Avisos.php">Avisos</a>
              </li>
            </ul>
            <div class="d-flex">
              <a class="btn btn-primary" role="button" href="./Views/form_registro.php">Suscribirse</a>
            </div>
          </div>
        </div>
      </nav>
      <hr />
      <h1 class="text-center">DIARIO EL FARO</h1>
      <p class="text-center"><span id="fecha"></span></p>
      <hr />
    </div>
    <!-- uTILIZANDO COMPONENTES CARDS -->
    <div class="div1">
      <div class="card-group">
        <div class="card m-2">
          <img src="./img/carlos.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              Decenas de los empleados de Carlos III reciben un preaviso de
              despido en pleno duelo
            </h5>
            <p class="card-text">
              Unas cien personas trabajan en Clarence House, la residencia y
              sede de Carlos mientras fue pr??ncipe de Gales
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 3 minutos</small>
          </div>
        </div>
        <div class="card m-2">
          <img src="./img/putin_xian.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              Putin y Xi ponen a prueba su amistad ???sin l??mites??? en un
              encuentro en Samarcanda
            </h5>
            <p class="card-text">
              El presidente de China viaja a Uzbekist??n y Kazajist??n, su
              primera salida al extranjero desde el inicio de la pandemia
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 3 minutos</small>
          </div>
        </div>
        <div class="card m-2">
          <img src="./img/amazon.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              California demanda a Amazon por bloquear mejores precios de sus
              competidores
            </h5>
            <p class="card-text">
              EEl fiscal del Estado asegura que la compa????a obliga a
              comerciantes m??s peque??os a mantener precios ???artificialmente
              altos??? mediante acuerdos o amenazas
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 3 minutos</small>
          </div>
        </div>
      </div>
    </div>
    <div class="div2">
      <div class="card-group">
        <div class="card m-2">
          <img src="./img/ucrania.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              Ucrania busca a miles de ???hu??rfanos??? dispersos por la guerra
            </h5>
            <p class="card-text">
              La agencia de la ONU para la infancia, Unicef, trata de
              localizar a 26.000 ni??os que fueron devueltos del sistema de
              orfanatos a sus familias o tutores legales tras la invasi??n
              rusa.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 24h.</small>
          </div>
        </div>
        <div class="card m-2">
          <img src="./img/avion.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              Argentina libera a la mayor??a de los pasajeros del avi??n
              venezolano-iran??
            </h5>
            <p class="card-text">
              Todav??a hay siete pasajeros que contin??an detenidos en Buenos
              Aires a la espera de que avance el proceso judicial
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 1 hora</small>
          </div>
        </div>
        <div class="card m-2">
          <img src="https://phantom-elmundo.unidadeditorial.es/b8e2a7966c7f4b626000a1194ecc84ea/resize/600/f/webp/assets/multimedia/imagenes/2022/09/14/16631446038152.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              Leonardo DiCaprio rompe su regla de los 25 a??os en medio de
              rumores de romance con Gigi Hadid
            </h5>
            <p class="card-text">
              Seg??n las ??ltimas informaciones del entorno m??s cercano a la
              pareja, el actor y la modelo estar??an "empezando a salir".
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">??ltima actualizaci??n hace 15 minutos</small>
          </div>
        </div>
      </div>
    </div>
    <!-- UTILIZANDO CARDS GROUP -->
    <div class="div3">
      <div class="list-group">
        <a href="./Views/Actualidad.php" class="list-group-item list-group-item" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Lo mas Buscado en Actualidad</h5>
            <small>Hace 3 d??as</small>
          </div>
          <p class="mb-1">
            Argentina libera a la mayor??a de los pasajeros del avi??n
            venezolano-iran??
          </p>
          <small>Ingrese aqui a la seccion..</small>
        </a>
        <a href="Deportes2.html" class="list-group-item list-group-item">
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
            Las primeras de la fila: 50 horas al raso para despedirse de la
            Reina
          </p>
          <small class="text-muted">Leer los comentarios..</small>
        </a>
      </div>
    </div>
    <div class="div4">
      <h2 class="text-center m-3">Destacado de la Semana</h2>
      <div class="card mb-1">
        <img id="img_titular" src="https://phantom-elmundo.unidadeditorial.es/d7f33b9230e89a3165bc1820864e7610/crop/17x11/2000x1333/resize/600/f/webp/assets/multimedia/imagenes/2022/09/12/16629955084086.jpg" class="card-img-top" width="" alt="..." />
        <div class="card-body">
          <h5 class="card-title fs-3">
            Isabel y su d??scola hermana: una relaci??n marcada por los
            esc??ndalos de la princesa Margarita
          </h5>
          <p class="card-text fs-5">
            La princesa Margarita le dio innumerables quebraderos de cabeza a
            la reina, aunque estaban muy unidas desde ni??as. El primer gran
            disgusto fue cuando se enamor?? de Peter Townsend, padre de dos
            hijos y 16 a??os mayor que ella.
          </p>
          <p class="card-text">
            <small class="text-muted">??ltima actualizaci??n hace 1 semana</small>
          </p>
        </div>
      </div>
    </div>
    <div class="footer ">
      <footer class="py-3 my-5 bg-light ">
        <ul class="nav justify-content-around border-bottom pb-3 mb-3 ">
          <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-">Inicio</a></li>
          <li class="nav-item"><a href="./Views/Actualidad.php" class="nav-link px-2 text-">Actualidad</a></li>
          <li class="nav-item"><a href="./Views/negocios2.php" class="nav-link px-2 text-">Negocios</a></li>
          <li class="nav-item"><a href="./Views/Deportes2.php" class="nav-link px-2 text-">Deporte</a></li>
          <li class="nav-item"><a href="./Views/contacto.php" class="nav-link px-2 text-">Contactanos</a></li>
        </ul>
        <p class="text-center">?? 2022 AIEP, FM</p>
      </footer>
    </div>
  </div>

  <script src="./JS/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>