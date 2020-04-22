-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2020 às 23:12
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno_ads`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_loginsenha`
--

CREATE TABLE `tabela_loginsenha` (
  `id` int(11) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `Mat` varchar(100) NOT NULL,
  `Nome` varchar(500) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `Nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_loginsenha`
--

INSERT INTO `tabela_loginsenha` (`id`, `instituicao`, `Mat`, `Nome`, `Login`, `Senha`, `Nivel`) VALUES
(1, 'UNINASSAU CARUARU', '123456', 'Edgar Natanael', 'EDGAR2020', 'teste', 'CHEFIA'),
(2, 'UNINASSAU RECIFE', '3916669', 'JOAO', 'GMNATANAEL24@GMAIL.COM', '0AMEiy3h15', 'OPERACIONAL'),
(3, 'UNINASSAU RECIFE', '741', 'CARLA', 'BIU@GMAIL.COM', '!B80KWYJrx', 'OPERACIONAL');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_loginsenha`
--
ALTER TABLE `tabela_loginsenha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_loginsenha`
--
ALTER TABLE `tabela_loginsenha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
