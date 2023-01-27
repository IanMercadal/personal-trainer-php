-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: personal_trainer
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitudes` (
  `id_solicitud` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `estado_gestion` tinyint NOT NULL DEFAULT '0',
  `id_tarifa` int DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  KEY `id_tarifa_idx` (`id_tarifa`),
  CONSTRAINT `id_tarifa` FOREIGN KEY (`id_tarifa`) REFERENCES `tarifas` (`id_tarifa`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
INSERT INTO `solicitudes` VALUES (5,'Ian','Mercadal','ian@gmail.com',111111111,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.','2023-01-16',0,1),(6,'Ian','Mercadal','ian@correo.com',123456789,'nsdfbnsdoifnbspdfnaspodfnms`dapnmfsdfsdfsdfsd','2023-01-16',0,1),(7,'Ian','Mercadal','correo@gmail.com',543123432,'fsoipudahfpioasdbhfioasdfiosdafsa','2023-01-16',1,1),(17,'Ian','Mercadal','correo@correo.com',645346372,'sadfsdfsadfsdfsdfsfsd','2023-01-23',0,1),(19,'solicitud','solicitud','solicitud@solicitud.com',654321678,'Prueba de subida','2023-01-23',0,4),(21,'Sumario','Sumario','sumario@gmail.com',601267542,'Prueba con query','2023-01-23',0,3);
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarifas`
--

DROP TABLE IF EXISTS `tarifas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarifas` (
  `id_tarifa` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` enum('plana','mensual') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_tarifa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifas`
--

LOCK TABLES `tarifas` WRITE;
/*!40000 ALTER TABLE `tarifas` DISABLE KEYS */;
INSERT INTO `tarifas` VALUES (1,'Tarifa Media',40,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic enim doloribus illo, debitis, similique nam obcaecati pariatur veniam dolore, maxime atque! Odit iusto nesciunt iste, sit suscipit quo neque repellat!','plana'),(2,'Tarifa 1 mes',15,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.\r\n\r\n','mensual'),(3,'Tarifa 3 meses',40,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.','mensual'),(4,'Tarifa 6 meses',80,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.\r\n\r\n','mensual'),(5,'Tarifa Pequeña',30,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.\r\n\r\n','plana'),(6,'Tarifa Grande',50,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a nisl a nunc hendrerit cursus id eget nulla. Etiam id sodales sem, at blandit nisl. Vestibulum iaculis diam pellentesque dictum pharetra. Quisque egestas id lacus vitae facilisis.\r\n\r\n','plana');
/*!40000 ALTER TABLE `tarifas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `id_tarifa` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  KEY `fk_usuarios_tarifas1_idx` (`id_tarifa`),
  CONSTRAINT `fk_usuarios_tarifas1` FOREIGN KEY (`id_tarifa`) REFERENCES `tarifas` (`id_tarifa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (11,'Juan ','Domínguez','jdominguez@gmail.com',603451232,'$2y$04$vrGRhauyfXpDa6MgY7ENCO6BziuTSCAJiEXfigPFAd/z4zIsCt2Wa','2023-01-16',1),(13,'admin','admin','admin@admin.es',123456789,'$2y$04$09rOHsNIBmVlMgrRJ1iNvu7o3VfqXCeDwKzXdUJ7C9Y4iymUh/bpO','2023-01-17',1),(14,'Miguel','Domínguez','mdominguez@gmail.es',654372891,'$2y$04$DRSdVd08RPkIZNb3AAxl0e0nCpEXpaxLHdLoYZbZAJsIZ03GqBr0S','2023-01-21',1),(15,'José','Sánchez','jsanchez@gmail.com',876543219,'$2y$04$tflGYo/Cm7YQ3NUQi5EBS.b.k2aouGqpTB0/2odrkw61X/6l3CzmC','2023-01-21',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-27 18:51:15
