<?php

$Nome=$_POST["Nome"];
$Data_nasc=$_POST["data_nasc"];
$Escolaridade=$_POST["escolaridade"];
$Email=$_POST["Email"];
$Senha=$_POST["Senha"];
$Serie_ano=$_POST["Serie_ano"];

$base=mysqli_connect('127.0.0.1', 'root','','bd_reo_tcc') or die ("erro de conexão");
//update tabela set coluna=valor
$regra="UPDATE usuario SET nome_usuario='$Nome', data_nasc='$Data_nasc', escolaridade='$Escolaridade', email_usuario='$Email', senha_usuario='$Senha', serie_ano='$Serie_ano'WHERE email_usuario='$Email'";

$res=mysqli_query($base,$regra) or die ("deu errado");
	echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/php/conta.php' />";

?>