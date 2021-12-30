-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2021 at 03:35 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inprosul_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_11_26_160822_create_sessions_table', 1),
(7, '2020_11_26_164621_create_tb_informasi_table', 2),
(8, '2020_11_26_164706_create_tb_detail_informasi_table', 2),
(9, '2020_11_26_165432_update_table_tb_detail_informasi', 3),
(10, '2020_11_26_171444_create_tb_profil_table', 4),
(11, '2020_11_26_203740_create_tb_sertifikat_table', 5),
(12, '2020_11_27_055833_add_title_in_tb_sertifikat', 6),
(13, '2020_11_27_124935_create_tb_galeri_table', 7),
(14, '2020_11_27_135302_craete_tb_news_table', 8),
(15, '2020_11_28_144241_create_tb_detail_news_table', 9),
(16, '2020_11_29_054053_add_tanggal_in_tb_news', 10),
(17, '2020_11_29_054403_add_sumber_in_tb_news', 11),
(18, '2020_11_29_092400_create_tb_strategi_table', 12),
(19, '2020_12_03_084803_add_user_in_tb_galeri', 13),
(20, '2020_12_04_160412_create_tb_pangan_table', 14),
(21, '2020_12_05_095905_add_deskripsi_in_tb_pangan', 15),
(22, '2020_12_05_175023_create_tb_contact_us_table', 16),
(23, '2020_12_22_092504_create_tb_produk_table', 17),
(24, '2020_12_22_092615_create_tb_detail_produk_table', 17),
(25, '2021_02_08_185625_create_wa_number_table', 18),
(26, '2021_02_09_055500_create_tb_kegiatan_table', 19),
(27, '2021_02_09_065209_update_field_in_tb_kegiatan', 20),
(28, '2021_02_19_080033_create_tb_request_file_table', 21),
(29, '2021_02_19_090551_update_field_in_tb_request_file', 22),
(30, '2021_02_19_095511_create_jobs_table', 23),
(31, '2021_03_12_165247_update_field_in_tb_strategi', 24),
(32, '2021_03_12_170825_update_field_in_tb_kegiatan', 25),
(33, '2021_03_12_200809_create_tb_kategori_galeri_table', 26),
(34, '2021_03_12_200958_update_field_in_tb_galeri', 27),
(35, '2021_03_14_151334_create_tb_galeri_detail_table', 28),
(36, '2021_03_15_155939_update_field_in_tb_news', 29),
(37, '2021_03_15_182331_create_coba_table', 30);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5zxUHaRObrWmfohvEFCBAIr0xgnMsKBQHgJdDg1r', NULL, '182.2.75.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36 Edg/89.0.774.76', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVJSSlRTZWxWSWdsN0p6a1loTTRVTHl3dFdHOWdiNEFKdkxTR3dFdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaW5wcm9zdWxhLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1618518877),
('BqONxb5HpkvuMy5oF7pQlLI04VySKMM0h3oPZldj', NULL, '207.46.13.21', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjdnMFVCdUdocjhxSDFDSlB0aDhHMlNWNGx0RXZmUmRXdU9xbUhHQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vaW5wcm9zdWxhLm9yZy9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1618505184),
('HQwNzsVyO7XEzqWXcFPyWiIhn5EjPrAS4nQdQYxy', NULL, '69.30.225.101', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaE5ObGtPM3ZveFRlSkhCTUlxYWVaekJ2V2pHcGNIN2hWTFVxVThHViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaW5wcm9zdWxhLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1618504376),
('yOaX8BzmtJuAgKxT8vQD0tdq0Q1Ct4MivlW2YqMx', NULL, '66.249.71.52', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.130 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicm80ODV6cnE2NDg5dVRUWldhaldqZ1MxZ2s0WmxCakZKZmhvbmV5bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaW5wcm9zdWxhLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1618505987);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Yusril Ihza', 'yusril713@gmail.com', 'Konten Website', 'Konten pada website mohon ditambah lagi agar lebih lengkap', '2020-12-05 11:20:55', '2020-12-05 11:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_informasi`
--

CREATE TABLE `tb_detail_informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `informasi_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_news`
--

CREATE TABLE `tb_detail_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_produk`
--

CREATE TABLE `tb_detail_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_detail_produk`
--

INSERT INTO `tb_detail_produk` (`id`, `produk_id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'produk/1//t9grI3TIAXldyKHzgSMLZjlS45umBcOx5PfH4msV.jpg', '2021-02-12 02:22:52', '2021-02-12 02:22:52'),
(2, 2, 'produk/2//qpWhiifwd6SrutBml33vcm4X9TZi29vznhhKkpfV.jpg', '2021-02-12 03:21:05', '2021-02-12 03:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('Gambar','Video') COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `user_id`, `title`, `tipe`, `link`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sri Sultan Sebagai Wali Budaya Pangan Nusantara Dalam Peringatan HPS 2009', 'Gambar', 'galeri/CmoCMpAQoVlulwjRTd9vVCxZ0qYJNtpJ2jJerGtE.jpeg', NULL, '2020-12-03 03:46:17', '2020-12-03 03:46:17'),
(2, 1, 'Ngaji Bareng', 'Gambar', 'galeri/lmceCzVHKBLM51AYg65bGt1KoZYKKDPIA5DlCDvV.jpg', NULL, '2020-12-03 07:47:01', '2020-12-03 07:47:01'),
(3, 1, 'Workshop penyuluhan desain monitoring alokasi dan belanja anggaran kethanan pangan', 'Gambar', 'galeri/k1RFQW5UANw8eclrsnXmZZG8p8lGw4Y7vEBtvV7M.jpg', NULL, '2020-12-03 07:48:30', '2020-12-03 07:48:30'),
(4, 1, 'Dialog TVRI untuk promosi RASDA', 'Gambar', 'galeri/YP3tYtgcfjGUHTO8meIgz4PnDufHQ03LqV8yT11C.jpg', NULL, '2020-12-03 07:49:01', '2020-12-03 07:49:01'),
(5, 1, 'Simulasi evakuasi korban banjir lahar di Blongkeng Ngluwar Magelang', 'Gambar', 'galeri/LRVoVCqcsBX1xB0hYBIsRbdg1a9GcPqKToHAXxij.jpg', NULL, '2020-12-03 07:49:59', '2020-12-03 07:49:59'),
(6, 1, 'Simulasi evakuasi sapi di Kuwang Argomulyo Cangkringan Sleman', 'Gambar', 'galeri/oGm8EH20K3ipJIw6CwCoaINF5doDXCrOao4g3fKh.jpg', NULL, '2020-12-03 07:50:48', '2020-12-03 07:50:48'),
(11, 1, 'Pangan dan Perempuan Desa', 'Video', 'https://www.youtube.com/embed/qirbfpLO5qI', NULL, '2021-02-16 19:51:20', '2021-02-16 19:51:20'),
(12, 1, 'Produk Kopi Arabica Gayo Organik', 'Gambar', 'galeri/h4cn6WCnbG7tax5x0aOqHQQfYUDx2KkasfN5M1Bf.jpg', NULL, '2021-02-16 20:01:41', '2021-02-16 20:01:41'),
(13, 1, 'Nilai Luhur Budaya Pangan Nusantara KGPA Pakualam IX', 'Gambar', 'galeri/fsws0vpuMrIkDNiwkB8aGnqlAyf1GFgJXxKKG0hD.jpg', NULL, '2021-03-08 09:46:18', '2021-03-08 09:46:18'),
(14, 1, 'Konsensus Pusat - Daerah - Masyarakat Sipil untuk Pangan Rakyat Miskin', 'Gambar', 'galeri/dTpHgT5MuSGAWXgwpp9SYn547dRRaCEO9muCH4cP.jpg', NULL, '2021-03-08 09:49:44', '2021-03-08 09:49:44'),
(15, 1, 'Sinergie untuk pangan rakyat miskin', 'Gambar', 'galeri/5AkaTnfKPF9bpojO2KhXyqkpAikOqju729k3z0TG.jpg', NULL, '2021-03-08 09:52:05', '2021-03-08 09:52:05'),
(16, 1, 'Kadaulatan Pangan dan Gizi _ Anak dan Perempuan', 'Gambar', 'galeri/CjnaKEaIpGkGeNGKZ8pnT8Y1GkgBWLCc44DzF8E5.jpg', NULL, '2021-03-08 09:56:57', '2021-03-08 09:56:57'),
(17, 1, 'Komitmen Pusat _ Daerah untuk Kedaulatan Pangan Rakyat Miskin', 'Gambar', 'galeri/eDNCRGYnRJQRytMVJu9grIPZ28KMGbNWsMRPsc6R.jpg', NULL, '2021-03-08 13:52:46', '2021-03-08 13:52:46'),
(19, 1, 'Pangan Lokal dan Reboisasi Lahan _ INPROSULA', 'Video', 'https://www.youtube.com/embed/https://www.youtube.com/watch?v=0dwcYACr1k0', NULL, '2021-03-17 04:22:10', '2021-03-17 04:22:10'),
(20, 1, 'Hutan Lestari - Masyarakat Sejahtera dengan Kopi _INPROSULA', 'Video', 'https://www.youtube.com/embed/https://youtu.be/C_PyOFbd6VA', NULL, '2021-03-17 05:31:17', '2021-03-17 05:31:17'),
(21, 1, 'Live TVRI Rasda', 'Video', 'https://www.youtube.com/embed/https://youtu.be/eZe3QUOM1KI', NULL, '2021-03-22 11:01:00', '2021-03-22 11:01:00'),
(22, 1, 'aneka benih pangan  lokal petani dampingan INPROSULA', 'Gambar', 'galeri/SIs5pnus4TqViFsje4DEXjwzVXgZcGQwwqBPb7Vc.jpg', NULL, '2021-03-25 17:04:10', '2021-03-25 17:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri_detail`
--

CREATE TABLE `tb_galeri_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `galeri_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_galeri_detail`
--

INSERT INTO `tb_galeri_detail` (`id`, `galeri_id`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 14, 'galeri/OqrWRaix01l0wHKRUZVbSy7wnOYp29A08jBOtHcx.jpg', '2021-03-18 05:19:21', '2021-03-18 05:19:21'),
(8, 14, 'galeri/2TnAPmKJWoScRgP3mixSKXwpqXPMb2gLdeF5QEg3.jpg', '2021-03-18 05:20:10', '2021-03-18 05:20:10'),
(9, 13, 'galeri/Kb6HoFZF5B9o3hA24fAaGLMg26gMBIxtfIED3cDm.jpg', '2021-03-22 10:27:25', '2021-03-22 10:27:25'),
(10, 13, 'galeri/Vbv7COmiKwLOnmqIHSfby8IHCuOovOpVOjvcYw66.jpg', '2021-03-22 10:27:57', '2021-03-22 10:27:57'),
(11, 13, 'galeri/WxU45NIkhEKg1QbAfWFTKM7meAkeAljqhoQGW6fb.jpg', '2021-03-22 10:28:33', '2021-03-22 10:28:33'),
(12, 13, 'galeri/zojhO6KxhUdEwYHGsB8g94iAe9oajcowvcJB65cg.jpg', '2021-03-22 10:29:18', '2021-03-22 10:29:18'),
(13, 13, 'galeri/nytmYQlEy7KCW5e1kt6CuP8e6uYhK89dkAEcZYmi.jpg', '2021-03-22 10:29:47', '2021-03-22 10:29:47'),
(14, 13, 'galeri/b1hPNfA5CgPtm4hM6sZ6ZnCFzCRTyZIiSAUtF1zq.jpg', '2021-03-22 10:30:34', '2021-03-22 10:30:34'),
(15, 13, 'galeri/GXyWzL4deYCxbtYnJp5g4NIKo7wJwtgd8P0epUso.jpg', '2021-03-22 10:30:58', '2021-03-22 10:30:58'),
(16, 13, 'galeri/Hjm0KsY04Du5ee9sjojZJEULNIoYhIb8Qy5xWQD4.jpg', '2021-03-22 10:31:18', '2021-03-22 10:31:18'),
(17, 13, 'galeri/KGhzkzdGOriUDR70djFpFxACoc9LGsBuROuXyFWb.jpg', '2021-03-22 10:31:40', '2021-03-22 10:31:40'),
(18, 13, 'galeri/QtJm0cM45htGrJxLe4oaWveLa5t0Bt6bwjTYAxvh.jpg', '2021-03-22 10:32:16', '2021-03-22 10:32:16'),
(19, 13, 'galeri/PX8UHT37NT2GbBtwAuck8Hz6cunyeCqZ4cAba323.jpg', '2021-03-22 10:32:49', '2021-03-22 10:32:49'),
(20, 13, 'galeri/sX1aLTPkgG1r4elmCORGlZNYxhb7NxJeRraGrVUZ.jpg', '2021-03-22 10:33:15', '2021-03-22 10:33:15'),
(21, 13, 'galeri/sBFfVlDebnhG8YuDwMSTz9qHREk90JIr5ltyEKqo.jpg', '2021-03-22 10:33:47', '2021-03-22 10:33:47'),
(22, 13, 'galeri/SBu2YuXZ78qBdkOYd8x3VjOXOUX2fOklym5JsbBw.jpg', '2021-03-22 10:34:16', '2021-03-22 10:34:16'),
(23, 13, 'galeri/YcaD8tx1zmpEdknMreRyNUpqzWRs9HNQ6gi2wiQm.jpg', '2021-03-22 10:34:38', '2021-03-22 10:34:38'),
(24, 13, 'galeri/XxvfMm8F6z43dICPhvkt2QZpbAKdaxuiZBCINQuX.jpg', '2021-03-22 10:35:35', '2021-03-22 10:35:35'),
(25, 13, 'galeri/kgWXjUCOIFmIxjvUSKKzhOhiee1S0igzmLjp9vhY.jpg', '2021-03-22 10:35:35', '2021-03-22 10:35:35'),
(26, 13, 'galeri/n0GGjbl6NELmiQLgcvMbzCD0D1a229tBY48tUTo1.jpg', '2021-03-22 10:35:35', '2021-03-22 10:35:35'),
(27, 13, 'galeri/8rG6iKVNMxTmWsigaqH9gyB8tuNsbq8mSbLa88FG.jpg', '2021-03-22 10:37:13', '2021-03-22 10:37:13'),
(28, 13, 'galeri/9z9Y6PKXpWZ1WwkicG9oqHCOl4zOLclCDtJSq6fa.jpg', '2021-03-22 10:37:13', '2021-03-22 10:37:13'),
(29, 13, 'galeri/9PonaWCqe2ObMznUFqqycStKNPxB6op4RnDacc6r.jpg', '2021-03-22 10:37:13', '2021-03-22 10:37:13'),
(30, 13, 'galeri/ITGfKW5VJelhnavL1H9tGbSJUawDnntLOOi5JZcN.jpg', '2021-03-22 10:37:13', '2021-03-22 10:37:13'),
(31, 13, 'galeri/z5t1PuMYZwE6oYbM5PAMHye6W3HzEONUvTVQdpcI.jpg', '2021-03-22 10:40:25', '2021-03-22 10:40:25'),
(32, 13, 'galeri/6cw0itdNo1pqR2ix446vGr3qxtQFgsyvhzKFwOEG.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(33, 13, 'galeri/98eV7B3Jx1tfzgZD5twJxjceHUBPf72Fnx4CyqZY.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(34, 13, 'galeri/fga9pIOW4bgVYA4jV6hGbwuuPkqgqB8syxIzUd2o.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(35, 13, 'galeri/JHrV0jwIxVpZhllWsYXvFiMk0WSzHqPIALXPw7u7.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(36, 13, 'galeri/JNZkxwXEQdYj5ZDgGcq7CF0joQpt66zlOCY2zwgL.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(37, 13, 'galeri/kQYZHnCZy1YlDvDdVdsRJ55ri8bRYbO7Ix9q9b42.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(38, 13, 'galeri/f6nMI2T6pRWtuJ8RlsRQg13nsa1OAVnzqxkx5v7r.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(39, 13, 'galeri/yjxrbKXhyJLKIsuQBgHFcw1jv3d33gCmGjDVdNWv.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(40, 13, 'galeri/V1O7VhPans0O9VZbDDaLtEkv48v2e2uvtS9XMm18.jpg', '2021-03-22 10:40:26', '2021-03-22 10:40:26'),
(41, 13, 'galeri/gCI4SXHzo71Pr1mhBskjtiL6E2V9Z97pQz7sw5mN.jpg', '2021-03-22 10:52:00', '2021-03-22 10:52:00'),
(42, 13, 'galeri/3cQ0q7Zt68oAo4NyaHYRbONyiYYohwWJ0M6tgFzs.jpg', '2021-03-22 10:52:00', '2021-03-22 10:52:00'),
(43, 13, 'galeri/7CHMLgTfRwkLdGYq9AwXuf7nt4GDe6jAQFz2VIz2.jpg', '2021-03-22 10:52:00', '2021-03-22 10:52:00'),
(44, 13, 'galeri/gA6cE1NtFJBmuVuiTxEWPv1EsFjwqKaPCUYCLZNS.jpg', '2021-03-22 10:52:00', '2021-03-22 10:52:00'),
(45, 17, 'galeri/oWjHP5wNIcos9cznnSTRXC2A6BGeyReZLlvp2Sg5.jpg', '2021-03-25 15:21:13', '2021-03-25 15:21:13'),
(46, 17, 'galeri/qopWio0VteRR1ZrH6zK5HA22rvkahkfo80b9LrHI.jpg', '2021-03-25 15:21:13', '2021-03-25 15:21:13'),
(47, 17, 'galeri/sUhYGqDksTVdM8F2qqZ6pX5MIf1T42FLv89fFOoh.jpg', '2021-03-25 15:21:13', '2021-03-25 15:21:13'),
(48, 17, 'galeri/F8qCDfFMf9ssLPBe02lziVQ1q3JJKc42KLpQDWVZ.jpg', '2021-03-25 15:27:35', '2021-03-25 15:27:35'),
(49, 17, 'galeri/a2Te9cUHkcanuHnyaYH1zO4GoZkuOHLVdjLeuls2.jpg', '2021-03-25 15:27:35', '2021-03-25 15:27:35'),
(50, 17, 'galeri/EEaUbaImQpFa6ECACkynTqMriG6mVFuR152IpaIH.jpg', '2021-03-25 15:27:35', '2021-03-25 15:27:35'),
(51, 17, 'galeri/NE3szgjhoIuSgX8hHW9QlJfPaVPobt4e6DvJb3Wj.jpg', '2021-03-25 15:27:35', '2021-03-25 15:27:35'),
(52, 17, 'galeri/mzfvn50Fi625ru2wmwoRikv4KRDWwwytNlh5URLu.jpg', '2021-03-25 15:32:52', '2021-03-25 15:32:52'),
(53, 17, 'galeri/A2VIhI1FYbMIOsSkkXP8uYmZTxF01erXl6nV7n48.jpg', '2021-03-25 15:32:52', '2021-03-25 15:32:52'),
(54, 17, 'galeri/GMMx4cA2jtW8V4zZD85sESCvfALgOregdFhRjXkk.jpg', '2021-03-25 15:32:52', '2021-03-25 15:32:52'),
(55, 17, 'galeri/kuJ6wsSt3IUvdOgxTxhmsfBBZFkru3i3ELsnvDAk.jpg', '2021-03-25 15:32:52', '2021-03-25 15:32:52'),
(56, 17, 'galeri/eNDBWhynoU83pzrAqzYtmNwHFFveh8nk1ViTtH5C.jpg', '2021-03-25 15:32:52', '2021-03-25 15:32:52'),
(57, 17, 'galeri/YDJYMMKizvZ0xy3f1GPBplbRv8VZr9o7MKgndGoJ.jpg', '2021-03-25 15:37:55', '2021-03-25 15:37:55'),
(58, 17, 'galeri/qkkjsq4F8ntZBSaeAFzwj40DengiDjr0DuVXOk0V.jpg', '2021-03-25 15:37:55', '2021-03-25 15:37:55'),
(59, 17, 'galeri/Nzq0NSeCUWV5gS7ujmeIjwPgEDEpg4kfNuxRH5vx.jpg', '2021-03-25 15:37:55', '2021-03-25 15:37:55'),
(60, 17, 'galeri/rHEgGgKJs557NPMF9NVSeiOaF4a7oIaYRVaW1FHz.jpg', '2021-03-25 15:37:55', '2021-03-25 15:37:55'),
(61, 17, 'galeri/iOONNhqXh6bhWezrOiW7EYNbIZtBbU30pzwp1ufK.jpg', '2021-03-25 15:37:56', '2021-03-25 15:37:56'),
(62, 17, 'galeri/er7ly307BxafDzHjgg3IQNf9ObThBwJKAhVIyU9S.jpg', '2021-03-25 15:53:13', '2021-03-25 15:53:13'),
(63, 17, 'galeri/166PNFY8iSdRczzR6zDyHrjfb79ryilvqqfsRiUn.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(64, 17, 'galeri/sLeNMZtLuPXy8HoQVmvc2Jnwv5KKedXEhWr6HoGx.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(65, 17, 'galeri/bUhBTvTzaNX3YDH2UhEqGq9aYVW8HmkE3CLOR9tI.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(66, 17, 'galeri/PXgHggVFfnPVXaBas2ABFLBHTybUmY31oxE4Rzft.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(67, 17, 'galeri/C5Itm2smNEdgLlboKDsEsR1dURe8Fudhpxz7S8Y7.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(68, 17, 'galeri/7YeQHiGUZZMc6ZS8N3HOrpWvtq60Ayp7FWU6qVX0.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(69, 17, 'galeri/dFGUp0pdkqAH4xsbtg75tsLxoidriI5Khx7nWyey.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(70, 17, 'galeri/UqwH7RzGB45dGfO0U6Ig2W4BpFItzKKtkjTenhtj.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(71, 17, 'galeri/2mwuSylB9lR8ScYy0hlWu1pnXd9HR1IMSYCrYwYf.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(72, 17, 'galeri/9nDyZYexLdvMmsYti0RHmgiiO4lBbcJnIB6rju9W.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(73, 17, 'galeri/W9r0FvxiCYf3aqheVkPyudI59hcUJt8hRrZVxU1b.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(74, 17, 'galeri/Lm2G5fikJ5BDQVnyXSyQJToTV9aRyETYtMQtQxXr.jpg', '2021-03-25 15:53:14', '2021-03-25 15:53:14'),
(75, 14, 'galeri/2A2ce86kCkx9ULQSxxUekH2pq7nH8hrspGhHUIGz.jpg', '2021-03-25 16:38:27', '2021-03-25 16:38:27'),
(76, 14, 'galeri/JdZf5DSqgzQpMzHxz8QgDZcXf7PRswnzRZ3hg6Vl.jpg', '2021-03-25 16:38:27', '2021-03-25 16:38:27'),
(78, 14, 'galeri/dY9dpnQbo795f6Ig359SJq4xD62PNEfcaYicSVMS.jpg', '2021-03-25 16:38:27', '2021-03-25 16:38:27'),
(79, 14, 'galeri/ELaEebZf44togMaMNSGjPoA2ebKkm5qfPjvAZ1VF.jpg', '2021-03-25 16:38:27', '2021-03-25 16:38:27'),
(80, 14, 'galeri/FoKNoNvlzAR9gxEj13usxvL9fIe95DSlIZ7fyjO7.jpg', '2021-03-25 16:43:22', '2021-03-25 16:43:22'),
(81, 14, 'galeri/J2wf1bmzv2XphCnS6DyDRb2OwKkdKmuLmHcWAgP3.jpg', '2021-03-25 16:43:22', '2021-03-25 16:43:22'),
(82, 14, 'galeri/flwOiTA9pVxB89GSz1QSD9wOEbQSR5fngpsjjnsT.jpg', '2021-03-25 16:43:22', '2021-03-25 16:43:22'),
(83, 14, 'galeri/AjBmQEMbD5xwSeEN6RTZsAVKRxe9QmmcnfNsNquv.jpg', '2021-03-25 16:43:22', '2021-03-25 16:43:22'),
(84, 14, 'galeri/gidUlJaf0ayZiI5BjE6E8Can7gTsVXjkZoThX8Nn.jpg', '2021-03-25 16:43:22', '2021-03-25 16:43:22'),
(85, 14, 'galeri/juPtPXiQvgUTJmTafJ6YlJrVBs5Z9OLXKzUmjqDk.jpg', '2021-03-25 16:49:55', '2021-03-25 16:49:55'),
(86, 14, 'galeri/B8Px1SydEqAo3qBP18okqgYgD05j4YHkg5ElSdOC.jpg', '2021-03-25 16:49:55', '2021-03-25 16:49:55'),
(87, 14, 'galeri/OyU3b46mzNEUuDAjJsndD3WJQdmIuwUH7Nry75Ap.jpg', '2021-03-25 16:49:55', '2021-03-25 16:49:55'),
(88, 14, 'galeri/jNPU7AokEYhXXs56Qg5v2yGV8GGtrQrlYtYdP80t.jpg', '2021-03-25 16:49:55', '2021-03-25 16:49:55'),
(89, 14, 'galeri/f4V9h8nvK1IxusAwJYbzZb9yzHKPLXdZtztt0fvZ.jpg', '2021-03-25 16:49:55', '2021-03-25 16:49:55'),
(90, 14, 'galeri/brau32skC4E7QImEiw1zvKQFoZWehrafkWoC8gke.jpg', '2021-03-25 16:52:43', '2021-03-25 16:52:43'),
(91, 14, 'galeri/N4IIqAucJtNrdQ3HT3ZK4CZcpN0UKz5I2kw0bIeA.jpg', '2021-03-25 16:52:43', '2021-03-25 16:52:43'),
(92, 14, 'galeri/rZFcaZJncJmaIozidf4BuDhjH1Xu72X7nqtRliH5.jpg', '2021-03-25 16:52:43', '2021-03-25 16:52:43'),
(93, 14, 'galeri/rgbrF27NJafxUWp0UZRUkMxAfmrrAQOYrvfZm17i.jpg', '2021-03-25 16:52:43', '2021-03-25 16:52:43'),
(94, 14, 'galeri/tUBOtbMJ0bMIApSCdeRQZho0HhwNyl3RrS8zMSUC.jpg', '2021-03-25 16:52:43', '2021-03-25 16:52:43'),
(95, 14, 'galeri/i1qozSXP1JPCEoer428OFIOpchOVzJdov5jwLjO4.jpg', '2021-03-25 16:55:14', '2021-03-25 16:55:14'),
(96, 14, 'galeri/ozujchniDsACKW46GoM9N49TMnuV50g4Y8QR6QLZ.jpg', '2021-03-25 16:55:14', '2021-03-25 16:55:14'),
(97, 14, 'galeri/Ukgwlgaffcyss7ETETeN9cnNkNEIfpUbGmcfg3r6.jpg', '2021-03-25 16:55:15', '2021-03-25 16:55:15'),
(98, 14, 'galeri/WSEVQtg7IQhvMo5kiCVzE2jgesmsPQw3rjDKXujS.jpg', '2021-03-25 16:57:09', '2021-03-25 16:57:09'),
(99, 14, 'galeri/dSB9hOC0pFGhXoKQ2MbQr1BoHyWuulYOpinW6czF.jpg', '2021-03-25 16:57:09', '2021-03-25 16:57:09'),
(100, 14, 'galeri/fo8xj37P0v7lGDyGeXAng8BJs2O2rKuLXZgWG9w8.jpg', '2021-03-25 16:57:10', '2021-03-25 16:57:10'),
(101, 22, 'galeri/GbHhETD9XbeG1TAdkVGN0bEynHgJ5ES4v9wsKY9W.jpg', '2021-03-25 17:05:51', '2021-03-25 17:05:51'),
(102, 22, 'galeri/Htcxg6H33CIRWGODLjmsevwiZfFQXxAex9AjTXIG.jpg', '2021-03-25 17:05:51', '2021-03-25 17:05:51'),
(103, 22, 'galeri/apNWA8e7iBhP92hIXAHmHgXhtRnpSJQLBSEWMWUS.jpg', '2021-03-25 17:05:51', '2021-03-25 17:05:51'),
(104, 22, 'galeri/y5lJ7ccJ2ODOiM3w8HdLSTXiF5tVHY6btYHfE5xI.jpg', '2021-03-25 17:05:51', '2021-03-25 17:05:51'),
(105, 22, 'galeri/AJGQkThHCfCNNsoFvm9xW4zJt7PY54G4opjAM0TV.jpg', '2021-03-25 17:09:45', '2021-03-25 17:09:45'),
(106, 22, 'galeri/o7qSDLGZKGM8fHwyyW31zU1uqhEnyEDVZoshHwjc.jpg', '2021-03-25 17:09:45', '2021-03-25 17:09:45'),
(107, 22, 'galeri/cJy1z4xf5eimd9zg89rWdnCnaCiVWDPSkqhjxQlR.jpg', '2021-03-25 17:09:45', '2021-03-25 17:09:45'),
(108, 22, 'galeri/KTqKKomdAUtJQPfLNCryaC2yuOxNHSKEEq9vbMUb.jpg', '2021-03-25 17:09:45', '2021-03-25 17:09:45'),
(109, 22, 'galeri/gHcWrWbsjc39xdnCyHp91G4zgTxN10lyHvaXpMK1.jpg', '2021-03-25 17:09:45', '2021-03-25 17:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strategi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `title`, `slug`, `konten`, `gambar`, `created_at`, `updated_at`, `file`, `strategi_id`) VALUES
(1, 'OH RASKIN, KAPAN SAMPAI PADAKU...?', 'oh-raskin-kapan-sampai-padaku', '<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\"><span style=\"color:#0b5294\"><a name=\"_Toc375901984\"> Latar belakang</a></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Pangan merupakan kebutuhan dasar manusia yang paling utama, sehingga pemenuhannya menjadi bagian hak asasi tiap individu yang diakui, dilindungi dan dijamin oleh UUD&rsquo;45, kesepakatan International tentang HAM (Universal Declaration of Human Right),&nbsp; pembukaan Konstitusi FAO, dan Kovenan Internasional tentang Hak-hak Ekonomi Sosial dan Budaya (ECOSOC). Komite PBB untuk ECOSOC (GC12) mendefiniskan hak atas kecukupan pangan sebagai berikut:</span></span></p>\r\n\r\n<p class=\"MsoQuote\" style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\"><span style=\"color:black\"><span style=\"font-style:italic\">&ldquo;Kecukupan pangan dapat terwujud jika <span style=\"background:white\">setiap pria, wanita dan anak, baik sendiri atau bersama orang lain dalam masyarakat, memiliki akses fisik dan ekonomi sepanjang waktu terhadap pangan yang layak atau cara untuk pengadaannya.&rdquo;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Bahkan dalam kesepakatan MDG&rsquo;s dunia internasionaltelah mentargetkan pada tahun 2015 setiap negara termasuk Indonesia bertekad menurunkan kemiskinan dan kelaparan sampai separuhnya. Konsekuensi Negara yang telah meratifikasi Konvenan ECOSOC melalui <span style=\"color:black\">Undang Undang Nomor 11 Tahun 2005</span><span lang=\"IN\" style=\"color:black\">, </span>Indonesia berkewajiban dan bertanggungjawab untuk menghormati (<i>to respect</i>), melindungi (<i>to protect</i>), dan memenuhinya (<i>to fulfill</i>) hak atas pangan seluruh warganya. </span></span></p>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Undang Undang Nomer 18 tahun 2012 tentang Pangan mengamanatkan bahwa negara berkewajiban mewujudkan ketersediaan, keterjangkauan, dan pemenuhan konsumsi pangan yang cukup, aman, bermutu, dan bergizi seimbang. Kewajiban Negara tersebut mencakup&nbsp; baik pada tingkat nasional maupun daerah hingga perseorangan secara merata di seluruh wilayah Negara Kesatuan Republik Indonesia sepanjang waktu dengan memanfaatkan sumber daya, kelembagaan, dan budaya local.</span></span></p>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Secara khusus tantangan untuk memerangi kelaparan di Indonesia adalah: </span></span></p>\r\n\r\n<ol>\r\n	<li style=\"margin-left:8px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Paradigmapangan pokok beras yang membuat&nbsp; 95% dari jumlah penduduk Indonesia mengkonsumsi beras dengan rata-rata sebesar 113,7kg/jiwa/tahun, lebih tinggi dari rata &ndash; rata &nbsp;konsumsi beras negara tetangga, Malaysia 80kg/jiwa/tahun, Thailand 70 kg/jiwa/tahun, dan Jepang 58 kg/jiwa/tahun. (BPS, 2011);</span></span></li>\r\n	<li style=\"margin-left:8px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Sementaraproduksi beras dalam negeri terus menurun karena menurunnya luas tanam dan luas panen akibat <i>&ldquo;leveling off&rdquo;</i> produktivitas karena lahan yang tereksplotasi, anomali iklim, alih fungsi lahan;</span></span></li>\r\n	<li style=\"margin-left:8px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Disisi yang lain motivasi untuk memproduksi beras oleh petani terus menurun karena menurunnya kemampuan tukar produk beras untuk keperluan konsumsi dan proses produksi akibat membanjirnya beras &ndash; beras yang didatangkan di pasar setempat.<a href=\"#_ftn1\" name=\"_ftnref1\" title=\"\"><span class=\"MsoFootnoteReference\" style=\"vertical-align:super\"><span class=\"MsoFootnoteReference\" style=\"vertical-align:super\"><span lang=\"EN-US\" style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">[1]</span></span></span></span></a></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\"><span style=\"color:#0b5294\"><a name=\"_Toc375901985\"> Tujuan</a></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left: 40px;\"><span lang=\"EN-US\" style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Tujuan akhir dari seminar dan lokakarya ini adalah untuk menjamin </span></span><span lang=\"IN\" style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">&nbsp;perbaikan tata kelola bantuan pangan kepada masyarakat miskin berbasis pada potensi sumberdaya lokal, kemampuan dan kesiapan daerah. </span></span></p>\r\n\r\n<p style=\"margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Secara khusus kegiatan ini bertujuan untuk :</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-indent: 0cm; margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"tab-stops:list 18.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Meningkatkan strategi pemenuhan hak atas pangan oleh Pemerintah dan Masyarakat sebagaimana diamanatkan dalam UU no 18 Tahun 2012 tentang Pangan;</span></span></span></li>\r\n	<li style=\"text-indent: 0cm; margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"tab-stops:list 18.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Menggali efektifitas dan relevansi pelaksanaan program RASKIN untuk peningkatan dan perluasan kesejahteraan rakyat;</span></span></span></li>\r\n	<li style=\"text-indent: 0cm; margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"tab-stops:list 18.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Menemukenali keberhasilan dan kegagalan RASKIN untuk <span style=\"background:white\"><span style=\"color:black\">memperluas advokasi&nbsp;</span></span><span lang=\"EN-US\" style=\"background:white\"><span style=\"color:black\">perbaikan tata kelola </span></span><span lang=\"IN\" style=\"background:white\"><span style=\"color:black\">bantuan pangan berbasis potensi sumberdaya lokal, kemampuan dan kesiapan daerah</span></span><span lang=\"EN-US\" style=\"background:white\"><span style=\"color:black\">;</span></span></span></span></span></li>\r\n	<li style=\"text-indent: 0cm; margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"tab-stops:list 18.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\"><span lang=\"IN\" style=\"background:white\"><span style=\"color:black\">Memperkenalkan&nbsp; RASDA dan sebagai strategi Perbaikan Tata Kelola RASKIN di Daerah</span></span><span lang=\"EN-US\" style=\"background:white\"><span style=\"color:black\">;</span></span></span></span></span></li>\r\n	<li style=\"text-indent: 0cm; margin-left: 40px; text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"tab-stops:list 18.0pt\"><span style=\"font-family:&quot;Cambria&quot;,serif\">Menggali bentuk &ndash; bentuk bantuan pangan untuk mempercepat pengurangankemiskinan.</span></span></span></li>\r\n</ul>\r\n\r\n<div>&nbsp;</div>', 'kegiatan//wAMVjKw8ThuKq3g69HrGk9MrjEsKvCT1u6mBj0nX.jpg', '2021-02-09 00:12:47', '2021-03-13 01:19:33', 'documents//hSK5bdnq4W17VGXVxdnpkkI68eQcUTzfwxZ1mwuM.docx', 1),
(2, 'Embung _ Pertanian Berkelanjutan Kabupaten Malinau - Kalimantan Utara', 'embung-pertanian-berkelanjutan-kabupaten-malinau-kalimantan-utara', '<p><strong>SELAYANG PANDANG</strong></p>\r\n\r\n<p><span class=\"fontstyle0\">Strategi dalam mencapai tujuan tersebut diwujudkan melalui empat pilar utama, yakni : </span></p>\r\n\r\n<p><span class=\"fontstyle2\">1. </span><span class=\"fontstyle0\">Meningkatkan produktivitas komoditas utama pangan yang antara lain : padi, jagung, kedelai melalui penerapan Sekolah Lapang Pertanian Berkelanjutan (SLPB). Metode SLPB meliputi pemenuhan benih unggul lokal dan pupuk organik. Pendampingan budidaya sampai panen, pengamanan hasil panen dengan bantuan unit perontok, lantai jemur dan terpal</span></p>\r\n\r\n<p><span class=\"fontstyle2\">2. </span><span class=\"fontstyle0\">Meningkatkan nilai tambah komoditas dengan mengolah pisang menjadi lebih berharga oleh KWT (Kelompok<br />\r\nWanita Tani) seperti keripik dan sale, memproduksi kebutuhan dapur dengan menanam aneka jenis tanaman sayuran, mengembangkan ternak kambing unggul lokal dengan sistem kandang komunal</span></p>\r\n\r\n<p><span class=\"fontstyle2\">3. </span><span class=\"fontstyle0\">Meningkatkan daya dukung lahan melalui implementasi perda konservasi dengan membangun embung geomembran</span></p>\r\n\r\n<p><span class=\"fontstyle2\">4. </span><span class=\"fontstyle0\">Menguatkan kapasitas kelembagaan masyarakat melalui pembentukan maupun revitalisasi kelompok tani dan<br />\r\nkelompok wanita tani, mendorong terbentuknya kelembagaan ekonomi masyarakat melalui koperasi petani.<br />\r\nPilar penting ketiga, yang prosesnya dijelaskan dalam buku ini secara mendetail adalah pembangunan Embung<br />\r\nGeomembran sebagai infrastruktur pendukung Peningkatan Produktivitas dan Nilai Tambah Pertanian Terpadu. Kegiatan<br />\r\nini dipromosikan sebagai model konservasi lahan kering dataran tinggi yang mendukung pertanian terpadu pada kawasan hutan.</span></p>\r\n\r\n<p><span class=\"fontstyle0\">Prinsip kerja Embung ini adalah menampung air hujan, mengamankan dan kemudian mendistribusikan ke lahan di sekitarnya yang sebelumnya tidak terjangkau irigasi. Dibangun di lahan perbukitan seluas 0,8 hektar, memiliki curah hujan 1.800 mm &ndash; 3.000 mm/tahun untuk irigasi lahan &ndash; lahan milik petani seluas 20 hektar mengikuti kerja gravitasi dibantu pipa &ndash; pipa pembagi diatur dengan pintu pembuka dan penutup. Berbentuk oval, berdiameter 70 meter dan 50 meter, kedalaman seluruhnya 5 meter dengan kedalaman air 4 meter, ditampung menggunakan geomembran yang diletakkan di dasar dan sekeliling dinding, di pinggirnya dibuat bibir / tanggul penahan selebar 3 meter. Daya tampung air mencapai 7.626 m3, dalam durasi 3 bulan mampu mengairi lahan seluas 20 hektar milik 120 petani untuk 3 jenis pohon buah &ndash; buahan dan 1 jenis<br />\r\ntanaman pangan. Selain dapat menambah populasi tanaman yang berarti mempercepat konservasi, di dalam embung juga dapat dibudidayakan ikan.</span></p>\r\n\r\n<p><span class=\"fontstyle0\">Pembangunan infrastruktur embung ini menyelesaikan tiga persoalan yang dihadapi oleh penduduk di Kabupaten Malinau, antara lain : </span></p>\r\n\r\n<p><span class=\"fontstyle2\">1. </span><span class=\"fontstyle0\">Menyelamatkan persoalan gagal panen yang selalu terjadi karena banjir dan kekeringan yang dipicu oleh perbedaan<br />\r\nfluktuatif hari hujan dan hari kering.</span></p>\r\n\r\n<p><span class=\"fontstyle2\">2. </span><span class=\"fontstyle0\">Menyediakan sumber pangan dan mendorong peningkatan sumber pendapatan masyarakat melalui optimalisasi tanaman pangan seluas 20 hektar yang didukung oleh Embung Geomembran dan pengembangan destinasi wisata konservasi. </span></p>\r\n\r\n<p><span class=\"fontstyle2\">3. </span><span class=\"fontstyle0\">Menyelamatkan kawasan hutan dari deforestasi melalui pengkayaan keanekaragaman hayati dan plasma nutfah. Secara lebih mengerucut, buku ini memberikan gambaran proses pembangunan Embung Geomembran. Poin utama pembangunan Embung adalah FS DED, implementasi pengelolaan ESMS dan partisipasi masyarakat.</span></p>', 'kegiatan//epSEwDRtERge1PyXiYn53Iqn1ra2ZZ6pO59B9RqT.png', '2021-03-09 13:18:18', '2021-03-13 01:20:22', 'documents//lDCmBI1T2rErGtC2eD3kbSTk317nxOLt4P4F3ox0.pdf', 2),
(3, 'Panduan Sekolah Lapang Pertanian Berkelanjutan di Kabupaten Malinau - Kalimantan Utara', 'panduan-sekolah-lapang-pertanian-berkelanjutan-di-kalimantan-utara', '<p><strong>LATAR BELAKANG</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Pada tahun 2030, pemerintah mencanangkan improvisasi radikal di bidang pertanian sampai pada penggunaan metode organik pada setiap lini pertanian. Proyeksi tersebut terasa cukup optimistik jika melihat kondisi pencapaian pertanian indonesia di tahun 2016 yang mencapai 79,141 juta ton beras atau naik 4.96% dibandingkan tahun lalu 2015. Di lain sisi, Indonesia juga berhasil bertahan di bawah kondisi cuaca yang tidak menentu setelah El Nino menerjang di tahun 2015 dan La Nina di tahun 2016</p>', 'kegiatan//Z8gEEbNqY0lWi0lhYnH1QX28g80NOm5cI1DdkRGl.png', '2021-03-09 13:25:48', '2021-03-13 01:20:31', 'documents//I1wTPK9NGHnrSeBmfamim0NhEwOmCEAmJUgpwLQm.pdf', 2),
(4, 'Buku Cerita Sejahtera dan Lestari dari kopi Pantan Cuaca_INPROSULA', 'BukuCeritaSejahteradanLestaridarikopiPantanCuaca_INPROSULA', '<p style=\"margin-top:2px; margin-right:2px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"line-height:104%\"><span style=\"font-family:Calibri,sans-serif\"><span lang=\"EN-US\" style=\"font-size:14.0pt\"><span style=\"line-height:104%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Puji Syukur ke hadirat Allah SWT, yang telah memberikan rahmat-Nya kepada kita semua sehingga buku cerita tentang proses kerjasama dan kemitraan bidang kehutanan ini dapat terwujud.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-top:2px; margin-right:2px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"line-height:104%\"><span style=\"font-family:Calibri,sans-serif\"><span lang=\"EN-US\" style=\"font-size:14.0pt\"><span style=\"line-height:104%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Ucapan terimakasih ditujukan pertama kepada seluruh stafUSAID LESTARI yang telah mendukung terwujudnya buku cerita ini, baik dari segi pendanaan maupun masukan-masukannya. Kedua kepada semua tim lapangan dan tim kader yang telah bekerja di lapangan dan kontribusinya terhadap pencapaian ini sungguh luar biasa. Demikian pula, kepada para pihak yang tidak bisa disebutkan satu-persatu atas kerjasama dan dukungannya sehingga program pendampingan kelompok tani di Pantan Cuaca dapat ber<span style=\"letter-spacing:.3pt\">j</span>alan dengan baik.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-right:2px; text-align:justify; margin-bottom:11px\"><span style=\"font-size:11pt\"><span style=\"line-height:112%\"><span style=\"font-family:Calibri,sans-serif\"><span lang=\"EN-US\" style=\"font-size:14.0pt\"><span style=\"line-height:112%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Buku cerita ini terdiri dari enam bagian yang bercerita tentang proses kerjasama kemitraan kehutanan, tantangan<span style=\"letter-spacing:.15pt\">, dan keberhasilan kelompok tani dalam mengelola kawasan &nbsp;hutan lindung &nbsp;dengan pengembangan&nbsp; &nbsp;komoditas kopi. Di samping itu juga &nbsp;adanya proses peningkatan &nbsp;produktivitas &nbsp;tanaman kopi di Pantan Cuaca. Hal lain yang tak kalah penting &nbsp;adalah pembelajaran yang dapat dipetik</span></span></span></span> <span lang=\"EN-US\" style=\"font-size:13.0pt\"><span style=\"line-height:112%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">dari proses kegiatan &nbsp;pembangunan &nbsp;hutan lestari dan pengembangan &nbsp;kelembagaan &nbsp;serta pertanian &nbsp;berkelanjutan.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-right:2px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"line-height:112%\"><span style=\"font-family:Calibri,sans-serif\"><span lang=\"EN-US\" style=\"font-size:13.0pt\"><span style=\"line-height:112%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Disadari bahwa &nbsp;apa yang tersusun &nbsp;dan dituliskan &nbsp;dalam buku cerita ini belumlah &nbsp;sempuma. &nbsp;Untuk itu sumbang saran, masukan dan kritik membangun senantiasa diharapkan dari semua pihak yang berkesempatan membaca &nbsp;dan mencermati &nbsp;buku ini.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span lang=\"EN-US\" style=\"font-size:13.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">SALAM &nbsp;LESTARI</span></span></span></span></span></p>', 'kegiatan//V1OXzGMNNG1L71rzlJCUiuIMq1HAmzuPHkexE467.jpg', '2021-03-17 08:03:01', '2021-03-17 08:03:50', 'documents//1yxCj9juNw3tIyuWVZYageQNE8icWVq1xvxKCQzl.pdf', 2),
(6, 'Pasca Panen Kopi', 'PascaPanenKopi', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:14.0pt\"><span style=\"font-weight:normal\">Kopi Arabika adalah salah satu jenis komoditas kopi yang dihasilkan dari tanaman Coffea Arabica. Tanaman ini dipercaya berasal dari daerah Eropa kemudian dibawa oleh para pedagang Arab ke Yaman. Bangsa Arab mulai mempopulesrkan ekxtrak biji kopi Arabika yang diseduh dengan air panas sebagi minuman penyegar.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:14.0pt\"><span style=\"font-weight:normal\">Diabat ke-15 popularitas minuman kopi mulai menyebar ke Eropa. Awalnya orang-orang Eropa membeli kopi dari pedagang Arab. Kemudian mulai mengembangbiakkan tanaman tersebut di Asia dan Amerika. Sejak itu kopi menjadi komoditas yang sangat popular diseluruh dunia.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:14.0pt\"><span style=\"font-weight:normal\">Bahkan sempet menjadi komoditas kedua tersebar yang diperdagangkan secara global setelah minyak bumi.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-weight:normal\">Saat ini terdapat 4 jenis kopi yang diperdagangkan secara global, yakni Arabika, Robusta, Liberika dan Excelsa lebih dari 99% perdagangan kopi duniadidominasi jenis Arabika dan Robusta. Sisanya dalam jumlah yang tidak signifikan terdiri darijenis Liberika dan Excelsa.</span></span></span></span></p>', 'kegiatan//rclAMf9FCTsBRtFYxUdCOIcgg9YY3b1K6V6a7apP.jpg', '2021-03-17 08:29:09', '2021-03-17 08:29:09', 'documents//tkbvFjpBaOFs1Yr0J0DHkCEF2k6xWwycf1cmji9F.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('media','news_inprosula') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news_inprosula',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `jenis`, `user_id`, `title`, `slug`, `tanggal`, `img`, `creator`, `isi`, `sumber`, `created_at`, `updated_at`) VALUES
(4, 'news_inprosula', 1, 'Pengukuhan Gubernur DIY sebagai Wali Budaya Pangan Nusantara', 'pengukuhan-gubernur-diy-sebagai-wali-budaya-pangan-nusantara', '2018-07-30 00:00:00', 'news/XRBGgOX88q1OztB2oOBNzWeSZ6eXpyWQf8smT5rR.jpeg', NULL, '<p style=\"text-align: justify;\">Gubernur Daerah Istimewa Yogyakarta Sri Sultan Hamengku Buwono X dikukuhkan sebagai Wali Budaya Pangan Nusantara oleh Masyarakat Peduli Pangan Nusantara. Pengukuhan dilakukan pada hari Jumat, 16 Oktober 2009 dengan penyerahan wayang Dewa Wisnu sebagai simbol kemakmuran dan miniatur lumbung pangan nusantara kepada Sultan yang juga Raja Keraton Ngayogyakarta Hadiningrat.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Wayang Dewa Wisnu dan miniatur lumbung pangan nusantara itu diserahkan Koordinator Umum Masyarakat Peduli Pangan Nusantara, Direktur Perkumpulan InProSuLA (Institute for Promoting Sustainable Livelihood Approach) Sarijo. &quot;Kami menilai Sri Sultan Hamengku Buwono X mempunyai komitmen tinggi dan pengaruh kuat di dalam melestarikan budaya nasional,&quot; kata Sarijo.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Menurut dia, Sultan juga berhasil membangun persaudaraan dengan semua raja-raja di Nusantara. &quot;Sultan juga mempunyai peran strategis dan konsistensi tinggi di dalam mengembangkan pangan lokal,&quot; katanya. Ia mengatakan pihaknya prihatin atas terabaikannya hak-hak warga atas kecukupan pangan dan merasa sistem pangan lokal kini makin terpinggirkan akibat modernisasi dan globalisasi.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Sultan mengatakan akan berusaha melaksanakan amanah dari gelar yang diterimanya dengan penuh tanggung jawab. &quot;Saya akan lebih berupaya memfasilitasi ketahanan pangan lokal yang berkelanjutan,&quot; katanya. Menurut dia, Indonesia akan tumbuh tanpa jiwa dan identitas jika melupakan adat dan pembangunan pangannya tidak akan visioner dan berkelanjutan.</p>', 'https://www.antaranews.com/berita/158136/sultan-hb-x-wali-budaya-pangan-nusantara', '2020-11-29 00:48:36', '2020-11-29 00:48:36'),
(5, 'news_inprosula', 1, 'InProSuLA dukung program rasda Kulon Progo', 'inprosula-dukung-program-rasda-kulon-progo', '2018-07-30 00:00:00', 'news/VLjWS9pCOMstfoyyrOFUMLnErvcQJxi6E2NUawyf.png', 'Sutarmi', '<p style=\"text-align: justify;\">nProSuLa mendukung program beras miskin daerah Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta, sebagai program pemerintah di masa yang akan datang.</p>\r\n\r\n<p style=\"text-align: justify;\">Direktur InProSuLa Sarijo di Kulon Progo, Rabu, mengatakan program bantuan pangan masyarakat miskin berbasis kesejahteraan rumah tangga petani padi melalui program beras daerah (rasda) ini, yakni bantuan pangan beras bagi masyarakat miskin menggunakan beras yang diproduksi oleh rumah tangga petani setempat.</p>\r\n\r\n<p style=\"text-align: justify;\">&quot;Program yang diinisiasi dan dijalankan oleh Pemkab Kulon Progo serta daerah-daerah lain dalam jaringan kerja masyarakat peduli pangan nusantara ini patut ditawarkan sebagai alternatif perbaikan raskin yang dikelola secara terpusat oleh pemerintah sejak 1998 untuk masyarakat miskin di semua desa di seluruh wilayah Indonesia,&quot; kata Sarijo.</p>\r\n\r\n<p style=\"text-align: justify;\">Ia menilai bantuan beras miskin sebagai satu program pangan pemerintah selama ini mengalami berbagai kendala di antaranya tidak tepat sasaran, data penerima tidak valid, kualitas beras yang dibagikan kurang layak konsumsi, tidak tepat waktu, dan mekanismennya masih sangat terpusat, dan tidak partisipatif.</p>\r\n\r\n<p style=\"text-align: justify;\">&quot;Pengalaman program rasda yang diinisiasi Pemkab Kulon Progo selama 2014 membuktikan bahwa program rasda tidak hanya menjamin enam tepat, tetapi program ini telah memdorong peningkatan pendapatan petani, dan menumbuhkan perekonomian desa dan daerah,&quot; katanya.</p>\r\n\r\n<p style=\"text-align: justify;\">Menurut dia, saat ini program rasda di Kulon Progo mampu menyerap beras tujuh gabungan kelompok tani (gapoktan) sebanyak 1.475 ton.</p>\r\n\r\n<p style=\"text-align: justify;\">Mengingat tidak efektifnya program selama ini, kata dia, program rasda menjadi alternatif program bantuan pangan yang memberikan nilai tambah kepada petani padi sebagai produsen pangan.</p>\r\n\r\n<p style=\"text-align: justify;\">Kemudian meningkatkan perekonomian desa dan daerah serta menjamin hak atas pangan, terutama bagi keluarga miskin.</p>\r\n\r\n<p style=\"text-align: justify;\">&quot;Apabila dikelola oleh daerah, program raskin sangat berpotensi mempercepat pengurangan kemiskinan rumah tangga petani padi. Dimana, saat ini 65 persen petani padi masuk dalam kategori rumah tangga miskin,&quot; katanya.</p>\r\n\r\n<p style=\"text-align: justify;\">Sarijo mengatakan program raskin membutuhkan beras cukup banyak antara 2,8 juta ton sampai 3,1 juta ton setiap tahun, dapat mendorong pertumbuhan perekonomian desa, dan daerah, karena menyerap anggaran cukup besar dengan anggaran antara Rp18,4 triliun hingga Rp21,3 triliun.</p>\r\n\r\n<p style=\"text-align: justify;\">&quot;Rasda ini sebagai solusi dari pergantian program raskin. Pengelolaan oleh daerah dapat meminimalisir ketidaktepatan sasaran karena penetapan rumah tangga sasaran berdasarkan dinamika faktor kemiskinan rumah tangga yang terus berkembang setiap hari,&quot; katanya.</p>\r\n\r\n<p style=\"text-align: justify;\">Kemudian, menurut dia, meminimalisir ketidaktepatan jumlah dan kualitas beras bantuan, karena dipenuhi dari beras yang diproduksi petani yang relatif mudah dikontrol.</p>', 'https://jogja.antaranews.com/berita/326414/inprosula-dukung-program-rasda-kulon-progo', '2020-11-29 00:50:28', '2020-11-29 00:50:28'),
(6, 'news_inprosula', 1, 'InProSuLA sebagai Agen Implementasi Penghidupan Berkelanjutan Masyarakat', 'inprosula-sebagai-agen-implementasi-penghidupan-berkelanjutan-masyarakat', '2018-07-30 00:00:00', 'news/y9Zb87pLrAOGka6uEU0NE3ZQNJRT8lZ7ipDiZQYo.jpeg', NULL, '<p style=\"text-align: justify;\">Sebagai bagian dari masyarakat, InProSuLA (Institute for promoting Sustainable Livelihood Approach) sebuah Organisasi Non Pemerintah yang didirikan oleh para penggerak pembangunan bermaksud mewujudkan kondisi <strong><em>setiap orang mampu menjalani kehidupan yang lebih layak, nyaman, aktif dan produktif yang mampu bertahan dan pulih dari tekanan akibat perubahan &ndash; perubahan yang terjadi</em></strong>. Sejak Juli 2006 InProSuLA bekerjama dengan berbagai Organisasi Masyarakat Sipil, Pemerintah, Perguruan Tinggi dan para penggerak pembangunan telah menjalankan program &ndash; program yang bertujuan untuk menguatkan kepemilikan aset penghidupan masyarakat, mengembangkan strategi penghidupan maupun mempengaruhi struktur dan proses ke arah keberlanjutan penghidupan masyarakat.</p>\r\n\r\n<p style=\"text-align: justify;\">Pada tahun 2006 ketika di Yogyakarta terjadi gempa bumi pada tanggal 27 Mei 2006 yang mengakibatkan 5.800 orang meninggal, lebih dari 36 ribu orang cedera dan lebih dari 230 ribu unit rumah rusak, InProSuLA berjuang bersama dengan masyarakat di Bantul dan Klaten untuk mencukupi kebutuhan darurat selama dalam barak ataupun tenda pengungsian. Setelah itu InProSuLA juga membantu untuk membuatkan hunian sementara serta berusaha mengembalikan aset penghidupan masyarakat korban gempa agar dapat pulih dari keterpurukan. Sebanyak 120 shelter dibangun sebagai hunian sementara untuk masyarakat di Bantul dan Klaten. Untuk memulihkan sumber penghidupan masyarakat, bantuan berupa sarana produksi pertanian baik berupa benih, pompa air untuk irigasi, pupuk dan pelatihan budidaya pertanian diberikan kepada masyarakat agar dapat menguatkan aset penghidupan mereka.</p>\r\n\r\n<p style=\"text-align: justify;\">Hal yang sama juga dilakukan terhadap masyarakat Pangandaran dan Ciamis yang terkena bencana Tsunami. Sebanyak 120 semi permanen house dibangun untuk masyarakat yang kehilangan tempat tinggalnya. Bantuan pemulihan bagi masyarakat yang terdiri dari para perajin gula kelapa dan nelayan diberikan bantuan peralatan produksi, benih ikan maupun modal serta pelatihan mikro finance agar masyarakat terdampak bencana mampu bangkit dari keterpurukan akibat bencana.</p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\">Semua upaya itu dilakukan oleh InProSuLA sebagai bagian dari implementasi visi untuk mewujudkan kondisi setiap orang mampu menjalani kehidupan layak, aktif dan produktif sepanjang waktu serta mampu mengatasi dan pulih dari tekanan dampak perubahan. Selain itu juga menjadi pelaksanaan dari sasaran strategis yang telah dirumuskan yaitu menjadi agen implementasi penghidupan masyarakat berkelanjutan.</span></span></p>', 'inprosula.org', '2020-11-29 00:52:13', '2020-11-29 00:52:13'),
(7, 'news_inprosula', 1, 'Tahun 2015, Raskin Kulonprogo diganti menjadi RASDA', 'tahun-2015-raskin-kulonprogo-diganti-menjadi-rasda', '2018-07-30 00:00:00', 'news/ihoTzaQhen6Rf6JQn7e0Iq1EHP7Bqa4GZgyQv2tI.jpeg', NULL, '<p style=\"text-align: justify;\"><span style=\"background-color:white\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">Didukung oleh USAID Program Representasi (ProRep), InProSuLA bersama dengan Pemkab Kulon Progo, Badan Ketahanan Pangan Kementerian Pertanian, DPRD DIY, BKPP DIY, DPRD Kulon Progo, Perum Bulog Divisi Regional DIY, Gapoktan, SKPD Kulon Progo dan NGO mengadakan Workshop Perencanaan RASDA di rumah dinas Bupati Kulon Progo pada hari Jumat, 26 September 2014. </span></span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"background-color:white\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">Pada kesempatan ini Bupati Kulon Progo </span></span><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">dr H Hasto Wardoyo SpOG(K) </span></span><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">mengatakan bahwa b</span></span><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">eras untuk warga miskin (raskin) bagi warga Kulonprogo secara keseluruhan akan diganti dengan beras daerah (Rasda) mulai tahun 2015. Saat ini Gabungan Kelompok Tani (Gapoktan) baru dapat mensuplai Rasda separuh lebih dari raskin yang disuplai oleh Bulog.</span></span></span></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-size:10.5pt\"><span style=\"font-family:Arial,sans-serif\">&quot;Dari permintaan Bulog 660 ton/bulan untuk Rasda, selama ini Gapoktan baru bisa memenuhi 400 ton/bulan. Dengan demikian sebagian rumah tangga sasaran penerima manfaat (RTSPM) masih menerima Raskin, belum Rasda,&quot;kata Hasto.<br />\r\n<br />\r\nUntuk mengejar 2015, pemkab lebih menfokuskan untuk rumah produksinya dalam upaya menekan biaya produksi. Bila nanti mesin dan biaya perawatan sudah disubsidi maka diharapkan petani dapat terbantu untuk biaya produksinya.<br />\r\nRasda ini, merupakan spirit &quot;Bela Beli Kulonprogo&quot;, karena pemkab mulai tahun 2013 melakukan inisiasi untuk memperbaiki pelaksanaan program Raskin melalui Rasda, yaitu memenuhi kebutuhan beras untuk program Raskin oleh Gapoktan dari beras yang diproduksi petani Kulonprogo. Ini juga merupakan konsisten berupaya menegakkan kemandirian dan kedaulatan pangan di Kulonprogo.<br />\r\n<br />\r\nSekretaris Badan Ketahanan Pangan Kementerian Pertanian Dr Mei Rochjat D MEd menyambut baik apa yang sudah dilakukan Pemkab Kulonprogo dengan program Rasda tersebut. Ini merupakan program yang nantinya dapat menjadi contoh kabupaten/kota lainnya di Indonesia. &quot;Karena memang program Rasda di Kulonprogo ini merupakan satu-satunya di Indonesia. Yang awal harus menjadi contoh, tentu saja akan diikuti lainnya,&quot;tutur Mei. </span></span></p>', 'inprosula.org', '2020-11-29 00:54:01', '2020-11-29 00:55:01'),
(8, 'news_inprosula', 1, 'Peringatan HPS 2014 dan Hari Jadi Kulon Progo ke 63 Menjadi Momentum Promosi RASDA Berbasis Kesejahteraan Petani', 'peringatan-hps-2014-dan-hari-jadi-kulon-progo-ke-63-menjadi-momentum-promosi-rasda-berbasis-kesejahteraan-petani', '2018-08-01 00:00:00', 'news/n5c0PxAuK243uSyyXZ1VwJXCNzLjkpgxc0t9EpJM.png', NULL, '<p style=\"text-align: justify;\">Promosi RASDA dilakukan pada momentum HPS 2014 dan bertepatan dengan Hari Jadi KulonProgo pada tanggal 15 Oktober 2014 di Alun-alun Wates, Kulonprogo. Kegiatan ini dihadiri sekitar 8500 peserta dari Wakil Gubernur DIY, Jajaran Pemkab Kulonprogo, SKPD, PNS, Seniman, Gapoktan, dan utusan Bupati/Walikota Se-DIY, Bupati Serdang Bedagai, Magelang, Kebumen dan peserta dari NGO/organisasi petani yang terlibat advokasi RASDA dari wilayah Sumatera Utara, Jawa Barat, Jawa Tengah dan NTB.</p>\r\n\r\n<p style=\"text-align: justify;\">Pelaksanaan Pada momentum Peringatan Hari Pangan Sedunia ini, Pemkab Kulonprogo mempromosikan Logo Bela dan Beli Kulon Progo dengan etos Madep Mantep Pangane Dhewe. Bupati Kulonprogo juga pada momentum melakukan Ikrar untuk menjalankan Program RASDA sebagai manifestasi program bela dan beli di Kulonprogo. Pada peringatan ini digelar atraksi kebudayaan yang secara umum menggambarkan Kabupaten Kulonprogo berkomitmen untuk melaksanakan RASDA. Pagelaran kebudayaan dimulai dengan pertunjukan teatrikal secara kolosal dengan judul &ldquo; Lenggang Bukit Padi&rdquo;. Pagelaran ini dimulai dengan prosesi tarian yang menggambarkan menanam padi, dilanjutkan dengan adanya serangan hama penyakit, dan munculnya pasukan yang melawan hama. Pada tahap selanjutnya menggambarkan tarian kolosan saat panen dan dilanjutkan dengan 24 grup gejog lesung yang menumbuk padi. Ketika padi sudah menjadi beras, maka diluncurkanlah program RASDA yang digambarkan dengan Ogoh-ogoh setinggi 6 x 4 meter yang dibawa oleh 8 orang. Ogoh-ogoh ini berisi tulisan RASKIN NO, RASDA Yes! sebagai simbol Kabupaten Kulonprogo berkomitmen melakukan pengadaan beras daerah dari petani setempat.</p>', 'inprosula.org', '2020-11-29 00:57:27', '2020-11-29 00:57:27'),
(9, 'news_inprosula', 1, 'Display RASDA di Depan Rumah Dinas Bupati Kulonprogo', 'display-rasda-di-depan-rumah-dinas-bupati-kulonprogo', '2018-08-01 00:00:00', 'news/hZ43iC7d30ChiYdqWchbpCxB78bKQYiJG5ymApS7.jpeg', NULL, '<p style=\"text-align: justify;\">Selain melalui peringatan HPS, Promosi RASDA dilakukan dengan membuat Display RASDA di Depan Rumah Dinas Bupati Kulonprogo pada tanggal 15 Oktober 2014. Display RASDA menggambarkan seluruh proses advokasi RASDA yang sudah dilakukan selama ini di berbagai wilayah; Sumatera Utara, Jawa Barat, Jawa Tengah, DIY, NTB, Kutai, Jambi dan Riau. Display RASDA berupa materi-materi RASDA dalam bentuk 2 Banner besar berukuran 6 x 4 meter yang dipasang di tempat strategis (depan Halaman Rumah Dinas Bupati) sehingga masyarakat umum bisa membaca dengan jelas. Selain banner, Tim advokasi RASDA juga membagikan leaflet dan poster yang menggambarkan proses advokasi RASDA kepada para pengunjung display.</p>\r\n\r\n<p style=\"text-align: justify;\">Ajang Display RASDA juga menggunakan miniatur lumbung pangan dari 4 wilayah, Sumatera, Jawa Barat, Jawa Tengah, DIY dan NTB. Hingga saat ini petani padi dari berbagai wilayah yang melakukan advokasi RASDA masih menjaga lumbung pangan sebagai bentuk kekuatan masyarakat dalam mewujudkan ketahanan pangan. Di masing-masing lumbung pangan tim advokasi RASDA juga mempublikasikan berbagai macam pangan lokal yang dikembangkan oleh petani dari berbagai wilayah. Produk olahan pangan lokal dari Kabupaten Kulonprogo juga dipamerkan dalam rangka menumbuhkan berbagai insiatif lokal dalam konteks ketahanan pangan.</p>\r\n\r\n<p style=\"text-align: justify;\">Untuk mempromosikan RASDA kepada masyarakat umum, Tim Advokasi RASDA menyiapkan 1 orang yang menjelaskan bagaimana RASDA di masing-masing daerah. Selama proses Display RASDA ini dihadiri oleh para pengunjung dari berbagai kalangan, pemprov DIY, Pemkab Kulonprogo, Utusan Pemda dari Jateng, Sumut, akademisi, budayawan, aktifis NGO, organisasi petani, dan masyarakat umum. Tim Advokasi RASDA juga membuat pers release yang dibagikan kepada sejumlah wartawan baik cetak, online maupun elektronik.</p>', 'inprosula.org', '2020-11-29 00:58:39', '2020-11-29 00:58:39'),
(10, 'news_inprosula', 1, 'Kenduri Hari Pangan Sedunia Di Desa Sendangsari Kecamatan Pengasih Kulonprogo', 'kenduri-hari-pangan-sedunia-di-desa-sendangsari-kecamatan-pengasih-kulonprogo', '2018-08-01 00:00:00', 'news/sDl1c7vAkhIFiCaEMeDDplUQP0TDIxlfZf3JxyRi.jpeg', NULL, '<p style=\"text-align: justify;\">Promosi RASDA juga dilakukan hingga tingkat basis, dalam hal ini melalui Kenduri Hari Pangan Sedunia di Balai Desa Sendangsari Kecamatan Pengasih, Kulonprogo. Acara kenduri ini dihadiri oleh seluruh peserta dari berbagai wilayah; sumatera, Jabar, Jateng, DIY, dan NTB. Selain itu, peserta yang terdiri dari 7 kelompok tani di Desa Sendangsari ikut menghadiri kegiatan ini. Kelompok budayawan lintas agama di Kulonprogo yang selama ini turut serta melestarikan budaya petani juga hadir dan memimpin ritual kenduri Hari Pangan Sedunia dalam rangka Advokasi RASDA.</p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">Proses Kenduri dimulai dengan berdoa yang dipimpin oleh tokoh agama setempat dan dilanjutkan dengan sambutan Kepala Desa Sendangsari yang intinya mendukung penuh niat luhur dari program RASDA. Pada kesempatan ini tim Inprosula menyampaikan mengenai pentingnya RASDA sebagai upaya meningkatkan pendapatan petani padi di Indonesia dan mampu memberikan beras yang aman dan layak dikonsumsi untuk masyarakat miskin setempat. Pada kesempatan ini Direktur Inprosula sebagai Ketua Tim Advokasi RASDA mendapatkan mandat dari peserta kenduri Hari Pangan Sedunia untuk terus memperjuangkan RASDA hingga tingkat nasional. Prosesi pemberian mandat ditandai dengan pemberian Tumpeng oleh Kepala Desa Sendangsari kepada Bapak Sarijo.</span></span></p>', 'inprosula.org', '2020-11-29 00:59:57', '2020-11-29 00:59:57'),
(12, 'news_inprosula', 1, 'H. Amru Dukung Program Kopi USAID Lestari di Pantan Cuaca', 'hamrudukungprogramkopiusaidlestaridipantancuaca', '2018-03-09 00:00:00', 'news/oWH4GxAKLuwMYvVbfL3dq7PqVgmCBCKIyYxhQhni.jpg', NULL, '<p>Bupati Amru dan PLT Direktur USAID meninjau Agroforestry Kopi</p>\r\n\r\n<p>&nbsp;</p>', 'http://lintasgayo.co/2018/05/09/h-amru-dukung-program-kopi-usaid-lestari-di-pantan-cuaca', '2021-03-08 08:57:52', '2021-03-08 08:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangan`
--

CREATE TABLE `tb_pangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pangan`
--

INSERT INTO `tb_pangan` (`id`, `user_id`, `title`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, NULL, 'RASDA VS RASKIN', 'program_pangan/QGIl2qk9ErohWmDKCCesxH3jge3ncQmTefEqUicS.jpg', NULL, '2020-12-05 04:33:49', '2020-12-05 04:33:49'),
(2, NULL, 'Program RASDA Mewujudkan Cita-Cita Kab. Kulonprogo', 'program_pangan/6ItRfo6zp5GlUAmNVzXcvmVCJndMsaxavaUiZTq1.jpg', NULL, '2020-12-05 04:41:14', '2020-12-05 04:41:14'),
(3, NULL, 'Pertanian Berkelanjutan di Kabupaten Malinau - Kalimantan Utara', 'program_pangan/3m75imeO6nVf4VBESNyQeiaiEl1CPDpvGNgVVPtm.pdf', 'Pengalaman Implementasi Pertanian Berkelanjutan di Malinau - Kalimantan Utara', '2021-03-08 09:28:05', '2021-03-08 09:28:05'),
(4, NULL, 'Panduan SLPB', 'program_pangan/XVpVJvj2etSBQ5AtdAJxkOR27mcwfo9UUaTUpIm0.pdf', 'Sekolah Lapang Pertanian Berkelanjutan Kabupaten Malinau _ Kalimantan Utara', '2021-03-08 14:15:11', '2021-03-08 14:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `slug`, `nama_produk`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'arabica-organik-gayo-luwes-greenbean-1kg', 'Arabica Organik Gayo Lues \'GreenBean\' 1Kg', NULL, 160000, '2021-02-12 02:21:52', '2021-02-12 02:21:52'),
(2, 'arabica-organik-gayo-luwes-greenbean-500-g', 'Arabica Organik Gayo Lues \'GreenBean\' 500 Gram', NULL, 90000, '2021-02-12 03:04:27', '2021-02-12 03:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `title`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah InProSuLA', '<p style=\"text-align: justify;\"><b><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">I</span></span></span></b><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">NPROSULA NGO berbentuk Perkumpulan berbasis keanggotaan individu dan kelompok, </span></span></span>&nbsp;<span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">berdiri sejak 23 April 2006, diinisiasi </span></span></span><span lang=\"EN-US\" style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">oleh para aktivis professional yang pernah bekerja lebih dari 15 tahun di berbagai Lembaga Pembangunan di Indonesia </span></span></span><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">didorong </span></span></span><span lang=\"EN-US\" style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"color:#7030a0\">oleh semangat untuk berkontribusi agar masyarakat Indonesia tidak semakin terpuruk dalam kemiskinan akibat dampak pembangunan, bencana alam maupun konflik social dan praktek &ndash; praktek ketidakadilan </span></span></span></p>', '2020-11-26 13:10:11', '2021-02-17 00:47:39'),
(2, 'Dasar Hukum Pendirian InProSuLA', '<p style=\"text-align: justify;\"><span style=\"color:#6600cc;\">(NGO), Berbadah hukum: No 04 tanggal 24 Juli 2006, terdaftar di Pengadilan Negeri Yogyakarta dengan Nomor: W.13-UI/ 240.Pork/ HK.co/ XII/ 2008. di Badan Kesbanglinmas Propinsi DIY Indonesia No: 231/018/Kesbang/VI/2009 dan Kantor Kesbanglinmas Kota Yogyakarta Indonesia No: 200/396. InProSuLA terdaftar di Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia dengan nomor: AHU-0055146.AH.07 Tahun 2016.</span></p>', '2020-11-26 13:14:21', '2021-02-17 00:46:22'),
(3, 'Visi InProSuLA', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:11.0pt\"><span style=\"color:#7030a0\">Terwujudnya kehidupan setiap orang secara lebih nyaman, aman, aktif dan produktif, lebih tahan lama dan mampu menghadapi dan pulih dari tekanan dampak </span></span><span lang=\"EN-ID\" style=\"font-size:11.0pt\"><span style=\"color:#7030a0\">salah urus </span></span><span style=\"font-size:11.0pt\"><span style=\"color:#7030a0\">pembangunan, bencana, globalisasi dan </span></span><span lang=\"EN-ID\" style=\"font-size:11.0pt\"><span style=\"color:#7030a0\">dampak dari praktek &ndash; praktek ke-tidak-adil-an</span></span> <span style=\"font-size:11.0pt\"><span style=\"color:#7030a0\">. </span></span></span></span></p>', '2020-11-26 13:15:06', '2021-02-17 00:48:57'),
(4, 'Misi InProSuLA', '<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#6600cc;\">Mengembangkan penghidupan masyarakat melalui kegiatan: pertanian berkelanjutan, peternakan, perikanan, pengembangan industri kerajinan mikro dan usaha bersama simpan-pinjam</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#6600cc;\">Mitigasi kerusakan aset penghidupan masyarakat, melalui kegiatan: pendampingan sekolah lapang perubahan iklim, mempromosikan pengintegrasian resiko pengurangan bencana dalam kegitan pembangunan dan kegiatan masyarakat, perbaikan kualitas lahan dan ekosistem pertanian (hortikultura perikanan, peternakan dan kehutanan).</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#6600cc;\">Capacity building masyarakat dan penggerak pembangunan melalui kegiatan: training, mentoring dan konsulting </span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#6600cc;\">Advokasi mempengaruhi kebijakan melalui: Pengembangan Forum Kelembagaan Pangan Multipihak, mengembangkan jaringan kerja, riset aksi daerah rawan pangan, kampanye public, mengembangkan musyawarah perencanaan pembangunan Pemerintah.</span></li>\r\n</ul>', '2020-11-26 13:17:17', '2021-02-17 00:52:04'),
(5, 'Nilai-nilai yang Diperjuangkan', '<ol>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Transparansi</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Akuntabilitas</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Demokrasi</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Efektivitas</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Sustainabilitas / berkelanjutan</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Kesetaraan dalam pembangunan</span></li>\r\n	<li style=\"text-align:justify;\"><span style=\"color:#6600cc;\">Berkeadilan gender</span></li>\r\n</ol>', '2020-11-26 13:18:06', '2021-02-17 00:53:12'),
(7, 'Prestasi', '<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Peningkatan Nilai Tambah Kopi Gayo untuk mengendalikan deforestasy di Kabuopaten Gayolues, Provinsi Aceh (USAID Lestari -InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Pengembangan Pertanian Terpadu Secara Lebih Produktif dan berkelanjutan di Kabupaten Malinau &ndash;Provinsi Kalimantan Utara (Millenium Challenge Corporation -InProSuLA)&bull;Pengembangan Kebijakan Pangan dan Gizi melalui desentralisasi bantuan pangan berbasis kebutuhan masyarakat miskin di Provinsi DIY dan Jawa Tengah (Chemonic USAID -InProSuLA)&bull;Pemulihan Mata Pencaharian untuk Petani Terkena Bencana Banjir Lahar di Kabupaten Magelang -Jawa Tengah ( HRF UN-OCHA &ndash;MRR UNDP -InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Kajian Peningkatan Efektivitas Layanan Program Pangan Untuk Mengatasi Masyarakat Miskin di Provinsi Daerah IstimewaYogyakarta (BAPPEDA DIY &ndash;InProSuLA)&bull;Mendukung Kesetaraan Gender Rumah Tangga Petani Hutan untuk Adaptasi Perubahan Iklim melalui Pengelolaan Hutan Kemasyarakatan yang Berkelanjutan di Kabupaten Kulonprogo (Finland Embasy &ndash;InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Penguatan Kelompok tani hutan untuk mengintegrasikan konservasi hutan kemasyarakatan dan sumberpangan di Kabupaten Kulonprogo (Finland Embasy &ndash;InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Pemulihan Mata Pencaharian petani, nelayan, perajin dan pedagang kecil korban gempa bumi di Yogyakarta dan Tsunami di Ciamis Jawa Barat (UN-OCHA,UNDP, Oxfam GB, YCAP/AIP&ndash;InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Capacity Building untuk Rekonsiliasi Komisi Pembaharuan Aceh, Perbaikan mata pencaharian dan pembaharuan tata pemerintahan di pedesaan bagi 62 CSO (DAI/ USAID -InProSuLA&bull;Capacity Building Forum Kelembagaan pangan Multipihak ( Pemerintah, CBO dan Lokal NGO ) (Pemerintah Provinsi DIY &ndash;InProSuLA)</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Membangun komunitas pengelola lumbung pangan sebanyak 957 kelompok tani, nelayan, perajin dan pedagang kecil di Propinsi DIY dan Kabupaten Ciamis PropinsiJawa Barat.</font></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><span style=\"font-size:14px;\"><span style=\"line-height:100%\"><font face=\"Lucida Sans Unicode, Lucida Grande, sans-serif\">Advokasi Kebijakan Umum Anggaran untuk Ketahanan Pangan Masyarakat &ndash;advokasi RASKIN</font></span></span></p>\r\n	</li>\r\n</ul>', '2021-03-10 03:06:09', '2021-03-10 03:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_request_file`
--

CREATE TABLE `tb_request_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Dikirim','Belum Dikirim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` enum('Dokumen','Gambar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sertifikat`
--

INSERT INTO `tb_sertifikat` (`id`, `tipe`, `title`, `kontent`, `created_at`, `updated_at`) VALUES
(3, 'Gambar', 'Dun and Bradstreet', 'sertifikat/8YjEkUNEmztzICILbdEP7c0DcGrUMnrDmxUvlvex.jpeg', '2020-11-27 05:43:54', '2020-11-27 05:43:54'),
(5, 'Dokumen', 'Prestasi 3 Tahun Terakhir', 'sertifikat/4GOUb9EReLcPu4RlaqJvshp4cxbsMEnIFBfLZey7.pdf', '2020-12-05 13:38:04', '2020-12-05 13:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_strategi`
--

CREATE TABLE `tb_strategi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_strategi`
--

INSERT INTO `tb_strategi` (`id`, `title`, `slug`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Pemberdayaan', 'pemberdayaan', '<p style=\"text-align: justify;\">InProSuLA bersama masyarakat dan mitra kerja mengembangkan program penguatan mata pencaharian (pertanian berkelanjutan, peternakan, perikanan-nelayan dan kehutanan masyarakat, perdagangan non formal dan industri skala rumah tangga, kredit mikro, pengembangan pasar aternatif), pelestarian fungsi lingkungan dan ekosistem penghidupan (konservasi dan rehabilitasi) dan pengembangan kapasitas masyarakat (lokal CSO dan NGO).</p>', '2020-11-29 02:35:42', '2021-03-13 01:04:36'),
(2, 'Pengorganisasian Jaringan Kerja', 'pengorganisasia-jaringan-kerja', '<p style=\"text-align: justify;\">InProSuLA memfasilitasi tumbuh dan berkembang-nya Organisasi Rakyat di tingkat Komunitas (Kelompok Petani, Nelayan, Perajin, Kelompok Perempuan Tani, Paguyuban Pedagang, Paguyuban Lumbung Penghidupan), Forum Partisipasi Perencanaan Pembangunan Desa, Forum Konsultasi Publik, Forum Stakeholders Ketahanan Pangan dan Forum Yogyakarta Trust Fund.</p>', '2020-11-29 02:36:00', '2021-03-13 01:04:58'),
(3, 'Advokasi Kebijakan', 'advokasi-kebijakan', '<p style=\"text-align: justify;\">InProSuLA mengembangkan kerjasama dengan Mitra&ndash;mitra Strategisnya: Badan Ketahanan Pangan, Partnership for Governance Reform in Indonesia, DPR dan DPRD, Satuan Kerja Pemerintah Daerah, Yogyakarta Parlementary Watch, dan Koalisi Rakyat untuk Kedaulatan Pangan, serta berbagai Jaringan NGO untuk mengembangkan kegiatan advokasi melalui: Hearing dan konsultasi publik, studi dan riset terkait dengan implementasi kebijakan terkait dengan kepentingan hidup masyarakat miskin.</p>', '2020-11-29 02:36:19', '2021-03-13 01:05:09');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Administrator Sistem', 'admin@inprosula.org', NULL, '$2y$10$2fEqFarD8igGv7wBwhdYaedNii6eTo.D3OPn36on04poBzcnuKg9C', NULL, NULL, NULL, NULL, NULL, '2020-11-26 09:38:13', '2021-02-16 19:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `wa_number`
--

CREATE TABLE `wa_number` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wa_number`
--

INSERT INTO `wa_number` (`id`, `kode_negara`, `nomor`, `created_at`, `updated_at`) VALUES
(1, '62', '87843113369', '2021-02-08 19:55:21', '2021-02-16 19:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_informasi`
--
ALTER TABLE `tb_detail_informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_detail_informasi_informasi_id_foreign` (`informasi_id`);

--
-- Indexes for table `tb_detail_news`
--
ALTER TABLE `tb_detail_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_detail_news_news_id_foreign` (`news_id`);

--
-- Indexes for table `tb_detail_produk`
--
ALTER TABLE `tb_detail_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_detail_produk_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_galeri_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_galeri_detail`
--
ALTER TABLE `tb_galeri_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_galeri_detail_galeri_id_foreign` (`galeri_id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_kegiatan_slug_unique` (`slug`),
  ADD KEY `tb_kegiatan_strategi_id_foreign` (`strategi_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_news_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_pangan`
--
ALTER TABLE `tb_pangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_pangan_user_id_foreign` (`user_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_produk_slug_unique` (`slug`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_request_file`
--
ALTER TABLE `tb_request_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_request_file_kegiatan_id_foreign` (`kegiatan_id`);

--
-- Indexes for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_strategi`
--
ALTER TABLE `tb_strategi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wa_number`
--
ALTER TABLE `wa_number`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_informasi`
--
ALTER TABLE `tb_detail_informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_news`
--
ALTER TABLE `tb_detail_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_produk`
--
ALTER TABLE `tb_detail_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_galeri_detail`
--
ALTER TABLE `tb_galeri_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pangan`
--
ALTER TABLE `tb_pangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_request_file`
--
ALTER TABLE `tb_request_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_strategi`
--
ALTER TABLE `tb_strategi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wa_number`
--
ALTER TABLE `wa_number`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_informasi`
--
ALTER TABLE `tb_detail_informasi`
  ADD CONSTRAINT `tb_detail_informasi_informasi_id_foreign` FOREIGN KEY (`informasi_id`) REFERENCES `tb_informasi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_detail_news`
--
ALTER TABLE `tb_detail_news`
  ADD CONSTRAINT `tb_detail_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `tb_news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_detail_produk`
--
ALTER TABLE `tb_detail_produk`
  ADD CONSTRAINT `tb_detail_produk_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `tb_produk` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD CONSTRAINT `tb_galeri_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_galeri_detail`
--
ALTER TABLE `tb_galeri_detail`
  ADD CONSTRAINT `tb_galeri_detail_galeri_id_foreign` FOREIGN KEY (`galeri_id`) REFERENCES `tb_galeri` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_strategi_id_foreign` FOREIGN KEY (`strategi_id`) REFERENCES `tb_strategi` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `tb_news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_pangan`
--
ALTER TABLE `tb_pangan`
  ADD CONSTRAINT `tb_pangan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_request_file`
--
ALTER TABLE `tb_request_file`
  ADD CONSTRAINT `tb_request_file_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `tb_kegiatan` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
