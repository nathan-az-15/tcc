<?php
include 'conecta.php';

$Assunto=$_GET["assunto"];

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