-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 03:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reid`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `desk` text NOT NULL,
  `title` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `gambar` text NOT NULL,
  `katagori` varchar(20) NOT NULL,
  `desk_sing` text NOT NULL,
  `umur` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `id_user`, `desk`, `title`, `file`, `gambar`, `katagori`, `desk_sing`, `umur`, `status`) VALUES
(13, 2, 'Cerita yang berasal dari hati seorang pujangga lama based on true story berdasarkan perjalanan hidup yang dia alami', 'Sepasang Kaos Kaki', 'content/tebesays/13&Sepasang Kaos Kaki/Sepasang_Kaos_Kaki_Hitam.pdf', 'content/tebesays/13&Sepasang Kaos Kaki/Sepasang_Kaos_Kaki_Hitam.jpg', 'Novel', 'A story from the heart pujangga lama', 'SU', 'approved'),
(14, 2, 'Buku tentang bagaimana cara menjual dan membuat mie ayam  yang enak , baik dan benar', 'Kuliner Mie Ayam', 'content/tebesays/14&Kuliner Mie Ayam/ebook-mie-ayam.pdf', 'content/tebesays/14&Kuliner Mie Ayam/ebook-mie-ayam.jpg', 'Lainnya', 'Buku tentang bagaimana cara menjual dan membuat mie ayam ', 'SU', 'approved'),
(15, 2, 'Panduan strategi untuk membuat atau meningkatkan kewirausahaan digital terutama untuk UMKM, Startup dan E-Commerce', 'Strategi Kewirausahaan Digital', 'content/tebesays/15&Strategi Kewirausahaan Digital/Strategi_Kewirausahaan_Digital.pdf', 'content/tebesays/15&Strategi Kewirausahaan Digital/Strategi_Kewirausahaan_Digital.jpg', 'Lainnya', 'Sebuah panduan untuk UMKM, Startup dan E- Commerce', 'SU', 'approved'),
(16, 2, 'penjelasan keseluruhan tentang sistem operasi dan bagaimana cara sistem operasi di jalankan dan apa saja sistem yang terpasang dan berperan didalamnya', 'Sistem Operasi', 'content/tebesays/16&Sistem Operasi/Bondan Satrio Kukuh Dewantoro.pdf', 'content/tebesays/16&Sistem Operasi/sistemop.jpg', 'Teknologi', 'Penjelasan keseluruhan tentang sistem operasi', 'SU', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_fb` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_fb`, `nama`, `pekerjaan`, `email`, `feedback`) VALUES
(3, 'dsdsds', 'Mahasiswa', '', 'dsd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `uang` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `tlp`, `uang`, `username`, `password`) VALUES
(2, 'Haikal Naufal', 'tbhaikalnaufal@gmail.com', '082260008484', 130, 'tebesays', 'tebesays');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `username` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_fb`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uang` (`uang`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_fb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
