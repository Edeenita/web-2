<?php
/**
 * Esta pagina PHP muestra una noticia enviada por parametro GET desde la URL.
 * 
 * Utiliza el arreglo $noticias compartido simulando registros que saldrian de una Base de Datos.
 */

require_once './db_fake.php';

// utiliza el arreglo $_GET para tomar el parametro que viene desde la url (noticias.php?id=<int>)
// faltarìa agregar una verificación para controlar si existe la noticia

$idNoticia = $_GET['id'];
$noticia = $noticias[$idNoticia];

// fecha actual para el footer
$fecha = new DateTime();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TUDAI - Diario Digital</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">TUDAI Digital</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Noticias</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main class="container mt-5">
      <section class="noticia">
        <h1 class="mb-5"><?php echo $noticia->titulo ?></h1>
        <img class="noticia-image" src="<?php echo $noticia->imagen ?>" alt="...">
        <p class="lead mt-3"><?php echo $noticia->contenido ?></p>
      </section>
    </main>

    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
      <div class="align-items-center">
        <span class="text-muted"><?php echo $fecha->format('Y')?> TUDAI, UNICEN</span>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
