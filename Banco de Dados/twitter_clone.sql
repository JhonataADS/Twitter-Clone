-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 23-Jan-2018 às 00:06
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`) VALUES
(12, 23, 'jho', '2018-01-22 15:41:53'),
(13, 23, 'jho', '2018-01-22 15:42:01'),
(14, 23, 'jho', '2018-01-22 15:42:03'),
(15, 23, 'jho', '2018-01-22 15:42:03'),
(16, 23, 'jho', '2018-01-22 15:42:03'),
(17, 23, 'jho', '2018-01-22 15:42:03'),
(18, 23, 'a', '2018-01-22 15:42:15');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE IF NOT EXISTS `usuarios_seguidores` (
  `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario_seguidor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(1, 19, 23, '2018-01-22 16:42:57'),
(2, 19, 37, '2018-01-22 16:44:36'),
(3, 19, 37, '2018-01-22 16:45:11'),
(4, 19, 35, '2018-01-22 16:52:25'),
(5, 19, 38, '2018-01-22 21:46:21'),
(6, 19, 39, '2018-01-22 22:03:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
