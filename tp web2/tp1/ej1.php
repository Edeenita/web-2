<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1 del tp1</h2>
    <p>1. Escriba un script php que muestre una página html completa,</p> 
    <p>generada desde el servidor con un encabezado de primer nivel (h1), </p>   
    <p>con el famoso “Hola mundo!”.</p>    
    
    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>
    <?php

        // Generar el primer encabezado sin utilizar variables:
        echo '<h1>¡Hola mundo!</h1>';

        // Generar el primer encabezado sin utilizar variables pero concatenado:
        echo ('<h1>' . "Hello world! ¡Concatenado!" . '</h1>' ); 

        // Utilizar variables para generar el segundo encabezado:
        $nombre = "<h1>". "Hello world! ¡Con variables!" . "</h1>";
        echo $nombre;
    ?>

</body>
</html>