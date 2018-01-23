-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vessencia
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,1,3,'Prato 1','img/menus//image_5233.jpeg','No cum sumo enim impetus.','2018-01-13 14:09:32','2018-01-13 14:41:42'),(2,1,3,'Prato 2','img/menus//image_3786.jpeg','Ne lorem omnium laboramus nam, pro ea illum officiis.','2018-01-13 14:10:16','2018-01-13 14:41:31'),(3,1,4,'Prato 1','img/menus//image_9051.jpeg','Ne lorem omnium laboramus nam, pro ea illum officiis.','2018-01-13 14:10:54','2018-01-13 14:40:58'),(4,1,5,'Prato 1','img/menus//image_8711.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:30:57','2018-01-13 14:40:48'),(5,1,5,'Prato 2','img/menus//image_4731.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:31:23','2018-01-13 14:40:40'),(6,1,5,'Prato 3','img/menus//image_1210.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:31:45','2018-01-13 14:40:33'),(7,1,3,'Prato 3','img/menus//image_6427.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:32:08','2018-01-13 14:40:24'),(8,1,2,'Prato 1','img/menus//image_3876.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:33:02','2018-01-13 14:40:15'),(9,1,1,'Prato 1','img/menus//image_8643.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:33:30','2018-01-13 14:40:07'),(10,1,1,'Prato 2','img/menus//image_3934.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:33:45','2018-01-13 14:40:00'),(11,1,2,'Prato 2','img/menus//image_7488.jpeg','Lorem ipsum dolor sit amet, sea melius epicurei consetetur ei.','2018-01-13 14:34:07','2018-01-13 14:39:53');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 10:12:39
