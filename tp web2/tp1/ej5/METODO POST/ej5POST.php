<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 5 TP1</h1>
        <p>Escribir un programa que mediante un formulario html un usuario pueda ingresar su </p>
        <p>nombre, apellido y edad para que sean enviados al servidor. El programa, debe recibir</p>
        <p>los datos y mostrar la información por pantalla. </p>

        <!-- Separación del ejercicio con la consigna! -->
        <p>---------------------------------------------------------------------------------------------------------------</p>

        <!--UTILIZANDO EL METODO POST -->
        <form method="POST" action="procesarPOST.php">

            <label for="">Nombre:</label><input type="text" name="nombre" required>
            <label for="">Apellido:</label><input type="text" name="apellido" required>
            <label for="">Edad:</label><input type="number" name="edad" required>
            <input type="submit">

        </form>
            
        

    <p>-------------------------------------------------------------------------------</p>
    <a href="ej5POST.php">REINICIAR</a>


</body>
</html>