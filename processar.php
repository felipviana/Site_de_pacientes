<?php
session_start();
    if(!isset($_SESSION["Email"])){
        header("Location:login.php");
        }
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        include_once "funcao_conn.php";
        $nome = (string) $_POST["nome"];
        $altura = (float) $_POST["altura"];
        $idade = (float) $_POST["idade"];
        $peso = (float) $_POST["peso"];
        $_SESSION['nome']= $nome;
        $_SESSION['altura']= $altura;
        $_SESSION['idade']= $idade;
        $_SESSION['peso']= $peso;

        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            header("location: error.php?error=Informe uma idade válida!");
        }
    
        if(!filter_var($altura, FILTER_VALIDATE_FLOAT)){
            header("location: error.php?error=Informe uma altura válida!");
        }
    
        if(!filter_var($peso, FILTER_VALIDATE_FLOAT)){
            header("location: error.php?error=Informe uma peso válido!");
        }        
    ?>
</head>
<body class="body">
    <header class="header">
        <a href="deslogar.php">Deslogar</a>
    </header>
    <main>
        <section class="container_main">
            <div class="container_item dados">
                <h2>Dados Digitados</h2>
                <p><strong>Nome</strong> <?= $nome ?></p>
                <p><strong>Altura</strong> <?= $altura ?> m</p>
                <p><strong>Idade</strong> <?= $idade ?> anos</p>
                <p><strong>Peso</strong> <?= $peso ?> Kgs</p>
                <h2>Está tudo correto?</h2>
                <button><a href="processar2.php">Confirmar</a></button> 
                <button><a href="preencher.php">Refazer</a></button> 
            </div>
        </section>
    </main>
    
</body>
</html>