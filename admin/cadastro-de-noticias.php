<?php
include('protect.php');

  if(isset($_POST['criar'])) {
      include('../db/conexao.php');
      $titulo = $_POST['titulo'];
      $descricao = $_POST['descricao'];
      $imagem = $_FILES['imagem'];

      if($imagem['error'])
          die("Falha ao enviar o arquivo");

      if ($imagem['size'] > 2097152)
          die("Arquivo muito grande! Max: 2MB");

      $pasta = "../noticias/";
      $nomedoarquivo = $imagem['name'];
      $novonomedoarquivo = uniqid();
      $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

      if($extensao != 'jpg' && $extensao != 'png')
          die("Formato de arquivo não aceito!");

      $path = $pasta . $novonomedoarquivo . "." . $extensao;

      $deu_certo = move_uploaded_file($imagem["tmp_name"], $path);
      if($deu_certo) {
          $mysqli->query("INSERT INTO noticias (titulo, descricao, caminho) VALUES ('$titulo', '$descricao', '$path')");
          //header("Location: cadastro-de-noticias-sucesso.php");
      }
      else {
          echo "<p>Falha ao enviar o arquivo!</p>";
      }

      $query = "INSERT INTO noticias (titulo, descricao, caminho) VALUES ('$titulo', '$descricao', '$path')";

  }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>Cadastramento de noticias - SINTRACEMA</title>
    <style>
        body
        {
            background-color: black;
        }
        header
        {
            margin-bottom: 10vh;
        }
        main
        {
            background-color: whitesmoke;
            box-shadow: 0px 5px 50px rgb(255, 255, 255,0.500); 
            margin: 5vh;
            padding: 10vh;
            border-radius: 2vh;
        }
        .info-input
        {
            margin: 1vh;
        }
        .massange-box
        {
            text-align: center;
            background-color: grey;
            bottom: 0vh;
            padding: 2vh;
        }
        .navbar
        {
            box-shadow: 0px 5px 50px rgba(0, 0, 0, 0.5); 
        }
        .rodape {
          background-color: #15171a;
          color: white;
          font-weight: bold;
          text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <header>
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">SINDICATO SINTRACEMA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">SINTRACEMA</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!-- NAVEGADOR -->
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../informacoes-da-diretoria.php">Informações da diretoria</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="../manual.php">Manual</a>
                </li>
                <!-- NAVEGADOR DO CADASTRAR -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Cadastrar
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="../cadastro-de-filiado.php">Filial</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>
    <main>
      <?php
      /*
        if(isset($_POST['criar'])){
          echo $success;
        }
        */
      ?>
    <h3 class="">Cadastrar noticia</h3>
    <br>
    <div class="container-fluid">
      <form enctype="multipart/form-data" method="POST">
            <div id="cad-info" name="cad-info" class="cad-info">
              <label for="titulo-noticia" class="lead">Titulo</label><span title="Titulo da noticia"><svg class="info-input" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </svg></span>
        <input type="text" required placeholder="Titulo da noticia" name="titulo"  class="form-control" aria-label="default input example">
        <br>
        <label for="link-noticia" class="lead">Imagem da notícia</label><span title="Link para a postagem da noticia"><svg class="info-input" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </svg></span>
        <input type="file" name="imagem" class="form-control" aria-label="default input example">
        <br>
        <label for="descricao-noticia" class="lead">Descrição</label><span title="Descricao pequena sobre o teor da noticia"><svg class="info-input" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </svg></span>
        <textarea name="descricao" required placeholder="descreva a notícia" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div id="new-cad-info" name="new-cad-info" class="new-cad-info">
        <br>
        <input type="submit" name="criar" class="btn btn-success" value="Enviar">
      </form>
    </div>
    </main>
    <footer class="rodape">
      SINDICATO - SINTRACEMA 
      <br>
      Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital
    </footer>
</body>
</html>