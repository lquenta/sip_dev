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
-- Table structure for table `accion_solicitud`
--

DROP TABLE IF EXISTS `accion_solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion_solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `institucion_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `respuesta` varchar(2000) NOT NULL,
  `link_adjunto` varchar(255) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `observacion` varchar(500) NOT NULL DEFAULT '',
  `link_adjunto_indicadores` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accion_sol1_idx` (`accion_id`),
  KEY `fk_accion_sol2_idx` (`institucion_id`),
  KEY `fk_accion_sol3_idx` (`estado_id`),
  KEY `fk_accion_sol4_idx` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion_solicitud`
--

LOCK TABLES `accion_solicitud` WRITE;
/*!40000 ALTER TABLE `accion_solicitud` DISABLE KEYS */;
INSERT INTO `accion_solicitud` VALUES (17,6,1,'2016-08-22 05:13:35',' ','1471842815_pendientessiplus.xlsx',10,7,'',''),(18,7,1,'2016-08-22 14:00:36',' respiesta 1','1471874436_',10,7,'',''),(19,8,1,'2016-08-23 01:18:37',' respuesta','1471915117_manualwf.doc',10,6,'','1471915117_recomendacionesantiguas.xml'),(16,5,1,'2016-08-22 05:00:16',' la respuesta','1471842016_comunicaciã³n-noemi.doc',10,7,'',''),(14,3,1,'2016-08-22 01:23:58',' ','1471829038_',10,7,'',''),(15,4,1,'2016-08-23 02:28:12',' Respuesta 2','1471919292_recomendacionesantiguas.xml',10,7,'','1471919292_manualwf.doc'),(13,2,1,'2016-08-19 07:38:23',' esta es la respuesta de estadop','1471592303_eletricidad-ago-2016.pdf',3,7,'aprobado',''),(12,1,1,'2016-08-17 07:38:55',' test','1471419535_informeproyectodemodernizacion.pdf',3,7,'aprobado',''),(20,13,1,'2016-08-22 20:10:22',' respuesta 1','1471896622_',3,7,'aprobado',''),(21,14,1,'2016-08-23 02:46:41',' respuesta','1471920401_notasreunionatc',10,7,'','1471920401_imgpshfullsize.png'),(22,15,1,'2016-08-23 02:49:50',' respuesta','1471920590_manualwf.doc',10,7,'','1471920590_imgpshfullsize.png'),(23,16,1,'2016-08-23 07:05:05',' resp','1471935905_',10,7,'','1471935905_'),(24,17,1,'2016-08-23 05:51:45',' respuesta','1471931505_siplus.sql',10,7,'','1471931505_manualwf.doc'),(25,18,1,'2016-08-23 07:01:17',' resp','1471935677_',10,7,'','1471935677_'),(26,19,1,'2016-08-23 07:07:22',' adsasdasdasd','1471936042_dumpnuevosiplus.sql',10,7,'','1471936042_'),(27,20,1,'2016-08-23 07:11:11',' res','1471936271_recomendacionesantiguas.xml',10,7,'','1471936271_manualwf.doc'),(28,21,1,'2016-08-23 07:12:21',' res','1471936341_menu.swf',10,7,'','1471936341_app.php'),(29,22,1,'2016-08-24 01:56:07',' respuesta prueba','1472003767_dumpsqlsiplus.sql',10,7,'','1472003767_'),(30,23,1,'2016-08-24 18:51:04',' resp','1472064664_',3,7,'aprobado','1472064664_'),(31,24,1,'2016-08-24 20:28:01',' Respuesta del estado con adjunto','1472070481_dumpsqlsiplus.sql',3,7,'aprobado','1472070481_'),(32,24,1,'2016-08-24 20:40:50',' Respuesta correcta','1472071250_dumpsqlsiplus.sql',3,7,'aprobado','1472071250_');
/*!40000 ALTER TABLE `accion_solicitud` ENABLE KEYS */;
UNLOCK TABLES;

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
  `estado_id` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `fk_Accions_1_idx` (`usuario_id`),
  KEY `fk_Accions_2_idx` (`recomendacion_id`),
  KEY `codigo` (`codigo`),
  KEY `fk_Accions_3_idx` (`estado_id`),
  CONSTRAINT `fk_Accions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Accions_2` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_accions_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accions`
--

LOCK TABLES `accions` WRITE;
/*!40000 ALTER TABLE `accions` DISABLE KEYS */;
INSERT INTO `accions` VALUES (1,'SPSEG00001-001','prueba de referencia','2016-08-19 07:32:06',6,1,'test',9),(2,'SPSEG00001-002','Prueba de datos inicial','2016-08-19 07:42:59',3,1,'Este uy ',9),(3,'SPSEG00002-003','pedido para estado','2016-08-22 01:23:59',2,2,'esto se debe hacer:\r\n1)\r\n2)',10),(4,'SPSEG00004-004','ref','2016-08-23 02:28:12',2,4,'asd',10),(5,'SPSEG00005-005','nuevo accion de seguimiento con datos','2016-08-22 05:00:17',2,5,'Requerido',10),(6,'SPSEG00005-006','datos e informacion','2016-08-22 05:13:36',6,5,'requerido',10),(7,'SPSEG00005-007','ref','2016-08-22 14:00:36',2,5,' ',10),(8,'SPSEG00007-008','nuevo segumiento','2016-08-23 01:18:37',2,7,' ',10),(9,'SPSEG00009-009','sasdas','2016-08-22 13:44:20',6,9,' ',2),(10,'SPSEG00009-010','vvvvvvvvvvvvvv','2016-08-22 14:38:37',6,9,' ',2),(11,'SPSEG00009-011','adalskdasldañslkdñ','2016-08-22 14:45:05',6,9,' ',2),(12,'SPSEG00009-012','seguimiento 22.08','2016-08-22 14:46:45',6,9,' ',2),(13,'SPSEG00009-013','Presentqar ley.\r\n','2016-08-22 20:17:14',6,9,' ',3),(14,'SPSEG00009-014','test','2016-08-23 02:46:42',6,9,' ',10),(15,'SPSEG00009-015','test2','2016-08-23 02:49:51',6,9,' ',10),(16,'SPSEG00004-016','refre','2016-08-23 07:05:06',6,4,' ',10),(17,'SPSEG00013-017','refrencia','2016-08-23 05:51:46',6,13,' ',10),(18,'SPSEG00014-018','ref','2016-08-23 07:01:17',6,14,' ',10),(19,'SPSEG00014-019','asdasd','2016-08-23 07:07:22',6,14,' ',10),(20,'SPSEG00014-020','asdasd','2016-08-23 07:11:12',6,14,' ',10),(21,'SPSEG00014-021','qweqwe','2016-08-23 07:11:51',6,14,' ',2),(22,'SPSEG00015-022','desc','2016-08-24 01:56:07',6,15,' ',10),(23,'SPSEG00016-023','ref','2016-08-24 18:53:46',6,16,' ',5),(24,'SPSEG00017-024','Seguimiento para estado, prueba','2016-08-24 20:45:41',6,17,' ',5);
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_accions`
--

LOCK TABLES `adjuntos_accions` WRITE;
/*!40000 ALTER TABLE `adjuntos_accions` DISABLE KEYS */;
INSERT INTO `adjuntos_accions` VALUES (1,6,'1471842781_prueba-final-estadistica.docx'),(2,7,'1471845594_'),(3,8,'1471847240_pendientessiplus.xlsx'),(4,9,'1471873461_'),(5,10,'1471876717_'),(6,11,'1471877107_'),(7,12,'1471877205_'),(8,13,'1471896092_'),(9,14,'1471919386_recomendacionesantiguas.xml'),(10,15,'1471920453_app.php'),(11,16,'1471924479_'),(12,17,'1471931462_recomendacionesantiguas.xml'),(13,18,'1471935654_'),(14,19,'1471936018_'),(15,20,'1471936120_'),(16,21,'1471936311_priorizacion.ods'),(17,22,'1472003659_'),(18,23,'1472064611_'),(19,24,'1472070021_nano.save');
/*!40000 ALTER TABLE `adjuntos_accions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adjuntos_consolidados`
--

DROP TABLE IF EXISTS `adjuntos_consolidados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adjuntos_consolidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consolidado_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adj_consolidados_idx` (`consolidado_id`),
  CONSTRAINT `fk_consolidado_adjunto_1` FOREIGN KEY (`consolidado_id`) REFERENCES `consolidados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_consolidados`
--

LOCK TABLES `adjuntos_consolidados` WRITE;
/*!40000 ALTER TABLE `adjuntos_consolidados` DISABLE KEYS */;
INSERT INTO `adjuntos_consolidados` VALUES (1,1,'1471585556_presentacion.pdf'),(10,1,'1471591120_eletricidad-ago-2016.pdf'),(11,1,'1471591226_1801-convocatoriagestorculturalfebrero2016.pdf'),(12,5,'1471592488_eletricidad-ago-2016.pdf'),(13,5,'1471592579_monografiacamilo.pdf'),(14,6,'1471897035_observaciones-8-de-agosto-onu.docx'),(15,9,'1472070901_api-enrollment.jmx'),(16,9,'1472071613_dumpsqlsiplus.sql');
/*!40000 ALTER TABLE `adjuntos_consolidados` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_recomendacions`
--

LOCK TABLES `adjuntos_recomendacions` WRITE;
/*!40000 ALTER TABLE `adjuntos_recomendacions` DISABLE KEYS */;
INSERT INTO `adjuntos_recomendacions` VALUES (1,2,'1471419133_informeproyectodemodernizacion.pdf'),(2,3,'1471818158_comprobante.pdf'),(3,4,'1471820668_2016-08-21-183649-añadir-recomendacion.png'),(4,5,'1471841941_monografiacamilo.docx'),(5,6,'1471847089_'),(6,7,'1471847113_'),(7,8,'1471848842_debug.log'),(8,9,'1471873059_'),(9,10,'1471923207_recomendacionesantiguas.xml'),(10,13,'1471929407_recomendacionesantiguas.xml'),(11,14,'1471935626_'),(12,15,'1472003461_'),(13,16,'1472064590_'),(14,17,'1472069557_dumpsqlsiplus.sql');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adjuntos_solicitud_respuestas`
--

LOCK TABLES `adjuntos_solicitud_respuestas` WRITE;
/*!40000 ALTER TABLE `adjuntos_solicitud_respuestas` DISABLE KEYS */;
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
  `visto_bueno_fisico` int(11) NOT NULL,
  `accion_id` int(11) NOT NULL,
  `razon` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fk_Autorizaciones_1_idx` (`usuario_id`),
  KEY `fk_Autorizaciones_3_idx` (`estado_id`),
  KEY `FK_Acciones_autorizacion` (`accion_id`),
  CONSTRAINT `FK_Acciones_autorizacion` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`),
  CONSTRAINT `fk_Autorizaciones_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Autorizaciones_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorizacions`
--

LOCK TABLES `autorizacions` WRITE;
/*!40000 ALTER TABLE `autorizacions` DISABLE KEYS */;
INSERT INTO `autorizacions` VALUES (1,1,1,'2016-08-17 07:38:55',0,1,''),(2,2,3,'2016-08-19 05:45:55',0,1,''),(3,6,1,'2016-08-17 07:38:55',0,1,''),(4,8,3,'2016-08-19 06:30:07',0,1,''),(5,3,3,'2016-08-19 07:34:27',0,1,''),(6,1,1,'2016-08-19 07:38:23',0,2,''),(7,2,1,'2016-08-19 07:38:23',0,2,''),(8,6,3,'2016-08-19 07:41:27',0,2,''),(9,8,3,'2016-08-19 07:42:00',0,2,''),(10,3,3,'2016-08-19 07:42:59',0,2,''),(11,1,1,'2016-08-22 01:23:59',0,3,''),(12,2,1,'2016-08-22 01:23:59',0,3,''),(13,6,1,'2016-08-22 01:23:59',0,3,''),(14,1,1,'2016-08-22 05:00:16',0,5,''),(15,2,1,'2016-08-22 05:00:16',0,5,''),(16,6,1,'2016-08-22 05:00:16',0,5,''),(17,1,1,'2016-08-22 05:13:35',0,6,''),(18,2,1,'2016-08-22 05:13:36',0,6,''),(19,6,1,'2016-08-22 05:13:36',0,6,''),(20,1,1,'2016-08-22 14:00:33',0,7,''),(21,2,1,'2016-08-22 14:00:35',0,7,''),(22,6,1,'2016-08-22 14:00:35',0,7,''),(23,1,1,'2016-08-22 14:00:36',0,7,''),(24,2,1,'2016-08-22 14:00:36',0,7,''),(25,6,1,'2016-08-22 14:00:36',0,7,''),(26,1,1,'2016-08-22 20:10:23',0,13,''),(27,2,1,'2016-08-22 20:10:25',0,13,''),(28,6,3,'2016-08-22 20:17:14',0,13,''),(29,8,1,'2016-08-22 20:17:15',0,13,''),(30,1,1,'2016-08-23 01:18:37',0,8,''),(31,2,1,'2016-08-23 01:18:37',0,8,''),(32,6,1,'2016-08-23 01:18:37',0,8,''),(33,1,1,'2016-08-23 02:28:12',0,4,''),(34,2,1,'2016-08-23 02:28:12',0,4,''),(35,6,1,'2016-08-23 02:28:12',0,4,''),(36,1,1,'2016-08-23 02:46:41',0,14,''),(37,2,1,'2016-08-23 02:46:42',0,14,''),(38,6,1,'2016-08-23 02:46:42',0,14,''),(39,1,1,'2016-08-23 02:49:51',0,15,''),(40,2,1,'2016-08-23 02:49:51',0,15,''),(41,6,1,'2016-08-23 02:49:51',0,15,''),(42,1,1,'2016-08-23 05:51:46',0,17,''),(43,2,1,'2016-08-23 05:51:46',0,17,''),(44,6,1,'2016-08-23 05:51:46',0,17,''),(45,1,1,'2016-08-23 07:01:17',0,18,''),(46,2,1,'2016-08-23 07:01:17',0,18,''),(47,6,1,'2016-08-23 07:01:17',0,18,''),(48,1,1,'2016-08-23 07:05:05',0,16,''),(49,2,1,'2016-08-23 07:05:05',0,16,''),(50,6,1,'2016-08-23 07:05:05',0,16,''),(51,1,1,'2016-08-23 07:07:22',0,19,''),(52,2,1,'2016-08-23 07:07:22',0,19,''),(53,6,1,'2016-08-23 07:07:22',0,19,''),(54,1,1,'2016-08-23 07:11:11',0,20,''),(55,2,1,'2016-08-23 07:11:11',0,20,''),(56,6,1,'2016-08-23 07:11:12',0,20,''),(57,1,1,'2016-08-24 01:56:07',0,22,''),(58,2,1,'2016-08-24 01:56:07',0,22,''),(59,6,1,'2016-08-24 01:56:07',0,22,''),(60,1,1,'2016-08-24 18:51:04',0,23,''),(61,2,1,'2016-08-24 18:51:04',0,23,''),(62,6,3,'2016-08-24 18:53:13',0,23,''),(63,8,3,'2016-08-24 18:53:46',0,23,''),(64,3,1,'2016-08-24 18:53:47',0,23,''),(65,1,1,'2016-08-24 20:28:02',0,24,''),(66,2,1,'2016-08-24 20:28:02',0,24,''),(67,6,4,'2016-08-24 20:38:45',0,24,' Rechazo'),(68,1,1,'2016-08-24 20:40:50',0,24,''),(69,2,1,'2016-08-24 20:40:51',0,24,''),(70,6,3,'2016-08-24 20:43:53',0,24,''),(71,8,3,'2016-08-24 20:45:41',0,24,''),(72,3,1,'2016-08-24 20:45:41',0,24,'');
/*!40000 ALTER TABLE `autorizacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comite_recomendacions`
--

DROP TABLE IF EXISTS `comite_recomendacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comite_recomendacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomendacion_id` int(11) NOT NULL,
  `comite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mecanismos_recomendacions_1_idx` (`recomendacion_id`),
  KEY `fk_mecanismos_recomendacions_2_idx` (`comite_id`),
  CONSTRAINT `fk_mecanismos_recomendacions_1` FOREIGN KEY (`recomendacion_id`) REFERENCES `recomendacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mecanismos_recomendacions_2` FOREIGN KEY (`comite_id`) REFERENCES `comites` (`IdComite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comite_recomendacions`
--

LOCK TABLES `comite_recomendacions` WRITE;
/*!40000 ALTER TABLE `comite_recomendacions` DISABLE KEYS */;
INSERT INTO `comite_recomendacions` VALUES (1,13,1),(2,14,1),(3,15,1),(4,16,1),(5,17,1);
/*!40000 ALTER TABLE `comite_recomendacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comites`
--

DROP TABLE IF EXISTS `comites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comites` (
  `IdComite` int(11) NOT NULL,
  `Descripcion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mecanismo_id` int(11) NOT NULL,
  `Prefijo` varchar(10) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`IdComite`),
  KEY `mecanismo_id` (`mecanismo_id`),
  CONSTRAINT `comites_ibfk_1` FOREIGN KEY (`mecanismo_id`) REFERENCES `mecanismos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comites`
--

LOCK TABLES `comites` WRITE;
/*!40000 ALTER TABLE `comites` DISABLE KEYS */;
INSERT INTO `comites` VALUES (1,'Comité para la Eliminación de la Discriminación Racial - 2011',1,'D1'),(2,'Comité para la Eliminación de la Discriminación Racial - 2003',1,'D2'),(3,'Informe del Relator Especial sobre las formas contemporáneas de racismo, discriminación racial, xenofobia y formas conexas de intolerancia',2,'D3'),(4,'Informe del Relator Especial sobre la Situación de los Derechos Humanos y las Libertades Fundamentales de los Indígenas',2,'D4'),(5,'Informe del Relator Especial sobre el Derechos a la Alimentación',2,'D5'),(6,'Examen Periódico Universal 2014',3,'D6'),(7,'Examen Periódico Universal 2010',3,'D7'),(8,'Comité para la Eliminación de la Discriminación contra la Mujer - 2015',4,'D8'),(9,'Comité para la Eliminación de la Discriminación contra la Mujer - 2008',4,'D9'),(10,'Comité de Protección de los Derechos de Todos los Trabajadores Migratorios y de sus Familiares',5,'D10'),(11,'Comité de los Derechos del Niño',6,'D11'),(12,'Comité de Derechos Humanos',7,'D12'),(13,'Comité de Derechos Económicos, Sociales y Culturales',8,'D13'),(14,'Comité Contra la Tortura - 2001',9,'D14'),(15,'Comité Contra la Tortura - 2013',9,'D15');
/*!40000 ALTER TABLE `comites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consolidado_indicadores`
--

DROP TABLE IF EXISTS `consolidado_indicadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consolidado_indicadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consolidado_id` int(11) DEFAULT NULL,
  `indicador_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consolidado_relaindicador_idx` (`indicador_id`),
  KEY `consolidado_relconsolidado_idx` (`consolidado_id`),
  CONSTRAINT `consolidado_relaindicador` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `consolidado_relconsolidado` FOREIGN KEY (`consolidado_id`) REFERENCES `consolidados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consolidado_indicadores`
--

LOCK TABLES `consolidado_indicadores` WRITE;
/*!40000 ALTER TABLE `consolidado_indicadores` DISABLE KEYS */;
INSERT INTO `consolidado_indicadores` VALUES (36,7,1),(37,7,3),(38,8,1),(43,9,3),(44,9,5),(45,9,1);
/*!40000 ALTER TABLE `consolidado_indicadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consolidados`
--

DROP TABLE IF EXISTS `consolidados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consolidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `texto_consolidado` varchar(2500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha_consolidado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consolidado_1_idx` (`accion_id`),
  KEY `fk_consolidado_2_idx` (`user_id`),
  CONSTRAINT `fk_consolidado_accion_1` FOREIGN KEY (`accion_id`) REFERENCES `accions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consolidados`
--

LOCK TABLES `consolidados` WRITE;
/*!40000 ALTER TABLE `consolidados` DISABLE KEYS */;
INSERT INTO `consolidados` VALUES (1,1,' Este es el consolidado fin  asd revisado por cancilleria ok',3,'2016-08-19 07:34:27'),(5,2,' este es el consolidado final no me gusta pero esta bien de todos modos , puede ser pero agreguemos un archivo mas',3,'2016-08-19 07:42:59'),(6,13,'  respuesta 1',6,'2016-08-22 20:17:15'),(7,20,' consolidado              ',6,'2016-08-23 08:40:53'),(8,23,' textcgghg ',3,'2016-08-24 18:54:33'),(9,24,'   Respuesta del estado de accion\r\nconsolidado editado por procuradoria  ',3,'2016-08-24 20:46:52');
/*!40000 ALTER TABLE `consolidados` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `derecho_recomendacion`
--

LOCK TABLES `derecho_recomendacion` WRITE;
/*!40000 ALTER TABLE `derecho_recomendacion` DISABLE KEYS */;
INSERT INTO `derecho_recomendacion` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `derechos`
--

LOCK TABLES `derechos` WRITE;
/*!40000 ALTER TABLE `derechos` DISABLE KEYS */;
INSERT INTO `derechos` VALUES (1,'Promoción de derechos humanos'),(2,'No discriminación'),(3,'Igualdad'),(4,'Desarrrollo '),(5,'Trabajo'),(6,'A una vida libre de violencia'),(7,'A no ser sometido a trabajo infantil'),(8,'A no ser sometido a escalvitud y servidumbre'),(9,'Salud sexual y reproductiva'),(10,'Educación'),(11,'Vivienda adecuada'),(12,'Datos estadísticos'),(13,'Alimentación adecuada'),(14,'Salud'),(15,'Igualdad de género'),(16,'Propiedad privada'),(17,'Seguridad Social'),(18,'Tierra y territorio'),(19,'Cultura'),(20,'Informes de Estado a los mecanismos de protección de derechos humanos'),(21,'A no ser sometido a deportación arbitraria'),(22,'A no ser sometido a explotación, pornografía y abuso sexual'),(23,'A no ser sometido a tortura y otros tratos o penas crueles, inhumanos o degradantes'),(24,'A ser registrado, al nombre y a la nacionalidad'),(25,'A una vida libre de trata y tráfico'),(26,'Acceso a la justicia'),(27,'Agua'),(28,'Autodeterminación'),(29,'Consulta previa, libre e informada'),(30,'Debido proceso'),(31,'Dignidad'),(32,'Identidad'),(33,'Integridad personal'),(34,'Interés superior del niño/a'),(35,'Libertad de asociación y reunión pacífica'),(36,'Libertad de circulación y residencia'),(37,'Libertad de expresión, opinión e información'),(38,'Libertad de pensamiento, conciencia y religión'),(39,'Libertad y seguridad personal'),(40,'Familia'),(41,'Medio ambiente'),(42,'Participación'),(43,'Personalidad jurídica'),(44,'Privacidad'),(45,'Reducción de la pobreza'),(46,'Refugio'),(47,'Salubridad'),(48,'Servicios básicos'),(49,'Servicios públicos'),(50,'Vida'),(51,'Instrumentos internacionales'),(52,'Mecanismos de protección de derechos humanos'),(53,'Asilo'),(54,'General'),(55,'Matrimonio'),(56,'Consulta'),(57,'Derechos Políticos');
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
-- Table structure for table `indicadores_accion_solicituds`
--

DROP TABLE IF EXISTS `indicadores_accion_solicituds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicadores_accion_solicituds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indicador_id` int(11) NOT NULL,
  `accion_solicitud_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_indicadores_accion_solicitud_1_idx` (`indicador_id`),
  KEY `fk_indicadores_accion_solicitud_2_idx` (`accion_solicitud_id`),
  CONSTRAINT `fk_indicadores_accion_solicitud_1` FOREIGN KEY (`indicador_id`) REFERENCES `indicadors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicadores_accion_solicituds`
--

LOCK TABLES `indicadores_accion_solicituds` WRITE;
/*!40000 ALTER TABLE `indicadores_accion_solicituds` DISABLE KEYS */;
INSERT INTO `indicadores_accion_solicituds` VALUES (1,34,12),(2,1,14),(3,1,15),(4,2,15),(5,3,15),(6,4,15),(7,5,15),(8,35,15),(9,1,17),(10,2,17),(11,3,17),(12,4,17),(13,5,17),(14,36,17),(15,1,18),(16,2,18),(17,1,16),(18,1,19),(19,1,20),(20,38,20),(21,1,21),(22,1,22),(23,1,22),(24,41,22),(25,1,29),(26,42,29),(27,1,23),(28,1,30),(29,1,24),(30,43,24),(31,1,31),(32,44,31),(33,2,24),(34,2,32);
/*!40000 ALTER TABLE `indicadores_accion_solicituds` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicadors`
--

LOCK TABLES `indicadors` WRITE;
/*!40000 ALTER TABLE `indicadors` DISABLE KEYS */;
INSERT INTO `indicadors` VALUES (1,'Porcentaje de mujeres que habiendo sido sometidas  algún tipo de violencia de pareja o ex pareja lo han denunciado','http://www.ine.gob.bo/indicadoresddhh/viole2.asp'),(2,'Porcentaje de ingreso regular en la ocupación principal de mujeres en relación a hombres','http://www.ine.gob.bo/indicadoresddhh/traba11.asp'),(3,'Proporción de hogares cubiertos con vivienda social','http://www.ine.gob.bo/indicadoresddhh/vivi9.asp'),(4,'Porcentaje de niñas y niños menores de 2 años que consumen el Alimento Complementario (CHISPITAS).','http://www.ine.gob.bo/indicadoresddhh/alim9.asp'),(5,'Porcentaje de niñas y niños menores de 2 años que consumen el Alimento Complementario (NUTRIBEBE)','http://www.ine.gob.bo/indicadoresddhh/alim11.asp'),(6,'Porcentaje de niños y niñas que reciben Lactancia materna exclusiva, en menores de dos años.','http://www.ine.gob.bo/indicadoresddhh/alim8.asp'),(7,'Porcentaje de municipios que cuentan con una Unidad de Nutrición Integral Funcionando.','http://www.ine.gob.bo/indicadoresddhh/alim19.asp'),(8,'Prevalencia de anemia en menores de cinco años.','http://www.ine.gob.bo/indicadoresddhh/alim21.asp'),(9,'Prevalencia de desnutrición crónica en niños menores de 2 años.','http://www.ine.gob.bo/indicadoresddhh/alim10.asp'),(10,'Proporción de sobre peso y obesidad en niños, niñas menores de 5 años, de 6 a 11 años y de 12 a 18 años. (Infancia, niñez y adolescencia).','http://www.ine.gob.bo/indicadoresddhh/alim26.asp'),(11,'Porcentaje de niños con bajo peso al nacer.','http://www.ine.gob.bo/indicadoresddhh/alim17.asp'),(12,'Porcentaje de municipios de alta vulnerabilidad a la inseguridad alimentaria.','http://www.ine.gob.bo/indicadoresddhh/alim27.asp'),(13,'Proporción de la población con inseguridad alimentaria.','http://www.ine.gob.bo/indicadoresddhh/alim3.asp'),(14,'Disponibilidad per cápita de alimentos estratégicos de consumo local.','http://www.ine.gob.bo/indicadoresddhh/alim24.asp'),(15,'Porcentaje de muestras de alimentos libre de contaminación química, físicos, biológicos, metales pesados y pesticidas.','http://www.ine.gob.bo/indicadoresddhh/alim18.asp'),(16,'Número de municipios con servicios de apoyo a la producción','http://www.ine.gob.bo/indicadoresddhh/alim14.asp'),(17,'Proporción del gasto público en salud del presupuesto nacional .Gasto público en  salud como  porcentaje del PIB,\r\n(INE, Ministerio de Economía y Finanzas)\r\n','http://www.ine.gob.bo/indicadoresddhh/salu8.asp'),(18,'Gasto Publico per cápita de salud (En $us.)','http://www.ine.gob.bo/indicadoresddhh/salu12.asp'),(19,'Cobertura de parto institucional (CPI) ','http://www.ine.gob.bo/indicadoresddhh/salu8.asp'),(20,'Razón de mortalidad materna ','http://www.ine.gob.bo/indicadoresddhh/salu5.asp'),(21,'Cobertura de la seguridad social de corto plazo Porcentaje de la población cubierta por algún seguro de salud','http://www.ine.gob.bo/indicadoresddhh/salu22.asp'),(22,'Porcentaje de niños y niñas menores a 2 años beneficiarios del Bono Juana Azurduy.','http://www.ine.gob.bo/indicadoresddhh/alim13.asp'),(23,'Porcentaje de Mujeres GESTANTES beneficiarias del Bono Juana Azurduy.','http://www.ine.gob.bo/indicadoresddhh/alim15.asp'),(24,'Proporción de hogares cubiertos con vivienda social.','http://www.ine.gob.bo/indicadoresddhh/vivi9.asp'),(25,'Proporción de viviendas en proceso de mejoramiento y ampliación.','http://www.ine.gob.bo/indicadoresddhh/vivi11.asp'),(26,'Calidad de la vivienda.','http://www.ine.gob.bo/indicadoresddhh/vivi21.asp'),(27,'Porcentaje de viviendas que disponen de servicio sanitario.','http://www.ine.gob.bo/indicadoresddhh/vivi18.asp'),(28,'Porcentaje de Viviendas con Disponibilidad de energía eléctrica.','http://www.ine.gob.bo/indicadoresddhh/vivi19.asp'),(29,'Viviendas por disponibilidad de servicio telefónico fijo.','http://www.ine.gob.bo/indicadoresddhh/vivi22.asp'),(30,'Proporción de solicitudes de vivienda social aprobadas.','http://www.ine.gob.bo/indicadoresddhh/vivi15.asp'),(31,'Proporción de hogares/ que reciben subvención en vivienda social','http://www.ine.gob.bo/indicadoresddhh/vivi16.asp'),(32,'Número de viviendas sociales construidas','http://www.ine.gob.bo/indicadoresddhh/vivi20.asp'),(33,'Número de  familias beneficiadas  con  vivienda sociales','http://www.ine.gob.bo/indicadoresddhh/vivi23.asp'),(34,'Proporción de viviendas sociales construidas con relación al déficit habitacional.','http://www.ine.gob.bo/indicadoresddhh/vivi24.asp'),(35,'testNuevo',' '),(36,'test',' '),(37,'test2',' '),(38,'test2',' '),(39,'test',' '),(40,'idn',' '),(41,'idn',' '),(42,'idn',' '),(43,'Porcentaje',' '),(44,'Porcentaje',' ');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion_recomendacion`
--

LOCK TABLES `institucion_recomendacion` WRITE;
/*!40000 ALTER TABLE `institucion_recomendacion` DISABLE KEYS */;
INSERT INTO `institucion_recomendacion` VALUES (1,1,1),(2,1,2),(3,1,4),(4,1,5),(5,1,7),(6,1,8),(7,13,9),(8,34,9),(9,2,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17);
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
  KEY `fk_institucion_solicitudes_2_idx` (`solicitud_informacion_id`),
  CONSTRAINT `fk_institucion_solicitudes_2` FOREIGN KEY (`solicitud_informacion_id`) REFERENCES `solicitud_informacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion_solicitudes`
--

LOCK TABLES `institucion_solicitudes` WRITE;
/*!40000 ALTER TABLE `institucion_solicitudes` DISABLE KEYS */;
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
  `Grupo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucions`
--

LOCK TABLES `institucions` WRITE;
/*!40000 ALTER TABLE `institucions` DISABLE KEYS */;
INSERT INTO `institucions` VALUES (1,'Estado','OTRAS INSTITUCIONES'),(2,'Órgano Ejecutivo','OTRAS INSTITUCIONES'),(3,'Órgano Legislativo','OTRAS INSTITUCIONES'),(4,'Órgano Judicial','OTRAS INSTITUCIONES'),(5,'Fuerzas Armadas','OTRAS INSTITUCIONES'),(6,'Policía','OTRAS INSTITUCIONES'),(7,'Cooperación internacional','OTRAS INSTITUCIONES'),(8,'Defensoría del Pueblo','OTRAS INSTITUCIONES'),(10,'Empresas','OTRAS INSTITUCIONES'),(11,'Gobiernos descentralizados','OTRAS INSTITUCIONES'),(12,'Medios de comunicación','OTRAS INSTITUCIONES'),(13,'Ministerio Público','ÓRGANO EJECUTIVO'),(14,'Movimientos sociales','OTRAS INSTITUCIONES'),(15,'Naciones Unidas','OTRAS INSTITUCIONES'),(16,'Oficina del Alto Comisionado de las Naciones Unidas para los Derechos Humanos','OTRAS INSTITUCIONES'),(17,'Organizaciones cívicas','OTRAS INSTITUCIONES'),(18,'Organizaciones indígenas','OTRAS INSTITUCIONES'),(19,'Órgano Electoral','OTRAS INSTITUCIONES'),(20,'Partidos políticos','OTRAS INSTITUCIONES'),(21,'Sistema de educación','OTRAS INSTITUCIONES'),(22,'Sociedad civil','OTRAS INSTITUCIONES'),(23,'General','OTRAS INSTITUCIONES'),(24,'Periodistas y comunicadores','OTRAS INSTITUCIONES'),(25,'Sector Privado','OTRAS INSTITUCIONES'),(26,'Ministerio de Justicia','ÓRGANO EJECUTIVO'),(27,'Procuraduria','OTRAS INSTITUCIONES'),(28,'Cancilleria','OTRAS INSTITUCIONES'),(29,'Tribunal Supremo de Justicia','ÓRGANO JUDICIAL'),(30,'Tribunal Constitucional','ÓRGANO JUDICIAL'),(31,'Ministerio de la Presidencia','ÓRGANO EJECUTIVO'),(32,'Ministerio de Relaciones Exteriores','ÓRGANO EJECUTIVO'),(33,'Ministerio de Economía y Finanzas','ÓRGANO EJECUTIVO'),(34,'Ministerio de Minería y Metalurgia\r\n','ÓRGANO EJECUTIVO'),(35,'Ministerio de Hidrocarburos y Energía\r\n','ÓRGANO EJECUTIVO'),(36,'Ministerio de Planificación del Desarrollo\r\n','ÓRGANO EJECUTIVO'),(37,'Ministerio de Desarrollo Productivo y Economía Plural\r\n','ÓRGANO EJECUTIVO'),(38,'Ministerio de Trabajo, Empleo y Previsión Social\r\n','ÓRGANO EJECUTIVO'),(39,'Ministerio de Culturas y Turismo\r\n','ÓRGANO EJECUTIVO'),(40,'Ministerio de Defensa\r\n','ÓRGANO EJECUTIVO'),(41,'Ministerio de Obras Públicas, Servicios y Vivienda\r\n','ÓRGANO EJECUTIVO'),(42,'Ministerio de Educación\r\n','ÓRGANO EJECUTIVO'),(43,'Ministerio de Salud y Deportes\r\n','ÓRGANO EJECUTIVO'),(44,'Ministerio de Desarrollo Rural y Tierras\r\n','ÓRGANO EJECUTIVO'),(45,'Ministerio de Autonomías\r\n','ÓRGANO EJECUTIVO'),(46,'Tribunal Agroambiental\r\n','ÓRGANO JUDICIAL'),(47,'Tribunales Departamentales de justicia (9)\r\n','ÓRGANO JUDICIAL'),(48,'Consejo de la Magistratura\r\n','ÓRGANO JUDICIAL'),(49,'Cámara de Diputados\r\n','ÓRGANO LEGISLATIVO\r\n'),(50,'Cámara de Senadores\r\n','ÓRGANO LEGISLATIVO\r\n'),(51,'Tribunal Supremo Electoral Plurinacional\r\n','ÓRGANO ELECTORAL\r\n'),(52,'Tribunales Departamentales Electorales (9)\r\n','ÓRGANO ELECTORAL\r\n'),(53,'Gobiernos Departamentales Autónomos (9)\r\n','OTRAS INSTITUCIONES'),(54,'Gobiernos Municipales Autónomos (9)\r\n','OTRAS INSTITUCIONES'),(55,'UDAPE\r\n','OTRAS INSTITUCIONES'),(56,'INE\r\n','OTRAS INSTITUCIONES'),(57,'SNIS\r\n','OTRAS INSTITUCIONES'),(58,'SIE\r\n','OTRAS INSTITUCIONES');
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
INSERT INTO `mecanismo_recomendacion` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,2,8),(9,1,9),(10,1,10);
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
  `Prefijo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mecanismos`
--

LOCK TABLES `mecanismos` WRITE;
/*!40000 ALTER TABLE `mecanismos` DISABLE KEYS */;
INSERT INTO `mecanismos` VALUES (1,'Órgano de Tratado','OT'),(2,'Procedimientos Especiales','PE'),(3,'Examen Periódico Universal (EPU)','EPU'),(4,'Comité para la Eliminación de la Discriminación contra la Mujer','C2'),(5,'Comité de Protección de los Derechos de Todos los Trabajadores Migratorios y de sus Familiares','C3'),(6,'Comité de los Derechos del Niño','C4'),(7,'Comité de Derechos Humanos','C5'),(8,'Comité de Derechos Económicos, Sociales y Culturales','C6'),(9,'Comité Contra la Tortura','C7');
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
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacions`
--

LOCK TABLES `notificacions` WRITE;
/*!40000 ALTER TABLE `notificacions` DISABLE KEYS */;
INSERT INTO `notificacions` VALUES (1,1,7,'Debe responder a la solicitud:SPSEG00001-001','2016-08-17 07:37:44','pendiente'),(2,1,1,'Solicitudes respondidas, favor revisar accion:SPSEG00001-001','2016-08-17 07:38:55','pendiente'),(3,1,2,'Solicitudes respondidas, favor revisar accion:SPSEG00001-001','2016-08-17 07:38:55','pendiente'),(4,1,6,'Solicitudes respondidas, favor revisar accion:SPSEG00001-001','2016-08-17 07:38:55','pendiente'),(5,1,8,'debe autorizar la accion con codigo:SPSEG00001-001','2016-08-19 05:45:56','pendiente'),(6,1,3,'debe autorizar la accion con codigo:SPSEG00001-001','2016-08-19 06:30:08','pendiente'),(7,2,7,'Debe responder a la solicitud:SPSEG00001-002','2016-08-19 07:36:52','pendiente'),(8,2,1,'Solicitudes respondidas, favor revisar accion:SPSEG00001-002','2016-08-19 07:38:23','pendiente'),(9,2,2,'Solicitudes respondidas, favor revisar accion:SPSEG00001-002','2016-08-19 07:38:23','pendiente'),(10,2,6,'Solicitudes respondidas, favor revisar accion:SPSEG00001-002','2016-08-19 07:38:23','pendiente'),(11,2,8,'debe autorizar la accion con codigo:SPSEG00001-002','2016-08-19 07:41:27','pendiente'),(12,2,3,'debe autorizar la accion con codigo:SPSEG00001-002','2016-08-19 07:42:00','pendiente'),(13,3,7,'Debe responder a la solicitud:SPSEG00002-003','2016-08-21 16:40:56','pendiente'),(14,3,1,'Solicitudes respondidas, favor revisar accion:SPSEG00002-003','2016-08-22 01:23:59','pendiente'),(15,3,2,'Solicitudes respondidas, favor revisar accion:SPSEG00002-003','2016-08-22 01:23:59','pendiente'),(16,3,6,'Solicitudes respondidas, favor revisar accion:SPSEG00002-003','2016-08-22 01:23:59','pendiente'),(17,4,7,'Debe responder a la solicitud:SPSEG00004-004','2016-08-22 01:24:39','pendiente'),(18,5,7,'Debe responder a la solicitud:SPSEG00005-005','2016-08-22 04:59:37','pendiente'),(19,5,1,'Solicitudes respondidas, favor revisar accion:SPSEG00005-005','2016-08-22 05:00:16','pendiente'),(20,5,2,'Solicitudes respondidas, favor revisar accion:SPSEG00005-005','2016-08-22 05:00:16','pendiente'),(21,5,6,'Solicitudes respondidas, favor revisar accion:SPSEG00005-005','2016-08-22 05:00:17','pendiente'),(22,6,7,'Debe responder a la solicitud:SPSEG00005-006','2016-08-22 05:13:01','pendiente'),(23,6,1,'Solicitudes respondidas, favor revisar accion:SPSEG00005-006','2016-08-22 05:13:36','pendiente'),(24,6,2,'Solicitudes respondidas, favor revisar accion:SPSEG00005-006','2016-08-22 05:13:36','pendiente'),(25,6,6,'Solicitudes respondidas, favor revisar accion:SPSEG00005-006','2016-08-22 05:13:36','pendiente'),(26,7,7,'Debe responder a la solicitud:SPSEG00005-007','2016-08-22 05:59:54','pendiente'),(27,8,7,'Debe responder a la solicitud:SPSEG00007-008','2016-08-22 06:27:20','pendiente'),(28,7,1,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:34','pendiente'),(29,7,2,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:35','pendiente'),(30,7,6,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:35','pendiente'),(31,7,1,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:36','pendiente'),(32,7,2,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:36','pendiente'),(33,7,6,'Solicitudes respondidas, favor revisar accion:SPSEG00005-007','2016-08-22 14:00:36','pendiente'),(34,13,7,'Debe responder a la solicitud:SPSEG00009-013','2016-08-22 20:01:32','pendiente'),(35,13,1,'Solicitudes respondidas, favor revisar accion:SPSEG00009-013','2016-08-22 20:10:24','pendiente'),(36,13,2,'Solicitudes respondidas, favor revisar accion:SPSEG00009-013','2016-08-22 20:10:25','pendiente'),(37,13,6,'Solicitudes respondidas, favor revisar accion:SPSEG00009-013','2016-08-22 20:10:25','pendiente'),(38,13,8,'debe autorizar la accion con codigo:SPSEG00009-013','2016-08-22 20:17:15','pendiente'),(39,8,1,'Solicitudes respondidas, favor revisar accion:SPSEG00007-008','2016-08-23 01:18:37','pendiente'),(40,8,2,'Solicitudes respondidas, favor revisar accion:SPSEG00007-008','2016-08-23 01:18:37','pendiente'),(41,8,6,'Solicitudes respondidas, favor revisar accion:SPSEG00007-008','2016-08-23 01:18:37','pendiente'),(42,4,1,'Solicitudes respondidas, favor revisar accion:SPSEG00004-004','2016-08-23 02:28:12','pendiente'),(43,4,2,'Solicitudes respondidas, favor revisar accion:SPSEG00004-004','2016-08-23 02:28:12','pendiente'),(44,4,6,'Solicitudes respondidas, favor revisar accion:SPSEG00004-004','2016-08-23 02:28:12','pendiente'),(45,14,7,'Debe responder a la solicitud:SPSEG00009-014','2016-08-23 02:29:46','pendiente'),(46,14,1,'Solicitudes respondidas, favor revisar accion:SPSEG00009-014','2016-08-23 02:46:41','pendiente'),(47,14,2,'Solicitudes respondidas, favor revisar accion:SPSEG00009-014','2016-08-23 02:46:42','pendiente'),(48,14,6,'Solicitudes respondidas, favor revisar accion:SPSEG00009-014','2016-08-23 02:46:42','pendiente'),(49,15,7,'Debe responder a la solicitud:SPSEG00009-015','2016-08-23 02:47:33','pendiente'),(50,15,1,'Solicitudes respondidas, favor revisar accion:SPSEG00009-015','2016-08-23 02:49:51','pendiente'),(51,15,2,'Solicitudes respondidas, favor revisar accion:SPSEG00009-015','2016-08-23 02:49:51','pendiente'),(52,15,6,'Solicitudes respondidas, favor revisar accion:SPSEG00009-015','2016-08-23 02:49:51','pendiente'),(53,16,7,'Debe responder a la solicitud:SPSEG00004-016','2016-08-23 03:54:39','pendiente'),(54,17,7,'Debe responder a la solicitud:SPSEG00013-017','2016-08-23 05:51:02','pendiente'),(55,17,1,'Solicitudes respondidas, favor revisar accion:SPSEG00013-017','2016-08-23 05:51:46','pendiente'),(56,17,2,'Solicitudes respondidas, favor revisar accion:SPSEG00013-017','2016-08-23 05:51:46','pendiente'),(57,17,6,'Solicitudes respondidas, favor revisar accion:SPSEG00013-017','2016-08-23 05:51:46','pendiente'),(58,18,7,'Debe responder a la solicitud:SPSEG00014-018','2016-08-23 07:00:53','pendiente'),(59,18,1,'Solicitudes respondidas, favor revisar accion:SPSEG00014-018','2016-08-23 07:01:17','pendiente'),(60,18,2,'Solicitudes respondidas, favor revisar accion:SPSEG00014-018','2016-08-23 07:01:17','pendiente'),(61,18,6,'Solicitudes respondidas, favor revisar accion:SPSEG00014-018','2016-08-23 07:01:17','pendiente'),(62,16,1,'Solicitudes respondidas, favor revisar accion:SPSEG00004-016','2016-08-23 07:05:05','pendiente'),(63,16,2,'Solicitudes respondidas, favor revisar accion:SPSEG00004-016','2016-08-23 07:05:05','pendiente'),(64,16,6,'Solicitudes respondidas, favor revisar accion:SPSEG00004-016','2016-08-23 07:05:05','pendiente'),(65,19,7,'Debe responder a la solicitud:SPSEG00014-019','2016-08-23 07:06:58','pendiente'),(66,19,1,'Solicitudes respondidas, favor revisar accion:SPSEG00014-019','2016-08-23 07:07:22','pendiente'),(67,19,2,'Solicitudes respondidas, favor revisar accion:SPSEG00014-019','2016-08-23 07:07:22','pendiente'),(68,19,6,'Solicitudes respondidas, favor revisar accion:SPSEG00014-019','2016-08-23 07:07:22','pendiente'),(69,20,7,'Debe responder a la solicitud:SPSEG00014-020','2016-08-23 07:08:40','pendiente'),(70,20,1,'Solicitudes respondidas, favor revisar accion:SPSEG00014-020','2016-08-23 07:11:11','pendiente'),(71,20,2,'Solicitudes respondidas, favor revisar accion:SPSEG00014-020','2016-08-23 07:11:11','pendiente'),(72,20,6,'Solicitudes respondidas, favor revisar accion:SPSEG00014-020','2016-08-23 07:11:12','pendiente'),(73,21,7,'Debe responder a la solicitud:SPSEG00014-021','2016-08-23 07:11:51','pendiente'),(74,22,7,'Debe responder a la solicitud:SPSEG00015-022','2016-08-24 01:54:19','pendiente'),(75,22,1,'Solicitudes respondidas, favor revisar accion:SPSEG00015-022','2016-08-24 01:56:07','pendiente'),(76,22,2,'Solicitudes respondidas, favor revisar accion:SPSEG00015-022','2016-08-24 01:56:07','pendiente'),(77,22,6,'Solicitudes respondidas, favor revisar accion:SPSEG00015-022','2016-08-24 01:56:07','pendiente'),(78,23,7,'Debe responder a la solicitud:SPSEG00016-023','2016-08-24 18:50:11','pendiente'),(79,23,1,'Solicitudes respondidas, favor revisar accion:SPSEG00016-023','2016-08-24 18:51:04','pendiente'),(80,23,2,'Solicitudes respondidas, favor revisar accion:SPSEG00016-023','2016-08-24 18:51:04','pendiente'),(81,23,6,'Solicitudes respondidas, favor revisar accion:SPSEG00016-023','2016-08-24 18:51:04','pendiente'),(82,23,8,'debe autorizar la accion con codigo:SPSEG00016-023','2016-08-24 18:53:13','pendiente'),(83,23,3,'debe autorizar la accion con codigo:SPSEG00016-023','2016-08-24 18:53:47','pendiente'),(84,24,7,'Debe responder a la solicitud:SPSEG00017-024','2016-08-24 20:20:21','pendiente'),(85,24,1,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:28:02','pendiente'),(86,24,2,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:28:02','pendiente'),(87,24,6,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:28:02','pendiente'),(88,24,7,'Se rechazo su respuesta, por favor revise la solicitud:SPSEG00017-024','2016-08-24 20:38:45','pendiente'),(89,24,1,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:40:51','pendiente'),(90,24,2,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:40:51','pendiente'),(91,24,6,'Solicitudes respondidas, favor revisar accion:SPSEG00017-024','2016-08-24 20:40:51','pendiente'),(92,24,8,'debe autorizar la accion con codigo:SPSEG00017-024','2016-08-24 20:43:53','pendiente'),(93,24,3,'debe autorizar la accion con codigo:SPSEG00017-024','2016-08-24 20:45:41','pendiente');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poblacion_recomendacion`
--

LOCK TABLES `poblacion_recomendacion` WRITE;
/*!40000 ALTER TABLE `poblacion_recomendacion` DISABLE KEYS */;
INSERT INTO `poblacion_recomendacion` VALUES (1,1,1),(2,2,1),(3,3,2),(4,4,1),(5,5,1),(6,6,1),(7,7,1),(8,8,1),(9,9,2),(10,10,1),(11,11,1),(12,12,1),(13,13,1),(14,14,1),(15,15,1),(16,16,1),(17,17,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poblacions`
--

LOCK TABLES `poblacions` WRITE;
/*!40000 ALTER TABLE `poblacions` DISABLE KEYS */;
INSERT INTO `poblacions` VALUES (1,'General'),(2,'Mujeres'),(3,'Niñas, niños y adolescentes'),(4,'Naciones y pueblos indígena originario y campesinos'),(5,'Personas adultas mayores'),(6,'Comunidad afroboliviana'),(7,'Defensores/as de derechos humanos'),(8,'Funcionarios/as del Estado'),(9,'Periodistas y comunicadores'),(10,'Personas con diferente orientación sexual y de identidad de género '),(11,'Personas con discapacidad'),(12,'Personas extranjeras'),(13,'Personas migrantes y sus familiares'),(14,'Personas privadas de libertad'),(15,'Refugiados/as'),(16,'Pueblos Indígenas');
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
  CONSTRAINT `fk_Recomendacions_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recomendacions_2` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recomendacions`
--

LOCK TABLES `recomendacions` WRITE;
/*!40000 ALTER TABLE `recomendacions` DISABLE KEYS */;
INSERT INTO `recomendacions` VALUES (1,'Recomendacion de prueba','2016-08-12 03:00:08','2016-08-12 03:00:08',2,1,'SPREC00001'),(2,'Recomendacion prueba','2016-08-17 07:32:12','2016-08-17 07:32:12',6,1,'SPREC00002'),(3,'recomendaciones','2016-08-21 22:22:38','2016-08-21 22:22:38',2,9,'SPREC00003'),(4,'desc','2016-08-21 23:04:27','2016-08-21 23:04:27',2,9,'SPREC00004'),(5,'recomendacion de prueba cona djunto','2016-08-22 04:59:01','2016-08-22 04:59:01',2,9,'SPREC00005'),(6,'descripcion de nueva recomendacion','2016-08-22 06:24:48','2016-08-22 06:24:48',2,1,'SPREC00006'),(7,'nueva recomendacion','2016-08-22 06:25:13','2016-08-22 06:25:13',2,1,'SPREC00007'),(8,'prueba','2016-08-22 06:53:58','2016-08-22 06:53:58',2,1,'SPREC00008'),(9,'prueba 22/8','2016-08-22 13:37:33','2016-08-22 13:37:33',6,9,'SPREC00009'),(10,'desc','2016-08-23 03:33:27','2016-08-23 03:33:27',6,1,'SPREC00010'),(11,'descripcion','2016-08-23 03:51:55','2016-08-23 03:51:55',6,1,'SPREC00011'),(12,'descripcion','2016-08-23 04:01:46','2016-08-23 04:01:46',6,1,'SPREC00012'),(13,'nueva rec','2016-08-23 05:16:47','2016-08-23 05:16:47',6,1,'SPREC00013'),(14,'descrip','2016-08-23 07:00:26','2016-08-23 07:00:26',6,1,'SPREC00014'),(15,'recomendacion','2016-08-24 01:51:00','2016-08-24 01:51:00',6,1,'OTD1SPREC00015'),(16,'descr','2016-08-24 18:49:50','2016-08-24 18:49:50',6,1,'OTD1SPREC00016'),(17,'descripcion de recomendacion de prueba','2016-08-24 20:12:36','2016-08-24 20:12:36',6,1,'OTD1SPREC00017');
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
INSERT INTO `rols` VALUES (1,'iniciador_min_justicia',26),(2,'ejecutor_min_justicia',26),(3,'iniciador/ejecutor_min_justicia',26),(4,'aprobador_cancilleria',28),(5,'aprobador_estado',1),(6,'aprobador_procuraduria',27);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes_pendientes_respuestas`
--

LOCK TABLES `solicitudes_pendientes_respuestas` WRITE;
/*!40000 ALTER TABLE `solicitudes_pendientes_respuestas` DISABLE KEYS */;
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
INSERT INTO `users` VALUES (1,'iniciador','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-22 07:06:00','2016-06-22 07:06:00',1),(2,'admin','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-22 21:05:00','2016-06-22 21:05:00',2),(3,'aprobador_cancilleria','$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy','2016-06-24 23:23:00','2016-06-24 23:23:00',4),(6,'iniciador_aprobador_min_justicia','$2y$10$EvhYWhjUkyobfElzgLDNGeeT3ahzp7R2clNL6XfQI1vLxiV/WqD72','2016-08-01 14:38:00','2016-08-01 14:38:00',3),(7,'aprobador_estado','$2y$10$evJ..iXd3VJnyh/IzwtJzO.bo4y1To2RrFagrE9W2EwAJICai.pBC','2016-08-01 15:04:00','2016-08-01 15:04:00',5),(8,'aprobador_procuraduria','$2y$10$WZcvCJ6AuB6e5HEXwgfKwOkyzOqLsC1OKcKyvkaPpUmPqpDnMg2UO','2016-08-01 15:05:00','2016-08-01 15:05:00',6);
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

-- Dump completed on 2016-08-28 15:39:59
