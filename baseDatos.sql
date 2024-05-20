-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.33 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para usuarios
CREATE DATABASE IF NOT EXISTS `usuarios` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `usuarios`;

-- Volcando estructura para tabla usuarios.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Apellidos` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla usuarios.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID`, `Nombres`, `Apellidos`, `Correo`, `Celular`, `Password`) VALUES
	(1, 'Israel', 'Gutierrez Rabelo', 'isra@mail.com', '5511223344', '338fee57ca85870dac7145c7d41f3914ef78346db72cf6748c8f3a196d60d000'),
	(3, 'Bianca Fernanda', 'Enriquez Pinto', 'wetwey@gmail.com', '5512346789', '92c778ed016379a4bb64f46d261dee6575c054785204d7f8c8cef9b77c414aa6'),
	(4, 'Consuelo Nahid', 'Gutiérrez Rabelo', 'cony@gmail.com', '5566778899', 'db841343ec700c8de0e504acaecabc06c79990277da66719af4cbf2cdcb523bc'),
	(5, 'Hector Jair', 'Velazquez Jimenez', 'jair@gmail.com', '5533448899', 'c3279b376799b128b9f505ad5126693cd5d13449f5bb126ae9c3010730fa8caf'),
	(7, 'Emiliano', 'Martínez Vázquez', 'milo@gmail.com', '5524789045', '8c438abc1b3cd8b92a63c5b55003f89c5a9a8d125cc070f4e6f098832e056aa3'),
	(8, 'Braulia Catalina', 'Rabelo Peña', 'cata@gmail.com', '5577889900', '7e5e483753763e08c918b4baac9b9bb7f66d40ffeadf080c89c024bdd513fa69'),
	(9, 'Guillermo', 'Gutierrez Ruiz', 'memo1@gmail.com', '5525152424', '9c225a950b92172f8c2afe8b682b7b86ce8f835578b546f9b8070cba309ad314'),
	(10, 'Ivan Alexis', 'Gutierrez Estrada', 'ivan@gmail.com', '5512679045', '622cf9da9488e512cc11449d3c72c63260e6cbf0b48eb42bfcf53830931c9133'),
	(11, 'Luis Fernando', 'Gutierrez Estrada', 'luis@gmail.com', '5566772233', '84b0a3665c7d197e977409d425519529ae57667995c6dd4f51d20852ae96a518');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
