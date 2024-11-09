-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Jun-2024 às 00:19
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_de_actividade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `actividade_curso`
--

CREATE TABLE `actividade_curso` (
  `id_actividade_curso` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_insercao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_realizar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `actividade_curso`
--

INSERT INTO `actividade_curso` (`id_actividade_curso`, `id_curso`, `nome`, `data_insercao`, `data_realizar`) VALUES
(1, 1, 'dia 30 de abril ir no canar', '2024-03-31 14:23:48', '0000-00-00 00:00:00'),
(2, 3, 'grtyhjkkhgfder1209', '2014-04-24 22:22:26', '2024-04-03 23:22:26'),
(3, 2, 'Vamos ao zango fazer placas 3d', '2024-04-06 16:19:22', '2024-04-06 17:18:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `actividade_geral`
--

CREATE TABLE `actividade_geral` (
  `id_actividade_geral` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `data_realizar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_insercao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `actividade_geral`
--

INSERT INTO `actividade_geral` (`id_actividade_geral`, `nome`, `data_realizar`, `data_insercao`) VALUES
(1, 'wydgydugewuygewh', '2019-03-07 23:00:00', '2024-03-30 00:00:00'),
(2, 'wqeqwrtertyuiuolkp;', '2024-03-30 19:30:47', '2024-03-30 20:30:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nome_adm` varchar(50) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nome_adm`, `telefone`, `senha`, `foto`, `sexo`, `email`) VALUES
(1, 'Jucelmo Ac', '934670180', '202cb962ac59075b964b07152d234b70', '78grehnfbhfbhjbfhvd', 'Masculino', 'jucelmo@txt.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `nome_curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `id_disciplina`, `nome_curso`) VALUES
(1, 1, 'Informatica'),
(2, 2, 'Telecomunicação '),
(3, 3, 'Electronica'),
(4, 3, 'CFB'),
(5, 3, 'congest'),
(6, 3, 'Soldadura Industrial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`) VALUES
(1, 'redes'),
(2, 'robotica'),
(3, 'Fisica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nome_estudante` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(9) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `numeroBI` varchar(16) NOT NULL,
  `sexo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id_estudante`, `id_curso`, `nome_estudante`, `email`, `senha`, `telefone`, `endereco`, `foto`, `numeroBI`, `sexo`) VALUES
(1, 1, 'Azael Bongo', 'azael@text.com', '81dc9bdb52d04dc20036dbd8313ed055', '937996328', NULL, '766363tteyuhehbhewvghe', '0005544366', 'Masculino'),
(2, 2, 'Mário Vandu-men', 'mario@txt.com', '81dc9bdb52d04dc20036dbd8313ed055', '934670180', 'grafanil bar,rua 11 casa numero 394', 'yr7ewuyidhkjldklas', '00055443661', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `id_disciplina`, `nome_professor`, `email`, `senha`, `endereco`, `foto`, `sexo`, `telefone`) VALUES
(1, 1, 'Guiomar Bongo', 'gui@txt.com', '81dc9bdb52d04dc20036dbd8313ed055', 'grafanil bar,rua 11', 'eywygtetwyu', 'F', '95237566'),
(2, 2, 'Jucelmo Manuel', 'joao@text.com', '321', 'grafanil bar', 'd41d8cd98f00b204e9800998ecf8427e.', 'M', '947794723'),
(3, 2, 'Mauro Kepa', 'mauro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'grafanil bar', '06906229cbbb06d0c74f6d2943ad061e', 'masculino', '94534235'),
(4, 1, 'Cánicia Paulo', 'cp@text.com', '202cb962ac59075b964b07152d234b70', 'Boa Fé', '', 'feminino', '934786726');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretario`
--

CREATE TABLE `secretario` (
  `id_secretario` int(11) NOT NULL,
  `nome_secretario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(9) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `sexo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `secretario`
--

INSERT INTO `secretario` (`id_secretario`, `nome_secretario`, `email`, `telefone`, `foto`, `senha`, `sexo`) VALUES
(1, 'Joaquim D\'Oliveira', 'joaquim@txt.com', '95237566', '', '202cb962ac59075b964b07152d234b70', 'Masculino'),
(2, 'Isabel Bongo', 'isabel@txt', '937996328', '62d9a49f9958416adaf6b91fe9b00258', '81dc9bdb52d04dc20036dbd8313ed055', 'feminino'),
(3, 'Jucelmo Manuel', 'bondoso@txt.com', '937996328', 'd41d8cd98f00b204e9800998ecf8427e', '123', 'masculino'),
(4, 'Jucelmo Manuel', 'jucelmo@txt.com', '94389457', 'd41d8cd98f00b204e9800998ecf8427e', '123', 'masculino'),
(5, 'Jucelmo Bongo', 'jucelmo@txt.com', '94389457', 'd41d8cd98f00b204e9800998ecf8427e', '123', 'masculino');

--
-- Índices para tabelas despejadas
--




--
-- Índices para tabela `actividade_curso`
--
ALTER TABLE `actividade_curso`
  ADD PRIMARY KEY (`id_actividade_curso`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `actividade_geral`
--
ALTER TABLE `actividade_geral`
  ADD PRIMARY KEY (`id_actividade_geral`);

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Índices para tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Índices para tabela `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`id_secretario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `actividade_curso`
--
ALTER TABLE `actividade_curso`
  MODIFY `id_actividade_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `actividade_geral`
--
ALTER TABLE `actividade_geral`
  MODIFY `id_actividade_geral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `secretario`
--
ALTER TABLE `secretario`
  MODIFY `id_secretario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `actividade_curso`
--
ALTER TABLE `actividade_curso`
  ADD CONSTRAINT `actividade_curso_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`);

--
-- Limitadores para a tabela `estudante`
--
ALTER TABLE `estudante`
  ADD CONSTRAINT `estudante_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
