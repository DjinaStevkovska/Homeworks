-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.age
CREATE TABLE IF NOT EXISTS `age` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.age: ~5 rows (approximately)
/*!40000 ALTER TABLE `age` DISABLE KEYS */;
INSERT INTO `age` (`id`, `age`) VALUES
	(1, 20),
	(2, 29),
	(3, 35),
	(4, 31),
	(5, 26);
/*!40000 ALTER TABLE `age` ENABLE KEYS */;

-- Dumping structure for table employees_db.city
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.city: ~5 rows (approximately)
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`, `city`) VALUES
	(1, 'Skopje'),
	(2, 'Tetovo'),
	(3, 'Kumanovo'),
	(4, 'Kumanovo'),
	(5, 'Veles');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

-- Dumping structure for table employees_db.contact number
CREATE TABLE IF NOT EXISTS `contact number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.contact number: ~4 rows (approximately)
/*!40000 ALTER TABLE `contact number` DISABLE KEYS */;
INSERT INTO `contact number` (`id`, `number`) VALUES
	(1, 75489652),
	(2, 78965125),
	(3, 70548896),
	(4, 71548236),
	(5, 75422189);
/*!40000 ALTER TABLE `contact number` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `username`, `name`, `surname`) VALUES
	(1, 'john_doe', 'John', 'Doe'),
	(2, 'rob_robinson', 'Rob', 'Robinson'),
	(3, 'anna_mayers', 'Anna', 'Mayers'),
	(4, 'bob_euell', 'Bob', 'Euell'),
	(5, 'mark_waplinger', 'Mark', 'Waplinger');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.home_adress
CREATE TABLE IF NOT EXISTS `home_adress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.home_adress: ~5 rows (approximately)
/*!40000 ALTER TABLE `home_adress` DISABLE KEYS */;
INSERT INTO `home_adress` (`id`, `adress`) VALUES
	(1, 'ul. Makedonska Prerodba br.56'),
	(2, 'ul. Goce Delcev br.56/2'),
	(3, 'bul. Pero Nakov br.2'),
	(4, 'ul. Rekord br.34-2/3'),
	(5, 'bul. Jane Sandanski br.67-5/1');
/*!40000 ALTER TABLE `home_adress` ENABLE KEYS */;

-- Dumping structure for table employees_db.salary
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salary` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='wage per hour in dollars';

-- Dumping data for table employees_db.salary: ~5 rows (approximately)
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` (`id`, `salary`) VALUES
	(1, 30),
	(2, 35),
	(3, 25),
	(4, 20),
	(5, 28);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
