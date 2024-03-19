-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/03/2024 às 22:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jn_empreendimento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(50) DEFAULT NULL,
  `Nome_cliente` text DEFAULT NULL,
  `Email_cliente` varchar(100) DEFAULT NULL,
  `Idade_cliente` int(50) DEFAULT NULL,
  `Curso_cliente` tinytext DEFAULT NULL,
  `Serie_cliente` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nome_cliente`, `Email_cliente`, `Idade_cliente`, `Curso_cliente`, `Serie_cliente`) VALUES
(1, 'Joao Melao', 'joao43@aluno.ce.gov.br', 17, 'Informatica', 3),
(2, 'Maria Manga', 'maria55@aluno.ce.gov.br', 16, 'Enfermagem', 2),
(3, 'Paulo Batata', 'pedro90@aluno.ce.gov.br', 17, 'Hospedagem', 1),
(4, 'Ana Banana', 'ana232@aluno.ce.gov.br', 15, 'Traducao e interprete de Libras', 3),
(5, 'Lucas Mamao', 'lucas232@aluno.ce.gov.br', 22, 'Seguranca do trabalho', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `Forma_pagamento` tinytext DEFAULT NULL,
  `Valor_pagamento` double DEFAULT NULL,
  `Horario` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`Forma_pagamento`, `Valor_pagamento`, `Horario`) VALUES
('Pix', 10, '2024-12-05 12:59:59.000000'),
('Especie', 12.99, '2024-12-05 12:02:47.000000'),
('Pix', 15, '2024-12-05 11:45:29.000000'),
('Pix', 17, '2024-12-05 09:52:19.000000'),
('Especie', 22, '2024-12-05 08:43:28.000000'),
('Pix', 16.5, '2024-12-05 15:43:12.000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `ID_Produto` int(50) DEFAULT NULL,
  `Categoria` tinytext DEFAULT NULL,
  `Preco` double DEFAULT NULL,
  `Nome_produto` tinytext DEFAULT NULL,
  `Quantidade_produto` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`ID_Produto`, `Categoria`, `Preco`, `Nome_produto`, `Quantidade_produto`) VALUES
(1, 'Alimento', 14.99, 'Brownie', 2),
(2, 'Adorno', 7.99, 'Brinco', 2),
(3, 'Material Escolar', 10.99, 'Caneta', 5),
(4, 'Alimento', 5.99, 'Coxinha', 1),
(5, 'Objeto', 1.99, 'Parafuso', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `Nome_Vendedor` text DEFAULT NULL,
  `ID_Vendedor` int(50) DEFAULT NULL,
  `Idade_Vendedor` int(50) DEFAULT NULL,
  `Email_Vendedor` varchar(50) DEFAULT NULL,
  `Curso_Vendedor` varchar(50) DEFAULT NULL,
  `Serie_Vendedor` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendedor`
--

INSERT INTO `vendedor` (`Nome_Vendedor`, `ID_Vendedor`, `Idade_Vendedor`, `Email_Vendedor`, `Curso_Vendedor`, `Serie_Vendedor`) VALUES
('Pedro Maca', 1, 16, 'pedro78@aluno.ce.gov.br', 'Informatica', 2),
('Eduardo Pera', 2, 15, 'eudardo11@aluno.ce.gov.br', 'Enfermagem', 1),
('Carlos Abacate', 3, 16, 'carlos7@aluno.ce.gov.br', 'Enfermagem', 3),
('Caio Uva', 4, 17, 'caio23aluno.ce.gov.br', 'Hospedagem', 2),
('Jorge Laranja', 5, 17, 'jorge34@aluno.ce.gov.br', 'Traducao e interprete de LIBRAS', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
