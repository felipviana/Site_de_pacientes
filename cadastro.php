<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include_once "funcao_conn.php";
        session_start();
        $error="";
        $error2 = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $conexao = conexao();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error2="Informe um email válido";
        } 
        else {
            try {
                $query = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) VALUES ('$email','$senha')");
                header('Location: login.php');
                sleep(2);

            } catch (mysqli_sql_exception $e) {
                $error = "Esse email já esta cadastrado";
            }
        }
    }
        session_abort();
    ?>
</head>
<body class="body">
    <header>
        <h1 class="titulo"> Cadastro</h1>
    </header>
    <main>
        <section class="container_main">
            <div class="container_item">
                <form action="cadastro.php" method="POST">
                    <label for="email"></label>
                    <input class="login_input"type="email" name="email" id="email" placeholder="Email" required><br><br>
                    <label for="senha"></label>
                    <input class="senha_input"type="password" name="senha" id="senha" placeholder="Senha" required><br><br>
                    <p>Já possui cadastro?<a href="login.php" class="cadastrar-se"> Logar</a></p>
                    <button>Enviar</button>
                </form>
                <p class="error"><?=$error?></p>
                <p class="error"><?=$error2?></p>
            </div>
    </section>
    </main>
</body>
</html>