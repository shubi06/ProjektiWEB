-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 04:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grieta`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `id` int(5) NOT NULL,
  `emri` varchar(191) NOT NULL,
  `mbiemri` varchar(191) NOT NULL,
  `numri` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mesazhi` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id`, `emri`, `mbiemri`, `numri`, `email`, `mesazhi`) VALUES
(1, 'Shuajb', 'Bunjaku', 45594178, 'bunjakushuajb@gmail.com', 'Komplimente per punen!'),
(3, 'Flamur', 'Bunjaku', 45595129, 'ilirim@gmail.com', 'SHUME KEQ');

-- --------------------------------------------------------

--
-- Table structure for table `mjeku`
--

CREATE TABLE `mjeku` (
  `id` int(11) NOT NULL,
  `titulli` varchar(191) NOT NULL,
  `eksperienca` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `ndryshimi` int(5) DEFAULT NULL,
  `sherbimi` varchar(191) NOT NULL,
  `product_categories` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mjeku`
--

INSERT INTO `mjeku` (`id`, `titulli`, `eksperienca`, `foto`, `ndryshimi`, `sherbimi`, `product_categories`) VALUES
(87, 'Dr. Scoot Bailly', '4 vite eksperience', '', 10, 'Otorinolaringologji', '');

-- --------------------------------------------------------

--
-- Table structure for table `sherbimet`
--

CREATE TABLE `sherbimet` (
  `id` int(11) NOT NULL,
  `fotoSh` varchar(191) NOT NULL,
  `emertim` varchar(191) NOT NULL,
  `pershkrimi` varchar(191) NOT NULL,
  `ndryshimiSH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terminet`
--

CREATE TABLE `terminet` (
  `id` int(191) NOT NULL,
  `emri` varchar(191) NOT NULL,
  `mbiemri` varchar(191) NOT NULL,
  `nr` int(191) NOT NULL,
  `sherbimi` varchar(191) NOT NULL,
  `ora` time NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terminet`
--

INSERT INTO `terminet` (`id`, `emri`, `mbiemri`, `nr`, `sherbimi`, `ora`, `data`) VALUES
(7, 'Shuajb', 'Bunjaku', 45594178, 'Medikamente', '12:30:00', '2024-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emri` varchar(191) NOT NULL,
  `mbiemri` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `cpassword` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `mbiemri`, `email`, `password`, `cpassword`, `role_as`) VALUES
(1, 'Shuajb', 'Bunjaku', 'shuajbbunjaku@gmail.com', 'password007', 'password007', 0),
(3, 'Shubi', 'Bunjaku', 'bunjakushuajb@gmail.com', 'password009', 'password009', 1),
(10, 'Liburn', 'Spahiu', 'liburnspahiu@gmail.com', 'Password66', 'Password66', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mjeku`
--
ALTER TABLE `mjeku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sherbimet`
--
ALTER TABLE `sherbimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminet`
--
ALTER TABLE `terminet`
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
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mjeku`
--
ALTER TABLE `mjeku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `sherbimet`
--
ALTER TABLE `sherbimet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `terminet`
--
ALTER TABLE `terminet`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
