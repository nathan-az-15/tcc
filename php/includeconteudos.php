<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
	<link rel="stylesheet" href="../css/inicio.css">
		<link rel="stylesheet" href="../css/include_cont_ind.css">
	
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
      <a href="../inicio_adm.html"><i class="fas fa-home"></i><span>Início</span></a>
    <a href="conteudos_adm.php"><i class="fas fa-book-open"></i><span>Cadastrar Conteúdo</span></a>
    <a href="testeniveis_adm.php"><i class="fas fa-file-alt"></i><span>Cadastrar Questão</span></a>
    <a href="includeindicacoes.php"><i class="fas fa-film"></i><span>Cadastrar Indicação</span></a>
    <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->
<div class="nome">
        <p> Cadastro Conteúdo </p>
        <hr style="width: 102%; height: 7%; margin-left: -5%;">
        </div>
<div class="conteudo">

<?php
    $ano = $_GET["ano"];
    $materia = $_GET['materia'];    
      ?>

<form method="POST" class="form" action="includeconteudos1.php?materia=<?= $materia?>&ano=<?= $ano?>" enctype="multipart/form-data">
		
		
		<label for="exampleInputEmail1">Selecione uma imagem para acompanhar o conteúdo (se possuir)
		<input type="file" onchange="preview_image(event)" name="imagem_c" accept=".png, .jpg, .jpeg, .gif">
		<img class="imagem" id="output_image"/>
		</label>
		<br>
		<br>
    Digite o texto do conteúdo:
    <font size=5 color=#FF0000> *</font>
		<label class="label-input" for="">
        <textarea type="text" class="texto" name="texto_c" style="text-align:lef" required></textarea>
		</label>
        <br>
    <br>
    
    Digite o assunto do conteúdo:
    <font size=5 color=#FF0000> *</font>
		<label class="label-input" for="">
        <input type="text" class="assunto" name="assunto_c" maxlength="70" style="text-align: left" required>
		</label>
        <br>
        <br>
		<center>
		<input type="submit" class="btn btn-second" value="Cadastrar Conteúdo">
		</center>
</form>
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
