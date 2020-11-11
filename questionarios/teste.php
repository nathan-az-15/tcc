<html>
    <head>	<link rel="stylesheet" href="exibir_indicacoes.css">
</head>
<body>
<?php
include '../php/conecta.php';

$IDindicacao=$_GET["id"];

$consulta = "SELECT * FROM indicacoes WHERE ID_ind LIKE '%$IDindicacao%'";
$con = mysqli_query($conexao, $consulta);

while($mostrar = mysqli_fetch_array($con)) {
	
	echo "<section class='indicacao'>
	       <ul class='lista'>
          <div class= 'conteudo'>
            <li class='titulo'><h1>". $mostrar['titulo'] ."</h1>
            </li>
            <li class= 'texto'>
              <div class='txt'>
                Plataforma: ". $mostrar['plataforma'] ."<br>
                Autor: ". $mostrar['autor'] ."<br>
                Descrição: ". $mostrar['descricao'] ."kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
              </div>
            </li>
            <li class= 'imagem'>
            <div>
              <img src='../imagens/indicacoes/". $mostrar['end_imagem_ind'] ." ' width='300px' height='auto'>
            </div>
            </li>
          </div>
        </ul>
     </section>";
	}

?>
</body>
</html>