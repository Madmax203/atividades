<?php

require_once "connect.php";

$nome = htmlspecialchars(trim($_POST["nome"]));
$preco = htmlspecialchars(trim($_POST["preco"]));

$sql = $conn->prepare(
    "INSERT INTO fruits (nome, preco) VALUES (?, ?)"
);

$sql->bind_param("sd", $nome, $preco);

$sql->execute();


$sql->close();
$conn->close();

header("location: index.php?sucesso=1");
exit();
?>