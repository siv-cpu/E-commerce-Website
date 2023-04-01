-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 11:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Allen Solly'),
(2, 'Nike'),
(3, 'Sony'),
(4, 'Disney'),
(5, 'Nippan'),
(6, 'dogs'),
(7, 'Archies Pvt Ltd.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Clothing'),
(2, 'Footwear'),
(3, 'Electronics'),
(4, 'Toys'),
(5, 'Furniture'),
(6, 'Pet Items'),
(7, 'Stationery');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `product_title`, `product_description`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Clothing', 'Clothing (also known as clothes, garments, dress, apparel, or attire) is any item worn on the body.', 'cloth', 1, 1, 'cloths.jpg', 'cloths.jpg', 'cloths.jpg', '500rs', '2023-03-30 04:56:35', 'true'),
(2, 'Footwear', 'Footwear refers to garments worn on the feet, which typically serves the purpose of protection.', 'shoe,footwear', 2, 2, 'footwear.jpg', 'footwear.jpg', 'footwear.jpg', '600rs', '2023-03-30 05:05:51', 'true'),
(3, 'Electronics', 'tihs is a like something', 'eloctro,chips', 3, 3, 'Electronics.jpg', 'Electronics.jpg', 'Electronics.jpg', '300', '2023-03-30 05:07:37', 'true'),
(4, 'Toys', 'A toy or plaything is an object that is used primarily to provide entertainment.', 'toy,child', 4, 4, 'toys.jpg', 'toys.jpg', 'toys.jpg', '40', '2023-03-30 05:09:25', 'true'),
(5, 'Furniture', ' movable objects intended to support various human activities.', 'furniture,home ', 5, 0, 'Furniture.jpg', 'Furniture.jpg', 'Furniture.jpg', '5000rs', '2023-03-30 05:12:14', 'true'),
(6, 'Pet Items', 'pet, any animal kept by human beings as a source of companionship and pleasure.', 'pets', 6, 6, 'pet.jpg', 'pet.jpg', 'pet.jpg', '500rs', '2023-03-30 05:26:41', 'true'),
(8, 'some', 'some', 'siva', 3, 3, 'keyboard.jpg', 'keyboard.jpg', 'laptop.jpg', '500', '2023-03-30 11:22:15', 'true');

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
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
