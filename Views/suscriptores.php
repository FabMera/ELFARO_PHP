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
            <h1 class="text-center">DIARIO EL FARO</h1>
            <p class="text-center"><span id="fecha"></span></p>
        </div>

        <div class="div1">
            <h4 class="text-center">Estos son tus datos Registrados:</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Edad</th>
                    </tr>
                </thead>
                <tbody>
                    <td><?php echo htmlspecialchars($_POST['nombre']) ?></td>
                    <td><?php echo htmlspecialchars($_POST['apellido']) ?></td>
                    <td><?php echo htmlspecialchars($_POST['correo']) ?></td>
                    <td><?php echo htmlspecialchars($_POST['fecha']) ?></td>
                    <td><?php echo htmlspecialchars($_POST['pais']) ?></td>
                    <td><?php echo htmlspecialchars($_POST['edad']) ?></td>
                </tbody>
            </table>
        </div>
        <div class="footer ">
            <footer class="py-3 my-5 bg-light ">
                <ul class="nav justify-content-around border-bottom pb-3 mb-3 ">
                    <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-">Inicio</a></li>
                    <li class="nav-item"><a href="./Actualidad.php" class="nav-link px-2 text-">Actualidad</a></li>
                    <li class="nav-item"><a href="./negocios2.php" class="nav-link px-2 text-">Negocios</a></li>
                    <li class="nav-item"><a href="./Deportes2.php" class="nav-link px-2 text-">Deporte</a></li>
                    <li class="nav-item"><a href="./contacto.php" class="nav-link px-2 text-">Contactanos</a></li>
                </ul>
                <p class="text-center">© 2022 AIEP, FM</p>
            </footer>
        </div>
    </div>
    <script src="./JS/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>