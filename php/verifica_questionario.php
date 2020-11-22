<?php
include 'conecta.php';

$Assunto=$_POST["assunto"];

$consulta = "SELECT * FROM conteudos WHERE ID_cont LIKE '$Assunto'";
        $con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){
            echo "RESULTADOS DO QUESTIONÁRIO DE " . strtoupper($mostrar['assunto']) . "<br><br>";
        }


//--------------------------------------------------------------------Alternativa enviada das questões



if(isset($_POST["altcorreta1"])){
$alt_correta1=$_POST["altcorreta1"];
}else{
    $alt_correta1="vazia";
}

if(isset($_POST["altcorreta2"])){
$alt_correta2=$_POST["altcorreta2"];
}else{
    $alt_correta2="vazia";
}

if(isset($_POST["altcorreta3"])){
$alt_correta3=$_POST["altcorreta3"];
}else{
    $alt_correta3="vazia";
}

if(isset($_POST["altcorreta4"])){
$alt_correta4=$_POST["altcorreta4"];
}else{
    $alt_correta4="vazia";
}

if(isset($_POST["altcorreta5"])){
$alt_correta5=$_POST["altcorreta5"];
}else{
    $alt_correta5="vazia";
}

if(isset($_POST["altcorreta6"])){
$alt_correta6=$_POST["altcorreta6"];
}else{
    $alt_correta6="vazia";
}

if(isset($_POST["altcorreta7"])){
$alt_correta7=$_POST["altcorreta7"];
}else{
    $alt_correta7="vazia";
}

if(isset($_POST["altcorreta8"])){
$alt_correta8=$_POST["altcorreta8"];
}else{
    $alt_correta8="vazia";
}

if(isset($_POST["altcorreta9"])){
$alt_correta9=$_POST["altcorreta9"];
}else{
    $alt_correta9="vazia";
}

if(isset($_POST["altcorreta10"])){
$alt_correta10=$_POST["altcorreta10"];
}else{
    $alt_correta10="vazia";
}

//--------------------------------------------------------------------ID das questões

if(isset($_POST["ID_q1"])){
$ID_questao1=$_POST["ID_q1"];
}else{
    $ID_questao1="vazia";
}

if(isset($_POST["ID_q2"])){
$ID_questao2=$_POST["ID_q2"];
}else{
    $ID_questao2="vazia";
}

if(isset($_POST["ID_q3"])){
$ID_questao3=$_POST["ID_q3"];
}else{
    $ID_questao3="vazia";
}

if(isset($_POST["ID_q4"])){
$ID_questao4=$_POST["ID_q4"];
}else{
    $ID_questao4="vazia";
}

if(isset($_POST["ID_q5"])){
$ID_questao5=$_POST["ID_q5"];
}else{
    $ID_questao5="vazia";
}

if(isset($_POST["ID_q6"])){
$ID_questao6=$_POST["ID_q6"];
}else{
    $ID_questao6="vazia";
}

if(isset($_POST["ID_q7"])){
$ID_questao7=$_POST["ID_q7"];
}else{
    $ID_questao7="vazia";
}

if(isset($_POST["ID_q8"])){
$ID_questao8=$_POST["ID_q8"];
}else{
    $ID_questao8="vazia";
}

if(isset($_POST["ID_q9"])){
$ID_questao9=$_POST["ID_q9"];
}else{
    $ID_questao9="vazia";
}

if(isset($_POST["ID_q10"])){
$ID_questao10=$_POST["ID_q10"];
}else{
    $ID_questao10="vazia";
}

//--------------------------------------------------------------------Verificação da questão

$alt_correta = [$alt_correta1, $alt_correta2, $alt_correta3, $alt_correta4, $alt_correta5, $alt_correta6, $alt_correta7, $alt_correta8, $alt_correta9, $alt_correta10];
$ID_questao = [$ID_questao1, $ID_questao2, $ID_questao3, $ID_questao4, $ID_questao5, $ID_questao6, $ID_questao7, $ID_questao8, $ID_questao9, $ID_questao10];
$Acertos = 0;
$easy = 0;
$medium = 0;
$hard = 0;
$a = 0;

for($i = 1; $i <= 10; $i++){
    if(isset($_POST["ID_q$i"])){
        
        $consulta = "SELECT * FROM questoes WHERE ID_questoes LIKE '$ID_questao[$a]'";
        $con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){
            $acertor = $mostrar['aceros'];
            $acertos++
            if($mostrar['alt_correta'] == $alt_correta[$a]){
                echo "Questão $i: <font color='green'>Correta</font><br>";
                echo "Explicação: " . $mostrar['explicacao'] . "<br><br>";
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
                echo "Questão $i: <font color='red'>Incorreta</font><br>";
                echo "Explicação: " . $mostrar['explicacao'] . "<br><br>";
            }
        }
    }
    $a++;
}

        $sql = "INSERT INTO responde VALUES";
        $sql .= "(3, $Acertos, $Assunto, $easy, $medium, $hard)";

        if($conexao->query($sql) == TRUE){
            echo "";
        } else {
            echo "Erro: ". $sql ."<br>" . $conexao->error;
        }


if($Acertos >= 4){
    echo "Parabéns. Muito Bem!";
}else if($Acertos >= 2 && $Acertos < 4){
    echo "Ok. Continue tentando!";
}else if($Acertos >= 0 && $Acertos < 2){
    echo "Opa. Se deu mal!";
}

echo "<br><br>";
echo "Acertos: $Acertos/5 <br>";
echo "Fáceis: $easy <br>";
echo "Médias: $medium <br>";
echo "Difíceis: $hard <br>";


$conexao->close();
?>