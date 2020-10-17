<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	</head>
<body>
<?php
include 'conecta.php';

$enunciado=$_POST["enunciado_q"];
$alta=$_POST["alta_q"];
$altb=$_POST["altb_q"];
$altc=$_POST["altc_q"];
$altd=$_POST["altd_q"];
$alte=$_POST["alte_q"];
$altcorreta=$_POST["altcorreta"];
$explicacao=$_POST["explicacao_q"];

$destino = 'imgquestao/' . $_FILES['imagem_q']['name'];
 
$arquivo_tmp = $_FILES['imagem_q']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);

$imagem = $_FILES['imagem_q']['name'];

$sql = "INSERT INTO questoes VALUES";
$sql .= "(DEFAULT, '$imagem', '$enunciado', '$alta', '$altb', '$altc', '$altd', '$alte', '$altcorreta', '$explicacao')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de questões" onClick="location. href='includequestoes.php'">
</body>
</html>