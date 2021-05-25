-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsmkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kd_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot_kriteria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
(14, 'C1', 'Penghasilan Orang Tua', '0.228'),
(15, 'C2', 'Kepemilikan Tempat Tinggal', '0.20'),
(16, 'C3', 'Kondisi Tempat Tinggal', '0.20'),
(17, 'C4', 'Anggota Keluarga Ditanggung', '0.086'),
(18, 'C5', 'Kepemilikan Kendaraan', '0.114'),
(19, 'C6', 'Kebutuhan Pokok', '0.057'),
(20, 'C7', 'Pembayaran Listrik & PDAM', '0.057'),
(21, 'C8', 'Jarak Rumah Ke Sekolah', '0.057'),
(23, 'C9', 'Coba Kriteria Ubah', '0.37');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'dhienny', 'dam123', 'admin', 'admin'),
(2, 'dharvyn', 'dharvyn18', 'user', 'user'),
(3, 'Dhienny Aviya Miro', 'admin', 'admin', 'admin'),
(4, 'Muhammad Fiqri Alfayed', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id_rank` int(11) NOT NULL,
  `nik` varchar(16) CHARACTER SET latin1 NOT NULL,
  `penghasilan` double(7,2) NOT NULL,
  `kepemilikan` double(7,2) NOT NULL,
  `kondisi` double(7,2) NOT NULL,
  `anggota` double(7,2) NOT NULL,
  `kendaraan` double(7,2) NOT NULL,
  `kebutuhan` double(7,2) NOT NULL,
  `pembayaran` double(7,2) NOT NULL,
  `jarak` double(7,2) NOT NULL,
  `total` double(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id_rank`, `nik`, `penghasilan`, `kepemilikan`, `kondisi`, `anggota`, `kendaraan`, `kebutuhan`, `pembayaran`, `jarak`, `total`) VALUES
(15, '3275050710980009', 9.12, 13.33, 10.00, 7.67, 4.56, 3.80, 5.73, 1.90, 56.11),
(16, '3172021307990011', 9.12, 6.67, 10.00, 7.67, 0.00, 3.80, 8.60, 5.70, 51.55),
(17, '3172021811050007', 18.24, 20.00, 20.00, 0.00, 4.56, 3.80, 8.60, 1.90, 77.10),
(18, '32750511029911', 18.24, 13.33, 10.00, 7.67, 2.28, 3.80, 5.73, 1.90, 71.47);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `penghasilan` double(7,2) NOT NULL,
  `kepemilikan` double(7,2) NOT NULL,
  `kondisi` double(7,2) NOT NULL,
  `anggota` double(7,2) NOT NULL,
  `kendaraan` double(7,2) NOT NULL,
  `kebutuhan` double(7,2) NOT NULL,
  `pembayaran` double(7,2) NOT NULL,
  `jarak` double(7,2) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `file_permohonan` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL,
  `file_sktm` varchar(255) DEFAULT NULL,
  `file_depan` varchar(255) DEFAULT NULL,
  `file_tamu` varchar(255) DEFAULT NULL,
  `file_tidur` varchar(255) DEFAULT NULL,
  `file_mandi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nik`, `nama_lengkap`, `jenis_kelamin`, `penghasilan`, `kepemilikan`, `kondisi`, `anggota`, `kendaraan`, `kebutuhan`, `pembayaran`, `jarak`, `alamat`, `file_permohonan`, `file_kk`, `file_sktm`, `file_depan`, `file_tamu`, `file_tidur`, `file_mandi`) VALUES
(15, '3275050710980009', 'Muhammad Fiqri Alfayed', 'laki-laki', 40.00, 75.00, 60.00, 75.00, 80.00, 75.00, 75.00, 60.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '3172021307990011', 'Dwinop', 'laki-laki', 40.00, 50.00, 60.00, 75.00, 0.00, 75.00, 100.00, 100.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '3172021811050007', 'Dharvyn Aliyya Miro', 'laki-laki', 80.00, 100.00, 100.00, 25.00, 80.00, 75.00, 100.00, 60.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '32750511029911', 'Mochamad Rahmad', 'laki-laki', 80.00, 75.00, 60.00, 75.00, 40.00, 75.00, 75.00, 60.00, 'Bogor', 'dokumen/1621564151_235.pdf', 'dokumen/1621564151_891.pdf', 'dokumen/1621564151_538.pdf', 'dokumen/1621564151_333.pdf', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `nama_subkriteria` varchar(30) NOT NULL,
  `bobot_subkriteria` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_kriteria`, `nama_subkriteria`, `bobot_subkriteria`) VALUES
(1, 14, 'Penghasilan Orang Tua', '< Rp.1.500.000', '100'),
(2, 14, 'Penghasilan Orang Tua', 'Rp.1.500.000 - Rp.3.000.000', '80'),
(3, 14, 'Penghasilan Orang Tua', 'Rp.3.000.001 - Rp.4.500.000', '40'),
(4, 14, 'Penghasilan Orang Tua', 'Rp.4.500.001 - Rp.5.500.000', '20'),
(5, 14, 'Penghasilan Orang Tua', '> Rp.5.500.000', '0'),
(6, 15, 'Kepemilikan Tempat Tinggal', 'Kontrak', '100'),
(7, 15, 'Kepemilikan Tempat Tinggal', 'Bukan Milik Sendiri', '75'),
(8, 15, 'Kepemilikan Tempat Tinggal', 'Milik Keluarga Besar', '50'),
(9, 15, 'Kepemilikan Tempat Tinggal', 'Milik Sendiri', '25'),
(10, 16, 'Kondisi Tempat Tinggal', 'Non Permanen', '100'),
(11, 16, 'Kondisi Tempat Tinggal', 'Semi Permanen', '60'),
(12, 16, 'Kondisi Tempat Tinggal', 'Permanen', '20'),
(13, 17, 'Anggota Keluarga Ditanggung', '> 5', '100'),
(14, 17, 'Anggota Keluarga Ditanggung', '5', '75'),
(15, 17, 'Anggota Keluarga Ditanggung', '4', '50'),
(16, 17, 'Anggota Keluarga Ditanggung', '3', '25'),
(17, 18, 'Kepemilikan Kendaraan', 'Tidak Punya', '100'),
(18, 18, 'Kepemilikan Kendaraan', 'Sepeda', '80'),
(19, 18, 'Kepemilikan Kendaraan', 'Motor', '40'),
(20, 18, 'Kepemilikan Kendaraan', 'Motor > 1', '0'),
(21, 19, 'Kebutuhan Pokok', 'Rp.10.000 - Rp.25.000', '100'),
(22, 19, 'Kebutuhan Pokok', 'Rp.25.001 - Rp.40.000', '75'),
(23, 19, 'Kebutuhan Pokok', 'Rp.40.001 - Rp.55.000', '50'),
(24, 19, 'Kebutuhan Pokok', '> Rp.55.000', '25'),
(25, 20, 'Pembayaran Listrik & PDAM', '< Rp.100.000', '100'),
(26, 20, 'Pembayaran Listrik & PDAM', 'Rp.100.000 - Rp.200.000', '75'),
(27, 20, 'Pembayaran Listrik & PDAM', 'Rp.200.001 - Rp.300.000', '50'),
(28, 20, 'Pembayaran Listrik & PDAM', '> Rp.300.000', '25'),
(29, 21, 'Jarak Rumah Ke Sekolah', '> 2 KM', '100'),
(30, 21, 'Jarak Rumah Ke Sekolah', '1  - 2 KM', '60'),
(31, 21, 'Jarak Rumah Ke Sekolah', '< 1 KM', '40'),
(45, 23, 'Coba Kriteria Ubah', 'Cobain Subkriteria', '100'),
(46, 23, 'Coba Kriteria Ubah', 'Cobain Subkriteria Bottom', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id_rank`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id_rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
