<?php
    function sumar($op1, $op2){
        $resultado=$op1 + $op2;
        return $resultado;
    }

    function restar($op1, $op2){
        $resultado=$op1 - $op2;
        return $resultado;
    }

    function multiplicar($op1, $op2){
        $resultado=$op1 * $op2;
        return $resultado;
    }

    function dividir($op1, $op2){
        if($op2 != 0){
            $resultado=$op1 / $op2;
        }
        return $resultado;
    }
?>