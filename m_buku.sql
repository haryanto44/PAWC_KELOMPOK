-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 25 Bulan Mei 2021 pada 15.15
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_buku`
--

INSERT INTO `m_buku` (`id`, `judul`, `keterangan`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Test23', 'cd', 2, NULL, '2021-05-25 05:36:42'),
(2, 'Test', 'asd', 32, NULL, NULL),
(3, 'zczxc', 'scvxv', 53, NULL, '2021-05-25 05:52:00'),
(4, 'zxcwd1', '314123asdasd', 4, '2021-05-22 22:36:58', '2021-05-22 22:36:58'),
(5, 'agree', 'tidak tau', 6, '2021-05-25 04:50:24', '2021-05-25 04:50:24'),
(6, 'wesa', 'awerr', 2, '2021-05-25 04:56:05', '2021-05-25 04:56:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
