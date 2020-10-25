<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
include "conecta.php";
$email=$_GET['email'];
$base=mysqli_connect('localhost', 'root','usbw','bd_reo_tcc') or die ("erro de conexão");
$apagar="DELETE FROM usuario WHERE email_usuario='$email'";
$res=mysqli_query($base,$apagar);

echo '<script language="Javascript"> alert("Usuário excluído com sucesso!") </script> <br>';
echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/login.php' />";
?>