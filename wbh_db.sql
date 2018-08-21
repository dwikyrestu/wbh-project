-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Agu 2018 pada 08.58
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbh_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` varchar(15) NOT NULL,
  `nama_bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
('072018', 'Juli 2018'),
('082018', 'Agustus 2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detpen` int(11) NOT NULL,
  `nama_detpen` varchar(25) NOT NULL,
  `nilai_detpen` int(11) NOT NULL,
  `person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `minggu`
--

CREATE TABLE `minggu` (
  `id_minggu` int(11) NOT NULL,
  `id_bulan` varchar(15) NOT NULL,
  `nama_minggu` varchar(25) NOT NULL,
  `omset_minggu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detpen`);

--
-- Indexes for table `minggu`
--
ALTER TABLE `minggu`
  ADD PRIMARY KEY (`id_minggu`),
  ADD KEY `id_bulan` (`id_bulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detpen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `minggu`
--
ALTER TABLE `minggu`
  MODIFY `id_minggu` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `minggu`
--
ALTER TABLE `minggu`
  ADD CONSTRAINT `minggu_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `bulan` (`id_bulan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
