-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 06:00 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplecrud`
--

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
(3, '2019_10_16_161759_create_sample_data_table', 2);

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
-- Table structure for table `sample_data`
--

CREATE TABLE `sample_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlpn` bigint(19) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sample_data`
--

INSERT INTO `sample_data` (`id`, `name`, `email`, `tgl_lahir`, `no_tlpn`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(1, 'apip hidayat', 'apiphidayatal@gmail.com', '1995-11-11', 868877788, 'laki-laki', '', NULL, NULL),
(20, 'apip apip', 'apiphiday@gmail.com', '1995-11-11', 85648222320, 'laki-laki', '', NULL, NULL),
(22, 'afif hidayat alhabsi', 'admin@gmail.com', '1995-11-11', 85648222320, 'laki-laki', '1223298599.png', '2019-10-17 16:41:12', '2019-10-17 16:41:12'),
(23, 'daria', 'pieapip@gmail.com', '1997-11-11', 85648222320, 'perempuan', '1899810859.png', '2019-10-17 16:42:54', '2019-10-17 16:42:54'),
(24, 'lalal laa', 'apip@apiphidayat.com', '1993-01-12', 1827665748583, 'perempuan', '1347057159.png', '2019-10-17 19:15:41', '2019-10-18 15:56:24'),
(25, 'aaa', 'admin@gmail.com', '1993-11-11', 6232628427247, 'laki-laki', '1850864878.png', '2019-10-18 18:48:21', '2019-10-18 18:48:21'),
(26, 'gagag', 'admin@gmail.com', '1997-09-09', 62238164124612, 'laki-laki', '84930304.png', '2019-10-18 20:18:11', '2019-10-18 20:18:11'),
(27, 'afif hidayat alhabsi', 'admin@gmail.com', '1111-11-11', 85648222320, 'laki-laki', '963799624.png', '2019-10-18 20:27:38', '2019-10-18 20:27:38'),
(29, 'sssaaaaaaaaaaa', 'apiphidayatal@gmail.com', '1111-01-22', 85648222320, 'laki-laki', '1536790432.png', '2019-10-19 00:50:02', '2019-10-20 00:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'afif hidayat', 'admin@gmail.com', '$2y$10$dswuPvN5EwE9mzTiHMPhSu9VKTK4p5VKlNcvP3zRop8Azn3ihdDNq', '55S2ba7ZsHCIoq9v2fcnUFsZrUHtHsZC4CibCiZj6PPJxA3RmNh1EFRwe5Sb', '2019-10-15 18:05:52', '2019-10-15 18:05:52');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sample_data`
--
ALTER TABLE `sample_data`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sample_data`
--
ALTER TABLE `sample_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
