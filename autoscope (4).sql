-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2018 at 06:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autoscope`
--
CREATE DATABASE IF NOT EXISTS `autoscope` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `autoscope`;

-- --------------------------------------------------------

--
-- Table structure for table `adminsignin`
--

CREATE TABLE IF NOT EXISTS `adminsignin` (
  `admin_uname` varchar(20) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsignin`
--

INSERT INTO `adminsignin` (`admin_uname`, `admin_pwd`) VALUES
('admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `assign_work`
--

CREATE TABLE IF NOT EXISTS `assign_work` (
  `Work_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `Sreqst_ID` int(11) NOT NULL,
  `Assign_Date` date NOT NULL,
  `S_ReturnDate` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Work_ID`),
  KEY `Staff_ID` (`Staff_ID`),
  KEY `Sreqst_ID` (`Sreqst_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`Work_ID`, `Staff_ID`, `Sreqst_ID`, `Assign_Date`, `S_ReturnDate`, `Status`) VALUES
(43, 8, 26, '2029-03-18', '2018-03-31', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `billid` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Work_ID` int(11) NOT NULL,
  `billdate` date NOT NULL,
  `gtotal` double NOT NULL,
  `discount` double NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL DEFAULT 'not_generated',
  PRIMARY KEY (`billid`),
  KEY `Staff_ID` (`Staff_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `Work_ID` (`Work_ID`),
  KEY `Staff_ID_2` (`Staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billid`, `Staff_ID`, `User_ID`, `Work_ID`, `billdate`, `gtotal`, `discount`, `status`) VALUES
(36, 8, 30, 43, '2018-03-27', 100, 3, 'finalized');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE IF NOT EXISTS `bill_details` (
  `bdid` int(11) NOT NULL AUTO_INCREMENT,
  `billid` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`bdid`),
  KEY `billid` (`billid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bdid`, `billid`, `itemname`, `qty`, `price`, `tax`, `total`) VALUES
(34, 36, 'diesel', 1, 100, 3, 103);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `feedback` longtext NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `days` varchar(80) NOT NULL,
  `from_timings` time NOT NULL,
  `to_timings` time NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `days`, `from_timings`, `to_timings`, `updated_date`) VALUES
(1, 'Monday,Tuseday,Wednesday', '09:00:00', '06:00:00', '2018-01-23'),
(2, 'Thursday,Friday,Saturday', '10:00:00', '07:00:00', '2018-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Desciption` longtext NOT NULL,
  `S_Cost` double NOT NULL,
  `S_Type` varchar(60) NOT NULL,
  `S_Duration` varchar(20) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`S_ID`, `Desciption`, `S_Cost`, `S_Type`, `S_Duration`) VALUES
(5, 'repair a body parts', 1000, 'vehicle refinishing', '2 days'),
(6, 'makes break condition correct', 10000, 'brake and transmission ', '3 days'),
(7, 'change the parts', 2000, 'vehicle inspections', '5 days'),
(14, 'Cost depends', 5000, 'other', '5 days'),
(18, 'service', 2000, 'body repair ', '5 days');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE IF NOT EXISTS `service_request` (
  `Service_rqst_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `V_ID` int(11) NOT NULL,
  `Reqst_Date` date NOT NULL,
  `Service_Type` varchar(60) NOT NULL,
  `Extra_Service` varchar(50) NOT NULL,
  `Req_Ser_For` datetime NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Service_rqst_id`),
  KEY `User_ID` (`User_ID`),
  KEY `V_ID` (`V_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`Service_rqst_id`, `User_ID`, `V_ID`, `Reqst_Date`, `Service_Type`, `Extra_Service`, `Req_Ser_For`, `Status`) VALUES
(26, 30, 27, '2018-03-27', 'other', 'washing', '2018-03-29 10:00:00', 'service_provided');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` bigint(20) NOT NULL,
  `Worker_Type` varchar(50) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Address`, `Contact_no`, `Worker_Type`, `E_Mail`, `Password`) VALUES
(1, 'mammuty', 'kasargod', 9933445522, 'body repair technicians', 'mamu@gmail.com', '123'),
(2, 'Dulquer', 'kochi', 1122334455, 'brake and transmission technician', 'Dq@gmail.com', '123'),
(3, 'Kholi', 'Mumbai', 2211334455, 'brake and transmission technician', 'vk@gmail.com', '123'),
(4, 'bathi', 'madav', 9933445544, 'body repair technicians', 'bathi@gmail.com', '123'),
(5, 'roy', 'puttur', 9977665544, 'brake and transmission technician', 'ry@gmail.com', '123'),
(6, 'sameer', 'madav', 8890675432, 'vehicle inspectors', 'sameer@gmail.com', '123'),
(7, 'Hrithick', 'Baroda', 7766554433, 'body repair technicians', 'Hr@gmail.com', '123'),
(8, 'Dhanush', 'Chennai', 8877996655, 'brake and transmission technician', 'Dh@gmail.com', '123'),
(9, 'Jayasuriya', 'Kochi', 9955667788, 'vehicle inspectors', 'Js@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `staff_salary`
--

CREATE TABLE IF NOT EXISTS `staff_salary` (
  `Salary_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `Salary` double NOT NULL,
  PRIMARY KEY (`Salary_ID`),
  KEY `Staff_ID` (`Staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` bigint(20) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Reg_date` date NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Full_Name`, `Image`, `Address`, `Contact_no`, `E_Mail`, `Gender`, `Password`, `Reg_date`) VALUES
(29, 'kaleel rashi', '32959-1468690502420.jpg', 'puttur', 7349270415, 'rs@gmail.com', 'Male', '123', '2018-03-27'),
(30, 'simak', '73537-1468716428625.jpg', 'sullia', 9845942068, 'sm@gmail.com', 'Male', '123', '2018-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `V_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `V_No` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `V_Type` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `model_no` int(11) NOT NULL,
  PRIMARY KEY (`V_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`V_ID`, `User_ID`, `V_No`, `Brand`, `V_Type`, `Model`, `model_no`) VALUES
(27, 30, 'KA 21 S 9923', 'four wheeler', 'benz', 'BNX12', 2017),
(28, 30, 'KA 21 S 9923', 'four wheeler', 'benz', 'BNX12', 2017),
(29, 30, 'KA 01 P 1996', 'four wheeler', 'bmw', 'BM23', 2015);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_work`
--
ALTER TABLE `assign_work`
  ADD CONSTRAINT `assign_work_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assign_work_ibfk_2` FOREIGN KEY (`Sreqst_ID`) REFERENCES `service_request` (`Service_rqst_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`Work_ID`) REFERENCES `assign_work` (`Work_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`billid`) REFERENCES `bill` (`billid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_request`
--
ALTER TABLE `service_request`
  ADD CONSTRAINT `service_request_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_request_ibfk_2` FOREIGN KEY (`V_ID`) REFERENCES `vehicle` (`V_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_salary`
--
ALTER TABLE `staff_salary`
  ADD CONSTRAINT `staff_salary_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
