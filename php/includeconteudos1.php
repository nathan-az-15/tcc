<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	</head>
<body>
<?php
include 'conecta.php';
session_start();//falta ser aberta na pagina dos conteudo e de anos do adm
$texto=$_POST["texto_c"];
$texto=mysqli_real_escape_string($conexao, $texto);
$assunto=$_POST["assunto_c"];
$ano = $_GET["ano"];
$materia = $_GET['materia'];

$destino = '../imagens/imgconteudo/' . $_FILES['imagem_c']['name'];
 
$arquivo_tmp = $_FILES['imagem_c']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);

$imagem = $_FILES['imagem_c']['name'];

$sql = "INSERT INTO conteudos VALUES";
$sql .= "(DEFAULT, '$texto', '$imagem', '$materia', 1, '$ano', '$assunto')";

if($conexao->query($sql) == TRUE){
	echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
} else {
	echo "Erro: ". $sql ."<br>" . $conexao->error;
}

$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de conteúdos" onClick="location. href='conteudos_adm.php'">
</body>
</html>