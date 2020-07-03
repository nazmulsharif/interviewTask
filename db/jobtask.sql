-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 07:15 AM
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
-- Database: `jobtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=Video | 2=Post ',
  `position` int(11) NOT NULL COMMENT '1= Section1 | 2= Section2 ',
  `action` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0= unpublish | 1= publish ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `position`, `action`, `created_at`, `updated_at`) VALUES
(28, 1, 1, 1, '2020-07-02 22:05:44', '2020-07-02 22:43:27'),
(29, 1, 2, 1, '2020-07-02 22:09:05', '2020-07-02 22:43:38'),
(30, 2, 1, 1, '2020-07-02 22:10:33', '2020-07-02 22:43:40'),
(31, 2, 1, 1, '2020-07-02 22:17:54', '2020-07-02 22:43:42'),
(32, 2, 2, 1, '2020-07-02 22:23:48', '2020-07-02 22:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_02_171821_create_contents_table', 1),
(9, '2020_07_02_175611_create_posts_table', 2),
(10, '2020_07_02_175625_create_videos_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content_id`, `title`, `image`, `brief`, `desc`, `created_at`, `updated_at`) VALUES
(3, 30, 'Pandemic downs garment shipments to a decade-low', '1593749433.jpg', 'The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.', 'The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.The unprecedented coronavirus pandemic has put a scar in apparel shipments as earnings from the country\'s main export item in the immediate past fiscal year fell significantly compared to anytime in the past decade.', '2020-07-02 22:10:34', '2020-07-02 22:10:34'),
(4, 31, 'Veg prices up as supply falls', '1593749874.jpg', 'Soaring prices of daily essentials are hurting low and middle-income families in the capital as they find it increasingly hard to pay for the same basic essentials amid the Covid-19 pandemic.', 'Soaring prices of daily essentials are hurting low and middle-income families in the capital as they find it increasingly hard to pay for the same basic essentials amid the Covid-19 pandemic.Soaring prices of daily essentials are hurting low and middle-income families in the capital as they find it increasingly hard to pay for the same basic essentials amid the Covid-19 pandemic.Soaring prices of daily essentials are hurting low and middle-income families in the capital as they find it increasingly hard to pay for the same basic essentials amid the Covid-19 pandemic.', '2020-07-02 22:17:54', '2020-07-02 22:17:54'),
(5, 32, 'Virus cases cross 150,000-mark', '1593750228.jpg', 'Virus cases cross 150,000-markVirus cases cross 150,000-markVirus cases cross 150,000-mark', 'Virus cases cross 150,000-markVirus cases cross 150,000-markVirus cases cross 150,000-markVirus cases cross 150,000-mark', '2020-07-02 22:23:48', '2020-07-02 22:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazmul Hasan Sharif', 'nazmulict94@gmail.com', NULL, '$2y$10$qQgg.iB3NYdVtieKufVgEuAwpBmaakuuJjKdLrc80ocV2xyxhZjTC', NULL, '2020-07-02 13:11:01', '2020-07-02 13:11:01'),
(2, 'Nazmul Hasan Sharif', 'nazmulictcou@gmail.com', NULL, '$2y$10$Jyw4k2EcOalWGM3YKEoQ0OUwf1hfB9q1fJBhEltUVgahtuhM6..Vq', NULL, '2020-07-02 22:42:42', '2020-07-02 22:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `content_id`, `title`, `brief`, `desc`, `link`, `created_at`, `updated_at`) VALUES
(3, 28, 'Natural Scenery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimus', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimusLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ducimus', 'https://www.youtube.com/embed/IUN664s7N-c', '2020-07-02 22:05:44', '2020-07-02 22:05:44'),
(4, 29, 'The beauty Of Earth', 'The beauty Of Earth', 'The beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of EarthThe beauty Of Earth', 'https://www.youtube.com/embed/Cl_kXbhTi8k', '2020-07-02 22:09:05', '2020-07-02 22:09:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
