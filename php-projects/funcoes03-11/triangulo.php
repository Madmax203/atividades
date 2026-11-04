<?php

function classificarTriangulo($a, $b, $c) {

    if ($a <= 0 || $b <= 0 || $c <= 0 ||
        $a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        echo "Triângulo inválido!";
    } elseif ($a == $b && $b == $c) {
        echo "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "Isósceles";
    } else {
        echo "Escaleno";
    }
}

classificarTriangulo(6, 5, 4);


