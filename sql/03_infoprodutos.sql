###############################################
# CRIAR TABELAS PARA REGISTRO DE INFOPRODUTOS #
###############################################

#
# Table structure for table 'infoprod'
#

CREATE TABLE IF NOT EXISTS `infoprod` (
	`id` int(10) UNSIGNED NOT NULL,
	`produto` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
	`produtor` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
	`segmento` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
	`hotleads` tinyint(1) NOT NULL,
	`afiliado` tinyint(1) NOT NULL,
	`observacoes` varchar(256) NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Table structure for table 'infoprod_links'
#

CREATE TABLE IF NOT EXISTS `infoprod_links` (
	`id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_produto` int(10) UNSIGNED NOT NULL,
	`descricao` varchar(128) COLLATE utf8_unicode_ci NULL,
	`link` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
	`destino` varchar(128) COLLATE utf8_unicode_ci NULL,
	`tipo` varchar(64) COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Table structure for table 'infoprod_camp'
#

CREATE TABLE IF NOT EXISTS `infoprod_camp` (
	`id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_produto` int(10) UNSIGNED NOT NULL,
	`data` date NOT NULL DEFAULT '0000-00-00',
	`plataforma` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`metodo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`midia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`id_midia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Table structure for table 'infoprod_midias'
#
