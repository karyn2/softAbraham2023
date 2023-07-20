DROP TABLE IF EXISTS `experienciadocente`;
DROP TABLE IF EXISTS `titulos`;
DROP TABLE IF EXISTS `profesores`;
DROP TABLE IF EXISTS `usuarios`;
DROP TABLE IF EXISTS `contactosemergencia`;
DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `contactosemergencia` (
  `id_contactosemergencia` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `relacion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_contactosemergencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `usuarios` (
  `documento` VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `correo` VARCHAR(255) NOT NULL,
  `contrasenia` VARCHAR(255) NOT NULL,
  `rol` VARCHAR(200) NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  PRIMARY KEY (`documento`),
  UNIQUE KEY (`documento`),
  UNIQUE KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `profesores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` VARCHAR(15) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `numero_telefono` VARCHAR(20) NOT NULL,
  `direccion_residencial` VARCHAR(200) NOT NULL,
  `fecha_inicio_empleo` DATE NOT NULL,
  `contacto_emergencia_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `contacto_emergencia_id` (`contacto_emergencia_id`),
  CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`documento`),
  CONSTRAINT `profesores_ibfk_2` FOREIGN KEY (`contacto_emergencia_id`) REFERENCES `contactosemergencia` (`id_contactosemergencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `titulos` (
  `id_titulo` INT(11) NOT NULL AUTO_INCREMENT,
  `profesor_id` INT(11) DEFAULT NULL,
  `titulo_academico` VARCHAR(100) NOT NULL,
  `especializacion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_titulo`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `titulos_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `experienciadocente` (
  `id_experienciadocente` INT(11) NOT NULL AUTO_INCREMENT,
  `profesor_id` INT(11) DEFAULT NULL,
  `experiencia_docente` INT(11) NOT NULL,
  `materias` VARCHAR(200) NOT NULL,
  `nivel_educativo` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_experienciadocente`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `experienciadocente_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `migrations` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `version` VARCHAR(255) NOT NULL,
  `class` VARCHAR(255) NOT NULL,
  `group` VARCHAR(255) NOT NULL,
  `namespace` VARCHAR(255) NOT NULL,
  `time` INT(11) NOT NULL,
  `batch` INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-07-14-015323', 'App\\Database\\Migrations\\Usuarios', 'default', 'App', 1689632394, 1);

INSERT INTO `usuarios` (`documento`, `nombre`, `correo`, `contrasenia`, `rol`, `estado`) VALUES
('1085937260', 'Angela Ceron', 'Karynaceron@gmail.com', '$2y$10$6dTjGhWcKsOuv1YIJIeQOuEnRFG9zPjixXmhDrhwwxw.S93A14qFC', 'administrador', 1),
('1085937261', 'Carina Benavides', 'acceron08@gmail.com', '$2y$10$hgnVHWr38z4Wi4VmTl.7sOln84CjBseMpkf6BRbMhkUsFqluTetmC', 'administrador', 1),
('1085937263', 'Juanito Perez', 'juanito@gmail.com', '$2y$10$I8Hxp2Z/MZxLUV8IIRjcBOrNB6ZKifXbBiGqVf40s7qtBac8c3HfW', 'docente', 0),
('1085937269', 'María Gonzales', 'maria@gmail.com', '$2y$10$bzXO/QxdCKzdpIN/y7Rl3elGoBvZ3nTXA3Zfpa3tSs1REHnI2nzP6', 'acudiente', 1),
('1095937256', 'Sara Corrales', 'sarita@gmail.com', '$2y$10$oCI7R3PgiJtS8wKiOi1MeudG5zrDY/yqq0Dtp6uRoIopMmzE3.ZkS', 'estudiante', 1),
('123456789', 'Ramon Jimenez', 'ramon@gmail.com', '$2y$10$7jfTVLFK5RtA2Zvhzy7Mo.NYhXVzsH9EduAtKtnlJuv32oT8SrxG6', 'docente', 1);

ALTER TABLE `migrations`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `profesores`
  MODIFY `usuario_id` VARCHAR(15) NOT NULL;
