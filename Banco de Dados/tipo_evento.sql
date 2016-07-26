-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jul-2016 às 12:43
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koaladb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `id_tipo_evento` int(11) NOT NULL,
  `ds_tipo_evento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_evento`
--

INSERT INTO `tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES
(1, 'Musical'),
(2, 'Cultural'),
(9, 'Corporativo'),
(10, 'Festival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`id_tipo_evento`),
  ADD UNIQUE KEY `id_tipo_evento_UNIQUE` (`id_tipo_evento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id_tipo_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
