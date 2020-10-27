<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Cadastro de Conteúdos</title>
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
<form method="POST" class="form" action="includeconteudos1.php" enctype="multipart/form-data">
		
		Selecione uma imagem para acompanhar o conteúdo (se possuir)
		<input type="file" onchange="preview_image(event)" name="imagem_c" accept=".png, .jpg, .jpeg, .gif">
		<img class="imagem" id="output_image"/>
		
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="texto_c" placeholder="Digite o texto do conteúdo" required>
		</label>
		<br>
		Escolha o ano do conteúdo
		<br><br>
		<input type="radio" name="ano_c" value="1" required>
		Primeiro Ano
		<input type="radio" name="ano_c" value="2">
		Segundo Ano
		<input type="radio" name="ano_c" value="3">
		Terceiro Ano

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="assunto_c" maxlength="70" placeholder="Digite o assunto do conteúdo" required>
		</label>

		<input type="submit" class="btn btn-second" value="Cadastrar Conteúdo">
</form>
</center>
</body>
</html>