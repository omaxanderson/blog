-- MySQL dump 10.13  Distrib 5.7.13, for osx10.11 (x86_64)
--
-- Host: localhost    Database: blog_db
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Current Database: `blog_db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `blog_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog_db`;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Brandon Sanderson','Good work, max.','2018-04-02 00:00:00',1),(2,'max','here\'s a comment','2018-04-21 20:27:19',3),(3,'','I like htis post','2018-04-21 20:45:14',22),(4,'Mystery User','hello there','2018-04-21 20:46:00',3),(5,'The Loch Ness Monster','hrjfdsklfdas;','2018-04-21 21:03:40',3),(6,'Siri','fds','2018-04-21 21:03:46',3),(7,'Alan Turing','fds','2018-04-21 21:03:50',3),(8,'Bill Gates','fdsf','2018-04-21 21:03:55',3),(9,'Bigfoot','fsdf','2018-04-21 21:03:59',3),(10,'My Favorite IDE is Microsoft Word','fdsaf','2018-04-21 21:04:02',3),(11,'Alan Turing','fsdfsa','2018-04-21 21:04:58',3),(12,'Bill Gates','fdsf','2018-04-21 21:05:00',3),(13,'Bill Gates','fdsaf','2018-04-21 21:05:02',3),(14,'Edward Macaroni Fork','fdsaf','2018-04-21 21:05:04',3),(15,'Siri','fdsf','2018-04-21 21:05:07',3),(16,'Alan Turing','fdsaf','2018-04-21 21:05:09',3),(17,'The E Street Band','fdsfdsafdsa','2018-04-21 21:05:11',3),(18,'The Great One','fdsfad','2018-04-21 21:05:37',22),(19,'Bill Gates','hello world','2018-04-21 21:10:22',22),(20,'Alan Turing','test','2018-04-21 21:10:41',22),(21,',.-*\'*-.,xxXSegFaultXxx,.-*\'*-.,\'','fdsfd','2018-04-21 21:11:57',22),(22,'Bill Gates','fdsf','2018-04-21 21:12:09',22),(23,'The Loch Ness Monster','fdsfadfdsf','2018-04-21 21:12:12',22),(24,'Siri','fsdf','2018-04-21 21:12:13',22),(25,'Edward Macaroni Fork','fdsf','2018-04-21 21:12:15',22),(26,'John von Neumann','fdsfd','2018-04-21 21:12:17',22),(27,'Vim > Emacs','fdsfd','2018-04-21 21:12:19',22),(28,'Siri','fdsfd','2018-04-21 21:12:21',22),(29,'My Favorite IDE is Microsoft Word','fdsfds','2018-04-21 21:12:23',22),(30,'The Dude','fdsfd','2018-04-21 21:12:25',22),(31,'Sidney Crosby','fdsfds','2018-04-21 21:12:27',22),(32,'Wayne Gretzky','fdsfds','2018-04-21 21:12:30',22),(33,'Wayne Gretzky','fdsfd','2018-04-21 21:12:33',22),(34,'Wayne Gretzky','fdsfd','2018-04-21 21:12:35',22),(36,'Edward Macaroni Fork','select * from users;','2018-04-21 21:14:35',22),(37,'A Superb Owl','fsdd','2018-04-21 21:14:45',22),(38,'The E Street Band','&lt;script&gt;alert(\'hello world\');&lt;/script&gt;','2018-04-21 21:19:34',3);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_04_19_201540_create_posts_table',1),(4,'2018_04_19_201701_create_comments_table',1),(5,'2018_04_19_202139_create_tags_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `views` int(11) NOT NULL,
  `read_time` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'My First Post','Here\'s an abstract.','Here\'s all kinds of content, here we go nice look at all these words quite a post','2018-04-01',NULL,0,1,1),(3,'My Third Post','This here\'s my third post!','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget tempus lorem, ut semper odio. Suspendisse sit amet dictum lorem. Duis rutrum felis sed venenatis varius. Donec lacinia suscipit eros, quis volutpat est. In mollis luctus diam, non maximus est laoreet eu. Integer vulputate velit felis. Nullam dapibus euismod libero id congue. Praesent dignissim elit ut felis semper, ac sodales nibh varius. Suspendisse sodales sed orci at lobortis. Nunc ut commodo libero. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id neque imperdiet, accumsan mauris eu, pulvinar sem. Quisque ultricies, leo quis vehicula placerat, turpis ex rhoncus ligula, ac rhoncus est ligula vitae quam. Pellentesque vehicula accumsan mauris ac porta.</p>\n\n<p>Maecenas vel dignissim dui. Sed congue risus vitae massa hendrerit congue. Vestibulum sodales bibendum euismod. Nulla dapibus, arcu a fermentum placerat, lectus velit fermentum est, a rhoncus nulla leo scelerisque mauris. Phasellus vehicula elementum ornare. Nullam eu felis sollicitudin, sollicitudin sem eget, varius dolor. Sed ut neque sapien. Donec blandit ex id maximus tempus. Fusce fermentum massa non libero viverra, in sagittis turpis lacinia. Aenean ullamcorper sed lacus et faucibus. Donec sodales velit vel nibh cursus, tempor varius lorem fringilla. Suspendisse vitae nibh in dui auctor facilisis eu cursus urna. Vivamus blandit congue sagittis.</p>\n\n<p>Sed condimentum quis ex non tincidunt. Nullam ultricies pulvinar ex, nec bibendum tortor consectetur vitae. Integer pretium neque ligula, et mattis massa posuere in. Quisque in diam id sem aliquet tincidunt vitae vitae diam. Nullam vitae nunc consectetur, dapibus metus et, volutpat dui. Maecenas et pellentesque lectus. Vestibulum quis ipsum aliquet, faucibus sem sed, fermentum nulla. Nam in vulputate ipsum, et molestie nunc. Pellentesque eu scelerisque lorem. Vivamus sodales tortor diam, id volutpat arcu rutrum non.</p>\n\n<p>Quisque ac tincidunt mi. Curabitur luctus metus nec lorem consectetur, quis mattis mauris mollis. Maecenas ut pretium tellus. Etiam sit amet hendrerit purus. Vestibulum orci nunc, blandit euismod convallis at, suscipit eu nisl. Ut rhoncus quam nibh, rutrum luctus libero molestie vel. Aliquam viverra ornare sapien, quis posuere est elementum at. Ut tempus rhoncus risus varius vulputate. Curabitur eleifend ligula libero, vitae commodo tortor tempor eget. Donec consequat, leo a malesuada tempus, ligula sem tincidunt nibh, luctus faucibus ligula lectus ut lectus. Pellentesque ut orci at augue malesuada gravida ac eu purus.</p>\n\n<p>Curabitur volutpat diam felis, at hendrerit nulla pretium ac. Donec mollis ante eu facilisis scelerisque. In eget gravida ante, ac varius massa. Donec ullamcorper feugiat mi, non finibus risus pharetra sed. Sed imperdiet, nisl vel sagittis rhoncus, nisl tortor posuere dolor, in tempus risus metus quis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed convallis justo felis, eu condimentum odio laoreet eleifend. Ut sed diam a purus faucibus malesuada. Nam nec commodo erat.</p>','2018-04-03','2018-04-22',24,3,1),(22,'Hello World','Test post with some random words hello there how\'s it going??','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget tempus lorem, ut semper odio. Suspendisse sit amet dictum lorem. Duis rutrum felis sed venenatis varius. Donec lacinia suscipit eros, quis volutpat est. In mollis luctus diam, non maximus est laoreet eu. Integer vulputate velit felis. Nullam dapibus euismod libero id congue. Praesent dignissim elit ut felis semper, ac sodales nibh varius. Suspendisse sodales sed orci at lobortis. Nunc ut commodo libero. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id neque imperdiet, accumsan mauris eu, pulvinar sem. Quisque ultricies, leo quis vehicula placerat, turpis ex rhoncus ligula, ac rhoncus est ligula vitae quam. Pellentesque vehicula accumsan mauris ac porta.</p>\n\n<p>Maecenas vel dignissim dui. Sed congue risus vitae massa hendrerit congue. Vestibulum sodales bibendum euismod. Nulla dapibus, arcu a fermentum placerat, lectus velit fermentum est, a rhoncus nulla leo scelerisque mauris. Phasellus vehicula elementum ornare. Nullam eu felis sollicitudin, sollicitudin sem eget, varius dolor. Sed ut neque sapien. Donec blandit ex id maximus tempus. Fusce fermentum massa non libero viverra, in sagittis turpis lacinia. Aenean ullamcorper sed lacus et faucibus. Donec sodales velit vel nibh cursus, tempor varius lorem fringilla. Suspendisse vitae nibh in dui auctor facilisis eu cursus urna. Vivamus blandit congue sagittis.</p>\n\n<p>Sed condimentum quis ex non tincidunt. Nullam ultricies pulvinar ex, nec bibendum tortor consectetur vitae. Integer pretium neque ligula, et mattis massa posuere in. Quisque in diam id sem aliquet tincidunt vitae vitae diam. Nullam vitae nunc consectetur, dapibus metus et, volutpat dui. Maecenas et pellentesque lectus. Vestibulum quis ipsum aliquet, faucibus sem sed, fermentum nulla. Nam in vulputate ipsum, et molestie nunc. Pellentesque eu scelerisque lorem. Vivamus sodales tortor diam, id volutpat arcu rutrum non.</p>\n\n<p>Quisque ac tincidunt mi. Curabitur luctus metus nec lorem consectetur, quis mattis mauris mollis. Maecenas ut pretium tellus. Etiam sit amet hendrerit purus. Vestibulum orci nunc, blandit euismod convallis at, suscipit eu nisl. Ut rhoncus quam nibh, rutrum luctus libero molestie vel. Aliquam viverra ornare sapien, quis posuere est elementum at. Ut tempus rhoncus risus varius vulputate. Curabitur eleifend ligula libero, vitae commodo tortor tempor eget. Donec consequat, leo a malesuada tempus, ligula sem tincidunt nibh, luctus faucibus ligula lectus ut lectus. Pellentesque ut orci at augue malesuada gravida ac eu purus.</p>\n\n<p>Curabitur volutpat diam felis, at hendrerit nulla pretium ac. Donec mollis ante eu facilisis scelerisque. In eget gravida ante, ac varius massa. Donec ullamcorper feugiat mi, non finibus risus pharetra sed. Sed imperdiet, nisl vel sagittis rhoncus, nisl tortor posuere dolor, in tempus risus metus quis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed convallis justo felis, eu condimentum odio laoreet eleifend. Ut sed diam a purus faucibus malesuada. Nam nec commodo erat.</p>','2018-04-02','2018-04-22',24,3,1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'omaxalpha','O Max Anderson','anderso2@miamioh.edu','password',NULL,NULL,NULL);
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

-- Dump completed on 2018-04-21 21:26:31
