<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Reforço+ | Reforço Escolar Online</title>
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
	<!--sidebar end-->
	<div class="nome">
		<p> Indicação </p>
		<hr style="width: 102%; height: 7%; margin-left: -5%;">
	</div>

	<div class="conteudo1">

		<?php
		include 'conecta.php';

		$IDindicacao = $_GET["id"];
		$plat = "";

		$consulta = "SELECT * FROM indicacoes WHERE ID_ind LIKE '$IDindicacao'";
		$con = mysqli_query($conexao, $consulta);

		while ($mostrar = mysqli_fetch_array($con)) {

			echo "<div class='blog-card'>
        		<div class='inner-part'>
            	<label for='tapImg' class='img'>
				<img src='../imagens/indicacoes/" . $mostrar['end_imagem_ind'] . "'></img>
        		</label>
            		<div class='content'>
                		<span>" . $mostrar['plataforma'] . " | " . $mostrar['autor'] . " </span>
                			<div class='title'> " . $mostrar['titulo'] . "</div>
                			<div class='text'> " . $mostrar['descricao'] . "</div>
                			<a href='indicacoes.php'>Voltar</a>
            		</div>
				</div>
			</div>";
		}
		?>
	</div>
</body>

</html>