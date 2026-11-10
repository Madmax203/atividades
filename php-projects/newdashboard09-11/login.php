<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "Max" && $senha == "123"){

        $_SESSION["usuario"] = $usuario;

        header("location: index.php");
        exit();
    }
    else{
        $erro = "usuário ou senha inválidos!!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>

<body>

   
    <h2>Login</h2>
    <br><br>
    <?php
        if(isset($erro)){
            echo "<p style=' color:red'> $erro </p>";
        }
    ?>

    
    <form method="POST">
        <div class="container mt-4" style="max-width:500px">
            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="usuario">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="senha">
            </div>
            
            <button type="submit" class="btn-solid theme-primary">Submit</button>
        </div>
    </form>


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>