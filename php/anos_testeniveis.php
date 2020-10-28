<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Reforço Escolar Online | R.E.O</title>
  <link rel="stylesheet" href="../css/testeniveis.css">
  <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

</head>

<body>
  
  <input type="checkbox" id="check">
  <!--header area start-->
  

    <header>
      <a href="../inicio.html"><img style="float:left; margin-left: 68px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"></a>
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

    <div class="nome">
      <p> Testes de Nível </p>
      <hr style="width: 113%; height: 7%; margin-left: -5%;">
    </div>
    <?php
            session_start();
            ?>
    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content">
            <center><img src="../imagens/testesniveis/matematica.png" style="margin-top: 18%;"></center>
            <center><h3 style="opacity: 0.8;">1° ano</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
          <?php
            $_SESSION['ano']=1;
            ?>
            <p>Selecione este card se desejar realizar os testes de nível de matemática.</p>
            <a href="lista_testeniveis.php">Fazer testes</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content">
            <center><img src="../imagens/testesniveis/portugues.png" style="margin-top: 18%;"></center>
            <center><h3 style="opacity: 0.8;">2° ano</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
          <?php
            $_SESSION['ano']=2;
            ?>
            <p>Selecione este card se desejar realizar os testes de nível de português.</p>
            <a href="lista_testeniveis.php">Fazer testes</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.5;">
            <center><img src="../imagens/testesniveis/biologia.png" style="margin-top: 23%;"></center>
            <center><h3 style="opacity: 1;">3° ano</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
          <?php
            $_SESSION['ano']=2;
            ?>
            <p>Selecione este card se desejar realizar os testes de nível de biologia.</p>
            <a href="lista_testeniveis.php">Fazer testes</a>
          </div>
        </div>
      </div>
    </div>

    
    <br><br><br><br><br><br><br>

  </div>

</body>

</html>