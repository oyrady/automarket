-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: automarket
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `anio_fabricacion` int(11) DEFAULT NULL,
  `combustible` varchar(30) DEFAULT NULL,
  `transmision` varchar(30) DEFAULT NULL,
  `cilindrada` varchar(30) DEFAULT NULL,
  `descripcion` longtext,
  `condicion_tecnica` varchar(30) DEFAULT NULL,
  `kilometros` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `moneda` varchar(10) DEFAULT NULL,
  `negociable` varchar(2) DEFAULT NULL,
  `fotos_array` varchar(500) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono_1` varchar(20) DEFAULT NULL,
  `telefono_2` varchar(15) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,'fiat','option1',2017,'option1','option1','option1','Descripcion del vehiculo','option1',1500,1500,'Pesos','NO','a:1:{i:0;s:40:\"780d946d20d1e0b0c7afa75c9ff0b8f1766ca39d\";}','Eduardo','1123964954','1123964954','Buenos Aires'),(2,'fiat','option1',2017,'option1','option1','option1','Descripcion del vehiculo','option1',1500,1500,'Pesos','NO','a:1:{i:0;s:40:\"af26569b1fe89bb68517d6cee9d1bfcae1b8bf89\";}','Eduardo','1123964954','1123964954','Buenos Aires'),(3,'toyota','option1',2017,'option1','option1','option1','Datos Geniales del vehiculo','option1',1500,1500,'Pesos','SI','a:6:{i:0;s:40:\"e280cea86aa6ecb95210f3de523c83d8f3acfe24\";i:1;s:40:\"4ad61bec3a2ab461570add290cdc5fb8a18ef2f5\";i:2;s:40:\"da833a4aa3f8dc2b70d3bf9575d006e06342fa80\";i:3;s:40:\"19f46ef374381543e0b2713895db8ee407d9792c\";i:4;s:40:\"07a7be97feaa22ecb83e8e0981e41b2bb9a011a9\";i:5;s:40:\"f54028a50c82e15570bd34c91e14f6cd31efb7d6\";}','Eduardo','1123964954','1123964954','Buenos Aires');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'automarket'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-02 22:30:46
