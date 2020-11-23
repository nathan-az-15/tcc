<?php
            $conn = mysqli_connect('127.0.0.1', 'root', '') or die("Não foi possível a conexão com o Banco");
            $db = mysqli_select_db($conn,'bd_reo_tcc') or die("Não foi possível selecionar o Banco");
            $query = "SELECT * FROM responde";
            $result = mysqli_query($conn, $query);
            $chart_data = '';
            while($row = mysqli_fetch_array($result)){
              $chart_data .="{acertos:'".$row["acertos"]."', faceis:".$row["faceis"]."medias:".$row["medias"].",
                dificeis:".$row["dificeis"]."}, ";
            }
            $chart_data = substr ($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" type="text/css" href="../css/cont_especifico.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/lins/morris.js/0.5.1/morris.css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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
    <br><br>
    <div class="container" style="width:900px;">
            <h2 align="center">Desempenho Geral</h2>
            <br><br>
            <div id="chart"></div>
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
<script>
  Morris.Bar({
    element: 'chart',
    data:[<?php echo $acertos; ?>],
    xkey:'acertos',
    ykeys:['faceis', 'medios', 'dificeis'],
    labels:['faceis', 'medios', 'dificeis'],
    hideHover:'auto',
  }) ; 
</script>  