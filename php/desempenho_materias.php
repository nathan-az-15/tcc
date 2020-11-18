<?php
    include 'conecta.php';

    $consulta = "SELECT * FROM responde";
    $con = mysqli_query($conexao, $consulta);
    //Aqui você opode adicionar a programação Della, qualquer coisa você me chama
?>
<html>
    <head>
        <title>Reforço Escolar Online | R.E.O</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.ain.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/inicio.css">
        <link rel="stylesheet" href="../css/exibirindicacao.css">
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
        <!-- Gráfico -->
        <br /> <br />
        <div class="container" style="width:900px">
            <h2 align="center">Desempenho geral de matérias</h2>
            <br /> <br />
            <div id="chart"></div>
        </div>
    </body>
</html>

<script>
    
</script>