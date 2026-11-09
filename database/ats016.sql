-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2026 pada 08.17
-- Versi server: 10.11.16-MariaDB
-- Versi PHP: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `ats016`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_016`
--

CREATE TABLE `member_016` (
  `id` int(10) NOT NULL,
  `email` varchar(34) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `aktive` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member_016`
--

INSERT INTO `member_016` (`id`, `email`, `password`, `nama`, `aktive`) VALUES
(1, 'fathan@ulbi.ac.id', 'e10adc3949ba59abbe56e057f20f883e', 'Pane, Muhammad Fathan Azfa', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil_016`
--

CREATE TABLE `mobil_016` (
  `no_id` int(10) NOT NULL,
  `nomor_kendaraan` varchar(12) NOT NULL,
  `jenis_kendaraan` enum('Sedan','Pickup','Truk','Bemo') NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `tahun_pembuatan` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil_016`
--

INSERT INTO `mobil_016` (`no_id`, `nomor_kendaraan`, `jenis_kendaraan`, `pemilik`, `tahun_pembuatan`) VALUES
(1, 'D 1234 ABC', 'Sedan', 'Fathan', '2022'),
(2, 'D 5678 XYZ', 'Pickup', 'Rhabel', '2021'),
(3, 'D 9999 DEF', 'Truk', 'Raihaan', '2023');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `member_016`
--
ALTER TABLE `member_016`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil_016`
--
ALTER TABLE `mobil_016`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member_016`
--
ALTER TABLE `member_016`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mobil_016`
--
ALTER TABLE `mobil_016`
  MODIFY `no_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
