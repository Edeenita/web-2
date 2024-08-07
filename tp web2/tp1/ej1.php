<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1 del tp1</h2>
    <p>1. Escriba un script php que muestre una página html completa,</p> 
    <p>generada desde el servidor con un encabezado de primer nivel (h1), </p>   
    <p>con el famoso “Hola mundo!”.</p>    
    
    <!-- Separación del ejercicio con la consigna! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>
    <?php

        // Generar el primer encabezado sin utilizar variables:
        echo '<h1>¡Hola mundo!</h1>';

        // Generar el primer encabezado sin utilizar variables pero concatenado:
        echo ('<h1>' . "Hello world! ¡Concatenado!" . '</h1>' ); 

        // Utilizar variables para generar el segundo encabezado:
        $nombre = "<h1>". "Hello world! ¡Con variables!" . "</h1>";
        echo $nombre;
    ?>

    <!-- Separación del ejercicio con las preguntas! -->
    <p>---------------------------------------------------------------------------------------------------------------</p>
    <!-- Pregunta A -->
    <h3>A.¿Qué extensión debe tener la página?</h3>
        <p>La extensión del archivo debe ser .php para que el servidor web pueda procesar el código PHP</p>
        <p>y generar la página HTML de manera adecuada. Al guardar tu archivo con la extensión .php, el</p>
        <p>servidor ejecutará el código PHP y enviará el HTML resultante al navegador del usuario.</p>

    <!-- Pregunta B -->    
    <h3>B.Lo que acabas de hacer: ¿Es una página dinámica o una página estática? ¿Cuál es la diferencia?</h3>
        <p>Lo que acabamos de hacer es una página dinámica. La razón es que estamos utilizando PHP para</p>
        <p>generar contenido HTML. PHP es un lenguaje de programación del lado del servidor, lo que significa</p>
        <p>que el servidor procesa el código PHP y luego envía el HTML resultante al navegador del usuario.</p>
        <h4>Diferencia entre página estática y página dinámica:</h4>
            <ol>
                <h4>Página Estática</h4>
                <li>Contenido Fijo: El contenido de una página estática es fijo y no cambia a menos que el código HTML sea modificado manualmente.</li>
                <li>Lenguajes Utilizados: Generalmente se utilizan HTML, CSS y JavaScript. No hay procesamiento del lado del servidor.</li>
                <li>Interacción: Poca o ninguna interacción con el servidor después de que la página ha sido cargada. Todo el contenido está presente desde el principio.</li>
                <li>Velocidad de Carga: Generalmente más rápidas de cargar porque no requieren procesamiento del lado del servidor.</li>
            </ol>
            <ol>
                <h4>Página Dinámica</h4>
                <li>Contenido Dinámico: El contenido puede cambiar según diferentes factores como entradas del usuario, datos de una base de datos, tiempo, etc.</li>
                <li>Lenguajes Utilizados: Utilizan lenguajes del lado del servidor como PHP, Python, Ruby, ASP.NET, etc., además de HTML, CSS y JavaScript.</li>
                <li>Interacción: Interactúan con el servidor para procesar solicitudes y devolver contenido actualizado.</li>
                <li>Velocidad de Carga: Pueden ser más lentas de cargar debido al procesamiento necesario del lado del servidor.</li>
            </ol>

    <!-- Pregunta C -->    
    <h3>¿Por qué es necesario tener un servidor web para realizar esto?</h3>
        <p>Para ejecutar scripts PHP y generar páginas dinámicas, es necesario tener un servidor web, ya que </p>
        <p>PHP es un lenguaje del lado del servidor que no puede ser interpretado directamente por los </p>
        <p>navegadores. Al usar XAMPP, que incluye Apache y PHP, el servidor web procesa el código PHP, </p>
        <p>genera el HTML resultante y lo envía al navegador. Esto permite acceder a recursos del servidor, </p>
        <p>gestionar bases de datos, asegurar el código fuente y crear contenido dinámico y personalizado para el usuario.</p>
</body>
</html>