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

$sql = "INSERT INTO conteudos VALUES";
$sql .= "(DEFAULT, '$texto', '$materia', 1, '$ano', '$assunto')";

	if($conexao->query($sql) == TRUE){
		echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
	} else {
		echo "Erro: ". $sql ."<br>" . $conexao->error;
	}

$arquivos = $_FILES['imagem_c'];
$nomes = $arquivos['name'];

$sql_id = "SELECT * FROM conteudos where texto like '%".$texto."%' and assunto like '%".$assunto."%'";
$cod = mysqli_query($conexao,$sql_id);
$mostrar = mysqli_fetch_array($cod);
$ID = $mostrar['ID_cont'];
//VER COM DELLA

if(isset($_FILES['imagem_c'])){
	for ($i = 0; $i<count($nomes);$i++) {
	
	$mover = move_uploaded_file($_FILES["imagem_c"]["tmp_name"][$i], '../imagens/imgconteudo/'.$nomes[$i]);

		$sql_imagem = "INSERT INTO imagens VALUES ('$nomes[$i]', NULL, $ID)";

		if($conexao->query($sql_imagem) == TRUE){
			echo "";
		} else {
			echo "Erro: ". $sql ."<br>" . $conexao->error;
		}
	}
}
else{}
	$conexao->close();
?>
<input type="button" value="Voltar para a página de cadastro de conteúdos" onClick="location. href='conteudos_adm.php'">
</body>
</html>