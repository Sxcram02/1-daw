CREATE DATABASE  IF NOT EXISTS `mundialQatar` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mundialQatar`;
-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: mundialQatar
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `seleccion`
--

DROP TABLE IF EXISTS seleccion;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE seleccion (
  codigoFIFA char(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  nombre varchar(45) COLLATE utf8mb3_spanish_ci NOT NULL,
  `confederación` varchar(15) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  PRIMARY KEY (codigoFIFA),
  UNIQUE KEY nombre_UNIQUE (nombre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seleccion`
--
-- ORDER BY:  codigoFIFA

/*!40000 ALTER TABLE seleccion DISABLE KEYS */;
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('ARG','Argentina','Conmebol');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('AUS','Australia','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('BEL','Bélgica','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('BRA','Brasil','Conmebol');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('CAM','Camerún','CAF');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('CAN','Canadá','Concacaf');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('CRC','Costa Rica','Conmebol');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('CRO','Croacia','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('DEN','Dinamarca','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('ECU','Ecuador','Conmebol');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('ENG','Inglaterra','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('ESP','España','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('FRA','Francia','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('GER','Alemania','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('GHA','Ghana','CAF');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('IRN','Irán','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('JPN','Japón','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('KOR','Corea del Sur','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('KSA','Arabia Saudí','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('MAR','Marruecos','CAF');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('MEX','México','Concacaf');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('NED','Países Bajos','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('POL','Polonia','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('POR','Portugal','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('QAT','Qatar','AFC');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('SEN','Senegal','CAF');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('SRB','Serbia','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('SUI','Suiza','UEFA');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('TUN','Túnez','CAF');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('URU','Uruguay','Conmebol');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('USA','Estados Unidos','Concacaf');
INSERT  IGNORE INTO seleccion (codigoFIFA, nombre, confederación) VALUES ('WAL','Gales','UEFA');
/*!40000 ALTER TABLE seleccion ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
