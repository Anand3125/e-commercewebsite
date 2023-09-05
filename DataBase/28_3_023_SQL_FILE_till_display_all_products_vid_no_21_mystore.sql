-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 01:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'zomato'),
(2, 'swiggy'),
(4, 'Mc- Donalds'),
(5, 'Filpkart'),
(6, 'philips'),
(8, 'nike'),
(11, 'lenvolo'),
(12, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Fruits'),
(3, 'Vegetable'),
(4, 'Milk Product'),
(5, 'Juice'),
(6, 'Stationary'),
(7, 'softdrinks'),
(8, 'Fast Food'),
(9, 'soft drinks'),
(10, 'non veg'),
(11, 'clothes'),
(12, 'laptop'),
(13, 'tv'),
(14, 'phone\r\n'),
(15, 'category 56'),
(16, 'phones'),
(17, 'electrical appliances');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `prodcut_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `prodcut_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, ' apple', ' an apple  a day keeps doctor away', ' healthy diet', 1, 1, 'apple.jpg', ' 1.jpg', 'download.jpg', '70', '2023-03-22 19:02:53', ''),
(2, ' Laptop', ' laptop lenovo good graphics good for study purpose', ' laptop', 12, 11, 'laptop.jpg', ' download(3).jpg', '2.jpg', '20000', '2023-03-22 19:07:22', ''),
(3, 'electric switch', 'electrical appliances safety for house', '\r\nelectric switch\r\nelectrical appliances safety for house\r\nvery cheap price', 2, 3, 'switch.jpg', '', '', '30', '2023-03-22 19:12:23', ''),
(4, ' television', ' latest television oled screen with 1080 px high resolutions', ' tv products', 13, 6, 'tel.jpg', ' tel.jpg', 'tel.jpg', '180000', '2023-03-23 06:59:35', ''),
(5, ' bottel', ' water bottle good for summer', ' water bottle , hot water, container', 4, 5, ' 11.jpg', ' 12.jpg', '13.jpg', '70', '2023-03-24 11:47:12', ''),
(6, ' apple2', ' 2', ' 3', 4, 2, ' download (2).jpg', ' apple.jpg', '1.jpg', '400', '2023-03-24 12:28:14', ''),
(7, ' phone', ' phones are good', ' phone ', 14, 6, ' apple.jpg', ' demoadda.com.png', 'kashipara.com.png', '7000', '2023-03-26 18:25:04', ''),
(8, ' apple laptop', ' mac air m1 chip', ' laptop apple mac laptop', 12, 12, ' 1_images.jpg', ' 2_images.jpg', '3_images.jpg', '100000', '2023-03-28 06:46:08', ''),
(9, ' Apple laptop3', ' apple laptop newly arrived', ' m1 chip apple mac os ', 12, 12, ' 2_images.jpg', ' 3_images.jpg', '1_images.jpg', '200000', '2023-03-28 10:14:26', ''),
(10, ' Apple laptop4 ', ' apple laptop newly arrived ', ' apple laptop newly arrived M1 chip ', 12, 12, ' 3_images.jpg', ' 2_images.jpg', '1_images.jpg', '300000', '2023-03-28 10:15:57', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
