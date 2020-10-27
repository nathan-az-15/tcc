<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
	<link rel="stylesheet" href="../css/cadastros.css">
	
	
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
      <a href="../conteudos.html"><i class="fas fa-book-open"></i><span>Conteúdos</span></a>
      <a href="#"><i class="fas fa-file-alt"></i><span>Testes de Nível</span></a>
      <a href="#"><i class="fas fa-chart-line"></i><span>Desempenho</span></a>
      <a href="../indicacoes.html"><i class="fas fa-film"></i><span>Indicações</span></a>
      <a href="conta.php"><i class="fas fa-user-alt"></i><span>Conta</span></a>
    </div>
    <!--sidebar end-->

  <div class="nome">
      <p> Cadastro Questões </p>
      <hr style="width: 102%; height: 7%; margin-left: -5%;">
  </div>

  <div class="conteudo">

      <?php
        $conn = mysqli_connect('127.0.0.1', 'root', '') or die("Não foi possível a conexão com o Banco");
        $db = mysqli_select_db($conn,'bd_reo_tcc') or die("Não foi possível selecionar o Banco");

        $ano = $_POST["ano"];
        $materia = $_POST["materia"];

        $sql = "SELECT * FROM conteudos where cod_mat like '%".$materia."%' and ano like '%".$ano."%'";
        $cod = mysqli_query($conn,$sql);
      ?>
      <input type="button" value="Conteúdos" onClick="location. href='includeconteudos.php'">
      <input type="button" value="Questões" onClick="location. href='includequestoes.php'">
      <input type="button" value="Indicações" onClick="location. href='includeindicacoes.php'">
      <br><br><br>

      <form method="POST" class="form" action="includequestoes1.php" enctype="multipart/form-data">
          
          Selecione o assunto da questão:
          <select name="conteudo_q" required>
          <?php while ($mostrar = mysqli_fetch_object($cod)) { ?>
          <option value="<?php echo $mostrar->ID_cont; ?>"><?php echo $mostrar->assunto; ?></option>
          <?php } ?>
          </select><br><br>

          Selecione uma imagem para acompanhar o enunciado (se possuir)
          <input type="file" onchange="preview_image(event)" name="imagem_q" accept=".png, .jpg, .jpeg, .gif">
          <img class="imagem" id="output_image"/><br><br>
          
          Questão :<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="enunciado_q" placeholder="Digite o enunciado da questão" required></textarea>
          </label><br><br>
          
          Alternativa A:<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="alta_q" maxlength="200" placeholder=" Digite a alternativa A " required></textarea>
          </label><br><br>
          
          Alternativa B:<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="altb_q" maxlength="200" placeholder=" Digite a alternativa B " required></textarea>
          </label><br><br>
          
          Alternativa C:<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="altc_q" maxlength="200" placeholder=" Digite a alternativa C " required></textarea>
          </label><br><br>
          
          Alternativa D:<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="altd_q" maxlength="200" placeholder=" Digite a alternativa D " required></textarea>
          </label><br><br>
          
          Alternativa E:<br>
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="alte_q" maxlength="200" placeholder=" Digite a alternativa E " required></textarea>
          </label><br><br>

          Selecione a alternativa que responde essa questão corretamente:<br><br>
          <input type="radio" name="altcorreta" value="A" required>
          Alternativa A<br><br>
          <input type="radio" name="altcorreta" value="B">
          Alternativa B<br><br>
          <input type="radio" name="altcorreta" value="C">
          Alternativa C<br><br>
          <input type="radio" name="altcorreta" value="D">
          Alternativa D<br><br>
          <input type="radio" name="altcorreta" value="E">
          Alternativa E<br><br><br>         
          
          Resolução :
          <label class="label-input" for="">
              <textarea type="text" class="enunciado" name="explicacao_q" placeholder="Digite a resolução (contas a fazer, lógica a seguir, por exemplo)" required></textarea>
          </label><br><br>

          <center><input type="submit" class="btn btn-second" value="Cadastrar questão"></center>
          <br><br><br>
      </form>
    </div>
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