#########################################
# CRIAR TABELA PARA RECEITAS CULINARIAS #
#########################################

CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `foi_testada` tinyint(1) DEFAULT NULL,
  `rendimento` int(4) UNSIGNED NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NULL,
  `ingred_principais` text COLLATE utf8_unicode_ci NULL,
  `ingred_opcionais` text COLLATE utf8_unicode_ci NULL,
  `preparo` text COLLATE utf8_unicode_ci NULL,
  `fonte` text COLLATE utf8_unicode_ci NULL,
  `categorias` varchar(255) COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;
