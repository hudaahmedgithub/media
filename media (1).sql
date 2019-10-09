-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 12:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'angular', 1, '2019-10-05 16:06:54', '2019-10-05 16:06:54'),
(65, 'logically', 1, '2019-10-07 12:18:36', '2019-10-07 12:18:36'),
(66, 'laravel', 218, '2019-10-07 12:48:00', '2019-10-07 12:48:00'),
(67, 'chemical', 1, '2019-10-07 14:41:42', '2019-10-07 14:41:42'),
(68, 'network', 218, '2019-10-08 12:53:44', '2019-10-08 12:53:44'),
(69, 'newcat', 219, '2019-10-08 13:03:25', '2019-10-08 13:03:25'),
(70, 'structure', 218, '2019-10-09 02:50:47', '2019-10-09 02:50:47'),
(71, 'information', 220, '2019-10-09 05:28:22', '2019-10-09 05:28:22'),
(72, 'aasdfg', 218, '2019-10-09 09:21:07', '2019-10-09 09:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'new comment', 1, 618, '2019-10-07 12:29:46', '2019-10-07 12:29:46'),
(2, 'mycommmmmm', 1, 618, '2019-10-07 14:27:51', '2019-10-07 14:27:51'),
(3, 'this is beautify', 1, 621, '2019-10-07 14:43:39', '2019-10-07 14:43:39'),
(4, 'this is amazing', 1, 623, '2019-10-07 14:48:37', '2019-10-07 14:48:37'),
(5, 'this is amazing', 219, 635, '2019-10-08 10:12:41', '2019-10-08 10:12:41'),
(6, 'this is beautify', 1, 634, '2019-10-08 10:17:49', '2019-10-08 10:17:49'),
(7, 'this is commentt', 219, 636, '2019-10-08 13:04:37', '2019-10-08 13:04:37'),
(8, 'new comment', 218, 617, '2019-10-09 02:43:35', '2019-10-09 02:43:35'),
(9, 'this is my photo', 218, 618, '2019-10-09 02:45:50', '2019-10-09 02:45:50'),
(10, 'this is my photo', 218, 637, '2019-10-09 02:50:00', '2019-10-09 02:50:00'),
(11, 'wedrftgyhuj', 218, 637, '2019-10-09 09:20:40', '2019-10-09 09:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_1` int(10) UNSIGNED NOT NULL,
  `user_id_2` int(10) UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id_1`, `user_id_2`, `approved`, `created_at`, `updated_at`) VALUES
(46, 218, 1, 1, NULL, '2019-10-07 17:48:44'),
(51, 220, 218, 1, '2019-10-09 05:20:35', '2019-10-09 05:21:04'),
(52, 218, 220, 1, '2019-10-09 05:25:14', '2019-10-09 05:25:59'),
(53, 220, 1, 1, '2019-10-09 05:39:14', '2019-10-09 05:40:37'),
(54, 221, 218, 1, '2019-10-09 09:23:16', '2019-10-09 09:23:50'),
(55, 218, 221, 1, '2019-10-09 20:53:54', '2019-10-09 20:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `friend_post`
--

CREATE TABLE `friend_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friend_post`
--

INSERT INTO `friend_post` (`id`, `friend_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 46, 632, NULL, NULL),
(2, 49, 632, NULL, NULL),
(3, 49, 633, NULL, NULL),
(4, 46, 634, NULL, NULL),
(6, 49, 635, NULL, NULL),
(7, 50, 637, NULL, NULL),
(8, 51, 638, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `like`, `created_at`, `updated_at`) VALUES
(29, 635, 1, 1, '2019-10-08 11:40:30', '2019-10-08 11:40:38'),
(30, 634, 1, 1, '2019-10-08 11:41:15', '2019-10-08 11:41:26'),
(31, 635, 218, 1, '2019-10-08 11:47:38', '2019-10-08 11:59:52'),
(32, 633, 218, 1, '2019-10-08 11:48:06', '2019-10-09 03:00:46'),
(33, 618, 218, 0, '2019-10-08 12:00:14', '2019-10-08 12:09:24'),
(34, 634, 218, 0, '2019-10-08 12:40:14', '2019-10-08 12:40:22'),
(35, 636, 219, 1, '2019-10-08 13:04:01', '2019-10-08 13:04:01'),
(36, 626, 1, 0, '2019-10-08 13:08:58', '2019-10-08 13:09:21'),
(37, 623, 1, 1, '2019-10-08 13:09:13', '2019-10-08 13:09:13'),
(38, 636, 1, 1, '2019-10-08 13:09:38', '2019-10-08 13:09:38'),
(39, 632, 219, 1, '2019-10-09 02:41:21', '2019-10-09 02:41:21'),
(40, 617, 218, 1, '2019-10-09 02:43:23', '2019-10-09 02:45:23'),
(41, 637, 218, 0, '2019-10-09 02:50:09', '2019-10-09 09:20:30'),
(42, 632, 218, 1, '2019-10-09 03:00:55', '2019-10-09 03:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_10_04_162317_create_categories_table', 1),
(13, '2019_10_04_162523_create_posts_table', 1),
(14, '2019_10_05_100913_create_likes_table', 2),
(15, '2019_10_05_143343_create_comments_table', 3),
(16, '2019_10_06_105938_create_friends_table', 4),
(17, '2019_10_07_200620_create_friend_post_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('huda@gmail.com', '$2y$10$29ISZCSvq.ekK0sbHSOiguO.0hqM6Mw4CfvnRL1c73GbvMbORyFZC', '2019-10-06 23:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(617, 'test22244', 'basdfghjkl;\'', '1570458169.jpg', 3, 1, '2019-10-07 11:29:09', '2019-10-07 12:22:49'),
(618, 'children', 'done', '1570458332.png', 3, 1, '2019-10-07 12:25:33', '2019-10-07 12:25:33'),
(621, 'childrens new', 'body', '1570461191.jpg', 66, 218, '2019-10-07 13:13:11', '2019-10-07 13:13:11'),
(623, 'posts', 'this is new', '1570466566.jpg', 67, 1, '2019-10-07 14:42:25', '2019-10-07 14:42:46'),
(626, 'posts friend', 'body', '1570483383.jpg', 67, 218, '2019-10-07 19:23:03', '2019-10-07 19:23:03'),
(627, 'posts ff', 'body', '1570483482.jpg', 65, 218, '2019-10-07 19:24:42', '2019-10-07 19:24:42'),
(628, 'new friend', 'photo', '1570483760.jpg', 65, 218, '2019-10-07 19:29:20', '2019-10-07 19:29:20'),
(631, 'my photo', 'body', '1570484402.jpg', 66, 218, '2019-10-07 19:40:02', '2019-10-07 19:40:02'),
(632, 'postphoto', 'new', '1570484621.jpg', 66, 218, '2019-10-07 19:43:41', '2019-10-07 19:43:41'),
(633, 'children friendsss', 'body', '1570484669.jpg', 65, 218, '2019-10-07 19:44:29', '2019-10-07 19:44:29'),
(634, 'PROB', 'my photo', '1570486060.jpg', 66, 218, '2019-10-07 19:46:10', '2019-10-07 20:07:41'),
(636, 'new posts', 'new', '1570547031.jpg', 69, 219, '2019-10-08 13:03:51', '2019-10-08 13:03:51'),
(637, 'my post', 'body', '1570596536.jpg', 65, 219, '2019-10-09 02:48:18', '2019-10-09 02:48:57'),
(638, 'childrenvv', 'body', '1570606178.png', 71, 220, '2019-10-09 05:29:39', '2019-10-09 05:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `profile_picture` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_picture`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'huda', 'huda@gmail.com', '$2y$10$wkOOdX2gPigiVbnizJiT.ehDbacVeVRRXBWEEIaKcAoMkmUIKQ0sK', 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=wavatar&f=y/41df675de16f7ec72206b114e7ee74f1?d=monsterid', 'bioneer', NULL, '2019-10-05 16:05:52', '2019-10-05 16:05:52'),
(218, 'hoda', 'hoda@gmail.com', '$2y$10$efiBoimA6OndSad/MD4kzeocv49BOb.sHiaOvXm/rKsQ.uEba6RZS', 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=wavatar&f=y/41df675de16f7ec72206b114e7ee74f1?d=monsterid', 'bionere', NULL, '2019-10-07 12:30:54', '2019-10-07 12:30:54'),
(220, 'Aya', 'aya@gmail.com', '$2y$10$ZAk4NHnAdNHAat1K6lp0du6tZEAQ931T/MF1jyY23vih4C7HKVRnS', 'https://www.gravatar.com/avatar/?d=wavatar&f=y/876bd2483512f651a4ef62baa28cf01f?d=monsterid', 'biooner', NULL, '2019-10-09 05:19:21', '2019-10-09 05:19:21'),
(221, 'fatma', 'fatma@gmail.com', '$2y$10$u2GQkUqyw/NoUnYOUbSUVeSJSpxmbbqFi9ULrKeDvOqJVcON4x7Ry', 'https://www.gravatar.com/avatar/?d=wavatar&f=y/42167e7df918332b14a5e8a2ec51d9de?d=monsterid', 'dfgjk', NULL, '2019-10-09 09:22:34', '2019-10-09 09:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_post`
--
ALTER TABLE `friend_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `friend_post`
--
ALTER TABLE `friend_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
