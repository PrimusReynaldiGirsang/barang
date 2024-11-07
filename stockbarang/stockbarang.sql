-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 08:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `idkeluar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggalkeluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`idkeluar`, `idbarang`, `tanggalkeluar`, `keterangan`, `qty`) VALUES
(28, 20, '2023-09-20 15:11:43', 'Customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `idmasuk` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggalmasuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`idmasuk`, `idbarang`, `tanggalmasuk`, `keterangan`, `qty`) VALUES
(48, 20, '2023-09-20 15:12:10', 'G Gultom', 10);

-- --------------------------------------------------------

--
-- Table structure for table `cashbon`
--

CREATE TABLE `cashbon` (
  `idcb` int(11) NOT NULL,
  `namapenerima` varchar(25) NOT NULL,
  `tanggalcb` timestamp NOT NULL DEFAULT current_timestamp(),
  `jlhcb` int(11) NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `idjasa` int(11) NOT NULL,
  `namajasa` varchar(99) NOT NULL,
  `hargajasa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`idjasa`, `namajasa`, `hargajasa`) VALUES
(10, 'Serice Ringan', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, '45motor@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

CREATE TABLE `penghasilan` (
  `idpenghasilan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namabarang` varchar(99) NOT NULL,
  `namajasa` varchar(99) NOT NULL,
  `nopol` varchar(25) NOT NULL,
  `hargajual` varchar(99) NOT NULL,
  `hargajasa` varchar(99) NOT NULL,
  `total` int(11) NOT NULL,
  `montir` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `beainap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghasilan`
--

INSERT INTO `penghasilan` (`idpenghasilan`, `tanggal`, `namabarang`, `namajasa`, `nopol`, `hargajual`, `hargajasa`, `total`, `montir`, `owner`, `beainap`) VALUES
(24, '2023-09-20 15:10:45', 'Corsa Rx King 12345', 'Serice Ringan', 'D 3 WE', '280000', '30000', 0, 0, 0, 8000),
(25, '2023-09-20 15:56:41', 'Corsa Rx King 12345', 'Serice Ringan', 'E 1234 WE', '280000', '30000', 0, 0, 0, 500);

-- --------------------------------------------------------

--
-- Table structure for table `sisabarang`
--

CREATE TABLE `sisabarang` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(25) NOT NULL,
  `stocktersedia` int(11) NOT NULL,
  `hargajual` varchar(25) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sisabarang`
--

INSERT INTO `sisabarang` (`idbarang`, `namabarang`, `stocktersedia`, `hargajual`, `deskripsi`, `image`) VALUES
(20, 'Corsa Rx King 12345', 19, '280000', 'Ban', '37ffc0516a6e4dc6b120efe83e1e5ee1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tempo`
--

CREATE TABLE `tempo` (
  `idtempo` int(11) NOT NULL,
  `namabarang` varchar(25) NOT NULL,
  `jenisbarang` varchar(25) NOT NULL,
  `hargatotal` int(11) NOT NULL,
  `sudahdibayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `tanggaldatang` timestamp NOT NULL DEFAULT current_timestamp(),
  `jatuhtempo` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `namapengirim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tempo`
--

INSERT INTO `tempo` (`idtempo`, `namabarang`, `jenisbarang`, `hargatotal`, `sudahdibayar`, `sisa`, `tanggaldatang`, `jatuhtempo`, `status`, `namapengirim`) VALUES
(14, 'Yamalube', 'Oli', 700000, 700000, 0, '2023-09-20 15:15:49', '2023-09-21', 'BL', 'Bujas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indexes for table `cashbon`
--
ALTER TABLE `cashbon`
  ADD PRIMARY KEY (`idcb`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`idjasa`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`idpenghasilan`);

--
-- Indexes for table `sisabarang`
--
ALTER TABLE `sisabarang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`idtempo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cashbon`
--
ALTER TABLE `cashbon`
  MODIFY `idcb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `idjasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `idpenghasilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sisabarang`
--
ALTER TABLE `sisabarang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tempo`
--
ALTER TABLE `tempo`
  MODIFY `idtempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
