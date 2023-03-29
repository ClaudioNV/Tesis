-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2018 a las 14:50:41
-- Versión del servidor: 5.6.36-cll-lve
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `selahcl_korpovibro01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase_instructor`
--

CREATE TABLE IF NOT EXISTS `clase_instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_clase` int(11) NOT NULL,
  `nombre_instructor` int(11) NOT NULL,
  `lugar_clase_instructor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordenadas`
--

CREATE TABLE IF NOT EXISTS `coordenadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitud` float(10,6) DEFAULT NULL,
  `longitud` float(10,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Volcado de datos para la tabla `coordenadas`
--

INSERT INTO `coordenadas` (`id`, `latitud`, `longitud`) VALUES
(1, 23.000000, 23.000000),
(2, 23.119930, 0.000000),
(3, 23.119930, -70.879326),
(4, 23.119930, -70.879326),
(5, 2121212.000000, 32323.000000),
(6, 2121212.000000, 32323.000000),
(7, 0.000000, 0.000000),
(8, 0.000000, 0.000000),
(9, 0.000000, 0.000000),
(10, 0.000000, 0.000000),
(11, -33.407089, -70.747841),
(12, -33.434509, -70.770805),
(13, -33.434509, -70.770805),
(14, -33.282711, -70.879326),
(15, -33.282711, -70.879326),
(16, 52.133213, -106.670044),
(17, 52.133213, -106.670044),
(18, -34.603683, -58.381557),
(19, -33.431446, -70.609329),
(20, -25.274399, 133.775131),
(21, 10.781682, 106.663445),
(22, 0.000000, 0.000000),
(23, 0.000000, 0.000000),
(24, -33.397209, -70.642815),
(25, -33.384689, -70.680023),
(26, -33.384689, -70.680023),
(27, 0.000000, 0.000000),
(28, 0.000000, 0.000000),
(29, 0.000000, 0.000000),
(30, -33.282711, -70.879326),
(31, -33.282711, -70.879326),
(32, -33.282711, -70.879326),
(33, -33.282711, -70.879326),
(34, -33.282711, -70.879326),
(35, -33.282711, -70.879326),
(36, -33.282711, -70.879326),
(37, -33.282711, -70.879326),
(38, -33.282711, -70.879326),
(39, -33.282711, -70.879326),
(40, -33.282711, -70.879326),
(41, -33.282711, -70.879326),
(42, -33.282711, -70.879326),
(43, -33.282711, -70.879326),
(44, -33.282711, -70.879326),
(45, -33.282711, -70.879326),
(46, -33.397209, -70.642815),
(47, -33.282711, -70.879326),
(48, -33.282711, -70.879326),
(49, -33.288219, -70.869026),
(50, -33.282707, -70.879326),
(51, -33.282707, -70.879326),
(52, -33.282707, -70.879326),
(53, -33.282707, -70.879326),
(54, -33.284760, -70.881798),
(55, -33.403698, -70.757256),
(56, -33.618607, -70.590607),
(57, -33.586380, -70.550133),
(58, -33.284760, -70.881798),
(59, -33.405865, -70.681740),
(60, -33.448891, -70.669266),
(61, -33.423176, -70.622383),
(62, -33.405865, -70.681740),
(63, -33.405865, -70.681740),
(64, -33.375614, -70.716660),
(65, -33.397793, -70.760178),
(66, -33.438492, -70.645584),
(67, -33.405865, -70.681740),
(68, -33.400452, -70.693787),
(69, -33.416039, -70.611961),
(70, -33.397209, -70.642815),
(71, -33.397209, -70.642815),
(72, -33.397209, -70.642815),
(73, 0.000000, 0.000000),
(74, 0.000000, 0.000000),
(75, 0.000000, 0.000000),
(76, 0.000000, 0.000000),
(77, 0.000000, 0.000000),
(78, -33.441212, -70.650726),
(79, -33.526802, -70.529922),
(80, -33.405865, -70.681740),
(81, -33.398979, -70.557312),
(82, -33.398979, -70.557312),
(83, -33.437843, -70.650482),
(84, -33.437843, -70.650482),
(85, -33.403698, -70.757256);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lat` int(255) NOT NULL,
  `lng` int(50) NOT NULL,
  `type` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Celke - Matriz', '5550 Avenida Republica Argentina, Curitiba', -25, -49, 0),
(2, 'Celke - Filial 1', '1610 Av. Carlos Gomes, Porto Alegre', -30, -51, 0),
(3, 'Celke - Filial 2', '575 Avenida Paulista, SÃ£o Paulo', -24, -47, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misclases_alumnos`
--

CREATE TABLE IF NOT EXISTS `misclases_alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_de_la_clase` varchar(255) NOT NULL,
  `hora_inicio_de_la_clase` datetime NOT NULL,
  `hora_fin_de_la_clase` datetime NOT NULL,
  `direccion_clase` varchar(255) NOT NULL,
  `tipo_de_clase` varchar(255) NOT NULL,
  `id_alumno_clase` int(11) NOT NULL,
  `id_instructor_de_la_clase` int(11) NOT NULL,
  `id_de_la_clase` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `misclases_alumnos`
--

INSERT INTO `misclases_alumnos` (`id`, `nombre_de_la_clase`, `hora_inicio_de_la_clase`, `hora_fin_de_la_clase`, `direccion_clase`, `tipo_de_clase`, `id_alumno_clase`, `id_instructor_de_la_clase`, `id_de_la_clase`) VALUES
(1, 'prueba3', '2018-06-20 18:50:00', '2018-06-07 23:30:00', 'Puente Alto, Chile', '4', 2, 1, 45),
(9, 'Prueba clase1', '2018-06-20 14:55:00', '2018-06-15 22:50:00', 'Recoleta, Chile', '5', 2, 1, 46),
(8, 'prueba3', '2018-06-20 18:50:00', '2018-06-07 23:30:00', 'Puente Alto, Chile', '4', 59, 1, 45),
(7, 'Prueba clase1', '2018-06-20 14:55:00', '2018-06-15 22:50:00', 'Recoleta, Chile', '5', 0, 1, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_clase`
--

CREATE TABLE IF NOT EXISTS `registro_clase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_clase_instructor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `horar_clase_inicio` datetime NOT NULL,
  `hora_clase_fin` datetime NOT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `id_tipo_clases` int(11) DEFAULT NULL,
  `id_instructor_clase` int(11) DEFAULT NULL,
  `id_coordenadas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `registro_clase`
--

INSERT INTO `registro_clase` (`id`, `nombre_clase_instructor`, `horar_clase_inicio`, `hora_clase_fin`, `direccion`, `id_tipo_clases`, `id_instructor_clase`, `id_coordenadas`) VALUES
(59, 'Cynthia', '2018-06-13 20:00:00', '2018-06-13 23:45:00', '', 1, 58, 85),
(55, 'papu', '2018-06-17 11:00:00', '2018-06-07 12:00:00', 'Las Condes, Chile', 1, 1, 81),
(56, 'prueba', '2018-06-08 15:00:00', '2018-06-08 15:50:00', 'plaza de armas, chile', 1, 1, 82),
(57, 'El rincon de claudio', '2018-06-07 17:00:00', '2018-06-07 18:00:00', 'Plaza de Armas, Santiago, Chile', 5, 1, 83),
(58, 'Prueba1', '2018-06-17 18:00:00', '2018-06-07 19:00:00', 'Plaza de Armas, Santiago, Chile', 5, 1, 84),
(45, 'prueba3', '2018-06-20 18:50:00', '2018-06-07 23:30:00', 'Puente Alto, Chile', 4, 1, 71),
(46, 'Prueba clase1', '2018-06-20 14:55:00', '2018-06-15 22:50:00', 'Recoleta, Chile', 5, 1, 72),
(52, 'asdasdas', '2018-06-12 10:50:00', '2018-06-14 10:50:00', 'Paseo Ahumada, Santiago, Chile', 4, 1, 78),
(53, 'asdasdasd', '2018-06-13 10:45:00', '2018-06-06 23:50:00', 'Lo Canas, La Florida, Chile', 3, 1, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_clases`
--

CREATE TABLE IF NOT EXISTS `tipo_clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_clases` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipo_clases`
--

INSERT INTO `tipo_clases` (`id`, `nombre_clases`) VALUES
(1, 'Zumba'),
(2, 'Zumba Step'),
(3, 'Zumba Kids'),
(4, 'Power Rumba'),
(5, 'Zumba in the Circuit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo_usuario`) VALUES
(1, 'INSTRUCTOR'),
(2, 'ALUMNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut_usuario` varchar(200) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sexo` varchar(200) NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `rut_usuario`, `username`, `password`, `password2`, `nombre`, `apellido`, `sexo`, `correo`, `direccion`, `telefono`, `id_tipo_usuario`, `foto`) VALUES
(1, '19.025.200-0', 'marcelo', '1234', '1234', 'Claudio Marcelo', 'Navarrete', 'masculino', 'claudio@gmail.com', 'lampa', 123456789, 1, ''),
(2, '', 'claudio', '123', '1234', 'Marcelo', '', 'masculino', 'claudio@gmail.com', '', 0, 2, ''),
(25, '', 'Ficz', '123', '', 'Felipe', '', '', 'fcz@hotmail.com', 'chile', 12345678, 2, ''),
(24, '', 'cynthiaalej', '', '', '', '', '', '', '', 0, 1, ''),
(58, '18095160-1', 'cynthiaalej', '123456', '123456', 'CYNTHIA Alejandra', 'gonzalez', 'femenino', 'cgonzalez2302@gmail.com', 'lll', 123456789, 1, 'C:fakepath99788f951934a272286cf344b0e823ca.jpg'),
(59, '11111111', 'tutin', '123456', '123456', 'tutin Ignacio', 'gonzalez', 'masculino', 'tutin@demama.cl', 'kakakk', 123456, 2, ''),
(67, '1111', 'prueba2', '123', '123', 'adsasd', 'adasdas', '', 'asdasd', 'asdasdasd', 423423423, 2, ''),
(68, '1321', 'pruebaaa', '123', '123', 'asdad', 'adasd', '', 'asdasd', 'adasdasd', 2132132, 1, ''),
(69, '111', 'abbey', '123456', '123456', 'abbey', 'kik', '', 'mim', 'okok', 88148, 2, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
