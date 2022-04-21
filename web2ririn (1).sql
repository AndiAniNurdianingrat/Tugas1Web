-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 05:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2ririn`
--

-- --------------------------------------------------------

--
-- Table structure for table `curhatan`
--

CREATE TABLE `curhatan` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curhatan`
--

INSERT INTO `curhatan` (`id`, `title`, `content`) VALUES
(1, 'Learning About HTML and CSS', 'Thu, 31 March 2022 Banyak yang belum saya ketahui tentang HTML dan cara membuat website lebih menarik dengan CSS. Itulah sebabnya saya mempelajari ulang apa yang pernah diajarkan disemester sebelumnya. Anyways, saya sudah belajar banyak mengenai dasar-dasar dari HTML dan CSS. Kesulitan yang saya hadapi adalah pemilihan kombiasi warna yang cocok untuk website yang saya buat, waktu final semester lalu dosen saya banyak berkomentar tentang hal tersebut. Sepertinya saya harus belajar lebih giat lagi... wdyt? should i get a course?'),
(2, 'Learning About OOP', 'Hai haii Thu, 07- April 2022. Hari ini saya belajar sedikit tentang OOP. Slah satu hal utama dalam OOP adalah Enkapsulasi (Modifier) adapun 3 jenis Modifier pada OOP adalah Private yang hanya bisa mengakses kelasnya saja, Protec hanya bisa mengakses kelas dan turunannya, dan Public yang bisa mengakses semua elemen.'),
(3, 'Learning About SESSION and COOKIE', 'Thu, 06 April 2022 Hari ini saya banyak belajar mengenai PHP terkait SESSION dan COOKIE. Pada cookie, durasi penyimpanannya dapat di setting pada script PHP. Sedangkan dalam session, berbeda dengan cookie, setiap data yang disimpan akan dihapus pada saat browser. itulah yang sedikit saya ketahui');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'ririn@gmail.com', 'tuanputri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curhatan`
--
ALTER TABLE `curhatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curhatan`
--
ALTER TABLE `curhatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
