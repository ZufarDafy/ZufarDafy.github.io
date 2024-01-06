-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for alstore
CREATE DATABASE IF NOT EXISTS `alstore` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `alstore`;

-- Dumping structure for table alstore.game
CREATE TABLE IF NOT EXISTS `game` (
  `IdGame` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'A',
  `nama_game` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IdGame`),
  KEY `nama_game` (`nama_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table alstore.game: ~9 rows (approximately)
INSERT INTO `game` (`IdGame`, `nama_game`) VALUES
	('A05', 'Call of Duty M'),
	('A07', 'FC Mobile'),
	('A03', 'Free Fire'),
	('A09', 'Genshin Impact'),
	('A06', 'Honkai Star Rail'),
	('A01', 'Mobile Legends'),
	('A04', 'PUBG Mobile'),
	('A08', 'Stumble Guys'),
	('A02', 'Valorant');

-- Dumping structure for table alstore.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `IdProduk` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'B',
  `nama_game` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_produk` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  PRIMARY KEY (`IdProduk`),
  KEY `nama_game` (`nama_game`),
  KEY `nama_produk` (`nama_produk`),
  CONSTRAINT `FK_produk_game` FOREIGN KEY (`nama_game`) REFERENCES `game` (`nama_game`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table alstore.produk: ~70 rows (approximately)
INSERT INTO `produk` (`IdProduk`, `nama_game`, `nama_produk`, `harga`) VALUES
	('B00', 'Mobile Legends', '86 Diamonds', 24000),
	('B01', 'Mobile Legends', '172 Diamonds', 46000),
	('B02', 'Mobile Legends', '257 Diamonds', 65000),
	('B03', 'Mobile Legends', '344 Diamonds', 91000),
	('B04', 'Mobile Legends', '429 Diamonds', 111000),
	('B05', 'Mobile Legends', '514 Diamonds', 130000),
	('B06', 'Mobile Legends', '600 Diamonds', 154000),
	('B07', 'Mobile Legends', '706 Diamonds', 174000),
	('B08', 'Mobile Legends', '875 Diamonds', 219000),
	('B09', 'Mobile Legends', '963 Diamonds', 400000),
	('B10', 'Free Fire', '50 Diamonds', 8000),
	('B11', 'Free Fire', '70 Diamonds', 11000),
	('B12', 'Free Fire', '100 Diamonds', 16000),
	('B13', 'Free Fire', '140 Diamonds', 21000),
	('B14', 'Free Fire', '170 Diamonds', 25000),
	('B16', 'Free Fire', '355 Diamonds', 49000),
	('B17', 'Free Fire', '425 Diamonds', 60000),
	('B18', 'Free Fire', '500 Diamonds', 70000),
	('B19', 'Free Fire', '720 Diamonds', 96000),
	('B20', 'PUBG Mobile', '263 UC', 46000),
	('B21', 'PUBG Mobile', '525 UC', 90000),
	('B22', 'PUBG Mobile', '788 UC', 133000),
	('B23', 'PUBG Mobile', '1050 UC', 175000),
	('B24', 'PUBG Mobile', '1375 UC', 220000),
	('B25', 'PUBG Mobile', '1638 UC', 263000),
	('B26', 'PUBG Mobile', '1900 UC', 308000),
	('B27', 'PUBG Mobile', '2163 UC', 351000),
	('B28', 'PUBG Mobile', '2425 UC', 395000),
	('B29', 'PUBG Mobile', '2875 UC', 441000),
	('B30', 'Valorant', '125 Point', 14000),
	('B31', 'Valorant', '420 Point', 46000),
	('B32', 'Valorant', '700 Point', 72000),
	('B33', 'Valorant', '1375 Point', 135000),
	('B34', 'Valorant', '2400 Point', 225000),
	('B35', 'Valorant', '4000 Point', 360000),
	('B36', 'Valorant', '8150 Point', 720000),
	('B40', 'Call of Duty M', '800 CP', 130000),
	('B41', 'Call of Duty M', '1373 CP', 180000),
	('B42', 'Call of Duty M', '2059 CP', 270000),
	('B43', 'Call of Duty M', '2749 CP', 342000),
	('B44', 'Call of Duty M', '3564 CP', 450000),
	('B45', 'Call of Duty M', '5618 CP', 657000),
	('B46', 'Call of Duty M', '7656 CP', 900000),
	('B47', 'Call of Duty M', '15312 CP', 1801000),
	('B48', 'Call of Duty M', '38280 CP', 4504000),
	('B49', 'FC Mobile', '40 FC Points', 6000),
	('B50', 'FC Mobile', '100 FC Points', 15000),
	('B51', 'FC Mobile', '520 FC Points', 71000),
	('B52', 'FC Mobile', '1070 FC Points', 143000),
	('B53', 'FC Mobile', '2200 FC Points', 296000),
	('B54', 'FC Mobile', '5750 FC Points', 720000),
	('B55', 'FC Mobile', '12000 FC Points', 1440000),
	('B56', 'Honkai Star Rail', '60 Oneiric Shard', 14000),
	('B57', 'Honkai Star Rail', '300 Oneiric Shard', 71000),
	('B58', 'Honkai Star Rail', '980 Oneiric Shard', 224000),
	('B59', 'Honkai Star Rail', '1980 Oneiric Shard', 432000),
	('B60', 'Honkai Star Rail', '3280 Oneiric Shard', 720000),
	('B61', 'Honkai Star Rail', '6480 Oneiric Shard', 1440000),
	('B62', 'Stumble Guys', '250 Gems', 11000),
	('B63', 'Stumble Guys', '800 Gems', 28000),
	('B64', 'Stumble Guys', '1600 Gems', 50000),
	('B65', 'Stumble Guys', '5000 Gems', 112000),
	('B66', 'Stumble Guys', '120 Tokens', 34000),
	('B67', 'Stumble Guys', '1300 Tokens', 283000),
	('B68', 'Genshin Impact', '60 Genesis Crystals', 15000),
	('B69', 'Genshin Impact', '300 Genesis Crystals', 73000),
	('B70', 'Genshin Impact', '980 Genesis Crystals', 230000),
	('B71', 'Genshin Impact', '1980 Gensesis Crystals', 440000),
	('B72', 'Genshin Impact', '3280 Genesis Crystals', 734000),
	('B73', 'Genshin Impact', '6480 Genesis Crystals', 1467000);

-- Dumping structure for table alstore.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `IdTrans` int NOT NULL AUTO_INCREMENT,
  `TglTrans` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `uname` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `UID` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_game` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_produk` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `Proses` enum('Berhasil','Gagal') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IdTrans`),
  KEY `nama_game` (`nama_game`),
  KEY `nama_produk` (`nama_produk`),
  CONSTRAINT `FK_transaksi_game` FOREIGN KEY (`nama_game`) REFERENCES `game` (`nama_game`) ON UPDATE CASCADE,
  CONSTRAINT `FK_transaksi_produk_2` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`nama_produk`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table alstore.transaksi: ~6 rows (approximately)
INSERT INTO `transaksi` (`IdTrans`, `TglTrans`, `uname`, `UID`, `nama_game`, `nama_produk`, `harga`, `Proses`) VALUES
	(0, '2023-12-21 02:32:08', 'afin', '234234', 'Mobile Legends', '100 Diamonds', 16000, 'Berhasil'),
	(75, '2023-12-21 04:36:38', 'afin', '34123424', 'Mobile Legends', '963 Diamonds', 400000, 'Berhasil'),
	(76, '2023-12-21 04:41:40', 'afin', '234234B09', 'Mobile Legends', '963 Diamonds', 400000, 'Gagal'),
	(77, '2023-12-21 04:48:09', 'afin', '523453245', 'Mobile Legends', '963 Diamonds', 400000, 'Berhasil'),
	(78, '2023-12-21 04:48:32', 'afin', '523453245', 'Mobile Legends', '963 Diamonds', 400000, 'Gagal'),
	(79, '2023-12-21 14:47:58', 'afin', '1231231', 'Free Fire', '355 Diamonds', 49000, 'Berhasil');

-- Dumping structure for table alstore.user
CREATE TABLE IF NOT EXISTS `user` (
  `IdUser` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('admin','user') COLLATE utf8mb4_general_ci NOT NULL,
  `cash` int DEFAULT NULL,
  PRIMARY KEY (`IdUser`),
  KEY `cash` (`cash`),
  KEY `uname` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table alstore.user: ~2 rows (approximately)
INSERT INTO `user` (`IdUser`, `uname`, `pass`, `status`, `cash`) VALUES
	(1, 'admin', 'admin', 'admin', 0),
	(2, 'afin', 'Afin12345', 'user', 1451000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
