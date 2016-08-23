-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: SIPLUS
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accions`
--

DROP TABLE IF EXISTS `accions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accions` (
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
  KEY `codigo` (`codigo`),
  CONSTRAINT `fk_Accions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Accions_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accions`
--

LOCK TABLES `accions` WRITE;
/*!40000 ALTER TABLE `accions` DISABLE KEYS */;
INSERT INTO `accions` VALUES (1,'SPSEG00001-001','(1)	\r\n114. Se avanza en la despatriarcalizacion del Estado, las políticas, la gestión pública y la redistribución de los recursos, esto permitió un avance cualitativo en el diseño y concepción de políticas públicas, reflejado en el Plan Nacional para la Igualdad de Oportunidades – Mujeres Construyendo la Nueva Bolivia para Vivir Bien.\r\n\r\n115. Este Plan, continúa en ejecución a través del Programa de Patrimonio Productivo y Ciudadanía para Mujeres en extrema pobreza, denominado Programa Semilla, que favorece el desarrollo económico y social de las mujeres en el área rural mediante el acceso a recursos productivos, bienes de capital, articulación del mercado y asistencia técnica. Hasta el momento se beneficiaron 978 unidades económicas rurales; 3.753 mujeres lograron su\r\nautonomía económica y el ejercicio de sus derechos ciudadanos y 2.553 recibieron asistencia técnica y capital para iniciar y fortalecer sus emprendimientos productivos en 18 municipios priorizados del país.\r\n\r\n116. La pa','2016-08-01 16:31:40',6,1,'Programa de despatriarcalización del Estado.'),(2,'SPSEG00001-002','114. Se avanza en la despatriarcalizacion del Estado, las políticas, la gestión pública y la redistribución de los recursos, esto permitió un avance cualitativo en el diseño y concepción de políticas públicas, reflejado en el Plan Nacional para la Igualdad de Oportunidades – Mujeres Construyendo la Nueva Bolivia para Vivir Bien.\r\n\r\n115. Este Plan, continúa en ejecución a través del Programa de Patrimonio Productivo y Ciudadanía para Mujeres en extrema pobreza, denominado Programa Semilla, que favorece el desarrollo económico y social de las mujeres en el área rural mediante el acceso a recursos productivos, bienes de capital, articulación del mercado y asistencia técnica. Hasta el momento se beneficiaron 978 unidades económicas rurales; 3.753 mujeres lograron su autonomía económica y el ejercicio de sus derechos ciudadanos y 2.553 recibieron asistencia técnica y capital para iniciar y fortalecer sus emprendimientos productivos en 18 municipios priorizados del país.\r\n\r\n116. La paridad y','2016-08-01 16:56:09',2,1,'Programa de despatriarcalizacion\r\nDireccion de Seguimiento'),(3,'SPSEG00003-002','una prueba de seguimiento para el min de salud','2016-08-04 20:00:33',2,3,'el min de salud debe revisar esto'),(4,'SPSEG00003-002','otra para el min de salud','2016-08-04 20:12:22',8,3,'salud'),(5,'SPSEG00004-002','descripcion de salud','2016-08-04 20:20:36',7,4,'este listado lo hace salud'),(6,'SPSEG00005-002','esto se llena por salud','2016-08-04 20:26:44',7,5,'salud1'),(7,'SPSEG00006-002','descripcion','2016-08-04 20:31:31',7,6,'Listado'),(8,'SPSEG00007-002','segumiento ultimo','2016-08-04 20:44:51',6,7,'asd123'),(9,'SPSEG00008-002','y vamos con el seguimiento nuevo','2016-08-04 20:47:14',6,8,'lista123'),(10,'SPSEG00009-002','otro segumiento para el demo','2016-08-04 20:55:04',6,9,'demo'),(11,'SPSEG00010-002','segumiento 1','2016-08-04 21:02:31',6,10,'listado 1');
/*!40000 ALTER TABLE `accions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos_accions`
--

DROP TABLE IF EXISTS `adjuntos_accions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos_accions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_accions_1_idx` (`accion_id`),
  CONSTRAINT `fk_adjuntos_accions_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_accions`
--

LOCK TABLES `adjuntos_accions` WRITE;
/*!40000 ALTER TABLE `adjuntos_accions` DISABLE KEYS */;
INSERT INTO `adjuntos_accions` VALUES (1,2,'1470070572_primer-informe-del-grupo-de-trabajo-sobre-el-epu-de-bolivia-marzo-2010.pdf'),(2,3,'1470340833_reunión-siplus-010816.pdf'),(3,4,'1470341542_reunión-siplus-010816.pdf'),(4,5,'1470342037_reunión-siplus-010816.pdf'),(5,6,'1470342405_reunión-siplus-010816.pdf'),(6,7,'1470342692_reunión-siplus-010816.pdf'),(7,8,'1470343492_reunión-siplus-010816.pdf'),(8,9,'1470343634_reunión-siplus-010816.pdf'),(9,10,'1470344104_reunión-siplus-010816.pdf'),(10,11,'1470344552_reunión-siplus-010816.pdf');
/*!40000 ALTER TABLE `adjuntos_accions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos_recomendacions`
--

DROP TABLE IF EXISTS `adjuntos_recomendacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos_recomendacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_recomendacions_1_idx` (`recomendacion_id`),
  CONSTRAINT `fk_adjuntos_recomendacions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_recomendacions`
--

LOCK TABLES `adjuntos_recomendacions` WRITE;
/*!40000 ALTER TABLE `adjuntos_recomendacions` DISABLE KEYS */;
INSERT INTO `adjuntos_recomendacions` VALUES (1,1,'1470068801_propuesta-productos-florida-v1.0.docx'),(2,2,'1470079124_'),(3,3,'1470340773_reunión-siplus-010816.pdf'),(4,4,'1470341916_reunión-siplus-010816.pdf'),(5,5,'1470342247_reunión-siplus-010816.pdf'),(6,6,'1470342650_reunión-siplus-010816.pdf'),(7,7,'1470343439_reunión-siplus-010816.pdf'),(8,8,'1470343601_reunión-siplus-010816.pdf'),(9,9,'1470344085_reunión-siplus-010816.pdf'),(10,10,'1470344523_reunión-siplus-010816.pdf');
/*!40000 ALTER TABLE `adjuntos_recomendacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos_solicitud_respuestas`
--

DROP TABLE IF EXISTS `adjuntos_solicitud_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos_solicitud_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud_respuesta_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_solicitud_respuestas_1_idx` (`solicitud_respuesta_id`),
  CONSTRAINT `fk_adjuntos_solicitud_respuestas_1` FOREIGN KEY (`solicitud_respuesta_id`) REFERENCES `solicitud_respuestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_solicitud_respuestas`
--

LOCK TABLES `adjuntos_solicitud_respuestas` WRITE;
/*!40000 ALTER TABLE `adjuntos_solicitud_respuestas` DISABLE KEYS */;
INSERT INTO `adjuntos_solicitud_respuestas` VALUES (1,10,'1470305728_reunión-siplus-010816.pdf');
/*!40000 ALTER TABLE `adjuntos_solicitud_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos_versions`
--

DROP TABLE IF EXISTS `adjuntos_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos_versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adjuntos_versions_1_idx` (`version_id`),
  CONSTRAINT `fk_adjuntos_versions_1` FOREIGN KEY (`version_id`) REFERENCES `versions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_versions`
--

LOCK TABLES `adjuntos_versions` WRITE;
/*!40000 ALTER TABLE `adjuntos_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `adjuntos_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autorizacions`
--

DROP TABLE IF EXISTS `autorizacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autorizacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `visto_bueno_fisico` bit(1) NOT NULL,
  `accion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Autorizaciones_1_idx` (`usuario_id`),
  KEY `fk_Autorizaciones_3_idx` (`estado_id`),
  KEY `FK_Acciones_autorizacion` (`accion_id`),
  CONSTRAINT `FK_Acciones_autorizacion` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`),
  CONSTRAINT `fk_Autorizaciones_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Autorizaciones_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorizacions`
--

LOCK TABLES `autorizacions` WRITE;
/*!40000 ALTER TABLE `autorizacions` DISABLE KEYS */;
INSERT INTO `autorizacions` VALUES (12,1,1,'2016-08-04 20:12:22','',4),(13,2,1,'2016-08-04 20:12:22','',4),(14,4,1,'2016-08-04 20:12:22','',4),(15,5,1,'2016-08-04 20:12:22','',4),(16,6,1,'2016-08-04 20:12:22','',4),(17,1,1,'2016-08-04 20:20:36','',5),(18,2,1,'2016-08-04 20:20:36','',5),(19,4,1,'2016-08-04 20:20:36','',5),(20,5,1,'2016-08-04 20:20:36','',5),(21,6,1,'2016-08-04 20:20:36','',5),(22,8,1,'2016-08-04 20:22:54','',5),(23,1,1,'2016-08-04 20:26:44','',6),(24,2,1,'2016-08-04 20:26:44','',6),(25,4,1,'2016-08-04 20:26:44','',6),(26,5,1,'2016-08-04 20:26:44','',6),(27,6,1,'2016-08-04 20:26:44','',6),(28,8,1,'2016-08-04 20:29:24','',6),(29,1,1,'2016-08-04 20:31:31','',7),(30,2,1,'2016-08-04 20:31:31','',7),(31,4,1,'2016-08-04 20:31:32','',7),(32,5,1,'2016-08-04 20:31:32','',7),(33,6,1,'2016-08-04 20:31:32','',7),(34,8,3,'2016-08-04 20:31:58','',7),(35,1,1,'2016-08-04 20:44:52','',8),(36,2,1,'2016-08-04 20:44:52','',8),(37,4,1,'2016-08-04 20:44:52','',8),(38,5,1,'2016-08-04 20:44:52','',8),(39,6,1,'2016-08-04 20:44:52','',8),(40,8,1,'2016-08-04 20:45:22','',8),(41,3,3,'2016-08-04 20:45:22','',8),(42,1,1,'2016-08-04 20:47:14','',9),(43,2,1,'2016-08-04 20:47:14','',9),(44,4,1,'2016-08-04 20:47:14','',9),(45,5,1,'2016-08-04 20:47:14','',9),(46,6,1,'2016-08-04 20:47:14','',9),(47,8,3,'2016-08-04 20:49:02','',9),(48,3,3,'2016-08-04 20:47:42','',9),(49,1,1,'2016-08-04 20:55:04','',10),(50,2,1,'2016-08-04 20:55:04','',10),(51,4,1,'2016-08-04 20:55:04','',10),(52,5,1,'2016-08-04 20:55:04','',10),(53,6,1,'2016-08-04 20:55:04','',10),(54,8,1,'2016-08-04 20:55:11','',10),(55,3,3,'2016-08-04 20:55:11','',10),(56,1,1,'2016-08-04 21:02:31','',11),(57,2,1,'2016-08-04 21:02:31','',11),(58,4,1,'2016-08-04 21:02:31','',11),(59,5,1,'2016-08-04 21:02:31','',11),(60,6,1,'2016-08-04 21:02:31','',11),(61,8,1,'2016-08-04 21:03:01','',11),(62,3,1,'2016-08-04 21:03:01','',11);
/*!40000 ALTER TABLE `autorizacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `derecho_recomendacion`
--

DROP TABLE IF EXISTS `derecho_recomendacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `derecho_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `derecho_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_derecho_recomendacion_1_idx` (`derecho_id`),
  KEY `fk_derecho_recomendacion_2_idx` (`recomendacion_id`),
  CONSTRAINT `fk_derecho_recomendacion_1` FOREIGN KEY (`derecho_id`) REFERENCES `derechos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_derecho_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `derecho_recomendacion`
--

LOCK TABLES `derecho_recomendacion` WRITE;
/*!40000 ALTER TABLE `derecho_recomendacion` DISABLE KEYS */;
INSERT INTO `derecho_recomendacion` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,2,7),(8,1,8),(9,2,9),(10,1,10);
/*!40000 ALTER TABLE `derecho_recomendacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `derechos`
--

DROP TABLE IF EXISTS `derechos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `derechos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `indicador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_derechos_1_idx` (`indicador_id`),
  CONSTRAINT `fk_derechos_1` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `derechos`
--

LOCK TABLES `derechos` WRITE;
/*!40000 ALTER TABLE `derechos` DISABLE KEYS */;
INSERT INTO `derechos` VALUES (1,'Derecho 1',3),(2,'Derecho 2',2),(3,'Derecho 3',1);
/*!40000 ALTER TABLE `derechos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Borrador'),(2,'En Revision'),(3,'Aprobado'),(4,'Rechazado'),(5,'Aprobado 1er Ejecutor'),(6,'Rechazado 1er ejecutor'),(7,'Aprobado 2do ejecutor'),(8,'Rechazado 2do Ejecutor'),(9,'Publicado'),(10,'Solicitud Respondida');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicadores_derechos`
--

DROP TABLE IF EXISTS `indicadores_derechos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicadores_derechos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `derecho_id` int(255) NOT NULL,
  `indicador_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lnk_indicadores_derechos_indicadors` (`indicador_id`),
  KEY `lnk_indicadores_derechos_derechos` (`derecho_id`),
  CONSTRAINT `lnk_indicadores_derechos_derechos` FOREIGN KEY (`derecho_id`) REFERENCES `derechos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `lnk_indicadores_derechos_indicadors` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicadores_derechos`
--

LOCK TABLES `indicadores_derechos` WRITE;
/*!40000 ALTER TABLE `indicadores_derechos` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicadores_derechos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicadors`
--

DROP TABLE IF EXISTS `indicadors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicadors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicadors`
--

LOCK TABLES `indicadors` WRITE;
/*!40000 ALTER TABLE `indicadors` DISABLE KEYS */;
INSERT INTO `indicadors` VALUES (1,'Indicador 1','http://www.ine.gob.bo/indice/indicadores.aspx'),(2,'Indicador 2','http://www.ine.gob.bo/indice/indicadores.aspx'),(3,'Indicador 3','http://www.ine.gob.bo/indice/indicadores.aspx');
/*!40000 ALTER TABLE `indicadors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion_recomendacion`
--

DROP TABLE IF EXISTS `institucion_recomendacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_institucion_recomendacion_1_idx` (`institucion_id`),
  KEY `fk_institucion_recomendacion_2_idx` (`recomendacion_id`),
  CONSTRAINT `fk_institucion_recomendacion_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_institucion_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion_recomendacion`
--

LOCK TABLES `institucion_recomendacion` WRITE;
/*!40000 ALTER TABLE `institucion_recomendacion` DISABLE KEYS */;
INSERT INTO `institucion_recomendacion` VALUES (1,1,1),(2,1,2),(3,3,2),(4,2,3),(5,2,4),(6,2,5),(7,1,6),(8,2,7),(9,2,8),(10,2,9),(11,2,10);
/*!40000 ALTER TABLE `institucion_recomendacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion_solicitudes`
--

DROP TABLE IF EXISTS `institucion_solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion_solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `solicitud_informacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_institucion_solicitudes_1_idx` (`institucion_id`),
  KEY `fk_institucion_solicitudes_2_idx` (`solicitud_informacion_id`),
  CONSTRAINT `fk_institucion_solicitudes_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_institucion_solicitudes_2` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion_solicitudes`
--

LOCK TABLES `institucion_solicitudes` WRITE;
/*!40000 ALTER TABLE `institucion_solicitudes` DISABLE KEYS */;
INSERT INTO `institucion_solicitudes` VALUES (5,1,8),(6,2,8),(7,3,8),(8,4,8);
/*!40000 ALTER TABLE `institucion_solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucions`
--

DROP TABLE IF EXISTS `institucions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucions`
--

LOCK TABLES `institucions` WRITE;
/*!40000 ALTER TABLE `institucions` DISABLE KEYS */;
INSERT INTO `institucions` VALUES (1,'Min. Justicia'),(2,'Min. Salud'),(3,'Procuraduria'),(4,'Cancilleria');
/*!40000 ALTER TABLE `institucions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mecanismo_recomendacion`
--

DROP TABLE IF EXISTS `mecanismo_recomendacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mecanismo_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mecanismo_id` int(11) NOT NULL,
  `recomendacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mecanismo_recomendacion_1_idx` (`mecanismo_id`),
  KEY `fk_mecanismo_recomendacion_2_idx` (`recomendacion_id`),
  CONSTRAINT `fk_mecanismo_recomendacion_1` FOREIGN KEY (`mecanismo_id`) REFERENCES `mecanismos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mecanismo_recomendacion_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mecanismo_recomendacion`
--

LOCK TABLES `mecanismo_recomendacion` WRITE;
/*!40000 ALTER TABLE `mecanismo_recomendacion` DISABLE KEYS */;
INSERT INTO `mecanismo_recomendacion` VALUES (1,1,1),(2,1,2),(3,1,3),(4,2,4),(5,1,5),(6,3,6),(7,2,7),(8,2,8),(9,2,9),(10,2,10);
/*!40000 ALTER TABLE `mecanismo_recomendacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mecanismos`
--

DROP TABLE IF EXISTS `mecanismos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mecanismos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mecanismos`
--

LOCK TABLES `mecanismos` WRITE;
/*!40000 ALTER TABLE `mecanismos` DISABLE KEYS */;
INSERT INTO `mecanismos` VALUES (1,'Mecanismo 1'),(2,'Mecanismo 2'),(3,'Mecanismo 3');
/*!40000 ALTER TABLE `mecanismos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titular` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado_id` int(11) NOT NULL,
  `link_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estado_id` (`estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacions`
--

DROP TABLE IF EXISTS `notificacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `mensaje` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notificacions_1_idx` (`accion_id`),
  KEY `fk_notificacions_2_idx` (`usuario_id`),
  CONSTRAINT `fk_notificacions_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_notificacions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacions`
--

LOCK TABLES `notificacions` WRITE;
/*!40000 ALTER TABLE `notificacions` DISABLE KEYS */;
INSERT INTO `notificacions` VALUES (24,6,1,'debe autorizar la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(25,6,2,'debe autorizar la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(26,6,4,'debe autorizar la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(27,6,5,'debe autorizar la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(28,6,6,'debe autorizar la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(29,6,7,'debe hacer segumiento a la recomendacion con codigo:SPSEG00005-002','2016-08-04 20:26:44','pendiente'),(30,7,1,'debe autorizar la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:31','pendiente'),(31,7,2,'debe autorizar la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:31','pendiente'),(32,7,4,'debe autorizar la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(33,7,5,'debe autorizar la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(34,7,6,'debe autorizar la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(35,7,1,'debe hacer segumiento a la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(36,7,2,'debe hacer segumiento a la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(37,7,4,'debe hacer segumiento a la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(38,7,5,'debe hacer segumiento a la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(39,7,6,'debe hacer segumiento a la recomendacion con codigo:SPSEG00006-002','2016-08-04 20:31:32','pendiente'),(40,7,8,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:31:58','pendiente'),(41,8,1,'debe autorizar la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(42,8,2,'debe autorizar la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(43,8,4,'debe autorizar la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(44,8,5,'debe autorizar la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(45,8,6,'debe autorizar la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(46,8,7,'debe hacer segumiento a la recomendacion con codigo:SPSEG00007-002','2016-08-04 20:44:52','pendiente'),(47,8,8,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:45:23','pendiente'),(48,8,3,'debe autorizar la recomendacion con codigo:','2016-08-04 20:45:23','pendiente'),(49,9,1,'debe autorizar la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(50,9,2,'debe autorizar la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(51,9,4,'debe autorizar la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(52,9,5,'debe autorizar la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(53,9,6,'debe autorizar la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(54,9,7,'debe hacer segumiento a la recomendacion con codigo:SPSEG00008-002','2016-08-04 20:47:14','pendiente'),(55,9,8,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:47:42','pendiente'),(56,9,3,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:47:42','pendiente'),(57,10,1,'debe autorizar la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(58,10,2,'debe autorizar la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(59,10,4,'debe autorizar la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(60,10,5,'debe autorizar la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(61,10,6,'debe autorizar la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(62,10,7,'debe hacer segumiento a la recomendacion con codigo:SPSEG00009-002','2016-08-04 20:55:04','pendiente'),(63,10,8,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:55:11','pendiente'),(64,10,3,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 20:55:11','pendiente'),(65,11,1,'debe autorizar la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(66,11,2,'debe autorizar la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(67,11,4,'debe autorizar la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(68,11,5,'debe autorizar la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(69,11,6,'debe autorizar la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(70,11,7,'debe hacer segumiento a la recomendacion con codigo:SPSEG00010-002','2016-08-04 21:02:31','pendiente'),(71,11,8,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 21:03:01','pendiente'),(72,11,3,'debe autorizar la recomendacion con codigo:SPREC00002','2016-08-04 21:03:01','pendiente');
/*!40000 ALTER TABLE `notificacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poblacion_recomendacion`
--

DROP TABLE IF EXISTS `poblacion_recomendacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poblacion_recomendacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `poblacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recomendacion_poblacion_1_idx` (`recomendacion_id`),
  KEY `fk_recomendacion_poblacion_2_idx` (`poblacion_id`),
  CONSTRAINT `fk_recomendacion_poblacion_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_recomendacion_poblacion_2` FOREIGN KEY (`poblacion_id`) REFERENCES `poblacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poblacion_recomendacion`
--

LOCK TABLES `poblacion_recomendacion` WRITE;
/*!40000 ALTER TABLE `poblacion_recomendacion` DISABLE KEYS */;
INSERT INTO `poblacion_recomendacion` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,5,1),(6,6,2),(7,7,1),(8,8,1),(9,9,1),(10,10,1);
/*!40000 ALTER TABLE `poblacion_recomendacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poblacions`
--

DROP TABLE IF EXISTS `poblacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poblacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poblacions`
--

LOCK TABLES `poblacions` WRITE;
/*!40000 ALTER TABLE `poblacions` DISABLE KEYS */;
INSERT INTO `poblacions` VALUES (1,'Poblacion 1'),(2,'Poblacion 2');
/*!40000 ALTER TABLE `poblacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recomendacion_parametros`
--

DROP TABLE IF EXISTS `recomendacion_parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recomendacion_parametros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `prioridad` decimal(19,2) NOT NULL,
  `tiempo` decimal(19,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recomendacion_parametros_1_idx` (`recomendacion_id`),
  CONSTRAINT `fk_recomendacion_parametros_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recomendacion_parametros`
--

LOCK TABLES `recomendacion_parametros` WRITE;
/*!40000 ALTER TABLE `recomendacion_parametros` DISABLE KEYS */;
/*!40000 ALTER TABLE `recomendacion_parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recomendacions`
--

DROP TABLE IF EXISTS `recomendacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recomendacions` (
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
  KEY `codigo` (`codigo`),
  CONSTRAINT `fk_Recomendacions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recomendacions_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recomendacions`
--

LOCK TABLES `recomendacions` WRITE;
/*!40000 ALTER TABLE `recomendacions` DISABLE KEYS */;
INSERT INTO `recomendacions` VALUES (1,'10.           El Comité acoge con satisfacción los esfuerzos realizados por el Estado parte para ofrecer servicios integrales de justicia plurinacional, pero expresa preocupación por:\r\n\r\n           a)       Las persistentes barreras estructurales de la “jurisdicción indígena originaria campesina” y el sistema de justicia formal que impiden que las mujeres accedan a la justicia y obtengan reparación, tales como el número insuficiente de tribunales en el territorio, la escasa información sobre derechos y procedimientos judiciales disponible en las principales lenguas indígenas y el alcance reducido de los planes de asistencia letrada, habida cuenta de que solo el 45% de los municipios han establecido servicios legales integrales municipales;\r\n\r\n           b)       La inexistencia de una trayectoria profesional institucional en los niveles bajo e intermedio del sistema judicial, lo que limita la independencia e imparcialidad del poder judicial;\r\n\r\n           c)       Los estereotipos de g','2016-08-01 16:26:27','2016-08-01 16:26:27',6,9,2016,'SPREC00001'),(2,'ñalskdñasldk lksñadñs','2016-08-01 19:18:36','2016-08-01 19:18:36',2,9,4,'SPREC00002'),(3,'Una recomendacion de prueba','2016-08-04 19:59:32','2016-08-04 20:05:36',2,9,2016,'SPREC00002'),(4,'nueva recomendacion para salud','2016-08-04 20:18:36','2016-08-04 20:22:54',6,3,2016,'SPREC00002'),(5,'otrisima recomendacion para salud','2016-08-04 20:24:07','2016-08-04 20:29:24',6,2,2016,'SPREC00002'),(6,'y la ultima recomendacion de salud para','2016-08-04 20:30:50','2016-08-04 20:31:58',6,2,2016,'SPREC00002'),(7,'ultima rec','2016-08-04 20:43:59','2016-08-04 20:45:23',6,9,2016,'SPREC00002'),(8,'esta si es la ultima 3234','2016-08-04 20:46:41','2016-08-04 20:47:42',6,9,2016,'SPREC00002'),(9,'recomendacion para demo','2016-08-04 20:54:45','2016-08-04 20:55:12',6,9,2016,'SPREC00002'),(10,'recomendacion moderna 1','2016-08-04 21:02:03','2016-08-04 21:03:01',6,9,2017,'SPREC00002');
/*!40000 ALTER TABLE `recomendacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `resultado` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_revisions_1_idx` (`recomendacion_id`),
  KEY `fk_revisions_2_idx` (`usuario_id`),
  CONSTRAINT `fk_revisions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_revisions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rols`
--

DROP TABLE IF EXISTS `rols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `institucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rols_1_idx` (`institucion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rols`
--

LOCK TABLES `rols` WRITE;
/*!40000 ALTER TABLE `rols` DISABLE KEYS */;
INSERT INTO `rols` VALUES (1,'iniciador_min_justicia',1),(2,'ejecutor_min_justicia',1),(3,'iniciador/ejecutor_min_justicia',1),(4,'aprobador_cancilleria',4),(5,'aprobador_min_salud',2),(6,'aprobador_procuraduria',3);
/*!40000 ALTER TABLE `rols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud_informacions`
--

DROP TABLE IF EXISTS `solicitud_informacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud_informacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitud_informacions_1_idx` (`usuario_id`),
  KEY `fk_solicitud_informacions_2_idx` (`estado_id`),
  CONSTRAINT `fk_solicitud_informacions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitud_informacions_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud_informacions`
--

LOCK TABLES `solicitud_informacions` WRITE;
/*!40000 ALTER TABLE `solicitud_informacions` DISABLE KEYS */;
INSERT INTO `solicitud_informacions` VALUES (8,'SPSOL00001','nueva prueba de solicitud de informacion','2016-08-04 08:55:23',2,1);
/*!40000 ALTER TABLE `solicitud_informacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud_respuestas`
--

DROP TABLE IF EXISTS `solicitud_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud_informacion_id` int(11) NOT NULL,
  `respuesta` varchar(2500) NOT NULL,
  `fecha_respuesta` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitud_respuestas_1_idx` (`solicitud_informacion_id`),
  KEY `fk_solicitud_respuestas_2_idx` (`usuario_id`),
  CONSTRAINT `fk_solicitud_respuestas_1` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitud_respuestas_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud_respuestas`
--

LOCK TABLES `solicitud_respuestas` WRITE;
/*!40000 ALTER TABLE `solicitud_respuestas` DISABLE KEYS */;
INSERT INTO `solicitud_respuestas` VALUES (10,8,'asdasd','2016-08-04 10:15:28',2);
/*!40000 ALTER TABLE `solicitud_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes_pendientes_respuestas`
--

DROP TABLE IF EXISTS `solicitudes_pendientes_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes_pendientes_respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `solicitud_informacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_solicitudes_pendientes_respuestas_1_idx` (`usuario_id`),
  KEY `fk_solicitudes_pendientes_respuestas_2_idx` (`estado_id`),
  KEY `fk_solicitudes_pendientes_respuestas_3_idx` (`solicitud_informacion_id`),
  CONSTRAINT `fk_solicitudes_pendientes_respuestas_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_pendientes_respuestas_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_pendientes_respuestas_3` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes_pendientes_respuestas`
--

LOCK TABLES `solicitudes_pendientes_respuestas` WRITE;
/*!40000 ALTER TABLE `solicitudes_pendientes_respuestas` DISABLE KEYS */;
INSERT INTO `solicitudes_pendientes_respuestas` VALUES (9,1,1,'2016-08-04 08:55:23',8),(10,2,10,'2016-08-04 10:15:28',8),(11,4,1,'2016-08-04 08:55:23',8),(12,5,1,'2016-08-04 08:55:23',8),(13,6,1,'2016-08-04 08:55:23',8),(14,7,1,'2016-08-04 08:55:23',8),(15,8,1,'2016-08-04 08:55:23',8),(16,3,1,'2016-08-04 08:55:23',8);
/*!40000 ALTER TABLE `solicitudes_pendientes_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_1_idx` (`rol_id`),
  CONSTRAINT `fk_usuarios_1` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'iniciador','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-22 07:06:00','2016-06-22 07:06:00',1),(2,'admin','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-22 21:05:00','2016-06-22 21:05:00',2),(3,'aprobador_cancilleria','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-24 23:23:00','2016-06-24 23:23:00',4),(4,'camilo','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-25 02:13:00','2016-06-25 02:13:00',3),(5,'usuario','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-25 02:29:00','2016-06-25 02:29:00',3),(6,'iniciador_aprobador_min_justicia','$2y$10$EvhYWhjUkyobfElzgLDNGeeT3ahzp7R2clNL6XfQI1vLxiV/WqD72','2016-08-01 14:38:00','2016-08-01 14:38:00',3),(7,'aprobador_min_salud','$2y$10$evJ..iXd3VJnyh/IzwtJzO.bo4y1To2RrFagrE9W2EwAJICai.pBC','2016-08-01 15:04:00','2016-08-01 15:04:00',5),(8,'aprobador_procuraduria','$2y$10$WZcvCJ6AuB6e5HEXwgfKwOkyzOqLsC1OKcKyvkaPpUmPqpDnMg2UO','2016-08-01 15:05:00','2016-08-01 15:05:00',6);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_versions_1_idx` (`recomendacion_id`),
  KEY `fk_versions_2_idx` (`usuario_id`),
  CONSTRAINT `fk_versions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_versions_2` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versions`
--

LOCK TABLES `versions` WRITE;
/*!40000 ALTER TABLE `versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-11 17:24:11
