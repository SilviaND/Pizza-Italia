-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.36 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table my_project_db.users: ~11 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `additional_information`, `phone_number`) VALUES
	(8, 'Ð¡Ð¸Ð»Ð²Ð¸Ñ', 'Ð”Ð¸Ð¼Ð¾Ð²Ð°', 'silvia.n.dimova@gmail.com', '$2y$04$F6H1bQMg/aVfbFoWtDcxaeaG6NGHHKQdMjiSFVGNuwzBsTU46alH6', NULL, NULL, NULL),
	(9, 'admin', 'admin', 'admin@gmail.com', '$2y$04$QpsJM/QpWXAteyc7ClDA0ekbBG1dhwAgb1TKoodJ45VCFcY4kR4Fy', NULL, NULL, NULL),
	(10, 'sdsasad', 'dfasfsadsa', 'dsfds@asgas.com', '$2y$04$JVOVs4yz1kKkp1MrDj.ahuTnK0QKVwEt8/ZtyFrxET3ZWkEiPYfES', NULL, NULL, NULL),
	(11, 'ÐšÐ°Ñ€Ð¸Ð½Ð°', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð°', 'karina@gmail.com', '$2y$04$Ok27xEQKR5HSj.133AzWg.MdEHIe4Bf9FTi4.8OMiwkAHjvO9m/nC', NULL, NULL, NULL),
	(12, 'Silvia', 'Dimovaq', 'silvia@gmail.com', '$2y$04$3v9BUBeh7R9kQ.qVzroHuelluoPl/BnhJaeTu5ZwYXlPylCVwdVvy', 'Varna, Evlogi Georgiev 24', 'Aleksandrovi', 89456123),
	(13, 'Karina', 'Aleksandrova', 'karina.aleksandrova@gmail.com', '$2y$04$J5uzZDDisQ8HK8ZugYdmkeSTKmXYRbWk4bibxK4tLVMMu4.8hBO/W', 'Varna, Evlogi Georgiev', 'Aleksandrovi', 4567892),
	(14, 'Karina', 'Aleksandrova', 'karina@abv.bg', '$2y$04$0K8IhrLSRK7K7ZVIJ9SaguN6/30J6436IbygcVhTOljgrpRaNp89u', 'Varna, ul. Evlogi Georgiev 24', 'Aleksandrovi', 893456322),
	(15, 'Ð¡Ð¸Ð¼Ð¾Ð½Ð°', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð°', 'simona.aleksandrova@gmail.com', '$2y$04$NVNEomcDI.jlhRJLsdle9eURGy1wLPD6srIlpekoSoFtp98yDje6C', 'Ð’Ð°Ñ€Ð½Ð°, ÑƒÐ». Ð•Ð²Ð»Ð¾Ð³Ð¸ Ð“ÐµÐ¾Ñ€Ð¸Ð³ÐµÐ² 24-Ð•-2-19', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð¸', 893456322),
	(16, 'Ð¡Ð¸Ð¼Ð¾Ð½Ð°', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð°', 'simona@gmail.com', '$2y$04$miAWulG6omA8KAgYqpoMHOJ7fRW1TXbRNWRva6zPl8uQIkr/Aptdy', 'ÑƒÐ». Ð•Ð²Ð»Ð¾Ð³Ð¸ Ð“ÐµÑ€Ð¾Ð³Ð¸ÐµÐ², Ð±Ð».24, Ð²Ñ….Ð•, ÐµÑ‚.2, Ð°Ð¿.19', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð¸', 893456322),
	(17, 'Ð¡Ð¸Ð»Ð²Ð¸Ñ', 'Ð”Ð¸Ð¼Ð¾Ð²Ð°', 'ziseto@gmail.com', '$2y$04$9bFvxZ5h6cjzj5IWyNoK4uvg83soOR/Iz.dl34nN/uG3qEc6fGVV2', 'Ð³Ñ€. Ð’Ð°Ñ€Ð½Ð°, ÑƒÐ». Ð•Ð²Ð»Ð¾Ð³Ð¸ Ð“ÐµÑ€Ð¾Ð³Ð¸ÐµÐ², Ð±Ð».24, Ð²Ñ….Ð•, ÐµÑ‚.2, Ð°Ð¿.19', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð¸', 893456322),
	(18, 'Ð Ð°Ð´ÐºÐ°', 'Ð’ÑŠÐ»ÐµÐ²Ð°', 'r.valeva@gmail.com', '$2y$04$IRN1UGH5/wMI811LGdSdUuzIfWcn4cWgoJ1zQ7gfVhvFw0PaWo9k2', 'Ð’Ð°Ñ€Ð½Ð°, ÑƒÐ». ÐÐ¸ÐºÐ¾Ð»Ð° ÐšÐ¾Ð·Ð»ÐµÐ² 28, Ð²Ñ…. Ð”, ÐµÑ‚. 5, Ð°Ð¿.40', 'Ð’ÑŠÐ»ÐµÐ²Ð¸', 893456322),
	(19, 'Ð¡Ð¸ÑÐ¸', 'Ð”Ð¸Ð¼Ð¾Ð²Ð°', 'sisito@abv.bg', '$2y$04$.LpULZInPpW5XXFVq45NJuELZGwoXoB861UpflE7MSBdk.04qL9bO', 'Ð’Ð°Ñ€Ð½Ð°, ÑƒÐ». ÐŸÐ¾Ð´Ð²Ð¸Ñ 50', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€Ð¾Ð²Ð¸', 894657893);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
