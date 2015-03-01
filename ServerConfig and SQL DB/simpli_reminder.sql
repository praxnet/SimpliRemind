-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2015 at 05:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpli_reminder`
--
CREATE DATABASE IF NOT EXISTS `simpli_reminder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simpli_reminder`;

-- --------------------------------------------------------

--
-- Table structure for table `alarmmessages`
--

CREATE TABLE IF NOT EXISTS `alarmmessages` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CourseID` int(3) NOT NULL,
  `Status` int(1) NOT NULL,
  `CourseMessages` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `alarmmessages`
--

INSERT INTO `alarmmessages` (`ID`, `CourseID`, `Status`, `CourseMessages`) VALUES
(1, 1, 1, 'Welcome mate...!! you have joined the course..!!'),
(2, 1, 2, 'Its always good to have a head start in the course completion..!'),
(3, 1, 2, 'Well beginning is half done...I mean keep it up..!'),
(4, 1, 2, 'Ok Dear, So you have started the course, Be ahead always..!!\r\n'),
(5, 1, 3, 'Humm... Its a mid way marathon, stretch some more and be with \r\n\r\nothers..!! '),
(6, 1, 3, 'Where are you dear now a days...! don''t loose track you need to \r\n\r\nspeed it up..!!'),
(7, 1, 3, 'I hope you are doing well, But to start something and loosing \r\n\r\nfocus from it is not allowed here...be back to your course.!'),
(8, 1, 4, 'I think you have been left behind from others a bit more, don''t \r\n\r\nwaste much time be with others m'),
(9, 1, 4, 'Can I have your girl friends number just want to tell her to \r\n\r\nbother you less so that you can focus on the course you opted \r\n\r\nfor..!\r\n'),
(10, 1, 4, 'Its bad to start something and not doing it later, I hope you \r\n\r\nhave not started this course just for a fashion, try to complete \r\n\r\nit ASAP..!!'),
(11, 1, 1, 'Does people has became so lazy now a days they don''t even \r\n\r\nremember their dreams and course they have opted for.!!'),
(12, 1, 5, 'You are a keeper of your promises..!! A man of wards..!! You have \r\n\r\ncompleted the course successfully..!');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `CourseID` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(100) NOT NULL,
  `CourseTotalWeek` int(2) NOT NULL,
  `CourseCategory` varchar(100) NOT NULL,
  `CourseLevel` varchar(20) NOT NULL,
  PRIMARY KEY (`CourseID`),
  UNIQUE KEY `CourseName` (`CourseName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `CourseTotalWeek`, `CourseCategory`, `CourseLevel`) VALUES
(1, 'Data Structure and Alglorithm', 12, 'Computer Science', 'Beginner'),
(2, 'Computer Networks', 10, 'Computer Science', 'Expert'),
(3, 'Creative Learning', 8, 'Lifestyle', 'Beginner'),
(4, 'Cryptography', 10, 'Computer Science', 'Expert'),
(5, 'Political Science', 6, 'Social Science', 'Beginner');

-- --------------------------------------------------------

--
-- Table structure for table `gcm_users`
--

CREATE TABLE IF NOT EXISTS `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gcm_users`
--

INSERT INTO `gcm_users` (`id`, `gcm_regid`, `name`, `email`, `created_at`) VALUES
(7, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'mak', 'jayjinendra', '2015-03-01 01:34:30'),
(8, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'agriculture', 'oditsits', '2015-03-01 01:52:01'),
(9, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'gajanan', 'gajanan', '2015-03-01 02:33:44'),
(10, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'lakhman bapu ni jay', 'jay naklank', '2015-03-01 02:45:14'),
(11, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'natu bha zala', 'zala555', '2015-03-01 02:58:04'),
(12, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'pani na ghoda vada mama', '#mamanimoj', '2015-03-01 03:06:08'),
(13, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'halo have', 'halo', '2015-03-01 03:17:14'),
(14, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'ttty', 'yyyyt', '2015-03-01 04:15:24'),
(15, 'APA91bHmzL0J16JPr-o48vH_4hvjKBpWr4y-pbApCd33u6pfm9CiqDCSA3y4CnAZPM6EMaYRO1V87tY9B7S3e8D21yHiriLCmd9fbeWPu3VOLWEuRKdEwKYnRV8wdC4xc0IC-m9JSOh-2i7bnbetM4nIbL3hIv1vJfBjBVCiaqu91IZR5BfLibk', 'jagabapa', 'jay mogal', '2015-03-01 04:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SecurityQuestion` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `BirthDate` date NOT NULL,
  `ContactNo` bigint(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`UserID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `MiddleName`, `LastName`, `UserName`, `Password`, `SecurityQuestion`, `Answer`, `EmailID`, `Gender`, `BirthDate`, `ContactNo`, `Address`, `City`, `State`, `Country`, `Role`, `Status`) VALUES
(1, 'brijesh123', 'dhirajlal123', 'akbari123', 'brijesh', 'brijesh', '0', '0', 'brijeshakbari@gmail.ocm', 0, '0000-00-00', 9033994874, 'shri ranchhodnagar society', 'rajkot', 'gujarat', 'india', 'admin', 'active'),
(2, 'dharmesh', 'dhirajlal', 'dobariya', 'dharmesh', 'ddd', 'what is your birthplace?', 'rajkot', 'dharmeshdobariya@hotmail.com', 0, '0000-00-00', 9979908535, 'shakti society rajkot', 'rajkot', 'gujarat', 'india', 'student', 'active'),
(8, 'PRASHANT', 'PRASHANT', 'PRASHANT', 'PRASHANT', 'PRASHANT', 'PRASHANT', 'PRASHANT', 'PRASHANT@GMAIL.COM', 0, '0000-00-00', 9999999999, 'brijesh', 'brijesh', 'brijesh', 'brijesh', 'student', ''),
(9, 'mayank', 'shah', 'mayank', 'mak', '111111', 'bdate', '111111', 'mak@gmail.com', 0, '0000-00-00', 9999999999, 'kjk', 'rajkot', 'rajkot', 'india', 'student', ''),
(11, 'Hardik', 'Ravat', 'Ravi', 'hardik', 'hardik', 'birth place?', 'rajkot', 'hardik@gmail.com', 1, '2015-03-03', 999999999, 'Rajkot', 'Rajkot', 'Rajkot', 'Rajkot', 'student', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `usercourseinfo`
--

CREATE TABLE IF NOT EXISTS `usercourseinfo` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `UserID` int(5) NOT NULL,
  `CourseID` int(3) NOT NULL,
  `CurrentCourseWeek` int(2) NOT NULL,
  `UserCurrentCourseWeek` int(2) NOT NULL,
  `UserCourseStatus` int(1) NOT NULL,
  `UserInterestLevel` int(1) NOT NULL,
  `UserAlarmLevel` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usercourseinfo`
--

INSERT INTO `usercourseinfo` (`ID`, `UserID`, `CourseID`, `CurrentCourseWeek`, `UserCurrentCourseWeek`, `UserCourseStatus`, `UserInterestLevel`, `UserAlarmLevel`) VALUES
(1, 1, 2, 5, 3, 0, 1, 0),
(2, 2, 2, 5, 1, 0, 1, 0),
(4, 9, 1, 3, 1, 0, 1, 0),
(5, 8, 1, 3, 3, 0, 1, 0),
(6, 11, 2, 5, 4, 0, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
