<?php 

    function sumar($valor1, $valor2){
        $resultado = $valor1 + $valor2;
        return $resultado;
    }
    function restar($valor1, $valor2){
        $resultado = $valor1 - $valor2;
        return $resultado;
    }
    function dividir($valor1, $valor2){
        if($valor2 != 0){ //verificar que sea no sea 0 para poder dividir
            $resultado = $valor1 / $valor2;
            
        } else{
            $resultado = "FATAL ERROR 💀";
        }
        return $resultado;
    }
    function multiplicar($valor1, $valor2){
        $resultado = $valor1 * $valor2;
        return $resultado;
    }

    
    