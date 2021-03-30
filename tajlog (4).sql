-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2021 pada 01.44
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
-- Database: `tajlog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobsheet`
--

CREATE TABLE `jobsheet` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `customer_no` int(11) DEFAULT NULL,
  `si` varchar(20) DEFAULT NULL,
  `carrier_id` int(11) DEFAULT NULL,
  `do` varchar(20) DEFAULT NULL,
  `pol` int(11) DEFAULT NULL,
  `pod` int(11) DEFAULT NULL,
  `vol_qty` int(11) DEFAULT NULL,
  `vol_weight` int(11) DEFAULT NULL,
  `vessel` int(11) DEFAULT NULL,
  `vessel_no` int(11) DEFAULT NULL,
  `open` datetime DEFAULT NULL,
  `closing` datetime DEFAULT NULL,
  `etd_city` varchar(20) DEFAULT NULL,
  `etd_date` date DEFAULT NULL,
  `eta_city` varchar(20) DEFAULT NULL,
  `eta_date` date DEFAULT NULL,
  `stuffing_date` date DEFAULT NULL,
  `stuffing_warehouse` int(11) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `trucking_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jobsheet`
--

INSERT INTO `jobsheet` (`id`, `invoice_no`, `customer_no`, `si`, `carrier_id`, `do`, `pol`, `pod`, `vol_qty`, `vol_weight`, `vessel`, `vessel_no`, `open`, `closing`, `etd_city`, `etd_date`, `eta_city`, `eta_date`, `stuffing_date`, `stuffing_warehouse`, `term`, `trucking_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, NULL, 1, NULL, 3, NULL, 1, 1, NULL, 1, 2, 5, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 3, NULL, 3, NULL, 1, 1, NULL, 1, 2, 5, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 3, NULL, 3, NULL, 1, 1, NULL, 1, 2, 5, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 9, NULL, 3, NULL, 1, 1, NULL, 1, 2, 5, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobsheet_container`
--

CREATE TABLE `jobsheet_container` (
  `id` int(11) NOT NULL,
  `jobsheet_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `container_no` varchar(20) NOT NULL,
  `seal_no` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobsheet_mv`
--

CREATE TABLE `jobsheet_mv` (
  `id` int(11) NOT NULL,
  `jobsheet_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `mv_id` int(11) NOT NULL,
  `mv_no` int(11) NOT NULL,
  `etd_id` int(11) NOT NULL,
  `etd_date` date NOT NULL,
  `eta_id` int(11) NOT NULL,
  `eta_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobsheet_summary`
--

CREATE TABLE `jobsheet_summary` (
  `id` int(11) NOT NULL,
  `jobsheet_id` int(11) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `shipper` varchar(50) NOT NULL,
  `carriel` varchar(50) NOT NULL,
  `pol_pod` varchar(50) NOT NULL,
  `volume` varchar(20) NOT NULL,
  `vessel` varchar(50) NOT NULL,
  `open` varchar(30) NOT NULL,
  `closing` varchar(30) NOT NULL,
  `etd` varchar(20) NOT NULL,
  `eta` varchar(20) NOT NULL,
  `stuffing` varchar(20) NOT NULL,
  `term` varchar(20) NOT NULL,
  `trucking_by` varchar(20) NOT NULL,
  `container_no` varchar(5) NOT NULL,
  `seal_no` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_carrier`
--

CREATE TABLE `m_carrier` (
  `id` int(11) NOT NULL,
  `name_carrier` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_carrier`
--

INSERT INTO `m_carrier` (`id`, `name_carrier`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'PENGUSAHA', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(5) NOT NULL,
  `name_customer` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_customer`
--

INSERT INTO `m_customer` (`id`, `customer_id`, `name_customer`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(5, '00001', 'a', NULL, NULL, NULL, NULL),
(6, '00002', 'b', NULL, NULL, NULL, NULL),
(7, '00003', '', NULL, NULL, NULL, NULL),
(8, '00004', '', NULL, NULL, NULL, NULL),
(9, '00005', '', NULL, NULL, NULL, NULL),
(11, '00006', '', NULL, NULL, NULL, NULL),
(12, '00007', '', NULL, NULL, NULL, NULL),
(13, '00008', '', NULL, NULL, NULL, NULL),
(14, '00009', '', NULL, NULL, NULL, NULL),
(15, '00010', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pod`
--

CREATE TABLE `m_pod` (
  `id` int(11) NOT NULL,
  `name_pod` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_pod`
--

INSERT INTO `m_pod` (`id`, `name_pod`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'tes', NULL, NULL, NULL, NULL),
(4, 'qeq', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pol`
--

CREATE TABLE `m_pol` (
  `id` int(11) NOT NULL,
  `name_pol` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_pol`
--

INSERT INTO `m_pol` (`id`, `name_pol`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'seragass', NULL, NULL, NULL, NULL),
(6, 'asdad', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_term`
--

CREATE TABLE `m_term` (
  `id` int(11) NOT NULL,
  `name_term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_term`
--

INSERT INTO `m_term` (`id`, `name_term`) VALUES
(2, 'tess');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_vessel`
--

CREATE TABLE `m_vessel` (
  `id` int(11) NOT NULL,
  `name_vessel` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_vessel`
--

INSERT INTO `m_vessel` (`id`, `name_vessel`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'Seraga Santri', NULL, NULL, NULL, NULL),
(3, 'seragas', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_vessel_no`
--

CREATE TABLE `m_vessel_no` (
  `id` int(11) NOT NULL,
  `vessel_id` int(11) NOT NULL,
  `name_vesselno` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_vessel_no`
--

INSERT INTO `m_vessel_no` (`id`, `vessel_id`, `name_vesselno`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(5, 2, 'seragass', NULL, NULL, NULL, NULL),
(6, 3, 'zxczx', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_volume`
--

CREATE TABLE `m_volume` (
  `id` int(11) NOT NULL,
  `name_vol` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_volume`
--

INSERT INTO `m_volume` (`id`, `name_vol`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'seraga', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `nama`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'CS', NULL, NULL, NULL, NULL),
(2, 'Document', NULL, NULL, NULL, NULL),
(3, 'Admin', NULL, NULL, NULL, NULL),
(4, 'Finance', NULL, NULL, NULL, NULL),
(5, 'Accounting', NULL, NULL, NULL, NULL),
(6, 'Marketing', NULL, NULL, NULL, NULL),
(7, 'Operator', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sidebar`
--

CREATE TABLE `tb_sidebar` (
  `id` int(11) NOT NULL,
  `nama_sidebar` varchar(25) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sidebar`
--

INSERT INTO `tb_sidebar` (`id`, `nama_sidebar`, `icon`, `link`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Users', 'fa fa-user', 'users', NULL, NULL, NULL, NULL);

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
  `role_id` int(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama_depan`, `nama_belakang`, `umur`, `username`, `email`, `password`, `role_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Admin', 'Web', 22, 'admin', 'admin@admin.com', 'admin', 1, NULL, NULL, NULL, NULL),
(2, 'user', 'Admin', 22, 'user', 'user@admin.com', 'user', 2, NULL, NULL, NULL, NULL),
(3, 'SERAGA', 'SANTRI', 22, 'seragasantri', 'seragasantri@gmail.com', '02081998', 6, NULL, NULL, NULL, NULL),
(4, 'Admin', 'Admin', 21, 'adminn', 'admin2@admin.com', '123', 1, NULL, NULL, NULL, NULL),
(5, 'Admin', 'Admin', 21, 'adminn', 'admin3@admin.com', '123', 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jobsheet`
--
ALTER TABLE `jobsheet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobsheet_container`
--
ALTER TABLE `jobsheet_container`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobsheet_summary`
--
ALTER TABLE `jobsheet_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_carrier`
--
ALTER TABLE `m_carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_pod`
--
ALTER TABLE `m_pod`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_pol`
--
ALTER TABLE `m_pol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_term`
--
ALTER TABLE `m_term`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_vessel`
--
ALTER TABLE `m_vessel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_vessel_no`
--
ALTER TABLE `m_vessel_no`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_volume`
--
ALTER TABLE `m_volume`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `jobsheet`
--
ALTER TABLE `jobsheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobsheet_container`
--
ALTER TABLE `jobsheet_container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobsheet_summary`
--
ALTER TABLE `jobsheet_summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_carrier`
--
ALTER TABLE `m_carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `m_pod`
--
ALTER TABLE `m_pod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `m_pol`
--
ALTER TABLE `m_pol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `m_term`
--
ALTER TABLE `m_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_vessel`
--
ALTER TABLE `m_vessel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `m_vessel_no`
--
ALTER TABLE `m_vessel_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `m_volume`
--
ALTER TABLE `m_volume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
