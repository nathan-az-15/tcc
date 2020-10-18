<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	</head>
<body>
<?php
include 'conecta.php';

$nome=$_POST["nome_m"];

$sql = "INSERT INTO materias VALUES";
$sql .= "(DEFAULT, '$nome')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de matérias" onClick="location. href='includematerias.php'">
</body>
</html>