-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2020 pada 18.26
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id_request` int(5) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` bigint(5) NOT NULL,
  `tujuan_dinas` varchar(50) NOT NULL,
  `lama_perjalanan` varchar(35) NOT NULL,
  `tempat_penginapan` varchar(50) NOT NULL,
  `tanggal_perjalanan` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `biaya` bigint(12) NOT NULL,
  `images` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id_request`, `keterangan`, `nama`, `nik`, `tujuan_dinas`, `lama_perjalanan`, `tempat_penginapan`, `tanggal_perjalanan`, `tanggal_kembali`, `biaya`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Data Selesai', 'Harry', 22, 'Jakarta', '8 hari', 'aston', '2020-07-17', '2020-07-25', 4500000, 'images/uWSVZcqVEFEaKdUHgj9B6HSg7MXSnyb0dIhytSSX.jpeg', '2020-07-19 15:14:21', '2020-07-19 15:14:50'),
(2, 'Data Masuk', 'willi', 16, 'Jakarta', '5 hari', 'Aston', '2020-07-14', '2020-07-17', 2000000, '', '2020-07-19 15:14:21', '2020-07-19 15:14:50'),
(3, 'Data Proses', 'Rully', 121633, 'Jakarta', '5 hari', 'Aston', '2020-07-14', '2020-07-15', 2000000, '', '2020-07-19 15:14:21', '2020-07-19 15:14:50'),
(4, 'Data Masuk', 'Evan Edsa Azola', 121633, 'Jakarta', '5 hari', 'Aston', '2020-07-18', '2020-07-23', 2000000, '', '2020-07-19 15:14:21', '2020-07-19 15:14:50'),
(5, 'Data Masuk', 'wils', 327606300699000111, 'Depok', '11 hari', 'aston', '2020-07-19', '2020-07-30', 5000000, 'Belum Upload Scan Dinas', '2020-07-19 15:31:12', '2020-07-19 15:31:12'),
(6, 'Data Masuk', 'wils', 327606300699000111, 'Depok', '11 hari', 'aston', '2020-07-19', '2020-07-30', 5000000, 'Belum Upload Scan Dinas', '2020-07-19 15:32:28', '2020-07-19 15:32:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(5) NOT NULL,
  `role` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nik` bigint(5) NOT NULL,
  `images` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `class` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nik`, `images`, `email`, `password`, `remember_token`, `status`, `class`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'cornellius william', 121633, 'images/WFiVakSwy9nLHpW8oy8LIQd296Pw8zHNJLcp8HVX.jpeg', 'cwilliam440@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kLIttBFYbDxC0O5T3zRjrFtizmIi8Q0oC0Vz47vZq6ZoGidr1DoIDTX4BTEL', 'Active', 1, '2020-06-19 08:06:37', '2020-07-19 14:07:25'),
(2, 'user', 'william', 3276063006990002, 'images/jijaoLLCH8bRmplqbFGXvm7zUTVNCOZEDHdWfx5Z.jpeg', 'williamcornellius@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'GtK9uW6wy3e0UhPmJZVKmnteNZFXUYVY4KKJTQ7jQ7bFx8JjYdjvSVesdtnl', 'Active', 2, '2020-07-13 10:55:15', '2020-07-19 07:37:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
