<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
	<title>Cadastro de Questões</title>
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
<?php
$query = "SELECT * FROM conteudos";
include 'conecta.php';
?>
<center>
<input type="button" value="Administrador" onClick="location. href='includeadministrador.php'">
<input type="button" value="Conteúdos" onClick="location. href='includeconteudos.php'">
<input type="button" value="Questões" onClick="location. href='includequestoes.php'">
<input type="button" value="Matérias" onClick="location. href='includematerias.php'">
<input type="button" value="Indicações" onClick="location. href='includeindicacoes.php'">
<br><br><br>
<form method="POST" class="form" action="includequestoes1.php" enctype="multipart/form-data">
		
		<select name="conteudo_q" required>
		<?php while($mostrar = mysql_fetch_array($query)) { ?>
		<option value="<?php echo $mostrar['ID_cont'] ?>"><?php echo $mostrar['texto'] ?></option>
		<?php } ?>
		</select>
		
		Selecione uma imagem para acompanhar o enunciado (se possuir)
		<input type="file" onchange="preview_image(event)" name="imagem_q" accept=".png, .jpg, .jpeg, .gif">
		<img class="imagem" id="output_image"/>
		
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="enunciado_q" placeholder="Digite o enunciado da questão" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="alta_q" maxlength="200" placeholder="Digite a alternativa A" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="altb_q" maxlength="200" placeholder="Digite a alternativa B" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="altc_q" maxlength="200" placeholder="Digite a alternativa C" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="altd_q" maxlength="200" placeholder="Digite a alternativa D" required>
		</label>

		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="alte_q" maxlength="200" placeholder="Digite a alternativa E" required>
		</label>

		Selecione a alternativa que responde essa questão corretamente:
		<input type="radio" name="altcorreta" value="A" required>
		Alternativa A
		<input type="radio" name="altcorreta" value="B">
		Alternativa B
		<input type="radio" name="altcorreta" value="C">
		Alternativa C
		<input type="radio" name="altcorreta" value="D">
		Alternativa D
		<input type="radio" name="altcorreta" value="E">
		Alternativa E
	
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="explicacao_q" placeholder="Digite como resolver a questão (contas a fazer, lógica a seguir, por exemplo)" required>
		</label>

		<input type="submit" class="btn btn-second" value="Cadastrar Questão">
</form>


</center>
</body>
</html>