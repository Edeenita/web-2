<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 5 del tp1</h2>
    <p>Construir un programa que calcule el índice de masa corporal de una persona</p>
    <p> (IMC = peso [kg] / altura [m]2)</p>
    <p>e informe el estado en el que se encuentra esa persona en función del valor de IMC.</p>

    <table>
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Rango de IMC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bajo peso</td>
                <td>&lt; 18,50</td>
            </tr>
            <tr>
                <td>Normal</td>
                <td>18,5 - 24,99</td>
            </tr>
            <tr>
                <td>Sobrepeso</td>
                <td>&ge; 25,00</td>
            </tr>
            <tr>
                <td>Obesidad</td>
                <td>&ge; 30,00</td>
            </tr>
        </tbody>
    </table>

    <p class="note">Nota: El IMC por sí solo no es una herramienta de diagnóstico. Si tenés dudas, consultá a un médico.</p>

    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>

    <form method="GET" action="ej5.php">

        <label for="">Peso</label><input type="number" name="peso" >
        <label for="">Altura:</label><input type="numbrer" name="altura" >
        <input type="submit">

    </form>

    <?php
    
    if (!empty($_GET['peso']) && !empty($_GET['altura'])){

        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        

        if ($altura > 0 && $peso > 0){
            $alturacm = $altura / 100;
            $imc = $peso/(($alturacm*$alturacm));

            echo("<br>");
            echo("Tu IMC es: " .$imc);
            if($imc <=18.5){
                echo("<br> Su peso es: BAJO");
            } else if ($imc > 18.5 && $imc <= 24.99){
                echo("<br> Su peso es: NORMAL");
            } else if ($imc > 25 && $imc <= 29.99){
                echo("<br>  Su peso es: SOBREPESO");
            } else if ($imc >= 30){
                echo("<br> Su peso es: OBESIDAD");
            }
        } else {
            echo "<br><b>Introduce datos validos.</b>";
        }
    } else {
            // Solo mostrar el mensaje si el formulario ha sido enviado y hay campos vacíos
            if (!empty($_GET['peso']) || !empty($_GET['altura'])) {
                echo "<br><b>Todos los campos son obligatorios.</b>";
            }
        }
    ?>
</body>
</html>