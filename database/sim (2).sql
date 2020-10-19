-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2020 pada 12.16
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_password`
--

CREATE TABLE `reset_password` (
  `email` varchar(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reset_password`
--

INSERT INTO `reset_password` (`email`, `code`) VALUES
('agung.dc@globalnine-indonesia.com', '15f8d0e1c30eb2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `id` int(8) NOT NULL,
  `part_no` text NOT NULL,
  `material` text NOT NULL,
  `qty` int(8) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(8) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`id`, `part_no`, `material`, `qty`, `satuan`, `harga`, `lokasi`) VALUES
(14, '4230-T110-KOCE-10A', 'MCB ETA 1P 16A', 96, 'Pcs', 10619575, 'Rack A'),
(15, '4230-T130-KOCE-63A', 'MCB ETA 3P 63A', 28, 'Pcs', 49645575, 'Rack A'),
(16, 'APC-NBRK0450', 'Netbots Monitor 450/451', 8, 'Pcs', 1599945000, 'Lt. 2'),
(17, 'ARRS-3P-C1-PH', 'ARRESTER PHC 3XFLT 35 CTRL 0,9/i+FLT', 1, 'Pcs', 286787251, 'Rack B'),
(18, 'ARRS-3P-C2-PH', 'VAL-MS 230/3+1-FM', 4, 'Pcs', 170759337, 'Rack B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `pass` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `superadmin`
--

INSERT INTO `superadmin` (`id`, `nama`, `email`, `password`, `pass`, `level`) VALUES
(1, 'Admin IT', 'agung.dc@globalnine-indonesia.com', 'c4903384e35f81301041619394f14c26', 'agungdc', '61646D696E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nm_dpn` varchar(30) NOT NULL,
  `nm_blk` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `pass` text NOT NULL,
  `jbtn` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `tgl` date NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `nm_dpn`, `nm_blk`, `password`, `pass`, `jbtn`, `email`, `tlp`, `tgl`, `level`) VALUES
(22, '18159', 'Agung', 'Dwicahyadi', '202cb962ac59075b964b07152d234b70', '123', 'Drafter Engineering', 'agungdwicahyadi93@gmail.com', '081225105866', '2020-10-19', '9');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `superadmin`
--
ALTER TABLE `superadmin`
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
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
