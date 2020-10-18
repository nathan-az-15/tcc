-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Ago-2020 às 18:35
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_reo_tcc`
--
CREATE DATABASE IF NOT EXISTS `bd_reo_tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_reo_tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_adm` int(1) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(100) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `assunto` varchar(70) NOT NULL,
  PRIMARY KEY (`ID_cont`),
  KEY `fk_conteudos_administrador` (`cod_adm`),
  KEY `fk_conteudos_materias` (`cod_mat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`ID_ind`),
  KEY `fk_indicacoes_materias` (`cod_mat`),
  KEY `fk_indicacoes_administrador` (`cod_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `ID_materia` int(2) NOT NULL AUTO_INCREMENT,
  `nome_mat` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`ID_questoes`),
  KEY `fk_questoes_conteudos` (`cod_cont`),
  KEY `fk_questoes_administrador` (`cod_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `nome_usuario` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  `serie_ano` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
