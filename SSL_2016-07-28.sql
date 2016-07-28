# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: SSL
# Generation Time: 2016-07-28 19:55:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `phone`, `email`, `website`)
VALUES
	(61,'Fialishia','OLoughlin','4076790100','foloughlin@fullsail.com','http://www.fullsail.edu/'),
	(62,'William','Berlanga','0000000000','weberlanga@fullsail.edu','http://www.fullsail.edu/'),
	(63,'Timothy','Castillo','0000000000','tjcastillo@fullsail.edu','http://www.fullsail.edu/'),
	(64,'Joshua','Ceres','0000000000','joshc@fullsail.edu','http://www.fullsail.edu/'),
	(65,'Brandon','Golden','0000000000','goldenb@fullsail.edu','http://www.fullsail.edu/'),
	(66,'Andrew','Hilliard','0000000000','alhilliard@fullsail.edu','http://www.fullsail.edu/'),
	(67,'Judd','Seger','0000000000','jjseger@fullsail.edu','http://www.fullsail.edu/');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fruits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fruits`;

CREATE TABLE `fruits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fruitname` varchar(50) DEFAULT NULL,
  `fruitcolor` varchar(50) DEFAULT NULL,
  `fruitimage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;

INSERT INTO `fruits` (`id`, `fruitname`, `fruitcolor`, `fruitimage`)
VALUES
	(54,'Banana','Yellow','Bananas_white_background_DS.jpg'),
	(56,'Orange','Orange','OrangeBloss_wb.jpg'),
	(57,'Lime','Green','Lime_Blossom.jpg');

/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users101
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users101`;

CREATE TABLE `users101` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users101` WRITE;
/*!40000 ALTER TABLE `users101` DISABLE KEYS */;

INSERT INTO `users101` (`userid`, `username`, `password`, `avatar`)
VALUES
	(1,'test','dae9b6841186ebd008756612d2c658a3','');

/*!40000 ALTER TABLE `users101` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
