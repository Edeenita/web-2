<?php
require_once 'fakebd.php';

// ATENCION: LA SIGUIENTE VALIDACION ME LA HIZO CHATGPT NO TENIA NI IDEA COMO HACERLA NO CONFIAR:
$developer = isset($_GET['developer']) ? $_GET['developer'] : null;
$encontrado = false;

foreach ($desarrolladores as $dev) {
    if (strtolower($dev->nombre) === strtolower($developer)) {
        $encontrado = true;
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Calculadora</a></li>
            <li><a href="pi.php">Pi</a></li>
            <li><a href="autores.php">Autores</a></li>
        </ul>
    </nav>

    <main>
        <?php if ($encontrado): //esta parte del if tambien viene de chatgpt ?> 
            <article>
                <header>
                    <h1><?php echo ($dev->nombre); ?></h1>
                </header>
                <figure>
                    <img src="<?php echo ($dev->imagen); ?>" alt="...">
                    <figcaption><?php echo ($dev->descripcion); ?></figcaption>
                </figure>
                <section>
                    <h2>Información</h2>
                    <p><?php echo ($dev->info); ?></p>
                </section>
                <section>
                    <h2>Biografía</h2>
                    <p><?php echo ($dev->biografia); ?></p>
                </section>
                <section>
                    <h2>Proyectos Destacados</h2>
                    <ul>
                        <?php foreach ($dev->proyectos as $proyecto): ?>
                            <li><?php echo ($proyecto); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section>
                    <h2>Habilidades</h2>
                    <ul>
                        <?php foreach ($dev->habilidades as $habilidad): ?>
                            <li><?php echo ($habilidad); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section>
                    <h2>Enlaces</h2>
                    <ul>
                        <?php foreach ($dev->enlaces as $nombre => $url): ?>
                            <li><a href="<?php echo ($url); ?>" target="_blank"><?php echo ($nombre); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </article>
        <?php else: // al igual que este else :D ?>
            <p>Desarrollador no encontrado.</p>
        <?php endif; ?>

        <p><a class="volver" href="autores.php">VOLVER</a></p>
    </main>

</body>
</html>


