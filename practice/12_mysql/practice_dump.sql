-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: practice
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gr_tch`
--

DROP TABLE IF EXISTS `gr_tch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gr_tch` (
  `id_gr` int NOT NULL,
  `id_tch` int NOT NULL,
  KEY `gr_tch_groops_id_fk` (`id_gr`),
  KEY `gr_tch_teachers_id_fk` (`id_tch`),
  CONSTRAINT `gr_tch_groops_id_fk` FOREIGN KEY (`id_gr`) REFERENCES `groops` (`id`),
  CONSTRAINT `gr_tch_teachers_id_fk` FOREIGN KEY (`id_tch`) REFERENCES `teachers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gr_tch`
--

LOCK TABLES `gr_tch` WRITE;
/*!40000 ALTER TABLE `gr_tch` DISABLE KEYS */;
INSERT INTO `gr_tch` VALUES (1,1),(1,2),(1,7),(3,1),(3,2),(3,4),(4,2),(4,1),(4,7),(6,3),(6,2),(6,1),(6,4);
/*!40000 ALTER TABLE `gr_tch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groops`
--

DROP TABLE IF EXISTS `groops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `groops` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groops`
--

LOCK TABLES `groops` WRITE;
/*!40000 ALTER TABLE `groops` DISABLE KEYS */;
INSERT INTO `groops` VALUES (1,'m-12'),(2,'b-3'),(3,'r-4'),(4,'s-1'),(5,'b-12'),(6,'n-3'),(7,'s-56'),(8,'d-5');
/*!40000 ALTER TABLE `groops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_gr`
--

DROP TABLE IF EXISTS `st_gr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `st_gr` (
  `id_st` int NOT NULL,
  `id_gr` int NOT NULL,
  KEY `st_gr_groops_id_fk` (`id_gr`),
  KEY `st_gr_students_id_fk` (`id_st`),
  CONSTRAINT `st_gr_groops_id_fk` FOREIGN KEY (`id_gr`) REFERENCES `groops` (`id`),
  CONSTRAINT `st_gr_students_id_fk` FOREIGN KEY (`id_st`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_gr`
--

LOCK TABLES `st_gr` WRITE;
/*!40000 ALTER TABLE `st_gr` DISABLE KEYS */;
INSERT INTO `st_gr` VALUES (1,2),(2,3),(2,5),(3,6),(3,3),(4,7),(4,4),(5,7),(5,6),(6,2),(10,3),(10,4),(12,2),(12,4),(13,4);
/*!40000 ALTER TABLE `st_gr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Ginrir','Trornires',17),(2,'Oran','Tril',18),(3,'Cusser','Uvaraen',17),(4,'Narsdek','Gwondix',19),(5,'Eassad','Hossirr',21),(6,'Onnipald','Pidrataerg',18),(7,'Skes','Grondosont',19),(8,'Erlepees','Hogrollij',18),(9,'Skaldenn','Yddessar',19),(10,'Pirwothim','Retilant',17),(11,'Mallet','Turboraint',16),(12,'Zalna','Subalam',22),(13,'Vidnia','Sagron',19),(14,'Araa','Roldamaar',20);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Chondroness','Glylve'),(2,'Meru','Brossano'),(3,'Chustossi','Stutasa'),(4,'Dass','Thox'),(5,'Lor','Ondathen'),(6,'Molli','Ather'),(7,'Legle','Stomarri');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-14  6:25:29
