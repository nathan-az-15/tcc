<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Conteúdos | Reforço+</title>
  <link rel="stylesheet" href="../css/inicio.css">
  <link rel="stylesheet" type="text/css" href="../css/desempenho_especifico.css">

  <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

  <style>
    /* CSS interno para as cores e tamanho do Objeto*/
    .cor0 {
      /* 0 acertos */
      background-color: rgb(238, 103, 103);
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 1%;
      border-radius: 20px;
      padding-top:15px;
    }

    .cor1 {
      /* 1 acertos */
      background-color: lightcoral;
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 20%;
      border-radius: 20px;
      padding-top:15px;
    }

    .cor2 {
      /* 2 acertos */
      background-color: rgb(250, 250, 170);
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 40%;
      border-radius: 20px;
      padding-top:15px;
    }

    .cor3 {
      /* 3 acertos */
      background-color: rgb(250, 250, 170);
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 60%;
      border-radius: 20px;
      padding-top:15px;
    }

    .cor4 {
      /* 4 acertos */
      background-color: lightgreen;
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 80%;
      border-radius: 20px;
      padding-top:15px;
    }

    .cor5 {
      /* 5 acertos */
      background-color: lightgreen;
      border: solid 1.5px rgb(211, 207, 207);
      height: 3%;
      width: 100%;
      border-radius: 20px;
      padding-top:15px;
    }
  </style>
</head>

<body>
  <input type="checkbox" id="check">
  <!--header area start-->


  <header>

    <a href="../inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"> </a>
    <label for="check">
      <i class="fas fa-align-justify" id="menu_btn"></i>
    </label>
    <div class="direita">
      <a href="sair.php" class="sair">Sair</a>
    </div>

  </header>
  <!--header area end-->


  <!--mobile navigation bar start
    <div class="mobile_nav">
      <div class="nav_bar">

        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="#"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="#"><i class="fas fa-file-alt"></i><span>Simulados</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="#"><i class="fas fa-user-alt"></i><span>Conta</span></a>
      </div>
    </div>
    mobile navigation bar end-->

  <!--sidebar start-->
  <div class="menu">
    <center>
      <h4>MENU</h4>
    </center>
    <a href="../inicio.html"><i class="fas fa-home"></i><span>Início</span></a>
    <a href="conteudos.php"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
    <a href="testeniveis.php"><i class="fas fa-file-alt"></i><span>Testes de Nível</span></a>
    <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
    <a href="indicacoes.php"><i class="fas fa-film"></i><span>Indicações</span></a>
    <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
  </div>
  <!--sidebar end-->
  <div class="conteudo">

    <?php
    include 'conecta.php';

    $mat = $_GET['materia'];

    session_start();

    $email_sessao = $_SESSION['email_usuario'];

    //--------------------------------------------------------------------SELECT para o total de acertos (ignorar, pois isso só serve para encher variáveis)

    $AcertosTotais = 0;
    $FaceisTotais = 0;
    $MediasTotais = 0;
    $DificeisTotais = 0;
    $cor = "";

    $consultaUsu0 = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_sessao'";
    $conUsu0 = mysqli_query($conexao, $consultaUsu0);

    while ($mostrarUsu0 = mysqli_fetch_array($conUsu0)) {
      $ID_usuario = $mostrarUsu0['ID_usuario'];
    }

    $consultaCont0 = "SELECT * FROM conteudos WHERE cod_mat LIKE '$mat'";
    $conCont0 = mysqli_query($conexao, $consultaCont0);

    while ($mostrarCont0 = mysqli_fetch_array($conCont0)) {
      $cont = $mostrarCont0['ID_cont'];

      $consultaResp0 = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usuario' AND id_cont LIKE '$cont'";
      $conResp0 = mysqli_query($conexao, $consultaResp0);

      while ($mostrarResp0 = mysqli_fetch_array($conResp0)) {
        $AcertosTotais += $mostrarResp0['acertos'];
        $FaceisTotais += $mostrarResp0['faceis'];
        $MediasTotais += $mostrarResp0['medias'];
        $DificeisTotais += $mostrarResp0['dificeis'];
      }
    }

    //--------------------------------------------------------------------SELECT do Usuário

    $consultaUsu = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_sessao'";
    $conUsu = mysqli_query($conexao, $consultaUsu);

    while ($mostrarUsu = mysqli_fetch_array($conUsu)) {
      echo "<center><h1>GRÁFICOS DE DESEMPENHO DE " . strtoupper($mostrarUsu['nome_usuario']) . "</h1><center><br><br><br>";
      $ID_usuario = $mostrarUsu['ID_usuario'];
    }

    //--------------------------------------------------------------------SELECT da Matéria

    $consultaMat = "SELECT * FROM materias WHERE ID_materia LIKE '$mat'";
    $conMat = mysqli_query($conexao, $consultaMat);

    while ($mostrarMat = mysqli_fetch_array($conMat)) {
      echo "<div class='global'> ";
      echo "<center><h3>" . $mostrarMat['nome_mat'] . " - Geral</h3></center><br>";
      echo "<div class='container4'> ";
      echo "<center>Acertos Totais: $AcertosTotais</center>";
      echo "</div> ";

      echo"<section class='flexbox'>";
          echo "<div class='container1'> ";
          echo "<center>Fáceis: $FaceisTotais </center>";
          echo "</div> ";

          echo "<div class='container2'> ";
          echo "<center>Médias: $MediasTotais </center>";
          echo "</div> ";

          echo "<div class='container3'> ";
          echo "<center>Díficeis: $DificeisTotais </center>";
          echo "</div> ";

      echo"</section>";
      echo "</div>";
    }

    //--------------------------------------------------------------------SELECT do Conteúdo da matéria

    $consultaCont = "SELECT * FROM conteudos WHERE cod_mat LIKE '$mat'";
    $conCont = mysqli_query($conexao, $consultaCont);

    while ($mostrarCont = mysqli_fetch_array($conCont)) {
      echo "<div class='global'>";
      echo "<p>" . $mostrarCont['assunto'] . " | " . $mostrarCont['ano'] . "º Ano </p><br>";

      $cont = $mostrarCont['ID_cont'];

      $consultaResp = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usuario' AND id_cont LIKE '$cont'";
      $conResp = mysqli_query($conexao, $consultaResp);

      while ($mostrarResp = mysqli_fetch_array($conResp)) {

        if ($mostrarResp['acertos'] == "0") { //------------------------Cor para 0 acertos
          $cor = "cor0";
        }

        if ($mostrarResp['acertos'] == "1") { //------------------------Cor para 1 acerto
          $cor = "cor1";
        }

        if ($mostrarResp['acertos'] == "2") { //------------------------Cor para 2 acertos
          $cor = "cor2";
        }

        if ($mostrarResp['acertos'] == "3") { //------------------------Cor para 3 acertos
          $cor = "cor3";
        }

        if ($mostrarResp['acertos'] == "4") { //------------------------Cor para 4 acertos
          $cor = "cor4";
        }

        if ($mostrarResp['acertos'] == "5") { //------------------------Cor para 5 acertos
          $cor = "cor5";
        }

        echo "<div class='container'> ";
        echo "<center><h1>Acertos: " . $mostrarResp['acertos'] . "/5</center></h1><br>";
        echo "<input class='$cor' type='none' readonly='true'><br><br>"; //------------------------Objeto usado como linha do gráfico
        echo "</div> ";

        echo"<section class='flexbox'>";
          echo "<div class='container1'> ";
          echo "<center>Fáceis: " . $mostrarResp['faceis'] . "</center> ";
          echo "</div>";

          echo "<div class='container2'> ";
          echo "<center>Médias: " . $mostrarResp['medias'] . " </center>";
          echo "</div>";

          echo "<div class='container3'> ";
          echo "<center>Difíceis: " . $mostrarResp['dificeis'] . "</center> ";
          echo "</div>";

        echo"</section>";
      }
      echo "</div>";
    }
    ?>
  </div>
</body>

</html>