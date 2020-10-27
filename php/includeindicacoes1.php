<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	</head>
<body>
<?php
include 'conecta.php';

$plataforma=$_POST["plataforma_i"];
$titulo=$_POST["titulo_i"];
$autor=$_POST["autor_i"];
$descricao=$_POST["descricao_i"];

$destino = 'imagens/indicacoes/' . $_FILES['imagem_i']['name'];
 
$arquivo_tmp = $_FILES['imagem_i']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);

$imagem = $_FILES['imagem_i']['name'];

$sql = "INSERT INTO indicacoes VALUES";
$sql .= "(DEFAULT, '$plataforma', '$titulo', '$autor', '$descricao', '1', '1', '$imagem')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de indicações" onClick="location. href='includeindicacoes.php'">
</body>
</html>