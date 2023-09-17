-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2023 às 00:15
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
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_casa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `estado`, `uf`, `cidade`, `bairro`, `rua`, `numero_casa`) VALUES
(1, 'Maranhão', 'MA', 'São Luís', 'Raposa', 'Rua das laranjas', 23),
(5, 'MA', 'MA', 'São Luís', 'Monte Castelo', 'Rua Ramon Afonso', 10),
(6, 'MA', 'MA', 'São Luís', 'Liberdade', 'Greogorio de Matos', 9),
(7, 'MA', 'MA', 'São Luís', 'Monte Castelo', 'Rua das Flores', 12),
(8, 'fgdklsjgklsd', 'MA', 'sao luis', 'flkdsjgklvs', 'lkfdsjfklsd', 312);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `id` int(11) NOT NULL,
  `id_aprovacao` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `id_endereco` int(11) UNSIGNED NOT NULL,
  `nacionalidade` varchar(20) DEFAULT NULL,
  `naturalidade` varchar(30) DEFAULT NULL,
  `escolaridade` varchar(20) DEFAULT NULL,
  `cursos` varchar(255) NOT NULL,
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

INSERT INTO `filiais` (`id`, `id_aprovacao`, `nome`, `email`, `id_endereco`, `nacionalidade`, `naturalidade`, `escolaridade`, `cursos`, `estado_civil`, `nascimento`, `fone`, `cpf`, `rg`, `nome_pai`, `nome_mae`, `nome_conjuge`, `nome_filhos`, `assinatura_socio`, `numero_matricula`, `registrado`) VALUES
(1, 2, 'Marcos Souza Silva', 'marcos@gmail.com', 1, 'Brasilerio', 'São Luís', 'Fundamental', 'Nenhum', 'Solteiro', '1990-02-05', '9892291423', '882.273.160-34', '5425123', 'Luis Fernando', 'Maria Conceição', 'Isabella Moreira', 'Isabella Sousa', 'Fernando Alves', 347465347, '2023-06-25 21:57:26'),
(17, 2, 'Pedro Souza Silva', 'pedro@gmail.com', 5, 'Brasileiro', 'São Luís', 'superior', 'Administração', 'solteiro', '1999-06-13', '(98) 5 4231-2445', '929.432.190-88', '11.111.111-1', 'Leonardo da Silva', 'Maria Silva', 'Isabella Mello', 'Anderson Silva', 'Fernando Alves', 2147483647, '2023-06-26 13:26:32'),
(18, 2, 'Lucas Moreira Alemão', 'lucas@gmail.com', 6, 'Brasileiro', 'São Luís', 'superior', 'Administração', 'solteiro', '1999-06-01', '(98) 5 4231-2412', '607.338.403-37', '33.333.333-3', 'Julio Cezar', 'Lucia Marcia', 'Ana Julia', 'Julio Cezar', 'Fernando Alves', 2147483647, '2023-06-26 13:26:43'),
(19, 2, 'Ana Claudia', 'ana@gmail.com', 7, 'Brasileiro', 'São Luís', 'superior', 'Administração', 'casado', '1999-06-13', '(98) 8 4291-2433', '139.782.190-08', '23.633.873-3', 'Roberto Ricardo', 'Laura Silva', 'Ítalo Robson', 'Ana Maria', 'Fernando Alves', 111111111, '2023-06-26 13:31:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial_aprovacao`
--

CREATE TABLE `filial_aprovacao` (
  `id` int(11) UNSIGNED NOT NULL,
  `aprovacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `filial_aprovacao`
--

INSERT INTO `filial_aprovacao` (`id`, `aprovacao`) VALUES
(1, 'APROVADO'),
(2, 'NÃO APROVADO');

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
(35, 'Bem vindo(a) ao sintracema', 'Bem-vindo ao Sintracema, o sindicato que luta pelos direitos dos trabalhadores. Juntos, alcançaremos melhores condições e justiça no ambiente de trabalho!', 'noticias/64754ca209e1f.jpg', '2023-05-29 22:08:50'),
(37, 'Laboratório de Transformação Digital.', 'Este site foi feito pela Equipe de desenvolvimento da Estácio de Sá | Laboratório de Transformação Digital.', 'noticias/64852eae0cf66.jpg', '2023-06-10 23:17:18');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_filias_aprovacao` (`id_aprovacao`),
  ADD KEY `fk_filias_endereco` (`id_endereco`);

--
-- Índices para tabela `filial_aprovacao`
--
ALTER TABLE `filial_aprovacao`
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
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `filial_aprovacao`
--
ALTER TABLE `filial_aprovacao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `filiais`
--
ALTER TABLE `filiais`
  ADD CONSTRAINT `fk_filias_aprovacao` FOREIGN KEY (`id_aprovacao`) REFERENCES `filial_aprovacao` (`id`),
  ADD CONSTRAINT `fk_filias_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
