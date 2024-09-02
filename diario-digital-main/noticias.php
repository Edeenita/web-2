<?php
require_once "db_fake.php";

function showNoticias(){
    require_once "templates/header.php";
    ?>
    <!-- main section -->
    <main class="container mt-5">
      <section class="noticias">

        <!-- noticias -->
        <?php 
        $noticias = getNoticias();
        foreach($noticias as $index => $noticia) : 
        ?>
        <div class="card">
          <img src="<?php echo $noticia->imagen ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo "$noticia->titulo" ?></h5>
            <p class="card-text"><?php echo $noticia->contenido ?></p>
            <a href="noticia/<?php echo $index ?>" class="btn btn-outline-primary">Leer más</a>
          </div>
        </div>
        <?php endforeach ?>

      </section>
    </main>
    <?php
    require_once "templates/footer.php";
}

function showNoticiaById($id){
    require_once "templates/header.php";
    // utiliza el arreglo $_GET para tomar el parametro que viene desde la url (noticias.php?id=<int>)
    // faltarìa agregar una verificación para controlar si existe la noticia
    $noticia = getNoticiaById($id);
    ?>
    <main class="container mt-5">
    <section class="noticia">
      <h1 class="mb-5"><?php echo $noticia->titulo ?></h1>
      <img class="noticia-image" src="<?php echo $noticia->imagen ?>" alt="...">
      <p class="lead mt-3"><?php echo $noticia->contenido ?></p>
    </section>
  </main>
  <?php
    require_once "templates/footer.php";
}