-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 12:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(5) NOT NULL,
  `cust_fname` varchar(15) NOT NULL,
  `cust_lname` varchar(15) NOT NULL,
  `cust_address` varchar(27) NOT NULL,
  `cust_tel` varchar(15) NOT NULL,
  `cust_sex` varchar(6) NOT NULL,
  `cust_email` varchar(20) NOT NULL,
  `a_id` int(3) NOT NULL,
  `img_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_address`, `cust_tel`, `cust_sex`, `cust_email`, `a_id`, `img_user`) VALUES
(1, 'PengPen', 'ken', 'llll', '999999', 'female', 'Pengpen.l@yahoo.com', 1, 'usertest.jpg'),
(2, 'Pennee', 'Wangmetheekul', '777 Yala', '0896784567', 'female', 'pennee.wa@psu.ac.th', 2, 'usertest.jpg'),
(3, 'Michale', 'Jackson', '1009 Madison USA', '3157821024', 'male', 'mjack@yahoo.com', 3, 'usertest.jpg'),
(4, 'Somsri', 'Ratanothayanon', '1009 Madison Street Apt#6 S', '3157514015', 'male', 'sunida.r@psu.ac.th', 4, 'usertest.jpg'),
(5, 'Chatchai', 'PPP', 'ppll', '33333', 'male', 'chat.p@yahoo.com', 5, 'usertest.jpg'),
(6, 'Sukanya', 'Ratanothayanon', '745 Irvine California USA', '1111900', 'female', 'sratanot@gmail.com', 6, 'usertest.jpg'),
(7, 'Supachai', 'Chansuwan', '888 Silapakorn', '09876543', 'male', 'supachai.c@yahoo.com', 7, 'usertest.jpg'),
(8, 'Pakorn', 'Pornphisut', '666 Pinklo', '555555', 'male', 'pakorn.p@gmail.com', 8, 'usertest.jpg'),
(19, 'pang', 'ee', 'hatyai', '0325584', 'female', 'de@g.com', 1000000, ''),
(555, 'ปิงปอง', 'ปิง', '888 kkk street', '0863169245', 'female', 'pingpong.l@yahoo.com', 555, 'usertest.jpg'),
(1199, 'de', 'ee', 'hatyai', '0325584', 'male', 'de@g.com', 9998, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `p_id`, `d_qty`, `d_subtotal`) VALUES
(1, 2, 9, 2, 5000),
(2, 3, 9, 3, 7500),
(3, 3, 10, 2, 60),
(4, 3, 8, 1, 12),
(5, 4, 9, 1, 2500),
(6, 5, 7, 1, 10),
(7, 5, 5, 1, 1200),
(8, 6, 9, 2, 5000),
(9, 6, 5, 1, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail2`
--

CREATE TABLE `order_detail2` (
  `or_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `p_id` int(11) NOT NULL,
  `or_price` int(11) NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail2`
--

INSERT INTO `order_detail2` (`or_id`, `p_id`, `or_price`, `pr_qty`, `total_price`) VALUES
(00000000007, 3, 60, 5, 300),
(00000000008, 3, 60, 5, 300),
(00000000008, 2, 15, 2, 30),
(00000000009, 2, 15, 1, 15),
(00000000010, 6, 20000, 2, 40000),
(00000000011, 3, 60, 2, 120),
(00000000012, 2, 15, 2, 30),
(00000000012, 7, 10, 2, 20),
(00000000013, 2, 15, 2, 30),
(00000000014, 2, 15, 2, 30),
(00000000014, 4, 1500, 2, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `cust_id` int(10) NOT NULL,
  `o_total` float NOT NULL,
  `o_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `o_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `o_dttm`, `cust_id`, `o_total`, `o_name`, `o_address`, `o_email`, `o_phone`) VALUES
(1, '2023-03-06 18:09:21', 2, 600, '', '', '0', ''),
(2, '2023-03-07 01:18:11', 0, 0, 'สุนิดา', 'ดกหดหก', '0', '0863169245'),
(3, '2023-03-07 01:30:11', 0, 0, 'aey', 'hkljkljlk', '0', '0863169245'),
(4, '2023-03-07 01:32:05', 0, 0, 'chatchai', 'fdfdgvvv', '0', '88888'),
(5, '2023-03-07 02:21:51', 555, 1210, 'supachai', 'dsdasds', 'sunida_r@yahoo.com', '88888'),
(6, '2023-03-07 02:23:42', 6, 6200, 'sukanya', 'fdsfdsfds', 'sukanyar_r@yahoo.com', '44444444');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(5) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `qty_onhand` int(3) NOT NULL,
  `p_type_id` int(5) NOT NULL,
  `p_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_price`, `p_name`, `qty_onhand`, `p_type_id`, `p_img`) VALUES
(1, 25, 'spoon', 10, 3, '181776738520230311_193026.jpg'),
(2, 15, 'pencil', 11, 4, '27545625120230311_193016.jpg'),
(3, 60, 'fish sauce', 93, 1, '41664944320230311_193043.jpg'),
(4, 1500, 'lipstick', 8, 5, '114461361020230311_193141.jpg'),
(5, 1200, 'tshirt', 3, 2, '150908094820230311_193052.jpg'),
(6, 20000, 'tv', 3, 6, '88545456520230311_193105.png'),
(7, 10, 'noodles', 198, 1, '91669534820230312_161004.jpg'),
(8, 12, 'eraser', 150, 4, '206316594020230311_193131.jpg'),
(9, 2500, 'ต่างหูมุก', 16, 7, '174572768420230306_195128.webp'),
(10, 30, 'ต่างหูดิออร์แม่ลูก', 24, 7, 'p_img234286620230306_193431.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `p_type_id` int(5) NOT NULL,
  `p_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`p_type_id`, `p_type_name`) VALUES
(1, 'food'),
(2, 'cloths'),
(3, 'Kitchenwar'),
(4, 'Stationary'),
(5, 'Cosmetics'),
(6, 'Electronic'),
(7, 'เครื่องประดับ'),
(8, 'รองเท้า'),
(10, 'เวชภัณฑ์');

-- --------------------------------------------------------

--
-- Table structure for table `salesperson`
--

CREATE TABLE `salesperson` (
  `sid` int(5) NOT NULL,
  `s_fname` varchar(15) NOT NULL,
  `s_lname` varchar(30) NOT NULL,
  `s_tel` varchar(10) NOT NULL,
  `a_id` int(3) NOT NULL,
  `img_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesperson`
--

INSERT INTO `salesperson` (`sid`, `s_fname`, `s_lname`, `s_tel`, `a_id`, `img_user`) VALUES
(111, 'Somsri', 'KKK', '097345577', 9, 'usertest.jpg'),
(222, 'Somkit', 'LLL', '45789999', 10, 'usertest.jpg'),
(333, 'Jitra', 'Janed', '568799800', 11, 'usertest.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `or_id` int(5) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `total_price` float NOT NULL,
  `or_status` varchar(1) NOT NULL,
  `or_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`or_id`, `cus_name`, `address`, `telephone`, `total_price`, `or_status`, `or_date`, `email`) VALUES
(1, 'th', 'หาดใหญ่', '0222222222', 315, '1', '2023-03-19 17:17:16', '6410210113@email.psu.ac.th'),
(2, 'th', '22', '0222222222', 315, '1', '2023-03-19 17:19:12', '0927298830'),
(3, 'th', '22', '0222222222', 315, '1', '2023-03-19 17:19:47', '0927298830'),
(4, 'th', '22', '0222222222', 315, '1', '2023-03-19 17:20:03', '0927298830'),
(5, 'th', '22', '0222222222', 315, '1', '2023-03-19 17:23:52', '0927298830'),
(6, 'th', '55/55', '0222222222', 330, '1', '2023-03-19 17:31:37', '6410210113@psu.ac.th'),
(7, 'th', '55/55', '0222222222', 330, '1', '2023-03-19 17:32:46', '0927298830'),
(8, 'th', '55/55', '0222222222', 330, '1', '2023-03-19 17:34:13', '0927298830'),
(9, 'sw', '224/1', '0843747830', 15, '1', '2023-03-19 17:36:50', 'diwwyemail03@gmail.com'),
(10, 'th', '22', '0222222222', 40000, '1', '2023-03-19 17:47:03', 'diwwyemail03@gmail.com'),
(11, '555', '555', '555', 120, '1', '2023-03-20 15:49:26', '555'),
(12, 'ทยากร หมวดรอด', '55/55', '0222222222', 50, '1', '2023-03-20 16:23:00', '6410210113@email.psu.ac.th'),
(13, 'th', '22', '0222222222', 30, '1', '2023-03-21 08:11:43', '0927298830'),
(14, 'ทยากร หมวดรอด', '55/55', '0843747830', 3030, '1', '2023-03-21 08:46:32', 'tayakornmuadrod@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `a_id` int(11) NOT NULL,
  `a_user` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_type` int(3) NOT NULL,
  `datasave` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `a_name` varchar(20) NOT NULL,
  `img_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`a_id`, `a_user`, `a_pass`, `a_type`, `datasave`, `a_name`, `img_user`) VALUES
(1, 'pengpen.k', '111111', 2, '2023-03-11 10:45:34', 'Pengpen', 'usertest.jpg'),
(2, 'pennee.wa', '222222', 2, '2023-03-11 10:45:44', 'Pennee', 'usertest.jpg'),
(3, 'michale.j', '333333', 2, '2023-03-11 10:45:58', 'Michale', 'usertest.jpg'),
(4, 'sunida.r', '444444', 2, '2023-03-11 10:46:08', 'Sunida', 'usertest.jpg'),
(5, 'chatchai.p', '555555', 2, '2023-03-11 10:46:23', 'Chatchai', 'usertest.jpg'),
(6, 'sukanya.r', '666666', 2, '2023-03-11 10:46:33', 'Sukanya', 'usertest.jpg'),
(7, 'supachai.c', '777777', 2, '2023-03-11 10:46:42', 'Supachai', 'usertest.jpg'),
(8, 'pakorn.p', '888888', 2, '2023-03-11 10:46:50', 'Pakorn', 'usertest.jpg'),
(9, 'somsri.k', '999999', 1, '2023-03-11 10:46:58', 'Somsri', 'usertest.jpg'),
(10, 'somkit.l', '101010', 1, '2023-03-11 10:47:05', 'Somkit', 'usertest.jpg'),
(11, 'jitra.j', '110110', 1, '2023-03-11 10:47:14', 'Jitra', 'usertest.jpg'),
(12, 'sarun.s', '131313', 1, '2023-03-11 10:47:31', 'พอช ศรันย์', 'usertest.jpg'),
(555, 'pingpong.l', '676767', 2, '2023-03-11 10:47:39', 'ปิงปอง', 'usertest.jpg'),
(1000, 'sunida.r', '22222', 2, '2023-03-21 08:34:26', 'de', ''),
(1001, 'bang', '111111', 2, '2023-03-19 14:51:40', 'de', ''),
(9998, 'sunida.r', '22222', 2, '2023-03-21 08:35:04', 'de', ''),
(1000000, 'sunida.r', '22222', 2, '2023-03-21 08:33:47', 'de', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `r1` (`a_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `f1` (`p_type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`p_type_id`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `or_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `r1` FOREIGN KEY (`a_id`) REFERENCES `users` (`a_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `f1` FOREIGN KEY (`p_type_id`) REFERENCES `product_type` (`p_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
