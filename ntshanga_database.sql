-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 07:47 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntshanga_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountId` int(11) NOT NULL,
  `isConfirmed` tinyint(1) NOT NULL,
  `isLocked` tinyint(1) NOT NULL,
  `accountTypeId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountId`, `isConfirmed`, `isLocked`, `accountTypeId`, `lastUpdate`, `Username`, `Password`) VALUES
(19, 0, 0, 1, '2018-02-14 11:27:39', 'sethucarter@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `accounttype`
--

CREATE TABLE `accounttype` (
  `AccountTypeId` int(11) NOT NULL,
  `typename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `accounttype`
--

INSERT INTO `accounttype` (`AccountTypeId`, `typename`) VALUES
(1, 'EmployeeAccount'),
(2, 'CustomerAccount');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressId` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalCode` varchar(4) NOT NULL,
  `cityId` int(11) NOT NULL,
  `CustomerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerId` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `aticleId` int(11) NOT NULL,
  `description` varchar(10000) CHARACTER SET ucs2 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article_like`
--

CREATE TABLE `article_like` (
  `article_likeId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityId` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `provinceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `city`, `provinceId`) VALUES
(1, 'Alice', 1),
(2, 'Butterworh', 1),
(3, 'East London', 1),
(4, 'Graaf-Reinet', 1),
(5, 'King Williams Town', 1),
(6, 'Mthatha', 1),
(7, 'Port Elizabeth', 1),
(8, 'Alice', 1),
(9, 'Uitenhage', 1),
(10, 'Zwelitsha', 1),
(11, 'Bethlehem', 3),
(12, 'Bloemfontein', 3),
(13, 'Jagersfontein', 3),
(14, 'Odendaalsrus', 3),
(15, 'Kroonstad', 3),
(16, 'Parys', 3),
(17, 'Phuthaditjhaba', 3),
(18, 'Sasolburg', 3),
(19, 'Viginia', 3),
(20, 'Welkom', 3),
(21, 'Benoni', 4),
(22, 'Boksburg', 4),
(23, 'brakpan', 4),
(24, 'Carleton', 4),
(25, 'Germiston', 4),
(26, 'Johannesburg', 4),
(27, 'krugersdorp', 4),
(28, 'Pretoria', 4),
(29, 'Randburg', 4),
(30, 'Randfontein', 4),
(31, 'Roodepoort', 4),
(32, 'Soweto', 4),
(33, 'Spring', 4),
(34, 'vanderbijlpark', 4),
(35, 'Vereeniging', 4),
(36, 'durban', 5),
(37, 'Empangeni', 5),
(38, 'Ladysmith', 5),
(39, 'Newcastle', 5),
(40, 'Pietermaritzburg', 5),
(41, 'Pinetown', 5),
(42, 'Ulundi', 5),
(43, 'Umlazi', 5),
(44, 'Giyani', 6),
(45, 'Lebowakgomo', 6),
(46, 'Musina', 6),
(47, 'Phalaborwa', 6),
(48, 'Polokwane', 6),
(49, 'Seshego', 6),
(50, 'Sibasa', 6),
(51, 'Thabazimbini', 6),
(52, 'Klerksdorp', 2),
(53, 'Mahikenhg', 2),
(54, 'Mmabatho', 2),
(55, 'Potchefstroom', 2),
(56, 'rusternburg', 2),
(57, 'Kimberly', 8),
(58, 'Kuruman', 8),
(59, 'Port Nolloth', 8),
(60, 'Emalahleni', 7),
(61, 'Nelspruit', 7),
(62, 'Secunda', 7),
(63, 'Belville', 9),
(64, 'Cape Town', 9),
(65, 'Constantia', 9),
(66, 'George', 9),
(67, 'Hopefield', 9),
(68, 'Outshoorn', 9),
(69, 'Paarl', 9),
(70, 'Simon\'s Town', 9),
(71, 'Stellenbosch', 9),
(72, 'Swellendam', 9),
(73, 'Worcester', 9);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `description` varchar(10000) CHARACTER SET ucs2 NOT NULL,
  `customerId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_like`
--

CREATE TABLE `comment_like` (
  `comment_likeId` int(11) NOT NULL,
  `commentId` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryId` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `country`) VALUES
(11, 'Brazil'),
(12, 'Chile'),
(9, 'China'),
(6, 'Ethiopia'),
(5, 'Ghana'),
(4, 'Kenya'),
(7, 'Mali'),
(3, 'Namibia'),
(8, 'Somalia'),
(1, 'South Africa'),
(13, 'Spain'),
(10, 'united States of America'),
(2, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNumber` varchar(30) DEFAULT NULL,
  `AddressId` int(11) DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  `accountId` int(11) DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `FirstName`, `LastName`, `ContactNumber`, `AddressId`, `LastUpdate`, `accountId`, `Email`) VALUES
(10, 'Siphosethu', 'Lokwe', NULL, NULL, '2018-02-14 00:00:00', 19, 'sethucarter@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emplNo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Cellphone` varchar(10) NOT NULL,
  `accountId` int(11) NOT NULL,
  `addressId` int(11) NOT NULL,
  `lastUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `jobAppId` int(11) NOT NULL,
  `vacancyId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceId` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `countryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`provinceId`, `province`, `countryId`) VALUES
(1, 'Eastern Cape', 1),
(2, 'North west', 1),
(3, 'Free State ', 1),
(4, 'Gauteng', 1),
(5, 'KwaZulu-Natal', 1),
(6, 'Limpopo', 1),
(7, 'Mpumalanga', 1),
(8, 'Northrn Cape', 1),
(9, 'western Cape', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionId`, `question`) VALUES
(1, 'What is my mothers name ?'),
(2, 'What is my date of birth ?'),
(3, 'Who is my best friend ?'),
(4, 'what year was i born ?'),
(5, 'what is my favorite car ?'),
(6, 'what is my favorite color ?');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `replyId` int(11) NOT NULL,
  `description` int(255) NOT NULL,
  `commentId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reply_like`
--

CREATE TABLE `reply_like` (
  `reply_likeId` int(11) NOT NULL,
  `replyId` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` int(11) NOT NULL,
  `serviceName` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `Description` varchar(1000) CHARACTER SET ucs2 NOT NULL,
  `Price` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `service_orderId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `cartId` int(11) NOT NULL,
  `sessionId` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancyId` int(11) NOT NULL,
  `jobTitle` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `jobDescription` varchar(50) CHARACTER SET ucs2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountId`),
  ADD KEY `accountTypeId` (`accountTypeId`);

--
-- Indexes for table `accounttype`
--
ALTER TABLE `accounttype`
  ADD PRIMARY KEY (`AccountTypeId`),
  ADD KEY `name` (`typename`(4));

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `address` (`address`(4)),
  ADD KEY `postalCode` (`postalCode`),
  ADD KEY `cityId` (`cityId`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerId`),
  ADD UNIQUE KEY `answer` (`answer`),
  ADD KEY `accountId` (`accountId`),
  ADD KEY `questionId` (`questionId`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aticleId`);

--
-- Indexes for table `article_like`
--
ALTER TABLE `article_like`
  ADD PRIMARY KEY (`article_likeId`),
  ADD KEY `articleId` (`articleId`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityId`),
  ADD KEY `city` (`city`(4)),
  ADD KEY `provinceId` (`provinceId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `articleId` (`articleId`);

--
-- Indexes for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD KEY `customerId` (`customerId`),
  ADD KEY `commentId` (`commentId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryId`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD KEY `name` (`FirstName`(4)),
  ADD KEY `lastname` (`LastName`(4)),
  ADD KEY `accountId` (`accountId`),
  ADD KEY `addressId` (`AddressId`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`),
  ADD KEY `lastname` (`lastname`(4)),
  ADD KEY `firstname` (`firstname`(3)),
  ADD KEY `accountId` (`accountId`),
  ADD KEY `addressId` (`addressId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `serviceId` (`serviceId`),
  ADD KEY `cartId` (`cartId`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`jobAppId`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `vacancyId` (`vacancyId`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`provinceId`),
  ADD KEY `province` (`province`(4)),
  ADD KEY `countryId` (`countryId`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`replyId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `commentId` (`commentId`);

--
-- Indexes for table `reply_like`
--
ALTER TABLE `reply_like`
  ADD PRIMARY KEY (`reply_likeId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `replyId` (`replyId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`service_orderId`),
  ADD KEY `serciceId` (`serviceId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `accounttype`
--
ALTER TABLE `accounttype`
  MODIFY `AccountTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `aticleId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_like`
--
ALTER TABLE `article_like`
  MODIFY `article_likeId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `jobAppId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `provinceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `replyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reply_like`
--
ALTER TABLE `reply_like`
  MODIFY `reply_likeId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `service_orderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`accountTypeId`) REFERENCES `accounttype` (`AccountTypeId`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`cityId`);

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`accountId`) REFERENCES `account` (`accountId`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`);

--
-- Constraints for table `article_like`
--
ALTER TABLE `article_like`
  ADD CONSTRAINT `article_like_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `article` (`aticleId`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`provinceId`) REFERENCES `province` (`provinceId`);

--
-- Constraints for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD CONSTRAINT `comment_like_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `comment_like_ibfk_2` FOREIGN KEY (`commentId`) REFERENCES `comment` (`commentId`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`accountId`) REFERENCES `account` (`accountId`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `address` (`addressId`);

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`accountId`) REFERENCES `account` (`accountId`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `address` (`addressId`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `service` (`serviceId`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`cartId`) REFERENCES `shopping_cart` (`cartId`);

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`vacancyId`) REFERENCES `vacancy` (`vacancyId`),
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `province_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `country` (`countryId`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`commentId`) REFERENCES `comment` (`commentId`);

--
-- Constraints for table `reply_like`
--
ALTER TABLE `reply_like`
  ADD CONSTRAINT `reply_like_ibfk_1` FOREIGN KEY (`replyId`) REFERENCES `reply` (`replyId`),
  ADD CONSTRAINT `reply_like_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `service_order`
--
ALTER TABLE `service_order`
  ADD CONSTRAINT `service_order_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `service` (`serviceId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
