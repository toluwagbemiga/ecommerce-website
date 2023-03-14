-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 02:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lga`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `user_id`, `qty`) VALUES
(11, 14, 2, 1),
(12, 18, 2, 1),
(13, 10, 3, 3),
(14, 18, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category_desc` varchar(128) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_desc`, `status`) VALUES
(1, 'Frat Shirts', 'A'),
(2, 'LGA Designed Shirts', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` int(11) NOT NULL,
  `cust_user_address` int(11) NOT NULL,
  `cust_user_contact` varchar(128) NOT NULL,
  `cust_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(128) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_img` varchar(128) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_category_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`, `item_category_id`, `date_added`) VALUES
(1, 'White Triskelion 1968', 'Triskelion White Shirt', 'F1.jpg', 450, 1, '2021-05-04 13:35:22'),
(2, 'Triskelion-Live and let live', 'Live and let live Shirt', 'F2.jpg', 450, 1, '2021-05-04 13:47:07'),
(3, 'Master Initiator', 'Triskelion T-shirt Cotton', 'F3.jpg', 500, 1, '2021-05-04 13:59:22'),
(4, 'Triskelion Three Dynamic ', 'T-Shirt Sublimation', 'F4.jpg', 500, 1, '2021-05-07 14:15:33'),
(5, 'White Triskelion Translucent ', 'Translucent Shirt', 'F5.jpg', 400, 1, '2021-05-07 14:21:51'),
(6, 'Black Triskelion Translucent', 'Translucent Shirt', 'F6.jpg', 400, 1, '2021-05-07 14:23:47'),
(7, 'Spartan-Rise to Defend', 'T-Shirt Sublimation', 'F7.jpg', 500, 1, '2021-05-07 14:25:39'),
(8, 'White Technical-Tau Gamma PHI', 'T-Shirt Cotton ', 'F8.jpg', 500, 1, '2021-05-07 14:28:11'),
(9, 'Black Technical-Tau Gamma PHI', 'T-Shirt Cotton ', 'F9.jpg', 500, 1, '2021-05-07 14:29:33'),
(10, 'Hunter-Solido', 'T-Shirt Cotton', 'hunter.jpeg', 500, 2, '2021-05-07 14:31:31'),
(11, 'DLC', 'DUPRI\'S & LOKAL', 'L1.jpg', 450, 2, '2021-05-07 14:33:22'),
(12, 'Enjoy-LA FAMILIA', 'La Familia Shirt EST. 20', 'L2.jpg', 500, 2, '2021-05-07 14:36:57'),
(13, 'Black-Santo Entierro', 'Santo Entierro Shirt', 'L3.jpeg', 400, 2, '2021-05-07 14:39:49'),
(14, 'White Hunter-Solido', 'T-Shirt Cotton', 'L4.jpeg', 500, 2, '2021-05-07 14:40:43'),
(15, 'White Santo Entierro', 'Santo Entierro Shirt', 'L5.jpeg', 400, 2, '2021-05-07 14:41:47'),
(16, 'Polangui-Solido', 'T-Shirt Cotton', 'L6.jpeg', 500, 2, '2021-05-07 14:42:34'),
(17, 'Black Polangui-Solido', 'T-Shirt Cotton', 'L7.jpeg', 500, 2, '2021-05-07 14:43:29'),
(18, 'Solido Familia', 'T-Shirt Cotton', 'L8.jpeg', 450, 2, '2021-05-07 14:45:14'),
(19, 'Vaping is Better', 'T-Shirt Cotton', 'L10.jpeg', 450, 2, '2021-05-07 14:46:28'),
(20, 'White Polangui-Solido', 'T-Shirt Cotton', 'pol.jpeg', 500, 2, '2021-05-07 14:48:57'),
(21, 'White Solido-Familia', 'T-Shirt Cotton', 'solido.jpeg', 450, 2, '2021-05-07 14:52:50'),
(22, 'White-Vaping is Better', 'T-Shirt Cotton', 'vaping.jpeg', 450, 2, '2021-05-07 14:54:57'),
(24, 'trial2', 'another', '9827-', 780, 0, '2021-06-01 14:40:11'),
(25, 'trial2', 'another', '', 780, 0, '2021-06-01 14:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cust_id` int(11) NOT NULL,
  `order_item_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_total_amt` double NOT NULL,
  `ordertrack_num` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cust_id`, `order_item_id`, `order_quantity`, `order_total_amt`, `ordertrack_num`) VALUES
(20, 2, 14, 1, 500, 'vDhmAnpwj'),
(21, 2, 18, 1, 450, '93ze5U7zb'),
(22, 3, 10, 3, 1500, 'GT8pVDOsW'),
(23, 3, 18, 5, 2250, 'S15ZC9l60');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `tracking_id` int(11) NOT NULL,
  `tracking_ordertrack_num` int(11) NOT NULL,
  `track_order_id` int(11) NOT NULL,
  `track_status` int(11) NOT NULL,
  `tracking_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `datejoined` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(128) NOT NULL,
  `user_contact` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`, `datejoined`, `status`, `firstname`, `lastname`, `address`, `user_contact`) VALUES
(2, 'sleekrider', 'password1234', '', '2021-05-31 16:19:12', 'A', 'Chreone', 'Harthlee', '7457 Twin Pines', '7578978554'),
(3, 'chreone', 'password2', '', '2021-05-31 21:59:01', 'A', 'First', 'Smith', '8874 High Hill', '787899988'),
(4, 'admin', 'administrator', 'admin', '2021-05-31 23:14:03', 'A', 'admin', 'admin', 'administrator', '787996858'),
(5, 'shipper1', 'shipper1234', 'shipper', '2021-06-01 09:54:30', 'A', 'Ninja', 'Van', '8885 Madison Square', '98986674'),
(6, 'shipper2', 'password1234', 'shipper', '2021-06-01 14:15:38', 'A', 'Lala', 'Move', '4517 Corner Madrigal Square', '24122514');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tracking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
