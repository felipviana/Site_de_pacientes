<?php
    include_once "funcao_conn.php";
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
    <title>Preencher</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="body">
    <header class="header">
        <a href="deslogar.php">Deslogar</a>

    </header>
        <section class="container_main">
            <div class="container_item sucesso">
                <?php
                $nome = $_SESSION['nome'];
                $altura = $_SESSION['altura'];
                $idade = $_SESSION['idade'];
                $peso = $_SESSION['peso'];

                $conexao = conexao();
                // $arrays = mysqli_query($conexao, "SELECT * FROM pacientes WHERE email ='$email'");
                //     if(mysqli_num_rows($arrays)>0){
                //         echo "Este email já existe, por favor preencha com outro<br><br>";
                //         echo "<div class='botao_processar2 p2'>
                //                 <button><a href='preencher.php'>Voltar</a></button>
                //                 <button><a href='listagem.php'>Lista de Pacientes</a></button>
                //               </div>";
                // }   
                    // else{
                        mysqli_query($conexao, "INSERT INTO pacientes (nome, altura, idade, peso) VALUES ('$nome', '$altura', '$idade', '$peso')");
                        echo "<h1>Sucesso</h1>";
                        echo "<p>Seus dados foram adicionados ao nosso banco de dados!</p>";
                        echo "
                              <div class='botao_processar2'>
                                  <button><a href='preencher.php'>Adicionar mais Pacientes</a></button>  
                                  <button><a href='listagem.php'>Lista de Pacientes</a></button>     
                              </div>";
                // }
                ?>
            </div>
        </section>
</body>
</html>