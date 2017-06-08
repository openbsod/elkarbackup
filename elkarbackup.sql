-- MySQL dump 10.13  Distrib 5.6.26, for FreeBSD10.2 (amd64)
--
-- Host: localhost    Database: elkarbackup
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `isActive` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `quota` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `sshArgs` varchar(255) DEFAULT NULL,
  `rsyncShortArgs` varchar(255) DEFAULT NULL,
  `rsyncLongArgs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C0E801635E237E06` (`name`),
  KEY `IDX_C0E801637E3C61F9` (`owner_id`),
  CONSTRAINT `FK_C0E801637E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ClientScriptPost`
--

DROP TABLE IF EXISTS `ClientScriptPost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClientScriptPost` (
  `client_id` int(11) NOT NULL,
  `script_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`script_id`),
  KEY `IDX_49132A8919EB6921` (`client_id`),
  KEY `IDX_49132A89A1C01850` (`script_id`),
  CONSTRAINT `FK_49132A8919EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_49132A89A1C01850` FOREIGN KEY (`script_id`) REFERENCES `Script` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ClientScriptPre`
--

DROP TABLE IF EXISTS `ClientScriptPre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClientScriptPre` (
  `client_id` int(11) NOT NULL,
  `script_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`script_id`),
  KEY `IDX_7EBF6DF919EB6921` (`client_id`),
  KEY `IDX_7EBF6DF9A1C01850` (`script_id`),
  CONSTRAINT `FK_7EBF6DF919EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7EBF6DF9A1C01850` FOREIGN KEY (`script_id`) REFERENCES `Script` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Job`
--

DROP TABLE IF EXISTS `Job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `policy_id` int(11) DEFAULT NULL,
  `description` longtext,
  `isActive` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notificationsEmail` varchar(255) DEFAULT NULL,
  `notificationsTo` varchar(255) NOT NULL,
  `minNotificationLevel` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `diskUsage` int(11) NOT NULL,
  `include` longtext,
  `exclude` longtext,
  `useLocalPermissions` tinyint(1) NOT NULL,
  `priority` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C395A61819EB6921` (`client_id`),
  KEY `IDX_C395A6182D29E3C6` (`policy_id`),
  CONSTRAINT `FK_C395A61819EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`),
  CONSTRAINT `FK_C395A6182D29E3C6` FOREIGN KEY (`policy_id`) REFERENCES `Policy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `JobScriptPost`
--

DROP TABLE IF EXISTS `JobScriptPost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JobScriptPost` (
  `job_id` int(11) NOT NULL,
  `script_id` int(11) NOT NULL,
  PRIMARY KEY (`job_id`,`script_id`),
  KEY `IDX_C1C2251FBE04EA9` (`job_id`),
  KEY `IDX_C1C2251FA1C01850` (`script_id`),
  CONSTRAINT `FK_C1C2251FA1C01850` FOREIGN KEY (`script_id`) REFERENCES `Script` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C1C2251FBE04EA9` FOREIGN KEY (`job_id`) REFERENCES `Job` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `JobScriptPre`
--

DROP TABLE IF EXISTS `JobScriptPre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JobScriptPre` (
  `job_id` int(11) NOT NULL,
  `script_id` int(11) NOT NULL,
  PRIMARY KEY (`job_id`,`script_id`),
  KEY `IDX_A7EA1D21BE04EA9` (`job_id`),
  KEY `IDX_A7EA1D21A1C01850` (`script_id`),
  CONSTRAINT `FK_A7EA1D21A1C01850` FOREIGN KEY (`script_id`) REFERENCES `Script` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A7EA1D21BE04EA9` FOREIGN KEY (`job_id`) REFERENCES `Job` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `LogRecord`
--

DROP TABLE IF EXISTS `LogRecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LogRecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL,
  `level` int(11) NOT NULL,
  `levelName` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1386 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Message`
--

DROP TABLE IF EXISTS `Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origin` varchar(32) NOT NULL,
  `destination` varchar(32) NOT NULL,
  `message` longtext,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Policy`
--

DROP TABLE IF EXISTS `Policy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `name` varchar(255) NOT NULL,
  `hourlyHours` varchar(255) DEFAULT NULL,
  `hourlyDaysOfMonth` varchar(255) DEFAULT NULL,
  `hourlyDaysOfWeek` varchar(255) DEFAULT NULL,
  `hourlyMonths` varchar(255) DEFAULT NULL,
  `hourlyCount` int(11) NOT NULL,
  `dailyHours` varchar(255) DEFAULT NULL,
  `dailyDaysOfMonth` varchar(255) DEFAULT NULL,
  `dailyDaysOfWeek` varchar(255) DEFAULT NULL,
  `dailyMonths` varchar(255) DEFAULT NULL,
  `dailyCount` int(11) NOT NULL,
  `weeklyHours` varchar(255) DEFAULT NULL,
  `weeklyDaysOfMonth` varchar(255) DEFAULT NULL,
  `weeklyDaysOfWeek` varchar(255) DEFAULT NULL,
  `weeklyMonths` varchar(255) DEFAULT NULL,
  `weeklyCount` int(11) NOT NULL,
  `monthlyHours` varchar(255) DEFAULT NULL,
  `monthlyDaysOfMonth` varchar(255) DEFAULT NULL,
  `monthlyDaysOfWeek` varchar(255) DEFAULT NULL,
  `monthlyMonths` varchar(255) DEFAULT NULL,
  `monthlyCount` int(11) NOT NULL,
  `yearlyHours` varchar(255) DEFAULT NULL,
  `yearlyDaysOfMonth` varchar(255) DEFAULT NULL,
  `yearlyDaysOfWeek` varchar(255) DEFAULT NULL,
  `yearlyMonths` varchar(255) DEFAULT NULL,
  `yearlyCount` int(11) NOT NULL,
  `include` longtext,
  `exclude` longtext,
  `syncFirst` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Script`
--

DROP TABLE IF EXISTS `Script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `name` varchar(255) NOT NULL,
  `isClientPre` tinyint(1) NOT NULL,
  `isJobPre` tinyint(1) NOT NULL,
  `isClientPost` tinyint(1) NOT NULL,
  `isJobPost` tinyint(1) NOT NULL,
  `lastUpdated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B2D820C5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `language` varchar(25) NOT NULL DEFAULT 'en',
  `linesperpage` int(11) NOT NULL DEFAULT '20',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA17977F85E0677` (`username`),
  UNIQUE KEY `UNIQ_2DA17977E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-08 18:10:09
