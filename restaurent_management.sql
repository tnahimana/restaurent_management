-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2020 at 09:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_email` varchar(30) DEFAULT NULL,
  `admin_pass` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `register_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `user_id`, `register_date`) VALUES
(1, 'admin', 'theonesten1@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', 3, '2020-02-01 03:24:51'),
(2, 'mumbere', 'mumber@aol.com', '04b9e739bb49937f893b4a703be19fb4', 4, '2020-04-01 03:24:51'),
(4, 'andre12', 'kwihangana@aol.com', '216f8700413ca34a16f64e3747ee6ba3', 25, '2020-04-28 03:50:27'),
(5, 'valens12', 'valens@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', 26, '2020-04-28 23:28:37'),
(6, 'kalinda12', 'kalinda@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', 27, '2020-04-29 20:16:05'),
(7, 'diane', 'diane@aol.com', '216f8700413ca34a16f64e3747ee6ba3', 28, '2020-04-29 20:17:54'),
(8, 'ghandi', 'mundere@aol.com', 'dd4b21e9ef71e1291183a46b913ae6f2', 29, '2020-04-29 20:20:01'),
(9, 'bizira12', 'collin@aol.com', 'dd4b21e9ef71e1291183a46b913ae6f2', 30, '2020-04-30 17:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `breakfast_id` int(11) NOT NULL,
  `breakfast_counter` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`breakfast_id`, `breakfast_counter`, `customer_id`, `register_date`) VALUES
(33, 30, 50, '2020-02-28 21:40:17'),
(38, 18, 55, '2020-03-28 21:40:17'),
(40, 11, 57, '2020-04-28 21:40:17'),
(42, 10, 59, '2020-04-28 21:40:17'),
(43, 9, 60, '2020-04-28 21:40:17'),
(44, 12, 61, '2020-04-28 21:40:17'),
(45, 23, 62, '2020-04-28 21:40:17'),
(46, 10, 63, '2020-04-28 21:40:17'),
(48, 10, 65, '2020-04-28 21:40:17'),
(49, 6, 66, '2020-04-28 21:40:17'),
(52, 5, 69, '2020-04-30 01:48:04'),
(53, 2, 70, '2020-04-30 01:49:44'),
(54, 2, 71, '2020-04-30 03:19:46'),
(55, 5, 72, '2020-04-30 03:37:31'),
(56, 5, 73, '2020-05-01 17:42:32'),
(57, 5, 74, '2020-05-01 17:44:13'),
(58, 5, 75, '2020-05-01 18:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_modification`
--

CREATE TABLE `card_modification` (
  `mod_id` int(11) NOT NULL,
  `user_username` varchar(20) DEFAULT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `previous_card` varchar(30) DEFAULT NULL,
  `recent_card` varchar(30) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_modification`
--

INSERT INTO `card_modification` (`mod_id`, `user_username`, `user_email`, `previous_card`, `recent_card`, `customer_id`, `register_date`) VALUES
(1, 'andre12', 'andre@gmail.com', '4100110', '5101010', 51, '2020-03-23 21:55:29'),
(2, 'andre12', 'andre@gmail.com', 'A012DE32', 'AS23QW56', 64, '2020-03-25 02:42:13'),
(3, 'andre12', 'andre@gmail.com', 'DE021496', '02B1DE25', 60, '2020-03-25 02:46:24'),
(4, 'andre12', 'andre@gmail.com', '02B1DE25', '21BADA01', 60, '2020-03-25 02:47:04'),
(5, 'admin', 'admin', 'DA124503', '0201DEF6 ', 58, '2020-03-25 18:20:10'),
(6, 'jeanne', 'jeanne@gmail.com', '21BADA01', 'DE0102FA', 60, '2020-03-26 21:16:09'),
(7, 'andre12', 'kwihangana@aol.com', '0102ASDF', '41B1SA12', 75, '2020-05-01 18:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `counter_breakfast`
--

CREATE TABLE `counter_breakfast` (
  `counter_id` int(11) NOT NULL,
  `remain_breakfast` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_breakfast`
--

INSERT INTO `counter_breakfast` (`counter_id`, `remain_breakfast`, `customer_id`) VALUES
(129, 18, 55),
(131, 11, 57),
(133, 10, 59),
(134, 9, 60),
(135, 12, 61),
(136, 23, 62),
(137, 10, 63),
(142, 9, 59),
(147, 30, 50),
(148, 6, 66),
(151, 5, 69),
(152, 2, 70),
(153, 2, 71),
(154, 5, 72),
(155, 5, 73),
(156, 5, 74),
(157, 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `counter_dinner`
--

CREATE TABLE `counter_dinner` (
  `counter_id` int(11) NOT NULL,
  `remain_dinner` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_dinner`
--

INSERT INTO `counter_dinner` (`counter_id`, `remain_dinner`, `customer_id`) VALUES
(35, 9, 55),
(37, 15, 57),
(39, 10, 59),
(40, 10, 60),
(41, 9, 61),
(42, 52, 62),
(43, 20, 63),
(46, 15, 50),
(47, 12, 66),
(50, 9, 69),
(51, 4, 70),
(52, 6, 71),
(53, 6, 72),
(54, 5, 73),
(55, 5, 74),
(56, 3, 75),
(57, 14, 50),
(58, 13, 50),
(59, 12, 50);

-- --------------------------------------------------------

--
-- Table structure for table `counter_lunch`
--

CREATE TABLE `counter_lunch` (
  `counter_id` int(11) NOT NULL,
  `remain_lunch` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_lunch`
--

INSERT INTO `counter_lunch` (`counter_id`, `remain_lunch`, `customer_id`) VALUES
(24, 10, 55),
(26, 9, 57),
(28, 10, 59),
(29, 9, 60),
(30, 13, 61),
(31, 21, 62),
(32, 20, 63),
(35, 26, 50),
(36, 10, 66),
(39, 6, 69),
(40, 2, 70),
(41, 2, 71),
(42, 4, 72),
(43, 6, 73),
(44, 5, 74),
(45, 2, 75);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(30) NOT NULL,
  `customer_lname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `gender`, `dob`, `register_date`) VALUES
(50, 'mugisha', 'allan', 'male', '2018-02-08', '2020-03-22 03:22:54'),
(51, 'murenzi', 'evalist', 'male', '1995-01-01', '2020-03-22 17:53:38'),
(55, 'kwihanagana', 'andre', 'male', '2008-01-31', '2020-03-23 23:50:46'),
(56, 'nshimiyimana', 'francois xavier', 'male', '2000-01-01', '2020-03-24 18:21:28'),
(57, 'Sebazungu', 'jean lambert', 'male', '2007-12-28', '2020-03-24 18:24:11'),
(58, 'Mugisha', 'Evode', 'male', '1975-01-25', '2020-03-24 18:25:40'),
(59, 'mukamana', 'immacule', 'male', '1991-12-03', '2020-03-24 18:26:44'),
(60, 'mutoniwase', 'donatha', 'female', '0000-00-00', '2020-03-24 18:39:52'),
(61, 'kwihangana', 'Andre', 'male', '0000-00-00', '2020-03-24 18:39:59'),
(62, 'kayijuka', 'espoir', 'male', '2000-12-01', '2020-03-24 18:36:07'),
(63, 'mugemana', 'charles', 'male', '2020-01-01', '2020-03-24 18:38:53'),
(64, 'muvandimwe', 'egide', 'female', '1983-01-01', '2020-03-24 18:48:08'),
(65, 'Egidie', 'bibio', 'female', '2005-01-01', '2020-03-24 18:52:12'),
(66, 'Mambo', 'junior', 'male', '2009-12-29', '2020-03-26 17:55:48'),
(67, 'kalinda', 'egide', 'male', '2007-04-01', '2020-04-27 22:54:03'),
(68, 'Murenzi', 'evangeliste', 'male', '2006-12-31', '2020-04-28 23:33:52'),
(69, 'mwungeri', 'medy', 'male', '2002-12-31', '2020-04-30 01:48:03'),
(70, 'Kado', 'jolie', 'female', '2004-12-31', '2020-04-30 01:49:43'),
(71, 'kabanda', 'didi', 'male', '2002-12-31', '2020-04-30 03:19:46'),
(72, 'kamanzi', 'eric', 'male', '2005-12-30', '2020-04-30 03:37:30'),
(73, 'kabera', 'Eraste', 'male', '2007-12-31', '2020-05-01 17:42:31'),
(74, 'Kalisa', 'eduard', 'male', '2016-12-31', '2020-05-01 17:44:13'),
(75, 'Mukobwajana', 'Gilbertine', 'female', '2010-12-31', '2020-05-01 18:11:58'),
(76, 'Murekatete', 'Lilian', 'female', '1997-12-30', '2020-05-01 18:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `dinner_id` int(11) NOT NULL,
  `dinner_counter` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`dinner_id`, `dinner_counter`, `customer_id`, `register_date`) VALUES
(32, 15, 50, '2020-01-28 21:44:41'),
(37, 9, 55, '2020-04-28 21:44:41'),
(39, 15, 57, '2020-04-28 21:44:41'),
(41, 10, 59, '2020-04-28 21:44:41'),
(42, 10, 60, '2020-02-28 21:44:41'),
(43, 9, 61, '2020-04-28 21:44:41'),
(44, 52, 62, '2020-04-28 21:44:41'),
(45, 20, 63, '2020-04-28 21:44:41'),
(47, 20, 65, '2020-04-28 21:44:41'),
(48, 12, 66, '2020-04-28 21:44:41'),
(51, 9, 69, '2020-04-30 01:48:04'),
(52, 4, 70, '2020-04-30 01:49:44'),
(53, 6, 71, '2020-04-30 03:19:46'),
(54, 6, 72, '2020-04-30 03:37:31'),
(55, 5, 73, '2020-05-01 17:42:32'),
(56, 5, 74, '2020-05-01 17:44:13'),
(57, 3, 75, '2020-05-01 18:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `breakfast_cost` int(11) DEFAULT NULL,
  `lunch_cost` int(11) DEFAULT NULL,
  `dinner_cost` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `breakfast_cost`, `lunch_cost`, `dinner_cost`, `customer_id`) VALUES
(8, 600, 1400, 1200, 50),
(13, 500, 1000, 1200, 55),
(15, 500, 800, 1200, 57),
(17, 500, 1000, 1000, 59),
(18, 500, 900, 1000, 60),
(19, 500, 600, 1500, 61),
(20, 500, 1000, 1200, 62),
(21, 500, 800, 1000, 63),
(23, 500, 1000, 1200, 65),
(24, 500, 1000, 1200, 66),
(27, 500, 1000, 1000, 69),
(28, 600, 800, 1200, 70),
(29, 500, 700, 1000, 71),
(30, 500, 1000, 1000, 72),
(31, 600, 1000, 1200, 73),
(32, 1000, 1500, 2000, 74),
(33, 600, 1000, 1000, 75);

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `lunch_id` int(1) NOT NULL,
  `lunch_counter` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`lunch_id`, `lunch_counter`, `customer_id`, `register_date`) VALUES
(32, 26, 50, '2020-04-28 21:45:50'),
(37, 10, 55, '2020-02-28 21:45:50'),
(39, 9, 57, '2020-04-28 21:45:50'),
(41, 10, 59, '2020-04-28 21:45:50'),
(42, 9, 60, '2020-04-28 21:45:50'),
(43, 13, 61, '2020-04-28 21:45:50'),
(44, 21, 62, '2020-04-28 21:45:50'),
(45, 20, 63, '2020-04-28 21:45:50'),
(47, 20, 65, '2020-04-28 21:45:50'),
(48, 10, 66, '2020-04-28 21:45:50'),
(51, 6, 69, '2020-04-30 01:48:04'),
(52, 2, 70, '2020-04-30 01:49:44'),
(53, 2, 71, '2020-04-30 03:19:46'),
(54, 4, 72, '2020-04-30 03:37:31'),
(55, 6, 73, '2020-05-01 17:42:32'),
(56, 5, 74, '2020-05-01 17:44:13'),
(57, 2, 75, '2020-05-01 18:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `money_to_pay`
--

CREATE TABLE `money_to_pay` (
  `money_id` int(11) NOT NULL,
  `breakfast_cost` int(11) DEFAULT NULL,
  `lunch_cost` int(11) DEFAULT NULL,
  `dinner_cost` int(11) DEFAULT NULL,
  `total_cost` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_to_pay`
--

INSERT INTO `money_to_pay` (`money_id`, `breakfast_cost`, `lunch_cost`, `dinner_cost`, `total_cost`, `customer_id`, `register_date`) VALUES
(21, 17000, 20800, 16000, 53800, 50, '2020-01-28 03:22:55'),
(26, 8000, 10000, 10400, 28400, 55, '2020-02-27 23:50:46'),
(28, 3500, 7400, 16800, 27700, 57, '2020-03-28 18:24:12'),
(30, 5000, 10000, 10000, 25000, 59, '2019-05-28 18:26:45'),
(31, 3500, 8300, 43000, 54800, 60, '2019-06-06 18:28:10'),
(32, 6000, 7800, 13500, 27300, 61, '2019-07-28 18:32:48'),
(33, 11500, 21000, 62400, 94900, 62, '2019-08-28 18:36:08'),
(34, 5000, 16000, 20000, 41000, 63, '2019-09-28 18:38:54'),
(36, 20000, 20000, 24000, 49000, 65, '2019-10-28 18:52:13'),
(37, 3500, 9000, 13000, 25500, 66, '2019-11-28 17:55:48'),
(40, 2500, 6000, 9000, 17500, 69, '2020-04-30 01:48:04'),
(41, 1200, 1600, 4800, 7600, 70, '2020-04-30 01:49:44'),
(42, 1000, 1400, 6000, 8400, 71, '2020-04-30 03:19:47'),
(43, 2500, 4000, 6000, 12500, 72, '2019-12-30 03:37:31'),
(44, 3000, 6000, 6000, 15000, 73, '2020-05-01 17:42:32'),
(45, 5000, 7500, 10000, 22500, 74, '2020-05-01 17:44:13'),
(46, 3000, 2000, 3000, 8000, 75, '2020-05-01 18:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `recyclebin`
--

CREATE TABLE `recyclebin` (
  `recyclebin_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `payed_breakfast` int(11) NOT NULL,
  `payed_dinner` int(11) NOT NULL,
  `payed_lunch` int(11) NOT NULL,
  `remain_breakfast` int(11) NOT NULL,
  `remain_dinner` int(11) NOT NULL,
  `remain_lunch` int(11) NOT NULL,
  `money_payed` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recyclebin`
--

INSERT INTO `recyclebin` (`recyclebin_id`, `customer_name`, `payed_breakfast`, `payed_dinner`, `payed_lunch`, `remain_breakfast`, `remain_dinner`, `remain_lunch`, `money_payed`, `customer_id`, `user_id`, `register_date`) VALUES
(7, 'nshimiyimana francois xavier', 4, 5, 4, 0, 1, 0, 20200, 56, 4, '2020-03-25 00:46:20'),
(8, 'muvandimwe egide', 7, 5, 10, 0, 1, 1, 37200, 64, 3, '2020-03-25 04:16:20'),
(9, 'murenzi evalist', 8, 4, 6, 13, 5, 12, 27000, 51, 3, '2020-03-25 04:25:56'),
(10, 'Mugisha Evode', 7, 11, 7, 13, 17, 14, 43700, 58, 25, '2020-04-29 21:35:10'),
(11, 'Murenzi evangeliste', 2, 6, 3, 4, 8, 5, 19400, 68, 25, '2020-04-30 01:03:09'),
(12, 'kalinda egide', 1, 3, 2, 2, 5, 4, 11000, 67, 25, '2020-04-30 01:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `rfid_card`
--

CREATE TABLE `rfid_card` (
  `id` int(11) NOT NULL,
  `card_id` varchar(30) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `register_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rfid_card`
--

INSERT INTO `rfid_card` (`id`, `card_id`, `customer_id`, `register_date`, `user_id`, `register_name`) VALUES
(32, '0102ASDF', 50, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(37, '1994ASD', 55, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(39, '0241DA78', 57, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(41, 'AS52QW45', 59, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(42, 'DE0102FA', 60, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(43, 'DE02BA09', 61, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(44, 'A1D2QW63', 62, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(45, 'SAQW02ER', 63, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(47, 'ACD0123', 65, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(48, 'AB2014FE', 66, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(51, 'AB45DE02', 69, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(52, 'BEDA01F2', 70, '2020-04-30 03:16:20', 3, 'Nahimana Theoneste'),
(53, '01AB0210', 71, '2020-04-30 03:19:47', 25, 'Nahimana Theoneste'),
(54, '45AB4523', 72, '2020-04-30 03:37:31', 25, 'kwihanagana Andre'),
(55, '01254966', 73, '2020-05-01 17:42:32', 25, 'kwihanagana Andre'),
(56, '0325144545', 74, '2020-05-01 17:44:13', 25, 'kwihanagana Andre'),
(57, '41B1SA12', 75, '2020-05-02 00:13:13', 25, 'kwihanagana Andre');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_lname` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_phone` varchar(13) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_dob` date NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_password`, `user_phone`, `user_gender`, `user_dob`, `user_username`, `register_date`) VALUES
(3, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', '07710123654', 'male', '2004-02-03', 'admin', '2020-04-28 03:27:54'),
(4, 'mumbere', 'claude', 'mumber@aol.com', '04b9e739bb49937f893b4a703be19fb4', '0725051504', 'male', '1983-12-01', 'mumbere', '2020-03-25 18:01:45'),
(25, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '216f8700413ca34a16f64e3747ee6ba3', '+250788546352', 'male', '1997-12-24', 'andre12', '2020-04-28 03:50:27'),
(26, 'Muvala', 'Valens', 'valens@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', '+250701456320', 'male', '1988-12-31', 'valens12', '2020-04-28 23:28:37'),
(27, 'kalinda', 'emile', 'kalinda@gmail.com', '216f8700413ca34a16f64e3747ee6ba3', '+250726041566', 'male', '2010-12-31', 'kalinda12', '2020-04-29 20:16:04'),
(28, 'kamali', 'diane', 'diane@aol.com', '216f8700413ca34a16f64e3747ee6ba3', '+250780123654', 'female', '1993-12-31', 'diane', '2020-04-29 20:17:54'),
(29, 'mundere', 'ghandi', 'mundere@aol.com', 'dd4b21e9ef71e1291183a46b913ae6f2', '+250771025634', 'male', '2004-12-31', 'ghandi', '2020-04-29 20:20:01'),
(30, 'bizira', 'collin', 'collin@aol.com', 'dd4b21e9ef71e1291183a46b913ae6f2', '+250789456414', 'male', '2004-12-30', 'bizira12', '2020-04-30 17:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `users_activity`
--

CREATE TABLE `users_activity` (
  `activity_id` int(11) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_lname` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(13) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_activity`
--

INSERT INTO `users_activity` (`activity_id`, `user_fname`, `user_lname`, `user_email`, `user_phone`, `user_username`, `user_id`, `register_date`) VALUES
(86, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-29 20:11:10'),
(87, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-04-29 20:12:25'),
(88, 'Muvala', 'Valens', 'valens@gmail.com', '+250701456320', 'valens12', 26, '2020-04-29 20:13:26'),
(89, 'mumbere', 'claude', 'mumber@aol.com', '0725051504', 'mumbere', 4, '2020-04-29 20:14:46'),
(90, 'kalinda', 'emile', 'kalinda@gmail.com', '+250726041566', 'kalinda12', 27, '2020-04-29 20:16:07'),
(91, 'kamali', 'diane', 'diane@aol.com', '+250780123654', 'diane', 28, '2020-04-29 20:17:57'),
(92, 'mundere', 'ghandi', 'mundere@aol.com', '+250771025634', 'ghandi', 29, '2020-04-29 20:20:05'),
(93, 'mundere', 'ghandi', 'mundere@aol.com', '+250771025634', 'ghandi', 29, '2020-04-29 20:20:42'),
(94, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-29 20:21:10'),
(95, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-29 20:21:44'),
(96, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-29 20:24:31'),
(97, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-04-29 20:25:52'),
(98, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-04-30 03:18:12'),
(99, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-04-30 07:54:33'),
(100, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-30 08:00:04'),
(101, 'Muvala', 'Valens', 'valens@gmail.com', '+250701456320', 'valens12', 26, '2020-04-30 17:29:01'),
(102, 'bizira', 'collin', 'collin@aol.com', '+250789456414', 'bizira12', 30, '2020-04-30 17:30:41'),
(103, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-04-30 22:30:13'),
(104, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-05-01 17:34:39'),
(105, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-05-01 18:47:45'),
(106, 'bizira', 'collin', 'collin@aol.com', '+250789456414', 'bizira12', 30, '2020-05-01 22:34:02'),
(107, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-05-01 22:35:31'),
(108, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-05-01 22:43:31'),
(109, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-05-02 18:16:25'),
(110, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 3, '2020-05-02 21:26:02'),
(111, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 25, '2020-05-02 21:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_logout`
--

CREATE TABLE `user_logout` (
  `logout_id` int(11) NOT NULL,
  `user_fname` varchar(20) DEFAULT NULL,
  `user_lname` varchar(20) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_phone` varchar(13) DEFAULT NULL,
  `user_username` varchar(20) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logout`
--

INSERT INTO `user_logout` (`logout_id`, `user_fname`, `user_lname`, `user_email`, `user_phone`, `user_username`, `activity_id`, `register_date`) VALUES
(31, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 86, '2020-04-29 20:12:13'),
(32, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 87, '2020-04-29 20:13:15'),
(33, 'Muvala', 'Valens', 'valens@gmail.com', '+250701456320', 'valens12', 88, '2020-04-29 20:14:02'),
(34, 'mundere', 'ghandi', 'mundere@aol.com', '+250771025634', 'ghandi', 92, '2020-04-29 20:20:30'),
(35, 'mundere', 'ghandi', 'mundere@aol.com', '+250771025634', 'ghandi', 93, '2020-04-29 20:21:00'),
(36, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 94, '2020-04-29 20:21:35'),
(37, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 95, '2020-04-29 20:24:21'),
(38, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 96, '2020-04-29 20:25:41'),
(39, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 99, '2020-04-30 16:07:10'),
(40, 'bizira', 'collin', 'collin@aol.com', '+250789456414', 'bizira12', 102, '2020-04-30 22:23:49'),
(41, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 103, '2020-05-01 16:54:56'),
(42, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 103, '2020-05-01 16:54:57'),
(43, 'kwihanagana', 'Andre', 'kwihangana@aol.com', '+250788546352', 'andre12', 105, '2020-05-01 22:33:32'),
(44, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 109, '2020-05-02 21:21:07'),
(45, 'nahimana', 'theoneste', 'theonesten1@gmail.com', '07710123654', 'admin', 110, '2020-05-02 21:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`breakfast_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `card_modification`
--
ALTER TABLE `card_modification`
  ADD PRIMARY KEY (`mod_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `counter_breakfast`
--
ALTER TABLE `counter_breakfast`
  ADD PRIMARY KEY (`counter_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `counter_dinner`
--
ALTER TABLE `counter_dinner`
  ADD PRIMARY KEY (`counter_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `counter_lunch`
--
ALTER TABLE `counter_lunch`
  ADD PRIMARY KEY (`counter_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`dinner_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`lunch_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `money_to_pay`
--
ALTER TABLE `money_to_pay`
  ADD PRIMARY KEY (`money_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `recyclebin`
--
ALTER TABLE `recyclebin`
  ADD PRIMARY KEY (`recyclebin_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rfid_card`
--
ALTER TABLE `rfid_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_activity`
--
ALTER TABLE `users_activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_logout`
--
ALTER TABLE `user_logout`
  ADD PRIMARY KEY (`logout_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `breakfast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `card_modification`
--
ALTER TABLE `card_modification`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `counter_breakfast`
--
ALTER TABLE `counter_breakfast`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `counter_dinner`
--
ALTER TABLE `counter_dinner`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `counter_lunch`
--
ALTER TABLE `counter_lunch`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `dinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `lunch_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `money_to_pay`
--
ALTER TABLE `money_to_pay`
  MODIFY `money_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `recyclebin`
--
ALTER TABLE `recyclebin`
  MODIFY `recyclebin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rfid_card`
--
ALTER TABLE `rfid_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_activity`
--
ALTER TABLE `users_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `user_logout`
--
ALTER TABLE `user_logout`
  MODIFY `logout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD CONSTRAINT `breakfast_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `card_modification`
--
ALTER TABLE `card_modification`
  ADD CONSTRAINT `card_modification_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `counter_breakfast`
--
ALTER TABLE `counter_breakfast`
  ADD CONSTRAINT `counter_breakfast_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `counter_dinner`
--
ALTER TABLE `counter_dinner`
  ADD CONSTRAINT `counter_dinner_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `counter_lunch`
--
ALTER TABLE `counter_lunch`
  ADD CONSTRAINT `counter_lunch_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `dinner`
--
ALTER TABLE `dinner`
  ADD CONSTRAINT `dinner_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `lunch`
--
ALTER TABLE `lunch`
  ADD CONSTRAINT `lunch_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `money_to_pay`
--
ALTER TABLE `money_to_pay`
  ADD CONSTRAINT `money_to_pay_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `recyclebin`
--
ALTER TABLE `recyclebin`
  ADD CONSTRAINT `recyclebin_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `recyclebin_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rfid_card`
--
ALTER TABLE `rfid_card`
  ADD CONSTRAINT `rfid_card_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `rfid_card_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users_activity`
--
ALTER TABLE `users_activity`
  ADD CONSTRAINT `users_activity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_logout`
--
ALTER TABLE `user_logout`
  ADD CONSTRAINT `user_logout_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `users_activity` (`activity_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
