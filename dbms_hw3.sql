-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 01:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_hw3`
--
CREATE DATABASE IF NOT EXISTS `dbms_hw3` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `dbms_hw3`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `B_ID` int(11) NOT NULL,
  `B_name` varchar(100) DEFAULT NULL,
  `P_ID` int(11) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `Author` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`B_ID`, `B_name`, `P_ID`, `Price`, `ISBN`, `Author`) VALUES
(1, 'Designing with Data', 1, 458, '9789864769247', 'Rochelle King'),
(2, 'Programming iOS 12', 1, 2533, '9781492044635', 'Matt Neuburg'),
(3, 'Azure Analytics', 1, 537, '9789864769209', 'Zoiner Tejada'),
(4, 'Mastering Python for Networking and Security', 2, 1366, '9781788992510', 'Jose Manuel Ortega'),
(5, 'Python Deep Learning Projects', 2, 1507, '9781788997096', 'Rahul Kumar, Matthew Lamons'),
(6, 'Mastering PostgreSQL 11', 2, 1366, '9781789537819', 'Hans-Jurgen Schonig'),
(7, 'Applied Natural Language Processing with Python', 3, 1201, '9781484237328', 'Taweh Beysolow II'),
(8, 'Python Descriptors', 3, 1482, '9781484237267', 'Jacob Zimmerman'),
(9, 'Building Scalable Cisco Networks', 4, 199, '9781578702282', 'Catherine Paquet, Diane Teare'),
(10, 'Managing Cisco Network Security', 4, 1050, '9781578701032', 'Mike Wenstrom');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `M_ID` int(11) NOT NULL,
  `Account` varchar(20) DEFAULT NULL,
  `Passwd` varchar(255) DEFAULT NULL,
  `M_Name` varchar(10) DEFAULT NULL,
  `M_Address` varchar(100) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `M_tel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`M_ID`, `Account`, `Passwd`, `M_Name`, `M_Address`, `Birthday`, `M_tel`) VALUES
(1, 'yun0001', 'pwd001', 'No.1', 'Sec. 3, University Road, Douliu City, Yunlin County', '1994-01-08', '02-2222-2222'),
(2, 'yun0002', 'pwd002', 'No.2', 'Sec. 3, University Road, Douliu City, Yunlin County', '1955-10-15', '03-3333-3333'),
(3, 'yun0003', 'pwd003', 'No.3', 'Sec. 3, University Road, Douliu City, Yunlin County', '1993-06-09', '04-4444-4444'),
(4, 'yun0004', 'pwd004', 'No.4', 'Sec. 3, University Road, Douliu City, Yunlin County', '1992-04-15', '05-5555-5555'),
(5, 'yun0005', 'pwd005', 'No.5', 'Sec. 3, University Road, Douliu City, Yunlin County', '1965-04-20', '06-6666-6666'),
(6, 'yun0006', 'pwd006', 'No.6', 'Sec. 3, University Road, Douliu City, Yunlin County', '1990-10-25', '07-7777-7777'),
(7, 'yun0007', 'pwd007', 'No.7', 'Sec. 3, University Road, Douliu City, Yunlin County', '1978-05-08', '08-8888-8888'),
(8, 'yun0008', 'pwd008', 'No.8', 'Sec. 3, University Road, Douliu City, Yunlin County', '1990-08-08', '02-2222-2233'),
(9, 'yun0009', 'yun0009', 'No.9', 'Sec. 3, University Road, Douliu City, Yunlin County', '1991-11-11', '03-3333-3344'),
(10, 'yun0010', 'yun0010', 'No.10', 'Sec. 3, University Road, Douliu City, Yunlin County', '1988-10-10', '05-5533-5555');

-- --------------------------------------------------------

--
-- Table structure for table `odetail`
--

CREATE TABLE `odetail` (
  `OD_ID` int(11) NOT NULL,
  `O_ID` int(11) DEFAULT NULL,
  `B_ID` int(11) DEFAULT NULL,
  `OD_Count` int(3) DEFAULT NULL,
  `OD_Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odetail`
--

INSERT INTO `odetail` (`OD_ID`, `O_ID`, `B_ID`, `OD_Count`, `OD_Amount`) VALUES
(1, 1, 1, 1, 458),
(2, 1, 2, 1, 2533),
(3, 1, 3, 1, 537),
(4, 2, 4, 1, 1366),
(5, 2, 5, 1, 1507),
(6, 2, 6, 1, 1366),
(7, 3, 7, 1, 1201),
(8, 3, 8, 1, 1482),
(9, 3, 9, 1, 199),
(10, 4, 1, 1, 458),
(11, 4, 2, 1, 2533),
(12, 4, 10, 1, 1050),
(13, 5, 3, 1, 537),
(14, 6, 4, 1, 1366),
(15, 7, 5, 1, 1507),
(16, 8, 6, 1, 1366),
(17, 9, 7, 1, 1201),
(18, 10, 8, 3, 4446);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `O_ID` int(11) NOT NULL,
  `M_ID` int(11) DEFAULT NULL,
  `M_Count` int(11) DEFAULT NULL,
  `M_Amount` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`O_ID`, `M_ID`, `M_Count`, `M_Amount`, `Date`) VALUES
(1, 1, 3, 3528, '2018-12-02'),
(2, 2, 3, 4239, '2018-12-02'),
(3, 3, 3, 2882, '2018-12-02'),
(4, 4, 3, 4041, '2018-12-02'),
(5, 5, 1, 537, '2018-12-02'),
(6, 6, 1, 1366, '2018-12-02'),
(7, 7, 1, 1507, '2018-12-02'),
(8, 8, 1, 1366, '2018-12-02'),
(9, 9, 1, 1201, '2018-12-02'),
(10, 10, 3, 4446, '2018-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `P_ID` int(11) NOT NULL,
  `P_name` varchar(100) DEFAULT NULL,
  `P_tel` varchar(15) DEFAULT NULL,
  `P_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`P_ID`, `P_name`, `P_tel`, `P_address`) VALUES
(1, 'OREILLY', '05-5555-5555', 'No.515, Sec. 2, Yunlin Rd., Douliu City, Yunlin County'),
(2, 'Packt Publishing', '03-3333-3333', 'No.17, Fuqian Rd., Hualien City, Hualien County'),
(3, 'Apress', '04-4444-4444', 'No. 99, Sec. 3, Taiwan Boulevard, Xitun Dist., Taichung City'),
(4, 'Cisco Systems', '02-2222-2222', 'No.1, City Hall Rd., Xinyi District, Taipei City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`B_ID`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `odetail`
--
ALTER TABLE `odetail`
  ADD PRIMARY KEY (`OD_ID`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odetail`
--
ALTER TABLE `odetail`
  MODIFY `OD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `publisher` (`P_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `odetail`
--
ALTER TABLE `odetail`
  ADD CONSTRAINT `odetail_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `orderhistory` (`O_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `odetail_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `book` (`B_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD CONSTRAINT `orderhistory_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `member` (`M_ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
