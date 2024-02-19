-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `acara`;
CREATE TABLE `acara` (
  `id` int NOT NULL,
  `username` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  KEY `username` (`username`),
  CONSTRAINT `acara_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `c_suami` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `c_istri` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `text1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `waktu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `setting` (`id`, `username`, `title`, `c_suami`, `c_istri`, `text1`, `waktu`) VALUES
(1,	2,	'Perinikahan Rangga dan Sulis',	'Rangga',	'Ana',	'WE ARE GETTING MARRIED 1234',	'28 Februari 2024');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `no_hp`, `nama_lengkap`, `status`, `created_at`) VALUES
(1,	'admin',	'admin',	'admin@mail.com',	'081233292008',	'admin aja',	'Y',	NULL),
(2,	'user1',	'user1',	'toko.dianmustika@gmail.com',	'021-5462871',	'Anjas Test',	'Y',	NULL),
(3,	'user2',	'4',	'toko.dianmustika@gmail.com',	'085235714803',	'Toko Dian Mustika',	'Y',	NULL),
(4,	'user3',	'4',	'ardian.ddw@nusamandiri.ac.id',	'085235714803',	'Toko Dian Mustika',	'Y',	NULL),
(5,	'user4',	'1',	'toko.dianmustika@gmail.com',	'085235714803',	'Toko Dian Mustika',	'Y',	NULL),
(6,	'user5',	'5',	'toko.dianmustika@gmail.com',	'085235714803',	'Toko Dian Mustika',	'Y',	NULL);

-- 2024-02-19 09:12:04