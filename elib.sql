-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 06:43 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `book_copies` int(11) DEFAULT NULL,
  `publisher_name` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `author`, `edition`, `book_copies`, `publisher_name`, `status`, `dept`) VALUES
(15, 'Database System Concepts', 'Abraham Silberschatz', 'Sixth Edition', 15, 'McGrawHillEducation', 'New', 'IT'),
(16, 'Introduction to Automata Theory', 'John E. Hopcroft', 'Third Edition', 20, 'Pearson Education', 'Archive', 'IT'),
(17, 'Fundamentals of Computer Algorithms', 'Ellis Horotwitz', 'Second Edition', 35, 'Universities Press', 'Damage', 'IT'),
(18, 'Software Engineering', 'Roger S.Pressman', 'Seventh Edition', 3, 'McGraw Hill Internation', 'New', 'IT'),
(19, 'Managerial Economics', 'P L Mehta', 'NA', 25, 'Sultan Chand &  Sons', 'Lost', 'IT'),
(20, 'Programming in C', 'Pradip Dey & Manas Ghosh', 'Second Edition', 20, 'Oxford Higher Education', 'Old', 'IT'),
(21, 'Object Oriented Programming with C++', 'Sourav Sahay', 'Second Edition', 25, 'Oxford Higher Education', 'Old', 'IT'),
(22, 'The Complete Reference Java', 'Herbert Schildt', 'Seventh Edition', 30, 'Tata McGraw Hill ', 'Old', 'IT'),
(23, 'Programming the World Wide Web', 'Robert W. Sebesta', '', 22, 'Pearson', 'New', 'IT'),
(25, 'Book 1', 'Author 1', 'Edition 1', 10, 'Publisher 1', 'Archive', 'IT'),
(26, 'Book 2', 'Author 2', 'Edition 2', 10, 'Publisher 2', 'Archive', 'IT'),
(27, 'Book 3', 'Author 3', 'Edition 3', 10, 'Publisher 3', 'Archive', 'IT'),
(28, 'Book 4', 'Author 4', 'Edition 4', 10, 'Publisher 4', 'Archive', 'IT'),
(29, 'Book 5', 'Author 5', 'Edition 5', 10, 'Publisher 5', 'Archive', 'IT'),
(30, 'test', 'test', 'test', 100, 'test', 'old', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`borrow_id`),
  KEY `borrowerid` (`member_id`),
  KEY `borrowid` (`borrow_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=489 ;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`) VALUES
(484, 737055, '2014-03-20 23:50:27', '21/03/2014'),
(483, 737055, '2014-03-20 23:49:34', '21/03/2014'),
(482, 737060, '2014-03-20 23:38:22', '03/01/2014'),
(485, 737073, '2016-09-11 10:41:19', '15/09/2016'),
(486, 737074, '2016-09-15 15:16:52', '23/09/2016'),
(487, 737060, '2016-09-24 11:26:40', '29/09/2016'),
(488, 737060, '2016-09-24 11:27:30', '27/10/2016');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE IF NOT EXISTS `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  PRIMARY KEY (`borrow_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(164, 16, 484, 'returned', '2016-09-24 11:27:53'),
(162, 15, 482, 'returned', '2016-09-24 11:22:12'),
(163, 15, 483, 'returned', '2014-03-21 00:30:51'),
(165, 15, 485, 'pending', ''),
(166, 15, 486, 'pending', ''),
(167, 15, 487, 'returned', '2016-09-24 11:27:44'),
(168, 15, 488, 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=737502 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type`, `dept`, `year`, `status`) VALUES
(737050, 'charan', 'charan', 'Sai', 'Charan', 'Male', 'balapur', '87975457', 'Student', 'IT', 'BE 3/4', 'Active'),
(737052, 'nikhil', 'nikhil', 'Nikhil ', 'Varun Raj', 'Male', 'LB Nagar', '879784554', 'Student', 'IT', 'BE 3/4', 'Active'),
(737053, 'vijandra', 'vijandra', 'Vijandra', 'Reddy', 'Male', 'Amberpet', '8885641743', 'Student', 'IT', 'BE 3/4', 'Active'),
(737055, 'suresh', 'suresh', 'Suresh', 'Gunda', 'Male', 'Balapur', '9701034141', 'Student', 'IT', 'BE 3/4', 'Active'),
(737060, 'siddhartha', 'siddhartha', 'Siddhartha', 'Yelavarthi', 'Male', 'Nagaram', '9704994700', 'Student', 'IT', 'BE 3/4', 'Active'),
(737073, 'chandu', 'chandu', 'Chandu', 'Chiluka', 'Male', 'Badangpet', '9154413259', 'Student', 'IT', 'BE 3/4', 'Active'),
(737074, 'ashish', 'ashish', 'Ashish', 'Kongati', 'Male', 'Badangpet', '7702500213', 'Student', 'IT', 'BE 3/4', 'Active'),
(737079, 'raheem', 'raheem', 'Raheem', 'Mohammed', 'Male', 'Santhosh Nagar', '9505503003', 'Student', 'IT', 'BE 3/4', 'Active'),
(737088, 'samuel', 'samuel', 'Samuel', 'Snehith', 'Male', 'Madhapur', '9581743314', 'Student', 'IT', 'BE 3/4', 'banned'),
(737500, 'karthick', 'karthick', 'Karthick', 'Pisupati', 'Male', 'hyderabad', '9876465874', 'Teacher', 'IT', 'Faculty', 'Active'),
(737501, 'test', 'test', 'test', 'test', 'male', 'test', '9876543210', 'student', 'CSE', 'BE 3/4', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(2, 'Teacher'),
(22, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(2, 'admin', 'admin', 'john', 'smith'),
(3, 'member', 'member', 'adam', 'smith'),
(4, 'test', 'test', 'Test', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
