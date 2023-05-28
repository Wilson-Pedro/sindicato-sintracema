<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <style>
    body {
      /*background-color: rgb(253, 241, 241);*/
      background-color: rgb(235, 209, 209);
    }

    header {
      display: block;
    }

    main {
      background-color: white;
      margin: 0 auto;
      width: 95%;
      min-height: 190vh;
      box-shadow: 0px 0px 4px 0px black;
      text-align: justify;
    }

    .logo {
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    .confira {
      text-decoration: underline;
    }

    h5 {
      text-align: center;
    }

    div#rodape {
      min-height: 90vh;
      background-color: #282c30;
      color: white;
    }

    footer {
      background-color: #15171a;
      color: white;
      font-weight: bold;
      text-align: center;
    }
  </style>
  <title>SINTRACEMA</title>
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
                  <a class="nav-link active" aria-current="page" href="#">Início</a>
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

  <!-- ESPAÇO PARA SEPARAR O CABEÇALHO DO MAIN  -->
 <!-- <div class="container-fluid">
    <br>
  </div>-->

  <!-- MAIN  -->
  <main>
    <div class="container pt-4">
      <div class="row mt-4">
        <div class="col-lg-fluid">
          <h1 class="logo pt-4">
            <span class="text-center">Unidos pelo bem comum - o sindicato que luta por uma sociedade mais justa e
              solidária!</span>
          </h1>
        </div>
        <div class="col-lg-2">

        </div>
      </div>

      <hr>

      <div class="row mt-4 mb-4">
        <div class="col-lg-8">

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

            <!--BOTÕES DO CARROSSEL-->

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>

            <!-- IMAGENS DO CARROSSEL -->

            <div class="carousel-inner">

              <!-- CARROSSEL 1 -->

              <div class="carousel-item active">
                <img src="img/Capturar-4.PNG" class="d-block w-100 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <!--<p>Some representative placeholder content for the first slide.</p>-->
                </div>
              </div>

              <!-- CARROSSEL 2 -->

              <div class="carousel-item">
                <img src="img/Capturar-3.PNG" class="d-block w-100 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>

                </div>
              </div>

              <!-- CARROSSEL 3 -->

              <div class="carousel-item">
                <img src="img/Capturar-2.PNG" class="d-block w-100 img-thumbnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>

                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <!-- ACCORDION -->

        <div class="col-lg-4">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  SOBRE O SIDICATO
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Sindicato dos Trabalhadores do Controle de Endemias do Maranhão</strong> é uma organização que atua na proteção da saúde pública, especialmente no combate aos mosquitos transmissores de doenças como a dengue, chikungunya e zika. Seus membros são profissionais capacitados em medidas de prevenção e controle dessas doenças, trabalhando em parceria com as autoridades locais de saúde. O sindicato tem como objetivo conscientizar a população sobre a importância de prevenir a proliferação dos mosquitos e defender os direitos dos profissionais que atuam no controle de endemias.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  O QUE PROPORMOS?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                  plugin adds the appropriate classes that we use to style each element. These classes control the
                  overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                  can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!--CARDS-->

      <section>
        <div class="container mb-5">
          <div class="row mt-4">
            <div class="col--sm-12 text-dark text-center my-3">
              <h1 class="confira">CONFIRA:</h1>

            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">

              <!-- CARD 1 -->
              <div class="card border-success mt-4">
                <img class="card-img-top" src="img/Capturar-2.PNG">
                <div class="card-body">
                  <h5 class="card-title">ÚLTIMAS NOTÍCIAS</h5>
                  <p class="card-text mt-3">Esteja sempre informado sobre os direitos e interesses da sua categoria
                    acompanhando as notícias do sindicato!</p>
                  <a href="noticias.php" class="btn btn-outline-success">Visitar</a>
                </div>
              </div>

            </div>
            <div class="col-sm-4">
              <div class="card border-success mt-4">

                <!-- CARD 2 -->
                <img class="card-img-top" src="img/Capturar-3.PNG">
                <div class="card-body">
                  <h5 class="card-title">NOSSAS REDES SOCIAIS</h5>
                  <p class="card-text mt-3">Faça conexões valiosas e amplie seus horizontes seguindo nosso grupo nas
                    redes sociais!
                  </p>
                  <a href="https://www.instagram.com/sintracema/" target="_blank" class="btn btn-outline-success">Visitar</a>
                </div>

              </div>
            </div>

            <div class="col-sm-4">
              <div class="card border-success mt-4">

                <!-- CARD 3 -->
                <img class="card-img-top" src="img/Capturar.PNG">
                <div class="card-body">
                  <h5 class="card-title">TORNE-SE FILIAL</h5>
                  <p class="card-text">Faça parte da nossa comunidade e torne-se uma filial, ajudando a expandir nossos
                    ideais e objetivos!</p>
                  <a href="cadastro-de-filiado.php" class="btn btn-outline-success">Visitar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </main>

  <!-- RODAPE -->
  <div id="rodape" class="container-fluid pt-4">
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
          <h5>Sobre o site</h5>
          <hr>
          <p>O site é uma importante ferramenta de informação e comunicação para todos os envolvidos na luta contra os mosquitos transmissores de doenças como a dengue, chikungunya e zika. Através deste site, é possível ter acesso a informações atualizadas sobre a situação epidemiológica dessas doenças em todo o país, além de orientações para prevenção e controle desses insetos.</p> <br>
          <!-- <p>Além disso, o site do sindicato oferece recursos e materiais de apoio para os profissionais que atuam no controle de mosquitos, tais como manuais técnicos, vídeos educativos, materiais didáticos para uso em escolas e orientações para aplicação de inseticidas. Também há uma área dedicada aos direitos e benefícios dos agentes de controle de endemias, com informações sobre a legislação trabalhista e direitos específicos da categoria.</p>
          <br> -->
          <!--<p>Em resumo, o site do Sindicato dos Agentes de Controle de Endemias é uma ferramenta valiosa para a prevenção e controle de doenças transmitidas por mosquitos, bem como para a valorização dos profissionais que trabalham nessa área. É uma plataforma de informação e interação que contribui para a promoção da saúde pública e a qualidade de vida das pessoas.</p>-->

        </div>
        <div class="col">
          <h5>Mais informações</h5>
          <hr>
          <!-- <p>O Sindicato SINTRACEMA e uma organização dedicada a proteger a saúde pública, especialmente no combate aos mosquitos transmissores de doenças como a dengue, chikungunya e zika. Os membros deste sindicato são profissionais treinados em medidas de controle e prevenção dessas doenças, e atuam em parceria com as autoridades locais de saúde para monitorar e controlar a população de mosquitos em suas respectivas áreas de atuação.</p>
          <br> -->
          <p>O trabalho do sindicato envolve diversas atividades, tais como a identificação de áreas com alto risco de infestação, o tratamento de locais onde os mosquitos se reproduzem, a conscientização da população sobre a importância de prevenir a proliferação dos insetos, entre outras. Essas ações são essenciais para evitar surtos epidêmicos de doenças transmitidas por mosquitos, que podem ter consequências graves para a saúde pública.</p>
        </div>
        <div class="col">
          <h5>Contato</h5>
          <hr>
          <p>Endereço: Av. Alexandre de Moura, Centro <br> São Luís - MA, CEP: 65025-470</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="p-1">
    SINDICATO - SINTRACEMA 
    <br>
    Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital
  </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>