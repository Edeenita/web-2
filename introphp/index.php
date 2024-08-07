<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA MUNDO!</h1>
    <p>Esto es php ]:</p>

    <?php 
        $nombre ="Hello world en variables! ";
        echo $nombre;

        $arrphpNombres = array("Megumin", "Aqua", "Lalatina");

        echo "<ul>";
        foreach($arrphpNombres as $nombre){
            echo "<li>" . $nombre . "</li>";
        }
        echo "<ul>"
    ?>
</body>
</html>