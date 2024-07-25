-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 10:55 AM
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
-- Database: `db_rso`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `fld_Message_Id` int(11) NOT NULL,
  `fld_Lastname` varchar(30) NOT NULL,
  `fld_Firstname` varchar(30) NOT NULL,
  `fld_Message` varchar(1000) NOT NULL,
  `fld_Email` varchar(100) NOT NULL,
  `fld_DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`fld_Message_Id`, `fld_Lastname`, `fld_Firstname`, `fld_Message`, `fld_Email`, `fld_DateTime`) VALUES
(6, 'sdfdsf', 'dfs', 'dfdsf', 'dsfds@gmail.com', '2023-04-21 14:30:58'),
(7, 'Lapuz', 'Earl Gerald', 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.', 'fernandezearlgerald86@gmail.com', '2023-04-24 16:50:22'),
(8, 'Lapuz', 'Earl Gerald', 'Before you can begin to determine what the composition of a particular paragraph will be, you must first decide on an argument and a working thesis statement for your paper. What is the most important idea that you are trying to convey to your reader? The information in each paragraph must be related to that idea. In other words, your paragraphs should remind your reader that there is a recurrent relationship between your thesis and the information in each paragraph. A working thesis functions like a seed from which your paper, and your ideas, will grow. The whole process is an organic one—a natural progression from a seed to a full-blown paper where there are direct, familial relationships between all of the ideas in the paper.', 'fernandezearlgerald86@gmail.com', '2023-04-24 16:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `fld_order_Id` int(11) NOT NULL,
  `fld_Product_Id` varchar(11) NOT NULL,
  `fld_Phone` varchar(30) NOT NULL,
  `fld_Quantity` int(6) NOT NULL,
  `fld_price` int(10) NOT NULL,
  `fld_Address` varchar(200) NOT NULL,
  `fld_Date` date NOT NULL DEFAULT current_timestamp(),
  `fld_status` varchar(30) NOT NULL DEFAULT 'New Order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`fld_order_Id`, `fld_Product_Id`, `fld_Phone`, `fld_Quantity`, `fld_price`, `fld_Address`, `fld_Date`, `fld_status`) VALUES
(19, '3', '09564070258', 14, 150, '198 Maslagan', '2023-04-24', 'New Order'),
(20, '7', '09234367931', 2, 50, '3116 Bayan Luma', '2023-04-24', 'Done'),
(21, '2', '', 1, 200, '', '2023-04-28', 'New Order');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `fld_product_Id` int(11) NOT NULL,
  `fld_product_name` varchar(50) NOT NULL,
  `fld_price` varchar(30) NOT NULL,
  `fld_pic` varchar(200) NOT NULL,
  `fld_Status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`fld_product_Id`, `fld_product_name`, `fld_price`, `fld_pic`, `fld_Status`) VALUES
(1, 'Lemon', '100', 'IMG-64465cbbb49136.77338809.jpg', 'Active'),
(2, 'Pear', '200', 'g2.jpg', 'Active'),
(3, 'Strawberry', '150', 'g3.jpg', 'Active'),
(4, 'Pineapple', '100', 'g4.jpg', 'Active'),
(5, 'Apple', '150', 'g5.jpg', 'Active'),
(6, 'Orange', '250', 'g6.jpg', 'Active'),
(7, 'Bing Cherry', '50', 'g7.jpg', 'Active'),
(8, 'Rainier Cherry', '120', 'g8.jpg', 'Active'),
(9, 'Persimon', '300', 'IMG-644664f2e4acd6.66482273.png', 'Active'),
(10, 'Soursop', '100', 'IMG-6446653b5d70e0.96859203.png', 'Active'),
(11, 'Dragon Fruit', '300', 'IMG-644665d70b1249.99074786.png', 'Active'),
(12, 'Lychee', '100', 'IMG-644665f44727b1.20395649.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fld_Id` int(11) NOT NULL,
  `fld_Lastname` varchar(30) NOT NULL,
  `fld_Firstname` varchar(30) NOT NULL,
  `fld_Status` varchar(15) NOT NULL DEFAULT 'Active',
  `fld_Username` varchar(40) NOT NULL,
  `fld_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_Id`, `fld_Lastname`, `fld_Firstname`, `fld_Status`, `fld_Username`, `fld_Password`) VALUES
(1, 'Gray', 'Catriona', 'Active', 'admin', 'admin'),
(2, 'Wurtzbach', 'Pia', 'Inactive', 'Pia', 'Pia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`fld_Message_Id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`fld_order_Id`);

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
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `fld_Message_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `fld_order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `fld_product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
