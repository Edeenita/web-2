<?php
echo ('<link rel="stylesheet" href="style.css">');
echo('<div class="contenedor">');

    if(isset($_POST)){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'] ?? 'No especificado'; //evita el null en caso de que no se seleccione nada
        $region = $_POST['region'];
        $intereses = $_POST['intereses'] ?? [];  //evita el null en caso de que no se seleccione nada

        echo("<br>");
        echo("Nombre: " .$nombre);
        echo("<br>");
        echo("Apellido: " .$apellido);
        echo("<br>");
        echo("Edad: " .$edad);
        echo("<br>");
        echo("Genero: " . $genero);
        echo("<br>");
        echo("Region: " . $region);
        echo('<br>');
        echo("Intereses: ");
        foreach ($intereses as $interes) {
            echo "<li>" . $interes . "</li>";
        }
    }
echo('</div>');  
?>

<br>
<a href="ej8.php">VOLVER</a>