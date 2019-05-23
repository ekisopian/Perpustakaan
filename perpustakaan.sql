-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 07:08 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `jk`, `jurusan`, `alamat`, `no_hp`, `password`) VALUES
(1, 'amri', 'pria', 'menes', 'rangkas', '0808', '080808'),
(2, 'ugugug', 'pria', 'pandeglang', 'kadu bangkong', '0800', '979696'),
(3, 'ugugug', 'pria', 'pandeglang', 'kadu bangkong', '0800', '979696'),
(4, 'ugugug', 'pria', 'pandeglang', 'kadu bangkong', '0800', '979696'),
(5, 'kebuk', 'pria', 'bandung', 'maja', '0899999', '12345678'),
(6, 'cindy', 'wanita', 'jakarta', 'bagdad', '087777', '123456'),
(7, 'lucinta', 'wanita', 'Akuntansi', 'jakarta', '0897565', '125652');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` int(20) NOT NULL,
  `judul_buku` varchar(20) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `pengarang`, `tahun`) VALUES
(1, 'Dilan', 'Pidi Baiq', '1990');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jam_tugas` varchar(20) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `jk`, `jabatan`, `jam_tugas`, `no_hp`, `password`) VALUES
(0, 'ekisopian', 'laki-laki', 'develop', 'full', 89, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_cart` int(20) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `kode_buku` int(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_cart`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `kode_buku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_cart` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
