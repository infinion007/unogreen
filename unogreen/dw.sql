/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.1.13-MariaDB : Database - vcard
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vcard` /*!40100 DEFAULT CHARACTER SET latin1 */;

-- USE `vcard`;

/*Table structure for table `action` */

DROP TABLE IF EXISTS `action`;

CREATE TABLE `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` int(11) DEFAULT NULL,
  `users` int(11) DEFAULT '1',
  `Usercreation` int(11) DEFAULT '1',
  `user` int(11) DEFAULT '1',
  `customers` int(11) DEFAULT '1',
  `add_customer` int(11) DEFAULT '1',
  `customer` int(11) DEFAULT '1',
  `rejected_customer` int(11) DEFAULT '1',
  `lead` int(11) DEFAULT '1',
  `lead_assigned_by` int(11) DEFAULT '1',
  `lead_assigned_by_self` int(11) DEFAULT '1',
  `lead_assigned_to` int(11) DEFAULT '1',
  `emailtemplate` int(11) DEFAULT '1',
  `email_template` int(11) DEFAULT '1',
  `reportingperson` int(11) DEFAULT '1',
  `reporting_person` int(11) DEFAULT '1',
  `services` int(11) DEFAULT '1',
  `products` int(11) DEFAULT '1',
  `meetings` int(11) DEFAULT '1',
  `meeting` int(11) DEFAULT '1',
  `set_reminder` int(11) DEFAULT '1',
  `set_remainder_list` int(11) DEFAULT '1',
  `clients` int(11) DEFAULT '1',
  `clients_list` int(11) DEFAULT '1',
  `demolist` int(11) DEFAULT '1',
  `demo_list` int(11) DEFAULT '1',
  `calls` int(11) DEFAULT '1',
  `support_calls` int(11) DEFAULT '1',
  `quotations` int(11) DEFAULT '1',
  `quotation` int(11) DEFAULT '1',
  `changepassword` int(11) DEFAULT '1',
  `change_password` int(11) DEFAULT '1',
  `performa` int(11) DEFAULT '1',
  `Performanvoice` int(11) DEFAULT '1',
  `travelling_req` int(11) DEFAULT '1',
  `view_req` int(11) DEFAULT '1',
  `paid_req` int(11) DEFAULT '1',
  `vendor` int(11) DEFAULT '1',
  `add_vendor` int(11) DEFAULT '1',
  `view_vendor` int(11) DEFAULT '1',
  `expenditure` int(11) DEFAULT '1',
  `add_exp` int(11) DEFAULT '1',
  `view_exp` int(11) DEFAULT '1',
  `sale_target` int(11) DEFAULT '1',
  `set_sale_target` int(11) DEFAULT '1',
  `list_sale_target` int(11) DEFAULT '1',
  `placedunder` int(11) DEFAULT '1',
  `placed_under` int(11) DEFAULT '1',
  `targetlist` int(11) DEFAULT '1',
  `sales_target_list` int(11) DEFAULT '1',
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `action` */

insert  into `action`(`id`,`user_role`,`users`,`Usercreation`,`user`,`customers`,`add_customer`,`customer`,`rejected_customer`,`lead`,`lead_assigned_by`,`lead_assigned_by_self`,`lead_assigned_to`,`emailtemplate`,`email_template`,`reportingperson`,`reporting_person`,`services`,`products`,`meetings`,`meeting`,`set_reminder`,`set_remainder_list`,`clients`,`clients_list`,`demolist`,`demo_list`,`calls`,`support_calls`,`quotations`,`quotation`,`changepassword`,`change_password`,`performa`,`Performanvoice`,`travelling_req`,`view_req`,`paid_req`,`vendor`,`add_vendor`,`view_vendor`,`expenditure`,`add_exp`,`view_exp`,`sale_target`,`set_sale_target`,`list_sale_target`,`placedunder`,`placed_under`,`targetlist`,`sales_target_list`,`created_date`,`updated_date`) values 
(1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'2020-09-10 13:18:54','2020-09-11 10:32:36'),
(3,2,1,1,1,0,0,0,0,0,0,0,0,1,1,1,1,1,1,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,'2020-09-10 11:39:02','2020-09-25 17:31:11'),
(12,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,'2020-09-12 11:10:50','2020-09-25 17:29:59');

/*Table structure for table `amenity` */

DROP TABLE IF EXISTS `amenity`;

CREATE TABLE `amenity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `c_date` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `amenity` */

insert  into `amenity`(`id`,`name`,`photo`,`c_date`) values 
(4,'Akash Ohol','772666450.png','2020-10-27 19:54:03'),
(5,'wifi','844410040.png','2020-10-27 20:13:23');

/*Table structure for table `countpi` */

DROP TABLE IF EXISTS `countpi`;

CREATE TABLE `countpi` (
  `id` int(250) NOT NULL,
  `count` int(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `countpi` */

/*Table structure for table `credit_request` */

DROP TABLE IF EXISTS `credit_request`;

CREATE TABLE `credit_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(101) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL COMMENT 'paisas',
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL COMMENT 'paisas',
  `contact_name` varchar(222) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(100) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `file` varchar(225) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `support_id` int(11) DEFAULT NULL,
  `approved_date_by_account` varbinary(225) DEFAULT NULL,
  `approved_date_by_support` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `credit_request` */

insert  into `credit_request`(`id`,`product_name`,`rate`,`qty`,`total`,`contact_name`,`cust_id`,`l_id`,`payment_mode`,`remark`,`status`,`file`,`user_id`,`created_date`,`account_id`,`support_id`,`approved_date_by_account`,`approved_date_by_support`,`updated_date`) values 
(1,'6',2,1,2,'Manoj Sir',36,44,'ww','gjhgj',1,NULL,6,'2020-09-30 10:11:25',NULL,NULL,NULL,NULL,'2020-09-30 15:02:05'),
(2,'2',2,1,2,'Akash Ohol',11,15,'Online','gjhgj',1,NULL,6,'2020-09-30 10:30:10',15,NULL,'2020-09-30 12:25:58',NULL,'2020-09-30 12:26:04'),
(4,'4',2,1,2,'tttt',13,18,'ww','gjhgj',0,'tttt-30-09-2020-1816245851.csv',6,'2020-09-30 17:10:08',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `company_name` varchar(225) DEFAULT NULL,
  `mobile` varchar(225) DEFAULT NULL,
  `emailid` varchar(225) DEFAULT NULL,
  `calling_remark` varchar(225) DEFAULT 'Edit',
  `intersted_in_services` varchar(225) DEFAULT 'Edit',
  `created_date` varchar(225) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `flag` int(2) DEFAULT '1',
  `url` varchar(225) DEFAULT NULL,
  `reject_remark` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

/*Table structure for table `email_contant_list` */

DROP TABLE IF EXISTS `email_contant_list`;

CREATE TABLE `email_contant_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `user_name` varchar(225) DEFAULT NULL,
  `email_id` varchar(225) DEFAULT NULL,
  `subscribe` int(2) DEFAULT '0',
  `tld` int(2) DEFAULT '0',
  `hardbounce` int(2) DEFAULT '0',
  `created_date` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `email_contant_list` */

insert  into `email_contant_list`(`id`,`user_id`,`contact_id`,`user_name`,`email_id`,`subscribe`,`tld`,`hardbounce`,`created_date`) values 
(2,1,9,'gagan','gaganbansode@gmail.com',1,0,0,NULL),
(3,1,9,'jyotsna ','gaganbansode@gmail',1,0,1,NULL),
(4,1,10,'gagan','gaganbansode@gmail.com',0,0,0,'2020-08-25 07:41:17'),
(5,1,10,'jyotsna ','gaganbansode@gmail',0,0,1,'2020-08-25 07:41:17');

/*Table structure for table `email_contant_name` */

DROP TABLE IF EXISTS `email_contant_name`;

CREATE TABLE `email_contant_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `email_contant_name` */

insert  into `email_contant_name`(`id`,`name`,`user_id`,`created_date`,`status`) values 
(9,'gagan','1','2020-08-18 12:40:54 ',0),
(10,'Akash Ohol','1','2020-08-25 07:40:34 ',0);

/*Table structure for table `email_otp` */

DROP TABLE IF EXISTS `email_otp`;

CREATE TABLE `email_otp` (
  `email` varchar(215) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `email_otp` */

insert  into `email_otp`(`email`,`otp`,`created_at`) values 
('gagan@gmail.com',7921,'2020-08-24 14:55:05'),
('gaganbansode@gmail.com',8962,'2020-09-26 12:42:00'),
('rebublicanjanandolan@gmail.com',3327,'2020-08-28 16:20:06'),
('jyotsnachavan3019@gmail.com',9912,'2020-09-08 16:49:43'),
('bansodegagan@gmail.com',2777,NULL);

/*Table structure for table `email_template` */

DROP TABLE IF EXISTS `email_template`;

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `body` longtext NOT NULL,
  `created_date` varchar(225) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `email_template` */

insert  into `email_template`(`id`,`key_name`,`subject`,`body`,`created_date`,`updated_date`) values 
(11,'REGISTRATION','Registration Successful!','<p><strong>Hello,</strong></p>\r\n\r\n<p>We thank you for registering your details with Dubaifinance.com. You are now part of the one of the fastest growing financial compare communities in the United Arab Emirates.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Your Username is : #username#</p>\r\n\r\n<p>Your Password is : #password#</p>\r\n\r\n<p>Please Click here to #url#</p>\r\n\r\n<p><br />\r\n<br />\r\nThanks,<br />\r\nCustomer Support Team<br />\r\nDubaifinance.com</p>\r\n','2020-02-28','2020-08-24 13:29:00'),
(12,'LEAVE','Leave application ','<p><strong>Hello,</strong></p>\r\n\r\n<p>Username is : #username#</p>\r\n\r\n<p>Leave Date (Start &amp; End Date) is : #leavedate#</p>\r\n\r\n<p>Leave Category:#leavecategory#</p>\r\n\r\n<p>Leave Reason:#leavereason#</p>\r\n\r\n<p>Status:#status#&nbsp;</p>\r\n','2020-02-29','2020-02-29 08:58:46'),
(17,'OTP','OTP for change password','<p><strong>Hello,</strong></p>\r\n\r\n<p>Loren lipson</p>\r\n\r\n<p>Email Id:-#email#</p>\r\n\r\n<p>OTP:-#otp#</p>\r\n','2020-08-24','2020-08-28 16:19:31'),
(18,'QUOTATION','Quotation Form Mobisoft ','<p><strong>Dear Sir/Madam,</strong><br />\r\n<br />\r\nGreetings from Mobisoftinfo Telecommunication Ltd.<br />\r\n<br />\r\nHope my email finds you well &amp; doing great.<br />\r\n<br />\r\nMobisoftinfo is India&#39;s Top Growing&nbsp;<strong>Bulk SMS Service Provider when it comes to Bulk SMS Solution</strong>.<br />\r\n<br />\r\nAt current we cater over 2000+ Customers with 100+ Enterprise across Industries in India varying from major Banks to retails by end to end. Our messaging routes are being used by major Enterprises, varying from Religare, India Bulls, Angle Brokings and More.<br />\r\n<br />\r\nIf you are looking for sms service routes, we can cater your&nbsp;<strong>Indian</strong>&nbsp;termination requirements for both&nbsp;<strong>Promotional &amp; Transactional Traffic</strong>.<br />\r\n<br />\r\n<br />\r\n1:- Promotional SMS :&ndash;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Promo on NON-DND Numbers</li>\r\n	<li>DND Numbers list can be extracted and will not be charged.</li>\r\n	<li>Delivery Time &ndash; Instant Delivery</li>\r\n	<li>Delivery Report - Instant Delivery Report, 100% of Guaranteed Delivery</li>\r\n	<li>To get activate it takes maximum 10 Minutes of time</li>\r\n</ul>\r\n\r\n<p><br />\r\n2:- Transactional SMS :-<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Six Character Sender ID will be provided (ONLY Alphabets).</li>\r\n	<li>Web Interface/HTTP API will be given.</li>\r\n	<li>Messages gets delivered to DND Numbers also.</li>\r\n	<li>It works on template basis. (Provide your sample to&nbsp;<a href=\"mailto:support@mobisofttech.co.in\" target=\"_blank\">support@mobisofttech.co.in</a>) . The templates with 70% of Static Content and 30% Variables.</li>\r\n	<li>We would require details on how your customers are subscribing or getting registered and one sample of subscription form is mandatory.</li>\r\n	<li>To get activate it takes 30 &ndash; 45 Minutes of time.</li>\r\n</ul>\r\n\r\n<p><br />\r\nTo know our exciting pricing and other features, kindly reply to the mail so that our sales team call back to you instantly.<br />\r\n<br />\r\nWe are also dealing in Mobile Applications and Products as below:<br />\r\n<br />\r\n<strong>1. Short Code &amp; Long Code<br />\r\n2. Virtual Number which is Ten digit Mobile number<br />\r\n3. IVR, Voice services (Click to Call &amp; Missed Call)<br />\r\n4. Website Design, Application development ( customize)<br />\r\n5. Software development.</strong><br />\r\n<br />\r\n<br />\r\nThanks &amp; Regards,<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>#username#</strong><br />\r\n<strong>Mobisoftinfo Telecommunication Ltd.</strong><br />\r\nOffice No. 314, Sai Chamber,<br />\r\nAbove HDFC Bank, Sector 11, Plot No. 44,<br />\r\nCBD Belapur, Navi Mumbai 400 614<br />\r\nMaharashtra India.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2020-09-01','2020-09-01 16:00:10'),
(19,'PERFORMAINVOICE','Performa Invoice','<p><strong>Dear Sir/Madam,</strong></p>\r\n\r\n<p>Greetings from Mobisoft Technology India Pvt. Ltd.</p>\r\n\r\n<p>As per your discussion with <strong>#username#</strong></p>\r\n\r\n<p>Please find attached proforma invoice for your kind ref,</p>\r\n\r\n<p>once payment get reflect in our bank account we will share the invoice copy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks &amp; Regards,<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>#username#</strong><br />\r\n<strong>Mobisoftinfo Telecommunication Ltd.</strong><br />\r\nOffice No. 314, Sai Chamber,<br />\r\nAbove HDFC Bank, Sector 11, Plot No. 44,<br />\r\nCBD Belapur, Navi Mumbai 400 614<br />\r\nMaharashtra India.</p>\r\n','2020-09-04','2020-09-04 15:18:59'),
(20,'ACCOUNTCREATION','test','<p><strong>Dear Sir/Madam,</strong></p>\r\n\r\n<p>Greetings from Mobisoftinfo Telecommunication Ltd.</p>\r\n\r\n<p>As per your discussion with #customer#,</p>\r\n\r\n<p>kindly fill the other details on below link for smoother processing.</p>\r\n\r\n<p>Form link:<a href=\"#url#\">click</a></p>\r\n\r\n<p>In case of any further queries, please feel free to mail me or contact me on the numbers provided below.</p>\r\n\r\n<p>We are very glad to provide you the service. Just need the short and simple document submission.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>#username#</strong><br />\r\n<strong>Mobisoftinfo Telecommunication Ltd.</strong><br />\r\nOffice No. 314, Sai Chamber,<br />\r\nAbove HDFC Bank, Sector 11, Plot No. 44,<br />\r\nCBD Belapur, Navi Mumbai 400 614<br />\r\nMaharashtra India.</p>','2020-09-04','2020-09-04 17:16:51'),
(21,'HAPPYBIRTHDAY','Happy Birthday','<p>Dear #customer_name#</p>\r\n\r\n<p><strong>Happy Birthday From mobisoft family</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/03a0d175553887.5c502990dd9d9.gif\" style=\"height:480px; width:900px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','2020-09-18','2020-09-18 11:43:35'),
(22,'ACCOUNTCREATIONFORM','Request For Demo Account','Dear Support\r\n\r\nName:#name#\r\nCompany Name:#company_name#\r\nMobile :#mobile#\r\nEmail:#email#\r\nConson Person:#console_person#\r\nConson Person Number:#console_person_number#\r\nGST:#gst# \r\n','2020-09-29','2020-09-29 12:12:07'),
(23,'ACCOUNTDETAILS','Your Account Details','Dear Customer \r\n\r\n#body#\r\n\r\n\r\n<p>Thanks & Regards,<br />\r\n </p>\r\n\r\n<p><strong>#username#</strong><br />\r\n<strong>Mobisoftinfo Telecommunication Ltd.</strong><br />\r\nOffice No. 314, Sai Chamber,<br />\r\nAbove HDFC Bank, Sector 11, Plot No. 44,<br />\r\nCBD Belapur, Navi Mumbai 400 614<br />\r\nMaharashtra India.</p>','2020-09-29','2020-09-29 12:51:01');

/*Table structure for table `expenditure` */

DROP TABLE IF EXISTS `expenditure`;

CREATE TABLE `expenditure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(225) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_date` varchar(125) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `expenditure` */

insert  into `expenditure`(`id`,`user_id`,`product_name`,`qty`,`amount`,`status`,`created_date`,`updated_date`) values 
(3,NULL,'Sugar',1,100,1,'2020-09-16 13:25:15 ','2020-09-17 14:26:18');

/*Table structure for table `floor_plane` */

DROP TABLE IF EXISTS `floor_plane`;

CREATE TABLE `floor_plane` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `floor_plane` */

insert  into `floor_plane`(`id`,`p_id`,`photo`) values 
(1,5,'1734789571_.png'),
(2,5,'1561546274.png'),
(3,5,'1881949068.png'),
(5,5,'1326066191.png'),
(6,5,'806040105.png');

/*Table structure for table `lead` */

DROP TABLE IF EXISTS `lead`;

CREATE TABLE `lead` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `company_name` varchar(225) DEFAULT NULL,
  `contact_number` varchar(225) DEFAULT NULL,
  `contact_name` varchar(225) DEFAULT NULL,
  `email_id` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `dob` varchar(225) DEFAULT NULL,
  `client_status` varchar(225) DEFAULT NULL,
  `kyc_form` varchar(225) DEFAULT NULL,
  `gst` varchar(225) DEFAULT NULL,
  `aadhar_pan` varchar(225) DEFAULT NULL,
  `c_person` varchar(225) DEFAULT NULL,
  `ccn` varchar(225) DEFAULT NULL,
  `support_id` int(11) DEFAULT NULL,
  `demo_status` int(11) DEFAULT NULL,
  `remark` longtext,
  `form_user_id` int(11) DEFAULT NULL,
  `form_role_type` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `to_role_type` int(10) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `lead` */

insert  into `lead`(`id`,`cust_id`,`company_name`,`contact_number`,`contact_name`,`email_id`,`address`,`dob`,`client_status`,`kyc_form`,`gst`,`aadhar_pan`,`c_person`,`ccn`,`support_id`,`demo_status`,`remark`,`form_user_id`,`form_role_type`,`to_user_id`,`to_role_type`,`status`,`created_date`,`updated_date`) values 
(9,7,'xx','9999999999','Akash Ohol','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'L',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,3,7,3,0,'2020-08-28 16:59:47 ','0000-00-00 00:00:00'),
(10,4,'agws','7774991416','Gagan Bansode','rebublicanjanandolan@gmail.com','bhimnagar osmanabad','2000-09-18','Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,1,0,0,'2020-09-01 11:46:46 ','2020-09-18 10:41:22'),
(11,5,'agws','7774991416','Gagan Bansode','rebublicanjanandolan@gmail.com','bhimnagar osmanabad','0000-00-00','L',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,3,7,3,0,'2020-09-01 12:55:04 ','2020-09-18 10:26:15'),
(13,9,'xx','7020823986','Gagan Bansode','rebublicanjanandolan@gmail.com','bhimnagar osmanabad',NULL,'Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-01 15:21:39 ','2020-09-25 15:47:05'),
(14,10,'agws','7020823986','Gagan Bansode','gaganbansode@gmail.com','bhimnagar osmanabad',NULL,'PA','Gagan-Bansode-07-09-2020-15137.pdf',NULL,NULL,NULL,NULL,11,0,'xzdsv',6,2,6,2,0,'2020-09-01 15:53:04 ','2020-09-29 12:46:47'),
(15,11,'xx','9768110805','Akash Ohol','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'CC','Akash-Ohol-04-09-2020-26326.pdf',NULL,NULL,NULL,NULL,11,1,'Gagan Bansode @ gmail \r\nJjkk KK\r\n\r\n',6,2,6,2,0,'2020-09-02 10:30:59 ','2020-09-29 13:17:48'),
(18,13,'xx','9768110805','tttt','rebublicanjanandolan@gmail.com','hfhg','2020-09-03','CC','Gagan-Bansode-25-09-2020-680840710.pdf',NULL,NULL,NULL,NULL,11,0,'fdhdx',6,2,6,2,0,'2020-09-07 13:34:16 ','2020-09-29 12:47:11'),
(20,14,'agws','7020823986','Akash Ohol','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'L',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,8,2,0,'2020-09-08 11:07:51 ','0000-00-00 00:00:00'),
(22,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-08','2020-09-25 15:04:56'),
(23,20,'mobisoft','8108238767','shri','jyotsnachavan3019@gmail.com','nerul',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-08 12:27:00 ','2020-09-25 15:49:13'),
(24,21,'xx','9768110805','tejaswi','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-08 12:30:15 ','2020-09-25 14:51:34'),
(25,23,'agws','9768110805','Gagan Bansode','rebublicanjanandolan@gmail.com','dfef',NULL,'PA','Gagan-Bansode-08-09-2020-26318.pdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-08 16:07:38 ','2020-09-08 16:12:39'),
(26,25,'mobisoft','9768110805','nitu','nitu.w@mobisofttech.co.in','belapur',NULL,'Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,1,0,0,'2020-09-09','0000-00-00 00:00:00'),
(27,26,'mobisoft','7020823986','Gagan Bansode','rebublicanjanandolan@gmail.com','dd',NULL,'CA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-10 12:15:56 ','2020-09-12 11:48:57'),
(28,27,'xx','9768110805','Akash Ohol','rebublicanjanandolan@gmail.com','fsdf',NULL,'L',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,4,7,3,0,'2020-09-11 11:28:28 ','0000-00-00 00:00:00'),
(29,24,'mobisoft','9768110805','Gagan Bansode','rebublicanjanandolan@gmail.com','bhimnagar osmanabad','1996-09-18','PA','Jyotsana-Chavan-18-09-2020-378572475.pdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-12 10:05:57 ','2020-09-18 11:31:41'),
(30,32,'technogan','8108238767','Jyotsna Chavan','jyotsnachavan3019@gmail.com','ff','1996-09-18','PA','Jyotsna-Chavan-18-09-2020-1112380011.pdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-18 11:34:28 ','2020-09-18 11:36:23'),
(31,3,'agws','7774991416','Gagan','gaganbansode@gmail.com','fff',NULL,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,6,2,0,'2020-09-23 11:10:14 ','2020-09-25 14:19:21'),
(33,20,'mobisoft','8108238767','shri','jyotsnachavan3019@gmail.com','dgdfg',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,8,2,0,'2020-09-25 14:44:50 ','2020-09-25 15:49:13'),
(34,21,'xx','9768110805','tejaswi','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai',NULL,'Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-25 14:49:39 ','2020-09-25 14:51:34'),
(35,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','hhh',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,16,2,0,'2020-09-25 15:04:17 ','2020-09-25 15:13:17'),
(36,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','qwerrr',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-25 15:09:33 ','2020-09-25 15:19:11'),
(37,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','fsewsw',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,16,2,0,'2020-09-25 15:18:37 ','2020-09-25 15:22:41'),
(38,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','fgdfh',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,16,2,0,'2020-09-25 15:22:22 ','2020-09-25 15:40:16'),
(39,19,'mobisoft','9768110805','Ankita','ankitamhatre44@yahoo.in','f',NULL,'L',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,2,16,2,0,'2020-09-25 15:39:21 ','0000-00-00 00:00:00'),
(40,20,'mobisoft','8108238767','shri','jyotsnachavan3019@gmail.com','fgfhb',NULL,'RA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,16,2,0,'2020-09-25 15:48:58 ','2020-09-25 15:50:50'),
(41,20,'mobisoft','8108238767','shri','jyotsnachavan3019@gmail.com','jjj',NULL,'P',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,2,6,2,0,'2020-09-25 15:50:33 ','2020-09-25 15:52:47'),
(42,22,'e','9768110805','Gagan Bansode','rebublicanjanandolan@gmail.com','bhimnagar osmanabad',NULL,'Q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,6,2,0,'2020-09-26 12:18:49 ','2020-09-26 12:20:16'),
(43,37,'mobisoft','9930305653','Manoj Sir','manoj@mobisofttech.co.in','belapur','1996-02-23','PA',NULL,'','Manoj-addhar_pan-Sir-29-09-2020-494271387.pdf','Gagan','7774991416',NULL,NULL,NULL,6,2,6,2,0,'2020-09-28 16:05:02 ','2020-09-29 12:36:48'),
(44,36,'mobisoft','9768110805','Manoj Sir','rebublicanjanandolan@gmail.com','ddd','2020-09-04','CC','Manoj-Sir-29-09-2020-2027756156.pdf','181111111111111','Manoj-addhar_pan-Sir-29-09-2020-638978458.pdf','Gagan','9768110805',11,1,'dddd',6,2,6,2,0,'2020-09-29 12:13:14 ','2020-09-29 12:36:09');

/*Table structure for table `meeting` */

DROP TABLE IF EXISTS `meeting`;

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `approved_id` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `client_name` varchar(30) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `location` varchar(101) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `amount` varchar(110) DEFAULT NULL,
  `remark` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `meeting` */

insert  into `meeting`(`id`,`user_id`,`approved_id`,`user_type`,`client_name`,`company_name`,`contact`,`location`,`time`,`date`,`status`,`amount`,`remark`) values 
(1,1,NULL,0,'demo','demo',2147483647,'demo','06:04','2020-08-04',1,NULL,NULL),
(2,1,NULL,0,'sayali','sayali',1236547896,'pune','04:42','2020-08-25',2,NULL,NULL),
(4,1,NULL,0,'gagan123','gagan123',1111111111,'gagan123','17:46','2020-08-26',3,NULL,NULL),
(5,6,1,2,'dgdsz','xx',2147483647,'shopqeel.com','11:11','2020-08-29',5,'0rs','testing'),
(6,6,1,2,'Akash Ohol','mobisoft',2147483647,'shopqeel.com','11:11','2020-09-23',1,'500','zal ka mag');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(256) NOT NULL,
  `c_date` varchar(256) NOT NULL,
  `u_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`product_name`,`c_date`,`u_date`,`status`) values 
(13,'1BHK','2020-10-25 16:16:49','2020-10-25 16:17:02',1);

/*Table structure for table `proforma_invoice` */

DROP TABLE IF EXISTS `proforma_invoice`;

CREATE TABLE `proforma_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL,
  `client_name` varchar(250) NOT NULL,
  `client_address` varchar(250) NOT NULL,
  `client_email` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `qty` int(50) NOT NULL,
  `rate` float NOT NULL,
  `amount` float NOT NULL,
  `gstin` varchar(250) DEFAULT NULL,
  `place_of_supply` varchar(250) DEFAULT NULL,
  `tax` float NOT NULL,
  `grand_total` int(250) NOT NULL,
  `ProformaId` varchar(205) NOT NULL,
  `sales_id` int(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `proforma_invoice` */

insert  into `proforma_invoice`(`id`,`cust_id`,`user_id`,`client_name`,`client_address`,`client_email`,`product_name`,`qty`,`rate`,`amount`,`gstin`,`place_of_supply`,`tax`,`grand_total`,`ProformaId`,`sales_id`,`status`,`created_at`,`updated_at`) values 
(17,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Sugar',12,11,132,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:13','2020-09-04 12:20:13'),
(18,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:13','2020-09-04 12:20:13'),
(19,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','bhaji',12,12,144,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:13','2020-09-04 12:20:13'),
(20,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','LongCode',12,1,12,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:14','2020-09-04 12:20:14'),
(21,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',1,1,1,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:14','2020-09-04 12:20:14'),
(22,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','bhaji',12,1,12,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:14','2020-09-04 12:20:14'),
(23,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','SMS-Promotional',12,1,12,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:14','2020-09-04 12:20:14'),
(24,'','6','dgdsz','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,12,144,'','28_Andhra Pradesh',84.42,553,'',6,1,'2020-09-04 12:20:14','2020-09-04 12:20:14'),
(25,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','SMS-Promotional',12,12,144,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:56','2020-09-04 15:29:56'),
(26,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','SMS-Transactional',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:56','2020-09-04 15:29:56'),
(27,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','ShortCode',12,23,276,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:56','2020-09-04 15:29:56'),
(28,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','bhaji',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:56','2020-09-04 15:29:56'),
(29,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Sugar',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:57','2020-09-04 15:29:57'),
(30,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','ShortCode',22,3,66,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:57','2020-09-04 15:29:57'),
(31,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',1,6666,6666,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:29:57','2020-09-04 15:29:57'),
(32,'10','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','gaganbansode@gmail.com','bhaji',12,12,144,'','35_Andaman & Nicobar Islands',25.92,170,'',6,1,'2020-09-04 15:38:04','2020-09-04 15:38:04'),
(33,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','SMS-Promotional',12,12,144,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:31','2020-09-04 15:43:31'),
(34,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','SMS-Transactional',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:31','2020-09-04 15:43:31'),
(35,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','ShortCode',12,23,276,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:31','2020-09-04 15:43:31'),
(36,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','bhaji',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:31','2020-09-04 15:43:31'),
(37,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Sugar',12,1,12,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:31','2020-09-04 15:43:31'),
(38,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','ShortCode',22,3,66,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:32','2020-09-04 15:43:32'),
(39,'11','6','Akash Ohol','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',1,6666,6666,'122222222222222222','30_Goa',1293.84,8482,'',6,1,'2020-09-04 15:43:32','2020-09-04 15:43:32'),
(40,'10','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','gaganbansode@gmail.com','bhaji',12,1,12,'','27_Maharashtra',2.16,14,'',6,1,'2020-09-04 15:43:58','2020-09-04 15:43:58'),
(41,'9','6','Kapil','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','bhaji',12,1,12,'','27_Maharashtra',2.16,14,'',6,1,'2020-09-04 16:04:47','2020-09-04 16:04:47'),
(42,'','1','dgdsz','bhimnagar osmanabad\r\nbhimnagar','rebublicanjanandolan@gmail.com','Website',12,1,12,'111111111111','6_Haryana',2.16,14,'',1,1,'2020-09-07 10:17:14','2020-09-07 10:17:14'),
(43,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'11111111','27_Maharashtra',2.16,14,'',6,1,'2020-09-10 12:30:03','2020-09-10 12:30:03'),
(44,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'11111111','7_Delhi',2.16,14,'',6,1,'2020-09-10 12:32:29','2020-09-10 12:32:29'),
(45,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,2,24,'11111111','12_Arunachal Pradesh',4.32,28,'',6,1,'2020-09-10 12:36:23','2020-09-10 12:36:23'),
(46,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',100,1,100,'11111111','27_Maharashtra',18,118,'',6,1,'2020-09-10 12:41:32','2020-09-10 12:41:32'),
(47,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'11111111','28_Andhra Pradesh',2.16,14,'',6,1,'2020-09-10 12:44:06','2020-09-10 12:44:06'),
(48,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Email',12,1,12,'11111111','18_Assam',2.16,14,'',6,1,'2020-09-10 12:47:33','2020-09-10 12:47:33'),
(49,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'11111111','12_Arunachal Pradesh',2.16,14,'',6,1,'2020-09-10 12:49:57','2020-09-10 12:49:57'),
(50,'26','6','Gagan Bansode','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','Website',12,1,12,'11111111','18_Assam',2.16,14,'',6,1,'2020-09-10 12:51:05','2020-09-10 12:51:05'),
(51,'20','6','shri','sad','jyotsnachavan3019@gmail.com','Website',11,1,11,'','27_Maharashtra',1.98,13,'',6,1,'2020-09-25 15:45:15','2020-09-25 15:45:15'),
(52,'20','6','shri','BDFVB','jyotsnachavan3019@gmail.com','SMS-Promotional',1,1,1,'','27_Maharashtra',0.18,1,'',6,1,'2020-09-25 15:48:04','2020-09-25 15:48:04'),
(53,'20','6','shri','bcx','jyotsnachavan3019@gmail.com','Sugar122',1,10,10,'','27_Maharashtra',1.8,12,'',6,1,'2020-09-25 15:52:39','2020-09-25 15:52:39');

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `developer` int(11) DEFAULT NULL,
  `project_type` int(11) DEFAULT NULL,
  `unit_type` int(11) DEFAULT NULL,
  `locality` varchar(225) DEFAULT NULL,
  `city` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `pincode` varchar(15) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `rera` varchar(225) DEFAULT NULL,
  `price` varchar(225) DEFAULT NULL,
  `google_location` longtext,
  `desc` longtext,
  `amenities` varchar(225) DEFAULT NULL,
  `seo` varchar(225) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `cover_photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`id`,`name`,`developer`,`project_type`,`unit_type`,`locality`,`city`,`address`,`pincode`,`size`,`area`,`rera`,`price`,`google_location`,`desc`,`amenities`,`seo`,`created_date`,`cover_photo`) values 
(1,'Gagan Bansode',22,3,13,'bhimnagar','osmanabad','bhimnagar osmanabad','413501','size','224sqt','yy','1200','location','fkfufy','5,4','Gagan-Bansode',NULL,'1425557456.png'),
(2,'Gagan Bansode',22,3,13,'bhimnagar','osmanabad','bhimnagar osmanabad','413501','1,2,2,2,','224sqt','yy','1200','','&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.004142790374!2d73.00510519999999!3d19.08566345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c12fbb3fc4b5%3A0xa4a24a1acc52c6c9!2sVinamra%20Swaraj%20Hospital!5e0!3m2!1sen!2sin!4v1604166938677!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"&gt;&lt;/iframe&gt;',NULL,'Gagan-Bansode',NULL,'2029687302.png'),
(3,'Gagan Bansode',22,3,13,'bhimnagar','osmanabad','bhimnagar osmanabad','413501','1,2,2,2,','224sqt','yy','1200','','&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.004142790374!2d73.00510519999999!3d19.08566345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c12fbb3fc4b5%3A0xa4a24a1acc52c6c9!2sVinamra%20Swaraj%20Hospital!5e0!3m2!1sen!2sin!4v1604166938677!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"&gt;&lt;/iframe&gt;',NULL,'Gagan-Bansode',NULL,'1275264175.png'),
(4,'Gagan Bansode',22,3,13,'bhimnagar','osmanabad','bhimnagar osmanabad','413501','size','224sqt','yy','1200','location','testing','5,4','Gagan-Bansode',NULL,'1141528869.png'),
(5,'Gagan Bansode',22,3,13,'bhimnagar','osmanabad','bhimnagar osmanabad','413501','size','224sqt','yy','1200','location','testing','5,4','Gagan-Bansode',NULL,'1031709893.png');

/*Table structure for table `project_img` */

DROP TABLE IF EXISTS `project_img`;

CREATE TABLE `project_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `project_img` */

insert  into `project_img`(`id`,`p_id`,`photo`) values 
(1,4,'1572257650_.png'),
(2,4,'1575745059_.png'),
(3,5,'1689152206.png'),
(10,5,'1289008242.png'),
(11,2,'807887758.png');

/*Table structure for table `quotation` */

DROP TABLE IF EXISTS `quotation`;

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `qty` varchar(225) DEFAULT NULL,
  `rate` varchar(225) DEFAULT NULL,
  `validity` varchar(225) DEFAULT NULL,
  `qoutation` varchar(225) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_date` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `quotation` */

insert  into `quotation`(`id`,`user_id`,`cust_id`,`company_name`,`contact_person`,`contact_number`,`address`,`email_id`,`product_name`,`qty`,`rate`,`validity`,`qoutation`,`status`,`created_date`) values 
(22,6,19,'mobisoft','Ankita','9768110805','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','ankitamhatre44@yahoo.in','6:Website,2:SMS-Promotional','90,1','11,11','1 Month,6 Month','http://localhost/mobisoft/uploads/quotations/Ankita-08-09-2020-19336.pdf',1,'2020-09-08'),
(23,6,20,'mobisoft','shri','8108238767','nerul','jyotsnachavan3019@gmail.com','2:SMS-Promotional,4:LongCode','90,1','11,11','12 Month,3 Month','http://localhost/mobisoft/uploads/quotations/shri-08-09-2020-18721.pdf',1,'2020-09-08'),
(24,6,21,'xx','tejaswi','9768110805','ssff','rebublicanjanandolan@gmail.com','1:SMS-Transactional','90','11','Unlimited','http://localhost/mobisoft/uploads/quotations/tejaswi-08-09-2020-19846.pdf',1,'2020-09-08'),
(25,1,25,'mobisoft','nitu','9768110805','belapur','nitu.w@mobisofttech.co.in','2:SMS-Promotional,4:LongCode','90,2','12,11','1 Month,1 Month','http://localhost/mobisoft/uploads/quotations/nitu-09-09-2020-21016.pdf',1,'2020-09-09'),
(26,6,26,'mobisoft','Gagan Bansode','7020823986','bhimnagar ','rebublicanjanandolan@gmail.com','6:Website','90','11','1 Month','http://localhost/mobisoft/uploads/quotations/Gagan-Bansode-10-09-2020-17219.pdf',1,'2020-09-10'),
(27,1,4,'agws','Akash Ohol','9768110805','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','gaganbansode@gmail.com','6:Website','90','11','1 Month','http://localhost/mobisoft/uploads/quotations/Akash-Ohol-11-09-2020-1740557871.pdf',1,'2020-09-11'),
(28,12,9,'xx','Akash Ohol','9768110805','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','rebublicanjanandolan@gmail.com','6:Website,4:LongCode','90,90','11,11','3 Month,3 Month','http://localhost/mobisoft/uploads/quotations/Akash-Ohol-16-09-2020-1056961364.pdf',1,'2020-09-16'),
(29,6,21,'xx','tejaswi','9768110805','DSf','rebublicanjanandolan@gmail.com','6:Website','90','11','6 Month','http://localhost/mobisoft/uploads/quotations/tejaswi-25-09-2020-29770245.pdf',1,'2020-09-25'),
(30,6,21,'xx','tejaswi','9768110805','fhd','rebublicanjanandolan@gmail.com','2:SMS-Promotional','90','11','3 Month','http://localhost/mobisoft/uploads/quotations/tejaswi-25-09-2020-1086077787.pdf',1,'2020-09-25'),
(31,16,19,'mobisoft','Ankita','9768110805','cx','ankitamhatre44@yahoo.in','3:ShortCode','90','11','3 Month','http://localhost/mobisoft/uploads/quotations/Ankita-25-09-2020-405263949.pdf',1,'2020-09-25'),
(32,6,19,'mobisoft','Ankita','9768110805','dgeseg','ankitamhatre44@yahoo.in','1:SMS-Transactional','90','11','12 Month','http://localhost/mobisoft/uploads/quotations/Ankita-25-09-2020-105773883.pdf',1,'2020-09-25'),
(33,16,19,'mobisoft','Ankita','9768110805','sfe','ankitamhatre44@yahoo.in','2:SMS-Promotional','90','11','3 Month','http://localhost/mobisoft/uploads/quotations/Ankita-25-09-2020-1757147124.pdf',1,'2020-09-25'),
(34,16,19,'mobisoft','Ankita','9768110805','hfghth','ankitamhatre44@yahoo.in','6:Website','90','11','1 Month','http://localhost/mobisoft/uploads/quotations/Ankita-25-09-2020-234499561.pdf',1,'2020-09-25'),
(35,6,9,'xx','Kapil','7020823986','scSC','rebublicanjanandolan@gmail.com','4:LongCode','90','11','3 Month','http://localhost/mobisoft/uploads/quotations/Kapil-25-09-2020-164633251.pdf',1,'2020-09-25'),
(36,6,20,'mobisoft','shri','8108238767','xvxcbx','jyotsnachavan3019@gmail.com','4:LongCode','90','11','6 Month','http://localhost/mobisoft/uploads/quotations/shri-25-09-2020-644264158.pdf',1,'2020-09-25'),
(37,16,20,'mobisoft','shri','8108238767','fcghfc','jyotsnachavan3019@gmail.com','3:ShortCode','90','11','12 Month','http://localhost/mobisoft/uploads/quotations/shri-25-09-2020-1639891849.pdf',1,'2020-09-25'),
(38,6,20,'mobisoft','shri','8108238767','vhnvhj','jyotsnachavan3019@gmail.com','8:Sugar','90','11','3 Month','http://localhost/mobisoft/uploads/quotations/shri-25-09-2020-858626071.pdf',1,'2020-09-25'),
(39,6,22,'xx','Gagan Bansode','7020823986','bhimnagar osmanabad\r\nbhimnagar','rebublicanjanandolan@gmail.com','3:ShortCode','90','11','6 Month','http://localhost/mobisoft/uploads/quotations/Gagan-Bansode-26-09-2020-1854425627.pdf',1,'2020-09-26');

/*Table structure for table `reminder` */

DROP TABLE IF EXISTS `reminder`;

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `r_date` varchar(225) DEFAULT NULL,
  `r_time` varchar(225) DEFAULT NULL,
  `remark` varchar(225) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT '0',
  `url` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `reminder` */

insert  into `reminder`(`id`,`user_id`,`user_type`,`cust_id`,`r_date`,`r_time`,`remark`,`created_date`,`updated_date`,`status`,`url`) values 
(1,1,NULL,4,'2020-08-26','02:55','call not take','2020-08-26 14:51:38 ','2020-08-26 21:00:35',1,NULL),
(2,1,NULL,4,'2020-08-26','02:55','call not take','2020-08-26 14:51:38 ','2020-08-26 21:00:35',1,NULL),
(3,7,NULL,4,'2020-08-07','11:11','gdz','2020-08-26 14:46:43 ','2020-08-26 21:00:35',1,NULL),
(4,7,NULL,4,'2020-08-27','02:56','fe','2020-08-26 14:53:42 ','2020-08-26 21:00:35',1,NULL),
(5,7,NULL,4,'2020-08-20','02:57','bfg','2020-08-26 14:54:20 ','2020-08-26 21:00:35',1,NULL),
(6,7,NULL,4,'2020-08-12','04:57','hff','2020-08-26 16:53:38 ','2020-08-26 21:00:35',1,NULL),
(7,7,NULL,4,'2020-08-27','04:57','asach ','2020-08-26 16:54:32 ','2020-08-26 21:00:35',1,NULL),
(8,7,NULL,4,'2020-08-29','05:19','ngc','2020-08-26 17:17:11 ','2020-08-26 21:00:35',1,NULL),
(9,7,NULL,4,'2020-08-27','09:03','xcv','2020-08-26 21:00:07 ','2020-08-26 21:20:03',1,NULL),
(10,7,NULL,4,'2020-07-30','21:24','xdg','2020-08-26 21:21:21 ','2020-08-26 21:24:17',1,'http://localhost/mobisoft/Admin_page/customer'),
(11,7,NULL,4,'2020-08-28','09:29','csd','2020-08-26 21:24:06 ','2020-08-26 21:25:43',1,'http://localhost/mobisoft/Admin_page/customer'),
(12,7,NULL,4,'2020-08-28','09:35','xdhb','2020-08-26 21:25:15 ','2020-08-26 21:26:06',1,'http://localhost/mobisoft/Admin_page/set_remainder_list'),
(13,7,NULL,7,'2020-08-06','11:11','v z','2020-08-26 23:15:57 ','2020-08-28 14:43:33',1,'http://localhost/mobisoft/Admin_page/customer'),
(14,1,NULL,3,'2020-08-27','12:00','Remark','2020-08-27 10:59:16 ','2020-09-07 12:12:06',1,'http://localhost/mobisoft/Admin_page/customer'),
(15,7,NULL,7,'2020-08-27','04:06','df','2020-08-28 16:02:45 ','2020-08-28 16:58:00',1,'http://localhost/mobisoft/Admin_page/customer'),
(16,7,NULL,7,'2020-08-29','11:11','fdfh','2020-08-28 16:57:43 ','2020-08-28 16:59:54',1,'http://localhost/mobisoft/Admin_page/set_remainder_list'),
(19,6,NULL,12,'2020-09-25','10:46','dzg','2020-09-03 10:42:48 ','2020-09-03 10:43:15',1,'http://localhost/mobisoft/Admin_page/rejected_customer'),
(20,6,NULL,12,'2020-09-26','11:11','xdf','2020-09-03 10:43:19 ','2020-09-03 11:01:25',1,'http://localhost/mobisoft/Admin_page/rejected_customer'),
(21,6,NULL,12,'2020-09-10','11:11','dfg','2020-09-03 11:01:01 ','2020-09-05 13:24:45',1,'http://localhost/mobisoft/Admin_page/set_remainder_list'),
(22,6,NULL,12,'2020-09-12','11:09','hghgj','2020-09-05 13:24:25 ','2020-09-05 13:24:57',1,'http://localhost/mobisoft/Admin_page/set_remainder_list'),
(23,6,NULL,12,'2020-09-30','00:00','ccbc','2020-09-05 13:25:03 ','2020-09-08 11:31:20',1,'http://localhost/mobisoft/Admin_page/rejected_customer'),
(24,10,NULL,17,'2020-09-09','11:11','fdg','2020-09-08 10:50:22 ','0000-00-00 00:00:00',0,'http://localhost/mobisoft/Admin_page/customer');

/*Table structure for table `reporting_person` */

DROP TABLE IF EXISTS `reporting_person`;

CREATE TABLE `reporting_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(225) DEFAULT NULL,
  `lname` varchar(225) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `created_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reporting_person` */

insert  into `reporting_person`(`id`,`fname`,`lname`,`status`,`created_date`) values 
(1,'Gagan','bb',1,'2020-08-28 16:21:23'),
(3,'jyotsna','chavan',1,'2020-08-25 12:11:49'),
(4,'nitu','mam',1,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(225) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`id`,`role_name`,`status`) values 
(0,'Super Admin',1),
(1,'Admin',1),
(2,'Developer',1);

/*Table structure for table `sales_target` */

DROP TABLE IF EXISTS `sales_target`;

CREATE TABLE `sales_target` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `placed_id` int(11) DEFAULT NULL,
  `target` int(11) DEFAULT NULL,
  `achieved` double DEFAULT '0',
  `start_date` varchar(225) DEFAULT NULL,
  `end_date` varchar(225) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(225) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `sales_target` */

insert  into `sales_target`(`id`,`user_id`,`placed_id`,`target`,`achieved`,`start_date`,`end_date`,`created_date`,`updated_date`,`remark`,`status`) values 
(5,6,12,1200,0,'2020-08-01','2020-08-30','2020-09-16 08:47:09','2020-09-30 11:54:40',NULL,1),
(6,8,12,1200,0,'2020-09-17','2020-09-30','2020-09-16 08:47:30','0000-00-00 00:00:00',NULL,1),
(8,15,6,1200,0,'2020-09-01','2020-09-30','2020-09-16 11:44:33','0000-00-00 00:00:00',NULL,1),
(9,6,12,1200,0.02,'2020-09-01','2020-10-30','2020-09-16 08:19:18','2020-09-30 12:26:04',NULL,1);

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `state_id` int(50) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) DEFAULT NULL,
  `state_code` int(10) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`state_id`,`state_name`,`state_code`) values 
(1,'Andaman & Nicobar Islands',35),
(2,'Andhra Pradesh',28),
(3,'Arunachal Pradesh',12),
(4,'Assam',18),
(5,'Bihar',10),
(6,'Chandigarh',4),
(7,'Chattisgarh',22),
(8,'Dadra & Nagar Haveli',26),
(9,'Daman & Diu',25),
(10,'Delhi',7),
(11,'Goa',30),
(12,'Gujarat',24),
(13,'Haryana',6),
(14,'Himachal Pradesh',2),
(15,'Jammu & Kashmir',1),
(16,'Jharkhand',20),
(17,'Karnataka',29),
(18,'Kerala',32),
(19,'Lakshadweep',31),
(20,'Madhya Pradesh',23),
(21,'Maharashtra',27),
(22,'Manipur',14),
(23,'Meghalaya',17),
(24,'Mizoram',15),
(25,'Nagaland',13),
(26,'Odisha',21),
(27,'Poducherry',34),
(28,'Punjab',3),
(29,'Rajasthan',8),
(30,'Sikkim',11),
(31,'Tamil Nadu',33),
(32,'Telangana',26),
(33,'Tripura',16),
(34,'Uttar Pradesh',9),
(35,'Uttarakhand',5),
(36,'West Bengal',19),
(37,'Andhra Pradesh (New)',37);

/*Table structure for table `support` */

DROP TABLE IF EXISTS `support`;

CREATE TABLE `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `customer_name` varchar(225) DEFAULT NULL,
  `contact_number` varchar(225) DEFAULT NULL,
  `contact_email` varchar(225) DEFAULT NULL,
  `query` longtext,
  `status` int(2) DEFAULT '1',
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `support_persone` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `support` */

insert  into `support`(`id`,`user_id`,`customer_name`,`contact_number`,`contact_email`,`query`,`status`,`created_date`,`updated_date`,`support_persone`) values 
(1,11,'Abhay','2222222222','gagan@gmail.com','hello sir',1,'2020-08-09','2020-09-21 13:05:52','Rakesh more'),
(2,11,'anita','4445454569','gagan@gmail.com','done',2,'2020-09-09','2020-09-16 14:59:26','Rakesh more'),
(3,5,'gagan','1123658963','gagan@gmail.com','hello sir',3,'2020-09-05 12:12:15','2020-09-05 16:05:32','Akash Ohol'),
(7,5,'Abhay','2222222222','gagan@gmail.com','gf',3,'2020-09-14 12:38:52','2020-09-05 16:10:07','Akash Ohol'),
(8,1,'Gagan Bansode','7020823986','rebublicanjanandolan@gmail.com','dgfxdf',1,'2020-09-05 12:55:47','0000-00-00 00:00:00','Gagan Pawan'),
(9,11,'Akash Ohol','9768110805','rebublicanjanandolan@gmail.com','dgfxdf',0,'2020-09-22 11:59:22','0000-00-00 00:00:00','Rakesh more'),
(10,11,'Akash Ohol','9768110805','rebublicanjanandolan@gmail.com','dgfxdf',1,'2020-09-22 12:00:29','0000-00-00 00:00:00','Rakesh more');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(225) DEFAULT NULL,
  `lname` varchar(225) DEFAULT NULL,
  `contact_number` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `user_type` int(11) DEFAULT '1',
  `reportingto` varchar(225) DEFAULT NULL,
  `placed_under` varchar(11) DEFAULT NULL,
  `createdby` varchar(10) DEFAULT NULL,
  `created_date` varchar(225) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) DEFAULT '1',
  `url` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `dob` varchar(225) DEFAULT NULL,
  `position` varchar(225) DEFAULT NULL,
  `website` varchar(225) DEFAULT NULL,
  `company` varchar(225) DEFAULT NULL,
  `rand_id` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7545 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`fname`,`lname`,`contact_number`,`email`,`password`,`user_type`,`reportingto`,`placed_under`,`createdby`,`created_date`,`updated_date`,`status`,`url`,`address`,`pincode`,`photo`,`dob`,`position`,`website`,`company`,`rand_id`) values 
(1,'Gagan','Pawan','7774991416','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',0,'1',NULL,'1','2020-08-24','2020-09-26 12:43:51',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(22,'Gagan','Bansode','7020823986','rebublicanjanandolan@gmail.com','7ad53786249e95cc084a94a3ccdae2e8',1,NULL,NULL,'1','2020-10-25',NULL,1,NULL,'bhimnagar osmanabad\r\nbhimnagar',NULL,NULL,NULL,NULL,NULL,'fd',NULL),
(7531,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a19d650d2e238e0bbb9225915ae74fe4'),
(7532,'Gagan','Bansode','07020823986','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-18 19:12:35',1,NULL,'bhimnagar osmanabad\r\nbhimnagar','413501','1754914435.png','2021-04-20','y',NULL,'Technogan','656a112a1ba37e5def6a94e52ec1075f'),
(7533,'Gagan','Bansode','07020823986','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-17 20:58:40',1,NULL,'bhimnagar osmanabad\r\nbhimnagar',NULL,NULL,'2021-04-23','3',NULL,'Technogan','96e9b444cad521384fbd113bacb5df32'),
(7534,'Gagan','Bansode','07020823986','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-18 19:50:15',1,NULL,'bhimnagar osmanabad\r\nbhimnagar','413501','1476833962.png','2021-04-20','software developer','http://technogan.co.in/','Technogan','333e6e52ed8e2a36b05b64e62f2e7207'),
(7535,'Gagan','Bansode','7020823986','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-18 19:58:13',1,NULL,'bhimnagar osmanabad\r\nbhimnagar','413501','1275969572.png','2021-04-22','software developer','gaganbansode.com','Technogan','7dbc836d02d19ece5983a33d427cd0f9'),
(7536,'Gagan','Bansode','07020823986','gaganbansode@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-18 20:39:27',1,NULL,'bhimnagar osmanabad\r\nbhimnagar','413501','1145309607.png','2021-04-20','software developer','gaganbansode.com','Technogan','2e922da31db8dcd87bd4998fecbc06cc'),
(7537,'Gagan','Bansode','07020823986','gaganbansode1@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,NULL,NULL,'2021-04-19 00:02:12',1,NULL,'bhimnagar osmanabad\r\nbhimnagar','413501','1643245171.png','2021-04-21','software developer','gaganbansode.com','Technogan','d54c092eeab20a7b174373fd6f972214'),
(7538,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'b3db133f69d059dfa00cfa2992d9f200'),
(7539,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8afc34276573d913b01ce3dbd61868ff'),
(7540,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9f008cb3c49639a05ab62494a6761477'),
(7541,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'06a4c937882e5e97dfd5ba5077649472'),
(7542,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c0cd5ed5da38882cd506d9267b5c41f5'),
(7543,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'14845e2e85870a40e0344551dc105b17'),
(7544,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'e0fd8658e1a4ccaddaee4c3409749aa7');

/*Table structure for table `vendor` */

DROP TABLE IF EXISTS `vendor`;

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(105) DEFAULT NULL,
  `company_name` varchar(105) DEFAULT NULL,
  `mobile` varchar(105) DEFAULT NULL,
  `emailid` varchar(105) DEFAULT NULL,
  `address` varchar(105) DEFAULT NULL,
  `created_date` varchar(105) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `vendor` */

insert  into `vendor`(`id`,`name`,`company_name`,`mobile`,`emailid`,`address`,`created_date`,`updated_date`) values 
(7,'Akash Ohol','mobisoft','9768110805','rebublicanjanandolan@gmail.com','Room no.704, Bldg no.96, New Mhada Colony, Mankhurd, mumbai','2020-09-16 13:24:52 ','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
