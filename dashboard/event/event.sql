-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 08:49 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `descp` varchar(10000) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `posting` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `title`, `descp`, `tanggal`, `posting`, `kategori`, `image`) VALUES
(16, 'Pensi memperingati milad sekolahmu', 'Dalam rangka memperingati milad sekolahmu, kami menghadirkan konser megah diikuti dengan pergelaran karya seni dari nominasi-nominasi siswa terbaik di sekolahmu', '2019-12-22 21:02:36', 'Akademik', 'Pensi', 'pensi.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
