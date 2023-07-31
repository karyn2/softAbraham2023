
CREATE TABLE `asignaturalogro` (
  `id_asignatura_logro` int(11) NOT NULL,
  `curso_asignatura_id` int(11) DEFAULT NULL,
  `logro_id` int(11) DEFAULT NULL,
  `porcenteje` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `area_asignatura` varchar(50) DEFAULT NULL,
  `descripcion_asignatura` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `asignaturas` (`id_asignatura`, `area_asignatura`, `descripcion_asignatura`) VALUES
(1, 'Matemáticas', 'Esta asignatura abarca conceptos de aritmética, álgebra, geometría y cálculo.'),
(2, 'Ciencias Sociales', 'Se estudian temas relacionados con la sociedad, historia, política y economía.'),
(3, 'Biología', 'En esta asignatura se exploran los seres vivos y su relación con el entorno.'),
(4, 'Física', 'Se estudian las leyes y principios que gobiernan el comportamiento de la materia y la energía.'),
(5, 'Química', 'Esta asignatura abarca los elementos, compuestos y reacciones químicas.'),
(6, 'Lenguaje y Literatura', 'Se enfoca en el estudio del lenguaje, la gramática y la literatura.'),
(7, 'Historia', 'Se analizan los acontecimientos pasados y su impacto en la sociedad actual.'),
(8, 'Geografía', 'Esta asignatura explora la tierra, sus características y fenómenos naturales.'),
(9, 'Arte', 'Se estudian diversas expresiones artísticas, como pintura, música, teatro y danza.'),
(10, 'Educación Física', 'En esta asignatura se realizan actividades físicas para promover la salud y el bienestar.'),
(11, 'Inglés', 'Se aprende el idioma inglés, incluyendo vocabulario, gramática y conversación.'),
(12, 'Informática', 'En esta asignatura se abordan temas de computación, software y tecnología.'),
(13, 'Filosofía', 'Se exploran preguntas fundamentales sobre la existencia, el conocimiento y la moral.'),
(14, 'Psicología', 'Esta asignatura estudia el comportamiento y los procesos mentales de las personas.'),
(15, 'Economía', 'Se analizan conceptos económicos, como oferta, demanda y mercado.'),
(16, 'Derecho', 'En esta asignatura se estudian las leyes y normativas legales.'),
(17, 'Medio Ambiente', 'Se explora la relación entre los seres humanos y el medio ambiente.'),
(18, 'Ética', 'Esta asignatura se enfoca en temas de valores, moral y comportamiento ético.'),
(19, 'Sociología', 'Se estudian los fenómenos sociales y la interacción humana.'),
(20, 'Antropología', 'En esta asignatura se exploran las culturas y sociedades humanas.'),
(21, 'Música', 'Se aprende sobre teoría musical, instrumentos y apreciación musical.'),
(22, 'Teatro', 'Esta asignatura se enfoca en la actuación y la producción teatral.'),
(23, 'Biografías', 'Se estudian las vidas y obras de personajes históricos y destacados.'),
(24, 'Economía Internacional', 'En esta asignatura se analiza el comercio y las relaciones económicas entre países.'),
(25, 'Gastronomía', 'Se estudian los ingredientes, técnicas y tradiciones culinarias.'),
(26, 'Ciencias Naturales', 'Esta asignatura abarca la biología, física y química.'),
(27, 'Emprendimiento', 'Se enfoca en el desarrollo de habilidades para emprender proyectos y negocios.'),
(28, 'Medicina', 'En esta asignatura se exploran temas relacionados con el cuerpo humano y la salud.'),
(29, 'Arquitectura', 'Se estudian los principios y técnicas de diseño y construcción de edificaciones.');


CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(50) DEFAULT NULL,
  `tipo_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `tipo_curso`) VALUES
(1, 'Prejardín A', 'Preescolar'),
(2, 'Prejardín B', 'Preescolar'),
(3, 'Jardín A', 'Preescolar'),
(4, 'Jardín B', 'Preescolar'),
(5, 'Transición A', 'Preescolar'),
(6, 'Transición B', 'Preescolar'),
(7, 'Primero A', 'Primaria'),
(8, 'Primero B', 'Primaria'),
(9, 'Segundo A', 'Primaria'),
(10, 'Segundo B', 'Primaria'),
(11, 'Tercero A', 'Primaria'),
(12, 'Tercero B', 'Primaria'),
(13, 'Cuarto A', 'Primaria'),
(14, 'Cuarto B', 'Primaria'),
(15, 'Quinto A', 'Primaria'),
(16, 'Quinto B', 'Primaria'),
(17, 'Sexto A', 'Básica'),
(18, 'Sexto B', 'Básica'),
(19, 'Septimo A', 'Básica'),
(20, 'Septimo B', 'Básica'),
(21, 'Octavo A', 'Básica'),
(22, 'Octavo B', 'Básica'),
(23, 'Noveno A', 'Básica'),
(24, 'Noveno B', 'Básica'),
(25, 'Decimo A', 'Secundaria'),
(26, 'Decimo B', 'Secundaria'),
(27, 'Undecimo A', 'Secundaria'),
(28, 'Undecimo B', 'Secundaria');


CREATE TABLE `cursosasignatura` (
  `id_curso_asignatura` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `estadoca` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `cursosasignatura` (`id_curso_asignatura`, `curso_id`, `asignatura_id`, `profesor_id`, `estadoca`) VALUES
(1, 6, 1, 6, 0),
(2, 17, 2, 6, 0),
(4, 13, 6, 4, 0),
(6, 1, 1, 4, 0),
(9, 13, 6, 6, 0),
(10, 1, 9, 5, 1),
(16, 1, 7, 5, 1),
(18, 1, 1, 5, 1),
(19, 2, 2, 4, 1),
(20, 1, 1, 3, 1),
(21, 1, 1, 6, 1),
(22, 17, 1, 4, 1),
(23, 2, 5, 5, 1),
(24, 1, 9, 6, 1),
(25, 13, 1, 4, 1),
(26, 11, 14, 5, 1),
(27, 18, 10, 3, 0),
(28, 16, 10, 4, 1),
(29, 16, 15, 5, 1),
(30, 1, 1, 2, 0),
(31, 1, 1, 1, 1),
(32, 5, 6, 4, 1);

CREATE TABLE `estudiantes` (
  `id_Estudiante` int(11) NOT NULL,
  `usuario_id` int(5) DEFAULT NULL,
  `fecha_registro_estuediante` date DEFAULT NULL,
  `direccion_estudiante` varchar(20) DEFAULT NULL,
  `celular_estudiante` varchar(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero_estudiante` varchar(20) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `documento_acudiente` varchar(10) DEFAULT NULL,
  `nombre_acudiente` varchar(50) DEFAULT NULL,
  `telefono_acudiente` varchar(50) DEFAULT NULL,
  `correo_acudiente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `logro` (
  `id_logro` int(11) NOT NULL,
  `nombre_logro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `estudiante_id` int(11) DEFAULT NULL,
  `asignatura_logro_id` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `usuario_id` int(5) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `numero_telefono` varchar(20) DEFAULT NULL,
  `direccion_residencial` varchar(200) DEFAULT NULL,
  `fecha_inicio_empleo` date DEFAULT NULL,
  `doc_contactosemergencia` int(11) DEFAULT NULL,
  `nombre_emergencia` varchar(100) DEFAULT NULL,
  `telefono_emergencia` varchar(100) DEFAULT NULL,
  `titulo_academico` varchar(100) DEFAULT NULL,
  `especializacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `profesores` (`id`, `usuario_id`, `fecha_nacimiento`, `numero_telefono`, `direccion_residencial`, `fecha_inicio_empleo`, `doc_contactosemergencia`, `nombre_emergencia`, `telefono_emergencia`, `titulo_academico`, `especializacion`) VALUES
(1, 2, '2023-07-21', '333', '1', '2023-07-18', 1, '1', '1', '1', '1'),
(2, 3, '2023-07-12', '2', '2', '2023-07-29', 2, '2', '2', '2', '2'),
(3, 4, '2023-07-26', '3', '3', '2023-06-29', 3, '3', '3', '3', '3'),
(4, 5, '2023-07-07', '4', '4', '2004-04-04', 4, '4', '4', '4', '4'),
(5, 9, '2023-07-13', '1', '1', '2023-07-10', 1, '1', '1', '1', '1'),
(6, 7, '2023-07-10', '1', '1', '2023-07-14', 8, '8', '8', '8', '8'),
(13, 11, '2023-07-05', '1', '1', '2023-07-26', 1, '1', '1', '1', '1');

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `rol` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre`, `correo`, `contrasenia`, `rol`, `estado`) VALUES
(1, '1085937260', 'Angela Ceron', 'karynaceron@gmail.com', '$2y$10$pympLr.TfWbCGYH4vo8PUubjn2LOQhSsxIg73g3sfMJZPgK/5q7Xm', 'administrador', 1),
(2, '1', '1', '1@1.com', '$2y$10$LsVf9E2yhHoHTBHzvXX06eUasZQqUXFa0WKtY19Uxt1PrxH7Jxv.2', 'docente', 1),
(3, '2', 'nombre2', '2@c.com', '$2y$10$lwFsSryY0iwOO6U03nEPc.T4LVvBGwQpjSG/vaGBNoNLX4U6YzI56', 'docente', 1),
(4, '3', '3', '3@c.com', '$2y$10$2I8uKuiBJpTjkNkJj04wL.9FlZPy2MeJ/RMVoP6MDAsxz4EZjkQeq', 'docente', 1),
(5, '4', '4', '4@c.com', '$2y$10$5nVWBONjprljBw5SKlzjiuOEv6nNMGvnMdDL4RDTB1T6BgIVb8NHq', 'docente', 1),
(6, '9', '9', '9@corre.com', '$2y$10$fGIDHHHhIEl4MkdBBbBQiu6mJmZsTFLITIHgXrpMzWi1OYJdfc9Iy', 'docente', 1),
(7, '8', '8', '8@correo.com', '$2y$10$LbzChj38uDxnmvjkK.CGROhKId449w9/kj26eNhpkOTGdYxBPKo8a', 'docente', 1),
(8, '7', '7', '7@correo.com', '$2y$10$gpSc7YYJtku7Ts94tlLBpuc3pqkN2JFqAgBLEaYUDH60aKd0leByO', 'docente', 1),
(9, '666', 'ultimo', 'ul@correo.com', '$2y$10$ki/CmgyV5PYZ/r97XXwBkOJhnIl4yL67el/05AP7Y456hF2S75gm.', 'docente', 1),
(10, '13', '12', '1@correo.com', '$2y$10$UkEMAXsNas9UPNCSSYStauZJm76OYORjKnt96rTsPMIHHv.r/3D/a', 'docente', 1),
(11, '0000', 'cero', 'cero@correo.com', '$2y$10$B5v9TGUAbFMrR6jbHBjTs.p.9/2.pJ9uu4WiJTI1b25IRImYssB72', 'docente', 1);

ALTER TABLE `asignaturalogro`
  ADD PRIMARY KEY (`id_asignatura_logro`),
  ADD KEY `logro_id` (`logro_id`),
  ADD KEY `curso_asignatura_id` (`curso_asignatura_id`);

ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

ALTER TABLE `cursosasignatura`
  ADD PRIMARY KEY (`id_curso_asignatura`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `asignatura_id` (`asignatura_id`),
  ADD KEY `profesor_id` (`profesor_id`);

ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_Estudiante`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `usuario_id` (`usuario_id`);

ALTER TABLE `logro`
  ADD PRIMARY KEY (`id_logro`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `estudiante_id` (`estudiante_id`),
  ADD KEY `asignatura_logro_id` (`asignatura_logro_id`);

ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

ALTER TABLE `asignaturalogro`
  MODIFY `id_asignatura_logro` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

ALTER TABLE `cursosasignatura`
  MODIFY `id_curso_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

ALTER TABLE `estudiantes`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `logro`
  MODIFY `id_logro` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `asignaturalogro`
  ADD CONSTRAINT `asignaturalogro_ibfk_1` FOREIGN KEY (`logro_id`) REFERENCES `logro` (`id_logro`),
  ADD CONSTRAINT `asignaturalogro_ibfk_2` FOREIGN KEY (`curso_asignatura_id`) REFERENCES `cursosasignatura` (`id_curso_asignatura`);

ALTER TABLE `cursosasignatura`
  ADD CONSTRAINT `cursosasignatura_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `cursosasignatura_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignaturas` (`id_asignatura`),
  ADD CONSTRAINT `cursosasignatura_ibfk_3` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id_Estudiante`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`asignatura_logro_id`) REFERENCES `asignaturalogro` (`id_asignatura_logro`);

ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
