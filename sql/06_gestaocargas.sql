CREATE TABLE `gestaocargas` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`status` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`data_atualizacao` DATETIME NULL,
	`transportadora` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`isca` TINYINT(1) NULL,
	`monitoramento` TINYINT(1) NULL,
	`escolta_1` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`escolta_2` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`data_checkin` DATETIME NULL,
	`data_checkout` DATETIME NULL,
	`isca_inserida` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `gestaocargas_dados_k9` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`data_criacao` DATETIME NOT NULL,
	`veiculo` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`reboque` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`inicio_previsto` DATETIME NULL,
	`inicio_real` DATETIME NULL,
	`fim_real` DATETIME NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `gestaocargas_dados_ksgr` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`data_criacao` DATETIME NOT NULL,
	`veiculo` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`reboque` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`inicio_previsto` DATETIME NULL,
	`inicio_real` DATETIME NULL,
	`fim_real` DATETIME NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;