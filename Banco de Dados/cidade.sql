-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jul-2016 às 16:05
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
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `ds_cidade` varchar(65) NOT NULL,
  `ESTADO_id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `ds_cidade`, `ESTADO_id_estado`) VALUES
(1, 'Blumenau', 24),
(2, 'Ilhota', 24),
(3, 'Urubici', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`),
  ADD UNIQUE KEY `id_cidades_UNIQUE` (`id_cidade`),
  ADD KEY `fk_CIDADE_ESTADO1_idx` (`ESTADO_id_estado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_CIDADE_ESTADO1` FOREIGN KEY (`ESTADO_id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
