<?php
include 'conecta.php';

$Assunto=$_GET["assunto"];

//--------------------------------------------------------------------Título: Assunto e Ano

$consulta = "SELECT * FROM conteudos WHERE ID_cont LIKE '$Assunto'";
$con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){
            $materia=$mostrar['cod_mat'];
            echo "<font size='6'><center>QUESTIONÁRIO DE " . strtoupper($mostrar['assunto']) . "<br>";
            echo "" . $mostrar['ano'] . "º ANO<br>";
        }

//--------------------------------------------------------------------Título: Matéria

$consulta = "SELECT * FROM materias WHERE ID_materia LIKE '$materia'";
$con = mysqli_query($conexao, $consulta);
                  
        while($mostrar = mysqli_fetch_array($con)){
            echo "" . strtoupper($mostrar['nome_mat']) . "</center></font><br>";
        }

//--------------------------------------------------------------------Formulário (Questões)

$consulta = "SELECT * FROM questoes WHERE cod_cont LIKE '$Assunto'";
$con = mysqli_query($conexao, $consulta);
echo "<form method='POST' class='form' action='verifica_questionario.php'>";

for($i = 1; $i <=10; $i++){

    $mostrar = mysqli_fetch_array($con);

    if($mostrar['enunciado'] != ""){

        echo "<b>QUESTÃO $i</b><br>";

        

        echo $mostrar['enunciado'] ."<br><br>";
        if($mostrar['end_imagens_quest'] != ""){
            echo "<img src='../imagens/imgquestao/".$mostrar['end_imagens_quest']."'<br><br>";
        }
        echo "<input type='radio' name='altcorreta$i' value='A' required>   a) ". $mostrar['alt_a'] ."<br><br>";
        echo "<input type='radio' name='altcorreta$i' value='B'>            b) ". $mostrar['alt_b'] ."<br><br>";
        echo "<input type='radio' name='altcorreta$i' value='C'>            c) ". $mostrar['alt_c'] ."<br><br>";
        echo "<input type='radio' name='altcorreta$i' value='D'>            d) ". $mostrar['alt_d'] ."<br><br>";
        if($mostrar['alt_e'] != ""){
        echo "<input type='radio' name='altcorreta$i' value='E'>            e) ". $mostrar['alt_e'] ."<br><br>";
        }

        echo "<br><br><br>";
        echo "<input type='hidden' name='ID_q$i' value='" . $mostrar['ID_questoes'] . "'>";  
        echo "<input type='hidden' name='assunto' value='$Assunto'>"; 
    }
}

echo "<input type='submit' value='Finalizar questionário'>";
echo "</form>";
?>