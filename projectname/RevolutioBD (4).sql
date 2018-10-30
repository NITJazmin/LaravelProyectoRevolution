-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2018 a las 03:46:33
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

--
-- Estructura de tabla para la tabla `Analista`
--
DROP TABLE IF EXISTS `Analista` ;

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
DROP TABLE IF EXISTS `CoordinadorRev` ;

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
DROP TABLE IF EXISTS `DatosPersonales` ;

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
DROP TABLE IF EXISTS `Empleado` ;

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
(1, 'Carlos', 'aaa', 'aaaa', '02930', '', 1, 1),
(2, '0', NULL, '0', '0', '0', 1, 0),
(3, '1', NULL, '1', '1', '1', 2, 1),
(4, 'asnk', NULL, 'jk', 'nl', 'nkj', 10, 0),
(5, 'aa', NULL, 'a', 'a', 'a', 13, 0),
(6, 'p', 'xxxxxx', 'pp', 'p', 'ninguno', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--
DROP TABLE IF EXISTS `Empresa` ;

CREATE TABLE `Empresa` (
  `ID_empresa` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL,
  `Giro` varchar(45) DEFAULT NULL,
  `Direccion` varchar(150) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`ID_empresa`, `Nombre`, `Telefono`, `condicion`, `Giro`, `Direccion`) VALUES
(1, 'Empresa1', '55378664', 1, 'Ropa', 'plaza jardin #100 colonia roma, cerca deperif'),
(2, 'Empresa numero dos', 'no hay', 1, NULL, NULL),
(3, 'empresita', 'no hay', 0, NULL, NULL),
(4, 'a', 's', 0, 's', 's'),
(5, 'Came', '9381', 1, 'Comercio', 'hnsoa'),
(6, 'Cosco', '9381', 1, 'Comercio', 'hnsoa'),
(7, 'Cosia', '9381', 1, 'Comercio', 'hnsoa'),
(8, 'Came', '9381', 1, 'Comercio', 'hnsoa'),
(9, 'Revolution', '3712021', 1, 'recuirement', 'jdnkas9'),
(10, 'palacio', '231', 1, 'comercio', 'asnga23'),
(11, 'palacio', '231', 1, 'comercio', 'asnga23'),
(12, 'EJEMPLO', '34112', 1, 'DE EMPRESA', 'NSAARJ123'),
(13, 'a', 'a', 1, 'a', 'a'),
(14, 'z', 'z', 1, 'z', 'z'),
(15, 'as', 'f', 1, 'f', 'f'),
(16, 'as', 'f', 1, 'f', 'f'),
(17, 'v', 'v', 1, 'v', 'v');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstudioSocioE`
--
DROP TABLE IF EXISTS `EstudioSocioE` ;

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
DROP TABLE IF EXISTS `migrations` ;

CREATE TABLE `migrations` (
  `migration` varchar(255) CHARACTER SET utf8 NOT NULL,
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
DROP TABLE IF EXISTS `password_resets` ;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Peticion`
--
DROP TABLE IF EXISTS `Peticion` ;

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
(7, 'ESE', '2018-10-22', '2018-10-15', 'Proceso', 'sa', 3, 3, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PortadaSocio`
--
DROP TABLE IF EXISTS `PortadaSocio` ;

CREATE TABLE `PortadaSocio` (
  `ID_PortadaSocio` int(11) NOT NULL,
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
DROP TABLE IF EXISTS `Psicosocial` ;

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
-- Estructura de tabla para la tabla `RefLab`
--
DROP TABLE IF EXISTS `RefLab` ;

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
DROP TABLE IF EXISTS `RefPers` ;

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
DROP TABLE IF EXISTS `users` ;

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
  ADD PRIMARY KEY (`ID_empresa`),
  ADD KEY `fk_Empresa_users1_idx` (`users_id`);

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
  ADD PRIMARY KEY (`ID_PortadaSocio`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Psicosocial`
--
ALTER TABLE `Psicosocial`
  ADD PRIMARY KEY (`ID_Psicosocial`),
  ADD KEY `ID_estudio` (`ID_estudio`);

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
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `EstudioSocioE`
--
ALTER TABLE `EstudioSocioE`
  MODIFY `ID_estudio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Peticion`
--
ALTER TABLE `Peticion`
  MODIFY `ID_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
