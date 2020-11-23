<?php
session_start();
include 'conecta.php';

$email_sessao = $_SESSION['email_usuario'];

$Assunto=$_POST["assunto"];

//--------------------------------------------------------------------Título: Assunto e Ano

$consulta = "SELECT * FROM conteudos WHERE ID_cont LIKE '$Assunto'";
$con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){
            $materia=$mostrar['cod_mat'];
            echo "<font size='6'><center>RESULTADO DO QUESTIONÁRIO DE " . strtoupper($mostrar['assunto']) . "<br>";
            echo "" . $mostrar['ano'] . "º ANO<br>";
        }

//--------------------------------------------------------------------Título: Matéria

$consulta = "SELECT * FROM materias WHERE ID_materia LIKE '$materia'";
$con = mysqli_query($conexao, $consulta);
                  
        while($mostrar = mysqli_fetch_array($con)){
            echo "" . strtoupper($mostrar['nome_mat']) . "</center></font><br>";
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

//--------------------------------------------------------------------Variáveis e Arrays

$alt_correta = [$alt_correta1, $alt_correta2, $alt_correta3, $alt_correta4, $alt_correta5, $alt_correta6, $alt_correta7, $alt_correta8, $alt_correta9, $alt_correta10];
$ID_questao = [$ID_questao1, $ID_questao2, $ID_questao3, $ID_questao4, $ID_questao5, $ID_questao6, $ID_questao7, $ID_questao8, $ID_questao9, $ID_questao10];
$Acertos = 0;
$easy = 0;
$medium = 0;
$hard = 0;
$a = 0;


//--------------------------------------------------------------------Apresentação das Questões


for($i = 1; $i <= 10; $i++){
    if(isset($_POST["ID_q$i"])){

        $consulta = "SELECT * FROM questoes WHERE ID_questoes LIKE '$ID_questao[$a]'";
        $con = mysqli_query($conexao, $consulta);

        while($mostrar = mysqli_fetch_array($con)){

            if($mostrar['alt_correta'] == $alt_correta[$a]){
                $Acertos++;
                $EA = "<font color='green'>CORRETA</font>";
                if($mostrar['dificuldade'] == 1){
                    $easy++;
                }
                if($mostrar['dificuldade'] == 2){
                    $medium++;
                }
                if($mostrar['dificuldade'] == 3){
                    $hard++;
                }
            }else{
                $EA = "<font color='red'>INCORRETA</font>";
            }

            echo "<b>QUESTÃO $i | $EA</b><br>";
            echo $mostrar['enunciado'] ."<br><br>";
            if($mostrar['end_imagens_quest'] != ""){
                echo "<img src='../imagens/imgquestao/".$mostrar['end_imagens_quest']."'<br><br>";
            }
            echo "a) ". $mostrar['alt_a'] ."<br><br>";
            echo "b) ". $mostrar['alt_b'] ."<br><br>";
            echo "c) ". $mostrar['alt_c'] ."<br><br>";
            echo "d) ". $mostrar['alt_d'] ."<br><br>";
            if($mostrar['alt_e'] != ""){
            echo "e) ". $mostrar['alt_e'] ."<br><br>";
            }
            echo "Explicação: " . $mostrar['explicacao'] . "<br><br>";
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

        if($num1==0){
            $sql = "INSERT INTO responde VALUES";
            $sql .= "($ID_usu, $Acertos, $Assunto, $easy, $medium, $hard)";

            if($conexao->query($sql) == TRUE){
                echo "";
            } else {
                echo "Erro: ". $sql ."<br>" . $conexao->error;
            }
        }else{
            $sql2 = "UPDATE responde SET acertos='$Acertos', faceis='$easy', medias='$medium', dificeis='$hard' WHERE ID_usuario='$ID_usu' AND id_cont LIKE '$Assunto'";
            
            if($conexao->query($sql2) == TRUE){
                echo "";
            } else {
                echo "Erro: ". $sql ."<br>" . $conexao->error;
            }
        }

//--------------------------------------------------------------------Revisão rápida do desempenho

$oitenta = $a * 0.8;
$cinquenta = $a * 0.5;

if($Acertos == $a){
    echo "Parabéns. Muito Bem!";
}else if($Acertos >= $cinquenta && $Acertos < $oitenta){
    echo "Ok. Continue tentando!";
}else if($Acertos >= 0 && $Acertos < $cinquenta){
    echo "Opa. Se deu mal!";
}

echo "<br><br>";
echo "Acertos: $Acertos/$a <br>";
echo "Fáceis: $easy <br>";
echo "Médias: $medium <br>";
echo "Difíceis: $hard <br>";

$conexao->close();
?>