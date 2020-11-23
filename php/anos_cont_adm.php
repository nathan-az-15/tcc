<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8"> 
  <title>Conteúdos ADM | Reforço+</title>
  <link rel="stylesheet" href="../css/anos.css">
  <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

</head>

<body style="overflow: hidden">

  <input type="checkbox" id="check">
  <!--header area start-->


  <header>
    <a href="../inicio_adm.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"></a>
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

  <div class="nome">
    <p> Selecione a série </p>
    <hr style="width: 102%; height: 7%; margin-left: -5%;">
  </div>

  <div class="conteudo">
    <?php
    $materia = $_GET['materia'];
    ?>
    <section class='flexbox'>

      <div class="container1" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="includeconteudos.php?materia=<?= $materia?>&ano=1" style="text-decoration: none">
          <div class="hoverdiv">
            
            <p> Selecione este card para cadastrar conteúdos referentes ao 1º ano </p>
          </div>
        </a>
      </div>

      <div class="container2" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="includeconteudos.php?materia=<?= $materia?>&ano=2" style="text-decoration: none">
          <div class="hoverdiv">
            
            <p> Selecione este card para cadastrar conteúdos referentes ao 2º ano </p>
          </div>
        </a>
      </div>

      <div class="container3" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="includeconteudos.php?materia=<?= $materia?>&ano=3" style="text-decoration: none">
          <div class="hoverdiv">
            
            <p>Selecione este card para cadastrar conteúdos referentes ao 3º ano </p>
          </div>
        </a>
      </div>

    </section>

</body>

</html>