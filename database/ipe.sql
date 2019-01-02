-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.30-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para ipedigitalcase
CREATE DATABASE IF NOT EXISTS `ipedigitalcase` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ipedigitalcase`;

-- Copiando estrutura para tabela ipedigitalcase.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpfcnpj` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefones` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `cpfcnpj`, `cep`, `uf`, `cidade`, `bairro`, `endereco`, `numero`, `telefones`, `celular`, `created_at`, `updated_at`) VALUES
	(1, 'Juliana Cristina Gonçalves', '13498309784', '38749-800', 'MG', 'São João da Serra Negra (Patrocínio)', 'Centro', 'João Alves do Nascimento', '784', '34999520053', '34992448633', NULL, NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.detalhe_vendas
CREATE TABLE IF NOT EXISTS `detalhe_vendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_venda` int(10) unsigned NOT NULL,
  `id_produto` int(10) unsigned NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `desconto` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalhe_vendas_id_venda_foreign` (`id_venda`),
  KEY `detalhe_vendas_id_produto_foreign` (`id_produto`),
  CONSTRAINT `detalhe_vendas_id_produto_foreign` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `detalhe_vendas_id_venda_foreign` FOREIGN KEY (`id_venda`) REFERENCES `vendas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.detalhe_vendas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `detalhe_vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalhe_vendas` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(88, '2014_10_12_000000_create_users_table', 1),
	(89, '2014_10_12_100000_create_password_resets_table', 1),
	(90, '2018_12_20_203835_create_clientes_table', 1),
	(91, '2018_12_24_163134_create_unidade_vendas_table', 1),
	(92, '2018_12_24_163434_create_produtos_table', 1),
	(93, '2018_12_24_222833_create_vendas_table', 1),
	(94, '2018_12_25_191326_create_detalhe_vendas_table', 1),
	(95, '2018_12_27_175536_create_tipo_usuarios_table', 2),
	(96, '2018_12_27_182741_create_tipo_usuarios_table', 3),
	(97, '2018_12_27_183315_update_users', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('julianacristina780@gmail.com', '$2y$10$BlXJj60cIgVNNjcJ0GdhielnMxct/2ZKMP2hG8U.6pT9dLZ6gvnLy', '2018-12-27 20:52:21');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `referencia` bigint(20) NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precoVenda` double(8,2) NOT NULL,
  `estoque` tinyint(1) NOT NULL,
  `unidade_vendas` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produtos_referencia_unique` (`referencia`),
  KEY `produtos_unidade_vendas_foreign` (`unidade_vendas`),
  CONSTRAINT `produtos_unidade_vendas_foreign` FOREIGN KEY (`unidade_vendas`) REFERENCES `unidade_vendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.produtos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `referencia`, `descricao`, `marca`, `precoVenda`, `estoque`, `unidade_vendas`, `created_at`, `updated_at`) VALUES
	(1, 101, 'Sabonete', 'Dove', 12.00, 1, 19, NULL, NULL),
	(2, 102, 'macarrão', 'vilma', 11.11, 2, 18, NULL, NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.unidade_vendas
CREATE TABLE IF NOT EXISTS `unidade_vendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.unidade_vendas: ~63 rows (aproximadamente)
/*!40000 ALTER TABLE `unidade_vendas` DISABLE KEYS */;
INSERT INTO `unidade_vendas` (`id`, `unidade`, `descricao`, `created_at`, `updated_at`) VALUES
	(3, 'AMPOLA', 'AMPOLA', NULL, NULL),
	(4, 'BALDE', 'BALDE', NULL, NULL),
	(5, 'BANDEJ', 'BANDEJA', NULL, NULL),
	(6, 'BARRA', 'BARRA', NULL, NULL),
	(7, 'BISNAG', 'BISNAGA', NULL, NULL),
	(8, 'BLOCO', 'BLOCO', NULL, NULL),
	(9, 'BOBINA', 'BOBINA', NULL, NULL),
	(10, 'BOMB', 'BOMBONA', NULL, NULL),
	(11, 'CAPS', 'CAPSULA', NULL, NULL),
	(12, 'CART', 'CARTELA', NULL, NULL),
	(13, 'CENTO', 'CENTO', NULL, NULL),
	(14, 'CJ', 'CONJUNTO', NULL, NULL),
	(15, 'CM', 'CENTIMETRO', NULL, NULL),
	(16, 'CM2', 'CENTIMETRO QUADRADO', NULL, NULL),
	(17, 'CX', 'CAIXA', NULL, NULL),
	(18, 'CX2', 'CAIXA COM 2 UNIDADES', NULL, NULL),
	(19, 'CX3', 'CAIXA COM 3 UNIDADES', NULL, NULL),
	(20, 'CX5', 'CAIXA COM 5 UNIDADES', NULL, NULL),
	(21, 'CX10', 'CAIXA COM 10 UNIDADES', NULL, NULL),
	(22, 'CX15', 'CAIXA COM 15 UNIDADES', NULL, NULL),
	(23, 'CX20', 'CAIXA COM 20 UNIDADES', NULL, NULL),
	(24, 'CX25', 'CAIXA COM 25 UNIDADES', NULL, NULL),
	(25, 'CX50', 'CAIXA COM 50 UNIDADES', NULL, NULL),
	(26, 'CX100', 'CAIXA COM 100 UNIDADES', NULL, NULL),
	(27, 'DISP', 'DISPLAY', NULL, NULL),
	(28, 'DUZIA', 'DUZIA', NULL, NULL),
	(29, 'EMBAL', 'EMBALAGEM', NULL, NULL),
	(30, 'FARDO', 'FARDO', NULL, NULL),
	(31, 'FOLHA', 'FOLHA', NULL, NULL),
	(32, 'FRASCO', 'FRASCO', NULL, NULL),
	(33, 'GALAO', 'GALÃO', NULL, NULL),
	(34, 'GF', 'GARRAFA', NULL, NULL),
	(35, 'GRAMAS', 'GRAMAS', NULL, NULL),
	(36, 'JOGO', 'JOGO', NULL, NULL),
	(37, 'KG', 'QUILOGRAMA', NULL, NULL),
	(38, 'KIT', 'KIT', NULL, NULL),
	(39, 'LATA', 'LATA', NULL, NULL),
	(40, 'LITRO', 'LITRO', NULL, NULL),
	(41, 'M', 'METRO', NULL, NULL),
	(42, 'M2', 'METRO QUADRADO', NULL, NULL),
	(43, 'M3', 'METRO CÚBICO', NULL, NULL),
	(44, 'MILHEI', 'MILHEIRO', NULL, NULL),
	(45, 'ML', 'MILILITRO', NULL, NULL),
	(46, 'MWH', 'MEGAWATT HORA', NULL, NULL),
	(47, 'PACOTE', 'PACOTE', NULL, NULL),
	(48, 'PALETE', 'PALETE', NULL, NULL),
	(49, 'PARES', 'PARES', NULL, NULL),
	(50, 'PC', 'PEÇA', NULL, NULL),
	(51, 'POTE', 'POTE', NULL, NULL),
	(52, 'K', 'QUILATE', NULL, NULL),
	(53, 'RESMA', 'RESMA', NULL, NULL),
	(54, 'ROLO', 'ROLO', NULL, NULL),
	(55, 'SACO', 'SACO', NULL, NULL),
	(56, 'SACOLA', 'SACOLA', NULL, NULL),
	(57, 'TAMBOR', 'TAMBOR', NULL, NULL),
	(58, 'TANQUE', 'TANQUE', NULL, NULL),
	(59, 'TON', 'TONELADA', NULL, NULL),
	(60, 'TUBO', 'TUBO', NULL, NULL),
	(61, 'UNID', 'UNIDADE', NULL, NULL),
	(62, 'VASIL', 'VASILHAME', NULL, NULL),
	(63, 'VIDRO', 'VIDRO', NULL, NULL);
/*!40000 ALTER TABLE `unidade_vendas` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idTipoUsuario` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.users: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `idTipoUsuario`) VALUES
	(1, 'Juliana Cristina Gonçalves', 'julianacristina780@gmail.com', '$2y$10$FHgwQ2aZlUyC9fRa72P1i.YxP2zqulLCEQ/jm8jXyI8jwjhEoZc7i', 'zA7iuFj9Zi2WxdumVSwgHEsTinYQOgwghcvKgV1cz77Kaw3ejaEyCddfXqYS', '2018-12-25 19:29:43', '2018-12-25 19:29:43', 1),
	(2, 'admin', 'admin@admin.com', '$2y$10$FHgwQ2aZlUyC9fRa72P1i.YxP2zqulLCEQ/jm8jXyI8jwjhEoZc7i', 'jePBiAxR8X0dfUwYTSk06DOS9QxKfCtAZLzr6bh6wFgihLKqJdUfXlKy2ol2', '2018-12-27 17:37:02', '2018-12-27 17:37:04', 1),
	(3, 'user', 'user@user.com', '$2y$10$FHgwQ2aZlUyC9fRa72P1i.YxP2zqulLCEQ/jm8jXyI8jwjhEoZc7i', '8QmzKAnvMxE6KQ1QMdJMwq50ERVkj1FnzTquIbuDXlXiMic5xvMoTUXCdkmG', '2018-12-27 17:37:19', '2018-12-27 17:37:18', 2),
	(4, 'ana', 'ana@ana.com', '12345678', NULL, '2018-12-27 18:51:23', '2018-12-27 18:51:24', 1),
	(5, 'julia', 'julia@julia.com', '123456789', '0MVFE5RlhwVP9k3eXnHtgjL86Z1itJB0ogsXQhoaJ0XSWPTO0NZykdenPH6W', '2018-12-27 22:16:11', '2018-12-27 22:16:11', 1),
	(6, 'maria', 'maria@gmail.com', '$2y$10$EXFi57lKRh9TrIG7Vc1TzOVk7sCxu0etyOKrwC3UGTS7H0g2Zd8lC', 'OsB5ypD6fpQuO9SQAR5sMyqwX3TwMjvQARjDD5F9UpldIMv3oa6SHZyFeiap', '2018-12-27 22:19:09', '2018-12-27 22:19:09', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela ipedigitalcase.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `id_cliente` int(10) unsigned NOT NULL,
  `id_produto` int(10) unsigned NOT NULL,
  `valor_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendas_id_cliente_foreign` (`id_cliente`),
  KEY `vendas_id_produto_foreign` (`id_produto`),
  CONSTRAINT `vendas_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  CONSTRAINT `vendas_id_produto_foreign` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ipedigitalcase.vendas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
