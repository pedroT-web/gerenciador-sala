CREATE TABLE IF NOT EXISTS `tb_reservas_sala` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`sala_id` int,
	`turma_id` int NOT NULL,
	`docente_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tb_sala` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`identificacao` varchar(20),
	`quant_suporte_alunos` int,
	`tipo_sala` varchar(255) NOT NULL,
	`status` boolean DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tb_docente` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`nome` varchar(100),
	`area` varchar(100) NOT NULL,
	`ra_docente` varchar(7),
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tb_turma` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`nome` varchar(100) NOT NULL,
	`sigla` varchar(8) NOT NULL,
	`periodo` varchar(20) NOT NULL,
	`quant_alunos` int DEFAULT '0',
	PRIMARY KEY (`id`)
);

ALTER TABLE `tb_reservas_sala` ADD CONSTRAINT `tb_reservas_sala_fk1` FOREIGN KEY (`sala_id`) REFERENCES `tb_sala`(`id`);

ALTER TABLE `tb_reservas_sala` ADD CONSTRAINT `tb_reservas_sala_fk2` FOREIGN KEY (`turma_id`) REFERENCES `tb_turma`(`id`);

ALTER TABLE `tb_reservas_sala` ADD CONSTRAINT `tb_reservas_sala_fk3` FOREIGN KEY (`docente_id`) REFERENCES `tb_docente`(`id`);


