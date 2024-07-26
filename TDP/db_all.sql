-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 11:15 AM
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
-- Database: `db_all`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `fld_chat_Id` int(11) NOT NULL,
  `fld_chat` varchar(1000) NOT NULL,
  `fld_sender` int(6) NOT NULL,
  `fld_receiver` int(6) NOT NULL,
  `fld_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_type` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`fld_chat_Id`, `fld_chat`, `fld_sender`, `fld_receiver`, `fld_Date`, `fld_type`) VALUES
(44, 'hi anton', 2, 24, '2024-01-25 09:57:30', ''),
(45, 'Hi! This is an automated message, we will get back you in a while', 24, 2, '2024-01-25 09:57:30', ''),
(46, 'hello', 24, 2, '2024-01-25 09:57:49', ''),
(47, 'queen', 2, 3, '2024-01-25 09:58:18', ''),
(48, 'Hi! This is an automated message, we will get back you in a while', 3, 2, '2024-01-25 09:58:18', ''),
(49, 'busy?', 2, 24, '2024-01-25 10:00:06', ''),
(50, 'queen', 2, 3, '2024-07-01 14:01:55', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entry`
--

CREATE TABLE `tbl_entry` (
  `fld_entry_Id` int(11) NOT NULL,
  `fld_description` varchar(300) NOT NULL,
  `fld_about` varchar(2000) NOT NULL,
  `fld_basic` int(5) NOT NULL,
  `fld_standard` int(6) NOT NULL,
  `fld_premium` int(6) NOT NULL,
  `fld_product_Id` int(6) NOT NULL,
  `fld_tags` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_entry`
--

INSERT INTO `tbl_entry` (`fld_entry_Id`, `fld_description`, `fld_about`, `fld_basic`, `fld_standard`, `fld_premium`, `fld_product_Id`, `fld_tags`) VALUES
(11, 'Avast Anti Virus', 'Defend your devices with Avast antivirus — keeping your data safe from online threats. Get protected today.', 100, 300, 500, 18, ''),
(12, 'Microsoft Office 365', 'Access Microsoft Office 365 from anywhere, on any device.', 200, 400, 600, 19, ''),
(13, 'Adobe Master Collection', 'Transform Ideas and Unleash Your Creativity with Adobe', 700, 800, 900, 19, ''),
(14, 'Mcafee Anti Virus', 'Shield Your Digital World with McAfee Antivirus - Reliable Protection Against Cyber Threats.', 300, 400, 600, 18, ''),
(15, 'Network Infrastracture Consultation Services', 'Need help optimizing your network infrastructure? Our experts provide tailored solutions to boost performance and reliability. Contact us today for a consultation!', 500, 800, 1000, 20, ''),
(16, 'Kaspersky Anti Virus', 'Protect your devices with Kaspersky\'s robust security solutions, ensuring peace of mind in today\'s digital landscape.', 600, 800, 1000, 18, ''),
(17, 'Team Viewer Remote Access', 'Empower your team with TeamViewer\'s seamless remote access and support capabilities, enhancing productivity anywhere, anytime.', 800, 900, 1000, 19, ''),
(18, 'Cloud Server', 'Unlock the potential of scalable and reliable cloud server solutions for your business', 400, 6000, 9000, 19, ''),
(19, 'Wondershare Filmora', 'Transform your vision into captivating videos with Wondershare Filmora. Whether you\'re a beginner or a seasoned editor.', 900, 1000, 2000, 19, ''),
(20, 'Microsoft Office SQL Server', 'Take control of your data with Microsoft Office SQL Server, the industry-leading database management system.', 1000, 1500, 2000, 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `fld_order_Id` int(11) NOT NULL,
  `fld_entry_Id` int(6) NOT NULL,
  `fld_plan` varchar(20) NOT NULL,
  `fld_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_status` varchar(10) NOT NULL DEFAULT 'Processing',
  `fld_UTR` varchar(50) NOT NULL,
  `fld_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`fld_order_Id`, `fld_entry_Id`, `fld_plan`, `fld_date`, `fld_status`, `fld_UTR`, `fld_amount`) VALUES
(21, 13, 'Basic', '2024-07-03 15:24:49', 'Processing', '100d', 4000),
(22, 13, 'Premium', '2024-07-03 15:24:58', 'Processing', '676767', 9000),
(23, 12, 'Basic', '2024-07-03 15:31:01', 'Processing', '676767', 5000),
(24, 20, 'Basic', '2024-07-03 16:46:47', 'Processing', '676767', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `fld_folio_Id` int(11) NOT NULL,
  `fld_picture` varchar(100) NOT NULL,
  `fld_entry_Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`fld_folio_Id`, `fld_picture`, `fld_entry_Id`) VALUES
(28, 'IMG-66837b329ef8f3.59815562.png', 11),
(29, 'IMG-66837bf8851d50.41088181.jpg', 11),
(30, 'IMG-668383f0538678.44425263.jpg', 12),
(31, 'IMG-668388017aae49.46835881.jpg', 12),
(32, 'IMG-6683b4b7775581.67778679.png', 13),
(33, 'IMG-6683b5b347a8f0.17806260.jpg', 13),
(34, 'IMG-6683b67f8d3801.17183692.png', 14),
(35, 'IMG-6683b68c952213.43839717.png', 14),
(36, 'IMG-6683bc35840e70.30562269.png', 15),
(37, 'IMG-6683bcaae27e70.39759950.jpg', 15),
(38, 'IMG-6683e370d49459.84222331.png', 16),
(39, 'IMG-6683e379e134b8.46252156.png', 16),
(40, 'IMG-6683e3fdcdf788.28839360.png', 17),
(41, 'IMG-6683e40612bd59.98272919.png', 17),
(42, 'IMG-6684d9839bb453.91930808.jpg', 18),
(43, 'IMG-6684d99731bf17.43828583.png', 18),
(44, 'IMG-66850f0923e7a5.90673460.jpg', 19),
(45, 'IMG-66850f121c0af8.67929343.jpg', 19),
(46, 'IMG-66850fe88b3837.33427588.jpg', 20),
(47, 'IMG-6685100e733307.04013035.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `fld_product_Id` int(11) NOT NULL,
  `fld_product` varchar(30) NOT NULL,
  `fld_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`fld_product_Id`, `fld_product`, `fld_pic`) VALUES
(18, 'Anti Virus', 'IMG-66837a714c9f28.86064866.jpg'),
(19, 'Software', 'IMG-66837acac7a325.98681225.jpg'),
(20, 'Service', 'IMG-6683b38099d5c8.11247312.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fld_Id` int(11) NOT NULL,
  `fld_Lastname` varchar(30) NOT NULL,
  `fld_Firstname` varchar(30) NOT NULL,
  `fld_Status` varchar(15) NOT NULL DEFAULT 'Active',
  `fld_User_Level` varchar(10) NOT NULL DEFAULT 'Customer',
  `fld_Username` varchar(40) NOT NULL,
  `fld_Password` varchar(50) NOT NULL,
  `fld_Address` varchar(60) NOT NULL,
  `fld_Phone` varchar(20) NOT NULL,
  `fld_pic` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `fld_rating` double(5,1) NOT NULL DEFAULT 5.0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_Id`, `fld_Lastname`, `fld_Firstname`, `fld_Status`, `fld_User_Level`, `fld_Username`, `fld_Password`, `fld_Address`, `fld_Phone`, `fld_pic`, `fld_rating`) VALUES
(2, 'Wurtzbach', 'Pia', 'Active', 'Customer', 'cust@cust', 'cust', 'New York Citya', '87100000', 'IMG-65ae47724999a3.53431256.jpg', 0.0),
(3, 'Gray', 'Catriona', 'Active', 'Freelancer', 'cat@cat', 'cat', 'Manila', '34343433', 'IMG-65ae4a83657737.84495193.jpg', 5.0),
(5, 'L', 'Earl', 'Active', 'Admin', 'admin@admin', 'admin', 'dfd', 'fdfdf', 'default.jpg', 0.0),
(23, 'Lapuz', 'Earl Gerald', 'Active', 'Freelancer', 'fernandezearlgerald86@gmail.com', 'a', 'San Fernando City', '+639234367931', 'default.jpg', 5.0),
(24, 'Policarpio', 'Antonio', 'Active', 'Freelancer', 'antonio@gmail.com', 'antonio', 'Mumbai', '+91 22 1854 5978', 'IMG-65af8beb7ab8b8.79028235.jpg', 5.0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`fld_chat_Id`);

--
-- Indexes for table `tbl_entry`
--
ALTER TABLE `tbl_entry`
  ADD PRIMARY KEY (`fld_entry_Id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`fld_order_Id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`fld_folio_Id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`fld_product_Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`fld_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `fld_chat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_entry`
--
ALTER TABLE `tbl_entry`
  MODIFY `fld_entry_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `fld_order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `fld_folio_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `fld_product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
