-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2018 pada 19.01
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasipendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasipendaftaran`
--

CREATE TABLE `aplikasipendaftaran` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `jeniskelamin` varchar(35) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aplikasipendaftaran`
--

INSERT INTO `aplikasipendaftaran` (`nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`, `Password`) VALUES
('HerianEduwardAruan', 'HerianEduw', 'D3MI4101', 'Laki-Laki', 'Berenang', 'FKB', 'Jl papua ', ''),
('Rizki Rahardiputra', 'Rizki Raha', 'D3MI4101', 'Laki-Laki', 'Berenang', 'FIT', 'huji', '2343');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasipendaftaran`
--
ALTER TABLE `aplikasipendaftaran`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
