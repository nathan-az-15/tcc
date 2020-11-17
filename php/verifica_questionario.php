<?php
include 'conecta.php';

//--------------------------------------------------------------------Alternativa correta das questões

if(isset($_POST["altcorreta1"])){
$alt_correta1=$_POST["altcorreta1"];
}

if(isset($_POST["altcorreta2"])){
$alt_correta2=$_POST["altcorreta2"];
}

if(isset($_POST["altcorreta3"])){
$alt_correta3=$_POST["altcorreta3"];
}

if(isset($_POST["altcorreta4"])){
$alt_correta4=$_POST["altcorreta4"];
}

if(isset($_POST["altcorreta5"])){
$alt_correta5=$_POST["altcorreta5"];
}

if(isset($_POST["altcorreta6"])){
$alt_correta6=$_POST["altcorreta6"];
}

if(isset($_POST["altcorreta7"])){
$alt_correta7=$_POST["altcorreta7"];
}

if(isset($_POST["altcorreta8"])){
$alt_correta8=$_POST["altcorreta8"];
}

if(isset($_POST["altcorreta9"])){
$alt_correta9=$_POST["altcorreta9"];
}

if(isset($_POST["altcorreta10"])){
$alt_correta10=$_POST["altcorreta10"];
}

//--------------------------------------------------------------------ID das questões

if(isset($_POST["ID_q1"])){
$ID_questao1=$_POST["ID_q1"];
}

if(isset($_POST["ID_q2"])){
$ID_questao2=$_POST["ID_q2"];
}

if(isset($_POST["ID_q3"])){
$ID_questao3=$_POST["ID_q3"];
}

if(isset($_POST["ID_q4"])){
$ID_questao4=$_POST["ID_q4"];
}

if(isset($_POST["ID_q5"])){
$ID_questao5=$_POST["ID_q5"];
}

if(isset($_POST["ID_q6"])){
$ID_questao6=$_POST["ID_q6"];
}

if(isset($_POST["ID_q7"])){
$ID_questao7=$_POST["ID_q7"];
}

if(isset($_POST["ID_q8"])){
$ID_questao8=$_POST["ID_q8"];
}

if(isset($_POST["ID_q9"])){
$ID_questao9=$_POST["ID_q9"];
}

if(isset($_POST["ID_q10"])){
$ID_questao10=$_POST["ID_q10"];
}

//--------------------------------------------------------------------Verificação da questão

$Assunto=$_POST["assunto"];
$easy = 0;
$medium = 0;
$hard = 0;

for($i = 1; $i <=10; $i++){
    if(isset($_POST["ID_q$i"])){
        
        $consulta = "SELECT * FROM questoes WHERE ID_questoes LIKE '$ID_questao$i'";
        $con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){
            if($mostrar['alt_correta'] == $alt_correta$i){
                echo "Questão $i: <font color='green'>Correta</font>";
                $Acertos++;
                if($mostrar['dificuldade'] == 1){
                    $easy++;
                }
                if($mostrar['dificuldade'] == 2){
                    $medium++;
                }
                if($mostrar['dificuldade'] == 3){
                    $hard++;
                }
            }
            else{
                echo "Questão $i: <font color='red'>Incorreta</font>";
            }
        }
        $sql = "INSERT INTO responde VALUES";
        $sql .= "(ID_usuario, '$ID_questap$i', '$Acertos', '$Assunto', $easy, '$medium', '$hard')";
    }
}

$conexao->close();
?>