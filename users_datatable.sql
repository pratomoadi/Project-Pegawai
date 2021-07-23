-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 02:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_07_22_030753_create_time_offs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_offs`
--

CREATE TABLE `time_offs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_offs`
--

INSERT INTO `time_offs` (`id`, `nomor_induk`, `tanggal_cuti`, `lama_cuti`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'IP06001', '2020-08-02', 2, 'Acara Keluarga', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(2, 'IP06001', '2020-08-18', 2, 'Anak Sakit', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(3, 'IP06006', '2020-08-20', 1, 'Nenek Sakit', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(4, 'IP06007', '2020-08-23', 1, 'Sakit', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(5, 'IP06004', '2020-08-29', 5, 'Menikah', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(6, 'IP06003', '2020-08-30', 2, 'Acara Keluarga', '2021-07-22 10:26:38', '2021-07-22 10:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nomor_induk`, `nama`, `alamat`, `tanggal_lahir`, `tanggal_bergabung`, `created_at`, `updated_at`) VALUES
(1, 'IP06001', 'Agus', 'Jln Gaja Mada no 12, Surabaya', '1980-01-11', '2005-08-05', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(2, 'IIP06002', 'Amin', 'Jln Imam Bonjol no 11, Mojokerto', '1977-09-03', '2005-08-07', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(3, 'IP06003', 'Yusuf', 'Jln A Yani Raya 15 No 14 Malang', '1973-08-09', '2006-08-07', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(4, 'IP06004', 'Alyssa', 'Jln Bungur Sari V n 166, Bandung', '1983-03-18', '2006-09-06', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(5, 'IP06005', 'Maulana', 'Jln Candi Agung, No 78 Gg 5, Jakarta', '1978-11-10', '2006-09-10', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(6, 'IP06006', 'Agfika', 'Jln Nangka, Jakarta Timur', '1979-02-07', '2007-01-02', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(7, 'IP06007', 'James', 'Jln Merpati, 8 Surabaya', '1989-05-18', '2007-04-04', '2021-07-22 10:26:38', '2021-07-22 10:26:38'),
(8, 'IP06008', 'Octavanus', 'Jln A Yani 17, B 08 Sidoarjo', '1985-04-14', '2007-05-19', '2021-07-22 10:26:38', '2021-07-22 10:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_offs`
--
ALTER TABLE `time_offs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_time_off_no_id` (`nomor_induk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nomor_induk_unique` (`nomor_induk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time_offs`
--
ALTER TABLE `time_offs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `time_offs`
--
ALTER TABLE `time_offs`
  ADD CONSTRAINT `fk_user_time_off_no_id` FOREIGN KEY (`nomor_induk`) REFERENCES `users` (`nomor_induk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
