<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
    <?php
    include_once "funcao_conn.php";
        session_start();
        $error="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $conexao = conexao();
            $query = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email' and senha='$senha'");
            if(mysqli_num_rows($query)>0){
                $_SESSION["Email"] = $email;
                header("location: listagem.php");
            } else{
                $error="Dados incorretos";
            }
        }
    ?>
</head>
<body class="body">
    <header>
        <h1 class="titulo">Login de usuário</h1>
    </header>
    <main>
        <section class="container_main">
            <div class="container_item">
                <form action="login.php" method="post">
                    <label for="email" ></label>
                    <input class="login_input" type="email" name="email" id="email" placeholder="Email" required><br><br>
                    <label for="senha"> </label>
                    <input class="senha_input" type="password" name="senha" id="senha"placeholder="Senha" required><br><br>
                    <button>Login</button>
                </form>
                <p class="error"><?=$error?></p>
                <p>Não possui cadastro?<a href="cadastro.php" class="cadastrar-se"> Cadastrar-se</a></p>
            </div>
        </section>
    </main>
</body>
</html>