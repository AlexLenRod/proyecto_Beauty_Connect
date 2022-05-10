-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: beauty_connect
-- ------------------------------------------------------
-- Server version	8.0.28



--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `Nombre` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `password`	varchar(50) NOT NULL,
  `DNI` int NOT NULL,
  `Telefono` int DEFAULT NULL,
  PRIMARY KEY (`DNI`)
);

INSERT INTO `cliente` (`nombre`, `email`, `password`, `DNI`, `Telefono`) VALUES ('Ana', 'ana@ana.com', '123456789','48795675F', '669853262');

