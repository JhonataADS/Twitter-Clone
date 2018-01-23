-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Jan-2018 às 17:04
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `twitter_clone`
--
CREATE DATABASE IF NOT EXISTS `twitter_clone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `twitter_clone`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tweet`
--

CREATE TABLE IF NOT EXISTS `tweet` (
  `id_tweet` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tweet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(19, 'jhonata', 'jhonata@twitter.com', '202cb962ac59075b964b07152d234b70'),
(23, 'kathlyn', 'kathlyn@teste.com', '202cb962ac59075b964b07152d234b70'),
(34, 'Salvador', 'Nulla.eu@elit.net', '202cb962ac59075b964b07152d234b70'),
(35, 'Carter', 'hendrerit.id@Duismienim.org', '202cb962ac59075b964b07152d234b70'),
(36, 'Leigh', 'faucibus.leo.in@tinciduntnibh.co.uk', '202cb962ac59075b964b07152d234b70'),
(37, 'Ella', 'dapibus@sedhendrerita.org', '202cb962ac59075b964b07152d234b70'),
(38, 'Tatiana', 'velit.Cras.lorem@arcuVestibulumut.net', '202cb962ac59075b964b07152d234b70'),
(39, 'Leandra', 'lobortis@ipsumdolorsit.edu', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
