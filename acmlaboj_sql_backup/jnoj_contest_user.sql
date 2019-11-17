CREATE DATABASE  IF NOT EXISTS `jnoj` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jnoj`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 172.28.210.177    Database: jnoj
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `contest_user`
--

DROP TABLE IF EXISTS `contest_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contest_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `user_password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `rating_change` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_contest_id` (`contest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest_user`
--

LOCK TABLES `contest_user` WRITE;
/*!40000 ALTER TABLE `contest_user` DISABLE KEYS */;
INSERT INTO `contest_user` VALUES (8,14,2,'mqrBKNTV',NULL,NULL),(9,15,2,'fisGS345',NULL,NULL),(10,16,2,'aehxyMUX',NULL,NULL),(11,17,2,'fpwEJKN7',NULL,NULL),(12,18,2,'dgtzJLMV',NULL,NULL),(13,19,2,'hvxyFG38',NULL,NULL),(14,20,2,'wyGKST39',NULL,NULL),(15,21,2,'ctvxFW37',NULL,NULL),(16,22,2,'abdszDSU',NULL,NULL),(17,23,2,'ntCEFHQY',NULL,NULL),(18,24,2,'ipsuDQV9',NULL,NULL),(19,25,2,'dfkmtx25',NULL,NULL),(20,26,2,'bjxUX345',NULL,NULL),(21,27,2,'dmrJRTX5',NULL,NULL),(22,28,2,'aczQVW28',NULL,NULL),(23,29,2,'hmuxADSU',NULL,NULL),(24,30,2,'abcuFMT4',NULL,NULL),(25,31,2,'CDJPS789',NULL,NULL),(26,32,2,'aiqvwEQX',NULL,NULL),(27,33,2,'bqEM2348',NULL,NULL),(28,34,2,'bfwALQ29',NULL,NULL),(29,35,2,'cEFGMN46',NULL,NULL),(30,36,2,'qzBCHM27',NULL,NULL),(31,37,2,'btuyCHM8',NULL,NULL),(32,38,2,'bkvAJL29',NULL,NULL),(33,39,2,'ahizJPWX',NULL,NULL),(34,40,2,'nrvzETY8',NULL,NULL),(35,41,2,'amEGKNQS',NULL,NULL),(36,42,2,'ejntxADP',NULL,NULL),(37,43,2,'defmqtKL',NULL,NULL),(38,44,2,'guCEPU36',NULL,NULL),(39,45,2,'cprxAS49',NULL,NULL),(40,46,2,'bdrtCMY6',NULL,NULL),(41,47,2,'bfiKQR56',NULL,NULL),(42,48,2,'dtzDJZ48',NULL,NULL),(43,49,2,'BEHJNU78',NULL,NULL),(44,50,2,'ACDKVZ56',NULL,NULL),(45,51,2,'cjzGUX67',NULL,NULL),(46,52,2,'svDEFWYZ',NULL,NULL),(47,53,2,'gmnpvNQU',NULL,NULL),(48,54,2,'fiyALNRS',NULL,NULL),(49,55,2,'ghnpxEL8',NULL,NULL),(50,56,2,'avDKRW47',NULL,NULL),(51,57,2,'aceswJW3',NULL,NULL),(52,58,2,'bghnyBX7',NULL,NULL),(53,59,2,'fsDESTZ6',NULL,NULL),(54,60,2,'hkuxPQX9',NULL,NULL),(55,61,2,'fjmwBQY5',NULL,NULL),(56,62,2,'begkAGPY',NULL,NULL),(57,63,2,'duDFNTV8',NULL,NULL),(58,64,2,'eghmwFN3',NULL,NULL),(59,65,2,'tyJPXYZ3',NULL,NULL),(60,66,2,'djuEFRY3',NULL,NULL),(61,67,2,'bdijnqBM',NULL,NULL),(62,68,2,'jrzGKNU7',NULL,NULL),(63,69,2,'bhnqtARS',NULL,NULL),(64,70,2,'bhuAPT24',NULL,NULL),(65,71,2,'swAKVWX9',NULL,NULL),(66,72,2,'ehknqDEN',NULL,NULL),(67,73,2,'rwEQSUW5',NULL,NULL),(68,74,2,'cdgqsDGU',NULL,NULL),(69,75,2,'erxyKLR3',NULL,NULL),(70,6,2,NULL,NULL,NULL),(71,13,2,'erxyKLR3',NULL,NULL);
/*!40000 ALTER TABLE `contest_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed