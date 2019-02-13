-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2019 a las 19:27:36
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `womenit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canalesdifusion`
--

CREATE TABLE `canalesdifusion` (
  `idCanalDif` int(11) NOT NULL,
  `nombreCanalDif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canalesdifusion`
--

INSERT INTO `canalesdifusion` (`idCanalDif`, `nombreCanalDif`) VALUES
(1, 'Redes Sociales'),
(2, 'Medios de Comunicación'),
(3, 'Publicidad'),
(4, 'Amigos/Conocidos'),
(5, 'Escuela'),
(6, 'Familiares'),
(7, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` bigint(20) UNSIGNED NOT NULL,
  `nombreGrupo` varchar(100) NOT NULL,
  `idInstitucion` int(11) NOT NULL,
  `idResponsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `idInstitucion` int(11) NOT NULL,
  `nombreInstitucion` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`idInstitucion`, `nombreInstitucion`) VALUES
(1, 'Universidad Autónoma de Querétaro'),
(2, 'Instituto Tecnológico de Querétaro '),
(3, 'Instituto Tecnológico de San Juan del Río'),
(4, 'Universidad Tecnológica de Querétaro'),
(5, 'Universidad Tecnológica de Corregidora'),
(6, 'Universidad Tecnológica de San Juan del Río'),
(7, 'Universidad Politécnica de Querétaro'),
(8, 'Universidad Politécnica de Santa Rosa Jáuregui'),
(9, 'Universidad del Valle de México Campus Querétaro'),
(10, 'Universidad de Londres'),
(11, 'Instituto Tecnológico de Estudios Superiores de Monterrey Campus Querétaro'),
(12, 'Universidad Cuauhtémoc Querétaro'),
(13, 'Universidad Politécnica de Querétaro'),
(14, 'Instituto Tecnológico de Celaya'),
(18, 'Empresa'),
(19, 'Otra'),
(15, 'Universidad Tecnológica del Norte de Guanajuato'),
(16, 'Universidad Tecnológica de Salamanca'),
(17, 'Colegio de Profesionistas de TI de Guanajuato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroparticipantes`
--

CREATE TABLE `registroparticipantes` (
  `idRegistro` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellidos` varchar(80) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(80) NOT NULL,
  `idInstitucion` int(11) NOT NULL,
  `fuenteInformacion` int(11) NOT NULL,
  `codigoAcceso` varchar(20) NOT NULL,
  `estatusAsistencia` int(11) NOT NULL,
  `fechaRegistro` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `verificacionCorreo` int(11) DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `idGrupo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(75) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(1, 'Estudiante'),
(2, 'Profesora'),
(3, 'Directora'),
(4, 'Presidenta'),
(6, 'Ama de casa'),
(7, 'Desarrolladora'),
(8, 'Líder de Proyecto'),
(9, 'Gerente'),
(10, 'Coordinadora'),
(11, 'Investigadora'),
(12, 'Asesora'),
(13, 'Supervisora'),
(14, 'Conferencista'),
(15, 'Otra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canalesdifusion`
--
ALTER TABLE `canalesdifusion`
  ADD PRIMARY KEY (`idCanalDif`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`),
  ADD UNIQUE KEY `nombreGrupo` (`nombreGrupo`),
  ADD KEY `idInstitucion` (`idInstitucion`),
  ADD KEY `idResponsable` (`idResponsable`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `registroparticipantes`
--
ALTER TABLE `registroparticipantes`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idInstitucion` (`idInstitucion`),
  ADD KEY `idCanal` (`fuenteInformacion`),
  ADD KEY `idGrupo` (`idGrupo`),
  ADD KEY `responsable` (`idRegistro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canalesdifusion`
--
ALTER TABLE `canalesdifusion`
  MODIFY `idCanalDif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registroparticipantes`
--
ALTER TABLE `registroparticipantes`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
