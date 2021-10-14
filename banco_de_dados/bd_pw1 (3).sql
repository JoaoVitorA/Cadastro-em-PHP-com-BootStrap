-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2021 às 23:50
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_pw1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd_pw1`
--

CREATE TABLE `bd_pw1` (
  `tabela_id1` int(10) NOT NULL,
  `nome_podt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nome_fabri` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tamanho` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `dat_fabi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `data_venc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `quant_estoq` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bd_pw1`
--

INSERT INTO `bd_pw1` (`tabela_id1`, `nome_podt`, `nome_fabri`, `modelo`, `tamanho`, `dat_fabi`, `data_venc`, `quant_estoq`) VALUES
(1, 'shampoo', '50ml verde', 'dsa ', 'rewr', '2021-10-28 ', '1982', '2'),
(2, 'shampoo', 'alex', 'alex ', 'as', '2021-10-28 ', '1994', '23');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bd_pw1`
--
ALTER TABLE `bd_pw1`
  ADD PRIMARY KEY (`tabela_id1`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bd_pw1`
--
ALTER TABLE `bd_pw1`
  MODIFY `tabela_id1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
