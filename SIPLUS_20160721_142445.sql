-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "SIPLUS" --------------------------------
CREATE DATABASE IF NOT EXISTS `SIPLUS` CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `SIPLUS`;
-- ---------------------------------------------------------


-- CREATE TABLE "accions" ----------------------------------
DROP TABLE IF EXISTS `accions` CASCADE;

CREATE TABLE `accions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 1000 ) NOT NULL,
	`fecha` DateTime NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`politica` VarChar( 255 ) NOT NULL,
	`programa` VarChar( 255 ) NOT NULL,
	`direccion` VarChar( 255 ) NOT NULL,
	`reporte` VarChar( 255 ) NOT NULL,
	`desafios` VarChar( 500 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 10;
-- ---------------------------------------------------------


-- CREATE TABLE "adjuntos_accions" -------------------------
DROP TABLE IF EXISTS `adjuntos_accions` CASCADE;

CREATE TABLE `adjuntos_accions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`accion_id` Int( 11 ) NOT NULL,
	`link` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- ---------------------------------------------------------


-- CREATE TABLE "adjuntos_recomendacions" ------------------
DROP TABLE IF EXISTS `adjuntos_recomendacions` CASCADE;

CREATE TABLE `adjuntos_recomendacions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`link` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 12;
-- ---------------------------------------------------------


-- CREATE TABLE "adjuntos_versions" ------------------------
DROP TABLE IF EXISTS `adjuntos_versions` CASCADE;

CREATE TABLE `adjuntos_versions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`version_id` Int( 11 ) NOT NULL,
	`link` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "autorizacions" ----------------------------
DROP TABLE IF EXISTS `autorizacions` CASCADE;

CREATE TABLE `autorizacions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`estado_id` Int( 11 ) NOT NULL,
	`fecha_modificacion` DateTime NOT NULL,
	`visto_bueno_fisico` Bit( 1 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 33;
-- ---------------------------------------------------------


-- CREATE TABLE "derecho_recomendacion" --------------------
DROP TABLE IF EXISTS `derecho_recomendacion` CASCADE;

CREATE TABLE `derecho_recomendacion` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`derecho_id` Int( 11 ) NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 13;
-- ---------------------------------------------------------


-- CREATE TABLE "derechos" ---------------------------------
DROP TABLE IF EXISTS `derechos` CASCADE;

CREATE TABLE `derechos` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 255 ) NOT NULL,
	`indicador_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "estados" ----------------------------------
DROP TABLE IF EXISTS `estados` CASCADE;

CREATE TABLE `estados` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 100 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 10;
-- ---------------------------------------------------------


-- CREATE TABLE "indicadores_derechos" ---------------------
DROP TABLE IF EXISTS `indicadores_derechos` CASCADE;

CREATE TABLE `indicadores_derechos` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`derecho_id` Int( 255 ) NOT NULL,
	`indicador_id` Int( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "indicadors" -------------------------------
DROP TABLE IF EXISTS `indicadors` CASCADE;

CREATE TABLE `indicadors` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nombre` VarChar( 255 ) NOT NULL,
	`link` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "institucion_recomendacion" ----------------
DROP TABLE IF EXISTS `institucion_recomendacion` CASCADE;

CREATE TABLE `institucion_recomendacion` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`institucion_id` Int( 11 ) NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 17;
-- ---------------------------------------------------------


-- CREATE TABLE "institucions" -----------------------------
DROP TABLE IF EXISTS `institucions` CASCADE;

CREATE TABLE `institucions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "mecanismo_recomendacion" ------------------
DROP TABLE IF EXISTS `mecanismo_recomendacion` CASCADE;

CREATE TABLE `mecanismo_recomendacion` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`mecanismo_id` Int( 11 ) NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 12;
-- ---------------------------------------------------------


-- CREATE TABLE "mecanismos" -------------------------------
DROP TABLE IF EXISTS `mecanismos` CASCADE;

CREATE TABLE `mecanismos` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "notificacions" ----------------------------
DROP TABLE IF EXISTS `notificacions` CASCADE;

CREATE TABLE `notificacions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	`mensaje` VarChar( 1000 ) NOT NULL,
	`fecha` DateTime NOT NULL,
	`estado` VarChar( 50 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 33;
-- ---------------------------------------------------------


-- CREATE TABLE "poblacion_recomendacion" ------------------
DROP TABLE IF EXISTS `poblacion_recomendacion` CASCADE;

CREATE TABLE `poblacion_recomendacion` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`poblacion_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 15;
-- ---------------------------------------------------------


-- CREATE TABLE "poblacions" -------------------------------
DROP TABLE IF EXISTS `poblacions` CASCADE;

CREATE TABLE `poblacions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`descripcion` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "recomendacion_parametros" -----------------
DROP TABLE IF EXISTS `recomendacion_parametros` CASCADE;

CREATE TABLE `recomendacion_parametros` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`prioridad` Decimal( 19, 2 ) NOT NULL,
	`tiempo` Decimal( 19, 2 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "recomendacions" ---------------------------
DROP TABLE IF EXISTS `recomendacions` CASCADE;

CREATE TABLE `recomendacions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`titulo` VarChar( 255 ) NOT NULL,
	`descripcion` VarChar( 1000 ) NOT NULL,
	`fecha_creacion` DateTime NOT NULL,
	`fecha_modificacion` DateTime NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	`estado_id` Int( 11 ) NOT NULL,
	`año` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 13;
-- ---------------------------------------------------------


-- CREATE TABLE "revisions" --------------------------------
DROP TABLE IF EXISTS `revisions` CASCADE;

CREATE TABLE `revisions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	`resultado` VarChar( 500 ) NOT NULL,
	`fecha` DateTime NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "rols" -------------------------------------
DROP TABLE IF EXISTS `rols` CASCADE;

CREATE TABLE `rols` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nombre` VarChar( 255 ) NOT NULL,
	`institucion_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
DROP TABLE IF EXISTS `users` CASCADE;

CREATE TABLE `users` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nombre_usuario` VarChar( 255 ) NOT NULL,
	`password` VarChar( 255 ) NOT NULL,
	`fecha_creacion` DateTime NOT NULL,
	`fecha_modificacion` DateTime NOT NULL,
	`rol_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- ---------------------------------------------------------


-- CREATE TABLE "versions" ---------------------------------
DROP TABLE IF EXISTS `versions` CASCADE;

CREATE TABLE `versions` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`recomendacion_id` Int( 11 ) NOT NULL,
	`titulo` VarChar( 45 ) NOT NULL,
	`descripcion` VarChar( 45 ) NOT NULL,
	`fecha` DateTime NOT NULL,
	`usuario_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- Dump data of "accions" ----------------------------------
INSERT INTO `accions`(`id`,`descripcion`,`fecha`,`usuario_id`,`recomendacion_id`,`politica`,`programa`,`direccion`,`reporte`,`desafios`) VALUES ( '5', 'desc', '2016-07-04 03:50:01', '2', '5', 'politica', 'pro', 'dir', 'repo', 'des' );
INSERT INTO `accions`(`id`,`descripcion`,`fecha`,`usuario_id`,`recomendacion_id`,`politica`,`programa`,`direccion`,`reporte`,`desafios`) VALUES ( '6', 'descripcion de la accion', '2016-07-04 08:16:42', '2', '6', 'accion politica', 'programa 1', 'nueva direccion', 'reporte', 'desafioos' );
INSERT INTO `accions`(`id`,`descripcion`,`fecha`,`usuario_id`,`recomendacion_id`,`politica`,`programa`,`direccion`,`reporte`,`desafios`) VALUES ( '7', 'descripcion de recomendacion de prueba', '2016-07-04 08:17:46', '2', '10', 'Nueva politica', 'Nuevo Programa', 'Nueva Direccion', 'Nuevo Reporte', 'Desafgio' );
INSERT INTO `accions`(`id`,`descripcion`,`fecha`,`usuario_id`,`recomendacion_id`,`politica`,`programa`,`direccion`,`reporte`,`desafios`) VALUES ( '8', 'descripcion de recomendacion de prueba', '2016-07-04 08:29:41', '2', '9', 'politica', 'programa', 'Calle D num 15 Urb. Suiza 1 Barrio Huantaqui Zona Achumani', 'reporter', 'desafio1' );
INSERT INTO `accions`(`id`,`descripcion`,`fecha`,`usuario_id`,`recomendacion_id`,`politica`,`programa`,`direccion`,`reporte`,`desafios`) VALUES ( '9', 'desc', '2016-07-04 08:33:43', '2', '9', 'politica', 'programa', 'Callejon Caracoles 152 Edif. Valdivia', 'reporter', 'desafio1' );
-- ---------------------------------------------------------


-- Dump data of "adjuntos_accions" -------------------------
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '2', '5', '1467604202_2015-reviews.pdf' );
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '3', '5', '1467604202_cakephp-upload.pdf' );
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '4', '6', '1467620202_2015-reviews.pdf' );
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '5', '7', '1467620266_2015-reviews.pdf' );
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '6', '8', '1467620981_2015-reviews.pdf' );
INSERT INTO `adjuntos_accions`(`id`,`accion_id`,`link`) VALUES ( '7', '9', '1467621223_cronogramasiplus.ods' );
-- ---------------------------------------------------------


-- Dump data of "adjuntos_recomendacions" ------------------
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '1', '2', '1466828486_capussoto.jpg' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '2', '3', '1466830476_s' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '3', '4', '1466830615_s' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '4', '5', '1466830643_leoq.jpg' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '5', '6', '1467575921_bdfnew.sql' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '6', '7', '1467575921_bdfnew.sql' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '7', '8', '1467575921_bdfnew.sql' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '8', '9', '1467575921_bdfnew.sql' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '9', '10', '1467575921_bdfnew.sql' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '10', '11', '1467736642_specsapi.odt' );
INSERT INTO `adjuntos_recomendacions`(`id`,`recomendacion_id`,`link`) VALUES ( '11', '12', '1467736768_specsapi.odt' );
-- ---------------------------------------------------------


-- Dump data of "adjuntos_versions" ------------------------
-- ---------------------------------------------------------


-- Dump data of "autorizacions" ----------------------------
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '1', '3', '2', '1', '2016-06-25 04:21:25', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '2', '3', '3', '1', '2016-06-25 04:54:35', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '3', '3', '4', '1', '2016-06-25 04:56:54', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '4', '2', '5', '3', '2016-07-04 07:41:12', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '5', '1', '6', '1', '2016-07-03 19:54:03', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '6', '2', '6', '1', '2016-07-03 19:54:03', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '7', '4', '6', '1', '2016-07-03 19:54:03', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '8', '5', '6', '1', '2016-07-03 19:54:03', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '9', '1', '7', '1', '2016-07-03 19:56:08', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '10', '2', '7', '1', '2016-07-03 19:56:08', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '11', '4', '7', '1', '2016-07-03 19:56:08', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '12', '5', '7', '1', '2016-07-03 19:56:08', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '13', '1', '8', '1', '2016-07-03 19:56:52', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '14', '2', '8', '1', '2016-07-03 19:56:52', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '15', '4', '8', '1', '2016-07-03 19:56:52', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '16', '5', '8', '1', '2016-07-03 19:56:52', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '17', '1', '9', '1', '2016-07-03 19:58:20', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '18', '2', '9', '1', '2016-07-03 19:58:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '19', '4', '9', '1', '2016-07-03 19:58:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '20', '5', '9', '1', '2016-07-03 19:58:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '21', '1', '10', '1', '2016-07-03 19:58:40', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '22', '2', '10', '1', '2016-07-03 19:58:40', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '23', '4', '10', '1', '2016-07-03 19:58:41', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '24', '5', '10', '1', '2016-07-03 19:58:41', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '25', '1', '11', '1', '2016-07-05 16:37:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '26', '2', '11', '1', '2016-07-05 16:37:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '27', '4', '11', '1', '2016-07-05 16:37:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '28', '5', '11', '1', '2016-07-05 16:37:21', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '29', '1', '12', '1', '2016-07-05 16:39:27', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '30', '2', '12', '1', '2016-07-05 16:39:27', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '31', '4', '12', '1', '2016-07-05 16:39:28', '' );
INSERT INTO `autorizacions`(`id`,`usuario_id`,`recomendacion_id`,`estado_id`,`fecha_modificacion`,`visto_bueno_fisico`) VALUES ( '32', '5', '12', '1', '2016-07-05 16:39:28', '' );
-- ---------------------------------------------------------


-- Dump data of "derecho_recomendacion" --------------------
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '1', '1', '2' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '2', '2', '2' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '3', '1', '3' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '4', '1', '4' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '5', '3', '5' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '6', '1', '6' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '7', '1', '7' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '8', '1', '8' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '9', '1', '9' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '10', '1', '10' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '11', '1', '11' );
INSERT INTO `derecho_recomendacion`(`id`,`derecho_id`,`recomendacion_id`) VALUES ( '12', '1', '12' );
-- ---------------------------------------------------------


-- Dump data of "derechos" ---------------------------------
INSERT INTO `derechos`(`id`,`descripcion`,`indicador_id`) VALUES ( '1', 'Derecho 1', '3' );
INSERT INTO `derechos`(`id`,`descripcion`,`indicador_id`) VALUES ( '2', 'Derecho 2', '2' );
INSERT INTO `derechos`(`id`,`descripcion`,`indicador_id`) VALUES ( '3', 'Derecho 3', '1' );
-- ---------------------------------------------------------


-- Dump data of "estados" ----------------------------------
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '1', 'Borrador' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '2', 'En Revision' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '3', 'Aprobado' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '4', 'Rechazado' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '5', 'Aprobado 1er Ejecutor' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '6', 'Rechazado 1er ejecutor' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '7', 'Aprobado 2do ejecutor' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '8', 'Rechazado 2do Ejecutor' );
INSERT INTO `estados`(`id`,`descripcion`) VALUES ( '9', 'Publicado' );
-- ---------------------------------------------------------


-- Dump data of "indicadores_derechos" ---------------------
-- ---------------------------------------------------------


-- Dump data of "indicadors" -------------------------------
INSERT INTO `indicadors`(`id`,`nombre`,`link`) VALUES ( '1', 'Indicador 1', 'http://www.ine.gob.bo/indice/indicadores.aspx' );
INSERT INTO `indicadors`(`id`,`nombre`,`link`) VALUES ( '2', 'Indicador 2', 'http://www.ine.gob.bo/indice/indicadores.aspx' );
INSERT INTO `indicadors`(`id`,`nombre`,`link`) VALUES ( '3', 'Indicador 3', 'http://www.ine.gob.bo/indice/indicadores.aspx' );
-- ---------------------------------------------------------


-- Dump data of "institucion_recomendacion" ----------------
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '2', '1', '1' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '3', '1', '1' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '4', '1', '1' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '5', '1', '1' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '6', '4', '2' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '7', '4', '3' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '8', '4', '4' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '9', '4', '5' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '10', '1', '6' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '11', '1', '7' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '12', '1', '8' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '13', '1', '9' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '14', '1', '10' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '15', '1', '11' );
INSERT INTO `institucion_recomendacion`(`id`,`institucion_id`,`recomendacion_id`) VALUES ( '16', '1', '12' );
-- ---------------------------------------------------------


-- Dump data of "institucions" -----------------------------
INSERT INTO `institucions`(`id`,`descripcion`) VALUES ( '1', 'Min. Justicia' );
INSERT INTO `institucions`(`id`,`descripcion`) VALUES ( '2', 'Min. Salud' );
INSERT INTO `institucions`(`id`,`descripcion`) VALUES ( '3', 'Procuraduria' );
INSERT INTO `institucions`(`id`,`descripcion`) VALUES ( '4', 'Cancilleria' );
-- ---------------------------------------------------------


-- Dump data of "mecanismo_recomendacion" ------------------
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '1', '1', '2' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '2', '1', '3' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '3', '1', '4' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '4', '2', '5' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '5', '1', '6' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '6', '1', '7' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '7', '1', '8' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '8', '1', '9' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '9', '1', '10' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '10', '1', '12' );
INSERT INTO `mecanismo_recomendacion`(`id`,`mecanismo_id`,`recomendacion_id`) VALUES ( '11', '3', '12' );
-- ---------------------------------------------------------


-- Dump data of "mecanismos" -------------------------------
INSERT INTO `mecanismos`(`id`,`descripcion`) VALUES ( '1', 'Mecanismo 1' );
INSERT INTO `mecanismos`(`id`,`descripcion`) VALUES ( '2', 'Mecanismo 2' );
INSERT INTO `mecanismos`(`id`,`descripcion`) VALUES ( '3', 'Mecanismo 3' );
-- ---------------------------------------------------------


-- Dump data of "notificacions" ----------------------------
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '1', '2', '3', 'debe revisar la recomendacion con id:2', '2016-06-25 04:21:25', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '2', '3', '3', 'debe revisar la recomendacion con id:3', '2016-06-25 04:54:35', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '3', '4', '3', 'debe revisar la recomendacion con id:4', '2016-06-25 04:56:55', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '4', '5', '3', 'debe revisar la recomendacion con id:5', '2016-06-25 04:57:23', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '5', '6', '1', 'debe revisar la recomendacion con id:6', '2016-07-03 19:54:03', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '6', '6', '2', 'debe revisar la recomendacion con id:6', '2016-07-03 19:54:03', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '7', '6', '4', 'debe revisar la recomendacion con id:6', '2016-07-03 19:54:03', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '8', '6', '5', 'debe revisar la recomendacion con id:6', '2016-07-03 19:54:03', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '9', '7', '1', 'debe revisar la recomendacion con id:7', '2016-07-03 19:56:08', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '10', '7', '2', 'debe revisar la recomendacion con id:7', '2016-07-03 19:56:08', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '11', '7', '4', 'debe revisar la recomendacion con id:7', '2016-07-03 19:56:08', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '12', '7', '5', 'debe revisar la recomendacion con id:7', '2016-07-03 19:56:08', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '13', '8', '1', 'debe revisar la recomendacion con id:8', '2016-07-03 19:56:52', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '14', '8', '2', 'debe revisar la recomendacion con id:8', '2016-07-03 19:56:52', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '15', '8', '4', 'debe revisar la recomendacion con id:8', '2016-07-03 19:56:52', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '16', '8', '5', 'debe revisar la recomendacion con id:8', '2016-07-03 19:56:52', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '17', '9', '1', 'debe revisar la recomendacion con id:9', '2016-07-03 19:58:20', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '18', '9', '2', 'debe revisar la recomendacion con id:9', '2016-07-03 19:58:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '19', '9', '4', 'debe revisar la recomendacion con id:9', '2016-07-03 19:58:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '20', '9', '5', 'debe revisar la recomendacion con id:9', '2016-07-03 19:58:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '21', '10', '1', 'debe revisar la recomendacion con id:10', '2016-07-03 19:58:40', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '22', '10', '2', 'debe revisar la recomendacion con id:10', '2016-07-03 19:58:40', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '23', '10', '4', 'debe revisar la recomendacion con id:10', '2016-07-03 19:58:41', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '24', '10', '5', 'debe revisar la recomendacion con id:10', '2016-07-03 19:58:41', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '25', '11', '1', 'debe revisar la recomendacion con id:11', '2016-07-05 16:37:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '26', '11', '2', 'debe revisar la recomendacion con id:11', '2016-07-05 16:37:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '27', '11', '4', 'debe revisar la recomendacion con id:11', '2016-07-05 16:37:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '28', '11', '5', 'debe revisar la recomendacion con id:11', '2016-07-05 16:37:21', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '29', '12', '1', 'debe revisar la recomendacion con id:12', '2016-07-05 16:39:27', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '30', '12', '2', 'debe revisar la recomendacion con id:12', '2016-07-05 16:39:28', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '31', '12', '4', 'debe revisar la recomendacion con id:12', '2016-07-05 16:39:28', 'pendiente' );
INSERT INTO `notificacions`(`id`,`recomendacion_id`,`usuario_id`,`mensaje`,`fecha`,`estado`) VALUES ( '32', '12', '5', 'debe revisar la recomendacion con id:12', '2016-07-05 16:39:28', 'pendiente' );
-- ---------------------------------------------------------


-- Dump data of "poblacion_recomendacion" ------------------
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '1', '1', '1' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '2', '1', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '3', '2', '1' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '4', '2', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '5', '3', '1' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '6', '4', '1' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '7', '5', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '8', '6', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '9', '7', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '10', '8', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '11', '9', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '12', '10', '2' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '13', '11', '1' );
INSERT INTO `poblacion_recomendacion`(`id`,`recomendacion_id`,`poblacion_id`) VALUES ( '14', '12', '1' );
-- ---------------------------------------------------------


-- Dump data of "poblacions" -------------------------------
INSERT INTO `poblacions`(`id`,`descripcion`) VALUES ( '1', 'Poblacion 1' );
INSERT INTO `poblacions`(`id`,`descripcion`) VALUES ( '2', 'Poblacion 2' );
-- ---------------------------------------------------------


-- Dump data of "recomendacion_parametros" -----------------
-- ---------------------------------------------------------


-- Dump data of "recomendacions" ---------------------------
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '1', 'recomendacion prueba', 'descripcion prueba', '2016-06-24 15:08:53', '2016-06-24 15:08:53', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '2', 'recomendacion prueba', 'descripcion de recomendacion de prueba', '2016-06-25 04:21:25', '2016-06-25 04:21:25', '5', '1', '1212' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '3', 'recomendacion prueba 2', 'descripcion de recomendacion de prueba 2', '2016-06-25 04:54:35', '2016-06-25 04:54:35', '5', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '4', 'recomendacion prueba 2', 'descripcion de recomendacion de prueba 2', '2016-06-25 04:56:54', '2016-06-25 04:56:54', '5', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '5', 'recomendacion prueba 3', 'descripcion de recomendacion de prueba 3', '2016-06-25 04:57:23', '2016-06-25 04:57:23', '5', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '6', 'prueba rec', 'desc', '2016-07-03 19:54:02', '2016-07-03 19:54:02', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '7', 'prueba rec', 'desc', '2016-07-03 19:56:07', '2016-07-03 19:56:07', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '8', 'prueba rec', 'desc', '2016-07-03 19:56:52', '2016-07-03 19:56:52', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '9', 'prueba rec', 'desc', '2016-07-03 19:58:20', '2016-07-03 19:58:20', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '10', 'prueba rec', 'desc', '2016-07-03 19:58:40', '2016-07-03 19:58:40', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '11', 'Prueba', 'Descripcion', '2016-07-05 16:37:21', '2016-07-05 16:37:21', '2', '1', '2016' );
INSERT INTO `recomendacions`(`id`,`titulo`,`descripcion`,`fecha_creacion`,`fecha_modificacion`,`usuario_id`,`estado_id`,`año`) VALUES ( '12', 'Prueba', 'Descripcion', '2016-07-05 16:39:27', '2016-07-05 16:39:27', '2', '1', '2016' );
-- ---------------------------------------------------------


-- Dump data of "revisions" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "rols" -------------------------------------
INSERT INTO `rols`(`id`,`nombre`,`institucion_id`) VALUES ( '1', 'iniciador_min_justicia', '1' );
INSERT INTO `rols`(`id`,`nombre`,`institucion_id`) VALUES ( '2', 'ejecutor_min_justicia', '1' );
INSERT INTO `rols`(`id`,`nombre`,`institucion_id`) VALUES ( '3', 'iniciador/ejecutor_min_justicia', '1' );
INSERT INTO `rols`(`id`,`nombre`,`institucion_id`) VALUES ( '4', 'aprobador_cancilleria', '4' );
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`nombre_usuario`,`password`,`fecha_creacion`,`fecha_modificacion`,`rol_id`) VALUES ( '1', 'iniciador', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-22 07:06:00', '2016-06-22 07:06:00', '1' );
INSERT INTO `users`(`id`,`nombre_usuario`,`password`,`fecha_creacion`,`fecha_modificacion`,`rol_id`) VALUES ( '2', 'admin', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-22 21:05:00', '2016-06-22 21:05:00', '2' );
INSERT INTO `users`(`id`,`nombre_usuario`,`password`,`fecha_creacion`,`fecha_modificacion`,`rol_id`) VALUES ( '3', 'aprobador_cancilleria', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-24 23:23:00', '2016-06-24 23:23:00', '4' );
INSERT INTO `users`(`id`,`nombre_usuario`,`password`,`fecha_creacion`,`fecha_modificacion`,`rol_id`) VALUES ( '4', 'camilo', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-25 02:13:00', '2016-06-25 02:13:00', '3' );
INSERT INTO `users`(`id`,`nombre_usuario`,`password`,`fecha_creacion`,`fecha_modificacion`,`rol_id`) VALUES ( '5', 'usuario', '$2y$10$vn8eVqkCZXOt6HImEAeQ3OBmGPLnn4H9WLsdl1HCBDvXfZVt/X.Xy', '2016-06-25 02:29:00', '2016-06-25 02:29:00', '3' );
-- ---------------------------------------------------------


-- Dump data of "versions" ---------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Accions_1_idx" -------------------------
CREATE INDEX `fk_Accions_1_idx` USING BTREE ON `accions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Accions_2_idx" -------------------------
CREATE INDEX `fk_Accions_2_idx` USING BTREE ON `accions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_adjuntos_accions_1_idx" ----------------
CREATE INDEX `fk_adjuntos_accions_1_idx` USING BTREE ON `adjuntos_accions`( `accion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_adjuntos_recomendacions_1_idx" ---------
CREATE INDEX `fk_adjuntos_recomendacions_1_idx` USING BTREE ON `adjuntos_recomendacions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_adjuntos_versions_1_idx" ---------------
CREATE INDEX `fk_adjuntos_versions_1_idx` USING BTREE ON `adjuntos_versions`( `version_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Autorizaciones_1_idx" ------------------
CREATE INDEX `fk_Autorizaciones_1_idx` USING BTREE ON `autorizacions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Autorizaciones_2_idx" ------------------
CREATE INDEX `fk_Autorizaciones_2_idx` USING BTREE ON `autorizacions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Autorizaciones_3_idx" ------------------
CREATE INDEX `fk_Autorizaciones_3_idx` USING BTREE ON `autorizacions`( `estado_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_derecho_recomendacion_1_idx" -----------
CREATE INDEX `fk_derecho_recomendacion_1_idx` USING BTREE ON `derecho_recomendacion`( `derecho_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_derecho_recomendacion_2_idx" -----------
CREATE INDEX `fk_derecho_recomendacion_2_idx` USING BTREE ON `derecho_recomendacion`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_derechos_1_idx" ------------------------
CREATE INDEX `fk_derechos_1_idx` USING BTREE ON `derechos`( `indicador_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_indicadores_derechos_derechos" --------
CREATE INDEX `lnk_indicadores_derechos_derechos` USING BTREE ON `indicadores_derechos`( `derecho_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "lnk_indicadores_derechos_indicadors" ------
CREATE INDEX `lnk_indicadores_derechos_indicadors` USING BTREE ON `indicadores_derechos`( `indicador_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_institucion_recomendacion_1_idx" -------
CREATE INDEX `fk_institucion_recomendacion_1_idx` USING BTREE ON `institucion_recomendacion`( `institucion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_institucion_recomendacion_2_idx" -------
CREATE INDEX `fk_institucion_recomendacion_2_idx` USING BTREE ON `institucion_recomendacion`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_mecanismo_recomendacion_1_idx" ---------
CREATE INDEX `fk_mecanismo_recomendacion_1_idx` USING BTREE ON `mecanismo_recomendacion`( `mecanismo_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_mecanismo_recomendacion_2_idx" ---------
CREATE INDEX `fk_mecanismo_recomendacion_2_idx` USING BTREE ON `mecanismo_recomendacion`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_notificacions_1_idx" -------------------
CREATE INDEX `fk_notificacions_1_idx` USING BTREE ON `notificacions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_notificacions_2_idx" -------------------
CREATE INDEX `fk_notificacions_2_idx` USING BTREE ON `notificacions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_recomendacion_poblacion_1_idx" ---------
CREATE INDEX `fk_recomendacion_poblacion_1_idx` USING BTREE ON `poblacion_recomendacion`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_recomendacion_poblacion_2_idx" ---------
CREATE INDEX `fk_recomendacion_poblacion_2_idx` USING BTREE ON `poblacion_recomendacion`( `poblacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_recomendacion_parametros_1_idx" --------
CREATE INDEX `fk_recomendacion_parametros_1_idx` USING BTREE ON `recomendacion_parametros`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Recomendacions_1_idx" ------------------
CREATE INDEX `fk_Recomendacions_1_idx` USING BTREE ON `recomendacions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_Recomendacions_2_idx" ------------------
CREATE INDEX `fk_Recomendacions_2_idx` USING BTREE ON `recomendacions`( `estado_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_revisions_1_idx" -----------------------
CREATE INDEX `fk_revisions_1_idx` USING BTREE ON `revisions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_revisions_2_idx" -----------------------
CREATE INDEX `fk_revisions_2_idx` USING BTREE ON `revisions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_rols_1_idx" ----------------------------
CREATE INDEX `fk_rols_1_idx` USING BTREE ON `rols`( `institucion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_usuarios_1_idx" ------------------------
CREATE INDEX `fk_usuarios_1_idx` USING BTREE ON `users`( `rol_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_versions_1_idx" ------------------------
CREATE INDEX `fk_versions_1_idx` USING BTREE ON `versions`( `recomendacion_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_versions_2_idx" ------------------------
CREATE INDEX `fk_versions_2_idx` USING BTREE ON `versions`( `usuario_id` );
-- ---------------------------------------------------------


-- CREATE LINK "fk_Accions_1" ------------------------------
ALTER TABLE `accions` DROP FOREIGN KEY `fk_Accions_1`;


ALTER TABLE `accions`
	ADD CONSTRAINT `fk_Accions_1` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Accions_2" ------------------------------
ALTER TABLE `accions` DROP FOREIGN KEY `fk_Accions_2`;


ALTER TABLE `accions`
	ADD CONSTRAINT `fk_Accions_2` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_adjuntos_accions_1" ---------------------
ALTER TABLE `adjuntos_accions` DROP FOREIGN KEY `fk_adjuntos_accions_1`;


ALTER TABLE `adjuntos_accions`
	ADD CONSTRAINT `fk_adjuntos_accions_1` FOREIGN KEY ( `accion_id` )
	REFERENCES `accions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_adjuntos_recomendacions_1" --------------
ALTER TABLE `adjuntos_recomendacions` DROP FOREIGN KEY `fk_adjuntos_recomendacions_1`;


ALTER TABLE `adjuntos_recomendacions`
	ADD CONSTRAINT `fk_adjuntos_recomendacions_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_adjuntos_versions_1" --------------------
ALTER TABLE `adjuntos_versions` DROP FOREIGN KEY `fk_adjuntos_versions_1`;


ALTER TABLE `adjuntos_versions`
	ADD CONSTRAINT `fk_adjuntos_versions_1` FOREIGN KEY ( `version_id` )
	REFERENCES `versions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Autorizaciones_1" -----------------------
ALTER TABLE `autorizacions` DROP FOREIGN KEY `fk_Autorizaciones_1`;


ALTER TABLE `autorizacions`
	ADD CONSTRAINT `fk_Autorizaciones_1` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Autorizaciones_2" -----------------------
ALTER TABLE `autorizacions` DROP FOREIGN KEY `fk_Autorizaciones_2`;


ALTER TABLE `autorizacions`
	ADD CONSTRAINT `fk_Autorizaciones_2` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Autorizaciones_3" -----------------------
ALTER TABLE `autorizacions` DROP FOREIGN KEY `fk_Autorizaciones_3`;


ALTER TABLE `autorizacions`
	ADD CONSTRAINT `fk_Autorizaciones_3` FOREIGN KEY ( `estado_id` )
	REFERENCES `estados`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_derecho_recomendacion_1" ----------------
ALTER TABLE `derecho_recomendacion` DROP FOREIGN KEY `fk_derecho_recomendacion_1`;


ALTER TABLE `derecho_recomendacion`
	ADD CONSTRAINT `fk_derecho_recomendacion_1` FOREIGN KEY ( `derecho_id` )
	REFERENCES `derechos`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_derecho_recomendacion_2" ----------------
ALTER TABLE `derecho_recomendacion` DROP FOREIGN KEY `fk_derecho_recomendacion_2`;


ALTER TABLE `derecho_recomendacion`
	ADD CONSTRAINT `fk_derecho_recomendacion_2` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_derechos_1" -----------------------------
ALTER TABLE `derechos` DROP FOREIGN KEY `fk_derechos_1`;


ALTER TABLE `derechos`
	ADD CONSTRAINT `fk_derechos_1` FOREIGN KEY ( `indicador_id` )
	REFERENCES `indicadors`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "lnk_indicadores_derechos_derechos" ---------
ALTER TABLE `indicadores_derechos` DROP FOREIGN KEY `lnk_indicadores_derechos_derechos`;


ALTER TABLE `indicadores_derechos`
	ADD CONSTRAINT `lnk_indicadores_derechos_derechos` FOREIGN KEY ( `derecho_id` )
	REFERENCES `derechos`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- ---------------------------------------------------------


-- CREATE LINK "lnk_indicadores_derechos_indicadors" -------
ALTER TABLE `indicadores_derechos` DROP FOREIGN KEY `lnk_indicadores_derechos_indicadors`;


ALTER TABLE `indicadores_derechos`
	ADD CONSTRAINT `lnk_indicadores_derechos_indicadors` FOREIGN KEY ( `indicador_id` )
	REFERENCES `indicadors`( `id` )
	ON DELETE Cascade
	ON UPDATE Cascade;
-- ---------------------------------------------------------


-- CREATE LINK "fk_institucion_recomendacion_1" ------------
ALTER TABLE `institucion_recomendacion` DROP FOREIGN KEY `fk_institucion_recomendacion_1`;


ALTER TABLE `institucion_recomendacion`
	ADD CONSTRAINT `fk_institucion_recomendacion_1` FOREIGN KEY ( `institucion_id` )
	REFERENCES `institucions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_institucion_recomendacion_2" ------------
ALTER TABLE `institucion_recomendacion` DROP FOREIGN KEY `fk_institucion_recomendacion_2`;


ALTER TABLE `institucion_recomendacion`
	ADD CONSTRAINT `fk_institucion_recomendacion_2` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_mecanismo_recomendacion_1" --------------
ALTER TABLE `mecanismo_recomendacion` DROP FOREIGN KEY `fk_mecanismo_recomendacion_1`;


ALTER TABLE `mecanismo_recomendacion`
	ADD CONSTRAINT `fk_mecanismo_recomendacion_1` FOREIGN KEY ( `mecanismo_id` )
	REFERENCES `mecanismos`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_mecanismo_recomendacion_2" --------------
ALTER TABLE `mecanismo_recomendacion` DROP FOREIGN KEY `fk_mecanismo_recomendacion_2`;


ALTER TABLE `mecanismo_recomendacion`
	ADD CONSTRAINT `fk_mecanismo_recomendacion_2` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_notificacions_1" ------------------------
ALTER TABLE `notificacions` DROP FOREIGN KEY `fk_notificacions_1`;


ALTER TABLE `notificacions`
	ADD CONSTRAINT `fk_notificacions_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_notificacions_2" ------------------------
ALTER TABLE `notificacions` DROP FOREIGN KEY `fk_notificacions_2`;


ALTER TABLE `notificacions`
	ADD CONSTRAINT `fk_notificacions_2` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_recomendacion_poblacion_1" --------------
ALTER TABLE `poblacion_recomendacion` DROP FOREIGN KEY `fk_recomendacion_poblacion_1`;


ALTER TABLE `poblacion_recomendacion`
	ADD CONSTRAINT `fk_recomendacion_poblacion_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_recomendacion_poblacion_2" --------------
ALTER TABLE `poblacion_recomendacion` DROP FOREIGN KEY `fk_recomendacion_poblacion_2`;


ALTER TABLE `poblacion_recomendacion`
	ADD CONSTRAINT `fk_recomendacion_poblacion_2` FOREIGN KEY ( `poblacion_id` )
	REFERENCES `poblacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_recomendacion_parametros_1" -------------
ALTER TABLE `recomendacion_parametros` DROP FOREIGN KEY `fk_recomendacion_parametros_1`;


ALTER TABLE `recomendacion_parametros`
	ADD CONSTRAINT `fk_recomendacion_parametros_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Recomendacions_1" -----------------------
ALTER TABLE `recomendacions` DROP FOREIGN KEY `fk_Recomendacions_1`;


ALTER TABLE `recomendacions`
	ADD CONSTRAINT `fk_Recomendacions_1` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_Recomendacions_2" -----------------------
ALTER TABLE `recomendacions` DROP FOREIGN KEY `fk_Recomendacions_2`;


ALTER TABLE `recomendacions`
	ADD CONSTRAINT `fk_Recomendacions_2` FOREIGN KEY ( `estado_id` )
	REFERENCES `estados`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_revisions_1" ----------------------------
ALTER TABLE `revisions` DROP FOREIGN KEY `fk_revisions_1`;


ALTER TABLE `revisions`
	ADD CONSTRAINT `fk_revisions_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_revisions_2" ----------------------------
ALTER TABLE `revisions` DROP FOREIGN KEY `fk_revisions_2`;


ALTER TABLE `revisions`
	ADD CONSTRAINT `fk_revisions_2` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_usuarios_1" -----------------------------
ALTER TABLE `users` DROP FOREIGN KEY `fk_usuarios_1`;


ALTER TABLE `users`
	ADD CONSTRAINT `fk_usuarios_1` FOREIGN KEY ( `rol_id` )
	REFERENCES `rols`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_versions_1" -----------------------------
ALTER TABLE `versions` DROP FOREIGN KEY `fk_versions_1`;


ALTER TABLE `versions`
	ADD CONSTRAINT `fk_versions_1` FOREIGN KEY ( `recomendacion_id` )
	REFERENCES `recomendacions`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


-- CREATE LINK "fk_versions_2" -----------------------------
ALTER TABLE `versions` DROP FOREIGN KEY `fk_versions_2`;


ALTER TABLE `versions`
	ADD CONSTRAINT `fk_versions_2` FOREIGN KEY ( `usuario_id` )
	REFERENCES `users`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


