<!DOCTYPE html>
<html lang="pt-br">
<?php
include "conecta.php";
$email=$_GET['email'];
$apagar="DELETE FROM usuario WHERE email_usuario LIKE '$email'";
$res=mysqli_query($conexao,$apagar);

echo '<script language="Javascript"> alert("Usuário excluído com sucesso!") </script> <br>';
echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/edsa-TCC_github/php/login.php' />";
?>