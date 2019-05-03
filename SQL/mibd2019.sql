-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
(1, 'laptop.jpg', 'Laptop', 70000, 10, 1),
(2, 'microphone.jpg', 'Microphone', 50000, 10, 1),
(3, 'proyektor.jpg', 'Proyektor', 100000, 10, 1),
(4, 'spidol.jpg', 'Spidol', 20000, 10, 0),
(5, 'speaker.jpg', 'Speaker', 100000, 5, 0),
(6, 'whiteboard.jpg', 'Whiteboard', 75000, 10, 1);

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

--
-- Dumping data for table `melakukan`
--

INSERT INTO `melakukan` (`idPelanggan`, `idTransaksi`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(9, 5),
(10, 6);

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
(1, 'Shafira', '087743553397', 'fyrakaire@gmail.com', 'manager', '123'),
(2, 'Khadaffa', '081212459820', 'alifkhadaffaa@gmail.com', 'admin', '123'),
(3, 'Giovanni', '087742036248', 'giogioanggasta@gmail.com', 'operator', '123');

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

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `nama`, `alamat`, `email`, `no_hp`) VALUES
(1, 'Wonyoung', 'Jl. Rancabentang', 'wonyoung@gmail.com', '0818894077'),
(2, 'Minjoo', 'Jl. Bukit Jarian', 'minju@gmail.com', '02168470707'),
(3, 'Sakura', 'Jl. Bukit Resik', 'sakura@gmail.com', '08775464285'),
(4, 'Hitomi', 'Jl. Rancabentang', 'hitomi@gmail.com', '08775464285'),
(9, 'Jin', 'Jl.Kucing', 'jin@gmail.com', '08776584321'),
(10, 'Jungkook', 'Jl. Anjing', 'jungkook@gmail.com', '0876563212');

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
(1, '1.jpg', 'Executive Room (Large)', 20, 'AC, Projector, Snack and Drink', 400000, 1),
(2, '2.jpg', 'Executive Room (Medium)', 10, 'AC, Projector', 300000, 1),
(3, '3.png', 'Public Room', 100, 'AC', 50000, 1),
(4, '4.jpg', 'Standard Room (Small)', 4, 'AC', 200000, 0),
(5, '5.jpg', 'Standard Room (Large)', 16, 'AC', 300000, 0),
(6, '6.jpg', 'Standard Room (Medium)', 10, 'AC', 250000, 0),
(7, '7.jpg', 'A Class Room (Small)', 6, 'AC, Snack and Drink, Projector', 400000, 0),
(8, '8.jpg', 'A Class Room (Large)', 15, 'AC, Snack and Drink, Projector', 450000, 0),
(9, '9.jpg', 'White Public Room', 70, 'AC, Snack and Drink', 80000, 0),
(10, '10.jpg', 'Cafeteria', 50, 'AC', 60000, 0),
(11, '11.jpg', 'Glass Room', 4, 'AC, Snack and Drink, Projector, Tv', 400000, 0),
(12, '12.jpg', 'Business Room', 12, 'AC, Snack and Drink, Tv', 800000, 0),
(13, '13.jpeg', 'Tuition Room (Large)', 15, 'AC, Snack and Drink, Projector', 500000, 0),
(14, '14.jpeg', 'Tuition Room (Small)', 6, 'AC, Snack and Drink, Projector', 400000, 0),
(15, '15.jpeg', 'Office Room', 8, 'AC, Snack and Drink, Projector', 600000, 0),
(16, '16.jpg', 'Library Room', 12, 'AC', 500000, 0),
(17, '17.jpeg', 'Boss Room', 15, 'AC, Snack and Drink', 800000, 0),
(18, '18.jpg', 'Bulkhead Room', 8, 'AC, Snack and Drink', 400000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sewa_alat`
--

CREATE TABLE `sewa_alat` (
  `idTransaksi` int(11) NOT NULL,
  `idAlat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa_alat`
--

INSERT INTO `sewa_alat` (`idTransaksi`, `idAlat`) VALUES
(1, 2),
(2, 2),
(4, 3),
(5, 1),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sewa_ruang`
--

CREATE TABLE `sewa_ruang` (
  `idTransaksi` int(11) NOT NULL,
  `idRuang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa_ruang`
--

INSERT INTO `sewa_ruang` (`idTransaksi`, `idRuang`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 2),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `waktu_awal` int(11) NOT NULL,
  `waktu_akhir` int(11) NOT NULL,
  `total_transaksi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `tanggal_transaksi`, `waktu_awal`, `waktu_akhir`, `total_transaksi`) VALUES
(1, '2019-05-04', 15, 18, 200000),
(2, '2019-05-04', 1, 5, 200000),
(3, '2019-05-04', 1, 2, 50000),
(4, '2019-05-04', 15, 17, 200000),
(5, '2019-05-04', 15, 17, 670000),
(6, '2019-05-04', 12, 14, 875000);

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
  MODIFY `idAlat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `idRuang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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