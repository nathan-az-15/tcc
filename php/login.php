<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width-device-width, initial-scale-1.0"/>
<title>Login | Reforço+</title>
<link href="../css/bootstrap.css" rel="stylesheet"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/bootstrap-grid.min.css" rel="stylesheet"/>
<link href="../css/bootstrap-grid.css" rel="stylesheet"/>
<link href="../js/bootstrap.bundle.js" rel="stylesheet"/>
<link href="../js/bootstrap.bundle.min.js" rel="stylesheet"/>
<link href="../js/bootstrap.js" rel="stylesheet"/>
<link href="../js/bootstrap.min.js" rel="stylesheet"/>
<link href="../js/jquery-3.5.0.min.js" rel="stylesheet"/>
<link rel="stylesheet" href="../css/login.css">
<script src="https://kit.fontawesome.com/faf083a5ac.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- criando conteudo do cadastro e do login-->
<?php
session_start();
if(isset($_POST['inup'])){
$inup = $_POST['inup'];
echo "<div id='divmod' class='$inup'>";
}else{
$inup = 'sign-in-js';	
}
?>
<div class="conteudo" >
	<div class="content first-content"><!--parte do cadastro-->
        <div class="first-column"><!--parte esquerda-->
		<h2 class="titulo title-primary">Seja bem-vindo </h2>
		<p class="descricao"> Insira seus dados pessoais</p><br>
		<p class="descricao"> Se já é cadastrado, faca o login</p>

	<form name="formlogin" method='POST' action='#'>
	<input type='hidden' value='sign-in-js' name='inup'>
	<input type='submit' id='signin' class='btn btn-primary' value='LOGIN'>
	</form>
		</div>
		
		<div class="second-column"><!--parte da direita-->
	    <h2 class="titulo title-second"> Criar uma conta</h2>
		
	    <form name="formcadastro" class="form" method="POST" action="login1.php">
		
		<label class="label-input" for="">
		<i class="fas fa-user icon-modify"></i>
        <input type="text" name="nome_usuario" maxlength="100" placeholder="Nome" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-calendar-alt icon-modify"></i> 
        <input type="date" name="data_usuario" placeholder="Data de Nascimento" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-envelope icon-modify"></i>
        <input type="email" name="email_usuario" maxlength="100" placeholder="Email" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-key icon-modify"></i> 
        <input type="password" name="senha_usuario" maxlength="30" placeholder="Senha" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-graduation-cap icon-modify"></i> 
        <select name="escola_usuario">
		<option value="Cursando Ensino Fundamental"> Cursando Ensino Fundamental</option>
		<option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
		<option value="Cursando Ensino Médio">Cursando Ensino Médio</option>
		<option value="Ensino Médio Completo">Ensino Médio Completo</option>
		<option value="Cursando Ensino Superior">Cursando Ensino Superior</option>
        <option value="Ensino Superior Completo">Ensino Superior Completo</option>
        </select>
		</label>	
		
		<label class="label-input" for="">
		<i class="fas fa-layer-group icon-modify"></i> 
        <input type="text" name="serie_usuario" maxlength="30" placeholder="Série/Ano" required>
		</label>
		
        <input type="submit" class="btn btn-second" value="Cadastrar">
		</form>
		
		</div>
	</div>
	
	<!--segunda parte-->
	
	<div class="content second-content"><!--parte do login-->
	    <div class="first-column"><!--parte esquerda-->
		<h2 class="titulo title-primary">Ola </h2>
		<p class="descricao"> Insira seus dados pessoais </p>

		<form name="formirlogin" method='POST' action='#'>
		
		<input type='hidden' value='sign-up-js' name='inup'>
		<input type='submit' class='btn btn-primary' value='CADASTRO'>
		</form>
		</div>
		<div class="second-column"><!--parte da direita-->
	    <h2 class="titulo title-second"> Fazer login </h2>
		
		<form name="formlogin" class="form" method="POST" action="login2.php">
		
		<label class="label-input" for="">
		<i class="fas fa-envelope icon-modify"></i>
        <input type="email" name="email_usuario" placeholder="Email" maxlength="100" required>
		</label>
		
		<label class="label-input" for="">
		<i class="fas fa-key icon-modify"></i> 
        <input type="password" name="senha_usuario" placeholder="Senha" maxlength="30" required>
		</label>
		
		<button class="btn btn-second">Login</button>
		</form>
		
	    </div>
	</div>
</div>
<script src="../js/app.js"></script>	
</div>
</body>
</html>