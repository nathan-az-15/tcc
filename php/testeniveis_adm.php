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
      <a href="../inicio_adm.html"><img style="float:left; margin-left: 68px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"></a>
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
    <a href="../inicio_adm.html"><i class="fas fa-home"></i><span>Início</span></a>
    <a href="conteudos_adm.php"><i class="fas fa-book-open"></i><span>Cadastrar Conteúdo</span></a>
    <a href="testeniveis_adm.php"><i class="fas fa-file-alt"></i><span>Cadastrar Questão</span></a>
    <a href="includeindicacoes.php"><i class="fas fa-film"></i><span>Cadastrar Indicação</span></a>
    <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
  </div>
  <!--sidebar end-->

  <div class="conteudo">
    <div class="nome">
      <p> Testes de Nível </p>
      <hr style="width: 116%; height: 7%; margin-left: -5%;">
    </div>
    <?php
            session_start();
            ?>
    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content">
            <center><img src="../imagens/testesniveis/matematica.png" style="margin-top: 18%;"></center>
            <center><h3 style="opacity: 0.8;">Matemática</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de matemática.</p>
            <a href="anos_testeniveis_adm.php?materia=2">Cadastrar Questões</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content">
            <center><img src="../imagens/testesniveis/portugues.png" style="margin-top: 18%;"></center>
            <center><h3 style="opacity: 0.8;">Português</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de português.</p>
            <a href="anos_testeniveis_adm.php?materia=1">Cadastrar Questões</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.5;">
            <center><img src="../imagens/testesniveis/biologia.png" style="margin-top: 23%;"></center>
            <center><h3 style="opacity: 1;">Biologia</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de biologia.</p>
            <a href="anos_testeniveis_adm.php?materia=5">Cadastrar Questões</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.5;">
            <center><img src="../imagens/testesniveis/fisica.png" style="margin-top: 18%;"></center>
            <center><h3 style="opacity: 1;">Física</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de física.</p>
            <a href="anos_testeniveis_adm.php?materia=7">Cadastrar Questões</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.5;">
            <center><img src="../imagens/testesniveis/quimica.png" style="margin-top: 20%;"></center>
            <center><h3 style="opacity: 1;">Química</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
  
            <p>Selecione este card se desejar cadastrar questões de química.</p>
            <a href="anos_testeniveis_adm.php?materia=6">Cadastrar Questões</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.9;">
            <center><img src="../imagens/testesniveis/geografia.png" style="margin-top: 20%;"></center>
            <center><h3 style="opacity: 0.6;">Geografia</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de geografia.</p>
            <a href="anos_testeniveis_adm.php?materia=4">Cadastrar Questões</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content" style="opacity: 0.9;">
            <center><img src="../imagens/testesniveis/historia.png" style="margin-top: 20%;"></center>
            <center><h3 style="opacity: 0.7;">História</h3></center>
          </div>
        </div>
        <div class="face face2">
          <div class="content">

            <p>Selecione este card se desejar cadastrar questões de história.</p>
            <a href="anos_testeniveis_adm.php?materia=3">Cadastrar Questões</a>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br>

  </div>

</body>

</html>