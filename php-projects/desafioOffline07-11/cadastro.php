<?php

require_once "connect.php";

$nome = htmlspecialchars(trim($_POST["nome"]));
$email = htmlspecialchars(trim($_POST["email"]));
$senha = htmlspecialchars(trim($_POST["senha"]));

$sql = $conn->prepare(
    "INSERT INTO client (nome, email, senha) VALUES (?, ?, ?)"   
);

$sql->bind_param("sss", $nome, $email, $senha);

$sql->execute();


$sql->close();
$conn->close();

header("Location: index.php?sucesso=1");
exit();
?>