-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 10:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoyzooooornayab`
--

-- --------------------------------------------------------

--
-- Table structure for table `nwsin`
--

CREATE TABLE `nwsin` (
  `Nawnishan` varchar(50) NOT NULL,
  `Nawarok` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nwsin`
--

INSERT INTO `nwsin` (`Nawnishan`, `Nawarok`) VALUES
('sadasd', ' asd asd asd asd asd asd a '),
('asdasd ', 'asd asd asd as a '),
('sssss', ' fffffff'),
('sda sd as', 'asdas dasd asd a asd asd as a sd asd \r\na\r\nsd \r\nasd\r\n a\r\nsd\r\nad \r\na\r\n\r\nasd\r\nad\r\nd sd sd as \r\nls\r\n'),
('', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
