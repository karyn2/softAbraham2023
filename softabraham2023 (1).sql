
DROP TABLE IF EXISTS `profesores`;
DROP TABLE IF EXISTS `usuarios`;
DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-07-14-015323', 'App\\Database\\Migrations\\Usuarios', 'default', 'App', 1689632394, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `usuario_id` int(5) UNSIGNED NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `numero_telefono` varchar(20) NOT NULL,
  `direccion_residencial` varchar(200) NOT NULL,
  `fecha_inicio_empleo` date NOT NULL,
  `doc_contactosemergencia` int(11) NOT NULL,
  `nombre_emergencia` varchar(100) NOT NULL,
  `telefono_emergencia` varchar(100) NOT NULL,
  `titulo_academico` varchar(100) NOT NULL,
  `especializacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `profesores` (`id`, `usuario_id`, `fecha_nacimiento`, `numero_telefono`, `direccion_residencial`, `fecha_inicio_empleo`, `doc_contactosemergencia`, `nombre`, `telefono_emergencia`, `titulo_academico`, `especializacion`) VALUES
(1, 6, '2023-07-01', '3205650752', 'Carrera 7 # 27-10 Puenes', '2013-07-10', 1806496305, 'Juan Andrés García Pérez', '3152449863', 'Contador', 'Niños');



CREATE TABLE `usuarios` (
  `id_usuario` int(5) UNSIGNED NOT NULL,
  `documento` varchar(15) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `rol` varchar(200) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre`, `correo`, `contrasenia`, `rol`, `estado`) VALUES
(1, '1085937260', 'Angela Ceron', 'Karynaceron@gmail.com', '$2y$10$6dTjGhWcKsOuv1YIJIeQOuEnRFG9zPjixXmhDrhwwxw.S93A14qFC', 'administrador', 1),
(2, '1085937261', 'Carina Benavides', 'acceron08@gmail.com', '$2y$10$hgnVHWr38z4Wi4VmTl.7sOln84CjBseMpkf6BRbMhkUsFqluTetmC', 'administrador', 1),
(3, '1085937263', 'Juanito Perez', 'juanito@gmail.com', '$2y$10$I8Hxp2Z/MZxLUV8IIRjcBOrNB6ZKifXbBiGqVf40s7qtBac8c3HfW', 'docente', 0),
(4, '1085937269', 'María Gonzales', 'maria@gmail.com', '$2y$10$bzXO/QxdCKzdpIN/y7Rl3elGoBvZ3nTXA3Zfpa3tSs1REHnI2nzP6', 'acudiente', 1),
(5, '1095937256', 'Sara Corrales', 'sarita@gmail.com', '$2y$10$oCI7R3PgiJtS8wKiOi1MeudG5zrDY/yqq0Dtp6uRoIopMmzE3.ZkS', 'estudiante', 1),
(6, '123456789', 'Ramon Jimenez', 'ramon@gmail.com', '$2y$10$7jfTVLFK5RtA2Zvhzy7Mo.NYhXVzsH9EduAtKtnlJuv32oT8SrxG6', 'docente', 1),
(7, '1300', ',mnm,n', ',.nm@correo.com', '$2y$10$aPpysqgSKfYc/LjrMos7G.mFadicxhhJJf8HGPcDpcCRoJo4p0Rwa', 'docente', 1);

ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id_UNIQUE` (`usuario_id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `documento_UNIQUE` (`documento`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;