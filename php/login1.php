<html>
<body>
<?php
include 'conecta.php';

$NomeUsu=$_POST["nome_usuario"];
$DataUsu=$_POST["data_usuario"];
$SenhaUsu=$_POST["senha_usuario"];
$EscolaUsu=$_POST["escola_usuario"];
$SerieUsu=$_POST["serie_usuario"];
$EmailUsu=$_POST["email_usuario"];

$numeros=false;
$maiusculas=false;
$minusculas=false;

if (strlen($NomeUsu)<6) {
$erro=1;
echo"<script language='javascript' type='text/javascript'>
alert('Digite o nome corretamente');window.location.href='login.php';</script>";
	}else{
		$erro=0;
	}

for ($x=0;$x<strlen($SenhaUsu);$x++) {
		if ($SenhaUsu[$x]>=chr(48) && $SenhaUsu[$x]<=chr(57)){
		$numeros=true;}
			
		if ($SenhaUsu[$x]>=chr(65) && $SenhaUsu[$x]<=chr(90)){
		$maiusculas=true;}
		
		if ($SenhaUsu[$x]>=chr(97) && $SenhaUsu[$x]<=chr(122)){
	    $minusculas=true;}
}			 
        if (strlen($SenhaUsu)<=6 || strlen($SenhaUsu)>=15){
			$erro=1;
		echo"<script language='javascript' type='text/javascript'>
alert('Digite a senha corretamente: A senha deve conter no mínimo 6 caracteres e no máximo 15');window.location.href='login.php';</script>";
		}else{
		$erro=0;
	}
    	 
		if ($maiusculas==false || $minusculas==false || $numeros==false) {
        echo"<script language='javascript' type='text/javascript'>
alert('Digite a senha corretamente: A senha deve conter letra maiúscula, minúscula e número ');window.location.href='login.php';</script>";
		$erro=1;
		}else{
		$erro=0;
	}	
$regra="SELECT email_usuario from usuario WHERE email_usuario='$EmailUsu'";
$res = mysqli_query($conexao, $regra)or die("Erro");
$QuantidadeDeCadastros = mysqli_num_rows($res);
if($QuantidadeDeCadastros>0){
	echo"<script language='javascript' type='text/javascript'>
alert('Esse email já existe, digite novamente.');window.location.href='login.php';</script>";
}else{
	if($erro==0){
include 'insere.php';
	}
}

?>
</body>
</html>