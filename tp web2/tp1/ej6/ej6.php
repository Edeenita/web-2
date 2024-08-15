<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1 del tp1</h2>
    <p>Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. </p>
    <p>Modifique el ejercicio para que el límite de la tabla sea ingresado por un usuario.</p>

    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>


    <form method="GET" action="ej6.php">
        <label for="">Tamaño de la tabla: </label><input type="text" name="maxveces">
        <label for="">Cantidad de veces a multiplicar: </label><input type="text" name="cant">
        <input type="submit">
    </form>

    <?php
    //funcionalidad de la tabla ✅
    // con el metodo get definir cuantas veces lo va a hacer ✅
    // modificar la tabla html

        if (!empty($_GET['maxveces']) && !empty($_GET['cant'])){
            $maxveces = $_GET['maxveces'];
            $cant = $_GET['cant'];
            if($maxveces > 0 && $cant > 0){
                echo "<table>";
                echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";
                for($i = 1; $i <= $maxveces; $i++){
                    echo "<tr><td class='resaltado'>Tabla del $i</td></tr>";
                    for($j = 1; $j <= $cant; $j++){
                        $multiplicacion = $i * $j;
                        if ($i == $j){
                            echo "<tr><td class='multigual'>$i x $j</td><td>$multiplicacion</td></tr>";
                        } else {
                            echo "<tr><td>$i x $j</td><td>$multiplicacion</td></tr>";
                        }

                    }
                }
                echo "</table>";
            } else {
                echo "<br><b>Introduce datos validos, todos los numeros deben ser positivos.</b>";
            }
        } else{
                if(!empty($_GET['maxveces']) || !empty($_GET['cant'])){
                    echo "<br><b>Todos los campos son obligatorios.</b>";
                }
            }

    
    ?>
</body>
</html>