-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 11:15 AM
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
-- Database: `orange`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `aid` int(11) NOT NULL,
  `anm` varchar(50) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `apwd` varchar(20) NOT NULL,
  `aque` varchar(100) NOT NULL,
  `aans` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`aid`, `anm`, `aemail`, `apwd`, `aque`, `aans`) VALUES
(1, 'Digvijay Jadhav', 'admin@gmail.com', 'asdf', 'What is your Favourite Color', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `business_category`
--

CREATE TABLE `business_category` (
  `ctid` int(11) NOT NULL,
  `ctnm` varchar(30) NOT NULL,
  `ct_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_category`
--

INSERT INTO `business_category` (`ctid`, `ctnm`, `ct_photo`) VALUES
(1, 'Painter', 'photo/painter.webp'),
(2, 'Cleaning', 'photo/broom.png'),
(3, 'Beauty Salon', 'photo/beauty-salon.webp'),
(4, 'Gardner', 'photo/gardener.png'),
(5, 'men salon', 'photo/mens-salon.webp'),
(6, 'Paste Control', 'photo/paste-cleaning.webp');

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE `business_info` (
  `bid` int(11) NOT NULL,
  `bnm` varchar(200) NOT NULL,
  `blogo` varchar(150) NOT NULL,
  `binfo` text NOT NULL,
  `badr` varchar(200) NOT NULL,
  `ctid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `bstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_info`
--

INSERT INTO `business_info` (`bid`, `bnm`, `blogo`, `binfo`, `badr`, `ctid`, `oid`, `bstatus`) VALUES
(1, 'studio 11', 'photo/studio-11-unisex-salon.avif', 'You can find some great deals to fit your budget here. With locations across the city, Geetanjali salons offer geographical convenience to match your haircuts, moustache grooming, manicures, and pedicures. Some of them even do waxing. Call and confirm with the salon that\'s most conveniently located for you.', 'satara near ICS class', 5, 1, 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `business_owner`
--

CREATE TABLE `business_owner` (
  `oid` int(11) NOT NULL,
  `onm` varchar(50) NOT NULL,
  `omob` bigint(20) NOT NULL,
  `oem` varchar(150) NOT NULL,
  `opwd` varchar(50) NOT NULL,
  `oque` varchar(150) NOT NULL,
  `oans` varchar(50) NOT NULL,
  `ophoto` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_owner`
--

INSERT INTO `business_owner` (`oid`, `onm`, `omob`, `oem`, `opwd`, `oque`, `oans`, `ophoto`, `status`) VALUES
(1, 'Dattatray Ghadge', 8855664432, 'datta@gmail.com', '12345', 'What is your Favourite Color', 'red', 'photo/Rohan-Mane.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `cnid` int(11) NOT NULL,
  `cnm` varchar(100) NOT NULL,
  `cinfo` text NOT NULL,
  `clogo` varchar(1500) NOT NULL,
  `fb` varchar(150) NOT NULL,
  `insta` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  `mobile1` bigint(20) NOT NULL,
  `wpmobile` bigint(20) NOT NULL,
  `adr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `cn` int(11) NOT NULL,
  `cn_name` varchar(50) NOT NULL,
  `cn_mob` bigint(20) NOT NULL,
  `cn_email` varchar(150) NOT NULL,
  `cn_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`cn`, `cn_name`, `cn_mob`, `cn_email`, `cn_msg`) VALUES
(1, 'ashok birajdar', 9856985645, 'ashok@gmail.com', 'test'),
(2, 'Raj Desai', 9874563210, 'raj@gmail.com', 'any job for office work');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `cid` int(11) NOT NULL,
  `cnm` varchar(100) NOT NULL,
  `cmob` bigint(11) NOT NULL,
  `cem` varchar(150) NOT NULL,
  `cpwd` varchar(30) NOT NULL,
  `cque` varchar(150) NOT NULL,
  `cans` varchar(50) NOT NULL,
  `cadr` varchar(100) NOT NULL,
  `cphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cid`, `cnm`, `cmob`, `cem`, `cpwd`, `cque`, `cans`, `cadr`, `cphoto`) VALUES
(1, 'Sanket Nikam', 9856235678, 'sanket@gmail.com', '12345', 'What is your favourite color', 'red', 'satara', 'photo/Anil-Ingale.jpg'),
(2, 'Ajinkya More', 914585888, 'ajinkya@gmail.com', '45678', 'What is your school Name', 'kbp', 'wai', 'photo/Vishal-Ransing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enquirydetails`
--

CREATE TABLE `enquirydetails` (
  `enid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `endate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquirydetails`
--

INSERT INTO `enquirydetails` (`enid`, `cid`, `bid`, `endate`) VALUES
(1, 2, 1, '2024-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `reviewdetails`
--

CREATE TABLE `reviewdetails` (
  `rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `rtext` text NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewdetails`
--

INSERT INTO `reviewdetails` (`rid`, `cid`, `rtext`, `rdate`) VALUES
(1, 2, 'test', '2024-04-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `business_category`
--
ALTER TABLE `business_category`
  ADD PRIMARY KEY (`ctid`);

--
-- Indexes for table `business_info`
--
ALTER TABLE `business_info`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `business_owner`
--
ALTER TABLE `business_owner`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`cnid`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`cn`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enquirydetails`
--
ALTER TABLE `enquirydetails`
  ADD PRIMARY KEY (`enid`);

--
-- Indexes for table `reviewdetails`
--
ALTER TABLE `reviewdetails`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_category`
--
ALTER TABLE `business_category`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_info`
--
ALTER TABLE `business_info`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_owner`
--
ALTER TABLE `business_owner`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `cnid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `cn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquirydetails`
--
ALTER TABLE `enquirydetails`
  MODIFY `enid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviewdetails`
--
ALTER TABLE `reviewdetails`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
