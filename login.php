<?php
include('db/conexao.php');
// VALIDANDO ALGUNS PARÂMETROS DE LOGIN
if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha!";
    } else{
        //LIMPANDO MYSQLI PARA ANTI SQL INJECTION
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        // FAZENDO A AUTENTICAÇÃO E REDIRECIONANDO PARA O PAINEL
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            if(password_verify($senha, $usuario['senha'])){
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");
            }
        }else{
            // SERIALIZA A STRING INVALID PARA RETORNAR NO FORM DE HTML
            $invalid = "Ops... e-mail ou senha incorretos!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/login.css">
        <title>Login</title>
    </head>

    <body>
        <div class="container">
            <div class="img">
                <img src="img/login/dengue.png">
            </div>
            <form action="" method="POST">
                <div class="login">
                    <h2>Login</h2>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha">
                    <div class="links">
                        <a href="#">Esqueceu sua senha? </a>
                    </div>
                   <button type="submit" class="btn">Entrar</button>
                   <?php 
                        if (isset($quantidade)){
                            echo $invalid;
                        }
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>