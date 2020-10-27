<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Cadastro de Matérias</title>
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
<input type="button" value="Administrador" onClick="location. href='includeadministrador.php'">
<input type="button" value="Conteúdos" onClick="location. href='includeconteudos.php'">
<input type="button" value="Questões" onClick="location. href='includequestoes.php'">
<input type="button" value="Matérias" onClick="location. href='includematerias.php'">
<input type="button" value="Indicações" onClick="location. href='includeindicacoes.php'">
<br><br><br>
<form method="POST" class="form" action="includematerias1.php" enctype="multipart/form-data">

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="nome_m" maxlength="15" placeholder="Digite o nome da matéria" required>
		</label>

		<input type="submit" class="btn btn-second" value="Cadastrar Matéria">
</form>
</center>
</body>
</html>