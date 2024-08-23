<!-- Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias entre arreglos 
asociativos e indexados (ver docu oficial) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Lista</a>
    
    <?php
        //Declaro un arreglo y lo guardo en variable arregloProductos
        
        //Ejemplo con arreglo indexado (indice)
            //Primer forma de declararlo
        //     $arregloProductos = array("Cartuchera", "Carpeta", "Cuaderno", "Lapicera");
        //     //Segunda forma de declararlo
            // $arregloProductos=["Cartuchera", "Carpeta", "Cuaderno", "Lapicera"];
        //Creo etiqueta <ul> para que me aparezca el arreglo en forma de lista, y recorro el mismo con un bucle para asignarle un 
        //item de lista a cada producto
            // echo "<ul>" ;
            //     foreach($arregloProductos as $producto){
            //         echo "<li>". $producto . "</li>";
            //     }
        
            // echo "</ul>";

        //Ejemplo con arreglo asociado(contiene clave valor)
                $arregloProductos=[
                    "Producto1"=> "Cartuchera",
                    "Producto2"=> "Carpeta",
                    "Producto3"=> "Cuaderno",
                    "Producto4"=> "Lapicera"
                ];

                echo "<ul>";
                foreach($arregloProductos as $producto => $valor){
                    echo "<li>". $valor . "</li>";
                }
        
                echo "</ul>";

    ?>
    
</body>
</html>