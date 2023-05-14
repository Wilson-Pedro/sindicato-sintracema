<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="PT">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel Admin</title>
    </head>
    <body>
        <h4>Bem vindo ao painel, <?php echo $_SESSION['nome']; ?></h4>
        <p>
            <a href="logout.php">Sair</a>
        </p>
    </body>
</html>