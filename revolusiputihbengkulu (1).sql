-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revolusiputihbengkulu`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(5) NOT NULL,
  `tag` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `likes` int(4) NOT NULL,
  `status` enum('draft','publish','trash','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tag`, `judul`, `tgl_upload`, `gambar`, `isi`, `penulis`, `likes`, `status`) VALUES
(1, 1, 'Susu Fermentasi', '2018-06-29', 'NS3FB_WP_R01_1920x1080.jpg', 'Olahan Susu : Susu Pasteurisasi, Susu Aneka Rasa, Puding Susu, Es Susu, Tahu Susu, Es Krim Susu, Pempek Susu.', 'admin', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `web_name` varchar(100) NOT NULL,
  `web_desc` text NOT NULL,
  `web_icon` varchar(100) NOT NULL,
  `kontak_alamat` text NOT NULL,
  `kontak_telp` varchar(15) NOT NULL,
  `kontak_email` varchar(50) NOT NULL,
  `kontak_map_latitude` varchar(15) NOT NULL,
  `kontak_map_langitude` varchar(15) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`web_name`, `web_desc`, `web_icon`, `kontak_alamat`, `kontak_telp`, `kontak_email`, `kontak_map_latitude`, `kontak_map_langitude`, `id`) VALUES
('Revolusi Putih Bengkulu', 'Revolusi Putih Bengkulu', 'unib1.png', 'Kec. Pondok Kubang, Kab. Bengkulu Tengah, Bengkulu', '082281264609', 'adiyulianto888@gmail.com', '-3.7369276', '102.3343096', 0);

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama`, `gambar`, `deskripsi`) VALUES
('MargoMulyo', 'Margo Mulyo', 'NS3FB_WP_R02_1920x10801.jpg', 'Margo Mulyo....'),
('PondokKubang', 'Pondok Kubang', 'NS3FB_WP_R01_1920x1080.jpg', 'Desa Pondok Kubang ........');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `src` varchar(100) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `tag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `judul`, `src`, `type`, `tag`) VALUES
(1, 'Susu Fermentasi', 'NS3FB_WP_R01_1920x1080.jpg', 'image', 1),
(2, 'Tutorial', 'r7i6AS_7yD4', 'video', 2),
(3, 'Susu Fermentasi', 'NS3FB_WP_R01_1920x1080.jpg', 'image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(2, 'Adi Yulianto', 'adiyulianto888@gmail.com', 'Message', '2018-06-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(2) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `icon`, `judul`, `deskripsi`) VALUES
(1, 'NS3FB_WP_R01_1920x1080.jpg', 'Pengolahan Susu', 'Pengolahan Susu');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(2) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tombol` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `judul`, `tombol`, `url`) VALUES
(1, 'NS3FB_WP_R01_1920x1080.jpg', 'Meningkatkan Konsumsi dan Pengolahan Susu di Bengkulu', 'Selengkapnya', '#deskripsi'),
(2, 'NS3FB_WP_R02_1920x1080.jpg', 'Aneka Olahan Susu', 'Lihat Produk', '#produk'),
(3, 'NS3FB_WP_R03_1920x1080.jpg', 'KKN PPM UNIB 2018', 'Hubungi Kami', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `judul`) VALUES
(1, 'produk');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` varchar(18) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nipm` varchar(18) NOT NULL,
  `position` varchar(50) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `nipm`, `position`, `profile`, `image`, `desa`) VALUES
('1', 'Ari Saputra', 'G1B015001', 'Anggota', '', 'NS3FB_WP_R01_1920x1080.jpg', 'pondokkubang'),
('2', 'Ari Saputra', 'G1B015001', 'Koordinator Kecamatan', '', 'NS3FB_WP_R01_1920x1080.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `password`) VALUES
('admin', 'administrator', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
