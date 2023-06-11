<?php
if(isset($_POST['cadastrar'])) {
    include('db/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $uf = $_POST['UF'];
    $cidade = $_POST['cidade'];
    $nacionalidade = $_POST['nacionalidade'];
    $naturalidade = $_POST['naturalidade'];
    $escolaridade = $_POST['escolaridade'];
    $cursos = $_POST['curso'];
    $endereco = $_POST['endereco'];
    $estado_civil = $_POST['estado_civil'];
    $nascimento = $_POST['nascimento'];
    $fone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome_pai = $_POST['nome_pai'];
    $nome_mae = $_POST['nome_mae'];
    $nome_conjuge = $_POST['nome_conjuge'];
    $nome_filhos = $_POST['nome_filhos'];
    $assinatura_socio = $_POST['assinatura_socio'];
    $numero_matricula = $_POST['matricula'];

    $sql = "INSERT INTO `filiais`(`id`, `nome`, `uf`, `cidade`, `nacionalidade`, `naturalidade`, `escolaridade`, `cursos`, `endereco`, `estado_civil`, `nascimento`, `fone`, `cpf`, `rg`, `nome_pai`, `nome_mae`, `nome_conjuge`, `nome_filhos`, `assinatura_socio`, `numero_matricula`)
            VALUES (NULL, '$nome', '$uf', '$cidade', '$nacionalidade', '$naturalidade', '$escolaridade', '$cursos', '$endereco', '$estado_civil', '$nascimento', '$fone', '$cpf', '$rg', '$nome_pai', '$nome_mae', '$nome_conjuge', '$nome_filhos', '$assinatura_socio', '$numero_matricula')";

    if($mysqli->query($sql)) {
        //$success = "<h4 style='color: green;'>Cadastro realizado com sucesso!</h4>"
        
        header("Location: cadastro-sucesso.php");
    } else {
        //echo "Erro ao cadastrar: " . $mysqli->error;
    }
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
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Cadastro de filiado</title>
    <link rel="stylesheet" href="./css/cad-filiado.css">

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
        <?php 
          if(isset($_POST['cadastrar'])){
            echo $success;
          }
        ?>
        <h3 class="">Cadastramento de filiado</h3>
        <br>
        <form method="POST" action="">
        <div>
            <div class="input-group">
            <label>UF:</label>
            
            <select name="UF" class="uf">
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AM">AM</option>
              <option value="AP">AP</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA" selected>MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RO">RO</option>
              <option value="RS">RS</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SE">SE</option>
              <option value="SP">SP</option>
              <option value="TO">TO</option>
            </select>

            
            <label>Cidade:</label>
            
            <input class="form-control" type="text" name="cidade" placeholder="São Luís" required aria-label="default input example">
            </div>
            <br>
            <label>Nº Matricula:</label>
            <input class="form-control" type="number" name="matricula" placeholder="000000000" required aria-label="default input example">
        <hr>
        <label>Nome:</label>
        <input class="form-control" type="text" name="nome" placeholder="David Silva Souza" required aria-label="default input example">
        <br>
        <div class="input-group">
        <label>Nacionalidade:</label>
        
        <input class="form-control" type="text" name="nacionalidade" placeholder="Brasileiro(a)" required aria-label="default input example">
        
        <label>Naturalidade:</label>
        
        <input class="form-control" type="text" name="naturalidade" placeholder="São Luís" required aria-label="default input example">
        </div>
        <br>
        <div class="input-group">
        <label>Escolaridade:</label>

            <select name="escolaridade">
              <option value="fundamental">Fundamental</option>
              <option value="medio">Medio</option>
              <option value="superior">Superior</option>
            </select>

          </div>
          <br>
        <label>Cursos:</label>
          <input class="form-control" type="text" name="curso" placeholder="Administração" required aria-label="default input example">
        <br>
        <label>Endereço:</label>
          <input class="form-control" type="text" name="endereco" placeholder="Travessa São Benedito" required aria-label="default input example">
        <br>
        <div class="input-group">
        <label>Estado civil:</label>
        <select name="estado_civil" class="form-select" aria-label="Default select example">
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
            <option value="viuvo">Viúvo(a)</option>
            <option value="desquitado">Desquitado(a)</option>
          </select>
        <br>
        <label>Data de nascimento:</label>
          <input class="form-control"  type="date" name="nascimento" required aria-label="default input example">
        </div>
        <br>
        <div class="input-group">
        <label>Fone:</label>
          <input class="form-control" type="text" id="fone" name="fone" placeholder="(98) 9 0000-0000" required aria-label="default input example">
        <label>Email:</label>
          <input class="form-control" type="email" name="email" placeholder="david@exemplo.com" required aria-label="default input example">
        </div>
        <br>
        <div class="input-group">
        <label>RG:</label>
          <input class="form-control" type="text" name="rg" id="rg" maxlength="15" placeholder="00.000.000-0" required aria-label="default input example">
        <label>CPF:</label>
          <input class="form-control" type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required aria-label="default input example">
        </div>
        <br>
        <label>Pai:</label>
          <input class="form-control" type="text" name="nome_pai" placeholder="Leonardo Julio" required aria-label="default input example">
        <br>
        <label>Mãe:</label>
          <input class="form-control" type="text" name="nome_mae" placeholder="Maria Silvia Souza" required aria-label="default input example">
        <br>
        <label>Cônjuge:</label>
          <input class="form-control" type="text" name="nome_conjuge" placeholder="Isabella Moreira" aria-label="default input example">
        <br>
        <label>Filhos:</label>
          <input class="form-control" type="text"  name="nome_filhos" placeholder="Anderson Moreira Souza" aria-label="default input example">
        <hr>
        <p><i><b><input type="checkbox" required> Autorizo desconto em folha 2% (dois porcento) do meu salário, em favor do SINTRACEMA, conforme art. 545 do CLT.</b></i></p>
          <label>Assinatura do socio:</label>
        <input class="form-control" type="text" name="assinatura_socio" placeholder="Fernando Alves" required aria-label="default input example">
        <br>
        <input type="submit" class="btn btn-primary btn-rounded" name="cadastrar" value="Cadastrar filiado">


    </div>
        </form>
    </main>
    <footer class="p-1">
      SINDICATO - SINTRACEMA 
      <br>
      Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script text="text/javascript">
        $(document).ready(function () {
         $('#cpf').mask('000.000.000-00')
         $('#fone').mask('(00) 0 0000-0000');
        });
    </script>
</body>
</html>