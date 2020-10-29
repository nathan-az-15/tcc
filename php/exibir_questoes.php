<?php
include 'conecta.php';

$consulta = "SELECT * FROM questoes";
$con = mysqli_query($conexao, $consulta);

while($mostrar = mysqli_fetch_array($con)) {
    echo "". $mostrar['enunciado'] ."<br>";
    echo "<img src='../imagens/indicacoes/" . $mostrar['end_imagens_quest'] . "'<br><br>";
	echo "". $mostrar['alt_a'] ."<br>";
	echo "". $mostrar['alt_b'] ."<br>";
	echo "". $mostrar['alt_c'] ."<br>";
    echo "". $mostrar['alt_d'] ."<br>";
    if($mostrar['alt_e'] != ""){
    echo "". $mostrar['alt_e'] ."<br>";
    }
    echo "". $mostrar['alt_correta'] ."<br>";
    echo "". $mostrar['explicacao'] ."<br>";
}
?>