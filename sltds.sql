-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sltds.banks: ~5 rows (approximately)
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` (`id`, `bank_name`, `created_at`, `updated_at`) VALUES
	(1, 'Sampath', '2022-03-16 02:30:12', '2022-03-16 02:30:12'),
	(2, 'BOC', '2022-03-16 02:30:15', '2022-03-16 02:30:15'),
	(3, 'People\'s', '2022-03-16 02:30:18', '2022-03-16 02:30:18'),
	(4, 'AIA', '2022-03-16 02:30:21', '2022-03-16 02:30:21'),
	(5, 'HDFC', '2022-03-16 02:30:25', '2022-03-16 02:30:25');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;

-- Dumping data for table sltds.bank_user: ~3 rows (approximately)
/*!40000 ALTER TABLE `bank_user` DISABLE KEYS */;
INSERT INTO `bank_user` (`id`, `bank_id`, `user_id`, `branch_name`, `acc_number`, `created_at`, `updated_at`) VALUES
	(1, 2, 2, '3', 7827935, '2022-03-16 02:40:58', '2022-03-16 06:04:05'),
	(2, 3, 1, '2', 123456756, '2022-03-16 02:42:35', '2022-03-16 05:48:40'),
	(3, 1, 5, '3', 12345612, '2022-03-16 05:45:12', '2022-03-16 06:02:45');
/*!40000 ALTER TABLE `bank_user` ENABLE KEYS */;

-- Dumping data for table sltds.branches: ~6 rows (approximately)
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` (`id`, `branch_name`, `branch_code`, `bank_id`, `created_at`, `updated_at`) VALUES
	(1, 'Colombo', '123', 1, '2022-03-16 02:30:35', '2022-03-16 02:30:35'),
	(2, 'Dehiwala', '456', 1, '2022-03-16 02:30:44', '2022-03-16 02:30:44'),
	(3, 'Moratuwa', '789', 1, '2022-03-16 02:30:53', '2022-03-16 02:30:53'),
	(4, 'Rathmalana', '575', 2, '2022-03-16 02:31:03', '2022-03-16 02:31:03'),
	(5, 'Jaffna', '1000', 3, '2022-03-16 02:31:11', '2022-03-16 02:31:11'),
	(6, 'Gampaha', '101', 4, '2022-03-16 02:31:20', '2022-03-16 02:31:20');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;

-- Dumping data for table sltds.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2022_03_15_150236_create_users_table', 1),
	(14, '2022_03_15_180304_create_banks_table', 1),
	(15, '2022_03_15_180639_create_branches_table', 1),
	(16, '2022_03_15_203230_create_bank_user_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table sltds.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fname`, `nic`, `created_at`, `updated_at`) VALUES
	(1, 'Thilini Perera', '790536087V', '2022-03-16 02:40:02', '2022-03-16 02:40:02'),
	(2, 'Tharindu Perera', '790536087V', '2022-03-16 02:40:22', '2022-03-16 02:40:22'),
	(3, 'Thilini Perera', '790536087V', '2022-03-16 02:40:58', '2022-03-16 02:40:58'),
	(4, 'Thilini Perera', '790536087V', '2022-03-16 02:42:35', '2022-03-16 02:42:35'),
	(5, 'Thilini Perera', '790536087V', '2022-03-16 05:45:12', '2022-03-16 05:45:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
