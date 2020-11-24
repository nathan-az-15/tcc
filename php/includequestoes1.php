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

$sql = "INSERT INTO questoes VALUES";
	$sql .= "(DEFAULT, '$enunciado', '$alta', '$altb', '$altc', '$altd', '$alte', '$altcorreta', '$explicacao', $conteudo, 1, $ano, $dificuldade)";

	if($conexao->query($sql) == TRUE){
		echo "<center><br><br><br><br><br><br><br><br><h1>Sucesso!</h1>";
	} else {
		echo "Erro: ". $sql ."<br>" . $conexao->error;
	}

$arquivos = $_FILES['imagem_q'];
$nomes = $arquivos['name'];

$sql_id = "SELECT * FROM questoes where enunciado like '%".$enunciado."%' and alt_a like '%".$alta."%'";
$cod = mysqli_query($conexao,$sql_id);
$mostrar = mysqli_fetch_array($cod);
$ID = $mostrar['ID_questoes'];

if(isset($_FILES['imagem_q'])){
for ($i = 0; $i<count($nomes);$i++) {
 
   $mover = move_uploaded_file($_FILES["imagem_q"]["tmp_name"][$i], '../imagens/imgquestao/'.$nomes[$i]);

	$sql_imagem = "INSERT INTO imagens VALUES ('$nomes[$i]', $ID, NULL)";

	if($conexao->query($sql_imagem) == TRUE){
		echo "";
	} else {
		echo "Erro: ". $sql ."<br>" . $conexao->error;
	}
 }
}

	$conexao->close();

?>
<input type="button" value="Voltar para a página de cadastro de questões" onClick="location. href='testeniveis_adm.php'">
</body>
</html>