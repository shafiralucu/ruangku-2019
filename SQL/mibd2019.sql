-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 09:08 PM
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
(1, 'laptop.jpg', 'Laptop', 70000, 10, 1),
(2, 'microphone.jpg', 'Microphone 2pcs', 50000, 10, 0),
(3, 'proyektor.jpg', 'Proyektor', 100000, 10, 1),
(4, 'spidol.jpg', 'Spidol 2pcs', 20000, 10, 0),
(5, 'speaker.jpg', 'Speaker', 100000, 5, 1),
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
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

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
(1, 'Sakura', 'Jl. Anjing', 'sakura@gmail.com', '088119456225'),
(2, 'Nayeon', 'Jl. Rancabentang', 'nayeon@gmail.com', '087742036248'),
(3, 'Mina', 'Jl. Kucing', 'mina@gmail.com', '08976574823'),
(4, 'Sana', 'Jl. Korea', 'sana@gmail.com', '08554623154'),
(5, 'Momo', 'Jl. Bukit Resik', 'momo@gmail.com', '088963154'),
(6, 'Hashrul', 'Jl. Obc', 'hashrultk98@gmail.com', '087745556215'),
(7, 'Alif', 'Jl. Rancabentang', 'alif@gmail.com', '08994561234'),
(8, 'Jennie', 'Jl. Myeongdonng', 'jennie@gmail.com', '08984561232'),
(9, 'Niki', 'Jl. Mars', 'niki@gmail.com', '0818894077'),
(10, 'Tzuyu', 'Jl. Rancabentang 2', 'tzuyu@gmail.com', '081394378777'),
(11, 'Jihyo', 'Jl. Saturnus', 'jihyo@gmail.com', '021755359');

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
(10, '10.jpg', 'Cafeteria', 50, 'AC', 60000, 1),
(11, '11.jpg', 'Glass Room', 4, 'AC, Snack and Drink, Projector, Tv', 400000, 0),
(12, '12.jpg', 'Business Room', 12, 'AC, Snack and Drink, Tv', 800000, 0),
(13, '13.jpeg', 'Tuition Room (Large)', 15, 'AC, Snack and Drink, Projector', 500000, 0),
(14, '14.jpeg', 'Tuition Room (Small)', 6, 'AC, Snack and Drink, Projector', 400000, 0),
(15, '15.jpeg', 'Office Room', 8, 'AC, Snack and Drink, Projector', 600000, 0),
(16, '16.jpg', 'Library Room', 12, 'AC', 500000, 1),
(17, '17.jpeg', 'Boss Room', 15, 'AC, Snack and Drink', 800000, 0),
(18, '18.jpg', 'Bulkhead Room', 8, 'AC, Snack and Drink', 400000, 1);

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
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 3),
(6, 1),
(7, 1),
(9, 1),
(10, 6),
(11, 5);

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
(5, 3),
(6, 1),
(7, 2),
(8, 18),
(9, 18),
(10, 10),
(11, 16);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_awal` int(2) NOT NULL,
  `waktu_akhir` int(2) NOT NULL,
  `durasi` int(2) NOT NULL,
  `total_transaksi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `tanggal_transaksi`, `waktu_awal`, `waktu_akhir`, `durasi`, `total_transaksi`) VALUES
(1, '2019-05-05 17:50:50', 4, 5, 1, 120000),
(2, '2019-05-05 17:51:02', 5, 7, 2, 170000),
(3, '2019-05-05 17:52:46', 1, 3, 2, 170000),
(4, '2019-05-05 17:52:54', 1, 4, 3, 220000),
(5, '2019-05-05 17:53:01', 15, 16, 1, 150000),
(6, '2019-05-05 17:53:08', 1, 4, 3, 1270000),
(7, '2019-05-05 17:55:02', 7, 9, 2, 670000),
(8, '2019-05-05 17:55:11', 5, 9, 4, 1600000),
(9, '2019-05-05 17:55:20', 7, 9, 2, 870000),
(10, '2019-05-05 17:55:28', 3, 7, 4, 315000),
(11, '2019-05-05 17:55:36', 1, 7, 6, 3100000);

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
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `idRuang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
