/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - freelance_video_editing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`freelance_video_editing` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `freelance_video_editing`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category_name`) values 
(1,'sdfgh'),
(3,'sdfgh'),
(4,'sdfvb'),
(5,'sdfvb'),
(8,'testing');

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chat` */

insert  into `chat`(`chat_id`,`sender_id`,`receiver_id`,`message`,`date`) values 
(1,0,2,'sdfghf',NULL),
(2,1,2,'agrjn',NULL),
(3,1,2,'agrjn',NULL),
(4,1,2,'agrjn',NULL),
(5,1,2,'agrjn',NULL),
(6,1,2,'agrjn',NULL),
(7,1,2,'agrjn',NULL),
(8,1,2,'agrjn',NULL),
(9,1,2,'agrjn',NULL),
(10,1,2,'agrjn',NULL),
(11,0,1,'erhtdfd',NULL),
(12,2,1,'helloo\r\n',NULL),
(13,1,2,'hii',NULL);

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `client` */

insert  into `client`(`client_id`,`login_id`,`fname`,`lname`,`place`,`phone`,`email`) values 
(1,1,'Ebony Mckee','Keith Bates','Maxime vero quo qui ','+1 (871) 625-22','luto@mailinator.com');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `complaint` varchar(500) DEFAULT NULL,
  `reply` varchar(500) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`client_id`,`complaint`,`reply`,`date`) values 
(1,1,'hello','hiiiii','2021-09-10'),
(2,1,'fghhfbf','hellooo','2021-10-18');

/*Table structure for table `editor` */

DROP TABLE IF EXISTS `editor`;

CREATE TABLE `editor` (
  `editor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`editor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `editor` */

insert  into `editor`(`editor_id`,`login_id`,`fname`,`lname`,`place`,`phone`,`email`) values 
(1,2,'Wayne Powell','Upton Sexton','Autem veritatis veri','+1 (472) 786-63','luni@mailinator.com');

/*Table structure for table `enquiry` */

DROP TABLE IF EXISTS `enquiry`;

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor_id` int(11) DEFAULT NULL,
  `enquiry` varchar(1000) DEFAULT NULL,
  `reply` varchar(1000) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `enquiry` */

insert  into `enquiry`(`enquiry_id`,`editor_id`,`enquiry`,`reply`,`date`) values 
(1,1,'ghn','Pending','2021-10-05'),
(2,1,'ghn','Pending','2021-10-05'),
(3,1,'ghn','Pending','2021-10-05'),
(4,1,'fghjm,','wertfghjk','2021-10-05');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'cc','cc','client'),
(2,'ee','ee','editor'),
(3,'admin','admin','admin');

/*Table structure for table `myservice` */

DROP TABLE IF EXISTS `myservice`;

CREATE TABLE `myservice` (
  `myservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) DEFAULT NULL,
  `editor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`myservice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `myservice` */

insert  into `myservice`(`myservice_id`,`service_id`,`editor_id`) values 
(1,1,1);

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`request_id`,`amount`,`date`) values 
(1,1,'10000 ','2021-10-18');

/*Table structure for table `proposal` */

DROP TABLE IF EXISTS `proposal`;

CREATE TABLE `proposal` (
  `proposal_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`proposal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `proposal` */

insert  into `proposal`(`proposal_id`,`request_id`,`amount`,`date`,`status`) values 
(1,1,'10000','2021-10-26','Accepted');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `myservice_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `request` */

insert  into `request`(`request_id`,`customer_id`,`myservice_id`,`title`,`video`,`details`,`date`,`status`) values 
(1,1,1,'sample test','videos/video_616cfd1aa23fb.mp4','sdffhyjklkjhg','2021-10-25','Paid');

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `service` */

insert  into `service`(`service_id`,`category_id`,`service`) values 
(1,4,'addfgbn'),
(2,1,'adsfgh'),
(3,8,'sample');

/*Table structure for table `uploadworks` */

DROP TABLE IF EXISTS `uploadworks`;

CREATE TABLE `uploadworks` (
  `uploadwork_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `uploadedfile` varchar(500) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uploadwork_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `uploadworks` */

insert  into `uploadworks`(`uploadwork_id`,`request_id`,`uploadedfile`,`date`) values 
(1,1,'videos/video_616d3b05c723e.mp4','2021-10-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
