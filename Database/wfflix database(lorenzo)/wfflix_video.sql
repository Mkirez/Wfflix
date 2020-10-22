-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wfflix
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `videoID` int NOT NULL,
  `naam_video` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `videobeschrijving` longtext,
  `video` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`videoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'start html','https://i.ytimg.com/vi/9gTw2EDkaDQ/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBuJSYQJHSJjitEOKP6rTRKc1lj6w','<h1>Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/9gTw2EDkaDQ'),(2,'start css','https://i.ytimg.com/vi/1Rs2ND1ryYc/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA3PC_Tcv82ZGWVwW2UseYtt2d6lA','<h1>css Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/1Rs2ND1ryYc'),(3,'html&css full course','https://i.ytimg.com/vi/UB1O30fR-EE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAfubHVsEt9C15PTXXR8TQhT1nOgg','<h1>html & css Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/UB1O30fR-EE'),(4,'php intro','https://i.ytimg.com/vi/Anz0ArcQ5kI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA3WFVo2EiAdaoMx7sQmC8N9Y4S-Q','<h1>php Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/Anz0ArcQ5kI'),(5,'php syntax','https://i.ytimg.com/vi/U10yvfIStx8/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBJOOubzBGJVKM6fv5hWsQp7XEGlw','<h1>php syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/U10yvfIStx8\"'),(6,'php full course','https://i.ytimg.com/vi/OK_JCtrrv-c/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBaBrtaxkpLhXxVBHE9e70I0saBSA','<h1> php full course Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/OK_JCtrrv-c'),(7,'js intro','https://i.ytimg.com/vi/2nZiB1JItbY/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCcets78UnqJZTiHQz0ndEJ3ILUXA','<h1>js intro Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/2nZiB1JItbY'),(8,'js syntax','https://i.ytimg.com/vi/KXxXr0RxGDE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDQgb7JgDZmvWzVawfqrt5A7x9fNw','<h1>js syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/KXxXr0RxGDE'),(9,'js full course','https://i.ytimg.com/vi/PkZNo7MFNFg/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDQC1NHvPzQPsU4sSerW-Y6PUUa_w','<h1>js syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>','https://www.youtube.com/embed/PkZNo7MFNFg');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-22 20:33:49
