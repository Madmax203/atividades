<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <br><br>
    <form action="cadastro.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome">
        <br><br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br><br>
        <label for="">produto</label>
        <input type="text" name="produto">
        <br><br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        include 'footer.php';
    ?>
</body>
</html>

