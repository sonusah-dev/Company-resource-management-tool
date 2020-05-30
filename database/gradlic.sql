-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gradlic_system
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Sonu Sah','sonusah786786@gmail.com','qwerty');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `attendance_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendence`
--

LOCK TABLES `attendence` WRITE;
/*!40000 ALTER TABLE `attendence` DISABLE KEYS */;
INSERT INTO `attendence` VALUES (5,10000,10,'2020-05-26 08:05:19'),(6,10,20,'2020-05-26 08:05:37'),(7,15,30,'2020-05-26 08:05:50');
/*!40000 ALTER TABLE `attendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_code` varchar(100) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_starting_date` date DEFAULT NULL,
  `batch_completion_date` date DEFAULT NULL,
  `is_completed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch`
--

LOCK TABLES `batch` WRITE;
/*!40000 ALTER TABLE `batch` DISABLE KEYS */;
INSERT INTO `batch` VALUES (2,'5','04:00:00','05:30:00',0,0,'2020-05-05','2020-05-15',1),(3,'Android','09:00:00','11:00:00',0,0,'2020-06-01','2020-07-01',0);
/*!40000 ALTER TABLE `batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_id` varchar(100) DEFAULT NULL,
  `student` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `issue_date` date DEFAULT NULL,
  `certificate_type` tinyint(4) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate`
--

LOCK TABLES `certificate` WRITE;
/*!40000 ALTER TABLE `certificate` DISABLE KEYS */;
INSERT INTO `certificate` VALUES (4,'JAVASCRIPT',8,520,'2020-05-26',1,10000);
/*!40000 ALTER TABLE `certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_slogan` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `course_content` varchar(100) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `who_this_course_is_for` varchar(100) DEFAULT NULL,
  `course_duration` int(11) NOT NULL COMMENT 'in hours for e.g 90 hrs',
  `course_category` varchar(100) DEFAULT NULL,
  `course_poster` varchar(100) DEFAULT NULL,
  `course_fee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (2,'Sonu Sahhh','kaa khaa gaaa','history of java, introductionnmm','anar aammm','nothinggg','no-one-p',16,'10','no0',1000000),(3,'MEAN STACK ','FROM SCRATCH','MongoDb, Express.js, Angular, Node.js ','Javascript, Typescript, Frontend, Backend, Nodes.js, Server-Side','Basic Js','Web Intrested Person',6,'WEB DEVELOPMENT','0',6000);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '0-MALE 1-FEMALE 2-other',
  `mobile` bigint(20) NOT NULL COMMENT 'mobile number is unique it can be used as primary key',
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `profile_status` tinyint(4) DEFAULT NULL,
  `job_role` varchar(100) NOT NULL,
  `job_description` varchar(100) DEFAULT NULL,
  `date_of_join` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_of_left` date DEFAULT NULL,
  `pan_number` varchar(20) NOT NULL,
  `adhaar_number` varchar(50) DEFAULT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (3,'ERR','Sonuu','Sah',1,97067058788,'sonusah78676@gmail.com','2019-11-04',NULL,'Bla Blaa','expertise','2020-05-27 04:51:16',NULL,'OPO0P099OO','89uu89790p','raja maidam new colonyy','Jorhatt',7850017,'Assamm'),(4,'PHP-DEV','Kango','Pongu',0,987654321,'koongo@gmail.com','0000-00-00',NULL,'pro-builder','------ ','2020-05-29 11:25:54',NULL,'KJ90JK90','MSKSWJ12','JAIL ROAD','JORHAT',876786,'ARUNACHAL PRADESH');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enrollment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `entry_date` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrollment`
--

LOCK TABLES `enrollment` WRITE;
/*!40000 ALTER TABLE `enrollment` DISABLE KEYS */;
INSERT INTO `enrollment` VALUES (2,34,525,'2020-05-07','2020-06-07',110);
/*!40000 ALTER TABLE `enrollment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `student` int(11) NOT NULL,
  `payment_status` tinyint(4) unsigned DEFAULT NULL,
  `payment_mode` tinyint(4) DEFAULT NULL,
  `payment_reference_number` int(11) DEFAULT NULL,
  `amount_paid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (2,8000,7,1,2,5,1000);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (4,'Historyy',900,'history of java, introductionn',990);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_item`
--

DROP TABLE IF EXISTS `section_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `item_type` varchar(100) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_item`
--

LOCK TABLES `section_item` WRITE;
/*!40000 ALTER TABLE `section_item` DISABLE KEYS */;
INSERT INTO `section_item` VALUES (2,1,'www',100,500,'hello world programmer');
/*!40000 ALTER TABLE `section_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '0-MALE 1-FEMALE 2-other',
  `mobile` bigint(20) NOT NULL COMMENT 'mobile number is unique it can be used as primary key',
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `joining_date` date NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `institute` varchar(100) NOT NULL,
  `joining_year` date DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `registration` varchar(50) DEFAULT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (2,'Dhiru','Sahani',5,9706705800,'dhiru@gmail.com','1995-02-02','2020-01-01','2021-01-01','Jist','0000-00-00','IT','1090','Fancy Ali','JORHAT',785000,'ASSAAM'),(3,'Ram','Haran',0,8978979719,'ram@gmail.com','1970-05-01','2018-01-01','0000-00-00','KU','0000-00-00','MCA','1010','Pulibor','Jorhat',785000,'Assam'),(4,'Hollow','Gram',0,99009900,'gram@gmail.com','1993-04-08','2019-02-10','0000-00-00','AEC','0000-00-00','Mechanical','9089','Cinnamara','Jorhat',786767,'Assam'),(5,'Phulan','Devi',0,987654320,'devi@gmail.com','1997-11-18','2019-04-14','0000-00-00','JEC','0000-00-00','B Tech CS','9089','A.T Road','Jorhat',765432,'Assam');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-30 12:23:38
