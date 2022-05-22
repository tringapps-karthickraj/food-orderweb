-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:06 PM
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
(27, 'karthi', 1, 'b678c60ee60fd4374df211724aedf4f7', 'karthi@gmail.com', '1234567890'),
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
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(6, 'Snack food', 'Food_Category_337.jpg', 'Yes', 'Yes'),
(12, 'Desserts', 'Food_Category_683.jpg', 'Yes', 'Yes'),
(15, 'Main Course', 'Food_Category_311.jpg', 'Yes', 'Yes'),
(16, 'Starters', 'Food_Category_509.jpg', 'Yes', 'Yes'),
(17, 'Juices', 'Food_Category_542.jfif', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `chat_support`
--

CREATE TABLE `chat_support` (
  `txt_id` int(20) NOT NULL,
  `client` varchar(20) NOT NULL,
  `executive` varchar(30) NOT NULL DEFAULT 'Not Allotted',
  `txt_from` varchar(30) NOT NULL,
  `txt_to` varchar(30) NOT NULL,
  `txt` varchar(200) NOT NULL,
  `instance` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_support`
--

INSERT INTO `chat_support` (`txt_id`, `client`, `executive`, `txt_from`, `txt_to`, `txt`, `instance`) VALUES
(0, '', 'Not Allotted', '', '', 'hii', '2021-12-10 10:40:40'),
(0, '', 'Not Allotted', '', '', 'hlo', '2021-12-10 10:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `restaurant` varchar(30) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_quan` varchar(30) NOT NULL,
  `instance` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(20) NOT NULL
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
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(6, 'Boiled MOMO', 'Enjoy the plate of MoMo \r\nwith the stuffed fresh chicken, garlic, and the flavours of spicy masala', '100', 'Food-Name-8987.jpg', 6, 'Yes', 'Yes'),
(7, 'Fried MoMos', 'Veg stuffed Fried MoMos which is fully veggie lodded and spicy masalas and garnished with the real taste of Indian Spices.', '150', 'Food-Name-4159.jpg', 0, 'Yes', 'Yes'),
(8, 'Taiwan Pizza', ' Try out the spicy Taiwan Pizza first time in India, with the thin layer of crust and complete taste of pizza .', '445', 'Food-Name-6687.jpg', 6, 'Yes', 'Yes'),
(9, 'Burger', 'Try out this amazing large size burger for the with loaded cheese...\r\n', '300', 'Food-Name-2546.jpg', 6, 'Yes', 'Yes'),
(10, 'Ice Cream ', 'Scoop of ice cream makes u refreshing.', '50', 'Food-Name-61.jpg', 12, 'Yes', 'Yes'),
(11, 'Italian Tiramis ', 'Try this new type of  Dessert first time in India ', '150', 'Food-Name-8033.png', 12, 'Yes', 'Yes'),
(12, 'Rasagulla ', 'Every ball u taste makes u feel  out of the world.\r\nContains 5 pieces per plate...', '100', 'Food-Name-8973.jpg', 12, 'Yes', 'Yes'),
(13, 'Donut', 'Let kids enjoy the piece of donut with joy and healthy... ', '160', 'Food-Name-4745.jfif', 12, 'Yes', 'Yes'),
(14, 'Pani Puri ', 'Try this at various flavours ..\r\n', '50', 'Food-Name-4964.jpg', 6, 'Yes', 'Yes'),
(15, 'Biryani Fest', 'sapdradhuku sooper aa irukum', '120', 'Food-Name-642.jpg', 15, 'Yes', 'Yes'),
(16, 'Bise Bela Bath', 'Taste the king of Veg family\r\ncontains the taste of hand made spices', '50', 'Food-Name-6799.jpg', 15, 'Yes', 'Yes'),
(17, 'Mutaa podimas', 'Have a plate of Indian style egg podimas', '30', 'Food-Name-9923.jpg', 16, 'Yes', 'Yes'),
(18, 'Chicken chettinad', 'Koli kari koli kari kuruma \r\naachi chicken masala pola varuma!!\r\n(ft.sathyaraj)', '120', 'Food-Name-2013.jfif', 16, 'Yes', 'Yes'),
(19, 'mojito', 'drink it chill ur mind', '80', 'Food-Name-6043.jfif', 17, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `food-order`
--

CREATE TABLE `food-order` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `wallet` float NOT NULL DEFAULT 0,
  `status` varchar(20) NOT NULL DEFAULT 'Offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `restaurant_id` varchar(40) NOT NULL,
  `sno` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(3) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `id` int(10) NOT NULL,
  `total` float DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`id`, `total`, `order_date`, `status`, `customer_id`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 1200, '2022-05-22 12:55:13', 'Ordered', 38, 'karthi', '1234567890', 'kkarthickraj2k1@gmail.com', 'qww'),
(2, 120, '2022-05-22 12:56:27', 'Ordered', 38, 'karthi', '1234567890', 'kkarthickraj2k1@gmail.com', 'qwqw');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `food_id` varchar(40) DEFAULT NULL,
  `quandity` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `food_id`, `quandity`) VALUES
(1, 1, '6', '5'),
(2, 1, '7', '3'),
(3, 1, '10', '5'),
(4, 2, '18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `res_name` varchar(500) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `first` int(20) NOT NULL,
  `second` int(20) NOT NULL,
  `third` int(20) NOT NULL,
  `fourth` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `wallet` float DEFAULT 0,
  `status` varchar(20) NOT NULL DEFAULT 'Offline',
  `streak` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`name`, `password`, `email`, `phone`, `address`, `wallet`, `status`, `streak`) VALUES
('poorni', 'poorni', 'admin@gmail.com', '9894895624', 'mdu', 0, 'Offline', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `ip_address` varchar(30) NOT NULL,
  `coordinates` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'visited',
  `client` varchar(30) NOT NULL DEFAULT 'visit',
  `instance` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ip_address`, `coordinates`, `city`, `status`, `client`, `instance`) VALUES
('::1', '', '', 'visited', 'visit', '2021-12-10 10:00:05'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:00:20'),
('::1', '', '', 'login', 'admin@gmail.com', '2021-12-10 10:00:20'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:03:49'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:06:51'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:08:39'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:12:59'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:13:28'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:13:59'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:14:29'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:22:06'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:25:59'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:26:41'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:27:43'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:28:05'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:28:06'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:28:10'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:29:36'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:31:14'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:33:44'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:34:23'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:37:04'),
('::1', '', '', 'login', 'admin@gmail.com', '2021-12-10 10:37:04'),
('::1', '', '', 'visited', 'visit', '2021-12-10 10:41:13'),
('::1', '', '', 'visited', 'visit', '2022-02-26 21:27:58'),
('::1', '', '', 'visited', 'visit', '2022-02-26 21:28:16'),
('::1', '', '', 'visited', 'visit', '2022-02-26 21:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `wallet` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `phone`, `address`, `wallet`) VALUES
('admin', 'admin', 'admin@gmail.com', '1234567890', 'madurai', 1000);

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
-- Indexes for table `food-order`
--
ALTER TABLE `food-order`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`sno`,`restaurant_id`);

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
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
