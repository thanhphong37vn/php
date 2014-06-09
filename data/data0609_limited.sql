/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.1.56-community : Database - nhlam1pn_dbsmart
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
  `ReleaseDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDApp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `apps` */

insert  into `apps`(`IDApp`,`NameApp`,`LinkDowload`,`IDDevice`,`IDCategory`,`Desc`,`ReleaseDate`) values (15,'1Contact_Dialpad_100_20140520_','http://lambienquangcaogiare.com.vn/MEG/Android/1Contact_Dialpad_100_20140520_13h.apk',0,1,NULL,'2014-06-02 10:10:09'),(17,'1Contact_20140515_16h','itms-services://?action=download-manifest&amp;url=http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_20140515_16h.plist',1,0,NULL,'2014-06-02 10:50:53'),(18,'1Contact_DialPad_100_20140521_','itms-services://?action=download-manifest&amp;url=http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_DialPad_100_20140521_9h.plist',1,1,NULL,'2014-06-02 10:51:03'),(19,'1Contact_20140512_16h','http://lambienquangcaogiare.com.vn/MEG/Android/1Contact_20140512_16h.apk',0,0,NULL,'2014-06-07 12:16:02'),(20,'1Contact_20140515','itms-services://?action=download-manifest&amp;url=http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_20140515.plist',1,0,NULL,'2014-06-09 11:59:10'),(22,'1Contact_20140512','http://lambienquangcaogiare.com.vn/MEG/Android/1Contact_20140512.apk',0,0,NULL,'2014-06-09 11:59:42'),(23,'1Contact_Dialpad_20140520','http://lambienquangcaogiare.com.vn/MEG/Android/1Contact_Dialpad_20140520.apk',0,1,NULL,'2014-06-09 11:59:53'),(24,'1Contact_DialPad v0906','itms-services://?action=download-manifest&amp;url=http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_DialPad_20140521_5.plist',1,1,NULL,'2014-06-09 13:28:34');

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `MaAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `QuyenHan` int(1) DEFAULT NULL,
  `NgayTao` datetime NOT NULL,
  `NgayLoginGanNhat` datetime DEFAULT NULL,
  `NgaySuaGanNhat` datetime DEFAULT NULL,
  `Avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`MaAdmin`,`TenDangNhap`,`MatKhau`,`HoTen`,`Email`,`DienThoai`,`QuyenHan`,`NgayTao`,`NgayLoginGanNhat`,`NgaySuaGanNhat`,`Avatar`) values (2,'adminadmin','20eabe5d64b0e216796e834f52d61fd0b70332fc','Phạm Văn Hoàn','lienhe@lambienquangcaogiare.com.vn','0975926940',1,'2013-12-18 08:22:44','2014-05-28 15:45:26',NULL,'../../images/945160_1384005395165846_861854634_n_3_3.jpg'),(3,'phamkien','20eabe5d64b0e216796e834f52d61fd0b70332fc','Phạm Văn Kiên','kien.pv@lambienquangcaogiare.com.vn','0936383932',0,'2014-05-05 22:14:17','2014-05-06 20:44:44',NULL,'images/532971_334227873314079_1454461941_n.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
