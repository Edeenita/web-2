<?php

require_once('operaciones.php');
echo '<link rel="stylesheet" href="css/style.css">';

echo '<nav>
        <ul>
            <li><a href="index.html">Calculadora</a></li>
            <li><a href="pi.php">Pi</a></li>
            <li><a href="autores.php">Autores</a> </li>
        </ul>
    </nav>';

echo '<div class="resultados">';


if (!empty($_GET['operacion']) && !empty($_GET['valor_1']) && !empty($_GET['valor_2'])) { // Verificar que se hayan completado todos los campos
    $valor_1 = $_GET['valor_1'];
    $valor_2 = $_GET['valor_2'];
    $operacion = $_GET['operacion'];

    if (is_numeric($valor_1) && is_numeric($valor_2)) { // Verificar que los valores sean numéricos

        switch ($operacion) {

            case 'sumar':
                $resultado = sumar($valor_1, $valor_2);
                break;
            case 'restar':
                $resultado = restar($valor_1, $valor_2);
                break;
            case 'dividir':
                $resultado = dividir($valor_1, $valor_2);
                break;
            case 'multiplicar':
                $resultado = multiplicar($valor_1, $valor_2);
                break;
            default:
                $resultado = "FATAL ERROR 💀";
                echo '<div class="error">' . $resultado . '</div>';
                echo '</div>'; 
                exit;
        }
        echo '<div class="resultado">Resultado: ' . $resultado . '</div>';

    } else {
        echo '<div class="error">FATAL ERROR 💀</div>';
    }

} else {
    echo '<div class="error">Parámetros no definidos</div>';
}

echo '</div>'; 
echo '<a href="index.html" class="volver">VOLVER</a>';

