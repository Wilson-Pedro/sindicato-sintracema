<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Noticias e informações da diretoria</title>
    <style>
      @media screen{
        .manssage-info
        {
          display: none;
        }
      }
      @media only screen and (max-width: 600px)
      {
        .manssage-info
        {
          display: block;
          text-align: center;
        }
      }
        body
        {
            background-color: rgba(0, 0, 0);
        }
        header
        {
          margin-bottom: 10vh;
        }
        main, footer
        {
            background-color: rgba(255, 255, 255);
            box-shadow: 0px 5px 50px rgb(255, 255, 255,0.500); 
            margin-bottom: 2vh;
            margin-left: 5vh;
            margin-right: 5vh;
            border-radius: 2vh;
            padding: 2vh;
        }
        .carousel-control-prev:hover, .carousel-control-next:hover
        {
            background-color: black;

        }
        .carousel-caption
        {
            background-color: rgba(0, 0, 0, 0.500);
            border-radius: 2vh;
        }
        .table
        {
            text-align: center;
        }
        .massange-box
        {
            text-align: center;
            background-color: grey;
            bottom: 0vh;
            padding: 2vh;
        }
        .display-3
        {
          background-image: linear-gradient(to bottom, transparent 0%, transparent 90%, black 90%, black 100%);
          background-repeat: no-repeat;
          background-size: 0% 100%;
          background-position-x: right;
          transition: background-size 300ms;
        }
        .display-3:hover
        {
          background-size: 100% 100%;
          background-position-x: left;
        }
        .navbar
        {
            box-shadow: 0px 5px 50px rgba(0, 0, 0, 0.5); 
        }
        .d-block
        {
          border-radius: 2vh;
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
          <a class="navbar-brand" href="index.php">SINDICATO SINTRACEMA</a>
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
                  <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="informacoes-da-diretoria.php">Informações da diretoria</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="manual.php">Manual</a>
                </li>
                <!-- NAVEGADOR DO CADASTRAR -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Cadastrar
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="cadastro-de-filiado.php">Filial</a></li>
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
            <br>
            <h3 style="padding-left: 4vh; text-shadow: white;"><p class="display-3">Notícias</p>
            <small class="text-body-secondary">Notícias de reuniões e assembleias organizadas pela diretoria</small>
            </h3>
            <br>
            <hr>
            <p class="manssage-info">->->-> arraste para o lado ->->-></p>
            <br>
        </div>
        <div class="table-responsive-sm">
            <table class="table">
                <tr>
                    <th scope="col">
                    </th>
                    <th scope="col">
                    </th>
                    <th scope="col">
                    </th>
                    <th scope="col">
                      
                    <?php
                        include('db/conexao.php');

                        $query = "SELECT * FROM noticias";
                        $resultado = $mysqli->query($query);

                        echo '<div class="row">';

                        while ($row = $resultado->fetch_assoc()) {
                            $titulo = $row['titulo'];
                            $descricao = $row['descricao'];
                            $caminho = $row['caminho'];

                            echo '<div class="col">';
                                echo '<div class="card" style="width: 18rem;">';
                              
                                    echo '<img src="noticias/' . $caminho . '" class="card-img-top" loading="lazy" alt="' . $titulo . '">';
                                    echo '<div class="card-body">';
                                        echo '<h5 class="card-title">' . $titulo . '</h5>';
                                        echo '<p class="card-text">' . $descricao . '</p>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }

                        echo '</div>';

                        $resultado->free();
                        $mysqli->close();
                    ?>


                    </th>
                </tr>
            </table>
            </div>
    </main>
    <!-- PAGINA DE EVENTOS
    <footer>
        <div>
            <br>
            <hr>
            <br>
            <h3 style="padding-left: 4vh; text-shadow: white;"><p class="display-3">Eventos</p>
            <small class="text-body-secondary">Eventos, manifestações e seminários realizados pela diretoria</small>
            </h3>
            <br>
            <hr>
            <p class="manssage-info">->->-> arraste para o lado ->->-></p>
            <br>
        </div>
        
        <div class="table-responsive-sm">
            <table class="table">
                <tr>
                    <th scope="col">
                    </th>
                    <th scope="col">
                    </th>
                    <th scope="col">
                    </th>
                    <th scope="col">
                        <div class="card" style="width: 18rem;">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (1).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                            </div>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="card" style="width: 18rem;">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (2).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="card" style="width: 18rem;">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (3).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                    </th>
                </tr>
            </table>
            </div>
                    
    </footer>
    -->
    <footer class="rodape">
      SINDICATO - SINTRACEMA 
      <br>
      Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital
    </footer>
</body>
</html>