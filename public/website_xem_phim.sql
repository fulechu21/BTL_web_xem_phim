-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 09:48 AM
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
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_views` int(11) NOT NULL DEFAULT 0,
  `is_hot` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_oscar` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `description`, `image`, `path`, `year`, `country_id`, `director_id`, `duration`, `views`, `user_views`, `is_hot`, `is_oscar`, `created_at`, `updated_at`) VALUES
(1, 'Kim Cương Máu', 'Phim Kim Cương Máu', 'kim_cuong_mau.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2006, 6, 2, 120, 3, 2, 1, 0, '2023-08-07 09:09:46', '2023-08-15 00:38:50'),
(2, 'Tiếng Ồn', 'Phim Tiếng Ồn', 'tieng_on.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 6, 3, 120, 1, 1, 1, 0, '2023-08-07 09:12:56', '2023-08-15 00:39:16'),
(3, 'XÁC ƯỚP CUỘC PHIÊU LƯU ĐẾN LONDON', 'Phim XÁC ƯỚP CUỘC PHIÊU LƯU ĐẾN LONDON', 'XÁC ƯỚP CUỘC PHIÊU LƯU ĐẾN LONDON.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 6, 2, 88, 0, 0, 1, 0, '2023-08-07 09:14:12', '2023-08-15 00:39:31'),
(4, 'One Piece Film Red', 'Phim One Piece Film Red', 'p.png', 'https://www.youtube.com/embed/oACSq5w8xtk', 2002, 4, 1, 120, 0, 0, 0, 1, '2023-08-07 09:17:07', '2023-08-15 00:39:51'),
(5, 'AVATAR: DÒNG CHẢY CỦA NƯỚC', 'Phim AVATAR: DÒNG CHẢY CỦA NƯỚC', 'avatar.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2022, 6, 2, 192, 0, 0, 1, 1, '2023-08-07 09:18:40', '2023-08-15 00:40:11'),
(6, 'CON VOI CỦA NHÀ ẢO THUẬT', 'Phim CON VOI CỦA NHÀ ẢO THUẬT', 'con-voi-cua-nha-ao-thuat.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 7, 2, 103, 1, 1, 1, 0, '2023-08-07 09:19:48', '2023-08-15 00:40:28'),
(7, 'KILL BOKSOON', 'Phim KILL BOKSOON', 'kill-boksoon.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2022, 1, 3, 137, 0, 0, 0, 1, '2023-08-07 09:21:30', '2023-08-15 00:40:50'),
(8, 'TRI KỶ', 'Phim TRI KỶ', 'tri-ky.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 1, 2, 134, 0, 0, 1, 0, '2023-08-07 09:26:50', '2023-08-15 00:41:07'),
(9, 'VICTORIA AND ABDUL: NỮ HOÀNG VÀ TRI KỶ', 'Phim VICTORIA AND ABDUL: NỮ HOÀNG VÀ TRI KỶ', 'victoria-and-abdul-nu-hoang-va-tri-ky.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2017, 6, 2, 100, 0, 0, 1, 1, '2023-08-07 09:29:25', '2023-08-15 00:41:27'),
(10, 'GẤU POOH: MÁU VÀ MẬT', 'Phim GẤU POOH: MÁU VÀ MẬT', 'gau-pooh-mau-va-mat.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 8, 3, 84, 0, 0, 0, 1, '2023-08-07 09:31:29', '2023-08-15 00:41:48'),
(11, 'SÚNG CỦA EDEN', 'Phim SÚNG CỦA EDEN', 'sung-cua-eden.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2022, 5, 1, 91, 0, 0, 0, 1, '2023-08-07 09:32:37', '2023-08-15 00:42:06'),
(12, 'TÌNH BẠN', 'Phim TÌNH BẠN', 'tinh-ban.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2022, 3, 2, 104, 0, 0, 0, 1, '2023-08-07 09:33:29', '2023-08-15 00:42:22'),
(13, 'MÊ CUNG LONG ẨN', 'Phim MÊ CUNG LONG ẨN', 'me-cung-long-an.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 7, 3, 63, 0, 0, 0, 0, '2023-08-07 09:35:33', '2023-08-15 00:42:38'),
(14, 'THANH GƯƠM DIỆT QUỶ: DINH THỰ TSUZUMI', 'Phim THANH GƯƠM DIỆT QUỶ: DINH THỰ TSUZUMI', 'thanh-guom-diet-quy-dinh-thu-tsuzumi.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2020, 4, 1, 87, 0, 0, 1, 0, '2023-08-07 09:36:55', '2023-08-15 00:43:10'),
(15, 'CHUYẾN XE BÁ ĐẠO 888', 'Phim CHUYẾN XE BÁ ĐẠO 888', 'chuyen-xe-ba-dao-888.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2016, 3, 2, 120, 0, 0, 0, 0, '2023-08-07 09:37:53', '2023-08-15 00:43:50'),
(16, 'SỬ THI KOCHADAIIYAAN', 'Phim SỬ THI KOCHADAIIYAAN', 'su-thi-kochadaiiyaan.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2014, 4, 1, 90, 0, 0, 0, 1, '2023-08-07 09:39:06', '2023-08-15 00:44:15'),
(17, 'GÁI GIÀ LẮM CHIÊU 2', 'Phim GÁI GIÀ LẮM CHIÊU 2', 'gai-gia-lam-chieu-2.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2018, 2, 3, 105, 0, 0, 0, 0, '2023-08-07 09:40:22', '2023-08-15 00:44:30'),
(18, 'Cá Mập Siêu Bạo Chúa 2: Vực Sâu', 'Cá Mập Siêu Bạo Chúa 2: Vực Sâu', 'ca_map_sieu_bao_chua.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 6, 2, 120, 0, 0, 0, 1, '2023-08-15 00:35:00', '2023-08-15 00:45:17'),
(19, 'Người Nhện: Du Hành Vũ Trụ Nhện', 'Người Nhện: Du Hành Vũ Trụ Nhện', 'nguoi_nhen.jpg', 'https://www.youtube.com/embed/oACSq5w8xtk', 2023, 6, 3, 120, 0, 0, 1, 0, '2023-08-15 00:38:14', '2023-08-15 00:38:14');

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

--
-- Dumping data for table `film_actors`
--

INSERT INTO `film_actors` (`id`, `film_id`, `actor_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL),
(2, 1, 5, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 3, 3, NULL, NULL),
(9, 3, 5, NULL, NULL),
(10, 4, 5, NULL, NULL),
(11, 4, 6, NULL, NULL),
(12, 4, 6, NULL, NULL),
(13, 5, 2, NULL, NULL),
(14, 5, 3, NULL, NULL),
(15, 5, 3, NULL, NULL),
(16, 6, 7, NULL, NULL),
(17, 6, 8, NULL, NULL),
(18, 6, 8, NULL, NULL),
(19, 7, 2, NULL, NULL),
(20, 7, 6, NULL, NULL),
(21, 7, 2, NULL, NULL),
(22, 8, 5, NULL, NULL),
(23, 8, 7, NULL, NULL),
(24, 8, 2, NULL, NULL),
(25, 9, 1, NULL, NULL),
(26, 9, 2, NULL, NULL),
(27, 9, 7, NULL, NULL),
(28, 10, 3, NULL, NULL),
(29, 10, 5, NULL, NULL),
(30, 10, 6, NULL, NULL),
(31, 11, 6, NULL, NULL),
(32, 11, 8, NULL, NULL),
(33, 11, 1, NULL, NULL),
(34, 12, 1, NULL, NULL),
(35, 12, 7, NULL, NULL),
(36, 12, 4, NULL, NULL),
(37, 13, 6, NULL, NULL),
(38, 13, 8, NULL, NULL),
(39, 13, 3, NULL, NULL),
(40, 14, 5, NULL, NULL),
(41, 14, 6, NULL, NULL),
(42, 14, 6, NULL, NULL),
(43, 15, 2, NULL, NULL),
(44, 15, 7, NULL, NULL),
(45, 15, 4, NULL, NULL),
(46, 16, 6, NULL, NULL),
(47, 16, 7, NULL, NULL),
(48, 16, 8, NULL, NULL),
(49, 17, 1, NULL, NULL),
(50, 17, 7, NULL, NULL),
(51, 17, 2, NULL, NULL),
(52, 18, 3, NULL, NULL),
(53, 18, 5, NULL, NULL),
(54, 18, 1, NULL, NULL),
(55, 18, 4, NULL, NULL),
(56, 18, 6, NULL, NULL),
(57, 19, 2, NULL, NULL),
(58, 19, 3, NULL, NULL),
(59, 19, 5, NULL, NULL);

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

--
-- Dumping data for table `film_categories`
--

INSERT INTO `film_categories` (`id`, `film_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 19, 1, NULL, NULL),
(3, 19, 3, NULL, NULL),
(4, 19, 6, NULL, NULL),
(5, 1, 1, NULL, NULL),
(6, 1, 8, NULL, NULL),
(7, 2, 1, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 2, 5, NULL, NULL),
(10, 3, 4, NULL, NULL),
(11, 3, 6, NULL, NULL),
(12, 4, 1, NULL, NULL),
(13, 4, 3, NULL, NULL),
(14, 4, 4, NULL, NULL),
(15, 4, 6, NULL, NULL),
(16, 5, 1, NULL, NULL),
(17, 5, 3, NULL, NULL),
(18, 6, 2, NULL, NULL),
(19, 6, 4, NULL, NULL),
(20, 6, 6, NULL, NULL),
(21, 7, 1, NULL, NULL),
(22, 8, 2, NULL, NULL),
(23, 8, 4, NULL, NULL),
(24, 9, 1, NULL, NULL),
(25, 9, 2, NULL, NULL),
(26, 9, 7, NULL, NULL),
(27, 10, 1, NULL, NULL),
(28, 10, 3, NULL, NULL),
(29, 10, 5, NULL, NULL),
(30, 10, 8, NULL, NULL),
(31, 11, 1, NULL, NULL),
(32, 11, 7, NULL, NULL),
(33, 11, 8, NULL, NULL),
(34, 12, 2, NULL, NULL),
(35, 12, 4, NULL, NULL),
(36, 13, 1, NULL, NULL),
(37, 13, 3, NULL, NULL),
(38, 13, 7, NULL, NULL),
(39, 13, 8, NULL, NULL),
(40, 14, 1, NULL, NULL),
(41, 14, 3, NULL, NULL),
(42, 14, 4, NULL, NULL),
(43, 14, 6, NULL, NULL),
(44, 14, 8, NULL, NULL),
(45, 15, 1, NULL, NULL),
(46, 15, 4, NULL, NULL),
(47, 16, 1, NULL, NULL),
(48, 16, 3, NULL, NULL),
(49, 16, 7, NULL, NULL),
(50, 16, 8, NULL, NULL),
(51, 17, 2, NULL, NULL),
(52, 17, 4, NULL, NULL),
(53, 18, 1, NULL, NULL),
(54, 18, 3, NULL, NULL);

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

--
-- Dumping data for table `film_views`
--

INSERT INTO `film_views` (`id`, `film_id`, `date`, `views`, `unique_views`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-08-13', 2, 2, '2023-08-13 03:07:32', '2023-08-13 03:09:59'),
(2, 2, '2023-08-14', 1, 1, '2023-08-14 09:54:00', '2023-08-14 09:54:00'),
(3, 1, '2023-08-14', 3, 3, '2023-08-14 09:54:19', '2023-08-14 09:54:24'),
(4, 6, '2023-08-15', 1, 1, '2023-08-14 21:39:55', '2023-08-14 21:39:55'),
(5, 1, '2023-08-15', 1, 1, '2023-08-14 21:40:04', '2023-08-14 21:40:04');

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mhoang2104@gmail.com', '$2y$10$SJ9ExNcFkpSG39fFXf.1mu4.tengun2s0lvX8oFSReZSU6ZFJ6y76', '2023-08-14 22:05:38');

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
(2, 'User', 'phuduc0302@gmail.com', NULL, '$2y$10$yzNCrHaGbEOt6oJCEomIL.CjBM/SotKPCxtSA8k1vUFc9ukSBdjme', '0', NULL, '2023-08-06 03:13:40', '2023-08-06 03:13:40'),
(3, 'Bùi Vũ Minh Hoàng', 'mhoang2104@gmail.com', NULL, '$2y$10$JxyggsNtCywn/H39h1hfFuf/lVJU.ylKOKjjp/9ovkv2vGbCajqrq', '0', 'bkh8aSAGlIue3RvCRETdT4tXnhzaUKAd6PA7VHUFpnwuWVR5A8OQcSF04rC1', '2023-08-14 09:44:38', '2023-08-14 09:44:38');

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
-- Dumping data for table `website_visits`
--

INSERT INTO `website_visits` (`id`, `date`, `visits`, `unique_visits`, `created_at`, `updated_at`) VALUES
(1, '2023-08-07', 3, 1, '2023-08-07 08:55:26', '2023-08-07 09:40:51'),
(2, '2023-08-13', 8, 1, '2023-08-13 03:01:36', '2023-08-13 03:10:06'),
(3, '2023-08-14', 16, 6, '2023-08-14 09:40:57', '2023-08-14 10:09:47'),
(4, '2023-08-15', 12, 4, '2023-08-14 19:02:13', '2023-08-15 00:36:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `film_actors`
--
ALTER TABLE `film_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `film_categories`
--
ALTER TABLE `film_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `film_views`
--
ALTER TABLE `film_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_films`
--
ALTER TABLE `user_films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_visits`
--
ALTER TABLE `website_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
