-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 05:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sofalite`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_image`, `product_name`, `product_price`, `product_description`) VALUES
(1, 'arrivals6.png', 'Mapple Wood Dinning  Table', '140.00', 'sofa'),
(2, 'arrivals1.png', 'sofa', '65.00', 'sofa'),
(3, 'arrivals2.png', 'sofa', '80.00', 'sofa'),
(4, 'arrivals3.png', 'Wooden Armchair', '40.00', 'Brown wooden sofa is one of the best sofa ever made with a comfortable balance, made from wood and form by sofa-lite international company in Nigeria. '),
(5, 'arrivals4.png', 'Stylish Chair', '100.00', 'stylish chairs is an office chair with comfortable foam made from cotton and Aluminon arm, this product is a wonderful chair, is the best service giving to user.'),
(6, 'arrivals5.png', 'Modern Chair', '120.00', 'Modern bar chair is an execute soft chair use for official with a comfortable giving balance use both home and office.'),
(7, 'arrivals7.png', 'Arm Chair ', '90.00', 'Executive arm chair is soft single sofa made from cotton with a comfortable pillow head rest, available at sofa-lite international company in Nigeria, Benue state, otukpo. '),
(8, 'arrivals8.png', 'Wooden Bed', '140.00', 'wooden bed is a comfortable soft bed made from feather with a beautiful design and a quality wood comfortable for family use.'),
(9, 'arrivals9.jpg', 'White Wooden Chair', '50.00', 'white wooden chair is an executive chair made from wood with balance feet for use, white wooden chair is an international chair made by sofa-lite company for home use. '),
(10, 'slider1.png', 'cloth covered accent chair ', '399.00', 'cloth accent chair is high quality chair for rest, made for home use and office use, available for VIP.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
