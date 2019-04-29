-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 05:37 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mibd2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `idAlat` int(11) NOT NULL,
  `namaAlat` varchar(25) NOT NULL,
  `tarif` float NOT NULL,
  `status_booking` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dikelola`
--

CREATE TABLE `dikelola` (
  `idPegawai` int(11) NOT NULL,
  `idTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `melakukan`
--

CREATE TABLE `melakukan` (
  `idPelanggan` int(11) NOT NULL,
  `idTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `nama`, `no_hp`, `email`, `jabatan`, `password`) VALUES
(1, 'Shafira', '08121247658', 'firalucu@gmail.com', 'manager', '123'),
(2, 'Khadaffa', '081212459820', 'matias@gmail.com', 'admin', '123'),
(3, 'Giovanni', '08131356783', 'giogio@gmail.com', 'operator', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `idRuang` int(11) NOT NULL,
  `namaRuang` varchar(25) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `tarif` float NOT NULL,
  `status_booking` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sewa_alat`
--

CREATE TABLE `sewa_alat` (
  `idTransaksi` int(11) NOT NULL,
  `idAlat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sewa_ruang`
--

CREATE TABLE `sewa_ruang` (
  `idTransaksi` int(11) NOT NULL,
  `idRuang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `durasi_sewa` int(11) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`idAlat`);

--
-- Indexes for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD KEY `idPegawai` (`idPegawai`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indexes for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`idRuang`);

--
-- Indexes for table `sewa_alat`
--
ALTER TABLE `sewa_alat`
  ADD KEY `idAlat` (`idAlat`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indexes for table `sewa_ruang`
--
ALTER TABLE `sewa_ruang`
  ADD KEY `idRuang` (`idRuang`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `idAlat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `idRuang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD CONSTRAINT `dikelola_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`),
  ADD CONSTRAINT `dikelola_ibfk_2` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`);

--
-- Constraints for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD CONSTRAINT `melakukan_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`),
  ADD CONSTRAINT `melakukan_ibfk_2` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`);

--
-- Constraints for table `sewa_alat`
--
ALTER TABLE `sewa_alat`
  ADD CONSTRAINT `sewa_alat_ibfk_1` FOREIGN KEY (`idAlat`) REFERENCES `alat` (`idAlat`),
  ADD CONSTRAINT `sewa_alat_ibfk_2` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`);

--
-- Constraints for table `sewa_ruang`
--
ALTER TABLE `sewa_ruang`
  ADD CONSTRAINT `sewa_ruang_ibfk_1` FOREIGN KEY (`idRuang`) REFERENCES `ruang` (`idRuang`),
  ADD CONSTRAINT `sewa_ruang_ibfk_2` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
