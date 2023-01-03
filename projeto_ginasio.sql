-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03-Jan-2023 às 13:01
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_ginasio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '2', 1672741922),
('cliente', '12', 1672741922),
('staff', '8', 1672741922);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1672741922, 1672741922),
('alterarEspacoVerde', 2, 'Alterar Espaço Verde', NULL, NULL, 1672741922, 1672741922),
('alterarInfoTreino', 2, 'Alterar Informação de Treino', NULL, NULL, 1672741922, 1672741922),
('alterarPlanoTreino', 2, 'Alterar Plano de Treino', NULL, NULL, 1672741922, 1672741922),
('alterarProduto', 2, 'Alterar Produto', NULL, NULL, 1672741922, 1672741922),
('alterarQRCode', 2, 'Alterar QRCode', NULL, NULL, 1672741922, 1672741922),
('alterarSubscricao', 2, 'Alterar Subscricao', NULL, NULL, 1672741922, 1672741922),
('alterarUser', 2, 'Atualizar User', NULL, NULL, 1672741922, 1672741922),
('apagarEspacoVerde', 2, 'Apagar Espaço Verde', NULL, NULL, 1672741922, 1672741922),
('apagarInfoTreino', 2, 'Apagar Informação de Treino', NULL, NULL, 1672741922, 1672741922),
('apagarPlanoTreino', 2, 'Apagar Plano de Treino', NULL, NULL, 1672741922, 1672741922),
('apagarProduto', 2, 'Apagar Produto', NULL, NULL, 1672741922, 1672741922),
('apagarQRCode', 2, 'Apagar QRCode', NULL, NULL, 1672741922, 1672741922),
('apagarSubscricao', 2, 'Apagar Subscricao', NULL, NULL, 1672741922, 1672741922),
('apagarUser', 2, 'Apagar User', NULL, NULL, 1672741922, 1672741922),
('cliente', 1, NULL, NULL, NULL, 1672741922, 1672741922),
('comprarProduto', 2, 'Comprar Produto', NULL, NULL, 1672741922, 1672741922),
('comprarSubscricao', 2, 'Comprar Subscricao', NULL, NULL, 1672741922, 1672741922),
('criarEspacoVerde', 2, 'Criar Espaço Verde', NULL, NULL, 1672741922, 1672741922),
('criarInfoTreino', 2, 'Criar Informação de Treino', NULL, NULL, 1672741922, 1672741922),
('criarPlanoTreino', 2, 'Criar Plano de Treino', NULL, NULL, 1672741922, 1672741922),
('criarProduto', 2, 'Criar Produto', NULL, NULL, 1672741922, 1672741922),
('criarQRCode', 2, 'Criar QRCode', NULL, NULL, 1672741922, 1672741922),
('criarSubscricao', 2, 'Criar Subscricao', NULL, NULL, 1672741922, 1672741922),
('criarUser', 2, 'Criar User', NULL, NULL, 1672741922, 1672741922),
('gerirEspacoVerde', 2, 'Gerir Espaço Verde', NULL, NULL, 1672741922, 1672741922),
('gerirInfoTreino', 2, 'Gerir Informação de Treino', NULL, NULL, 1672741922, 1672741922),
('gerirPlanoTreino', 2, 'Gerir Plano de Treino', NULL, NULL, 1672741922, 1672741922),
('gerirProduto', 2, 'Gerir Produto', NULL, NULL, 1672741922, 1672741922),
('gerirQRCode', 2, 'Gerir QRCode', NULL, NULL, 1672741922, 1672741922),
('gerirSubscricao', 2, 'Gerir Subscricao', NULL, NULL, 1672741922, 1672741922),
('gerirUser', 2, 'Gerir User', NULL, NULL, 1672741922, 1672741922),
('staff', 1, NULL, NULL, NULL, 1672741922, 1672741922),
('verEspacoVerde', 2, 'Ver Espaço Verde', NULL, NULL, 1672741922, 1672741922),
('verInfoTreino', 2, 'Ver Informação de Treino', NULL, NULL, 1672741922, 1672741922),
('verPlanoTreino', 2, 'Ver Plano de Treino', NULL, NULL, 1672741922, 1672741922),
('verProduto', 2, 'Ver Produto', NULL, NULL, 1672741922, 1672741922),
('verQRCode', 2, 'Ver QRCode', NULL, NULL, 1672741922, 1672741922),
('verSubscricao', 2, 'Ver Subscricao', NULL, NULL, 1672741922, 1672741922),
('verUser', 2, 'Ver User', NULL, NULL, 1672741922, 1672741922);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'alterarEspacoVerde'),
('admin', 'alterarInfoTreino'),
('staff', 'alterarPlanoTreino'),
('staff', 'alterarProduto'),
('admin', 'alterarQRCode'),
('staff', 'alterarSubscricao'),
('staff', 'alterarUser'),
('admin', 'apagarEspacoVerde'),
('admin', 'apagarInfoTreino'),
('staff', 'apagarPlanoTreino'),
('staff', 'apagarProduto'),
('admin', 'apagarQRCode'),
('admin', 'apagarSubscricao'),
('admin', 'apagarUser'),
('cliente', 'comprarProduto'),
('cliente', 'comprarSubscricao'),
('admin', 'criarEspacoVerde'),
('admin', 'criarInfoTreino'),
('staff', 'criarPlanoTreino'),
('staff', 'criarProduto'),
('admin', 'criarQRCode'),
('admin', 'criarSubscricao'),
('admin', 'criarUser'),
('admin', 'gerirEspacoVerde'),
('admin', 'gerirInfoTreino'),
('staff', 'gerirPlanoTreino'),
('staff', 'gerirProduto'),
('admin', 'gerirQRCode'),
('staff', 'gerirSubscricao'),
('staff', 'gerirUser'),
('admin', 'staff'),
('admin', 'verEspacoVerde'),
('admin', 'verInfoTreino'),
('staff', 'verPlanoTreino'),
('staff', 'verProduto'),
('admin', 'verQRCode'),
('staff', 'verSubscricao'),
('staff', 'verUser');

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_userdata` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `espacosverdes`
--

CREATE TABLE `espacosverdes` (
  `id` int(11) NOT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `disponivel` tinyint(4) DEFAULT '0',
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `altitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatisticas`
--

CREATE TABLE `estatisticas` (
  `id` int(11) NOT NULL,
  `id_userdata` int(11) DEFAULT NULL,
  `imc` float DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `tamanhoBiceps` float DEFAULT NULL,
  `tamanhoTriceps` float DEFAULT NULL,
  `tamanhoPeito` float DEFAULT NULL,
  `tamanhoAbdominal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estatisticas`
--

INSERT INTO `estatisticas` (`id`, `id_userdata`, `imc`, `idade`, `peso`, `altura`, `tamanhoBiceps`, `tamanhoTriceps`, `tamanhoPeito`, `tamanhoAbdominal`) VALUES
(1, 12, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 8, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 2, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura`
--

CREATE TABLE `fatura` (
  `id` int(11) NOT NULL,
  `id_userdata` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura_produto`
--

CREATE TABLE `fatura_produto` (
  `id` int(11) NOT NULL,
  `id_fatura` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacaotreino`
--

CREATE TABLE `informacaotreino` (
  `id` int(11) NOT NULL,
  `id_planoTreino` int(11) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informacaotreino`
--

INSERT INTO `informacaotreino` (`id`, `id_planoTreino`, `titulo`, `descricao`) VALUES
(3, 1, 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1666091664),
('m130524_201442_init', 1666091670),
('m190124_110200_add_verification_token_column_to_user_table', 1666091670),
('m140506_102106_rbac_init', 1666093306),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1666093306),
('m180523_151638_rbac_updates_indexes_without_prefix', 1666093306),
('m200409_110543_rbac_update_mssql_trigger', 1666093306);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planotreino`
--

CREATE TABLE `planotreino` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `repeticoes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `planotreino`
--

INSERT INTO `planotreino` (`id`, `tipo`, `descricao`, `duracao`, `repeticoes`) VALUES
(1, 'Nenhum', 'Nenhum', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planotreinopersonalizado`
--

CREATE TABLE `planotreinopersonalizado` (
  `id` int(11) NOT NULL,
  `id_userdata` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `repeticoes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `redirecionamento` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subscricoes`
--

CREATE TABLE `subscricoes` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `preco` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `subscricoes`
--

INSERT INTO `subscricoes` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'Sem Subscrição', 'O cliente ainda não adquiriu subscrição', 0),
(2, 'Mensal', 'Subscrição mensal da modalidade', 6.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'admin', '_oVLJx1e57o4v2zRJyi5kA1ZBRa54wYL', '$2y$13$iTCH9FVakT5Zf4NS4dI/VufwJHW9wBuNSr5aStoUswTeEDPGJL9.C', NULL, 'admin@gmail.com', 10, 1666628655, 1667236194, 'Ot17Dcr9OnIBsj-DV8btojnpq0QxqxgS_1666628655'),
(8, 'staff', 'Nh0Z4q5naZiqS8BxUUGw-uK3kfEAqLGf', '$2y$13$kQkXk0FBicyXgYpOT33sGeWDkvTd5/EaDXyhNFE0q0finAFHLTdb.', NULL, 'staff@gmail.com', 10, 1668514264, 1668514264, '4m2wR3JDZXbqoaFSuqlortmWrCrh27uG_1668514264'),
(12, 'cliente', 'Fx7iiZjouRHX4zzl8_6f1jl_vzV8MUSr', '$2y$13$OYWmtF/DUurhr9Vnyex4ROUbsr8TEBFb8cCMoQegAbki1lScS9Pzu', NULL, 'cliente@gmail.com', 10, 1671549962, 1671549962, 'g6MMjKGmQ1k8NCTILCWJSWOxD1m9gwDs_1671549962');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `id_subscricao` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `userdata`
--

INSERT INTO `userdata` (`id`, `id_user`, `firstName`, `lastName`, `telemovel`, `morada`, `id_subscricao`) VALUES
(1, 2, 'admin', 'admin', 913194666, 'Leiria, rua xpto', 1),
(7, 8, 'staff', 'staff', 912213321, 'xpto', 1),
(11, 12, 'Jose', 'cliente', 912123321, 'Leiria, rua xpto', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Índices para tabela `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Índices para tabela `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Índices para tabela `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_carrinho_userdata_idx` (`id_userdata`),
  ADD KEY `id_carrinho_produto_idx` (`id_produto`);

--
-- Índices para tabela `espacosverdes`
--
ALTER TABLE `espacosverdes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estatisticas`
--
ALTER TABLE `estatisticas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_userdata_idx` (`id_userdata`);

--
-- Índices para tabela `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fatura_userdata_idx` (`id_userdata`);

--
-- Índices para tabela `fatura_produto`
--
ALTER TABLE `fatura_produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faturaProduto_fatura_idx` (`id_fatura`),
  ADD KEY `id_faturaProduto_produto_idx` (`id_produto`);

--
-- Índices para tabela `informacaotreino`
--
ALTER TABLE `informacaotreino`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_planoTreino_idx` (`id_planoTreino`);

--
-- Índices para tabela `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Índices para tabela `planotreino`
--
ALTER TABLE `planotreino`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planotreinopersonalizado`
--
ALTER TABLE `planotreinopersonalizado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_userdata_idx` (`id_userdata`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `subscricoes`
--
ALTER TABLE `subscricoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Índices para tabela `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_userdata_id_user` (`id_user`),
  ADD KEY `FK_userData_user` (`id_user`),
  ADD KEY `FK_userData_subscricao` (`id_subscricao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `espacosverdes`
--
ALTER TABLE `espacosverdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estatisticas`
--
ALTER TABLE `estatisticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `fatura_produto`
--
ALTER TABLE `fatura_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `informacaotreino`
--
ALTER TABLE `informacaotreino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `planotreino`
--
ALTER TABLE `planotreino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `planotreinopersonalizado`
--
ALTER TABLE `planotreinopersonalizado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `subscricoes`
--
ALTER TABLE `subscricoes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `id_carrinho_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_carrinho_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estatisticas`
--
ALTER TABLE `estatisticas`
  ADD CONSTRAINT `id_estatisticas_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `id_fatura_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fatura_produto`
--
ALTER TABLE `fatura_produto`
  ADD CONSTRAINT `id_faturaProduto_fatura` FOREIGN KEY (`id_fatura`) REFERENCES `fatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_faturaProduto_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `informacaotreino`
--
ALTER TABLE `informacaotreino`
  ADD CONSTRAINT `id_planoTreino` FOREIGN KEY (`id_planoTreino`) REFERENCES `planotreino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `planotreinopersonalizado`
--
ALTER TABLE `planotreinopersonalizado`
  ADD CONSTRAINT `id_planoTreinoPersonalizado_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `FK_userData_subscricao` FOREIGN KEY (`id_subscricao`) REFERENCES `subscricoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_userData_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
