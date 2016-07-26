-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jul-2016 às 12:32
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
-- Estrutura da tabela `tipo_estabelecimento`
--

CREATE TABLE `tipo_estabelecimento` (
  `id_tipo_estabelecimento` int(11) NOT NULL,
  `ds_tipo_estabelecimento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_estabelecimento`
--

INSERT INTO `tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES
(1, 'Pub'),
(2, 'Bar'),
(3, 'Cervejaria'),
(4, 'Restaurante'),
(5, 'Pizzaria'),
(6, 'Lanchonete'),
(7, 'Padaria'),
(8, 'Cafeteria'),
(9, 'Shopping'),
(10, 'Balada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_estabelecimento`
--
ALTER TABLE `tipo_estabelecimento`
  ADD PRIMARY KEY (`id_tipo_estabelecimento`),
  ADD UNIQUE KEY `id_tipo_estabelecimento_UNIQUE` (`id_tipo_estabelecimento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_estabelecimento`
--
ALTER TABLE `tipo_estabelecimento`
  MODIFY `id_tipo_estabelecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
