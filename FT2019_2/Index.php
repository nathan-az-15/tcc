<!DOCTYPE html>
<html lang = "pt-br">

	<head>

		<title> Home </title>
		
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

		<link rel = "stylesheet" type = "text/css" href = "css/Pag.css">

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Google+Sans">

		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		
			$(document).ready(function(){

				$("li").removeClass("NavActive");
				$("#NavHome").addClass("NavActive");

			});	
		
		</script>

	</head>

	<body>

		<div id = "welcome">

			<div id = "SubWelcome">

				<?php include "resources/Header.php"; ?>

				<main>

					<div class = "SubMain">
						
						<h1> Quiz </h1>
						<p>
							A partir de pesquisas sobre o tema Sistema Solar, foi analisado que, existem diversas questões e curiosidades que não são do saber de todos. Baseando-se nisso, a turma do 2º ETIM de Informática desenvolveu um Quiz com perguntas e alternativas sobre o nosso sistema solar.
						</p>
						<span class = "btn">
							<a href = "Jogo.php"> Jogar </a>
						</span>

					</div>

				</main>

				<footer>

					<div class = "SubFooter">

						<ul>
							<li> Desenvolvido por 2º ETIM Informática 2019 </li>
						</ul>

					</div>

				</footer>

			</div>

		</div>

	</body>

</html>