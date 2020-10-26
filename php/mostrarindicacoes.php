<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	<title>Listagem de Indicações</title>
	<script src="https://kit.fontawesome.com/faf083a5ac.js" crossorigin="anonymous"></script>
		<script>
	function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
	function limpar(){
	alert("Os dados serão limpados");
	}
	</script>
</head>
<body>
<center>
<?php
include 'conecta.php';

$consulta = "SELECT * FROM indicacoes ORDER BY titulo asc ";
$con = mysqli_query($conexao, $consulta);
while($mostrar = mysqli_fetch_array($con)) {
echo "<div name='div_mostrar_indicacoes'>";

echo "". $mostrar['plataforma'] ."";












echo "</div>";
}

?>


</center>
</body>
</html>