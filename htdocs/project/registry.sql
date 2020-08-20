-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 01:36 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registry`
--

CREATE TABLE `registry` (
  `name` text NOT NULL,
  `surname_of_father` text NOT NULL,
  `original_number` int(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `name_of_mother` text NOT NULL,
  `bio` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `countyName` text NOT NULL,
  `constName` text NOT NULL,
  `wardName` text NOT NULL,
  `sex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registry`
--

INSERT INTO `registry` (`name`, `surname_of_father`, `original_number`, `date_of_birth`, `name_of_mother`, `bio`, `countyName`, `constName`, `wardName`, `sex`) VALUES
('faidhah larry', 'ibrahim', 1112127454, '2018-01-01', 'mariam', ' healthy and fit as a fiddle', 'Nairobi', 'Roysambu', 'Zimmerman', 'female'),
('kevin', 'larry', 1112127455, '2018-01-01', 'manuya', ' mentally ill', 'Kilifi', 'Magarini', 'Sabaki', 'female'),
('vahjjuj', 'jjuu', 1112127456, '2018-02-05', 'ggui', ' healthy', 'Kajiado', 'Kajiado South', 'Kimana', 'male'),
('mancgg tere', 'ghuil', 1112127457, '2018-01-08', 'vbfdsd', ' minor complications on breathing.', 'Kirinyaga', '', '', 'male'),
('mancgg tere', 'ghuil', 1112127458, '2018-01-08', 'vbfdsd', ' minor complications on breathing.', 'Kiambu', 'Kabete', 'Muguga', 'male'),
('Jimmie kihuria', 'senior', 1112127459, '2018-05-30', 'mary', ' Healthy', 'Kiambu', 'Kiambaa', 'Muchatha', 'male'),
('faith kariuki', 'njeri', 1112127460, '2018-02-06', 'muthoni', ' healthy and fit', 'Kitui', 'Kitui South', 'Athi', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`original_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registry`
--
ALTER TABLE `registry`
  MODIFY `original_number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112127461;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
