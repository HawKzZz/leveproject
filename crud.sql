-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 06-Out-2020 às 23:32
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_curso`
--

DROP TABLE IF EXISTS `pessoa_curso`;
CREATE TABLE IF NOT EXISTS `pessoa_curso` (
  `Idpessoa` int(11) NOT NULL,
  `Idcurso` int(11) NOT NULL,
  KEY `rest1` (`Idcurso`),
  KEY `rest2` (`Idpessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa_curso`
--

INSERT INTO `pessoa_curso` (`Idpessoa`, `Idcurso`) VALUES
(2, 1),
(3, 1),
(2, 2),
(3, 2),
(2, 3),
(3, 3),
(2, 4),
(3, 4),
(2, 5),
(3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `Matricula` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Matricula`),
  UNIQUE KEY `Matricula` (`Matricula`),
  UNIQUE KEY `Matricula_2` (`Matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`Matricula`, `Nome`) VALUES
(1, 'Medicina'),
(2, 'Diréito'),
(3, 'Engenharia'),
(4, 'Biologia'),
(5, 'Ciências da Computação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

DROP TABLE IF EXISTS `tb_pessoa`;
CREATE TABLE IF NOT EXISTS `tb_pessoa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `Telefone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Cpf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`Id`, `Nome`, `Telefone`, `Cpf`) VALUES
(2, 'Matheus Souza', '(81) 99442-9299', '223.842.620-50'),
(3, 'Joao Pedro', '(81) 99147-9179', '210.477.340-79');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pessoa_curso`
--
ALTER TABLE `pessoa_curso`
  ADD CONSTRAINT `rest1` FOREIGN KEY (`Idcurso`) REFERENCES `tb_curso` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rest2` FOREIGN KEY (`Idpessoa`) REFERENCES `tb_pessoa` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
