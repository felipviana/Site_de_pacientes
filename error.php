<?php
session_start();
if(!isset($_SESSION["Email"])){
    header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">
    <header class="header">
        <a class="deslogar" href="deslogar.php">Deslogar</a>
    </header>
    <section class="container_main">
        <div class="container_item">
            <h1 style="color: red;">Erro</h1>
            <p>Erro, <?= $_GET["error"] ?></p>
            <button><a href="preencher.php">Cadastro Cliente</a></button>
        </div>
    </section>
</body>
</html>