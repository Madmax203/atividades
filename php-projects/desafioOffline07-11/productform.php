<!DOCTYPE html>
<html lang="en">
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
    <br>
    <form action="cadastro2.php" method="POST">
        <label for="produto">produto</label>
        <input type="text" name="produto">
        <br><br>
        <label for="quantidade">estoque</label>
        <input type="text" inputmode="numeric" pattern="[0-9]*" name="quantidade">
        <br><br>
        <label for="descricao">descrição</label>
        <input type="text" name="descricao">
        <br><br>
        <input type="submit" value="enviar"> 
    </form> 


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>