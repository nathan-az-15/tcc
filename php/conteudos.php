<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Reforço Escolar Online | R.E.O</title>
  <link rel="stylesheet" href="../css/conteudo.css">
  <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->


  <header>
    <a href="../inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"></a>
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

  <div class="nome">
    <p> Conteúdos </p>
    <hr style="width: 102%; height: 7%; margin-left: -5%;">
  </div>

  <div class="conteudo">
    <?php
    session_start();
    ?>
    <section class='flexbox'>

      <div class="container1" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 2;
            ?>
            <p> Matemática </p>
          </div>
        </a>
      </div>

      <div class="container2" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 1;
            ?>
            <p> Português </p>
          </div>
        </a>
      </div>

      <div class="container3" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 8%; margin-bottom: 5%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 5;
            ?>
            <p> Biologia </p>
          </div>
        </a>
      </div>

    </section>

    <section class='flexbox'>
      <div class="container4" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 5%; margin-bottom: 6%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 7;
            ?>
            <p> Física </p>
          </div>
        </a>
      </div>

      <div class="container5" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 5%; margin-bottom: 6%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 6;
            ?>
            <p> Química </p>
          </div>
        </a>
      </div>

      <div class="container6" style="width: 350px; height: 220px; margin-left: 2%; margin-right: 2%; margin-top: 5%; margin-bottom: 6%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 4;
            ?>
            <p> Geografia </p>
          </div>
        </a>
      </div>

    </section>

    <section class='flexbox'>
      <div class="container7" style="width: 310px; height: 220px; margin-left: 2%; margin-right: 1%; margin-top: 5%;">
        <a href="anos_cont.php" style="text-decoration: none">
          <div class="hoverdiv">
            <?php
            $_SESSION['materia'] = 3;
            ?>
            <p > História </p>
          </div>
        </a>
      </div>
    </section>

  </div>

</body>

</html>