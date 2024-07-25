-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 09:12 AM
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
-- Database: `db_medipoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `fld_order_Id` int(11) NOT NULL,
  `fld_Product_Id` varchar(11) NOT NULL,
  `fld_Id` varchar(50) NOT NULL,
  `fld_Quantity` int(6) NOT NULL,
  `fld_Price` int(10) NOT NULL,
  `fld_Date` date NOT NULL,
  `fld_Payment` varchar(20) NOT NULL,
  `fld_Billing_Address` varchar(200) NOT NULL,
  `fld_Name` varchar(100) NOT NULL,
  `fld_Contact_Number` varchar(20) NOT NULL,
  `fld_status` varchar(30) NOT NULL DEFAULT 'New Order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `fld_product_Id` int(11) NOT NULL,
  `fld_Product_Name` varchar(300) NOT NULL,
  `fld_Product_Details` varchar(1000) NOT NULL,
  `fld_Aid_Placement` varchar(30) NOT NULL,
  `fld_Model_Name_Number` varchar(100) NOT NULL,
  `fld_Brand_Name` varchar(50) NOT NULL,
  `fld_Channels` int(6) NOT NULL,
  `fld_Color` varchar(10) NOT NULL,
  `fld_Price` varchar(30) NOT NULL,
  `fld_Pic` varchar(200) NOT NULL,
  `fld_Status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`fld_product_Id`, `fld_Product_Name`, `fld_Product_Details`, `fld_Aid_Placement`, `fld_Model_Name_Number`, `fld_Brand_Name`, `fld_Channels`, `fld_Color`, `fld_Price`, `fld_Pic`, `fld_Status`) VALUES
(2, 'Widex Menu Me SP Hearing Aids', 'Our most elegantric yet with new design elementsBuilt around the widex moment™ platform and the revolutionary puresound™,  widex moment sheer™ sric r d  hearing aid is suitable for minimal to severe to profound hearing loss. Distinct new mic openings for new visual look.RechargeableFull connectivityProtection class ip68Battery time: 29h with no streaming or 16h with 8h of streaming', 'Receiver in Canal', 'Beyond 330', 'Widex', 12, 'Titanium G', '100000', 'IMG-661f397ea5f9d5.51341569.jpg', 'Active'),
(10, 'Sivantos Vibe Nano 8 - Invisible Hearing Aid- ITE Devices - Hear.com (Both Ears)', 'The Vibe Hearing Aids Devices comes with 2 years of warranty.\r\nTele Consultaion and Fitting support.\r\nLouder and clearer sound . Sounds are transmitted via the microphone and amplified using state-of-the-art sound processing for clearer hearing .\r\nQuick , convenient fitting and Easily Interchangeable .\r\nSivantos Vibe Nano has 8 channels to give you Optimal Speech Understanding.', 'In the Ear', '10951922', '‎Sivantos India Pvt Ltd', 1, 'Rosegold', '32267', 'IMG-661f67dd2f28a2.88100349.jpg', 'Active'),
(11, 'Fastwell 2 unit For Both Ear Rechargeable Hearing Aids with Noise Cancelling, Nano Hearing Amplifier Assist Miracle Ear for Adults,Digital Hearing Amplifiers for Hearing Loss (Pair-Gold)', 'Enjoy Clear Sound - Suitable for mild to moderate hearing loss, our hearing aids have a digital core for super natural and clear sound quality.\r\nvLight Weight and Ergonomic design - Benefit by the ergonomic and lightweight design, our hearing aids are more comfortable to wear, and there is no burden to use them for a long time.\r\nBack to Old Times - Our hearing amplifier can make you better talk to family and friends.Ideal for mild to moderate hearing,our hearing amplifier to let you hear the world more clearly.\r\nLifetime Support Service - If you have any problems when using our hearing aids, please to contact us. We provide Lifetime Support Service.\r\nWhy There Are Some Background Noise? -Actually, it is the electric current sound existing in all good machines. Generally, the higher the power, the greater the static sound. Turning on after put it in ears, then turn up the sound gradually. Generally, You will get used to it after 2-3 weeks.\r\nWhy Does Whistling Occur? -The whistling is du', 'Receiver in Canal', 'Fastwell 2', 'FASTWELL', 1, 'Gold', '3999', 'IMG-661f68e786c691.06099141.jpg', 'Active'),
(12, 'Vibe Complete Hearing Aid- Self Fitting Hearing Aid with 48 Channels, Rechargebale Battery', 'The self-fitting Vibe hearing aid is intended to amplify sound for individuals 18 years of age or older with perceived mild to moderate hearing impairment. It is adjusted by the user to meet the user\'s hearing needs. Vibe is dedicated to breaking down barriers for hearing care devices In just ten minutes, they can be personalized to the user’s preference and hearing needs. Vibe’s mission is to help those with hearing loss reclaim their social life and never miss the punchline again!', 'Receiver in Canal', '1', 'Vibe', 1, 'Black', '62243', 'IMG-661f6aa41409e2.03185486.jpg', 'Active'),
(13, 'FCS (V-XP) Digital 4 Channel Behind The Ear Hearing Aid (Pair for Both Ears) Suitable For Severe to Profound hearing loss, No Audiometry Report Required (2 Year Seller Warranty)', 'Ideal for wearers with higher amplification needs.\r\nWearers are able to enjoy a more comfortable listening experience with reduced occurrence of feedback. The feedback preventer helps to avoid annoying whistling in the ears.\r\n4 Signal Processing Channels\r\n4 Pre-Configured Sound Profiles', 'Receiver in Canal', ' FCS-V-XP-PAIR', 'FCS', 1, 'Brown', '17081', 'IMG-661f6bafeb67b0.38059612.jpg', 'Active'),
(14, 'Widex Evoke 440 Fusion RIC Hearing Aid', '   ', 'Behind the Ear', '440', 'Widex', 6, 'Black', '250000', 'IMG-661f6c771619e6.00152934.jpg', 'Active'),
(15, 'Digital Widex Beyond 330 Hearing Aids, Receiver in Cana', 'Our most elegantric yet with new design elementsBuilt around the widex moment™ platform and the revolutionary puresound™, widex moment sheer™ sric r d hearing aid is suitable for minimal to severe to profound hearing loss. Distinct new mic openings for new visual look.', 'Receiver in Canal', 'Beyond 330', 'Widex', 12, 'Black', '350000', 'IMG-661f6cecc75646.84887081.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `fld_transaction_Id` int(11) NOT NULL,
  `fld_Name` varchar(50) NOT NULL,
  `fld_Phone` varchar(30) NOT NULL,
  `fld_Service` varchar(20) NOT NULL,
  `fld_Email` varchar(60) NOT NULL,
  `fld_Message` varchar(500) NOT NULL,
  `fld_transaction` varchar(20) NOT NULL,
  `fld_Date` date NOT NULL,
  `fld_Status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`fld_transaction_Id`, `fld_Name`, `fld_Phone`, `fld_Service`, `fld_Email`, `fld_Message`, `fld_transaction`, `fld_Date`, `fld_Status`) VALUES
(2, 'Gerald ', 'fdfdf', 'PE', 'dfdfdf@gdgd', 'dfdfd', 'Appointment', '2024-04-20', 'Done'),
(4, 'dfdfd', '', '', 'dfdfdf@gdgd', 'dfdfdfdfdddddd', 'Message', '2024-04-16', 'Done'),
(5, 'Catriona', '+91235785232', 'Dental', 'dfdfdf@gdgd', 'dfdfdfdsss', 'Appointment', '2024-04-19', 'Pending'),
(6, 'Pia', '', '', 'dfdfdf@gdgd', 'hoiiiii', 'Message', '2024-04-17', 'Pending');

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
  `fld_Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_Id`, `fld_Lastname`, `fld_Firstname`, `fld_Status`, `fld_User_Level`, `fld_Username`, `fld_Password`, `fld_Address`, `fld_Phone`) VALUES
(1, 'Gray', 'Catriona', 'Active', 'Admin', 'admin', 'admin', '', ''),
(2, 'Wurtzbach', 'Pia', 'Active', 'Customer', 'user', 'user', 'New York City', '87100000'),
(3, 'Dee', 'Michelle', 'Active', 'Customer', 'md@gmail.com', '22699', 'New York City', '09234376931'),
(5, 'dfdf', 'df', 'Active', 'Admin', 'df@sdsds', 'dfd', 'dfd', 'fdfdf');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`fld_transaction_Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`fld_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `fld_order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `fld_product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `fld_transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
