-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 11:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4051db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_birthday` varchar(255) NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skills` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_fullname`, `a_birthday`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'โปรแกรมเมอร์', 'นางสาว', 'หมวย ปรัณญา', '2025-12-26', 'ปริญญาตรี', 'เขียนโปรแกรมได้', '3 ปี'),
(2, 'เจ้าหน้าที่การตลาด', 'นางสาว', 'สมคิด คิดมาก', '2025-12-31', 'มัธยมศึกษาตอนปลาย', 'ขายของ', '5 ปี');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(3) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` varchar(255) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'ปรัณญา ศรีบุญเพ็ง', '', 0, '', '', '', ''),
(7, 'เด็กหญิง เด็กดี', '0256987412', 178, '', '', '', ''),
(10, 'เด็ก สมบูรณ์', '0258468565', 198, 'บ้านเลขที่ 91', '', '', ''),
(11, 'เด็กหญิง นะโม', '0896547215', 189, 'บ้านเลขที่ 95', '2025-12-14', '#728bb1', 'การจัดการ'),
(12, 'เด็กชาย มะนาว', '0980015569', 180, 'บ้านเลขที่ 189/23 หมู่12 จ.มหาสารคาม', '2025-12-28', '#6484b4', 'คอมพิวเตอร์ธุรกิจ'),
(13, 'เด็กชาย สมหมาย', '0999999999', 156, 'บ้านเลขที่ 404 หมู่5 กันทรวิชัย', '2025-12-13', '#c865b6', 'การตลาด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
