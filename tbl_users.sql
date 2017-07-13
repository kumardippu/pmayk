/*
SQLyog Community
MySQL - 10.1.21-MariaDB : Database - pmayk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pmayk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pmayk`;

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(70) DEFAULT NULL,
  `l_name` varchar(70) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `aadhar_reg_no` varchar(20) DEFAULT NULL,
  `area_type` varchar(20) DEFAULT NULL,
  `current_house` varchar(20) DEFAULT NULL,
  `agent_ref` varchar(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `dob` varchar(60) DEFAULT NULL,
  `refrence_no` varchar(20) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT '0',
  `amount` varchar(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
