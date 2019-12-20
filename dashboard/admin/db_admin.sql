-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 11:55 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(3) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=346385 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `jabatan`) VALUES
(1, 'a', 'jogja', '2019-12-01', 'Laki-laki', 'Islam', 'a', 'Guru Olahraga'),
(2, 'b', 'jogja', '2019-12-02', 'Laki-laki', 'Islam', 'b', 'Guru Agama'),
(3, 'c', 'jogja', '2019-12-02', 'Laki-laki', 'Islam', 'c', 'Guru Olahraga'),
(4, 'd', 'jogja', '2019-12-02', 'Laki-laki', 'Kristen Katholik', 'd', 'Guru Seni'),
(609, 'Muhammad Alfian ', 'Barabai ', '2005-02-05', 'Laki-laki', 'Islam', 'Banua Kepayang', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
