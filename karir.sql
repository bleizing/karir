-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 10:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karir`
--

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `level_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_user_nama` varchar(20) NOT NULL,
  PRIMARY KEY (`level_user_id`),
  UNIQUE KEY `level_user_nama` (`level_user_nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`level_user_id`, `level_user_nama`) VALUES
(1, 'Administrator'),
(4, 'Employer'),
(3, 'Jobseeker'),
(2, 'Prodi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_aktif` int(1) NOT NULL DEFAULT '1',
  `user_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `level_user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_aktif`, `user_ts`, `user_username`, `user_password`, `level_user_id`) VALUES
(1, 1, '2017-09-25 05:13:11', 'admin', 'admin', 1),
(2, 1, '2017-09-25 05:13:11', 'dosen', 'dosen', 2),
(3, 1, '2017-09-25 05:13:11', 'desi', 'desi', 3),
(4, 1, '2017-09-25 05:13:11', 'inagro', 'inagro', 4),
(5, 1, '2017-09-25 05:13:11', 'testing', 'testinggg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
