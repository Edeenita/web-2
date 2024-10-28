<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Datos Personales</title>
</head>
<body>
    <!-- El usuario envia los datos al servidor -->
    <form method="POST" action="index.php">
        <label>Nombre</label>
        <input type="text" name="nombre"/>
        <label>Apellido</label>
        <input type="text" name="apellido"/>
        <label>Edad</label>
        <input type="text" name="edad"/>
        <input type="submit"/>
    </form>
    <a href="index.php">volver</a>
    <!-- El programa recibe los datos y muestra la información por pantalla -->
    <?php
        if(!empty($_POST)){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $edad=$_POST['edad'];

            echo ('Nombre: '.$nombre);
            echo ('Apellido: '.$apellido);
            echo ('Edad: '.$edad);
        }

    ?>
</body>
</html>