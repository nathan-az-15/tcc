<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	<title>Cadastro de Administrador</title>
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
<form method="POST" class="form" action="includeadministrador1.php" enctype="multipart/form-data">

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="nome_a" maxlength="100" placeholder="Digite o nome do administrador" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="email" name="email_a" maxlength="100" placeholder="Digite o e-mail do administrador" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="password" name="senha_a" maxlength="20" placeholder="Digite a senha do administrador" required>
		</label>

		<input type="submit" class="btn btn-second" value="Cadastrar Administrador">
</form>
</center>
</body>
</html>