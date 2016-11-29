-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2016 às 20:32
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
(2, 'Florianópolis', 24),
(3, 'Curitiba', 16),
(4, 'Gramado', 21),
(5, 'Criciúma', 24),
(6, 'Chapecó', 24),
(7, 'Joinville', 24),
(8, 'São José', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `ds_comentario` varchar(500) NOT NULL,
  `ESTABELECIMENTO_id_estabelecimento` int(11) DEFAULT NULL,
  `ENTRETENIMENTO_id_entretenimento` int(11) DEFAULT NULL,
  `USUARIO_id_usuario` int(11) NOT NULL,
  `EVENTO_id_evento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `continente`
--

CREATE TABLE `continente` (
  `id_continente` int(11) NOT NULL,
  `ds_continente` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `continente`
--

INSERT INTO `continente` (`id_continente`, `ds_continente`) VALUES
(1, 'América'),
(2, 'Africa'),
(3, 'Europa'),
(4, 'Ásia'),
(5, 'Oceania'),
(6, 'Eurásia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia_semana`
--

CREATE TABLE `dia_semana` (
  `id_dia_semana` int(11) NOT NULL,
  `ds_dia_semana` varchar(45) NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dia_semana`
--

INSERT INTO `dia_semana` (`id_dia_semana`, `ds_dia_semana`, `horario_inicio`, `horario_fim`) VALUES
(1, 'Domingo', '00:00:00', '23:59:00'),
(2, 'Segunda-Feira', '00:00:00', '23:59:00'),
(3, 'Terça-Feira', '00:00:00', '23:59:00'),
(4, 'Quarta-Feira', '00:00:00', '23:59:00'),
(5, 'Quinta-Feira', '00:00:00', '23:59:00'),
(6, 'Sexta-Feira', '00:00:00', '23:59:00'),
(7, 'Sábado', '00:00:00', '23:59:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento`
--

CREATE TABLE `entretenimento` (
  `id_entretenimento` int(11) NOT NULL,
  `ds_entretenimento` varchar(45) NOT NULL,
  `vl_entrada` decimal(15,2) DEFAULT NULL,
  `vl_meia_entrada` decimal(15,2) DEFAULT NULL,
  `about` varchar(500) NOT NULL,
  `cep` decimal(10,0) NOT NULL,
  `telefone` decimal(10,0) DEFAULT NULL,
  `foto` longblob,
  `CIDADE_id_cidade` int(11) DEFAULT NULL,
  `classificacao` decimal(15,2) DEFAULT NULL,
  `site` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento_has_dia_semana`
--

CREATE TABLE `entretenimento_has_dia_semana` (
  `ENTRETENIMENTO_id_entretenimento` int(11) NOT NULL,
  `DIA_SEMANA_id_dia_semana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento_has_tipo_entretenimento`
--

CREATE TABLE `entretenimento_has_tipo_entretenimento` (
  `ENTRETENIMENTO_id_entretenimento` int(11) NOT NULL,
  `TIPO_ENTRETENIMENTO_id_tipo_entretenimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `id_estabelecimento` int(11) NOT NULL,
  `ds_estabelecimento` varchar(45) NOT NULL,
  `cep` decimal(10,0) NOT NULL,
  `about` varchar(500) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `classificacao` decimal(15,2) DEFAULT NULL,
  `foto` longblob,
  `CIDADE_id_cidade` int(11) NOT NULL,
  `cnpj` int(18) DEFAULT NULL,
  `qt_classif` decimal(3,2) DEFAULT NULL,
  `ds_endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`id_estabelecimento`, `ds_estabelecimento`, `cep`, `about`, `telefone`, `email`, `classificacao`, `foto`, `CIDADE_id_cidade`, `cnpj`, `qt_classif`, `ds_endereco`) VALUES
(1, 'Polpetta', '89', 'Polpetta tem bolinhos deliciosos', 123, 'polpetta@gmail.com', '4.50', NULL, 1, NULL, NULL, ''),
(2, 'Ahoy', '25', 'Ahoy tem músicas legais', 258, 'ahoy@gmail.com', '5.00', NULL, 1, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento_has_dia_semana`
--

CREATE TABLE `estabelecimento_has_dia_semana` (
  `ESTABELECIMENTO_id_estabelecimento` int(11) NOT NULL,
  `DIAS_SEMANA_id_dia_semana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimento_has_dia_semana`
--

INSERT INTO `estabelecimento_has_dia_semana` (`ESTABELECIMENTO_id_estabelecimento`, `DIAS_SEMANA_id_dia_semana`) VALUES
(1, 1),
(1, 5),
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento_has_tipo_estabelecimento`
--

CREATE TABLE `estabelecimento_has_tipo_estabelecimento` (
  `ESTABELECIMENTO_id_estabelecimento` int(11) NOT NULL,
  `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimento_has_tipo_estabelecimento`
--

INSERT INTO `estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES
(2, 1),
(1, 3),
(1, 6);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `ds_evento` varchar(125) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_fim` date NOT NULL,
  `cep` decimal(10,0) NOT NULL,
  `ds_local_evento` varchar(75) NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_fim` time NOT NULL,
  `vl_entrada` decimal(15,2) DEFAULT NULL,
  `vl_meia_entrada` decimal(15,2) DEFAULT NULL,
  `site` varchar(65) DEFAULT NULL,
  `about` varchar(500) NOT NULL,
  `classificacao` decimal(15,2) DEFAULT NULL,
  `telefone` decimal(15,0) DEFAULT NULL,
  `foto` longblob,
  `CIDADE_id_cidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `ds_evento`, `dt_inicio`, `dt_fim`, `cep`, `ds_local_evento`, `horario_inicio`, `horario_fim`, `vl_entrada`, `vl_meia_entrada`, `site`, `about`, `classificacao`, `telefone`, `foto`, `CIDADE_id_cidade`) VALUES
(1, 'OktoberFest', '2016-10-05', '2016-10-23', '89036200', 'Vila Germânica', '13:00:00', '05:00:00', '18.00', '9.00', 'http://www.oktoberfestblumenau.com.br/', 'Oktober é legal', NULL, NULL, NULL, 1),
(2, 'Festival da Cerveja', '2016-05-02', '2016-05-01', '5552525', 'Vila Germânica', '15:00:00', '21:00:00', '10.00', '5.00', 'fsdfsd', 'sdhfoisd', NULL, '89898', NULL, 1),
(3, 'I Congresso Internacional - Felicidade, Prosperidade, Abundância e Física Quântica', '2016-11-17', '2016-11-20', '82130010', 'Teatro Ópera de Arame', '08:00:00', '18:00:00', '799.00', NULL, 'www.congressodefisicaquantica.com.br', 'Neurociência e Física Quântica', NULL, '4132033487', NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento_has_tipo_evento`
--

CREATE TABLE `evento_has_tipo_evento` (
  `EVENTO_id_evento` int(11) NOT NULL,
  `TIPO_EVENTO_id_tipo_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evento_has_tipo_evento`
--

INSERT INTO `evento_has_tipo_evento` (`EVENTO_id_evento`, `TIPO_EVENTO_id_tipo_evento`) VALUES
(1, 1),
(1, 2),
(2, 5),
(3, 7),
(3, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `ds_idioma` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `ds_idioma`) VALUES
(1, 'Africâner'),
(2, 'Albanês'),
(3, 'Alemão'),
(4, 'Árabe'),
(5, 'Catalão'),
(6, 'Chinês Mandarim'),
(7, 'Coreano'),
(8, 'Croata'),
(9, 'Curdo'),
(10, 'Dinamarquês'),
(11, 'Eslovaco'),
(12, 'Espanhol'),
(13, 'Finlandês'),
(14, 'Francês'),
(15, 'Grego'),
(16, 'Hebreu'),
(18, 'Holandês'),
(19, 'Húngaro'),
(20, 'Inglês'),
(21, 'Irlandês'),
(22, 'Italiano'),
(23, 'Japonês'),
(24, 'Latim'),
(25, 'Mandarim'),
(26, 'Norueguês'),
(27, 'Persa'),
(28, 'Polonês'),
(29, 'Português'),
(30, 'Romeno'),
(31, 'Russo'),
(32, 'Sérvio'),
(33, 'Somali'),
(34, 'Sueco'),
(35, 'Turco'),
(36, 'Ucraniano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `moeda`
--

CREATE TABLE `moeda` (
  `id_moeda` int(11) NOT NULL,
  `ds_moeda` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `moeda`
--

INSERT INTO `moeda` (`id_moeda`, `ds_moeda`) VALUES
(1, 'Real'),
(2, 'Dólar Americano'),
(3, 'Euro'),
(4, 'Libra Esterlina'),
(5, 'Iene'),
(6, 'Peso Argentino'),
(7, 'Peso Chileno'),
(8, 'Peso Mexicano'),
(9, 'Afegane'),
(10, 'Rand'),
(11, 'Riyal'),
(12, 'Dólar Australiano'),
(13, 'Boliviano'),
(14, 'Dólar Canadense'),
(15, 'Renminbi'),
(16, 'Won Norte-Coreano'),
(17, 'Won Sul-Coreano'),
(18, 'Coroa Dinamarquesa'),
(19, 'Libra Egípcia'),
(20, 'Dirham dos Emirados Árabes Unidos'),
(21, 'Florim Húngaro'),
(22, 'Rupia Indiana'),
(23, 'Coroa Islandesa'),
(24, 'Novo Shekel Israelense'),
(25, 'Coroa Norueguesa'),
(26, 'Dólar Neozelandês'),
(27, 'Guarani'),
(28, 'Novo Sol'),
(29, 'Złoty'),
(30, 'Rublo Russo'),
(31, 'Coroa Sueca'),
(32, 'Franco Suíço');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `ds_pais` varchar(45) NOT NULL,
  `MOEDA_id_moeda` int(11) NOT NULL,
  `CONTINENTE_id_continente` int(11) NOT NULL,
  `capital` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id_pais`, `ds_pais`, `MOEDA_id_moeda`, `CONTINENTE_id_continente`, `capital`) VALUES
(1, 'Afeganistão', 9, 2, 'Cabul'),
(2, 'África do Sul', 10, 2, 'Cidade do Cabo'),
(3, 'Alemanha', 3, 3, 'Berlim'),
(4, 'Arábia Saudita', 11, 4, 'Riade'),
(5, 'Argentina', 6, 1, 'Buenos Aires'),
(6, 'Austrália', 12, 5, 'Camberra'),
(7, 'Áustria', 3, 3, 'Viena'),
(8, 'Bélgica', 3, 3, 'Bruxelas'),
(9, 'Bolívia', 13, 1, 'Sucre'),
(10, 'Brasil', 1, 1, 'Brasília'),
(11, 'Canadá', 14, 1, 'Ottawa'),
(12, 'Chile', 7, 1, 'Santiago'),
(13, 'China', 15, 4, 'Beijing'),
(14, 'Coreia do Norte', 16, 4, 'Pyongyang'),
(15, 'Coreia do Sul', 17, 4, 'Seoul'),
(16, 'Dinamarca', 18, 3, 'Copenhagen'),
(17, 'Egito', 19, 2, 'Cairo'),
(18, 'Emirados Árabes Unidos', 20, 4, 'Abu Dhabi'),
(19, 'Equador', 2, 1, 'Quito'),
(20, 'Eslováquia', 3, 3, 'Bratislava'),
(21, 'Eslovénia', 3, 3, 'Ljubljana'),
(22, 'Espanha', 3, 3, 'Madrid'),
(23, 'Estados Unidos da América', 2, 1, 'Washington, D.C.'),
(24, 'Finlândia', 3, 3, 'Helsinki'),
(25, 'França', 3, 3, 'Paris'),
(26, 'Grécia', 3, 3, 'Athinai'),
(27, 'Hungria', 21, 3, 'Budapest'),
(28, 'Índia', 22, 4, 'Nôtun Dilli'),
(29, 'Irlanda', 3, 3, 'Dublin'),
(30, 'Islândia', 23, 3, 'Reykjavik'),
(31, 'Israel', 24, 4, 'Jerusalem'),
(32, 'Itália', 3, 3, 'Roma'),
(33, 'Japão', 5, 4, 'Tokyo'),
(34, 'Luxembourg', 3, 3, 'Luxembourg City'),
(35, 'Mexico', 8, 1, 'Mexico City'),
(36, 'Norway', 25, 3, 'Oslo'),
(37, 'New Zealand', 26, 5, 'Wellington'),
(38, 'Paraguay', 27, 1, 'Asunción'),
(39, 'Peru', 28, 1, 'Lima'),
(40, 'Poland', 29, 3, 'Warsaw'),
(41, 'Portugal', 3, 3, 'Lisbon'),
(42, 'England', 4, 3, 'London'),
(43, 'Rússia', 30, 6, 'Moscow'),
(44, 'Sweden', 31, 3, 'Stockholm'),
(45, 'Suíça', 32, 3, 'Bern');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais_has_idioma`
--

CREATE TABLE `pais_has_idioma` (
  `PAIS_id_pais` int(11) NOT NULL,
  `IDIOMA_id_idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota`
--

CREATE TABLE `rota` (
  `id_rota` int(11) NOT NULL,
  `ds_rota` varchar(45) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_fim` date NOT NULL,
  `USUARIO_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_has_cidade`
--

CREATE TABLE `rota_has_cidade` (
  `ROTA_id_rota` int(11) NOT NULL,
  `CIDADE_id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_has_entretenimento`
--

CREATE TABLE `rota_has_entretenimento` (
  `ROTA_id_rota` int(11) NOT NULL,
  `ENTRETENIMENTO_id_entretenimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_has_estabelecimento`
--

CREATE TABLE `rota_has_estabelecimento` (
  `ROTA_id_rota` int(11) NOT NULL,
  `ESTABELECIMENTO_id_estabelecimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_has_estado`
--

CREATE TABLE `rota_has_estado` (
  `ROTA_id_rota` int(11) NOT NULL,
  `ESTADO_id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_has_evento`
--

CREATE TABLE `rota_has_evento` (
  `ROTA_id_rota` int(11) NOT NULL,
  `EVENTO_id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_entretenimento`
--

CREATE TABLE `tipo_entretenimento` (
  `id_tipo_entretenimento` int(11) NOT NULL,
  `ds_tipo_entretenimento` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_entretenimento`
--

INSERT INTO `tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES
(1, 'Teatro'),
(2, 'Aventura'),
(3, 'Esporte'),
(4, 'Natureza'),
(5, 'Ponto Turístico'),
(6, 'Parque');

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
(3, 'Tecnológico'),
(4, 'Gastronômico'),
(5, 'Festival'),
(6, 'Esportivo'),
(7, 'Palestra'),
(8, 'WorkShop'),
(9, 'Comemorativo'),
(10, 'Corporativos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `ds_tipo_usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `ds_tipo_usuario`) VALUES
(1, 'admin'),
(2, 'empresario'),
(3, 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `atualiza_celular` tinyint(1) DEFAULT NULL,
  `atualiza_email` tinyint(1) DEFAULT NULL,
  `TIPO_USUARIO_id_tipo_usuario` int(11) NOT NULL,
  `foto` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nm_usuario`, `email`, `senha`, `celular`, `atualiza_celular`, `atualiza_email`, `TIPO_USUARIO_id_tipo_usuario`, `foto`) VALUES
(7, 'William Testoni', 'williamgiovane1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '47 97424074', 1, 1, 1, ''),
(9, 'Claudia', 'claudia@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '67 89876567', 0, 0, 2, ''),
(10, 'Fabio', 'fabio@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '45 67898765', 0, 0, 2, ''),
(11, 'Joana', 'joana@terra.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '12 34567890', 0, 0, 3, '');

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
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD UNIQUE KEY `id_comentario_UNIQUE` (`id_comentario`),
  ADD KEY `fk_COMENTARIO_ESTABELECIMENTO1_idx` (`ESTABELECIMENTO_id_estabelecimento`),
  ADD KEY `fk_COMENTARIO_ENTRETENIMENTO1_idx` (`ENTRETENIMENTO_id_entretenimento`),
  ADD KEY `fk_COMENTARIO_USUARIO1_idx` (`USUARIO_id_usuario`),
  ADD KEY `fk_COMENTARIO_EVENTO1_idx` (`EVENTO_id_evento`);

--
-- Indexes for table `continente`
--
ALTER TABLE `continente`
  ADD PRIMARY KEY (`id_continente`),
  ADD UNIQUE KEY `id_continente_UNIQUE` (`id_continente`);

--
-- Indexes for table `dia_semana`
--
ALTER TABLE `dia_semana`
  ADD PRIMARY KEY (`id_dia_semana`),
  ADD UNIQUE KEY `id_dias_semana_UNIQUE` (`id_dia_semana`);

--
-- Indexes for table `entretenimento`
--
ALTER TABLE `entretenimento`
  ADD PRIMARY KEY (`id_entretenimento`),
  ADD UNIQUE KEY `id_entretenimento_UNIQUE` (`id_entretenimento`),
  ADD KEY `fk_ENTRETENIMENTO_CIDADE1_idx` (`CIDADE_id_cidade`);

--
-- Indexes for table `entretenimento_has_dia_semana`
--
ALTER TABLE `entretenimento_has_dia_semana`
  ADD PRIMARY KEY (`ENTRETENIMENTO_id_entretenimento`,`DIA_SEMANA_id_dia_semana`),
  ADD KEY `fk_ENTRETENIMENTO_has_DIA_SEMANA_DIA_SEMANA1_idx` (`DIA_SEMANA_id_dia_semana`),
  ADD KEY `fk_ENTRETENIMENTO_has_DIA_SEMANA_ENTRETENIMENTO1_idx` (`ENTRETENIMENTO_id_entretenimento`);

--
-- Indexes for table `entretenimento_has_tipo_entretenimento`
--
ALTER TABLE `entretenimento_has_tipo_entretenimento`
  ADD PRIMARY KEY (`ENTRETENIMENTO_id_entretenimento`,`TIPO_ENTRETENIMENTO_id_tipo_entretenimento`),
  ADD KEY `fk_ENTRETENIMENTO_has_TIPO_ENTRETENIMENTO_TIPO_ENTRETENIMEN_idx` (`TIPO_ENTRETENIMENTO_id_tipo_entretenimento`),
  ADD KEY `fk_ENTRETENIMENTO_has_TIPO_ENTRETENIMENTO_ENTRETENIMENTO1_idx` (`ENTRETENIMENTO_id_entretenimento`);

--
-- Indexes for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`id_estabelecimento`),
  ADD UNIQUE KEY `id_estabelecimento_UNIQUE` (`id_estabelecimento`),
  ADD KEY `fk_ESTABELECIMENTO_CIDADE1_idx` (`CIDADE_id_cidade`);

--
-- Indexes for table `estabelecimento_has_dia_semana`
--
ALTER TABLE `estabelecimento_has_dia_semana`
  ADD PRIMARY KEY (`ESTABELECIMENTO_id_estabelecimento`,`DIAS_SEMANA_id_dia_semana`),
  ADD KEY `fk_ESTABELECIMENTO_has_DIAS_SEMANA_DIAS_SEMANA1_idx` (`DIAS_SEMANA_id_dia_semana`),
  ADD KEY `fk_ESTABELECIMENTO_has_DIAS_SEMANA_ESTABELECIMENTO1_idx` (`ESTABELECIMENTO_id_estabelecimento`);

--
-- Indexes for table `estabelecimento_has_tipo_estabelecimento`
--
ALTER TABLE `estabelecimento_has_tipo_estabelecimento`
  ADD PRIMARY KEY (`ESTABELECIMENTO_id_estabelecimento`,`TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`),
  ADD KEY `fk_ESTABELECIMENTO_has_TIPO_ESTABELECIMENTO_TIPO_ESTABELECI_idx` (`TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`),
  ADD KEY `fk_ESTABELECIMENTO_has_TIPO_ESTABELECIMENTO_ESTABELECIMENTO_idx` (`ESTABELECIMENTO_id_estabelecimento`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `id_estados_UNIQUE` (`id_estado`),
  ADD KEY `fk_ESTADO_PAIS1_idx` (`PAIS_id_pais`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD UNIQUE KEY `id_evento_UNIQUE` (`id_evento`),
  ADD KEY `fk_EVENTO_CIDADE1_idx` (`CIDADE_id_cidade`);

--
-- Indexes for table `evento_has_tipo_evento`
--
ALTER TABLE `evento_has_tipo_evento`
  ADD PRIMARY KEY (`EVENTO_id_evento`,`TIPO_EVENTO_id_tipo_evento`),
  ADD KEY `fk_EVENTO_has_TIPO_EVENTO_TIPO_EVENTO1_idx` (`TIPO_EVENTO_id_tipo_evento`),
  ADD KEY `fk_EVENTO_has_TIPO_EVENTO_EVENTO1_idx` (`EVENTO_id_evento`);

--
-- Indexes for table `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`),
  ADD UNIQUE KEY `id_linguas_UNIQUE` (`id_idioma`);

--
-- Indexes for table `moeda`
--
ALTER TABLE `moeda`
  ADD PRIMARY KEY (`id_moeda`),
  ADD UNIQUE KEY `id_moeda_UNIQUE` (`id_moeda`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`),
  ADD UNIQUE KEY `id_pais_UNIQUE` (`id_pais`),
  ADD KEY `fk_PAIS_MOEDA1_idx` (`MOEDA_id_moeda`),
  ADD KEY `fk_PAIS_CONTINENTE1_idx` (`CONTINENTE_id_continente`);

--
-- Indexes for table `pais_has_idioma`
--
ALTER TABLE `pais_has_idioma`
  ADD PRIMARY KEY (`PAIS_id_pais`,`IDIOMA_id_idioma`),
  ADD KEY `fk_PAIS_has_IDIOMA_IDIOMA1_idx` (`IDIOMA_id_idioma`),
  ADD KEY `fk_PAIS_has_IDIOMA_PAIS1_idx` (`PAIS_id_pais`);

--
-- Indexes for table `rota`
--
ALTER TABLE `rota`
  ADD PRIMARY KEY (`id_rota`),
  ADD UNIQUE KEY `id_rota_UNIQUE` (`id_rota`),
  ADD KEY `fk_ROTA_USUARIO1_idx` (`USUARIO_id_usuario`);

--
-- Indexes for table `rota_has_cidade`
--
ALTER TABLE `rota_has_cidade`
  ADD PRIMARY KEY (`ROTA_id_rota`,`CIDADE_id_cidade`),
  ADD KEY `fk_ROTA_has_CIDADE_CIDADE1_idx` (`CIDADE_id_cidade`),
  ADD KEY `fk_ROTA_has_CIDADE_ROTA1_idx` (`ROTA_id_rota`);

--
-- Indexes for table `rota_has_entretenimento`
--
ALTER TABLE `rota_has_entretenimento`
  ADD PRIMARY KEY (`ROTA_id_rota`,`ENTRETENIMENTO_id_entretenimento`),
  ADD KEY `fk_ROTA_has_ENTRETENIMENTO_ENTRETENIMENTO1_idx` (`ENTRETENIMENTO_id_entretenimento`),
  ADD KEY `fk_ROTA_has_ENTRETENIMENTO_ROTA1_idx` (`ROTA_id_rota`);

--
-- Indexes for table `rota_has_estabelecimento`
--
ALTER TABLE `rota_has_estabelecimento`
  ADD PRIMARY KEY (`ROTA_id_rota`,`ESTABELECIMENTO_id_estabelecimento`),
  ADD KEY `fk_ROTA_has_ESTABELECIMENTO_ESTABELECIMENTO1_idx` (`ESTABELECIMENTO_id_estabelecimento`),
  ADD KEY `fk_ROTA_has_ESTABELECIMENTO_ROTA1_idx` (`ROTA_id_rota`);

--
-- Indexes for table `rota_has_estado`
--
ALTER TABLE `rota_has_estado`
  ADD PRIMARY KEY (`ROTA_id_rota`,`ESTADO_id_estado`),
  ADD KEY `fk_ROTA_has_ESTADO_ESTADO1_idx` (`ESTADO_id_estado`),
  ADD KEY `fk_ROTA_has_ESTADO_ROTA1_idx` (`ROTA_id_rota`);

--
-- Indexes for table `rota_has_evento`
--
ALTER TABLE `rota_has_evento`
  ADD PRIMARY KEY (`ROTA_id_rota`,`EVENTO_id_evento`),
  ADD KEY `fk_ROTA_has_EVENTO_EVENTO1_idx` (`EVENTO_id_evento`),
  ADD KEY `fk_ROTA_has_EVENTO_ROTA1_idx` (`ROTA_id_rota`);

--
-- Indexes for table `tipo_entretenimento`
--
ALTER TABLE `tipo_entretenimento`
  ADD PRIMARY KEY (`id_tipo_entretenimento`),
  ADD UNIQUE KEY `id_tipo_entretenimento_UNIQUE` (`id_tipo_entretenimento`);

--
-- Indexes for table `tipo_estabelecimento`
--
ALTER TABLE `tipo_estabelecimento`
  ADD PRIMARY KEY (`id_tipo_estabelecimento`),
  ADD UNIQUE KEY `id_tipo_estabelecimento_UNIQUE` (`id_tipo_estabelecimento`);

--
-- Indexes for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`id_tipo_evento`),
  ADD UNIQUE KEY `id_tipo_evento_UNIQUE` (`id_tipo_evento`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`),
  ADD UNIQUE KEY `id_tipo_usuario_UNIQUE` (`id_tipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`id_usuario`),
  ADD KEY `fk_Usuario_TIPO_USUARIO_idx` (`TIPO_USUARIO_id_tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `continente`
--
ALTER TABLE `continente`
  MODIFY `id_continente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dia_semana`
--
ALTER TABLE `dia_semana`
  MODIFY `id_dia_semana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `entretenimento`
--
ALTER TABLE `entretenimento`
  MODIFY `id_entretenimento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `id_estabelecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `moeda`
--
ALTER TABLE `moeda`
  MODIFY `id_moeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `rota`
--
ALTER TABLE `rota`
  MODIFY `id_rota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_entretenimento`
--
ALTER TABLE `tipo_entretenimento`
  MODIFY `id_tipo_entretenimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipo_estabelecimento`
--
ALTER TABLE `tipo_estabelecimento`
  MODIFY `id_tipo_estabelecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id_tipo_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_CIDADE_ESTADO1` FOREIGN KEY (`ESTADO_id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_COMENTARIO_ENTRETENIMENTO1` FOREIGN KEY (`ENTRETENIMENTO_id_entretenimento`) REFERENCES `entretenimento` (`id_entretenimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_ESTABELECIMENTO1` FOREIGN KEY (`ESTABELECIMENTO_id_estabelecimento`) REFERENCES `estabelecimento` (`id_estabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_EVENTO1` FOREIGN KEY (`EVENTO_id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIO_USUARIO1` FOREIGN KEY (`USUARIO_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entretenimento`
--
ALTER TABLE `entretenimento`
  ADD CONSTRAINT `fk_ENTRETENIMENTO_CIDADE1` FOREIGN KEY (`CIDADE_id_cidade`) REFERENCES `cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entretenimento_has_dia_semana`
--
ALTER TABLE `entretenimento_has_dia_semana`
  ADD CONSTRAINT `fk_ENTRETENIMENTO_has_DIA_SEMANA_DIA_SEMANA1` FOREIGN KEY (`DIA_SEMANA_id_dia_semana`) REFERENCES `dia_semana` (`id_dia_semana`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ENTRETENIMENTO_has_DIA_SEMANA_ENTRETENIMENTO1` FOREIGN KEY (`ENTRETENIMENTO_id_entretenimento`) REFERENCES `entretenimento` (`id_entretenimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entretenimento_has_tipo_entretenimento`
--
ALTER TABLE `entretenimento_has_tipo_entretenimento`
  ADD CONSTRAINT `fk_ENTRETENIMENTO_has_TIPO_ENTRETENIMENTO_ENTRETENIMENTO1` FOREIGN KEY (`ENTRETENIMENTO_id_entretenimento`) REFERENCES `entretenimento` (`id_entretenimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ENTRETENIMENTO_has_TIPO_ENTRETENIMENTO_TIPO_ENTRETENIMENTO1` FOREIGN KEY (`TIPO_ENTRETENIMENTO_id_tipo_entretenimento`) REFERENCES `tipo_entretenimento` (`id_tipo_entretenimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD CONSTRAINT `fk_ESTABELECIMENTO_CIDADE1` FOREIGN KEY (`CIDADE_id_cidade`) REFERENCES `cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estabelecimento_has_dia_semana`
--
ALTER TABLE `estabelecimento_has_dia_semana`
  ADD CONSTRAINT `fk_ESTABELECIMENTO_has_DIAS_SEMANA_DIAS_SEMANA1` FOREIGN KEY (`DIAS_SEMANA_id_dia_semana`) REFERENCES `dia_semana` (`id_dia_semana`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ESTABELECIMENTO_has_DIAS_SEMANA_ESTABELECIMENTO1` FOREIGN KEY (`ESTABELECIMENTO_id_estabelecimento`) REFERENCES `estabelecimento` (`id_estabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estabelecimento_has_tipo_estabelecimento`
--
ALTER TABLE `estabelecimento_has_tipo_estabelecimento`
  ADD CONSTRAINT `fk_ESTABELECIMENTO_has_TIPO_ESTABELECIMENTO_ESTABELECIMENTO1` FOREIGN KEY (`ESTABELECIMENTO_id_estabelecimento`) REFERENCES `estabelecimento` (`id_estabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ESTABELECIMENTO_has_TIPO_ESTABELECIMENTO_TIPO_ESTABELECIME1` FOREIGN KEY (`TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) REFERENCES `tipo_estabelecimento` (`id_tipo_estabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_ESTADO_PAIS1` FOREIGN KEY (`PAIS_id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_EVENTO_CIDADE1` FOREIGN KEY (`CIDADE_id_cidade`) REFERENCES `cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `evento_has_tipo_evento`
--
ALTER TABLE `evento_has_tipo_evento`
  ADD CONSTRAINT `fk_EVENTO_has_TIPO_EVENTO_EVENTO1` FOREIGN KEY (`EVENTO_id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EVENTO_has_TIPO_EVENTO_TIPO_EVENTO1` FOREIGN KEY (`TIPO_EVENTO_id_tipo_evento`) REFERENCES `tipo_evento` (`id_tipo_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `fk_PAIS_CONTINENTE1` FOREIGN KEY (`CONTINENTE_id_continente`) REFERENCES `continente` (`id_continente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PAIS_MOEDA1` FOREIGN KEY (`MOEDA_id_moeda`) REFERENCES `moeda` (`id_moeda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pais_has_idioma`
--
ALTER TABLE `pais_has_idioma`
  ADD CONSTRAINT `fk_PAIS_has_IDIOMA_IDIOMA1` FOREIGN KEY (`IDIOMA_id_idioma`) REFERENCES `idioma` (`id_idioma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PAIS_has_IDIOMA_PAIS1` FOREIGN KEY (`PAIS_id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota`
--
ALTER TABLE `rota`
  ADD CONSTRAINT `fk_ROTA_USUARIO1` FOREIGN KEY (`USUARIO_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota_has_cidade`
--
ALTER TABLE `rota_has_cidade`
  ADD CONSTRAINT `fk_ROTA_has_CIDADE_CIDADE1` FOREIGN KEY (`CIDADE_id_cidade`) REFERENCES `cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ROTA_has_CIDADE_ROTA1` FOREIGN KEY (`ROTA_id_rota`) REFERENCES `rota` (`id_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota_has_entretenimento`
--
ALTER TABLE `rota_has_entretenimento`
  ADD CONSTRAINT `fk_ROTA_has_ENTRETENIMENTO_ENTRETENIMENTO1` FOREIGN KEY (`ENTRETENIMENTO_id_entretenimento`) REFERENCES `entretenimento` (`id_entretenimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ROTA_has_ENTRETENIMENTO_ROTA1` FOREIGN KEY (`ROTA_id_rota`) REFERENCES `rota` (`id_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota_has_estabelecimento`
--
ALTER TABLE `rota_has_estabelecimento`
  ADD CONSTRAINT `fk_ROTA_has_ESTABELECIMENTO_ESTABELECIMENTO1` FOREIGN KEY (`ESTABELECIMENTO_id_estabelecimento`) REFERENCES `estabelecimento` (`id_estabelecimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ROTA_has_ESTABELECIMENTO_ROTA1` FOREIGN KEY (`ROTA_id_rota`) REFERENCES `rota` (`id_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota_has_estado`
--
ALTER TABLE `rota_has_estado`
  ADD CONSTRAINT `fk_ROTA_has_ESTADO_ESTADO1` FOREIGN KEY (`ESTADO_id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ROTA_has_ESTADO_ROTA1` FOREIGN KEY (`ROTA_id_rota`) REFERENCES `rota` (`id_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `rota_has_evento`
--
ALTER TABLE `rota_has_evento`
  ADD CONSTRAINT `fk_ROTA_has_EVENTO_EVENTO1` FOREIGN KEY (`EVENTO_id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ROTA_has_EVENTO_ROTA1` FOREIGN KEY (`ROTA_id_rota`) REFERENCES `rota` (`id_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_TIPO_USUARIO` FOREIGN KEY (`TIPO_USUARIO_id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
