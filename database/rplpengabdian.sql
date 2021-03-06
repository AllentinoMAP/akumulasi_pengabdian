-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2022 pada 05.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rplpengabdian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`id`, `nama`, `id_user`, `nama_user`) VALUES
(1, 'coba', 1, 'jauhar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `nilai6` int(11) NOT NULL,
  `nilai7` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nip` int(20) NOT NULL,
  `pangkat` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `unit_kerja` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `nip`, `pangkat`, `jabatan`, `unit_kerja`) VALUES
(1, 'Jauhar', '$2y$10$vxlZrQVDggDUQgzdGfIkKefoOaNSeizT00fxA5m8v8RUUmahkjRNW', 'Mochammad Jauhar Ulul Albab', 2103191111, 'Atasan', 'Bos', 'Departemen IT'),
(2, 'busro', '$2y$10$.DJDy8.y2qGX3zt4XeICcOwWJLeoPchz6pgcnKa484/Dfcf.Jor9W', 'busro', 1234567, 'Atasan', 'Bos', 'Departemen IT'),
(3, 'Allentino', '$2y$10$SkOF3eMb/Icc42qaoSq3R.rq4GWsuATo0LlvzViWcnk9Ro.b0pTgq', 'Allentino Mahendra', 2103191110, 'Atasan', 'Bos', 'Departemen IT'),
(4, 'Mahendra', '$2y$10$6ZkekxjeMJTJ72uH2OrL3.9foKHUkjXqZYIAim7CXHZ5toIgbKE82', 'Mahendra', 2103191110, '', '', ''),
(5, 'allen', '$2y$10$xgOfc3FXBnl45rZXRsVZOObDXqnHEhxGf5wxC9HM04uKrG19KFyCC', 'Allentino', 2103191110, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
