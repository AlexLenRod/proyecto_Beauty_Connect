-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: beauty_connect
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `esteticas_aragon`
--

DROP TABLE IF EXISTS `esteticas_aragon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `esteticas_aragon` (
  `ID` int NOT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Descripcion` longtext,
  `Horario` blob,
  `Trabajadores` varchar(45) DEFAULT NULL,
  `Valoraciones` longtext,
  `Servicios` varchar(500) DEFAULT NULL,
  `Ofertas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esteticas_aragon`
--

LOCK TABLES `esteticas_aragon` WRITE;
/*!40000 ALTER TABLE `esteticas_aragon` DISABLE KEYS */;
INSERT INTO `esteticas_aragon` VALUES (1,'Avenida estrasburg, 141, 08206, Sabadell','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"',_binary '?','Nicole ','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Manicura y pedicura',NULL),(2,'Carrer del Mestre Rius, 15, 08202 Sabadell, Barcelona','\" Ayudamos a las personas a mejorar su aspecto f??sico y su salud mediante terapias l??ser. Los centros de est??tica avanzada Onogu son tus salones de belleza en Sabadell.\"',_binary '?','Aurora \nMar??a\nKelly\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nSara: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Tratamientos Faciales\nDepilaci??n Cera\nDepilaci??n L??ser\n',NULL),(3,'Carrer de Muntaner, 320, 08021 Barcelona','\"M??s de veinte a??os de ??xitos y experiencia han convertido a Blauceldona en el centro de est??tica y belleza de referencia en la ciudad de Barcelona.\nEl equipo de excelentes profesionales de Blauceldona, liderados por Silvia Oliete, aportan amplia experiencia, tanto en el sector de la est??tica como en el de las terapias. Un equipo unido por la pasi??n por su profesi??n, el rigor y la b??squeda constante de la excelencia en servicios y tratamientos.\nCon la vocaci??n de dar respuesta a todas las necesidades est??ticas del p??blico m??s exigente, el equipo de Beauty Advisors de Blauceldona ofrece respuestas multidisciplinares seguras y eficaces que consiguen ??ptimos y duraderos resultados.\nNuestra clara intenci??n es seguir aportando satisfacci??n y excelencia. Dando mucho m??s de lo que nuestros clientes ven??an buscando, en un ambiente elegante, de cuidados detalles, en el que la experiencia Blauceldona siga siendo un lujo y un placer los siguientes veinte a??os.\nD??jate asesorar por nosotros\"\n',_binary '?','Silvia \nSara\nAnna\nEsther','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Manicura y pedicura\nMasajes\nTratamientos Faciales\nDepilaci??n Cera\nDepilaci??n L??ser\n',NULL),(4,'Rambla de Catalunya, 91, 8?? 4??, 08008 Barcelona','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\n',_binary '?','Patricia\nAndrea\nCarolina\nJessica\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Depilaci??n L??ser',NULL),(5,'Carrer de les Tres Creus, 186, 08202 Sabadell, Barcelona','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\n',_binary '?','Raquel \nOlga\nMeritxell\nOna\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Tratamientos Faciales\nDepilaci??n L??ser\n',NULL);
/*!40000 ALTER TABLE `esteticas_aragon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-04 23:58:45
