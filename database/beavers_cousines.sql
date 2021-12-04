-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beavers_cousines`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPassword` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `FirstName`, `LastName`, `Email`, `Password`, `ConfirmPassword`, `role_as`) VALUES
(1, 'Ada', 'Nwaturu', 'ada@gmail.com', 'qwertyuiop', 'qwertyuiop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `menu_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `img`, `menu_name`, `menu_price`) VALUES
(1, '328610_1620735792.png', 'Fried Rice and Coke', '1400'),
(2, '328608_1620735798.png', 'Fried Rice and Chips', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserveID` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `number_people` varchar(200) NOT NULL,
  `mesage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserveID`, `fullname`, `email`, `phone_number`, `date`, `time`, `number_people`, `mesage`) VALUES
(1, 'John Umoh', 'umoh@gmail.com', '+2347084432935', '2021-10-31', '17:00:00.000000', '2', 'Table for two'),
(2, 'Fashola Taye', 'taye@gmail.com', '+2347084567845', '2021-11-04', '00:00:00.000000', '4', 'Table for four'),
(3, 'Peace Chidima', 'peace@gmail.com', '+234708579475', '2021-11-01', '14:10:00.000000', '2', 'Couple Anniversary'),
(4, '', '', '', '0000-00-00', '00:00:00.000000', '', ''),
(5, '', '', '', '0000-00-00', '00:00:00.000000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `special_img` varchar(100) NOT NULL,
  `special_name` varchar(100) NOT NULL,
  `special_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `special_img`, `special_name`, `special_details`) VALUES
(1, 'assets/img/specials-1.png', 'Pls put a special name for the meal', 'Also put a detail for the this meal here'),
(2, 'assets/img/specials-2.png', 'pls do same here', 'do same here also'),
(3, 'assets/img/specials-3.png', 'same here', 'do this in the database by clicking on the insert'),
(4, 'assets/img/specials-4.png', 'add the data from the database', 'same here'),
(5, 'assets/img/specials-5.png', 'same here', 'pls try here also, if you have any problem let me know');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordered_meal` varchar(100) NOT NULL,
  `meal_price` decimal(10,0) NOT NULL,
  `meal_qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_contact` varchar(30) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `ordered_meal`, `meal_price`, `meal_qty`, `total`, `status`, `order_date`, `customer_name`, `customer_email`, `customer_contact`, `customer_address`) VALUES
(1, 'Fried Rice and Coke', '1400', 3, '0.00', 'Ordered', '2021-11-06', 'Ubong Okon Udofia', 'udofia@gmail.com', '+2347084432935', '11 Ekpenyong Urua Street, off Oron road, uyo'),
(2, 'Fried Rice and Chips', '1000', 4, '4000.00', 'Ordered', '2021-11-06', 'John Umoh', 'john@gmail.com', '+2347084432935', '11 Ekpenyong Urua Street, off Oron road, uyo'),
(3, 'Fried Rice and Chips', '1000', 4, '4000.00', 'Ordered', '2021-11-06', 'John Udoh', 'udoh@gmail.com', '+234708443546', 'Navy Estate, Orozo'),
(4, 'Fried Rice and Coke', '1400', 2, '2800.00', 'Ordered', '2021-11-06', 'Ada Philip', 'ada@gmail.com', '+23470844637', 'kubwa'),
(5, 'Fried Rice and Coke', '1400', 2, '2800.00', 'Ordered', '2021-11-06', 'Ada Philip', 'ada@gmail.com', '+23470844637', 'kubwa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPassword` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `FirstName`, `LastName`, `Email`, `Password`, `ConfirmPassword`, `role_as`) VALUES
(1, 'Ubong', 'Udofia', 'udofia@gmail.com', 'poiuytrewq', 'poiuytrewq', 0),
(10, 'Jessica', 'Emmanuel', 'tosin@gmail.com', 'mnbvcxza', 'mnbvcxza', 0),
(12, 'Metu', 'Emmanue', 'emeka@gmail.com', 'qwertyuiop', 'qwertyuiop', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveID`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
