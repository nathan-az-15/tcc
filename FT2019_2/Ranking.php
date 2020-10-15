<!DOCTYPE html>
<html lang = "pt-br">

	<head>

		<title> Ranking </title>
		
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

		<link rel = "stylesheet" type = "text/css" href = "css/Pag.css">

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Google+Sans">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
		
            $(document).ready(function(){

                $("li").removeClass("NavActive");
                $("#NavRanking").addClass("NavActive");

            });	
        
        </script>
		
	</head>

    <body>

        <div id = "ranking">

            <div id = "SubRanking">

                <?php include "resources/Header.php"; ?>

                <main>

                    <div class = "SubMain">

                        <h1> Ranking </h1>

                        <table>

                            <thead>

                                <tr class = "TrTitulo">
                                    <td class = "td1"> Posição </td>
                                    <td class = "td2"> Nome do Jogador </td>
                                    <td class = "td3"> Pontuação </td>
                                    <td class = "td4"> Tempo </td>
                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                    $conexao = mysqli_connect('localhost', 'root', 'usbw', 'rank_ft');

                                    $consulta = mysqli_query($conexao, "SELECT  FROM pontuacao AS P INNER JOIN jogador AS J ON P.id_jogador=J.id_jogador ORDER BY pontuacao");
                                    

                                    $i = 1;

                                    //if($rows > 0){

                                        while($mostrar = mysqli_fetch_array($consulta)){
                                            
                                            echo '
                                            
                                                <tr class = "TrDados">
                                                    <td class = "td1"> '. $i .' </td>
                                                    <td class = "td2"> '. $mostrar['J.Nome'] .' </td>
                                                    <td class = "td3"> '. $mostrar['P.pontos'] .' </td>
                                                    <td class = "td4"> '. $mostrar['P.tempo_quiz'] .' </td>
                                                </tr>
                                            
                                            ';

                                            $i++;

                                        }

                                    /*}else{

                                        echo '
                                            
                                            <tr id = "TrError">
                                                <td> Ranking indisponível! </td>
                                            </tr>
                                        
                                        ';

                                    }  */                                    
                                
                                ?>
                            
                            </tbody>

                        </table>

                    </div>

                </main>

            </div>
        
        </div>

    </body>

</html>