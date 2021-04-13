-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 12:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisment_tbl`
--

CREATE TABLE `advertisment_tbl` (
  `a_id` int(12) NOT NULL,
  `advertisment_name` varchar(100) NOT NULL,
  `advertisment_type` varchar(100) NOT NULL,
  `cate_id` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisment_tbl`
--

INSERT INTO `advertisment_tbl` (`a_id`, `advertisment_name`, `advertisment_type`, `cate_id`, `isactive`, `doi`, `dou`) VALUES
(1, 'jewellary', 'hordings', '1', 1, '0000-00-00', '0000-00-00'),
(2, 'oppo', 'banner', '4', 1, '0000-00-00', '0000-00-00'),
(3, 'food', 'unipoles', '2', 1, '0000-00-00', '0000-00-00'),
(4, 'saree', 'hordings', '6', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cate_tble`
--

CREATE TABLE `cate_tble` (
  `cate_id` int(12) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_type` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cate_tble`
--

INSERT INTO `cate_tble` (`cate_id`, `cate_name`, `cate_type`, `isactive`, `doi`, `dou`) VALUES
(1, 'Bill Board', 'hordings', 2, '0000-00-00', '0000-00-00'),
(2, 'Bulk Ad', 'banner', 1, '0000-00-00', '0000-00-00'),
(3, 'LED', 'Unipoles', 1, '0000-00-00', '0000-00-00'),
(4, 'Hoarding', 'kishoks', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `city_tble`
--

CREATE TABLE `city_tble` (
  `id` int(12) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tble`
--

INSERT INTO `city_tble` (`id`, `city_name`, `state_id`, `isactive`, `doi`, `dou`) VALUES
(1, 'vadodara', '3', 1, '0000-00-00', '0000-00-00'),
(2, 'surat', '1', 1, '0000-00-00', '0000-00-00'),
(3, 'jaipur', '2', 1, '0000-00-00', '0000-00-00'),
(6, 'Rajkot', '1', 1, '0000-00-00', '0000-00-00'),
(7, 'Udipur', '', 1, '2019-01-27', '0000-00-00'),
(8, 'ahmedabad', '', 1, '2019-02-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `client_id` int(12) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_image` varchar(350) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`client_id`, `client_name`, `client_image`, `isactive`, `doi`, `dou`) VALUES
(1, 'mahir', 'uploads/Penguins.jpg', 0, '2019-02-14', '0000-00-00'),
(2, 'hello', 'uploads/Lighthouse.jpg', 0, '2019-02-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `complain_tbl`
--

CREATE TABLE `complain_tbl` (
  `com_id` int(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `cate_id` varchar(100) NOT NULL,
  `city_name` varchar(45) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain_tbl`
--

INSERT INTO `complain_tbl` (`com_id`, `contact_no`, `email_id`, `cate_id`, `city_name`, `feedback`, `isactive`, `doi`, `dou`) VALUES
(1, 42121515, 'aa@gmail.com', 'jxhjccnm mmmmcm', 'surat', 'ewew', 1, '0000-00-00', '0000-00-00'),
(2, 42121515, 'priya@gmail.com', 'hii hello', 'Udaipur', 'zzzzcfa', 1, '0000-00-00', '0000-00-00'),
(13, 42121515, 'aa@gmail.com', '', '', '', 1, '0000-00-00', '0000-00-00'),
(18, 2147483647, 'sss', 'sss', 'ss', '', 1, '0000-00-00', '0000-00-00'),
(20, 1345, 'pp', 'aaaaa', 'jaipur', 'Hoarding', 1, '0000-00-00', '0000-00-00'),
(21, 1345, 'aa@gmail.com', 'dfhm jkgb', 'Amartsur', 'Hoarding', 1, '2019-01-18', '0000-00-00'),
(22, 2147483647, 'pp', 'hjc,jhdc', 'surat', '--Select Services--', 1, '2019-01-18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cont_tbl`
--

CREATE TABLE `cont_tbl` (
  `c_id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont_tbl`
--

INSERT INTO `cont_tbl` (`c_id`, `name`, `contact_no`, `email`, `city`, `description`, `isactive`, `doi`, `dou`) VALUES
(1, 'hngn', 2244, 'bfb@g.com', 'wert', 'nkioto kjh tyhujhgfvrtyuiytgrtuijht ', 1, '2019-01-18', '0000-00-00'),
(2, 'hngn', 2244, 'bfb@g.com', 'wert', 'nkioto kjh tyhujhgfvrtyuiytgrtuijht ', 1, '2019-01-18', '0000-00-00'),
(3, 'bhghntg', 565675, 'vg@gmail.com', 'bhbh', 'bhth tt g ', 2, '2019-01-18', '0000-00-00'),
(4, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(5, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(6, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(7, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(8, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(9, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(10, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(11, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(12, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(13, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(14, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(15, '', 0, '', '', '', 1, '2019-01-18', '0000-00-00'),
(16, 'heena', 0, 'p@gmail.com', 'surat', 'sadac', 1, '2019-01-18', '0000-00-00'),
(17, 'heena', 0, 'p@gmail.com', 'surat', 'sadcxc', 1, '2019-01-18', '0000-00-00'),
(18, 'heena', 0, 'p@gmail.com', 'surat', 'xzzx z', 1, '2019-01-18', '0000-00-00'),
(19, 'fvtgv', 44444, 'fbgfb@ff.ccc', ' ht b', ' myjhb', 1, '2019-01-18', '0000-00-00'),
(20, 'fvtgv', 44444, 'fbgfb@ff.ccc', ' ht b', ' myjhb', 1, '2019-01-18', '0000-00-00'),
(21, 'heena', 42121515, 'p@gmail.com', 'surat', 'zdxsdz', 1, '2019-01-18', '0000-00-00'),
(22, 'gsfds', 0, 'sdfgq', 'sdfgqsdfg', 'dfg', 1, '2019-01-18', '0000-00-00'),
(23, 'uyfhguhgygj', 9090, 'jgh@gg.cc', 'ykg', 'kuhjgjfdrfgthjkhgfghjk', 1, '2019-01-18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `img_tbl`
--

CREATE TABLE `img_tbl` (
  `img_id` int(12) NOT NULL,
  `img_size` varchar(100) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_tbl`
--

INSERT INTO `img_tbl` (`img_id`, `img_size`, `img_name`, `isactive`, `doi`, `dou`) VALUES
(1, '123', 'food', 1, '0000-00-00', '0000-00-00'),
(2, '123', 'jewellary', 1, '0000-00-00', '0000-00-00'),
(3, '250', 'saree', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_tbl`
--

CREATE TABLE `inquiry_tbl` (
  `inq_id` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `city_id` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `cate_id` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry_tbl`
--

INSERT INTO `inquiry_tbl` (`inq_id`, `address`, `contact`, `email_id`, `city_id`, `state_id`, `question`, `cate_id`, `isactive`, `doi`, `dou`) VALUES
(1, 'bopal', '4563321', 'aa@gmail.com', '', '', 'fddvdd', '3', 1, '0000-00-00', '0000-00-00'),
(2, '22,bhavanpura so. ,ranip ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(3, '22,bhavanpura so. ,nirnaynagar ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(4, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(5, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(6, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(7, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(8, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(9, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 1, '0000-00-00', '0000-00-00'),
(10, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 2, '0000-00-00', '0000-00-00'),
(11, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 2, '0000-00-00', '0000-00-00'),
(12, '22,bhavanpura so. ,bopal ', '1896745234', 'aa@gmail.com', '', '', 'efsefsdvdsgvzdf', '', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `quoo_tbl`
--

CREATE TABLE `quoo_tbl` (
  `q_id` int(12) NOT NULL,
  `price` int(12) NOT NULL,
  `duration` varchar(12) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quoo_tbl`
--

INSERT INTO `quoo_tbl` (`q_id`, `price`, `duration`, `isactive`, `doi`, `dou`) VALUES
(1, 1200, '5 months', 1, '0000-00-00', '0000-00-00'),
(2, 1300, '3 months', 1, '0000-00-00', '0000-00-00'),
(3, 25000, '2 months', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `securityque_tbl`
--

CREATE TABLE `securityque_tbl` (
  `s_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securityque_tbl`
--

INSERT INTO `securityque_tbl` (`s_id`, `question`, `isactive`, `doi`, `dou`) VALUES
(1, 'aaaaa', 1, '0000-00-00', '0000-00-00'),
(2, 'fddvdd', 2, '0000-00-00', '0000-00-00'),
(3, 'vfdbdfbfd', 1, '0000-00-00', '0000-00-00'),
(4, 'birthdate', 1, '2019-01-23', '0000-00-00'),
(5, 'birthdate', 1, '2019-01-23', '0000-00-00'),
(6, 'favourite food', 1, '2019-01-23', '0000-00-00'),
(7, 'nickname', 1, '2019-01-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(12) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `state_name`, `isactive`, `doi`, `dou`) VALUES
(1, 'Gujarat', 1, '0000-00-00', '0000-00-00'),
(2, 'Rajasthan', 1, '0000-00-00', '0000-00-00'),
(3, 'punjab', 1, '0000-00-00', '0000-00-00'),
(4, 'Tamil nadu', 1, '0000-00-00', '0000-00-00'),
(5, 'Gujarat', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subcate_tbl`
--

CREATE TABLE `subcate_tbl` (
  `s_id` int(100) NOT NULL,
  `subcate_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cate_id` int(100) NOT NULL,
  `isactive` int(12) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate_tbl`
--

INSERT INTO `subcate_tbl` (`s_id`, `subcate_name`, `description`, `cate_id`, `isactive`, `doi`, `dou`) VALUES
(11, 'Single Lane', '', 0, 1, '2019-02-14', '0000-00-00'),
(12, 'Two Lane', '', 0, 1, '2019-02-14', '0000-00-00'),
(13, 'Four Lane', '', 0, 1, '2019-02-14', '0000-00-00'),
(14, 'Highway', '', 0, 1, '2019-02-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tble`
--

CREATE TABLE `user_tble` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenum` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `sec_que` varchar(100) NOT NULL,
  `sec_ans` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tble`
--

INSERT INTO `user_tble` (`id`, `firstname`, `lastname`, `password`, `profile_pic`, `email`, `mobilenum`, `gender`, `Address`, `sec_que`, `sec_ans`, `isactive`, `doi`, `dou`, `usertype`) VALUES
(1, 'palak', 'mehta', 'abc123', '', 'gh@gmail.com', '89898989', 'Male', 'aaaaaaaaaaaaaaa', '4', '123', 1, '2019-01-22 00:00:00', '0000-00-00 00:00:00', 2),
(2, 'kirti', 'panchal', 'hello123', '', 'aa@gmail.com', '89898989', 'Male', 'uuuiiii', '7', 'krt', 1, '2019-01-22 00:00:00', '0000-00-00 00:00:00', 2),
(3, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-08 00:00:00', '0000-00-00 00:00:00', 2),
(4, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-08 00:00:00', '0000-00-00 00:00:00', 2),
(5, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(6, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(7, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(8, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(9, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(10, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(11, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-13 00:00:00', '0000-00-00 00:00:00', 2),
(12, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-14 00:00:00', '0000-00-00 00:00:00', 2),
(13, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-14 00:00:00', '0000-00-00 00:00:00', 2),
(14, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-14 00:00:00', '0000-00-00 00:00:00', 2),
(15, '', '', '', '', '', '', '', '', '', '', 1, '2019-02-14 00:00:00', '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisment_tbl`
--
ALTER TABLE `advertisment_tbl`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `cate_id` (`cate_id`);

--
-- Indexes for table `cate_tble`
--
ALTER TABLE `cate_tble`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `city_tble`
--
ALTER TABLE `city_tble`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  ADD PRIMARY KEY (`com_id`),
  ADD UNIQUE KEY `category_id` (`cate_id`);

--
-- Indexes for table `cont_tbl`
--
ALTER TABLE `cont_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `img_tbl`
--
ALTER TABLE `img_tbl`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `quoo_tbl`
--
ALTER TABLE `quoo_tbl`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `securityque_tbl`
--
ALTER TABLE `securityque_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcate_tbl`
--
ALTER TABLE `subcate_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_tble`
--
ALTER TABLE `user_tble`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisment_tbl`
--
ALTER TABLE `advertisment_tbl`
  MODIFY `a_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cate_tble`
--
ALTER TABLE `cate_tble`
  MODIFY `cate_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `city_tble`
--
ALTER TABLE `city_tble`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `client_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  MODIFY `com_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cont_tbl`
--
ALTER TABLE `cont_tbl`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `img_tbl`
--
ALTER TABLE `img_tbl`
  MODIFY `img_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  MODIFY `inq_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quoo_tbl`
--
ALTER TABLE `quoo_tbl`
  MODIFY `q_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `securityque_tbl`
--
ALTER TABLE `securityque_tbl`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subcate_tbl`
--
ALTER TABLE `subcate_tbl`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_tble`
--
ALTER TABLE `user_tble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
