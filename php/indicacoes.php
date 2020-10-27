<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/indicacoes.css">
    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    

      <header>
      <a href="inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="imagens/inicial/logo3.png"> </a>
      <label for="check">
        <i class="fas fa-align-justify" id="menu_btn"></i>
      </label>
      <div class="direita">
        <a href="#" class="sair">Sair</a>
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
      <a href="inicio.html"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="conteudos.html"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="#"><i class="fas fa-file-alt"></i><span>Testes de Nível</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="php/indicacoes.php"><i class="fas fa-film"></i><span>Indicações</span></a>
      <a href="php/conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->

    <div class="conteudo">

      <!-- DOCUMENTÁRIOS -->

<?php
include 'php/conecta.php';

$consulta = "SELECT * FROM indicacoes WHERE plataforma LIKE '%Documentario%'";
$con = mysqli_query($conexao, $consulta);




      echo "<div class='page-wrapper'>";
        echo "<div class='post-slider'>";
          echo "<h2 class='slider-title'>Documentários</h2>";
          echo "<i class='fas fa-chevron-left prev'></i>";
          echo "<i class='fas fa-chevron-right next'></i>";
            echo "<div class='post-wrapper'>";
			while($mostrar = mysqli_fetch_array($con)) {
              echo "<div class='post'>";
                echo "<img src='imagens/indicacoes/". $mostrar['end_imagem_ind'] ."' alt='' class='slider-image'>";
                echo "<div class='post-info'>";
                  echo "<h3>". $mostrar['titulo'] ."</h3>";
				  echo "<form method='POST' action='exibir_indicacoes.php'>";
				  echo "<input type='hidden' name='id' value='". $mostrar['ID_ind'] ."'>";
				  echo "<input type='submit' name='sub' value='Ver Indicação'>";
				  echo "</form>";
                echo "</div>";
              echo "</div>";
			}
            echo "</div>";
        echo "</div>";
      echo "</div>";
?>
<br>
	<!-- 1 - SERIES -->
  <?php
include 'php/conecta.php';

$consulta = "SELECT * FROM indicacoes WHERE plataforma LIKE '%Serie%'";
$con = mysqli_query($conexao, $consulta);




      echo "<div class='page-wrapper'>";
        echo "<div class='post-slider'>";
          echo "<h2 class='slider-title'>Séries</h2>";
          echo "<i class='fas fa-chevron-left prev'></i>";
          echo "<i class='fas fa-chevron-right next'></i>";
            echo "<div class='post-wrapper'>";
			while($mostrar = mysqli_fetch_array($con)) {
              echo "<div class='post'>";
                echo "<img src='imagens/indicacoes/". $mostrar['end_imagem_ind'] ."' alt='' class='slider-image'>";
                echo "<div class='post-info'>";
                  echo "<h3>". $mostrar['titulo'] ."</h3>";
				  echo "<form method='POST' action='exibir_indicacoes.php'>";
				  echo "<input type='hidden' name='id' value='". $mostrar['ID_ind'] ."'>";
				  echo "<input type='submit' name='sub' value='Ver Indicação'>";
				  echo "</form>";
                echo "</div>";
              echo "</div>";
			}
            echo "</div>";
        echo "</div>";
      echo "</div>";
?>
  <!-- 2 - FILMES -->

<?php
include 'php/conecta.php';

$consulta = "SELECT * FROM indicacoes WHERE plataforma LIKE '%Filme%'";
$con = mysqli_query($conexao, $consulta);




      echo "<div class='page-wrapper'>";
        echo "<div class='post-slider'>";
          echo "<h2 class='slider-title'>Filmes</h2>";
          echo "<i class='fas fa-chevron-left prev'></i>";
          echo "<i class='fas fa-chevron-right next'></i>";
            echo "<div class='post-wrapper'>";
			while($mostrar = mysqli_fetch_array($con)) {
              echo "<div class='post'>";
                echo "<img src='imagens/indicacoes/". $mostrar['end_imagem_ind'] ."' alt='' class='slider-image'>";
                echo "<div class='post-info'>";
                  echo "<h3>". $mostrar['titulo'] ."</h3>";
				  echo "<form method='POST' action='exibir_indicacoes.php'>";
				  echo "<input type='hidden' name='id' value='". $mostrar['ID_ind'] ."'>";
				  echo "<input type='submit' name='sub' value='Ver Indicação'>";
				  echo "</form>";
                echo "</div>";
              echo "</div>";
			}
            echo "</div>";
        echo "</div>";
      echo "</div>";
?>
      <!-- 3 - LIVROS -->

      <?php
include 'php/conecta.php';

$consulta = "SELECT * FROM indicacoes WHERE plataforma LIKE '%Livro%'";
$con = mysqli_query($conexao, $consulta);




      echo "<div class='page-wrapper'>";
        echo "<div class='post-slider'>";
          echo "<h2 class='slider-title'>Livros</h2>";
          echo "<i class='fas fa-chevron-left prev'></i>";
          echo "<i class='fas fa-chevron-right next'></i>";
            echo "<div class='post-wrapper'>";
			while($mostrar = mysqli_fetch_array($con)) {
              echo "<div class='post'>";
                echo "<img src='imagens/indicacoes/". $mostrar['end_imagem_ind'] ."' alt='' class='slider-image'>";
                echo "<div class='post-info'>";
                  echo "<h3>". $mostrar['titulo'] ."</h3>";
				  echo "<form method='POST' action='exibir_indicacoes.php'>";
				  echo "<input type='hidden' name='id' value='". $mostrar['ID_ind'] ."'>";
				  echo "<input type='submit' name='sub' value='Ver Indicação'>";
				  echo "</form>";
                echo "</div>";
              echo "</div>";
			}
            echo "</div>";
        echo "</div>";
      echo "</div>";
?>

    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <!-- <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script> -->

  </body>
</html>