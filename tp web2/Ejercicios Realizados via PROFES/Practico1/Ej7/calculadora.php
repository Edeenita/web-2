<?php
    require_once('operaciones.php');//Me importa el archivo de operaciones, y así puedo acceder a sus funciones

    //Primera se realiza una validación mínima, para que en caso que los valores ingresados no sean numéricos, o que
    //el campo de operación esté vacio, te tire un mensaje de error.

    if(!is_numeric($_REQUEST['valor1']) || !is_numeric($_REQUEST['valor2']) || empty($_REQUEST['operacion'])){
        echo ('Error: Parámetros incorrectos');
        die (); //Es un alias de exit. Se usa para detener la ejecución del script si se detecta que hay un error en los parámetros que se están recibiendo. 
    }

    $operando1=$_REQUEST['valor1'];
    $operando2=$_REQUEST['valor2'];
    $operacion=$_REQUEST['operacion'];

    switch ($operacion) {
        case 'sumar':
            $resultado=sumar($operando1, $operando2);
            break;
        case 'restar':
            $resultado=restar($operando1, $operando2);
            break;
        case 'multiplicar':
            $resultado=multiplicar($operando1, $operando2);
            break;
        case 'dividir':
            $resultado=dividir($operando1, $operando2);
            break;
        default:
            echo ('Operación no definida');
            break;
    }

    echo ('El resultado es: '. $resultado);

?>