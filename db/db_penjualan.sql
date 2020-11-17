-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2018 at 04:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `owner` varchar(30) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `alamat`, `telp`, `email`, `website`, `owner`, `desc`) VALUES
(1, 'M''KY JAYA MOTOR', 'Jalan Pramuka No 254 Kelurahan Bunder Kecamatan Jatiluhur Kabupaten Purwakarta Jawa Barat ', '081909556031', 'meiky_ariviano@yahoo.com', 'http://Penjualan.com', 'M''ky Jaya Motor', 'SHOWROOM JUAL BELI MOBIL BEKAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE IF NOT EXISTS `tbl_mobil` (
  `kd_mobil` varchar(5) NOT NULL,
  `nm_mobil` varchar(20) NOT NULL,
  `Transmisi` enum('Matic','Manual') NOT NULL DEFAULT 'Matic',
  `Tahun` int(11) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `Km` int(11) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `hargabeli` int(15) NOT NULL,
  PRIMARY KEY (`kd_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`kd_mobil`, `nm_mobil`, `Transmisi`, `Tahun`, `Warna`, `Km`, `stok`, `harga`, `hargabeli`) VALUES
('B-001', 'Avanza', 'Manual', 2009, 'silver', 209, 1, 120000000, 100000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `kd_pegawai` varchar(5) NOT NULL DEFAULT '0',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `level` enum('pegawai','admin') DEFAULT 'pegawai',
  PRIMARY KEY (`kd_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`kd_pegawai`, `username`, `password`, `nama`, `level`) VALUES
('K-001', 'yogi', '67833ff16a1a24bb7cf80a58bdccb940', 'yogi hermawan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `kd_pelanggan` varchar(5) NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`kd_pelanggan`, `nm_pelanggan`, `alamat`, `email`) VALUES
('P-001', 'RS. Sardjito', 'Kompleks UGM', 'mail@sardjito.com'),
('P-002', 'Hotel Ibis', 'Malioboro', 'mail@ibis-hotel.com'),
('P-003', 'Asep Rayana', 'Maracang', 'asep.rayana09@gmail.com'),
('P-004', 'yogi', 'munjul', 'as@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_penjualan_detail` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_mobil` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_detail`
--

INSERT INTO `tbl_penjualan_detail` (`kd_penjualan`, `kd_mobil`, `qty`) VALUES
('O-002', 'B-001', 1),
('O-003', 'B-003', 1),
('O-004', 'B-003', 1),
('O-005', 'B-002', 1),
('O-006', 'B-001', 1),
('O-007', 'B-003', 1),
('O-008', 'B-001', 1),
('O-009', 'B-002', 1),
('O-010', 'B-002', 1),
('O-011', 'B-005', 1),
('O-012', 'B-001', 1),
('O-012', 'B-004', 1),
('O-013', 'B-002', 1),
('O-014', 'B-006', 1),
('O-015', 'B-001', 1),
('O-016', 'B-006', 1),
('O-017', 'B-002', 1),
('O-018', 'B-001', 1),
('O-019', 'B-001', 1),
('O-020', 'B-001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_header`
--

CREATE TABLE IF NOT EXISTS `tbl_penjualan_header` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_pelanggan` varchar(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `kd_pegawai` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_header`
--

INSERT INTO `tbl_penjualan_header` (`kd_penjualan`, `kd_pelanggan`, `total_harga`, `tanggal_penjualan`, `kd_pegawai`) VALUES
('O-002', '', 140000000, '2018-10-08', 'K-002'),
('O-003', 'P-003', 100000000, '2018-10-08', 'K-001'),
('O-004', '', 100000000, '2018-10-08', 'K-001'),
('O-005', 'P-002', 1000000000, '2018-10-08', 'K-001'),
('O-006', 'P-002', 140000000, '2018-10-08', 'K-001'),
('O-007', '', 100000000, '2018-10-08', 'K-002'),
('O-008', 'P-002', 140000000, '2018-10-08', 'K-002'),
('O-009', 'P-001', 1000000000, '2018-10-07', 'K-001'),
('O-010', 'P-001', 1000000000, '2018-10-07', 'K-001'),
('O-011', 'P-003', 100000000, '2018-10-07', 'K-001'),
('O-012', 'P-001', 220000000, '2018-10-08', 'K-001'),
('O-013', 'P-004', 1000000000, '2018-10-08', 'K-002'),
('O-014', 'P-002', 125000000, '2018-10-08', 'K-001'),
('O-015', 'P-003', 140000000, '2018-10-08', 'K-001'),
('O-016', 'P-001', 125000000, '2018-10-08', 'K-001'),
('O-017', 'P-002', 1000000000, '2018-10-08', 'K-002'),
('O-018', 'P-002', 140000000, '2018-10-09', 'K-001'),
('O-019', 'P-003', 11, '2018-10-12', 'K-001'),
('O-020', 'P-002', 120000000, '2018-10-12', 'K-001');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
