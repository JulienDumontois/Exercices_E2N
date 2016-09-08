-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: localhost    Database: colysee
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `billets`
--

DROP TABLE IF EXISTS `billets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billets` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `prix` varchar(45) NOT NULL,
  `reservations_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billets`
--

LOCK TABLES `billets` WRITE;
/*!40000 ALTER TABLE `billets` DISABLE KEYS */;
INSERT INTO `billets` VALUES (1,'Plein','26',1),(2,'Plein','26',1),(3,'Etudiants ','10',2),(4,'Etudiants ','10',2),(5,'Etudiants ','10',2),(6,'Enfants ','5',3),(7,'Etudiants ','10',3),(8,'Etudiants ','10',3),(9,'Plein','26',3),(10,'Etudiants ','10',4),(11,'Plein','26',4),(12,'Plein','26',4),(13,'Etudiants ','10',4),(14,'Etudiants ','10',4),(15,'Etudiants ','10',5),(16,'Enfants ','5',5),(17,'Etudiants ','10',5),(18,'Etudiants ','10',5),(19,'Plein','26',5),(20,'Etudiants ','10',5),(21,'Plein','26',6),(22,'Plein','26',6),(23,'Etudiants ','10',6),(24,'Etudiants ','10',6),(25,'Etudiants ','10',6),(26,'Enfants ','5',6),(27,'Etudiants ','10',6),(28,'Etudiants ','10',6),(29,'Plein','26',7),(30,'Etudiants ','10',7),(31,'Plein','26',7),(32,'Plein','26',7),(33,'Etudiants ','10',7),(34,'Etudiants ','10',7),(35,'Etudiants ','10',7),(36,'Enfants ','5',7),(37,'Etudiants ','10',7),(38,'Etudiants ','10',7),(39,'Plein','26',7),(40,'Etudiants ','10',7),(41,'Plein','26',8),(42,'Plein','26',8),(43,'Etudiants ','10',8),(44,'Etudiants ','10',8),(45,'Etudiants ','10',8),(46,'Enfants ','5',8),(47,'Etudiants ','10',8),(48,'Etudiants ','10',8),(49,'Plein','26',8),(50,'Etudiants ','10',8),(51,'Plein','26',8),(52,'Plein','26',8),(53,'Etudiants ','10',8),(54,'Etudiants ','10',8),(55,'Etudiants ','10',8),(56,'Enfants ','5',8),(57,'Etudiants ','10',8),(58,'Etudiants ','10',8),(59,'Plein','26',8),(60,'Etudiants ','10',8),(61,'Plein','26',8),(62,'Plein','26',8),(63,'Etudiants ','10',8),(64,'Etudiants ','10',9),(65,'Etudiants ','10',9),(66,'Enfants ','5',9),(67,'Etudiants ','10',9),(68,'Etudiants ','10',9),(69,'Plein','26',9),(70,'Etudiants ','10',9),(71,'Plein','26',9),(72,'Plein','26',9),(73,'Etudiants ','10',9),(74,'Etudiants ','10',9),(75,'Etudiants ','10',9),(76,'Enfants ','5',9),(77,'Etudiants ','10',9),(78,'Etudiants ','10',9),(79,'Plein','26',10),(80,'Etudiants ','10',10),(81,'Plein','26',10),(82,'Plein','26',10),(83,'Etudiants ','10',10),(84,'Etudiants ','10',10),(85,'Etudiants ','10',10),(86,'Enfants ','5',10),(87,'Etudiants ','10',10),(88,'Etudiants ','10',11),(89,'Plein','26',11),(90,'Etudiants ','10',11),(91,'Plein','26',11),(92,'Plein','26',11),(93,'Etudiants ','10',12),(94,'Etudiants ','10',12),(95,'Etudiants ','10',13),(96,'Enfants ','5',14),(97,'Etudiants ','10',14);
/*!40000 ALTER TABLE `billets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `carteFidelite` smallint(5) unsigned NOT NULL,
  `reduction` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Maçon','Juliette',1,1.00),(2,'Faubert','Sébastien',0,0.00),(3,'Dubeau','Sophie',0,0.00),(4,'Soucy','Victor',1,1.00),(5,'Lacaille','Aline',0,0.00),(6,'Michaud','Adrien',1,1.00),(7,'Tougas','Eric',1,1.00),(8,'Boisvert','Julien',0,0.00),(9,'Rivière','Olivier',1,1.00),(10,'Lacroix','Thibault',1,1.00),(11,'Lamy','Justine',0,0.00),(12,'Grimard','Corrine',1,1.00),(13,'Daviau','Laetitia',1,1.00),(14,'Demers','Alexis',0,0.00),(15,'Tritan','David',1,1.00),(16,'Allmeida','Julien',0,0.00),(17,'Amalisda','Emilie',1,1.00),(18,'Acodirda','Maëva',0,0.00),(19,'Acaciada','Prince',1,1.00),(20,'Acieneda','Anthony',0,0.00),(21,'Lutes','Colt',0,0.00),(22,'Lamie','Martina',1,1.00),(23,'Lemaire','Sophie',1,1.00),(24,'Labié','Marvin',0,0.00),(25,'Lobby','Shoshana',1,1.00),(26,'Pawlevski','Adam',0,0.00),(27,'Pawlikowski','Aleksander',0,0.00),(28,'Pietrowski','Adam',1,1.00),(29,'Piorunowski','Maksymilian',1,1.00),(30,'Piotrowski','Marcin',0,0.00),(31,'Podgorski','Marek',1,1.00),(32,'Polanowski','Piotr',0,0.00),(33,'Polanski','Roman',1,1.00),(34,'Polejowski','Seweryn',0,0.00),(35,'Poniatowski','Lukasz',0,0.00),(36,'Pruski','Krzysztof',1,1.00),(37,'Przybylski','Jaroslaw',1,1.00),(38,'Pylinski','Iwan',0,0.00);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `spectaclesId` smallint(5) unsigned NOT NULL,
  `clientsId` smallint(5) unsigned NOT NULL,
  `nombreBillets` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,5,4,2),(2,3,2,3),(3,2,1,4),(4,1,3,5),(5,4,4,6),(6,10,38,8),(7,11,25,12),(8,12,2,23),(9,10,17,15),(10,11,31,9),(11,12,27,5),(12,10,19,2),(13,11,9,1),(14,12,8,2);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salles`
--

DROP TABLE IF EXISTS `salles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombreSiege` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salles`
--

LOCK TABLES `salles` WRITE;
/*!40000 ALTER TABLE `salles` DISABLE KEYS */;
INSERT INTO `salles` VALUES (1,45),(2,50),(3,55),(4,60),(5,65);
/*!40000 ALTER TABLE `salles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spectacles`
--

DROP TABLE IF EXISTS `spectacles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spectacles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(100) DEFAULT NULL,
  `artiste` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `duree` time NOT NULL,
  `salles_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectacles`
--

LOCK TABLES `spectacles` WRITE;
/*!40000 ALTER TABLE `spectacles` DISABLE KEYS */;
INSERT INTO `spectacles` VALUES (1,'Truth About Love Tour','Pink','Musique','Variété pop internationale','2016-10-10','21:00:00','02:30:00',3),(2,'Kean','Cie \"Les scènes de l\'Oise\"','Théâtre','Drame','2017-02-25','20:30:00','02:00:00',4),(3,'Origines','Baptiste Lecapelain','One Man Show','Humour','2016-10-09','02:00:00','00:00:03',0),(4,'L\'attrape-coeur','Christophe Maé','Concert','Folk','2017-05-05','20:00:00','02:30:00',4),(5,'Le fascinateur','Messmer','One Man Show','Hypnose','2017-03-09','20:00:00','02:00:00',2),(6,'Hard Candy','Madonna','Concert','Variété Pop Internationnale','2018-12-02','17:00:00','02:30:00',1),(7,'Femme Fatale Tour','Britney Spears','Concert','Variété Pop Internationnale','2016-10-10','21:00:00','02:00:00',3),(8,'Berceuse','Rondoudou','Concert','Variété Pop Japonnaise','2017-05-06','19:00:00','02:00:00',2),(9,'Je t\'ai rencontré par hasard','Pietragalla & Derouault','Danse','Contemporaine','2017-03-17','18:00:00','02:45:00',4),(10,'Prom Night Tour','Watkins','Concert','Variété Pop Internationnale','2016-05-15','20:00:00','02:00:00',4),(11,'Vol au-dessus d\'un nid de coucou','Chavez','Comédie musicale','Humour','2016-06-02','20:00:00','01:30:00',3),(12,'Ubuntu','Murphy','One Man Show','Humour','2016-07-10','20:00:00','01:30:00',3),(13,'La muerte','Gutierrez','Théâtre','Drame','2016-08-02','20:00:00','01:30:00',2),(14,'Grease','Sweeney','Comédie musicale','Romance','2016-06-12','20:00:00','01:30:00',1),(15,'Prom Night Tour','Watkins','Concert','Variété Pop Internationnale','2016-05-15','20:00:00','02:00:00',4),(16,'Vol au-dessus d\'un nid de coucou','Chavez','Comédie musicale','Humour','2016-06-02','20:00:00','01:30:00',3),(17,'Ubuntu','Murphy','One Man Show','Humour','2016-07-10','20:00:00','01:30:00',3),(18,'La muerte','Gutierrez','Théâtre','Drame','2016-08-02','20:00:00','01:30:00',2),(19,'Grease','Sweeney','Comédie musicale','Romance','2016-06-12','20:00:00','01:30:00',1),(20,'Prom Night Tour','Watkins','Concert','Variété Pop Internationnale','2016-05-15','20:00:00','02:00:00',4),(21,'Vol au-dessus d\'un nid de coucou','Chavez','Comédie musicale','Humour','2016-06-02','20:00:00','01:30:00',3),(22,'Ubuntu','Murphy','One Man Show','Humour','2016-07-10','20:00:00','01:30:00',3),(23,'La muerte','Gutierrez','Théâtre','Drame','2016-08-02','20:00:00','01:30:00',2),(24,'Grease','Sweeney','Comédie musicale','Romance','2016-06-12','20:00:00','01:30:00',1);
/*!40000 ALTER TABLE `spectacles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-05 15:34:40
