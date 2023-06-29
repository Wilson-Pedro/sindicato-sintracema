<?php
    include('db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>SINTRACEMA - Vídeos</title>
    <link rel="stylesheet" href="./css/noticias.css">
</head>
<body>
<!-- CABEÇALHO -->
<div class="container-fluid">
    <header>
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SINDICATO SINTRACEMA</a>
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
                <li class="nav-item">
                  <a class="nav-link" href="admin/login.php">Área restrita</a>
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
            <h3 style="padding-left: 4vh; text-shadow: white;"><p class="display-3">Vídeos</p>
            <small class="text-body-secondary">Vídeos organizados pela diretoria</small>
            </h3>
            <br>
            <hr>
            <p class="manssage-info"> arraste para baixo </p>
            <br>
        </div>
        <div class="table-responsive-sm">
          <table>
            <style>
              .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
              }

              .col {
                flex: 0 0 calc(33.33% - 20px);
                max-width: calc(33.33% - 20px);
                margin-bottom: 20px;
              }

              .card {
                position: relative;
                padding-bottom: 56.25%; /* Proporção de aspecto 16:9 */
                overflow: hidden;
                background-color: #f9f9f9;
              }

              .card iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
              }

              .card-body {
                padding: 10px;
              }

              .card-title {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 5px;
              }

              .card-text {
                font-size: 14px;
              }

                /* Media queries para tornar os vídeos responsivos */
                @media screen and (max-width: 767px) {
                    .col {
                        flex: 0 0 100%;
                        max-width: 100%;
                    }
                }

                @media screen and (min-width: 768px) and (max-width: 1199px) {
                    .col {
                        flex: 0 0 calc(50% - 20px);
                        max-width: calc(50% - 20px);
                    }
                }
            </style>

            <?php
              include('db/conexao.php');

              $query = "SELECT * FROM videos";
              $resultado = $mysqli->query($query);

              echo '<div class="row">';
                while ($row = $resultado->fetch_assoc()) {
                  $titulo = $row['titulo'];
                  $descricao = $row['descricao'];
                  $link = $row['link'];
                    echo '<div class="col">';
                      echo '<div class="card">';
                        echo ' <iframe src="' . $link . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
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