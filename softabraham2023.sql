CREATE TABLE `estudiantes` (
  `id_Estudiante` integer PRIMARY KEY AUTO_INCREMENT,
  `usuario_id` int(5),
  `fecha_registro_estuediante` date,
  `direccion_estudiante` varchar(20),
  `celular_estudiante` varchar(10),
  `fecha_nacimiento` date,
  `genero_estudiante` varchar(20),
  `curso_id` integer,
  `documento_acudiente` varchar(10),
  `nombre_acudiente` varchar(50),
  `telefono_acudiente` varchar(50),
  `correo_acudiente` varchar(50)
);

CREATE TABLE `cursos` (
  `id_curso` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre_curso` varchar(50),
  `tipo_curso` varchar(50)
);

CREATE TABLE `asignaturas` (
  `id_asignatura` integer PRIMARY KEY AUTO_INCREMENT,
  `area_asignatura` varchar(50),
  `descripcion_asignatura` text
);

CREATE TABLE `cursosAsignatura` (
  `id_curso_asignatura` integer PRIMARY KEY AUTO_INCREMENT,
  `curso_id` integer,
  `asignaruta_id` integer,
  `profesor_id` integer
);

CREATE TABLE `logro` (
  `id_logro` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre_logro` varchar(50)
);

CREATE TABLE `asignaturaLogro` (
  `id_asignatura_logro` integer PRIMARY KEY AUTO_INCREMENT,
  `curso_asignatura_id` integer,
  `logro_id` integer,
  `porcenteje` float
);

CREATE TABLE `notas` (
  `id_nota` integer PRIMARY KEY AUTO_INCREMENT,
  `estudiante_id` integer,
  `asignatura_logro_id` integer,
  `nota` float
);

CREATE TABLE `profesores` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `usuario_id` int(5),
  `fecha_nacimiento` date,
  `numero_telefono` varchar(20),
  `direccion_residencial` varchar(200),
  `fecha_inicio_empleo` date,
  `doc_contactosemergencia` int(11),
  `nombre_emergencia` varchar(100),
  `telefono_emergencia` varchar(100),
  `titulo_academico` varchar(100),
  `especializacion` varchar(100)
);

CREATE TABLE `usuarios` (
  `id_usuario` int(5) PRIMARY KEY AUTO_INCREMENT,
  `documento` varchar(15),
  `nombre` varchar(255),
  `correo` varchar(255),
  `contrasenia` varchar(255),
  `rol` varchar(200),
  `estado` tinyint(1)
);

ALTER TABLE `estudiantes` ADD FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`);

ALTER TABLE `profesores` ADD FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

ALTER TABLE `estudiantes` ADD FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

ALTER TABLE `cursosAsignatura` ADD FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`);

ALTER TABLE `cursosAsignatura` ADD FOREIGN KEY (`asignaruta_id`) REFERENCES `asignaturas` (`id_asignatura`);

ALTER TABLE `cursosAsignatura` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `asignaturaLogro` ADD FOREIGN KEY (`logro_id`) REFERENCES `logro` (`id_logro`);

ALTER TABLE `asignaturaLogro` ADD FOREIGN KEY (`curso_asignatura_id`) REFERENCES `cursosAsignatura` (`id_curso_asignatura`);

ALTER TABLE `notas` ADD FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id_Estudiante`);

ALTER TABLE `notas` ADD FOREIGN KEY (`asignatura_logro_id`) REFERENCES `asignaturaLogro` (`id_asignatura_logro`);
