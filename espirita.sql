-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 05-Maio-2015 às 12:08
-- Versão do servidor: 5.5.42
-- PHP Version: 5.4.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `espirita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE IF NOT EXISTS `tb_consulta` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `mensagem` varchar(30000) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_consulta`
--

INSERT INTO `tb_consulta` (`id`, `email`, `titulo`, `mensagem`, `data`) VALUES
(1, 'teste@teste.com', 'teste', 'teste ', '0000-00-00 00:00:00'),
(2, 'joao@teste.com', 'familia', 'preciso de ajuda familiar ', '0000-00-00 00:00:00'),
(3, 'joao@teste.com', 'familia', 'preciso de ajuda familiar ', '2015-04-30 21:00:39'),
(6, 'çvfvjgmd~xpv kxv', 'vfgjdçf~vjf', 'dkgdflj d~çbfg/fjc knffk', '2015-05-02 19:09:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(29) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(1000) NOT NULL,
  `cidade` varchar(300) NOT NULL,
  `estado` varchar(11) NOT NULL,
  `bairro` varchar(400) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `data` datetime NOT NULL,
  `tipo_usuario` enum('1','2','3') NOT NULL,
  `ativado` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `sexo`, `telefone`, `endereco`, `cidade`, `estado`, `bairro`, `login`, `senha`, `data`, `tipo_usuario`, `ativado`) VALUES
(7, 'teste', 'teste@teste.com', 'Masculino', '222222222', 'rrrrrrrrrrrrrr', 'rrrrrrr', 'BA', 'qqqqqqqqq', 'teste', 'teste', '2015-04-30 22:26:32', '1', '0'),
(8, 'teste', 'teste@teste.com', 'Masculino', '222222222', 'rrrrrrrrrrrrrr', 'rrrrrrr', 'BA', 'qqqqqqqqq', 'teste', 'teste', '2015-04-30 22:32:31', '3', '0'),
(9, 'teste', 'teste@teste.com', 'Masculino', '222222222', 'rrrrrrrrrrrrrr', 'rrrrrrr', 'BA', 'qqqqqqqqq', 'teste', '', '2015-05-02 19:08:05', '3', '0'),
(10, 'dfg', 'cvbgn', 'Masculino', 'cvfggf', 'zghmjmh', 'sghhjhtgrfc', 'Selecione..', 'afgtjki', 'asakfd[´sf', 'o[fr[goe', '2015-05-02 19:08:55', '3', '0'),
(11, '', '', '', '', '', '', '', '', '', '', '2015-05-03 00:16:01', '3', '0'),
(12, 'Alisson', 'alisson@linukiss.com', 'Masculino', '+553836721420', 'aaaaaaaaaaaaaa', 'Paracatu', 'RJ', 'aaaa', 'admin', '123', '2015-05-04 06:51:07', '1', '1'),
(13, 'aaaaaaaa', 'aaaaaaaaa@gmail.com', 'Masculino', '111111111', 'aaaaaaaaaaaaaa', 'a', 'RN', 'aaaa', 'qwe', '123', '2015-05-04 06:53:32', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
