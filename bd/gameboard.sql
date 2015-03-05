-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Mar-2015 às 14:01
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gameboard`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE IF NOT EXISTS `equipes` (
`id` int(11) NOT NULL,
  `nome_equipe` varchar(200) NOT NULL,
  `desc_equipe` text,
  `logo` varchar(300) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`id`, `nome_equipe`, `desc_equipe`, `logo`, `created`, `modified`) VALUES
(1, 'equipe rocket', 'gfdgfdgfdgf', 'altalt7cucswwdmfrycijifbvoepgutmiawjvtalit3-pju.jpg', '2015-03-05 13:15:05', '2015-03-05 13:15:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes_usuarios`
--

CREATE TABLE IF NOT EXISTS `equipes_usuarios` (
`id` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipes_usuarios`
--

INSERT INTO `equipes_usuarios` (`id`, `equipe_id`, `usuario_id`, `created`, `modified`) VALUES
(1, 1, 7, '2015-03-05 13:27:33', '2015-03-05 13:27:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `primeiro_nome` varchar(300) NOT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `descricao` text,
  `ultimo_nome` varchar(300) NOT NULL,
  `data_nascimento` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nickname`, `email`, `password`, `primeiro_nome`, `avatar`, `descricao`, `ultimo_nome`, `data_nascimento`, `created`, `modified`) VALUES
(4, 'kaysan2', 'caio.piantikovicz2@gmail.com', 'ac18ddb2cd15db428b2fcd8e96e4338a38e30b0f', 'Caio', 'img', 'fdsÃ§fjkds', 'hgfh', '2015-03-03', '2015-03-03 14:19:40', '2015-03-03 14:19:40'),
(5, 'kei', 'teste@teste.com.brr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Caio', 'fdçsfkçs', 'dsfgsdg', 'hgfh', '2015-03-04', '2015-03-04 12:35:58', '2015-03-04 12:35:58'),
(6, 'kei2', 'caio.piantikovicz12@gmail.com', '123456', 'Caio', 'img', 'gdsg', 'gfdg', '2015-03-04', '2015-03-04 13:25:43', '2015-03-04 13:25:43'),
(7, 'kei25', 'caio.piantikovicz45342@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Caio', 'img', 'fdsf', 'Piantikovicz', '2015-03-04', '2015-03-04 13:28:08', '2015-03-04 13:28:08'),
(8, 'testesupremo', 'caio.testao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', NULL, '12', 'hgfh', '2015-03-04', '2015-03-04 13:33:19', '2015-03-04 13:33:19'),
(10, 'testeeeee', 'teste@testeeeeee.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Teste', 'img-20150105-wa0001.jpg', 'fdsf', 'fdsfds', '2015-03-04', '2015-03-04 13:42:52', '2015-03-04 13:42:52'),
(12, 'testao', 'testao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Caio', NULL, 'gdfgdf', 'Piantikovicz', '2015-03-05', '2015-03-05 13:08:40', '2015-03-05 13:08:40'),
(13, 'kaysanteste', 'kaysanteste@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'kaysanteste', 'bv1byaiigaau7z8.jpg', 'kaysanteste', 'kaysanteste', '2015-03-05', '2015-03-05 13:09:09', '2015-03-05 13:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nome_equipe` (`nome_equipe`);

--
-- Indexes for table `equipes_usuarios`
--
ALTER TABLE `equipes_usuarios`
 ADD PRIMARY KEY (`id`), ADD KEY `equipe_id` (`equipe_id`), ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nickname` (`nickname`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipes_usuarios`
--
ALTER TABLE `equipes_usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `equipes_usuarios`
--
ALTER TABLE `equipes_usuarios`
ADD CONSTRAINT `equipes_usuarios_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `equipes_usuarios_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
