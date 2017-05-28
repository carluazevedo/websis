CREATE TABLE `gestaocargas` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`data_atualizacao` DATETIME NULL,
	`status` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`transportadora` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`isca` TINYINT(1) NULL,
	`monitoramento` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`escolta_1` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`escolta_2` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`data_checkin` DATETIME NULL,
	`data_checkout` DATETIME NULL,
	`isca_inserida` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `gestaocargas_dados_k9` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`data_criacao` DATETIME NOT NULL,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`veiculo` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`reboque` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`inicio_previsto` DATETIME NULL,
	`inicio_real` DATETIME NULL,
	`fim_real` DATETIME NULL,
	`status` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `gestaocargas_dados_ksgr` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`data_criacao` DATETIME NOT NULL,
	`dt` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`veiculo` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`reboque` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`inicio_previsto` DATETIME NULL,
	`inicio_real` DATETIME NULL,
	`fim_real` DATETIME NULL,
	`status` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;