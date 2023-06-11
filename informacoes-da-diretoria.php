<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/info-diretoria.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Noticias e informações da diretoria</title>
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
        <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" style="height: fit-content; width: fit-content; margin: auto;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="https://www.instagram.com/p/CpTOkbCuiG2/" title="Ver noticia completa"><img src="img/info-diretoria/Ontem_ 01_03_ a diretoria do SINTRACEMA (1).JPG" class="d-block img-fluid" alt="..." loading="lazy"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>reunião na SEMUS</h5>
                  <p>Da Saúde. Na oportunidade também pleiteamos mais uma vez a Equiparação Salarial dos CTs..# A Luta continua # Unidos Somos Fortes!👍🙏</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://www.instagram.com/p/CpTOkbCuiG2/" title="Ver noticia completa"><img src="img/info-diretoria/Ontem_ 01_03_ a diretoria do SINTRACEMA (2).JPG" class="d-block img-fluid" alt="..." loading="lazy"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>reunião na SEMUS</h5>
                  <p>.Na oportunidade,foi tratado a respeito da seguinte pauta: Plano de Cargos e Carreiras ACE,s e ACS; Gratificação SUS; Incentivo de final do Ano, conforme repasse do Minis. Da Saúde.</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://www.instagram.com/p/CpTOkbCuiG2/" title="Ver noticia completa"><img src="img/info-diretoria/Ontem_ 01_03_ a diretoria do SINTRACEMA (3).JPG" class="d-block img-fluid" alt="..." loading="lazy"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>reunião na SEMUS</h5>
                  <p>Ontem, 01/03, a diretoria do SINTRACEMA,esteve presente em uma reunião na SEMUS,juntamente com a Diretoria do SINDACS- São Luís,assessoria jurídica de ambos os sindicatos e Superintendente da Vig. Sanitária e Coord.- SAGE</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" title="Noticia anterior"data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" title="Proxima noticia"data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Proximo</span>
            </button>
          </div>
          </div>
          <div>
            <br>
            <hr>
            <br>
            <h3 style="padding-left: 4vh; text-shadow: white;"><p class="display-3">Informações</p>
            <small class="text-body-secondary">Noticias de reuniões e assembleias organizadas pela diretoria</small>
            </h3>
            <br>
            <hr>
            <p class="manssage-info"> arraste para baixo </p>
            <br>
        </div>

        
        <!-- CARDS DE INFOS 1ª FILEIRA -->
        <div class="table-responsive-sm">
                      <!-- CARDS DE INFOS -->
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (1).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (2).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                        </div>
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (3).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                        </div>
                      </div>


    </main>
    <footer>
      <div class="eventos-box">
        <div>
            <br>
            <hr>
            <br>
            <h3 style="padding-left: 4vh; text-shadow: white;"><p class="display-3">Eventos</p>
            <small class="text-body-secondary">Eventos, manifestações e seminários realizados pela diretoria</small>
            </h3>
            <br>
            <hr>
            <p class="manssage-info"> arraste para baixo </p>
            <br>
        </div>


        <!-- CADS DE EVENTOS 1ª FILEIRA -->
        <div class="table-responsive-sm">
                      <!-- CARDS DE EVENTOS -->
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (1).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (2).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                        </div>
                        <div class="card">
                            <img src="img/info-diretoria/A semana iniciou com bastante trabalho_ o SINTRACEMA (3).JPG" class="card-img-top" loading="lazy" alt="Noticia:  A semana iniciou com bastante trabalho, o SINTRACEMA-Sindicato dos Agentes de Combate às Endemias e Sindacs- Sindicato dos Agentes Comunitários de Saúde, esteve em uma reunião nesta manhã (11.04), na Prefeitura Municipal de São Luís, com Secretário de Governo o Sr. Emílio Carlos Murad e o Vereador Pavão Filho, na oportunidade protocolamos e entregamos em mãos a minuta do Projeto de Lei que versa a criação do Plano de Cargos e Carreiras dos ACE e ACS.
                            Ainda estivemos protocolando dois ofícios, um solicitando uma reunião com urgência com a Superintendente da Vigilância Sanitária, e o outro com o Secretário Municipal de Saúde de São Luís.">
                            <div class="card-body">
                              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, dolorem!</p>
                              <a href="https://www.instagram.com/p/Cq3EmknOFTk/" class="btn btn-primary">Ver noticia</a>
                        </div>
                        </div>
                  <br>
            </div>


      </div>
    <div class="rodape">
      SINDICATO - SINTRACEMA 
      <br>
      Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital
      </div>
      </footer>
    </body>
</html>