-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 01:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_xem_phim`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Keanu Reeves', '2023-08-06 03:57:04', '2023-08-06 03:57:04'),
(2, 'Laurence Fishburne', '2023-08-06 03:57:25', '2023-08-06 03:57:25'),
(3, 'George FishBurne', '2023-08-06 03:57:39', '2023-08-06 03:57:39'),
(4, 'Leonardo DiCaprio', '2023-08-06 03:57:57', '2023-08-06 03:57:57'),
(5, 'Djimon Hounsou', '2023-08-06 03:58:11', '2023-08-06 03:58:11'),
(6, 'Kagiso Kuypers', '2023-08-06 03:58:40', '2023-08-06 03:58:40'),
(7, 'Ward Kerremans', '2023-08-06 03:58:49', '2023-08-06 03:58:49'),
(8, 'Sallie Harmsen', '2023-08-06 03:58:59', '2023-08-06 03:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hành động', '2023-08-06 03:59:33', '2023-08-06 03:59:33'),
(2, 'Tình cảm', '2023-08-06 03:59:37', '2023-08-06 03:59:37'),
(3, 'Viễn tưởng', '2023-08-06 03:59:45', '2023-08-06 03:59:45'),
(4, 'Hài hước', '2023-08-06 03:59:52', '2023-08-06 03:59:52'),
(5, 'Kinh dị', '2023-08-06 03:59:55', '2023-08-06 03:59:55'),
(6, 'Hoạt hình', '2023-08-06 04:00:05', '2023-08-06 04:00:05'),
(7, 'Cổ trang', '2023-08-06 04:00:09', '2023-08-06 04:00:09'),
(8, 'Thần thoại', '2023-08-06 04:00:15', '2023-08-06 04:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hàn Quốc', '2023-08-06 04:01:08', '2023-08-06 04:01:08'),
(2, 'Việt Nam', '2023-08-06 04:01:16', '2023-08-06 04:01:16'),
(3, 'Trung Quốc', '2023-08-06 04:01:20', '2023-08-06 04:01:20'),
(4, 'Nhật Bản', '2023-08-06 04:01:26', '2023-08-06 04:01:26'),
(5, 'Thái Lan', '2023-08-06 04:01:33', '2023-08-06 04:01:33'),
(6, 'Âu-Mỹ', '2023-08-06 04:01:43', '2023-08-06 04:01:43'),
(7, 'Ấn Độ', '2023-08-06 04:01:50', '2023-08-06 04:01:50'),
(8, 'Quốc gia khác', '2023-08-06 04:01:57', '2023-08-06 04:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gorõ Taniguchi', '2023-08-06 04:02:27', '2023-08-06 04:02:27'),
(2, 'Edward Zwick', '2023-08-06 04:02:37', '2023-08-06 04:02:37'),
(3, 'Steffen Geypens', '2023-08-06 04:02:48', '2023-08-06 04:02:48');

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
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `duration` int(11) NOT NULL,
  `views` bigint(20) UNSIGNED NOT NULL,
  `user_views` int(11) NOT NULL,
  `is_hot` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_oscar` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film_actors`
--

CREATE TABLE `film_actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film_categories`
--

CREATE TABLE `film_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film_views`
--

CREATE TABLE `film_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL,
  `unique_views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_30_020928_create_films_table', 1),
(6, '2023_07_30_021005_create_categories_table', 1),
(7, '2023_07_30_021101_create_countries_table', 1),
(8, '2023_07_30_022447_create_actors_table', 1),
(9, '2023_07_30_022507_create_directors_table', 1),
(10, '2023_07_30_022731_create_film_actors_table', 1),
(11, '2023_07_30_023843_add_foreign_key_to_films', 1),
(12, '2023_07_30_113038_add_is_admin_to_users', 1),
(13, '2023_08_02_130746_create_film_categories_table', 1),
(14, '2023_08_02_132814_add_foreign_key_category_to_film_categories', 1),
(15, '2023_08_02_133032_add_duration_to_films', 1),
(16, '2023_08_02_133201_add_user_views_to_films', 1),
(17, '2023_08_02_133255_create_website_visits_table', 1),
(18, '2023_08_02_133354_create_film_views_table', 1),
(19, '2023_08_02_133516_add_foreign_key_to_film_views', 1),
(20, '2023_08_02_133814_add_foreign_key_director_to_films', 1),
(21, '2023_08_02_134519_create_user_films_table', 1),
(22, '2023_08_02_134744_add_foreign_key_to_user_films', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Vuphamhp245@gmail.com', NULL, '$2y$10$1cq3E/PsxuzKmnS6WsWHBe0U8G40dk5jbA3vF8Tjkf4ChxCmgEuli', '1', NULL, '2023-08-06 03:08:21', '2023-08-06 03:08:21'),
(2, 'User', 'phuduc0302@gmail.com', NULL, '$2y$10$yzNCrHaGbEOt6oJCEomIL.CjBM/SotKPCxtSA8k1vUFc9ukSBdjme', '0', NULL, '2023-08-06 03:13:40', '2023-08-06 03:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_films`
--

CREATE TABLE `user_films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_visits`
--

CREATE TABLE `website_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `visits` int(11) NOT NULL DEFAULT 0,
  `unique_visits` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `films_country_id_foreign` (`country_id`),
  ADD KEY `films_director_id_foreign` (`director_id`);

--
-- Indexes for table `film_actors`
--
ALTER TABLE `film_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_actors_film_id_foreign` (`film_id`),
  ADD KEY `film_actors_actor_id_foreign` (`actor_id`);

--
-- Indexes for table `film_categories`
--
ALTER TABLE `film_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_categories_category_id_foreign` (`category_id`),
  ADD KEY `film_categories_film_id_foreign` (`film_id`);

--
-- Indexes for table `film_views`
--
ALTER TABLE `film_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_views_film_id_foreign` (`film_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_films`
--
ALTER TABLE `user_films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_films_film_id_foreign` (`film_id`),
  ADD KEY `user_films_user_id_foreign` (`user_id`);

--
-- Indexes for table `website_visits`
--
ALTER TABLE `website_visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film_actors`
--
ALTER TABLE `film_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film_categories`
--
ALTER TABLE `film_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film_views`
--
ALTER TABLE `film_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_films`
--
ALTER TABLE `user_films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_visits`
--
ALTER TABLE `website_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `film_actors`
--
ALTER TABLE `film_actors`
  ADD CONSTRAINT `film_actors_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_actors_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `film_categories`
--
ALTER TABLE `film_categories`
  ADD CONSTRAINT `film_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_categories_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `film_views`
--
ALTER TABLE `film_views`
  ADD CONSTRAINT `film_views_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_films`
--
ALTER TABLE `user_films`
  ADD CONSTRAINT `user_films_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_films_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
