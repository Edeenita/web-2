<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <h2>Ejercicio 4 del tp1</h2>
        <p>Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. </p>
        <p>Modifique el ejercicio para que el límite de la tabla sea ingresado por un usuario.</p>

        <!-- Separación del ejercicio con la consigna! -->
        <p>---------------------------------------------------------------------------------------------------------------</p>


        <form method="GET" action="procesar.php">
            <label for="">Tamaño de la tabla: </label><input type="text" name="maxveces">
            <input type="submit">
        </form>

        <br>

        <table>
        <tr><th>Multiplicador</th><th>Resultado</th></tr>

        <?php 
            for($i = 1; $i <= 20; $i++){
                echo "<tr><td class='resaltado'>Tabla del $i</td></tr>";
                for($j = 1; $j <= 20; $j++){
                    $multiplicacion = $i * $j;
                    if ($i == $j){
                        echo "<tr><td class='multigual'>$i x $j</td><td>$multiplicacion</td></tr>";
                    } else {
                        echo "<tr><td>$i x $j</td><td>$multiplicacion</td></tr>";
                    }
                }
            }
        ?>

        </table>
        

</body>
</html>