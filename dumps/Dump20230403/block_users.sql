CREATE DATABASE  IF NOT EXISTS `block` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `block`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: block
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role` smallint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Солонухин Илья','gregory16house@mail.ru','$2y$10$Gif6HVPZ3MUATl3FVhxYPuUhg8Pesyk0VKeIkBh2ElGQL1NBqG4pK',NULL,'2023-04-02 09:55:23','2023-04-02 10:18:23','2023-04-02 10:18:23',NULL),(2,'sdadda','adsad@mail.ru','$2y$10$WtqhMafTCjt8jcBg/JU5huvmOKK7u/46JGdLw.DErwVKQszbf2NV6',NULL,'2023-04-02 10:07:30','2023-04-02 10:18:26','2023-04-02 10:18:26',NULL),(3,'Солонухин Илья','gregory16houseads@mail.ru','$2y$10$.ryQ1yAdJ92a47uJzwKViOmcvKiZp3ztcMRcuMwD5KccdF7NNiwhq',NULL,'2023-04-02 10:18:34','2023-04-02 11:10:06','2023-04-02 11:10:06',NULL),(4,'Fer122','gregory2house@mail.ru','$2y$10$SF/Xl8q5Wr4N/7vjeKXLKe5k.v6L/VKnXhNw3mrf5REJC4dugcLiq',NULL,'2023-04-02 11:11:34','2023-04-02 11:22:30',NULL,0),(5,'Moder','gregory2houseads@mail.ru','$2y$10$eyX5e5I7BGoTXNvKfqlykOOGz1.WJTpZcbElcbXH3Q/WP9i9IBimq',NULL,'2023-04-02 11:11:53','2023-04-02 11:11:53',NULL,1),(6,'admin','gregory501house@mail.ru','$2y$10$4wN1qcTDt.ZJosnB95UaKe8Z7AAjSnq73YPiFa2HksoTYJCVhRtPW',NULL,'2023-04-02 11:23:04','2023-04-02 11:23:04',NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-03  2:31:07
