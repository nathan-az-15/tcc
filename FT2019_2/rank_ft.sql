-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2019 às 08:16
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rank_ft`
--
CREATE DATABASE IF NOT EXISTS `rank_ft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rank_ft`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id_alternativa` int(11) NOT NULL,
  `alternativa` varchar(240) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `indicador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id_alternativa`, `alternativa`, `id_pergunta`, `indicador`) VALUES
(1, 'Vênus', 1, 1),
(2, 'Lua', 1, 0),
(3, 'Sol', 1, 0),
(4, 'Marte', 1, 0),
(5, 'Marte', 2, 2),
(6, 'Saturno', 2, 0),
(7, 'Lua', 2, 0),
(8, 'Vênus', 2, 0),
(9, 'Plutão', 3, 0),
(10, 'Lua', 3, 0),
(11, 'Mercúrio', 3, 3),
(12, 'Marte', 3, 0),
(13, 'Vênus', 4, 0),
(14, 'Saturno', 4, 0),
(15, 'Júpiter', 4, 4),
(16, 'Sol', 4, 0),
(17, 'O Sol é a maior estrela do Sistema Solar', 5, 0),
(18, 'Mercúrio é o planeta mais quente do Sistema Solar', 5, 5),
(19, 'Netuno é o planeta mais frio do Sistema Solar', 5, 0),
(20, 'O planeta Terra fica na terceira posição do sistema solar', 5, 0),
(21, 'Por que eles possuem mais energia.', 6, 0),
(22, 'Por questões naturais.', 6, 0),
(23, 'Porque elas têm muita massa e são formadas por gases de hidrogênio e Helio.', 6, 6),
(24, 'Porque a Terra não emite luz.', 6, 0),
(25, 'Órbitas elípticas', 7, 7),
(26, 'Órbitas circular', 7, 0),
(27, 'Órbita Solar', 7, 0),
(28, 'Órbita polar', 7, 0),
(29, 'Metano', 8, 0),
(30, 'Carbônico', 8, 0),
(31, 'Oxigênio e Carbônico', 8, 0),
(32, 'Hidrogênio e Hélio', 8, 8),
(33, 'Mercúrio', 9, 0),
(34, 'Halley', 9, 0),
(35, 'Sol', 9, 0),
(36, 'Lua', 9, 9),
(37, 'Urano', 10, 0),
(38, 'Netuno', 10, 10),
(39, 'Saturno', 10, 0),
(40, 'Júpiter', 10, 0),
(41, 'Júpiter, Saturno, Urano e Netuno.', 11, 11),
(42, 'Mercúrio, Saturno, Terra e Marte', 11, 0),
(43, 'Júpiter, Saturno, Mercúrio e Vênus', 11, 0),
(44, 'Júpiter, Saturno, Mercúrio e Vênus', 11, 0),
(45, 'Por causa do gás metano', 12, 12),
(46, 'Por causa do calor', 12, 0),
(47, 'Por causa do frio', 12, 0),
(48, 'Por causa do gás hélio', 12, 0),
(49, 'Fobos e Deimos', 13, 13),
(50, 'Fobos e Ariel', 13, 0),
(51, 'Umbriel e Deimos', 13, 0),
(52, 'Fobos e Tritão', 13, 0),
(53, 'Urano', 14, 14),
(54, 'Netuno', 14, 0),
(55, 'Saturno', 14, 0),
(56, 'Júpiter', 14, 0),
(57, 'Vênus', 15, 15),
(58, 'Netuno', 15, 0),
(59, 'Urano', 15, 0),
(60, 'Júpiter', 15, 0),
(61, 'Romana', 16, 0),
(62, 'Romana e Grega', 16, 16),
(63, 'Grega', 16, 0),
(64, 'Asteca', 16, 0),
(65, 'Oito planetas e cinco planetas anões', 17, 17),
(66, 'Sete planetas e 1 planeta anão', 17, 0),
(67, '8 planetas', 17, 0),
(68, '5 planetas e 5 planetas anões', 17, 0),
(69, 'Quatro luas', 18, 18),
(70, '5 luas', 18, 0),
(71, '1 lua', 18, 0),
(72, 'Nenhuma lua', 18, 0),
(73, 'Júpiter e Mercúrio', 19, 19),
(74, 'Júpiter e Vênus', 19, 0),
(75, 'Marte e Saturno', 19, 0),
(76, 'Terra e Urano', 19, 0),
(77, 'Colisão com meteoros', 20, 20),
(78, 'Desgaste da lua', 20, 0),
(79, 'A lua sempre foi assim', 20, 0),
(80, 'Os foguetes enviados dos EUA causaram isso', 20, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id_jogador` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id_pergunta` int(11) NOT NULL,
  `enunciado` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id_pergunta`, `enunciado`) VALUES
(1, 'Qual o planeta conhecido como estrela D\'alva?'),
(2, 'Qual é o planeta que os cientistas estão vasculhando se há ou já teve vida?'),
(3, 'Qual o planeta considerado o menor do sistema solar?'),
(4, 'Qual o maior planeta do sistema solar?'),
(5, 'Assinale a alternativa INCORRETA:'),
(6, 'Por que as estrelas e o Sol são maiores do que a Terra?'),
(7, 'A Forma que os planetas giram ao redor do Sol, formam que espécie de órbita?'),
(8, 'Quais são os gases que formam essencialmente o Sol?'),
(9, 'Qual o astro mais próximo da Terra?'),
(10, 'Qual o planeta mais distante do Sol'),
(11, 'Quais são os principais planetas gasosos do Sistema Solar?'),
(12, 'Por que o planeta Urano tem seu tom azulado?'),
(13, 'Quais são os nomes de ambas as luas conhecidas de marte?'),
(14, 'Os satélites naturais Oberon e Titania fazem parte de qual planeta?'),
(15, 'Que planeta tem um nome que faz referência a deusa romana do amor?'),
(16, 'Os nomes dos planetas do Sistema Solar foram baseados em duas mitologias. Quais são elas?'),
(17, 'Quantos planetas e planetas anões existem no nosso Sistema Solar atualmente?'),
(18, 'Quantas luas tem Júpites?'),
(19, 'Qual é o maior e o menor planeta do Sistema Solar respectivamente?'),
(20, 'Como as crateras da Lua surgiram?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontuacao`
--

CREATE TABLE `pontuacao` (
  `id_pontuacao` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `id_jogador` int(11) NOT NULL,
  `tempo_quiz` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id_alternativa`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id_jogador`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD PRIMARY KEY (`id_pontuacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id_alternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pontuacao`
--
ALTER TABLE `pontuacao`
  MODIFY `id_pontuacao` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
