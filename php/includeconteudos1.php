<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	</head>
<body>
<?php
include 'php/conecta.php';

$texto=$_POST["texto_c"];
$assunto=$_POST["assunto_c"];
$ano=$_POST["ano_c"];

$destino = 'imgconteudo/' . $_FILES['imagem_c']['name'];
 
$arquivo_tmp = $_FILES['imagem_c']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);

$imagem = $_FILES['imagem_c']['name'];

$sql = "INSERT INTO conteudos VALUES";
$sql .= "(DEFAULT, '$texto', '$imagem', '1', '1', '$ano', '$assunto')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de conteúdos" onClick="location. href='includeconteudos.php'">
</body>
</html>