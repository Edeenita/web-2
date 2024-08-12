<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 3 TP1</h1>
    <p>Escribir un programa que mediante un formulario html un usuario pueda ingresar su </p>
    <p>nombre, apellido y edad para que sean enviados al servidor. El programa, debe recibir</p>
    <p>los datos y mostrar la información por pantalla. </p>

    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>

<!--UTILIZANDO EL METODO POST -->
    <form method="POST" action="ej3_02.php">

        <label for="">Nombre:</label><input type="text" name="nombre" required>
        <label for="">Apellido:</label><input type="text" name="apellido" required>
        <label for="">Edad:</label><input type="number" name="edad" required>
        <input type="submit">

    </form>

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
<p>-------------------------------------------------------------------------------</p>
<!--UTILIZANDO EL METODO GET -->
<form method="GET" action="ej3_02.php">

        <label for="">Nombre:</label><input type="text" name="nombre" >
        <label for="">Apellido:</label><input type="text" name="apellido" >
        <label for="">Edad:</label><input type="number" name="edad" >
        <input type="submit">

    </form>

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

<p>-------------------------------------------------------------------------------</p>
<a href="ej3_02.php">REINICIAR</a>


</body>
</html>