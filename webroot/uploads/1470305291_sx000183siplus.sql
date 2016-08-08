-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-08-2016 a las 02:42:26
-- Versión del servidor: 5.6.26-log
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sx000183_SIPLUS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accions`
--

CREATE TABLE IF NOT EXISTS `accions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  `listado` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Accions_1_idx` (`usuario_id`),
  KEY `fk_Accions_2_idx` (`recomendacion_id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `accions`
--

INSERT INTO `accions` (`id`, `codigo`, `descripcion`, `fecha`, `usuario_id`, `recomendacion_id`, `listado`) VALUES
(1, 'SPSEG00001-001', '(1)	\r\n114. Se avanza en la despatriarcalizacion del Estado, las políticas, la gestión pública y la redistribución de los recursos, esto permitió un avance cualitativo en el diseño y concepción de políticas públicas, reflejado en el Plan Nacional para la Igualdad de Oportunidades – Mujeres Construyendo la Nueva Bolivia para Vivir Bien.\r\n\r\n115. Este Plan, continúa en ejecución a través del Programa de Patrimonio Productivo y Ciudadanía para Mujeres en extrema pobreza, denominado Programa Semilla, que favorece el desarrollo económico y social de las mujeres en el área rural mediante el acceso a recursos productivos, bienes de capital, articulación del mercado y asistencia técnica. Hasta el momento se beneficiaron 978 unidades económicas rurales; 3.753 mujeres lograron su\r\nautonomía económica y el ejercicio de sus derechos ciudadanos y 2.553 recibieron asistencia técnica y capital para iniciar y fortalecer sus emprendimientos productivos en 18 municipios priorizados del país.\r\n\r\n116. La pa', '2016-08-01 16:31:40', 6, 1, 'Programa de despatriarcalización del Estado.'),
(2, 'SPSEG00001-002', '114. Se avanza en la despatriarcalizacion del Estado, las políticas, la gestión pública y la redistribución de los recursos, esto permitió un avance cualitativo en el diseño y concepción de políticas públicas, reflejado en el Plan Nacional para la Igualdad de Oportunidades – Mujeres Construyendo la Nueva Bolivia para Vivir Bien.\r\n\r\n115. Este Plan, continúa en ejecución a través del Programa de Patrimonio Productivo y Ciudadanía para Mujeres en extrema pobreza, denominado Programa Semilla, que favorece el desarrollo económico y social de las mujeres en el área rural mediante el acceso a recursos productivos, bienes de capital, articulación del mercado y asistencia técnica. Hasta el momento se beneficiaron 978 unidades económicas rurales; 3.753 mujeres lograron su autonomía económica y el ejercicio de sus derechos ciudadanos y 2.553 recibieron asistencia técnica y capital para iniciar y fortalecer sus emprendimientos productivos en 18 municipios priorizados del país.\r\n\r\n116. La paridad y', '2016-08-01 16:56:09', 2, 1, 'Programa de despatriarcalizacion\r\nDireccion de Seguimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_accions`
--

CREATE TABLE IF NOT EXISTS `adjuntos_accions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_accions_1_idx` (`accion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `adjuntos_accions`
--

INSERT INTO `adjuntos_accions` (`id`, `accion_id`, `link`) VALUES
(1, 2, '1470070572_primer-informe-del-grupo-de-trabajo-sobre-el-epu-de-bolivia-marzo-2010.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_recomendacions`
--

CREATE TABLE IF NOT EXISTS `adjuntos_recomendacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_recomendacions_1_idx` (`recomendacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `adjuntos_recomendacions`
--

INSERT INTO `adjuntos_recomendacions` (`id`, `recomendacion_id`, `link`) VALUES
(1, 1, '1470068801_propuesta-productos-florida-v1.0.docx'),
(2, 2, '1470079124_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_versions`
--

CREATE TABLE IF NOT EXISTS `adjuntos_versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_versions_1_idx` (`version_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacions`
--

CREATE TABLE IF NOT EXISTS `autorizacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `visto_bueno_fisico` bit(1) NOT NULL,
  `accion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Autorizaciones_1_idx` (`usuario_id`),
  KEY `fk_Autorizaciones_3_idx` (`estado_id`),
  KEY `FK_Acciones_autorizacion` (`accion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `autorizacions`
--

INSERT INTO `autorizacions` (`id`, `usuario_id`, `estado_id`, `fecha_modificacion`, `visto_bueno_fisico`, `accion_id`) VALUES
(1, 1, 1, '2016-08-01 16:56:10', b'1', 2),
(2, 2, 3, '2016-08-01 16:58:56', b'1', 2),
(3, 4, 1, '2016-08-01 16:56:12', b'1', 2),
(4, 5, 1, '2016-08-01 16:56:12', b'1', 2),
(5, 6, 1, '2016-08-01 16:56:12', b'1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derechos`
--

CREATE TABLE IF NOT EXISTS `derechos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `indicador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_derechos_1_idx` (`indicador_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `derechos`
--

INSERT INTO `derechos` (`id`, `descripcion`, `indicador_id`) VALUES
(1, 'Derecho 1', 3),
(2, 'Derecho 2', 2),
(3, 'Derecho 3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho_recomendacion`
--

CREATE TABLE IF NOT EXISTS `derecho_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `derecho_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_derecho_recomendacion_1_idx` (`derecho_id`),
  KEY `fk_derecho_recomendacion_2_idx` (`recomendacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `derecho_recomendacion`
--

INSERT INTO `derecho_recomendacion` (`id`, `derecho_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `descripcion`) VALUES
(1, 'Borrador'),
(2, 'En Revision'),
(3, 'Aprobado'),
(4, 'Rechazado'),
(5, 'Aprobado 1er Ejecutor'),
(6, 'Rechazado 1er ejecutor'),
(7, 'Aprobado 2do ejecutor'),
(8, 'Rechazado 2do Ejecutor'),
(9, 'Publicado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores_derechos`
--

CREATE TABLE IF NOT EXISTS `indicadores_derechos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `derecho_id` int(255) NOT NULL,
  `indicador_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lnk_indicadores_derechos_indicadors` (`indicador_id`),
  KEY `lnk_indicadores_derechos_derechos` (`derecho_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadors`
--

CREATE TABLE IF NOT EXISTS `indicadors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `indicadors`
--

INSERT INTO `indicadors` (`id`, `nombre`, `link`) VALUES
(1, 'Indicador 1', 'http://www.ine.gob.bo/indice/indicadores.aspx'),
(2, 'Indicador 2', 'http://www.ine.gob.bo/indice/indicadores.aspx'),
(3, 'Indicador 3', 'http://www.ine.gob.bo/indice/indicadores.aspx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucions`
--

CREATE TABLE IF NOT EXISTS `institucions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `institucions`
--

INSERT INTO `institucions` (`id`, `descripcion`) VALUES
(1, 'Min. Justicia'),
(2, 'Min. Salud'),
(3, 'Procuraduria'),
(4, 'Cancilleria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_recomendacion`
--

CREATE TABLE IF NOT EXISTS `institucion_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_institucion_recomendacion_1_idx` (`institucion_id`),
  KEY `fk_institucion_recomendacion_2_idx` (`recomendacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `institucion_recomendacion`
--

INSERT INTO `institucion_recomendacion` (`id`, `institucion_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanismos`
--

CREATE TABLE IF NOT EXISTS `mecanismos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mecanismos`
--

INSERT INTO `mecanismos` (`id`, `descripcion`) VALUES
(1, 'Mecanismo 1'),
(2, 'Mecanismo 2'),
(3, 'Mecanismo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanismo_recomendacion`
--

CREATE TABLE IF NOT EXISTS `mecanismo_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mecanismo_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mecanismo_recomendacion_1_idx` (`mecanismo_id`),
  KEY `fk_mecanismo_recomendacion_2_idx` (`recomendacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mecanismo_recomendacion`
--

INSERT INTO `mecanismo_recomendacion` (`id`, `mecanismo_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titular` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado_id` int(11) NOT NULL,
  `link_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estado_id` (`estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacions`
--

CREATE TABLE IF NOT EXISTS `notificacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `mensaje` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notificacions_1_idx` (`accion_id`),
  KEY `fk_notificacions_2_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `notificacions`
--

INSERT INTO `notificacions` (`id`, `accion_id`, `usuario_id`, `mensaje`, `fecha`, `estado`) VALUES
(1, 2, 1, 'debe revisar la recomendacion con codigo:SPSEG00001-002', '2016-08-01 16:56:11', 'pendiente'),
(2, 2, 2, 'debe revisar la recomendacion con codigo:SPSEG00001-002', '2016-08-01 16:56:12', 'pendiente'),
(3, 2, 4, 'debe revisar la recomendacion con codigo:SPSEG00001-002', '2016-08-01 16:56:12', 'pendiente'),
(4, 2, 5, 'debe revisar la recomendacion con codigo:SPSEG00001-002', '2016-08-01 16:56:12', 'pendiente'),
(5, 2, 6, 'debe revisar la recomendacion con codigo:SPSEG00001-002', '2016-08-01 16:56:12', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacions`
--

CREATE TABLE IF NOT EXISTS `poblacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `poblacions`
--

INSERT INTO `poblacions` (`id`, `descripcion`) VALUES
(1, 'Poblacion 1'),
(2, 'Poblacion 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion_recomendacion`
--

CREATE TABLE IF NOT EXISTS `poblacion_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `poblacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recomendacion_poblacion_1_idx` (`recomendacion_id`),
  KEY `fk_recomendacion_poblacion_2_idx` (`poblacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `poblacion_recomendacion`
--

INSERT INTO `poblacion_recomendacion` (`id`, `recomendacion_id`, `poblacion_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacions`
--

CREATE TABLE IF NOT EXISTS `recomendacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(1000) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `año` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Recomendacions_1_idx` (`usuario_id`),
  KEY `fk_Recomendacions_2_idx` (`estado_id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `recomendacions`
--

INSERT INTO `recomendacions` (`id`, `descripcion`, `fecha_creacion`, `fecha_modificacion`, `usuario_id`, `estado_id`, `año`, `codigo`) VALUES
(1, '10.           El Comité acoge con satisfacción los esfuerzos realizados por el Estado parte para ofrecer servicios integrales de justicia plurinacional, pero expresa preocupación por:\r\n\r\n           a)       Las persistentes barreras estructurales de la “jurisdicción indígena originaria campesina” y el sistema de justicia formal que impiden que las mujeres accedan a la justicia y obtengan reparación, tales como el número insuficiente de tribunales en el territorio, la escasa información sobre derechos y procedimientos judiciales disponible en las principales lenguas indígenas y el alcance reducido de los planes de asistencia letrada, habida cuenta de que solo el 45% de los municipios han establecido servicios legales integrales municipales;\r\n\r\n           b)       La inexistencia de una trayectoria profesional institucional en los niveles bajo e intermedio del sistema judicial, lo que limita la independencia e imparcialidad del poder judicial;\r\n\r\n           c)       Los estereotipos de g', '2016-08-01 16:26:27', '2016-08-01 16:26:27', 6, 9, 2016, 'SPREC00001'),
(2, 'ñalskdñasldk lksñadñs', '2016-08-01 19:18:36', '2016-08-01 19:18:36', 2, 9, 4, 'SPREC00002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion_parametros`
--

CREATE TABLE IF NOT EXISTS `recomendacion_parametros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `prioridad` decimal(19,2) NOT NULL,
  `tiempo` decimal(19,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recomendacion_parametros_1_idx` (`recomendacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisions`
--

CREATE TABLE IF NOT EXISTS `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `resultado` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_revisions_1_idx` (`recomendacion_id`),
  KEY `fk_revisions_2_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE IF NOT EXISTS `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `institucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rols_1_idx` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `institucion_id`) VALUES
(1, 'iniciador_min_justicia', 1),
(2, 'ejecutor_min_justicia', 1),
(3, 'iniciador/ejecutor_min_justicia', 1),
(4, 'aprobador_cancilleria', 4),
(5, 'aprobador_min_salud', 2),
(6, 'aprobador_procuraduria', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_1_idx` (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre_usuario`, `password`, `fecha_creacion`, `fecha_modificacion`, `rol_id`) VALUES
(1, 'iniciador', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-22 07:06:00', '2016-06-22 07:06:00', 1),
(2, 'admin', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-22 21:05:00', '2016-06-22 21:05:00', 2),
(3, 'aprobador_cancilleria', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-24 23:23:00', '2016-06-24 23:23:00', 4),
(4, 'camilo', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-25 02:13:00', '2016-06-25 02:13:00', 3),
(5, 'usuario', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-25 02:29:00', '2016-06-25 02:29:00', 3),
(6, 'iniciador_aprobador_min_justicia', '$2y$10$EvhYWhjUkyobfElzgLDNGeeT3ahzp7R2clNL6XfQI1vLxiV/WqD72', '2016-08-01 14:38:00', '2016-08-01 14:38:00', 3),
(7, 'aprobador_min_salud', '$2y$10$evJ..iXd3VJnyh/IzwtJzO.bo4y1To2RrFagrE9W2EwAJICai.pBC', '2016-08-01 15:04:00', '2016-08-01 15:04:00', 5),
(8, 'aprobador_procuraduria', '$2y$10$WZcvCJ6AuB6e5HEXwgfKwOkyzOqLsC1OKcKyvkaPpUmPqpDnMg2UO', '2016-08-01 15:05:00', '2016-08-01 15:05:00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versions`
--

CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_versions_1_idx` (`recomendacion_id`),
  KEY `fk_versions_2_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accions`
--
ALTER TABLE `accions`
  ADD CONSTRAINT `fk_Accions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Accions_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_accions`
--
ALTER TABLE `adjuntos_accions`
  ADD CONSTRAINT `fk_adjuntos_accions_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_recomendacions`
--
ALTER TABLE `adjuntos_recomendacions`
  ADD CONSTRAINT `fk_adjuntos_recomendacions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_versions`
--
ALTER TABLE `adjuntos_versions`
  ADD CONSTRAINT `fk_adjuntos_versions_1` FOREIGN KEY (`version_id`) REFERENCES `versions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  ADD CONSTRAINT `FK_Acciones_autorizacion` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`),
  ADD CONSTRAINT `fk_Autorizaciones_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Autorizaciones_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `derechos`
--
ALTER TABLE `derechos`
  ADD CONSTRAINT `fk_derechos_1` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `derecho_recomendacion`
--
ALTER TABLE `derecho_recomendacion`
  ADD CONSTRAINT `fk_derecho_recomendacion_1` FOREIGN KEY (`derecho_id`) REFERENCES `derechos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_derecho_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indicadores_derechos`
--
ALTER TABLE `indicadores_derechos`
  ADD CONSTRAINT `lnk_indicadores_derechos_derechos` FOREIGN KEY (`derecho_id`) REFERENCES `derechos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lnk_indicadores_derechos_indicadors` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `institucion_recomendacion`
--
ALTER TABLE `institucion_recomendacion`
  ADD CONSTRAINT `fk_institucion_recomendacion_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_institucion_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mecanismo_recomendacion`
--
ALTER TABLE `mecanismo_recomendacion`
  ADD CONSTRAINT `fk_mecanismo_recomendacion_1` FOREIGN KEY (`mecanismo_id`) REFERENCES `mecanismos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mecanismo_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificacions`
--
ALTER TABLE `notificacions`
  ADD CONSTRAINT `fk_notificacions_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notificacions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `poblacion_recomendacion`
--
ALTER TABLE `poblacion_recomendacion`
  ADD CONSTRAINT `fk_recomendacion_poblacion_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recomendacion_poblacion_2` FOREIGN KEY (`poblacion_id`) REFERENCES `poblacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recomendacions`
--
ALTER TABLE `recomendacions`
  ADD CONSTRAINT `fk_Recomendacions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recomendacions_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recomendacion_parametros`
--
ALTER TABLE `recomendacion_parametros`
  ADD CONSTRAINT `fk_recomendacion_parametros_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `revisions`
--
ALTER TABLE `revisions`
  ADD CONSTRAINT `fk_revisions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revisions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usuarios_1` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `versions`
--
ALTER TABLE `versions`
  ADD CONSTRAINT `fk_versions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_versions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
