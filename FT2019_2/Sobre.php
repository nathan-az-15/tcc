<!DOCTYPE html>
<html lang = "pt-br">

	<head>

		<title> Sobre </title>
		
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">

		<link rel = "stylesheet" type = "text/css" href = "css/Pag.css">

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Google+Sans">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
		
            $(document).ready(function(){

                $("li").removeClass("NavActive");
                $("#NavSobre").addClass("NavActive");

            });	
        
        </script>
		
	</head>

    <body>

        <div id = "sobre">

            <div id = "SubSobre">

                <?php include "resources/Header.php"; ?>

                <main>

                    <div class = "SubMain">
                    
                        <section>

                            <h1> Introdução </h1>
                            <p>
                                O Sistema Solar compreende o conjunto constituído pelo Sol e todos os corpos celestes que estão sob seu domínio gravitacional. 
                                A estrela central, maior componente do sistema, respondendo por mais de 99,85% da massa total, gera sua energia através da fusão de hidrogênio em hélio, dois de seus principais constituintes. 
                                Os quatro planetas mais próximos do Sol (Mercúrio, Vênus, Terra e Marte) possuem em comum uma crosta sólida e rochosa, razão pela qual se classificam no grupo dos planetas telúricos, ou rochosos. 
                                Mais afastados, os quatro gigantes gasosos, Júpiter, Saturno, Urano e Netuno, são os componentes de maior massa do sistema logo após o próprio Sol.
                            </p>
                            <p>
                                A partir de pesquisas sobre o tema, foi analisado que, existem diversas questões e curiosidades que não são do saber de todos. 
                                Baseando-se nisso, a turma do 2º ETIM de Informática desenvolveu uma página web com perguntas e alternativas sobre o nosso sistema solar.
                            </p>

                        </section>
                        <section>

                            <h1> Desenvolvimento </h1>
                            <p>
                                Na página web desenvolvida é possível aprender de forma descontraída e simplificada questões que muitos tem dúvidas. O usuário deverá escolher as alternativas que julgar corretas a partir de uma pergunta dada e, ao finalizar ele terá acesso ao seu desempenho através de informações sobre sua pontuação total.  
                            </p>
                            <p>
                                Para que haja maior conhecimento sobre o tema em questão, a página final apresentará uma curiosidade como acompanhamento da pontuação do usuário.
                            </p>
                            <p>
                                Desenvolvido pelos alunos da segunda série do ETIM Informática da ETEC da Zona Leste em 2019.
                            </p>

                        </section>
                        <section>

                            <h1> Conclusão </h1>
                            <p>
                                Sabe-se que como havia certa deficiência no conhecimento sobre conceitos básicos do Sistema Solar, o projeto realizado foi de grande valia para o aprimoramento do aprendizado da comunidade.
                            </p>

                        </section>
                        <section>

                            <h1> Créditos </h1> 
                            
                            <h2> Desenvolvedores </h2>

                            <h3> Front-end </h3>
                            <ul>
                                <li> Felipe Rodrigues Soares </li>
                                <li> Rodrigo Lima Nogueira Santos </li>
                            </ul>

                            <h3> Back-end </h3>
                            <ul>
                                <li> Christopher Pitter da Silva </li>
                                <li> Felipe Rodrigues Soares </li>
                                <li> Guilherme Tamura Makibara </li>
                                <li> João Pedro Oliveira Gonçalves </li>
                                <li> Luís Gustavo Feitoza </li>
                                <li> Marcos Augusto Quiuqui </li>
                                <li> Pedro Takeyuki Telles Marumo </li>
                                <li> Rodrigo Lima Nogueira Santos </li>
                                <li> Tiago Barbosa Fortunato </li>
                            </ul>

                            <h2> Agradecimentos </h2>

                            <ul>
                                <li> Alunos da segunda série do ETIM Informática da ETEC da Zona Leste 2019 </li>
                                <li> Professores e coordenadores da ETEC da Zona Leste </li>
                            </ul>

                        </section>

                    </div>
    
                </main>

                <footer>

                    <div class = "SubFooter">

                        <ul>
                            <li> Copyright <script type = "text/javascript"> var ano = new Date(); document.write(ano.getFullYear()); </script>. Todos os direitos reservados. </li>
                            <li> Desenvolvido por 2º ETIM Informática 2019. </li>
                        </ul>

                    </div>

                </footer>

            </div>

        </div>

    </body>
    
</html>