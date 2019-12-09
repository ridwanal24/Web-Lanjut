-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 09:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sekolahmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`idAgenda` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`idArtikel` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pathText` varchar(100) DEFAULT NULL,
  `pathImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE IF NOT EXISTS `ekstra` (
`idEkstra` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
`idFasilitas` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`idGaleri` int(11) NOT NULL,
  `pathVideo` varchar(100) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `pathVideo`, `pathImg`) VALUES
(660100001, NULL, './assets/img/galeri/classroom.jpg'),
(660100002, NULL, './assets/img/galeri/high_school.jpg'),
(660100003, NULL, './assets/img/galeri/computer_eng.jpg'),
(660100004, NULL, './assets/img/galeri/electrician.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `tglLahir` datetime DEFAULT NULL,
  `tempatLahir` varchar(100) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `idJabatan` int(11) DEFAULT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `gender`, `tglLahir`, `tempatLahir`, `pass`, `idJabatan`, `agama`) VALUES
(222, 'qqq', 'edsdsd', 'P', '1111-11-11 00:00:00', 'dqdqd', NULL, 5, 'Kristen Katholik'),
(100001, 'Muhammad Ruslan', 'Jalan Kuningan No. 2 Depok Sleman', 'L', '2019-12-25 00:00:00', 'Bantul', 1234, 5, 'Kristen Protestan');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`idJabatan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `nama`) VALUES
(1, 'Kepala Sekolah'),
(2, 'Guru Bahasa'),
(3, 'Guru Olahraga'),
(4, 'Guru Seni'),
(5, 'Guru Musik'),
(6, 'Guru Agama');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`idJurusan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`idJurusan`, `nama`) VALUES
(1, 'Teknik Komputer Jaringan'),
(2, 'Teknik Instalasi Pemanfaatan Tenaga Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`idEvent` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`idKelas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `idJurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idKelas`, `nama`, `idJurusan`) VALUES
(1, '10', 1),
(2, '11', 1),
(3, '12', 1),
(4, '10', 2),
(5, '11', 2),
(6, '12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE IF NOT EXISTS `kritiksaran` (
`idkritik` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE IF NOT EXISTS `matapelajaran` (
`idMapel` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
`idPengumuman` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profilsekolah`
--

CREATE TABLE IF NOT EXISTS `profilsekolah` (
  `idProfil` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE IF NOT EXISTS `sambutan` (
  `idSambutan` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`nis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `tglLahir` datetime NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `pathImage` varchar(100) DEFAULT NULL,
  `idKelas` int(11) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=681 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `gender`, `tglLahir`, `tempatLahir`, `pathImage`, `idKelas`, `pass`, `agama`) VALUES
(614, 'Muhammad Alfian ', 'Banua Kepayang', 'L', '2003-02-05 00:00:00', 'Barabai ', NULL, 1, 1234, 'Islam'),
(615, 'Muhammad Arsyad', 'Banua Kepayang', 'L', '2003-04-25 00:00:00', 'Barabai', NULL, 1, 1234, 'Islam'),
(616, 'Dinda Nurwulan Agustin', 'Banua Kepayang', 'P', '2003-08-24 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(617, 'Nursifa Salsabila', 'Banua Kepayang', 'P', '2003-06-23 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(618, 'Meta Adilla', 'Banua Kepayang', 'P', '2003-06-01 00:00:00', 'Banua Kepayang', NULL, 1, 1234, 'Islam'),
(619, 'Norlatifah Azlina', 'Banua Kepayang', 'P', '2003-09-21 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(620, 'Dhea Azizah', 'Banua Kepayang', 'P', '2003-01-27 00:00:00', 'Barabai', NULL, 1, 1234, 'Islam'),
(621, 'Dicky Septiawan', 'Banua Kepayang', 'L', '2003-09-17 00:00:00', 'Barabai', NULL, 1, 1234, 'Islam'),
(622, 'Aisyah Asura', 'Banua Kepayang', 'P', '2003-01-29 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(623, 'Aulia Rahmadana', 'Banua Kepayang', 'P', '2003-02-11 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(624, 'Imelda Selvia Ningrum', 'Banua Kepayang', 'P', '2003-07-08 00:00:00', 'HST', NULL, 1, 1234, 'Islam'),
(625, 'Muhammad Fauzan', 'Banua Kepayang', 'L', '2003-01-22 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(626, 'M. Resky Fadillah', 'Banua Kepayang', 'L', '2003-06-18 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(627, 'M. Ridha Paratama', 'Banua Kepayang', 'L', '2003-06-24 00:00:00', 'Amuntai', NULL, 2, 1234, 'Islam'),
(628, 'M. Akbar Fadillah', 'Banua Kepayang', 'L', '2003-05-08 00:00:00', 'Banjarmasin', NULL, 2, 1234, 'Islam'),
(629, 'Nor Muhammad Muhibbin', 'Banua Kepayang', 'L', '2003-08-08 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(630, 'Nadia Azmi Haliza', 'Banua Kepayang', 'P', '2003-12-21 00:00:00', 'Balikpapan', NULL, 2, 1234, 'Islam'),
(631, 'Norlatifah', 'Banua Kepayang', 'P', '2003-12-17 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(632, 'Siti Fatimah', 'Banua Kepayang', 'P', '2003-10-26 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(633, 'Suaibatul Aslamiah', 'Banua Kepayang', 'P', '2003-07-18 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(634, 'Wina Amalia', 'Banua Kepayang', 'P', '2003-11-17 00:00:00', 'HST', NULL, 2, 1234, 'Islam'),
(635, 'Muhammad Haiqi', 'Banua Kepayang', 'L', '2003-03-12 00:00:00', 'Banjarmasin', NULL, 2, 1234, 'Islam'),
(636, 'Vivi Ariyanti', 'Banua Kepayang', 'P', '2002-11-04 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(637, 'Siti Zhofirah', 'Banua Kepayang', 'P', '2002-12-29 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(638, 'Arya Pranata', 'Banua Kepayang', 'L', '2002-09-11 00:00:00', 'Pangkalanbun', NULL, 3, 1234, 'Islam'),
(639, 'Nor Maulina', 'Banua Kepayang', 'P', '2002-03-08 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(640, 'Laura Fahrianisa', 'Banua Kepayang', 'P', '2002-01-15 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(641, 'Nurul Aulia', 'Banua Kepayang', 'P', '2002-10-15 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(642, 'Muhammad Riswan Alfianor', 'Banua Kepayang', 'L', '2002-08-23 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(643, 'Siti Nurhaliza', 'Banua Kepayang', 'P', '2002-10-08 00:00:00', 'HST', NULL, 3, 1234, 'Islam'),
(644, 'Aulia Nurhidayah', 'Banua Kepayang', 'P', '2002-12-05 00:00:00', 'Bahaur Hulu', NULL, 3, 1234, 'Islam'),
(645, 'Nor Aidi', 'Banua Kepayang', 'L', '2003-03-10 00:00:00', 'Tabalong', NULL, 3, 1234, 'Islam'),
(646, 'Jahratun Nisa', 'Banua Kepayang', 'P', '2002-02-25 00:00:00', 'Banjarmasin', NULL, 3, 1234, 'Islam'),
(647, 'Muhammad Risky', 'Banua Kepayang', 'L', '2002-09-06 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(648, 'Nur Asyifa', 'Banua Kepayang', 'P', '2002-11-01 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(649, 'Sarifatul Asmaniah', 'Banua Kepayang', 'P', '2002-09-07 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(650, 'Muhammad Rifky', 'Banua Kepayang', 'L', '2002-05-06 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(651, 'M. Reno Ramadhani', 'Banua Kepayang', 'L', '2002-09-15 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(652, 'Aini Shahib', 'Banua Kepayang', 'L', '2002-07-10 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(653, 'Muhammad Naufal', 'Banua Kepayang', 'L', '2002-03-27 00:00:00', 'Bawan', NULL, 4, 1234, 'Islam'),
(654, 'Akhmad Riyadi', 'Banua Kepayang', 'L', '2002-03-27 00:00:00', 'Amuntai', NULL, 4, 1234, 'Islam'),
(655, 'Nazwa Nor Maghfirah', 'Banua Kepayang', 'P', '2002-04-21 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(656, 'Riska Aprilia Suswanti', 'Banua Kepayang', 'P', '2002-04-04 00:00:00', 'Banjarmasin', NULL, 4, 1234, 'Islam'),
(657, 'Syaidatun Asiyah', 'Banua Kepayang', 'P', '2002-10-29 00:00:00', 'HST', NULL, 4, 1234, 'Islam'),
(658, 'Muhammad Fateh Al-Mubarak', 'Banua Kepayang', 'L', '2001-07-07 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(659, 'Fathul Janah', 'Banua Kepayang', 'P', '2001-03-18 00:00:00', 'Banjarmasin', NULL, 5, 1234, 'Islam'),
(660, 'Aulia Rahmah', 'Banua Kepayang', 'P', '2001-08-08 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(661, 'Mariyana', 'Banua Kepayang', 'P', '2001-09-07 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(662, 'M. Saufi', 'Banua Kepayang', 'L', '2001-04-30 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(663, 'Raudatu Sifa', 'Banua Kepayang', 'P', '2001-05-12 00:00:00', 'Banjarmasin', NULL, 5, 1234, 'Islam'),
(664, 'M. Yusan Edo Ridani', 'Banua Kepayang', 'L', '2001-06-05 00:00:00', 'Gambut', NULL, 5, 1234, 'Islam'),
(665, 'Rudi Hermansyah', 'Banua Kepayang', 'L', '2001-11-21 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(666, 'Nor Zulfa Adhia', 'Banua Kepayang', 'P', '2001-10-31 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(667, 'Zahratun Nafisah', 'Banua Kepayang', 'P', '2001-10-29 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(668, 'Akhmad Fahriannor', 'Banua Kepayang', 'L', '2001-04-21 00:00:00', 'HST', NULL, 5, 1234, 'Islam'),
(669, 'M. Nazrillah Arrazah', 'Banua Kepayang', 'L', '2001-06-25 00:00:00', 'Banua Kepayang', NULL, 6, 1234, 'Islam'),
(670, 'Muhammad Sahdi', 'Banua Kepayang', 'L', '2001-07-06 00:00:00', 'Banua Kepayang', NULL, 6, 1234, 'Islam'),
(671, 'Nor Nabila Putri', 'Banua Kepayang', 'P', '2001-07-07 00:00:00', 'Banua Kepayang', NULL, 6, 1234, 'Islam'),
(672, 'M. Ridho Muttaqin', 'Banua Kepayang', 'L', '2001-05-08 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(673, 'Romaysha Natasya', 'Banua Kepayang', 'P', '2001-02-01 00:00:00', 'Martapura', NULL, 6, 1234, 'Islam'),
(674, 'Nurmayani Apriliana', 'Banua Kepayang', 'P', '2001-04-08 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(675, 'Ahmad Hanafi', 'Banua Kepayang', 'L', '2001-03-12 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(676, 'Nisna Rahayu', 'Banua Kepayang', 'P', '2001-03-26 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(677, 'Maulida Hasanah', 'Banua Kepayang', 'P', '2001-02-19 00:00:00', 'Banua Kepayang', NULL, 6, 1234, 'Islam'),
(678, 'M. Hamzah', 'Banua Kepayang', 'L', '2001-10-24 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(679, 'Nur Asyifa', 'Banua Kepayang', 'P', '2001-05-03 00:00:00', 'HST', NULL, 6, 1234, 'Islam'),
(680, 'M. Gustiansyah Ramadani', 'Banua Kepayang', 'L', '2001-08-21 00:00:00', 'Tapus Dalam', NULL, 6, 1234, 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tugasmapel`
--

CREATE TABLE IF NOT EXISTS `tugasmapel` (
  `nip` int(11) DEFAULT NULL,
  `idMapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`idAgenda`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`idArtikel`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
 ADD PRIMARY KEY (`idEkstra`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
 ADD PRIMARY KEY (`idFasilitas`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`idGaleri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`), ADD KEY `idJabatan` (`idJabatan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`idJabatan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`idJurusan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`idKelas`), ADD KEY `idJurusan` (`idJurusan`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
 ADD PRIMARY KEY (`idkritik`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
 ADD PRIMARY KEY (`idMapel`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
 ADD PRIMARY KEY (`idPengumuman`);

--
-- Indexes for table `profilsekolah`
--
ALTER TABLE `profilsekolah`
 ADD PRIMARY KEY (`idProfil`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
 ADD PRIMARY KEY (`idSambutan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`), ADD KEY `idKelas` (`idKelas`);

--
-- Indexes for table `tugasmapel`
--
ALTER TABLE `tugasmapel`
 ADD KEY `nip` (`nip`), ADD KEY `idMapel` (`idMapel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `idArtikel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
MODIFY `idEkstra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
MODIFY `idFasilitas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `idGaleri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `idJurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `idKelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
MODIFY `idkritik` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
MODIFY `idMapel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
MODIFY `idPengumuman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=681;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`idJabatan`) REFERENCES `jabatan` (`idJabatan`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`);

--
-- Constraints for table `profilsekolah`
--
ALTER TABLE `profilsekolah`
ADD CONSTRAINT `profilsekolah_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idKelas`) REFERENCES `kelas` (`idKelas`);

--
-- Constraints for table `tugasmapel`
--
ALTER TABLE `tugasmapel`
ADD CONSTRAINT `tugasmapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
ADD CONSTRAINT `tugasmapel_ibfk_2` FOREIGN KEY (`idMapel`) REFERENCES `matapelajaran` (`idMapel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
