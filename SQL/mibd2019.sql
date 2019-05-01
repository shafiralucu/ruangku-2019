-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 04:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
  `imagesAlat` varchar(200) NOT NULL,
  `namaAlat` varchar(25) NOT NULL,
  `tarif` float NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_booking` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`idAlat`, `imagesAlat`, `namaAlat`, `tarif`, `jumlah`, `status_booking`) VALUES
(1, 'laptop.jpg', 'Laptop', 60000, 10, 0),
(2, 'microphone.jpg', 'Microphone 2pcs', 50000, 10, 0),
(3, 'proyektor.jpg', 'Proyektor', 100000, 10, 0),
(4, 'spidol.jpg', 'Spidol 2pcs', 20000, 10, 0),
(5, 'speaker.jpg', 'Speaker', 100000, 5, 0),
(6, 'whiteboard.jpg', 'Whiteboard', 75000, 10, 0),
(15, 'cover.jpg', 'cover', 100, 0, 0);

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
  `no_hp` varchar(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `idRuang` int(11) NOT NULL,
  `imagesRuang` varchar(200) NOT NULL,
  `namaRuang` varchar(25) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `tarif` float NOT NULL,
  `status_booking` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`idRuang`, `imagesRuang`, `namaRuang`, `kapasitas`, `fasilitas`, `tarif`, `status_booking`) VALUES
(1, '1.jpg', 'Executive Room (Large)', 20, 'AC, Projector, Snack and Drink', 400000, 0),
(2, '', 'Executive Room (Medium)', 10, 'AC, Projector', 300000, 0),
(3, '', 'Public Room', 100, 'AC', 50000, 0),
(4, '', 'Standard Room (Small)', 4, 'AC', 200000, 0),
(5, '', 'Standard Room (Large)', 16, 'AC', 300000, 0),
(6, '', 'Standard Room (Medium)', 10, 'AC', 250000, 0),
(7, '', 'A Class Room (Small)', 6, 'AC, Snack and Drink, Projector', 400000, 0),
(8, '', 'A Class Room (Large)', 15, 'AC, Snack and Drink, Projector', 450000, 0),
(9, '', 'White Public Room', 70, 'AC, Snack and Drink', 80000, 0),
(10, '', 'Cafeteria', 50, 'AC', 60000, 0),
(11, '', 'Glass Room', 4, 'AC, Snack and Drink, Projector, Tv', 400000, 0),
(12, '', 'Business Room', 12, 'AC, Snack and Drink, Tv', 800000, 0),
(13, '', 'Tuition Room (Large)', 15, 'AC, Snack and Drink, Projector', 500000, 0),
(14, '', 'Tuition Room (Small)', 6, 'AC, Snack and Drink, Projector', 400000, 0),
(15, '', 'Office Room', 8, 'AC, Snack and Drink, Projector', 600000, 0),
(16, '', 'Library Room', 12, 'AC', 500000, 0),
(17, '', 'Boss Room', 15, 'AC, Snack and Drink', 800000, 0),
(18, '', 'Bulkhead Room', 8, 'AC, Snack and Drink', 400000, 0);

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
  MODIFY `idAlat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `idRuang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
