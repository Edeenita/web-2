<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>EJERCICIO 6 TP1</h2>
    <p>Una persona desea invertir dinero en un banco, el cual le otorga un % de interés 
    <p>mensual. Escribir un programa para simular la inversión que imprima cuál será la 
    <p>cantidad de dinero que esta persona tendrá mes a mes durante un año. Genere una 
    <p>tabla HTML para mostrar el resultado.</p>
    </p>    
    </p>    
    </p>
<!-- jajaja cerre mal todos los parrafos  -->
<p>--------------------------------------------------------------------------------------------------</p>
    <h3>LA TASA DE INTERES DE ESTE BANCO ES DEL 6% ANUAL</h3>
    <form method="get" action="ej6.php">
        <label for="">Monto ha invertir:</label>
        <input type="number" name="P">
        <input type="submit">
    </form>
    
    <?php 
        if(!empty($_GET['P'])){
            $p = $_GET['P']; // monto principal.
            if ($p > 0){
                $r = 0.06; // la tasa de interés anual (en decimal).
                $n = 12; // el número de períodos de capitalización por año (12 para mensual).
                $im = $r/$n; // interés mensual 
                for($i = 1; $i <= $n; $i++){
                    $ma = $p * pow((1 + $im), $i); //MONTO ACUMULADO ?> 
                    <table>
                        <thead>
                            <tr>
                                <th>Mes</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr><td>Mes <?php echo($i); ?> </td>
                        <td><?php echo number_format($ma, 2);  ?></td></tr>
                        </tbody>
                    </table>
            <?php }

            } else{
                echo "<br><b>Introduce datos validos.</b>";
            }
        } else{
            if(!empty($_GET['P'])){
                echo "<br><b>Todos los campos son obligatorios.</b>";;
            }
        }
        

    ?>


</body>
</html>