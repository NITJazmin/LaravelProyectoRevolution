-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2018 a las 18:45:51
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Analista`
--

CREATE TABLE `Analista` (
  `ID_analista` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `P.app` varchar(45) DEFAULT NULL,
  `S.app` varchar(45) DEFAULT NULL,
  `e-mailEmpresa` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `ID_encargado` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CoordinadorRev`
--

CREATE TABLE `CoordinadorRev` (
  `ID_coordinador` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CoordinadorRev`
--

INSERT INTO `CoordinadorRev` (`ID_coordinador`, `Nombre`, `Papp`, `Sapp`, `email`, `condicion`) VALUES
(1, 'Andrea', 'Vita', 'Pardo', 'direccion@hr-revolution.com', 1),
(2, 'Carlos', 'Gonzalez', 'Gonzalez', 'design@hr-revolution.com.mx', 1),
(3, 'ejemplo1', 'ejemplo', 'ejemplo', 'ninguno', 1),
(5, 'jazmin', 'Martinez', 'Martinez', 'handjazzzz@hotmail.com', 0);

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
  `ID_Empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `ID_empresa` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Empresa1', '55378664', 1, 'Ropa', 'plaza jardin #100 colonia roma, cerca deperif'),
(2, 'Empresa numero dos', 'no hay', 1, NULL, NULL),
(3, 'empresita', 'no hay', 0, NULL, NULL),
(4, 'empresa carlos', 'no tiene', 0, NULL, NULL),
(5, 'palacio', '77442', 1, 'ropa', 'polanco');

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
-- Estructura de tabla para la tabla `Peticion`
--

CREATE TABLE `Peticion` (
  `ID_peticion` int(11) NOT NULL,
  `FechaIni` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `ID_Empleado` int(11) NOT NULL,
  `ID_coordinador` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Analista`
--
ALTER TABLE `Analista`
  ADD PRIMARY KEY (`ID_analista`),
  ADD KEY `ID_encargado` (`ID_encargado`);

--
-- Indices de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  ADD PRIMARY KEY (`ID_coordinador`);

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
  ADD PRIMARY KEY (`ID_Empleado`),
  ADD KEY `ID_empresa` (`ID_empresa`);

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
-- Indices de la tabla `Peticion`
--
ALTER TABLE `Peticion`
  ADD PRIMARY KEY (`ID_peticion`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_coordinador` (`ID_coordinador`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Analista`
--
ALTER TABLE `Analista`
  MODIFY `ID_analista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  MODIFY `ID_coordinador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  MODIFY `ID_datP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  MODIFY `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `EstudioSocioE`
--
ALTER TABLE `EstudioSocioE`
  MODIFY `ID_estudio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Peticion`
--
ALTER TABLE `Peticion`
  MODIFY `ID_peticion` int(11) NOT NULL AUTO_INCREMENT;

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Analista`
--
ALTER TABLE `Analista`
  ADD CONSTRAINT `Analista_ibfk_1` FOREIGN KEY (`ID_encargado`) REFERENCES `CoordinadorRev` (`ID_coordinador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `Peticion_ibfk_1` FOREIGN KEY (`ID_Empleado`) REFERENCES `Empleado` (`ID_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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

--
-- Filtros para la tabla `RefLab`
--
ALTER TABLE `RefLab`
  ADD CONSTRAINT `RefLab_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `RefPers`
--
ALTER TABLE `RefPers`
  ADD CONSTRAINT `RefPers_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
