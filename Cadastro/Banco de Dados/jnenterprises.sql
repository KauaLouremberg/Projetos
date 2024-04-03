-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Mar-2024 às 23:15
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jnenterprises`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `logins`
--

INSERT INTO `logins` (`id`, `user`, `email`, `password`) VALUES
(1, 'Spongebob', '', '$2y$10$C3GtZZKqJfi98TZ0lEGc/eBqqd5YUNvROJIQCa8IN6lI3MwDOpcyC'),
(7, 'Squidward', 'Squidward@gmail.com', '$2y$10$4gvEKnnz5cQ8VS2.SDE5jOpYx3iF26iqAuLhDQHor6/fiiFHTs/te'),
(8, 'LourenX', 'kaualouremberg@gmail.com', '$2y$10$iLRqKLNg5RyVrssahP/SGuDNilnoklOkCXON6vLivkK.U62K9mig6'),
(9, 'ThunderCat', 'Thunderbolt@gmail.com', '$2y$10$Jyog1s4pFiBo8RRXHwNSjOD3J2ygfkrsVEzO53IrOdjC5dOyJhGiC'),
(13, 'Patrick', 'Patrick@gmail.com', '$2y$10$hCreflJPgeOd25BZUUpwwuaa54Ue3Ohq/3Krzp.GG7qg36dXTyG6.'),
(14, 'ArthurMorgan', 'ArthurMorgan@gmail.com', '$2y$10$771Vg9nFY6J5uqDchqirpOZbfvSYJkIdmY1SmAgGvbKijCxHbVYNC'),
(15, 'MicahBell', 'Rat@gmail.com', '$2y$10$BSP8rt6tU/jGddiq7c1IBexiY9BsXU7/fjbC/tjNHK5s8Q052oeu6'),
(16, 'JohnMarston', 'JohnMorgan@gmail.com', '$2y$10$rByQ5p/8EvZA4NpLiNAJk.WF.E0a8DtHkv9UXSLj5Zx197XiYTcMq'),
(17, 'Ash', 'Ashpegabolas@gmail.com', '$2y$10$rj7uwOJlCEC/IVXWA/C16O4Ha7wgmTIyh5AnFKEa69rRwpk2Awua6'),
(18, 'Anderson', 'Anderson@gmail.com', '$2y$10$BjXNyZMeQTeiyY0IfQtNpenOXt5Kxnw.JtxnalJMrBW342DctDkOW'),
(19, 'Matheus', 'sk3010mfc@gmail.com', '$2y$10$/n1iomOCs7BVMv2E6JB2Se5BzLdK3xhzAmgqoVkFUm11t9oCn3YVa'),
(37, 'fssdf', 'asdasdasd@a.c', '$2y$10$AWp7q6zaLN505.CqtMZG6.vU6b5VPbSDDV.9XHq1dcqcvPtdxwUq2'),
(38, 'patodebotas', 'patodebotas@gmail.com', '$2y$10$AAP9J0GmU2zqhKYyfuL6geXgJZGw3RmLdDe6he.f2X4QQgF0eCUS2'),
(40, 'realmente', 'realmente@gmail.com', '$2y$10$VzrC0xGt9xZk1Qb02PQapuACgTmocDu.7TGVySan.wJOjDN4IeVIq'),
(71, 'euuseimuito', 'realmente2@gmail.com', '$2y$10$Mw9rqb8nYNel425jkUnpkeMnrEPk28cmXS.g7vR4DP952CwnbS2cm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
