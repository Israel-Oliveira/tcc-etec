-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2023 às 01:11
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `email`, `senha`) VALUES
(13, 'Teste 1 Tcc', 'teste1tcc@gmail.com', 'teste1'),
(68, 'teste 2 Tcc', 'teste2tcc@gmail.com', 'teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imgcategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `status`, `nome`, `imgcategoria`) VALUES
(3, 0, 'Nome da Pizza', '6431b25ac914c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `titulo_pagina` varchar(255) NOT NULL
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
  `nome` varchar(255) NOT NULL,
  `img-card-produto` varchar(255) NOT NULL,
  `subtitulo-produto` varchar(255) NOT NULL,
  `preco-produto` varchar(100) NOT NULL,
  `img-principal-produto` varchar(255) NOT NULL,
  `descricao-produto` varchar(255) NOT NULL,
  `adicionais-ativos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
