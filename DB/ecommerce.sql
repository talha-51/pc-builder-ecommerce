-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2025 at 07:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `added_by_id`, `updated_by_id`) VALUES
(1, 'Intel', 'images/brands/1762680246.jpg', 1, NULL),
(2, 'AMD', 'images/brands/1762680289.jpg', 1, NULL),
(3, 'Nvidia', 'images/brands/1762680339.jpg', 1, NULL),
(4, 'MSI', 'images/brands/1762680359.jpg', 1, 2),
(6, 'HP', 'images/brands/1762681068.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gamil.com|127.0.0.1', 'i:1;', 1762408785),
('laravel-cache-admin@gamil.com|127.0.0.1:timer', 'i:1762408785;', 1762408785),
('laravel-cache-asd@asdf|127.0.0.1', 'i:3;', 1762321238),
('laravel-cache-asd@asdf|127.0.0.1:timer', 'i:1762321238;', 1762321238),
('laravel-cache-asdf@afd|127.0.0.1', 'i:1;', 1762320027),
('laravel-cache-asdf@afd|127.0.0.1:timer', 'i:1762320027;', 1762320027),
('laravel-cache-asdf@dsaf|127.0.0.1', 'i:1;', 1762323985),
('laravel-cache-asdf@dsaf|127.0.0.1:timer', 'i:1762323985;', 1762323985),
('laravel-cache-asdf@fdsa|127.0.0.1', 'i:1;', 1762320280),
('laravel-cache-asdf@fdsa|127.0.0.1:timer', 'i:1762320280;', 1762320280),
('laravel-cache-asdfa@asdf|127.0.0.1', 'i:1;', 1762321316),
('laravel-cache-asdfa@asdf|127.0.0.1:timer', 'i:1762321316;', 1762321316),
('laravel-cache-customer1@gmail.com|127.0.0.1', 'i:5;', 1762339320),
('laravel-cache-customer1@gmail.com|127.0.0.1:timer', 'i:1762339320;', 1762339320);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `added_by_id`, `updated_by_id`) VALUES
(1, 'PC Components', 'images/categories/1762681983.jpg', 2, 1),
(2, 'Accessories', 'images/categories/1762682380.jpg', 2, 1),
(5, 'Networking', 'images/categories/1762682701.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_06_060602_create_slider_table', 2),
(5, '2025_11_06_062821_create_sliders_table', 3),
(6, '2025_11_06_071548_create_sliders_table', 4),
(7, '2025_11_08_063843_create_categories_table', 5),
(8, '2025_11_08_064322_create_sub_categories_table', 6),
(9, '2025_11_08_064648_create_categories_table', 7),
(10, '2025_11_08_064951_create_products_table', 8),
(11, '2025_11_08_065343_create_settings_table', 9),
(12, '2025_11_08_101551_create_brands_table', 10),
(13, '2025_11_08_103036_create_sub_categories_table', 11),
(14, '2025_11_08_115758_create_sub_categories_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `sub_id`, `name`, `price`, `quantity`, `image`, `added_by_id`, `updated_by_id`) VALUES
(2, 1, 3, 'Intel Core i7', '1000', 20, 'images/products/1762667442.jpg', 1, NULL),
(3, 1, 3, 'Intel Core i5', '700', 75, 'images/products/1762667468.jpg', 1, NULL),
(4, 1, 4, 'PNY RTX-5080', '800', 45, 'images/products/1762667558.jpg', 1, NULL),
(5, 1, 4, 'Asus RTX-5070Ti', '550', 42, 'images/products/1762667613.png', 1, NULL),
(6, 1, 3, 'Ryzen 5-9600x', '900', 84, 'images/products/1762667679.webp', 1, NULL),
(8, 1, 5, 'MSI MPG-Z590', '670', 53, 'images/products/1762668206.png', 1, NULL),
(9, 2, 6, 'Mouse 1', '750', 23, 'images/products/1762672776.png', 1, NULL),
(10, 2, 6, 'Mouse 2', '450', 44, 'images/products/1762672828.webp', 1, NULL),
(11, 2, 6, 'Mouse 3', '50', 28, 'images/products/1762672871.png', 1, NULL),
(12, 2, 7, 'Keyboard 1', '200', 77, 'images/products/1762672898.jpg', 1, NULL),
(13, 2, 8, 'Headphone 1', '770', 15, 'images/products/1762672935.png', 1, NULL),
(14, 5, 9, 'Router 1', '100', 59, 'images/products/1762677599.jpg', 1, NULL),
(15, 5, 9, 'Router 2', '350', 88, 'images/products/1762677630.jpg', 1, NULL),
(16, 5, 9, 'Router 3', '580', 23, 'images/products/1762677682.jpg', 1, NULL),
(17, 5, 10, 'ONU 1', '430', 33, 'images/products/1762677716.webp', 1, NULL),
(19, 5, 11, 'Starlink', '999', 21, 'images/products/1762681631.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('awKYGz9CTGau9ovatuRIZecmerFqsidKcWrngl4b', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2htSFFoazVrdkF2WTBlSTFnQndCdnlkR0xsSEk0QVdYQkpJckp6MSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxMDoiaG9tZS5pbmRleCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762841569);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `company_name`, `email`, `contact_no`) VALUES
(4, 'images/logos/1762838609.png', 'asd', 'EZone', 'ezone@gmail.com', '+8801212121212'),
(5, 'images/logos/1762838712.png', 'qqq', 'RM IT BD', 'rmitbd@gmail.com', '+8801234343434');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `added_by_id`, `updated_by_id`) VALUES
(13, 'slider 1', 'images/sliders/1762683685.jpg', 1, 1),
(14, 'slider 2', 'images/sliders/1762683699.jpg', 1, 1),
(17, 'slider 3', 'images/sliders/1762683714.jpg', 2, 1),
(18, 'slider 4', 'images/sliders/1762683728.jpg', 2, 1),
(19, 'slider 5', 'images/sliders/1762683751.jpg', 1, NULL),
(20, 'slider 6', 'images/sliders/1762683840.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `image`, `added_by_id`, `updated_by_id`) VALUES
(3, 1, 'CPU', 'images/sub-categories/1762767928.jpg', 2, 2),
(4, 1, 'GPU', 'images/sub-categories/1762767941.jpg', 2, 2),
(5, 1, 'Motherboard', 'images/sub-categories/1762767952.png', 2, 2),
(6, 2, 'Mouse', 'images/sub-categories/1762767968.png', 2, 2),
(7, 2, 'Keyboard', 'images/sub-categories/1762767976.jpg', 2, 2),
(8, 2, 'Headphone', 'images/sub-categories/1762767987.png', 2, 2),
(9, 5, 'Router', 'images/sub-categories/1762767997.jpg', 2, 2),
(10, 5, 'ONU', 'images/sub-categories/1762768036.webp', 2, 2),
(11, 5, 'Starlink', 'images/sub-categories/1762768043.jpg', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$cOg9FZNBGD5Qfqx.b5vM3ui3jmniPbIHvOvxZFkpvgyuoQktHM4tK', 'eUudqPDtTO9pZ69olU7IvH36Y4RH7p8dwZYPlWXb9NBSGfJVOOV0DW7Z0gV7', '2025-11-04 01:30:58', '2025-11-04 02:35:04'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$iXAud1nB3DAYgR7WU6JJIeWHj7aqkTWFeAU6br639mC82sQ035K4O', NULL, '2025-11-05 00:33:23', '2025-11-05 00:33:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
