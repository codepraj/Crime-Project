-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.18


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema project_management
--

CREATE DATABASE IF NOT EXISTS project_management;
USE project_management;

--
-- Definition of table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
INSERT INTO `admin_login` (`ID`,`username`,`password`) VALUES 
 (1,'admin','admin2015');
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;


--
-- Definition of table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `senders_id` varchar(999) NOT NULL,
  `recever_id` varchar(999) NOT NULL,
  `name` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`ID`,`file`,`senders_id`,`recever_id`,`name`) VALUES 
 (1,'user.png','1212','5',''),
 (2,'user.png','1212','5',''),
 (3,'user.png','1212','5',''),
 (4,'user.png','1212','5',''),
 (5,'user.png','1212','5',''),
 (6,'user.png','1212','5',''),
 (7,'user.png','1212','5',''),
 (8,'user.png','1212','5',''),
 (9,'user.png','1212','5',''),
 (10,'user.png','1212','5',''),
 (11,'user.png','1212','5',''),
 (12,'user.png','1212','5',''),
 (13,'user.png','1212','5',''),
 (14,'user.png','1212','5',''),
 (15,'CRIMSON logo website1.jpg','1212','5',''),
 (16,'CRIMSON logo website1.jpg','1212','5',''),
 (17,'img.jpg','1212','5',''),
 (18,'bg.png','1212','5','khooshbu'),
 (19,'BI2.jpg','1212','5','khooshbu'),
 (20,'rajven2.JPG','1212','5','khooshbu'),
 (21,'Apurva Omkar Testimonial.jpg','12112','7','Priyanka'),
 (22,'rajven2.JPG','null','7','Suraj'),
 (23,'BI2.jpg','12345','8','Neha'),
 (24,'CSIT Project Topics (1).zip','12345','8','Neha'),
 (25,'CSIT Project Topics (1).zip','12345','8','Neha'),
 (26,'CSIT Project Topics (1).zip','null','8','Suraj'),
 (27,'user.png','12444','9','ashwin'),
 (28,'message_avatar1.png','12444','9','ashwin');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;


--
-- Definition of table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE `forum` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `forum_que` longtext NOT NULL,
  `type` varchar(999) NOT NULL,
  `desc` longtext NOT NULL,
  `ask_by` varchar(999) NOT NULL,
  `ask_by_id` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` (`ID`,`forum_que`,`type`,`desc`,`ask_by`,`ask_by_id`,`date`) VALUES 
 (1,'Getting Problem while inserting in to Database','SQL','what is problemm in my query\r\n\r\ninsert into forum(`name`, `question`)value(\"khooshbu\",\"what is your Pet Name\")','Neha','12345','2015-03-21'),
 (2,'htmlentities equivalent in JSP?','JAVA','I m a php guy, but I have to do some small project in JSP. I m wondering if there s an equivalent to htmlentities function (of php) in JSP.','Neha','12345','2015-03-21'),
 (3,'Can anyone help me to convert the following PHP example into JSP? I know that I need to use out.print(something) but I unclear how I can incorporate my variable names prior to the variable values themselves.','PHP','php','Neha','12345','2015-03-22'),
 (4,'how to start java from basic','JAVA','Please Share the link that will help me to start learning JAVA!!!','Suraj','12122','2015-03-22'),
 (5,'what is C#','Dot Net','Can Any one Explain in Details C#','ashwin','12444','2015-03-29'),
 (6,'What is Java','JAVA','Explain JAVA..','Ashwini','12544','2015-03-29'),
 (7,'Can anyone help me to convert the followi','Javascript','please solve my query...','ashwin','12444','2015-03-31');
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;


--
-- Definition of table `forum_ans`
--

DROP TABLE IF EXISTS `forum_ans`;
CREATE TABLE `forum_ans` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `forum_id` varchar(999) NOT NULL,
  `ans` longtext NOT NULL,
  `uploaded_by` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_ans`
--

/*!40000 ALTER TABLE `forum_ans` DISABLE KEYS */;
INSERT INTO `forum_ans` (`ID`,`forum_id`,`ans`,`uploaded_by`,`date`) VALUES 
 (1,'2','USE JSTL LIB','Neha','2015-03-22'),
 (2,'2','USE JSTL LIB','Neha','2015-03-22'),
 (3,'2','USE PL Functon in JSP','Neha','2015-03-22'),
 (4,'2','USE PL Functon in JSP','Neha','2015-03-22'),
 (5,'1','upload Your Query Here...','Suraj','2015-03-22'),
 (6,'1','Your Query is Wrong...','Ashwini','2015-03-29'),
 (7,'7','sorry i dont know...','ashwin','2015-03-31');
/*!40000 ALTER TABLE `forum_ans` ENABLE KEYS */;


--
-- Definition of table `group_members`
--

DROP TABLE IF EXISTS `group_members`;
CREATE TABLE `group_members` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `techinical_spec` varchar(999) NOT NULL,
  `group_admin` varchar(999) NOT NULL,
  `project_id` varchar(999) NOT NULL,
  `accepter_id` varchar(999) NOT NULL,
  `acceptor_name` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_members`
--

/*!40000 ALTER TABLE `group_members` DISABLE KEYS */;
INSERT INTO `group_members` (`ID`,`project_name`,`branch`,`techinical_spec`,`group_admin`,`project_id`,`accepter_id`,`acceptor_name`) VALUES 
 (1,'xyz','civil','JAVA','kushal','4','12311','4'),
 (2,'xyz','civil','JAVA','kushal','4','12311','4'),
 (3,'xyz','civil','JAVA','kushal','4','12311','4'),
 (4,'xyz','civil','JAVA','kushal','4','12311','4');
/*!40000 ALTER TABLE `group_members` ENABLE KEYS */;


--
-- Definition of table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `senders_id` varchar(999) NOT NULL,
  `recever_id` varchar(999) NOT NULL,
  `type` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`ID`,`message`,`senders_id`,`recever_id`,`type`,`name`) VALUES 
 (1,'5','1212','hii','',''),
 (2,'hii','1212','5','',''),
 (3,'hi','1212','5','',''),
 (4,'Good','1212','5','teacher',''),
 (5,'hello','5','12411','student',''),
 (6,'hello','12411','5','student',''),
 (7,'hey...','12411','5','student',''),
 (8,'Wassup..','12311','5','student',''),
 (9,'Wassup..','12311','5','student',''),
 (10,'hi','12311','5','student','khooshbu'),
 (11,'hey','12311','5','student','khooshbu'),
 (12,'hey','12311','5','student','khooshbu'),
 (13,'hey','1212','5','teacher','khooshbu'),
 (14,'hii','1212','5','student','khooshbu'),
 (15,'wass','1212','5','student','khooshbu'),
 (16,'Good Going>>>','1212','5','student','khooshbu'),
 (17,'hii priyanka...','12122','7','student','Suraj'),
 (18,'hiii...','12112','7','student','Priyanka'),
 (19,'oneHello Every !!!!','12122','7','student','Suraj'),
 (20,'Hiii Neha...','12122','8','student','Suraj'),
 (21,'hiiii\r\n','12345','8','student','Neha'),
 (22,'hii','12122','8','student','Suraj'),
 (23,'hello hws going..','12122','7','student','Suraj'),
 (24,'hiii  neha...','12122','8','student','Suraj'),
 (25,'hello','12444','9','student','ashwin'),
 (26,'hiii ','12444','9','student','ashwin'),
 (27,'hello guyz','12122','7','student','Suraj');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;


--
-- Definition of table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `date` varchar(999) NOT NULL,
  `notification` longtext NOT NULL,
  `uploaded_by` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` (`ID`,`date`,`notification`,`uploaded_by`) VALUES 
 (2,'2015-03-09','Events on March','Suraj'),
 (3,'2014/11/16','Events In Feb','admin');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;


--
-- Definition of table `project_group`
--

DROP TABLE IF EXISTS `project_group`;
CREATE TABLE `project_group` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `techinical_spec` varchar(999) NOT NULL,
  `admin` varchar(222) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group`
--

/*!40000 ALTER TABLE `project_group` DISABLE KEYS */;
INSERT INTO `project_group` (`ID`,`group_name`,`branch`,`techinical_spec`,`admin`) VALUES 
 (1,'Student Project Management System','Computer','HTML5, Css Javascript, JSP, Mysql',''),
 (2,'Student Project Management System','Computer','HTML5, Css Javascript, JSP, Mysql',''),
 (3,'xyz','civil','JAVA','kushal'),
 (4,'xyz','civil','JAVA','12111'),
 (5,'Document Managememt System','IT','HTML 5 , CSS3, JSP, MYSQL','1212'),
 (6,'new building at farshi stop','civil','Civil Project','suraj@gmail.com'),
 (7,'xyz','civil','a','12122'),
 (8,'Online House Booking','IT','JSP Mysql','12122'),
 (9,'hotel management','IT','JAVA , MYSQL','12122');
/*!40000 ALTER TABLE `project_group` ENABLE KEYS */;


--
-- Definition of table `project_group_members`
--

DROP TABLE IF EXISTS `project_group_members`;
CREATE TABLE `project_group_members` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `proejct_admin` varchar(999) NOT NULL,
  `project_name` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `techinical_spec` varchar(999) NOT NULL,
  `member_id` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group_members`
--

/*!40000 ALTER TABLE `project_group_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_group_members` ENABLE KEYS */;


--
-- Definition of table `project_group_request`
--

DROP TABLE IF EXISTS `project_group_request`;
CREATE TABLE `project_group_request` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(999) NOT NULL,
  `receiver_id` varchar(999) NOT NULL,
  `project_id` varchar(999) NOT NULL,
  `project_name` varchar(999) NOT NULL,
  `accept` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group_request`
--

/*!40000 ALTER TABLE `project_group_request` DISABLE KEYS */;
INSERT INTO `project_group_request` (`ID`,`sender_id`,`receiver_id`,`project_id`,`project_name`,`accept`) VALUES 
 (1,'12111','12311','4','xyz','0'),
 (2,'12111','12311','4','xyz','0'),
 (3,'12111','12311','4','xyz','0'),
 (4,'12111','12311','4','xyz','0'),
 (5,'12111','12311','4','xyz','0'),
 (6,'12111','12311','4','xyz','0'),
 (7,'1212','12311','5','Document Managememt System','0'),
 (8,'1212','12111','null','null','0'),
 (9,'1212','12111','null','null','0'),
 (10,'1212','12311','5','Document Managememt System','0'),
 (11,'1212','12411','5','Document Managememt System','0'),
 (12,'1212','12411','5','Document Managememt System','0'),
 (13,'1212','12411','5','Document Managememt System','0'),
 (14,'12122','12112','7','xyz','0'),
 (15,'12122','12345','8','Online House Booking','0'),
 (16,'12122','12444','9','hotel management','0'),
 (17,'12122','12111','9','hotel management','0');
/*!40000 ALTER TABLE `project_group_request` ENABLE KEYS */;


--
-- Definition of table `student_group_request`
--

DROP TABLE IF EXISTS `student_group_request`;
CREATE TABLE `student_group_request` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(999) NOT NULL,
  `student_name` varchar(999) NOT NULL,
  `group_id` varchar(999) NOT NULL,
  `group_name` varchar(999) NOT NULL,
  `accept` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_group_request`
--

/*!40000 ALTER TABLE `student_group_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_group_request` ENABLE KEYS */;


--
-- Definition of table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE `student_registration` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `roll_no` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(999) NOT NULL,
  `group_added` int(111) NOT NULL,
  `approve` int(111) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

/*!40000 ALTER TABLE `student_registration` DISABLE KEYS */;
INSERT INTO `student_registration` (`ID`,`first_name`,`last_name`,`roll_no`,`branch`,`email`,`password`,`group_added`,`approve`) VALUES 
 (1,'kushal','dhole','12111','civil','kusa@hotmail.com','kkk',1,1),
 (2,'khooshbu','Gupta','12311','IT','khushboo@gmail.com','khushboo',1,0),
 (3,'Payal','xxx','12411','IT','payal@gmail.com','payal',1,1),
 (4,'Priyanka','C','12112','Computer','priyanka@g.com','priyanka',1,1),
 (5,'Neha','Deshmukh','12345','CS','neha@gmail.com','neha',1,1),
 (6,'ashwin','verma','12444','civil','ashwin@gmail.com','ashwin',0,1),
 (7,'Ashwini','xyz','12344','IT','ash@gmail.com','ashwini',0,1),
 (8,'Ashwini','xyz','12544','IT','ash11@gmail.com','ashwini',0,1);
/*!40000 ALTER TABLE `student_registration` ENABLE KEYS */;


--
-- Definition of table `teacher_group_request`
--

DROP TABLE IF EXISTS `teacher_group_request`;
CREATE TABLE `teacher_group_request` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(999) NOT NULL,
  `teacher_name` varchar(999) NOT NULL,
  `group_id` varchar(999) NOT NULL,
  `group_name` varchar(999) NOT NULL,
  `accept` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_group_request`
--

/*!40000 ALTER TABLE `teacher_group_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_group_request` ENABLE KEYS */;


--
-- Definition of table `teachers_registration`
--

DROP TABLE IF EXISTS `teachers_registration`;
CREATE TABLE `teachers_registration` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `emp_id` varchar(111) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(999) NOT NULL,
  `approve` int(111) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_registration`
--

/*!40000 ALTER TABLE `teachers_registration` DISABLE KEYS */;
INSERT INTO `teachers_registration` (`ID`,`first_name`,`last_name`,`emp_id`,`branch`,`email`,`password`,`approve`) VALUES 
 (4,'khooshbu','gupta','1212','IT','kh@gmail.com','kuuushbu',0),
 (5,'Suraj','D','12122','Computer','suraj@gmail.com','suraj',1);
/*!40000 ALTER TABLE `teachers_registration` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
