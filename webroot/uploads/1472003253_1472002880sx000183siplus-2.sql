-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2016 a las 21:08:38
-- Versión del servidor: 5.6.26-log
-- Versión de PHP: 5.2.17

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
  `estado_id` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `fk_Accions_1_idx` (`usuario_id`),
  KEY `fk_Accions_2_idx` (`recomendacion_id`),
  KEY `codigo` (`codigo`),
  KEY `fk_Accions_3_idx` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `accions`
--

INSERT INTO `accions` (`id`, `codigo`, `descripcion`, `fecha`, `usuario_id`, `recomendacion_id`, `listado`, `estado_id`) VALUES
(1, 'SPSEG00001-001', 'prueba de referencia', '2016-08-19 07:32:06', 6, 1, 'test', 9),
(2, 'SPSEG00001-002', 'Prueba de datos inicial', '2016-08-19 07:42:59', 3, 1, 'Este uy ', 9),
(3, 'SPSEG00002-003', 'pedido para estado', '2016-08-22 01:23:59', 2, 2, 'esto se debe hacer:\r\n1)\r\n2)', 10),
(4, 'SPSEG00004-004', 'ref', '2016-08-22 01:24:39', 2, 4, 'asd', 2),
(5, 'SPSEG00005-005', 'nuevo accion de seguimiento con datos', '2016-08-22 05:00:17', 2, 5, 'Requerido', 10),
(6, 'SPSEG00005-006', 'datos e informacion', '2016-08-22 05:13:36', 6, 5, 'requerido', 10),
(7, 'SPSEG00005-007', 'ref', '2016-08-22 14:00:36', 2, 5, ' ', 10),
(8, 'SPSEG00007-008', 'nuevo segumiento', '2016-08-22 06:27:20', 2, 7, ' ', 2),
(9, 'SPSEG00009-009', 'sasdas', '2016-08-22 13:44:20', 6, 9, ' ', 2),
(10, 'SPSEG00009-010', 'vvvvvvvvvvvvvv', '2016-08-22 14:38:37', 6, 9, ' ', 2),
(11, 'SPSEG00009-011', 'adalskdasldañslkdñ', '2016-08-22 14:45:05', 6, 9, ' ', 2),
(12, 'SPSEG00009-012', 'seguimiento 22.08', '2016-08-22 14:46:45', 6, 9, ' ', 2),
(13, 'SPSEG00009-013', 'Presentqar ley.\r\n', '2016-08-22 20:17:14', 6, 9, ' ', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion_solicitud`
--

CREATE TABLE IF NOT EXISTS `accion_solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `institucion_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `respuesta` varchar(2000) NOT NULL,
  `link_adjunto` varchar(255) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `observacion` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fk_accion_sol1_idx` (`accion_id`),
  KEY `fk_accion_sol2_idx` (`institucion_id`),
  KEY `fk_accion_sol3_idx` (`estado_id`),
  KEY `fk_accion_sol4_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='			' AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `accion_solicitud`
--

INSERT INTO `accion_solicitud` (`id`, `accion_id`, `institucion_id`, `fecha`, `respuesta`, `link_adjunto`, `estado_id`, `user_id`, `observacion`) VALUES
(17, 6, 1, '2016-08-22 05:13:35', ' ', '1471842815_pendientessiplus.xlsx', 10, 7, ''),
(18, 7, 1, '2016-08-22 14:00:36', ' respiesta 1', '1471874436_', 10, 7, ''),
(19, 8, 1, '2016-08-22 06:27:20', '', '', 1, 7, ''),
(16, 5, 1, '2016-08-22 05:00:16', ' la respuesta', '1471842016_comunicaciã³n-noemi.doc', 10, 7, ''),
(14, 3, 1, '2016-08-22 01:23:58', ' ', '1471829038_', 10, 7, ''),
(15, 4, 1, '2016-08-22 01:24:39', '', '', 1, 7, ''),
(13, 2, 1, '2016-08-19 07:38:23', ' esta es la respuesta de estadop', '1471592303_eletricidad-ago-2016.pdf', 3, 7, 'aprobado'),
(12, 1, 1, '2016-08-17 07:38:55', ' test', '1471419535_informeproyectodemodernizacion.pdf', 3, 7, 'aprobado'),
(20, 13, 1, '2016-08-22 20:10:22', ' respuesta 1', '1471896622_', 3, 7, 'aprobado');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `adjuntos_accions`
--

INSERT INTO `adjuntos_accions` (`id`, `accion_id`, `link`) VALUES
(1, 6, '1471842781_prueba-final-estadistica.docx'),
(2, 7, '1471845594_'),
(3, 8, '1471847240_pendientessiplus.xlsx'),
(4, 9, '1471873461_'),
(5, 10, '1471876717_'),
(6, 11, '1471877107_'),
(7, 12, '1471877205_'),
(8, 13, '1471896092_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_consolidados`
--

CREATE TABLE IF NOT EXISTS `adjuntos_consolidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consolidado_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adj_consolidados_idx` (`consolidado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `adjuntos_consolidados`
--

INSERT INTO `adjuntos_consolidados` (`id`, `consolidado_id`, `link`) VALUES
(1, 1, '1471585556_presentacion.pdf'),
(10, 1, '1471591120_eletricidad-ago-2016.pdf'),
(11, 1, '1471591226_1801-convocatoriagestorculturalfebrero2016.pdf'),
(12, 5, '1471592488_eletricidad-ago-2016.pdf'),
(13, 5, '1471592579_monografiacamilo.pdf'),
(14, 6, '1471897035_observaciones-8-de-agosto-onu.docx');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `adjuntos_recomendacions`
--

INSERT INTO `adjuntos_recomendacions` (`id`, `recomendacion_id`, `link`) VALUES
(1, 2, '1471419133_informeproyectodemodernizacion.pdf'),
(2, 3, '1471818158_comprobante.pdf'),
(3, 4, '1471820668_2016-08-21-183649-añadir-recomendacion.png'),
(4, 5, '1471841941_monografiacamilo.docx'),
(5, 6, '1471847089_'),
(6, 7, '1471847113_'),
(7, 8, '1471848842_debug.log'),
(8, 9, '1471873059_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_solicitud_respuestas`
--

CREATE TABLE IF NOT EXISTS `adjuntos_solicitud_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud_respuesta_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_solicitud_respuestas_1_idx` (`solicitud_respuesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `visto_bueno_fisico` int(11) NOT NULL,
  `accion_id` int(11) NOT NULL,
  `razon` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fk_Autorizaciones_1_idx` (`usuario_id`),
  KEY `fk_Autorizaciones_3_idx` (`estado_id`),
  KEY `FK_Acciones_autorizacion` (`accion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `autorizacions`
--

INSERT INTO `autorizacions` (`id`, `usuario_id`, `estado_id`, `fecha_modificacion`, `visto_bueno_fisico`, `accion_id`, `razon`) VALUES
(1, 1, 1, '2016-08-17 07:38:55', 0, 1, ''),
(2, 2, 3, '2016-08-19 05:45:55', 0, 1, ''),
(3, 6, 1, '2016-08-17 07:38:55', 0, 1, ''),
(4, 8, 3, '2016-08-19 06:30:07', 0, 1, ''),
(5, 3, 3, '2016-08-19 07:34:27', 0, 1, ''),
(6, 1, 1, '2016-08-19 07:38:23', 0, 2, ''),
(7, 2, 1, '2016-08-19 07:38:23', 0, 2, ''),
(8, 6, 3, '2016-08-19 07:41:27', 0, 2, ''),
(9, 8, 3, '2016-08-19 07:42:00', 0, 2, ''),
(10, 3, 3, '2016-08-19 07:42:59', 0, 2, ''),
(11, 1, 1, '2016-08-22 01:23:59', 0, 3, ''),
(12, 2, 1, '2016-08-22 01:23:59', 0, 3, ''),
(13, 6, 1, '2016-08-22 01:23:59', 0, 3, ''),
(14, 1, 1, '2016-08-22 05:00:16', 0, 5, ''),
(15, 2, 1, '2016-08-22 05:00:16', 0, 5, ''),
(16, 6, 1, '2016-08-22 05:00:16', 0, 5, ''),
(17, 1, 1, '2016-08-22 05:13:35', 0, 6, ''),
(18, 2, 1, '2016-08-22 05:13:36', 0, 6, ''),
(19, 6, 1, '2016-08-22 05:13:36', 0, 6, ''),
(20, 1, 1, '2016-08-22 14:00:33', 0, 7, ''),
(21, 2, 1, '2016-08-22 14:00:35', 0, 7, ''),
(22, 6, 1, '2016-08-22 14:00:35', 0, 7, ''),
(23, 1, 1, '2016-08-22 14:00:36', 0, 7, ''),
(24, 2, 1, '2016-08-22 14:00:36', 0, 7, ''),
(25, 6, 1, '2016-08-22 14:00:36', 0, 7, ''),
(26, 1, 1, '2016-08-22 20:10:23', 0, 13, ''),
(27, 2, 1, '2016-08-22 20:10:25', 0, 13, ''),
(28, 6, 3, '2016-08-22 20:17:14', 0, 13, ''),
(29, 8, 1, '2016-08-22 20:17:15', 0, 13, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolidados`
--

CREATE TABLE IF NOT EXISTS `consolidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `texto_consolidado` varchar(2500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha_consolidado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consolidado_1_idx` (`accion_id`),
  KEY `fk_consolidado_2_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `consolidados`
--

INSERT INTO `consolidados` (`id`, `accion_id`, `texto_consolidado`, `user_id`, `fecha_consolidado`) VALUES
(1, 1, ' Este es el consolidado fin  asd revisado por cancilleria ok', 3, '2016-08-19 07:34:27'),
(5, 2, ' este es el consolidado final no me gusta pero esta bien de todos modos , puede ser pero agreguemos un archivo mas', 3, '2016-08-19 07:42:59'),
(6, 13, '  respuesta 1', 6, '2016-08-22 20:17:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derechos`
--

CREATE TABLE IF NOT EXISTS `derechos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `derechos`
--

INSERT INTO `derechos` (`id`, `descripcion`) VALUES
(1, 'Promoción de derechos humanos'),
(2, 'No discriminación'),
(3, 'Igualdad'),
(4, 'Desarrrollo '),
(5, 'Trabajo'),
(6, 'A una vida libre de violencia'),
(7, 'A no ser sometido a trabajo infantil'),
(8, 'A no ser sometido a escalvitud y servidumbre'),
(9, 'Salud sexual y reproductiva'),
(10, 'Educación'),
(11, 'Vivienda adecuada'),
(12, 'Datos estadísticos'),
(13, 'Alimentación adecuada'),
(14, 'Salud'),
(15, 'Igualdad de género'),
(16, 'Propiedad privada'),
(17, 'Seguridad Social'),
(18, 'Tierra y territorio'),
(19, 'Cultura'),
(20, 'Informes de Estado a los mecanismos de protección de derechos humanos'),
(21, 'A no ser sometido a deportación arbitraria'),
(22, 'A no ser sometido a explotación, pornografía y abuso sexual'),
(23, 'A no ser sometido a tortura y otros tratos o penas crueles, inhumanos o degradantes'),
(24, 'A ser registrado, al nombre y a la nacionalidad'),
(25, 'A una vida libre de trata y tráfico'),
(26, 'Acceso a la justicia'),
(27, 'Agua'),
(28, 'Autodeterminación'),
(29, 'Consulta previa, libre e informada'),
(30, 'Debido proceso'),
(31, 'Dignidad'),
(32, 'Identidad'),
(33, 'Integridad personal'),
(34, 'Interés superior del niño/a'),
(35, 'Libertad de asociación y reunión pacífica'),
(36, 'Libertad de circulación y residencia'),
(37, 'Libertad de expresión, opinión e información'),
(38, 'Libertad de pensamiento, conciencia y religión'),
(39, 'Libertad y seguridad personal'),
(40, 'Familia'),
(41, 'Medio ambiente'),
(42, 'Participación'),
(43, 'Personalidad jurídica'),
(44, 'Privacidad'),
(45, 'Reducción de la pobreza'),
(46, 'Refugio'),
(47, 'Salubridad'),
(48, 'Servicios básicos'),
(49, 'Servicios públicos'),
(50, 'Vida'),
(51, 'Instrumentos internacionales'),
(52, 'Mecanismos de protección de derechos humanos'),
(53, 'Asilo'),
(54, 'General'),
(55, 'Matrimonio'),
(56, 'Consulta'),
(57, 'Derechos Políticos');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `derecho_recomendacion`
--

INSERT INTO `derecho_recomendacion` (`id`, `derecho_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(9, 'Publicado'),
(10, 'Solicitud Respondida');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `indicadors`
--

INSERT INTO `indicadors` (`id`, `nombre`, `link`) VALUES
(1, 'Porcentaje de mujeres que habiendo sido sometidas  algún tipo de violencia de pareja o ex pareja lo han denunciado', 'http://www.ine.gob.bo/indicadoresddhh/viole2.asp'),
(2, 'Porcentaje de ingreso regular en la ocupación principal de mujeres en relación a hombres', 'http://www.ine.gob.bo/indicadoresddhh/traba11.asp'),
(3, 'Proporción de hogares cubiertos con vivienda social', 'http://www.ine.gob.bo/indicadoresddhh/vivi9.asp'),
(4, 'Porcentaje de niñas y niños menores de 2 años que consumen el Alimento Complementario (CHISPITAS).', 'http://www.ine.gob.bo/indicadoresddhh/alim9.asp'),
(5, 'Porcentaje de niñas y niños menores de 2 años que consumen el Alimento Complementario (NUTRIBEBE)', 'http://www.ine.gob.bo/indicadoresddhh/alim11.asp'),
(6, 'Porcentaje de niños y niñas que reciben Lactancia materna exclusiva, en menores de dos años.', 'http://www.ine.gob.bo/indicadoresddhh/alim8.asp'),
(7, 'Porcentaje de municipios que cuentan con una Unidad de Nutrición Integral Funcionando.', 'http://www.ine.gob.bo/indicadoresddhh/alim19.asp'),
(8, 'Prevalencia de anemia en menores de cinco años.', 'http://www.ine.gob.bo/indicadoresddhh/alim21.asp'),
(9, 'Prevalencia de desnutrición crónica en niños menores de 2 años.', 'http://www.ine.gob.bo/indicadoresddhh/alim10.asp'),
(10, 'Proporción de sobre peso y obesidad en niños, niñas menores de 5 años, de 6 a 11 años y de 12 a 18 años. (Infancia, niñez y adolescencia).', 'http://www.ine.gob.bo/indicadoresddhh/alim26.asp'),
(11, 'Porcentaje de niños con bajo peso al nacer.', 'http://www.ine.gob.bo/indicadoresddhh/alim17.asp'),
(12, 'Porcentaje de municipios de alta vulnerabilidad a la inseguridad alimentaria.', 'http://www.ine.gob.bo/indicadoresddhh/alim27.asp'),
(13, 'Proporción de la población con inseguridad alimentaria.', 'http://www.ine.gob.bo/indicadoresddhh/alim3.asp'),
(14, 'Disponibilidad per cápita de alimentos estratégicos de consumo local.', 'http://www.ine.gob.bo/indicadoresddhh/alim24.asp'),
(15, 'Porcentaje de muestras de alimentos libre de contaminación química, físicos, biológicos, metales pesados y pesticidas.', 'http://www.ine.gob.bo/indicadoresddhh/alim18.asp'),
(16, 'Número de municipios con servicios de apoyo a la producción', 'http://www.ine.gob.bo/indicadoresddhh/alim14.asp'),
(17, 'Proporción del gasto público en salud del presupuesto nacional .Gasto público en  salud como  porcentaje del PIB,\r\n(INE, Ministerio de Economía y Finanzas)\r\n', 'http://www.ine.gob.bo/indicadoresddhh/salu8.asp'),
(18, 'Gasto Publico per cápita de salud (En $us.)', 'http://www.ine.gob.bo/indicadoresddhh/salu12.asp'),
(19, 'Cobertura de parto institucional (CPI) ', 'http://www.ine.gob.bo/indicadoresddhh/salu8.asp'),
(20, 'Razón de mortalidad materna ', 'http://www.ine.gob.bo/indicadoresddhh/salu5.asp'),
(21, 'Cobertura de la seguridad social de corto plazo Porcentaje de la población cubierta por algún seguro de salud', 'http://www.ine.gob.bo/indicadoresddhh/salu22.asp'),
(22, 'Porcentaje de niños y niñas menores a 2 años beneficiarios del Bono Juana Azurduy.', 'http://www.ine.gob.bo/indicadoresddhh/alim13.asp'),
(23, 'Porcentaje de Mujeres GESTANTES beneficiarias del Bono Juana Azurduy.', 'http://www.ine.gob.bo/indicadoresddhh/alim15.asp'),
(24, 'Proporción de hogares cubiertos con vivienda social.', 'http://www.ine.gob.bo/indicadoresddhh/vivi9.asp'),
(25, 'Proporción de viviendas en proceso de mejoramiento y ampliación.', 'http://www.ine.gob.bo/indicadoresddhh/vivi11.asp'),
(26, 'Calidad de la vivienda.', 'http://www.ine.gob.bo/indicadoresddhh/vivi21.asp'),
(27, 'Porcentaje de viviendas que disponen de servicio sanitario.', 'http://www.ine.gob.bo/indicadoresddhh/vivi18.asp'),
(28, 'Porcentaje de Viviendas con Disponibilidad de energía eléctrica.', 'http://www.ine.gob.bo/indicadoresddhh/vivi19.asp'),
(29, 'Viviendas por disponibilidad de servicio telefónico fijo.', 'http://www.ine.gob.bo/indicadoresddhh/vivi22.asp'),
(30, 'Proporción de solicitudes de vivienda social aprobadas.', 'http://www.ine.gob.bo/indicadoresddhh/vivi15.asp'),
(31, 'Proporción de hogares/ que reciben subvención en vivienda social', 'http://www.ine.gob.bo/indicadoresddhh/vivi16.asp'),
(32, 'Número de viviendas sociales construidas', 'http://www.ine.gob.bo/indicadoresddhh/vivi20.asp'),
(33, 'Número de  familias beneficiadas  con  vivienda sociales', 'http://www.ine.gob.bo/indicadoresddhh/vivi23.asp'),
(34, 'Proporción de viviendas sociales construidas con relación al déficit habitacional.', 'http://www.ine.gob.bo/indicadoresddhh/vivi24.asp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucions`
--

CREATE TABLE IF NOT EXISTS `institucions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `Grupo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `institucions`
--

INSERT INTO `institucions` (`id`, `descripcion`, `Grupo`) VALUES
(1, 'Estado', 'OTRAS INSTITUCIONES'),
(2, 'Órgano Ejecutivo', 'OTRAS INSTITUCIONES'),
(3, 'Órgano Legislativo', 'OTRAS INSTITUCIONES'),
(4, 'Órgano Judicial', 'OTRAS INSTITUCIONES'),
(5, 'Fuerzas Armadas', 'OTRAS INSTITUCIONES'),
(6, 'Policía', 'OTRAS INSTITUCIONES'),
(7, 'Cooperación internacional', 'OTRAS INSTITUCIONES'),
(8, 'Defensoría del Pueblo', 'OTRAS INSTITUCIONES'),
(10, 'Empresas', 'OTRAS INSTITUCIONES'),
(11, 'Gobiernos descentralizados', 'OTRAS INSTITUCIONES'),
(12, 'Medios de comunicación', 'OTRAS INSTITUCIONES'),
(13, 'Ministerio Público', 'ÓRGANO EJECUTIVO'),
(14, 'Movimientos sociales', 'OTRAS INSTITUCIONES'),
(15, 'Naciones Unidas', 'OTRAS INSTITUCIONES'),
(16, 'Oficina del Alto Comisionado de las Naciones Unidas para los Derechos Humanos', 'OTRAS INSTITUCIONES'),
(17, 'Organizaciones cívicas', 'OTRAS INSTITUCIONES'),
(18, 'Organizaciones indígenas', 'OTRAS INSTITUCIONES'),
(19, 'Órgano Electoral', 'OTRAS INSTITUCIONES'),
(20, 'Partidos políticos', 'OTRAS INSTITUCIONES'),
(21, 'Sistema de educación', 'OTRAS INSTITUCIONES'),
(22, 'Sociedad civil', 'OTRAS INSTITUCIONES'),
(23, 'General', 'OTRAS INSTITUCIONES'),
(24, 'Periodistas y comunicadores', 'OTRAS INSTITUCIONES'),
(25, 'Sector Privado', 'OTRAS INSTITUCIONES'),
(26, 'Ministerio de Justicia', 'ÓRGANO EJECUTIVO'),
(27, 'Procuraduria', 'OTRAS INSTITUCIONES'),
(28, 'Cancilleria', 'OTRAS INSTITUCIONES'),
(29, 'Tribunal Supremo de Justicia', 'ÓRGANO JUDICIAL'),
(34, 'Tribunal Constitucional', 'ÓRGANO JUDICIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_recomendacion`
--

CREATE TABLE IF NOT EXISTS `institucion_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `institucion_recomendacion`
--

INSERT INTO `institucion_recomendacion` (`id`, `institucion_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(4, 1, 5),
(5, 1, 7),
(6, 1, 8),
(7, 13, 9),
(8, 34, 9),
(9, 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_solicitudes`
--

CREATE TABLE IF NOT EXISTS `institucion_solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `solicitud_informacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_institucion_solicitudes_2_idx` (`solicitud_informacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanismos`
--

CREATE TABLE IF NOT EXISTS `mecanismos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `Prefijo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mecanismos`
--

INSERT INTO `mecanismos` (`id`, `descripcion`, `Prefijo`) VALUES
(1, 'Órgano de Tratado', 'OT'),
(2, 'Procedimientos Especiales', 'PE'),
(3, 'Examen Periódico Universal (EPU)', 'EPU');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `mecanismo_recomendacion`
--

INSERT INTO `mecanismo_recomendacion` (`id`, `mecanismo_id`, `recomendacion_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 8),
(9, 1, 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `notificacions`
--

INSERT INTO `notificacions` (`id`, `accion_id`, `usuario_id`, `mensaje`, `fecha`, `estado`) VALUES
(1, 1, 7, 'Debe responder a la solicitud:SPSEG00001-001', '2016-08-17 07:37:44', 'pendiente'),
(2, 1, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-001', '2016-08-17 07:38:55', 'pendiente'),
(3, 1, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-001', '2016-08-17 07:38:55', 'pendiente'),
(4, 1, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-001', '2016-08-17 07:38:55', 'pendiente'),
(5, 1, 8, 'debe autorizar la accion con codigo:SPSEG00001-001', '2016-08-19 05:45:56', 'pendiente'),
(6, 1, 3, 'debe autorizar la accion con codigo:SPSEG00001-001', '2016-08-19 06:30:08', 'pendiente'),
(7, 2, 7, 'Debe responder a la solicitud:SPSEG00001-002', '2016-08-19 07:36:52', 'pendiente'),
(8, 2, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-002', '2016-08-19 07:38:23', 'pendiente'),
(9, 2, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-002', '2016-08-19 07:38:23', 'pendiente'),
(10, 2, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00001-002', '2016-08-19 07:38:23', 'pendiente'),
(11, 2, 8, 'debe autorizar la accion con codigo:SPSEG00001-002', '2016-08-19 07:41:27', 'pendiente'),
(12, 2, 3, 'debe autorizar la accion con codigo:SPSEG00001-002', '2016-08-19 07:42:00', 'pendiente'),
(13, 3, 7, 'Debe responder a la solicitud:SPSEG00002-003', '2016-08-21 16:40:56', 'pendiente'),
(14, 3, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00002-003', '2016-08-22 01:23:59', 'pendiente'),
(15, 3, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00002-003', '2016-08-22 01:23:59', 'pendiente'),
(16, 3, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00002-003', '2016-08-22 01:23:59', 'pendiente'),
(17, 4, 7, 'Debe responder a la solicitud:SPSEG00004-004', '2016-08-22 01:24:39', 'pendiente'),
(18, 5, 7, 'Debe responder a la solicitud:SPSEG00005-005', '2016-08-22 04:59:37', 'pendiente'),
(19, 5, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-005', '2016-08-22 05:00:16', 'pendiente'),
(20, 5, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-005', '2016-08-22 05:00:16', 'pendiente'),
(21, 5, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-005', '2016-08-22 05:00:17', 'pendiente'),
(22, 6, 7, 'Debe responder a la solicitud:SPSEG00005-006', '2016-08-22 05:13:01', 'pendiente'),
(23, 6, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-006', '2016-08-22 05:13:36', 'pendiente'),
(24, 6, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-006', '2016-08-22 05:13:36', 'pendiente'),
(25, 6, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-006', '2016-08-22 05:13:36', 'pendiente'),
(26, 7, 7, 'Debe responder a la solicitud:SPSEG00005-007', '2016-08-22 05:59:54', 'pendiente'),
(27, 8, 7, 'Debe responder a la solicitud:SPSEG00007-008', '2016-08-22 06:27:20', 'pendiente'),
(28, 7, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:34', 'pendiente'),
(29, 7, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:35', 'pendiente'),
(30, 7, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:35', 'pendiente'),
(31, 7, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:36', 'pendiente'),
(32, 7, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:36', 'pendiente'),
(33, 7, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00005-007', '2016-08-22 14:00:36', 'pendiente'),
(34, 13, 7, 'Debe responder a la solicitud:SPSEG00009-013', '2016-08-22 20:01:32', 'pendiente'),
(35, 13, 1, 'Solicitudes respondidas, favor revisar accion:SPSEG00009-013', '2016-08-22 20:10:24', 'pendiente'),
(36, 13, 2, 'Solicitudes respondidas, favor revisar accion:SPSEG00009-013', '2016-08-22 20:10:25', 'pendiente'),
(37, 13, 6, 'Solicitudes respondidas, favor revisar accion:SPSEG00009-013', '2016-08-22 20:10:25', 'pendiente'),
(38, 13, 8, 'debe autorizar la accion con codigo:SPSEG00009-013', '2016-08-22 20:17:15', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacions`
--

CREATE TABLE IF NOT EXISTS `poblacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `poblacions`
--

INSERT INTO `poblacions` (`id`, `descripcion`) VALUES
(1, 'General'),
(2, 'Mujeres'),
(3, 'Niñas, niños y adolescentes'),
(4, 'Naciones y pueblos indígena originario y campesinos'),
(5, 'Personas adultas mayores'),
(6, 'Comunidad afroboliviana'),
(7, 'Defensores/as de derechos humanos'),
(8, 'Funcionarios/as del Estado'),
(9, 'Periodistas y comunicadores'),
(10, 'Personas con diferente orientación sexual y de identidad de género '),
(11, 'Personas con discapacidad'),
(12, 'Personas extranjeras'),
(13, 'Personas migrantes y sus familiares'),
(14, 'Personas privadas de libertad'),
(15, 'Refugiados/as'),
(16, 'Pueblos Indígenas');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `poblacion_recomendacion`
--

INSERT INTO `poblacion_recomendacion` (`id`, `recomendacion_id`, `poblacion_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacions`
--

CREATE TABLE IF NOT EXISTS `recomendacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(3000) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Recomendacions_1_idx` (`usuario_id`),
  KEY `fk_Recomendacions_2_idx` (`estado_id`),
  KEY `codigo` (`codigo`),
  FULLTEXT KEY `index5` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `recomendacions`
--

INSERT INTO `recomendacions` (`id`, `descripcion`, `fecha_creacion`, `fecha_modificacion`, `usuario_id`, `estado_id`, `codigo`) VALUES
(1, 'Recomendacion de prueba', '2016-08-12 03:00:08', '2016-08-12 03:00:08', 2, 1, 'SPREC00001'),
(2, 'Recomendacion prueba', '2016-08-17 07:32:12', '2016-08-17 07:32:12', 6, 1, 'SPREC00002'),
(3, 'recomendaciones', '2016-08-21 22:22:38', '2016-08-21 22:22:38', 2, 9, 'SPREC00003'),
(4, 'desc', '2016-08-21 23:04:27', '2016-08-21 23:04:27', 2, 9, 'SPREC00004'),
(5, 'recomendacion de prueba cona djunto', '2016-08-22 04:59:01', '2016-08-22 04:59:01', 2, 9, 'SPREC00005'),
(6, 'descripcion de nueva recomendacion', '2016-08-22 06:24:48', '2016-08-22 06:24:48', 2, 1, 'SPREC00006'),
(7, 'nueva recomendacion', '2016-08-22 06:25:13', '2016-08-22 06:25:13', 2, 1, 'SPREC00007'),
(8, 'prueba', '2016-08-22 06:53:58', '2016-08-22 06:53:58', 2, 1, 'SPREC00008'),
(9, 'prueba 22/8', '2016-08-22 13:37:33', '2016-08-22 13:37:33', 6, 9, 'SPREC00009');

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
(1, 'iniciador_min_justicia', 26),
(2, 'ejecutor_min_justicia', 26),
(3, 'iniciador/ejecutor_min_justicia', 26),
(4, 'aprobador_cancilleria', 28),
(5, 'aprobador_estado', 1),
(6, 'aprobador_procuraduria', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_pendientes_respuestas`
--

CREATE TABLE IF NOT EXISTS `solicitudes_pendientes_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `solicitud_informacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitudes_pendientes_respuestas_1_idx` (`usuario_id`),
  KEY `fk_solicitudes_pendientes_respuestas_2_idx` (`estado_id`),
  KEY `fk_solicitudes_pendientes_respuestas_3_idx` (`solicitud_informacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_informacions`
--

CREATE TABLE IF NOT EXISTS `solicitud_informacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitud_informacions_1_idx` (`usuario_id`),
  KEY `fk_solicitud_informacions_2_idx` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `solicitud_informacions`
--

INSERT INTO `solicitud_informacions` (`id`, `codigo`, `descripcion`, `fecha_modificacion`, `usuario_id`, `estado_id`) VALUES
(8, 'SPSOL00001', 'nueva prueba de solicitud de informacion', '2016-08-04 08:55:23', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_respuestas`
--

CREATE TABLE IF NOT EXISTS `solicitud_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud_informacion_id` int(11) NOT NULL,
  `respuesta` varchar(2500) NOT NULL,
  `fecha_respuesta` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitud_respuestas_1_idx` (`solicitud_informacion_id`),
  KEY `fk_solicitud_respuestas_2_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `solicitud_respuestas`
--

INSERT INTO `solicitud_respuestas` (`id`, `solicitud_informacion_id`, `respuesta`, `fecha_respuesta`, `usuario_id`) VALUES
(10, 8, 'asdasd', '2016-08-04 10:15:28', 2);

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
(6, 'iniciador_aprobador_min_justicia', '$2y$10$EvhYWhjUkyobfElzgLDNGeeT3ahzp7R2clNL6XfQI1vLxiV/WqD72', '2016-08-01 14:38:00', '2016-08-01 14:38:00', 3),
(7, 'aprobador_estado', '$2y$10$evJ..iXd3VJnyh/IzwtJzO.bo4y1To2RrFagrE9W2EwAJICai.pBC', '2016-08-01 15:04:00', '2016-08-01 15:04:00', 5),
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
  ADD CONSTRAINT `fk_Accions_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_accions_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_accions`
--
ALTER TABLE `adjuntos_accions`
  ADD CONSTRAINT `fk_adjuntos_accions_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_consolidados`
--
ALTER TABLE `adjuntos_consolidados`
  ADD CONSTRAINT `fk_consolidado_adjunto_1` FOREIGN KEY (`consolidado_id`) REFERENCES `consolidados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_recomendacions`
--
ALTER TABLE `adjuntos_recomendacions`
  ADD CONSTRAINT `fk_adjuntos_recomendacions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adjuntos_solicitud_respuestas`
--
ALTER TABLE `adjuntos_solicitud_respuestas`
  ADD CONSTRAINT `fk_adjuntos_solicitud_respuestas_1` FOREIGN KEY (`solicitud_respuesta_id`) REFERENCES `solicitud_respuestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Filtros para la tabla `consolidados`
--
ALTER TABLE `consolidados`
  ADD CONSTRAINT `fk_consolidado_accion_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Filtros para la tabla `institucion_solicitudes`
--
ALTER TABLE `institucion_solicitudes`
  ADD CONSTRAINT `fk_institucion_solicitudes_2` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Filtros para la tabla `solicitudes_pendientes_respuestas`
--
ALTER TABLE `solicitudes_pendientes_respuestas`
  ADD CONSTRAINT `fk_solicitudes_pendientes_respuestas_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudes_pendientes_respuestas_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudes_pendientes_respuestas_3` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_informacions`
--
ALTER TABLE `solicitud_informacions`
  ADD CONSTRAINT `fk_solicitud_informacions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitud_informacions_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_respuestas`
--
ALTER TABLE `solicitud_respuestas`
  ADD CONSTRAINT `fk_solicitud_respuestas_1` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitud_respuestas_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
