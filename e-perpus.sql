-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2018 pada 08.07
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `noid` int(10) NOT NULL,
  `kd_buku` int(10) NOT NULL,
  `jd_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `th_penerbit` date NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`noid`, `kd_buku`, `jd_buku`, `pengarang`, `penerbit`, `stok`, `th_penerbit`, `id_kategori`) VALUES
(1, 2012, 'ketika dia telah pergi', 'ade', 'nurrahman', 2, '2018-12-05', 0),
(3, 899479, 'Pelangi Dimatamu', 'rizal', 'endang', 19, '2018-12-02', 294),
(4, 899479, 'barat', 'fira', 'bobi', 3, '2018-12-01', 1128765),
(5, 899479, 'barat', 'fira', 'bobi', 3, '2018-12-01', 1128765);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `noid` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`noid`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `noid` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`noid`, `nama_depan`, `nama_belakang`, `email`, `phone`) VALUES
(1, 'ade', 'nurrahman', 'adenurrahman0205@gmail.com', '089630492002'),
(2, 'muhammad ', 'aden', 'aden@gmail.com', '0857456234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `v_anggota`
--

CREATE TABLE `v_anggota` (
  `nomer` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `v_anggota`
--

INSERT INTO `v_anggota` (`nomer`, `nama`, `email`, `telpon`) VALUES
(1, 'ilham', 'ilham@gmail.com', '08999776545'),
(2, 'Adit', 'adit@gmail.com', '09776564321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `v_pinjam`
--

CREATE TABLE `v_pinjam` (
  `kd_pinjam` int(6) NOT NULL,
  `kd_buku` int(30) NOT NULL,
  `nm_bku` varchar(30) NOT NULL,
  `jml` int(6) NOT NULL,
  `tgl_pjm` date NOT NULL,
  `tgl_kbl` date NOT NULL,
  `denda` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `v_anggota`
--
ALTER TABLE `v_anggota`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `v_pinjam`
--
ALTER TABLE `v_pinjam`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `noid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `v_anggota`
--
ALTER TABLE `v_anggota`
  MODIFY `nomer` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `v_pinjam`
--
ALTER TABLE `v_pinjam`
  MODIFY `kd_pinjam` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
