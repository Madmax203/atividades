<?php

$nome =  htmlspecialchars(trim($_POST['nome']));
$email = htmlspecialchars(trim($_POST['email']));
$produto = htmlspecialchars(trim($_POST['produto']));

if (empty($nome) || empty($email) || empty($produto)){
    echo "preencha todos os campos";
}
    

else{
     echo "tudo certo";
}
?>

