<!-- Modifique el ejercicio 2 para que el usuario mediante links y parámetros get pueda ir modificando el tamaño de la lista generada.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dinámica</title>
</head>
<body>
    <h1>Lista dinámica</a>
    
    <?php
       
         $arregloProductos=["Cartuchera", "Carpeta", "Cuaderno", "Lapicera"];

         // Obtener el tamaño deseado desde el parámetro GET, si existe: Si $_GET['tamano'] está definido, usa su valor convertido a entero;
         // de lo contrario, usa el número total de productos.
        $tamano = isset($_GET['tamano']) ? intval($_GET['tamano']) : count($arregloProductos);

        // Asegurarse de que el tamaño no exceda el número de productos disponibles. Por ejemplo, si el arreglo tiene 4 productos y el usuario
        // solicita mostrar 10 productos, esta línea ajustará el tamaño a 4 para evitar errores.
        $totalProductos = count($arregloProductos);//te calcula la cantidad de elementos q tiene el arreglo
        
        if ($tamano > $totalProductos) {
            $tamano = $totalProductos; 
        }
        
        // Generar la lista HTML
        echo "<ul>";
            for ($i = 0; $i < $tamano; $i++) {
                echo "<li>" . $arregloProductos[$i] . "</li>";
            }
        echo "</ul>";

        // Mostrar enlaces para cambiar el tamaño de la lista
        echo "<p>Modificar tamaño de la lista:</p>";
        echo "<a href='?tamano=1'>1</a> | ";
        echo "<a href='?tamano=2'>2</a> | ";
        echo "<a href='?tamano=3'>3</a> | ";
        echo "<a href='?tamano=4'>4</a>";
    ?>
    
</body>
</html>