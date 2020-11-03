<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<?php
session_start();
$EmailUsu=$_POST["email_usuario"];
$SenhaUsu=$_POST["senha_usuario"];
$_SESSION['email_usuario'] = $EmailUsu;

include 'conecta.php';
if($EmailUsu=="ADM_reforc@gmail.com"){
$regra="SELECT * FROM  administrador WHERE email_adm='$EmailUsu' and senha_adm='$SenhaUsu'";
$res = mysqli_query($conexao, $regra)or die("Erro");
$cont = mysqli_num_rows($res);//pega o que foi pesquisado no bd (variavel res) e retorna o numero de linhas cadastradas no bd.
if ($cont<=0){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.php';</script>";
    die();
}else{
	echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/inicio_adm.html' />";//link da pagina do adm
}
}
else{
$regra="SELECT * FROM usuario WHERE email_usuario='$EmailUsu' and senha_usuario='$SenhaUsu'";
$res = mysqli_query($conexao, $regra)or die("Erro");
$cont = mysqli_num_rows($res);
if ($cont<=0){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.php';</script>";
    die();
}else{
	echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/inicio.html' />";
}
}
?>
</body>
</html>