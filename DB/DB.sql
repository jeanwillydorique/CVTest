-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `CVs`;
CREATE TABLE `CVs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `skill_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `hobby_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `experience_id` (`experience_id`),
  KEY `skill_id` (`skill_id`),
  KEY `hobby_id` (`hobby_id`),
  KEY `user_id` (`user_id`),
  KEY `education_id` (`education_id`),
  KEY `language_id` (`language_id`),
  CONSTRAINT `CVs_ibfk_10` FOREIGN KEY (`language_id`) REFERENCES `Languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CVs_ibfk_3` FOREIGN KEY (`experience_id`) REFERENCES `Experiences` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CVs_ibfk_4` FOREIGN KEY (`skill_id`) REFERENCES `Skills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CVs_ibfk_7` FOREIGN KEY (`hobby_id`) REFERENCES `Hobbies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CVs_ibfk_8` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CVs_ibfk_9` FOREIGN KEY (`education_id`) REFERENCES `Education` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `CVs` (`id`, `name`, `skill_id`, `experience_id`, `education_id`, `hobby_id`, `user_id`, `language_id`) VALUES
(1,	'test 1',	3,	3,	2,	3,	1,	3);

DROP TABLE IF EXISTS `Education`;
CREATE TABLE `Education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `content` tinytext NOT NULL,
  `startdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Education` (`id`, `name`, `content`, `startdate`, `enddate`) VALUES
(1,	'Master',	'Commerce',	2010,	2012),
(2,	'Licence',	'Eco',	2016,	2039),
(3,	'licence',	'Science',	0,	0),
(4,	'Bac',	'Scientifique',	0,	0);

DROP TABLE IF EXISTS `Experiences`;
CREATE TABLE `Experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `content` tinytext NOT NULL,
  `startdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Experiences` (`id`, `name`, `content`, `startdate`, `enddate`) VALUES
(1,	'Caca',	'J\'aime manger le caca',	5325,	5678),
(2,	'pipi',	'j\'aime boire le pipi',	2413,	4456),
(3,	'cyprine',	'j\'aime bien la cyprine ',	2309,	3569);

DROP TABLE IF EXISTS `Hobbies`;
CREATE TABLE `Hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Hobbies` (`id`, `name`) VALUES
(1,	'foot'),
(2,	'tatouage'),
(3,	'chien'),
(4,	'chat');

DROP TABLE IF EXISTS `Languages`;
CREATE TABLE `Languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Languages` (`id`, `name`) VALUES
(1,	'Français'),
(2,	'Anglais'),
(3,	'Cuni'),
(4,	'Anu');

DROP TABLE IF EXISTS `Skills`;
CREATE TABLE `Skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Skills` (`id`, `name`) VALUES
(1,	'gros boule'),
(2,	'gros nichon'),
(3,	'gros pieds'),
(4,	'gros nez');

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `age` int(11) DEFAULT NULL,
  `adress` tinytext,
  `tel` tinytext,
  `mail` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `User` (`id`, `name`, `password`, `age`, `adress`, `tel`, `mail`) VALUES
(1,	'Maurice',	'0000',	89,	'sous le pont de Perrache',	'08 76 55 77 88',	'maurice@souslepont.fr'),
(5,	'Willy',	'grillllle',	NULL,	NULL,	NULL,	NULL),
(6,	'Wyll',	'2401',	NULL,	NULL,	NULL,	NULL),
(7,	'Wyll',	'2401',	NULL,	NULL,	NULL,	NULL);

-- 2018-12-11 16:06:23
