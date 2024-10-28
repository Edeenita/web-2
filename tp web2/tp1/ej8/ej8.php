<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Ejercicio 8 TP1</h1>
        <p>Modifique el ejercicio 5 para agregar elementos avanzados al formulario. Investigue Cómo se envían y reciben este tipo de datos: </p>
        <ul>
            <li>Género (radiobutton - una sola opción)</li>
            <li>País (select - una sola opción) </li>
            <li>Intereses: (checkbox - selección múltiple) Investigue el uso de array en los inputs.</li>
        </ul>
            
        <!-- Separación del ejercicio con la consigna! -->
        <form method="POST" action="procesar.php">
            <label for="">Nombre:</label><input type="text" name="nombre">
            <br>
            <label for="">Apellido:</label><input type="text" name="apellido">
            <br>
            <label for="">Edad:</label><input type="number" name="edad">
            <br>
            <label for="">Géreno</label>
                    <label><input type="radio" name="genero" value="Masculino">Masculino</label>
                    <label><input type="radio" name="genero" value="Femenino">Femenino</label>
                    <label><input type="radio" name="genero" value="No-Binario">No Binario</label>
                    <label><input type="radio" name="genero" value="Otro">Otro</label>
            <br>
            <label for="">Region</label>
                <select name="region">
                    <option value="Capital-Federal">Capital Federal</option>
                    <option value="Amba">AMBA</option>
                    <option value="Interor">Interior de la Provincia</option>
                    <option value="Centro">Centro de la provincia</option>
                </select>
            <br>
            <label>Intereses:</label>
                    <label><input type="checkbox" name="intereses[]" value="java">Java</label>
                    <label><input type="checkbox" name="intereses[]" value="js">JavaScript</label>
                    <label><input type="checkbox" name="intereses[]" value="php">PHP</label>
                    <label><input type="checkbox" name="intereses[]" value="sql">SQL</label>
                <br>
            <input type="submit">
        </form>

    <a href="ej8.php">REINICIAR</a>
</body>
</html>