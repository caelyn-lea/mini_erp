-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2024 pada 09.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_erp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) DEFAULT 0,
  `harga_satuan` int(11) NOT NULL DEFAULT 0,
  `kategori` enum('barang_berat','barang_ringan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'barang_berat',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lokasi_penyimpanan` enum('gudang_1','gudang_2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gudang_1',
  `last_supplier` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `Nama_barang`, `jumlah`, `harga_satuan`, `kategori`, `gambar`, `Lokasi_penyimpanan`, `last_supplier`, `created_at`, `updated_at`) VALUES
(11, 'Flat Belt Conveyor 20', 15, 200000, 'barang_berat', 'post-images/XoIS6kVAJ90V47BsP363YBAnd6jHX2hAZwbNhIVj.jpg', 'gudang_1', 'PT Supplier 1', '2022-11-24 05:24:49', '2022-11-24 05:24:49'),
(12, 'Flat Belt Conveyor 40', 14, 400000, 'barang_berat', 'post-images/iqGkODMUhVl8JGf07GpD4yACcbDZOaEajgnRFZqf.jpg', 'gudang_1', 'PT Supplier 1', '2022-11-24 05:24:59', '2022-11-24 05:24:59'),
(13, 'Flat Belt Conveyor 80', 20, 600000, 'barang_berat', 'post-images/BQNwdHDHpdqR7rkqajbMQR83wbAX0TXggTImlpVj.jpg', 'gudang_1', 'PT Supplier 1', '2022-11-24 05:25:11', '2022-11-24 05:25:11'),
(14, 'Flat Belt Conveyor 90', 20, 750000, 'barang_berat', 'post-images/GruWZoLJmqWGNhuXS24w1JV9dtE1yl3LSgeGgD0E.jpg', 'gudang_1', 'PT Supplier 1', '2022-11-24 05:25:24', '2022-11-24 05:25:24'),
(15, 'Inverters FR-A', 10, 500000, 'barang_berat', 'post-images/ENuKTrg1PSgyLoLJKx0rBGtgP8GjjpnaK07rzVpP.jpg', 'gudang_2', 'PT Supplier 2', '2022-11-24 05:27:06', '2022-11-24 05:27:06'),
(16, 'Inverters FR-CS', 10, 700000, 'barang_berat', 'post-images/RJym9P59qRobLDSDu60sX2A3yRoK5HlSTBTSSO1n.jpg', 'gudang_2', 'PT Supplier 2', '2022-11-24 05:27:19', '2022-11-24 05:27:19'),
(17, 'Inverters FR-D', 10, 800000, 'barang_berat', 'post-images/VUnp82V53UFy6AT4SrvWXoPoy16ie3vgG77whwWj.jpg', 'gudang_2', 'PT Supplier 2', '2022-11-24 05:27:34', '2022-11-24 05:27:34'),
(18, 'Inverters FR-E', 30, 600000, 'barang_berat', 'post-images/4ZMixvkEjO1GS2VMRSVIr0p2vcKCdnCamFZRYb87.jpg', 'gudang_2', 'PT Supplier 2', '2022-11-24 05:27:46', '2022-11-24 05:27:46'),
(19, 'HMI GOT1000', 5, 750000, 'barang_berat', 'post-images/lT2CmbYBiujV1F5jz4MSIK2foOwgEYw1NofDaokG.jpg', 'gudang_1', 'PT Supplier 3', '2022-11-24 05:28:05', '2022-11-24 05:28:05'),
(20, 'HMI GOT2000', 10, 850000, 'barang_berat', 'post-images/4xDSRCruJs8FEyVW7HImCKDI2L5Xkv6XzvLEM2iG.jpg', 'gudang_1', 'PT Supplier 3', '2022-11-24 05:28:17', '2022-11-24 05:28:17'),
(21, 'HMI GOT Simple', 15, 900000, 'barang_berat', 'post-images/CxnonflADDBXUIDakcsFN1vEn2RrdIO3ClmKd37I.jpg', 'gudang_1', 'PT Supplier 3', '2022-11-24 05:28:36', '2022-11-24 05:28:36'),
(22, 'HMI Soft GOT', 15, 950000, 'barang_berat', 'post-images/HIYu8XwaxDE4EqjcnkxyjOBuqIAPaLaPlPuLFpRr.jpg', 'gudang_1', 'PT Supplier 3', '2022-11-24 05:28:53', '2022-11-24 05:28:53'),
(23, 'Modular Conveyor 01', 20, 150000, 'barang_berat', 'post-images/u0YTYLa4vsqNuP9G4QPajuYtKLm79do8ocdy1frU.jpg', 'gudang_2', 'PT Supplier 1', '2022-11-24 05:31:42', '2022-11-24 05:31:42'),
(24, 'Modular Conveyor 02', 20, 200000, 'barang_berat', 'post-images/pxXVgFB93afzcrQqAb98dIdzLeUIeJz5ZLKSoe4d.jpg', 'gudang_2', 'PT Supplier 1', '2022-11-24 05:31:58', '2022-11-24 05:31:58'),
(25, 'Modular Conveyor 03', 20, 250000, 'barang_berat', 'post-images/NXPr0LnSRMIUFatPkOw88xIOZMpeY14qhJBwPCHD.jpg', 'gudang_2', 'PT Supplier 1', '2022-11-24 05:32:12', '2022-11-24 05:32:12'),
(26, 'Modular Conveyor 04', 30, 300000, 'barang_berat', 'post-images/GsMkfdG31BFCUXc2IR4FdHB3rCea3jQ4es4zTuC8.jpg', 'gudang_2', 'PT Supplier 1', '2022-11-24 05:32:23', '2022-11-24 05:32:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkoutinventory`
--

CREATE TABLE `checkoutinventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diambil` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bahan_total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_User` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `Nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diambil` int(11) NOT NULL,
  `harga_barang` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ppn` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_total` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lokasi_penyimpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_supplier` int(11) DEFAULT 0,
  `nama_supplier` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id`, `Nama_User`, `id_barang`, `Nama_barang`, `Diambil`, `harga_barang`, `ppn`, `harga_total`, `kategori`, `Lokasi_penyimpanan`, `status`, `id_supplier`, `nama_supplier`, `created_at`, `updated_at`, `alamat`) VALUES
(10, 'inventori', 11, 'Flat Belt Conveyor 20', 20, '200000', '30000', '4030000', 'barang_berat', 'gudang_1', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:33:06', '2022-11-24 05:33:06', NULL),
(11, 'inventori', 15, 'Inverters FR-A', 10, '500000', '75000', '5075000', 'barang_berat', 'gudang_2', 'enter', 11, 'PT Supplier 2', '2022-11-24 05:33:19', '2022-11-24 05:33:19', NULL),
(12, 'inventori', 19, 'HMI GOT1000', 5, '750000', '112500', '3862500', 'barang_berat', 'gudang_1', 'enter', 12, 'PT Supplier 3', '2022-11-24 05:33:31', '2022-11-24 05:33:31', NULL),
(13, 'inventori', 23, 'Modular Conveyor 01', 20, '150000', '22500', '3022500', 'barang_berat', 'gudang_2', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:33:40', '2022-11-24 05:33:40', NULL),
(14, 'inventori', 12, 'Flat Belt Conveyor 40', 20, '400000', '60000', '8060000', 'barang_berat', 'gudang_1', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:34:00', '2022-11-24 05:34:00', NULL),
(15, 'inventori', 20, 'HMI GOT2000', 10, '850000', '127500', '8627500', 'barang_berat', 'gudang_1', 'enter', 12, 'PT Supplier 3', '2022-11-24 05:34:13', '2022-11-24 05:34:13', NULL),
(16, 'inventori', 18, 'Inverters FR-E', 5, '600000', '90000', '3090000', 'barang_berat', 'gudang_2', 'enter', 11, 'PT Supplier 2', '2022-11-24 05:34:26', '2022-11-24 05:34:26', NULL),
(17, 'inventori', 26, 'Modular Conveyor 04', 15, '300000', '45000', '4545000', 'barang_berat', 'gudang_2', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:34:39', '2022-11-24 05:34:39', NULL),
(18, 'inventori', 13, 'Flat Belt Conveyor 80', 20, '600000', '90000', '12090000', 'barang_berat', 'gudang_1', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:39:25', '2022-11-24 05:39:25', NULL),
(19, 'inventori', 14, 'Flat Belt Conveyor 90', 20, '750000', '112500', '15112500', 'barang_berat', 'gudang_1', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:39:38', '2022-11-24 05:39:38', NULL),
(20, 'inventori', 16, 'Inverters FR-CS', 10, '700000', '105000', '7105000', 'barang_berat', 'gudang_2', 'enter', 11, 'PT Supplier 2', '2022-11-24 05:42:52', '2022-11-24 05:42:52', NULL),
(21, 'inventori', 17, 'Inverters FR-D', 10, '800000', '120000', '8120000', 'barang_berat', 'gudang_2', 'enter', 11, 'PT Supplier 2', '2022-11-24 05:43:03', '2022-11-24 05:43:03', NULL),
(22, 'inventori', 21, 'HMI GOT Simple', 15, '900000', '135000', '13635000', 'barang_berat', 'gudang_1', 'enter', 12, 'PT Supplier 3', '2022-11-24 05:43:16', '2022-11-24 05:43:16', NULL),
(23, 'inventori', 22, 'HMI Soft GOT', 15, '950000', '142500', '14392500', 'barang_berat', 'gudang_1', 'enter', 12, 'PT Supplier 3', '2022-11-24 05:43:38', '2022-11-24 05:43:38', NULL),
(24, 'inventori', 24, 'Modular Conveyor 02', 20, '200000', '30000', '4030000', 'barang_berat', 'gudang_2', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:43:52', '2022-11-24 05:43:52', NULL),
(25, 'inventori', 25, 'Modular Conveyor 03', 20, '250000', '37500', '5037500', 'barang_berat', 'gudang_2', 'enter', 10, 'PT Supplier 1', '2022-11-24 05:43:59', '2022-11-24 05:43:59', NULL),
(26, 'inventori', 11, 'Flat Belt Conveyor 20', 2, '0', '0', '0', 'barang_berat', 'gudang_1', 'order', 0, NULL, '2022-11-24 19:22:19', '2022-11-24 19:22:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemout`
--

CREATE TABLE `itemout` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_User` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_keluar` int(11) NOT NULL,
  `barang_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `itemout`
--

INSERT INTO `itemout` (`id`, `nama_User`, `id_barang`, `nama_barang`, `barang_keluar`, `barang_tujuan`, `status`, `created_at`, `updated_at`) VALUES
(9, 'inventori', 15, 'Inverters FR-A', 1, 'Produksi conveyor ekspedisi', 'pending', '2022-11-24 05:48:16', '2022-11-24 05:48:16'),
(8, 'inventori', 12, 'Flat Belt Conveyor 40', 6, 'Produksi conveyor kentang', 'confirm', '2022-11-24 05:47:13', '2022-11-24 05:47:13'),
(7, 'inventori', 11, 'Flat Belt Conveyor 20', 5, 'Produksi conveyor ekspedisi', 'pending', '2022-11-24 05:46:52', '2022-11-24 05:46:52'),
(10, 'inventori', 19, 'HMI GOT1000', 1, 'Produksi conveyor ekspedisi', 'pending', '2022-11-24 05:48:26', '2022-11-24 05:48:26'),
(11, 'inventori', 11, 'Flat Belt Conveyor 20', 5, 'Produksi conveyor ekspedisi', 'confirm', '2022-11-24 19:24:45', '2022-11-24 19:24:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_16_075520_barang', 1),
(6, '2022_03_17_131346_inventory', 1),
(7, '2022_03_26_024651_create_permission_tables', 1),
(8, '2022_03_28_142838_checkout_inventory', 1),
(9, '2022_04_01_150256_supplier', 1),
(10, '2022_06_22_051237_create_itemout_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

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
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-04-18 06:19:16', '2022-04-18 06:19:16'),
(2, 'user', 'web', '2022-04-18 06:19:16', '2022-04-18 06:19:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_supplier` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_supplier` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_supplier` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok_mesin_jahit` int(11) DEFAULT NULL,
  `stok_mesin_pancing` int(11) DEFAULT NULL,
  `stok_mesin_kayu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `alamat_supplier`, `no_supplier`, `created_at`, `updated_at`, `kategori_supplier`, `stok_mesin_jahit`, `stok_mesin_pancing`, `stok_mesin_kayu`) VALUES
(10, 'PT ABC', 'Jalan sumbersari gang 1', '123456789', '2022-11-24 05:35:28', '2024-05-14 18:38:38', NULL, NULL, NULL, NULL),
(11, 'PT XYZ', 'jalan suhat', '987654321', '2022-11-24 05:35:46', '2024-05-14 18:38:47', NULL, NULL, NULL, NULL),
(12, 'PT APTX', 'jalan veteran', '543216789', '2022-11-24 05:36:00', '2024-05-14 18:38:58', NULL, NULL, NULL, NULL);

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'inventori', 'admin@example.com', NULL, '$2y$10$jNsH2YWZ/dcNn6unl7XWseA9nDu4GTZVmYex108xq4OxeUMDRcAf6', NULL, '38RXkPAl1eAu2OCYb9UwZg4w6Nwd5UTqvmilUBr7TUYP4pGPkfpcDrmrYVR2', '2022-04-18 06:19:17', '2022-04-18 06:19:17'),
(3, 'akuntan', 'akuntan@example.com', NULL, '$2y$10$jNsH2YWZ/dcNn6unl7XWseA9nDu4GTZVmYex108xq4OxeUMDRcAf6', NULL, NULL, '2022-04-18 06:37:38', '2022-04-18 06:37:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `checkoutinventory`
--
ALTER TABLE `checkoutinventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `itemout`
--
ALTER TABLE `itemout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `checkoutinventory`
--
ALTER TABLE `checkoutinventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `itemout`
--
ALTER TABLE `itemout`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
