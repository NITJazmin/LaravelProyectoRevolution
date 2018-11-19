-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2018 a las 20:50:57
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



-- Base de datos: `RevolutioBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Analista`
--

CREATE TABLE `Analista` (
  `ID_analista` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `condicion` int(1) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Analista`
--

INSERT INTO `Analista` (`ID_analista`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `foto`, `condicion`, `users_id`) VALUES
(4, 'Analista1', NULL, 'del analista', '2452', NULL, 0, 0),
(5, 'jocelin', 'becerril', 'jsao', '567890\'', 'imagenes/user-profile-icon.jpg', 1, 0),
(6, 'pancho', 'lopex', 'fghjk', '2345', 'imagenes/user-profile-icon.jpg', 1, 0),
(7, 'jazmin', 'camarillo', 'gh', '489009', 'imagenes/user-profile-icon.jpg', 1, 0),
(9, 'juan', 'romero', 'ghko', '1111', 'imagenes/user-profile-icon.jpg', 1, 0),
(10, 'qwer', NULL, '1231', '24', 'imagenes/user-profile-icon.jpg', 1, 0),
(11, 'cambio', NULL, NULL, '0000', 'lid.jpg', 1, 4),
(12, 'Pepito', 'Torres', 'Mera', '456789', 'lid.jpg', 1, 5),
(13, 'Ruben', NULL, NULL, '14673', 'lid.jpg', 1, 10),
(14, 'Isabel', '', '', '2941', 'lid.jpg', 1, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Caracteristicas`
--

CREATE TABLE `Caracteristicas` (
  `ID_caracteristicas` int(11) NOT NULL,
  `puesto` int(11) NOT NULL,
  `cantidad` varchar(100) DEFAULT NULL,
  `objetivo` varchar(100) DEFAULT NULL,
  `actividades` varchar(150) DEFAULT NULL,
  `reporte` varchar(100) DEFAULT NULL,
  `diasLab` varchar(100) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `rangoEdad` varchar(80) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `estadoCivil` varchar(100) DEFAULT NULL,
  `actoresInternos` varchar(100) DEFAULT NULL,
  `actoresExternos` varchar(100) DEFAULT NULL,
  `ID_datos` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Caracteristicas`
--

INSERT INTO `Caracteristicas` (`ID_caracteristicas`, `puesto`, `cantidad`, `objetivo`, `actividades`, `reporte`, `diasLab`, `horario`, `lugar`, `rangoEdad`, `sexo`, `estadoCivil`, `actoresInternos`, `actoresExternos`, `ID_datos`, `condicion`) VALUES
(1, 0, 'jj', 'j', 'j', 'j', 'j', 'j', NULL, 'j', 'j', 'j', 'j', 'j', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CoordinadorRev`
--

CREATE TABLE `CoordinadorRev` (
  `ID_coordinador` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Papp` varchar(45) DEFAULT NULL,
  `Sapp` varchar(45) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CoordinadorRev`
--

INSERT INTO `CoordinadorRev` (`ID_coordinador`, `Nombre`, `Papp`, `Sapp`, `telefono`, `foto`, `condicion`, `users_id`) VALUES
(1, 'Andty', 'Vita', 'Pardo', NULL, NULL, 0, 0),
(3, 'ejemplo1', 'ejemplo', 'ejemplo', NULL, NULL, 0, 0),
(5, 'jazmin', 'Martinez', 'Martinez', NULL, NULL, 0, 0),
(6, 'Empresa Ejemplo', 'a', 's', NULL, 'imagenes/user-profile-icon.jpg', 0, 0),
(9, 'Jazmin', 'Camarillo', 'Martinez', '09876', 'Captura de pantalla de 2018-11-05 23-18-53.png', 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DatosContacto`
--

CREATE TABLE `DatosContacto` (
  `ID_datos` int(11) NOT NULL,
  `razonSocial` varchar(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `giro` varchar(45) DEFAULT NULL,
  `tamano` varchar(15) DEFAULT NULL,
  `direccion` varchar(15) DEFAULT NULL,
  `contacto` varchar(15) DEFAULT NULL,
  `cargo` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `ID_peticion` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `DatosContacto`
--

INSERT INTO `DatosContacto` (`ID_datos`, `razonSocial`, `nombre`, `giro`, `tamano`, `direccion`, `contacto`, `cargo`, `telefono`, `email`, `ID_peticion`, `condicion`) VALUES
(1, 'j', 'j', 'j', 'j', 'jj', 'j', 'j', 'jj', 'j', 3, 1);

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
-- Estructura de tabla para la tabla `Educacion`
--

CREATE TABLE `Educacion` (
  `ID_educacion` int(11) NOT NULL,
  `escolaridad` varchar(100) NOT NULL,
  `conocimientos` varchar(100) DEFAULT NULL,
  `experiencia` varchar(100) DEFAULT NULL,
  `competencias` varchar(150) DEFAULT NULL,
  `habilidades` varchar(100) DEFAULT NULL,
  `office` varchar(100) DEFAULT NULL,
  `funcionesOffice` varchar(100) DEFAULT NULL,
  `adicional` varchar(100) DEFAULT NULL,
  `funcionesAdicional` varchar(80) DEFAULT NULL,
  `herramientas` varchar(100) DEFAULT NULL,
  `idiomas` varchar(100) DEFAULT NULL,
  `ID_datos` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Educacion`
--

INSERT INTO `Educacion` (`ID_educacion`, `escolaridad`, `conocimientos`, `experiencia`, `competencias`, `habilidades`, `office`, `funcionesOffice`, `adicional`, `funcionesAdicional`, `herramientas`, `idiomas`, `ID_datos`, `condicion`) VALUES
(1, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'jj', 'j', 1, 1);

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
  `foto` varchar(150) DEFAULT NULL,
  `ID_empresa` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empleado`
--

INSERT INTO `Empleado` (`ID_empleado`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `puesto`, `foto`, `ID_empresa`, `condicion`, `users_id`) VALUES
(1, 'Maria', 'lopex', 'Perez', '2394', 'Gerente', 'user-profile-icon.jpg', 2, 1, 21),
(2, 'Joaquin', 'Martinez', 'Monter', '830481', 'Gerente', 'user-profile-icon.jpg', 2, 1, 22),
(3, 'Ariel', 'Romero', 'Navarro', '2838278', '--', 'user-profile-icon.jpg', 10, 1, 23);

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
  `Direccion` varchar(150) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`ID_empresa`, `Nombre`, `Telefono`, `condicion`, `Giro`, `Direccion`, `users_id`) VALUES
(2, 'Empresa numero dos', 'no hay', 1, NULL, NULL, 0),
(10, 'palacio', '231', 1, 'comercio', 'asnga23', 0),
(13, 'Nautica', '582013', 1, 'Ropa', '', 0);

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
('2014_10_12_100000_create_password_resets_table', 1),
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
  `ID_empleado` int(11) NOT NULL,
  `ID_coordinador` int(11) NOT NULL,
  `ID_analista` int(11) DEFAULT NULL,
  `ID_reclutador` int(11) DEFAULT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Peticion`
--

INSERT INTO `Peticion` (`ID_peticion`, `Nombre`, `FechaIni`, `FechaFin`, `Status`, `Descripcion`, `ID_empleado`, `ID_coordinador`, `ID_analista`, `ID_reclutador`, `condicion`) VALUES
(1, 'ESE', '2018-11-07', NULL, 'proceso', 'a', 1, 5, 0, 0, 1),
(2, 'ESE', '2018-11-07', NULL, NULL, NULL, 1, 5, 7, NULL, 1),
(3, 'Vacante', '2018-11-13', NULL, NULL, NULL, 2, 5, NULL, 10, 1),
(4, 'ESE', '2018-11-14', NULL, 'proceso', '', 2, 5, 0, 0, 1),
(5, 'Vacante', '2018-11-18', NULL, 'proceso', 'Vacatnte prueba doos', 3, 5, 0, 0, 1),
(6, 'vacante', '2018-11-13', NULL, 'proceso', 'asasa', 3, 5, 0, 0, 1),
(7, 'S', '2018-10-31', NULL, 'proceso', 'DSA', 3, 5, 0, 0, 0),
(8, 'j', '0000-00-00', NULL, 'proceso', 'jj', 3, 5, 0, 0, 0),
(9, 'Vacante', '2018-11-15', NULL, 'proceso', 'asdadsf', 3, 5, 0, 0, 1),
(10, 'ESE', '2018-11-09', NULL, 'proceso', '', 3, 5, 0, 0, 1),
(11, 'ESE', '2018-11-18', NULL, 'proceso', '', 3, 5, 0, 0, 1),
(12, 'Vacante', '2018-11-17', NULL, 'proceso', '', 3, 5, 0, 0, 1);

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
-- Estructura de tabla para la tabla `Prestacion`
--

CREATE TABLE `Prestacion` (
  `ID_prestacion` int(11) NOT NULL,
  `sueldo` varchar(100) NOT NULL,
  `pago` varchar(100) DEFAULT NULL,
  `prestaciones` varchar(100) DEFAULT NULL,
  `comisiones` varchar(150) DEFAULT NULL,
  `metricas` varchar(100) DEFAULT NULL,
  `ID_datos` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Prestacion`
--

INSERT INTO `Prestacion` (`ID_prestacion`, `sueldo`, `pago`, `prestaciones`, `comisiones`, `metricas`, `ID_datos`, `condicion`) VALUES
(1, 'j', 'j', 'j', 'j', 'j', 1, 1);

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
  `foto` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` int(1) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Reclutador`
--

INSERT INTO `Reclutador` (`ID_reclutador`, `Nombre`, `Papp`, `Sapp`, `Telefono`, `foto`, `condicion`, `users_id`) VALUES
(4, 'Jocelin', '', '', '3456', NULL, 0, 0),
(5, 'nikole', '', '', '789', NULL, 1, 0),
(6, 'ejemplo', 'reclutado', 'nuevo', '098654', NULL, 1, 0),
(7, 'JUANITO', 'PREZ', 'SOLANO', '042', NULL, 1, 0),
(8, 'Juanito', 'Romero', 'Flores', '82661037', 'liderazgo.jpg', 1, 11),
(9, 'Abner', 'Flores', 'Flores', '24021\'', '45443475_1866434706805928_7701599406587379712_n.jpg', 1, 12),
(10, 'claudia', 'Moltalvan', 'Ramirez', '7020471012', 'liderazgo.jpg', 1, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reclutamiento`
--

CREATE TABLE `Reclutamiento` (
  `ID_reclutado` int(11) NOT NULL,
  `entrevistas` varchar(20) NOT NULL,
  `entrevistador` varchar(100) DEFAULT NULL,
  `sustituto` varchar(100) DEFAULT NULL,
  `psicometrico` varchar(150) DEFAULT NULL,
  `ese` varchar(100) DEFAULT NULL,
  `particularidad` varchar(100) DEFAULT NULL,
  `fechMax` varchar(100) DEFAULT NULL,
  `rechazo` varchar(100) DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  `ID_datos` int(11) NOT NULL,
  `condicion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Reclutamiento`
--

INSERT INTO `Reclutamiento` (`ID_reclutado`, `entrevistas`, `entrevistador`, `sustituto`, `psicometrico`, `ese`, `particularidad`, `fechMax`, `rechazo`, `comentarios`, `ID_datos`, `condicion`) VALUES
(1, 'jj', 'j', 'jj', 'j', 'j', 'j', 'j', 'j', 'j', 1, 1);

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `rol`) VALUES
(4, 'handjazzzz@hotmail.com', '$2y$10$PI7nK8a/NLGDII8O6BXC6Ou1gwUo5cDqpa/Fd4JHUMQ.3gckHQO0W', 'ibhX8AGpBcEyBbXmA2fLoSnb5X1A3Iir2rSQzPyCE5OyX2On5cFYcyLBuWD0', 'analista'),
(5, 'pepitoperez@gmail.com', '$2y$10$cqMhclc/9IHO9YRhBJqD1eFdJLtyffpxzRNfgAuVE4Gqj/XrBW/lS', 'SnWeMVzBW1XkGi4bQl3XuSZ89J54ZZWpa8hpp3cvK51V6Eb7WvH39gUBkMIu', 'analista'),
(6, 'edgar@gmail.com', '$2y$10$8v8.rmUZiw5GzhelMYQ/HOhYOLhKchzj1FE6xROROi2GOiVDb.AiS', NULL, 'coordinador'),
(8, 'pancho@gmail.com', '$2y$10$0HO9YAao2425VngHO.UcMeatDoMfqw801VBxo1mPisbyS.A2hT7Du', '4xIvAfx6wLSXCeTislbslJnQbCpkQWLDS7Qi3b6ATXS56oozqPuUCVv7jfR9', 'coordinador'),
(9, 'jazmin@gmail.com', '$2y$10$ePgXdtHQioDItyb/Kzsd2uTWwrVWbBH2Dg6bDnoRltVsahEugK2sO', 'hKL6xA6Holm6fyuLryxRlA1tonDgkDMc3iuhsOY5X38BFKJAaQryisEXW91t', 'coordinador'),
(10, 'ruben@gmail.com', '$2y$10$Z6nTqT.arjnTBtyFn0LsF..3CIPOQMccWBimBGDQ/NQjnQqUETiCu', 'hsazkp4pHTzFO76NrwjhAi0KNZgkvw86tW2DhpRhKLANGJKNWATuYqi4pdqg', 'analista'),
(11, 'juanito@gmail.com', '$2y$10$p7lVumSL7FrUQgRzBO9hHOAYVipcQa8VJVbc7JqvEXNgg9wKAFnAW', 'HK21DUcZBRE7IOsaARZxTq6SiMTKeHR2qDFVE88nKhfXknfvMhrBpay0HHmL', 'reclutador'),
(12, 'abner@gmail.com', '$2y$10$qaA9qEDfI2qDqs2WNFx/o.8Jss/mxwW0rndZS2fsdXAQ7L1K7xq/6', '6AFrlO02k1Ub3yCzHLgqo6F9Hqv1s8tCpvlNdiOCdEYksKeAgHtVTj7tY6Ym', 'reclutador'),
(13, 'isabel@gmail.com', '$2y$10$PI25e0Dx12tzVLMpj5aDn.ItjZabgnqvP.HwitXJKH.jgByg9efcO', '5m9XJGNLbxuHdEXfkDXQbPyuujegtgYvRvqUoMzSHVU10zsSf2vXgAREILrF', 'analista'),
(17, 'claudia@gmail.com', '$2y$10$JESg3V9H.zHy7vnUzyOAquF6KKUc/YAtda5AqpfEPaKimIgOCGoQ.', 'ALTnh0vWIDcme9WE03DF4RzYIHn5uscLBQRp4vbqKZWystTcKujAQCAmiH2b', 'reclutador'),
(21, 'maria@gmail.com', '$2y$10$bjTP3b1IbSmBC3zeqY7GKOIv8ipd0Ze.Zx2gX/sH8uCnrQf99ZdCW', 'B7WnYUI3zLa1ASoByBacRllrkmKf7QGVhWpveC1qpTFy9sjOi3Phlk48WBQA', 'empleado'),
(22, 'joaquin@gmail.com', '$2y$10$83yEP719jth/ip7cilL7TuYPF3LvQUHjBAoemnMBd5FlOhnipYzai', '1ZbJoWlNVmPioDKytUFjJcqoUqQVFNbYhQaFkoRikJFb6EtHQ0GUyQQJ7XQt', 'empleado'),
(23, 'ariel@gmail.com', '$2y$10$0sldZRG/Y3zFlo2gTucV3udu8I87CsyfluJx0hdR/xVVQnUT0EXBa', 'xmk6u8RZW8Y8nju96ALCucOoKnxgVSJUSOiMe4hBoCf5mhxWFaWbQiCL4Zw3', 'empleado');

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
-- Indices de la tabla `Caracteristicas`
--
ALTER TABLE `Caracteristicas`
  ADD PRIMARY KEY (`ID_caracteristicas`),
  ADD KEY `ID_datos` (`ID_datos`);

--
-- Indices de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  ADD PRIMARY KEY (`ID_coordinador`),
  ADD KEY `fk_CoordinadorRev_users1_idx` (`users_id`);

--
-- Indices de la tabla `DatosContacto`
--
ALTER TABLE `DatosContacto`
  ADD PRIMARY KEY (`ID_datos`),
  ADD KEY `ID_peticion` (`ID_peticion`);

--
-- Indices de la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  ADD PRIMARY KEY (`ID_datP`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Educacion`
--
ALTER TABLE `Educacion`
  ADD PRIMARY KEY (`ID_educacion`),
  ADD KEY `ID_datos` (`ID_datos`);

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
  ADD KEY `ID_Empleado` (`ID_empleado`),
  ADD KEY `ID_coordinador` (`ID_coordinador`),
  ADD KEY `ID_analista` (`ID_analista`),
  ADD KEY `ID_reclutador` (`ID_reclutador`);

--
-- Indices de la tabla `PortadaSocio`
--
ALTER TABLE `PortadaSocio`
  ADD PRIMARY KEY (`ID_portadaSocio`),
  ADD KEY `ID_estudio` (`ID_estudio`);

--
-- Indices de la tabla `Prestacion`
--
ALTER TABLE `Prestacion`
  ADD PRIMARY KEY (`ID_prestacion`),
  ADD KEY `ID_datos` (`ID_datos`);

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
  ADD KEY `fk_Analista_users1_idx` (`users_id`);

--
-- Indices de la tabla `Reclutamiento`
--
ALTER TABLE `Reclutamiento`
  ADD PRIMARY KEY (`ID_reclutado`),
  ADD KEY `ID_datos` (`ID_datos`);

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
  MODIFY `ID_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `Caracteristicas`
--
ALTER TABLE `Caracteristicas`
  MODIFY `ID_caracteristicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `CoordinadorRev`
--
ALTER TABLE `CoordinadorRev`
  MODIFY `ID_coordinador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `DatosContacto`
--
ALTER TABLE `DatosContacto`
  MODIFY `ID_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  MODIFY `ID_datP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Educacion`
--
ALTER TABLE `Educacion`
  MODIFY `ID_educacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `ID_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Prestacion`
--
ALTER TABLE `Prestacion`
  MODIFY `ID_prestacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Reclutador`
--
ALTER TABLE `Reclutador`
  MODIFY `ID_reclutador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Reclutamiento`
--
ALTER TABLE `Reclutamiento`
  MODIFY `ID_reclutado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Caracteristicas`
--
ALTER TABLE `Caracteristicas`
  ADD CONSTRAINT `Caracteristicas_ibfk_1` FOREIGN KEY (`ID_datos`) REFERENCES `DatosContacto` (`ID_datos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `DatosContacto`
--
ALTER TABLE `DatosContacto`
  ADD CONSTRAINT `DatosContacto_ibfk_1` FOREIGN KEY (`ID_peticion`) REFERENCES `Peticion` (`ID_peticion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `DatosPersonales`
--
ALTER TABLE `DatosPersonales`
  ADD CONSTRAINT `DatosPersonales_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Educacion`
--
ALTER TABLE `Educacion`
  ADD CONSTRAINT `Educacion_ibfk_1` FOREIGN KEY (`ID_datos`) REFERENCES `DatosContacto` (`ID_datos`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `Peticion_ibfk_1` FOREIGN KEY (`ID_empleado`) REFERENCES `Empleado` (`ID_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Peticion_ibfk_2` FOREIGN KEY (`ID_coordinador`) REFERENCES `CoordinadorRev` (`ID_coordinador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PortadaSocio`
--
ALTER TABLE `PortadaSocio`
  ADD CONSTRAINT `PortadaSocio_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Prestacion`
--
ALTER TABLE `Prestacion`
  ADD CONSTRAINT `Prestacion_ibfk_1` FOREIGN KEY (`ID_datos`) REFERENCES `DatosContacto` (`ID_datos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Psicosocial`
--
ALTER TABLE `Psicosocial`
  ADD CONSTRAINT `Psicosocial_ibfk_1` FOREIGN KEY (`ID_estudio`) REFERENCES `EstudioSocioE` (`ID_estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Reclutamiento`
--
ALTER TABLE `Reclutamiento`
  ADD CONSTRAINT `Reclutamiento_ibfk_1` FOREIGN KEY (`ID_datos`) REFERENCES `DatosContacto` (`ID_datos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
