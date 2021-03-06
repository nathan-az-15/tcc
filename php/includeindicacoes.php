<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Cadastro de indicações | Reforço+</title>
	<link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../css/include_cont_ind.css">
	
    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>
	
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    

      <header>
	 
      <a href="../inicio_adm.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"> </a>
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
      <a href="../inicio_adm.html"><i class="fas fa-home"></i><span>Início</span></a>
    <a href="conteudos_adm.php"><i class="fas fa-book-open"></i><span>Cadastrar Conteúdo</span></a>
    <a href="testeniveis_adm.php"><i class="fas fa-file-alt"></i><span>Cadastrar Questão</span></a>
    <a href="includeindicacoes.php"><i class="fas fa-film"></i><span>Cadastrar Indicação</span></a>
    <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->
<div class="nome">
        <p> Cadastro Indicações </p>
        <hr style="width: 102%; height: 7%; margin-left: -5%;">
</div>
<div class="conteudo" style="margin-top:1%">
<?php
	  $conn = mysqli_connect('127.0.0.1', 'root', '') or die("Não foi possível a conexão com o Banco");
	  $db = mysqli_select_db($conn,'bd_reo_tcc') or die("Não foi possível selecionar o Banco");

            $sql = "SELECT * FROM materias";
            $cod = mysqli_query($conn,$sql);
?>
<form method="POST" class="form" action="includeindicacoes1.php" enctype="multipart/form-data">

    Selecione uma imagem para acompanhar o enunciado: 
    <input type="file" onchange="preview_image(event)" name="imagem_i" accept=".png, .jpg, .jpeg, .gif">
    <img class="imagem" id="output_image"/><br>

    Selecione a plataforma:<font size=5 color=#FF0000> *</font>
		  <select name="plataforma_i" required>
      <option value="Filme">Filme</option>
		  <option value="Livro">Livro</option>
      <option value="Serie">Série</option>
      <option value="Documentario">Documentário</option>
      </select><br>

      Selecione a matéria que esta indicação está relacionada:<font size=5 color=#FF0000> *</font>
		  <select name="mat_i" required>
      <?php while($mostrar = mysqli_fetch_object($cod)) { ?>
      <option value="<?php echo $mostrar->ID_materia ?>"><?php echo utf8_encode($mostrar->nome_mat) ?></option>
      <?php } ?>
      </select>

		<br>
        Digite o título da indicação:<font size=5 color=#FF0000> *</font>
		<label class="label-input" for="">
        <input type="text" class="assunto" name="titulo_i" maxlength="70"  required>
		</label>
		<br>
        Digite o autor da indicação:<font size=5 color=#FF0000> *</font>
		<label class="label-input" for="">
        <input type="text" class="assunto" name="autor_i" maxlength="100" required>
		</label>
		<br>
        Digite a descrição da indicação:<font size=5 color=#FF0000> *</font>
		<label class="label-input" for="">
        <input type="text" class="assunto" name="descricao_i" required>
		</label>
		<br>
        <center>
		<input type="submit" class="btn btn-second" value="Cadastrar Indicação">
		</center>
</form>

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