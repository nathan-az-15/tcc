<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Reforço Escolar Online | R.E.O</title>
    <link rel="stylesheet" href="../css/teste_especifico.css">
    <script src="https://kit.fontawesome.com/a68f3df9e0.js" crossorigin="anonymous"></script>

</head>

<body>

    <input type="checkbox" id="check">
    <!--header area start-->


    <header>
        <a href="../inicio.html"><img style="float:left; margin-left:52px; margin-top: 0px; margin-bottom: 1px; padding-top: 0px; border: 0;" src="../imagens/inicial/logo3.png"></a>
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
            include 'conecta.php';

            $Assunto = $_GET["assunto"];

            //--------------------------------------------------------------------Título: Assunto e Ano

            $consulta = "SELECT * FROM conteudos WHERE ID_cont LIKE '$Assunto'";
            $con = mysqli_query($conexao, $consulta);

            while ($mostrar = mysqli_fetch_array($con)) {
                $materia = $mostrar['cod_mat'];
                echo "<font size='6'><center><p>QUESTIONÁRIO DE " . strtoupper($mostrar['assunto']) . "</p>";
                echo "<h1>" . $mostrar['ano'] . "º ANO - ";
            }

            //--------------------------------------------------------------------Título: Matéria

            $consulta = "SELECT * FROM materias WHERE ID_materia LIKE '$materia'";
            $con = mysqli_query($conexao, $consulta);

            while ($mostrar = mysqli_fetch_array($con)) {
                echo "" . strtoupper($mostrar['nome_mat']) . "</h1></center></font><br>";
            }

            //--------------------------------------------------------------------Formulário (Questões)

            $consulta = "SELECT * FROM questoes WHERE cod_cont LIKE '$Assunto'";
            $con = mysqli_query($conexao, $consulta);

            
            echo "<form method='POST' class='form' action='verifica_questionario.php'>";

            for ($i = 1; $i <= 10; $i++) {

                $mostrar = mysqli_fetch_array($con);
                $ID = $mostrar['ID_questoes'];

                $consulta_imagem = "SELECT * FROM imagens WHERE ID_questoes LIKE '$ID'";
                $con_imagem = mysqli_query($conexao, $consulta_imagem);

                if ($mostrar['enunciado'] != "") {
                   
                    echo "<div class='questao'>";
                    echo "<p><b>QUESTÃO $i</b></p><br>";

                    echo $mostrar['enunciado'] . "<br><br><br>";
                    while ($mostrar_imagem = mysqli_fetch_object($con_imagem)) {
                      
                        echo "<center><img src='../imagens/imgquestao/" . $mostrar_imagem->end_imagem  . "'></center><br><br>";
                    
                }
                    echo"<div class='blocos'>";
                    echo "<input type='radio' name='altcorreta$i' value='A' required>    a) "  . $mostrar['alt_a'] . " ";
                    echo "</div>";
                    echo"<div class='blocos'>";
                    echo "<input type='radio' name='altcorreta$i' value='B'>            b) " . $mostrar['alt_b'] . " ";
                    echo "</div>";
                    echo"<div class='blocos'>";
                    echo "<input type='radio' name='altcorreta$i' value='C'>            c) " . $mostrar['alt_c'] . " ";
                    echo "</div>";
                    echo"<div class='blocos'>";
                    echo "<input type='radio' name='altcorreta$i' value='D'>            d) " . $mostrar['alt_d'] . " ";
                    echo "</div>";
                    if ($mostrar['alt_e'] != "") {
                        echo"<div class='blocos'>";
                        echo "<input type='radio' name='altcorreta$i' value='E'>            e) " . $mostrar['alt_e'] . " ";
                        echo "</div>";
                    }

                    echo "<br><br>";
                    echo "<input type='hidden' name='ID_q$i' value='" . $mostrar['ID_questoes'] . "'>";
                    echo "<input type='hidden' name='assunto' value='$Assunto'>";
                    echo "</div>";
                }
            }

            echo "<input type='submit' class='btn2 btn-color1' value='Finalizar questionário'><br><br>";
            echo "</form>";
            ?>
        </div>
    </div>
</body>

</html>