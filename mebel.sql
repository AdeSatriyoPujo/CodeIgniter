-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 07:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mebel`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int(10) NOT NULL,
  `Nmbarang` varchar(20) NOT NULL,
  `Jnbarang` varchar(20) NOT NULL,
  `Hgbarang` varchar(30) NOT NULL,
  `Stbarang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nmbarang`, `Jnbarang`, `Hgbarang`, `Stbarang`) VALUES
(1, 'Meja', 'Furnitur', '250000', 15),
(2, 'Kursi', 'Furnitur', '200000', 15),
(3, 'Pintu', 'Furnitur', '250000', 15),
(4, 'Jendela', 'Furnitur', '250000', 15),
(5, 'Kusen', 'Furnitur', '170000', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `Kdjnbarang` int(5) NOT NULL,
  `nmjnbarang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisbarang`
--

INSERT INTO `jenisbarang` (`Kdjnbarang`, `nmjnbarang`) VALUES
(11, 'Furnitur'),
(22, 'Aksesoris'),
(33, 'JenisKayu');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `ID_karyawan` int(5) NOT NULL,
  `nmkaryawan` varchar(20) NOT NULL,
  `umkaryawan` int(5) NOT NULL,
  `almtkaryawan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_karyawan`, `nmkaryawan`, `umkaryawan`, `almtkaryawan`) VALUES
(101, 'Budiono', 25, 'jl.Soekarno-Hatta km.09'),
(102, 'Gunawan', 38, 'jl.Soekarno-Hatta km.09'),
(103, 'Suripto', 40, 'jl.Soekarno-Hatta km.09'),
(104, 'Joko', 28, 'jl.Soekarno-Hatta km.09'),
(105, 'Susilo', 30, 'jl.Soekarno-Hatta km.09');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_pelanggan` int(5) NOT NULL,
  `Nmpelanggan` varchar(20) NOT NULL,
  `tglpembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_pelanggan`, `Nmpelanggan`, `tglpembelian`) VALUES
(201, 'Dodit', '2018-05-08'),
(202, 'Dian', '2018-05-01'),
(203, 'Sucipto', '2018-05-01'),
(204, 'Beni', '2018-05-05'),
(205, 'Susanti', '2018-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `ID_stok` int(5) NOT NULL,
  `nmbarang` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`ID_stok`, `nmbarang`, `jumlah`) VALUES
(1, 'Kusen', 15),
(2, 'Jendela', 15),
(3, 'Kursi', 15),
(4, 'Meja', 15),
(5, 'Kayu Jati', 20);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID_supplier` int(5) NOT NULL,
  `nmsupplier` varchar(20) NOT NULL,
  `jnsupplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`ID_supplier`, `nmsupplier`, `jnsupplier`) VALUES
(123, 'PT.Juragan', 'Kayu'),
(124, 'PT.Sukomulyo', 'Alat dan Bahan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
