-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.6.5-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
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
CREATE DATABASE IF NOT EXISTS `projeto_ginasio` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `projeto_ginasio`;

-- A despejar estrutura para tabela projeto_ginasio.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_assignment: ~3 rows (aproximadamente)
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
	('admin', '2', 1671552826),
	('cliente', '12', 1671552826),
	('staff', '8', 1671552826);

-- A despejar estrutura para tabela projeto_ginasio.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_item: ~39 rows (aproximadamente)
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
	('admin', 1, NULL, NULL, NULL, 1671552826, 1671552826),
	('alterarEspacoVerde', 2, 'Alterar Espaço Verde', NULL, NULL, 1671552826, 1671552826),
	('alterarInfoTreino', 2, 'Alterar Informação de Treino', NULL, NULL, 1671552826, 1671552826),
	('alterarPlanoTreino', 2, 'Alterar Plano de Treino', NULL, NULL, 1671552826, 1671552826),
	('alterarProduto', 2, 'Alterar Produto', NULL, NULL, 1671552826, 1671552826),
	('alterarQRCode', 2, 'Alterar QRCode', NULL, NULL, 1671552826, 1671552826),
	('alterarSubscricao', 2, 'Alterar Subscricao', NULL, NULL, 1671552826, 1671552826),
	('alterarUser', 2, 'Atualizar User', NULL, NULL, 1671552826, 1671552826),
	('apagarEspacoVerde', 2, 'Apagar Espaço Verde', NULL, NULL, 1671552826, 1671552826),
	('apagarInfoTreino', 2, 'Apagar Informação de Treino', NULL, NULL, 1671552826, 1671552826),
	('apagarPlanoTreino', 2, 'Apagar Plano de Treino', NULL, NULL, 1671552826, 1671552826),
	('apagarProduto', 2, 'Apagar Produto', NULL, NULL, 1671552826, 1671552826),
	('apagarQRCode', 2, 'Apagar QRCode', NULL, NULL, 1671552826, 1671552826),
	('apagarSubscricao', 2, 'Apagar Subscricao', NULL, NULL, 1671552826, 1671552826),
	('apagarUser', 2, 'Apagar User', NULL, NULL, 1671552826, 1671552826),
	('cliente', 1, NULL, NULL, NULL, 1671552826, 1671552826),
	('comprarSubscricao', 2, 'Comprar Subscricao', NULL, NULL, 1671552826, 1671552826),
	('criarEspacoVerde', 2, 'Criar Espaço Verde', NULL, NULL, 1671552826, 1671552826),
	('criarInfoTreino', 2, 'Criar Informação de Treino', NULL, NULL, 1671552826, 1671552826),
	('criarPlanoTreino', 2, 'Criar Plano de Treino', NULL, NULL, 1671552826, 1671552826),
	('criarProduto', 2, 'Criar Produto', NULL, NULL, 1671552826, 1671552826),
	('criarQRCode', 2, 'Criar QRCode', NULL, NULL, 1671552826, 1671552826),
	('criarSubscricao', 2, 'Criar Subscricao', NULL, NULL, 1671552826, 1671552826),
	('criarUser', 2, 'Criar User', NULL, NULL, 1671552826, 1671552826),
	('gerirEspacoVerde', 2, 'Gerir Espaço Verde', NULL, NULL, 1671552826, 1671552826),
	('gerirInfoTreino', 2, 'Gerir Informação de Treino', NULL, NULL, 1671552826, 1671552826),
	('gerirPlanoTreino', 2, 'Gerir Plano de Treino', NULL, NULL, 1671552826, 1671552826),
	('gerirProduto', 2, 'Gerir Produto', NULL, NULL, 1671552826, 1671552826),
	('gerirQRCode', 2, 'Gerir QRCode', NULL, NULL, 1671552826, 1671552826),
	('gerirSubscricao', 2, 'Gerir Subscricao', NULL, NULL, 1671552826, 1671552826),
	('gerirUser', 2, 'Gerir User', NULL, NULL, 1671552826, 1671552826),
	('staff', 1, NULL, NULL, NULL, 1671552826, 1671552826),
	('verEspacoVerde', 2, 'Ver Espaço Verde', NULL, NULL, 1671552826, 1671552826),
	('verInfoTreino', 2, 'Ver Informação de Treino', NULL, NULL, 1671552826, 1671552826),
	('verPlanoTreino', 2, 'Ver Plano de Treino', NULL, NULL, 1671552826, 1671552826),
	('verProduto', 2, 'Ver Produto', NULL, NULL, 1671552826, 1671552826),
	('verQRCode', 2, 'Ver QRCode', NULL, NULL, 1671552826, 1671552826),
	('verSubscricao', 2, 'Ver Subscricao', NULL, NULL, 1671552826, 1671552826),
	('verUser', 2, 'Ver User', NULL, NULL, 1671552826, 1671552826);

-- A despejar estrutura para tabela projeto_ginasio.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.auth_item_child: ~0 rows (aproximadamente)
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
	('admin', 'alterarEspacoVerde'),
	('admin', 'alterarInfoTreino'),
	('admin', 'alterarQRCode'),
	('admin', 'apagarEspacoVerde'),
	('admin', 'apagarInfoTreino'),
	('admin', 'apagarQRCode'),
	('admin', 'apagarSubscricao'),
	('admin', 'apagarUser'),
	('admin', 'criarEspacoVerde'),
	('admin', 'criarInfoTreino'),
	('admin', 'criarQRCode'),
	('admin', 'criarSubscricao'),
	('admin', 'criarUser'),
	('admin', 'gerirEspacoVerde'),
	('admin', 'gerirInfoTreino'),
	('admin', 'gerirQRCode'),
	('admin', 'staff'),
	('admin', 'verEspacoVerde'),
	('admin', 'verInfoTreino'),
	('admin', 'verQRCode'),
	('cliente', 'comprarSubscricao'),
	('staff', 'alterarPlanoTreino'),
	('staff', 'alterarProduto'),
	('staff', 'alterarSubscricao'),
	('staff', 'alterarUser'),
	('staff', 'apagarPlanoTreino'),
	('staff', 'apagarProduto'),
	('staff', 'criarPlanoTreino'),
	('staff', 'criarProduto'),
	('staff', 'gerirPlanoTreino'),
	('staff', 'gerirProduto'),
	('staff', 'gerirSubscricao'),
	('staff', 'gerirUser'),
	('staff', 'verPlanoTreino'),
	('staff', 'verProduto'),
	('staff', 'verSubscricao'),
	('staff', 'verUser');

-- A despejar estrutura para tabela projeto_ginasio.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.carrinho: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.espacosverdes
CREATE TABLE IF NOT EXISTS `espacosverdes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(255) DEFAULT NULL,
  `disponivel` tinyint(4) DEFAULT 0,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `altitude` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  CONSTRAINT `id_estatisticas_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.estatisticas: ~1 rows (aproximadamente)
INSERT INTO `estatisticas` (`id`, `id_userdata`, `imc`, `idade`, `peso`, `altura`, `tamanhoBiceps`, `tamanhoTriceps`, `tamanhoPeito`, `tamanhoAbdominal`) VALUES
	(1, 12, 0, 0, 0, 0, 0, 0, 0, 0);

-- A despejar estrutura para tabela projeto_ginasio.fatura
CREATE TABLE IF NOT EXISTS `fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_userdata` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fatura_userdata_idx` (`id_userdata`),
  CONSTRAINT `id_fatura_userdata` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.informacaotreino: ~1 rows (aproximadamente)
INSERT INTO `informacaotreino` (`id`, `id_planoTreino`, `titulo`, `descricao`) VALUES
	(3, 1, 'teste', 'teste');

-- A despejar estrutura para tabela projeto_ginasio.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.planotreino: ~1 rows (aproximadamente)
INSERT INTO `planotreino` (`id`, `tipo`, `descricao`, `duracao`, `repeticoes`) VALUES
	(1, 'Nenhum', 'Nenhum', 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.planotreinopersonalizado: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.produto: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.qrcodes
CREATE TABLE IF NOT EXISTS `qrcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `redirecionamento` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`redirecionamento`)),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.qrcodes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela projeto_ginasio.subscricoes
CREATE TABLE IF NOT EXISTS `subscricoes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `preco` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.subscricoes: ~2 rows (aproximadamente)
INSERT INTO `subscricoes` (`id`, `nome`, `descricao`, `preco`) VALUES
	(1, 'Sem Subscrição', 'O cliente ainda não adquiriu subscrição', 0),
	(2, 'Mensal', 'Subscrição mensal da modalidade', 6.99);

-- A despejar estrutura para tabela projeto_ginasio.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela projeto_ginasio.user: ~3 rows (aproximadamente)
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
	(2, 'admin', '_oVLJx1e57o4v2zRJyi5kA1ZBRa54wYL', '$2y$13$iTCH9FVakT5Zf4NS4dI/VufwJHW9wBuNSr5aStoUswTeEDPGJL9.C', NULL, 'admin@gmail.com', 10, 1666628655, 1667236194, 'Ot17Dcr9OnIBsj-DV8btojnpq0QxqxgS_1666628655'),
	(8, 'staff', 'Nh0Z4q5naZiqS8BxUUGw-uK3kfEAqLGf', '$2y$13$kQkXk0FBicyXgYpOT33sGeWDkvTd5/EaDXyhNFE0q0finAFHLTdb.', NULL, 'staff@gmail.com', 10, 1668514264, 1668514264, '4m2wR3JDZXbqoaFSuqlortmWrCrh27uG_1668514264'),
	(12, 'cliente', 'Fx7iiZjouRHX4zzl8_6f1jl_vzV8MUSr', '$2y$13$OYWmtF/DUurhr9Vnyex4ROUbsr8TEBFb8cCMoQegAbki1lScS9Pzu', NULL, 'cliente@gmail.com', 10, 1671549962, 1671549962, 'g6MMjKGmQ1k8NCTILCWJSWOxD1m9gwDs_1671549962');

-- A despejar estrutura para tabela projeto_ginasio.userdata
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `id_subscricao` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_userdata_id_user` (`id_user`),
  KEY `FK_userData_user` (`id_user`),
  KEY `FK_userData_subscricao` (`id_subscricao`),
  CONSTRAINT `FK_userData_subscricao` FOREIGN KEY (`id_subscricao`) REFERENCES `subscricoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_userData_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- A despejar dados para tabela projeto_ginasio.userdata: ~3 rows (aproximadamente)
INSERT INTO `userdata` (`id`, `id_user`, `firstName`, `lastName`, `telemovel`, `morada`, `id_subscricao`) VALUES
	(1, 2, 'admin', 'admin', 913194666, 'Leiria, rua xpto', 1),
	(7, 8, 'staff', 'staff', 912213321, 'xpto', 1),
	(11, 12, 'cliente', 'cliente', 912123321, 'Leiria, rua xpto', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
