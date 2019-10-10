-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2019 às 03:35
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `selecaoprogphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparelhos`
--

CREATE TABLE `aparelhos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao_aparelho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_aparelho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aparelhos`
--

INSERT INTO `aparelhos` (`id`, `descricao_aparelho`, `codigo_aparelho`, `created_at`, `updated_at`) VALUES
(1, 'aparelho 1', 'da1s5d6as4f', NULL, NULL),
(2, 'aparelho 2', 'dsa456a8sd7', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_09_181144_create_usuarios_table', 1),
(2, '2019_10_09_181207_create_aparelhos_table', 1),
(3, '2019_10_09_181249_create_usuario__aparelhos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempo_expiracao_senha` int(11) NOT NULL,
  `cod_autorizacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `login`, `email`, `senha`, `tempo_expiracao_senha`, `cod_autorizacao`, `status_usuario`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo', 'Leonardo', 'leo@hotmail.com', '123', 1, '1ewewew', '1', NULL, NULL),
(2, 'felipe', 'felipe', 'felipe@hotmail.com', '123', 1, 'ewq', '1', NULL, NULL),
(3, 'João', 'João', 'joao@hotmail.com', '123', 12, 'hp', '1', '2019-10-10 00:44:28', '2019-10-10 00:44:28'),
(4, 'Henrique', 'Henrique', 'henrique@hotmail.com', '123', 1, 'da', '1', '2019-10-10 00:46:00', '2019-10-10 00:46:00'),
(5, 'Matheus Pini', 'matheusGP', 'matheus1995pini@hotmail.com', '123456', 1, '1', '2', '2019-10-10 00:58:33', '2019-10-10 01:41:06'),
(6, 'jose', 'jose', 'jose@gmail.com', '123', 12, '123', '1', '2019-10-10 01:00:42', '2019-10-10 01:00:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_aparelhos`
--

CREATE TABLE `usuario_aparelhos` (
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `aparelho_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario_aparelhos`
--

INSERT INTO `usuario_aparelhos` (`usuario_id`, `aparelho_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(5, 1, '2019-10-10 00:58:33', '2019-10-10 00:58:33'),
(6, 1, '2019-10-10 01:00:43', '2019-10-10 01:00:43'),
(1, 2, NULL, NULL),
(2, 2, NULL, NULL),
(6, 2, '2019-10-10 01:00:43', '2019-10-10 01:00:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario_aparelhos`
--
ALTER TABLE `usuario_aparelhos`
  ADD PRIMARY KEY (`aparelho_id`,`usuario_id`),
  ADD KEY `usuario_aparelhos_usuario_id_foreign` (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario_aparelhos`
--
ALTER TABLE `usuario_aparelhos`
  ADD CONSTRAINT `usuario_aparelhos_aparelho_id_foreign` FOREIGN KEY (`aparelho_id`) REFERENCES `aparelhos` (`id`),
  ADD CONSTRAINT `usuario_aparelhos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
