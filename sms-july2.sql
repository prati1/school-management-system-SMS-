-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 09:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12



/*
	MAIN SQL FILE FOR THE PROJECT......INSTEAD OF USING STUDENT.SQL VIEWS.SQL AND ADMISSION_FEE.SQL, YOU CAN IMPORT THIS FILE INSTEAD.
*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountid`
--

CREATE TABLE IF NOT EXISTS `accountid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('accountID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `administration`
--
CREATE TABLE IF NOT EXISTS `administration` (
`student_id` int(11)
,`Name` varchar(62)
,`gender` enum('Male','Female')
,`DOBad` date
,`date_of_admission` date
,`student_roll` int(11)
,`age` int(5)
,`temp_address` varchar(116)
,`gName` varchar(62)
,`phone_no` bigint(11)
,`email_id` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `administrationid`
--

CREATE TABLE IF NOT EXISTS `administrationid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('administrationID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission_fee`
--

CREATE TABLE IF NOT EXISTS `admission_fee` (
  `payment_date` date DEFAULT NULL,
  `payment_amount` float DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `student_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `count` int(254) DEFAULT NULL,
  `percent` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_fee`
--

CREATE TABLE IF NOT EXISTS `bus_fee` (
  `yearly` varchar(10) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examid`
--

CREATE TABLE IF NOT EXISTS `examid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('exam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `standard_id` int(11) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `due_amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `guardian_id` varchar(11) NOT NULL,
  `gfirst_name` varchar(20) NOT NULL,
  `gmiddle_name` varchar(20) DEFAULT NULL,
  `glast_name` varchar(20) NOT NULL,
  `address_street` varchar(20) DEFAULT NULL,
  `address_ward` int(11) DEFAULT NULL,
  `address_vdcmun` varchar(20) DEFAULT NULL,
  `address_district` varchar(20) DEFAULT NULL,
  `address_zone` varchar(20) DEFAULT NULL,
  `address_country` varchar(20) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`guardian_id`, `gfirst_name`, `gmiddle_name`, `glast_name`, `address_street`, `address_ward`, `address_vdcmun`, `address_district`, `address_zone`, `address_country`, `phone_no`, `relation`, `email_id`, `student_id`) VALUES
('101', 'Lal', 'Bahadur', 'Prajapati', 'Sankhutole', 4, 'Bhaktapur', 'Bhaktapur', 'Bagmati', 'Nepal', 9867646890, 'Father', 'lal@gmail.com', 12313),
('102', 'Parvati', 'Devi', 'Sharma', 'Girijaghar', 2, 'Pokhara', 'Kaski', 'Gandaki', 'Nepal', 9841789820, 'Mother', 's.parvati@gmail.com', 12312),
('12213102', 'Birbal', '', 'Shrestha', 'Loktantrik Chowk', 2, 'Baglung', 'Baglung', 'Dhawalagiri', 'Nepal', 9867689854, 'Father', 'birbal@gmail.com', 12213);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_fee`
--

CREATE TABLE IF NOT EXISTS `hostel_fee` (
  `yearly` varchar(10) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('pratiksha', 'trixter'),
('shiwani', 'u14ce03');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `student_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `first_term` int(5) DEFAULT NULL,
  `second_term` int(5) DEFAULT NULL,
  `third_term` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `student_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL,
  `first_term` int(5) DEFAULT NULL,
  `second_term` int(5) DEFAULT NULL,
  `third_term` int(5) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE IF NOT EXISTS `standard` (
  `standard_id` int(11) NOT NULL DEFAULT '0',
  `standard_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `DOBad` date NOT NULL,
  `DOBbs` date NOT NULL,
  `date_of_admission` date NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `admitted_std` varchar(3) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `address_temp_street` varchar(20) DEFAULT NULL,
  `address_temp_ward` int(11) DEFAULT NULL,
  `address_temp_vdcmun` varchar(20) DEFAULT NULL,
  `address_temp_district` varchar(20) DEFAULT NULL,
  `address_temp_zone` varchar(20) DEFAULT NULL,
  `address_temp_country` varchar(20) DEFAULT NULL,
  `address_perm_street` varchar(20) DEFAULT NULL,
  `address_perm_ward` int(11) DEFAULT NULL,
  `address_perm_vdcmun` varchar(20) DEFAULT NULL,
  `address_perm_district` varchar(20) DEFAULT NULL,
  `address_perm_zone` varchar(20) DEFAULT NULL,
  `address_perm_country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12314 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `DOBad`, `DOBbs`, `date_of_admission`, `email_id`, `admitted_std`, `student_roll`, `address_temp_street`, `address_temp_ward`, `address_temp_vdcmun`, `address_temp_district`, `address_temp_zone`, `address_temp_country`, `address_perm_street`, `address_perm_ward`, `address_perm_vdcmun`, `address_perm_district`, `address_perm_zone`, `address_perm_country`) VALUES
(12213, 'Poonam', 'Purnima', 'Shrestha', 'Female', '2009-07-17', '2066-04-02', '2014-07-14', 'poo@gmail.com', '1', 1, 'Balkhutole', 23, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal', 'Loktantrik chowk', 2, 'Baglung', 'Baglung', 'Dhawlagiri', 'Nepal'),
(12312, 'Ankita', 'Nandita', 'Sharma', 'Female', '1996-03-27', '2052-04-28', '2014-04-14', 'xmastree@gmail.com', '3', 2, '28 Kilo', 16, 'Dhulikhel', 'Kavre', 'Bagmati', 'Nepal', 'Girijaghar', 2, 'Pokhara', 'Kaski', 'Gandaki', 'Nepal'),
(12313, 'Kiran', '', 'Prajapati', 'Female', '1995-03-24', '2052-02-11', '2013-01-12', 'krnprz@gmail.com', '2', 4, '28 Kilo', 16, 'Dhulikhel', 'Kavre', 'Bagmati', 'Nepal', 'Sankhutole', 4, 'Bhaktapur', 'Bhaktapur', 'Bagmati', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subj_id` int(11) NOT NULL DEFAULT '0',
  `standard_id` int(11) DEFAULT NULL,
  `subj_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_fee`
--

CREATE TABLE IF NOT EXISTS `tuition_fee` (
  `monthly` varchar(10) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` enum('DirectLogin','OpenID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `administration`
--
DROP TABLE IF EXISTS `administration`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `administration` AS select `student`.`student_id` AS `student_id`,concat(`student`.`first_name`,' ',`student`.`middle_name`,' ',`student`.`last_name`) AS `Name`,`student`.`gender` AS `gender`,`student`.`DOBad` AS `DOBad`,`student`.`date_of_admission` AS `date_of_admission`,`student`.`student_roll` AS `student_roll`,(year(curdate()) - year(`student`.`DOBad`)) AS `age`,concat(`student`.`address_temp_street`,'-',`student`.`address_temp_ward`,',',`student`.`address_temp_vdcmun`,',',`student`.`address_temp_district`,',',`student`.`address_temp_zone`,',',`student`.`address_temp_country`) AS `temp_address`,concat(`guardian`.`gfirst_name`,' ',`guardian`.`gmiddle_name`,' ',`guardian`.`glast_name`) AS `gName`,`guardian`.`phone_no` AS `phone_no`,`guardian`.`email_id` AS `email_id` from (`student` join `guardian`) where (`student`.`student_id` = `guardian`.`student_id`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountid`
--
ALTER TABLE `accountid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `administrationid`
--
ALTER TABLE `administrationid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `examid`
--
ALTER TABLE `examid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`standard_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subj_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12314;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accountid`
--
ALTER TABLE `accountid`
  ADD CONSTRAINT `accountid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `administrationid`
--
ALTER TABLE `administrationid`
  ADD CONSTRAINT `administrationid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `examid`
--
ALTER TABLE `examid`
  ADD CONSTRAINT `examid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
