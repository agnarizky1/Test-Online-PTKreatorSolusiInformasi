-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 05:45 PM
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
-- Database: `test-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmahasiswa`
--

CREATE TABLE `tmahasiswa` (
  `NIRM` varchar(9) NOT NULL,
  `NamaMahasiswa` varchar(50) NOT NULL,
  `TglLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmahasiswa`
--

INSERT INTO `tmahasiswa` (`NIRM`, `NamaMahasiswa`, `TglLahir`) VALUES
('E31191234', 'Rizky', '1994-10-20'),
('E31191434', 'Agna', '2000-10-27'),
('E31192000', 'Putra', '1992-10-23'),
('E31192080', 'Kendil', '1995-10-12'),
('E31194312', 'Anggara', '2002-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `tmatakuliah`
--

CREATE TABLE `tmatakuliah` (
  `KodeMK` varchar(5) NOT NULL,
  `NamaMataKuliah` varchar(50) DEFAULT NULL,
  `Pengajar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmatakuliah`
--

INSERT INTO `tmatakuliah` (`KodeMK`, `NamaMataKuliah`, `Pengajar`) VALUES
('MK-01', 'Matematika', 'Rachel'),
('MK-03', 'Statistika', 'John'),
('MK-05', 'Aljabar', 'Shady'),
('MK-07', 'Pancasila', 'Joko'),
('MK-09', 'Agama', 'Husain');

-- --------------------------------------------------------

--
-- Table structure for table `tnilai`
--

CREATE TABLE `tnilai` (
  `NIRM` varchar(9) NOT NULL,
  `KodeMK` varchar(50) NOT NULL,
  `Grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tnilai`
--

INSERT INTO `tnilai` (`NIRM`, `KodeMK`, `Grade`) VALUES
('E31191434', 'MK-01', 70),
('E31191234', 'MK-01', 40),
('E31192000', 'MK-03', 80),
('E31191434', 'MK-05', 78),
('E31192000', 'MK-07', 50),
('E31191434', 'MK-03', 75),
('E31191234', 'MK-03', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmahasiswa`
--
ALTER TABLE `tmahasiswa`
  ADD PRIMARY KEY (`NIRM`);

--
-- Indexes for table `tmatakuliah`
--
ALTER TABLE `tmatakuliah`
  ADD PRIMARY KEY (`KodeMK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tnilai`
--
ALTER TABLE `tnilai`
  ADD CONSTRAINT `tnilai_ibfk_1` FOREIGN KEY (`KodeMK`) REFERENCES `tmatakuliah` (`KodeMK`),
  ADD CONSTRAINT `tnilai_ibfk_2` FOREIGN KEY (`NIRM`) REFERENCES `tmahasiswa` (`NIRM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
