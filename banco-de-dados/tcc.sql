-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2023 às 23:28
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `email`, `senha`) VALUES
(13, 'Teste 1 Tcc', 'teste1tcc@gmail.com', 'teste1'),
(68, 'teste 2 Tcc', 'teste2tcc@gmail.com', 'teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgbanner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `status`, `nome`, `imgbanner`) VALUES
(2, '1', 'banner2', '643886b5aa7e4.jpg'),
(3, '1', 'banner1', '6438880003c48.jpg'),
(4, '1', 'Banner3', '64388842d1eab.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgcategoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `status`, `nome`, `imgcategoria`) VALUES
(7, 1, 'Comidas', '6454359b30aa6.png'),
(8, 0, 'Bebidas', '6454385b68215.png'),
(9, 0, 'Doces', '64543860686da.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_pagina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `whatsapp`, `instagram`, `titulo_pagina`) VALUES
(1, '<br /><b>Warning</b>:  Undefined variable $configuracao in <b>C:\\xampp\\htdocs\\tcc\\back-end\\painel\\construct\\configuracoes\\configuracoes.php</b> on line <b>35</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xamp', '<br /><b>Warning</b>:  Undefined variable $configuracao in <b>C:\\xampp\\htdocs\\tcc\\back-end\\painel\\construct\\configuracoes\\configuracoes.php</b> on line <b>36</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xamp', '<br /><b>Warning</b>:  Undefined variable $configuracao in <b>C:\\xampp\\htdocs\\tcc\\back-end\\painel\\construct\\configuracoes\\configuracoes.php</b> on line <b>34</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xamp'),
(2, '14 99999-9999', 'https://www.instagram.com/', 'aaaass');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgCardProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precoProduto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgPrincipalProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricaoProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adicionaisAtivos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `status`, `nome`, `imgCardProduto`, `subtituloProduto`, `precoProduto`, `imgPrincipalProduto`, `descricaoProduto`, `adicionaisAtivos`, `categoria`) VALUES
(5, 1, 'Comida 1', '645438107b2ea.png', 'Comida 1 Subtitulo', 'R$ 10,00', '645438107b87e.png', 'Comida 1DescriÃ§Ã£o', ' ', '7'),
(6, 1, 'Comida 2 ', '64543833025cc.png', 'Comida 2 Subtitulo', 'R$ 15,00', '64543833029a9.png', 'Comida 2 DescriÃ§Ã£o', ' ', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
