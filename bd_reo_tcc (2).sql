-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2020 às 19:06
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_reo_tcc`
--
CREATE DATABASE IF NOT EXISTS bd_reo_tcc DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE bd_reo_tcc;
-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_adm` int(1) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_adm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`ID_adm`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'ADM', 'ADM_reforc@gmail.com', 'ADM_REO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

CREATE TABLE IF NOT EXISTS `conteudos` (
  `ID_cont` int(2) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `end_imagens_cont` varchar(250) NOT NULL,
  `cod_mat` int(2) NOT NULL,
  `cod_adm` int(1) NOT NULL,
  `ano` int(1) NOT NULL,
  `assunto` varchar(70) NOT NULL,
  PRIMARY KEY (`ID_cont`),
  KEY `fk_conteudos_administrador` (`cod_adm`),
  KEY `fk_conteudos_materias` (`cod_mat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudos`
--

INSERT INTO `conteudos` (`ID_cont`, `texto`, `end_imagens_cont`, `cod_mat`, `cod_adm`, `ano`, `assunto`) VALUES
(1, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'askfjshdjfdddddddd', 1, 1, 1, 'Verbo'),
(2, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'sdfsdgfuilolo', 1, 1, 2, 'Substantivo'),
(3, 'khhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhkkkkkkkkkkkkk', 'Screenshot_20201007-154156.jpg', 3, 1, 2, 'Querra'),
(4, 'Texto explicativo sobre dom pedro I dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'download.jpg', 3, 1, 2, 'Dom Pedro I'),
(5, 'SLAKFHSKFJHOEIWHFWOJCJEWHFUEFHIWUEF', 'download1.jpg', 3, 1, 2, 'Era vargas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `indicacoes`
--

CREATE TABLE IF NOT EXISTS `indicacoes` (
  `ID_ind` int(3) NOT NULL AUTO_INCREMENT,
  `plataforma` varchar(70) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `cod_mat` int(2) NOT NULL,
  `cod_adm` int(1) NOT NULL,
  `end_imagem_ind` varchar(400) NOT NULL,
  PRIMARY KEY (`ID_ind`),
  KEY `fk_indicacoes_materias` (`cod_mat`),
  KEY `fk_indicacoes_administrador` (`cod_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `indicacoes`
--

INSERT INTO `indicacoes` (`ID_ind`, `plataforma`, `titulo`, `autor`, `descricao`, `cod_mat`, `cod_adm`, `end_imagem_ind`) VALUES
(2, 'Livro', 'Biologia Molecular da Célula', 'Bruce Alberts, Alexander Johnson, Julian Lewis, Martin Raff, Keith Roberts e Peter Walter', 'Biologia Molecular da Célula é um livro de biologia celular e molecular publicado originalmente pela editora Garland Science', 5, 1, 'biologia_citologia_livro_biologiamolecular.jpg'),
(4, 'Documentario', 'Vida no Ventre', 'Toby MacDonald', 'O documenário procura detalhar todas as etapas da gestação de um feto.', 5, 1, 'biologia_embriologia_documentario_vidanoventre.jpg'),
(5, 'Serie', 'De Olho na Ciência', 'Roquette Pinto', 'A série abrange vários aspectos da ciência, porém essa indicação se atém especificamente sobre o primeiro episódio que busca retratar do metabolismo energético, como obter energia e etc.', 5, 1, 'biologia_metabolismoenergetico_serie_deolhonaciencia.jpg'),
(7, 'Filme', 'Núcleo – Missão ao Centro da Terra', 'Jon Amiel', 'Dr. Josh Keyes (geofísico), identifica uma paralisação na rotação da Terra. E esse mal traz problemas catastróficos para a Terra. Afim de resolver o problema, Josh reúne uma equipe que tem como objetivo ir ao centro da Terra para reativar a rotação do planeta.  ', 4, 1, 'geografia_filme_núcleo.jpg'),
(8, 'Filme', 'Adeus, Lênin', 'Wolfgang Becker', 'Tudo começa quando uma mulher que entra em um coma antes da Guerra Fria acorda em 1990, um pouco antes do fim da Guerra. Porém o seu filho é advertido que sua mãe não pode passar por emoções muito fortes. E isso se torna um grande desafio, já que nesse período já ocorrou os principais desdobramentos do fim da Guerra Fria.', 4, 1, 'geografia_filme_adeuslenin.jpg'),
(9, 'Documentario', 'O mundo global visto do lado de cá ', 'Sílvio Tendler', 'O documentário visa discutir os problemas de globalização com o ponto de vista das classes mais pobres. Entrevistado pelo geógrafo Milton Santos.', 4, 1, 'geografia_globalizacao_documentario_miltonsantos.jpg'),
(10, 'Documentario', 'Santo Forte', 'Eduardo Coutinho', 'Este documentário entrevista moradores de diversas regiões no Rio, com o objetivo de gerar pontos de vista sobre a diversidade religiosa e cultural brasileira.', 4, 1, 'geografia_diversidadecultural_documentario_santoforte.jpg'),
(11, 'Livro', 'Darwinismo Social: Política, economia e educação', 'Juan Carlos Priora ', 'Esse livro busca explica como o Darwinismo Social atua em várias áreas da sociedade não se tornando antiquado, como podemos concluir.', 4, 1, 'geografia_darwinismosocial_livro_darwinismosocial.jpg'),
(12, 'Livro', 'Aleatoriedade', 'Deborah J. Bennett', 'O livro busca abordar de maneira mais prática e cotidiana acerca do mundo das probabilidades e estatísticas.', 2, 1, 'matematica_probabilidade_livro_aleatoriedade.jpg'),
(14, 'Livro', 'O classicismo', 'J. Guinsburg', 'O livro busca reunir um resumo das informações sobre a época, relacionando aspectos filosóficos e científicos.', 1, 1, 'literatura_classicismo_livro_oclassicismo.jpg'),
(15, 'Livro', 'A Field Guide to Lies and Statistics: A Neuroscientist on How to Make ', 'Daniel Levitin ', 'O livro explica como funciona  a lógica por trás de estatísticas, sendo um guia acessível e cheio de exemplos esclarecedores.', 2, 1, 'matematica_estatistica_livro_afieldguidetoliesandstatistics.jpg'),
(16, 'Livro', 'Parnasianismo', 'Sânzio De Azevedo', 'O livro compila com 19 poetas, de expressões diversas, que abrange todas as tendências e expressões de Parnasianismo.', 1, 1, 'literatura_parnasianismo_livro_parnasianismo.jpg'),
(17, 'Filme', 'Contágio', 'Steven Soderbergh', 'Tudo se inicia quando Beth Emhoff morre por contaa de uma suposta gripe, que mais tarde passa a se mostrar como algo muito mais perigoso. Esse filme retrata muito bem a forma como funciona o contágio e o trabalho de um vírus.', 5, 1, 'biologia_virus_filme_contagio.jpg'),
(18, 'Livro', 'Introdução a Botânica', 'Harri Lorenzi', 'Este livro tem como foco o estudo das partes da plantas, suas variações,  classificações, origens e ligação com o meio ambiente.', 5, 1, 'biologia_reinoplantae_livro_introducaoabotanica.jpg'),
(19, 'Livro', 'A origem das espécies ', 'Charles Darwin', 'O naturalista britânico, Charles Darwin, pretende nesse livro comentar sobre a Origem das Espécies que hoje fundamenta parte da biologia como um todo.', 5, 1, 'biologia_evolucao_livro_origemdasespecies.jpg'),
(20, 'Filme', 'A Guerra do Fogo', 'Jean-Jacques annaud', 'É uma história ambientada na pré-história, que retrata três membros de uma mesma tribo à procura de uma nova fonte de fogo.', 3, 1, 'historia_prehistoria_filme_guerraaofogo.jpg'),
(21, 'Livro', 'A Civilização Grega', 'Francois Chamoux', 'Este é um livro completo, retrata todos os períodos da história da Grécia de maneira detalhada.', 3, 1, 'historia_grecia_livro_acivilizacaogrega.jpg'),
(22, 'Filme', '300', 'Zack Snyder', 'É importante ressaltar que este filme não é recomendado para menores de 18 anos.  No período de 480 a.C., houve uma guerra entre persas e gregos. Porém, existiu uma batalha emblemática durante este período, a Batalha das Termópilas, e o filme busca retratar como foi esse processo.   ', 3, 1, 'historia_esparta_filme_300.jpg'),
(23, 'Livro', 'A ascensão de Atenas: A história da maior civilização do mundo', 'Anthony Everitt', 'O livro busca explicar minuciosamente como a cidade de Atenas com 200 mil habitantes passou a se tornar uma das civilização mais importantes da história da humanidade. ', 3, 1, 'historia_atenas_livro_ascensaodeatenas.jpg'),
(24, 'Filme', 'Tempos Modernos ', 'Charlie Chaplin', 'Empregado em uma fábrica Vagabundo passa por diversas situações que retratam características da Revolução Industrial.', 3, 1, 'historia_revolucaoindustrial_filme_temposmodernos.jpg'),
(25, 'Livro', 'Coração das Trevas ', 'Joseph Conrad', 'Violência e preconceito que foram implantados pelo conlonialismo são temas tratados no livro. O livro conta o relato do personagem Chralie Marlow, o marinheiro sobre um explorador e comprador de marfim sr.Kurtz, que comandava o Congo.', 3, 1, 'historia_neocolonialismo_livro_coracaodastrevas.jpg'),
(26, 'Serie', 'Our World War', 'Joe Barton, Bem Chanan e Bruce Goodison', 'A minissérie se passa duas semanas após a declaração de guerra, em agosto de 1914. E busca levantar diversas perspectivas e detalhes sobre a 1° Guerra Mundial.', 3, 1, 'historia_1guerramundial_serie_ourworldwar.jpg'),
(27, 'Serie', 'Irmãos de Guerra', 'Tom Hanks, Tony To', 'Uma das melhores séries da 2° Guerra Mundial, conta a história daEasy Company, integrante da 101ª, petencente ao 2° Batalhão do 506° Regimento de infantaria paraquedista. A série foca no período conhecido como Dia D, desde a preparação dos soldados até o ataque.', 3, 1, 'historia_2guerramundial_serie_irmaosdeguerra.jpg'),
(28, 'Documentario', 'Era Vargas, O Crepúsculo de um Ídolo', 'Brasil Paralelo', 'O documentário feito pela equipe busca retratar o período que vaiàa Proclamação da República, em 1889 até o suicídio de Getúlio, em 1954.', 3, 1, 'historia_eravargas_documentario_eravargas.jpg'),
(29, 'Documentario', 'Isaac Newton: O Último Mágico', 'Renny Bartlett', 'Uma série da BBC, que procura divulgar uma biografia inovadora, que traça um paralelo entre ciência e ocultismo (que julgavam ser a ciência na época).', 7, 1, 'fisica_leisdenewton_documentario_isaacnewton.jpg'),
(30, 'Filme', 'Gravidade', 'Alfonso Carón', 'Após um acidente na estação espacial, Dra. Ryan Stonr e Matt Kowalsky se esforçam para viver, sem conexão com a Terra ou expectativa de resgate.', 7, 1, 'fisica_gravitacao_filme_gravidade.jpg'),
(31, 'Livro', 'Uma Biografia da Luz Ou a Triste História do Fotão Cansado', 'José Tito Mendonça ', 'O livro busca a abordar o tema da luminosidade sob a perspectiva da física, explicando os seus conceitos até para os mais entusiastas', 7, 1, 'fisica_naturezadaluzesuaspropriedades_livro_umabiografiadaluz.jpg'),
(32, 'Documentario', 'POWER -O Poder por Trás da Energia', 'History Channel', 'Este documentário reúne os prinicipais físicos e cientistas que contribuíram para o desenvolvimento da eletricidade, mostrando os principaisdesfios que eles tiveram para encontrar fontes alternativas de energia.', 7, 1, 'fisica_eletrizacaoecargaeletrica_documentario_power.jpg'),
(33, 'Livro', 'Fundamentos e Circuitos Elétricos', 'Charles K. Alexander, Matthew Sadiku', 'Este livro é indicado a pessoas mais interessadas na área da eletricidade, pois busca se aprofundar dos conceitos por trás dos circuitos elétricos, com o ojetivo também de estimular o senso crítico e analisar problemas relacionados a área.', 7, 1, 'fisica_potenciaassociacaoderesistores_livro_fundamentosecircuitoseletricos.jpg'),
(34, 'Livro', 'A Natureza da Ligação Química', 'Linus Pauling ', 'Esse livro escrito pelo cientista Linus Pauling, que ficou conhecido por elucidar essa área.', 6, 1, 'quimica_ligacaoquimica_livro_anaturezadaligacaoquimica.jpg'),
(35, 'Livro', 'Princípios de Química: Questionando a Vida Moderna e o Meio Ambiente', 'Peter Atkins, Loretta Jones, Leroy Laverman, Ricardo Bicca de Alencastro', 'Este livro aborda sobre os príncipios da química, consequentemente engloba todas as informações da Química Geral, desde reações química até soluçõa entre outros.', 6, 1, 'quimica_reacaoquimica_livro_prinicipiosdaquimica.jpg'),
(36, 'Livro', 'Química Orgânica - Funções e Isomeria', 'Luciana da Conceição Pavanelli', 'Esse livro didático contém exercícios, e a definição dos conceitos básicos de funções e isomeria.', 6, 1, 'quimica_funcoesquimica_livro_quimicaorganica.jpg'),
(37, 'Serie', 'Chernobyl', 'Johan Renck', 'A série conta a trama por trás das pessoas envolvidas no desastre de da Usina Nuclear de Chernobyl, em 25 de abril de 1985. Mostrando os impactos que a radiação pode causar em um ambiente.', 6, 1, 'quimica_radioatividade_serie_chernobyl.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `ID_materia` int(2) NOT NULL AUTO_INCREMENT,
  `nome_mat` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`ID_materia`, `nome_mat`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'História'),
(4, 'Geografia'),
(5, 'Biologia'),
(6, 'Química'),
(7, 'Física');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `ID_questoes` int(3) NOT NULL AUTO_INCREMENT,
  `end_imagens_quest` text NOT NULL,
  `enunciado` text NOT NULL,
  `alt_a` varchar(200) NOT NULL,
  `alt_b` varchar(200) NOT NULL,
  `alt_c` varchar(200) NOT NULL,
  `alt_d` varchar(200) NOT NULL,
  `alt_e` varchar(200) NOT NULL,
  `alt_correta` varchar(1) NOT NULL,
  `explicacao` text NOT NULL,
  `cod_cont` int(2) NOT NULL,
  `cod_adm` int(2) NOT NULL,
  `ano` int(1) NOT NULL,
  PRIMARY KEY (`ID_questoes`),
  KEY `fk_questoes_conteudos` (`cod_cont`),
  KEY `fk_questoes_administrador` (`cod_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`ID_questoes`, `end_imagens_quest`, `enunciado`, `alt_a`, `alt_b`, `alt_c`, `alt_d`, `alt_e`, `alt_correta`, `explicacao`, `cod_cont`, `cod_adm`, `ano`) VALUES
(1, '', 'sretrjyykjhfgdf', 'aaaaaaaa', 'bbbbbbbbbbb', 'ccccccccccccccc', 'ddddddddddddddd', '', 'A', 'sdgehtryjtkumnbdvsdfewg', 4, 1, 2),
(2, 'download1.jpg', 'sjfhsodjfhsdjfhskjfh', 'asasasasas', 'babaabababba', 'dsdfsdfsd', 'tgsercsergvcdf', '', 'B', 'klhefljhweofjcbdvmbsv', 4, 1, 2),
(3, '', 'SADFGHJKUYTGRFDC', 'ASDFERHREBWAGVAV', 'dverhrtjrnbeb', 'sdverthukrbv', 'dvfbndfbsdsd', '', 'E', 'asjhfaiosfheroihvnfdoireuog', 5, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responde`
--

CREATE TABLE IF NOT EXISTS `responde` (
  `ID_usuario` int(2) NOT NULL,
  `Id_questoes` int(3) NOT NULL,
  `resposta_usuario` varchar(1) NOT NULL,
  KEY `fk_responde_usuario` (`ID_usuario`),
  KEY `fk_responde_questoes` (`Id_questoes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `escolaridade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `serie_ano` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `nome_usuario`, `data_nasc`, `escolaridade`, `email_usuario`, `senha_usuario`, `serie_ano`) VALUES
(1, 'Nathan de Azevedo Capelo', '2002-03-15', 'Cursando Ensino médio', 'nata.mili@hotmail.com', 'nathan15', '3° ano'),
(2, 'Maria Emilia', '1965-05-22', 'Ensino Superior', 'emilia@etec.com', '1234567', '1');

--
-- Indexes for dumped tables
--

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conteudos`
--
ALTER TABLE `conteudos`
  ADD CONSTRAINT `fk_conteudos_administrador` FOREIGN KEY (`cod_adm`) REFERENCES `administrador` (`ID_adm`),
  ADD CONSTRAINT `fk_conteudos_materias` FOREIGN KEY (`cod_mat`) REFERENCES `materias` (`ID_materia`);

--
-- Limitadores para a tabela `indicacoes`
--
ALTER TABLE `indicacoes`
  ADD CONSTRAINT `fk_indicacoes_administrador` FOREIGN KEY (`cod_adm`) REFERENCES `administrador` (`ID_adm`),
  ADD CONSTRAINT `fk_indicacoes_materias` FOREIGN KEY (`cod_mat`) REFERENCES `materias` (`ID_materia`);

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `fk_questoes_administrador` FOREIGN KEY (`cod_adm`) REFERENCES `administrador` (`ID_adm`),
  ADD CONSTRAINT `fk_questoes_conteudos` FOREIGN KEY (`cod_cont`) REFERENCES `conteudos` (`ID_cont`);

--
-- Limitadores para a tabela `responde`
--
ALTER TABLE `responde`
  ADD CONSTRAINT `fk_responde_questoes` FOREIGN KEY (`Id_questoes`) REFERENCES `questoes` (`ID_questoes`),
  ADD CONSTRAINT `fk_responde_usuario` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
