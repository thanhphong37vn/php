/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.25a : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `apps` */

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `IDApp` int(11) NOT NULL,
  `NameApp` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkDowload` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDDevice` int(11) DEFAULT '0' COMMENT '0: Android | 1: IOS',
  `IDCategory` int(11) DEFAULT '0' COMMENT '0: Apps | 1: Dialpad',
  `Desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Release` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDApp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `apps` */

insert  into `apps`(`IDApp`,`NameApp`,`LinkDowload`,`IDDevice`,`IDCategory`,`Desc`,`Release`) values (1,'1Contact_20140430_16h','http://test.1contact.vn/Android/1Contact_20140430_16h_49.apk',0,0,NULL,'2014-05-28 16:49:59'),(2,'1Contact_20140430_16h','http://test.1contact.vn/Android/1Contact_20140430_16h_53.apk',0,0,NULL,'2014-03-27 16:49:59'),(3,'1Contact_20140430_16h','http://test.1contact.vn/Android/1Contact_20140430_16h_54.apk',0,0,NULL,'2014-02-27 16:49:59'),(4,'1Contact_20140430_16h','http://test.1contact.vn/Android/1Contact_20140430_16h_56.apk',0,1,NULL,'2014-05-27 17:25:25'),(5,'1Contact_20140415','http://test.1contact.vn/ios/1Contact_20140415_4.ipa',1,0,NULL,'2014-05-27 17:25:46'),(6,'1Contact_20140415','http://test.1contact.vn/ios/1Contact_20140415_5.ipa',1,1,NULL,'2014-05-27 17:26:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
