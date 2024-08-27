<!-- Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. Modifique
el ejercicio para que el límite de la tabla sea ingresado por un usuario. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</a>
    <form action="index.php" method="GET">
        <label>Ingrese el número a multiplicar</label>
        <input type="number" name="numero">

    </form>
    
    <?php
        if(isset($_GET['numero'])){
            $numero=$_GET['numero'];
        }else{
            $numero=20;
        }

        echo "<table>" ?>
            <tr></tr>

        <?php echo "</table>";

        for($i=0; $i<count($numero);$i++){
            for($j=0; $j<count($numero);$j++){
                if($i);
            }
        }
        
    ?>
    
</body>
</html>
