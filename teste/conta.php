<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
    <link rel="stylesheet" href="inicial.css">
	<link rel="stylesheet" href="conta.css">
	

	
    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>
	
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    

      <header>
	 
      <a href="inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="img/logo3.png"> </a>
      <label for="check">
        <i class="fas fa-align-justify" id="menu_btn"></i>
      </label>
      <div class="direita">
        <a href="#" class="sair">Sair</a>
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
      <a href="#"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="#"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="#"><i class="fas fa-file-alt"></i><span>Testes de Nível</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="#"><i class="fas fa-film"></i><span>Indicações</span></a>
      <a href="#"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->

    <div class="conteudo">
<?php
include'conecta.php';
session_start();
$email=$_SESSION['email_usuario'];
$conexao=mysqli_connect('localhost', 'root', 'usbw', 'bd_reo_tcc') or die("erro de conexão");
$consulta="SELECT * FROM usuario WHERE email_usuario = '$email'";
$res = mysqli_query($conexao, $consulta);  //Executa o comando SQL, no caso para pegar todos os dados e retornar o valor da consulta em uma variavel ($res)  

        $mostrar = mysqli_fetch_array($res);
?>
<form action="editar.php" method="POST">
					
						<h1 class="display-4"> Editar </h1>
						
						<p class="lead"> Altere os dados do seu cadastro. </p>
					
					  
						Nome: <input type="TEXT" name="Nome" placeholder="Nome Completo" value="<?php echo $mostrar['nome_usuario'];?>" required>
					
						Data de Nascimento: <input type="date" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $mostrar['data_nasc'];?>" required>
					  
						Escolaridade: <input type="text" name="escolaridade"  placeholder="Escolaridade" value="<?php echo $mostrar['escolaridade'];?>" required>
					  
						Email: <input type="TEXT" name="Email" placeholder="Email" value="<?php echo $mostrar['email_usuario'];?>" required>
					  
						Senha: <input type="text" name="Senha"  placeholder="Senha" value="<?php echo $mostrar['senha_usuario'];?>" required>
					  
						Série/Ano: <input type="text" name="Serie_ano"  placeholder="Serie/ano" value="<?php echo $mostrar['serie_ano'];?>" required>
					  
			
			
			        <button type="submit" class="btn btn-second">Salvar</button>
						
					</form>
<br>
<br>
<br>
		
        <a href='excluir.php'><button class="btn btn-second">Excluir conta</button></a>
	

</div>
   <!--<script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>-->

</body>
</html>
