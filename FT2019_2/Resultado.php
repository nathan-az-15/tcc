<!DOCTYPE html>
<html lang = "pt-br">

	<head>

		<title> Resultados </title>
		
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

		<link rel = "stylesheet" type = "text/css" href = "css/Pag.css">

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Google+Sans">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

	<?php
    
	$m = $_REQUEST["m"];
	$s = $_REQUEST["s"];
	$h = $_REQUEST["h"];
	$r = $_REQUEST["r"];
    
	?>
    
    <body>

        <div id = "resultado">

			<div id = "SubResultado">

				<main>

					<div class = "SubMain">
						
						<h1> Resultados </h1>
						
						<table>

							<thead>

								<tr class = "TrTitulo">
									<td class = "td1"> Pontuação </td>
									<td class = "td2"> Tempo </td>
								</tr>

							</thead>
							<tbody>

								<tr class = "TrDados">
									<td class = "td1"> <?php echo $r; ?> </td>
									<td class = "td2"> <?php echo "$h$m$s"; ?></td>
								</tr>

							</tbody>

						</table>

						<div id = "FormJogador">

							<h2> Digite seu nome para salvar sua pontuação no ranking </h2>

							<form name = "CadastroQuiz" method = "POST" action = "Dados.php">

								<input type = "text" name = "NomeJogador" placeholder = "Nome" required/>
								<input type = "hidden" name = "resposta" value = "<?php echo $r; ?>">
								<input type = "hidden" name = "tempo" value = "<?php echo "$h$m$s"; ?>">

								<div>
									<input type = "submit" value = "Enviar"/>
								</div>

							</form>

						</div>

					</div>

				</main>

			</div>

		</div>

    </body>

</html>