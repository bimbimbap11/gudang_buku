-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 07:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(60) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `tahun_terbit`, `sinopsis`, `id_genre`, `id_penulis`, `id_penerbit`) VALUES
(1, 'Bumi', 2014, 'Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib yang bisa menghilang, Seli yang bisa mengeluarkan petir dan Ali seorang pelajar yang sangat jenius', 1, 1, 2),
(2, 'Bintang', 2017, 'Bintang merupakan novel keempat dari serial “Bumi” yang ditulis oleh Tere Liye. Novel ini menceritakan petualangan 3 remaja SMA yang memiliki keingintahuan sangat tinggi, mereka adalah Raib, Seli, dan Ali.', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`id_genre`, `nama_genre`) VALUES
(1, 'Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(40) NOT NULL,
  `no_telp_penerbit` varchar(15) NOT NULL,
  `email_penerbit` varchar(50) NOT NULL,
  `alamat_penerbit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `no_telp_penerbit`, `email_penerbit`, `alamat_penerbit`) VALUES
(2, 'Gramedia Pustaka Utama', '(021) 53650110', ' fiksi@gramediapublishers.com', 'Jl. Palmerah Barat 29-37 10270, RT.1/RW.2, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(40) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `no_telp_penulis` varchar(15) NOT NULL,
  `email_penulis` varchar(50) NOT NULL,
  `alamat_penulis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_penulis`, `jk`, `no_telp_penulis`, `email_penulis`, `alamat_penulis`) VALUES
(1, 'Tere Liye', 'L', '081244448888', 'tereliye@gmail.com', 'Jl. WR Supratman, No. 96, Cibeunying, Bandung.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `tb_penulis` (`id_penulis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id_genre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
