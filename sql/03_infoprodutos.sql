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
	`observacoes` varchar(256) NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Table structure for table 'infoprod_links'
#

CREATE TABLE IF NOT EXISTS `infoprod_links` (
	`id` int(4) UNSIGNED NOT NULL,
	`id_produto` int(10) UNSIGNED NOT NULL,
	`descricao` varchar(128) COLLATE utf8_unicode_ci NULL,
	`link` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
	`destino` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
	`tipo` varchar(64) COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Table structure for table 'infoprod_camp'
#

#
# Table structure for table 'infoprod_midias'
#