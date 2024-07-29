-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:29 AM
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
-- Database: `radit_thy_final_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `publisher_year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `genre`, `publisher_year`, `created_at`, `updated_at`) VALUES
(1, 'Book 1', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:18', '2024-06-07 02:19:18'),
(2, 'Book 2', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:24', '2024-06-07 02:19:24'),
(3, 'Book 3', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:41', '2024-06-07 02:19:41'),
(4, 'Book 4', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:45', '2024-06-07 02:19:45'),
(5, 'Book 5', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:48', '2024-06-07 02:19:48'),
(6, 'Book 6', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:52', '2024-06-07 02:19:52'),
(7, 'Book 7', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:56', '2024-06-07 02:19:56'),
(8, 'Book 8', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:19:59', '2024-06-07 02:19:59'),
(9, 'Book 9', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:20:03', '2024-06-07 02:20:03'),
(10, 'Book 10', 'Fisto', 'Technology', '20/June/2024', '2024-06-07 02:20:07', '2024-06-07 02:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `record_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_07_070450_create_books_table', 1),
(6, '2024_06_07_071820_create_borrow_records_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user 1', 'user1@gmail.com', NULL, NULL, '2024-06-07 02:20:42', '2024-06-07 02:20:42'),
(2, 'user 2', 'user2@gmail.com', NULL, NULL, '2024-06-07 02:20:53', '2024-06-07 02:20:53'),
(4, 'user 3', 'user3@gmail.com', NULL, NULL, '2024-06-07 02:21:06', '2024-06-07 02:21:06'),
(5, 'user 4', 'user4@gmail.com', NULL, NULL, '2024-06-07 02:21:15', '2024-06-07 02:21:15'),
(6, 'user 5', 'user5@gmail.com', NULL, NULL, '2024-06-07 02:21:22', '2024-06-07 02:21:22'),
(7, 'user 6', 'user6@gmail.com', NULL, NULL, '2024-06-07 02:21:29', '2024-06-07 02:21:29'),
(8, 'user 7', 'user7@gmail.com', NULL, NULL, '2024-06-07 02:21:35', '2024-06-07 02:21:35'),
(9, 'user 8', 'user8@gmail.com', NULL, NULL, '2024-06-07 02:21:45', '2024-06-07 02:21:45'),
(10, 'user 9', 'user9@gmail.com', NULL, NULL, '2024-06-07 02:21:57', '2024-06-07 02:21:57'),
(11, 'user 10', 'user10@gmail.com', NULL, NULL, '2024-06-07 02:22:04', '2024-06-07 02:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `borrow_records_book_id_foreign` (`book_id`),
  ADD KEY `borrow_records_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `record_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD CONSTRAINT `borrow_records_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrow_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
