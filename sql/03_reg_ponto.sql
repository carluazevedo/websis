#######################################
# CRIAR TABELA PARA REGISTRO DE PONTO #
#######################################

CREATE TABLE IF NOT EXISTS `reg_ponto_carlu` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL DEFAULT '0000-00-00',
  `folga` tinyint(1) DEFAULT NULL,
  `entrada_1` time DEFAULT '00:00:00',
  `saida_1` time DEFAULT '00:00:00',
  `entrada_2` time DEFAULT '00:00:00',
  `saida_2` time DEFAULT '00:00:00',
  `observacoes` text,
  PRIMARY KEY (`data`),
  UNIQUE KEY `id` (`id`)
) DEFAULT CHARSET=utf8;
