<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        
    <nav>
        <ul>
            <li><a href="index.html">Calculadora</a></li>
            <li><a href="pi.php">Pi</a></li>
            <li><a href="autores.php">Autores</a> </li>
        </ul>
    </nav>

    <main>
        <h1>π</h1>
        <p>Acceder a una sección <strong>número pi:</strong> esta sección debe mostrar mostrar una descripción de lo que representa este número y su valor. Investigue diferentes formas de obtener este valor en PHP.</p>
        <div>
            <p>El número pi es una constante matemática que representa la relación entre la circunferencia de un círculo y su diámetro. Es un número irracional, lo que significa que no puede ser expresado como una fracción exacta y sus decimales continúan infinitamente sin repetirse en un patrón.</p>
            
            <p>En PHP, podemos obtener el valor de pi de las siguientes formas:</p>

            <ul>
                <li>
                    <strong>Usando la función pi():</strong> <br>
                    <?php echo 'Valor de PI: ' . pi(); ?>
                </li>
                <li>
                    <strong>Usando la función M_PI: </strong> <br>
                    <?php echo 'Valor de PI: ' .  M_PI; ?>
                </li>
                <li>
                    <strong>Calculando una aproximación con la funcion (4 * atan(1)) </strong> <br>
                    <?php echo 'Valor de PI: ' . (4 * atan(1)); ?>
                </li>
            </ul>
        </div>

        <div>
            <h3>Valores devuelvos: </h3>
            <p>El valor de pi como float.</p>
            <p> M_PI produce el mismo resultado que pi().</p>
        </div>

        <div>
            <h3>Otras constantes relacionadas con pi: </h3>
            <ul>
                <li>
                    <strong>π/2 (M_PI_2):</strong>
                    <?php echo M_PI_2; ?>
                </li>
                <li>
                    <strong>π/4 (M_PI_4):</strong>
                    <?php echo M_PI_4; ?>
                </li>
                <li>
                    <strong>1/π (M_1_PI): </strong>
                    <?php echo M_1_PI; ?>
                </li>
                <li>
                    <strong>2/π (M_2_PI): </strong>
                    <?php echo M_2_PI; ?>
                </li>
                <li>
                    <strong>raiz(π) (M_SQRTPI): </strong>
                    <?php echo M_SQRTPI; ?>
                </li>
                <li>
                    <strong>2/raiz(π) (M_2_SQRTPI): </strong>
                    <?php echo M_2_SQRTPI; ?>
                </li>
            </ul>
        </div>
    </main>

</body>
</html>