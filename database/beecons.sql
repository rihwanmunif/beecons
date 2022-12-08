-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beecons`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','non_aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('aktif','non_aktif') NOT NULL DEFAULT 'non_aktif',
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penulis` varchar(50) NOT NULL,
  `id_kategori_artikel` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul`, `deskripsi`, `foto`, `tgl_update`, `penulis`, `id_kategori_artikel`, `tag`) VALUES
(1, 'Magang Merdeka X PT. Baracipta Esa Engineering', 'Kementerian Pendidikan, Kebudayaan, Riset,dan Teknologi mengadakan program yang....', 'artikel.jpg', '2022-10-02 05:27:55', '', 0, 'Basic'),
(2, 'Magang Merdeka X PT. Baracipta Esa Engineering', 'Kementerian Pendidikan, Kebudayaan, Riset,dan Teknologi mengadakan program yang....', 'artikel.jpg', '2022-10-11 05:27:55', '', 1, 'Advance'),
(3, 'Magang Merdeka X PT. Baracipta Esa Engineering', 'Kementerian Pendidikan, Kebudayaan, Riset,dan Teknologi mengadakan program yang....', 'artikel.jpg', '2022-10-26 05:30:02', '', 2, 'Intermediate');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('aktif','non_aktif') NOT NULL DEFAULT 'non_aktif',
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `judul`, `deskripsi`, `status`, `tgl_update`) VALUES
(1, 'Mengapa kamu pilih aku, tapi kamu pilih dia. apa kurang ku wahai pisang. aku adalah seorang mentimun tiap hari ke sawah untuk mencangkul sawah', 'Hujan itu debu tapi kamu batu bata, batu bata kalau dibuat rumah jadi bagus. bagus banget kek cita-cita kita berbuat kebaikan Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in', 'aktif', '2022-10-03 14:28:44'),
(2, 'Hujan kenapa air Mengapa kamu pilih aku, tapi kamu pilih dia.', 'Deskripsi Hujan itu debu tapi kamu batu bata, batu bata kalau dibuat rumah jadi bagus. bagus banget kek cita-cita kita berbuat kebaikan Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in', 'non_aktif', '2022-10-03 14:30:02'),
(3, 'Bunga cinta citra mangga manggis jeruk pepaya daun muda', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.\r\n         ', 'non_aktif', '2022-10-03 14:55:36'),
(4, 'Kamu menghilang entah ke mana tapi ak mau nanya soal itu', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.\r\n         ', 'non_aktif', '2022-10-03 14:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header`
--

CREATE TABLE `tbl_header` (
  `tagline` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_header`
--

INSERT INTO `tbl_header` (`tagline`, `deskripsi`, `foto`, `tgl_update`) VALUES
('FIND & BUILD YOUR DREAM REAL ESTATE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. deleniti voluptatum! Natus beatae laborum veniam distinctio.', '', '2022-10-26 05:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id_kategori_artikel` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_portofolio`
--

CREATE TABLE `tbl_kategori_portofolio` (
  `id_kategori_portofolio` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email_pengirim` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`judul`, `deskripsi`, `foto`, `tgl_update`) VALUES
('BIM TRAINING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed. Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet.', 'bim2.png', '2022-10-24'),
('PROJECT CONSULTING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed. Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet.', 'consul.png', '2022-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `id_media` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portofolio`
--

CREATE TABLE `tbl_portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `id_kategori_portofolio` int(11) NOT NULL,
  `nama_proyek` varchar(150) NOT NULL,
  `nama_klien` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `status` char(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `logo` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistik`
--

CREATE TABLE `tbl_statistik` (
  `id_statistik` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jumlah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tim`
--

CREATE TABLE `tbl_tim` (
  `id_tim` int(11) NOT NULL,
  `nama_tim` varchar(70) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `profil` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tim`
--

INSERT INTO `tbl_tim` (`id_tim`, `nama_tim`, `posisi`, `profil`, `no_telp`, `twitter`, `foto`, `facebook`, `instagram`, `linkedin`) VALUES
(1, 'Rihwan Munif', 'Manager Utama', '', '0899826768', '@rhwmunif', 'pak-suhudi.jpg', 'majukita', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indexes for table `tbl_kategori_portofolio`
--
ALTER TABLE `tbl_kategori_portofolio`
  ADD PRIMARY KEY (`id_kategori_portofolio`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `tbl_portofolio`
--
ALTER TABLE `tbl_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `tbl_tim`
--
ALTER TABLE `tbl_tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id_kategori_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori_portofolio`
--
ALTER TABLE `tbl_kategori_portofolio`
  MODIFY `id_kategori_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_portofolio`
--
ALTER TABLE `tbl_portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tim`
--
ALTER TABLE `tbl_tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
