<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	</head>
<body>
<?php
include 'conecta.php';

$plataforma=$_POST["plataforma_i"];
$titulo=$_POST["titulo_i"];
$autor=$_POST["autor_i"];
$descricao=$_POST["descricao_i"];

$sql = "INSERT INTO indicacoes VALUES";
$sql .= "(DEFAULT, '$plataforma', '$titulo', '$autor', '$descricao', 'cod_mat', 'cod_adm')";

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