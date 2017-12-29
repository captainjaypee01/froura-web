-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 10:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `froura`
--
CREATE DATABASE IF NOT EXISTS `froura` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `froura`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` enum('m','f') NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_admin`
--

TRUNCATE TABLE `tbl_admin`;
--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `email`, `contact`, `birthday`, `gender`, `registered_date`, `updated_at`, `status`) VALUES
(1, 'John Paul', 'Buhain', 'Dala', 'captainjaypee01', '601f1889667efaebb33b8c12572835da3f027f78', 'jaypeedala31@gmail.com', '+639164234614', '1999-01-30 16:00:00', 'm', '2017-10-18 21:11:38', '2017-11-23 08:23:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

DROP TABLE IF EXISTS `tbl_announcement`;
CREATE TABLE IF NOT EXISTS `tbl_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `time_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `announcement_type` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_announcement`
--

TRUNCATE TABLE `tbl_announcement`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_details`
--

DROP TABLE IF EXISTS `tbl_booking_details`;
CREATE TABLE IF NOT EXISTS `tbl_booking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) DEFAULT NULL,
  `passenger_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `start_destination` text,
  `end_destination` text,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `expected_time` datetime DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK` (`driver_id`,`passenger_id`,`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_booking_details`
--

TRUNCATE TABLE `tbl_booking_details`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

DROP TABLE IF EXISTS `tbl_driver`;
CREATE TABLE IF NOT EXISTS `tbl_driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` enum('m','f') NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `bio` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK` (`vehicle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_driver`
--

TRUNCATE TABLE `tbl_driver`;
--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `email`, `contact`, `birthday`, `gender`, `nickname`, `bio`, `address`, `registered_date`, `status`, `is_verified`, `verification_code`, `updated_at`, `vehicle_id`) VALUES
(1, 'John Paul', 'Buhain', 'Dala', 'jbdala', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'jaypeedala31@gmail.com', '+639164234614', '1999-01-30 16:00:00', 'm', 'JP', 'HANDSOME', '', '2017-10-25 03:16:33', 1, 1, '70exfDIz9MaWVZB53Jcg', '2017-10-25 03:26:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `feedback_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_feedback`
--

TRUNCATE TABLE `tbl_feedback`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_transcript`
--

DROP TABLE IF EXISTS `tbl_file_transcript`;
CREATE TABLE IF NOT EXISTS `tbl_file_transcript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `file_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `driver_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK` (`driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_file_transcript`
--

TRUNCATE TABLE `tbl_file_transcript`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

DROP TABLE IF EXISTS `tbl_logs`;
CREATE TABLE IF NOT EXISTS `tbl_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `log_type` int(11) NOT NULL,
  `log_name` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_logs`
--

TRUNCATE TABLE `tbl_logs`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_passenger`
--

DROP TABLE IF EXISTS `tbl_passenger`;
CREATE TABLE IF NOT EXISTS `tbl_passenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` enum('m','f') NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `bio` varchar(256) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_code` varchar(100) NOT NULL,
  `tc_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK` (`tc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_passenger`
--

TRUNCATE TABLE `tbl_passenger`;
--
-- Dumping data for table `tbl_passenger`
--

INSERT INTO `tbl_passenger` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `email`, `contact`, `birthday`, `gender`, `nickname`, `bio`, `registered_date`, `status`, `updated_at`, `is_verified`, `verification_code`, `tc_id`) VALUES
(1, 'Kendrick', 'Javier', 'Cosca', 'ken', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'witwiw0034@gmail.com', '09167983610', '1989-12-31 16:00:00', 'm', '', '', '2017-10-10 23:34:52', 0, '0000-00-00 00:00:00', 0, 'SyvFK7R91J', 0),
(3, 'John Paul', 'Dala', 'Dala', 'jbdala', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'jaypeedala1999@gmail.com', '09164234614', '2017-11-17 16:00:00', 'm', 'Jaypee', 'I got the stars', '2017-10-19 15:30:00', 1, '2017-11-18 20:51:03', 1, '', 0),
(4, 'Jasmin Elaine', '', 'Gutierrez', 'jas', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 'sample@gmail.com', '09164234614', '1998-03-14 16:00:00', 'f', '', '', '2017-10-19 22:33:51', 1, '0000-00-00 00:00:00', 0, 's0fcbQeTRPDGmHSB6a3A', 0),
(11, 'John Paul', 'Dala', 'Dala', 'jbdala123', '601f1889667efaebb33b8c12572835da3f027f78', 'jaypeedala31@gmail.com', '09164234614', '2017-11-17 16:00:00', 'm', 'Hmmm', 'Huwaaaaw', '2017-11-18 21:30:40', 1, '2017-11-18 22:44:31', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float(10,2) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK` (`booking_id`,`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_payment`
--

TRUNCATE TABLE `tbl_payment`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

DROP TABLE IF EXISTS `tbl_reports`;
CREATE TABLE IF NOT EXISTS `tbl_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `violation_id` int(11) NOT NULL,
  `file_transcript_id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `booking_details_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK` (`payment_id`,`violation_id`,`file_transcript_id`,`announcement_id`,`booking_details_id`,`reservation_id`,`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_reports`
--

TRUNCATE TABLE `tbl_reports`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

DROP TABLE IF EXISTS `tbl_reservation`;
CREATE TABLE IF NOT EXISTS `tbl_reservation` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `passenger_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `start_destination` varchar(255) NOT NULL,
  `end_destination` varchar(255) NOT NULL,
  `start_id` varchar(255) NOT NULL,
  `end_id` varchar(255) NOT NULL,
  `start_lat` double(11,8) NOT NULL,
  `start_lng` double(11,8) NOT NULL,
  `end_lat` double(11,8) NOT NULL,
  `end_lng` double(11,8) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `reservation_date` timestamp NULL DEFAULT NULL,
  `price` double(11,2) NOT NULL,
  `notes` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_reservation`
--

TRUNCATE TABLE `tbl_reservation`;
--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`id`, `passenger_id`, `driver_id`, `start_destination`, `end_destination`, `start_id`, `end_id`, `start_lat`, `start_lng`, `end_lat`, `end_lng`, `duration`, `reservation_date`, `price`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 'Laguna', 'Manila', '', '', 0.00000000, 0.00000000, 0.00000000, 0.00000000, '0.00', '2018-01-31 02:00:00', 500.00, 'Ayoko ng Late', 5, '2017-11-18 22:15:00', '2017-11-23 08:08:48'),
(2, 11, 1, 'FEU Institute of Technology', '1627 C. Aguila St. San Miguel, Manila', '', '', 0.00000000, 0.00000000, 0.00000000, 0.00000000, '0.00', '2017-11-22 07:00:00', 67.70, 'Dapat Malamig Aircon ', 4, '2017-11-19 00:00:42', '2017-11-23 08:08:51'),
(4, 3, 0, 'FEU Institute of Technology, P. Paredes, Manila, NCR, Philippines', 'SM City Manila, Manila, NCR, Philippines', 'ChIJWbJOsfjJlzMRjgaarMoSTa0', 'ChIJkQYJ4SHKlzMRV0P6W0iRZGs', 14.60416120, 120.98860660, 14.58969250, 120.98310710, '9.6mins', '2017-11-20 11:00:00', 71.40, 'Hehehehehe Trip lang', 1, '2017-11-19 15:01:56', '2017-11-23 05:11:21'),
(5, 11, 1, 'FEU Institute of Technology, P. Paredes, Manila, NCR, Philippines', 'UST, España Boulevard, Manila, NCR, Philippines', 'ChIJWbJOsfjJlzMRjgaarMoSTa0', 'ChIJYc4eMf7JlzMRyXs49PI88f8', 14.60416120, 120.98860660, 14.60967670, 120.98964070, '7.800000000000001mins', '2017-11-24 06:30:00', 64.75, 'Sample notes', 2, '2017-11-23 04:55:13', '2017-11-23 08:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trusted_contact`
--

DROP TABLE IF EXISTS `tbl_trusted_contact`;
CREATE TABLE IF NOT EXISTS `tbl_trusted_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` enum('m','f') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_code` varchar(100) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_trusted_contact`
--

TRUNCATE TABLE `tbl_trusted_contact`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

DROP TABLE IF EXISTS `tbl_vehicle`;
CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `plate_number` varchar(15) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_vehicle`
--

TRUNCATE TABLE `tbl_vehicle`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
