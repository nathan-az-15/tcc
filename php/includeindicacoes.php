<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	<title>Cadastro de Indicações</title>
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
<form method="POST" class="form" action="includeindicacoes1.php" enctype="multipart/form-data">

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="plataforma_i" maxlength="70" placeholder="Digite a plataforma da indicação" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="titulo_i" maxlength="70" placeholder="Digite o título da indicação" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="autor_i" maxlength="100" placeholder="Digite o autor da indicação" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="descricao_i" placeholder="Digite a descrição da indicação" required>
		</label>

		<input type="submit" class="btn btn-second" value="Cadastrar Indicação">
</form>


</center>
</body>
</html>