DROP TABLE IF EXISTS `experienciadocente`;
DROP TABLE IF EXISTS `titulos`;
DROP TABLE IF EXISTS `profesores`;
DROP TABLE IF EXISTS `usuarios`;
DROP TABLE IF EXISTS `contactosemergencia`;
DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `contactosemergencia` (
  `id_contactosemergencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `relacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contactosemergencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `usuarios` (
  `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `documento` varchar(15) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `rol` varchar(200) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(5) UNSIGNED NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `numero_telefono` varchar(20) NOT NULL,
  `direccion_residencial` varchar(200) NOT NULL,
  `institucion_actual` varchar(100) NOT NULL,
  `fecha_inicio_empleo` date NOT NULL,
  `contacto_emergencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `contacto_emergencia_id` (`contacto_emergencia_id`),
  CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `profesores_ibfk_2` FOREIGN KEY (`contacto_emergencia_id`) REFERENCES `contactosemergencia` (`id_contactosemergencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `titulos` (
  `id_titulo` int(11) NOT NULL AUTO_INCREMENT,
  `profesor_id` int(11) DEFAULT NULL,
  `titulo_academico` varchar(100) NOT NULL,
  `especializacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_titulo`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `titulos_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `experienciadocente` (
  `id_experienciadocente` int(11) NOT NULL AUTO_INCREMENT,
  `profesor_id` int(11) DEFAULT NULL,
  `experiencia_docente` int(11) NOT NULL,
  `materias` varchar(200) NOT NULL,
  `nivel_educativo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_experienciadocente`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `experienciadocente_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-07-14-015323', 'App\\Database\\Migrations\\Usuarios', 'default', 'App', 1689632394, 1);

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre`, `correo`, `contrasenia`, `rol`, `estado`) VALUES
(1, '1085937260', 'Angela Ceron', 'Karynaceron@gmail.com', '$2y$10$6dTjGhWcKsOuv1YIJIeQOuEnRFG9zPjixXmhDrhwwxw.S93A14qFC', 'administrador', 1),
(2, '1085937261', 'Carina Benavides', 'acceron08@gmail.com', '$2y$10$hgnVHWr38z4Wi4VmTl.7sOln84CjBseMpkf6BRbMhkUsFqluTetmC', 'administrador', 1),
(3, '1085937263', 'Juanito Perez', 'juanito@gmail.com', '$2y$10$I8Hxp2Z/MZxLUV8IIRjcBOrNB6ZKifXbBiGqVf40s7qtBac8c3HfW', 'docente', 0),
(4, '1085937269', 'María Gonzales', 'maria@gmail.com', '$2y$10$bzXO/QxdCKzdpIN/y7Rl3elGoBvZ3nTXA3Zfpa3tSs1REHnI2nzP6', 'acudiente', 1),
(5, '1095937256', 'Sara Corrales', 'sarita@gmail.com', '$2y$10$oCI7R3PgiJtS8wKiOi1MeudG5zrDY/yqq0Dtp6uRoIopMmzE3.ZkS', 'estudiante', 1),
(6, '123456789', 'Ramon Jimenez', 'ramon@gmail.com', '$2y$10$7jfTVLFK5RtA2Zvhzy7Mo.NYhXVzsH9EduAtKtnlJuv32oT8SrxG6', 'docente', 1);

ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
