-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 06:51 AM
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
-- Database: `crp`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbrand`
--

CREATE TABLE `carbrand` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbrand`
--

INSERT INTO `carbrand` (`id`, `cname`) VALUES
(1, 'Nissan'),
(2, 'Lamborghini'),
(3, 'Ferrari'),
(4, 'Toyota'),
(5, 'Kia'),
(6, 'Mercedes-Benz'),
(7, 'Volkswagen'),
(8, 'BMW'),
(9, 'Ford'),
(10, 'Jeep'),
(11, 'Cadillac'),
(12, 'Audi'),
(13, 'Lexus'),
(14, 'Mazda'),
(15, 'Chevrolet'),
(16, 'Tesla'),
(17, 'Land Rover'),
(18, ' Bentley'),
(19, 'Rolls-Royce'),
(20, 'Jaguar'),
(21, 'Maserati'),
(22, 'Koenigsegg'),
(23, 'McLaren'),
(24, 'Bugatti'),
(36, 'Lamborgini'),
(37, 'Porsche');

-- --------------------------------------------------------

--
-- Table structure for table `cartype`
--

CREATE TABLE `cartype` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `cid` int(11) NOT NULL,
  `carbonamount` int(11) NOT NULL,
  `carname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartype`
--

INSERT INTO `cartype` (`id`, `type`, `cid`, `carbonamount`, `carname`) VALUES
(13, 'Sport', 1, 275, 'GT-R'),
(14, 'Hatchback', 1, 90, 'Note '),
(15, 'Sedan', 1, 168, 'Altima '),
(16, 'SUV', 1, 142, 'Juke'),
(19, 'Truck', 1, 478, 'Titan'),
(20, 'SUV', 1, 247, 'Pathfinder'),
(21, 'SUV', 1, 140, 'Kicks'),
(22, 'SUV', 1, 257, 'Murano'),
(23, 'Sedan', 1, 167, 'Sentra'),
(24, 'SUV', 1, 192, 'Rogue'),
(25, 'Sport', 1, 192, '370Z'),
(26, 'Hatchback', 1, 33, 'Leaf'),
(27, 'Sedan', 1, 167, 'Sunny'),
(28, 'SUV', 1, 204, 'Navara'),
(29, 'Sport', 1, 167, 'Skyline'),
(30, 'Sedan', 1, 122, 'Micra'),
(31, 'Sport', 2, 394, 'Aventador '),
(32, 'SUV', 2, 325, 'Urus'),
(33, 'Sport', 2, 495, 'Reventón'),
(34, 'Sport', 2, 332, 'Huracán'),
(35, 'Sport', 2, 495, 'Murciélago '),
(36, 'Sport', 2, 575, 'Diablo'),
(37, 'Sport', 2, 370, 'Centenarió '),
(38, 'Sport', 2, 244, 'Sian'),
(39, 'Sport', 2, 351, 'Gallardo'),
(40, 'Sport', 2, 398, 'Veneno'),
(41, 'Sport', 2, 332, 'EVO '),
(42, 'Sport', 2, 370, 'Aventador Roadster'),
(43, 'Sport', 3, 275, '458 Italia'),
(44, 'Sport', 3, 291, '458 Speciale'),
(45, 'Sport', 3, 545, 'Enzo'),
(46, 'Sport', 3, 307, '458 Spider'),
(47, 'Sport', 3, 260, '488 GTB'),
(48, 'Sport', 3, 330, 'LaFerrari'),
(49, 'Sport', 3, 149, 'SF90 Stradale'),
(50, 'Sport', 3, 267, 'Portofino'),
(51, 'Sport', 3, 360, 'F430'),
(52, 'Sport', 3, 366, '812 Superfast'),
(53, 'Sport', 3, 292, 'F8 Spider'),
(54, 'Sport', 3, 255, 'Roma');

-- --------------------------------------------------------

--
-- Table structure for table `cuserdata`
--

CREATE TABLE `cuserdata` (
  `uname` text NOT NULL,
  `carbrandID` int(11) NOT NULL,
  `cartypeid` int(11) NOT NULL,
  `kilos` int(11) NOT NULL,
  `date` text NOT NULL,
  `carbonamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuserdata`
--

INSERT INTO `cuserdata` (`uname`, `carbrandID`, `cartypeid`, `kilos`, `date`, `carbonamount`) VALUES
('gatone', 1, 27, 30, '12/2/2023', 5010),
('gatone', 1, 28, 30, '12/2/2023', 6120),
('Hein Htet', 2, 36, 30, '21/5/2023', 17250),
('gatone', 1, 24, 30, '13/2/2023', 5760),
('Hein Htet', 2, 42, 24, '14/1/2023', 8880),
('gatone', 1, 16, 30, '12/2/2023', 4260),
('Sann Mi', 1, 25, 50, '26/5/2023', 9600);

-- --------------------------------------------------------

--
-- Table structure for table `motorcycle`
--

CREATE TABLE `motorcycle` (
  `mid` int(11) NOT NULL,
  `type` text NOT NULL,
  `carbon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motorcycle`
--

INSERT INTO `motorcycle` (`mid`, `type`, `carbon`) VALUES
(4, '400', 18),
(5, '600', 22),
(6, '900', 24),
(7, '1000', 30);

-- --------------------------------------------------------

--
-- Table structure for table `muserdata`
--

CREATE TABLE `muserdata` (
  `uname` text NOT NULL,
  `enginepower` int(11) NOT NULL,
  `kilos` int(11) NOT NULL,
  `date` text NOT NULL,
  `carbonamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muserdata`
--

INSERT INTO `muserdata` (`uname`, `enginepower`, `kilos`, `date`, `carbonamount`) VALUES
('gatone', 600, 21, '12/2/2023', 462),
('gatone', 900, 21, '12/2/2023', 504),
('gatone', 600, 30, '12/2/2023', 660),
('gatone', 600, 21, '12/2/2023', 462),
('gatone', 600, 21, '12/2/2023', 462),
('gatone', 600, 10, '12/2/2023', 220),
('gatone', 600, 10, '12/2/2023', 220),
('gatone', 400, 30, '12/2/2023', 540),
('gatone', 400, 30, '12/2/2023', 540),
('gatone', 400, 30, '12/2/2023', 540),
('gatone', 400, 21, '13/2/2023', 378),
('Hein Htet', 900, 30, '21/5/2023', 720),
('heintothehtet', 400, 64, '2022', 1152),
('gatone', 600, 30, '12/2/2023', 660),
('gatone', 600, 30, '12/2/2023', 660),
('gatone', 600, 21, '12/2/2023', 462),
('Hein Htet', 400, 10, '15/1/2023', 180);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password_hash`) VALUES
('gatone', 'gatone123@gmail.com', '$2y$10$I..Z62RqrGc86pc/IO4IOexFOZo8xrdyKqytH3x7voH/OIkmWGZ.e'),
('Hein Htet', 'Oishi@gmail.com', '$2y$10$nWB55CrWTFqMp0LZjtP0yOXZmmpRfmqd9VaVVu/3r87AF3I8YT5J6'),
('Zaw Myo', 'zawmyo123@email.com', '$2y$10$xeQNKqGRBN27H4uFRjAm8exaS8FkwL4KgQGJ7hdowAyFqCDD3BA0m'),
('heintothehtet', 'heinhtet14120@gmail.com', '$2y$10$2NxhFGq0Mf/54PYhIx07zeIG/AvHDA4I7n4oiZUJQY0Aa6fEj3aEG'),
('Hein Htet', 'heintothehtet@gmail.com', '$2y$10$mZBrZrtI.hLGv9.NOrOMeeFcrBldop6RC3MowlDqNOXRjobxeoGh.'),
('Sann Mi', 'sannmi@gmail.com', '$2y$10$dVWzgc2C5bhEESsmS4NsmewSNIH6EezkOixKQ2cQPM/BciSWjM/Ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbrand`
--
ALTER TABLE `carbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartype`
--
ALTER TABLE `cartype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorcycle`
--
ALTER TABLE `motorcycle`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbrand`
--
ALTER TABLE `carbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cartype`
--
ALTER TABLE `cartype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `motorcycle`
--
ALTER TABLE `motorcycle`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
