<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            if (!empty($_GET['maxveces'])){
                $maxveces = $_GET['maxveces'];
                
                if($maxveces > 0){
                    echo "<table>";
                    echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";
                    for($i = 1; $i <= $maxveces; $i++){
                        echo "<tr><td class='resaltado'>Tabla del $i</td></tr>";
                        for($j = 1; $j <= $maxveces; $j++){
                            $multiplicacion = $i * $j;
                            if ($i == $j){
                                echo "<tr><td class='multigual'>$i x $j</td><td>$multiplicacion</td></tr>";
                            } else {
                                echo "<tr><td>$i x $j</td><td>$multiplicacion</td></tr>";
                            }

                        }
                    }
                    echo "</table>";
                }else {
                    echo "<br><b>Introduce datos validos, todos los numeros deben ser positivos.</b>";
                }
            } else{
                    if(!empty($_GET['maxveces'])){
                        echo "<br><b>Todos los campos son obligatorios.</b>";
                    }
                }

    ?>
    <br>
    <a href="ej4.php">VOLVER</a>
</body>
</html>

>>>>>>> 330ce62fc0736657809b7e89bbe01acf4380f907
