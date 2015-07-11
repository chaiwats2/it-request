-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: reqdb
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `categoryid` int(10) unsigned NOT NULL,
  `categoryname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'phone system'),(2,'hardware'),(3,'software'),(4,'internet'),(5,'other');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `departmentid` varchar(3) NOT NULL,
  `departmentname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`departmentid`),
  UNIQUE KEY `departmentid_UNIQUE` (`departmentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('01','IT'),('02','telesale'),('03','broker'),('04','admin'),('05','hr'),('06','research'),('07','qc'),('08','domino'),('09','csi'),('10','health'),('11','chev campaign'),('12','chev cac'),('13','chevy plus'),('14','back office'),('15','account');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `idstatus` int(10) unsigned NOT NULL,
  `statusname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'wait'),(2,'processing'),(3,'waitapprove'),(4,'complete');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbrequest`
--

DROP TABLE IF EXISTS `tbrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbrequest` (
  `id` varchar(15) NOT NULL DEFAULT '0',
  `username` varchar(45) DEFAULT NULL,
  `dtadd` varchar(45) DEFAULT NULL,
  `depart` varchar(45) DEFAULT NULL,
  `cat` varchar(45) DEFAULT NULL,
  `preliminary` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `adminname` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `dtcom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbrequest`
--

LOCK TABLES `tbrequest` WRITE;
/*!40000 ALTER TABLE `tbrequest` DISABLE KEYS */;
INSERT INTO `tbrequest` VALUES ('HW0001','chaiwat.s','15 December 1899 - 12:00 am','01','02','testpre',NULL,NULL,NULL,NULL),('NW0001','chaiwat.s','15 December 1899 - 12:00 am','01','04','testpre',NULL,NULL,NULL,NULL),('OT0001','chaiwat.s','15 December 1899 - 12:00 am','01','05','testpre',NULL,NULL,NULL,NULL),('OT0002','chaiwat.s','28 May 2015 - 09:03 +07:00','01','05','testttt',NULL,NULL,NULL,NULL),('PH0001','chaiwat.s','15 December 1899 - 12:00 am','01','01','testpre','',NULL,NULL,NULL),('PH0002','chaiwat.s','26 May 2015 - 10:30 +07:00','01','01','testpre01',NULL,NULL,NULL,NULL),('PH0003','chaiwat.s','26 May 2015 - 11:06 +07:00','01','01','testpre02',NULL,NULL,NULL,NULL),('PH0004','chaiwat.s','28 May 2015 - 09:02 +07:00','01','01','test0003',NULL,NULL,NULL,NULL),('SW0001','chaiwat.s','15 December 1899 - 12:00 am','01','03','testpre',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbrequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `extension` char(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `extension_UNIQUE` (`extension`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chaiwat.s','1234','1000','01','0'),(2,'eminem','1234','1001','02','0'),(24,'apache','1234','1111','03','0');
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

-- Dump completed on 2015-06-02  8:46:39
