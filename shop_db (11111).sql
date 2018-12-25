-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 05:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `cat_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `cat_status`) VALUES
(6, 'Men\'s', 1),
(8, 'Women\'s', 1),
(9, 'Kid\'s', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_created` varchar(200) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fullname`, `address`, `phone`, `email`, `password`, `date_created`, `role`) VALUES
(35, 'demo1', 'nnnnn', '1731001333', 'demo1@demo.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-09-18 13:37:31', 'user'),
(51, 'Mahmudul Haque Nadim', 'Mirboxtula, Sylhet', '+8801731001333', 'na146363@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-10-04 00:31:06', 'user'),
(52, 'asdasdsa', 'asdasdasdas', 'virtual.staffing7@gmail.com', 'n2@c.om', '202cb962ac59075b964b07152d234b70', '2017-10-17 07:54:38', 'user'),
(53, 'asdas', 'asdasd', 'virtual.staffing7@gmail.com', 'm@m.com', '202cb962ac59075b964b07152d234b70', '2017-10-17 07:55:30', 'user'),
(54, 'nadsasd', 'sadkjasn', 'virtual.staffing7@gmail.com', 'n2@asda.ocm', '202cb962ac59075b964b07152d234b70', '2017-10-17 10:10:02', 'user'),
(55, 'asddas', 'asdas', 'virtual.staffing7@gmail.com', 'asd@sda.com', '202cb962ac59075b964b07152d234b70', '2017-10-17 10:11:12', 'user'),
(56, 'asddas', 'asdasdasdasdasdas', 'virtual.staffing7@asdasdasgmail.com', 'asdasd@co.com', '202cb962ac59075b964b07152d234b70', '2017-10-17 10:29:05', 'user'),
(57, 'asdasas', 'saddas', 'virtual.staffing7@gmail.com', 'asdasd@co.com', '202cb962ac59075b964b07152d234b70', '2017-10-17 10:29:35', 'user'),
(58, 'kamal', 'abc', '0155555555', 'kamal@kamal.com', '202cb962ac59075b964b07152d234b70', '2017-10-17 12:12:19', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `fv_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`fv_id`, `client_id`, `product_id`, `time_added`) VALUES
(2, 35, 72, '2018-11-03 16:05:02'),
(3, 35, 70, '2018-11-04 20:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_master_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_unit_price` decimal(10,2) UNSIGNED NOT NULL,
  `product_quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `order_master_id`, `product_id`, `product_name`, `product_unit_price`, `product_quantity`) VALUES
(1, 1, 72, 'Casio AE-1200', '3800.00', 3),
(2, 1, 68, 'Jeans Pant', '200.00', 1),
(3, 2, 72, 'Casio AE-1200', '3800.00', 3),
(4, 2, 68, 'Jeans Pant', '200.00', 1),
(5, 3, 72, 'Casio AE-1200', '3800.00', 3),
(6, 3, 68, 'Jeans Pant', '200.00', 1),
(7, 4, 72, 'Casio AE-1200', '3800.00', 3),
(8, 4, 68, 'Jeans Pant', '200.00', 1),
(9, 5, 72, 'Casio AE-1200', '3800.00', 3),
(10, 5, 68, 'Jeans Pant', '200.00', 1),
(11, 6, 72, 'Casio AE-1200', '3800.00', 3),
(12, 6, 68, 'Jeans Pant', '200.00', 1),
(13, 7, 72, 'Casio AE-1200', '3800.00', 3),
(14, 7, 68, 'Jeans Pant', '200.00', 1),
(15, 8, 72, 'Casio AE-1200', '3800.00', 3),
(16, 8, 68, 'Jeans Pant', '200.00', 1),
(17, 9, 72, 'Casio AE-1200', '3800.00', 3),
(18, 9, 68, 'Jeans Pant', '200.00', 1),
(19, 10, 72, 'Casio AE-1200', '3800.00', 3),
(20, 10, 68, 'Jeans Pant', '200.00', 1),
(21, 11, 69, 'Jeans Pant 2', '1200.00', 1),
(22, 12, 72, 'Casio AE-1200', '3800.00', 1),
(23, 13, 72, 'Casio AE-1200', '3800.00', 1),
(24, 14, 72, 'Casio AE-1200', '3800.00', 1),
(25, 15, 72, 'Casio AE-1200', '3800.00', 1),
(26, 16, 72, 'Casio AE-1200', '3800.00', 1),
(27, 16, 68, 'Jeans Pant', '200.00', 1),
(28, 16, 71, 'Gabardine Pant ', '1200.00', 1),
(29, 17, 71, 'Gabardine Pant ', '1200.00', 1),
(30, 17, 70, 'Legenga  2', '300.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_master_id` int(10) UNSIGNED NOT NULL,
  `reference_no` varchar(100) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(10) UNSIGNED NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `grand_total` decimal(10,2) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1=Pending,2=Cancelled,3=Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_master_id`, `reference_no`, `order_date_time`, `client_id`, `client_address`, `grand_total`, `transaction_id`, `status`) VALUES
(1, '94CC31C9', '2018-11-06 05:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 4),
(2, '94CC31C9', '2018-11-06 05:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(3, '94CC31C9', '2018-11-06 05:02:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(4, '94CC31C9', '2018-11-06 05:02:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(5, '94CC31C9', '2018-11-06 06:00:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(6, '94CC31C9', '2018-11-06 06:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(7, '94CC31C9', '2018-11-06 06:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(8, '94CC31C9', '2018-11-06 06:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(9, '94CC31C9', '2018-11-06 06:01:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(10, '94CC31C9', '2018-11-06 06:02:00', 51, 'Mirboxtula, Sylhet', '11600.00', 'adssaddsadas', 3),
(11, '56962D5D', '2018-11-06 06:06:00', 51, 'Mirboxtula, Sylhet', '1200.00', 'abcdefgh', 3),
(12, 'A4901605', '2018-11-05 22:46:00', 35, 'nnnnn', '3800.00', '123456', 3),
(13, 'A4901605', '2018-11-05 22:47:00', 35, 'nnnnn', '3800.00', '123456', 3),
(14, 'A4901605', '2018-11-05 22:48:00', 35, 'nnnnn', '3800.00', '123456', 3),
(15, 'A4901605', '2018-11-05 22:48:00', 35, 'nnnnn', '3800.00', '123456', 3),
(16, 'D0CE2438', '2018-11-05 22:48:00', 35, 'nnnnn', '5200.00', '123456', 3),
(17, '5C067C8A', '2018-11-05 23:49:00', 35, 'nnnnn', '1500.00', 'ABCD#FGH', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` varchar(1000) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `sale` varchar(100) DEFAULT NULL,
  `measurement` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `sub_category_id`, `category_id`, `product_name`, `product_description`, `price`, `sale`, `measurement`, `image`, `quantity`, `total_sale`) VALUES
(68, 1, 6, 'Jeans Pant', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '200', '312', '38', 'uploads/products/images/4630688915bd44a7c75896.jpg', 87, 1),
(70, 2, 8, 'Legenga  2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '300', '200', '38 , 30 , 40', 'uploads/products/images/4611614345bd461d91809c.jpg', 99, 1),
(71, 1, 6, 'Gabardine Pant ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1200', '', '38', 'uploads/products/images/15271483535bd467fd55d66.jpg', 98, 2),
(72, 4, 6, 'Casio AE-1200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '3800', '3536', 'Stainless Steel Chain', 'uploads/products/images/17605181365bd6dfe4a12dc.png', 195, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `product_id`, `client_id`, `rating`) VALUES
(1, 72, 35, 4),
(2, 72, 36, 3),
(3, 72, 35, 4),
(4, 72, 35, 4),
(5, 72, 35, 5),
(6, 72, 35, 5),
(7, 72, 35, 4),
(8, 68, 35, 1),
(9, 72, 35, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `category_id`, `sub_cat_name`, `subcat_status`) VALUES
(1, 6, 'Jeans Pant', 1),
(2, 8, 'Dress', 1),
(3, 9, 'Dress', 1),
(4, 6, 'Wrist Watch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`fv_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_master_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `fv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_master_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
