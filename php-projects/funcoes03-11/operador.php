<?php

function calculo($numero1, $operador, $numero2){
    if($operador == '+'){
    	$operador = $numero1 + $numero2;
    	echo $operador;
    }
    elseif($operador == '-'){
    	$operador = $numero1 - $numero2;
    	echo $operador;
    }
    elseif($operador == '*'){
    	$operador = $numero1 * $numero2;
    	echo $operador;
    }
    elseif($operador == '/'){
    	$operador = $numero1 / $numero2;
    	echo $operador;
    }
    else{
    	echo "operador inválido! use +, -, *, /";
    }
}

calculo(10, "+", 10);