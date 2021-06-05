-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 19.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsbpwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacode`
--

CREATE TABLE `datacode` (
  `id` int(100) NOT NULL,
  `nama` varchar(288) NOT NULL,
  `email` varchar(288) NOT NULL,
  `password` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datacode`
--

INSERT INTO `datacode` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Nuagi', 'nuagi@gmail.com', 'nuagi123'),
(9, 'adi12', 'adi@gmail.com', 'adi15'),
(11, 'Nuagi Rean Wijaya', 'nuagi20ti@mahasiswa.pcr.ac.id', '10101010'),
(14, 'Nuagi Rean', 'reanwijaya.nuagi@gmail.com', '10101010'),
(15, 'sarah12', 'sarah20@gmail.com', 'sarah10'),
(16, 'Nuagi Rean Wijaya', 'nuagi20ti@mahasiswa.pcr.ac.id', '10101010');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datacode`
--
ALTER TABLE `datacode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datacode`
--
ALTER TABLE `datacode`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
