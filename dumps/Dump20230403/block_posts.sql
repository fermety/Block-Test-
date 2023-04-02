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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_category_idx` (`category_id`),
  CONSTRAINT `post_category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (4,'Потолки','<p>фывыффввы</p>',7,'2023-04-02 08:26:19','2023-04-02 08:39:20','images/mdBDMxuEO5gfkkGoUKVphuxD0V4LzPwxXmi8VKym.jpg','images/Nyod6lbwH7QMlkOARTShTMhBNxhaZC3hacaTnroN.jpg','2023-04-02 08:39:20'),(5,'Пушистые','<p>sa</p>',9,'2023-04-02 08:39:12','2023-04-02 14:14:21','images/hKLTRV5XnXithcraFqbqAGBS4rDngvrgoxYgMwiE.jpg','images/2NAaL6OecJmsveYlQ4UCA8kOHWzmJCYfWC70fQ58.jpg',NULL),(6,'sdad','<p>asdsadsddaas</p>',6,'2023-04-02 16:33:30','2023-04-02 16:33:30','images/cRNxk2mLZetXWxmoL7StjuoLKDhfSFDvFnZimceT.jpg','images/NyweVXh54ZzP6G7dROgQmw0aWaipXi7xdrVRqYpu.jpg',NULL),(7,'Котики','<p>adsaddsasda</p>',5,'2023-04-02 16:33:57','2023-04-02 16:33:57','images/uhKpzXUt2zbWSZcn3o4Cn8vF9Jm8YYJcWiwuXpbI.jpg','images/ICOkAa1dUm7qiiDanizrC61BGr5zft8pCWYXAmCi.jpg',NULL),(8,'fermety','<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>',7,'2023-04-02 16:34:22','2023-04-02 16:34:22','images/uBomOdPmr5v4OlEHhQjmwA7tPRIuVjmkD46Dsj83.jpg','images/NWDmsMiSaDB3zP2jhDI5K46XLcmuB6jbenLLrZMa.jpg',NULL),(9,'Натяжные потолки','<p>fffffffffffffffffffffffsssssssssssssssssssssssss</p>',9,'2023-04-02 16:34:48','2023-04-02 16:34:48','images/8KbJLNoAe9IZTjxaFmd0Cf7zNjlZpjr6FHtTYFnk.jpg','images/8ERK8gpjf1JsuxsK4oIvWN9l7HcLFAp91EjJ7TxC.jpg',NULL),(10,'Триумфатор Арены','<p>dddddasssssss</p>',6,'2023-04-02 16:35:07','2023-04-02 16:35:07','images/EOkxsOFdvRPm6B2FFlrysTBS3HZjafkl5GPPYwQh.jpg','images/5Rn7nZQZFRLuMcdxxEyFPaVyJjXchiqIKFrPjDmh.jpg',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
