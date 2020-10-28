<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
    <link rel="stylesheet" href="../css/inicio.css">
	<link rel="stylesheet" href="../css/conta.css">
	
	
    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>
	
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    

      <header>
	 
      <a href="../inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"> </a>
      <label for="check">
        <i class="fas fa-align-justify" id="menu_btn"></i>
      </label>
      <div class="direita">
        <a href="sair.php" class="sair">Sair</a>
      </div>
	  
      </header>
    <!--header area end-->


    <!--mobile navigation bar start
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="#"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="#"><i class="fas fa-file-alt"></i><span>Simulados</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="#"><i class="fas fa-user-alt"></i><span>Conta</span></a>
      </div>
    </div>
    mobile navigation bar end-->

    <!--sidebar start-->
    <div class="menu">
      <center>
      <h4>MENU</h4>
      </center>
      <a href="../inicio.html"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="conteudos.php"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="testeniveis.php"><i class="fas fa-file-alt"></i><span>Testes de Nível</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="indicacoes.php"><i class="fas fa-film"></i><span>Indicações</span></a>
      <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->

    <div class="conteudo">
	
<?php
include'conecta.php';
session_start();
echo "<meta charset='utf-8'>";
$email=$_SESSION['email_usuario'];
$conexao = mysqli_connect('127.0.0.1','root','','bd_reo_tcc') or die("erro de conexão");
$consulta="SELECT * FROM usuario WHERE email_usuario = '$email'";
$res = mysqli_query($conexao, $consulta);  //Executa o comando SQL, no caso para pegar todos os dados e retornar o valor da consulta em uma variavel ($res)  

        $mostrar = mysqli_fetch_array($res);
?>

<form action="editar.php" method="POST">
					
						<h2> Dados Pessoais </h2>
						
						<p> Atualizar dados </p>
						
					   
					    <label for="exampleInputEmail1">Nome</label>
						<input type="TEXT" class="form-control1" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nome" placeholder="Nome Completo"  style="text-align: left " value="<?php echo $mostrar['nome_usuario'];?>" required>
					    
					    <label for="exampleInputEmail1">Data de Nascimento</label>
						<input type="date" class="form-control2" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_nasc" placeholder="Data de Nascimento" style="text-align: left" value="<?php echo $mostrar['data_nasc'];?>" required>
					  
						
					    <label for="exampleInputEmail1">Escolaridade</label>
						<input type="text" class="form-control3" id="exampleInputEmail1" aria-describedby="emailHelp" name="escolaridade"  placeholder="Escolaridade" style="text-align: left" value="<?php echo $mostrar['escolaridade'];?>" required>
					    
					  
					    
					    <label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control4" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" placeholder="Email" style="text-align: left" value="<?php echo $mostrar['email_usuario'];?>" required>
					    
					  
					    
					    <label for="exampleInputEmail1">Série/Ano</label>
						<input type="text" class="form-control5" id="exampleInputEmail1" aria-describedby="emailHelp" name="Serie_ano"  placeholder="Serie/ano" style="text-align: left" value="<?php echo $mostrar['serie_ano'];?>" required>
					   
					    <button type="submit" class="btn2 btn-color2" style= "text-align:left">Salvar</button>
						
					   <br><br><br>
						<p> Atualizar senha </p>
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control6" id="exampleInputPassword1" name="Senha"  placeholder="Senha" style="text-align: left" value="<?php echo $mostrar['senha_usuario'];?>" required>
                       
					
			
			        <button type="submit" class="btn2 btn-color2" style= "text-align:left">Salvar</button>
						
					</form>
<br>
<br>
<br>
		<?php
       echo "<a href='excluir.php?email=".$mostrar['email_usuario']."'><button class='btn1 btn-color1'>Excluir conta</button></a>";

?>
</div>
 

</body>
</html>
