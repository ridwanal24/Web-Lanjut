-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2019 at 04:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolahmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `idArtikel` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pathText` varchar(100) DEFAULT NULL,
  `pathImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `idEkstra` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `idFasilitas` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`idFasilitas`, `nama`, `jumlah`, `pathImg`, `deskripsi`) VALUES
(1, 'Masjid', 1, NULL, 'Masjid cukup untuk seluruh siswa dan guru maupun karyawan sekolah untuk menunaikan ibadah. Diadakan secara rutin sholat zuhur berjamaah dan sholat Jum\'at.'),
(2, 'Aula', 1, NULL, 'Aula digunakan untuk agenda penting semisal musyawarah antara guru dengan orang tua wali, pembekalan UN, pentas seni, dan lain sebagainya.'),
(3, 'Kantin', 1, NULL, 'Kantin sangat dijaga kebersihannya. Makanan yang tersedia cukup bervariasi sehingga membuat siswa bisa tenang sejenak setelah belajar seharian.'),
(4, 'Perpustakaan', 1, NULL, 'Sudah menerapkan perpustakaan online, sehingga proses peminjaman buku serta pengembalian dan pengecekan buku lebih cepat.'),
(5, 'Bengkel Listrik', 1, NULL, 'Memiliki peralatan yang memadai untuk melakukan pengukuran arus listrik, praktik instalasi, pemanfaatan listrik untuk kebutuhan idustri, dan lain-lain.'),
(6, 'Labolatorium Komputer', 3, NULL, 'Lab ber AC dan memiliki komputer yang cukup agar para siswa bersemangat dalam belajar merakit pc, praktek jaringan, dan lain lain.'),
(7, 'Ruang Kelas', 6, NULL, 'Ruang kelas dilengkapi pendingin ruangan (AC) dan didesain agar anak merasa nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa. Selain meja-kursi, disediakan karpet untuk kegiatan circle time dan pembelajaran di dalam kelas.'),
(8, 'Ruang Kesehatan', 1, NULL, 'Demi mengantisipasi adanya siswa yang kurang sehat saat di sekolah, ruang kesehatan dilengkapi dengan obat-obatan, P3K, ranjang dan ruangan ber-AC.'),
(9, 'Lapangan Olahraga', 1, NULL, 'Lapangan olahraga telah didesain untuk beragam pelajaran olahraga seperti bola basket, footsal, volley dan atletik. Lapangan yang luas dan sarana olahraga yang beragam memberi peluang lebih besar untuk dapat mengembangkan motorik kasar dan bakat anak.'),
(10, 'Taman', 1, NULL, 'Demi memastikan para siswa bermain dengan aman dan dapat mengeksplore kemampuan motorik secara baik. Sekolah menyediakan taman bermain khusus untuk para siswa.'),
(11, 'Keamanan', 1, NULL, 'Sekolah ini dilengkapi oleh personil keamanan yang professional (Satpam). Dengan kelengkapan keamanan tersebut, mampu menciptakan keamanan dan kenyamanan kegiatan pembelajaran maupun kenyamanan lingkungan.'),
(12, 'Koperasi Sekolah', 1, NULL, 'Koperasi sekolah tempat siswa manajemen pemasaran praktik, Koperasi sekolah menjual barang-barang kebutuhan siswa dan guru Dunia bisnis adalah dunia yang menjanjikan masa depan yang lebih baik.'),
(13, 'Tempat Parkir Sekolah', 1, NULL, 'Penataan tempat parkir sekolah merupakan pekerjaan rumah bagi waka sarpras yang harus di evaluasi setiap tahun. Setiap hari anak-anak membawa sepeda motor bertambah kapasitasnya.'),
(14, 'Toilet', 1, NULL, 'Toilet kegunaan utamanya sebagai tempat pembuangan kotoran, yaitu urin dan feses.'),
(15, 'Ruang OSIS', 1, NULL, 'Tempat yang digunakan untuk pertemuan / berkumpulnya anggota OSIS.'),
(16, 'Ruang Guru', 1, NULL, 'Tempat yang digunakan untuk ruang para guru beristirahat atau mengerjakan tugas mereka. Ruang guru juga bisa di pakai untuk menyimpan dokumen - dokumen penting tentang anak didik mereka.'),
(17, 'Ruang BP/BK', 1, NULL, 'Tempat yang digunakan untuk proses pemberian bantuan yang dilakukan melalui wawancara konseling (face to face) oleh seorang ahli (disebut konselor) kepada individu yang sedang mengalami sesuatu masalah.'),
(18, 'Ruang Tata Usaha', 1, NULL, 'Tempat yang digunakan untuk bagian dari unit pelaksana teknis penyelenggaraan sistem administrasi dan informasi pendidikan di sekolah.'),
(19, 'Ruang Kepala Sekolah/KPKNA', 1, NULL, 'Tempat yang digunakan sebagai tempat kepala sekolah beristirahat, mengerjakan suatu tugas tentang sekolah, atau menyimpan arsip-arsip penting sekolah.'),
(20, 'Ruang Gudang', 1, NULL, 'Ruangan yang digunakan untuk menyimpan berbagai macam barang.'),
(21, 'Lapangan Upacara', 1, NULL, 'Tempat dimana semua kegiatan sekolah dilakukan disana, seperti upacara rutin hari Senin, latihan upacara, kegiatan pramuka rutin hari Jumat, kegiatan ekstra kurikuler,dll.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `idGaleri` int(11) NOT NULL,
  `pathVideo` varchar(100) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `pathVideo`, `pathImg`) VALUES
(660100001, NULL, './assets/img/galeri/classroom.jpg'),
(660100002, NULL, './assets/img/galeri/high_school.jpg'),
(660100003, NULL, './assets/img/galeri/computer_eng.jpg'),
(660100004, NULL, './assets/img/galeri/electrician.jpg'),
(660100005, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `tglLahir` date DEFAULT NULL,
  `tempatLahir` varchar(100) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `idJabatan` int(11) DEFAULT NULL,
  `agama` varchar(100) NOT NULL,
  `pathImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `gender`, `tglLahir`, `tempatLahir`, `pass`, `idJabatan`, `agama`, `pathImg`) VALUES
(100001, 'Muhammad Ruslan', 'Jalan Kuningan No. 2 Depok Sleman', 'L', '2019-12-25', 'Bantul', 1234, 5, 'Kristen Protestan', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `jurusan` (
  `idJurusan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `kegiatan` (
  `idEvent` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `idJurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `kritiksaran` (
  `idkritik` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `idMapel` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`idMapel`, `nama`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Bahasa Inggris'),
(4, 'Sejarah Indonesia'),
(5, 'Kimia'),
(6, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idPengumuman` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profilsekolah`
--

CREATE TABLE `profilsekolah` (
  `idProfil` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `idSambutan` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `tglLahir` date NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `idKelas` int(11) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `gender`, `tglLahir`, `tempatLahir`, `idKelas`, `pass`, `agama`, `pathImg`) VALUES
(615, 'Muhammad Arsyad', 'Banua Kepayang', 'L', '2003-04-25', 'Barabai', 1, 1234, 'Islam', NULL),
(616, 'Dinda Nurwulan Agustin', 'Banua Kepayang', 'P', '2003-08-24', 'HST', 1, 1234, 'Islam', NULL),
(617, 'Nursifa Salsabila', 'Banua Kepayang', 'P', '2003-06-23', 'HST', 1, 1234, 'Islam', NULL),
(618, 'Meta Adilla', 'Banua Kepayang', 'P', '2003-06-01', 'Banua Kepayang', 1, 1234, 'Islam', NULL),
(619, 'Norlatifah Azlina', 'Banua Kepayang', 'P', '2003-09-21', 'HST', 1, 1234, 'Islam', NULL),
(620, 'Dhea Azizah', 'Banua Kepayang', 'P', '2003-01-27', 'Barabai', 1, 1234, 'Islam', NULL),
(621, 'Dicky Septiawan', 'Banua Kepayang', 'L', '2003-09-17', 'Barabai', 1, 1234, 'Islam', NULL),
(622, 'Aisyah Asura', 'Banua Kepayang', 'P', '2003-01-29', 'HST', 1, 1234, 'Islam', NULL),
(623, 'Aulia Rahmadana', 'Banua Kepayang', 'P', '2003-02-11', 'HST', 1, 1234, 'Islam', NULL),
(624, 'Imelda Selvia Ningrum', 'Banua Kepayang', 'P', '2003-07-08', 'HST', 1, 1234, 'Islam', NULL),
(625, 'Muhammad Fauzan', 'Banua Kepayang', 'L', '2003-01-22', 'HST', 2, 1234, 'Islam', NULL),
(626, 'M. Resky Fadillah', 'Banua Kepayang', 'L', '2003-06-18', 'HST', 2, 1234, 'Islam', NULL),
(627, 'M. Ridha Paratama', 'Banua Kepayang', 'L', '2003-06-24', 'Amuntai', 2, 1234, 'Islam', NULL),
(628, 'M. Akbar Fadillah', 'Banua Kepayang', 'L', '2003-05-08', 'Banjarmasin', 2, 1234, 'Islam', NULL),
(629, 'Nor Muhammad Muhibbin', 'Banua Kepayang', 'L', '2003-08-08', 'HST', 2, 1234, 'Islam', NULL),
(630, 'Nadia Azmi Haliza', 'Banua Kepayang', 'P', '2003-12-21', 'Balikpapan', 2, 1234, 'Islam', NULL),
(631, 'Norlatifah', 'Banua Kepayang', 'P', '2003-12-17', 'HST', 2, 1234, 'Islam', NULL),
(632, 'Siti Fatimah', 'Banua Kepayang', 'P', '2003-10-26', 'HST', 2, 1234, 'Islam', NULL),
(633, 'Suaibatul Aslamiah', 'Banua Kepayang', 'P', '2003-07-18', 'HST', 2, 1234, 'Islam', NULL),
(634, 'Wina Amalia', 'Banua Kepayang', 'P', '2003-11-17', 'HST', 2, 1234, 'Islam', NULL),
(635, 'Muhammad Haiqi', 'Banua Kepayang', 'L', '2003-03-12', 'Banjarmasin', 2, 1234, 'Islam', NULL),
(636, 'Vivi Ariyanti', 'Banua Kepayang', 'P', '2002-11-04', 'HST', 3, 1234, 'Islam', NULL),
(637, 'Siti Zhofirah', 'Banua Kepayang', 'P', '2002-12-29', 'HST', 3, 1234, 'Islam', NULL),
(638, 'Arya Pranata', 'Banua Kepayang', 'L', '2002-09-11', 'Pangkalanbun', 3, 1234, 'Islam', NULL),
(639, 'Nor Maulina', 'Banua Kepayang', 'P', '2002-03-08', 'HST', 3, 1234, 'Islam', NULL),
(640, 'Laura Fahrianisa', 'Banua Kepayang', 'P', '2002-01-15', 'HST', 3, 1234, 'Islam', NULL),
(641, 'Nurul Aulia', 'Banua Kepayang', 'P', '2002-10-15', 'HST', 3, 1234, 'Islam', NULL),
(642, 'Muhammad Riswan Alfianor', 'Banua Kepayang', 'L', '2002-08-23', 'HST', 3, 1234, 'Islam', NULL),
(643, 'Siti Nurhaliza', 'Banua Kepayang', 'P', '2002-10-08', 'HST', 3, 1234, 'Islam', NULL),
(644, 'Aulia Nurhidayah', 'Banua Kepayang', 'P', '2002-12-05', 'Bahaur Hulu', 3, 1234, 'Islam', NULL),
(645, 'Nor Aidi', 'Banua Kepayang', 'L', '2003-03-10', 'Tabalong', 3, 1234, 'Islam', NULL),
(646, 'Jahratun Nisa', 'Banua Kepayang', 'P', '2002-02-25', 'Banjarmasin', 3, 1234, 'Islam', NULL),
(647, 'Muhammad Risky', 'Banua Kepayang', 'L', '2002-09-06', 'HST', 4, 1234, 'Islam', NULL),
(648, 'Nur Asyifa', 'Banua Kepayang', 'P', '2002-11-01', 'HST', 4, 1234, 'Islam', NULL),
(649, 'Sarifatul Asmaniah', 'Banua Kepayang', 'P', '2002-09-07', 'HST', 4, 1234, 'Islam', NULL),
(650, 'Muhammad Rifky', 'Banua Kepayang', 'L', '2002-05-06', 'HST', 4, 1234, 'Islam', NULL),
(651, 'M. Reno Ramadhani', 'Banua Kepayang', 'L', '2002-09-15', 'HST', 4, 1234, 'Islam', NULL),
(652, 'Aini Shahib', 'Banua Kepayang', 'L', '2002-07-10', 'HST', 4, 1234, 'Islam', NULL),
(653, 'Muhammad Naufal', 'Banua Kepayang', 'L', '2002-03-27', 'Bawan', 4, 1234, 'Islam', NULL),
(654, 'Akhmad Riyadi', 'Banua Kepayang', 'L', '2002-03-27', 'Amuntai', 4, 1234, 'Islam', NULL),
(655, 'Nazwa Nor Maghfirah', 'Banua Kepayang', 'P', '2002-04-21', 'HST', 4, 1234, 'Islam', NULL),
(656, 'Riska Aprilia Suswanti', 'Banua Kepayang', 'P', '2002-04-04', 'Banjarmasin', 4, 1234, 'Islam', NULL),
(657, 'Syaidatun Asiyah', 'Banua Kepayang', 'P', '2002-10-29', 'HST', 4, 1234, 'Islam', NULL),
(658, 'Muhammad Fateh Al-Mubarak', 'Banua Kepayang', 'L', '2001-07-07', 'HST', 5, 1234, 'Islam', NULL),
(659, 'Fathul Janah', 'Banua Kepayang', 'P', '2001-03-18', 'Banjarmasin', 5, 1234, 'Islam', NULL),
(660, 'Aulia Rahmah', 'Banua Kepayang', 'P', '2001-08-08', 'HST', 5, 1234, 'Islam', NULL),
(661, 'Mariyana', 'Banua Kepayang', 'P', '2001-09-07', 'HST', 5, 1234, 'Islam', NULL),
(662, 'M. Saufi', 'Banua Kepayang', 'L', '2001-04-30', 'HST', 5, 1234, 'Islam', NULL),
(663, 'Raudatu Sifa', 'Banua Kepayang', 'P', '2001-05-12', 'Banjarmasin', 5, 1234, 'Islam', NULL),
(664, 'M. Yusan Edo Ridani', 'Banua Kepayang', 'L', '2001-06-05', 'Gambut', 5, 1234, 'Islam', NULL),
(665, 'Rudi Hermansyah', 'Banua Kepayang', 'L', '2001-11-21', 'HST', 5, 1234, 'Islam', NULL),
(666, 'Nor Zulfa Adhia a', 'Banua Kepayang', 'P', '2001-10-31', 'HST', 5, 1234, 'Islam', NULL),
(667, 'Zahratun Nafisah', 'Banua Kepayang', 'P', '2001-10-29', 'HST', 5, 1234, 'Islam', NULL),
(668, 'Akhmad Fahriannor', 'Banua Kepayang', 'L', '2001-04-21', 'HST', 5, 1234, 'Islam', NULL),
(669, 'M. Nazrillah Arrazah', 'Banua Kepayang', 'L', '2001-06-25', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(670, 'Muhammad Sahdi', 'Banua Kepayang', 'L', '2001-07-06', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(671, 'Nor Nabila Putri', 'Banua Kepayang', 'P', '2001-07-07', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(672, 'M. Ridho Muttaqin', 'Banua Kepayang', 'L', '2001-05-08', 'HST', 6, 1234, 'Islam', NULL),
(673, 'Romaysha Natasya', 'Banua Kepayang', 'P', '2001-02-01', 'Martapura', 6, 1234, 'Islam', NULL),
(674, 'Nurmayani Apriliana', 'Banua Kepayang', 'P', '2001-04-08', 'HST', 6, 1234, 'Islam', NULL),
(675, 'Ahmad Hanafi', 'Banua Kepayang', 'L', '2001-03-12', 'HST', 6, 1234, 'Islam', NULL),
(676, 'Nisna Rahayu', 'Banua Kepayang', 'P', '2001-03-26', 'HST', 6, 1234, 'Islam', NULL),
(677, 'Maulida Hasanah', 'Banua Kepayang', 'P', '2001-02-19', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(678, 'M. Hamzah', 'Banua Kepayang', 'L', '2001-10-24', 'HST', 6, 1234, 'Islam', NULL),
(679, 'Nur Asyifa', 'Banua Kepayang', 'P', '2001-05-03', 'HST', 6, 1234, 'Islam', NULL),
(680, 'M. Gustiansyah Ramadani', 'Banua Kepayang', 'L', '2001-08-21', 'Tapus Dalam', 6, 1234, 'Islam', NULL),
(900, 'Uzumaki Naruto', 'Danau Itomori, Itomori, Prefektur Gifu', 'L', '2002-10-10', 'Itomori', 1, NULL, 'Islam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tugasmapel`
--

CREATE TABLE `tugasmapel` (
  `nip` int(11) DEFAULT NULL,
  `idMapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasmapel`
--

INSERT INTO `tugasmapel` (`nip`, `idMapel`) VALUES
(100001, 1),
(100001, 2),
(100001, 3),
(100001, 1),
(100001, 2),
(100001, 3);

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
  ADD PRIMARY KEY (`nip`),
  ADD KEY `idJabatan` (`idJabatan`);

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
  ADD PRIMARY KEY (`idKelas`),
  ADD KEY `idJurusan` (`idJurusan`);

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
  ADD PRIMARY KEY (`idProfil`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`idSambutan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `idKelas` (`idKelas`);

--
-- Indexes for table `tugasmapel`
--
ALTER TABLE `tugasmapel`
  ADD KEY `nip` (`nip`),
  ADD KEY `idMapel` (`idMapel`);

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
  MODIFY `idFasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idGaleri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660100006;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idJurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `idkritik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `idMapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idPengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
