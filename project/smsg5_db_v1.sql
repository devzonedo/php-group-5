/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.5.8-MariaDB : Database - smsg5_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smsg5_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `smsg5_db`;

/*Table structure for table `tbl_notification` */

DROP TABLE IF EXISTS `tbl_notification`;

CREATE TABLE `tbl_notification` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_notification` */

/*Table structure for table `tbl_student` */

DROP TABLE IF EXISTS `tbl_student`;

CREATE TABLE `tbl_student` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `tp` int(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_student` */

/*Table structure for table `tbl_student_subject` */

DROP TABLE IF EXISTS `tbl_student_subject`;

CREATE TABLE `tbl_student_subject` (
  `student_id` int(5) NOT NULL,
  `subject_id` int(5) NOT NULL,
  PRIMARY KEY (`student_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_student_subject` */

/*Table structure for table `tbl_subject` */

DROP TABLE IF EXISTS `tbl_subject`;

CREATE TABLE `tbl_subject` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`subject_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subject` */

/*Table structure for table `tbl_teacher` */

DROP TABLE IF EXISTS `tbl_teacher`;

CREATE TABLE `tbl_teacher` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `subject_id` int(5) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_teacher` */

insert  into `tbl_teacher`(`id`,`fname`,`lname`,`degree`,`nic`,`subject_id`,`created_user`,`created_datetime`) values (1,'Ravinath','Fernando','Msc','885522254',1,NULL,'2022-10-22 08:40:34'),(2,'Gihan','Perea','Msc','88552',NULL,NULL,'2022-10-22 08:41:05');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text DEFAULT NULL,
  `role_code` varchar(10) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
