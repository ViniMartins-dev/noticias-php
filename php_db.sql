-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2024 às 22:57
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
-- Banco de dados: `php_db`
--
CREATE DATABASE IF NOT EXISTS `php_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_db`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(4) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `corpo` text NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `publicacao` date NOT NULL,
  `aprovado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `corpo`, `imagem`, `publicacao`, `aprovado`) VALUES
(21, 'Tecnologia Revoluciona o Ensino em Escolas Públicas', 'Um novo sistema de inteligência artificial está transformando o aprendizado no Brasil.', 'Em um esforço para modernizar o ensino, um sistema baseado em inteligência artificial foi implementado em mais de 500 escolas públicas em todo o país. A plataforma personalizada ajuda os alunos a aprender no próprio ritmo, enquanto professores podem monitorar o progresso em tempo real. Especialistas acreditam que essa tecnologia pode reduzir as desigualdades no acesso à educação de qualidade.\r\n\r\n', '/imagens/noticia1.jpg', '2024-11-30', 1),
(22, 'Cientistas Descobrem Exoplaneta Semelhante à Terra', 'Astrônomos encontraram um exoplaneta com características que podem suportar vida.', 'A Agência Espacial Europeia anunciou a descoberta de um exoplaneta na zona habitável de uma estrela a 100 anos-luz da Terra. O planeta, batizado de \"Gaia-B2\", possui condições atmosféricas e temperatura semelhantes às do nosso planeta. Apesar de ser um marco na exploração espacial, cientistas destacam que levará décadas para estudar o local em mais detalhes.', '/imagens/noticia2.jpg', '2024-11-30', 1),
(23, 'Novo Tratamento Promissor Contra o Câncer É Testado com Sucesso', 'Um tratamento experimental apresentou resultados promissores em pacientes com câncer avançado.', 'Pesquisadores da Universidade de Stanford divulgaram um estudo sobre um tratamento que utiliza nanopartículas para atacar células cancerígenas. Durante os testes clínicos, 70% dos pacientes com câncer avançado apresentaram remissão completa. Apesar do otimismo, os especialistas alertam que mais testes serão necessários antes da aprovação definitiva pelas agências de saúde.', '/imagens/noticia3.jpg', '2024-11-30', 0),
(24, 'Brasil Lidera Ranking de Energia Renovável na América Latina', 'O país ultrapassou metas internacionais para a geração de energia limpa.', 'O Brasil foi reconhecido pela ONU como líder em energia renovável na América Latina. Com mais de 80% de sua matriz energética proveniente de fontes limpas, como hidrelétrica, solar e eólica, o país superou metas estabelecidas no Acordo de Paris. Especialistas acreditam que, com mais investimentos, o Brasil pode se tornar referência global no setor.\r\n\r\n', '/imagens/noticia4.jpg', '2024-11-30', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `login`, `senha`) VALUES
(2, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
