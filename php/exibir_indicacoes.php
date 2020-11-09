<?php
include 'conecta.php';

$IDindicacao=$_GET["id"];

$consulta = "SELECT * FROM indicacoes WHERE ID_ind LIKE '%$IDindicacao%'";
$con = mysqli_query($conexao, $consulta);

while($mostrar = mysqli_fetch_array($con)) {
	echo "Plataforma: ". $mostrar['plataforma'] ."<br>";
	echo "Título: ". $mostrar['titulo'] ."<br>";
	echo "Autor: ". $mostrar['autor'] ."<br>";
	echo "Descrição: ". $mostrar['descricao'] ."<br>";
	echo "<img src='../imagens/indicacoes/" . $mostrar['end_imagem_ind'] . "'<br>";
}
?>
<input type="button" value="Voltar" onClick="location. href='indicacoes.php'">