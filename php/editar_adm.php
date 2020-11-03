<?php

$Nome=$_POST["Nome"];
$Email=$_POST["Email"];
$Senha=$_POST["Senha"];

$base=mysqli_connect('127.0.0.1', 'root','','bd_reo_tcc') or die ("erro de conexão");
//update tabela set coluna=valor
$regra="UPDATE administrador SET nome_adm='$Nome', email_adm='$Email', senha_adm='$Senha' WHERE email_adm='$Email'";

$res=mysqli_query($base,$regra) or die ("deu errado");
	echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/php/conta.php' />";

?>