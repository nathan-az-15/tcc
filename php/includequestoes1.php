<html>
	<head>
	<meta charset="UTF-8">
	</head>
<body>
<?php
include 'conecta.php';
session_start();
$conteudo=$_POST["conteudo_q"];
$dificuldade=$_POST["dificuldade_q"];
$enunciado=$_POST["enunciado_q"];
$enunciado=mysqli_real_escape_string($conexao, $enunciado);
$alta=$_POST["alta_q"];
$alta=mysqli_real_escape_string($conexao, $alta);
$altb=$_POST["altb_q"];
$altb=mysqli_real_escape_string($conexao, $altb);
$altc=$_POST["altc_q"];
$altc=mysqli_real_escape_string($conexao, $altc);
$altd=$_POST["altd_q"];
$altd=mysqli_real_escape_string($conexao, $altd);
$alte=$_POST["alte_q"];
$alte=mysqli_real_escape_string($conexao, $alte);
$altcorreta=$_POST["altcorreta"];
$explicacao=$_POST["explicacao_q"];
$ano=$_GET["ano"];
$destino = '../imagens/imgquestao/' . $_FILES['imagem_q']['name'];
 
$arquivo_tmp = $_FILES['imagem_q']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);

$imagem = $_FILES['imagem_q']['name'];

	$sql = "INSERT INTO questoes VALUES";
	$sql .= "(DEFAULT, '$imagem', '$enunciado', '$alta', '$altb', '$altc', '$altd', '$alte', '$altcorreta', '$explicacao', '$conteudo', 1, '$ano', '$dificuldade')";

	if($conexao->query($sql) == TRUE){
		echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
	} else {
		echo "Erro: ". $sql ."<br>" . $conexao->error;
	}

	$conexao->close();

?>
<input type="button" value="Voltar para a página de cadastro de questões" onClick="location. href='testeniveis_adm.php'">
</body>
</html>