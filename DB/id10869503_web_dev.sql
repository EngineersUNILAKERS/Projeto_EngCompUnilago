-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 19-Set-2019 às 15:01
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10869503_web_dev`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'comum'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `PRODUCTS`
--

CREATE TABLE `PRODUCTS` (
  `PRO_Id` int(50) NOT NULL,
  `PRO_Codigo` int(50) DEFAULT NULL,
  `PRO_Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRO_Descricao` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRO_Categoria_Id` int(10) DEFAULT NULL,
  `PRO_Foto` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRO_Preco` float(5,2) DEFAULT NULL,
  `PRO_Estoque` float(5,4) DEFAULT NULL,
  `PRO_Ativo` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(320) NOT NULL,
  `groupId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `groupId`) VALUES
(0, 'usuario', '7c12772809c1c0c3deda6103b10fdfa0', 'user@email.com', 2),
(1, 'teste', 'e807f1fcf82d132f9bb018ca6738a19f', 'teste@teste', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD PRIMARY KEY (`PRO_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupId` (`groupId`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_group` FOREIGN KEY (`groupId`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
