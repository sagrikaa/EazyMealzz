-- MySQL dump 10.13  Distrib 8.0.14, for Win64 (x86_64)
--
-- Host: localhost    Database: eazymealz
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(100) DEFAULT NULL,
  `article_content` varchar(1000) DEFAULT NULL,
  `article_image_url` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_string` varchar(45) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ingredients` (
  `ingredient_id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_name` varchar(45) NOT NULL,
  `ingredient_description` varchar(45) DEFAULT NULL,
  `serving_size` varchar(45) DEFAULT NULL,
  `calories` decimal(5,2) DEFAULT NULL,
  `fats` decimal(5,2) DEFAULT NULL,
  `carbohydrates` decimal(5,2) DEFAULT NULL,
  `proteins` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`ingredient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(2,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(3,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(4,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(5,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(6,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(7,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(8,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(9,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(10,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(11,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(12,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(13,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(14,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(15,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(16,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(17,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(18,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(19,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(20,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(21,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00),(22,'Egg',NULL,'1 Large',78.00,5.00,0.60,6.00),(23,'Milk',NULL,'100 grams',42.00,1.00,5.00,3.40),(24,'Bread',NULL,'1 slice',60.00,1.00,12.00,3.00);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `ingredients` varchar(1000) DEFAULT NULL,
  `content` varchar(5000) NOT NULL,
  `instructions` varchar(5000) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'EASY 20 MINUTE BUTTER CHICKEN','Quick 20-minute butter chicken is creamy and packed full of flavor. It’s simplified and cooked all in one pan and goes great with a side of rice or naan! ','1 tablespoon oil','Ever since moving to Alexandria Virginia we’ve been in luck with all the Indian, Pakistani, and Aghani restaurants around us. We love the cuisine because it’s loaded with flavor and spice and is great for cold nights. One dish we keep going back for is the butter chicken. The spicy creaminess is unforgettable and always makes us go back for more!','Heat a large skillet or medium saucepan over medium-high heat. Add the oil, butter, and onions and cook onions down until lightly golden, about 3-4 minutes. Add ginger and garlic and let cook for 30 seconds, stirring so it doesn’t burn.',17,'2016-01-17'),(2,'CREAMY AVOCADO EGG SALAD','Spice up the usual egg salad with the addition of avocado. Avocado makes a delicious and nutritious addition to egg salad and thanks to its naturally creamy texture, you can enjoy egg salad without the adding mayo! ','1 medium avocado pitted and peeled','If you haven’t tried avocado egg salad then it’s time you enjoy egg salad in a whole new way. A simple nutrition rich ingredient such as avocado with the addition of lemon, salt, pepper and your favorite herbs works wonders and adds much-needed flavor and zest to the typical egg salad. Play around with the herbs and use parsley, dill or chives or use my personal favorite, cilantro, and enjoy a wholesome flavor-packed dish.',NULL,17,'2018-08-15'),(3,'ROASTED GARLIC CAULIFLOWER','Crispy cauliflower roasted with garlic and olive oil in under 30 minutes. This super simple and flavorful side dish that is low carb and keto friendly and makes a delicious side or snack! ','Olive, coconut, or oil of choice,Freshly minced garlic,Salt and pepper to taste,Parmesan cheese to top, optional,A large heavy duty sheet pan','Cauliflower is one of the most unrated veggies and overshadowed by its sibling broccoli but luckily, I’ve got you covered. Cauliflower is loaded with antioxidants, fiber and aids digestions. It’s the perfect low carb and meat replacement for weight loss and easy to add to your diet. From cauliflower pizza to cauliflower wings, cauliflower mac and cheese and much more!','Cut cauliflower florets into bitesize pieces,toss cauliflower with oil, garlic and salt, and pepper,spread in a single layer on a large baking sheet<br>bake until golden and crispy',14,'2018-11-03');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipe_ingredients`
--

DROP TABLE IF EXISTS `recipe_ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `recipe_ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) DEFAULT NULL,
  `ingredient_id` int(11) DEFAULT NULL,
  `serving_size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recipe_id_idx` (`recipe_id`),
  KEY `ingredient_id_idx` (`ingredient_id`),
  CONSTRAINT `ingredient_id` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`ingredient_id`),
  CONSTRAINT `recipe_id` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipe_ingredients`
--

LOCK TABLES `recipe_ingredients` WRITE;
/*!40000 ALTER TABLE `recipe_ingredients` DISABLE KEYS */;
INSERT INTO `recipe_ingredients` VALUES (1,1,1,'1'),(2,1,2,'1/4 cup'),(3,1,3,'4 slices');
/*!40000 ALTER TABLE `recipe_ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(45) NOT NULL,
  `recipe_description` varchar(250) DEFAULT NULL,
  `recipe_image_url` varchar(45) DEFAULT NULL,
  `recipe_servings` varchar(45) NOT NULL,
  `recipe_calories` varchar(45) DEFAULT NULL,
  `recipe_steps` varchar(1000) NOT NULL,
  `recipe_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,'French Toast','Vanilla extract and cinnamon bring a richness of flavor to French toast. Pick your favorite bread - white, Italian, French or whole wheat. Serve with Easy Spiced Syrup.',NULL,'4 servings','95','Beat egg, vanilla and cinnamon in shallow dish. Stir in milk. Dip bread in egg mixture, turning to coat both sides evenly. Cook bread slices on lightly greased nonstick griddle or skillet on medium heat until browned on both sides. Serve with Easy Spiced Syrup (recipe follows), if desired. Easy Spiced Syrup: Add 1 teaspoon McCormick® Pure Vanilla Extract and 1/4 teaspoon McCormick® Ground Cinnamon to 1 cup pancake syrup; stir well to mix. Serve warm, if desired.');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `group_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_groups`
--

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_type` varchar(1) NOT NULL DEFAULT 'U',
  `user_status` varchar(10) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nithaya@gmail.com','123456','Nithaya','u','Active'),(2,'admin@gmail.com','123456','HarshDeep','a','Active'),(3,'testuser@gmail.com','testpass','Test','u','Active'),(4,'sagrika@gmail.com','testpass','Sagrika','a','Active'),(5,'testuser@gmail.com','testpass','Test','u','Active'),(6,'shashank@gmail.com','testpass','Shashank','a','Active'),(7,'testuser@gmail.com','testpass','Test','u','Active'),(8,'ruchi@gmail.com','testpass','Ruchi','a','Active'),(9,'testuser@gmail.com','testpass','Test','u','Active'),(10,'simaran@gmail.com','testpass','Simran','a','Active'),(11,'testuser@gmail.com','testpass','Test','u','Active'),(12,'testadmin@gmail.com','testpass','Test','a','Active'),(13,'testuser@gmail.com','testpass','Test','u','Active'),(14,'testadmin@gmail.com','testpass','Test','a','Active'),(15,'testuser@gmail.com','testpass','Test','u','Active'),(16,'testadmin@gmail.com','testpass','Test','a','Active'),(17,'sagrika224@gmail.com','$2y$10$RJ34ULLK9Afaz0qgF1c5JusaE63xn8oayHtIdvxKhyk8JrGTyhqN6','sagrika aggarwal','u','active');
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

-- Dump completed on 2019-04-09 18:32:14
