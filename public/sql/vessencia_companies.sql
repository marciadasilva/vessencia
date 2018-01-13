-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vessencia
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.','https://www.facebook.com/vessencia',NULL,NULL,'(55) 9955-9990','vessencia@outlook.com','08:00 às 18:00','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei. Ei intellegat dissentiunt duo, ad recusabo efficiendi vis, pri cu tale eros expetendis. Cu sed clita dolore consul, vis ne sint adhuc explicari. Vim no alienum molestie voluptatum, sumo accumsan sensibus sed in. Ei vel sint perpetua voluptaria.\r\n\r\nCongue omittam appareat ei cum, veniam nominavi vim ei. Ne lorem omnium laboramus nam, pro ea illum officiis. No cum sumo enim impetus. Per quidam vituperatoribus ad, at sit nulla consetetur, ex nec autem dolores. In doctus comprehensam eam.','2018-01-13 13:35:18','2018-01-13 13:35:18'),(2,'Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.','https://www.facebook.com/vessencia',NULL,NULL,'(55) 9955-9990','vessencia@outlook.com','08:00 às 18:00','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei. Ei intellegat dissentiunt duo, ad recusabo efficiendi vis, pri cu tale eros expetendis. Cu sed clita dolore consul, vis ne sint adhuc explicari. Vim no alienum molestie voluptatum, sumo accumsan sensibus sed in. Ei vel sint perpetua voluptaria.\r\n\r\nCongue omittam appareat ei cum, veniam nominavi vim ei. Ne lorem omnium laboramus nam, pro ea illum officiis. No cum sumo enim impetus. Per quidam vituperatoribus ad, at sit nulla consetetur, ex nec autem dolores. In doctus comprehensam eam.','2018-01-13 13:37:13','2018-01-13 13:37:13');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-13 10:57:32
