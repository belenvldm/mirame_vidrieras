-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2016 a las 15:53:08
-- Versión del servidor: 5.6.26-log
-- Versión de PHP: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `xh000288_mira`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_admin` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombre_admin` varchar(40) COLLATE utf8_bin NOT NULL,
  `apellido_admin` varchar(40) COLLATE utf8_bin NOT NULL,
  `pass_admin` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario_admin`, `nombre_admin`, `apellido_admin`, `pass_admin`) VALUES
(2, 'belen@mirame.com.ar', 'belen', 'lopez', '11111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `id_consulta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_consulta` varchar(1000) COLLATE utf8_bin NOT NULL,
  `img_consulta` varchar(500) COLLATE utf8_bin NOT NULL,
  `fch_consulta` date NOT NULL,
  `estado_consulta` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `fk13` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `texto_consulta`, `img_consulta`, `fch_consulta`, `estado_consulta`, `id_usuario`) VALUES
(1, 'Hola, necesito que me arreglen el proyector porque no prende', '', '2016-11-16', 'finalizada', 1),
(2, 'creo que se rompió la pantalla?', '', '2016-11-16', 'pendiente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE IF NOT EXISTS `contenidos` (
  `id_contenido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_admin` smallint(5) unsigned NOT NULL,
  `id_seccion` tinyint(10) unsigned NOT NULL,
  `titulo_contenido` varchar(200) COLLATE utf8_bin NOT NULL,
  `title_contenido` varchar(200) COLLATE utf8_bin NOT NULL,
  `cuerpo_contenido` varchar(1000) COLLATE utf8_bin NOT NULL,
  `body_contenido` varchar(1000) COLLATE utf8_bin NOT NULL,
  `id_galeria` int(10) unsigned NOT NULL,
  `publicar_contenido` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_contenido`),
  KEY `fk6` (`id_admin`),
  KEY `fk12` (`id_seccion`),
  KEY `fk24` (`id_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id_contenido`, `id_admin`, `id_seccion`, `titulo_contenido`, `title_contenido`, `cuerpo_contenido`, `body_contenido`, `id_galeria`, `publicar_contenido`) VALUES
(1, 2, 1, 'nosotros', 'about us', 'Quienes somos, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. nuestro objetivos, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. mision, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. vision, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n\r\nnos esforzamos para lograr los mejores bla blabla blabla blabla blabla blabla blabla blabla bla y por eso nuestro equipo se prepara dia a dia', 'en ingles lo mismo Quienes somos...', 1, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE IF NOT EXISTS `etapas` (
  `id_etapa` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(10) unsigned NOT NULL,
  `nombre_etapa` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion_etapa` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_etapa`),
  KEY `fk10` (`id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_proy_mostrar` int(10) unsigned NOT NULL,
  `titulo_foto` varchar(200) COLLATE utf8_bin NOT NULL,
  `title_foto` varchar(200) COLLATE utf8_bin NOT NULL,
  `alt_foto` varchar(300) COLLATE utf8_bin NOT NULL,
  `alt_en_foto` varchar(300) COLLATE utf8_bin NOT NULL,
  `epigrafe_foto` varchar(300) COLLATE utf8_bin NOT NULL,
  `epigraph_foto` varchar(300) COLLATE utf8_bin NOT NULL,
  `url_foto` varchar(700) COLLATE utf8_bin NOT NULL,
  `id_galeria` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `fk11` (`id_proy_mostrar`),
  KEY `fk23` (`id_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `id_galeria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo_galeria` varchar(200) COLLATE utf8_bin NOT NULL,
  `title_galeria` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion_galeria` varchar(400) COLLATE utf8_bin NOT NULL,
  `description_galeria` varchar(400) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id_galeria`, `titulo_galeria`, `title_galeria`, `descripcion_galeria`, `description_galeria`) VALUES
(1, 'proyecto nike', 'project nike', 'galeria del proyecto', 'gallery of the project');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id_home` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `img_logo` varchar(700) COLLATE utf8_bin NOT NULL,
  `titulo_logo` varchar(60) COLLATE utf8_bin NOT NULL,
  `title_logo` varchar(60) COLLATE utf8_bin NOT NULL,
  `titulo_home` varchar(60) COLLATE utf8_bin NOT NULL,
  `title_home` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion_home` varchar(90) COLLATE utf8_bin NOT NULL,
  `description_home` varchar(90) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_home`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id_home`, `img_logo`, `titulo_logo`, `title_logo`, `titulo_home`, `title_home`, `descripcion_home`, `description_home`) VALUES
(1, 'http://localhost/develop/mirame_final/content/bin/img/logo-mirame.png', 'mirame vidrieras interactivas', 'mirame interactive windows', 'vidrieras interactivas', 'interactive windows', 'Agencia dedicada a la creación, diseño e instalación de pantallas interactivas', 'Agency dedicated to the creation, design and installation of interactive screens');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id_mensaje` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_mensaje` varchar(1000) COLLATE utf8_bin NOT NULL,
  `id_consulta` int(10) unsigned NOT NULL,
  `fch_mensaje` date NOT NULL,
  `id_admin` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_mensaje`),
  KEY `fk2` (`id_admin`),
  KEY `fk14` (`id_consulta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_mensaje`, `texto_mensaje`, `id_consulta`, `fch_mensaje`, `id_admin`) VALUES
(1, 'buenas tardes, le comunico que el tecnico va en camino', 1, '2016-11-16', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_preguntas`
--

CREATE TABLE IF NOT EXISTS `opciones_preguntas` (
  `id_opcion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_opcion` varchar(30) NOT NULL,
  `name_opcion` varchar(30) NOT NULL,
  `valor_opcion` varchar(30) NOT NULL,
  `value_opcion` varchar(30) NOT NULL,
  `id_pregunta` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_opcion`),
  KEY `fk26` (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `opciones_preguntas`
--

INSERT INTO `opciones_preguntas` (`id_opcion`, `nombre_opcion`, `name_opcion`, `valor_opcion`, `value_opcion`, `id_pregunta`) VALUES
(1, 'ubicacion', '', 'local exterior', '', 1),
(2, 'ubicacion', '', 'local interior', '', 1),
(3, 'ubicacion', '', 'stand', '', 1),
(4, 'dimension', '', 'chica', '', 2),
(5, 'dimension', '', 'mediana', '', 2),
(6, 'dimension', '', 'grande', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id_pregunta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_pregunta` varchar(200) COLLATE utf8_bin NOT NULL,
  `text_pregunta` varchar(200) COLLATE utf8_bin NOT NULL,
  `publicar_pregunta` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `texto_pregunta`, `text_pregunta`, `publicar_pregunta`) VALUES
(1, '¿donde va a estar la vidriera interactiva?', '', 'si'),
(2, '¿cual es la dimensión aproximada de la vidriera interactiva?', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas`
--

CREATE TABLE IF NOT EXISTS `propuestas` (
  `id_propuesta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_respuesta` int(10) unsigned NOT NULL,
  `contenido_propuesta` varchar(200) COLLATE utf8_bin NOT NULL,
  `fch_propuesta` date NOT NULL,
  PRIMARY KEY (`id_propuesta`),
  KEY `fk9` (`id_respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyecto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `titulo_proyecto` varchar(200) COLLATE utf8_bin NOT NULL,
  `title_proyecto` varchar(200) COLLATE utf8_bin NOT NULL,
  `cuerpo_proyecto` varchar(420) COLLATE utf8_bin NOT NULL,
  `body_proyecto` varchar(420) COLLATE utf8_bin NOT NULL,
  `video_proyecto` varchar(300) COLLATE utf8_bin NOT NULL,
  `id_galeria` int(10) unsigned NOT NULL,
  `id_admin` smallint(5) unsigned NOT NULL,
  `publicar_proyecto` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `fk5` (`id_usuario`),
  KEY `fk23` (`id_galeria`),
  KEY `fk25` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `id_usuario`, `titulo_proyecto`, `title_proyecto`, `cuerpo_proyecto`, `body_proyecto`, `video_proyecto`, `id_galeria`, `id_admin`, `publicar_proyecto`) VALUES
(1, 1, 'proyecto nike', 'project nike', 'realizamos una vidriera que muestra las estadí­sticas de los jugadores que usan los botines de nike, la información se muestra cuando las personas interactuan pateando, cabeceando o trotando en el lugar, frente a la vidriera de un shopping', 'lo mismo pero en ingles', 'https://www.youtube.com/embed/QTYDhnT-W9E', 1, 2, 'si'),
(2, 1, 'proyecto jeep', 'project jeep', 'realizamos una vidriera para jeep', 'lo mismo pero en ingles2', 'https://www.youtube.com/embed/QTYDhnT-W9E', 1, 2, 'no'),
(3, 1, 'proyecto shopping', 'project shopping', 'vidriera que reacciona al movimiento de los transeúntes, con un video de personas realizando piruetas. ', 'lo mismo', 'https://www.youtube.com/embed/xFgvNMN2DiQ', 1, 2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recordatorios`
--

CREATE TABLE IF NOT EXISTS `recordatorios` (
  `id_recordatorio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `id_admin` smallint(5) unsigned NOT NULL,
  `titulo_recordatorio` varchar(80) COLLATE utf8_bin NOT NULL,
  `texto_recordatorio` varchar(300) COLLATE utf8_bin NOT NULL,
  `fch_recordatorio` date NOT NULL,
  PRIMARY KEY (`id_recordatorio`),
  KEY `fk3` (`id_usuario`),
  KEY `fk7` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id_respuesta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `opcion_respuesta` varchar(20) COLLATE utf8_bin NOT NULL,
  `option_respuesta` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_pregunta` int(10) unsigned NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_respuesta`),
  KEY `fk4` (`id_usuario`),
  KEY `fk8` (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `id_seccion` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_seccion` varchar(20) COLLATE utf8_bin NOT NULL,
  `name_seccion` varchar(20) COLLATE utf8_bin NOT NULL,
  `orden_seccion` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `nombre_seccion`, `name_seccion`, `orden_seccion`) VALUES
(1, 'nosotros', 'about us', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(40) COLLATE utf8_bin NOT NULL,
  `apellido_usuario` varchar(40) COLLATE utf8_bin NOT NULL,
  `empresa_usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `mail_usuario` varchar(60) COLLATE utf8_bin NOT NULL,
  `pass_usuario` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `empresa_usuario`, `mail_usuario`, `pass_usuario`) VALUES
(1, 'bel', 'en', 'nike', 'belen@nike.com', '12121212');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk13` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`),
  ADD CONSTRAINT `fk24` FOREIGN KEY (`id_galeria`) REFERENCES `galerias` (`id_galeria`),
  ADD CONSTRAINT `fk6` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk22` FOREIGN KEY (`id_galeria`) REFERENCES `galerias` (`id_galeria`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`id_consulta`) REFERENCES `consultas` (`id_consulta`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `opciones_preguntas`
--
ALTER TABLE `opciones_preguntas`
  ADD CONSTRAINT `fk26` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`);

--
-- Filtros para la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`id_respuesta`) REFERENCES `respuestas` (`id_respuesta`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk23` FOREIGN KEY (`id_galeria`) REFERENCES `galerias` (`id_galeria`),
  ADD CONSTRAINT `fk25` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `recordatorios`
--
ALTER TABLE `recordatorios`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk7` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
