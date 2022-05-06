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
-- Table structure for table `esteticas_cat`
--

DROP TABLE IF EXISTS `esteticas_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `esteticas_cat` (
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
-- Dumping data for table `esteticas_cat`
--

LOCK TABLES `esteticas_cat` WRITE;
/*!40000 ALTER TABLE `esteticas_cat` DISABLE KEYS */;
INSERT INTO `esteticas_cat` VALUES (1,'Avenida estrasburg, 141, 08206, Sabadell','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"',_binary 'LUNES   -  9:30-19:30\nMARTES   -  9:30-19:30\nMIÉRCOLES   -  9:30-19:30\nJUEVES   -  9:30-19:30\nVIERNES   -  9:30-19:30\nSÁBADO   -  CERRADO\nDOMINGO   -  CERRADO','Nicole ','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Manicura y pedicura',NULL),(2,'Carrer del Mestre Rius, 15, 08202 Sabadell, Barcelona','\" Ayudamos a las personas a mejorar su aspecto físico y su salud mediante terapias láser. Los centros de estética avanzada Onogu son tus salones de belleza en Sabadell.\"',_binary 'LUNES   -  9:00-20:00\nMARTES   -  9:00-20:00\nMI\�RCOLES   -  9:00-20:00\nJUEVES   -  9:00-20:00\nVIERNES   -  9:00-20:00\nS�BADO   -  CERRADO\nDOMINGO   -  CERRADO','Aurora \nMaría\nKelly\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nSara: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Tratamientos Faciales\nDepilación Cera\nDepilación Láser\n',NULL),(3,'Carrer de Muntaner, 320, 08021 Barcelona','\"Más de veinte años de éxitos y experiencia han convertido a Blauceldona en el centro de estética y belleza de referencia en la ciudad de Barcelona.\nEl equipo de excelentes profesionales de Blauceldona, liderados por Silvia Oliete, aportan amplia experiencia, tanto en el sector de la estética como en el de las terapias. Un equipo unido por la pasión por su profesión, el rigor y la búsqueda constante de la excelencia en servicios y tratamientos.\nCon la vocación de dar respuesta a todas las necesidades estéticas del público más exigente, el equipo de Beauty Advisors de Blauceldona ofrece respuestas multidisciplinares seguras y eficaces que consiguen óptimos y duraderos resultados.\nNuestra clara intención es seguir aportando satisfacción y excelencia. Dando mucho más de lo que nuestros clientes venían buscando, en un ambiente elegante, de cuidados detalles, en el que la experiencia Blauceldona siga siendo un lujo y un placer los siguientes veinte años.\nDéjate asesorar por nosotros\"\n',_binary 'LUNES   -  9:00-21:00\nMARTES   -  9:00-21:00\nMI\�RCOLES   -  9:00-21:00\nJUEVES   -  9:00-21:00\nVIERNES   -  9:00-21:00\nS�BADO   -  9:00-21:00\nDOMINGO   -  CERRADO','Silvia \nSara\nAnna\nEsther','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Manicura y pedicura\nMasajes\nTratamientos Faciales\nDepilación Cera\nDepilación Láser\n',NULL),(4,'Rambla de Catalunya, 91, 8º 4ª, 08008 Barcelona','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\n',_binary 'LUNES   -  9:00-21:00\nMARTES   -  9:00-21:00\nMI\�RCOLES   -  9:00-21:00\nJUEVES   -  9:00-21:00\nVIERNES   -  9:00-21:00\nS�BADO   -  9:00-21:00\nDOMINGO   -  CERRADO','Patricia\nAndrea\nCarolina\nJessica\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Depilación Láser',NULL),(5,'Carrer de les Tres Creus, 186, 08202 Sabadell, Barcelona','\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\n',_binary 'LUNES   -  9:00-21:00\nMARTES   - 9:00-21:00\nMI\�RCOLES   -  9:00-21:00\nJUEVES   - 9:00-21:00\nVIERNES   -  9:00-21:00\nS�BADO   - 9:00-21:00\nDOMINGO   -  CERRADO','Raquel \nOlga\nMeritxell\nOna\n','5.0\nPepi: \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n5.0\nAnna: \" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur\"\n','Tratamientos Faciales\nDepilación Láser\n',NULL);
/*!40000 ALTER TABLE `esteticas_cat` ENABLE KEYS */;
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
