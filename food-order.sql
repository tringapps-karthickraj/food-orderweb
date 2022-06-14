-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `role`, `password`, `email`, `phone`) VALUES
(30, 'raj', 2, '65a1223dae83b8092c4edba0823a793c', NULL, NULL),
(32, 'meow', 2, '4a4be40c96ac6314e91d93f38043a634', NULL, NULL),
(33, 'anu', 2, '89a4b5bd7d02ad1e342c960e6a98365c', NULL, NULL),
(34, 'surya', 2, 'aff8fbcbf1363cd7edc85a1e11391173', NULL, NULL),
(35, 'karthi', 2, '202cb962ac59075b964b07152d234b70', 'kkarthickraj2k1@gmail.com', '1234567890'),
(36, 'Poornimaa', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'poorni@gmail.com', '1234567890'),
(37, 'Poornimaa', 1, 'f3ede926587776a8cd79fb2afe4e07b4', 'poorni@gmail.com', '1234567890'),
(38, 'kr', 2, 'dcf0d7d2cd120bf42580d43f29785dd3', 'kr@gmail.com', '1234567890'),
(39, 'karthi', 2, '006d2143154327a64d86a264aea225f3', 'qw@gmail.com', '6383690804'),
(40, 'saranya', 2, '52f2b308fd57c73d91a33cd69099eb9c', 'saranyaog05@gmail.com', '4635446146146');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `food_id` int(11) DEFAULT NULL,
  `quandity` int(11) DEFAULT NULL,
  `priceperqty` varchar(50) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image_name`, `featured`, `active`, `created_by`, `updated_by`) VALUES
(6, 'Snack food', 'Food_Category_337.jpg', '1', '1', 0, 0),
(12, 'Desserts', 'Food_Category_683.jpg', '1', '1', 0, 0),
(15, 'Main Course', 'Food_Category_311.jpg', '1', '1', 0, 0),
(16, 'Starters', 'Food_Category_509.jpg', '1', '1', 0, 0),
(17, 'Juices', 'Food_Category_542.jfif', '1', '1', 0, 0),
(19, 'sasasaaaaaaaaaaaaa', '', '1', '1', 27, 27);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `customer_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`, `created_by`, `updated_by`) VALUES
(6, 'Boiled MOMO', 'Enjoy the plate of MoMo \r\nwith the stuffed fresh chicken, garlic, and the flavours of spicy masala', '105', 'Food-Name-8987.jpg', 6, '1', '1', NULL, 27),
(7, 'Fried MoMos', 'Veg stuffed Fried MoMos which is fully veggie lodded and spicy masalas and garnished with the real taste of Indian Spices.', '150', 'Food-Name-4159.jpg', 0, '1', '1', NULL, NULL),
(8, 'Taiwan Pizza', ' Try out the spicy Taiwan Pizza first time in India, with the thin layer of crust and complete taste of pizza .', '445', 'Food-Name-6687.jpg', 6, '1', '1', NULL, NULL),
(9, 'Burger', 'Try out this amazing large size burger for the with loaded cheese...\r\n', '300', 'Food-Name-2546.jpg', 6, '1', '1', NULL, NULL),
(10, 'Ice Cream ', 'Scoop of ice cream makes u refreshing.', '50', 'Food-Name-61.jpg', 12, '1', '1', NULL, NULL),
(11, 'Italian Tiramis ', 'Try this new type of  Dessert first time in India ', '150', 'Food-Name-8033.png', 12, '1', '1', NULL, NULL),
(12, 'Rasagulla ', 'Every ball u taste makes u feel  out of the world.\r\nContains 5 pieces per plate...', '100', 'Food-Name-8973.jpg', 12, '1', '1', NULL, NULL),
(13, 'Donut', 'Let kids enjoy the piece of donut with joy and healthy... ', '160', 'Food-Name-4745.jfif', 12, '1', '1', NULL, NULL),
(14, 'Pani Puri ', 'Try this at various flavours ..\r\n', '50', 'Food-Name-4964.jpg', 6, '1', '1', NULL, NULL),
(15, 'Biryani Fest', 'sapdradhuku sooper aa irukum', '120', 'Food-Name-642.jpg', 15, '1', '1', NULL, NULL),
(16, 'Bise Bela Bath', 'Taste the king of Veg family\r\ncontains the taste of hand made spices', '50', 'Food-Name-6799.jpg', 15, '1', '1', NULL, NULL),
(17, 'Mutaa podimas', 'Have a plate of Indian style egg podimas', '30', 'Food-Name-9923.jpg', 16, '1', '1', NULL, NULL),
(18, 'Chicken chettinad', 'Koli kari koli kari kuruma \r\naachi chicken masala pola varuma!!\r\n(ft.sathyaraj)', '120', 'Food-Name-2013.jfif', 16, '1', '1', NULL, NULL),
(19, 'sasas', 'drink it chill ur mind', '80', 'Food-Name-6043.jfif', 17, '1', '0', NULL, 27),
(22, 'vada', 'sdsdsd', '15', 'Food-Name-9554.JPG', 6, '1', '0', 27, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `id` int(10) NOT NULL,
  `total` float DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `cancel_reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`id`, `total`, `order_date`, `status`, `customer_id`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `cancel_reason`) VALUES
(1, 200, '2022-06-13 14:57:07', 2, 38, 'kr', '1234567890', 'kr@gmail.com', 'asasasas', NULL),
(2, 315, '2022-06-13 15:04:52', 3, 38, 'karthi', '1234567890', 'kr@gmail.com', 'asas', 'asasssssssssssssssss'),
(3, 105, '2022-06-13 18:50:52', 3, 38, 'kr', '1234567890', 'kr@gmail.com', 'jj', 'as'),
(4, 105, '2022-06-13 19:11:45', 3, 38, 'karthi', '1234567890', 'kr@gmail.com', 'asa', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `food_id` varchar(40) DEFAULT NULL,
  `quandity` varchar(40) DEFAULT NULL,
  `priceperqty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `food_id`, `quandity`, `priceperqty`) VALUES
(1, 1, '6', '2', '100'),
(2, 2, '6', '3', '105'),
(3, 3, '6', '1', '105'),
(4, 4, '6', '1', '105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
