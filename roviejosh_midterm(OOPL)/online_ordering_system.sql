-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 12:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `order_id`, `name`, `quantity`, `price`) VALUES
(501, 20, 'Cookies & Cream', 1, 120),
(504, 21, 'Kare-Kare', 1, 180),
(505, 21, 'Cookies & Cream', 1, 120),
(519, 21, 'Cookies & Cream', 2, 120),
(520, 21, 'Kare-Kare', 2, 180),
(521, 21, 'Mashed Potato', 2, 80),
(522, 21, 'Cordon Bleu', 2, 130),
(523, 21, 'Bicol Express', 2, 170),
(534, 22, 'Kare-Kare', 2, 180),
(535, 23, 'Burrito', 1, 150),
(536, 23, 'Cookies & Cream', 1, 120),
(537, 24, 'Mashed Potato', 1, 80),
(538, 24, 'Bicol Express', 1, 170),
(539, 26, 'Cookies & Cream', 1, 120),
(540, 26, 'Burrito', 1, 150),
(541, 27, 'Cookies & Cream', 1, 120),
(544, 28, 'Cookies & Cream', 1, 120),
(545, 28, 'Mashed Potato', 1, 80),
(546, 29, 'Burrito', 4, 150),
(547, 29, 'Cookies & Cream', 2, 120),
(548, 29, 'Kare-Kare', 1, 180),
(549, 29, 'Mashed Potato', 4, 80),
(550, 29, 'Cordon Bleu', 2, 130),
(551, 29, 'Bicol Express', 3, 170),
(552, 29, 'Burrito', 2, 150),
(553, 30, 'Burrito', 1, 150),
(554, 30, 'Cookies & Cream', 1, 120),
(555, 31, 'Cookies & Cream', 1, 120),
(556, 31, 'Burrito', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `imagelink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `price`, `imagelink`) VALUES
(1, 'Burrito', 150, '/img/burrito.jpeg'),
(1, 'Cookies & Cream', 120, '/img/cookiesncream.jpeg'),
(4, 'Kare-Kare', 180, '/img/kare-kare.jpeg'),
(5, 'Mashed Potato', 80, '/img/Mashed-Potato.jpeg'),
(3, 'Cordon Bleu', 130, '/img/cordon-bleu.jfif'),
(6, 'Bicol Express', 170, '/img/bicol-express.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `deliverymode` varchar(255) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `first_name`, `last_name`, `deliverymode`, `contact_num`, `address`, `totalamount`, `paymentmethod`) VALUES
(21, 1, 'rovie', 'pineda', '', 123123123, '', 300, ''),
(22, 1, '', '', '', 0, '', 1360, ''),
(23, 1, '', '', '', 0, '', 0, ''),
(24, 2, '', '', '', 0, '', 0, ''),
(25, 1, '', '', '', 0, '', 0, ''),
(26, 1, '', '', '', 0, '', 270, ''),
(27, 2, 'rovie', 'pineda', '', 123, 'eastcalaguiman', 120, ''),
(28, 1, 'roviejosh', 'lactawan', '', 2147483647, 'eastcalaguiman', 200, ''),
(29, 1, '', '', '', 0, '', 0, ''),
(30, 1, '', '', '', 0, '', 270, ''),
(31, 1, 'khies', 'zuniga', '', 2147483647, 'balanga', 270, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sample1', 'sample123'),
(2, 'sample2', 'sample123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
