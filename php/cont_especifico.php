<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conteúdos | Reforço+</title>
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" type="text/css" href="../css/cont_especifico.css">

    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

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
            $conn = mysqli_connect('127.0.0.1', 'root', '') or die("Não foi possível a conexão com o Banco");
            $db = mysqli_select_db($conn,'bd_reo_tcc') or die("Não foi possível selecionar o Banco");

            $cod_assunto = $_GET['assunto'];

            $sql = "SELECT * FROM conteudos where ID_cont like '".$cod_assunto."%'";
            $cod = mysqli_query($conn,$sql);

            

            $numRegistros = mysqli_num_rows($cod);
            if ($numRegistros != 0) {
              echo "<section class='flexbox'>";
              while ($text = mysqli_fetch_object($cod)) {
                $texto=$text->texto;
                $texto=utf8_encode($texto);
                $assunto=$text->assunto;
                $assunto=utf8_encode($assunto);
                   echo "<center><h1>".$assunto."</h1>
                   <br><br><div class='texto'>".nl2br($texto).

                   "</div><br><br>";
                   $consulta_imagem = "SELECT * FROM imagens WHERE ID_cont LIKE '$cod_assunto'";
                      $con_imagem = mysqli_query($conexao, $consulta_imagem);
                      
                      
                   
                     
                    while ($mostrar_imagem = mysqli_fetch_object($con_imagem)) {
                      
                        echo "<center><img src='../imagens/imgconteudo/" . $mostrar_imagem->end_imagem  . "'></center><br><br>";
                    
                }
                }
                echo "</center></section>";
              }
            else{
                echo "Nenhum registro";
            }

        ?>
 </div>
   <!--<script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>-->

</body>
</html>
