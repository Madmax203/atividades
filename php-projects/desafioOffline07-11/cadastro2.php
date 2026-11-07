<?php

require_once "connect.php";

$produto = htmlspecialchars(trim($_POST["produto"]));
$quantidade = htmlspecialchars(trim($_POST["quantidade"]));
$descricao = htmlspecialchars(trim($_POST["descricao"]));

$sql = $conn->prepare(
    "INSERT INTO product (produto, quantidade, descricao) VALUES (?, ?, ?)"   
);

$sql->bind_param("sis", $produto, $quantidade, $descricao);

$sql->execute();


$sql->close();
$conn->close();

header("Location: index.php?sucesso=1");
exit();
?>