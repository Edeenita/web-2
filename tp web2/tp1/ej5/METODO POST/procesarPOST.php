<?php
    //Verificación del lado del cliente con el metodo POST :]
    if(!empty($_POST)){

        print_r($_POST);

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        echo("<br>");
        echo("Nombre: " .$nombre);
        echo("<br>");
        echo("Apellido: " .$apellido);
        echo("<br>");
        echo("Edad: " .$edad);
        echo("<br>");
    }  
?>

<a href="ej5POST.php">VOLVER</a>