DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) NOT NULL,
  `tip` varchar(30) NOT NULL,
  `locatie` varchar(50) NOT NULL,
  `societatatea` int(3) DEFAULT NULL,
  `data_sesizarii` varchar(50) DEFAULT NULL,
  `ora_sesizarii` varchar(30) DEFAULT NULL,
  `timpul` varchar(30) DEFAULT NULL,
  `timpul2` varchar(30) DEFAULT NULL,
  `timpul3` varchar(255) DEFAULT NULL,
  `obs` varchar(31) DEFAULT NULL,
  `date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `operatiuni` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------