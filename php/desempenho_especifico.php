<style>/* CSS interno para as cores e tamanho do Objeto*/
.cor0{ /* 0 acertos */
  background-color: #000000;
  border: solid 1.5px #000000;
  height: 1%;
  width: 0px;
}
.cor1{ /* 1 acertos */
  background-color: #ff2200;
  border: solid 1.5px #000000;
  height: 1%;
  width: 100px;
}
.cor2{ /* 2 acertos */
  background-color: #ff6600;
  border: solid 1.5px #000000;
  height: 1%;
  width: 200px;
}
.cor3{ /* 3 acertos */
  background-color: #fffb00;
  border: solid 1.5px #000000;
  height: 1%;
  width: 300px;
}
.cor4{ /* 4 acertos */
  background-color: #1eff00;
  border: solid 1.5px #000000;
  height: 1%;
  width: 400px;
}
.cor5{ /* 5 acertos */
  background-color: #00d9ff;
  border: solid 1.5px #000000;
  height: 1%;
  width: 500px;
}
</style>
<?php
include 'conecta.php';

$mat = $_GET['materia'];

session_start();

$email_sessao = $_SESSION['email_usuario'];

//--------------------------------------------------------------------SELECT para o total de acertos (ignorar, pois isso só serve para encher variáveis)

$AcertosTotais = 0;
$FaceisTotais = 0;
$MediasTotais = 0;
$DificeisTotais = 0;
$cor = "";

$consultaUsu0 = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_sessao'";
$conUsu0 = mysqli_query($conexao, $consultaUsu0);

  while ($mostrarUsu0 = mysqli_fetch_array($conUsu0)) {
    $ID_usuario = $mostrarUsu0['ID_usuario'];
  }

$consultaCont0 = "SELECT * FROM conteudos WHERE cod_mat LIKE '$mat'";
$conCont0 = mysqli_query($conexao, $consultaCont0);
    
  while ($mostrarCont0 = mysqli_fetch_array($conCont0)) {
    $cont = $mostrarCont0['ID_cont'];

    $consultaResp0 = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usuario' AND id_cont LIKE '$cont'";
    $conResp0 = mysqli_query($conexao, $consultaResp0); 
  
      while ($mostrarResp0 = mysqli_fetch_array($conResp0)) {        
        $AcertosTotais += $mostrarResp0['acertos'];
        $FaceisTotais += $mostrarResp0['faceis'];
        $MediasTotais += $mostrarResp0['medias'];
        $DificeisTotais += $mostrarResp0['dificeis'];
      }
    
  }

//--------------------------------------------------------------------SELECT do Usuário

$consultaUsu = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_sessao'";
$conUsu = mysqli_query($conexao, $consultaUsu);

  while ($mostrarUsu = mysqli_fetch_array($conUsu)) {
    echo "GRÁFICOS DE DESEMPENHO DE " . strtoupper($mostrarUsu['nome_usuario']) . "<br><br>";
    $ID_usuario = $mostrarUsu['ID_usuario'];
  }

//--------------------------------------------------------------------SELECT da Matéria

$consultaMat = "SELECT * FROM materias WHERE ID_materia LIKE '$mat'";
$conMat = mysqli_query($conexao, $consultaMat);
  
  while ($mostrarMat = mysqli_fetch_array($conMat)) {
    echo "".$mostrarMat['nome_mat']." - Geral<br>";
    echo "Acertos Totais: $AcertosTotais<br>";
    echo "Fáceis: $FaceisTotais<br>";
    echo "Médias: $MediasTotais<br>";
    echo "Díficeis: $DificeisTotais<br><br><br>";
  }

//--------------------------------------------------------------------SELECT do Conteúdo da matéria

$consultaCont = "SELECT * FROM conteudos WHERE cod_mat LIKE '$mat'";
$conCont = mysqli_query($conexao, $consultaCont);
    
  while ($mostrarCont = mysqli_fetch_array($conCont)) {
    echo "".$mostrarCont['assunto']." | " . $mostrarCont['ano'] . "º Ano <br>";

    $cont = $mostrarCont['ID_cont'];

    $consultaResp = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usuario' AND id_cont LIKE '$cont'";
    $conResp = mysqli_query($conexao, $consultaResp); 
    
      while ($mostrarResp = mysqli_fetch_array($conResp)) {

        if($mostrarResp['acertos'] == "0"){ //------------------------Cor para 0 acertos
          $cor = "cor0";
        }

        if($mostrarResp['acertos'] == "1"){ //------------------------Cor para 1 acerto
          $cor = "cor1";
        }

        if($mostrarResp['acertos'] == "2"){ //------------------------Cor para 2 acertos
          $cor = "cor2";
        }

        if($mostrarResp['acertos'] == "3"){ //------------------------Cor para 3 acertos
          $cor = "cor3";
        }

        if($mostrarResp['acertos'] == "4"){ //------------------------Cor para 4 acertos
          $cor = "cor4";
        }

        if($mostrarResp['acertos'] == "5"){ //------------------------Cor para 5 acertos
          $cor = "cor5";
        }


        echo "Acertos:".$mostrarResp['acertos']."/5<br>";
        echo "<input class='$cor' type='none' readonly='true'><br>"; //------------------------Objeto usado como linha do gráfico

        echo "Fáceis:".$mostrarResp['faceis']."<br>";

        echo "Médias:".$mostrarResp['medias']."<br>";

        echo "Difíceis:".$mostrarResp['dificeis']."<br><br>";
      }
    
  }
?>