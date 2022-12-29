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
    <title>Preencher</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">
    <header class="header_preencher">
        <h1 class="titulo">Preencha os dados do paciente</h1>
        <a href="deslogar.php">Deslogar</a>
    </header>
    <main>
        <section class="container_main">
           <div class="container_item">
           <form action="processar.php" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required> <br><br>
                <label for="altura">altura: </label>
                <input id="input" min="0" maxlength="4" type="number" name="altura" id="altura" step="0.01" required><br><br>
                <label for="idade">Idade: </label>
                <input id="input2" min="0" maxlength="2" type="number" name="idade" id="idade" required> <br><br>
                <label for="peso">Peso: </label>
                <input id="input3" min="0" maxlength="5" type="number" name="peso" id="peso" step="0.01" required> <br><br>
                <button>Enviar</button>
                
            </form><br><br>
            

           </div>
        </section>
    </main>
<script src="script.js"></script>
</body>
</html>