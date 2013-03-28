-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: visiondart
-- ------------------------------------------------------
-- Server version	5.5.16-log

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
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_count` int(3) DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `superuser` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comments` (
  `blog_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `comment_data` longtext NOT NULL,
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blog_comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_info` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `blog_comments_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
INSERT INTO `blog_comments` VALUES (1,0,'hiii all '),(1,2,'fuck you'),(2,3,'mjbasdkasd'),(4,0,'jbjbujuuj'),(4,3,'jbjlbjssbllksnkvjsdu');
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_info`
--

DROP TABLE IF EXISTS `blog_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_info` (
  `user_id` int(5) DEFAULT NULL,
  `blog_id` int(5) NOT NULL AUTO_INCREMENT,
  `blog_data` longtext,
  PRIMARY KEY (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blog_info_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_info`
--

LOCK TABLES `blog_info` WRITE;
/*!40000 ALTER TABLE `blog_info` DISABLE KEYS */;
INSERT INTO `blog_info` VALUES (0,1,'thiuibcjdsbb'),(0,2,'njbjkhkvmk  m jl jlbklkl kj ljk'),(0,3,' knkn; m lkk   knl; j jvl;m vjbi jbbvldnlfb  kneklbnnbsdvkndgngre xzxserq'),(2,4,'bbjkbvlklddslvkhvkjbknkckckjsvds'),(2,5,'bnmn,ndcjj,c');
/*!40000 ALTER TABLE `blog_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_details` (
  `user_id` int(5) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_details`
--

LOCK TABLES `login_details` WRITE;
/*!40000 ALTER TABLE `login_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `css` longtext,
  `html` longtext,
  `template_id` int(5) NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
INSERT INTO `templates` VALUES ('bjbjbjbjbj','bkjkbjkbkjbjkbk',1);
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login` (
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_count` int(3) DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  KEY `user_name` (`user_name`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_login_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES ('suraj','202cb962ac59075b964b07152d234b','2013-03-12 04:53:37',0,'123.2.2.2',0),('sun','202cb962ac59075b964b07152d234b70','2013-03-12 05:04:41',0,'123.2.2.2',2);
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_mail_settings`
--

DROP TABLE IF EXISTS `user_mail_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_mail_settings` (
  `user_id` int(5) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `sent_to` varchar(40) DEFAULT NULL,
  KEY `email_id` (`email_id`),
  CONSTRAINT `user_mail_settings_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `users` (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_mail_settings`
--

LOCK TABLES `user_mail_settings` WRITE;
/*!40000 ALTER TABLE `user_mail_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_mail_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_page_link`
--

DROP TABLE IF EXISTS `user_page_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_page_link` (
  `user_id` int(5) NOT NULL,
  `page_link` varchar(100) NOT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_page_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_page_link`
--

LOCK TABLES `user_page_link` WRITE;
/*!40000 ALTER TABLE `user_page_link` DISABLE KEYS */;
INSERT INTO `user_page_link` VALUES (0,''),(0,'visiondart/suraj'),(2,'visiondart/suraj');
/*!40000 ALTER TABLE `user_page_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_product_data`
--

DROP TABLE IF EXISTS `user_product_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_product_data` (
  `product_id` int(5) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_description` longtext,
  `product_image` varchar(200) DEFAULT NULL,
  KEY `product_id` (`product_id`),
  CONSTRAINT `user_product_data_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `user_site_data` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_product_data`
--

LOCK TABLES `user_product_data` WRITE;
/*!40000 ALTER TABLE `user_product_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_product_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_site_data`
--

DROP TABLE IF EXISTS `user_site_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_site_data` (
  `user_id` int(5) DEFAULT NULL,
  `about_us` longtext,
  `product_id` int(5) NOT NULL,
  `contact_us` longtext,
  PRIMARY KEY (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_site_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_site_data`
--

LOCK TABLES `user_site_data` WRITE;
/*!40000 ALTER TABLE `user_site_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_site_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_template`
--

DROP TABLE IF EXISTS `user_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_template` (
  `user_id` int(5) DEFAULT NULL,
  `template_name` varchar(40) NOT NULL,
  `template_id` int(5) DEFAULT NULL,
  `template_path` varchar(100) DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `template_id` (`template_id`),
  CONSTRAINT `user_template_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_template_ibfk_2` FOREIGN KEY (`template_id`) REFERENCES `templates` (`template_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_template`
--

LOCK TABLES `user_template` WRITE;
/*!40000 ALTER TABLE `user_template` DISABLE KEYS */;
INSERT INTO `user_template` VALUES (2,'standard',1,'drive1\\images');
/*!40000 ALTER TABLE `user_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `date_of_birth` varchar(30) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `date_of_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_deletion` date DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'suraj','202cb962ac59075b964b07152d234b','suraj','rawat','m','1/3/1983',9015,'19b','IND','2013-03-12 04:52:23',NULL,'sun.rawat'),(2,'sun','123','ankit','bohra','m','0000-00-00',123456789,'fjgfjkghhlzxhzlckhgzlxcjvhzckjhvlc','india','2013-03-09 05:55:27',NULL,NULL),(3,'ankit2@p.com','12345','ankit','bohra','m','1990-07-31',123456789,'fjgfjkghhlzxhzlckhgzlxcjvhzckjhvlc','india','2013-03-09 06:00:08',NULL,NULL),(5,'','','','','Ma','',0,'','India','2013-03-16 11:10:41','0000-00-00',''),(6,'1','1','11','1','Ma','1',1,'1','India','2013-03-16 11:10:56','0000-00-00','1');
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

-- Dump completed on 2013-03-21  8:16:42
