-- MySQL dump 10.13  Distrib 5.7.9, for Linux (x86_64)
--
-- Host: localhost    Database: apl_db
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.14.04.1

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
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `idalbum` bigint(20) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(200) DEFAULT NULL,
  `album_desc` varchar(500) DEFAULT NULL,
  `user_iduser` bigint(20) NOT NULL,
  `news_idnews` int(11) DEFAULT NULL,
  `pages_idpages` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idalbum`),
  KEY `fk_album_user1_idx` (`user_iduser`),
  KEY `fk_album_news1_idx` (`news_idnews`),
  KEY `fk_album_pages1_idx` (`pages_idpages`),
  CONSTRAINT `fk_album_news1` FOREIGN KEY (`news_idnews`) REFERENCES `news` (`idnews`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_album_pages1` FOREIGN KEY (`pages_idpages`) REFERENCES `pages` (`idpages`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_album_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `idimage` bigint(20) NOT NULL AUTO_INCREMENT,
  `image_src` varchar(200) NOT NULL,
  `image_title` varchar(45) NOT NULL,
  `album_idalbum` bigint(20) NOT NULL,
  `user_iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`idimage`),
  KEY `fk_image_album1_idx` (`album_idalbum`),
  KEY `fk_image_user1_idx` (`user_iduser`),
  CONSTRAINT `fk_image_album1` FOREIGN KEY (`album_idalbum`) REFERENCES `album` (`idalbum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `idnews` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news_subtitle` varchar(500) DEFAULT NULL,
  `news_text` varchar(4000) NOT NULL,
  `user_iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`idnews`),
  KEY `fk_news_user1_idx` (`user_iduser`),
  CONSTRAINT `fk_news_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Teste','teste subtitulo','bla bla bla bla bla bla bla bla bla',1),(4,'APL do Leite ','Santana do Livramento.','Lorem ipsum dolor sit amet, et iudico utroque mea, accumsan contentiones eam et, te qui utroque constituam. Atqui delenit ei mel. Eu usu putent omnium, pro ullum oporteat ei. Et mea sale impedit oportere. Primis labore graeco cu eum, usu ut minim tamquam. Feugait sensibus cum eu. Per probo oratio suscipiantur et, his ei vivendum reprimique. Modus alterum no eos. No est aliquid atomorum intellegam, cum in inani ignota conceptam. Ut sea alterum repudiare, mel ut veri oratio aperiri, sit te dolor utamur regione. Corrumpit rationibus philosophia ex nec, illud vituperatoribus nam no. Nec ex movet detraxit phaedrum, ex sanctus debitis invidunt his. Ea vix dolor altera alterum. Etiam eligendi principes te eam, his ubique voluptua fabellas in. Dicat soleat at quo, at eos eirmod oblique molestiae. Nulla splendide id mea, eos ea denique democritum, id mentitum reprimique eum. Labore salutatus persequeris est ea. An vocent vidisse eam, copiosae deseruisse an eam.Lorem ipsum dolor sit amet, et iudico utroque mea, accumsan contentiones eam et, te qui utroque constituam. Atqui delenit ei mel. Eu usu putent omnium, pro ullum oporteat ei. Et mea sale impedit oportere. Primis labore graeco cu eum, usu ut minim tamquam. Feugait sensibus cum eu. Per probo oratio suscipiantur et, his ei vivendum reprimique. Modus alterum no eos. No est aliquid atomorum intellegam, cum in inani ignota conceptam. Ut sea alterum repudiare, mel ut veri oratio aperiri, sit te dolor utamur regione. Corrumpit rationibus philosophia ex nec, illud vituperatoribus nam no. Nec ex movet detraxit phaedrum, ex sanctus debitis invidunt his.Ea vix dolor altera alterum. Etiam eligendi principes te eam, his ubique voluptua fabellas in. Dicat soleat at quo, at eos eirmod oblique molestiae. Nulla splendide id mea, eos ea denique democritum, id mentitum reprimique eum. Labore salutatus persequeris est ea. An vocent vidisse eam, copiosae deseruisse an eam.',1),(5,'teste','teste','tsetses',1),(6,'dsfasdfasdfasdf','asdfasdfasdf','\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis metus, bibendum nec enim vel, vestibulum sodales nulla. Phasellus nec tortor condimentum, dictum felis et, consectetur sapien. In hac habitasse platea dictumst. Nulla tincidunt consectetur lorem quis pellentesque. In hac habitasse platea dictumst. Phasellus suscipit odio ut purus scelerisque condimentum. Etiam libero ex, blandit sit amet metus a, laoreet aliquet tellus. In at eros eros. Sed non risus ultricies, ultrices lacus vel, condimentum elit. In et nisi eu ipsum dignissim lacinia in vitae massa. Donec scelerisque consectetur diam, sed lobortis odio viverra vitae.\r\n\r\nVivamus metus nisi, pellentesque ut est id, suscipit porta sem. Donec eget sapien euismod, imperdiet diam et, viverra elit. Sed a convallis ligula. Integer ullamcorper dolor risus, at consequat nisi condimentum nec. Suspendisse nec volutpat arcu. Morbi ut tortor nisi. Fusce vitae feugiat metus, a sodales felis. Aliquam consectetur felis nibh, non efficitur metus dignissim at. Nulla eu gravida dui, id tempus sapien. Cras sed vulputate ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra dui. Sed aliquam ante dui, vitae dapibus ligula suscipit vel. Phasellus volutpat, orci in egestas varius, ipsum lectus egestas sem, elementum finibus mauris odio a urna. Mauris auctor fermentum cursus. Curabitur mattis nisi leo, et vehicula elit volutpat a.\r\n\r\nSed finibus vitae turpis in bibendum. Cras efficitur ligula eu turpis vulputate, a consectetur lorem ornare. Aliquam erat volutpat. Praesent eleifend, velit a imperdiet iaculis, dui lectus fringilla sem, id vulputate libero dolor a tellus. Maecenas lorem augue, elementum vel dolor nec, euismod tristique arcu. Vestibulum eleifend at libero sed blandit. Donec porta ipsum erat, sed ultrices erat efficitur egestas. Mauris risus lacus, vehicula ut felis in, tristique interdum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem quam, euismod eget orci ut, blandit fringilla mi. In urna risus, aliquam consectetur semper at, sodales vel nibh.\r\n\r\nPhasellus eu quam non odio fringilla bibendum. Proin sit amet vehicula libero, bibendum pretium neque. Maecenas fringilla orci quis placerat suscipit. Vivamus blandit vitae sapien nec vulputate. Praesent massa nisl, lacinia id mattis et, sagittis eget nisi. Maecenas ut justo ac nisl porta ornare. Donec facilisis, metus aliquet volutpat mattis, orci massa faucibus sem, quis pulvinar ante augue in nunc. In tristique sodales nibh in bibendum. Mauris sed rhoncus dui, a malesuada risus. Phasellus sed elit augue. Nulla facilisi. Ut pharetra velit a massa luctus consectetur non vitae justo. Duis consequat hendrerit mollis.\r\n\r\nMauris volutpat augue vulputate arcu consequat tempor ut quis augue. Sed non dapibus justo. Pellentesque vestibulum nisl libero, sit amet cursus libero malesuada non. Nullam in velit sit amet dolor rutrum convallis. Aliquam fermentum finibus leo eget interdum. Nullam laoreet lacus commodo iaculis volutpat. Nam sit amet elementum leo, consectetur rhoncus odio. Sed quis erat erat. Maecenas aliquam feugiat neque, et cursus orci auctor tincidunt. Vestibulum cursus tellus iaculis mi eleifend sollicitudin. Aliquam commodo libero eget turpis sodales, eu pellentesque nibh semper. Nullam eu cursus quam, et condimentum enim. Mauris dapibus nisi libero, id euismod turpis feugiat sit amet. Etiam feugiat, dui quis molestie gravida, est sapien porta ex, sed sagittis lacus erat quis est. ',1),(7,'dsfasdfasdfasdf','asdfasdfasdf','\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis metus, bibendum nec enim vel, vestibulum sodales nulla. Phasellus nec tortor condimentum, dictum felis et, consectetur sapien. In hac habitasse platea dictumst. Nulla tincidunt consectetur lorem quis pellentesque. In hac habitasse platea dictumst. Phasellus suscipit odio ut purus scelerisque condimentum. Etiam libero ex, blandit sit amet metus a, laoreet aliquet tellus. In at eros eros. Sed non risus ultricies, ultrices lacus vel, condimentum elit. In et nisi eu ipsum dignissim lacinia in vitae massa. Donec scelerisque consectetur diam, sed lobortis odio viverra vitae.\r\n\r\nVivamus metus nisi, pellentesque ut est id, suscipit porta sem. Donec eget sapien euismod, imperdiet diam et, viverra elit. Sed a convallis ligula. Integer ullamcorper dolor risus, at consequat nisi condimentum nec. Suspendisse nec volutpat arcu. Morbi ut tortor nisi. Fusce vitae feugiat metus, a sodales felis. Aliquam consectetur felis nibh, non efficitur metus dignissim at. Nulla eu gravida dui, id tempus sapien. Cras sed vulputate ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra dui. Sed aliquam ante dui, vitae dapibus ligula suscipit vel. Phasellus volutpat, orci in egestas varius, ipsum lectus egestas sem, elementum finibus mauris odio a urna. Mauris auctor fermentum cursus. Curabitur mattis nisi leo, et vehicula elit volutpat a.\r\n\r\nSed finibus vitae turpis in bibendum. Cras efficitur ligula eu turpis vulputate, a consectetur lorem ornare. Aliquam erat volutpat. Praesent eleifend, velit a imperdiet iaculis, dui lectus fringilla sem, id vulputate libero dolor a tellus. Maecenas lorem augue, elementum vel dolor nec, euismod tristique arcu. Vestibulum eleifend at libero sed blandit. Donec porta ipsum erat, sed ultrices erat efficitur egestas. Mauris risus lacus, vehicula ut felis in, tristique interdum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem quam, euismod eget orci ut, blandit fringilla mi. In urna risus, aliquam consectetur semper at, sodales vel nibh.\r\n\r\nPhasellus eu quam non odio fringilla bibendum. Proin sit amet vehicula libero, bibendum pretium neque. Maecenas fringilla orci quis placerat suscipit. Vivamus blandit vitae sapien nec vulputate. Praesent massa nisl, lacinia id mattis et, sagittis eget nisi. Maecenas ut justo ac nisl porta ornare. Donec facilisis, metus aliquet volutpat mattis, orci massa faucibus sem, quis pulvinar ante augue in nunc. In tristique sodales nibh in bibendum. Mauris sed rhoncus dui, a malesuada risus. Phasellus sed elit augue. Nulla facilisi. Ut pharetra velit a massa luctus consectetur non vitae justo. Duis consequat hendrerit mollis.\r\n\r\nMauris volutpat augue vulputate arcu consequat tempor ut quis augue. Sed non dapibus justo. Pellentesque vestibulum nisl libero, sit amet cursus libero malesuada non. Nullam in velit sit amet dolor rutrum convallis. Aliquam fermentum finibus leo eget interdum. Nullam laoreet lacus commodo iaculis volutpat. Nam sit amet elementum leo, consectetur rhoncus odio. Sed quis erat erat. Maecenas aliquam feugiat neque, et cursus orci auctor tincidunt. Vestibulum cursus tellus iaculis mi eleifend sollicitudin. Aliquam commodo libero eget turpis sodales, eu pellentesque nibh semper. Nullam eu cursus quam, et condimentum enim. Mauris dapibus nisi libero, id euismod turpis feugiat sit amet. Etiam feugiat, dui quis molestie gravida, est sapien porta ex, sed sagittis lacus erat quis est. ',1),(8,'asdfasdf','asdfasdfasdf','aasdfasdfasdfasdfasd asdfasdf asdf asdf asdf asdf',1),(9,'Lorem ipsum dolor sit amet.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. ','\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis metus, bibendum nec enim vel, vestibulum sodales nulla. Phasellus nec tortor condimentum, dictum felis et, consectetur sapien. In hac habitasse platea dictumst. Nulla tincidunt consectetur lorem quis pellentesque. In hac habitasse platea dictumst. Phasellus suscipit odio ut purus scelerisque condimentum. Etiam libero ex, blandit sit amet metus a, laoreet aliquet tellus. In at eros eros. Sed non risus ultricies, ultrices lacus vel, condimentum elit. In et nisi eu ipsum dignissim lacinia in vitae massa. Donec scelerisque consectetur diam, sed lobortis odio viverra vitae.\r\n\r\nVivamus metus nisi, pellentesque ut est id, suscipit porta sem. Donec eget sapien euismod, imperdiet diam et, viverra elit. Sed a convallis ligula. Integer ullamcorper dolor risus, at consequat nisi condimentum nec. Suspendisse nec volutpat arcu. Morbi ut tortor nisi. Fusce vitae feugiat metus, a sodales felis. Aliquam consectetur felis nibh, non efficitur metus dignissim at. Nulla eu gravida dui, id tempus sapien. Cras sed vulputate ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra dui. Sed aliquam ante dui, vitae dapibus ligula suscipit vel. Phasellus volutpat, orci in egestas varius, ipsum lectus egestas sem, elementum finibus mauris odio a urna. Mauris auctor fermentum cursus. Curabitur mattis nisi leo, et vehicula elit volutpat a.\r\n\r\nSed finibus vitae turpis in bibendum. Cras efficitur ligula eu turpis vulputate, a consectetur lorem ornare. Aliquam erat volutpat. Praesent eleifend, velit a imperdiet iaculis, dui lectus fringilla sem, id vulputate libero dolor a tellus. Maecenas lorem augue, elementum vel dolor nec, euismod tristique arcu. Vestibulum eleifend at libero sed blandit. Donec porta ipsum erat, sed ultrices erat efficitur egestas. Mauris risus lacus, vehicula ut felis in, tristique interdum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem quam, euismod eget orci ut, blandit fringilla mi. In urna risus, aliquam consectetur semper at, sodales vel nibh.\r\n\r\nPhasellus eu quam non odio fringilla bibendum. Proin sit amet vehicula libero, bibendum pretium neque. Maecenas fringilla orci quis placerat suscipit. Vivamus blandit vitae sapien nec vulputate. Praesent massa nisl, lacinia id mattis et, sagittis eget nisi. Maecenas ut justo ac nisl porta ornare. Donec facilisis, metus aliquet volutpat mattis, orci massa faucibus sem, quis pulvinar ante augue in nunc. In tristique sodales nibh in bibendum. Mauris sed rhoncus dui, a malesuada risus. Phasellus sed elit augue. Nulla facilisi. Ut pharetra velit a massa luctus consectetur non vitae justo. Duis consequat hendrerit mollis.\r\n\r\nMauris volutpat augue vulputate arcu consequat tempor ut quis augue. Sed non dapibus justo. Pellentesque vestibulum nisl libero, sit amet cursus libero malesuada non. Nullam in velit sit amet dolor rutrum convallis. Aliquam fermentum finibus leo eget interdum. Nullam laoreet lacus commodo iaculis volutpat. Nam sit amet elementum leo, consectetur rhoncus odio. Sed quis erat erat. Maecenas aliquam feugiat neque, et cursus orci auctor tincidunt. Vestibulum cursus tellus iaculis mi eleifend sollicitudin. Aliquam commodo libero eget turpis sodales, eu pellentesque nibh semper. Nullam eu cursus quam, et condimentum enim. Mauris dapibus nisi libero, id euismod turpis feugiat sit amet. Etiam feugiat, dui quis molestie gravida, est sapien porta ex, sed sagittis lacus erat quis est. ',1),(10,'Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetur adipiscing elit. ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis metus, bibendum nec enim vel, vestibulum sodales nulla. Phasellus nec tortor condimentum, dictum felis et, consectetur sapien. In hac habitasse platea dictumst. Nulla tincidunt consectetur lorem quis pellentesque. In hac habitasse platea dictumst. Phasellus suscipit odio ut purus scelerisque condimentum. Etiam libero ex, blandit sit amet metus a, laoreet aliquet tellus. In at eros eros. Sed non risus ultricies, ultrices lacus vel, condimentum elit. In et nisi eu ipsum dignissim lacinia in vitae massa. Donec scelerisque consectetur diam, sed lobortis odio viverra vitae.\r\n\r\nVivamus metus nisi, pellentesque ut est id, suscipit porta sem. Donec eget sapien euismod, imperdiet diam et, viverra elit. Sed a convallis ligula. Integer ullamcorper dolor risus, at consequat nisi condimentum nec. Suspendisse nec volutpat arcu. Morbi ut tortor nisi. Fusce vitae feugiat metus, a sodales felis. Aliquam consectetur felis nibh, non efficitur metus dignissim at. Nulla eu gravida dui, id tempus sapien. Cras sed vulputate ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra dui. Sed aliquam ante dui, vitae dapibus ligula suscipit vel. Phasellus volutpat, orci in egestas varius, ipsum lectus egestas sem, elementum finibus mauris odio a urna. Mauris auctor fermentum cursus. Curabitur mattis nisi leo, et vehicula elit volutpat a.\r\n\r\nSed finibus vitae turpis in bibendum. Cras efficitur ligula eu turpis vulputate, a consectetur lorem ornare. Aliquam erat volutpat. Praesent eleifend, velit a imperdiet iaculis, dui lectus fringilla sem, id vulputate libero dolor a tellus. Maecenas lorem augue, elementum vel dolor nec, euismod tristique arcu. Vestibulum eleifend at libero sed blandit. Donec porta ipsum erat, sed ultrices erat efficitur egestas. Mauris risus lacus, vehicula ut felis in, tristique interdum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem quam, euismod eget orci ut, blandit fringilla mi. In urna risus, aliquam consectetur semper at, sodales vel nibh.\r\n\r\nPhasellus eu quam non odio fringilla bibendum. Proin sit amet vehicula libero, bibendum pretium neque. Maecenas fringilla orci quis placerat suscipit. Vivamus blandit vitae sapien nec vulputate. Praesent massa nisl, lacinia id mattis et, sagittis eget nisi. Maecenas ut justo ac nisl porta ornare. Donec facilisis, metus aliquet volutpat mattis, orci massa faucibus sem, quis pulvinar ante augue in nunc. In tristique sodales nibh in bibendum. Mauris sed rhoncus dui, a malesuada risus. Phasellus sed elit augue. Nulla facilisi. Ut pharetra velit a massa luctus consectetur non vitae justo. Duis consequat hendrerit mollis.\r\n\r\nMauris volutpat augue vulputate arcu consequat tempor ut quis augue. Sed non dapibus justo. Pellentesque vestibulum nisl libero, sit amet cursus libero malesuada non. Nullam in velit sit amet dolor rutrum convallis. Aliquam fermentum finibus leo eget interdum. Nullam laoreet lacus commodo iaculis volutpat. Nam sit amet elementum leo, consectetur rhoncus odio. Sed quis erat erat. Maecenas aliquam feugiat neque, et cursus orci auctor tincidunt. Vestibulum cursus tellus iaculis mi eleifend sollicitudin. Aliquam commodo libero eget turpis sodales, eu pellentesque nibh semper. Nullam eu cursus quam, et condimentum enim. Mauris dapibus nisi libero, id euismod turpis feugiat sit amet. Etiam feugiat, dui quis molestie gravida, est sapien porta ex, sed sagittis lacus erat quis est. ',1),(11,'MAIS UM TESTE','TESTANDO MAIS UMA NOTÍCIA','Teste Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis metus, bibendum nec enim vel, vestibulum sodales nulla. Phasellus nec tortor condimentum, dictum felis et, consectetur sapien. In hac habitasse platea dictumst. Nulla tincidunt consectetur lorem quis pellentesque. In hac habitasse platea dictumst. Phasellus suscipit odio ut purus scelerisque condimentum. Etiam libero ex, blandit sit amet metus a, laoreet aliquet tellus. In at eros eros. Sed non risus ultricies, ultrices lacus vel, condimentum elit. In et nisi eu ipsum dignissim lacinia in vitae massa. Donec scelerisque consectetur diam, sed lobortis odio viverra vitae.\r\n\r\nVivamus metus nisi, pellentesque ut est id, suscipit porta sem. Donec eget sapien euismod, imperdiet diam et, viverra elit. Sed a convallis ligula. Integer ullamcorper dolor risus, at consequat nisi condimentum nec. Suspendisse nec volutpat arcu. Morbi ut tortor nisi. Fusce vitae feugiat metus, a sodales felis. Aliquam consectetur felis nibh, non efficitur metus dignissim at. Nulla eu gravida dui, id tempus sapien. Cras sed vulputate ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae viverra dui. Sed aliquam ante dui, vitae dapibus ligula suscipit vel. Phasellus volutpat, orci in egestas varius, ipsum lectus egestas sem, elementum finibus mauris odio a urna. Mauris auctor fermentum cursus. Curabitur mattis nisi leo, et vehicula elit volutpat a.\r\n\r\nSed finibus vitae turpis in bibendum. Cras efficitur ligula eu turpis vulputate, a consectetur lorem ornare. Aliquam erat volutpat. Praesent eleifend, velit a imperdiet iaculis, dui lectus fringilla sem, id vulputate libero dolor a tellus. Maecenas lorem augue, elementum vel dolor nec, euismod tristique arcu. Vestibulum eleifend at libero sed blandit. Donec porta ipsum erat, sed ultrices erat efficitur egestas. Mauris risus lacus, vehicula ut felis in, tristique interdum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem quam, euismod eget orci ut, blandit fringilla mi. In urna risus, aliquam consectetur semper at, sodales vel nibh.\r\n\r\nPhasellus eu quam non odio fringilla bibendum. Proin sit amet vehicula libero, bibendum pretium neque. Maecenas fringilla orci quis placerat suscipit. Vivamus blandit vitae sapien nec vulputate. Praesent massa nisl, lacinia id mattis et, sagittis eget nisi. Maecenas ut justo ac nisl porta ornare. Donec facilisis, metus aliquet volutpat mattis, orci massa faucibus sem, quis pulvinar ante augue in nunc. In tristique sodales nibh in bibendum. Mauris sed rhoncus dui, a malesuada risus. Phasellus sed elit augue. Nulla facilisi. Ut pharetra velit a massa luctus consectetur non vitae justo. Duis consequat hendrerit mollis.\r\n\r\nMauris volutpat augue vulputate arcu consequat tempor ut quis augue. Sed non dapibus justo. Pellentesque vestibulum nisl libero, sit amet cursus libero malesuada non. Nullam in velit sit amet dolor rutrum convallis. Aliquam fermentum finibus leo eget interdum. Nullam laoreet lacus commodo iaculis volutpat. Nam sit amet elementum leo, consectetur rhoncus odio. Sed quis erat erat. Maecenas aliquam feugiat neque, et cursus orci auctor tincidunt. Vestibulum cursus tellus iaculis mi eleifend sollicitudin. Aliquam commodo libero eget turpis sodales, eu pellentesque nibh semper. Nullam eu cursus quam, et condimentum enim. Mauris dapibus nisi libero, id euismod turpis feugiat sit amet. Etiam feugiat, dui quis molestie gravida, est sapien porta ex, sed sagittis lacus erat quis est. ',1),(12,'6º Seminário Rumos da Bacia Leiteira','6º Seminário Rumos da Bacia Leiteira inicia na próxima semana ','A expansão da cadeia leiteira de Sant\\\'Ana do Livramento, nos últimos anos, se deve  ao trabalho coletivo, união de esforços e busca da organização dos produtores envolvidos, consequência da implantação, no município, do Arranjo Produtivo Local do Leite – APL do Leite, a partir do ano de 2009. Este arranjo congrega diversas entidades que o compõem, incluindo poderes públicos municipais e estaduais, entidades financeiras, universidades, associações e cooperativas de produtores, agroindústrias, instituições de assistência técnica e extensão rural, instituições de pesquisa, como Prefeitura Municipal de Sant\\\'Ana do Livramento, representada no APL do Leite pela Secretaria Municipal da Agricultura, Pecuária e Abastecimento - SMAPA; Secretaria Estadual de Desenvolvimento Rural, Pesca e Cooperativismo – SDR; EMATER/ASCAR-RS; Empresa Brasileira de Pesquisa Agropecuária – EMBRAPA; Cooperativa de prestação de serviços técnicos – COPTEC; Universidade Federal do Pampa – UNIPAMPA; Universidade Estadual do Rio Grande do Sul – UERGS; Instituto Federal de Educação, Ciência e Tecnologia Sul Rio Grandense; Cooperativa Regional dos Assentados da Reforma Agrária – COPERFORTE; Cooperativa dos pequenos produtores de leite de Sant\\\'Ana do Livramento – COOAPLESA; Associação dos criadores de gado leiteiro e produtores de leite de Sant\\\'Ana do Livramento; Agroindústria SKYLAB; Agroindústria DANBY COSULATI; e Banco do Brasil.\r\n\r\n \r\n\r\nSegundo a Secretaria Silvia Carambula, titular da pasta da Agricultura, uma das principais ações do APL do Leite é a realização anual, do Seminário Rumos da Bacia Leiteira, que chega a sua 6ª edição em 2014. Neste evento, são debatidos temas relacionados ao setor leiteiro, incluindo novas tecnologias disponíveis, nutrição e saúde animal, produção de forragens, novos equipamentos, qualidade e higiene na ordenha, mas principalmente, ao final do evento, o intuito é gerar através da união das entidades e seus representantes os encaminhamentos para a busca pela resolução de problemas encontrados pelo setor e os produtores, relacionados a preço pago pelo produto “leite”, melhoramento genético dos animais, agro industrialização e mercado lácteo em geral. “O evento também serve como ponto de encontro para os produtores espalhados pelas diversas regiões do município, que aproveitam a oportunidade para a realização de troca de experiências relacionados a produção de leite e criação de animais”, destacou.\r\n\r\n \r\n\r\nA programação do Seminário é estruturada durante o ano nas reuniões realizadas pelo grupo gestor do APL, ficando definida, geralmente, no mês que antecede o evento. Nesta 6ª edição, a programação é muito interessante e contará com palestrantes experientes, de entidades locais e regionais e que abordarão diversos temas relacionados ao setor lácteo.\r\n\r\n \r\n\r\nMais informações a respeito do evento podem ser obtidas junto à Secretaria Municipal da Agricultura, Pecuária e Abastecimento pelo telefone (55) 3968-1123 ou e-mail dta.agricultura@gmail.com, com o grupo gestor do APL do Leite pelo e-mail aplleite.livramento@gmail.com ou ainda, com as entidades que compõe o APL.',1),(13,'sadfasdfasdf','asdfasdf','asdfasddfasddf',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `idpages` bigint(20) NOT NULL AUTO_INCREMENT,
  `pages_title` varchar(200) NOT NULL,
  `pages_text` varchar(2000) NOT NULL,
  `pages_n_news` int(11) NOT NULL DEFAULT '0',
  `pages_type_album` int(11) DEFAULT '0',
  `user_iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`idpages`),
  KEY `fk_pages_user1_idx` (`user_iduser`),
  CONSTRAINT `fk_pages_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papers`
--

DROP TABLE IF EXISTS `papers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papers` (
  `idpapers` int(11) NOT NULL AUTO_INCREMENT,
  `paper_author` varchar(500) NOT NULL,
  `paper_abst` varchar(200) DEFAULT NULL,
  `paper_text` varchar(200) DEFAULT NULL,
  `paper_link` varchar(200) DEFAULT NULL,
  `user_iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`idpapers`),
  KEY `fk_papers_user1_idx` (`user_iduser`),
  CONSTRAINT `fk_papers_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papers`
--

LOCK TABLES `papers` WRITE;
/*!40000 ALTER TABLE `papers` DISABLE KEYS */;
/*!40000 ALTER TABLE `papers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `idpartners` int(11) NOT NULL,
  `partners_desc` varchar(200) DEFAULT NULL,
  `partners_name` varchar(200) NOT NULL,
  `partners_link` varchar(200) DEFAULT NULL,
  `partners_logo` varchar(200) NOT NULL,
  `user_iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`idpartners`),
  KEY `fk_partners_user1_idx` (`user_iduser`),
  CONSTRAINT `fk_partners_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` bigint(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `idvideos` bigint(20) NOT NULL AUTO_INCREMENT,
  `video_src` varchar(200) DEFAULT NULL,
  `video_title` varchar(200) DEFAULT NULL,
  `user_iduser` bigint(20) NOT NULL,
  `news_idnews` int(11) DEFAULT NULL,
  `pages_idpages` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idvideos`),
  KEY `fk_videos_user1_idx` (`user_iduser`),
  KEY `fk_videos_news1_idx` (`news_idnews`),
  KEY `fk_videos_pages1_idx` (`pages_idpages`),
  CONSTRAINT `fk_videos_news1` FOREIGN KEY (`news_idnews`) REFERENCES `news` (`idnews`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_videos_pages1` FOREIGN KEY (`pages_idpages`) REFERENCES `pages` (`idpages`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_videos_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-19 15:49:59
