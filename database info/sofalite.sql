-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 12:35 PM
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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantities` int(11) NOT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantities` int(11) NOT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `product_image`, `product_name`, `price`, `quantities`, `createdOn`) VALUES
(1, 2, 'arrivals1.png', 'sofa', '65', 1, '2023-09-13 14:07:34'),
(2, 3, 'arrivals2.png', 'sofa', '80', 1, '2023-09-13 14:07:34'),
(3, 6, 'arrivals5.png', 'Modern Chair', '120', 1, '2023-09-13 14:07:34'),
(4, 1, 'arrivals6.png', 'Mapple Wood Dinning  Table', '140', 1, '2023-09-13 14:07:34'),
(5, 4, 'arrivals3.png', 'Wooden Armchair', '40', 2, '2023-09-13 14:07:34'),
(6, 10, 'slider1.png', 'cloth covered accent chair ', '399', 1, '2023-09-13 19:42:47'),
(7, 2, 'arrivals1.png', 'sofa', '65', 1, '2023-09-13 19:42:47'),
(8, 1, 'arrivals6.png', 'Mapple Wood Dinning  Table', '140', 1, '2023-09-13 19:42:47'),
(9, 6, 'arrivals5.png', 'Modern Chair', '120', 1, '2023-09-13 19:42:47'),
(13, 1, 'arrivals6.png', 'Mapple Wood Dinning  Table', '140', 1, '2023-09-13 19:49:20'),
(14, 2, 'arrivals1.png', 'sofa', '65', 1, '2023-09-13 19:49:20'),
(15, 3, 'arrivals2.png', 'sofa', '80', 1, '2023-09-13 19:49:20'),
(16, 2, 'arrivals1.png', 'sofa', '65', 1, '2023-09-13 20:48:54'),
(17, 3, 'arrivals2.png', 'sofa', '80', 1, '2023-09-13 20:48:54'),
(18, 6, 'arrivals5.png', 'Modern Chair', '120', 1, '2023-09-13 20:48:54'),
(19, 4, 'arrivals3.png', 'Wooden Armchair', '40', 1, '2023-09-13 20:48:54'),
(20, 7, 'arrivals7.png', 'Arm Chair ', '90', 1, '2023-09-13 21:59:15');

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
(1, 'arrivals6.png', 'Mapple Wood Dinning  Table', '140', 'Mapple Wood Dining Table is a product made from hard wood with strong stump for making tables,dining tables etc with a well blended surface.'),
(2, 'arrivals1.png', 'Armless Sofa', '65', 'Armless Sofa is a well blended cotton made with a well balance giving fit. Available both home, School and Office.'),
(3, 'arrivals2.png', 'sofa', '80', 'Sofa is a one seat chair comfortable for family  with a hard fabrics and cotton made.'),
(4, 'arrivals3.png', 'Wooden Armchair', '40', 'Brown wooden sofa is one of the best sofa ever made with a comfortable balance, made from wood and form by sofa-lite international company in Nigeria. '),
(5, 'arrivals4.png', 'Stylish Chair', '100', 'stylish chairs is an office chair with comfortable foam made from cotton and Aluminon arm, this product is a wonderful chair, is the best service giving to user.'),
(6, 'arrivals5.png', 'Modern Chair', '120', 'Modern bar chair is an execute soft chair use for official with a comfortable giving balance use both home and office.'),
(7, 'arrivals7.png', 'Arm Chair ', '90', 'Executive arm chair is soft single sofa made from cotton with a comfortable pillow head rest, available at sofa-lite international company in Nigeria, Benue state, otukpo. '),
(8, 'arrivals8.png', 'Wooden Bed', '140', 'wooden bed is a comfortable soft bed made from feather with a beautiful design and a quality wood comfortable for family use.'),
(9, 'arrivals9.jpg', 'White Wooden Chair', '50', 'white wooden chair is an executive chair made from wood with balance feet for use, white wooden chair is an international chair made by sofa-lite company for home use. '),
(10, 'slider1.png', 'cloth covered accent chair ', '399', 'cloth accent chair is high quality chair for rest, made for home use and office use, available for VIP.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
