-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fannahtechstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(8, 10, 3, 1, '2023-06-30 21:08:44', '2023-06-30 21:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_06_28_123917_create_products_table', 1),
(14, '2023_06_28_123918_create_orders_table', 1),
(15, '2023_06_28_123925_create_order_items_table', 1),
(16, '2023_06_28_211819_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `country`, `province`, `city`, `address`, `total_price`, `created_at`, `updated_at`) VALUES
(5, 10, 'Amin', 'maroc', 'darra tafilalt', 'midelt', 'xxxxxxxxxxxxxxxxxxxxxxxxx', '69.99', '2023-06-30 20:03:48', '2023-06-30 20:03:48'),
(6, 10, 'amin', 'maroc', 'darra tafilalt', 'midelt', '01.rue exelsuior .tadawt . midelt', '129.99', '2023-06-30 20:43:13', '2023-06-30 20:43:13'),
(7, 11, 'najib', 'maroc', 'RSK', 'sale', 'ccccccccccccccccccc', '419.98', '2023-06-30 21:09:40', '2023-06-30 21:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 5, 7, 1, '2023-06-30 20:03:48', '2023-06-30 20:03:48'),
(7, 6, 8, 1, '2023-06-30 20:43:13', '2023-06-30 20:43:13'),
(8, 7, 7, 1, '2023-06-30 21:09:40', '2023-06-30 21:09:40'),
(9, 7, 14, 1, '2023-06-30 21:09:40', '2023-06-30 21:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `brand`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Intel Core i7 Processor', 'Cpu', 'Intel', 'High-performance processor for gaming and multitasking', '299.99', 5, 'https://res.cloudinary.com/dlsnks7c3/image/upload/v1688045933/techstore/nmxfbys8s69llcgcnvf9.jpg', '2023-06-28 21:29:02', '2023-06-29 12:38:53'),
(4, 'Nvidia GeForce RTX 3080', 'Gpu', 'Nvidia', 'Powerful graphics card for smooth gaming experience', '799.99', 3, 'https://res.cloudinary.com/dlsnks7c3/image/upload/v1688046032/techstore/cqzjeqe3cfwadjvjm5kq.jpg', '2023-06-28 21:29:02', '2023-06-29 12:40:32'),
(5, 'AMD Ryzen 9 Processor', 'Cpu', 'Amd', 'Advanced processor for high-end computing tasks', '499.99', 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1Qa9GR_IyPrBAAAaaJ2I9mD7kJcY7M8sPBw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(6, 'Logitech Wireless Keyboard', 'Keyboard', 'Logitech', 'Wireless keyboard with ergonomic design', '79.99', 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgeDc7C9hnxy4ywFdXWcJYNlmzP_AsNcyPlg&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(7, 'SteelSeries Gaming Mouse', 'Mouse', 'SteelSeries', 'Gaming mouse with high precision and customizable buttons', '69.99', 10, 'https://media.steelseriescdn.com/thumbs/filer_public/79/38/793810c0-be38-4840-ab60-0657e7ecd973/purchase-gallery-650wl-top.png__1920x1080_crop-fit_optimize_subsampling-2.png', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(8, 'Razer Mechanical Keyboard', 'Keyboard', 'Razer', 'Mechanical gaming keyboard with customizable RGB lighting', '129.99', 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0ygFWjzBGfISlBXJu79ySxhQFLD_78q-f3Q&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(9, 'Asrock ATX Motherboard', 'Motherboard', 'Asrock', 'ATX motherboard with multiple expansion slots', '149.99', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsSxNatvlF_1Vl-LOyL6jpgJTHeDWlwekT_w&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(10, 'Kingston 1TB SSD', 'Ssd', 'Kingston', '1TB solid-state drive for fast and reliable storage', '199.99', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoe-wUs3q6q-hBfYgmMKLjnmt8I-nC3OOxWw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(12, 'Intel Core i9 Processor', 'Cpu', 'Intel', 'Top-of-the-line processor for extreme computing power', '699.99', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHTqZ0_MD859FUGgMr9f7TPWMvfBj89fUWIg&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(13, 'Nvidia GeForce RTX 3090', 'Gpu', 'Nvidia', 'Ultra-powerful graphics card for 4K gaming and content creation', '1499.99', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNdJPfHgbQNQZGdz2XX1xuadIAFZvLOGZaOQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(14, 'AMD Ryzen 7 Processor', 'Cpu', 'Amd', 'High-performance processor for gaming and productivity', '349.99', 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2R4bU6jT8KhjScrH2Vpanf-dPAm32gQqQNQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(15, 'Logitech Wireless Mouse', 'Mouse', 'Logitech', 'Wireless mouse with ergonomic design and long battery life', '49.99', 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPJimQ_U-3TIKfzrDK12P5w4vVmuMBlhdscw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(16, 'SteelSeries Gaming Keyboard', 'Keyboard', 'SteelSeries', 'Gaming keyboard with customizable lighting effects', '99.99', 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCGAkK7FPQ_AChlhFOvpnsqyjMmk6m_M-dIQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(17, 'Razer Gaming Mouse', 'Mouse', 'Razer', 'Advanced gaming mouse with high DPI and programmable buttons', '79.99', 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbhwhM-mv1g-NNXiZhEWL1GbD_ZhaQ_N20kA&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(18, 'Asrock Micro-ATX Motherboard', 'Motherboard', 'Asrock', 'Micro-ATX motherboard for compact PC builds', '99.99', 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROz82TZpSCitff0ZwZ7fRnyLHeYxO-9DEZSg&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(19, 'Kingston 16GB RAM', 'Ram', 'Kingston', '16GB DDR4 RAM for smooth multitasking', '89.99', 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqK9q9D6ZO67NLDKsncxBYVpf2ivAhnhzbNw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(21, 'Intel Core i5 Processor', 'Cpu', 'Intel', 'Mid-range processor for everyday computing tasks', '199.99', 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyBhNWhc-Y7XaCrZin28cfbQzkwvlfzT1HHw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(22, 'Nvidia GeForce GTX 1660', 'Gpu', 'Nvidia', 'Graphics card for smooth 1080p gaming', '299.99', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4lSrmdj2qJCmPI_hFLJuA3RVn-ZCwY8B5yQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(23, 'AMD Ryzen 5 Processor', 'Cpu', 'Amd', 'Powerful processor for gaming and content creation', '249.99', 7, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX_Ni7_5F1F8nMRArGDB31Xju28uuEPQs69g&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(24, 'Logitech Gaming Headset', 'Headset', 'Logitech', 'Gaming headset with surround sound and noise-canceling microphone', '99.99', 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVUaVurCWa8w6wc8-W_uTeeW3xgzwt4dAZ4Q&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(25, 'SteelSeries Mechanical Keyboard', 'Keyboard', 'SteelSeries', 'Mechanical gaming keyboard with customizable switches', '149.99', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLaovh_fByMyzbK4_jYnKkaYgXm0n4JAmueQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(27, 'Asrock Mini-ITX Motherboard', 'Motherboard', 'Asrock', 'Mini-ITX motherboard for compact PC builds', '129.99', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlOy4yuwQQBYaeu0xHTJLrN-D_K569clg4Nw&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(28, 'Kingston 500GB SSD', 'Ssd', 'Kingston', '500GB solid-state drive for fast storage and data transfer', '99.99', 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRzanaDH0zkAwX5d64XRMe_f_bK57jYdEIHA&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(30, 'Intel Core i3 Processor', 'Cpu', 'Intel', 'Entry-level processor for basic computing needs', '99.99', 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9S6x3vdDUP_E7AqZbjK_v5G4XJNXuOFTgZQ&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02'),
(31, 'Nvidia GeForce GTX 1050 Ti', 'Gpu', 'Nvidia', 'Graphics card for casual gaming and multimedia', '199.99', 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeBmxsBVzZ-NxrikE4kPmPgN733Petpz9doA&usqp=CAU', '2023-06-28 21:29:02', '2023-06-28 21:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profileimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profileimage`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$10$QIzQqSRhlUUDkCwqxAvVUuugN7tO8qDkmYRrE78nr1C6w/t5BvWB.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 1, '2023-06-29 00:00:18', '2023-06-29 00:00:18'),
(4, 'admin', 'amal99@gmail.com', '$2y$10$dydQsj9JrktCNL9pdluoou5G/1Njg/VMiULSBBSOKtQ5WvKokCXsS', 'https://res.cloudinary.com/dlsnks7c3/image/upload/v1688005698/profile_images/re0bzujx8n3ipogel1ac.jpg', NULL, 0, '2023-06-29 00:43:41', '2023-06-29 01:28:18'),
(6, 'jjj', 'naji@gmail.com', '$2y$10$y5QOhogXG0Ila10qOFL8K.34Myn4Hi5glezGziWnWps/mvDCq2tA2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-29 00:44:56', '2023-06-29 00:44:56'),
(7, 'jjj', 'najib@xqc.com', '$2y$10$uX5Pk/wnmwKJq55Ep2J08OwKRn1DHS3FEPAw0OFCXaxN./H5Q2Utm', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-29 12:22:59', '2023-06-29 12:22:59'),
(8, 'najib', 'fannahoussama4@gmail.com', '$2y$10$ov03cKI7aP/O0T2l8NiB.uF7yAni1hY00LhxgO2g7dV1FusfQiUvq', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-29 13:00:50', '2023-06-29 13:00:50'),
(9, 'issam', 'issam@gmail.com', '$2y$10$cK76jaVjfyX3EU2/me3fBerKkLmRuUe5zE3NuVqzIVjPIjgv5PVMm', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-29 13:50:04', '2023-06-29 13:50:04'),
(10, 'Amin', 'amin@gmail.com', '$2y$10$zoqGYJ7RIxBpDzZeDp6eV.4Aqbmup0VwPLHjncelGEMiGcGor1Hg6', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-30 20:02:54', '2023-06-30 20:02:54'),
(11, 'najib', 'anas4@gmail.com', '$2y$10$/bJOMfCNC9WW.fO0RM3NGeglt0WqH7yzEgZhZ7DGM7kDhz.3SUmjS', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-30 21:09:02', '2023-06-30 21:09:02'),
(12, 'anas', 'anas@gmail.com', '$2y$10$dgG7IYkJlU3NZbQWB/yKAewq4TgBjfJa6DmQij48CrUPXBSN4xif2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU', NULL, 0, '2023-06-30 22:32:51', '2023-06-30 22:32:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
