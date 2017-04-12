-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_bighw
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `academy`
--

DROP TABLE IF EXISTS `academy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `academyName` varchar(45) DEFAULT NULL,
  `principal` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `academyName_UNIQUE` (`academyName`),
  UNIQUE KEY `contact_UNIQUE` (`contact`),
  UNIQUE KEY `address_UNIQUE` (`address`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academy`
--

LOCK TABLES `academy` WRITE;
/*!40000 ALTER TABLE `academy` DISABLE KEYS */;
INSERT INTO `academy` VALUES (1,'电院','李老师','54236491','电院群楼'),(2,'机动','朱老师','54219249','机动群楼'),(3,'船建','王老师','57321642','木兰楼'),(4,'安泰','秦老师','54219346','徐汇校区安泰主楼'),(5,'生科','孔老师','58234621','生科楼'),(6,'化院','董老师','57316423','化学楼'),(7,'物理','黄老师','54123642','物理楼'),(8,'数院','石老师','58216433','数学楼');
/*!40000 ALTER TABLE `academy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administer`
--

DROP TABLE IF EXISTS `administer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administer` (
  `Ano` int(11) NOT NULL AUTO_INCREMENT,
  `Aname` varchar(45) NOT NULL,
  PRIMARY KEY (`Ano`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administer`
--

LOCK TABLES `administer` WRITE;
/*!40000 ALTER TABLE `administer` DISABLE KEYS */;
INSERT INTO `administer` VALUES (1,'love');
/*!40000 ALTER TABLE `administer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administer_account`
--

DROP TABLE IF EXISTS `administer_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administer_account` (
  `Anumber` int(11) NOT NULL AUTO_INCREMENT,
  `Ausername` varchar(45) NOT NULL,
  `Apassword` varchar(45) NOT NULL,
  PRIMARY KEY (`Anumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administer_account`
--

LOCK TABLES `administer_account` WRITE;
/*!40000 ALTER TABLE `administer_account` DISABLE KEYS */;
INSERT INTO `administer_account` VALUES (1,'adm ','123');
/*!40000 ALTER TABLE `administer_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `Cno` int(11) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(45) NOT NULL,
  `Cteacher` varchar(45) NOT NULL,
  `Csite` varchar(45) NOT NULL,
  `Ctime` varchar(45) NOT NULL,
  `Csemester` varchar(45) NOT NULL,
  `Ccredit` int(11) NOT NULL,
  PRIMARY KEY (`Cno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'数据库原理','张三','下院109','周一7-8 周五7-8','大二下',2),(2,'计算机组成与体系结构','陆海宁','中院207','周四1-2 周五3-4','大二下',3),(3,'模拟电子技术','秦鹏','下院105','周一1-2 周四3-4','大二下',3),(4,'工程热力学','陆飞','','','大一下',4),(5,'高等数学','王承国','上院106','周一1-2 周三1-2','大一下',4),(6,'编译原理','张三','下院107','周二3-4','大三下',3),(7,'线性代数','李四','下院205','周一3-4','大一下',3);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_student` (
  `Sno` int(11) NOT NULL,
  `Cno` varchar(45) NOT NULL,
  `Cmark` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_student`
--

LOCK TABLES `course_student` WRITE;
/*!40000 ALTER TABLE `course_student` DISABLE KEYS */;
INSERT INTO `course_student` VALUES (1,'1',0),(1,'2',NULL),(1,'3',NULL),(2,'4',60),(1,'5',90),(2,'1',0),(1,'6',NULL),(1,'7',90);
/*!40000 ALTER TABLE `course_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `major`
--

DROP TABLE IF EXISTS `major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `major` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `academyName` varchar(45) NOT NULL,
  `majorName` varchar(45) NOT NULL,
  `principal` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `major`
--

LOCK TABLES `major` WRITE;
/*!40000 ALTER TABLE `major` DISABLE KEYS */;
INSERT INTO `major` VALUES (1,'电院','信息安全','李老师','54236485','电院5号楼'),(2,'电院','计算机与科学','王老师','51234567','电院1号楼'),(3,'电院','软件工程','谭老师','54792134','电院3号楼'),(4,'机动','工业工程','干老师','54782136','机动1号楼'),(5,'机动','机械类','王老师','57821642','机动辅楼'),(6,'机动','机械试点班','唐老师','58725463','机动2号楼'),(7,'船建','土木工程','毛老师','54257165','木兰楼2楼'),(8,'船建','建筑学','陈老师','53148355','木兰楼1楼');
/*!40000 ALTER TABLE `major` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(45) NOT NULL,
  `Ssex` varchar(45) NOT NULL,
  `Sdept` varchar(45) NOT NULL,
  `Smajor` varchar(45) NOT NULL,
  `Sgrade` varchar(45) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'唐亮','男','电院','信息安全','大二'),(2,'李婷','女','机动','机械类','大一');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_account`
--

DROP TABLE IF EXISTS `student_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_account` (
  `Snumber` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Susername` varchar(45) NOT NULL,
  `Spassword` varchar(45) NOT NULL,
  PRIMARY KEY (`Snumber`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_account`
--

LOCK TABLES `student_account` WRITE;
/*!40000 ALTER TABLE `student_account` DISABLE KEYS */;
INSERT INTO `student_account` VALUES (1,'Tang','202cb962ac59075b964b07152d234b70'),(2,'liang','123456');
/*!40000 ALTER TABLE `student_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `Tno` int(11) NOT NULL AUTO_INCREMENT,
  `Tname` varchar(45) NOT NULL,
  `Tsex` varchar(45) NOT NULL,
  `Tdept` varchar(45) NOT NULL,
  `Tedubg` varchar(45) NOT NULL,
  `Tschool` varchar(45) NOT NULL,
  `Ttel` int(11) NOT NULL,
  `Temail` varchar(45) NOT NULL,
  `Toffice` varchar(45) NOT NULL,
  PRIMARY KEY (`Tno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'张三','男','计算机系','博士','上海交通大学',1512452154,'555@sjtu.edu.cn','电院5号楼'),(2,'李四','女','电子系','硕士','清华大学',1542155522,'215@sjtu.edu','电院3号楼');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_account`
--

DROP TABLE IF EXISTS `teacher_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_account` (
  `Tnumber` int(11) NOT NULL AUTO_INCREMENT,
  `Tusername` varchar(45) NOT NULL,
  `Tpassword` varchar(45) NOT NULL,
  PRIMARY KEY (`Tnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_account`
--

LOCK TABLES `teacher_account` WRITE;
/*!40000 ALTER TABLE `teacher_account` DISABLE KEYS */;
INSERT INTO `teacher_account` VALUES (1,'tl','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `teacher_account` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-12 20:08:30
