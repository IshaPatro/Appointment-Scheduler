-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 12:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookId` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phn` int(11) NOT NULL,
  `service` text NOT NULL,
  `appointer` text NOT NULL,
  `appointer_id` int(11) NOT NULL,
  `adate` date NOT NULL,
  `atime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookId`, `user_id`, `title`, `name`, `gender`, `dob`, `address`, `email`, `phn`, `service`, `appointer`, `appointer_id`, `adate`, `atime`) VALUES
(0, 1, 'Mr.', 'atreya rao', 'Male', '2020-06-03', 'fadhk ahahha hhjjagg', 'atreyarao70@yahoo.com', 2147483647, 'Doctor', 'abc1', 1, '2020-06-10', '02:53:00.000000'),
(1, 1, 'Mr.', 'atreya rao', 'Male', '2020-06-19', 'fadhk ahahha hhjjagg', 'atreyarao70@yahoo.com', 2147483647, 'Doctor', 'abc2', 7, '2020-06-18', '02:53:00.000000'),
(2, 1, 'Mr.', 'atreya rao', 'Male', '2020-06-17', 'fadhk ahahha hhjjagg', 'dsfds@g.nj', 2147483647, 'Teacher', 'abc3', 0, '2020-06-11', '06:53:00.000000'),
(3, 1, 'Mr.', 'punisher', 'Male', '2020-06-19', 'as', 'punis@yahoo.com', 2147483647, 'Teacher', 'Ms.Elizabeth Clincoln', 8, '2020-06-18', '06:53:00.000000'),
(4, 5, 'Ms.', 'Isha Patro', 'Male', '2020-06-17', 'Berhampur, Odisha', 'isha.patro.215@gmail.com', 987654321, 'Doctor', 'Dr.Richa', 7, '2020-06-11', '11:53:00.000000'),
(5, 5, 'Mr.', 'Isha Patro', 'Male', '2020-06-18', 'Berhampur, Odisha', 'ishapatro21@gmail.com', 987654321, 'Doctor', 'Dr.Richa', 7, '2020-06-07', '06:53:00.000000'),
(6, 5, 'Ms.', 'Isha Patro', 'Female', '2020-06-25', 'Berhampur, Odisha', 'isha.patro.215@gmail.com', 987654321, 'Doctor', 'Dr.Richa', 7, '2020-06-28', '11:53:00.000000'),
(7, 5, '', 'Isha Patro', '', '2020-06-05', 'Berhampur, Odisha', 'ishapatro21@gmail.com', 987654321, 'Doctor', 'Dr.Khusi Nehra', 27, '2020-06-04', '05:00:00.000000'),
(8, 5, 'Mr.', 'Isha Patro', 'Male', '2015-02-15', 'Berhampur, Odisha', 'isha@qwe.com', 987654321, 'Consultant', 'Mr.Ram Kapoor', 21, '2020-06-04', '13:53:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `clientdata`
--

CREATE TABLE `clientdata` (
  `Id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Service` text NOT NULL,
  `Experience` int(50) NOT NULL,
  `Rating` int(5) NOT NULL,
  `TimeSlot1` time(4) NOT NULL,
  `TimeSlot2` time(4) NOT NULL,
  `TimeSlot3` time(4) NOT NULL,
  `TimeSlot4` time(4) NOT NULL,
  `TimeSlot5` time(4) NOT NULL,
  `TimeSlot6` time(4) NOT NULL,
  `TimeSlot7` time(4) NOT NULL,
  `TimeSlot8` time(4) NOT NULL,
  `TimeSlot9` time(4) NOT NULL,
  `Address` text NOT NULL,
  `Image` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientdata`
--

INSERT INTO `clientdata` (`Id`, `Name`, `Service`, `Experience`, `Rating`, `TimeSlot1`, `TimeSlot2`, `TimeSlot3`, `TimeSlot4`, `TimeSlot5`, `TimeSlot6`, `TimeSlot7`, `TimeSlot8`, `TimeSlot9`, `Address`, `Image`, `Username`, `Password`, `email`) VALUES
(1, 'Dr.Steve ', 'Doctor', 10, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(2, 'Mr.Aditya Kumar', 'Policeman', 7, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(3, 'Ms.Monica Roy', 'Teacher', 4, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(4, 'Ms.Neha Chinoy', 'Lawyer', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '18:53:50.2300', '06:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(5, 'Mr.Ken Adam', 'Electrician', 4, 4, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(6, 'Mr.David ', 'Colleagues', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '06:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(7, 'Dr.Richa', 'Lawyer', 12, 5, '01:00:00.0000', '03:53:00.0000', '06:53:00.0000', '09:53:00.0000', '11:53:00.0000', '02:53:00.0000', '10:53:00.0000', '06:53:00.0000', '03:53:00.0000', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(8, 'Ms.Elizabeth Clincoln', 'Teacher', 7, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '06:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(9, 'Mr.Rahul Raichand', 'Artist', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '13:53:49.7000', '18:53:50.2300', '02:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(10, 'Ms.Soniya Mehta', 'Lawyer', 8, 5, '01:00:49.4740', '02:53:49.1020', '03:53:49.2290', '04:53:49.4360', '05:53:49.8690', '06:53:49.7000', '07:53:50.2300', '08:53:50.6390', '09:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(11, 'Mr.Simphson', 'Esthetician', 4, 4, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '06:53:49.7000', '10:53:50.2300', '08:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(12, 'Ms.Christina', 'Colleagues', 8, 5, '01:00:49.4740', '03:53:49.1020', '04:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '18:53:50.2300', '19:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(13, 'Mr.Thomas Hardy', 'Plumber', 9, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '07:53:50.2300', '06:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(14, 'Ms.Hanna Mourie', 'Consultant', 11, 5, '01:00:49.4740', '01:30:49.1020', '02:00:49.2290', '02:30:40.4740', '03:00:40.4747', '03:30:40.0000', '04:00:40.0000', '04:30:59.0080', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(15, 'Mr.Antonio Morie', 'Policeman', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '07:53:50.2300', '08:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(16, 'Mr.Howard Cooper', 'Electrician', 8, 5, '01:00:49.4740', '02:53:49.1020', '03:53:49.2290', '04:53:49.4360', '05:53:49.8690', '06:53:49.7000', '07:53:50.2300', '08:53:50.6390', '09:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(17, 'Mr.Ken ', 'Esthetician', 3, 4, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(18, 'Ms.Catherine', 'Teacher', 12, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(19, 'Mr.Michael', 'Plumber', 4, 4, '01:00:49.4740', '04:53:49.1020', '05:53:49.2290', '08:53:49.4360', '10:53:49.8690', '14:53:49.7000', '18:53:50.2300', '19:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(20, 'Mr.Hari Kumar', 'Policeman', 11, 3, '01:00:49.4740', '02:53:49.1020', '03:53:49.2290', '04:53:49.4360', '05:53:49.8690', '06:53:49.7000', '07:53:50.2300', '08:53:50.6390', '09:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(21, 'Mr.Ram Kapoor', 'Consultant', 14, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '13:53:49.7000', '15:53:50.2300', '17:53:50.6390', '19:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(22, 'Mr.Manoj Kumar', 'Teacher', 7, 5, '01:00:49.4740', '03:53:49.1020', '05:53:49.2290', '07:53:49.4360', '10:53:49.8690', '06:53:49.7000', '07:53:50.2300', '02:53:50.6390', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(23, 'Mr.Ann Devon', 'Lawyer', 15, 5, '01:00:49.4740', '03:53:49.1020', '05:53:49.2290', '07:53:49.4360', '10:53:49.8690', '14:53:49.7000', '10:53:50.2300', '02:53:50.6390', '05:00:40.4500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(24, 'Ms.Anna Dsouza', 'Artist', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '18:53:50.2300', '19:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(25, 'Ms.Roohi gautam', 'Colleagues', 6, 5, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '07:53:50.2300', '02:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(26, 'Ms.Meena Mathur', 'Consultant', 15, 4, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '11:53:49.8690', '14:53:49.7000', '10:53:50.2300', '06:53:50.6390', '15:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(27, 'Dr.Khusi Nehra', 'Doctor', 20, 5, '01:00:49.4740', '01:30:49.1020', '02:00:49.2290', '02:30:49.4360', '03:00:49.8690', '03:30:49.7000', '04:00:50.2300', '04:30:50.6390', '05:00:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(26, 'Mr.Harry', 'Plumber', 5, 4, '01:00:49.4740', '03:53:49.1020', '06:53:49.2290', '09:53:49.4360', '03:00:49.8690', '14:53:49.7000', '18:53:50.2300', '02:53:50.6390', '19:53:50.2500', 'B Wing, Manas, Devidas Road Extension, Eksar, Borivali (west)', '0', '', '', ''),
(28, 'Isha', 'Artist', 2, 0, '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', '12:00:00.0000', 'Berhampur, Odisha', '', 'Isha2', '123qwe123', 'Isha2@gm.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `password`, `email`) VALUES
(1, 'admin', 'admin', NULL),
(2, 'atreya', '1234', NULL),
(3, 'as', 'as', 'atreyarao70@yahoo.com'),
(4, 'admin', 'as', 'atreyarao70@yahoo.com'),
(5, 'Isha', '123qwe123', 'isha.patro.215@gmail.com'),
(6, 'Isha', '123qwe123', 'isha.patro.215@gmail.com'),
(7, 'Isha', '123qwe123', 'isha.patro.21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `scheduler`
--

CREATE TABLE `scheduler` (
  `Id` int(11) NOT NULL DEFAULT 0,
  `ClientId` int(11) DEFAULT NULL,
  `apDate` date NOT NULL,
  `Slot1` int(11) NOT NULL DEFAULT 0,
  `Slot2` int(11) NOT NULL DEFAULT 0,
  `Slot3` int(11) NOT NULL DEFAULT 0,
  `Slot4` int(11) NOT NULL DEFAULT 0,
  `Slot5` int(11) NOT NULL DEFAULT 0,
  `Slot6` int(11) NOT NULL DEFAULT 0,
  `Slot7` int(11) NOT NULL DEFAULT 0,
  `Slot8` int(11) NOT NULL DEFAULT 0,
  `Slot9` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduler`
--

INSERT INTO `scheduler` (`Id`, `ClientId`, `apDate`, `Slot1`, `Slot2`, `Slot3`, `Slot4`, `Slot5`, `Slot6`, `Slot7`, `Slot8`, `Slot9`) VALUES
(1, 1, '2020-06-18', 0, 1, 0, 0, 0, 0, 0, 0, 0),
(2, 21, '2020-06-11', 0, 0, 0, 0, 0, 0, 0, 1, 0),
(3, 8, '2020-06-11', 0, 0, 0, 0, 0, 0, 0, 1, 0),
(4, 7, '2020-06-28', 0, 0, 0, 0, 5, 0, 0, 0, 0),
(5, 27, '2020-06-04', 0, 0, 0, 0, 0, 0, 0, 0, 5),
(6, 21, '2020-06-04', 0, 0, 0, 0, 0, 5, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `scheduler`
--
ALTER TABLE `scheduler`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
