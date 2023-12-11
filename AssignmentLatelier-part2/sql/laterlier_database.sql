-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laterlier_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(9, 'atelierlogo.png', './uploads/atelierlogo.png'),
(10, 'clothes.gif', './uploads/clothes.gif'),
(11, 'php-logo.png', './uploads/php-logo.png'),
(12, 'backgr0ound.gif', './uploads/backgr0ound.gif');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(255) NOT NULL,
  `purchaseOrder` varchar(255) NOT NULL,
  `gid` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `purchaseOrder`, `gid`, `colour`, `size`, `price`, `quantity`) VALUES
(5, 'PO#1', '213-W24', 'sagesse', 'S', 50001, '50'),
(6, 'PO#2', '213-F24', 'heatherCharcoal', 'S', 25000, '250'),
(7, 'PO#3', '121245', 'cloudWhite', 'L', 445, '2');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`first_name`, `last_name`, `username`, `password`) VALUES
('Navtesh', 'Thakur', 'navteshthakur', '06424b5ac35c1f8d5ede37ac6991ca488ddfe999a4e3867df80d6dc9b3100e9c86ae88c42410b01c82bbe3c6d6f652a676ff8b7d6937e905773eaed93b65463c'),
('Navtesh', 'Thakur', 'navtesh_thakur', '60a0839b63e270d4aeaf72bf3477c487d89baf319c29ab3c4b29dbad639a79e9d020563a081f6bd2f93250d52eb48a4a8abc6f7f09b7fd871ac20c4a562f3369'),
('Sherry', 'Cheema', 'sherry21cheema', 'a0b8feb7b18cc57075646b2dab913cb3d5bd9e6974a03d21bfadcdbcb61a0ff7d4b46ca102e0236339a19230729470a9ee797dfd0e1ebe905a4fd68251df6572'),
('Samar', 'Singh', 'samardeep', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
('Abhi', 'Thakur', 'abhithakur', '367ce737927824b61514747a45b01cf1790b1c7f7deb82e0b5a4e69dd3e927f047798ff083dea5d997868204918ed4a4cabea7292039934abaf1243a8b1f8278'),
('Renu', 'Thakur', 'renuthakur', 'c6795beb1dbe4ab279196e9e0f17635a8b31d0f2af18be1115a647db26bb4fc82808adc0ee0b10db495c1ba7a68d1dbe55981b5abed99dc6b2e359bae04af117'),
('Barkirat', 'Brar', 'barkiratbrar', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
('Navtesh', 'Thakur', 'navteshthakur1', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
