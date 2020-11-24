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
    echo "Díficeis: $DificeisTotais<br><br>";
  }

//--------------------------------------------------------------------SELECT do Conteúdo da matéria

$consultaCont = "SELECT * FROM conteudos WHERE cod_mat LIKE '$mat'";
$conCont = mysqli_query($conexao, $consultaCont);
    
  while ($mostrarCont = mysqli_fetch_array($conCont)) {
    echo "".$mostrarCont['assunto']."<br>";

    $cont = $mostrarCont['ID_cont'];

    $consultaResp = "SELECT * FROM responde WHERE ID_usuario LIKE '$ID_usuario' AND id_cont LIKE '$cont'";
    $conResp = mysqli_query($conexao, $consultaResp); 
  
      while ($mostrarResp = mysqli_fetch_array($conResp)) {
        echo "Acertos:".$mostrarResp['acertos']."/5<br>";
        $ColunaAcertos = $mostrarResp['acertos'] * 10;
        echo "<input type='none' readonly='true' size='$ColunaAcertos'><br>";

        echo "Fáceis:".$mostrarResp['faceis']."<br>";
        $ColunaFaceis = $mostrarResp['faceis'] * 10;
        echo "<input type='none' readonly='true' size='$ColunaFaceis'><br>";

        echo "Médias:".$mostrarResp['medias']."<br>";
        $ColunaMedias = $mostrarResp['medias'] * 10;
        echo "<input type='none' readonly='true' size='$ColunaMedias'><br>";

        echo "Difíceis:".$mostrarResp['dificeis']."<br>";
        $ColunaDificeis = $mostrarResp['dificeis'] * 10;
        echo "<input type='none' readonly='true' size='$ColunaDificeis'><br><br>";
      }
    
  }










?>