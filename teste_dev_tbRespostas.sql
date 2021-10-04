-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: teste_dev.mysql.dbaas.com.br    Database: teste_dev
-- ------------------------------------------------------
-- Server version	5.7.32-35-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbRespostas`
--

DROP TABLE IF EXISTS `tbRespostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbRespostas` (
  `idResposta` int(11) NOT NULL AUTO_INCREMENT,
  `enquete_id` int(11) NOT NULL DEFAULT '0',
  `resposta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdVotos` int(11) DEFAULT '0',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`idResposta`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbRespostas`
--

LOCK TABLES `tbRespostas` WRITE;
/*!40000 ALTER TABLE `tbRespostas` DISABLE KEYS */;
INSERT INTO `tbRespostas` VALUES (75,50,'Sim',11,'2021-10-03 15:46:59.000000','2021-10-03 20:02:29.000000',NULL),(76,50,'Não',3,'2021-10-03 15:46:59.000000','2021-10-03 20:06:53.000000',NULL),(77,51,'0 - 18',1,'2021-10-03 20:09:43.000000','2021-10-03 20:10:49.000000',NULL),(78,51,'19-30',1,'2021-10-03 20:09:43.000000','2021-10-03 20:10:39.000000',NULL),(79,51,'30 - 50',1,'2021-10-03 20:09:43.000000','2021-10-03 20:11:05.000000',NULL);
/*!40000 ALTER TABLE `tbRespostas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-03 19:45:11