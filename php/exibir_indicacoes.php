<?php
include 'conecta.php';

$IDindicacao=$_GET["id"];
$plat="";

$consulta = "SELECT * FROM indicacoes WHERE ID_ind LIKE '$IDindicacao'";
$con = mysqli_query($conexao, $consulta);

while($mostrar = mysqli_fetch_array($con)) {

	if($mostrar['plataforma'] == "Serie"){
		$plat = "Série";
	}

	if($mostrar['plataforma'] == "Documentario"){
		$plat = "Documentário";
	}

	if($mostrar['plataforma'] == "Livro"){
		$plat = "Livro";
	}

	if($mostrar['plataforma'] == "Filme"){
		$plat = "Filme";
	}

	echo "
	<div class='blog-card'>
        <div class='inner-part'>
            <label for='tapImg' class='img'>";
			echo "<img src='../imagens/indicacoes/" . $mostrar['end_imagem_ind'] . "'";
		echo "
        </label>
            <div class='content'>
                <span>". $plat ." | " . $mostrar['autor'] ." </span>
                <div class='title'> ". $mostrar['titulo'] . "</div>
                <div class='text'> ". $mostrar['descricao'] ."</div>
                <button>Voltar</button>
            </div>
        </div>
	</div>";
	
	echo "Plataforma: ". $plat ."<br>";
	echo "Título: ". $mostrar['titulo'] ."<br>";
	echo "Autor: ". $mostrar['autor'] ."<br>";
	echo "Descrição: ". $mostrar['descricao'] ."<br>";
	echo "<img src='../imagens/indicacoes/" . $mostrar['end_imagem_ind'] . "'<br>";
}
?>
<input type="button" value="Voltar" onClick="location. href='indicacoes.php'">