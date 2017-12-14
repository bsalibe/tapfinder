CREATE DATABASE  IF NOT EXISTS `inst377` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `inst377`;
-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: inst377
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Illuminati@admin.com','ihavethepower');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `building_id` int(11) NOT NULL,
  `building_name` varchar(80) DEFAULT NULL,
  `building_type` enum('residence','academic','other') DEFAULT NULL,
  `building_access` enum('accessible','not accessible') DEFAULT NULL,
  `building_location` enum('north','south') DEFAULT NULL,
  `building_community` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES (0,'Worchester',NULL,NULL,NULL,NULL),(3,'Service Building','other','accessible','south','N/A'),(4,'Ritchie Coliseum','other','accessible','south','N/A'),(8,'Annapolis Hall','residence','not accessible','south','South Hill'),(14,'Harford Hall','residence','not accessible','south','South Hill'),(15,'Calvert Hall','residence','not accessible','south','South Hill'),(17,'Cecil Hall','residence','not accessible','south','South Hill'),(26,'South Campus Dining Hall','other','accessible','south','N/A'),(34,'Jimenez Hall','academic','accessible','south','N/A'),(35,'McKeldin Library','academic','accessible','south','N/A'),(36,'Plant Science Building','academic','accessible','north','N/A'),(37,'Shoemaker Building','academic','accessible','south','N/A'),(38,'LeFrak Hall','academic','accessible','south','N/A'),(39,'Van Munching Building','academic','accessible','south','N/A'),(42,'Tydings Hall','academic','accessible','south','N/A'),(44,'Skinner Building','academic','accessible','south','N/A'),(46,'Marie Mount Hall','academic','accessible','south','N/A'),(48,'Key Hall','academic','accessible','south','N/A'),(52,'Mitchell Building','other','accessible','south','N/A'),(59,'Chincoteague Hall','academic','accessible','south','N/A'),(60,'Anne Arundel Hall','residence','not accessible','north','North Hill'),(61,'Queen Anne\'s Hall','residence','not accessible','north','North Hill'),(62,'St. Mary\'s Hall','residence','not accessible','north','North Hill'),(63,'Somerset Hall','residence','not accessible','north','North Hill'),(64,'Dorchester Hall','residence','not accessible','north','North Hill'),(65,'Carroll Hall','residence','not accessible','north','North Hill'),(68,'Eppley Recreation Center','other','accessible','north','N/A'),(69,'Wicomico Hall','residence','not accessible','north','North Hill'),(71,'Lee Building','academic','accessible','south','N/A'),(73,'H.J. Patterson','academic','accessible','south','N/A'),(76,'Symons Hall','academic','accessible','south','N/A'),(77,'Main Administration Building','other','accessible','south','N/A'),(78,'The Armor','academic','accessible','south','N/A'),(79,'Reckord Armory Building','academic','accessible','south','N/A'),(82,'Physics Building','academic','accessible','north','N/A'),(83,'J.M. Patterson','academic','accessible','north','N/A'),(84,'Engineering and Physical Sciences Library','academic','accessible','north','N/A'),(85,'Mathematics Building','academic','accessible','north','N/A'),(88,'Martin Hall (Engineering)','academic','accessible','north','N/A'),(89,'Engineering Laboratory Building','academic','accessible','north','N/A'),(90,'Chmical/Nuclear Engineering Building','academic','accessible','south','N/A'),(91,'Chemistry-Biochemistry','academic','accessible','north','N/A'),(96,'Cambridge Hall','residence','not accessible','north','Cambridge'),(97,'Cambridge Community Center','residence','not accessible','north','Cambridge'),(99,'Bell Air Hall','residence','not accessible','north','Cambridge'),(115,'AV Williams','academic','accessible','north','N/A'),(121,'Chestertown Hall','residence','not accessible','north','Cambridge'),(122,'Cumberland Hall','residence','not accessible','north','Cambridge'),(140,'Health Center','other','accessible','south','N/A'),(141,'Tawes Hall','academic','accessible','south','N/A'),(142,'Animal Science Building','academic','accessible','north','N/A'),(143,'Benjamin Building','academic','accessible','south','N/A'),(144,'Biology/Psychology','academic','accessible','north','N/A'),(145,'Architecture Building','academic','accessible','south','N/A'),(146,'Art Sociology Building','academic','accessible','south','N/A'),(147,'Hornbake Library','academic','accessible','north','N/A'),(162,'Cole Student Activities Building','other','accessible','north','N/A'),(163,'Stamp Student Union','other','accessible','north','N/A'),(201,'Leonardtown Office Building','other','accessible','south','N/A'),(224,'Computer and Space Sciences Building','academic','accessible','north','N/A'),(225,'Kim Engineering','academic','accessible','north','N/A'),(231,'Microbiology Building','academic','accessible','north','N/A'),(233,'Susquehanna Hall','academic','accessible','south','N/A'),(237,'Geology Building','academic','accessible','north','N/A'),(250,'Leonardtown Community Center','residence','not accessible','north','Cambridge'),(251,'251 North Dining Hall','other','accessible','north','N/A'),(252,'Denton Hall','residence','not accessible','north','Denton'),(253,'Easton Hall','residence','not accessible','north','Denton'),(254,'Elkton Hall','residence','not accessible','north','Denton'),(255,'School of Public Health','academic','accessible','north','N/A'),(256,'Ellicott Hall','residence','not accessible','north','Ellicott'),(258,'Hagertown Hall','residence','not accessible','north','Ellicott'),(259,'LaPlata Hall','residence','not accessible','north','Ellicott'),(296,'Biomolecular Sciences','academic','accessible','south','N/A'),(338,'Chesapeake Building','other','accessible','south','N/A'),(386,'Clarice Smith Performing Arts Center','academic','accessible','north','N/A'),(406,'Computer Science Instructional Center','academic','accessible','north','N/A'),(415,'Physical Sciences Complex','academic','accessible','south','N/A'),(417,'Knight Hall','academic','accessible','south','N/A'),(419,'Oakland Hall','residence','not accessible','north','Denton'),(974,'South Campus Commons 5','residence','not accessible','south','South Campus Commons'),(975,'South Campus Commons 6','residence','not accessible','south','South Campus Commons'),(981,'South Campus Commons 7','residence','not accessible','south','South Campus Commons'),(996,'South Campus Commons 1','residence','not accessible','south','South Campus Commons'),(997,'South Campus Commons 2','residence','not accessible','south','South Campus Commons'),(998,'South Campus Commons 3','residence','not accessible','south','South Campus Commons'),(999,'South Campus Commons 4','residence','not accessible','south','South Campus Commons');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_description` varchar(100) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,'Hallway 3136',252,3194),(2,'Hallway 1194',252,1194),(3,'Hallway 5195',252,5114),(4,'Hallway 3190',253,3113),(5,'Hallway 5194',253,5131),(6,'Hallway 1191',254,1113),(7,'Hallway 1193',254,1131),(8,'Hallway 298',419,201),(9,'Hallway 1109',419,1118),(10,'Hallway 100',256,101),(11,'Hallway 3192',256,3111),(12,'Hallway 5195',256,5135),(13,'Hallway 1192',258,1113),(14,'Hallway 195',259,102),(15,'Hallway 1195',259,1115),(16,'Hallway 1190',259,1126),(17,NULL,99,2196),(18,NULL,99,4198),(19,'Between 1105/1100A',97,1100),(20,'Hallway 2198',96,2105),(21,'Hallway 2198',121,2103),(22,'Hallway 4198',121,4103),(23,'Hallway 1193',122,1130),(24,NULL,250,1198),(25,'Hallway 195',60,110),(26,'Hallway 1193',65,1119),(27,'Hallway 117',64,1117),(28,'Hallway 190',61,190),(29,'Hallway 197',63,104),(30,'Hallway 194',63,113),(31,'Hallway 194',62,109),(32,'Kitchen',69,102),(33,'Hallway 1197',51,1117),(34,'Lobby',8,1199),(35,NULL,15,208),(36,'Hallway 1197',17,1113),(37,'B 0106',14,106),(38,NULL,142,422),(39,NULL,142,494),(40,NULL,145,204),(41,'Lobby',78,1195),(42,NULL,146,1307),(43,NULL,115,1106),(44,NULL,115,1306),(45,NULL,143,1201),(46,NULL,144,1250),(47,NULL,296,1108),(48,NULL,91,1212),(49,NULL,91,122),(50,NULL,91,2219),(51,'Across 2227',90,2227),(52,NULL,59,1110),(53,NULL,386,2201),(54,'Between 1206/1298',224,1206),(55,NULL,406,1436),(56,'2403C',84,2403),(57,NULL,89,1198),(58,NULL,237,1125),(59,NULL,73,1218),(60,NULL,147,300),(61,NULL,147,1106),(62,NULL,34,1205),(63,NULL,83,1112),(64,NULL,48,111),(65,NULL,225,1101),(66,'Across 1105',417,1105),(67,'Between 1130/1124',71,1130),(68,NULL,38,1109),(69,NULL,46,1102),(70,NULL,46,103),(71,'Near Stairway',88,1198),(72,NULL,84,498),(73,NULL,35,1103),(74,'Across 2105',35,2105),(75,NULL,35,6127),(76,NULL,231,1120),(77,NULL,36,1111),(78,NULL,82,111),(79,'Main Lobby',415,0),(80,'Across 133',78,133),(81,'',78,1103),(82,NULL,255,194),(83,NULL,37,1208),(84,NULL,44,113),(85,NULL,233,1106),(86,NULL,76,125),(87,NULL,141,1112),(88,NULL,42,251),(89,'Between 1101/1107',42,1101),(90,NULL,39,1110),(91,'Between 1194/1135',39,1194),(92,NULL,251,0),(93,'Concourse in Southeast corner',338,1109),(94,NULL,162,1117),(95,'Upper Weight Room',68,1101),(96,'Maryland Adventure Program Lobby',68,170),(97,NULL,68,2102),(98,'Main Lobby',140,0),(99,NULL,210,1299),(100,NULL,77,113),(101,NULL,52,117),(102,'South side of lobby',4,1196),(103,NULL,4,109),(104,'600T',3,600),(105,'Hallway next to Grand Ballroom',163,0),(106,'Near Contracts Office',26,0);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `user_first_name` varchar(45) DEFAULT NULL,
  `user_last_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'tom@yahoo.com','password','tom','jackson'),(3,'jill@hotmail.com','password','jill','jolten'),(4,'sun@yahoo.com','password','sun','alibe'),(5,'kevin@gmail.com','password','kevin','woo'),(6,'kyle@terpmail.umd.com','password','kyle','chin'),(7,'aseem@hotmail.com','password','aseem','dhakal'),(8,'oni@yahoo.com','password','justin','evans'),(9,'tiffany@gmail.com','password','oni','olu'),(10,'fake@terpmail.com','password','tiffany','kan'),(11,'testmanual@gmail.com',NULL,'fake','name'),(16,'testmanual@gmail.com','password','testName','TestPass'),(17,'newEmail@gmail.com','hateFixingBugs','tester','tester'),(19,'john@cena.com','password','john','john'),(20,'chris@gmail.com','password','chris','chris'),(21,'testOne@gmail.com','password','test','test'),(22,'testTwo@gmail.com','password','test','test');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_save`
--

DROP TABLE IF EXISTS `user_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_save` (
  `save_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  PRIMARY KEY (`save_id`)
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_save`
--

LOCK TABLES `user_save` WRITE;
/*!40000 ALTER TABLE `user_save` DISABLE KEYS */;
INSERT INTO `user_save` VALUES (5,2,15),(10,3,36),(11,3,37),(12,4,38),(13,4,39),(14,5,42),(15,5,44),(16,6,46),(17,7,51),(19,8,59),(20,8,60),(21,9,61),(22,9,62),(24,10,64),(25,11,65),(59,4,258),(60,3,999),(61,3,981),(62,5,144),(63,5,145),(64,6,146),(65,6,147),(101,2,147),(111,19,73),(114,19,147),(171,20,0);
/*!40000 ALTER TABLE `user_save` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-14 18:21:58
