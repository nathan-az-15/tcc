<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	</head>
<body>
<?php
include 'conecta.php';

$NomeUsu=$_POST["nome_usuario"];
$DataUsu=$_POST["data_usuario"];
$SenhaUsu=$_POST["senha_usuario"];
$EscolaUsu=$_POST["escola_usuario"];
$SerieUsu=$_POST["serie_usuario"];
$EmailUsu=$_POST["email_usuario"];

$sql = "INSERT INTO usuario VALUES";
$sql .= "(DEFAULT, '$NomeUsu', '$DataUsu', '$EscolaUsu', '$EmailUsu', '$SenhaUsu', '$SerieUsu')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro e login" onClick="location. href='login.php'">
</body>
</html>