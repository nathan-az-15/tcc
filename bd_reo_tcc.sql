-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2020 às 18:57
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `ID_adm` int(1) NOT NULL,
  `nome_adm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_adm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`ID_adm`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'ADM', 'ADM_reforc@gmail.com', 'ADM_REO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

CREATE TABLE `conteudos` (
  `ID_cont` int(2) NOT NULL,
  `texto` text NOT NULL,
  `end_imagens_cont` varchar(250) NOT NULL,
  `cod_mat` int(2) NOT NULL,
  `cod_adm` int(1) NOT NULL,
  `ano` int(1) NOT NULL,
  `assunto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `indicacoes` (
  `ID_ind` int(3) NOT NULL,
  `plataforma` varchar(70) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `cod_mat` int(2) NOT NULL,
  `cod_adm` int(1) NOT NULL,
  `end_imagem_ind` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `indicacoes`
--

INSERT INTO `indicacoes` (`ID_ind`, `plataforma`, `titulo`, `autor`, `descricao`, `cod_mat`, `cod_adm`, `end_imagem_ind`) VALUES
(1, 'Filme', 'Moana', 'Maria', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 2, 1, 'his2.2.1.png'),
(4, 'Livro', 'ssssssssss', 'dsfsdddddd', 'sddfsdfsdfsdfsdfsdf', 1, 1, 'Screenshot_20201007-154156.jpg'),
(5, 'Documentario', 'testeasasdds', 'eu mesmo', 'teste para apresentação', 3, 1, 'download.jpg'),
(6, 'Serie', 'sljdladhflsdjfhsd', 'asdsdfrgg', 'sdfghjkkuytryhbfhg', 5, 1, 'download1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `ID_materia` int(2) NOT NULL,
  `nome_mat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `questoes` (
  `ID_questoes` int(3) NOT NULL,
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
  `ano` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `responde` (
  `ID_usuario` int(2) NOT NULL,
  `Id_questoes` int(3) NOT NULL,
  `resposta_usuario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(3) NOT NULL,
  `nome_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `escolaridade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `serie_ano` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `nome_usuario`, `data_nasc`, `escolaridade`, `email_usuario`, `senha_usuario`, `serie_ano`) VALUES
(1, 'Nathan Azevedo Capelo', '2002-03-15', 'Cursando Ensino médio', 'nata.mili@hotmail.com', 'nathan15', '3° ano'),
(2, 'Maria Emilia', '1965-05-22', 'Ensino Superior', 'emilia@etec.com', '1234567', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_adm`);

--
-- Indexes for table `conteudos`
--
ALTER TABLE `conteudos`
  ADD PRIMARY KEY (`ID_cont`),
  ADD KEY `fk_conteudos_administrador` (`cod_adm`),
  ADD KEY `fk_conteudos_materias` (`cod_mat`);

--
-- Indexes for table `indicacoes`
--
ALTER TABLE `indicacoes`
  ADD PRIMARY KEY (`ID_ind`),
  ADD KEY `fk_indicacoes_materias` (`cod_mat`),
  ADD KEY `fk_indicacoes_administrador` (`cod_adm`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID_materia`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`ID_questoes`),
  ADD KEY `fk_questoes_conteudos` (`cod_cont`),
  ADD KEY `fk_questoes_administrador` (`cod_adm`);
ALTER TABLE `questoes` ADD FULLTEXT KEY `enunciado` (`enunciado`);

--
-- Indexes for table `responde`
--
ALTER TABLE `responde`
  ADD KEY `fk_responde_usuario` (`ID_usuario`),
  ADD KEY `fk_responde_questoes` (`Id_questoes`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_adm` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `conteudos`
--
ALTER TABLE `conteudos`
  MODIFY `ID_cont` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `indicacoes`
--
ALTER TABLE `indicacoes`
  MODIFY `ID_ind` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `ID_materia` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `ID_questoes` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
