SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `author` varchar(12) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
