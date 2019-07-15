-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 06:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `tim_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tanding` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`deleted_at`, `id`, `tim_1`, `tim_2`, `score`, `tanggal`, `jam_tanding`, `tempat`, `status`, `created_at`, `updated_at`) VALUES
(NULL, 1, 'Ghewor FC', 'Siol FC', '1 - 0', '2019-07-15', '15:00', 'Lapangan Yos Sudarso', 'selesai', '2019-07-15 09:00:41', '2019-07-15 09:04:36'),
('2019-07-15 09:12:47', 2, 'Anggra FC', 'Garong FC', '0 - 2', '2019-07-16', '15:00', 'Lapangan Yos Sudarso', 'selesai', '2019-07-15 09:01:15', '2019-07-15 09:12:47'),
(NULL, 3, 'Garong FC', 'Ranger FC', '0 - 0', '2019-07-17', '15:00', 'Lapangan Yos Sudarso', 'menunggu', '2019-07-15 09:01:55', '2019-07-15 09:01:55'),
(NULL, 4, 'Siol FC', 'Garong FC', '0 - 0', '2019-07-18', '15:00', 'Lapangan Yos Sudarso', 'menunggu', '2019-07-15 09:02:22', '2019-07-15 09:02:22'),
('2019-07-15 09:07:05', 5, 'Ghewor FC', 'Anggra FC', '0 - 0', '2019-07-19', '16:00', 'Lapangan Yos Sudarso', 'menunggu', '2019-07-15 09:03:15', '2019-07-15 09:07:05'),
(NULL, 6, 'Ranger FC', 'Siol FC', '0 - 2', '2019-07-19', '14:00', 'Lapangan Dewi Sri', 'bertanding', '2019-07-15 09:11:28', '2019-07-15 09:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_04_155212_create_users', 1),
(2, '2019_07_04_160147_create_tim', 1),
(3, '2019_07_04_160452_create_pemain', 1),
(4, '2019_07_04_160607_create_jadwal', 1),
(5, '2019_07_10_160549_tim_pertandingan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_punggung` int(11) NOT NULL,
  `nama_tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`deleted_at`, `id`, `nama_pemain`, `no_punggung`, `nama_tim`, `created_at`, `updated_at`) VALUES
(NULL, 1, 'Afi Makarim', 12, 'Ghewor FC', '2019-07-15 08:46:08', '2019-07-15 08:46:08'),
(NULL, 2, 'Hadi', 10, 'Ghewor FC', '2019-07-15 08:46:24', '2019-07-15 08:46:24'),
(NULL, 3, 'Tohir', 5, 'Ghewor FC', '2019-07-15 08:46:38', '2019-07-15 08:46:38'),
(NULL, 5, 'rudi widodo', 4, 'Siol FC', '2019-07-15 09:13:47', '2019-07-15 09:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaTim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`deleted_at`, `id`, `namaTim`, `asal`, `created_at`, `updated_at`) VALUES
(NULL, 1, 'Ghewor FC', 'kaligangsa', '2019-07-15 08:45:01', '2019-07-15 08:45:01'),
(NULL, 2, 'Siol FC', 'krandon', '2019-07-15 08:45:13', '2019-07-15 08:45:13'),
(NULL, 3, 'Anggra FC', 'cabawan', '2019-07-15 08:45:27', '2019-07-15 08:45:27'),
('2019-07-15 08:45:45', 4, 'asi', 'asdasd', '2019-07-15 08:45:34', '2019-07-15 08:45:45'),
(NULL, 5, 'Garong FC', 'margadana', '2019-07-15 08:59:32', '2019-07-15 09:00:10'),
(NULL, 6, 'Ranger FC', 'keturen', '2019-07-15 09:00:05', '2019-07-15 09:00:05'),
('2019-07-15 09:14:26', 7, 'Agung FC', 'kramat', '2019-07-15 09:13:15', '2019-07-15 09:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `timpertandingan`
--

CREATE TABLE `timpertandingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaTim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$zR4EFScqx2BSnhDrhwwyUuCM9Ptvt93i76BZnfAJlNg1qqI71pOs6', NULL, '2019-07-15 08:58:40', '2019-07-15 08:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timpertandingan`
--
ALTER TABLE `timpertandingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `timpertandingan`
--
ALTER TABLE `timpertandingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
