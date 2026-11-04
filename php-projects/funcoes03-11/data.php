<?php

function data ($ano){
    $resultado = 2026 - $ano;
    if($resultado >= 18){
        echo "Maior de idade";
    }
    else{
    echo "Menor de idade " . $resultado;
}
    
}   
	


data(2000);