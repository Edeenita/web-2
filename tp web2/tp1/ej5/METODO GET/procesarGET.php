<<<<<<< HEAD
<?php
    
    //Verificación del lado del servidor con el metodo GET :]
    if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['edad'])){

        print_r($_GET);

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];

        echo("<br>");
        echo("Nombre: " .$nombre);
        echo("<br>");
        echo("Apellido: " .$apellido);
        echo("<br>");
        echo("Edad: " .$edad);
        echo("<br>");
    }  else {
            // Solo mostrar el mensaje si el formulario ha sido enviado y hay campos vacíos
            if (!empty($_GET['nombre']) || !empty($_GET['apellido']) || !empty($_GET['edad'])) {
                echo "<br><b>Todos los campos son obligatorios.</b>";
            }
    }
?>
<br>
=======
<?php
    
    //Verificación del lado del servidor con el metodo GET :]
    if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['edad'])){

        print_r($_GET);

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];

        echo("<br>");
        echo("Nombre: " .$nombre);
        echo("<br>");
        echo("Apellido: " .$apellido);
        echo("<br>");
        echo("Edad: " .$edad);
        echo("<br>");
    }  else {
            // Solo mostrar el mensaje si el formulario ha sido enviado y hay campos vacíos
            if (!empty($_GET['nombre']) || !empty($_GET['apellido']) || !empty($_GET['edad'])) {
                echo "<br><b>Todos los campos son obligatorios.</b>";
            }
    }
?>
<br>
>>>>>>> 330ce62fc0736657809b7e89bbe01acf4380f907
<a href="ej5GET.php">VOLVER</a>   