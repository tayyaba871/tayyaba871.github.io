-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2024 at 12:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HelpDesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `username`, `password`) VALUES
('', 'admin', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `app_msg` varchar(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `staff_reply` varchar(255) NOT NULL,
  `reply_date` date NOT NULL,
  `teachername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `app_msg`, `stud_id`, `staff_id`, `Department_id`, `staff_reply`, `reply_date`, `teachername`) VALUES
(1, 'projector issues', 112233, '1', 1, 'Approved', '2019-05-10', ''),
(2, 'Hi!', 112233, '1', 1, '', '0000-00-00', 'Fatima Shemmim'),
(20, 'hello:)', 112233, '4', 2, '', '0000-00-00', 'Abdi Hubsey');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `enq_id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `enq_msg` varchar(255) NOT NULL,
  `staff_id` int(255) NOT NULL,
  `stud_id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `com_date` date NOT NULL,
  `staff_reply` varchar(255) NOT NULL,
  `reply_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`enq_id`, `subject`, `enq_msg`, `staff_id`, `stud_id`, `dept`, `com_date`, `staff_reply`, `reply_date`) VALUES
(30, 'AC not working', 'AC is not working fine.', 1, '112233', '1', '2019-05-10', 'helloo', '2019-05-10'),
(31, 'Wifi', 'WIFI Slow', 0, '112233', '2', '2024-03-27', '', '0000-00-00'),
(32, 'AA', 'AA', 3, '112233', '1', '2024-04-18', '', '2024-04-18'),
(33, 'BB', 'BB', 3, '112233', '1', '2024-04-18', '', '2024-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Departmentid` int(11) NOT NULL,
  `Departmentname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Departmentid`, `Departmentname`) VALUES
(1, 'Computing'),
(2, 'Mechanical'),
(3, 'Electrical'),
(4, 'Business'),
(5, 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `presenter` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(223) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `department`, `presenter`, `venue`, `date`, `time`, `image`) VALUES
(1, 'Android Programming', 'Computing', 'Abdurrahman Maihula', 'Auditorium', '2019-05-03', '02:30:00', 'img/course-details.jpg'),
(2, 'cisco', 'Computing', 'A.B', 'Auditorium 2', '2019-06-06', '02:30:00', 'img/IMG_20180722_113404.jpg'),
(3, 'aa', 'Computing', 'aa', 'aa', '2024-04-10', '01:01:00', 'img/wallpaperflare.com_wallpaper (1).jpg'),
(4, 'bb', 'Engineering', 'bb', 'bb', '0001-12-01', '01:01:00', 'img/Freshers Party.jpg'),
(5, 'cc', 'Accountancy', 'cc', 'cc', '0003-03-03', '15:03:00', 'img/career-fair.jpg'),
(6, 'cc', 'Accountancy', 'cc', 'cc', '0003-03-03', '15:03:00', 'img/career-fair.jpg'),
(7, 'AA', 'Engineering', 'AA', 'AA', '0001-01-01', '11:01:00', 'img/wallpaperflare.com_wallpaper (1).jpg'),
(8, 'BB', 'Computing', 'BB', 'BB', '0011-11-11', '11:11:00', 'img/wallpaperflare.com_wallpaper (1).jpg'),
(9, 'BB', 'Computing', 'BB', 'BB', '0011-11-11', '11:11:00', 'img/wallpaperflare.com_wallpaper (1).jpg'),
(10, 'BB', 'Computing', 'BB', 'BB', '0011-11-11', '11:11:00', 'img/wallpaperflare.com_wallpaper (1).jpg'),
(11, 'CC', 'Computing', 'CC', 'CC', '0333-12-31', '00:33:00', 'img/wallpaperflare.com_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `Departmentid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Departmentid`, `fullname`, `email`, `phone_number`, `image`, `password`) VALUES
(1, 111, 'Tayyaba', 'tayyaba1@gmail.com', 444, '', '555');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `gender`, `dept`, `phone_number`, `email`, `password`) VALUES
(112233, 'Abdurrahman Maihula', 'Male', 'Computing', 0, 'aam@gmail.com', '11111'),
(22222, 'Musa Nuhu', 'Male', 'Accountancy', 0, 'aam@gmail.com', '22222'),
(1809913, 'janith', 'Male', 'Computing', 0, 'hdfxgcjkl@ghjk', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `Departmentid` int(11) NOT NULL,
  `teachername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `Departmentid`, `teachername`) VALUES
(1, 1, 'Fatima Shemmim'),
(2, 1, 'Ibtisam Mogul'),
(3, 1, 'Abdurrahman Maihula'),
(4, 1, 'Abdi Hubsey'),
(5, 2, 'Yaqub Mogul'),
(6, 2, 'Shimna Shafeek'),
(7, 3, 'Poonam Mund'),
(8, 3, 'Vidya Ragesh'),
(9, 2, 'Ben Alex'),
(10, 3, 'Kelvin John'),
(11, 4, 'Asma '),
(12, 4, 'Abdi'),
(13, 4, 'Luvdeep kaur'),
(14, 4, 'Marie Zufta'),
(15, 5, 'Karthika'),
(16, 5, 'Muhhanaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD UNIQUE KEY `app_no` (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Departmentid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `Departmentid` (`Departmentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `enq_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Departmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `Departmentid` FOREIGN KEY (`Departmentid`) REFERENCES `department` (`Departmentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
