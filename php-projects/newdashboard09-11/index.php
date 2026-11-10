<?php
    require_once "connect.php";

    $sql = "SELECT * FROM fruits";
    
    $resultado = $conn->query($sql);

    session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>

        .horizonte{
            display: flex;
            flex-direction:column;
            gap: 20px;
            
            
        }
        .item{
            margin: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <br><br>

    <h2>
        Bem-vindo, <?php echo $_SESSION["usuario"]; ?>
    </h2>
   <?php
        while($fruits = $resultado->fetch_assoc()){
   ?>
    <div class="horizonte">
        <div class="item">
            <ul class="list-group" style="width: 18rem;">
                <li class="list-group-item text-center"><?= htmlspecialchars($fruits["nome"]) ?></li>
                <li class="list-group-item text-center"><?= number_format($fruits["preco"], 2, ',', '.'); ?></li>
            </ul>
        </div>

    </div>
    <?php
        }
    ?>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>