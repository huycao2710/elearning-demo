-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2013 at 07:44 AM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `class`
--



-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `cys` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--



-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `incharge` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `department`
--



-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `files`
--



-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `student`
--



-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--



-- --------------------------------------------------------

--
-- Table structure for table `sws`
--

CREATE TABLE IF NOT EXISTS `sws` (
  `sws_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`sws_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sws`
--


-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE IF NOT EXISTS `sy` (
  `sy_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(100) NOT NULL,
  PRIMARY KEY (`sy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(3, '2012-2013'),
(5, 't');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher`
--



-- --------------------------------------------------------

--
-- Table structure for table `teacher_student`
--

CREATE TABLE IF NOT EXISTS `teacher_student` (
  `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teacher_student`
--



-- --------------------------------------------------------

--
-- Table structure for table `teacher_suject`
--

CREATE TABLE IF NOT EXISTS `teacher_suject` (
  `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `teacher_suject`
--



-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
