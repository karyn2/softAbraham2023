-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2023 a las 21:31:30
-- Versión del servidor: 10.4.28-MariaDB-log
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softabraham2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturalogro`
--

CREATE TABLE `asignaturalogro` (
  `id_asignatura_logro` int(11) NOT NULL,
  `curso_asignatura_id` int(11) DEFAULT NULL,
  `logro_id` int(11) DEFAULT NULL,
  `porcenteje` float DEFAULT NULL,
  `periodo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `asignaturalogro`
--

INSERT INTO `asignaturalogro` (`id_asignatura_logro`, `curso_asignatura_id`, `logro_id`, `porcenteje`, `periodo`) VALUES
(4, 36, 1, 0.45, '1'),
(5, 36, 2, 0.35, '1'),
(6, 36, 3, 0.2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `area_asignatura` varchar(50) DEFAULT NULL,
  `descripcion_asignatura` text DEFAULT NULL,
  `estado_asignatura` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `area_asignatura`, `descripcion_asignatura`, `estado_asignatura`) VALUES
(1, 'Matemáticas', 'Esta asignatura abarca conceptos de aritmética, álgebra, geometría y cálculo.', 1),
(2, 'Ciencias Sociales', 'Se estudian temas relacionados con la sociedad, historia, política y economía.', 1),
(3, 'Biología', 'En esta asignatura se exploran los seres vivos y su relación con el entorno.', 1),
(4, 'Física', 'Se estudian las leyes y principios que gobiernan el comportamiento de la materia y la energía.', 1),
(5, 'Química', 'Esta asignatura abarca los elementos, compuestos y reacciones químicas.', 1),
(6, 'Lenguaje y Literatura', 'Se enfoca en el estudio del lenguaje, la gramática y la literatura.', 1),
(7, 'Historia', 'Se analizan los acontecimientos pasados y su impacto en la sociedad actual.', 1),
(8, 'Geografía', 'Esta asignatura explora la tierra, sus características y fenómenos naturales.', 1),
(9, 'Arte', 'Se estudian diversas expresiones artísticas, como pintura, música, teatro y danza.', 1),
(10, 'Educación Física', 'En esta asignatura se realizan actividades físicas para promover la salud y el bienestar.', 1),
(11, 'Inglés', 'Se aprende el idioma inglés, incluyendo vocabulario, gramática y conversación.', 1),
(12, 'Informática', 'En esta asignatura se abordan temas de computación, software y tecnología.', 1),
(13, 'Filosofía', 'Se exploran preguntas fundamentales sobre la existencia, el conocimiento y la moral.', 1),
(14, 'Psicología', 'Esta asignatura estudia el comportamiento y los procesos mentales de las personas.', 1),
(15, 'Economía', 'Se analizan conceptos económicos, como oferta, demanda y mercado.', 1),
(16, 'Derecho', 'En esta asignatura se estudian las leyes y normativas legales.', 1),
(17, 'Medio Ambiente', 'Se explora la relación entre los seres humanos y el medio ambiente.', 1),
(18, 'Ética', 'Esta asignatura se enfoca en temas de valores, moral y comportamiento ético.', 1),
(19, 'Sociología', 'Se estudian los fenómenos sociales y la interacción humana.', 1),
(20, 'Antropología', 'En esta asignatura se exploran las culturas y sociedades humanas.', 1),
(21, 'Música', 'Se aprende sobre teoría musical, instrumentos y apreciación musical.', 1),
(22, 'Teatro', 'Esta asignatura se enfoca en la actuación y la producción teatral.', 1),
(23, 'Biografías', 'Se estudian las vidas y obras de personajes históricos y destacados.', 1),
(24, 'Economía Internacional', 'En esta asignatura se analiza el comercio y las relaciones económicas entre países.', 1),
(25, 'Gastronomía', 'Se estudian los ingredientes, técnicas y tradiciones culinarias.', 1),
(26, 'Ciencias Naturales', 'Esta asignatura abarca la biología, física y química.', 1),
(27, 'Emprendimiento', 'Se enfoca en el desarrollo de habilidades para emprender proyectos y negocios.', 1),
(28, 'Medicina', 'En esta asignatura se exploran temas relacionados con el cuerpo humano y la salud.', 1),
(29, 'Arquitectura', 'Se estudian los principios y técnicas de diseño y construcción de edificaciones.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(50) DEFAULT NULL,
  `tipo_curso` varchar(50) DEFAULT NULL,
  `estado_curso` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `tipo_curso`, `estado_curso`) VALUES
(1, 'Prejardín A', 'Preescolar', 1),
(2, 'Prejardín B', 'Preescolar', 1),
(3, 'Jardín A', 'Preescolar', 1),
(4, 'Jardín B', 'Preescolar', 1),
(5, 'Transición A', 'Preescolar', 1),
(6, 'Transición B', 'Preescolar', 1),
(7, 'Primero A', 'Primaria', 1),
(8, 'Primero B', 'Primaria', 1),
(9, 'Segundo A', 'Primaria', 1),
(10, 'Segundo B', 'Primaria', 1),
(11, 'Tercero A', 'Primaria', 1),
(12, 'Tercero B', 'Primaria', 1),
(13, 'Cuarto A', 'Primaria', 1),
(14, 'Cuarto B', 'Primaria', 1),
(15, 'Quinto A', 'Primaria', 1),
(16, 'Quinto B', 'Primaria', 1),
(17, 'Sexto A', 'Básica', 1),
(18, 'Sexto B', 'Básica', 1),
(19, 'Septimo A', 'Básica', 1),
(20, 'Septimo B', 'Básica', 1),
(21, 'Octavo A', 'Básica', 1),
(22, 'Octavo B', 'Básica', 1),
(23, 'Noveno A', 'Básica', 1),
(24, 'Noveno B', 'Básica', 1),
(25, 'Decimo A', 'Secundaria', 1),
(26, 'Decimo B', 'Secundaria', 1),
(27, 'Undecimo A', 'Secundaria', 1),
(28, 'Undecimo B', 'Secundaria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursosasignatura`
--

CREATE TABLE `cursosasignatura` (
  `id_curso_asignatura` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `estadoca` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `cursosasignatura`
--

INSERT INTO `cursosasignatura` (`id_curso_asignatura`, `curso_id`, `asignatura_id`, `profesor_id`, `estadoca`) VALUES
(36, 17, 2, 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

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

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_Estudiante`, `usuario_id`, `fecha_registro_estuediante`, `direccion_estudiante`, `celular_estudiante`, `fecha_nacimiento`, `genero_estudiante`, `curso_id`, `documento_acudiente`, `nombre_acudiente`, `telefono_acudiente`, `correo_acudiente`) VALUES
(2, 28, '2023-08-02', 'Calle 123, Ciudad A', '3001111111', '2010-05-15', 'Femenino', 2, '7654872193', 'María Silva', '3102222222', 'maria.silva@example.com'),
(3, 29, '2023-08-02', 'Av. Principal, Ciuda', '3012222222', '2011-08-20', NULL, 17, '5678321045', 'Andrés Vargas', '3203333333', 'andres.vargas@example.com'),
(4, 30, '2023-08-02', 'Cra. 45, Ciudad C', '3023333333', '2012-10-10', NULL, 17, '2893756123', 'Valentina Ríos', '3304444444', 'valentina.rios@example.com'),
(5, 31, '2023-08-02', 'Calle 7, Ciudad D', '3034444444', '2013-01-05', NULL, 17, '9012873456', 'Fernando Pérez', '3405555555', 'fernando.perez@example.com'),
(6, 32, '2023-08-02', 'Av. Central, Ciudad ', '3045555555', '2014-04-22', NULL, 17, '4387120659', 'Isabella Gómez', '3506666666', 'isabella.gomez@example.com'),
(7, 33, '2023-08-02', 'Cra. 20, Ciudad F', '3056666666', '2015-07-12', 'Masculino', 7, '5467321890', 'Ricardo Mendoza', '3607777777', 'ricardo.mendoza@example.com'),
(8, 34, '2023-08-02', 'Calle 10, Ciudad G', '3067777777', '2016-11-30', 'Femenino', 8, '3284097546', 'Diana Ramírez', '3708888888', 'diana.ramirez@example.com'),
(9, 35, '2023-08-02', 'Av. Sur, Ciudad H', '3078888888', '2017-02-25', NULL, 17, '1928374655', 'Felipe Sánchez', '3809999999', 'felipe.sanchez@example.com'),
(10, 36, '2023-08-02', 'Cra. 50, Ciudad I', '3089999999', '2018-06-18', NULL, 17, '8095743210', 'Gabriela Torres', '3901010101', 'gabriela.torres@example.com'),
(11, 37, '2023-08-02', 'Calle 15, Ciudad J', '3091010101', '2019-09-09', 'Masculino', 11, '1085937260', 'Angela Ceron', '3002020202', 'angela.ceron@example.com'),
(12, 39, '2023-08-08', 'Barrio San Luis', '3216783456', '2000-01-13', 'M', 15, '123789', 'Maria Ruano', '3214567890', 'maria@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE `logro` (
  `id_logro` int(11) NOT NULL,
  `nombre_logro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `logro`
--

INSERT INTO `logro` (`id_logro`, `nombre_logro`) VALUES
(1, 'Hacer'),
(2, 'Saber'),
(3, 'Ser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `usuario_doc` varchar(15) NOT NULL,
  `curso_asignatura_id` int(11) NOT NULL,
  `notaSr` float NOT NULL DEFAULT 0,
  `notaSb` float NOT NULL DEFAULT 0,
  `notaHc` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `usuario_doc`, `curso_asignatura_id`, `notaSr`, `notaSb`, `notaHc`) VALUES
(3, '1928374655', 36, 0.4, 1.05, 1.8),
(4, '1928374655', 36, 0.6, 1.4, 2.25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

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

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `usuario_id`, `fecha_nacimiento`, `numero_telefono`, `direccion_residencial`, `fecha_inicio_empleo`, `doc_contactosemergencia`, `nombre_emergencia`, `telefono_emergencia`, `titulo_academico`, `especializacion`) VALUES
(17, 19, '1988-06-25', '3012222222', 'Av. Principal, Ciudad B', '2011-02-20', 567892345, 'Carlos Ramírez', '3203333333', 'Licenciada en Ciencias Sociales', 'Historia'),
(18, 20, '1982-09-12', '3023333333', 'Cra. 45, Ciudad C', '2012-03-10', 678903456, 'Ana Gómez', '3304444444', 'Licenciado en Matemáticas', 'Matemáticas'),
(19, 21, '1990-12-05', '3034444444', 'Calle 7, Ciudad D', '2013-04-25', 789014567, 'Pedro Torres', '3405555555', 'Licenciada en Lengua Castellana', 'Lenguaje'),
(20, 22, '1983-05-22', '3045555555', 'Av. Central, Ciudad E', '2014-05-28', 890125678, 'Laura Mendoza', '3506666666', 'Licenciado en Ciencias Naturales', 'Biología'),
(21, 23, '1987-08-17', '3056666666', 'Cra. 20, Ciudad F', '2015-06-15', 901236789, 'Diego Vargas', '3607777777', 'Licenciada en Ciencias Sociales', 'Geografía'),
(22, 24, '1981-11-30', '3067777777', 'Calle 10, Ciudad G', '2016-07-05', 12347890, 'Sofía Ramírez', '3708888888', 'Licenciado en Educación Física', 'Educación Física'),
(23, 25, '1986-02-25', '3078888888', 'Av. Sur, Ciudad H', '2017-08-18', 123458901, 'Gabriel López', '3809999999', 'Licenciada en Ciencias Sociales', 'Ciencias Sociales'),
(24, 26, '1989-07-18', '3089999999', 'Cra. 50, Ciudad I', '2018-09-10', 234569012, 'Diana Torres', '3901010101', 'Licenciado en Ciencias Naturales', 'Física'),
(25, 27, '1984-10-09', '3091010101', 'Calle 15, Ciudad J', '2019-10-22', 345670123, 'Felipe Sánchez', '3002020202', 'Licenciado en Lengua Castellana', 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `rol` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre`, `correo`, `contrasenia`, `rol`, `estado`) VALUES
(19, '7658945673', 'María González', 'mariagonzalez@hotmail.com', '$2y$10$X25z1MFl6DFQhztQzGsvnujESL7r0er8SH/RY2jXtGR6L56FzjqvK', 'docente', 1),
(20, '4360978452', 'Pedro Ramírez', 'pedroramirez@yahoo.com', '$2y$10$3R70UpY1x1DgHrR09Gq0KuhYTHLLhiM0Q4dTwZ5VYw0jl4IJnG0Zi', 'docente', 1),
(21, '9256184038', 'Laura Sánchez', 'laurasanchez@outlook.com', '$2y$10$hGX8pZ7y5I7Qi9YWRSt8bOMxEpMEV9Plv5q/mNhsUO41JQfw5/ux2', 'docente', 1),
(22, '5679283475', 'Carlos Rodríguez', 'carlosrodriguez@example.com', '$2y$10$QmUn2NF93lfBPOf/YByhUuRIuFut4MnGY2.Zv0xQQhO5KowutMNZO', 'docente', 1),
(23, '2435968741', 'Ana Martínez', 'anamartinez@gmail.com', '$2y$10$TMc4xQ3Ku1XfckZ4JMI5r..xv5phfDabj0YUmYb1alQdD4L2smCnW', 'docente', 1),
(24, '7642890345', 'Miguel López', 'miguellopez@hotmail.com', '$2y$10$Cq7V2Q3rgwutNYmSxUulTe0a4M4dQJ9FAC9DSwVZBc92d4QwIBVRy', 'docente', 1),
(25, '5482390576', 'Lucía Torres', 'luciatorres@yahoo.com', '$2y$10$GGpIhZ90ys1Q9PPCLtfIuO1q9uLcYbILJzSElXrqZdkLrt6xPIf1m', 'docente', 1),
(26, '1987456230', 'Diego Gómez', 'diegogomez@outlook.com', '$2y$10$UJYi3cWMqr6iZ2pqRFlM9e.ogUQepAh5lId3jlm/MQ4buVd.cZ1tS', 'docente', 1),
(27, '9034756128', 'Sofía Castro', 'sofiacastro@example.com', '$2y$10$4DgFC2p.f.2ThV7W6a4DgefxlnWvfGOiZDAQRZ7ZKu0MF2gVXWlba', 'docente', 0),
(28, '7526483719', 'Luis Hernández', 'luishernandez@gmail.com', '$2y$10$peOfjHYj2jMQMzFia9W8S..py14Z5HtZGsJpx53w2XeE8ZcFRbhtW', 'estudiante', 1),
(29, '2965738291', 'Camila Silva', 'camilasilva@hotmail.com', '$2y$10$r5Fcv46UPWq7VvdJN5s0IOsPVKvd3ddldXf7iXVtH.sjM6mXzx5a.', 'estudiante', 1),
(30, '6543129087', 'Andrés Vargas', 'andresvargas@yahoo.com', '$2y$10$VcqjSLlkxJ1d80kLr9dH5OqGSU/IMaOVlxmnnGOC4GZbd/lr5n4eu', 'estudiante', 1),
(31, '2893756123', 'Valentina Ríos', 'valentinar@gmail.com', '$2y$10$J6vviYHfeO./eHL.VQ7uK.MBfHcaL4.Q5ol0J3tM3EmebL7xebeEe', 'estudiante', 1),
(32, '9012873456', 'Fernando Pérez', 'fernandoperez@outlook.com', '$2y$10$N35B6Cj6/VpY8Txqqm.HKe7UfzHNYmcYsQZP7wXrvXtKk6rxWj5t6', 'estudiante', 1),
(33, '4387120659', 'Isabella Gómez', 'isabellagomez@example.com', '$2y$10$pBlxX5IDgQ8v.h5TPm/SWODs2f5CWIks4w9fxfK7Sq8ZZRwA/6AGC', 'estudiante', 1),
(34, '5467321890', 'Ricardo Mendoza', 'ricardomendoza@gmail.com', '$2y$10$40yQh/f98LHR0Nquk6ot7eYIqPOAfFkN1Iy4OhytJ/ixGJbOfiKtu', 'estudiante', 1),
(35, '3284097546', 'Diana Ramírez', 'dianaramirez@hotmail.com', '$2y$10$1asT6wI9PQI0zVX3x03w7OfwJME.4lx0j4SCZfwa1ZQDc7MGak99u', 'estudiante', 1),
(36, '1928374655', 'Felipe Sánchez', 'felipesanchez@yahoo.com', '$2y$10$WTQrHKMRa9gECrMCi3WV1e7IQbH67sMoTSs.sSHikID2T3ylQIgVe', 'estudiante', 1),
(37, '8095743210', 'Gabriela Torres', 'gabrielatorres@outlook.com', '$2y$10$tK4D95aHWhBTwJ.s/CikIO0E7QCbP.3iNPhMS.9Go6VHSMh4ThDta', 'estudiante', 1),
(38, '1085937260', 'Angela Ceron Benavides', 'karynaceron@gmail.com', '$2y$10$SL9gVrPOgSHSmz6YOWysYeVMCAfjdacFOOAQvCrorWvKsLVl7TYKq', 'administrador', 1),
(39, '123456789', 'Francisco Gonzales Ruano', 'francisco@gmail.com', '$2y$10$CG0.nnZiX85jFHCmx78TEOhbfEKu4V2qgxSb3yDrHybYqX7aGxufO', 'estudiante', 1),
(40, '1001', 'Sofia Rosales Castro Jiménez', 'sofia@gmail.com', '$2y$10$mMhM86F/6sPeHZ/GecYs8Oozj98zHr9/J3.q1DhI6VeJInlWEVJu.', 'estudiante', 1),
(41, '1088597928', 'Jose Luis Chalparizan CUAICAL', 'luis@gmail.com', '$2y$10$YQlhs1DBQX2S./IjxcPZwuia3m8osLunaT6iTBeLoxJTrmZ7zKYBG', 'administrador', 1),
(42, '100003', 'Nixon Benavides REPLICADO', 'niko@gmail.com', '$2y$10$3/N9mZHr9d14IgbqtaFjSOPXroG2wC71pAMzbqcmEgBFJiNCm1rwq', 'docente', 0),
(43, '102010', 'Pedro Dominguez', 'usuario@gmail.com', '$2y$10$8QQaQoO3sPy2uHnhCPJXUOFTroQBgJMYjCh2hsEfyG48/8eRAhQbe', 'administrador', 1),
(44, '1004673383', 'USUARIO REPLICADO 1', 'lubier@gmail.com', '$2y$10$gffLdBSzH/nPIyhXiOnRc.RiTIvtqGPm7Nw09/X7W4migVK6CDy3a', 'estudiante', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturalogro`
--
ALTER TABLE `asignaturalogro`
  ADD PRIMARY KEY (`id_asignatura_logro`),
  ADD KEY `logro_id` (`logro_id`),
  ADD KEY `curso_asignatura_id` (`curso_asignatura_id`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `cursosasignatura`
--
ALTER TABLE `cursosasignatura`
  ADD PRIMARY KEY (`id_curso_asignatura`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `asignatura_id` (`asignatura_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_Estudiante`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `logro`
--
ALTER TABLE `logro`
  ADD PRIMARY KEY (`id_logro`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturalogro`
--
ALTER TABLE `asignaturalogro`
  MODIFY `id_asignatura_logro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cursosasignatura`
--
ALTER TABLE `cursosasignatura`
  MODIFY `id_curso_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
  MODIFY `id_logro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaturalogro`
--
ALTER TABLE `asignaturalogro`
  ADD CONSTRAINT `asignaturalogro_ibfk_1` FOREIGN KEY (`logro_id`) REFERENCES `logro` (`id_logro`),
  ADD CONSTRAINT `asignaturalogro_ibfk_2` FOREIGN KEY (`curso_asignatura_id`) REFERENCES `cursosasignatura` (`id_curso_asignatura`);

--
-- Filtros para la tabla `cursosasignatura`
--
ALTER TABLE `cursosasignatura`
  ADD CONSTRAINT `cursosasignatura_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `cursosasignatura_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignaturas` (`id_asignatura`),
  ADD CONSTRAINT `cursosasignatura_ibfk_3` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
