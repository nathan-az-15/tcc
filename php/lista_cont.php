<?php
    $conn = mysqli_connect('127.0.0.1', 'root', '') or die("Não foi possível a conexão com o Banco");
    $db = mysqli_select_db($conn,'bd_reo_tcc') or die("Não foi possível selecionar o Banco");
    //teria que fazer os botões da página de materias e dos anos como um form 
    //no cadastro de conteudos e testes de nivel precisaria da listbox puxando as materias
    
    $ano = $_POST["ano"];
    $materia = $_POST["materia"];

    $sql = "SELECT * FROM conteudos where cod_mat like '%".$materia."%' and ano like '%".$ano."%'";
    $cod = mysqli_query($conn,$sql);

    $numRegistros = mysqli_num_rows($cod);
    if ($numRegistros != 0) {

        while ($text = mysqli_fetch_object($cod)) {
            echo $text->assunto;
        }
    }
    else{
        echo "Nenhum registro";
    }
?>
