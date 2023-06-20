-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2023 pada 05.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'anjay66@gmail.com', 7, '2023-04-02 11:47:45', 1),
(2, '::1', 'anjay66@gmail.com', 7, '2023-04-02 13:03:31', 1),
(3, '::1', 'anjayani32', NULL, '2023-04-03 04:27:59', 0),
(4, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 04:29:05', 1),
(5, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 04:48:00', 1),
(6, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 04:52:15', 1),
(7, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 04:52:52', 1),
(8, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 04:59:51', 1),
(9, '::1', 'deltaputik@gmail.com', 2, '2023-04-03 08:53:06', 1),
(10, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 13:06:41', 1),
(11, '::1', 'muchgame66@gmail.com', 1, '2023-04-03 14:57:24', 1),
(12, '::1', 'muchgame66@gmail.com', 1, '2023-04-04 04:20:04', 1),
(13, '::1', 'muchgame66@gmail.com', 1, '2023-04-04 04:24:34', 1),
(14, '::1', 'muchgame66@gmail.com', 1, '2023-04-04 07:28:35', 1),
(15, '::1', 'muchgame66@gmail.com', 1, '2023-04-05 06:55:31', 1),
(16, '::1', 'arif291', NULL, '2023-04-05 06:58:06', 0),
(17, '::1', 'muchgame66@gmail.com', 1, '2023-04-05 06:58:18', 1),
(18, '::1', 'muchgame66@gmail.com', 1, '2023-04-05 07:58:52', 1),
(19, '::1', 'muchgame66@gmail.com', 1, '2023-04-09 13:08:28', 1),
(20, '::1', 'muchgame66@gmail.com', 1, '2023-04-10 01:21:25', 1),
(21, '::1', 'muchgame66@gmail.com', 1, '2023-04-10 10:01:36', 1),
(22, '::1', 'muchgame66@gmail.com', 1, '2023-04-10 10:01:49', 1),
(23, '::1', 'muchgame66@gmail.com', 1, '2023-04-11 01:31:37', 1),
(24, '::1', 'muchgame66@gmail.com', 1, '2023-04-11 05:18:36', 1),
(25, '::1', 'muchgame66@gmail.com', 1, '2023-04-11 13:09:47', 1),
(26, '::1', 'muchgame66@gmail.com', 1, '2023-04-12 02:23:48', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayarzakat`
--

CREATE TABLE `bayarzakat` (
  `id` int(11) NOT NULL,
  `nama_KK` varchar(255) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `jenis_bayar` enum('beras','uang') NOT NULL,
  `jumlah_tanggunganyangdibayar` int(11) NOT NULL,
  `bayar_beras` float NOT NULL,
  `bayar_uang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bayarzakat`
--

INSERT INTO `bayarzakat` (`id`, `nama_KK`, `jumlah_tanggungan`, `jenis_bayar`, `jumlah_tanggunganyangdibayar`, `bayar_beras`, `bayar_uang`) VALUES
(2, 'Kajen Iswahyudi', 7, 'uang', 7, 0, '87500'),
(4, 'Empluk Pangestu', 1, 'beras', 1, 2.5, '0'),
(5, 'Jagaraga Dabukke', 8, 'beras', 8, 20, '0'),
(6, 'Salsabila Mulyani', 9, 'beras', 9, 22.5, '0'),
(7, 'Paramita Kuswandari', 4, 'uang', 4, 0, '50000'),
(8, 'Reza Tampubolon M.M.', 9, 'beras', 9, 22.5, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_mustahik`
--

CREATE TABLE `kategori_mustahik` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `jumlah_hak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_mustahik`
--

INSERT INTO `kategori_mustahik` (`id`, `nama_kategori`, `jumlah_hak`) VALUES
(1, 'Fakir', 1),
(2, 'Miskin', 1),
(3, 'Amil', 1),
(4, 'Mualaf', 1),
(5, 'Fisabilillah', 1),
(7, 'Riqab', 1),
(8, 'Gharim', 1),
(18, 'Ibnu Sabil', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-04-02-050851', 'App\\Database\\Migrations\\Warga', 'default', 'App', 1680412448, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1680431478, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_lainnya`
--

CREATE TABLE `mustahik_lainnya` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` enum('Amilin','Fisabilillah','Mualaf','Ibnu Sabil') NOT NULL,
  `hak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mustahik_lainnya`
--

INSERT INTO `mustahik_lainnya` (`id`, `nama`, `kategori`, `hak`) VALUES
(1, 'Citra Mardhiyah S.Psi', 'Mualaf', 0),
(2, 'Dirja Saputra', 'Mualaf', 0),
(3, 'Bakti Wahyudin S.Gz', 'Amilin', 0),
(4, 'Cornelia Suryatmi M.Pd', 'Mualaf', 0),
(5, 'Diana Nuraini', 'Ibnu Sabil', 0),
(6, 'Zelaya Halimah', 'Amilin', 0),
(7, 'Prabowo Wahyudin', 'Fisabilillah', 0),
(8, 'Bakiono Hidayanto', 'Fisabilillah', 0),
(9, 'Talia Widiastuti S.Psi', 'Ibnu Sabil', 0),
(10, 'Najam Nainggolan M.Pd', 'Ibnu Sabil', 0),
(11, 'Nilam Purnawati', 'Ibnu Sabil', 0),
(12, 'Taufan Gunawan', 'Ibnu Sabil', 0),
(13, 'Violet Andriani', 'Ibnu Sabil', 0),
(14, 'Lukita Wasita', 'Mualaf', 0),
(15, 'Wulan Kasiyah Melani S.Ked', 'Ibnu Sabil', 0),
(16, 'Violet Susanti', 'Amilin', 7),
(17, 'Wardi Maryadi Jailani', 'Mualaf', 0),
(18, 'Galih Daliono Ardianto S.Pd', 'Amilin', 0),
(19, 'Banawi Simanjuntak S.Kom', 'Fisabilillah', 0),
(20, 'Hendra Darsirah Rajata', 'Amilin', 0),
(21, 'Karman Sihombing', 'Mualaf', 0),
(22, 'Kanda Haryanto', 'Ibnu Sabil', 0),
(23, 'Emas Wibowo', 'Ibnu Sabil', 0),
(24, 'Irma Namaga', 'Amilin', 0),
(25, 'Olivia Safitri', 'Amilin', 0),
(26, 'Gantar Uwais', 'Fisabilillah', 0),
(27, 'Zelaya Nuraini', 'Mualaf', 0),
(28, 'Aurora Melani S.Pd', 'Ibnu Sabil', 0),
(29, 'Hari Sihombing', 'Mualaf', 0),
(30, 'Bakianto Catur Pradipta S.IP', 'Fisabilillah', 0),
(31, 'Salira ti dinya', 'Amilin', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_warga`
--

CREATE TABLE `mustahik_warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` enum('Fakir','Miskin','Mampu') NOT NULL,
  `hak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mustahik_warga`
--

INSERT INTO `mustahik_warga` (`id`, `nama`, `kategori`, `hak`) VALUES
(1, 'Citra Wastuti', 'Miskin', 5),
(2, 'Reza Tampubolon M.M.', 'Miskin', 0),
(3, 'Labuh Hardiansyah', 'Miskin', 3),
(4, 'Ira Jamalia Susanti', 'Fakir', 7),
(5, 'Nabila Pia Wahyuni M.M.', 'Fakir', 4),
(6, 'Edison Kuswoyo', 'Fakir', 9),
(7, 'Empluk Pangestu', 'Miskin', 0),
(8, 'Prabu Lazuardi', 'Mampu', 0),
(9, 'Diah Winda Wastuti', 'Fakir', 0),
(10, 'Kajen Iswahyudi', 'Miskin', 0),
(11, 'Shakila Andriani', 'Fakir', 0),
(12, 'Hamzah Damu Mahendra S.E.I', 'Fakir', 0),
(13, 'Vera Permata M.TI.', 'Fakir', 0),
(14, 'Paramita Kuswandari', 'Miskin', 0),
(15, 'Rahmat Thamrin', 'Fakir', 0),
(16, 'Makuta Siregar', 'Fakir', 0),
(17, 'Bakda Luhung Anggriawan', 'Mampu', 0),
(18, 'Unjani Pertiwi', 'Fakir', 0),
(19, 'Jagaraga Dabukke', 'Mampu', 0),
(20, 'Baktiadi Gaiman Nainggolan', 'Fakir', 0),
(21, 'Hilda Usamah S.Gz', 'Mampu', 0),
(22, 'Hani Nurdiyanti', 'Mampu', 0),
(23, 'Lukman Prasetyo S.H.', 'Fakir', 0),
(24, 'Gara Marsito Natsir', 'Mampu', 0),
(25, 'Laswi Habibi', 'Mampu', 0),
(26, 'Zulfa Fujiati S.IP', 'Mampu', 0),
(27, 'Eva Hariyah', 'Fakir', 0),
(28, 'Mahfud Gangsa Napitupulu', 'Miskin', 0),
(29, 'Imam Pradipta', 'Fakir', 0),
(30, 'Ulya Laras Oktaviani', 'Miskin', 0),
(31, 'Yoga Latupono', 'Mampu', 0),
(32, 'Mariadi Narpati', 'Fakir', 0),
(33, 'Ami Maryati', 'Miskin', 0),
(34, 'Jasmani Budiyanto M.Kom.', 'Fakir', 0),
(35, 'Bagiya Firmansyah M.M.', 'Fakir', 0),
(36, 'Yunita Aryani', 'Fakir', 0),
(37, 'Citra Handayani', 'Fakir', 0),
(38, 'Zalindra Qori Puspita', 'Fakir', 0),
(39, 'Kenari Samosir', 'Miskin', 0),
(40, 'Rafi Ramadan', 'Mampu', 0),
(41, 'Mala Azalea Wahyuni', 'Fakir', 0),
(42, 'Cindy Permata', 'Mampu', 0),
(43, 'Talia Karimah Pratiwi', 'Mampu', 0),
(44, 'Kezia Hartati', 'Mampu', 0),
(45, 'Ibrani Dimas Prasetyo M.Pd', 'Miskin', 0),
(46, 'Raden Zulkarnain', 'Fakir', 0),
(47, 'Cengkal Laksana Kuswoyo', 'Fakir', 0),
(48, 'Heryanto Marpaung', 'Miskin', 0),
(49, 'Ibrani Ikin Simbolon S.T.', 'Miskin', 0),
(50, 'Fathonah Melani', 'Mampu', 0),
(51, 'Kasusra Jail Manullang M.TI.', 'Mampu', 0),
(52, 'Salsabila Mulyani', 'Mampu', 0),
(53, 'Kanda Rajata S.T.', 'Fakir', 0),
(54, 'Ani Purnawati S.I.Kom', 'Miskin', 0),
(55, 'Widya Diah Uyainah', 'Miskin', 0),
(56, 'Lulut Hutasoit', 'Miskin', 0),
(57, 'Karimah Putri Handayani S.Pd', 'Fakir', 0),
(58, 'Rina Sari Melani S.E.I', 'Fakir', 0),
(59, 'Gamblang Permadi', 'Fakir', 0),
(60, 'Chandra Himawan Pratama S.E.', 'Mampu', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muzakki`
--

CREATE TABLE `muzakki` (
  `id` int(11) NOT NULL,
  `nama_muzakki` varchar(50) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `keterangan` enum('Sudah Bayar','Belum Bayar','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `muzakki`
--

INSERT INTO `muzakki` (`id`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(1, 'Citra Wastuti', 9, 'Belum Bayar'),
(2, 'Reza Tampubolon M.M.', 9, 'Sudah Bayar'),
(3, 'Labuh Hardiansyah', 6, 'Belum Bayar'),
(4, 'Ira Jamalia Susanti', 3, 'Belum Bayar'),
(5, 'Nabila Pia Wahyuni M.M.', 2, 'Belum Bayar'),
(6, 'Edison Kuswoyo', 9, 'Belum Bayar'),
(7, 'Empluk Pangestu', 1, 'Sudah Bayar'),
(8, 'Prabu Lazuardi', 8, 'Belum Bayar'),
(9, 'Diah Winda Wastuti', 1, 'Belum Bayar'),
(10, 'Kajen Iswahyudi', 7, 'Sudah Bayar'),
(11, 'Shakila Andriani', 1, 'Belum Bayar'),
(12, 'Hamzah Damu Mahendra S.E.I', 4, 'Belum Bayar'),
(13, 'Vera Permata M.TI.', 4, 'Belum Bayar'),
(14, 'Paramita Kuswandari', 4, 'Sudah Bayar'),
(15, 'Rahmat Thamrin', 7, 'Belum Bayar'),
(16, 'Makuta Siregar', 5, 'Belum Bayar'),
(17, 'Bakda Luhung Anggriawan', 8, 'Belum Bayar'),
(18, 'Unjani Pertiwi', 3, 'Belum Bayar'),
(19, 'Jagaraga Dabukke', 8, 'Sudah Bayar'),
(20, 'Baktiadi Gaiman Nainggolan', 9, 'Belum Bayar'),
(21, 'Hilda Usamah S.Gz', 2, 'Belum Bayar'),
(22, 'Hani Nurdiyanti', 9, 'Belum Bayar'),
(23, 'Lukman Prasetyo S.H.', 5, 'Belum Bayar'),
(24, 'Gara Marsito Natsir', 3, 'Belum Bayar'),
(25, 'Laswi Habibi', 2, 'Belum Bayar'),
(26, 'Zulfa Fujiati S.IP', 3, 'Belum Bayar'),
(27, 'Eva Hariyah', 9, 'Belum Bayar'),
(28, 'Mahfud Gangsa Napitupulu', 6, 'Belum Bayar'),
(29, 'Imam Pradipta', 9, 'Belum Bayar'),
(30, 'Ulya Laras Oktaviani', 7, 'Belum Bayar'),
(31, 'Yoga Latupono', 6, 'Belum Bayar'),
(32, 'Mariadi Narpati', 1, 'Belum Bayar'),
(33, 'Ami Maryati', 5, 'Belum Bayar'),
(34, 'Jasmani Budiyanto M.Kom.', 2, 'Belum Bayar'),
(35, 'Bagiya Firmansyah M.M.', 2, 'Belum Bayar'),
(36, 'Yunita Aryani', 3, 'Belum Bayar'),
(37, 'Citra Handayani', 3, 'Belum Bayar'),
(38, 'Zalindra Qori Puspita', 9, 'Belum Bayar'),
(39, 'Kenari Samosir', 2, 'Belum Bayar'),
(40, 'Rafi Ramadan', 9, 'Belum Bayar'),
(41, 'Mala Azalea Wahyuni', 4, 'Belum Bayar'),
(42, 'Cindy Permata', 6, 'Belum Bayar'),
(43, 'Talia Karimah Pratiwi', 3, 'Belum Bayar'),
(44, 'Kezia Hartati', 2, 'Belum Bayar'),
(45, 'Ibrani Dimas Prasetyo M.Pd', 3, 'Belum Bayar'),
(46, 'Raden Zulkarnain', 7, 'Belum Bayar'),
(47, 'Cengkal Laksana Kuswoyo', 6, 'Belum Bayar'),
(48, 'Heryanto Marpaung', 3, 'Belum Bayar'),
(49, 'Ibrani Ikin Simbolon S.T.', 4, 'Belum Bayar'),
(50, 'Fathonah Melani', 5, 'Belum Bayar'),
(51, 'Kasusra Jail Manullang M.TI.', 5, 'Belum Bayar'),
(52, 'Salsabila Mulyani', 9, 'Sudah Bayar'),
(53, 'Kanda Rajata S.T.', 6, 'Belum Bayar'),
(54, 'Ani Purnawati S.I.Kom', 8, 'Belum Bayar'),
(55, 'Widya Diah Uyainah', 8, 'Belum Bayar'),
(56, 'Lulut Hutasoit', 5, 'Belum Bayar'),
(57, 'Karimah Putri Handayani S.Pd', 2, 'Belum Bayar'),
(58, 'Rina Sari Melani S.E.I', 6, 'Belum Bayar'),
(59, 'Gamblang Permadi', 9, 'Belum Bayar'),
(60, 'Chandra Himawan Pratama S.E.', 4, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'muchgame66@gmail.com', 'arif291', '$2y$10$bc/uF/LxdhGfAJwR1RdFOueOddkdSQXmNfjJj6qhWAoagv7Uc4S4e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-03 04:28:23', '2023-04-03 04:28:23', NULL),
(2, 'deltaputik@gmail.com', 'delta521', '$2y$10$rSo3MCMdcswuMlABvwgmVepJTxMde9j5q70bthvNbCDal6aMg47nK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-03 08:52:45', '2023-04-03 08:52:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `bayarzakat`
--
ALTER TABLE `bayarzakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bayarzakat`
--
ALTER TABLE `bayarzakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
