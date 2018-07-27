-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: angus
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categoria_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Entrada','Para Empezar','5b4faedd79ba6.jpg','2018-07-12 20:17:27','2018-07-18 21:19:25'),(3,'Sopas','Caldos y Consomé','5b4fa9e1730c7.jpg','2018-07-12 20:29:41','2018-07-18 20:58:09'),(4,'Ensaladas','De lo Fresco','5b4faa20cb256.jpg','2018-07-12 20:39:41','2018-07-18 20:59:12'),(5,'Lo Nuevo','Tendencias','5b4faa9661185.jpg','2018-07-12 20:41:16','2018-07-18 21:01:10'),(6,'Tacos','El Placer Mexicano','5b4fab1c4f3a9.jpg','2018-07-12 20:47:05','2018-07-18 21:03:24'),(7,'Creaciones','Lo que se te Antoje','5b4fab8e006ee.jpg','2018-07-12 20:48:19','2018-07-18 21:05:18'),(8,'Combinaciones','A tú Gusto','5b4fabc7bda66.jpg','2018-07-12 20:49:34','2018-07-18 21:06:15'),(9,'Del Mar','Lo mejor en tú Mesa','5b4fac0069cb5.jpg','2018-07-12 20:51:26','2018-07-18 21:07:12'),(10,'Postres','Sobremesa','5b4fac3d063a8.png','2018-07-12 20:53:36','2018-07-18 21:08:13'),(11,'Nacionales','Cortes de Chihuahua','5b4fadf261baf.jpg','2018-07-12 20:58:08','2018-07-18 21:15:30'),(12,'Importados','Prime Steaks','5b4fae483acbc.jpg','2018-07-12 20:58:51','2018-07-18 21:16:56'),(13,'Para Acompañar','Extras','5b4fae9a4ef06.JPG','2018-07-12 21:09:10','2018-07-18 21:18:18');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'Ladies Night','Ven a convivir con nuestras hostess y modelos que estarán ahí con la consigna de hacerte pasar un rato muy agradable.','05 de julio de 2018','5b4902fd064ca.png','2018-07-13 19:12:55','2018-07-13 20:05:56','https://www.facebook.com/events/302426716966436/'),(2,'Burlesque  The Show','El mejor show de broadway interpretado en escena por nuestras hostess y modelos de nuestro restaurante.','04 de julio de  2018','5b49060e0f62d.png','2018-07-13 20:01:11','2018-07-13 20:06:08','https://www.facebook.com/events/222354085067273/'),(3,'Noche de Baile Árabe','Ven a convivir con nuestras hostess y modelos que estarán ahí con la consigna de hacerte pasar un rato muy agradable.','28 de Junio de 2018','5b4905d555813.png','2018-07-13 20:04:37','2018-07-13 20:04:37','https://www.facebook.com/events/2062330634015365/');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pecio` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'TABLA DE QUESOS FINOS','Queso de Oveja Añejo, Queso Suizo, Camembert, Brie Holanes, y Queso de Cabra.','$ 0.00',1,'2018-07-12 21:18:52','2018-07-12 21:21:48'),(2,'QUESO FUNDIDO','Queso Manchego y  Queso Chihuahua.','$ 0.00',1,'2018-07-12 21:23:11','2018-07-12 21:31:09'),(3,'QUESO FUNDIDO','Chis-torra o Champiñon.','$ 0.00',1,'2018-07-12 21:24:28','2018-07-12 21:31:16'),(4,'CARPACCIO','Atún, Salmón, Res, o Callo el Hacha.','$ 0.00',1,'2018-07-12 21:26:08','2018-07-12 21:30:56'),(5,'TOSTADAS (4PIEZAS)','Marlín, Jaiba, Camarón, Pulpo o Atún.','$ 0.00',1,'2018-07-12 21:28:37','2018-07-12 21:31:35'),(6,'ESCAMOLES AL GUSTO','Mantequilla, Ajillo o en Sopes.','$ 0.00',1,'2018-07-12 21:30:21','2018-07-12 21:31:03'),(7,'GUSANOS DE MAGUEY','Fritos en Aceite de Oliva.','$ 0.00',1,'2018-07-12 21:40:28','2018-07-12 21:49:06'),(8,'CHINICUILES','Fritos en Aceite de Oliva, Al Ajillo o al Mojo de Ajo.','$ 0.00',1,'2018-07-12 21:42:08','2018-07-12 21:42:08'),(9,'JAMÓN IBÉRICO GRAN RESERVA','Ibérico Jabugo de Bellota Servicio con Pan Tomata y Queso Manchego.','$ 0.00',1,'2018-07-12 21:43:54','2018-07-12 21:43:54'),(10,'JAMÓN SERRANO','Servicio con Pan Tomata y Queso Manchego.','$ 0.00',1,'2018-07-12 21:44:44','2018-07-12 21:44:44'),(11,'BOTANA MAR Y TIERRA','Seis Camarones Grandes, y Roast Prime.','$ 0.00',1,'2018-07-12 21:46:13','2018-07-12 21:46:13'),(12,'ABULÓN AL GUSTO','Rasurado, Al Chile o Al Limón.','$ 0.00',1,'2018-07-12 21:47:18','2018-07-12 21:47:18'),(13,'QUESO PROVOLETA','Asado al Broiler.','$ 0.00',1,'2018-07-12 21:48:57','2018-07-12 21:48:57'),(14,'QUESO FUNDIDO ESPAÑOL','Tres Quesos y Chorizo Español.','$ 0.00',1,'2018-07-12 21:49:56','2018-07-12 21:49:56'),(15,'OSTIONES AL GUSTO (12 PIEZAS)','Roquefeller, Diabla, Rasurados o Cárdenas.','$ 0.00',1,'2018-07-12 21:51:01','2018-07-12 21:51:01'),(16,'ESCARGOT A LA BORGOÑA','Salteados a la Mantequilla Negra, Ajo con Pernod, Avellana y Perejil Picado.','$ 0.00',1,'2018-07-12 21:52:16','2018-07-12 21:52:16'),(17,'EMPANADAS','Carne o Rajas con Queso y Elote.','$ 0.00',1,'2018-07-12 21:52:54','2018-07-12 21:52:54'),(18,'CONSOMÉ DE POLLO','Servicio de Dados de Pechuga de Pollo, Arroz y Verduras.','$ 0.00',3,'2018-07-12 21:54:26','2018-07-12 21:56:28'),(19,'JUGO DE CARNE','Elaborado con la más Jugosa  Carne de Res, Servida con Cilantro, Cebolla, Chile Serrano y Limón.','$ 0.00',3,'2018-07-12 21:59:02','2018-07-12 21:59:02'),(20,'VIGORIZANTE','Con Ostiones Frescos.','$ 0.00',3,'2018-07-12 21:59:51','2018-07-12 21:59:51'),(21,'VIGORIZANTE','Con Camarones Pacotilla.','$ 0.00',3,'2018-07-12 22:00:40','2018-07-12 22:00:40'),(22,'VIGORIZANTE','Campechano.','$ 0.00',3,'2018-07-12 22:00:54','2018-07-12 22:00:54'),(23,'SOPA DE FIDEO SECO','La Tradicional Receta.','$ 0.00',3,'2018-07-12 22:02:19','2018-07-12 22:02:19'),(24,'SOPA SONORA','Crema de Elotes con Rajas Poblanas y Cubos de Queso Panela.','$ 0.00',3,'2018-07-12 22:05:29','2018-07-12 22:05:29'),(25,'SOPA ANGUS','Albondigas de Filete de Res, Granos de Elote y Chile Poblano, en Caldo de Jitomate.','$ 0.00',3,'2018-07-12 22:06:54','2018-07-12 22:06:54'),(26,'SOPA VERDE','Pulpo, Camarón, Pescado y Almeja.','$ 0.00',3,'2018-07-12 22:07:48','2018-07-12 22:07:48'),(27,'MOLLEJAS AL GRILL','Mollejas al Grill.','$ 0.00',5,'2018-07-12 22:09:04','2018-07-12 22:09:04'),(28,'CHORIZO ARGENTINO (1 PIEZA)','Chorizo Argentino.','$ 0.00',5,'2018-07-12 22:09:51','2018-07-12 22:09:51'),(29,'TUÉTANOS A LA PARRILLA','Tuétanos a la Parrilla.','$ 0.00',5,'2018-07-12 22:10:24','2018-07-12 22:10:24'),(30,'STEAK & SHRIMPS','Fino Filete Combinado con Frescos Camarones Gigantes.','$ 0.00',8,'2018-07-12 22:12:14','2018-07-12 22:12:14'),(31,'BROCHETA ANGUS','Res y Camarón.','$ 0.00',8,'2018-07-12 22:12:38','2018-07-12 22:12:38'),(32,'STEAK & LOBSTER','La Combinación Clásica.','$ 0.00',8,'2018-07-12 22:13:27','2018-07-12 22:13:27'),(33,'VEGAS PLATE','Fino Filete de Calidad, Frescos, Exquisitos Ostiones Gratinados.\r\n¡Combinación Perfecta!','$ 0.00',8,'2018-07-12 22:14:51','2018-07-12 22:14:51'),(34,'ENSALADA ESPECIAL','Mezcla de Lechuga, Palmitos, Espinacas, Berros, Champiñones, Germen de Alfa, Tocino, Nuez y La Mezcla de Aderezos.','$ 0.00',4,'2018-07-13 13:44:39','2018-07-13 13:44:39'),(35,'ENSALADA TIBIA DE HIGOS','Ricas Lechugas Finas, Higos a la Plancha, Nuez Caramelizada, Ajonjolí Garapiñado, y Queso de Cabra, Aderezado con Vinagreta de Vino Tinto y Uvas.','$ 0.00',4,'2018-07-13 13:58:08','2018-07-13 13:58:08'),(36,'ENSALADA DE MANZANA Y QUESO','Queso Manchego en Cubos, Manzana, Nuez, Cereza, Servicio en Cazuela de Lechuga Romana, Aderezada con Crema Dulce.','$ 0.00',4,'2018-07-13 14:00:05','2018-07-13 14:00:05'),(37,'ENSALADA DE BERROS','Con Jitomate, Nuez, Tocino, Queso Cottage y Cebolla.','$ 0.00',4,'2018-07-13 14:01:21','2018-07-13 14:01:21'),(38,'ENSALADA CESAR P/P','La Tradicional Receta Preparada en tú Mesa.','$ 0.00',4,'2018-07-13 14:02:18','2018-07-13 14:02:18'),(39,'ENSALADA CESAR P/P','Con Pollo a la Parrilla.','$ 0.00',4,'2018-07-13 14:02:54','2018-07-13 14:02:54'),(40,'ENSALADA CESAR P/P','Con (4 Piezas) de Camarones Gigantes.','$ 0.00',4,'2018-07-13 14:03:27','2018-07-13 14:03:27'),(41,'ENSALADA CLÁSICA','Jitomate, Lechuga, y Cebolla.','$ 0.00',4,'2018-07-13 14:04:03','2018-07-13 14:04:03'),(42,'ENSALADA DE ESPINACAS','Con Champiñones y Tocino.','$ 0.00',4,'2018-07-13 14:04:53','2018-07-13 14:04:53'),(43,'ENSALADA DE LECHUGAS FINAS','Con Jitomate y Queso de Cabra.','$ 0.00',4,'2018-07-13 14:07:09','2018-07-13 14:07:09'),(44,'ENSALADA DE JITOMATE','Jitomates Frescos, con Acite de Oliva y un Toque de Orégano.','$ 0.00',4,'2018-07-13 14:08:06','2018-07-13 14:08:06'),(45,'TACOS DE ARRACHERA (8 PIEZAS)','Arrachera Angus, Cebollitas, y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:10:53','2018-07-13 14:10:53'),(46,'TACOS DE RIB-EYE (8 PIEZAS)','Rib- Eye al Broiler, Cebollas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:13:33','2018-07-13 14:13:33'),(47,'TACOS DE LANGOSTA  (8 PIEZAS)','Sazonados con Chipoltle y Frijoles Acompañados de Arroz y Guacamole.','$ 0.00',6,'2018-07-13 14:17:16','2018-07-13 14:17:16'),(48,'TACOS PLACEROS DE PRIME O RIB- EYE (8 PIEZAS)','Con Chicharrón y Chorizo, con Cebollas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:30:40','2018-07-13 14:30:40'),(49,'TACOS  DE PRIME RIB (8 PIEZAS)','Prime Rib Horneado con Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:32:03','2018-07-13 14:32:03'),(50,'TACOS DE VACÍO ARGENTINO  (8 PIEZAS)','Con Cebollas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:33:54','2018-07-13 14:33:54'),(51,'TACOS SUDADOS DE LENGUA (6 PIEZAS)','Envueltos en Hoja de Plátano Sazonados con Cilantro y Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:35:26','2018-07-13 14:35:26'),(52,'TACOS DE PECHO DE TERNERA  (8 PIEZAS)','Jugosa Ternera al Horno con Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:36:40','2018-07-13 14:36:40'),(53,'TACOS DE CHAMORRO (8 PIEZAS)','Al Horno con Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:37:23','2018-07-13 14:37:23'),(54,'TACOS DE CAMARÓN AL PASTOR  (6 PIEZAS)','Con Salsa de Chipotle y Pina a la Plancha con Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:38:39','2018-07-13 14:38:39'),(55,'TACOS DE MARLYN (6 PIEZAS)','Con Chicharrón y Chorizo, Con Cebollitas y Chiles Toreados.','$ 0.00',6,'2018-07-13 14:52:44','2018-07-13 14:52:44'),(56,'PECHUGAS AL GUSTO','A la Plancha, Al Chipotle, A la Mexicana, A la Parmesana o en Fajitas.','$ 0.00',7,'2018-07-13 16:00:04','2018-07-13 16:00:04'),(57,'ANGUS SPECIAL CUT','El más Selecto Filete de Angus con un Cinturón de Tocino Acompañado con Chiles, Cebollas Asadas y un Guarnición a su Selección.','$ 0.00',7,'2018-07-13 16:38:22','2018-07-13 16:38:22'),(58,'POLLO A LA GRILL','Pollo Fresco Deshuesado con Piel, Marinado con Limón, Orégano y Tomillo, Servicio con Verduras y Papa Curly.','$ 0.00',7,'2018-07-13 16:40:34','2018-07-13 16:40:34'),(59,'CAÑA ANGUS','Generosa Porción de Fino Filete al Estilo Angus, Acompañada con Salsa de Champiñones, Chiles Toreados, Papa Angus, y Dos Bolas de Queso Recomendado para Dos Personas.','$ 0.00',7,'2018-07-13 16:43:04','2018-07-13 16:43:04'),(60,'FAJITAS ANGUS','De Arrachera Angus con Cebolla y Pimientos, Acompañada de Tortillas Hechas a Mano.','$ 0.00',7,'2018-07-13 16:46:41','2018-07-13 16:46:41'),(61,'FAJITAS AL CHIPOTLE','Arrachera, Salsa Picosita y Gratinada con Queso Manchego.','$ 0.00',7,'2018-07-13 16:48:19','2018-07-13 16:48:19'),(62,'CHAMORRO AL HORNO','Entero, Deshuesado, A la Mexicana o Rasurado, Acompañado de Chiles y Cebollitas.','$ 0.00',7,'2018-07-13 16:49:49','2018-07-13 16:49:49'),(63,'PECHO DE TERNERA AL HORNO','Doradito, Acompañado de Guacamole y Ensalada de Nopales.','$ 0.00',7,'2018-07-13 16:51:53','2018-07-13 16:51:53'),(64,'ATE CON QUESO','Ate con Queso.','$ 0.00',10,'2018-07-13 16:58:36','2018-07-13 17:05:50'),(65,'FRESAS JUBILE','Fresas Jubile.','$ 0.00',10,'2018-07-13 16:59:16','2018-07-13 17:06:35'),(66,'MANGOS AL TEQUILA','Mangos Al Tequila.','$ 0.00',10,'2018-07-13 16:59:47','2018-07-13 17:06:49'),(67,'PLÁTANOS MARTINIQUE','Plátanos Martinique.','$ 0.00',10,'2018-07-13 17:03:00','2018-07-13 17:07:37'),(68,'HIGOS AL OPORTO','Higos Al OPorto.','$ 0.00',10,'2018-07-13 17:04:21','2018-07-13 17:04:21'),(69,'CREPAS SUZETTE.','Crepas Suzette.','$ 0.00',10,'2018-07-13 17:04:57','2018-07-13 17:04:57'),(70,'FRESAS ROMANOF','Fresas Romanof.','$ 0.00',10,'2018-07-13 17:08:15','2018-07-13 17:08:15'),(71,'PASTEL SURTIDO PZA','Pastel Surtido Pza.','$ 0.00',10,'2018-07-13 17:09:14','2018-07-13 17:09:14'),(72,'Helado','Helado (Pregunta la  Disponibilidad de Sabor a tu Paladar).','$ 0.00',10,'2018-07-13 17:10:06','2018-07-13 17:10:06'),(73,'FLAN ANGUS','Flan Angus.','$ 0.00',10,'2018-07-13 17:11:16','2018-07-13 17:11:16'),(74,'CEREZAS JUBILE','Cerezas Jubile (Producto de Temporada).','$ 0.00',10,'2018-07-13 17:13:01','2018-07-13 17:13:01'),(75,'CEBOLLAS Y CHILES TOREADOS','Cebollas y Chiles Toreados.','$ 0.00',13,'2018-07-13 17:16:27','2018-07-13 17:16:27'),(76,'ESPÁRRAGOS JUMBO A LA PARRILLA','Espárragos Jumbo a la Parilla.','$ 0.00',13,'2018-07-13 17:17:18','2018-07-13 17:17:18'),(77,'CHAMPIÑONES AL AJILLO','Champiñones al Ajillo.','$ 0.00',13,'2018-07-13 17:17:52','2018-07-13 17:17:52'),(78,'SALTEADO DE VERDURAS','Salteado de Verduras.','$ 0.00',13,'2018-07-13 17:18:33','2018-07-13 17:18:33'),(79,'ESPINACAS A LA CREMA','Espinacas a la Crema.','$ 0.00',13,'2018-07-13 17:19:03','2018-07-13 17:19:03'),(80,'BROCOLI FRITO','Brocoli Frito.','$ 0.00',13,'2018-07-13 17:19:36','2018-07-13 17:19:36'),(81,'ELOTES A LA MANTEQUILLA','Elotes a la Mantequilla','$ 0.00',13,'2018-07-13 17:20:04','2018-07-13 17:20:04'),(82,'PIMIENTOS ROJOS ASADOS','Pimientos Rojos Asados.','$ 0.00',13,'2018-07-13 17:20:34','2018-07-13 17:20:34'),(83,'GUACAMOLE','Guacamole.','$ 0.00',13,'2018-07-13 17:20:48','2018-07-13 17:20:48'),(84,'FRIJOLES CHARROS','Frijoles Charros.','$ 0.00',13,'2018-07-13 17:21:36','2018-07-13 17:21:36'),(85,'SALSA ARRIERA','Salsa Arriera.','$ 0.00',13,'2018-07-13 17:22:23','2018-07-13 17:22:23'),(86,'SALSA DE MOLCAJETE PREPARADA EN SU MESA','Salsa de Molcajete Preparada en su Mesa.','$ 0.00',13,'2018-07-13 17:23:13','2018-07-13 17:23:13'),(87,'ABANICO DE AGUACATE','Abanico de Aguacate.','$ 0.00',13,'2018-07-13 17:23:33','2018-07-25 19:39:32'),(88,'VERDURAS A LA SOYA','Verduras a la Soya.','$ 0.00',13,'2018-07-13 17:24:21','2018-07-13 17:24:21'),(89,'PAPAS SARATOGAS','Papas Saratoga','$ 0.00',13,'2018-07-13 17:25:09','2018-07-13 17:25:09'),(90,'QUESO PANELA','Queso Panela.','$ 0.00',13,'2018-07-13 17:26:52','2018-07-13 17:26:52'),(91,'PAPA CURLY','Papa Curly.','$ 0.00',13,'2018-07-13 17:27:27','2018-07-13 17:27:27'),(92,'PAPA AL HORNO ANGUS','Papa Al Horno Angus.','$ 0.00',13,'2018-07-13 17:28:21','2018-07-13 17:28:21'),(93,'PAPA A LA FRANCESA','Papa a la Francesa.','$ 0.00',13,'2018-07-13 17:28:54','2018-07-13 17:28:54'),(94,'PURÉ DE PAPA','Puré de Papa.','$ 0.00',13,'2018-07-13 17:29:32','2018-07-13 17:29:32'),(95,'PAPA SUFFLE','Papa Suffle.','$ 0.00',13,'2018-07-13 17:30:58','2018-07-13 17:30:58'),(96,'ARRACHERA (300gr)','Carne con 300 Gramos.','$ 0.00',11,'2018-07-13 17:32:51','2018-07-13 17:32:51'),(97,'COWBOY STEAK (510GR)','Cowboy Steak 510 Gramos.','$ 0.00',11,'2018-07-13 17:33:48','2018-07-13 17:33:48'),(98,'RIB-EYE LIP ON (400GR)','Carne Rib-Eye Lip On 400 Gramos.','$ 0.00',11,'2018-07-13 17:34:56','2018-07-13 17:34:56'),(99,'NEW YORK (400GR)','New York 400 Gramos.','$ 0.00',11,'2018-07-13 17:35:31','2018-07-13 17:35:31'),(100,'PORTER HOUSE (450GR)','Porter House 450 Gramos.','$ 0.00',11,'2018-07-13 17:36:39','2018-07-13 17:36:39'),(101,'CABRERIA (450GR)','Cabreria 450 Gramos.','$ 0.00',11,'2018-07-13 17:37:14','2018-07-13 17:37:14'),(102,'COSTILLA WESTERN (450GR)','Pequeño Hueso Combinado con el Marmoleo, le da un Sabor Inigualable.','$ 0.00',11,'2018-07-13 17:38:34','2018-07-13 17:38:34'),(103,'TOMAHAWK (800GR)','Tomahawk 800 Gramos.','$ 0.00',11,'2018-07-13 17:39:27','2018-07-13 17:39:27'),(104,'VACÍO ARGENTINO (300GR)','Vacío Argentino 300 Gramos.','$ 0.00',11,'2018-07-13 17:40:53','2018-07-13 17:40:53'),(105,'NEW YORK CUT (400GR)','New York Cut 400 Gramos.','$ 0.00',12,'2018-07-13 17:42:08','2018-07-13 17:42:08'),(106,'ARRACHERA (300gr)','Clásico Corte Suave, Jugoso y De Acuerdo Sabor Dado a Conocer por Angus.','$ 0.00',12,'2018-07-13 17:42:45','2018-07-13 17:43:53'),(107,'PORTER HOUSE (450GR)','La Combinación del New York y su Suavidad del Filete le da un Extraordinario Sabor.','$ 0.00',12,'2018-07-13 17:45:21','2018-07-13 17:45:21'),(108,'RIB-EYE LIP ON (400GR)','Su Buen Marmoleo le da un Gran Sabor y una Deliciosa Jugosidad.','$ 0.00',12,'2018-07-13 18:01:05','2018-07-13 18:01:05'),(109,'ROAST PRIME RIB OF BEEF (450GR)','Costilla de Consistencia Suave y Sabor Pronunciado Sazonado y Horneado en su Jugo.','$ 0.00',12,'2018-07-13 18:05:13','2018-07-13 18:05:13'),(110,'PULPO AL GUSTO','Gallega, Estragón, Diabla, Al Ajillo, en su Tinta.','$ 0.00',9,'2018-07-13 20:50:28','2018-07-13 20:50:28'),(111,'PÁMPANO A LA SAL','Horneado con Sal de Mar.','$ 0.00',9,'2018-07-13 20:51:03','2018-07-13 20:51:03'),(112,'ATÚN A LA GRILL (300GR)','Atún Fresco Cocinado en Aceite de Oliva Acompañadado de Vegetales.','$ 0.00',9,'2018-07-13 20:52:17','2018-07-13 20:52:17'),(113,'HUACHINANGO QUINK','Huachinango Entero Crujiente Dulce Picante Estilo Mandarín.','$ 0.00',9,'2018-07-13 20:53:14','2018-07-13 20:53:14'),(114,'CAMARONES AL GUSTO','A la Plancha, Rasurados, Empanizados, Mojo de Ajo, Ajillo a la Cazuela o Steak.','$ 0.00',9,'2018-07-13 20:54:35','2018-07-13 20:54:35'),(115,'RUEDA DE RÓBALO AL GUSTO','A la Plancha, Al Ajillo, Empanizado, o Al Mojo de Ajo, Amandin, Menier o Alcaparrado.','$ 0.00',9,'2018-07-13 20:56:33','2018-07-13 20:56:33'),(116,'SALMÓN AL GUSTO','Preparado a su  Elección: Frutos Rojos, Al Ajillo, Mojo de Ajo, Amandin, Menier o Alcaparrado.','$ 0.00',9,'2018-07-13 21:26:37','2018-07-13 21:26:37'),(117,'FILETE DE HUACHINANGO AL GUSTO','Ala Plancha, Al ajillo, Empanizado o Al Mojo de Ajo.','$ 0.00',9,'2018-07-13 21:27:27','2018-07-13 21:27:27'),(118,'LENGUADO AL GUSTO','A la Mantequilla, Al Limón, Al Mojo de Ajo,  Al Ajillo, Al Cilantro, Pimienta Negra o Amandin.','$ 0.00',9,'2018-07-13 21:28:59','2018-07-13 21:28:59'),(119,'COLA DE LANGOSTA','Termidor, Mantequilla, Ajillo o Amandin.','$ 0.00',9,'2018-07-13 21:29:47','2018-07-13 21:29:47');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_12_064332_categoria',1),(4,'2018_07_12_064341_menu',1),(5,'2018_07_13_182448_eventos_create',2),(6,'2018_07_13_190522_add_url_eventos',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@app.com','$2y$10$NgAss0coOmO5RPa0ilVQfe42.2qXrG67/VhpDTo4PsaIArds00O7K','nnW6PLqWYzuwrfbzrUYcvLdBkSohBAIAB3ZHMkDWxGzC7q63eUOHX8q8iLch',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-27 22:07:15
