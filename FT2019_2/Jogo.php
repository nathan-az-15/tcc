<!DOCTYPE html>
<html lang = "pt-br">

	<head>

		<title> Jogo </title>
		
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

		<link rel = "stylesheet" type = "text/css" href = "css/Pag.css">

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Google+Sans">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
		
            $(document).ready(function(){

                $("li").removeClass("NavActive");
                $("#NavJogo").addClass("NavActive");

            });	
        
        </script>
		
	</head>

    <body>

        <div id = "jogo">

            <div id = "SubJogo">

                <div id = "inicial">

                    <?php include "resources/Header.php"; ?>

                    <main>

                        <div class = "SubMain">

                            <h1> Quiz </h1>
                            <p class = "enunciado">
                                O quiz apresenta 20 questões com cada uma possuindo 4 alternativas onde apenas uma está correta, sobre o Sistema Solar. 
                                Seu objetivo é acertar o maior número de questões no menor tempo possível. Boa Sorte!
                            </p>
                            <span class = "btn" id = "iniciar"> 
                                <a> Iniciar Quiz </a>
                            </span>

                        </div>

                    </main>

                </div>

                <div id = "quiz">

                    <div id = "cronometro">

                        <div id = "SubCronometro">

                            <div id = "TempoCronometro">
                                <span id = "hora"> 00: </span>
                                <span id = "minuto"> 00: </span>
                                <span id = "segundo"> 00 </span>
                            </div>

                        </div>

                    </div>

                    <main>

                    <input type = "hidden" id = "R1">
                    <input type = "hidden" id = "R2">
                    <input type = "hidden" id = "R3">
                    <input type = "hidden" id = "R4">
                    <input type = "hidden" id = "R5">
                    <input type = "hidden" id = "R6">
                    <input type = "hidden" id = "R7">
                    <input type = "hidden" id = "R8">
                    <input type = "hidden" id = "R9">
                    <input type = "hidden" id = "R10">
                    <input type = "hidden" id = "R11">
                    <input type = "hidden" id = "R12">
                    <input type = "hidden" id = "R13">
                    <input type = "hidden" id = "R14">
                    <input type = "hidden" id = "R15">
                    <input type = "hidden" id = "R16">
                    <input type = "hidden" id = "R17">
                    <input type = "hidden" id = "R18">
                    <input type = "hidden" id = "R19">
                    <input type = "hidden" id = "R20">
                        
                        <div class = "q" id = "q1">
                            <p class = "enunciado"> 
                                Qual o planeta conhecido como estrela D'alva?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R1_1" onclick = "verifica(1, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Vênus </p>
                                </li>
                                <li class = "alt" id = "R1_2" onclick = "verifica(1, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Lua </p>
                                </li>
                                <li class = "alt" id = "R1_3" onclick = "verifica(1, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Sol </p>
                                </li>
                                <li class = "alt" id = "R1_4" onclick = "verifica(1, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Marte </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ1"> Avançar </span>
                        </div>

                        <div class = "q" id = "q2">
                            <p class = "enunciado"> 
                                Qual é o planeta que os cientistas estão vasculhando se há ou já teve vida?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R2_1" onclick = "verifica(2, 1, 3)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Lua </p>
                                </li>
                                <li class = "alt" id = "R2_2" onclick = "verifica(2, 2, 3)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Saturno </p>
                                </li>
                                <li class = "alt" id = "R2_3" onclick = "verifica(2, 3, 3)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Marte </p>
                                </li>
                                <li class = "alt" id = "R2_4" onclick = "verifica(2, 4, 3)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Vênus </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ2"> Avançar </span>
                        </div>

                        <div class = "q" id = "q3">
                            <p class = "enunciado"> 
                                Qual o planeta considerado o menor do sistema solar?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R3_1" onclick = "verifica(3, 1, 4)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Lua </p>
                                </li>
                                <li class = "alt" id = "R3_2" onclick = "verifica(3, 2, 4)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Mercúrio </p>
                                </li>
                                <li class = "alt" id = "R3_3" onclick = "verifica(3, 3, 4)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Marte </p>
                                </li>
                                <li class = "alt" id = "R3_4" onclick = "verifica(3, 4, 4)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Plutão </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ3"> Avançar </span>
                        </div>

                        <div class = "q" id = "q4">
                            <p class = "enunciado"> 
                                Qual o maior planeta do sistema solar?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R4_1" onclick = "verifica(4, 1, 3)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Vênus </p>
                                </li>
                                <li class = "alt" id = "R4_2" onclick = "verifica(4, 2, 3)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Saturno </p>
                                </li>
                                <li class = "alt" id = "R4_3" onclick = "verifica(4, 3, 3)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Júpiter </p>
                                </li>
                                <li class = "alt" id = "R4_4" onclick = "verifica(4, 4, 3)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Sol </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ4"> Avançar </span>
                        </div>

                        <div class = "q" id = "q5">
                            <p class = "enunciado"> 
                                Assinale a alternativa INCORRETA:
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R5_1" onclick = "verifica(5, 1, 2)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> O Sol é a maior estrela do Sistema Solar  </p>
                                </li>
                                <li class = "alt" id = "R5_2" onclick = "verifica(5, 2, 2)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Mercúrio é o planeta mais quente do Sistema Solar </p>
                                </li>
                                <li class = "alt" id = "R5_3" onclick = "verifica(5, 3, 2)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Netuno é o planeta mais frio do Sistema Solar </p>
                                </li>
                                <li class = "alt" id = "R5_4" onclick = "verifica(5, 4, 2)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> O planeta Terra fica na terceira posição do sistema solar </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ5"> Avançar </span>
                        </div>

                        <div class = "q" id = "q6">
                            <p class = "enunciado"> 
                                Por que as estrelas e o Sol são maiores do que a Terra?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R6_1" onclick = "verifica(6, 1, 3)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Por que eles possuem mais energia </p>
                                </li>
                                <li class = "alt" id = "R6_2" onclick = "verifica(6, 2, 3)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Por questões naturais </p>
                                </li>
                                <li class = "alt" id = "R6_3" onclick = "verifica(6, 3, 3)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Porque possuem muita massa e são formados por gases </p>
                                </li>
                                <li class = "alt" id = "R6_4" onclick = "verifica(6, 4, 3)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Porque a Terra não emite luz </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ6"> Avançar </span>
                        </div>

                        <div class = "q" id = "q7">
                            <p class = "enunciado"> 
                                A Forma que os planetas giram ao redor do Sol, formam que espécie de órbita?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R7_1" onclick = "verifica(7, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Órbitas elípticas </p>
                                </li>
                                <li class = "alt" id = "R7_2" onclick = "verifica(7, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Órbitas circular </p>
                                </li>
                                <li class = "alt" id = "R7_3" onclick = "verifica(7, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Órbita Solar </p>
                                </li>
                                <li class = "alt" id = "R7_4" onclick = "verifica(7, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Órbita polar </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ7"> Avançar </span>
                        </div>

                        <div class = "q" id = "q8">
                            <p class = "enunciado"> 
                                Quais são os gases que formam essencialmente o Sol?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R8_1" onclick = "verifica(8, 1, 4)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Metano </p>
                                </li>
                                <li class = "alt" id = "R8_2" onclick = "verifica(8, 2, 4)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Carbônico </p>
                                </li>
                                <li class = "alt" id = "R8_3" onclick = "verifica(8, 3, 4)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Oxigênio e Carbônico </p>
                                </li>
                                <li class = "alt" id = "R8_4" onclick = "verifica(8, 4, 4)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Hidrogênio e Hélio </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ8"> Avançar </span>
                        </div>

                        <div class = "q" id = "q9">
                            <p class = "enunciado"> 
                                Qual o astro mais próximo da Terra?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R9_1" onclick = "verifica(9, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Lua </p>
                                </li>
                                <li class = "alt" id = "R9_2" onclick = "verifica(9, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Halley </p>
                                </li>
                                <li class = "alt" id = "R9_3" onclick = "verifica(9, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Sol </p>
                                </li>
                                <li class = "alt" id = "R9_4" onclick = "verifica(9, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Mercúrio </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ9"> Avançar </span>
                        </div>

                        <div class = "q" id = "q10">
                            <p class = "enunciado"> 
                                Qual o planeta mais distante do Sol
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R10_1" onclick = "verifica(10, 1, 2)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Urano </p>
                                </li>
                                <li class = "alt" id = "R10_2" onclick = "verifica(10, 2, 2)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Netuno </p>
                                </li>
                                <li class = "alt" id = "R10_3" onclick = "verifica(10, 3, 2)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Saturno </p>
                                </li>
                                <li class = "alt" id = "R10_4" onclick = "verifica(10, 4, 2)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Júpiter </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ10"> Avançar </span>
                        </div>

                        <div class = "q" id = "q11">
                            <p class = "enunciado"> 
                                Quais são os planetas gasosos do Sistema Solar?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R11_1" onclick = "verifica(11, 1, 3)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Júpiter, Saturno, Mercúrio e Vênus </p>
                                </li>
                                <li class = "alt" id = "R11_2" onclick = "verifica(11, 2, 3)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Mercúrio, Saturno, Terra e Marte </p>
                                </li>
                                <li class = "alt" id = "R11_3" onclick = "verifica(11, 3, 3)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Júpiter, Saturno, Urano e Netuno </p>
                                </li>
                                <li class = "alt" id = "R11_4" onclick = "verifica(11, 4, 3)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Júpiter, Saturno, Mercúrio e Vênus </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ11"> Avançar </span>
                        </div>

                        <div class = "q" id = "q12">
                            <p class = "enunciado"> 
                                Por que o planeta Urano tem seu tom azulado?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R12_1" onclick = "verifica(12, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Por causa do gás metano </p>
                                </li>
                                <li class = "alt" id = "R12_2" onclick = "verifica(12, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Por causa do calor </p>
                                </li>
                                <li class = "alt" id = "R12_3" onclick = "verifica(12, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Por causa do frio </p>
                                </li>
                                <li class = "alt" id = "R12_4" onclick = "verifica(12, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Por causa do gás hélio </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ12"> Avançar </span>
                        </div>

                        <div class = "q" id = "q13">
                            <p class = "enunciado"> 
                                Quais são os nomes das luas de marte?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R13_1" onclick = "verifica(13, 1, 2)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Fobos e Ariel </p>
                                </li>
                                <li class = "alt" id = "R13_2" onclick = "verifica(13, 2, 2)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Fobos e Deimos </p>
                                </li>
                                <li class = "alt" id = "R13_3" onclick = "verifica(13, 3, 2)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Umbriel e Deimos </p>
                                </li>
                                <li class = "alt" id = "R13_4" onclick = "verifica(13, 4, 2)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Fobos e Tritão </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ13"> Avançar </span>
                        </div>

                        <div class = "q" id = "q14">
                            <p class = "enunciado"> 
                                Os satélites naturais Oberon e Titania fazem parte de qual planeta?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R14_1" onclick = "verifica(14, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Urano </p>
                                </li>
                                <li class = "alt" id = "R14_2" onclick = "verifica(14, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Netuno </p>
                                </li>
                                <li class = "alt" id = "R14_3" onclick = "verifica(14, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Saturno </p>
                                </li>
                                <li class = "alt" id = "R14_4" onclick = "verifica(14, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Júpiter </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ14"> Avançar </span>
                        </div>

                        <div class = "q" id = "q15">
                            <p class = "enunciado"> 
                                Que planeta tem um nome que faz referência a deusa romana do amor?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R15_1" onclick = "verifica(15, 1, 4)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Júpiter </p>
                                </li>
                                <li class = "alt" id = "R15_2" onclick = "verifica(15, 2, 4)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Netuno </p>
                                </li>
                                <li class = "alt" id = "R15_3" onclick = "verifica(15, 3, 4)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Urano </p>
                                </li>
                                <li class = "alt" id = "R15_4" onclick = "verifica(15, 4, 4)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Vênus </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ15"> Avançar </span>
                        </div>

                        <div class = "q" id = "q16">
                            <p class = "enunciado"> 
                                Os nomes dos planetas do Sistema Solar foram baseados em duas mitologias. Quais são elas?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R16_1" onclick = "verifica(16, 1, 2)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Nórdica e Grega </p>
                                </li>
                                <li class = "alt" id = "R16_2" onclick = "verifica(16, 2, 2)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Romana e Grega </p>
                                </li>
                                <li class = "alt" id = "R16_3" onclick = "verifica(16, 3, 2)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Egípcia e Romana </p>
                                </li>
                                <li class = "alt" id = "R16_4" onclick = "verifica(16, 4, 2)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Asteca e Hindu </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ16"> Avançar </span>
                        </div>

                        <div class = "q" id = "q17">
                            <p class = "enunciado"> 
                                Quantos planetas e planetas anões existem no nosso Sistema Solar atualmente?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R17_1" onclick = "verifica(17, 1, 2)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> 8 planetas e 5 planetas anões </p>
                                </li>
                                <li class = "alt" id = "R17_2" onclick = "verifica(17, 2, 2)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> 7 planetas e 1 planeta anão </p>
                                </li>
                                <li class = "alt" id = "R17_3" onclick = "verifica(17, 3, 2)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> 8 planetas </p>
                                </li>
                                <li class = "alt" id = "R17_4" onclick = "verifica(17, 4, 2)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> 5 planetas e 5 planetas anões </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ17"> Avançar </span>
                        </div>

                        <div class = "q" id = "q18">
                            <p class = "enunciado"> 
                                Quantas luas tem Júpiter?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R18_1" onclick = "verifica(18, 1, 1)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> 4 luas </p>
                                </li>
                                <li class = "alt" id = "R18_2" onclick = "verifica(18, 2, 1)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> 5 luas </p>
                                </li>
                                <li class = "alt" id = "R18_3" onclick = "verifica(18, 3, 1)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> 1 lua </p>
                                </li>
                                <li class = "alt" id = "R18_4" onclick = "verifica(18, 4, 1)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Nenhuma lua </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ18"> Avançar </span>
                        </div>

                        <div class = "q" id = "q19">
                            <p class = "enunciado"> 
                                Qual é o maior e o menor planeta do Sistema Solar respectivamente?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R19_1" onclick = "verifica(19, 1, 3)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Marte e Saturno </p>
                                </li>
                                <li class = "alt" id = "R19_2" onclick = "verifica(19, 2, 3)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Júpiter e Vênus </p>
                                </li>
                                <li class = "alt" id = "R19_3" onclick = "verifica(19, 3, 3)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> Júpiter e Mercúrio </p>
                                </li>
                                <li class = "alt" id = "R19_4" onclick = "verifica(19, 4, 3)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Terra e Urano </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQ19"> Avançar </span>
                        </div>

                        <div class = "q" id = "q20">
                            <p class = "enunciado"> 
                                Como as crateras da Lua surgiram?
                            </p>
                            <ul class = "qPerguntasGroup">

                                <li class = "alt" id = "R20_1" onclick = "verifica(20, 1, 4)">
                                    <span> #1 - </span>
                                    <p class = "alternativas"> Os foguetes enviados dos EUA causaram isso. </p>
                                </li>
                                <li class = "alt" id = "R20_2" onclick = "verifica(20, 2, 4)">
                                    <span> #2 - </span>
                                    <p class = "alternativas"> Desgaste da lua. </p>
                                </li>
                                <li class = "alt" id = "R20_3" onclick = "verifica(20, 3, 4)">
                                    <span> #3 - </span>
                                    <p class = "alternativas"> A lua sempre foi assim. </p>
                                </li>
                                <li class = "alt" id = "R20_4" onclick = "verifica(20, 4, 4)">
                                    <span> #4 - </span>
                                    <p class = "alternativas"> Colisão com meteoros. </p>
                                </li>

                            </ul>
                            <span class = "btn" id = "btnQFinal"> Finalizar Quiz </span>
                        </div>

                    </main>

                </div>

            </div>

        </div>

        <script type = "text/javascript" src = "js/Pag.js"></script>

    </body>

</html>