-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2021 at 11:47 PM
-- Server version: 5.7.35-0ubuntu0.18.04.2
-- PHP Version: 7.2.24-0ubuntu0.18.04.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stripeproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `session_id`, `cart_id`, `order_id`, `product_id`, `product_name`, `product_image`, `unit_price`, `qty`, `price`, `total_price`, `name`, `email`, `status`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', NULL, 6, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', NULL, NULL, 'APPROVED', NULL, '2021-09-29 11:57:24', NULL),
(2, 1, 'irPjIjmpMQIusBbax3ACmDj21uSlQnzYiwbKpV9R', NULL, 8, 4, 'Mens Casual Slim Fit', 'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg', '15.99', 1, '15.99', '15.99', NULL, NULL, 'APPROVED', NULL, '2021-09-29 12:08:03', NULL),
(3, 1, 'xlkI5JDzWBhYsoPF2txSmbWrx2dWCejyFL9afMNp', NULL, 10, 6, 'Solid Gold Petite Micropave ', 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg', '168.00', 1, '168.00', '168.00', NULL, NULL, 'APPROVED', NULL, '2021-09-29 12:14:53', NULL),
(4, 1, 'xlkI5JDzWBhYsoPF2txSmbWrx2dWCejyFL9afMNp', NULL, 11, 6, 'Solid Gold Petite Micropave ', 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg', '168.00', 1, '168.00', '168.00', NULL, NULL, 'APPROVED', NULL, '2021-09-29 12:35:11', NULL),
(5, 1, 'HiC2AHVrhAE7i8RcAdgdJ3sfDENh7IgNjEtJo1b1', NULL, 12, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', NULL, NULL, 'APPROVED', NULL, '2021-09-29 12:43:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_temps`
--

CREATE TABLE `cart_temps` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'product',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_temps`
--

INSERT INTO `cart_temps` (`id`, `session_id`, `user_id`, `product_id`, `product_name`, `product_image`, `unit_price`, `qty`, `price`, `total_price`, `type`, `name`, `email`, `created_at`, `updated_at`) VALUES
(9, '7uFQAewFHjBPhIXBonQDQiDupqZCoeitdCXgWcA4', NULL, 3, 'Mens Cotton Jacket', 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg', '55.99', 1, '55.99', '55.99', 'product', NULL, NULL, '2021-09-29 00:58:37', NULL),
(10, '7uFQAewFHjBPhIXBonQDQiDupqZCoeitdCXgWcA4', NULL, 3, 'Mens Cotton Jacket', 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg', '55.99', 1, '55.99', '55.99', 'product', NULL, NULL, '2021-09-29 01:00:03', NULL),
(11, '7uFQAewFHjBPhIXBonQDQiDupqZCoeitdCXgWcA4', NULL, 3, 'Mens Cotton Jacket', 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg', '55.99', 1, '55.99', '55.99', 'product', NULL, NULL, '2021-09-29 01:02:11', NULL),
(12, 'umtnrFHXDOVcrzSQG5sUi4v2iDev4t7923eTgAeI', NULL, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 3, '109.95', '329.85', 'product', NULL, NULL, '2021-09-29 01:34:33', NULL),
(13, 'umtnrFHXDOVcrzSQG5sUi4v2iDev4t7923eTgAeI', NULL, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', 'product', NULL, NULL, '2021-09-29 07:00:08', NULL),
(14, 'V5ytn9sJNkdR9BllgqWvJh8hotFlm0esMfaNTXE6', NULL, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', 'product', NULL, NULL, '2021-09-29 11:46:26', NULL),
(15, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', NULL, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', 'product', NULL, NULL, '2021-09-29 11:48:34', NULL),
(16, 'irPjIjmpMQIusBbax3ACmDj21uSlQnzYiwbKpV9R', NULL, 4, 'Mens Casual Slim Fit', 'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg', '15.99', 1, '15.99', '15.99', 'product', NULL, NULL, '2021-09-29 12:07:50', NULL),
(17, 'xlkI5JDzWBhYsoPF2txSmbWrx2dWCejyFL9afMNp', NULL, 6, 'Solid Gold Petite Micropave ', 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg', '168.00', 1, '168.00', '168.00', 'product', NULL, NULL, '2021-09-29 12:13:37', NULL),
(18, 'HiC2AHVrhAE7i8RcAdgdJ3sfDENh7IgNjEtJo1b1', NULL, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', '109.95', 1, '109.95', '109.95', 'product', NULL, NULL, '2021-09-29 12:43:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `session_id`, `total`, `grand_total`, `name`, `email`, `address`, `order_status`, `payment_mode`, `payment_status`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 'sanjaykumar02.gh@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 11:54:43', NULL),
(2, 2, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 'sanjaykumar02.gh@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 11:55:04', NULL),
(3, 2, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 'sanjaykumar02.gh@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 11:56:18', NULL),
(4, 2, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 'sanjaykumar02.gh@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 11:56:32', NULL),
(5, 1, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 11:56:43', NULL),
(6, 1, 'llBR8Bt26ti2ZVwR3xgNH7arKD3OfqOfcK2CCoZM', '109.95', '109.95', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Paid', NULL, '2021-09-29 11:57:24', NULL),
(7, 1, 'irPjIjmpMQIusBbax3ACmDj21uSlQnzYiwbKpV9R', '0.00', '0.00', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 12:02:01', NULL),
(8, 1, 'irPjIjmpMQIusBbax3ACmDj21uSlQnzYiwbKpV9R', '15.99', '15.99', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Paid', NULL, '2021-09-29 12:08:03', NULL),
(10, 1, 'xlkI5JDzWBhYsoPF2txSmbWrx2dWCejyFL9afMNp', '168.00', '168.00', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Pending', NULL, '2021-09-29 12:14:53', NULL),
(11, 1, 'xlkI5JDzWBhYsoPF2txSmbWrx2dWCejyFL9afMNp', '168.00', '168.00', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Paid', NULL, '2021-09-29 12:35:10', NULL),
(12, 1, 'HiC2AHVrhAE7i8RcAdgdJ3sfDENh7IgNjEtJo1b1', '109.95', '109.95', 'Test', 's@gmail.com', NULL, 'Pending', 'online', 'Paid', NULL, '2021-09-29 12:43:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 's@gmail.com', '0', '2021-09-29 10:21:49', NULL),
(2, 'Test', 'sanjaykumar02.gh@gmail.com', '0', '2021-09-29 11:53:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_temps`
--
ALTER TABLE `cart_temps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart_temps`
--
ALTER TABLE `cart_temps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
