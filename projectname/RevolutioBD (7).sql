-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2018 a las 18:39:33
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `RevolutioBD`
--
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `RevolutioBD` ;

-- -----------------------------------------------------
-- Schema RevolutioBD
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `RevolutioBD` DEFAULT CHARACTER SET utf8 ;
USE `RevolutioBD` ;
-- -----------------------------------------------------
--
-- Estructura de tabla para la tabla `Analista`
--

CREATE TABLE `Analista` (
  `ID_analista` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `condicion` int(1) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Analista`
--

INSERT INTO `Analista` (`ID_analista`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `condicion`) VALUES
(4, 'Analista1', NULL, 'del analista', '2452', 0),
(5, 'jocelin', 'becerril', 'jsao', '567890\'', 1),
(6, 'pancho', 'lopex', 'fghjk', '2345', 1),
(7, 'jazmin', 'camarillo', 'gh', '489009', 1),
(9, 'juan', 'romero', 'ghko', '1111', 1),
(10, 'qwer', NULL, '1231', '24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CoordinadorRev`
--

CREATE TABLE `CoordinadorRev` (
  `ID_coordinador` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CoordinadorRev`
--

INSERT INTO `CoordinadorRev` (`ID_coordinador`, `Nombre`, `Papp`, `Sapp`, `condicion`) VALUES
(1, 'Andty', 'Vita', 'Pardo', 1),
(2, 'Carlos', 'Gonzalez', 'Gonzalez', 1),
(3, 'ejemplo1', 'ejemplo', 'ejemplo', 1),
(5, 'jazmin', 'Martinez', 'Martinez', 0),
(6, 'Empresa Ejemplo', 's', 's', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DatosPersonales`
--

CREATE TABLE `DatosPersonales` (
  `ID_datP` int(11) NOT NULL,
  `Edad` varchar(15) DEFAULT NULL,
  `FechNac` date DEFAULT NULL,
  `LugarNac` varchar(45) DEFAULT NULL,
  `EdoCivil` varchar(45) DEFAULT NULL,
  `GradoAcad` varchar(45) DEFAULT NULL,
  `Tel.casa` varchar(45) DEFAULT NULL,
  `TipoVivienda` varchar(45) DEFAULT NULL,
  `ID_estudio` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleado`
--

CREATE TABLE `Empleado` (
  `ID_empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `puesto` varchar(80) NOT NULL,
  `ID_empresa` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empleado`
--

INSERT INTO `Empleado` (`ID_empleado`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `puesto`, `ID_empresa`, `condicion`) VALUES
(1, 'Carlos', 'Martinez', 'mondragon', '02930', 'Reclutador', 1, 1),
(2, 'Ilse', 'Ramon', 'Garcia', '5553112', 'Analista', 1, 1),
(3, 'Juan', 'Ramirez', 'Gomez', '0848291', 'Gerente', 2, 1),
(4, 'Maria', 'Arana', 'Trujillo', '747291', 'Gerente', 10, 1),
(5, 'Javier', 'Torres', 'Mera', '47514', 'Analista', 13, 1),
(6, 'Pedro', 'Macias', 'Ramon', '740123', 'ninguno', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE `Empresa` (
  `ID_empresa` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL,
  `Giro` varchar(45) DEFAULT NULL,
  `Direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`ID_empresa`, `Nombre`, `Telefono`, `condicion`, `Giro`, `Direccion`) VALUES
(1, 'Empresa1', '55378664', 0, 'Ropa', 'plaza jardin #100 colonia roma, cerca deperif'),
(2, 'Empresa numero dos', 'no hay', 1, NULL, NULL),
(5, 'Came', '9381', 0, 'Comercio', 'hnsoa'),
(10, 'palacio', '231', 1, 'comercio', 'asnga23'),
(13, 'Nautica', '582013', 1, 'Ropa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstudioSocioE`
--

CREATE TABLE `EstudioSocioE` (
  `ID_estudio` int(11) NOT NULL,
  `PuestoSol` varchar(45) DEFAULT NULL,
  `Region` varchar(45) DEFAULT NULL,
  `FechEval` date DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `FechTerm` varchar(45) DEFAULT NULL,
  `ID_analista` int(11) NOT NULL,
  `ID_encargado` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Peticion`
--

CREATE TABLE `Peticion` (
  `ID_peticion` int(11) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `FechaIni` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `ID_Empleado` int(11) NOT NULL,
  `ID_coordinador` int(11) NOT NULL,
  `ID_analista` int(11) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Peticion`
--

INSERT INTO `Peticion` (`ID_peticion`, `Nombre`, `FechaIni`, `FechaFin`, `Status`, `Descripcion`, `ID_Empleado`, `ID_coordinador`, `ID_analista`, `condicion`) VALUES
(4, 'solicitud1', '2018-10-08', '2018-10-22', 'Terminado', NULL, 1, 5, 0, 0),
(5, 'ESE', '2018-10-22', NULL, 'Proceso', NULL, 5, 1, 0, 1),
(6, 'Vacante', '2018-10-14', '2018-10-15', 'Terminado', 'Caracteristicas de la vacante', 5, 6, 0, 1),
(7, 'ESE', '2018-10-22', '2018-10-15', 'Proceso', 'sa', 3, 3, 8, 1),
(8, 'Vacante', '2018-10-29', NULL, 'proceso', '', 2, 5, NULL, 1),
(9, 'ESE', '2018-10-27', NULL, 'proceso', 'A domicilio', 2, 5, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PortadaSocio`
--

CREATE TABLE `PortadaSocio` (
  `ID_portadaSocio` int(11) NOT NULL,
  `ResumenTelefono` varchar(45) DEFAULT NULL,
  `ResumenPsicosocial` varchar(45) DEFAULT NULL,
  `FactorRiesgo` varchar(15) DEFAULT NULL,
  `Deshonestidad` varchar(15) DEFAULT NULL,
  `Adicciones` varchar(15) DEFAULT NULL,
  `PerversionSexual` varchar(15) DEFAULT NULL,
  `InestabilidadEmocional` varchar(15) DEFAULT NULL,
  `Observaciones` varchar(80) DEFAULT NULL,
  `Resultado` varchar(45) DEFAULT NULL,
  `ID_estudio` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Psicosocial`
--

CREATE TABLE `Psicosocial` (
  `ID_Psicosocial` int(11) NOT NULL,
  `FacebookObs` varchar(45) DEFAULT NULL,
  `LinkedObs` varchar(45) DEFAULT NULL,
  `TwitterObs` varchar(45) DEFAULT NULL,
  `Resultado` varchar(45) DEFAULT NULL,
  `ID_estudio` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reclutador`
--

CREATE TABLE `Reclutador` (
  `ID_reclutador` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Papp` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Sapp` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` int(1) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Reclutador`
--

INSERT INTO `Reclutador` (`ID_reclutador`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `condicion`) VALUES
(4, 'Jocelin', '', '', '3456', 0),
(5, 'nikole', 'torres', '', '789', 1),
(6, 'ejemplo', 'reclutado', 'nuevo', '098654', 1),
(7, 'JUANITO', 'PREZ', 'SOLANO', '042', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RefLab`
--

CREATE TABLE `RefLab` (
  `ID_RefLab` int(11) NOT NULL,
  `NomEmpresa` varchar(45) DEFAULT NULL,
  `Giro` varchar(45) DEFAULT NULL,
  `Domicilio` varchar(70) DEFAULT NULL,
  `DelMun` varchar(45) DEFAULT NULL,
  `UltimoPuesto` varchar(45) DEFAULT NULL,
  `JefeInmediato` varchar(45) DEFAULT NULL,
  `FechIngreso` varchar(45) DEFAULT NULL,
  `SueldoIni` varchar(45) DEFAULT NULL,
  `MotSalida` varchar(45) DEFAULT NULL,
  `ResponsableRH` varchar(45) DEFAULT NULL,
  `Comentarios` varchar(150) DEFAULT NULL,
  `Colonia` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Puesto` varchar(45) DEFAULT NULL,
  `FechSalida` varchar(45) DEFAULT NULL,
  `SueldoFinal` varchar(45) DEFAULT NULL,
  `ID_estudio` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RefPers`
--

CREATE TABLE `RefPers` (
  `ID_RefPers` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Parentesco` varchar(45) DEFAULT NULL,
  `TmpConocer` varchar(45) DEFAULT NULL,
  `Opinion` varchar(45) DEFAULT NULL,
  `Recomienda` varchar(15) DEFAULT NULL,
  `Observacion` varchar(80) DEFAULT NULL,
  `ID_estudio` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `rol` varchar(22) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Analista`
--
ALTER TABLE `Analista`
  ADD PRIMARY KEY (`ID_analista`),
  ADD KEY `fk_Analista_users1_idx` (`users_id`);

--
-- Indices de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  ADD PRIMARY KEY (`ID_coordinador`),
  ADD KEY `fk_CoordinadorRev_users1_idx` (`users_id`);

--
-- Indices de la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  ADD PRIMARY KEY (`ID_datP`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `ID_empresa` (`ID_empresa`),
  ADD KEY `fk_Empleado_users1_idx` (`users_id`);

--
-- Indices de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`ID_empresa`);

--
-- Indices de la tabla `EstudioSocioE`
--
ALTER TABLE `EstudioSocioE`
  ADD PRIMARY KEY (`ID_estudio`),
  ADD KEY `ID_analista` (`ID_analista`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `Peticion`
--
ALTER TABLE `Peticion`
  ADD PRIMARY KEY (`ID_peticion`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_coordinador` (`ID_coordinador`),
  ADD KEY `ID_analista` (`ID_analista`);

--
-- Indices de la tabla `PortadaSocio`
--
ALTER TABLE `PortadaSocio`
  ADD PRIMARY KEY (`ID_portadaSocio`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Psicosocial`
--
ALTER TABLE `Psicosocial`
  ADD PRIMARY KEY (`ID_Psicosocial`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Reclutador`
--
ALTER TABLE `Reclutador`
  ADD PRIMARY KEY (`ID_reclutador`),
  ADD KEY `fk_Reclutador_users1_idx` (`users_id`);

--
-- Indices de la tabla `RefLab`
--
ALTER TABLE `RefLab`
  ADD PRIMARY KEY (`ID_RefLab`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `RefPers`
--
ALTER TABLE `RefPers`
  ADD PRIMARY KEY (`ID_RefPers`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Analista`
--
ALTER TABLE `Analista`
  MODIFY `ID_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  MODIFY `ID_coordinador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  MODIFY `ID_datP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `EstudioSocioE`
--
ALTER TABLE `EstudioSocioE`
  MODIFY `ID_estudio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Peticion`
--
ALTER TABLE `Peticion`
  MODIFY `ID_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `Reclutador`
--
ALTER TABLE `Reclutador`
  MODIFY `ID_reclutador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `RefLab`
--
ALTER TABLE `RefLab`
  MODIFY `ID_RefLab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RefPers`
--
ALTER TABLE `RefPers`
  MODIFY `ID_RefPers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  ADD CONSTRAINT `DatosPersonales_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Empleado`
--
ALTER TABLE `Empleado`
  ADD CONSTRAINT `Empleado_ibfk_1` FOREIGN KEY (`ID_empresa`) REFERENCES `Empresa` (`ID_empresa`);

--
-- Filtros para la tabla `EstudioSocioE`
--
ALTER TABLE `EstudioSocioE`
  ADD CONSTRAINT `EstudioSocioE_ibfk_1` FOREIGN KEY (`ID_analista`) REFERENCES `Analista` (`ID_analista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Peticion`
--
ALTER TABLE `Peticion`
  ADD CONSTRAINT `Peticion_ibfk_1` FOREIGN KEY (`ID_Empleado`) REFERENCES `Empleado` (`ID_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Peticion_ibfk_2` FOREIGN KEY (`ID_coordinador`) REFERENCES `CoordinadorRev` (`ID_coordinador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PortadaSocio`
--
ALTER TABLE `PortadaSocio`
  ADD CONSTRAINT `PortadaSocio_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Psicosocial`
--
ALTER TABLE `Psicosocial`
  ADD CONSTRAINT `Psicosocial_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
