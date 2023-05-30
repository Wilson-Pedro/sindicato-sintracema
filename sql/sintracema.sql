-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2023 às 03:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sintracema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT NULL,
  `naturalidade` varchar(30) DEFAULT NULL,
  `escolaridade` varchar(20) DEFAULT NULL,
  `cursos` varchar(255) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `nascimento` date NOT NULL,
  `fone` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `nome_pai` varchar(100) DEFAULT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  `nome_conjuge` varchar(100) DEFAULT NULL,
  `nome_filhos` varchar(100) DEFAULT NULL,
  `assinatura_socio` varchar(100) DEFAULT NULL,
  `numero_matricula` int(100) NOT NULL,
  `registrado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `filiais`
--

INSERT INTO `filiais` (`id`, `nome`, `email`, `uf`, `cidade`, `nacionalidade`, `naturalidade`, `escolaridade`, `cursos`, `endereco`, `estado_civil`, `nascimento`, `fone`, `cpf`, `rg`, `nome_pai`, `nome_mae`, `nome_conjuge`, `nome_filhos`, `assinatura_socio`, `numero_matricula`, `registrado`) VALUES
(1, 'Marcos Souza Silva', 'marcos@gmail.com', 'MA', 'São Luís', 'Brasilerio', 'São Luís', 'Fundamental', 'Nenhum', 'Avenida Principal', 'Solteiro', '1990-02-05', '98991191467', '882.273.160-34', '5425123', 'Luis Fernando', 'Maria Conceição', 'Isabella Moreira', 'Isabella Sousa', 'Fernando Alves', 347465345, '2023-05-29 23:16:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `caminho`, `data_upload`) VALUES
(35, 'Bem vindo(a) ao sintracema', 'Bem-vindo ao Sintracema, o sindicato que luta pelos direitos dos trabalhadores. Juntos, alcançaremos melhores condições e justiça no ambiente de trabalho.', 'noticias/64754ca209e1f.jpg', '2023-05-29 22:08:50'),
(36, 'Laboratório de Transformação Digital.', 'Este site foi feito pela Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital.', 'noticias/64755255c8e79.jpg', '2023-05-29 22:33:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `data`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$RKTaBNhApzr.ZlNdWRPhb.5w/I/HYvYdacUYkrhG5Np9V83ijvT2a', '2023-05-14 22:30:21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
