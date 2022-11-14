-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para projeto_ginasio
CREATE DATABASE IF NOT EXISTS `projeto_ginasio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_ginasio`;

-- A despejar estrutura para tabela projeto_ginasio.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_assignment: ~2 rows (aproximadamente)
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
	('cliente', '6', 1668442873),
	('staff', '2', 1668442780);

-- A despejar estrutura para tabela projeto_ginasio.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_item: ~24 rows (aproximadamente)
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
	('admin', 1, NULL, NULL, NULL, 1668442780, 1668442780),
	('alterarEspacoVerde', 2, 'Alterar Espaço Verde', NULL, NULL, 1668442780, 1668442780),
	('alterarInfoTreino', 2, 'Alterar Informação de Treino', NULL, NULL, 1668442780, 1668442780),
	('alterarPlanoTreino', 2, 'Alterar Plano de Treino', NULL, NULL, 1668442780, 1668442780),
	('alterarProduto', 2, 'Alterar Produto', NULL, NULL, 1668442780, 1668442780),
	('alterarQRCode', 2, 'Alterar QRCode', NULL, NULL, 1668442780, 1668442780),
	('alterarSubscricao', 2, 'Alterar Subscricao', NULL, NULL, 1668442780, 1668442780),
	('alterarUser', 2, 'Atualizar User', NULL, NULL, 1668442780, 1668442780),
	('apagarEspacoVerde', 2, 'Apagar Espaço Verde', NULL, NULL, 1668442780, 1668442780),
	('apagarInfoTreino', 2, 'Apagar Informação de Treino', NULL, NULL, 1668442780, 1668442780),
	('apagarPlanoTreino', 2, 'Apagar Plano de Treino', NULL, NULL, 1668442780, 1668442780),
	('apagarProduto', 2, 'Apagar Produto', NULL, NULL, 1668442780, 1668442780),
	('apagarQRCode', 2, 'Apagar QRCode', NULL, NULL, 1668442780, 1668442780),
	('apagarSubscricao', 2, 'Apagar Subscricao', NULL, NULL, 1668442780, 1668442780),
	('apagarUser', 2, 'Apagar User', NULL, NULL, 1668442780, 1668442780),
	('cliente', 1, NULL, NULL, NULL, 1668442780, 1668442780),
	('criarEspacoVerde', 2, 'Criar Espaço Verde', NULL, NULL, 1668442780, 1668442780),
	('criarInfoTreino', 2, 'Criar Informação de Treino', NULL, NULL, 1668442780, 1668442780),
	('criarPlanoTreino', 2, 'Criar Plano de Treino', NULL, NULL, 1668442780, 1668442780),
	('criarProduto', 2, 'Criar Produto', NULL, NULL, 1668442780, 1668442780),
	('criarQRCode', 2, 'Criar QRCode', NULL, NULL, 1668442780, 1668442780),
	('criarSubscricao', 2, 'Criar Subscricao', NULL, NULL, 1668442780, 1668442780),
	('criarUser', 2, 'Criar User', NULL, NULL, 1668442780, 1668442780),
	('staff', 1, NULL, NULL, NULL, 1668442780, 1668442780);

-- A despejar estrutura para tabela projeto_ginasio.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_item_child: ~22 rows (aproximadamente)
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
	('staff', 'alterarEspacoVerde'),
	('admin', 'alterarInfoTreino'),
	('staff', 'alterarPlanoTreino'),
	('staff', 'alterarProduto'),
	('admin', 'alterarQRCode'),
	('admin', 'alterarSubscricao'),
	('staff', 'alterarUser'),
	('staff', 'apagarEspacoVerde'),
	('admin', 'apagarInfoTreino'),
	('staff', 'apagarPlanoTreino'),
	('staff', 'apagarProduto'),
	('admin', 'apagarQRCode'),
	('admin', 'apagarSubscricao'),
	('admin', 'apagarUser'),
	('staff', 'criarEspacoVerde'),
	('admin', 'criarInfoTreino'),
	('staff', 'criarPlanoTreino'),
	('staff', 'criarProduto'),
	('admin', 'criarQRCode'),
	('admin', 'criarSubscricao'),
	('admin', 'criarUser'),
	('admin', 'staff');

-- A despejar estrutura para tabela projeto_ginasio.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_rule: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.carrinho
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_userdata` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_carrinho_userdata_idx` (`id_userdata`),
  KEY `id_carrinho_produto_idx` (`id_produto`),
  CONSTRAINT `id_carrinho_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_carrinho_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.carrinho: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.espacosverdes
CREATE TABLE IF NOT EXISTS `espacosverdes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(255) DEFAULT NULL,
  `disponivel` tinyint(4) DEFAULT '0',
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `altitude` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.espacosverdes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.estatisticas
CREATE TABLE IF NOT EXISTS `estatisticas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_userdata` int(11) DEFAULT NULL,
  `imc` float DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `tamanhoBiceps` float DEFAULT NULL,
  `tamanhoTriceps` float DEFAULT NULL,
  `tamanhoPeito` float DEFAULT NULL,
  `tamanhoAbdominal` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_userdata_idx` (`id_userdata`),
  CONSTRAINT `id_estatisticas_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.estatisticas: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.fatura
CREATE TABLE IF NOT EXISTS `fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_userdata` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fatura_userdata_idx` (`id_userdata`),
  CONSTRAINT `id_fatura_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.fatura: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.fatura_produto
CREATE TABLE IF NOT EXISTS `fatura_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fatura` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_faturaProduto_fatura_idx` (`id_fatura`),
  KEY `id_faturaProduto_produto_idx` (`id_produto`),
  CONSTRAINT `id_faturaProduto_fatura` FOREIGN KEY (`id_fatura`) REFERENCES `fatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_faturaProduto_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.fatura_produto: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.informacaotreino
CREATE TABLE IF NOT EXISTS `informacaotreino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_planoTreino` int(11) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_planoTreino_idx` (`id_planoTreino`),
  CONSTRAINT `id_planoTreino` FOREIGN KEY (`id_planoTreino`) REFERENCES `planotreino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.informacaotreino: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.migration: 7 rows
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1666091664),
	('m130524_201442_init', 1666091670),
	('m190124_110200_add_verification_token_column_to_user_table', 1666091670),
	('m140506_102106_rbac_init', 1666093306),
	('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1666093306),
	('m180523_151638_rbac_updates_indexes_without_prefix', 1666093306),
	('m200409_110543_rbac_update_mssql_trigger', 1666093306);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- A despejar estrutura para tabela projeto_ginasio.planotreino
CREATE TABLE IF NOT EXISTS `planotreino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `repeticoes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.planotreino: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.planotreinopersonalizado
CREATE TABLE IF NOT EXISTS `planotreinopersonalizado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_userdata` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `repeticoes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_userdata_idx` (`id_userdata`),
  CONSTRAINT `id_planoTreinoPersonalizado_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.planotreinopersonalizado: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.produto: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.qrcodes
CREATE TABLE IF NOT EXISTS `qrcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `redirecionamento` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.qrcodes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.subscricoes
CREATE TABLE IF NOT EXISTS `subscricoes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `preco` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.subscricoes: ~2 rows (aproximadamente)
INSERT INTO `subscricoes` (`id`, `nome`, `descricao`, `preco`) VALUES
	(1, 'Sem Subscrição', 'O cliente ainda não adquiriu subscrição', 0),
	(2, 'Mensal', 'Subscrição mensal da modalidade', 6.99);

-- A despejar estrutura para tabela projeto_ginasio.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.user: ~2 rows (aproximadamente)
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
	(2, 'filipe', '_oVLJx1e57o4v2zRJyi5kA1ZBRa54wYL', '$2y$13$iTCH9FVakT5Zf4NS4dI/VufwJHW9wBuNSr5aStoUswTeEDPGJL9.C', NULL, '2211921@my.ipleiria.pt', 10, 1666628655, 1667236194, 'Ot17Dcr9OnIBsj-DV8btojnpq0QxqxgS_1666628655'),
	(5, 'teste', 'tQhXqmV2RDHG3BwkPjoLJobswpQfO1OT', '$2y$13$lCt1uzVIVArPtxzIMElFXuP3lol.wSmWXcANhKAJHnJBtzkCCpMv.', NULL, 'teste@gmail.com', 10, 1668438133, 1668438133, 'TYUdWxYlXKpoUYdn-27D7Urd8m7enedL_1668438133'),
	(6, 'cliente', 'SMBCP-4KvxJ9qLcGvldc2lFCeWruGOIc', '$2y$13$zTb4ZzcEXgb2l4zrc6XHm.2PDnSgdZ1g4OfCARzFhGAY7DaBUr0US', NULL, 'cliente@gmail.com', 10, 1668442873, 1668442873, 'LmhVv5OtYKVBYyZi3NKXOHDooHftKTJg_1668442873');

-- A despejar estrutura para tabela projeto_ginasio.userdata
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `subscricao` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_userData_user` (`user_id`),
  KEY `FK_userData_subscricao` (`subscricao`),
  CONSTRAINT `FK_userData_subscricao` FOREIGN KEY (`subscricao`) REFERENCES `subscricoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_userData_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- A despejar dados para tabela projeto_ginasio.userdata: ~2 rows (aproximadamente)
INSERT INTO `userdata` (`id`, `user_id`, `firstName`, `lastName`, `telemovel`, `morada`, `subscricao`) VALUES
	(1, 2, 'Filipe', 'Marques', 913194666, 'Leiria, rua xpto', 1),
	(4, 5, 'Teste', 'Teste', 913194123, 'xpto', 1),
	(5, 6, 'cliente', 'cliente', 123123123, 'xpto', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
