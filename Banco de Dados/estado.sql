-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jul-2016 às 15:45
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
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `ds_estado` varchar(75) NOT NULL,
  `capital` varchar(65) NOT NULL,
  `PAIS_id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES
(1, 'Acre', 'Rio Branco', 10),
(2, 'Alagoas', 'Maceió', 10),
(3, 'Amapá', 'Macapá', 10),
(4, 'Amazonas', 'Manaus', 10),
(5, 'Bahia', 'Salvador', 10),
(6, 'Ceará', 'Fortaleza', 10),
(7, 'Distrito Federal', 'Brasília', 10),
(8, 'Espírito Santo', 'Vitória', 10),
(9, 'Goiás', 'Goiânia	', 10),
(10, 'Maranhão', 'São Luís', 10),
(11, 'Mato Grosso', 'Cuiabá', 10),
(12, 'Mato Grosso do Sul', 'Campo Grande', 10),
(13, 'Minas Gerais', 'Belo Horizonte', 10),
(14, 'Pará', 'Belém', 10),
(15, 'Paraíba', 'João Pessoa', 10),
(16, 'Paraná', 'Curitiba', 10),
(17, 'Pernambuco', 'Recife', 10),
(18, 'Piauí', 'Teresina', 10),
(19, 'Rio de Janeiro', 'Rio de Janeiro', 10),
(20, 'Rio Grande do Norte', 'Natal', 10),
(21, 'Rio Grande do Sul', 'Porto Alegre', 10),
(22, 'Rondônia', 'Porto Velho', 10),
(23, 'Roraima', 'Boa Vista', 10),
(24, 'Santa Catarina', 'Florianópolis', 10),
(25, 'São Paulo', 'São Paulo', 10),
(26, 'Sergipe', 'Aracaju', 10),
(27, 'Tocantins', 'Palmas', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `id_estados_UNIQUE` (`id_estado`),
  ADD KEY `fk_ESTADO_PAIS1_idx` (`PAIS_id_pais`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_ESTADO_PAIS1` FOREIGN KEY (`PAIS_id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
