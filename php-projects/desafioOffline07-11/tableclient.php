<?php
    require_once "connect.php";
    
    $sql = "SELECT * FROM client";
    
    $resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>

    <?php
        include 'header.php';
    ?>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($client = $resultado->fetch_assoc()){

            ?>
            <tr>
                <th scope="row"><?= htmlspecialchars($client["id"]) ?></th>
                <td><?= htmlspecialchars($client["nome"]) ?></td>
                <td><?= htmlspecialchars($client["email"]) ?></td>
                <td><?= htmlspecialchars($client["senha"]) ?></td>
            </tr>
        
            <?php
                }
            ?>
        </tbody>
    </table>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>