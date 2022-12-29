<?php
session_start();
if(!isset($_SESSION["Email"])){
    header("Location:login.php");
    }
    include_once "funcao_conn.php";
$conexao = conexao();
$arrays = mysqli_query($conexao, "SELECT * FROM pacientes");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">
    <header class="header">
        <a class="deslogar" href="deslogar.php">Deslogar</a>
    </header>
    <main>
        <section class="container_main">
            <div class="container_item">
                <?php

                $data = mysqli_num_rows($arrays);
                if($data== 0) {
                    echo "<p style='padding-bottom: 20px;'>Nenhum paciente cadastrado</p>";
                    }
                else{?>
                    <table>
                    <tr>
                        <td>Nome</td>
                        <td>Idade</td>
                        <td>Altura</td>
                        <td>Peso</td>
                        <td>IMC</td>
                    </tr>
                    <?php 
                    while($array=$arrays->fetch_array()){
                        $imc = $array[4] / pow($array[3], 2);
                        ?>
                    <tr>
                        <td><?php echo $array[1]; ?></td>
                        <td><?php echo $array[2]; ?></td>
                        <td step="0.01"><?php echo $array[3]; ?></td>
                        <td step="0.01"><?php echo $array[4]; ?></td>
                        <td step="0.01"><?php echo number_format($imc, 2, '.', ''); ?></td>
                    </tr>
                    <?php }?>
                    </table>
                <?php }?>
                <a id="adicionar_pac"href="preencher.php">Adicionar pacientes</a><br><br>
            </div>
        </section>
    </main>
    

</body>
</html>
