<?php
    require_once "connect.php";

    $sql = "SELECT * FROM product";
    
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
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($product = $resultado->fetch_assoc()){
            ?>
            <tr>
            <th scope="row"><?= htmlspecialchars($product["id"]) ?></th>
                <td><?= htmlspecialchars($product["produto"]) ?></td>
                <td><?= htmlspecialchars($product["quantidade"]) ?></td>
                <td><?= htmlspecialchars($product["descricao"]) ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>