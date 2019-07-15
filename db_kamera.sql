-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 03:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kamera` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `id_kamera`, `nama`, `email`, `alamat`, `nohp`, `konfirmasi`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 4, 'cici', 'cici@gmail.com', 'tegal', '088383283', '1', '0', NULL, NULL, '2019-07-14 00:03:03', '2019-07-15 05:26:47'),
(5, 6, 'lili', 'lili@gmail.com', 'lebeteng', '085538890078', '1', '0', NULL, NULL, '2019-07-15 05:24:23', '2019-07-15 05:30:12'),
(6, 7, 'isqi', 'isqi@gmail.com', 'tegal', '082289776609', '1', '0', NULL, NULL, '2019-07-15 05:25:03', '2019-07-15 06:04:19'),
(7, 10, 'kristina', 'kristina@gmail.com', 'tarub', '085566785545', '1', '1', NULL, NULL, '2019-07-15 05:25:56', '2019-07-15 05:30:18'),
(8, 9, 'cici', 'cici@gmail.com', 'tarub', '0855667888876', '1', '1', NULL, NULL, '2019-07-15 05:26:33', '2019-07-15 05:30:22'),
(9, 7, 'ahmad', 'ahmad@gmail.com', 'tegal', '08587799743', '1', '1', NULL, NULL, '2019-07-15 06:03:10', '2019-07-15 06:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `kameras`
--

CREATE TABLE `kameras` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kamera` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `harga` int(11) NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kameras`
--

INSERT INTO `kameras` (`id`, `nama_kamera`, `tipe`, `foto`, `harga`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'asda', 'adsda', 'kamera/B2pzK6A6kWHuCYd6YikaHI0DVqGukybIebX42Ccw.jpeg', 5000000, '0', NULL, NULL, '2019-07-14 00:01:41', '2019-07-15 04:25:08'),
(5, 'Canon', '1200D', 'kamera/dFOyDJbKh7F1Nc4Rwlgxgt2D01dfo1ZbxEDi68ei.jpeg', 50000, '1', NULL, NULL, '2019-07-15 04:33:38', '2019-07-15 04:34:34'),
(6, 'Canon', '1300D', 'kamera/6wwwTK7whjHxdRGVf0ykwmxAEfz5DeMbhpmj53lH.jpeg', 85000, '1', NULL, NULL, '2019-07-15 04:34:12', '2019-07-15 04:34:12'),
(7, 'Nikon', 'd7200', 'kamera/jUqmH3Iu0ROi965MCodP5sp6v3aub8q2YVSshqU4.jpeg', 100000, '1', NULL, NULL, '2019-07-15 04:35:23', '2019-07-15 04:35:23'),
(8, 'Nikon', 'd3100', 'kamera/kXl1K9jJsO5iXKVlWaMXeD3h7Q85ZXtaHzLjq5Yq.jpeg', 50000, '1', NULL, NULL, '2019-07-15 04:35:53', '2019-07-15 04:35:53'),
(9, 'Fujifilm', 'xa2', 'kamera/8FJLoZoU5uoBXmDFVw9mzlLHvJ2Y5vdmXNRfhXTb.jpeg', 75000, '1', NULL, NULL, '2019-07-15 04:36:39', '2019-07-15 04:36:39'),
(10, 'Fujifilm', 'xa10', 'kamera/xBiiDZw4fTIwYCWqNQaLG56zsRNoJMxFdqYigU1r.jpeg', 120000, '1', NULL, NULL, '2019-07-15 04:37:04', '2019-07-15 04:37:04'),
(11, 'Canon', '600D', 'kamera/m92X908NoM8cIq96TgyDOV1vlLqa3LS0vIHShH0y.jpeg', 110000, '1', NULL, NULL, '2019-07-15 04:38:31', '2019-07-15 04:38:31'),
(12, 'Kamera', '1300D', 'kamera/yxro0Oreup6yiK5AC0jLch9d07APP4GGX19wtz9M.png', 50000, '0', NULL, NULL, '2019-07-15 05:59:17', '2019-07-15 06:00:10');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_14_040704_create_kameras_table', 1),
(4, '2019_07_14_040723_create_customers_table', 1),
(5, '2019_07_14_053441_add_konfirmasi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kristina', 'kristina@gmail.com', NULL, '$2y$10$P898fbCwq.znEkBeoU6gI.jeUM8TK/iKQwfmSDZnKDc4rMFxmh2FS', NULL, '2019-07-13 22:54:06', '2019-07-13 22:54:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id_kamera_foreign` (`id_kamera`);

--
-- Indexes for table `kameras`
--
ALTER TABLE `kameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kameras`
--
ALTER TABLE `kameras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_id_kamera_foreign` FOREIGN KEY (`id_kamera`) REFERENCES `kameras` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
