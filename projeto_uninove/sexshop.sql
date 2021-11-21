-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2019 às 15:13
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sexshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_bin NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_tipo`, `nome`, `preco`, `imagem`) VALUES
(1, 1, 'Massageador Lilás', '49.90', 'massageador.png'),
(2, 1, 'Consolo duplo marrom', '120.00', 'toramarrom.png'),
(3, 1, 'Consolo Rosa', '49.90', 'torapink.png'),
(4, 1, 'Vibrador Max Turbo', '150.00', 'toraroxa.png'),
(5, 1, 'Vibrador Rosa Alien', '30.00', 'vibrarosa.png'),
(6, 3, 'Óleo para massagem excitante', '25.00', '50tons.png'),
(7, 2, 'Algema preta', '35.90', 'algema.png'),
(8, 2, 'Chicote erótico', '15.99', 'chicote.png'),
(9, 2, 'Coleira erótica', '15.90', 'coleira.png'),
(10, 3, 'Gel estimulante quente', '22.90', 'fireice.png'),
(11, 3, 'Gel Halls preto', '11.90', 'hallspreto.png'),
(12, 2, 'Máscara branca', '10.90', 'mascarab.png'),
(13, 2, 'Máscara mulher gato', '50.00', 'mulhergato.png'),
(14, 2, 'Máscara e chicote', '69.90', 'tiazinha.png'),
(15, 2, 'Vagina portátil', '300.00', 'ppk.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `id_produto` (`id_produto`),
  ADD KEY `fk_tipos` (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_tipos` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
