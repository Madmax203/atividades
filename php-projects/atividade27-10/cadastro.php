<?php

$nome = $_POST["nome"];

$nota1 = $_POST["nota1"];

$nota2 = $_POST["nota2"];

$nota3 = $_POST["nota3"];

$nota4 = $_POST["nota4"];

$media = ($nota1+$nota2+$nota3+$nota4)/4;

if ($media >= 7){
    echo "Nome do aluno ". $nome . PHP_EOL;
    echo "Média: " . $media . PHP_EOL;
    echo "Situação: APROVADO";
}

elseif($media < 7 && $media >= 5){
    echo "Nome do aluno ". $nome . PHP_EOL;
    echo "Média: " . $media . PHP_EOL;
    echo "Situação: RECUPERAÇÃO";
}

else{
    echo "Nome do aluno ". $nome . PHP_EOL;
    echo "Média: " . $media . PHP_EOL;
    echo "Situação: REPROVADO";
}