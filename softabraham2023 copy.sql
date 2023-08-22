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

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(50) DEFAULT NULL,
  `tipo_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `cursosasignatura` (
  `id_curso_asignatura` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `estadoca` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `rol` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
