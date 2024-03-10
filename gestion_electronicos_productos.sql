-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: gestion_electronicos
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad_disponible` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Kit De Teclado Y Mouse Inalámbrico Logitech Mk235 Español De Color Gris Grafito',100000.00,1),(2,'Lápiz Pencil Para Tablet Lenovo',94905.00,1),(3,'Intercomunicador T.com Vb Freedconn',275500.00,5),(4,'Mini Compresor Inflador Portátil Xiaomi Color Negro',264061.00,10),(5,'Control Remoto Smart Compatible Con Samsung Bn59-01310a',25800.00,25),(6,'Báscula Xiaomi Mi Body Composition Scale 2 Blanca, Hasta 150 Kg',90000.00,45),(7,'Soporte Base Celular Moto Bicicleta Manillar Impermeable',65900.00,60),(8,'Carcasa De Disco Duro Sata',59400.00,55),(9,'Router, Wisp, Access Point, Repetidor Tenda Ac8 Negro 100v/240v',167900.00,14),(10,'Lampara Rotatoria Proyector Cielo Estrellas Noche Dormir Luz',50000.00,6),(11,'Secador De Cabello Remington D3190 Violeta 125v',250000.00,15),(12,'Lampara Luna 3d Touch Recargable + Base + Control',15.00,20),(13,'Audífonos In-ear Inalámbricos Xiaomi Redmi Airdots Negro',56762.00,26),(14,'Dvd- R Tiger Virgen Logo 50',49900.00,30),(15,'Cargador Doble Xbox One Dual Charging Dock + 2 Baterías',43900.00,40),(16,'Control Joystick Inalámbrico Redragon Harrow G808 Negro',115900.00,27),(17,'smart watch',200000.00,50),(18,'diadema sony whc520',200000.00,70),(19,'smart watch',200000.00,50);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-09 19:42:48
