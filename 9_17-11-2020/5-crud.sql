-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2020 às 01:40
-- Versão do servidor: 10.1.38-MariaDB
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
-- Database: `5-crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `telefone`, `email`) VALUES
(2, 'marcos', 'RUA JOSé DOS CAMPOS', '1121312313', 'anderson@hotmail.com'),
(3, 'JOãO', 'RUAL L2C', '2114214124', 'joão@gmail.com'),
(4, 'JOSÉ', 'ADASDSADASDSADD', '1231312312', 'ascsaascsaca'),
(5, 'JOÃO', 'RUA TAL', '1231232132', 'joão1221@gmail.com'),
(6, 'JUBILEU', 'ASDADADSA', '1321313123', 'sadsadsa@hotmail.com'),
(7, 'JULIANA', 'ASDASDASDASDSA', '1221331233', 'juliana@hotmail.com'),
(8, 'JULIANA', 'ASDSADAS', '12323213', 'juliana@gmail.com'),
(9, 'JEFERSON OLIVEIRA', 'JEF OLIVER', '1231321345', 'jesersonoliveira@hotmail.com'),
(10, 'MARCOS', 'RUA TREM BãO', '(11)99667-', 'marcos@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `email`, `telefone`, `endereco`, `estado`, `cidade`, `cep`, `cargo`, `empresa`) VALUES
(1, 'JONAS', 'sadsadasdasdasd', '12323313313', 'DGSGSGGSGSGSGGSDFGGF', 'ACRE', 'FSGSDGGFSDGDFGFDG', '1232323123213213', 'EQEWQEQWEWQEWQE', 'QEQWEQEWQEWQEQW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `unidade` varchar(3) NOT NULL,
  `peso` double(5,3) NOT NULL,
  `valor` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `unidade`, `peso`, `valor`) VALUES
(1, 'PEDRA BRITA', 'KG', 1.000, 133.00),
(3, 'JADE', 'KG', 1.000, 1131.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `perfil`) VALUES
(1, 'KAYKY MATOS SANTANA', '40028922', 'Administrador'),
(2, 'MARIA LUCIA', '21312133', 'Administrador'),
(4, 'JOÃO', '123213213123', 'Administrador'),
(5, 'MARCELO   ', 'asdasd213213', 'Administrador'),
(6, 'JOSé ALBéRTO', '12345553434', 'USUARIO'),
(7, 'ANA JúLIA', '13121113756', 'ADMINISTRADOR'),
(8, 'JULIANA', 'sdfsdfafasfasd', 'ADMINISTRADOR'),
(9, 'JUBILEU', 'dsdfgsdgfdgsg', 'ADMINISTRADOR'),
(10, 'RONALDO', '13131233123131', 'ADMINISTRADOR'),
(11, 'ANDERSON SILVA', 'gsffsdfsdfdfdsfsd', 'ADMINISTRADOR'),
(12, 'JESSICA', 'llllkhgjh', 'ADMINISTRADOR'),
(13, 'MIRELA', 'fsfsdfrefefrefefe', 'ADMINISTRADOR'),
(14, 'ANA LORENZA', 'ngGSFNFNHNHGNH', 'USUARIO'),
(15, 'MARCIO', 'wwwwwwwwqqqqqqqq', 'ADMINISTRADOR'),
(16, 'ANERSON', 'fr23fre344', 'ADMINISTRADOR'),
(17, 'ALBERTO SIQUEIRA', '2211221167788', 'USUARIO'),
(18, 'JASON', '56676576576575765', 'ADMINISTRADOR'),
(19, 'JONAS', 'wrbbrtbtbbtbtbb', 'ADMINISTRADOR'),
(20, 'MARLON', '112233', 'ADMINISTRADOR'),
(21, 'ANDRESSA', '11111111111111111111111', 'ADMINISTRADOR'),
(22, 'ANA BEATRIZ', 'kyuyuiyuiyuiuy', 'ADMINISTRADOR'),
(23, 'MARIA', 'retetetretretettert', 'ADMINISTRADOR'),
(24, 'JOSé', 'gtrwhtrhrtghr', 'ADMINISTRADOR'),
(26, 'JOSé', 'gfhfghgfhgfhgf', 'ADMINISTRADOR'),
(28, 'JOSé', 'asdasdasd', 'ADMINISTRADOR'),
(29, 'JOSÉ', 'adsadsadsadsdsad', 'ADMINISTRADOR'),
(30, 'joaquina dos santos', 'asfdsfdfafsdfasf', 'adm'),
(31, 'MARCOS', '123', 'ADM'),
(32, 'ALAN', '3333', 'ADIMINISTRADOR'),
(33, 'JUBILEU', '11121', 'ADIMINISTRADOR'),
(34, 'MALANDRAMENTE', 'AAASS', 'ADIMINISTRADOR'),
(35, 'MARCOS AURÉLIO', '1231231311313131', 'ADMINISTRADOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
