-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-05-2022 a las 04:09:32
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notifyudg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventoscalendar`
--

DROP TABLE IF EXISTS `eventoscalendar`;
CREATE TABLE IF NOT EXISTS `eventoscalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventoscalendar`
--

INSERT INTO `eventoscalendar` (`id`, `evento`, `color_evento`, `fecha_inicio`, `fecha_fin`) VALUES
(51, 'Mi Primera Prueba', 'teal', '2021-07-07', '2021-07-08'),
(52, 'Mi Segunda Prueba', 'amber', '2021-07-17', '2021-07-18'),
(53, 'Mi Tercera Prueba', 'orange', '2021-07-03', '2021-07-04'),
(56, 'Xd', '#FF5722', '2022-06-21', '2022-06-25'),
(57, 'Asd', '#2196F3', '2022-06-20', '2022-06-25'),
(58, 'Qer', '#FFC107', '2022-06-22', '2022-06-24'),
(59, 'As', '#FFC107', '2022-06-01', '2022-06-02'),
(60, 'Asx', '#2196F3', '2022-06-01', '2022-06-02'),
(63, 'Examen Metodos Mate', '#FF5722', '2022-05-27', '2022-05-28'),
(62, 'Evento', '#2196F3', '2022-05-28', '2022-05-29'),
(71, 'Examen Fisica', '#FFC107', '2022-05-27', '2022-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

DROP TABLE IF EXISTS `tareas`;
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `materia` varchar(128) NOT NULL,
  `tipo` varchar(128) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `materia`, `tipo`, `comentario`, `correo`, `fecha`) VALUES
(6, 'ingles', 'Otro', 'actividades en libro', 'josue.rlozano@alumnos.udg.mx', '2022-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `correo`, `pass`) VALUES
(4, 'dany', 'rodriguez', 'dany@alumnos.udg.mx', '1234'),
(5, 'as', 'asd', 'adaa@sd.com', 'ad'),
(6, 'juan', 'perez', 'juan@gmail.com', '1234'),
(7, 'ejemplo', 'ejemplo', 'diegotg148@hotmail.com', 'diegotg04'),
(8, 'dany', 'rodriguez', 'dani46795@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
