-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jan 2022 pada 01.55
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectlab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jazz', 'Jazz11.png', '2022-01-21 13:55:56', '2022-01-21 13:55:56', NULL),
(2, 'Pop', 'Pop69.png', '2022-01-21 13:59:00', '2022-01-21 13:59:00', NULL),
(3, 'Blues', 'Blues3.png', '2022-01-21 14:01:02', '2022-01-21 14:01:02', NULL),
(4, 'Tes', 'Tes32.png', '2022-01-21 17:40:31', '2022-01-21 17:40:31', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_01_11_001307_product_table', 1),
(19, '2022_01_21_112802_music_table', 2),
(20, '2022_01_21_124033_category_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `music`
--

CREATE TABLE `music` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `music`
--

INSERT INTO `music` (`id`, `artist`, `album`, `category_id`, `name`, `image`, `music`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John Legend', 'Love In The Future', 1, 'All of Me', 'All of Me14.jpg', 'All of Me14.mp3', '2022-01-21 06:50:11', '2022-01-21 16:26:35', NULL),
(2, 'Iwan Fals', 'Tikus Tikus Kantor', 2, 'Tikus Tikus Kantor', 'Tikus Tikus Kantor29.jpg', 'Tikus Tikus Kantor29.mp3', '2022-01-21 07:09:41', '2022-01-21 07:09:41', NULL),
(3, 'Budi Doremi', 'Melukis Senja', 3, 'Melukis Senja', 'Melukis Senja51.jpg', 'Melukis Senja51.mp3', '2022-01-21 07:10:18', '2022-01-21 07:10:18', NULL),
(4, 'Eminem', 'The Marshall Mathers LP', 1, 'Stan', 'Stan24.jpg', 'Stan24.mp3', '2022-01-21 07:11:10', '2022-01-21 07:11:10', NULL),
(5, 'Taylor Swift', '1989', 1, 'Blank Space', 'Blank Space50.jpg', 'Blank Space50.mp3', '2022-01-21 07:11:47', '2022-01-21 17:39:17', '2022-01-21 17:39:17'),
(6, 'tes', 'tes', 2, 'tes', 'tes31.jpg', 'tes31.mp3', '2022-01-21 12:59:43', '2022-01-21 13:02:52', '2022-01-21 13:02:52'),
(7, 'tes', 'tes', 1, 'tes', 'tes32.jpg', 'tes31.mp3', '2022-01-21 16:36:53', '2022-01-21 16:37:06', '2022-01-21 16:37:06'),
(8, 'Tess', 'Tes', 1, 'Tes', 'Tes32.jpg', 'Tes99.mp3', '2022-01-21 17:39:50', '2022-01-21 17:39:58', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `color`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tes', 100000, 'Window', 'Black', 'tes16.png', '2022-01-10 18:52:47', '2022-01-10 18:52:47', '2022-01-10 17:00:00'),
(2, 'Kursi', 400000, 'Table', 'White', 'Kursi45.jpg', '2022-01-10 18:54:11', '2022-01-10 20:25:09', NULL),
(3, 'Meja', 550000, 'Table', 'Black', 'Meja77.jpg', '2022-01-10 18:54:34', '2022-01-10 18:54:34', NULL),
(4, 'Kasur', 800000, 'Door', 'Red', 'Kasur39.jpg', '2022-01-10 18:54:59', '2022-01-10 18:54:59', NULL),
(5, 'Sofa', 640000, 'Window', 'Black', 'Sofa66.jpg', '2022-01-10 18:55:29', '2022-01-10 18:55:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zainal', 'admin@admin.com', NULL, '$2y$10$pao5QO6usjpGRYH/c4c4QuHEbL06AY2Kb4cfj.wxhAU4AsfHcrCK6', 'Jakarta', 'Male', 1, NULL, '2022-01-10 18:16:19', '2022-01-21 17:40:52'),
(2, 'zain', 'zain@gmail.com', NULL, '$2y$10$1CKKrmKZpknBdhCCJrzl6uJgm1PS5euRw6w2fTV6GUcBeoaXjbXkK', 'Bogor', 'Male', NULL, NULL, '2022-01-21 17:29:15', '2022-01-21 17:29:15'),
(3, 'ZainalM', 'zainal@email.com', NULL, '$2y$10$QnDV/jpV/CAzkJoCf2lAy.mNLUpvEQaau5iECk0IFutKP4InQpemK', 'Bogor', 'Male', NULL, NULL, '2022-01-21 17:41:40', '2022-01-21 17:41:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name_unique` (`name`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
