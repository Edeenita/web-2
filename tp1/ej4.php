<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 4 del tp1</h2>
    <p>Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el tamaño de la lista generada. </p>

    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>
    <?php 
        //array indexados
        $arrphpNombresKonosuba = array("Megumin", "Aqua", "Lalatina", "Chomuske", "YunYun", "Komekko");

        //impresión del arreglo en una lista HTML
        echo "<ul>";
        foreach($arrphpNombresKonosuba as $nombre){
            echo "<li>" . $nombre . "</li>";
        }
        echo "</ul>";

        // array asociativo
        $arrphpPersonajesKonosubaDescripcion = array(
            "Megumin" => "Maga explosiva",
            "Aqua" => "Diosa del agua",
            "Lalatina" => "Paladin masoquista",
            "Chomuske" => "Gatete",
            "YunYun" => "Rival de megumin",
            "Komekko" => "Hermana pequeña de Megumin"
        );
        
        var_dump($arrphpPersonajesKonosubaDescripcion);

        // Generación de la lista HTML
        echo "<ul>";
        foreach($arrphpPersonajesKonosubaDescripcion as $nombre => $descripcion){
            echo "<li>" . $nombre . " : " . $descripcion . "</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>