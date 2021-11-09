-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coinguard`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(25) NOT NULL,
  `banner` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `banner`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, 'banners/mixi.jpg', 'https://github.com/konpani/coinguard', 1, '2021-09-30 07:14:11', '2021-09-30 07:14:11'),
(19, 'banners/1633085295-ducky.jpg', 'https://github.com/konpani/coinguard', 1, '2021-10-01 10:48:15', '2021-10-01 10:48:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coins`
--

CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `network` varchar(30) NOT NULL,
  `symbol` varchar(30) NOT NULL,
  `presale` varchar(10) DEFAULT NULL,
  `contract_address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `custom_chart_link` varchar(100) DEFAULT NULL,
  `custom_swap_link` varchar(100) DEFAULT NULL,
  `website_link` varchar(100) NOT NULL,
  `lauch_date` date NOT NULL,
  `telegram_link` varchar(100) NOT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `discord_link` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coins`
--

INSERT INTO `coins` (`id`, `image`, `name`, `network`, `symbol`, `presale`, `contract_address`, `description`, `custom_chart_link`, `custom_swap_link`, `website_link`, `lauch_date`, `telegram_link`, `twitter_link`, `discord_link`, `status`, `updated_at`, `created_at`) VALUES
(26, 'uploads/emoji_globe.a7276f90.png', 'image', 'BSC', 'IMG', 'Presale', '', '', '', '', '', '2021-05-12', '', '', '', 1, '2021-08-06', '2021-08-06'),
(27, 'uploads/emoji_rocket.fbbed9ae.png', 'nguyen binh', 'BSC', 'NTB', NULL, '0xq8wr9ujq8e9urud8qw09u89qdhj9q8u89e31', 'nguyen binh', NULL, NULL, 'http://google.com.vn', '2021-07-22', 'http://t.me/google', NULL, NULL, 1, '2021-08-30', '2021-08-06'),
(28, 'uploads/emoji_trophy.cf44bdd8.png', 'Test', 'MATIC', 'NOI', 'Presale', '0xq8wr9ujq8e9urud8qw09u89qdhj9q8u89e31', 'Test Part Don\'t remember', NULL, NULL, 'http://google.com.vn', '2021-07-28', 'http://t.me/google', NULL, NULL, 0, '2021-09-29', '2021-08-07'),
(33, 'uploads/mepomeo.jpg', 'Bánh mặn 2', 'BSC', 'hgdgdg', 'Presale', '0x6bfd4ca8ec078d613ed6a5248eb2c7a0d5c38b7b', 'By default, Poocoin (BSC) and Dextools (ETH) is used. Enter custom chart link here if you want to us', 'http://127.0.0.1:8000/submit-coin', 'http://127.0.0.1:8000/submit-coin', 'http://127.0.0.1:8000/submit-coin', '2021-09-19', 'http://127.0.0.1:8000/submit-coin', 'http://127.0.0.1:8000/submit-coin', 'http://127.0.0.1:8000/submit-coin', 1, '2021-09-18', '2021-09-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(25) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Ducky', 'logos/1633163093-images.jpg', 1, '2021-10-02 08:24:53', '2021-10-02 08:24:53'),
(11, 'Ducky', 'logos/1633163116-ducky.jpg', 1, '2021-10-02 08:25:16', '2021-10-02 08:25:16'),
(12, '1332', 'logos/1636364856-tải xuống.png', 1, '2021-11-08 09:47:36', '2021-11-08 09:47:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_09_135640_create_permission_tables', 1),
(5, '2020_10_09_135732_create_products_table', 1),
(6, '2021_09_04_165919_create_watchlists_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$m/xTgwctSP5pYNrga10FnOBrGnyKb4wlnzLx5of8/n7iL86H23wWW', '2021-08-29 02:43:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(2, 'role-create', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(3, 'role-edit', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(4, 'role-delete', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(5, 'coin-list', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(6, 'coin-create', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(7, 'coin-edit', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(8, 'coin-delete', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(9, 'user-list', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(10, 'user-create', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(11, 'user-edit', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16'),
(12, 'user-delete', 'web', '2021-08-20 02:03:16', '2021-08-20 02:03:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-08-20 02:03:21', '2021-08-20 02:03:21'),
(2, 'Nhan vien', 'web', '2021-08-20 02:07:36', '2021-08-29 21:22:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 0),
(3, 1),
(4, 1),
(5, 0),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 0),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('heIphD8k976u1nHOpa4tUvenGT8HLD85fKtO3X7A', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/97.0.206 Chrome/91.0.4472.206 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieWp5WmV0ZzhOYzd6bnNVaU1BQ0lzVnVoOHJlaVhHTXRIdGVIdHV0VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1630999230);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(30) NOT NULL,
  `site_description` varchar(10000) NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `banner` text NOT NULL,
  `telegram_link` varchar(250) NOT NULL,
  `twitter_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_description`, `logo`, `favicon`, `banner`, `telegram_link`, `twitter_link`) VALUES
(1, 'Coin Ranking', 'Find the best new cryptocurrency projects! Vote for your favorite coins, and see what\'s trending.', '12', '10', '2', 'Telegram.com', 'Twitter.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin ', 'admin@gmail.com', NULL, '$2y$10$XkpMhXNxeLsXBIf7C0IJ9e/OX6kB3wEw5enPcEomgDnXnn0AzrDU.', 'iyL8LQkQebN9LvHu5SroSkLMevQaRt05E9Kw2BfhVbdHhjvjOuAVAZHTGZNi', '2021-08-20 02:03:21', '2021-08-20 02:03:21'),
(7, 'Binh Nguyen', 'binhnguyen@gmail.com', NULL, '$2y$10$e/SQlsZzQhspyoDfRZvYr.xnlEBjN2avpd8AUuPksblqd5GvMamOy', NULL, '2021-08-30 02:09:54', '2021-08-30 02:09:54'),
(8, 'nhan vien', 'nhanvien@gmail.com', NULL, '$2y$10$dnIST9157lJWI0GkvaZsTuLXrMCXY0yd3t78xUf2XI7snGufd7MIu', NULL, '2021-09-07 04:00:41', '2021-09-07 04:00:41'),
(9, 'Ao Nam 1', 'lehoanhtro@gmail.com', NULL, '$2y$10$H5DKbktChw0T8hcYvP1gY.1oWfEVqVYfgqC.vpA9EBiNydMc/KjAW', NULL, '2021-09-28 09:23:03', '2021-09-28 09:23:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `votes`
--

CREATE TABLE `votes` (
  `id_coin` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `votes`
--

INSERT INTO `votes` (`id_coin`, `id_user`, `created_at`, `updated_at`) VALUES
(26, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(29, 0, '2021-08-10', '2021-08-10'),
(29, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(26, 0, '2021-08-10', '2021-08-10'),
(29, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(29, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(28, 0, '2021-08-10', '2021-08-10'),
(30, 0, '2021-08-10', '2021-08-10'),
(29, 0, '2021-08-11', '2021-08-11'),
(27, 0, '2021-08-11', '2021-08-11'),
(27, 0, '2021-08-11', '2021-08-11'),
(29, 0, '2021-08-11', '2021-08-11'),
(29, 0, '2021-08-11', '2021-08-11'),
(30, 0, '2021-08-12', '2021-08-12'),
(30, 0, '2021-08-12', '2021-08-12'),
(30, 0, '2021-08-12', '2021-08-12'),
(30, 0, '2021-08-12', '2021-08-12'),
(30, 0, '2021-08-12', '2021-08-12'),
(26, 0, '2021-08-12', '2021-08-12'),
(26, 0, '2021-08-12', '2021-08-12'),
(26, 0, '2021-08-12', '2021-08-12'),
(26, 0, '2021-08-12', '2021-08-12'),
(27, 0, '2021-08-12', '2021-08-12'),
(27, 0, '2021-08-12', '2021-08-12'),
(27, 0, '2021-08-12', '2021-08-12'),
(29, 0, '2021-08-12', '2021-08-12'),
(29, 0, '2021-08-12', '2021-08-12'),
(29, 0, '2021-08-12', '2021-08-12'),
(29, 0, '2021-08-12', '2021-08-12'),
(29, 0, '2021-08-12', '2021-08-12'),
(32, 0, '2021-08-13', '2021-08-13'),
(32, 0, '2021-08-13', '2021-08-13'),
(29, 0, '2021-08-13', '2021-08-13'),
(28, 0, '2021-08-16', '2021-08-16'),
(29, 0, '2021-08-16', '2021-08-16'),
(30, 0, '2021-08-16', '2021-08-16'),
(26, 0, '2021-08-16', '2021-08-16'),
(27, 0, '2021-08-16', '2021-08-16'),
(28, 0, '2021-08-16', '2021-08-16'),
(32, 0, '2021-08-16', '2021-08-16'),
(29, 0, '2021-08-17', '2021-08-17'),
(29, 0, '2021-08-17', '2021-08-17'),
(29, 3, '2021-08-17', '2021-08-17'),
(28, 3, '2021-08-17', '2021-08-17'),
(30, 3, '2021-08-17', '2021-08-17'),
(28, 1, '2021-08-21', '2021-08-21'),
(29, 1, '2021-08-21', '2021-08-21'),
(31, 1, '2021-08-28', '2021-08-28'),
(26, 1, '2021-09-01', '2021-09-01'),
(30, 1, '2021-09-01', '2021-09-01'),
(0, 1, '2021-09-01', '2021-09-01'),
(32, 1, '2021-09-01', '2021-09-01'),
(27, 1, '2021-09-01', '2021-09-01'),
(30, 7, '2021-09-23', '2021-09-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `watchlists`
--

CREATE TABLE `watchlists` (
  `id_coin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `watchlists`
--

INSERT INTO `watchlists` (`id_coin`, `id_user`, `created_at`, `updated_at`) VALUES
(29, 1, '2021-09-22 09:36:07', '2021-09-22 09:36:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
