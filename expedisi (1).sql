-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2021 pada 01.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expedisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `nama`) VALUES
(1, 'CS'),
(2, 'Document'),
(3, 'Admin'),
(4, 'Finance'),
(5, 'Accounting'),
(6, 'Marketing'),
(7, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sidebar`
--

CREATE TABLE `tb_sidebar` (
  `id` int(11) NOT NULL,
  `nama_sidebar` varchar(25) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sidebar`
--

INSERT INTO `tb_sidebar` (`id`, `nama_sidebar`, `icon`, `link`) VALUES
(1, 'Users', 'fa fa-user', 'users');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `umur` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama_depan`, `nama_belakang`, `umur`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'Web', 22, 'admin', 'admin@admin.com', 'admin', 1),
(2, 'user', 'Admin', 22, 'user', 'user@admin.com', 'user', 2),
(3, 'SERAGA', 'SANTRI', 22, 'seragasantri', 'seragasantri@gmail.com', '02081998', 6),
(4, 'Admin', 'Admin', 21, 'adminn', 'admin2@admin.com', '123', 1),
(5, 'Admin', 'Admin', 21, 'adminn', 'admin3@admin.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `tb_sidebar`
--
ALTER TABLE `tb_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_sidebar`
--
ALTER TABLE `tb_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
