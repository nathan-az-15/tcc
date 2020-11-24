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
        session_start();
        include 'conecta.php';

        $email_sessao = $_SESSION['email_usuario'];

        $Assunto = $_POST["assunto"];

        //--------------------------------------------------------------------Título: Assunto e Ano

        $consulta = "SELECT * FROM conteudos WHERE ID_cont LIKE '$Assunto'";
        $con = mysqli_query($conexao, $consulta);

        while ($mostrar = mysqli_fetch_array($con)) {
            $materia = $mostrar['cod_mat'];
            echo "<font size='6'><center><p>RESULTADO DO QUESTIONÁRIO DE " . strtoupper($mostrar['assunto']) . "</p>";
            echo "<h1>" . $mostrar['ano'] . "º ANO - ";
        }

        //--------------------------------------------------------------------Título: Matéria

        $consulta = "SELECT * FROM materias WHERE ID_materia LIKE '$materia'";
        $con = mysqli_query($conexao, $consulta);

        while ($mostrar = mysqli_fetch_array($con)) {
            echo "" . strtoupper($mostrar['nome_mat']) . "</h1></center></font><br>";
        }


        //--------------------------------------------------------------------Alternativa enviada das questões



        if (isset($_POST["altcorreta1"])) {
            $alt_correta1 = $_POST["altcorreta1"];
        } else {
            $alt_correta1 = "vazia";
        }

        if (isset($_POST["altcorreta2"])) {
            $alt_correta2 = $_POST["altcorreta2"];
        } else {
            $alt_correta2 = "vazia";
        }

        if (isset($_POST["altcorreta3"])) {
            $alt_correta3 = $_POST["altcorreta3"];
        } else {
            $alt_correta3 = "vazia";
        }

        if (isset($_POST["altcorreta4"])) {
            $alt_correta4 = $_POST["altcorreta4"];
        } else {
            $alt_correta4 = "vazia";
        }

        if (isset($_POST["altcorreta5"])) {
            $alt_correta5 = $_POST["altcorreta5"];
        } else {
            $alt_correta5 = "vazia";
        }

        if (isset($_POST["altcorreta6"])) {
            $alt_correta6 = $_POST["altcorreta6"];
        } else {
            $alt_correta6 = "vazia";
        }

        if (isset($_POST["altcorreta7"])) {
            $alt_correta7 = $_POST["altcorreta7"];
        } else {
            $alt_correta7 = "vazia";
        }

        if (isset($_POST["altcorreta8"])) {
            $alt_correta8 = $_POST["altcorreta8"];
        } else {
            $alt_correta8 = "vazia";
        }

        if (isset($_POST["altcorreta9"])) {
            $alt_correta9 = $_POST["altcorreta9"];
        } else {
            $alt_correta9 = "vazia";
        }

        if (isset($_POST["altcorreta10"])) {
            $alt_correta10 = $_POST["altcorreta10"];
        } else {
            $alt_correta10 = "vazia";
        }

        //--------------------------------------------------------------------ID das questões

        if (isset($_POST["ID_q1"])) {
            $ID_questao1 = $_POST["ID_q1"];
        } else {
            $ID_questao1 = "vazia";
        }

        if (isset($_POST["ID_q2"])) {
            $ID_questao2 = $_POST["ID_q2"];
        } else {
            $ID_questao2 = "vazia";
        }

        if (isset($_POST["ID_q3"])) {
            $ID_questao3 = $_POST["ID_q3"];
        } else {
            $ID_questao3 = "vazia";
        }

        if (isset($_POST["ID_q4"])) {
            $ID_questao4 = $_POST["ID_q4"];
        } else {
            $ID_questao4 = "vazia";
        }

        if (isset($_POST["ID_q5"])) {
            $ID_questao5 = $_POST["ID_q5"];
        } else {
            $ID_questao5 = "vazia";
        }

        if (isset($_POST["ID_q6"])) {
            $ID_questao6 = $_POST["ID_q6"];
        } else {
            $ID_questao6 = "vazia";
        }

        if (isset($_POST["ID_q7"])) {
            $ID_questao7 = $_POST["ID_q7"];
        } else {
            $ID_questao7 = "vazia";
        }

        if (isset($_POST["ID_q8"])) {
            $ID_questao8 = $_POST["ID_q8"];
        } else {
            $ID_questao8 = "vazia";
        }

        if (isset($_POST["ID_q9"])) {
            $ID_questao9 = $_POST["ID_q9"];
        } else {
            $ID_questao9 = "vazia";
        }

        if (isset($_POST["ID_q10"])) {
            $ID_questao10 = $_POST["ID_q10"];
        } else {
            $ID_questao10 = "vazia";
        }

        //--------------------------------------------------------------------Variáveis e Arrays

        $alt_correta = [$alt_correta1, $alt_correta2, $alt_correta3, $alt_correta4, $alt_correta5, $alt_correta6, $alt_correta7, $alt_correta8, $alt_correta9, $alt_correta10];
        $ID_questao = [$ID_questao1, $ID_questao2, $ID_questao3, $ID_questao4, $ID_questao5, $ID_questao6, $ID_questao7, $ID_questao8, $ID_questao9, $ID_questao10];
        $Acertos = 0;
        $easy = 0;
        $medium = 0;
        $hard = 0;
        $a = 0;


        //--------------------------------------------------------------------Apresentação das Questões


        for ($i = 1; $i <= 10; $i++) {
            if (isset($_POST["ID_q$i"])) {

                $consulta = "SELECT * FROM questoes WHERE ID_questoes LIKE '$ID_questao[$a]'";
                $con = mysqli_query($conexao, $consulta);

                while ($mostrar = mysqli_fetch_array($con)) {

                    if ($mostrar['alt_correta'] == $alt_correta[$a]) {
                        $Acertos++;
                        $EA = "<font color='green'>CORRETA</font>";
                        
                        if ($mostrar['dificuldade'] == 1) {
                            $easy++;
                        }
                        if ($mostrar['dificuldade'] == 2) {
                            $medium++;
                        }
                        if ($mostrar['dificuldade'] == 3) {
                            $hard++;
                        }
                    } else {
                        $EA = "<font color='red'>INCORRETA</font>";
                        
                    }

                    echo "<div class='questao'>";
                    echo "<b><p>QUESTÃO $i | $EA</p></b><br>";
                    echo $mostrar['enunciado'] . "<br><br>";
                    if ($mostrar['end_imagens_quest'] != "") {
                        echo "<center><img src='../imagens/imgquestao/" . $mostrar['end_imagens_quest'] . "'></center><br><br>";
                    }

                    if ($mostrar['alt_correta'] == "A" ) {
                        echo"<div class='blococorreto'>";
                        echo "a) " . $mostrar['alt_a'] . " ";
                        echo "</div>";
                    }
                    else{
                        echo"<div class='blocoincorreto'>";
                        echo "a) " . $mostrar['alt_a'] . " ";
                        echo "</div>";
                    }

                    if ("B" == $mostrar['alt_correta']) {
                        echo"<div class='blococorreto'>";
                        echo "b) " . $mostrar['alt_b'] . " ";
                        echo "</div>";
                    }
                    else{
                        echo"<div class='blocoincorreto'>";
                        echo "b) " . $mostrar['alt_b'] . " ";
                        echo "</div>";
                    }

                    if ( "C" == $mostrar['alt_correta']) {
                        echo"<div class='blococorreto'>";
                        echo "c) " . $mostrar['alt_c'] . " ";
                        echo "</div>";
                    }
                    else{
                        echo"<div class='blocoincorreto'>";
                        echo "c) " . $mostrar['alt_c'] . " ";
                        echo "</div>";
                    }
                    
                    if ( "D" == $mostrar['alt_correta']) {
                        echo"<div class='blococorreto'>";
                        echo "d) " . $mostrar['alt_d'] . " ";
                        echo "</div>";
                    }
                    else{
                        echo"<div class='blocoincorreto'>";
                        echo "d) " . $mostrar['alt_d'] . " ";
                        echo "</div>";
                    }

                    if ($mostrar['alt_e'] != "") {
                        if ("E" == $mostrar['alt_correta']) {
                            echo"<div class='blococorreto'>";
                            echo "e) " . $mostrar['alt_e'] . " ";
                            echo "</div>";
                        }
                        else{
                            echo"<div class='blocoincorreto'>";
                            echo "e) " . $mostrar['alt_e'] . " ";
                            echo "</div>";
                        }
                    }
                    echo "<br><br><b>Explicação: " . $mostrar['explicacao'] . "</b><br><br>";
                    echo"<div class='blocos'>";
                    echo "alternativa marcada: " . $alt_correta[$a] . " ";
                    echo "</div><br><br>";
                    echo "</div>";

                }
                $a++;
            }
        }

        //--------------------------------------------------------------------Envio para o BD

        $sql1 = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_sessao'";
        $con = mysqli_query($conexao, $sql1);
        $mostrar = mysqli_fetch_array($con);
        $ID_usu = $mostrar['ID_usuario'];

        $consulta1 = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usu' AND id_cont LIKE '$Assunto'";
        $con1 = mysqli_query($conexao, $consulta1);
        $num1 = mysqli_num_rows($con1);

        if ($num1 == 0) {
            $sql = "INSERT INTO responde VALUES";
            $sql .= "($ID_usu, $Acertos, $Assunto, $easy, $medium, $hard)";

            if ($conexao->query($sql) == TRUE) {
                echo "";
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        } else {
            $sql2 = "UPDATE responde SET acertos='$Acertos', faceis='$easy', medias='$medium', dificeis='$hard' WHERE ID_usuario='$ID_usu' AND id_cont LIKE '$Assunto'";

            if ($conexao->query($sql2) == TRUE) {
                echo "";
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        }

        //--------------------------------------------------------------------Revisão rápida do desempenho

        $oitenta = $a * 0.8;
        $cinquenta = $a * 0.5;

        if ($Acertos == $a) {
            echo "Parabéns. Muito Bem!";
        } else if ($Acertos >= $cinquenta && $Acertos < $oitenta) {
            echo "Ok. Continue tentando!";
        } else if ($Acertos >= 0 && $Acertos < $cinquenta) {
            echo "Opa. Se deu mal!";
        }

        echo "<br><br>";
        echo "Acertos: $Acertos/$a <br>";
        echo "Fáceis: $easy <br>";
        echo "Médias: $medium <br>";
        echo "Difíceis: $hard <br>";

        $conexao->close();
        ?>
    </div>
</body>

</html>