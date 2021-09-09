-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: fashion_valley
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `addresses`
--
CREATE DATABASE `fashion_valley`;
USE `fashion_valley`;

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mob_no` bigint NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `pin_code` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_addresses_1_idx` (`user_id`),
  CONSTRAINT `fk_addresses_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (9,'Work Office',8284756515,'Sector-F','Vikas Nagar','Lucknow','Uttar Pradesh',226056,7);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `category_slug` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'MEN','men'),(5,'WOMEN','women'),(6,'KIDS','kids');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_details_orders1_idx` (`order_id`),
  KEY `fk_order_details_products1_idx` (`product_id`),
  CONSTRAINT `fk_order_details_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `fk_order_details_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users1_idx` (`user_id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_subcategories`
--

DROP TABLE IF EXISTS `product_subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_subcategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_subcategories_1_idx` (`product_id`),
  KEY `fk_product_subcategories_2_idx` (`subcategory_id`),
  CONSTRAINT `fk_product_subcategories_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_product_subcategories_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_subcategories`
--

LOCK TABLES `product_subcategories` WRITE;
/*!40000 ALTER TABLE `product_subcategories` DISABLE KEYS */;
INSERT INTO `product_subcategories` VALUES (8,7,7),(9,7,14),(10,8,6),(11,8,12),(12,9,6),(13,9,12),(14,10,6),(15,10,12),(16,11,6),(17,11,12),(18,12,6),(19,12,12),(20,13,6),(21,13,12),(22,14,6),(23,14,12),(24,15,6),(25,15,13),(26,16,6),(27,16,13),(28,17,6),(29,17,13),(30,18,6),(31,18,13),(32,19,6),(33,19,13),(34,20,6),(35,20,13),(38,22,6),(39,22,17),(40,23,6),(41,23,17),(42,24,6),(43,24,17),(44,25,6),(45,25,17),(46,26,6),(47,26,17),(48,27,6),(49,27,17),(50,28,6),(51,28,17),(52,29,6),(53,29,17),(54,30,6),(55,30,17),(56,31,6),(57,31,17),(58,32,6),(59,33,6),(60,34,6),(61,35,6),(62,36,6),(63,37,6),(64,37,12),(65,38,6),(66,38,13),(67,39,6),(68,39,13),(69,40,6),(70,40,13),(71,41,6),(72,41,13),(73,42,6),(74,42,13),(75,43,6),(76,43,13),(77,44,6),(78,44,13),(79,45,30),(80,46,30),(81,47,6),(82,47,30),(83,48,30),(84,49,6),(85,49,30),(86,50,6),(87,50,30),(88,51,6),(89,51,30),(90,52,6),(91,52,30),(92,53,6),(93,53,30),(94,54,6),(95,54,30),(96,55,6),(97,55,31),(98,56,6),(99,56,31),(100,57,6),(101,57,31),(102,58,6),(103,58,31),(104,59,6),(105,59,31),(106,60,6),(107,60,31),(108,61,7),(109,61,14),(110,62,7),(111,62,14),(112,63,7),(113,63,14),(114,64,7),(115,64,14),(116,65,7),(117,65,14),(118,66,7),(119,66,15),(120,67,7),(121,67,15),(122,68,7),(123,68,15),(124,69,7),(125,69,15),(126,70,7),(127,70,15),(128,71,7),(129,71,15),(130,72,7),(131,72,16),(132,73,7),(133,73,16),(134,74,7),(135,74,16),(136,75,7),(137,75,16),(138,76,7),(139,76,16),(140,77,7),(141,77,16),(142,78,7),(143,78,16),(146,80,7),(147,80,16),(148,81,7),(149,81,16),(150,82,7),(151,82,16),(152,83,7),(153,83,16),(154,84,7),(155,84,16),(156,85,7),(157,85,16),(158,86,7),(159,86,16),(169,92,9),(170,92,21),(171,93,9),(172,93,21),(173,94,9),(174,94,21),(175,95,9),(176,95,21),(177,96,9),(178,96,18),(179,97,9),(180,97,18),(181,98,9),(182,98,18),(183,99,9),(184,99,19),(185,100,9),(186,100,19),(187,101,8),(188,101,22),(189,102,8),(190,102,22),(193,104,8),(194,104,22),(195,105,8),(196,105,22),(197,106,8),(198,106,23),(199,107,23),(200,108,23),(201,109,23),(202,110,8),(203,111,8),(204,112,8),(205,113,8),(206,114,10),(207,114,25),(208,115,10),(209,115,25),(210,116,10),(211,116,25),(212,117,10),(213,117,25),(214,118,10),(215,118,25),(216,119,10),(217,119,26),(218,120,10),(219,120,26),(220,121,10),(221,121,26),(222,122,10),(223,122,26),(224,123,10),(225,123,26),(226,124,11),(227,124,24),(228,125,11),(229,125,24),(230,126,11),(231,126,28),(232,127,11),(233,127,28),(236,129,11),(237,129,28),(238,130,11),(239,130,28),(240,131,11),(241,131,29),(242,132,11),(243,132,29),(244,133,11),(245,133,29),(246,134,11),(247,134,29),(250,136,11),(251,136,29),(252,137,11),(253,137,27),(254,138,11),(255,138,27),(256,139,11),(257,139,27),(258,140,11),(259,140,27),(260,141,11),(261,141,27),(262,142,9),(263,142,20),(264,143,9),(265,143,20),(266,144,9),(267,144,20),(268,145,9),(269,145,20),(272,147,9),(273,147,20),(274,148,9),(275,148,20),(276,149,9),(277,149,20);
/*!40000 ALTER TABLE `product_subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `unit_price` decimal(6,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (7,'DENIM\'s JEANS','Denim\'s high quality jeans with 1 year valid guarantee. 10 days instant replacement with no extra charges.',2999.00,'2021-05-03 14:13:05','2021-05-03 14:13:05'),(8,'Roadster ','Solid round neck T-shirt',999.00,'2021-05-03 16:10:32','2021-05-03 16:10:32'),(9,'HueTrap','Printed round neck T-shirt',759.00,'2021-05-03 16:13:17','2021-05-03 16:13:17'),(10,'Here&Now','Solid Polo collar T-shirts',439.00,'2021-05-03 16:15:56','2021-05-03 16:15:56'),(11,'Here&Now','Men printed round neck T-shirt',411.00,'2021-05-03 16:18:53','2021-05-03 16:18:53'),(12,'Dillinger','Printed round neck T-shirt',539.00,'2021-05-03 16:21:18','2021-05-03 16:21:18'),(13,'Ether','Printed round neck Men\'s T-shirt',269.00,'2021-05-03 16:22:52','2021-05-03 16:22:52'),(14,'BULLMER','Printed Polo collar T-shirt',589.00,'2021-05-03 16:24:10','2021-05-03 16:24:10'),(15,'DENNISON','Men regular fit formal shirt',593.00,'2021-05-03 16:26:12','2021-05-03 16:26:12'),(16,'ENGLISH NAVY','Men slim fit formal shirt',499.00,'2021-05-03 16:27:43','2021-05-03 16:27:43'),(17,'ENGLISH NAVY','Men Grey Slim Fit Solid Formal Shirt',599.00,'2021-05-03 16:29:07','2021-05-03 16:29:07'),(18,'INVICTUS','Men Charcoal Black Slim Fit Checked Pure Cotton Formal Shirt',999.00,'2021-05-03 16:31:04','2021-05-03 16:31:04'),(19,'Dennis Lingo','Men Navy Blue Slim Fit Solid Casual Shirt',665.00,'2021-05-03 16:33:41','2021-05-03 16:33:41'),(20,'Roadster ','Men Light Blue Solid Fit Casual Shirt',599.00,'2021-05-03 16:35:36','2021-05-03 16:35:36'),(22,'Louis Philippe','Men Navy Blue & Beige Slim Fit Solid Single Breasted Smart Casual Blazer',6229.00,'2021-05-03 16:41:27','2021-05-03 16:41:27'),(23,'Peter England','Men Navy & Off-White Self-Design Neo Slim Fit Single-Breasted Formal Blazer',3199.00,'2021-05-03 16:43:22','2021-05-03 16:43:22'),(24,'INVICTUS','Men Navy & Black Checked Slim Fit Single-Breasted Formal Blazer',2924.00,'2021-05-03 16:44:31','2021-05-03 16:44:31'),(25,'FAVOROSKI','Teal Blue Slim Fit Single-Breasted Blazer',5999.00,'2021-05-03 16:46:04','2021-05-03 16:46:04'),(26,'Peter England','Men Grey and Black Checked Slim-Fit Single-Breasted Blazer',3999.00,'2021-05-03 16:47:43','2021-05-03 16:47:43'),(27,'MAXENCE','Men Navy Blue Self-Design Slim-Fit Bandhgala Formal Blazer',2789.00,'2021-05-03 16:49:06','2021-05-03 16:49:06'),(28,'Peter England','Men Grey Solid Neo Slim Fit Single-Breasted Formal Suit',6399.00,'2021-05-03 16:50:50','2021-05-03 16:50:50'),(29,'Arrow','Navy Blue and White Tailored Fit Single-Breasted Formal Suit',9599.00,'2021-05-03 16:57:02','2021-05-03 16:57:02'),(30,'MANQ','Men Beige Solid Slim Fit Ethnic Bandhgala Suit',3299.00,'2021-05-03 16:58:10','2021-05-03 16:58:10'),(31,'Arrow Lucknow','Men Grey Solid Single-Breasted Formal Suit',4499.00,'2021-05-03 17:00:00','2021-05-03 17:00:00'),(32,'H&M','Men Light Blue Relaxed Fit Hoodie',1499.00,'2021-05-03 17:03:33','2021-05-03 17:03:33'),(33,'WROGN','Men Olive Green Printed Sweatshirt',799.00,'2021-05-03 17:05:36','2021-05-03 17:05:36'),(34,'Kappa','Men Black Solid Sweatshirt',1104.00,'2021-05-03 17:07:26','2021-05-03 17:07:26'),(35,'Campus Sutra','Men Mustard Yellow Printed Hooded Pullover Sweatshirt',849.00,'2021-05-03 17:08:38','2021-05-03 17:08:38'),(36,'H&M','Men Blue & Grey Block-Coloured Hoodie',2299.00,'2021-05-03 17:11:48','2021-05-03 17:11:48'),(37,'DILLINGER','Men Black and White Solid Round Neck T-shirt',539.00,'2021-05-03 17:14:24','2021-05-03 17:14:24'),(38,'Mast & Harbour','Men Blue Regular Fit Solid Casual Shirt',1599.00,'2021-05-03 17:16:07','2021-05-03 17:16:07'),(39,'GANT','Men Light Blue Regular Fit Solid Casual Shirt',5999.00,'2021-05-03 17:17:38','2021-05-03 17:17:38'),(40,'Levis','Men Charcoal Grey Slim Fit Solid Casual Shirt',1799.00,'2021-05-03 17:19:24','2021-05-03 17:19:24'),(41,'HIGHLANDER','Highlander White Solid Slim Fit Casual Shirt',499.00,'2021-05-03 17:20:14','2021-05-03 17:20:14'),(42,'Roadster ','Men Maroon Regular Fit Solid Casual Shirt',999.00,'2021-05-03 17:21:22','2021-05-03 17:21:22'),(43,'HIGHLANDER','Men Black Slim Fit Solid Casual Shirt',549.00,'2021-05-03 17:22:47','2021-05-03 17:22:47'),(44,'Roadster ','Men Black & Maroon Regular Fit Checked Casual Shirt',699.00,'2021-05-03 17:23:32','2021-05-03 17:23:32'),(45,'Campus Sutra','Men Black & Grey Colourblocked Hooded Sweatshirt',999.00,'2021-05-03 17:29:46','2021-05-03 17:29:46'),(46,'Rigo','Men Olive Green Printed Sweatshirt',599.00,'2021-05-03 17:30:56','2021-05-03 17:30:56'),(47,'Campus Sutra','Men Mustard Yellow Printed Hooded Pullover Sweatshirt',849.00,'2021-06-18 22:54:23','2021-06-18 22:54:23'),(48,'H&M','Men Blue & Grey Block-Coloured Hoodie',2299.00,'2021-06-18 22:57:41','2021-06-18 22:57:41'),(49,'GANT','Men Red Sweatshirt',5399.00,'2021-06-18 23:02:48','2021-06-18 23:02:48'),(50,'Indian Terrain','Men Olive Green Solid Sweatshirt',959.00,'2021-06-18 23:04:24','2021-06-18 23:04:24'),(51,'INVICTUS','Men Black Solid Sweatshirt',699.00,'2021-06-18 23:07:10','2021-06-18 23:07:10'),(52,'Campus Sutra','Men Blue Light Sweatshirt',849.00,'2021-06-18 23:09:44','2021-06-18 23:09:44'),(53,'AMERICAN CREW','Men Black Colourblocked Sweatshirt',699.00,'2021-06-18 23:11:23','2021-06-18 23:11:23'),(54,'Here&Now','Men Teal Blue & Black Striped Sweatshirt',659.00,'2021-06-18 23:12:41','2021-06-18 23:12:41'),(55,'TEAKWOOD LEATHERS','Men Brown Leather Lightweight Leather Jacket',7999.00,'2021-06-18 23:14:33','2021-06-18 23:14:33'),(56,'Ecko Unltd','Men Solid Denim Jacket',1229.00,'2021-06-18 23:16:17','2021-06-18 23:16:17'),(57,'LEATHER RETAIL','Men Black Solid Leather Jacket',1699.00,'2021-06-18 23:17:12','2021-06-18 23:17:12'),(58,'BLUE SAINT','Men Grey Solid Lightweight Tailored Jacket',1299.00,'2021-06-18 23:18:54','2021-06-18 23:18:54'),(59,'OKANE','Men Grey & Black Reversible Bomber Jacket',1399.00,'2021-06-18 23:19:31','2021-06-18 23:19:31'),(60,'Here&Now','Men Blue Faded Denim Jacket',1699.00,'2021-06-18 23:20:17','2021-06-18 23:20:17'),(61,'LEVIS','Men White Slim Tapered Fit Mid-Rise Clean Look Jeans',3009.00,'2021-06-18 23:22:27','2021-06-18 23:22:27'),(62,'HIGHLANDER','Men Grey Tapered Fit Mid-Rise Clean Look Stretchable Jeans',623.00,'2021-06-18 23:23:15','2021-06-18 23:23:15'),(63,'ROADSTER','Men Blue Premium Mildly Distressed Acid Wash Skinny Fit Stretchable Jeans',1149.00,'2021-06-18 23:24:01','2021-06-18 23:24:01'),(64,'Here&Now','Men Black Slim Fit Mid-Rise Clean Look Stretchable Jeans',1149.00,'2021-06-18 23:24:38','2021-06-18 23:24:38'),(65,'WROGEN','Men Blue Jogger Mid-Rise Clean Look Stretchable Jeans',1259.00,'2021-06-18 23:25:23','2021-06-18 23:25:23'),(66,'Roadster ','Men Olive Green Solid Regular Fit Chino Shorts',499.00,'2021-06-18 23:26:26','2021-06-18 23:26:26'),(67,'Mast & Harbour','Men Blue Solid Regular Fit Denim Shorts',959.00,'2021-06-18 23:27:23','2021-06-18 23:27:23'),(68,'HRX by Hrithik Roshan','Men Black Solid Regular Fit Yoga Shorts',1299.00,'2021-06-18 23:28:32','2021-06-18 23:28:32'),(69,'WROGN','Men Olive Green Solid Slim Fit Chino Shorts',799.00,'2021-06-18 23:30:03','2021-06-18 23:30:03'),(70,'HIGH STAR','Men Blue Regular Fit Denim Shorts',899.00,'2021-06-18 23:31:00','2021-06-18 23:31:00'),(71,'CROCODILE','Men Grey Melange Solid Slim Fit Sports Shorts',699.00,'2021-06-18 23:31:42','2021-06-18 23:31:42'),(72,'BLACK COFFEE','Black Coffee Grey Sharp Fit Formal Trousers',692.00,'2021-06-18 23:34:21','2021-06-18 23:34:21'),(73,'Louis Philippe','Men Black Slim Fit Solid Formal Trousers',1077.00,'2021-06-18 23:35:02','2021-06-18 23:35:02'),(74,'Louis Philippe Ath.Work','Men Beige Comfy Tapered Fit Solid Formal Trousers',2069.00,'2021-06-18 23:35:55','2021-06-18 23:35:55'),(75,'Louis Philippe Ath.Work','Men Beige Comfy Tapered Fit Solid Formal Trousers\n',2069.00,'2021-06-18 23:38:52','2021-06-18 23:38:52'),(76,'BLACK COFFEE','Black Formal Trousers',1069.00,'2021-06-18 23:39:50','2021-06-18 23:39:50'),(77,'BLACK COFFEE','Black Formal Trousers',1069.00,'2021-06-18 23:40:28','2021-06-18 23:40:28'),(78,'INVICTUS','Men Grey Slim Fit Solid Formal Trousers',849.00,'2021-06-18 23:41:33','2021-06-18 23:41:34'),(80,'Louis Philippe','Men Grey Slim Fit Self Design Formal Trousers',1199.00,'2021-06-18 23:44:27','2021-06-18 23:44:27'),(81,'JAINISH','Men Grey Smart Slim Fit Solid Formal Trousers',679.00,'2021-06-18 23:45:15','2021-06-18 23:45:15'),(82,'ROADSTER','Men Grey Regular Fit Solid Cargos',999.00,'2021-06-18 23:47:14','2021-06-18 23:47:14'),(83,'Here&Now','Men Grey Slim Fit Solid Chinos',1299.00,'2021-06-18 23:48:49','2021-06-18 23:48:49'),(84,'MANGO MAN','Blue Slim Fit Linen Solid Regular Trousers',3213.00,'2021-06-18 23:49:44','2021-06-18 23:49:44'),(85,'Here&Now','Men Brown Slim Fit Solid Chinos',1299.00,'2021-06-18 23:51:01','2021-06-18 23:51:01'),(86,'Louis Philippe Sport','Men Navy Blue Slim Fit Checked Regular Trousers',2249.00,'2021-06-18 23:52:05','2021-06-18 23:52:05'),(92,'TWIN BIRDS','Women Black Solid Churidar-Length Leggings',449.00,'2021-07-05 22:47:10','2021-07-05 22:47:11'),(93,'TWIN BIRDS','Women Blue Solid Churidar Length Leggings',449.00,'2021-07-05 22:48:49','2021-07-05 22:48:49'),(94,'Go Colors','Women Beige Solid Ankle-Length Leggings',499.00,'2021-07-05 22:50:01','2021-07-05 22:50:01'),(95,'GRACIT','Women Pack of 3 Solid Ankle-Length Leggings',889.00,'2021-07-05 22:51:21','2021-07-05 22:51:21'),(96,'SASSAFRAS','Women Lavender Relaxed Fit Mid-Rise Clean Look Pleated Jeans',575.00,'2021-07-05 22:54:02','2021-07-05 22:54:02'),(97,'H&M','Women Grey Shaping Skinny Regular Jeans',2549.00,'2021-07-05 22:55:07','2021-07-05 22:55:08'),(98,' Roadster','Women Blue Skinny Fit Mid-Rise Clean Look Stretchable Jeans',764.00,'2021-07-05 22:56:00','2021-07-05 22:56:00'),(99,'Roadster','Women Peach-Coloured Regular Fit Solid Joggers',719.00,'2021-07-05 23:07:51','2021-07-05 23:07:51'),(100,'Biba','Women Beige Regular Fit Solid Regular Trousers',999.00,'2021-07-05 23:08:43','2021-07-05 23:08:43'),(101,'Indo Era','Women Navy Blue Printed Kurta with Trousers & Dupatta',1079.00,'2021-07-05 23:10:30','2021-07-05 23:10:30'),(102,'Libas','Women White Ethnic Motifs Embroidered Empire Pure Cotton Kurti with Patiala & With Dupatta',1049.00,'2021-07-05 23:11:24','2021-07-05 23:11:24'),(104,'AHIKA','Women black & White Printed Straight Kurta',1499.00,'2021-07-05 23:21:13','2021-07-05 23:21:13'),(105,'Nayo','Women Pink Floral Pure Cotton Kurta with Trousers & With Dupatta',1999.00,'2021-07-05 23:22:33','2021-07-05 23:22:33'),(106,'Saree mall','Sea Green & Pink Linen Blend Printed Saree',559.00,'2021-07-05 23:23:54','2021-07-05 23:23:54'),(107,'Mitera','Red Embroidered Net Party Saree',1679.00,'2021-07-05 23:25:25','2021-07-05 23:25:25'),(108,'KALINI','Teal & Red Art Silk Solid Saree',399.00,'2021-07-05 23:27:03','2021-07-05 23:27:03'),(109,'Mitera','Magenta Silk Blend Woven Design Banarasi Saree',699.00,'2021-07-05 23:28:15','2021-07-05 23:28:15'),(110,'STREET 9','Women Yellow Self Design Top',519.00,'2021-07-05 23:31:41','2021-07-05 23:31:41'),(111,'RARE','Women Black Checked Cinched Waist Top',699.00,'2021-07-05 23:33:33','2021-07-05 23:33:33'),(112,'Here&Now','Women White & Black Printed Shirt Style Top',799.00,'2021-07-05 23:34:58','2021-07-05 23:34:58'),(113,'SASSAFRAS','Women White Schiffli Embroidered Crop Top\n',849.00,'2021-07-05 23:36:10','2021-07-05 23:36:10'),(114,'HELLCAT','Boys Pack Of 3 Printed Round Neck T-shirts',620.00,'2021-07-05 23:40:04','2021-07-05 23:40:04'),(115,'YK Marvel','Boys Blue Printed Round Neck T-shirt',449.00,'2021-07-05 23:41:12','2021-07-05 23:41:12'),(116,'Pantaloons Junior','Boys Grey Melange Solid Polo Collar T-shirt',399.00,'2021-07-05 23:42:28','2021-07-05 23:42:28'),(117,'Cherry Crumble','Boys White & Red Colourblocked Polo Collar T-shirt',999.00,'2021-07-05 23:44:01','2021-07-05 23:44:01'),(118,'Jack & Jones','Boys Green & Black Camouflage Printed Applique Slim Fit Pure Cotton T-shirt',559.00,'2021-07-05 23:45:53','2021-07-05 23:45:53'),(119,'Urbano Juniors','Boys Navy Blue Slim Fit Washed Denim Joggers',584.00,'2021-07-05 23:47:21','2021-07-05 23:47:21'),(120,'Urbano Juniors','Boys Black Slim Fit Solid Denim Joggers',549.00,'2021-07-05 23:48:48','2021-07-05 23:48:48'),(121,'max','Boys Blue Regular Fit Mid-Rise Clean Look Stretchable Jeans',749.00,'2021-07-05 23:49:37','2021-07-05 23:49:37'),(122,'Pantaloons Baby','Boys Blue Light Fade Jeans',449.00,'2021-07-05 23:50:36','2021-07-05 23:50:36'),(123,'GAP','Boys Navy Blue Faded Slim Fit Denim Trousers',1299.00,'2021-07-05 23:51:32','2021-07-05 23:51:32'),(124,'max','Girls Rust Pink Typography Printed T-shirt',249.00,'2021-07-05 23:53:14','2021-07-05 23:53:14'),(125,'max','Girls Navy Blue Printed T-shirt with Waist Tie-Ups',249.00,'2021-07-05 23:54:06','2021-07-05 23:54:06'),(126,'Cherry Crumble','Girls Cream-Coloured Floral Embroidered Cotton Puff Sleeves A-Line Top',854.00,'2021-07-05 23:57:04','2021-07-05 23:57:04'),(127,'Ed-a-Mamma','Yellow Schiffli Sustainable Cinched Waist Top',587.00,'2021-07-05 23:59:53','2021-07-05 23:59:53'),(129,'Cherry Crumble','Girls Yellow & White Appliqued Bardot Top',699.00,'2021-07-06 00:02:39','2021-07-06 00:02:39'),(130,'Ed-a-Mamma','Girls Blue & White Striped Ruffles Regular Top',503.00,'2021-07-06 00:04:05','2021-07-06 00:04:05'),(131,'max','Infant Kids Pink Solid Ankle-Length Leggings',149.00,'2021-07-06 00:12:05','2021-07-06 00:12:06'),(132,'Mode by Red Tape','Girls Navy Blue Solid Skinny Fit Leggings',259.00,'2021-07-06 00:13:09','2021-07-06 00:13:09'),(133,'max','Infant Girls Grey Solid Ankle-Length Leggings',499.00,'2021-07-06 00:14:15','2021-07-06 00:14:15'),(134,'mothercare','Girls Grey Printed Leggings',559.00,'2021-07-06 00:15:12','2021-07-06 00:15:12'),(136,'Pantaloons Baby','Pantaloons Girls White Heart Printed Ankle-Length Leggings',699.00,'2021-07-06 00:20:00','2021-07-06 00:20:00'),(137,'U.S. Polo Assn. Kids','Girls Blue Bootcut Fit Mid-Rise Clean Look Jeans',1019.00,'2021-07-06 00:21:47','2021-07-06 00:21:47'),(138,'Pantaloons Junior','Girls Navy Blue Solid Jeggings',499.00,'2021-07-06 00:23:08','2021-07-06 00:23:08'),(139,'max','Girls Beige Regular Fit Mid-Rise Clean Look Jeans',479.00,'2021-07-06 00:26:35','2021-07-06 00:26:35'),(140,'Pantaloons Junior','Girls Navy Blue Stretchable Jeans',699.00,'2021-07-06 00:27:50','2021-07-06 00:27:50'),(141,'max','Girls Blue Regular Fit Mid-Rise Clean Look Jeans',649.00,'2021-07-06 00:28:52','2021-07-06 00:28:52'),(142,'Athena','Women Black Solid Regular Fit Shorts',493.00,'2021-07-06 00:57:05','2021-07-06 00:57:05'),(143,'Mast & Harbour','Women Black Solid Regular Fit Denim Shorts',824.00,'2021-07-06 00:58:02','2021-07-06 00:58:03'),(144,'ONLY','Women Blue Washed Skinny Fit Denim Shorts',664.00,'2021-07-06 00:59:19','2021-07-06 00:59:19'),(145,'Roadster','Women Blue Denim Shorts',999.00,'2021-07-06 01:00:23','2021-07-06 01:00:23'),(147,' WISSTLER','Women Pink Printed Regular Fit Short',899.00,'2021-07-06 01:02:46','2021-07-06 01:02:46'),(148,'Oxolloxo','Women Yellow Solid Regular Fit Regular Shorts',759.00,'2021-07-06 01:04:33','2021-07-06 01:04:33'),(149,'HRX by Hrithik Roshan','HRX By Hrithik Roshan Women Black Regular Fit Rapid-Dry Antimicrobial Training Shorts',874.00,'2021-07-06 01:06:00','2021-07-06 01:06:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_slug` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subcategories_1_idx` (`category_id`),
  CONSTRAINT `fk_subcategories_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (6,'TOPWEAR',4,'men-topwear'),(7,'BOTTOMWEAR',4,'men-bottomwear'),(8,'TOPWEAR',5,'women-topwear'),(9,'BOTTOMWEAR',5,'women-bottomwear'),(10,'BOYS',6,'boys'),(11,'GIRLS',6,'girls'),(12,'T-SHIRTS',4,'men-tshirts'),(13,'SHIRTS',4,'men-shirts'),(14,'JEANS',4,'men-jeans'),(15,'SHORTS',4,'men-shorts'),(16,'TROUSERS',4,'men-trousers'),(17,'SUITS',4,'men-suits'),(18,'JEANS',5,'women-jeans'),(19,'TROUSERS',5,'women-trousers'),(20,'SHORTS',5,'women-shorts'),(21,'LEGGINGS & SALWARS',5,'leggings-salwars'),(22,'KURTIS',5,'women-kurtis'),(23,'SAREES',5,'women-sarees'),(24,'GIRLS T-SHIRTS',6,'girls-tshirts'),(25,'BOYS T-SHIRTS',6,'boys-tshirts'),(26,'BOYS JEANS',6,'boys-jeans'),(27,'GIRLS JEANS',6,'girls-jeans'),(28,'TOPS',6,'girls-tops'),(29,'LEGGINGS',6,'girls-leggings'),(30,'SWEATSHIRTS',4,'men-sweatshirts'),(31,'JACKETS',4,'men-jackets');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(225) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mob_no` int DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Kushagra','','Maurya',NULL,'kush@gmail.com','$2y$10$PEP.YZOV6yvumVWtSKveG.NJIwdrrJCzgAUM6yVm9VYyAtb0jvsSq',NULL,NULL,'2021-04-23 15:27:36','2021-04-23 15:27:36',_binary ''),(7,'Abhay','','Vishwakarma',NULL,'av@gmail.com','$2y$10$U0DRCzJRlSoaY5CUJK2w1Oqy2voB6vxqZs2u1As/Wc1GDWOleUB1m',NULL,NULL,'2021-04-23 15:28:29','2021-07-06 08:12:44',_binary '\0'),(8,'Ajeet','Kr','Singh',NULL,'aksalgo@gmail.com','$2y$10$H6lSfjE.wq9291mg7L57D.nsECnQLkChi64i6uqaaDZQMr4wrbn52',NULL,NULL,'2021-04-23 15:29:40','2021-04-23 15:29:40',_binary '\0');
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

-- Dump completed on 2021-07-17  9:51:20
