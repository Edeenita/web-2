<!-- Escriba un script php que muestre una página html completa generada desde el servidor con un encabezado de primer nivel (h1) con el famoso 
“Hola mundo!”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolaMundo</title>
</head>
<body>
    <h1>Hola mundo de forma estática</a>
    
    <?php
        $mensaje= "Hola Mundo! de forma dinámica";
        echo "<h1>".$mensaje."</h1>";
    ?>
    
</body>
</html>