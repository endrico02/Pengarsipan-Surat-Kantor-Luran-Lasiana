# Host: localhost  (Version 5.5.5-10.4.28-MariaDB)
# Date: 2023-05-04 09:52:16
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "arsip"
#

DROP TABLE IF EXISTS `arsip`;
CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL AUTO_INCREMENT,
  `id_tamu` int(11) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `alamat_usaha` varchar(255) DEFAULT NULL,
  `jenis_keperluan` varchar(255) DEFAULT NULL,
  `tanggal_proses` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_arsip`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "arsip"
#

INSERT INTO `arsip` VALUES (9,101,'Kios','RT 034 / RW 009 Kelurahan Lasiana Kecamatan Kelapa Lima Kota Kupang','Pinjaman / Kredit dana KUR pada Bank BRI','2023-03-26 00:00:00','2023-03-26 23:43:17','2023-03-26 23:43:17');

#
# Structure for table "failed_jobs"
#

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "failed_jobs"
#


#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "personal_access_tokens"
#

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "personal_access_tokens"
#


#
# Structure for table "tamu"
#

DROP TABLE IF EXISTS `tamu`;
CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `no_antrian` int(10) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `opr_notif` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "tamu"
#

INSERT INTO `tamu` VALUES (101,1,'5301050205960004','Jason Federico','Laki-Laki','DIli','1996-05-02','RT. 034 / RW 009 Kelurahan Lasiana kecamatan Kelapa Lima Kota Kupang','Programmer','Kristen Katolik','Surat Keterangan Usaha','5301050205960004-Berkas Lamaran.pdf','2023-03-26','3','2023-03-26 23:41:37','2023-03-26 23:41:37'),(102,1,'11111','eeee','Laki-Laki','eee','2023-05-04','eee','eeee','Kristen Protestan','Surat Keterangan Usaha','11111-nusa-tenggara-timur-logo-AD1B11F442-seeklogo.com.png','2023-05-03','2','2023-05-03 23:56:46','2023-05-03 23:56:46'),(103,1,'33333','dddd','Laki-Laki','ddd','2023-05-04','dd','ddd','Kristen Protestan','Surat Keterangan Usaha','33333-5301050205960004-Berkas Lamaran.pdf','2023-05-04','2','2023-05-04 00:13:13','2023-05-04 00:13:13');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Dexi Eluama','dexi@example.com','2023-03-07 09:21:39','1','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','VManuDTJIhzv93sreVY7AUx9eZ8u0LpyeY5Cdm0WB7pNA0QUQiZKK2RRTMc7','2023-03-07 09:21:39','2023-03-07 09:21:39'),(2,'Afonco Da Costa','costa@example.com','2023-03-07 09:21:39','2','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fuwbRDqOVGFwRXIKZpr8vNFmyaLHjTAUmUx50Q2cHbyKmtRJKdgv1C9DJegX','2023-03-07 09:21:39','2023-03-07 09:21:39'),(3,'Maria Mali','nona@example.net','2023-03-07 09:21:39','3','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','DnO9SaTHHMlH7EmA4ewHe0LNhD7WtBRhDmtAn5tqsXtmO2AlAISeVFpKJEae','2023-03-07 09:21:39','2023-03-07 09:21:39');
